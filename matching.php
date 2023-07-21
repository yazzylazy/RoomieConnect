<?php
  include 'connect.php';
  session_start();
  $userID = $_SESSION['userID'];
  // Get Record information
  try {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $pronouns = $_POST['pronouns'];
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
    $pet_preferences = $_POST['pet_preferences'];
    $compatibility_preferences = $_POST['compatibility_preferences'];
    $hobbies_interests = $_POST['hobbies_interests'];
    $dietary_preferences = $_POST['dietary_preferences'];
    $smoking_habits = $_POST['smoking_habits'];
    $drinking_habits = $_POST['drinking_habits'];
    $extroversion_level = $_POST['extroversion_level'];
    $social_activities = $_POST['social_activities'];
    $social_participation = $_POST['social_participation'];
    $communication_style = $_POST['communication_style'];
    $deal_breakers = $_POST['deal_breakers'];
    $additional_info = $_POST['additional_info'];

    // SQL query to insert user data
    $registration = "INSERT INTO roommateMatching (
      user_id, 
      name, 
      age, 
      gender, 
      pronouns, 
      level_education, 
      study_environment, 
      study_hours, 
      academic_goals, 
      cleanliness_preference, 
      sleeping_schedule, 
      noise_tolerance, 
      extroversion_level, 
      social_activities, 
      social_participation, 
      location_preference, 
      living_space, 
      room_type, 
      lease_duration, 
      compatibility_preferences, 
      hobbies_interests, 
      dietary_preferences, 
      smoking_habits, 
      drinking_habits, 
      pet_preferences, 
      rent_budget, 
      communication_style, 
      deal_breakers, 
      additional_info) 
      VALUES (
        :user_id, 
        :name, 
        :age, 
        :gender, 
        :pronouns, 
        :level_education, 
        :study_environment, 
        :study_hours, 
        :academic_goals, 
        :cleanliness_preference, 
        :sleeping_schedule, 
        :noise_tolerance, 
        :extroversion_level, 
        :social_activities, 
        :social_participation, 
        :location_preference, 
        :living_space, 
        :room_type, 
        :lease_duration, 
        :compatibility_preferences, 
        :hobbies_interests, 
        :dietary_preferences, 
        :smoking_habits, 
        :drinking_habits, 
        :pet_preferences, 
        :rent_budget, 
        :communication_style, 
        :deal_breakers, 
        :additional_info
      )";

    $stmt = $conn->prepare($registration);

    $stmt->execute(array(
      ":user_id" => $userID, 
      ":name" => $name, 
      ":age" => $age, 
      ":gender" => $gender, 
      ":pronouns" => $pronouns, 
      ":level_education" => $level_education, 
      ":study_environment" => $study_environment, 
      ":study_hours" => $study_hours, 
      ":academic_goals" => $academic_goals, 
      ":cleanliness_preference" => $cleanliness_preference, 
      ":sleeping_schedule" => $sleeping_schedule, 
      ":noise_tolerance" => $noise_tolerance, 
      ":extroversion_level" => $extroversion_level, 
      ":social_activities" => $social_activities, 
      ":social_participation" => $social_participation, 
      ":location_preference" => $location_preference,
      ":living_space" => $living_space, 
      ":room_type" => $room_type, 
      ":lease_duration" => $lease_duration, 
      ":compatibility_preferences" => $compatibility_preferences, 
      ":hobbies_interests" => $hobbies_interests, 
      ":dietary_preferences" => $dietary_preferences, 
      ":smoking_habits" => $smoking_habits, 
      ":drinking_habits" => $drinking_habits, 
      ":pet_preferences" => $pet_preferences, 
      ":rent_budget" => $rent_budget, 
      ":communication_style" => $communication_style, 
      ":deal_breakers" => $deal_breakers, 
      ":additional_info" => $additional_info)
    ) or die(print_r($stmt->errorInfo(), true));
    
    header("location: ./profile.php");
    } catch(Exception $e) {
      echo "Exception -> ";
      var_dump($e->getMessage());
    }

?>
