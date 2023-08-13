-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 03:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `primary_table`
--

CREATE TABLE `primary_table` (
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `weight` smallint(6) NOT NULL,
  `HealthReport` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `primary_table`
--

INSERT INTO `primary_table` (`Name`, `Email`, `Age`, `weight`, `HealthReport`) VALUES
('kuldeep', 'k@gmail.com', 45, 89, '2015 Paper 1.pdf'),
('lokesh', 'l@gmail.com', 45, 89, '2015 Paper 2.pdf');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `primary_table`
--
ALTER TABLE `primary_table`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
