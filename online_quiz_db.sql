-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 02:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

-- Database: `online_quiz_db`

-- --------------------------------------------------------

-- Table structure for table `aptitude`
CREATE TABLE `aptitude` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` text NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample data into `aptitude`
INSERT INTO `aptitude` (`quiz_question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`) VALUES
('What is the capital of France?', 'Berlin', 'Madrid', 'Paris', 'Rome', 'C'),
('Which is the largest planet in our solar system?', 'Earth', 'Mars', 'Jupiter', 'Venus', 'C'),
('Who developed the theory of relativity?', 'Newton', 'Einstein', 'Galileo', 'Tesla', 'B'),
('What is the square root of 64?', '6', '8', '10', '12', 'B'),
('What is the chemical symbol for water?', 'O2', 'H2O', 'CO2', 'H2O2', 'B'),
('Which element has the chemical symbol Fe?', 'Iron', 'Copper', 'Gold', 'Silver', 'A'),
('What is the boiling point of water in Celsius?', '100', '90', '110', '120', 'A'),
('What is the largest continent?', 'Africa', 'Asia', 'Europe', 'North America', 'B'),
('Who invented the telephone?', 'Einstein', 'Tesla', 'Bell', 'Graham', 'C'),
('Which gas do plants need for photosynthesis?', 'Oxygen', 'Carbon Dioxide', 'Nitrogen', 'Helium', 'B');

-- Table structure for table `english`
CREATE TABLE `english` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` text NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample data into `english`
INSERT INTO `english` (`quiz_question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`) VALUES
('What is the synonym of "elated"?', 'Happy', 'Sad', 'Angry', 'Confused', 'A'),
('Choose the correct word: "She ______ a new dress yesterday."', 'buys', 'buyed', 'bought', 'buy', 'C'),
('Which of these is a synonym of "difficult"?', 'Hard', 'Easy', 'Simple', 'None of the above', 'A'),
('What does "benevolent" mean?', 'Kind', 'Cruel', 'Strong', 'Weak', 'A'),
('Which word is spelled correctly?', 'Recieve', 'Receive', 'Recive', 'Receeve', 'B'),
('Which of these means "the act of moving"?', 'Motion', 'Emotion', 'Promotion', 'Notion', 'A'),
('Which word means "in a state of sleep"?', 'Dormant', 'Active', 'Lively', 'Wakeful', 'A'),
('Which of these is a homophone for "right"?', 'Rite', 'Wright', 'Write', 'All of the above', 'D'),
('Which of these words is a noun?', 'Jump', 'Jumping', 'Jumps', 'Jumper', 'D'),
('What is the antonym of "brave"?', 'Timid', 'Fearless', 'Strong', 'None of the above', 'A');

-- Table structure for table `programming`
CREATE TABLE `programming` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` text NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample data into `programming`
INSERT INTO `programming` (`quiz_question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`) VALUES
('Which of these is a programming language?', 'HTML', 'JavaScript', 'CSS', 'SQL', 'B'),
('What is the correct syntax for a while loop in JavaScript?', 'while (condition) {}', 'for (condition) {}', 'if (condition) {}', 'loop (condition) {}', 'A'),
('Which of these is used for styling in web development?', 'HTML', 'CSS', 'JavaScript', 'Python', 'B'),
('Which function is used to declare a variable in JavaScript?', 'var', 'let', 'const', 'All of the above', 'D'),
('What does CSS stand for?', 'Cascading Style Sheets', 'Creative Style Sheets', 'Cascading Super Sheets', 'None of the above', 'A'),
('What does the "alert" function do in JavaScript?', 'Displays a message', 'Changes a webpage element', 'Does math calculations', 'None of the above', 'A'),
('Which HTML tag is used to display an image?', '<img>', '<image>', '<picture>', '<src>', 'A'),
('What is the correct way to write a function in JavaScript?', 'function name()', 'def name()', 'function:name()', 'def:name()', 'A'),
('Which operator is used for comparison in JavaScript?', '==', '=', '===', '!', 'C'),
('What is the default value of a variable in JavaScript?', 'null', 'undefined', '0', 'false', 'B');

-- Table structure for table `gk`
CREATE TABLE `gk` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_answer` text NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample data into `gk`
INSERT INTO `gk` (`quiz_question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`) VALUES
('Who is the current president of the USA?', 'Joe Biden', 'Barack Obama', 'Donald Trump', 'George Bush', 'A'),
('What is the capital of Japan?', 'Tokyo', 'Osaka', 'Kyoto', 'Hiroshima', 'A'),
('Which of these countries is not in Africa?', 'Egypt', 'Kenya', 'India', 'Nigeria', 'C'),
('What is the largest ocean in the world?', 'Atlantic Ocean', 'Indian Ocean', 'Southern Ocean', 'Pacific Ocean', 'D'),
('Which country is known as the Land of the Rising Sun?', 'China', 'India', 'Japan', 'South Korea', 'C'),
('Which planet is known as the Red Planet?', 'Venus', 'Mars', 'Jupiter', 'Saturn', 'B'),
('Which continent is known as the Dark Continent?', 'Africa', 'Asia', 'Europe', 'America', 'A'),
('Who was the first man to walk on the moon?', 'Buzz Aldrin', 'Neil Armstrong', 'Yuri Gagarin', 'John Glenn', 'B'),
('What is the largest desert in the world?', 'Sahara', 'Arabian', 'Kalahari', 'Antarctic', 'D'),
('Which is the longest river in the world?', 'Amazon River', 'Nile River', 'Yangtze River', 'Mississippi River', 'B');

-- Table structure for table `tbl_result` (Updated)
CREATE TABLE `tbl_result` (
  `tbl_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_taker` text NOT NULL,
  `registration_number` VARCHAR(20) NOT NULL,
  `section_name` VARCHAR(50) NOT NULL,
  `total_score` int(11) NOT NULL,
  `date_taken` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rating` int(1) NOT NULL,
  PRIMARY KEY (`tbl_result_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample data into `tbl_result`
INSERT INTO `tbl_result` (`quiz_taker`, `registration_number`, `section_name`, `total_score`, `date_taken`) VALUES
('John Doe', '123456', 'A1', 85, '2024-11-17 15:00:00'),
('Jane Smith', '789012', 'B2', 90, '2024-11-17 16:00:00');

-- Table structure for table `users`
CREATE TABLE `users` (
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `registration_number` VARCHAR(20) NOT NULL,
  `section_name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample user into `users`
INSERT INTO `users` (`name`, `username`, `password`, `registration_number`, `section_name`) VALUES
('Sample User', 'sample_user', '$2y$10$exampleHashedPasswordHere', '123456789', 'A1');

COMMIT;
