-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 05:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `Branch` text NOT NULL,
  `Day` text NOT NULL,
  `09:00-10:00` text NOT NULL,
  `10:00-11:00` text NOT NULL,
  `11:00-12:00` text NOT NULL,
  `12:00-01:00` text NOT NULL,
  `01:00-02:00` text NOT NULL,
  `02:00-03:00` text NOT NULL,
  `03:00-04:00` text NOT NULL,
  `04:00-05:00` text NOT NULL,
  `05:00-06:00` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`Branch`, `Day`, `09:00-10:00`, `10:00-11:00`, `11:00-12:00`, `12:00-01:00`, `01:00-02:00`, `02:00-03:00`, `03:00-04:00`, `04:00-05:00`, `05:00-06:00`) VALUES
('AIML', 'Monday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIML', 'Tuesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIML', 'Wednesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIML', 'Thursday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIML', 'Friday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIR', 'Monday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIR', 'Tuesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIR', 'Wednesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIR', 'Thursday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIR', 'Friday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIDS', 'Monday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIDS', 'Tuesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIDS', 'Wednesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIDS', 'Thursday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIDS', 'Friday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIML', 'Monday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIML', 'Tuesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIML', 'Wednesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIML', 'Thursday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIML', 'Friday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIR', 'Monday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIR', 'Tuesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIR', 'Wednesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIR', 'Thursday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIR', 'Friday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIDS', 'Monday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIDS', 'Tuesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIDS', 'Wednesday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIDS', 'Thursday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra'),
('AIDS', 'Friday', '3240121 Introduction to AI and Robotics', '3270121 Introduction to AI & Data Science', '3240122/3270122/3280122 Problem Solving and Programming', 'Lunch', '', '3280121 Introduction to AI & Machine Learning', '3240123/3270123/3280123 Digital Logic Design', '3000001 Engineering Physics', '3250100 Linear Algebra');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
