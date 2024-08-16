-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 04:15 PM
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
  `date` date NOT NULL,
  `transportCode` varchar(50) NOT NULL,
  `transportName` varchar(100) NOT NULL,
  `partyCode` varchar(50) NOT NULL,
  `partyName` varchar(100) NOT NULL,
  `receiptNumber` varchar(50) NOT NULL,
  `lrNumber` varchar(50) NOT NULL,
  `stationFrom` varchar(100) NOT NULL,
  `item` varchar(255) NOT NULL,
  `no_of_parcels` int(11) NOT NULL,
  `parcelRate` decimal(10,2) NOT NULL,
  `freight` decimal(10,2) NOT NULL,
  `labour` decimal(10,2) NOT NULL,
  `other` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `refund` decimal(10,2) NOT NULL,
  `grandTotal` decimal(10,2) NOT NULL,
  `deliveryDate` date NOT NULL,
  `deliveryPerson` varchar(100) NOT NULL,
  `deliveryChargeByParcel` varchar(50) NOT NULL,
  `deliveryChargeAmount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `date`, `transportCode`, `transportName`, `partyCode`, `partyName`, `receiptNumber`, `lrNumber`, `stationFrom`, `item`, `no_of_parcels`, `parcelRate`, `freight`, `labour`, `other`, `total`, `refund`, `grandTotal`, `deliveryDate`, `deliveryPerson`, `deliveryChargeByParcel`, `deliveryChargeAmount`) VALUES
(1, '2024-08-15', '01', 'mgtc', '101', 'jagrati', '101', '201', 'delhi', 'goods', 10, 0.00, 1000.00, 10.00, 10.00, 1170.00, 10.00, 1160.00, '2024-08-15', 'abnil', '10', 500.00),
(2, '2024-08-14', '01', 'mgtc', '101', 'ak', '101', '201', 'delhi', 'goods', 52, 0.00, 5.00, 5.00, 5.00, 280.00, 0.00, 280.00, '2024-08-14', 'sdf', '10', 500.00),
(3, '2024-08-14', '01', 'mgtc', '101', 'ak', '101', '201', 'delhi', 'goods', 52, 0.00, 5.00, 5.00, 5.00, 280.00, 0.00, 280.00, '2024-08-14', 'sdf', '10', 500.00);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
