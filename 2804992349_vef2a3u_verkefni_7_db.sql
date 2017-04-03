-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2017 at 04:21 PM
-- Server version: 5.7.14-log
-- PHP Version: 5.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2804992349_vef2a3u_verkefni_7_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Nafn` varchar(255) DEFAULT NULL,
  `Netfang` varchar(255) NOT NULL,
  `AdgangsOrd` varchar(255) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`Netfang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Nafn`, `Netfang`, `AdgangsOrd`, `IsAdmin`) VALUES
('Admin', 'admin', '$2y$10$fXXBGOQzmbWSEjrbgW640O0m5bVE148GL63On58dIxdIrgu/a5Xfu', 1),
('Sindri Pálsson', 'sindripa234@nemi.tskoli.is', '$2y$10$t8wVNmQaSZ9YUysza/VoPOo7nNLz9J9X2uaB2JK9XCuyO4JUNnx92', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
