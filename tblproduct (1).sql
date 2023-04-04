-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 06:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `ProductID` int(11) NOT NULL,
  `BrandName` varchar(25) NOT NULL,
  `CategoryName` varchar(25) NOT NULL,
  `ProductName` varchar(25) NOT NULL,
  `ProductImage` varchar(1000) NOT NULL,
  `frontProductImage` varchar(1000) NOT NULL,
  `backProductImage` varchar(1000) NOT NULL,
  `sideProductImage` varchar(1000) NOT NULL,
  `ProductColor` varchar(20) NOT NULL,
  `ProductSize` varchar(100) NOT NULL,
  `ProductPrice` float NOT NULL,
  `MrpPrice` float NOT NULL,
  `SellingPrice` float NOT NULL,
  `ProductDescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`ProductID`, `BrandName`, `CategoryName`, `ProductName`, `ProductImage`, `frontProductImage`, `backProductImage`, `sideProductImage`, `ProductColor`, `ProductSize`, `ProductPrice`, `MrpPrice`, `SellingPrice`, `ProductDescription`) VALUES
(1, 'Wooden', 'furniture', 'Sofa ', 'upload/s1.jpg', 'upload/s2.jpg', 'upload/s3.jpg', 'upload/s4.jpg', 'blue', '200 x 200', 23000, 25000, 340000, 'sofa made through sagvan wooden'),
(2, 'Wooden', 'furniture', 'Sofa ', 'upload/s1.jpg', 'upload/s2.jpg', 'upload/s3.jpg', 'upload/s4.jpg', 'blue', '200 x 200', 23000, 25000, 340000, 'sofa made through sagvan wooden'),
(3, 'Wooden', 'furniture', 'Sofa ', 'upload/s1.jpg', 'upload/s2.jpg', 'upload/s3.jpg', 'upload/s4.jpg', 'blue', '200 x 200', 23000, 25000, 340000, 'sofa made through sagvan wooden'),
(4, 'Apple', 'electronic', 'mobile', 'upload/applepro12.jpg', 'upload/apple12pro.jpg', 'upload/apple12.jpg', 'upload/apple12_3.jpg', 'blue', '256gb', 52000, 57000, 60000, 'this is apple 12 pro mobile'),
(5, 'Apple', 'electronic', 'mobile', 'upload/applepro12.jpg', 'upload/apple12pro.jpg', 'upload/apple12.jpg', 'upload/apple12_3.jpg', 'blue', '256gb', 52000, 57000, 60000, 'this is apple 12 pro mobile'),
(6, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(7, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(8, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(9, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(10, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(11, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(12, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(13, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(14, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(15, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(16, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(17, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(18, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(19, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.'),
(20, 'wooden', 'furniture', 'chair', 'upload/ch1.jpg', 'upload/ch2.jpg', 'upload/ch3.jpg', 'upload/ch4.jpg', 'pink ', '100 x 100', 5200, 5700, 6000, 'this is chair.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
