-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2019 at 10:50 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_vocar`
--

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

DROP TABLE IF EXISTS `slike`;
CREATE TABLE IF NOT EXISTS `slike` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Naslov` varchar(255) COLLATE ucs2_slovenian_ci NOT NULL,
  `Putanja` text COLLATE ucs2_slovenian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`ID`, `Naslov`, `Putanja`) VALUES
(1, 'Upravna zgrada', './img/gallery-1.jpg'),
(2, 'Pogon', './img/gallery-2.jpg'),
(3, 'Magacin', './img/gallery-3.jpg'),
(4, 'Sortiranje', './img/gallery-4.jpg'),
(5, 'Isporuka', './img/gallery-5.jpg'),
(6, 'Ispitivanje', './img/gallery-6.jpg'),
(7, 'Kuvanje', './img/gallery-7.jpg'),
(8, 'Pakovanje', './img/gallery-8.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
