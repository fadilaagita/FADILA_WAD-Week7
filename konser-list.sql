-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 03:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konser-list`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_konser`
--

CREATE TABLE `daftar_konser` (
  `konser_id` int(11) NOT NULL,
  `nama_konser` varchar(255) NOT NULL,
  `lineup` varchar(255) NOT NULL,
  `event_org` varchar(255) NOT NULL,
  `schedule` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `ticket_price` decimal(10,0) NOT NULL,
  `contact_person` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_konser`
--

INSERT INTO `daftar_konser` (`konser_id`, `nama_konser`, `lineup`, `event_org`, `schedule`, `location`, `ticket_price`, `contact_person`) VALUES
(1, 'Music Of The Spheres', 'Coldplay', 'PK Entertainment', '2023-11-15', 'Gelora Bung Karno', 5000000, '08123454678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_konser`
--
ALTER TABLE `daftar_konser`
  ADD PRIMARY KEY (`konser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_konser`
--
ALTER TABLE `daftar_konser`
  MODIFY `konser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
