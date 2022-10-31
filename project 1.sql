-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 04:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------


--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(4) NOT NULL,
  `sub_code` varchar(8) NOT NULL,
  `q1` varchar(3) NOT NULL,
  `q2` int(1) NOT NULL,
  `q3` int(1) NOT NULL,
  `q4` int(1) NOT NULL,
  `q5` int(1) NOT NULL,
  `q6` int(1) NOT NULL,
  `q7` int(1) NOT NULL,
  `q8` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `sub_code`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`) VALUES
(1, '1', 'YES', 4, 4, 4, 4, 3, 4, 5),
(1, '2', 'NO', 4, 4, 4, 4, 4, 3, 5),
(1, '3', 'NO', 4, 4, 4, 4, 4, 4, 4),
(1, '4', 'YES', 5, 5, 3, 4, 5, 4, 4),
(1, '5', 'YES', 4, 4, 3, 4, 5, 4, 3),
(3, '1', 'YES', 5, 4, 4, 5, 5, 4, 4),
(3, '2', 'NO', 4, 5, 4, 4, 4, 5, 4),
(3, '3', 'NO', 4, 4, 4, 3, 4, 5, 5),
(3, '4', 'NO', 5, 5, 3, 4, 4, 5, 3),
(3, '5', 'YES', 3, 4, 5, 5, 5, 5, 1),
(4, '1', 'YES', 5, 5, 3, 4, 4, 3, 3),
(4, '2', 'NO', 4, 4, 5, 4, 4, 4, 2),
(4, '3', 'NO', 4, 4, 5, 5, 4, 5, 5),
(4, '4', 'YES', 4, 4, 5, 4, 5, 4, 4),
(4, '5', 'NO', 5, 5, 3, 3, 4, 4, 5);

-- --------------------------------------------------------


--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(4) NOT NULL,
  `year` int(4) NOT NULL,
  `semester` int(1) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `section` varchar(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `year`, `semester`, `branch`, `section`, `date`) VALUES
(1, 2021, 2, 'ECE', 'A', '2021-11-03'),
(3, 2021, 2, 'ECE', 'A', '2021-11-03'),
(4, 2021, 3, 'CSE', 'A', '2021-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_code` varchar(8) NOT NULL,
  `name` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_code`, `name`) VALUES
('1', 'DBMS'),
('2', 'CN'),
('3', 'TOC'),
('4', 'TC'),
('5', 'ACA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_code`);

--
-- Constraints for dumped tables
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
