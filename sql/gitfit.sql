-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 07:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gitfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedID` int(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `instructor` varchar(100) NOT NULL DEFAULT 'Not Assigned',
  `day` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL DEFAULT 'morning',
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedID`, `contact`, `instructor`, `day`, `time`, `name`) VALUES
(5, '0858756', 'John', 'Sunday,Monday,Tuesday,Wednesday,', 'Afternoon', 'Raphael Ortega'),
(11, '096455747', 'Raphael', 'Sunday,Monday,Tuesday,Wednesday,', 'Afternoon', 'John Patrick Sison');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'customer',
  `payment` varchar(100) NOT NULL DEFAULT 'unpaid',
  `status` varchar(100) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `username`, `contact`, `password`, `role`, `payment`, `status`) VALUES
(1, 'test@gmail.com', 'Patrick', 'uname', '092323553', 'password', 'admin', '', ''),
(2, 'customer@gmail.com', 'john', 'customer1', '054364536', 'password', 'customer', 'unpaid', 'inactive'),
(5, 'a@gmail.com', 'Raphael Ortega', 'rapbeh', '0858756', '123456', 'customer', 'unpaid', 'inactive'),
(6, 'b@fgmail.com', 'Zeph Ongyaco', 'z', '09663279733', '123456', 'customer', 'paid', 'active'),
(10, 'johnpatrick.sison.cics@ust.edu.ph', 'John Patrick Sison', 'jp123', '096455747', '123456', 'customer', 'unpaid', 'inactive'),
(11, 'johnpatrick.sison.cics@ust.edu.ph', 'John Patrick Sison', 'jp123', '096455747', '123456', 'customer', 'unpaid', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedID`,`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
