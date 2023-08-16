-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 07:39 AM
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
-- Database: `id_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `id_no` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `exp_date` varchar(20) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`sno`, `name`, `grade`, `id_no`, `email`, `phone`, `address`, `dob`, `date`, `exp_date`, `image`) VALUES
(722, 'Rishika Biswas', NULL, '201302', 'rishi@gmail.com]', 'xxxxxxxxxx', 'Sector - 15, Noida', '2003-12-12', '2021-12-13 09:49:30', '2090-12-12', 'assets/uploads/images.jpg'),
(723, 'Coding Cush', NULL, '234567890876', 'codingcush@gmail.com]', '0123456789', 'New Delhi, India', '2021-12-22', '2021-12-14 10:48:54', '2023-03-15', 'assets/uploads/1623328813617.png');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_no` varchar(15) NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=724;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
