-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2018 at 08:44 PM
-- Server version: 5.5.60-0+deb8u1
-- PHP Version: 5.6.38-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `posteljine`
--

-- --------------------------------------------------------

--
-- Table structure for table `prijava`
--

CREATE TABLE IF NOT EXISTS `prijava` (
`id` int(11) NOT NULL,
  `korIme` varchar(5000) COLLATE utf8_bin NOT NULL,
  `lozinka` varchar(5000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `prijava`
--

INSERT INTO `prijava` (`id`, `korIme`, `lozinka`) VALUES
(1, 'VjlLaWVyaW0wNndNdmltSDhMNTZPZz09', 'MUhvR2ozaFgxU2d1UUczU2hWazNKdz09'),
(2, 'b29qRXJ2N0lNSlBtWEg5eTRyWEs3QT09', 'Nml1RmxiU2FwODFOeVBDUHJ5RzFvQT09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prijava`
--
ALTER TABLE `prijava`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prijava`
--
ALTER TABLE `prijava`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
