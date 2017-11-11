-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2017 at 07:53 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `manager` varchar(20) DEFAULT NULL,
  `available_annual_leaves` int(11) DEFAULT NULL,
  `available_sick_leaves` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`employee_id`, `first_name`, `last_name`, `email`, `manager`, `available_annual_leaves`, `available_sick_leaves`) VALUES
(1, 'Mario', 'Lopez', 'a_lopez@yahoo.com.mx', 'Rodrigo Perez', 3, 3),
(2, 'Abraham', 'Gallardo', 'a_gallardo@hotmail.com', 'Pedro Luna', 2, 1),
(3, 'Alejandra', 'Ruiz', 'aruiz@hotmail.com', 'Pedro Luna', 3, 3),
(4, 'Mariana', 'Pintadita', 'm_pintadita@hotcakes.com', 'Martin Cervantes', 3, 3),
(5, 'Antonio', 'Ortiz', 'a_ortiz@gmail.com', 'Pedro Luna', 1, 1),
(6, 'Ana', 'Cuevas', 'a_cuevas@gmail.com', 'Rodrigo Perez', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Leave_requests`
--

CREATE TABLE `Leave_requests` (
  `leave_request_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `number_of_days` int(11) DEFAULT NULL,
  `type_of_leave` varchar(20) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Leave_requests`
--

INSERT INTO `Leave_requests` (`leave_request_id`, `employee_id`, `start_date`, `end_date`, `return_date`, `number_of_days`, `type_of_leave`, `status`) VALUES
(1, 1, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Enfermedad', '0'),
(2, 1, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Vacaciones', '1'),
(3, 1, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Enfermedad', '2'),
(4, 1, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Vacaciones', '3'),
(5, 1, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Vacaciones', '4'),
(6, 2, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Enfermedad', '0'),
(7, 2, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Enfermedad', '1'),
(8, 2, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Vacaciones', '2'),
(9, 2, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Vacaciones', '3'),
(10, 2, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Enfermedad', '4'),
(11, 3, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Vacaciones', '0'),
(12, 3, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Vacaciones', '1'),
(13, 3, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Vacaciones', '2'),
(14, 3, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Enfermedad', '3'),
(15, 3, '2017-12-01', '2017-12-04', '2017-12-05', 1, 'Vacaciones', '4');

-- --------------------------------------------------------

--
-- Table structure for table `Refusal_comments`
--

CREATE TABLE `Refusal_comments` (
  `refusal_comment_id` int(11) NOT NULL,
  `leave_request_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `Leave_requests`
--
ALTER TABLE `Leave_requests`
  ADD PRIMARY KEY (`leave_request_id`);

--
-- Indexes for table `Refusal_comments`
--
ALTER TABLE `Refusal_comments`
  ADD PRIMARY KEY (`refusal_comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Employees`
--
ALTER TABLE `Employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Leave_requests`
--
ALTER TABLE `Leave_requests`
  MODIFY `leave_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `Refusal_comments`
--
ALTER TABLE `Refusal_comments`
  MODIFY `refusal_comment_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
