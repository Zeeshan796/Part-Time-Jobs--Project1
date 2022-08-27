-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 10:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeeshandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblrecruiter`
--

CREATE TABLE `tblrecruiter` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrecruiter`
--

INSERT INTO `tblrecruiter` (`ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Password`) VALUES
(3, 'Ali', 'mian', 'Male', 'ali@gmail.com', '46f94c8de14fb36680850768ff1b7f2a');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Password`) VALUES
(1, 'MD', 'Zeeshan', 'Male', 'zeeshan@gmail.com', '46f94c8de14fb36680850768ff1b7f2a'),
(21, 'usman', 'shabbir', '', 'usmanb@gmail.com', '46f94c8de14fb36680850768ff1b7f2a'),
(22, 'Mubashir', 'smith', 'Male', 'mubashir@gmail.com', '46f94c8de14fb36680850768ff1b7f2a'),
(23, 'john', 'shabbir', 'Male', 'john@gmail.com', '46f94c8de14fb36680850768ff1b7f2a'),
(24, 'max', 'min', 'Male', 'max@gmail.com', '46f94c8de14fb36680850768ff1b7f2a'),
(25, 'Rajesh', 'Sir', 'Male', 'rajesdh@gmail.com', '46f94c8de14fb36680850768ff1b7f2a'),
(26, 'asad', 'zeeshan', 'Female', 'asad@gmail.com', '46f94c8de14fb36680850768ff1b7f2a'),
(27, 'Don', 'min', 'Male', 'don@gmail.com', '46f94c8de14fb36680850768ff1b7f2a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblrecruiter`
--
ALTER TABLE `tblrecruiter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblrecruiter`
--
ALTER TABLE `tblrecruiter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
