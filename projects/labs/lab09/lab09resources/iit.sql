-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2024 at 07:08 PM
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
-- Database: `iit`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `actorid` int UNSIGNED NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `first_names` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`actorid`, `last_name`, `first_names`, `dob`) VALUES
(1, 'Murphy', 'Cillian', '1976-05-25'),
(2, 'Diesel', 'Vin', '1967-07-18'),
(3, 'Brando', 'Marlon', '1924-04-03'),
(4, 'Freeman', 'Morgan', '1937-06-01'),
(6, 'Wayne', 'John', '1907-05-26'),
(7, 'Blanchett', 'Cate', '1969-05-14'),
(8, 'Johansson', 'Scarlett', '1984-11-22'),
(9, 'Clooney', 'George', '1961-05-06'),
(10, 'Wood', 'Elijah', '1981-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `actors & movies`
--

CREATE TABLE `actors & movies` (
  `movieid` int UNSIGNED NOT NULL,
  `actorid` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actors & movies`
--

INSERT INTO `actors & movies` (`movieid`, `actorid`) VALUES
(1, 7),
(2, 8),
(3, 9),
(4, 10),
(5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movieid` int UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `year` char(4) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movieid`, `title`, `year`) VALUES
(1, 'Elizabeth', '1998'),
(2, 'Black Widow', '2021'),
(3, 'Oh Brother Where Art Thou?', '2000'),
(4, 'The Lord of the Rings: The Fellowship of the Ring', '2001'),
(5, 'Up in the Air', '2009');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`actorid`);

--
-- Indexes for table `actors & movies`
--
ALTER TABLE `actors & movies`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movieid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `actorid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `actors & movies`
--
ALTER TABLE `actors & movies`
  MODIFY `movieid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movieid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
