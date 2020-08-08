-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 10:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` int(100) NOT NULL,
  `shop_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `bustop` text CHARACTER SET utf8 NOT NULL,
  `junction` text CHARACTER SET utf8 NOT NULL,
  `shop_line` int(100) NOT NULL,
  `reg_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `reg_acc_no` int(10) NOT NULL,
  `reg_username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `more` text CHARACTER SET utf8 NOT NULL,
  `City` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `shop_name`, `bustop`, `junction`, `shop_line`, `reg_name`, `reg_acc_no`, `reg_username`, `more`, `City`) VALUES
(23, 'Stephen', '04bde8f94aeeff02fe0b27084beb0e25', 'stephan@gmail.com', 2147483647, 'Mama B', 'National', 'akebaje', 2147483647, '', 0, '', 'food stuffs', ''),
(24, 'Amuroko', 'b1c828b99e95960f78f2fec0b3ea7f8e', 'kemisola@gmail.com', 2147483647, 'David', 'AAUA', 'Akebaje', 2147483647, '', 0, '', 'we repair phone and deal with any type of phone', ''),
(25, 'tolulope', '44fc8f1944e23c08f19984f299bd9354', 'ola@gmail.com', 2147483647, 'God Help Us', 'abeu junction', 'oka akoko bustop', 2147483647, '', 0, '', 'we smuggle drugs,', ''),
(27, 'Olami', '6734a3f44096a3f33cd88753ca619c2f', 'bb@gmail.com', 2147483647, '', '', '', 0, '', 0, '', '', ''),
(31, 'Sholly0123', '5fcdb65870982d95827ad970aa1dbaf6', 'stephanyemmitty@gmail.com', 2147483647, '', '', '', 0, '', 0, '', '', ''),
(33, 'me', 'ab86a1e1ef70dff97959067b723c5c24', 'me@gmail.com', 90, 'Hollamie', 'OBA', 'Oka ', 2147483647, '', 0, '', 'WE SELL DRINKS IN CARTON', ''),
(34, 'olami', '9d5da4f31eddc5eea1c1222da1d7ff12', 'ol@gmail.com', 90, '', '', '', 0, '', 0, '', '', ''),
(35, 'David', 'b22125868f723fb7aabeafdd51366feb', 'david@gmail.com', 2147483647, 'mama b', 'Akoom', 'Hol-up', 2147483647, '', 0, '', 'Latest shoe and wears', ''),
(36, 'Try1', '080f651e3fcca17df3a47c2cecfcb880', 'Try@gmail.com', 90, '', '', '', 0, '', 0, '', '', ''),
(37, 'Admin', '04bde8f94aeeff02fe0b27084beb0e25', 'Admin@gmail.com', 2147483647, '', '', '', 0, '', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
