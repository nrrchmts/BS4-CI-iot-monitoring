-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 05:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sensor`
--

-- --------------------------------------------------------

--
-- Table structure for table `sektor`
--

CREATE TABLE `sektor` (
  `id` int(11) NOT NULL,
  `suhu_air` varchar(10) NOT NULL,
  `data_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sektor`
--

INSERT INTO `sektor` (`id`, `suhu_air`, `data_waktu`) VALUES
(1, '30.31', '2020-05-10 14:09:39'),
(2, '30.31', '2020-05-10 14:09:40'),
(3, '30.31', '2020-05-10 14:09:46'),
(4, '30.31', '2020-05-10 14:09:52'),
(5, '30.31', '2020-05-10 14:09:58'),
(6, '30.31', '2020-05-10 14:10:05'),
(7, '30.31', '2020-05-10 14:10:11'),
(8, '30.31', '2020-05-10 14:10:17'),
(9, '30.31', '2020-05-10 14:10:23'),
(10, '30.31', '2020-05-10 14:10:29'),
(11, '31.56', '2020-05-10 14:10:35'),
(12, '32.56', '2020-05-10 14:10:41'),
(13, '33.06', '2020-05-10 14:10:48'),
(14, '33.31', '2020-05-10 14:10:54'),
(15, '33.63', '2020-05-10 14:11:00'),
(16, '33.81', '2020-05-10 14:11:06'),
(17, '33.88', '2020-05-10 14:11:12'),
(18, '33.75', '2020-05-10 14:11:18'),
(19, '33.56', '2020-05-10 14:11:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sektor`
--
ALTER TABLE `sektor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sektor`
--
ALTER TABLE `sektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
