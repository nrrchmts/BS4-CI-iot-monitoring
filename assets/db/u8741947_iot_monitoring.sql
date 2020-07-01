-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2020 at 11:24 AM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u8741947_iot_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `sektor`
--

CREATE TABLE `sektor` (
  `id` int(11) NOT NULL,
  `data_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `suhu_air` int(10) NOT NULL,
  `volume_air` float NOT NULL,
  `amoniak` varchar(4) NOT NULL,
  `ph_meter` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sektor`
--

INSERT INTO `sektor` (`id`, `data_waktu`, `suhu_air`, `volume_air`, `amoniak`, `ph_meter`) VALUES
(1, '2020-06-30 01:16:35', 24, 38, '0.88', '5');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_settings` int(11) NOT NULL,
  `codename` varchar(255) NOT NULL,
  `field_length` int(255) NOT NULL,
  `field_width` int(255) NOT NULL,
  `field_height` int(255) NOT NULL,
  `height_min` int(255) NOT NULL,
  `height_max` int(255) NOT NULL,
  `temp_min` int(255) NOT NULL,
  `temp_max` int(255) NOT NULL,
  `ph_min` int(2) NOT NULL,
  `ph_max` int(12) NOT NULL,
  `amoniak_min` double NOT NULL,
  `amoniak_max` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_settings`, `codename`, `field_length`, `field_width`, `field_height`, `height_min`, `height_max`, `temp_min`, `temp_max`, `ph_min`, `ph_max`, `amoniak_min`, `amoniak_max`) VALUES
(1, 'cherax quadricarianatus', 45, 15, 40, 0, 1000, 24, 32, 6, 8, 0, 1.2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sektor`
--
ALTER TABLE `sektor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_settings`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sektor`
--
ALTER TABLE `sektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_settings` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
