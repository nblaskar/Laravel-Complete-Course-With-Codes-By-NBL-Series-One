-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 11:48 PM
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
(1001, 'John Mathew', 'John.Mathew@xyz.com'),
(1002, 'Parker', 'Jim.Parker@xyz.com'),
(1001, 'John Mathew', 'John.Mathew@xyz.com'),
(1002, 'Parker', 'Jim.Parker@xyz.com'),
(1003, 'Sophia', '	Sophia.Ran@xyz.com'),
(1004, 'Wendi', 'Wendi.Blake@xyz.com'),
(1003, 'Sophia', '	Sophia.Ran@xyz.com'),
(1004, 'Wendi', 'Wendi.Blake@xyz.com'),
(1, 'Nur', 'nurbahar.ssm@gmail.com'),
(1, 'Nur', 'nurbahar.ssm@gmail.com'),
(1, 'Nur', 'nurbahar.ssm@gmail.com'),
(1, 'Nur', 'nurbahar.ssm@gmail.com'),
(2, 'RAM DULAL ROY', 'nurbahar.rist@gmail.com'),
(3, 'Nur Bahar', 'g.b.alom123@gmail.com'),
(4, 'TULARGRAM', 'nurbahar.ssm@gmail.com'),
(101, 'nbl', '123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `roll`, `address`) VALUES
('nur', 101, 'silchar'),
('bahar', 102, 'dubai'),
('Laskar', 103, 'Canada');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
