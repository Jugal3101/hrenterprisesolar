-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2026 at 08:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_solar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `requirement` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `full_name`, `phone_number`, `requirement`, `message`, `created_at`) VALUES
(1, 'jugal chaudhari', '7600359707', '3KW-10KW', 'maru bill 1500 ave chhe to ketla kv lagavu pade', '2026-05-13 11:18:39'),
(2, 'riya chaudhari', '6356610454', '3KW-10KW', 'mare samjavu chhe ', '2026-05-13 11:31:39'),
(3, 'jugal chaudhari', '6356610454', 'Inquiry', 'zc zXC ', '2026-05-13 11:41:14'),
(4, 'jugal chaudhari', '6356610454', 'Inquiry', 'zc zXC ', '2026-05-13 11:41:14'),
(5, 'xvcz d', '45', '1KW-3KW', '', '2026-05-13 11:46:44'),
(6, 'xvcz d', '455324', '1KW-3KW', 'sdfvdfzv', '2026-05-13 11:46:59'),
(7, 'jugal chaudhari', '7600359707', '3KW-10KW', 'mare janvu chhe ketla kv nakhavu joiye..', '2026-05-13 11:47:51'),
(8, 'jugal chaudhari', '6356610454', 'Inquiry', 'hcbhszbygszygfvzsygdvhgs dygv sd', '2026-05-13 12:03:44'),
(9, 'rekha chaudhari', '9925669107', '3KW-10KW', 'ghar pr lagavanu chhe.', '2026-05-14 06:19:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
