-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 11:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign1`
--

-- --------------------------------------------------------

--
-- Table structure for table `register2`
--

CREATE TABLE `register2` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repassword` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register2`
--

INSERT INTO `register2` (`id`, `username`, `password`, `repassword`, `role`) VALUES
(0, 'super', 'super@123', 'super@123', 'admin'),
(6, 'Maya', '000', '000', 'user'),
(7, 'Reema', '999', '999', 'user'),
(50, 'Piyu', '211', '211', 'user'),
(51, 'Ananth', 'ana', 'ana', 'user'),
(52, 'Shanthi', 'shan123', 'shan123', 'user'),
(53, 'Riyu', 'riyu123', 'riyu123', 'user'),
(57, 'kishan', '1234', '1234', 'user'),
(58, 'navaneeth', '1234', '1234', 'user'),
(59, 'himani', '1234', '1234', 'user'),
(62, 'Shreya', 'shreya', 'shreya', 'user'),
(63, 'Suma', 'suma', 'suma', 'user'),
(64, 'Tiya', 'tiya', 'tiya', 'user'),
(65, 'a', 'a', 'a', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register2`
--
ALTER TABLE `register2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register2`
--
ALTER TABLE `register2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
