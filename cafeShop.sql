-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2020 at 03:07 PM
-- Server version: 8.0.22-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafeShop`
--

-- --------------------------------------------------------

--
-- Table structure for table `Beverage`
--

CREATE TABLE `Beverage` (
  `Beverage_ID` int NOT NULL,
  `BeverageName` varchar(225) DEFAULT NULL,
  `PriceEach` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Beverage`
--

INSERT INTO `Beverage` (`Beverage_ID`, `BeverageName`, `PriceEach`, `image`) VALUES
(1, 'Cafe Đen', 10000, 'image/cafe_den.jpg'),
(2, 'Nước Khoáng', 5000, 'image/nuoc loc.jpeg'),
(3, 'Capuchino', 20000, 'image/capuchino.jpg'),
(4, 'Bạc Xỉu', 15000, 'image/bac-xiu.jpg'),
(5, 'Sinh tố Xoài', 10000, 'image/sintoxoai.jpg'),
(6, 'Sinh tố bơ', 15000, 'image/sintobo.jpg'),
(7, 'Sinh tố Dưa hấu', 15000, 'image/sintoduahau.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderID` int NOT NULL,
  `BeverageID` int DEFAULT NULL,
  `BeverageName` varchar(255) DEFAULT NULL,
  `PriceEach` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int NOT NULL,
  `staffID` int DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  `TableID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int NOT NULL,
  `FullName` varchar(225) NOT NULL,
  `DayOfBirth` varchar(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Position` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID`, `FullName`, `DayOfBirth`, `Address`, `Phone`, `Position`) VALUES
(1, 'Nguyễn Công Trọng', '29-02-1994', 'Cổ  Nhuế-Hà Nội', '0342897653', 'Nhân viên order'),
(2, 'Vũ Đức Dương', '21-09-1993', 'Trần Duy Hưng-Trung Hòa- Cầu Giấy- Hà Nội', '0123654378', 'Nhân viên order'),
(3, 'Nguyễn Đức Việt', '21-12-1996', 'Long Biên- Hà Nội', '0123654378', 'Nhân viên pha chế'),
(4, 'Mai Anh Dũng', '20-12-1997', 'Mỹ Đình- Hà Nội', '086234986', 'Nhân viên pha chế');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `Table_ID` int NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `TableName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`Table_ID`, `Status`, `TableName`) VALUES
(1, 'Trống', 'Bàn 1'),
(2, 'Trống', 'Bàn 2'),
(3, 'Trống', 'Bàn 3'),
(4, 'Trống', 'Bàn 4'),
(5, 'Trống', 'Bàn 5'),
(6, 'Trống', 'Bàn 6'),
(7, 'Trống', 'Bàn 7'),
(8, 'Trống', 'Bàn 8'),
(9, 'Trống', 'Bàn 9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Beverage`
--
ALTER TABLE `Beverage`
  ADD PRIMARY KEY (`Beverage_ID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `BeverageID` (`BeverageID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `staffID` (`staffID`),
  ADD KEY `TableID` (`TableID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`Table_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `Table_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`BeverageID`) REFERENCES `Beverage` (`Beverage_ID`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`staffID`) REFERENCES `staff` (`ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`TableID`) REFERENCES `tables` (`Table_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
