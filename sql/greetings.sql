-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 04:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testweb_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `greetings`
--

CREATE TABLE `greetings` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `greetings`
--

INSERT INTO `greetings` (`id`, `username`, `email`, `message`) VALUES
(63, 'kushan', 'ff@gmail.com', 'Good Service'),
(64, 'kushan', 'qwe@gmail.com', 'very good'),
(66, 'kushan', 'ff@gmail.com', 'gggg'),
(67, 'www', 'qwe@gmail.com', 'qqq'),
(68, 'kushan', 'qwe@gmail.com', 'q1223'),
(69, 'www', 'ffff@gmail.com', 'bbb1'),
(70, 'kushan', 'qwe@gmail.com', '11'),
(71, 'kushan', 'qwe@gmail.com', '444'),
(72, 'www', 'qwe@gmail.com', '888'),
(73, 'qqq', 'ff@gmail.com', '10'),
(80, 'kushan', 'lasan@gmail.com', 'nice work'),
(81, 'lasan', 'qwe@gmail.com', 'very good'),
(82, 'kushan', 'ff@gmail.com', ''),
(83, 'kushan', 'qwe@gmail.com', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `greetings`
--
ALTER TABLE `greetings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `greetings`
--
ALTER TABLE `greetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
