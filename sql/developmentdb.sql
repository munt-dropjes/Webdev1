-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Sep 19, 2024 at 07:52 PM
-- Server version: 11.5.2-MariaDB-ubu2404
-- PHP Version: 8.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ContactInfo`
--

CREATE TABLE `ContactInfo` (
  `id` int(11) NOT NULL,
  `speltakId` int(11) NOT NULL,
  `naam` varchar(255) DEFAULT NULL,
  `functie` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefoonnummer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `ContactInfo`
--

INSERT INTO `ContactInfo` (`id`, `speltakId`, `naam`, `functie`, `email`, `telefoonnummer`) VALUES
(1, 2, 'Labbekak', 'Snotjoch', 'ja@nee.be', '0031633384824');

-- --------------------------------------------------------

--
-- Table structure for table `Speltak`
--

CREATE TABLE `Speltak` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `Speltak`
--

INSERT INTO `Speltak` (`id`, `naam`) VALUES
(1, 'Admin'),
(2, 'Welpen'),
(3, 'Verkenners'),
(4, 'Rowans'),
(5, 'Rovers'),
(6, 'Staf'),
(7, 'Leiding'),
(8, 'Stam');

-- --------------------------------------------------------

--
-- Table structure for table `SpeltakInfo`
--

CREATE TABLE `SpeltakInfo` (
  `id` int(11) NOT NULL,
  `speltakId` int(11) NOT NULL,
  `contactId` int(11) DEFAULT NULL,
  `tekst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `SpeltakInfo`
--

INSERT INTO `SpeltakInfo` (`id`, `speltakId`, `contactId`, `tekst`) VALUES
(1, 2, 1, 'hallotjes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ContactInfo`
--
ALTER TABLE `ContactInfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `speltakId` (`speltakId`);

--
-- Indexes for table `Speltak`
--
ALTER TABLE `Speltak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SpeltakInfo`
--
ALTER TABLE `SpeltakInfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `speltakId` (`speltakId`),
  ADD KEY `contactId` (`contactId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ContactInfo`
--
ALTER TABLE `ContactInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Speltak`
--
ALTER TABLE `Speltak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `SpeltakInfo`
--
ALTER TABLE `SpeltakInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ContactInfo`
--
ALTER TABLE `ContactInfo`
  ADD CONSTRAINT `ContactInfo_ibfk_1` FOREIGN KEY (`speltakId`) REFERENCES `Speltak` (`id`);

--
-- Constraints for table `SpeltakInfo`
--
ALTER TABLE `SpeltakInfo`
  ADD CONSTRAINT `SpeltakInfo_ibfk_1` FOREIGN KEY (`speltakId`) REFERENCES `Speltak` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `SpeltakInfo_ibfk_2` FOREIGN KEY (`contactId`) REFERENCES `ContactInfo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
