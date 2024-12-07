-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2024 at 04:02 AM
-- Server version: 8.0.40-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mySite`
--

-- --------------------------------------------------------

--
-- Table structure for table `myFooter`
--

CREATE TABLE `myFooter` (
  `footerId` int UNSIGNED NOT NULL,
  `footerText` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `myFooter`
--

INSERT INTO `myFooter` (`footerId`, `footerText`) VALUES
(1, 'Jake Collen-ITWS @ RPI');

-- --------------------------------------------------------

--
-- Table structure for table `myLabs`
--

CREATE TABLE `myLabs` (
  `labNumber` int UNSIGNED NOT NULL,
  `labTitle` varchar(40) NOT NULL,
  `labLink` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `myLabs`
--

INSERT INTO `myLabs` (`labNumber`, `labTitle`, `labLink`) VALUES
(1, 'GitHub and Azure', 'lab01/lab01.html'),
(2, 'Building a Resume', 'lab02/lab02.html'),
(3, 'Personal Website', 'lab03/lab03.html'),
(4, 'XML and RSS', 'lab04/lab04.html'),
(5, 'JavaScript', 'lab05/lab05.html'),
(6, 'JQuery', 'lab06/lab06.html'),
(7, 'Group Project Mockup', 'lab07/lab07.html'),
(8, 'Dynamic Website', 'lab08/lab08.html'),
(9, 'PHP and MySql', 'lab09/lab09.html'),
(10, 'Moving to Production', 'lab10/lab10.html');

-- --------------------------------------------------------

--
-- Table structure for table `myProjects`
--

CREATE TABLE `myProjects` (
  `projectNumber` int UNSIGNED NOT NULL,
  `projectTitle` varchar(40) NOT NULL,
  `projectLink` varchar(40) NOT NULL,
  `projectClass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `myProjects`
--

INSERT INTO `myProjects` (`projectNumber`, `projectTitle`, `projectLink`, `projectClass`) VALUES
(1, 'Labs', 'labs/labs.php', 'Intro to ITWS'),
(2, 'Group Project', '../../grp/index.php', 'Intro to ITWS');

-- --------------------------------------------------------

--
-- Table structure for table `mySiteUsers`
--

CREATE TABLE `mySiteUsers` (
  `userId` int UNSIGNED NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `userType` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mySiteUsers`
--

INSERT INTO `mySiteUsers` (`userId`, `username`, `password`, `userType`) VALUES
(1, 'collej2', 'JaysonTatum0$', 'admin'),
(2, 'rplotka', 'JakeServer', 'admin'),
(3, 'mojiso', 'JakeServer', 'admin'),
(4, 'testuser', 'testpass', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myFooter`
--
ALTER TABLE `myFooter`
  ADD PRIMARY KEY (`footerId`);

--
-- Indexes for table `myLabs`
--
ALTER TABLE `myLabs`
  ADD PRIMARY KEY (`labNumber`);

--
-- Indexes for table `myProjects`
--
ALTER TABLE `myProjects`
  ADD PRIMARY KEY (`projectNumber`);

--
-- Indexes for table `mySiteUsers`
--
ALTER TABLE `mySiteUsers`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `username` (`username`,`userType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myFooter`
--
ALTER TABLE `myFooter`
  MODIFY `footerId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `myLabs`
--
ALTER TABLE `myLabs`
  MODIFY `labNumber` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `myProjects`
--
ALTER TABLE `myProjects`
  MODIFY `projectNumber` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mySiteUsers`
--
ALTER TABLE `mySiteUsers`
  MODIFY `userId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
