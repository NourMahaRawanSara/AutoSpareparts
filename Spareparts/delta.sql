-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 07:45 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

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
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`ID`, `Name`) VALUES
(1, 'Euro'),
(2, 'Turkish Lira'),
(3, 'Renminbi');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID` int(255) NOT NULL,
  `UserID` int(255) NOT NULL,
  `paymentMethodID` int(255) NOT NULL,
  `totalprice` int(255) NOT NULL,
  `OrderTypeID` int(255) NOT NULL,
  `DateOfOrder` date NOT NULL,
  `CurrencyID` int(255) NOT NULL,
  `TaxesID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ID`, `UserID`, `paymentMethodID`, `totalprice`, `OrderTypeID`, `DateOfOrder`, `CurrencyID`, `TaxesID`) VALUES
(1, 3, 1, 22, 1, '2018-03-06', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `ID` int(255) NOT NULL,
  `SparePartID` int(255) NOT NULL,
  `OrderID` int(255) NOT NULL,
  `DateOfDelivery` date NOT NULL,
  `Quantity` int(255) NOT NULL,
  `PricePerItem` varchar(255) NOT NULL,
  `OrderStatusID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`ID`, `SparePartID`, `OrderID`, `DateOfDelivery`, `Quantity`, `PricePerItem`, `OrderStatusID`) VALUES
(1, 1, 1, '2018-04-10', 4, '6EGP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `ID` int(255) NOT NULL,
  `StatusID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`ID`, `StatusID`) VALUES
(1, 1),
(3, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ordertype`
--

CREATE TABLE `ordertype` (
  `ID` int(255) NOT NULL,
  `IsOnline` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertype`
--

INSERT INTO `ordertype` (`ID`, `IsOnline`) VALUES
(1, 1),
(2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`ID`, `Name`) VALUES
(1, 'cash'),
(2, 'CreditCard'),
(3, 'Installments'),
(4, 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `ID` int(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `OEM` varchar(255) NOT NULL,
  `InternalCode` varchar(255) NOT NULL,
  `CompanyProviderCode` varchar(255) NOT NULL,
  `IsCorrupted` tinyint(1) NOT NULL,
  `CountryOfOrigin` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`ID`, `Picture`, `OEM`, `InternalCode`, `CompanyProviderCode`, `IsCorrupted`, `CountryOfOrigin`, `Price`) VALUES
(1, 'image/jpg', '1726355fh', '123j', '321j', 0, 'Turkey', 'EGP200');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`ID`, `Name`) VALUES
(1, 'Pending'),
(2, 'Delivered'),
(3, 'On Way');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `ID` int(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`ID`, `Type`) VALUES
(1, 'Sales Tax'),
(2, 'Income Tax');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `UserTypeID` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Fname`, `Lname`, `Mobile`, `DateOfBirth`, `Email`, `UserTypeID`, `Username`, `password`) VALUES
(1, 'a', 'a', 'a', '1998-01-01', 'a@a.com', 1, 'a', '123'),
(2, 'nour', 'ehab', '012222222', '1998-01-01', 'nour@miu.com', 2, 'katy', '123'),
(3, 'katy', 'tadros', '012', '1998-01-01', 'a@a.com', 3, 'nour', 'nour'),
(4, 'katy', 'tadros', '012', '1998-01-01', 'a@a.com', 4, 'nour', 'nour');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `ID` int(255) NOT NULL,
  `Position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`ID`, `Position`) VALUES
(1, 'Admin'),
(2, 'CEO'),
(3, 'Sales'),
(4, 'Inventory'),
(5, 'Accountant'),
(6, 'Delivery'),
(7, 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID_FK` (`UserID`),
  ADD KEY `OrderTypeID_FK` (`OrderTypeID`),
  ADD KEY `CurrencyID_FK` (`CurrencyID`),
  ADD KEY `TaxesID_FK` (`TaxesID`),
  ADD KEY `PaymentMethodID_FK` (`paymentMethodID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SparePart_ID_FK` (`SparePartID`),
  ADD KEY `OrderID_FK` (`OrderID`),
  ADD KEY `OrderStatusID_FK` (`OrderStatusID`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `StatusID_FK` (`StatusID`);

--
-- Indexes for table `ordertype`
--
ALTER TABLE `ordertype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserTypeID` (`UserTypeID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ordertype`
--
ALTER TABLE `ordertype`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `CurrencyID_FK` FOREIGN KEY (`CurrencyID`) REFERENCES `currency` (`ID`),
  ADD CONSTRAINT `OrderTypeID_FK` FOREIGN KEY (`OrderTypeID`) REFERENCES `ordertype` (`ID`),
  ADD CONSTRAINT `PaymentMethodID_FK` FOREIGN KEY (`paymentMethodID`) REFERENCES `paymentmethod` (`ID`),
  ADD CONSTRAINT `TaxesID_FK` FOREIGN KEY (`TaxesID`) REFERENCES `taxes` (`ID`),
  ADD CONSTRAINT `UserID_FK` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `OrderID_FK` FOREIGN KEY (`OrderID`) REFERENCES `order` (`ID`),
  ADD CONSTRAINT `OrderStatusID_FK` FOREIGN KEY (`OrderStatusID`) REFERENCES `orderstatus` (`ID`),
  ADD CONSTRAINT `SparePart_ID_FK` FOREIGN KEY (`SparePartID`) REFERENCES `sparepart` (`ID`);

--
-- Constraints for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD CONSTRAINT `StatusID_FK` FOREIGN KEY (`StatusID`) REFERENCES `status` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `usertypeid_FK` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
