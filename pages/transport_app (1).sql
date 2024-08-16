-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2024 at 06:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `transportCode` varchar(100) DEFAULT NULL,
  `transportName` varchar(255) DEFAULT NULL,
  `partyCode` varchar(100) DEFAULT NULL,
  `partyName` varchar(255) DEFAULT NULL,
  `receiptNumber` varchar(100) DEFAULT NULL,
  `lrNumber` varchar(100) DEFAULT NULL,
  `stationFrom` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `no_of_parcels` int(11) DEFAULT NULL,
  `parcel_rate` decimal(10,2) DEFAULT NULL,
  `freight` decimal(10,2) DEFAULT NULL,
  `cartage` decimal(10,2) DEFAULT NULL,
  `commission` decimal(10,2) DEFAULT NULL,
  `labour` decimal(10,2) DEFAULT NULL,
  `other` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `refund` decimal(10,2) DEFAULT NULL,
  `grandTotal` decimal(10,2) DEFAULT NULL,
  `deliveryDate` date DEFAULT NULL,
  `deliveryPerson` varchar(255) DEFAULT NULL,
  `deliveryChargeByParcel` decimal(10,2) DEFAULT NULL,
  `deliveryChargeAmount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `date`, `transportCode`, `transportName`, `partyCode`, `partyName`, `receiptNumber`, `lrNumber`, `stationFrom`, `item`, `no_of_parcels`, `parcel_rate`, `freight`, `cartage`, `commission`, `labour`, `other`, `total`, `refund`, `grandTotal`, `deliveryDate`, `deliveryPerson`, `deliveryChargeByParcel`, `deliveryChargeAmount`) VALUES
(1, '2024-08-15', '102', 'mgtc', '103', 'jagrati traders', '213', '213', '211', '10', 10, 10.00, 10.00, 100.00, 1.00, 0.00, 0.00, 111.00, 0.00, 111.00, '0000-00-00', '', 0.00, 0.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
