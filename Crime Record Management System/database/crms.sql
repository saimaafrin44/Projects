-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2018 at 10:58 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accused`
--

CREATE TABLE `accused` (
  `accused_id` int(11) NOT NULL,
  `lockup_id` int(11) NOT NULL,
  `accused_name` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `status` text,
  `contact_no` int(11) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `street_no` int(11) DEFAULT NULL,
  `house_no` int(11) DEFAULT NULL,
  `photo` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accused`
--

INSERT INTO `accused` (`accused_id`, `lockup_id`, `accused_name`, `gender`, `age`, `status`, `contact_no`, `state`, `city`, `street_no`, `house_no`, `photo`) VALUES
(2, 0, 'Shaion Ahamed', 'Male', 26, NULL, 1682646625, 'Dhamrai', 'Dhaka', 12, 239, '');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `case_id` int(11) NOT NULL,
  `io_id` int(11) DEFAULT NULL,
  `fir_no` int(11) DEFAULT NULL,
  `other_details` text,
  `case_status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `FIR`
--

CREATE TABLE `FIR` (
  `FIR_no` int(11) NOT NULL,
  `petitioner_id` int(11) NOT NULL,
  `victim_id` int(11) NOT NULL,
  `date_file` date DEFAULT NULL,
  `time_filled` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_incident` date DEFAULT NULL,
  `time_incident` time DEFAULT NULL,
  `place_incident` varchar(20) DEFAULT NULL,
  `accused_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FIR`
--

INSERT INTO `FIR` (`FIR_no`, `petitioner_id`, `victim_id`, `date_file`, `time_filled`, `date_incident`, `time_incident`, `place_incident`, `accused_id`) VALUES
(1, 2, 4, '2018-05-13', '2018-05-12 18:21:43', '2018-05-12', '14:00:00', 'Dhaka Bangladesh', 2);

-- --------------------------------------------------------

--
-- Table structure for table `investigation_officer`
--

CREATE TABLE `investigation_officer` (
  `io_id` int(11) NOT NULL,
  `io_name` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `date_of_hire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investigation_officer`
--

INSERT INTO `investigation_officer` (`io_id`, `io_name`, `gender`, `contact_no`, `rank`, `date_of_hire`) VALUES
(1, 'Demo', 'Male', 1679584270, 0, '2017-01-03'),
(2, 'Demo 2', 'Male', 1672936611, 1, '2015-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `petitioner`
--

CREATE TABLE `petitioner` (
  `petitioner_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `father_name` varchar(40) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `nid` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `street_no` int(11) DEFAULT NULL,
  `house_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petitioner`
--

INSERT INTO `petitioner` (`petitioner_id`, `first_name`, `middle_name`, `last_name`, `father_name`, `gender`, `nid`, `age`, `contact_no`, `state`, `city`, `street_no`, `house_no`) VALUES
(2, 'Md', 'Shakil', 'Hossain', 'Saiful Islam', 'Male', 2147483647, 26, 0, 'Dhamrai', 'Dhaka', 12, 239);

-- --------------------------------------------------------

--
-- Table structure for table `victim`
--

CREATE TABLE `victim` (
  `victim_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `father_name` varchar(20) DEFAULT NULL,
  `nid` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `victim_condition` text,
  `state` varchar(10) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `street_no` int(11) DEFAULT NULL,
  `house_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `victim`
--

INSERT INTO `victim` (`victim_id`, `first_name`, `middle_name`, `last_name`, `father_name`, `nid`, `gender`, `age`, `contact_no`, `victim_condition`, `state`, `city`, `street_no`, `house_no`) VALUES
(4, 'Md', 'Shakil', 'Hossain', 'Saiful Islam', 2147483647, 'Male', 26, 1679684270, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Dhamrai', 'Dhaka', 12, 239);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accused`
--
ALTER TABLE `accused`
  ADD PRIMARY KEY (`accused_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `io_id` (`io_id`),
  ADD KEY `fir_no` (`fir_no`);

--
-- Indexes for table `FIR`
--
ALTER TABLE `FIR`
  ADD PRIMARY KEY (`FIR_no`),
  ADD KEY `petitioner_id` (`petitioner_id`),
  ADD KEY `victim_id` (`victim_id`),
  ADD KEY `accused_id` (`accused_id`);

--
-- Indexes for table `investigation_officer`
--
ALTER TABLE `investigation_officer`
  ADD PRIMARY KEY (`io_id`);

--
-- Indexes for table `petitioner`
--
ALTER TABLE `petitioner`
  ADD PRIMARY KEY (`petitioner_id`);

--
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`victim_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accused`
--
ALTER TABLE `accused`
  MODIFY `accused_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `FIR`
--
ALTER TABLE `FIR`
  MODIFY `FIR_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `investigation_officer`
--
ALTER TABLE `investigation_officer`
  MODIFY `io_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petitioner`
--
ALTER TABLE `petitioner`
  MODIFY `petitioner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `victim`
--
ALTER TABLE `victim`
  MODIFY `victim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`io_id`) REFERENCES `investigation_officer` (`io_id`),
  ADD CONSTRAINT `cases_ibfk_2` FOREIGN KEY (`fir_no`) REFERENCES `FIR` (`FIR_no`);

--
-- Constraints for table `FIR`
--
ALTER TABLE `FIR`
  ADD CONSTRAINT `FIR_ibfk_1` FOREIGN KEY (`petitioner_id`) REFERENCES `petitioner` (`petitioner_id`),
  ADD CONSTRAINT `FIR_ibfk_2` FOREIGN KEY (`victim_id`) REFERENCES `victim` (`victim_id`),
  ADD CONSTRAINT `FIR_ibfk_3` FOREIGN KEY (`accused_id`) REFERENCES `accused` (`accused_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
