-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 08:06 AM
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
-- Database: `temp&hummonitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `emailrecords`
--

CREATE TABLE `emailrecords` (
  `email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emailrecords`
--

INSERT INTO `emailrecords` (`email`) VALUES
('dasdas');

-- --------------------------------------------------------

--
-- Table structure for table `temperature`
--

CREATE TABLE `temperature` (
  `currentTemp` varchar(5) NOT NULL,
  `desiredTemp` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temperature`
--

INSERT INTO `temperature` (`currentTemp`, `desiredTemp`, `timestamp`) VALUES
('31.9', 34, '2022-03-05 07:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `temphumrecords`
--

CREATE TABLE `temphumrecords` (
  `id` int(11) NOT NULL,
  `temperature` varchar(5) DEFAULT NULL,
  `humidity` varchar(5) DEFAULT NULL,
  `recordDateTime` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temphumrecords`
--

INSERT INTO `temphumrecords` (`id`, `temperature`, `humidity`, `recordDateTime`) VALUES
(1, '29.8', '68', '03/05/2022 09:48 am'),
(2, '29.9', '68', '03/05/2022 09:48 am'),
(3, '29.9', '67', '03/05/2022 09:49 am'),
(4, '29.8', '67', '03/05/2022 09:50 am'),
(5, '29.7', '67', '03/05/2022 09:54 am'),
(6, '29.9', '66', '03/05/2022 09:54 am'),
(7, '29.6', '65', '03/05/2022 09:58 am'),
(8, '29.8', '66', '03/05/2022 10:01 am'),
(9, '29.8', '66', '03/05/2022 10:01 am'),
(10, '29.7', '66', '03/05/2022 10:02 am'),
(11, '29.8', '66', '03/05/2022 10:09 am'),
(12, '29.9', '66', '03/05/2022 10:13 am'),
(13, '29.9', '66', '03/05/2022 10:13 am'),
(14, '29.9', '66', '03/05/2022 10:20 am'),
(15, '30', '66', '03/05/2022 10:22 am'),
(16, '30.1', '66', '03/05/2022 10:24 am'),
(17, '30.2', '66', '03/05/2022 10:28 am'),
(18, '30.1', '65', '03/05/2022 10:37 am'),
(19, '30.2', '67', '03/05/2022 10:44 am'),
(20, '30.2', '66', '03/05/2022 10:52 am'),
(21, '30.6', '63', '03/05/2022 11:01 am'),
(22, '30.6', '64', '03/05/2022 11:12 am'),
(23, '30.6', '63', '03/05/2022 11:20 am'),
(24, '30.9', '63', '03/05/2022 11:29 am'),
(25, '30.9', '61', '03/05/2022 11:37 am'),
(26, '31', '60', '03/05/2022 11:45 am'),
(27, '31.2', '60', '03/05/2022 11:53 am'),
(28, '31.4', '59', '03/05/2022 12:01 pm'),
(29, '31.5', '59', '03/05/2022 12:10 pm'),
(30, '31.6', '58', '03/05/2022 12:19 pm'),
(31, '31.7', '57', '03/05/2022 12:27 pm'),
(32, '31.5', '63', '03/05/2022 12:32 pm'),
(33, '31.7', '58', '03/05/2022 12:36 pm'),
(34, '31.9', '57', '03/05/2022 12:41 pm'),
(35, '31.9', '58', '03/05/2022 12:42 pm'),
(36, '31.9', '57', '03/05/2022 12:46 pm'),
(37, '31.9', '57', '03/05/2022 12:47 pm'),
(38, '31.6', '59', '03/05/2022 12:53 pm'),
(39, '31.5', '58', '03/05/2022 12:55 pm'),
(40, '31.7', '59', '03/05/2022 12:56 pm');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
