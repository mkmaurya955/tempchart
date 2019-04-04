-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 09:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tempchart`
--

-- --------------------------------------------------------

--
-- Table structure for table `garbage`
--

CREATE TABLE `garbage` (
  `ID` int(11) NOT NULL,
  `UID` varchar(50) NOT NULL,
  `garbage1` varchar(22) NOT NULL,
  `garbage2` varchar(22) NOT NULL,
  `garbage3` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garbage`
--

INSERT INTO `garbage` (`ID`, `UID`, `garbage1`, `garbage2`, `garbage3`) VALUES
(1, 'coderscluster', '45', '87', '23');

-- --------------------------------------------------------

--
-- Table structure for table `htemp`
--

CREATE TABLE `htemp` (
  `ID` int(11) NOT NULL,
  `UID` varchar(50) NOT NULL,
  `heat` varchar(22) NOT NULL,
  `temperature` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `htemp`
--

INSERT INTO `htemp` (`ID`, `UID`, `heat`, `temperature`) VALUES
(1, 'coderscluster', '65', '78');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `garbage`
--
ALTER TABLE `garbage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `htemp`
--
ALTER TABLE `htemp`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `garbage`
--
ALTER TABLE `garbage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `htemp`
--
ALTER TABLE `htemp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
