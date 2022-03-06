-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 03:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humiditymonitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `humidity`
--

CREATE TABLE `humidity` (
  `currentHumidity` float NOT NULL,
  `minHumidity` float NOT NULL,
  `maxHumidity` float NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `humidity`
--

INSERT INTO `humidity` (`currentHumidity`, `minHumidity`, `maxHumidity`, `timestamp`) VALUES
(61, 30, 65, '2022-03-06 14:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `temphumrecords`
--

CREATE TABLE `temphumrecords` (
  `id` int(11) NOT NULL,
  `humidity` float DEFAULT NULL,
  `minHumidity` float NOT NULL,
  `maxHumidity` float NOT NULL,
  `temperature` float NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temphumrecords`
--

INSERT INTO `temphumrecords` (`id`, `humidity`, `minHumidity`, `maxHumidity`, `temperature`, `timestamp`) VALUES
(1, 63, 30, 65, 29.4, '2022-03-06 11:49:38'),
(2, 63, 30, 65, 29.4, '2022-03-06 11:50:49'),
(3, 61, 30, 65, 29.9, '2022-03-06 11:56:36'),
(4, 61, 30, 65, 29.9, '2022-03-06 12:02:29'),
(5, 60, 30, 65, 29.9, '2022-03-06 12:02:43'),
(6, 60, 30, 65, 30, '2022-03-06 12:03:18'),
(7, 60, 30, 65, 30.2, '2022-03-06 12:04:13'),
(8, 60, 30, 65, 30.2, '2022-03-06 12:04:44'),
(9, 60, 30, 65, 29.8, '2022-03-06 12:10:40'),
(10, 61, 30, 65, 29.9, '2022-03-06 12:15:22'),
(11, 60, 30, 65, 29.8, '2022-03-06 12:21:15'),
(12, 60, 30, 65, 29.9, '2022-03-06 12:27:04'),
(13, 60, 30, 65, 29.9, '2022-03-06 12:28:55'),
(14, 60, 30, 65, 30, '2022-03-06 12:34:44'),
(15, 60, 30, 50, 29.9, '2022-03-06 12:37:11'),
(16, 61, 30, 70, 29.6, '2022-03-06 12:43:01'),
(17, 62, 30, 70, 29.7, '2022-03-06 12:48:48'),
(18, 62, 30, 60, 29.7, '2022-03-06 12:51:52'),
(19, 62, 70, 90, 29.8, '2022-03-06 12:52:22'),
(20, 62, 30, 65, 29.6, '2022-03-06 12:58:17'),
(21, 61, 30, 65, 29.6, '2022-03-06 13:04:06'),
(22, 61, 30, 65, 29.7, '2022-03-06 13:09:51'),
(23, 61, 30, 65, 29.7, '2022-03-06 13:15:35'),
(24, 61, 30, 65, 29.7, '2022-03-06 13:21:21'),
(25, 60, 30, 65, 29.7, '2022-03-06 13:27:09'),
(26, 60, 30, 65, 29.8, '2022-03-06 13:28:43'),
(27, 61, 30, 65, 29.7, '2022-03-06 13:34:32'),
(28, 60, 30, 65, 29.8, '2022-03-06 13:40:18'),
(29, 60, 30, 65, 29.6, '2022-03-06 13:46:02'),
(30, 60, 30, 65, 29.5, '2022-03-06 13:51:49'),
(31, 60, 30, 65, 29.7, '2022-03-06 13:57:31'),
(32, 61, 30, 65, 29.4, '2022-03-06 14:03:14'),
(33, 61, 30, 65, 29.5, '2022-03-06 14:09:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `temphumrecords`
--
ALTER TABLE `temphumrecords`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `temphumrecords`
--
ALTER TABLE `temphumrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
