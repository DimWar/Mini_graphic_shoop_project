-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 08:49 PM
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
-- Database: `my-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `my-certificates`
--

CREATE TABLE `my-certificates` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my-certificates`
--

INSERT INTO `my-certificates` (`id`, `url`) VALUES
(2, 'profile_52b94e0ce2535a5df12de8b806d31639.jpg'),
(3, 'cert_19bb33758716ae7b602b9f027bcfb7e8.jpg'),
(4, 'cert_fc34bc2cb97a073a76919eb235c7736c.jpg'),
(5, 'cert_38996dfb47a554a9f597893cf8b5a1e9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my-certificates`
--
ALTER TABLE `my-certificates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my-certificates`
--
ALTER TABLE `my-certificates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
