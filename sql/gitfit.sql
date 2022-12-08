-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 04:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
  `id` int(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `instructor` varchar(100) NOT NULL DEFAULT 'NotAssigned',
  `day` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL DEFAULT 'morning',
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `contact`, `instructor`, `day`, `time`, `name`) VALUES
(5, '0858756', 'John', 'Sunday,Monday,Wednesday,Thursday,', 'Afternoon', 'john'),
(21, '0858756', 'Zeph', 'Monday,Wednesday,Friday,Saturday,', 'Afternoon', 'john'),
(22, '0858756', 'NotAssigned', 'Monday,Wednesday,Friday,Saturday,', 'Afternoon', 'john'),
(23, '0858756', 'NotAssigned', 'Monday,Wednesday,Friday,Saturday,', 'Afternoon', 'john'),
(24, '0858756', 'NotAssigned', 'Sunday,Monday,Tuesday,Wednesday,', 'Afternoon', 'john'),
(25, '09663279733', 'NotAssigned', 'Sunday,Monday,Tuesday,Wednesday,', 'Evening', 'Zeph Ongyaco');

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
  `payment` varchar(10) NOT NULL DEFAULT 'unpaid',
  `status` varchar(10) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `username`, `contact`, `password`, `role`, `payment`, `status`) VALUES
(1, 'test@gmail.com', 'Patrick', 'uname', '092323553', 'password', 'admin', 'unpaid', 'inactive'),
(5, 'a@gmail.com', 'John', 'rapbeh', '0858756', '123456', 'customer', 'paid', 'inactive'),
(6, 'raphael@gmail.com', 'Raphael Ortega', 'Raport', '1234567890', 'admin123', 'customer', 'unpaid', 'inactive'),
(7, 'John@gmail.com', 'John Sison', 'Pat', '09876543211', '123456', 'customer', 'unpaid', 'inactive'),
(8, 'zeph@gmail.com', 'Zeph Ongyaco', 'Zeph', '09876543211', '123456', 'customer', 'unpaid', 'inactive'),
(9, 'shane@gmail.com', 'Shane Gases', 'Shane', '0987654321', '123456', 'customer', 'unpaid', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`,`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
