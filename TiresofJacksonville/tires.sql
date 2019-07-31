-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 08:04 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tires`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(500) COLLATE utf8_bin NOT NULL,
  `password` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `password`) VALUES
(1, 'NU1ES1hnY2Zidmh5OVJETitHcEhNdz09', 'cXQ5TFduUWlyU1RFc3VZT2xVUEFDUT09');

-- --------------------------------------------------------

--
-- Table structure for table `tire`
--

CREATE TABLE `tire` (
  `id` int(11) NOT NULL,
  `tiretype` varchar(50) COLLATE utf8_bin NOT NULL,
  `price` double NOT NULL,
  `manufactures` varchar(50) COLLATE utf8_bin NOT NULL,
  `width` varchar(10) COLLATE utf8_bin NOT NULL,
  `height` varchar(10) COLLATE utf8_bin NOT NULL,
  `diameter` varchar(10) COLLATE utf8_bin NOT NULL,
  `seasons` varchar(50) COLLATE utf8_bin NOT NULL,
  `image` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tire`
--

INSERT INTO `tire` (`id`, `tiretype`, `price`, `manufactures`, `width`, `height`, `diameter`, `seasons`, `image`) VALUES
(8, 'AUTO', 50, 'Goodyear', '285', '70', 'R15C', 'Summer', 'Slike/tires/1.jpeg'),
(9, 'AUTO', 8, 'Hankook', '285', '70', 'R15C', 'Summer', 'Slike/tires/2.jpeg'),
(10, 'AUTO', 8, 'Laufenn', '295', '100', 'R14C', 'Summer', 'Slike/tires/3.jpeg'),
(11, 'AUTO', 7, 'Laufenn', '285', '80', 'R13C', 'All seasons', 'Slike/tires/4.jpeg'),
(12, 'AUTO', 4, 'Hoosier', '275', '80', 'R15C', 'Summer', 'Slike/tires/5.jpeg'),
(13, '4x4/SUV', 4, 'Kumho', '275', '100', 'R15C', 'Summer', 'Slike/tires/6.jpeg'),
(14, '4x4/SUV', 7, 'Hoosier', '285', '70', 'R15C', 'Summer', 'Slike/tires/7.jpeg'),
(15, 'AUTO', 8, 'Hankook', '285', '70', 'R14C', 'Summer', 'Slike/tires/8.jpeg'),
(67, 'AUTO', 7, 'Goodyear', '295', '60', 'R14C', 'Summer', 'Slike/tires/9.jpeg'),
(68, '4x4/SUV', 7, 'Kumho', '295', '100', 'R17.5', 'Summer', 'Slike/tires/10.jpeg'),
(69, 'AUTO', 7, 'Hoosier', '6.5', '100', 'R16C', 'Summer', 'Slike/tires/11.jpeg'),
(70, '4x4/SUV', 9, 'Laufenn', '305', '75', 'R17C', 'Summer', 'Slike/tires/12.jpeg'),
(71, '4x4/SUV', 9, 'Laufenn', '305', '25', 'R16C', 'Summer', 'Slike/tires/13.jpeg'),
(72, 'AUTO', 9, 'Hankook', '285', '25', 'R16C', 'Summer', 'Slike/tires/14.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tire`
--
ALTER TABLE `tire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tire`
--
ALTER TABLE `tire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
