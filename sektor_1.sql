-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 11:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `sektor_1`
--

CREATE TABLE `sektor_1` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `suhu_air` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sektor_1`
--

INSERT INTO `sektor_1` (`id`, `date`, `time`, `suhu_air`) VALUES
(1, '20/03/2020', '08:10', 24),
(2, '21/03/2020', '09:11', 24),
(3, '22/03/2020', '12:11', 24),
(4, '23/03/2020', '12:12', 24),
(5, '24/03/2020', '15:13', 24),
(6, '25/03/2020', '16:30', 24),
(7, '26/03/2020', '21:30', 25),
(8, '27/03/2020', '23:30', 25),
(9, '28/03/2020', '22:26', 23),
(10, '29/03/2020', '01:30', 26),
(11, '29/03/2020', '03:29', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sektor_1`
--
ALTER TABLE `sektor_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sektor_1`
--
ALTER TABLE `sektor_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
