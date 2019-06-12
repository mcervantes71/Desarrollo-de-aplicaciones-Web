-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2019 at 09:04 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `Regalos`
--

CREATE TABLE `Regalos` (
  `id_regalo` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` varchar(6) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `apartado` tinyint(1) NOT NULL DEFAULT '0',
  `quien` varchar(20) DEFAULT NULL,
  `lista` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Regalos`
--

INSERT INTO `Regalos` (`id_regalo`, `nombre`, `descripcion`, `precio`, `imagen`, `apartado`, `quien`, `lista`) VALUES
(1, 'Lavadora', 'super lavadora ', '3500', 'pictures/lavadora.jpg', 0, NULL, 1),
(2, 'Planchaa', 'asdfasdfasdfasdf', '550', 'pictures/plancha.jpeg', 0, '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Regalos`
--
ALTER TABLE `Regalos`
  ADD PRIMARY KEY (`id_regalo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Regalos`
--
ALTER TABLE `Regalos`
  MODIFY `id_regalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
