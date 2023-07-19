<?php
    include 'connect.php';
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($query);
    $stmt->execute(array(':email' => $email, ':password' => $password));
    
    $user = $stmt->fetch(PDO::FETCH_NUM);
    
    $count = $stmt->rowCount();
    if($count > 0) {
        echo $user[2];
        $_SESSION['userID'] = $user[0];
        $_SESSION['name'] = $user[1];
        $_SESSION['institution'] = $user[2];
        $_SESSION['email'] = $user[3];
        $_SESSION['password'] = $user[4];
        echo 'Login Successful';
        header("location: ./profile.php");
    } else {
        $message = '<label>Incorrect Login</label>';
        echo 'Login Failed';
    }

?>