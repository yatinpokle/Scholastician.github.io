-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 09:58 PM
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
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PN` varchar(11) NOT NULL,
  `Grade` int(11) NOT NULL,
  `SAT` int(4) NOT NULL,
  `ACT` int(2) NOT NULL,
  `student` tinyint(1) NOT NULL,
  `Algebra1` tinyint(1) NOT NULL,
  `Algebra2` tinyint(1) NOT NULL,
  `Pre-Calc` tinyint(1) NOT NULL,
  `APCalcAB` tinyint(1) NOT NULL,
  `bio` tinyint(1) NOT NULL,
  `chem` tinyint(1) NOT NULL,
  `APCalcBC` tinyint(1) NOT NULL,
  `Physics1` tinyint(1) NOT NULL,
  `Physics2` tinyint(1) NOT NULL,
  `PhysicsC` tinyint(1) NOT NULL,
  `apes` tinyint(1) NOT NULL,
  `hgap` tinyint(1) NOT NULL,
  `whap` tinyint(1) NOT NULL,
  `apush` tinyint(1) NOT NULL,
  `apgov` tinyint(1) NOT NULL,
  `apecon` tinyint(1) NOT NULL,
  `english1` tinyint(1) NOT NULL,
  `english2` tinyint(1) NOT NULL,
  `english3` tinyint(1) NOT NULL,
  `english4` tinyint(1) NOT NULL,
  `aplang` tinyint(1) NOT NULL,
  `aplit` tinyint(1) NOT NULL,
  `satclass` tinyint(1) NOT NULL,
  `actclass` tinyint(1) NOT NULL,
  `compsci` tinyint(1) NOT NULL,
  `matching` tinyint(1) NOT NULL,
  `topics` text NOT NULL,
  `times` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `Name`, `Username`, `Password`, `Email`, `PN`, `Grade`, `SAT`, `ACT`, `student`, `Algebra1`, `Algebra2`, `Pre-Calc`, `APCalcAB`, `bio`, `chem`, `APCalcBC`, `Physics1`, `Physics2`, `PhysicsC`, `apes`, `hgap`, `whap`, `apush`, `apgov`, `apecon`, `english1`, `english2`, `english3`, `english4`, `aplang`, `aplit`, `satclass`, `actclass`, `compsci`, `matching`, `topics`, `times`) VALUES
(1, 'Nihal Bhatnagar', 'nihal', '1234', 'nihal.bhatnagar@gmail.com', '9726181919', 11, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'gg', 'wp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
