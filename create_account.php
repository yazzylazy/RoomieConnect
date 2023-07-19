<?php
  include 'connect.php';
  session_start();

  $name;
  $institution;
  $email;
  $password;

  // Get Record information
  $name = $_POST['name'];
  $institution = $_POST['institution'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // SQL query to insert user data
  $registration = "INSERT INTO users (name, institution, email, password) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($registration);
  $stmt->execute([$name, $institution, $email, $password]);

  $id = $conn->lastInsertId();

  $_SESSION['userID'] = $id;
  $_SESSION['name'] = $name;
  $_SESSION['institution'] = $institution;
  $_SESSION['email'] = $email;
  $_SESSION['password'] = $password;
  

  header("location: ./profile.php");

?>