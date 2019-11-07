-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 07:18 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interwood`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(8) NOT NULL,
  `CFName` varchar(15) DEFAULT NULL,
  `CLName` varchar(15) DEFAULT NULL,
  `CEmail` varchar(25) DEFAULT NULL,
  `CAddress1` varchar(25) DEFAULT NULL,
  `CAddress2` varchar(25) DEFAULT NULL,
  `CAddress3` varchar(25) DEFAULT NULL,
  `BranchID` int(1) NOT NULL,
  `CTPno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `CFName`, `CLName`, `CEmail`, `CAddress1`, `CAddress2`, `CAddress3`, `BranchID`, `CTPno`) VALUES
(1, 'Hassan', 'Ali', 'hassanali@gmail.com', 'No 06', 'MBDIN', 'Pakistan', 1, 717705526),
(2, 'Asad', 'Ali', 'asadali@gmail.com', 'No 13/A', 'New Town', 'Anuradhapura', 2, 715895658),
(3, 'Arslan', 'Ashraf', 'arslanashraf@gmail.com', 'No 251/D', 'New Road', 'Trinco', 3, 786598254),
(6, 'Hamza', 'Akhtar', 'hamzaakhtar@gmail.com', 'Gali no 6', 'Islamabad', 'Pakistan', 1, 772308519),
(7, 'Naveed', 'Aulak', 'naveed1122@gmail.com', 'No 08', 'kari Road', 'Pakistan', 1, 786598254),
(8, 'Aqsa', 'Rehman', 'aqsarehman@gmail.com', 'No 08', 'Shreef House', 'Pakistan', 1, 759865985),
(9, 'Khurram', 'Ali', 'khurramali@gmail.com', 'No C', 'New Town', 'Wah Cannt', 1, 772308519),
(10, 'Mehran', 'Khan', 'mehrankhan@gmail.com', 'Sufi pura', 'MBDIN', 'Wah Cannt', 1, 772308519),
(11, 'Amir', 'Ali Khawar', 'amirshahzad@gmail.com', 'School Junction', 'Pothuwela Road', 'Kadana', 1, 772308519),
(12, 'aaaa', 'aaa', 'aa@gmail.com', 'aa', 'aaa', 'aaa', 1, 715687948),
(13, 'bb', 'bb', 'bb@gmail.com', 'bbb', 'bb', 'bb', 1, 786598254),
(14, 'Amir', 'Shahzad', 'amirshahzadkhawar@gmaill.', 'abc', 'abc', 'abc', 1, 1111111111);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ItemID` varchar(5) NOT NULL,
  `ItemName` varchar(50) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `Quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ItemID`, `ItemName`, `price`, `type`, `Quantity`) VALUES
('1', 'Damro Chair', '755.00', 'chair', 175),
('1122', 'Front Door', '500.00', 'Door', 50),
('1133', 'Kitchen Window', '700.00', 'window', 0),
('2568', 'Computer Table', '1800.00', 'Table', 140),
('9876', 'Office Cupboard', '9500.00', 'Cupboard', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oper_view_cus`
--

CREATE TABLE `oper_view_cus` (
  `CFName` varchar(15) DEFAULT NULL,
  `CLName` varchar(15) DEFAULT NULL,
  `CEmail` varchar(25) DEFAULT NULL,
  `CAddress1` varchar(25) DEFAULT NULL,
  `CAddress2` varchar(25) DEFAULT NULL,
  `CAddress3` varchar(25) DEFAULT NULL,
  `CTPno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oper_view_items`
--

CREATE TABLE `oper_view_items` (
  `ItemID` varchar(5) DEFAULT NULL,
  `ItemName` varchar(50) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oper_view_order`
--

CREATE TABLE `oper_view_order` (
  `CFName` varchar(15) DEFAULT NULL,
  `CLName` varchar(15) DEFAULT NULL,
  `ItemName` varchar(50) DEFAULT NULL,
  `Quantity` int(6) DEFAULT NULL,
  `Dateissue` date DEFAULT NULL,
  `DeliverDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(8) NOT NULL,
  `CID` int(10) DEFAULT NULL,
  `ItemID` varchar(5) DEFAULT NULL,
  `BranchID` int(10) NOT NULL,
  `Quantity` int(6) DEFAULT NULL,
  `Dateissue` date DEFAULT NULL,
  `DeliverDate` date NOT NULL,
  `RecivedDate` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `Statues` varchar(15) NOT NULL DEFAULT 'undelivered'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CID`, `ItemID`, `BranchID`, `Quantity`, `Dateissue`, `DeliverDate`, `RecivedDate`, `type`, `Statues`) VALUES
(1, 1, '1', 1, 50, '2017-05-26', '2017-06-24', '2017-05-28', 'Factory', 'Delivered'),
(2, 1, '1', 0, 50, '2017-05-10', '2017-05-14', '2017-05-15', 'Stock', 'delivered'),
(4, 3, '2568', 1, 50, '2017-05-27', '2017-06-26', '2017-05-28', 'Factory', 'Delivered'),
(5, 9, '9876', 1, 50, '2017-06-03', '2017-07-03', '0000-00-00', 'Factory', 'undelivered'),
(7, 6, '1', 1, 25, '2017-06-03', '2017-06-06', '0000-00-00', 'Stock', 'undelivered');

-- --------------------------------------------------------

--
-- Table structure for table `showrooms`
--

CREATE TABLE `showrooms` (
  `BranchID` int(10) NOT NULL,
  `District` varchar(20) DEFAULT NULL,
  `Address1` varchar(20) DEFAULT NULL,
  `Address2` varchar(20) DEFAULT NULL,
  `Address3` varchar(20) DEFAULT NULL,
  `PhoneNo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showrooms`
--

INSERT INTO `showrooms` (`BranchID`, `District`, `Address1`, `Address2`, `Address3`, `PhoneNo`) VALUES
(0, 'Null', 'Null', 'Null', 'Null', 0),
(1, 'Mandi Bahauddin', 'No 07', 'Main Road', 'MBDIN', 115898757),
(2, 'Malakwal', 'No 17/A', 'Kaduwela Road', 'Malakwal', 118759865),
(3, 'Islamabad', 'No 07', 'Colombo Road', 'Islamabad', 378549685),
(4, 'LHR', 'No 06', 'Main Road', 'Lahore', 418795265),
(5, 'Taxila', 'No 4', 'New Town', 'Wah Cannt', 815795864);

-- --------------------------------------------------------

--
-- Table structure for table `stock_view_items`
--

CREATE TABLE `stock_view_items` (
  `ItemID` varchar(5) DEFAULT NULL,
  `ItemName` varchar(50) DEFAULT NULL,
  `Quantity` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_view_order`
--

CREATE TABLE `stock_view_order` (
  `OrderID` int(8) DEFAULT NULL,
  `ItemID` varchar(5) DEFAULT NULL,
  `ItemName` varchar(50) DEFAULT NULL,
  `CAddress1` varchar(25) DEFAULT NULL,
  `CAddress2` varchar(25) DEFAULT NULL,
  `CAddress3` varchar(25) DEFAULT NULL,
  `DeliverDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ulevel` int(2) NOT NULL,
  `showroom` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `ulevel`, `showroom`) VALUES
('Admin', 'admin', 1, 1),
('operator1', 'operator', 2, 1),
('operator2', 'operator', 2, 2),
('stock', 'stock', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `FK_showroom` (`BranchID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `FK_item` (`ItemID`),
  ADD KEY `FK_CID` (`CID`),
  ADD KEY `FK_branch2` (`BranchID`);

--
-- Indexes for table `showrooms`
--
ALTER TABLE `showrooms`
  ADD PRIMARY KEY (`BranchID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `FK_branch` (`showroom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `showrooms`
--
ALTER TABLE `showrooms`
  MODIFY `BranchID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `FK_showroom` FOREIGN KEY (`BranchID`) REFERENCES `showrooms` (`BranchID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_CID` FOREIGN KEY (`CID`) REFERENCES `customer` (`CID`),
  ADD CONSTRAINT `FK_branch2` FOREIGN KEY (`BranchID`) REFERENCES `showrooms` (`BranchID`),
  ADD CONSTRAINT `FK_item` FOREIGN KEY (`ItemID`) REFERENCES `items` (`ItemID`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_branch` FOREIGN KEY (`showroom`) REFERENCES `showrooms` (`BranchID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
