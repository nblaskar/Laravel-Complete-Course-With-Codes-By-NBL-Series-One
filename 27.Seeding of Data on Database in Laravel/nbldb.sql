-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 06:13 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmpny`
--

CREATE TABLE `cmpny` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `cmpnt_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmpny`
--

INSERT INTO `cmpny` (`id`, `name`, `cmpnt_id`) VALUES
(10, 'Google', '1'),
(11, 'appe', '2');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`) VALUES
(101, 'Wakir', 'Wendi.Blake@xyz.com'),
(102, 'Blake@xyz.com', 'Blake'),
(103, 'Wedi', 'Wendi@xyz.com'),
(105, 'WendiBlakkk', 'Wenake@xyz.com'),
(107, 'Firdaus', 'firdaus@gmail.com'),
(108, 'MZWMqatCWP', 't83KP0D3Wx@gmail.com'),
(109, 'RldfYQ97Im', 'XVTHy5E4y0@gmail.com'),
(110, 'uDQKE92q1W', 'yj5fkGZx0o@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stdnts`
--

CREATE TABLE `stdnts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stdnts`
--

INSERT INTO `stdnts` (`id`, `name`, `email`) VALUES
(1, 'Rahul', 'r123@gmail.com'),
(2, 'Parneet', 'pran@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmpny`
--
ALTER TABLE `cmpny`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdnts`
--
ALTER TABLE `stdnts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmpny`
--
ALTER TABLE `cmpny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `stdnts`
--
ALTER TABLE `stdnts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
