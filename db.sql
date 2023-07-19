-- Create the database
CREATE DATABASE roomieconnect;

-- Switch to the newly created database
USE roomieconnect;

-- Create the table for user profiles
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  institution VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE roommateMatching (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT REFERENCES users(id),
    name VARCHAR(255) NOT NULL,
    age INT,
    gender ENUM('Male', 'Female', 'Non-Binary', 'Other', 'Prefer Not to Say'),
    pronouns VARCHAR(50),
    level_education ENUM('Undergrad', 'Masters', 'PhD.', 'Semester Off', 'Work Term'),
    study_environment VARCHAR(100),
    study_hours VARCHAR(100),
    academic_goals VARCHAR(255),
    cleanliness_preference ENUM('Neat', 'Average', 'Messy'),
    sleeping_schedule ENUM('Early Bird', 'Late Riser', 'Night Owl'),
    noise_tolerance ENUM('Low', 'Medium', 'High'),
    extroversion_level ENUM('Introvert', 'Ambivert', 'Extrovert'),
    social_activities VARCHAR(255),
    social_participation ENUM('Yes', 'No', 'Sometimes'),
    location_preference VARCHAR(100),
    living_space ENUM('Apartment', 'Dormitory'),
    room_type ENUM('Shared', 'Private'),
    lease_duration VARCHAR(100),
    compatibility_preferences VARCHAR(255),
    hobbies_interests VARCHAR(255),
    dietary_preferences VARCHAR(255),
    smoking_habits ENUM('Non-Smoker', 'Occasional Smoker', 'Regular Smoker'),
    drinking_habits ENUM('Non-Drinker', 'Social Drinker', 'Regular Drinker'),
    pet_preferences ENUM('No Pets', 'Open to Pets', 'I own a Pet'),
    rent_budget DECIMAL(10, 2),
    communication_style VARCHAR(255),
    deal_breakers VARCHAR(255),
    additional_info TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);