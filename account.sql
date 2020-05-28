-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 08:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PN` int(10) NOT NULL,
  `Grade` int(2) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`Username`, `Password`, `Email`, `PN`, `Grade`, `Name`) VALUES
('', '', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 'Nihal Bhatnagar'),
('cool', 'kid', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 'Nihal'),
('', '1234', 'nihal@gmail.com', 2147483647, 11, 'Nihal Bhatnagar'),
('', '123', 'nihal@gmail.com', 2147483647, 11, 'Nihal Bhatnagar'),
('', '1234', 'nihal@gmail.com', 1212121212, 11, 'Nibal'),
('nihal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 'Nihal Bhatnagar'),
('nihal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 'Nihal Bhatnagar'),
('nihal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 'Nihal Bhatnagar'),
('nihal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 'Nihal Bhatnagar'),
('nihal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 'Nihal Bhatnagar'),
('nihal', '1223', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 'Nihal Bhatnagar'),
('nihal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 'Nihal Bhatnagar'),
('nihal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 'Nihal Bhatnagar'),
('NihalB', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 'Nihal Bhatnagar');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PN` int(11) NOT NULL,
  `Grade` int(11) NOT NULL,
  `SAT` int(4) NOT NULL,
  `ACT` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Name`, `Username`, `Password`, `Email`, `PN`, `Grade`, `SAT`, `ACT`) VALUES
('Nihal Bhatn', '', '', 'nihal.bhatn', 0, 0, 0, 0),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 0, 0, 0, 0),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 0, 0, 0, 0),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 2147483647, 0, 0, 0),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 2147483647, 0, 0, 0),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 2147483647, 0, 1500, 0),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 1500, 0),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 1500, 25),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 15001, 25),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 15001, 25),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 1600, 36),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 0, 0),
('', '', '', '', 0, 12, 0, 0),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 2147483647, 12, 0, 0),
('Nihal Bhatnagar', '', '', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 0, 0),
('Nihal Bhatnagar', 'stoopid', 'cool', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 20, 25),
('Nihal Bhatnagar', 'NIhal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 0, 0),
('Nihal Bhatnagar', 'nihal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 0, 0),
('Nihal Bhatnagar', 'nihal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 0, 0),
('Nihal Bhatnagar', 'nihal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 0, 0),
('Nihal Bhatnagar', 'nihal', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 0, 0),
('Nihal Bhatnagar', 'NihalB', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 0, 0),
('Nihal Bhatnagar', 'NihalB', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 0, 0),
('Nihal Bhatnagar', 'NihalB', '1234', 'nihal.bhatnagar@gmail.com', 2147483647, 11, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
