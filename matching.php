<?php
include 'connect.php';

$name;
$age;
$gender;
$pronouns;
$institution;
$level_education;
$study_environment;
$study_hours;
$academic_goals;
$location_preference;
$cleanliness_preference;
$sleeping_schedule;
$noise_tolerance;
$living_space;
$room_type;
$lease_duration;
$rent_budget;
$pet_preference;
$compatibility_preferences;
$hobbies_interests;
$dietary_preferences;
$smoking_habits;
$drinking_habits;
$extroversion_level;
$social_activities;
$social_participation;
$deal_breakers;
$additional_info;

try {
  // Get Record information
  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $pronouns = $_POST['pronouns'];
  $institution = $_POST['institution'];
  $level_education = $_POST['level_education'];
  $study_environment = $_POST['study_environment'];
  $study_hours = $_POST['study_hours'];
  $academic_goals = $_POST['academic_goals'];
  $location_preference = $_POST['location_preference'];
  $cleanliness_preference = $_POST['cleanliness_preference'];
  $sleeping_schedule = $_POST['sleeping_schedule'];
  $noise_tolerance = $_POST['noise_tolerance'];
  $living_space = $_POST['living_space'];
  $room_type = $_POST['room_type'];
  $lease_duration = $_POST['lease_duration'];
  $rent_budget = $_POST['rent_budget'];
  $pet_preference = $_POST['pet_preference'];
  $compatibility_preferences = $_POST['compatibility_preferences'];
  $hobbies_interests = $_POST['hobbies_interests'];
  $dietary_preferences = $_POST['dietary_preferences'];
  $smoking_habits = $_POST['smoking_habits'];
  $drinking_habits = $_POST['drinking_habits'];
  $extroversion_level = $_POST['extroversion_level'];
  $social_activities = $_POST['social_activities'];
  $social_participation = $_POST['social_participation'];
  $deal_breakers = $_POST['deal_breakers'];
  $additional_info = $_POST['additional_info'];

  // Create connection to database
  $conn = new PDO("mysql:host=localhost;dbname=roomieconnect", $username, $dbpassword);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";

  // SQL query to insert user data
  $registration = "INSERT INTO roomateMatching (name, institution, email, password) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($registration);
  $stmt->execute([$name, $institution, $email, $password]);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn->close();

?>
