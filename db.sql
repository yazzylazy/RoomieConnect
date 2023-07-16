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
