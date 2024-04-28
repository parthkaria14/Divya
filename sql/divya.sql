-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 05:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`company_name`, `job_title`, `skills`, `location`, `stipend`) VALUES
('Infosys', 'asst. chef', 'food making skills', 'mumbai', '21000'),
('SBMP', 'watchman', '12th pass', 'Bangalore', '12000'),
('Reliance', 'Coder', 'Programming languages', 'Kolkata', '25000'),
('TCS', 'Manager', 'Graduate', 'Bihar', '25000'),
('kpmg', 'poen', 'Graduate', 'Dehli', '22500'),
('mithibai', 'cleaner', 'cleaning skills', 'shirpur', '26500'),
('TATA', 'clerk', 'xyz', 'abc', '6543');

-- --------------------------------------------------------

--
-- Table structure for table `ruser`
--

CREATE TABLE `ruser` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruser`
--

INSERT INTO `ruser` (`name`, `pass`) VALUES
('hire', '123'),
('xyz', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `scheme_id` int(30) NOT NULL,
  `scheme_name` varchar(256) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scheme_category`
--

CREATE TABLE `scheme_category` (
  `category_id` int(30) NOT NULL,
  `category_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scheme_category`
--

INSERT INTO `scheme_category` (`category_id`, `category_name`) VALUES
(1, 'Business & Entrepreneurship'),
(2, 'Banking, Financial Services and Insurance'),
(3, 'Health & Wellness'),
(4, 'Housing schemes'),
(5, 'Eduction & Learning');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `age` int(3) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `certificate` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `pass`, `gender`, `mobile`, `age`, `disability`, `certificate`) VALUES
('Dev Parekh', '', 'female', 0, 56, 'Lula Langda', ''),
('jeel', 'jeel123', 'female', 2147483647, 20, 'Mental', ''),
('Mehak', 'mehak123', 'male', 2147483647, 21, 'Dumb', ''),
('abc', 'abc', 'male', 1234467890, 34, 'Physical', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`scheme_id`);

--
-- Indexes for table `scheme_category`
--
ALTER TABLE `scheme_category`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scheme_category`
--
ALTER TABLE `scheme_category`
  MODIFY `category_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
