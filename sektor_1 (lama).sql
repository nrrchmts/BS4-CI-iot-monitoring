-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 04:03 PM
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
  `suhu_air` int(3) NOT NULL,
  `ph_air` int(2) NOT NULL,
  `do_air` varchar(255) NOT NULL,
  `kadar_amonia` varchar(255) NOT NULL,
  `volume_air` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sektor_1`
--

INSERT INTO `sektor_1` (`id`, `date`, `suhu_air`, `ph_air`, `do_air`, `kadar_amonia`, `volume_air`) VALUES
(1, '', 24, 6, '8', '0', 1200),
(2, '', 24, 7, '8', '0', 1200),
(3, '', 24, 8, '8', '1', 1200),
(4, '', 24, 8, '8', '1', 1200),
(5, '', 24, 5, '8', '0.3', 1200),
(6, '27/03/2020, 16:30', 24, 4, '8', '3.4', 1200),
(7, 'kamis, sekian sekian', 25, 4, '18', '18', 1800),
(8, 'kamis bablablab', 25, 4, '144', '22', 1200),
(9, 'jumat, asdawasd', 23, 4, '42', '32', 2233);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
