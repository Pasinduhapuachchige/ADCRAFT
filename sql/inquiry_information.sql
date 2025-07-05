-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 08:46 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiry_information`
--
ALTER TABLE `inquiry_information`
  ADD PRIMARY KEY (`Inquiry_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiry_information`
--
ALTER TABLE `inquiry_information`
  MODIFY `Inquiry_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
