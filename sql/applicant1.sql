-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 08:48 AM
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
-- Database: `testweb_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant1`
--

CREATE TABLE `applicant1` (
  `Id` int(100) NOT NULL,
  `First Name` varchar(100) NOT NULL,
  `Last Name` varchar(100) NOT NULL,
  `E-mail` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Job Position` varchar(100) NOT NULL,
  `Mobile Number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant1`
--

INSERT INTO `applicant1` (`Id`, `First Name`, `Last Name`, `E-mail`, `Password`, `Job Position`, `Mobile Number`) VALUES
(1111, 'Hasini', 'D', 'rashmi@gmail.com', '3456', 'Creative Director', 713216019),
(2001, 'lasan navo', 'navodya', 'hasini@gmail.com', '123', 'Account Executive', 712233456),
(9000, 'Dinithi', 'Perera', 'amila@gmail.com', '123', 'Creative Director', 704216019),
(33453, 'Hasini', 'Gamage', 'amila@gmail.com', '345', 'Marketing Analysist', 704216019),
(67890, 'Dinithi', 'Bidusara', 'rashmi@gmail.com', '3456', 'Marketing Analysist', 712233456),
(123456, 'wq32213', '111111', '23432', '234', '324324', 324324),
(2147483647, 'Rash', 'R', 'rash@gmail.com', '1092', 'Account Executive', 752222222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant1`
--
ALTER TABLE `applicant1`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
