-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2026 at 04:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `dob`, `registered_at`, `username`, `password`, `gender`, `address`, `country`) VALUES
(1, 'priya', 'priya2006@gmail.com', '1234567890', '2006-07-05', '2026-06-01 11:21:57', 'priya05@', '$2y$10$mTlJM4R.jMyfjQeIkf/0d.nI0HJNV5cEs9hC0bS9VGotgLLGdR13K', 'Female', '123,trichy', 'India'),
(2, 'priyanga', 'priyanga2007@gmail.com', '0987654321', '2007-05-07', '2026-06-01 11:25:18', 'priyanga07@', '$2y$10$qw2eg8W0DqSIh3HYs3XVwuxYn9gN1stZa6k43OeE1BBWsfwI4TIay', 'Female', '4567,chennai', 'India'),
(3, 'Petriciya angel ', 'angel12@gmail.com', '895746321', '2007-02-05', '2026-06-01 14:44:03', 'angel12@', '$2y$10$mHappg4JaqK1RCaHDf.Mlu1jyhRQe2lUM.V6cJM2KYgFO.0cGnJJO', 'Female', '124,kodaikanal', 'India'),
(4, 'yasika', 'yasi43@gmail.com', '8945632170', '2008-02-15', '2026-06-01 14:50:34', 'yasika@', '$2y$10$WPepeJL.uK9aeIo70/OZ9eKwDl81ZGHnSgY8AmiybmC9ejGj/mGve', 'Female', '9879a,theni', 'India'),
(5, 'anitha', 'ani82@gmail.com', '945632107', '2005-01-18', '2026-06-01 14:51:54', 'anitha1982', '$2y$10$cYoCMOSwkX3ay4QliRYvUOdYXkeIhtmulBFLRT9mS9kN5r.Lqr4.m', 'Female', '25 , melachinthamani Trichy', 'India'),
(6, 'silvi', 'silviya@gmail.com', '8945632198', '2007-09-27', '2026-06-01 14:53:36', 'silvi2', '$2y$10$Qkw8C.zaw8P5lXe0xUR1wur9gCvfzvZNbmxknfgUjz/h/qliEALv.', 'Female', 'mathur trichy', 'India'),
(7, 'petu', 'petu@gmail.com', '8945638956', '2007-09-05', '2026-06-01 14:55:24', 'petu@', '$2y$10$MBbdXUK5x9e0UCngWmkIQOZ9EcEn5ROlkRHcrp1CQ5y4TYfV/BR9y', 'Female', 'kodaikanal', 'India'),
(8, 'abdul', 'abdul05@gmail.com', '9856221485', '2008-09-05', '2026-06-01 14:56:38', 'abdul@', '$2y$10$C7uP3m8AZSiFNBEfZjyymuD4aR.AGcs5WuJX8MCXW/aM6bPfaxlza', 'Male', 'chennai', 'India'),
(9, 'ronaldo', 'cr7@gmail.com', '9360211885', '2006-12-15', '2026-06-01 14:58:04', 'ronaldo7', '$2y$10$1wypfrOfycQSZMOwQud5P.8v0//0A58mUrNut9BA79nXB6HnQ12Vm', 'Male', 'miet trichy', 'India'),
(10, 'joe', 'joe06@gmail.com', '8945632545', '2009-02-21', '2026-06-01 14:59:20', 'joe34', '$2y$10$.RVIubIb9prrozVz54B47OES5NNzoDzL1oIbELjRFo3PfOY4NBgjO', 'Male', 'anna nagar trichy', 'India');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
