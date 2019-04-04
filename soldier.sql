-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2019 at 06:50 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ks_testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `silicon_pirshoot`
--

CREATE TABLE `silicon_pirshoot` (
  `ID` int(11) NOT NULL,
  `UID` varchar(10) NOT NULL,
  `incoming` varchar(10) NOT NULL,
  `incoming1` varchar(10) NOT NULL,
  `incoming2` varchar(30) NOT NULL,
  `incoming3` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `silicon_pirshoot`
--

INSERT INTO `silicon_pirshoot` (`ID`, `UID`, `incoming`, `incoming1`, `incoming2`, `incoming3`) VALUES
(1, 'surya', '78', '0', '14.6781,77.6034', 'Normal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
