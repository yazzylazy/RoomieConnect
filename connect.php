<?php
// Database configuration
$host = "localhost"; // Change this if your database is hosted on a different server
$dbname = "roomieconnect"; // Change this if you used a different database name
$username = "root"; // Change this if your MySQL username is different
$password = ""; // Change this if your MySQL password is different

// Create a database connection
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
