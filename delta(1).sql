-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 12:33 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `ID` int(255) NOT NULL,
  `OrderDetailsID` int(255) NOT NULL,
  `SparePartID` int(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Total Amount` varchar(255) NOT NULL,
  `Sub total` int(11) NOT NULL,
  `CommissionID` int(255) NOT NULL,
  `Notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`ID`, `OrderDetailsID`, `SparePartID`, `UserID`, `Total Amount`, `Sub total`, `CommissionID`, `Notes`) VALUES
(1, 1, 1, 1, 'dasd', 0, 1, 'dasd'),
(2, 2, 7, 24, '125', 0, 1, 'bored');

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `ID` int(255) NOT NULL,
  `Percentage` varchar(255) NOT NULL,
  `TotalCommission` varchar(255) NOT NULL,
  `UserID` int(255) NOT NULL,
  `OrderID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`ID`, `Percentage`, `TotalCommission`, `UserID`, `OrderID`) VALUES
(1, '2%', '20', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `countryoforigin`
--

CREATE TABLE `countryoforigin` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countryoforigin`
--

INSERT INTO `countryoforigin` (`ID`, `Name`) VALUES
(1, 'Germany'),
(2, 'Turkey'),
(3, 'China');

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
  `paymentMethodID` int(255) NOT NULL,
  `OrderTypeID` int(255) NOT NULL,
  `DateOfOrder` datetime NOT NULL,
  `CurrencyID` int(255) NOT NULL,
  `TaxesID` int(255) NOT NULL,
  `DeliveryFees` int(11) NOT NULL,
  `BillID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ID`, `paymentMethodID`, `OrderTypeID`, `DateOfOrder`, `CurrencyID`, `TaxesID`, `DeliveryFees`, `BillID`) VALUES
(1, 1, 1, '2018-03-06 00:00:00', 1, 1, 0, 1),
(2, 1, 1, '2018-04-29 00:00:00', 2, 1, 0, 1),
(3, 2, 1, '0000-00-00 00:00:00', 1, 2, 0, 1),
(4, 2, 1, '0000-00-00 00:00:00', 1, 2, 0, 1),
(5, 2, 1, '0000-00-00 00:00:00', 1, 2, 0, 1),
(8, 1, 1, '0000-00-00 00:00:00', 3, 2, 0, 1),
(9, 1, 1, '0000-00-00 00:00:00', 3, 2, 0, 1),
(10, 2, 1, '0000-00-00 00:00:00', 2, 2, 0, 1);

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
  `PricePerItem` float NOT NULL,
  `OrderStatusID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`ID`, `SparePartID`, `OrderID`, `DateOfDelivery`, `Quantity`, `PricePerItem`, `OrderStatusID`) VALUES
(1, 1, 1, '2018-04-10', 4, 6, 1),
(2, 4, 1, '2018-04-09', 3, 4, 1);

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
  `IsOnline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertype`
--

INSERT INTO `ordertype` (`ID`, `IsOnline`) VALUES
(1, 'Online'),
(2, 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `PhysicalID` varchar(255) NOT NULL,
  `HTML` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `Name`, `PhysicalID`, `HTML`) VALUES
(1, 'Contact Us', 'contact.php', '<h1 style=\"text-align: center;\">Delta</h1>\r\n<h1 style=\"text-align: center;\">&nbsp;Auto Spare Parts&nbsp;<img src=\"CDO/plugin/tinymce/plugins/emoticons/img/smiley-money-mouth.gif\" alt=\"money-mouth\" />aaa</h1>\r\n<p>dsbhbshd</p>'),
(2, 'Admin', 'http://localhost/AutoSpareparts/Spareparts/php/AdminLogin.php', ''),
(3, 'Accountant', 'http://localhost/AutoSpareparts/Spareparts/php/AccountantLogin.php', ''),
(4, 'Delivery', 'http://localhost/AutoSpareparts/Spareparts/php/DeliveryLogin.php', ''),
(5, 'Inventory', 'http://localhost/AutoSpareparts/Spareparts/php/inventorylogin.php', ''),
(6, 'Sales', 'http://localhost/AutoSpareparts/Spareparts/php/saleslogin.php', ''),
(7, 'CEO', 'http://localhost/AutoSpareparts/Spareparts/php/ceologin.php', ''),
(8, 'Client', 'http://localhost/AutoSpareparts/Spareparts/php/ClientLogin.php', '');

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
  `Name` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `OEM` varchar(255) NOT NULL,
  `InternalCode` varchar(255) NOT NULL,
  `CompanyProviderCode` varchar(255) NOT NULL,
  `IsCorrupted` tinyint(1) NOT NULL,
  `CountryOfOriginID` int(255) NOT NULL,
  `Price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`ID`, `Name`, `Picture`, `OEM`, `InternalCode`, `CompanyProviderCode`, `IsCorrupted`, `CountryOfOriginID`, `Price`) VALUES
(1, 'Stabilizer BMW', 'StabilizerBMW.jpeg', 'BMW123', 'BMW127ydng', '1BMW', 0, 1, '12222EGP'),
(4, 'Ball Joint', 'balljointg4.jpeg', '12333hujkm', '1222k', '123kk', 0, 1, '12EGP'),
(6, 'Axial Polo', 'Axialpolo.jpeg', '123k', '1222k', 'wesredfvgb5', 0, 1, '12EGP'),
(7, 'Stabilizer BMW', 'StabilizerBMW.jpeg', '123', '13', '23', 0, 1, '564EGP'),
(9, 'Control', 'control.jpeg', '44837839', 'kksee', '55666', 1, 3, '546 EGP'),
(10, 'Control Skoda', 'ControlSkoda.jpeg', 'Skoda22458888941', '554411', '1122233', 0, 3, '200000EGP');

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
(2, 'nour', 'katy', '01288', '1993-02-02', 'katy@gmail.com', 2, 'katy', '123'),
(3, 'katy', 'tadros', '012', '1998-01-01', 'a@a.com', 3, 'nour', 'nour'),
(4, 'maha', 'fayez', '1026908985', '2018-03-14', 'maha@12', 1, 'maha', '123'),
(5, 'katy', 'tadros', '012', '0000-00-00', 'katy@gmail.com', 5, 'accountant', '123'),
(6, 'koko', 'koko', '012222222222222', '0000-00-00', 'koko@koko.com', 7, 'koko', 'koko'),
(8, 'kayu', 'maha', '0122666', '1998-01-01', 'katy@maha.com', 5, 'maaha', 'ksty'),
(12, 'nour', 'zh2t', '012i277382', '2018-04-30', 'nour@miu.com', 7, 'nour', 'salwa'),
(17, 'Madame Fentas', 'Fentas Hanem', '019235235235', '2004-02-12', 'Fentas@mohema.gidan', 2, 'Fentas', 'ana'),
(18, 'Madame Fentas', 'Fentas Hanem', '019235235235', '2004-02-12', 'Fentas@mohema.gidan', 2, 'Fentas', 'ana'),
(19, 'katy', 'nour', '0122222223', '2017-10-06', '123@123.com', 5, 'katy', '123123'),
(22, 'heidi', 'heidi', '01222222222222', '1996-10-23', 'helwa@amoura.com', 7, 'heidi', '3e41d67d5461196c3e784fb6549f7763'),
(23, 'maha', 'msh fhma', '0122222223', '1997-05-25', 'mshfhma@mshfhma', 6, 'msh fhma', 'msh fhma'),
(24, 'Nour', 'Tadros', '01222222', '1998-01-01', 'katy@maha.com', 3, 'q', '123'),
(25, 'Ashraf', 'Amgad', '0153321554', '1960-10-15', 'Ashraf@gmail.com', 4, 'Ashraf', 'dbe80d18b14bff6963712b429f088807'),
(26, 'maha', 'katy', '01277', '2018-01-08', 'maha@katy.com', 2, 'ya rab', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `ID` int(11) NOT NULL,
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
(7, 'Client'),
(8, 'Lawyer');

-- --------------------------------------------------------

--
-- Table structure for table `usertypepage`
--

CREATE TABLE `usertypepage` (
  `ID` int(255) NOT NULL,
  `UserTypeID` int(11) NOT NULL,
  `PageID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertypepage`
--

INSERT INTO `usertypepage` (`ID`, `UserTypeID`, `PageID`) VALUES
(1, 1, 2),
(2, 5, 3),
(3, 6, 4),
(4, 4, 5),
(5, 3, 6),
(6, 2, 7),
(7, 7, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID_FK123` (`UserID`),
  ADD KEY `SparePartID_FK` (`SparePartID`),
  ADD KEY `OrderDetailsID_FK` (`OrderDetailsID`),
  ADD KEY `CommissionID_FK` (`CommissionID`);

--
-- Indexes for table `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `OrderID_FK12` (`OrderID`),
  ADD KEY `UserID_FK1234` (`UserID`);

--
-- Indexes for table `countryoforigin`
--
ALTER TABLE `countryoforigin`
  ADD PRIMARY KEY (`ID`);

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
  ADD KEY `OrderTypeID_FK` (`OrderTypeID`),
  ADD KEY `CurrencyID_FK` (`CurrencyID`),
  ADD KEY `TaxesID_FK` (`TaxesID`),
  ADD KEY `PaymentMethodID_FK` (`paymentMethodID`),
  ADD KEY `BillID_FK` (`BillID`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ccds` (`CountryOfOriginID`);

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
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `UserTypeID` (`UserTypeID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usertypepage`
--
ALTER TABLE `usertypepage`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `pageID_FK` (`PageID`),
  ADD KEY `UserTypeFK` (`UserTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commission`
--
ALTER TABLE `commission`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countryoforigin`
--
ALTER TABLE `countryoforigin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usertypepage`
--
ALTER TABLE `usertypepage`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `CommissionID_FK` FOREIGN KEY (`CommissionID`) REFERENCES `commission` (`ID`),
  ADD CONSTRAINT `OrderDetailsID_FK` FOREIGN KEY (`OrderDetailsID`) REFERENCES `orderdetails` (`ID`),
  ADD CONSTRAINT `SparePartID_FK` FOREIGN KEY (`SparePartID`) REFERENCES `sparepart` (`ID`),
  ADD CONSTRAINT `UserID_FK123` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `commission`
--
ALTER TABLE `commission`
  ADD CONSTRAINT `OrderID_FK12` FOREIGN KEY (`OrderID`) REFERENCES `order` (`ID`),
  ADD CONSTRAINT `UserID_FK1234` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `BillID_FK` FOREIGN KEY (`BillID`) REFERENCES `bill` (`ID`),
  ADD CONSTRAINT `CurrencyID_FK` FOREIGN KEY (`CurrencyID`) REFERENCES `currency` (`ID`),
  ADD CONSTRAINT `OrderTypeID_FK` FOREIGN KEY (`OrderTypeID`) REFERENCES `ordertype` (`ID`),
  ADD CONSTRAINT `PaymentMethodID_FK` FOREIGN KEY (`paymentMethodID`) REFERENCES `paymentmethod` (`ID`),
  ADD CONSTRAINT `TaxesID_FK` FOREIGN KEY (`TaxesID`) REFERENCES `taxes` (`ID`);

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
-- Constraints for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD CONSTRAINT `ccds` FOREIGN KEY (`CountryOfOriginID`) REFERENCES `countryoforigin` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `usertypeid_FK` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `usertypepage`
--
ALTER TABLE `usertypepage`
  ADD CONSTRAINT `UserTypeFK` FOREIGN KEY (`UserTypeID`) REFERENCES `usertype` (`ID`),
  ADD CONSTRAINT `pageID_FK` FOREIGN KEY (`PageID`) REFERENCES `pages` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
