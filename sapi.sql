-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 10:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `logdata`
--

CREATE TABLE `logdata` (
  `nama` varchar(30) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `latitude` varchar(80) NOT NULL,
  `longitude` varchar(80) NOT NULL,
  `speed` float NOT NULL,
  `status` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logdata`
--

INSERT INTO `logdata` (`nama`, `waktu`, `latitude`, `longitude`, `speed`, `status`) VALUES
('dummy', '2022-07-19 11:13:24', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 11:14:18', '-6.5925152', '106.8803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 11:14:28', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 11:36:07', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 11:36:07', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 11:36:15', '-6.5925152', '106.8803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 11:36:52', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 11:38:47', '-6.5925152', '106.8803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 11:40:10', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 11:40:49', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 13:13:26', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 14:49:29', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 14:49:42', '-6.6925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 14:49:54', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 14:50:26', '-6.6925152', '106.7803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 14:50:31', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:51:38', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:51:43', '-6.6925152', '106.7803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:51:55', '-6.5925152', '106.6803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:52:03', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:53:14', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:53:20', '-6.7925152', '106.7803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:53:28', '-6.6925152', '106.7803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:53:36', '-6.4925152', '106.7803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:53:44', '-6.5925152', '106.5803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:53:56', '-6.5925152', '106.6803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:54:05', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:54:15', '-6.5925152', '106.7803399', 66, 'tidak layak kurban'),
('aa', '2022-07-19 14:54:30', '-6.5925152', '106.8803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 14:59:12', '-6.5925152', '106.8803399', 66, 'tidak layak kurban'),
('a', '2022-07-19 14:59:18', '-6.5925152', '106.8803399', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 15:01:24', '-6.5925152', '106.7903404', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 15:01:35', '-6.5925152', '106.7403404', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 15:01:40', '-6.5925152', '106.73403404', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 15:01:44', '-6.5925152', '106.77403404', 66, 'tidak layak kurban'),
('dummy', '2022-07-19 15:01:49', '-6.5925152', '106.78403404', 66, 'tidak layak kurban');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `nama` varchar(20) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `latitude` varchar(255) NOT NULL DEFAULT '-6.591175',
  `longitude` varchar(255) NOT NULL DEFAULT '106.804481',
  `speed` varchar(10) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`nama`, `waktu`, `latitude`, `longitude`, `speed`, `status`) VALUES
('a', '2022-07-19 15:12:44', '-6.591175', '106.804481', '0', ''),
('dummy', '2022-07-19 15:01:49', '-6.5925152', '106.78403404', '66', 'tidak layak kurban'),
('Sapi jelekwq', '2022-07-14 15:43:50', '-6.5925152', '106.7903404', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
