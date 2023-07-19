<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the form data (you can add more validation as needed)
    $name = htmlspecialchars($_POST["name"]);
    $age = intval($_POST["age"]);
    $gender = $_POST["gender"];
    $pronouns = htmlspecialchars($_POST["pronouns"]);
    $level_education = $_POST["level_education"];
    $study_environment = htmlspecialchars($_POST["study_environment"]);
    $study_hours = htmlspecialchars($_POST["study_hours"]);
    $academic_goals = htmlspecialchars($_POST["academic_goals"]);
    // (Continue adding more variables for other form fields)

    // Database connection details
    $servername = "your_database_servername";
    $username = "your_database_username";
    $password = "your_database_password";
    $dbname = "your_database_name";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query to insert data into the roommateMatching table
    $sql = "INSERT INTO roommateMatching 
            (name, age, gender, pronouns, level_education, study_environment, study_hours, academic_goals, ...)
            VALUES 
            ('$name', $age, '$gender', '$pronouns', '$level_education', '$study_environment', '$study_hours', '$academic_goals', ...)";

    if ($conn->query($sql) === TRUE) {
        echo "Form data submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
