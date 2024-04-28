-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 01:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divya`
--

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `company_name` varchar(30) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `skills` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `stipend` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`company_name`, `job_title`, `skills`, `location`, `stipend`) VALUES
('Infosys', 'asst. chef', 'food making skills', 'mumbai', '21000'),
('SBMP', 'watchman', '12th pass', 'Bangalore', '12000'),
('Reliance', 'Coder', 'Programming languages', 'Kolkata', '25000'),
('TCS', 'Manager', 'Graduate', 'Bihar', '25000'),
('kpmg', 'poen', 'Graduate', 'Dehli', '22500'),
('mithibai', 'cleaner', 'cleaning skills', 'shirpur', '26500');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
