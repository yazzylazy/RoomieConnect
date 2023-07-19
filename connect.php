<?php
    // Database configuration
    $host = "localhost"; // Change this if your database is hosted on a different server
    $dbname = "roomieconnect"; // Change this if you used a different database name
    $username = "roomieconnect"; // Change this if your MySQL username is different
    $dbpassword = ""; // Change this if your MySQL password is different

    try {
        // Create connection to database
        $conn = new PDO("mysql:host=localhost;dbname=roomieconnect", $username, $dbpassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
?>