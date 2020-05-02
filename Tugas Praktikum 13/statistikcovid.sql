-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 09:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `statistikcovid`
--

CREATE TABLE `statistikcovid` (
  `id` int(11) NOT NULL,
  `country` varchar(200) NOT NULL,
  `total_cases` int(11) NOT NULL,
  `new_cases` int(11) NOT NULL,
  `total_deaths` int(11) NOT NULL,
  `new_death` int(11) NOT NULL,
  `total_recovered` int(11) NOT NULL,
  `active_cases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistikcovid`
--

INSERT INTO `statistikcovid` (`id`, `country`, `total_cases`, `new_cases`, `total_deaths`, `new_death`, `total_recovered`, `active_cases`) VALUES
(1, 'USA', 1029878, 19522, 58640, 1843, 140138, 831100),
(2, 'SPAIN', 232128, 2706, 23822, 301, 123903, 84403),
(3, 'ITALY', 201505, 2091, 27359, 382, 68941, 105205),
(4, 'FRANCC', 165911, 2638, 23660, 367, 46886, 95365),
(5, 'UK', 161145, 3996, 21678, 586, 0, 139123),
(6, 'GERMANY', 159431, 673, 6215, 89, 117400, 35816),
(7, 'TURKEY', 114653, 2392, 2992, 92, 38809, 72852),
(8, 'RUSSIA', 93558, 6411, 867, 73, 8456, 84235),
(9, 'IRAN', 92584, 1112, 5877, 71, 72439, 14268),
(10, 'CHINA', 82836, 6, 4633, 0, 77555, 648);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `statistikcovid`
--
ALTER TABLE `statistikcovid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `statistikcovid`
--
ALTER TABLE `statistikcovid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
