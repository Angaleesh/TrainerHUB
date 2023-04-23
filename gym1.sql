-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2023 at 04:14 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym1`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `age` int NOT NULL,
  `payment_status` varchar(100) NOT NULL DEFAULT 'P',
  `mobileno` bigint NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `trainer_id` varchar(100) NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `name`, `dob`, `age`, `payment_status`, `mobileno`, `pwd`, `trainer_id`) VALUES
(1, 'Angaleesh', '2013-04-02', 20, 'D', 9844938477, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` int NOT NULL AUTO_INCREMENT,
  `amount` int NOT NULL,
  `mem_id` int NOT NULL,
  `month` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `amount`, `mem_id`, `month`, `status`) VALUES
(1, 1500, 1, 'January', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

DROP TABLE IF EXISTS `trainer`;
CREATE TABLE IF NOT EXISTS `trainer` (
  `trainer_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `mobileno` bigint NOT NULL,
  PRIMARY KEY (`trainer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `name`, `pwd`, `time`, `mobileno`) VALUES
(1, 'Jones', 'jones', '05:30:00', 7385179835),
(2, 'Gokul', 'gokul', '06:30:00', 6428374332),
(3, 'Manoj', 'monoj', '06:00:00', 7374837831),
(4, 'Hari', '4', '03:00:00', 9345511307);

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

DROP TABLE IF EXISTS `workout`;
CREATE TABLE IF NOT EXISTS `workout` (
  `workout_id` int NOT NULL AUTO_INCREMENT,
  `w_name` varchar(100) NOT NULL,
  `w1` varchar(100) NOT NULL,
  `w2` varchar(100) NOT NULL,
  `w3` varchar(100) NOT NULL,
  `w4` varchar(100) NOT NULL,
  `w5` varchar(100) NOT NULL,
  `rep1` int NOT NULL,
  `rep2` int NOT NULL,
  `rep3` int NOT NULL,
  `rep4` int NOT NULL,
  `rep5` int NOT NULL,
  `set1` int NOT NULL,
  `set2` int NOT NULL,
  `set3` int NOT NULL,
  `set4` int NOT NULL,
  `set5` int NOT NULL,
  PRIMARY KEY (`workout_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`workout_id`, `w_name`, `w1`, `w2`, `w3`, `w4`, `w5`, `rep1`, `rep2`, `rep3`, `rep4`, `rep5`, `set1`, `set2`, `set3`, `set4`, `set5`) VALUES
(1, 'CHEST', 'Plain Bench Press', 'Incline Dumbell Press', 'Dips', 'Rope Flies', 'Dumbell Pull Over', 15, 15, 15, 15, 15, 4, 4, 4, 5, 3),
(2, 'SHOULDER', 'Military Press', 'Lateral Rise', 'Front Rise', 'Upright Row', 'Shuks', 15, 15, 15, 15, 15, 4, 4, 4, 4, 3),
(3, 'ARMS', 'Single Hand Dumbell Row', 'Hammer Row', 'Inclined Rod', 'Preacher Curl', 'ChinUps', 15, 15, 15, 15, 20, 4, 4, 4, 4, 3),
(4, 'LEG', 'Free Squats', 'Weighted Squats', 'Leg Press', 'Leg Extextion', 'Calf RIse', 100, 15, 15, 15, 20, 1, 3, 3, 5, 3),
(5, 'ABS', 'Crunches', 'Ball Pike', 'Mountain Climber', 'Lye Down Cycling', 'Plank', 15, 15, 15, 15, 180, 1, 1, 1, 1, 1),
(6, 'BACK', 'Pull Down', 'Cable Row', 'Barbel Row', 'Dumbell Row', 'Hyper Extension', 15, 15, 15, 15, 15, 4, 4, 4, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `workout_days`
--

DROP TABLE IF EXISTS `workout_days`;
CREATE TABLE IF NOT EXISTS `workout_days` (
  `w_id` int NOT NULL AUTO_INCREMENT,
  `mem_id` varchar(100) NOT NULL,
  `day1` varchar(100) NOT NULL,
  `day2` varchar(100) NOT NULL,
  `day3` varchar(100) NOT NULL,
  `day4` varchar(100) NOT NULL,
  `day5` varchar(100) NOT NULL,
  `day6` varchar(100) NOT NULL,
  `day7` varchar(100) NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `workout_days`
--

INSERT INTO `workout_days` (`w_id`, `mem_id`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`) VALUES
(1, '1', 'CHEST', 'SHOULDER', 'ARMS', 'REST', 'LEG', 'ABS', 'BACK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
