-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 10:52 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borrowing-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(30) NOT NULL,
  `unit_brand` varchar(30) NOT NULL,
  `unit_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`unit_id`, `unit_name`, `unit_brand`, `unit_count`) VALUES
(2, 'Monitor', 'Samsung', 7),
(3, 'Aircon-Remote', 'Brand1', 10),
(4, 'Projector-Remote', 'Acer', 4),
(9, 'sdfsdf', 'sdfsdf', 11);

-- --------------------------------------------------------

--
-- Table structure for table `reserved`
--

CREATE TABLE `reserved` (
  `reservation_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `student_id` varchar(8) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserved`
--

INSERT INTO `reserved` (`reservation_id`, `equipment_id`, `student_id`, `status`) VALUES
(13, 1, 'c16-0090', 'returned'),
(14, 1, 'c16-0090', 'returned'),
(15, 1, 'c16-0090', 'returned'),
(16, 1, 'c16-0090', 'returned'),
(17, 1, 'c16-0090', 'returned'),
(18, 1, 'c16-0090', 'returned'),
(19, 1, 'c16-0090', 'returned'),
(20, 1, 'c16-0090', 'returned'),
(21, 1, 'c16-0090', 'returned'),
(22, 5, 'c16-0090', 'returned'),
(23, 5, 'c16-0090', 'returned'),
(24, 2, 'c16-0090', 'reserved'),
(25, 3, 'c16-0090', 'reserved'),
(26, 3, 'c16-0090', 'reserved'),
(27, 3, 'c16-0090', 'returned'),
(28, 3, 'c16-0090', 'returned'),
(29, 4, 'c16-0090', 'returned'),
(30, 1, 'c16-0090', 'returned'),
(31, 1, 'c16-0090', 'returned'),
(32, 1, 'c16-0090', 'returned'),
(33, 1, 'c16-0090', 'reserved'),
(34, 1, 'c16-0090', 'reserved'),
(35, 1, 'c16-0090', 'reserved'),
(36, 1, 'c16-0090', 'reserved'),
(37, 1, 'c16-0090', 'reserved'),
(38, 1, 'c16-0090', 'reserved'),
(39, 1, 'c16-0090', 'reserved'),
(40, 1, 'c16-0090', 'reserved'),
(41, 1, 'c16-0090', 'reserved'),
(42, 1, 'c16-0090', 'reserved'),
(43, 1, 'c16-0090', 'reserved'),
(44, 1, 'c16-0090', 'reserved'),
(45, 1, 'c16-0090', 'reserved'),
(46, 1, 'c16-0090', 'reserved'),
(47, 1, 'c16-0090', 'reserved'),
(48, 1, 'c16-0090', 'reserved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_number` varchar(8) DEFAULT NULL,
  `user_type` varchar(17) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `id_number`, `user_type`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin', 'admin'),
(6, 'Wendale Dy', 'c16-0265', 'student-assistant', 'c16-0265', 'c16-0265'),
(7, 'Shandy Dominguez', 'c16-0090', 'student', 'c16-0090', 'c16-0090'),
(8, 'Jovane Pagsiat', 'c16-0091', 'student', 'c16-0091', 'c16-0091'),
(9, 'Joker Man', 'c16-6969', 'student', 'c16-6969', 'c16-6969');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `reserved`
--
ALTER TABLE `reserved`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reserved`
--
ALTER TABLE `reserved`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
