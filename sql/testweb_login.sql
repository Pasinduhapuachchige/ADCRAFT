-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 08:37 AM
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
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `Announcement_id` varchar(10) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Content` varchar(300) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`Announcement_id`, `Title`, `Content`, `Date`) VALUES
('1', 'esfewrwegwrgd', 'wegwegewgwe', '2024-04-30'),
('2', 'ggg', ' hello', '2024-04-27'),
('3', 'regre', 'rthrtjrjry', '2024-04-30');

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

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mail`, `mobile`, `message`) VALUES
(50, 'abc', 'abc@gmail.com', 456657, 'elh'),
(51, 'abc', 'abc@gmail.com', 4564346, 'bnm'),
(52, 'abc', 'abc@gmail.com', 456, 'bnm'),
(53, 'kbaba', 'jsnjn@gmail.com', 2121, 'new'),
(54, 'pasindu', 'dilmin@gmail.com', 456, 'fgb'),
(55, 'csyfygf', 'jefeoy@gmail.com', 0, 'fewr'),
(56, 'csyfygf', 'jefeoy@gmail.com', 0, 'fewr');

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
(63, 'kushan', 'ff@gmail.com', 'Good Service g'),
(64, 'kushan', 'qwe@gmail.com', 'very good'),
(66, 'kushan', 'ff@gmail.com', 'gggg'),
(67, 'www', 'qwe@gmail.com', 'qqq'),
(68, 'kushan', 'qwe@gmail.com', 'q1223'),
(70, 'kushan', 'qwe@gmail.com', '11'),
(71, 'kushan', 'qwe@gmail.com', '444'),
(72, 'www', 'qwe@gmail.com', '888'),
(73, 'qqq', 'ff@gmail.com', '10'),
(80, 'kushan', 'lasan@gmail.com', 'nice work'),
(81, 'lasan', 'qwe@gmail.com', 'very good'),
(82, 'kushan', 'ff@gmail.com', ''),
(83, 'kushan', 'qwe@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_information`
--

CREATE TABLE `inquiry_information` (
  `Inquiry_ID` int(10) NOT NULL,
  `Ref_Code` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Service_Category` text NOT NULL,
  `User_Preference` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry_information`
--

INSERT INTO `inquiry_information` (`Inquiry_ID`, `Ref_Code`, `Email`, `Service_Category`, `User_Preference`) VALUES
(1, '111', 'abc@gmail.com', 'Social Media Advertising', 'Paragraphs are medium-sized units of writing, long.'),
(2, '123', 'num@gmail.com', 'Social Media Advertising', 'hello'),
(3, '012', '012@gmail.com', 'Advertisement Designs', 'i want this design to be like '),
(4, '112', 'mary@yahoo.com', 'Advertisement Designs', 'hello adcraft'),
(5, '123@', 'saman@gmail.com', 'Social Media Advertising', 'can i get this design like'),
(6, '333', 'num@gmail.com', 'Advertisement Designs', 'hello'),
(8, '222', 'safe@gmail.com', 'Social Media Advertising', 'gregetrghgthtr');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`Id`, `Username`, `Email`, `Phone`, `Password`) VALUES
(6, 'www', 'www@gmail.com', 759874578, '123'),
(7, 'saraa grace', 'sara12@gmail.com', 25, 'sara123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`Announcement_id`);

--
-- Indexes for table `applicant1`
--
ALTER TABLE `applicant1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `greetings`
--
ALTER TABLE `greetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry_information`
--
ALTER TABLE `inquiry_information`
  ADD PRIMARY KEY (`Inquiry_ID`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `greetings`
--
ALTER TABLE `greetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `inquiry_information`
--
ALTER TABLE `inquiry_information`
  MODIFY `Inquiry_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
