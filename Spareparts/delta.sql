-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 03:26 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delta`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID` int(255) NOT NULL,
  `UserID` int(255) NOT NULL,
  `payment-methodID` int(255) NOT NULL,
  `totalprice` int(255) NOT NULL,
  `orderTypeID` varchar(255) COLLATE ucs2_spanish_ci NOT NULL,
  `DateOfOrder` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `Fname` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `Lname` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `DateOfBirth` int(100) NOT NULL,
  `Mobile` int(100) NOT NULL,
  `Email` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `UserTypeID` int(100) NOT NULL,
  `Username` int(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Fname`, `Lname`, `DateOfBirth`, `Mobile`, `Email`, `UserTypeID`, `Username`, `password`) VALUES
(1, 'rawan', 'hossam', 11, 65875, 'rawan@hotmail.com', 0, 12, 233),
(2, 'saw', 'dd', 12, 134, 'gfhgf@', 12, 1223, 36272);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
