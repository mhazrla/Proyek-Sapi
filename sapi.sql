-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 11:28 AM
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
('gg gemink', '2022-07-13 08:51:23', '-56985468', '-76809583', 0, 'jago'),
('gg gemink', '2022-07-13 08:51:23', 'asfa', 'q3532', 0, 'wey2'),
('yaya', '2022-07-13 08:54:54', '13512', '12351', 0, '12512'),
('q', '2022-07-13 09:19:23', '', '', 2, ''),
('Azka', '2022-07-13 15:10:38', '11', '22', 33, 'tidak layak kurban'),
('Azka', '2022-07-13 15:26:40', '11', '22', 7, 'tidak layak kurban'),
('q', '2022-07-13 15:28:15', '11', '22', 99, 'tidak layak kurban');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `nama` varchar(20) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `speed` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`nama`, `waktu`, `latitude`, `longitude`, `speed`, `status`) VALUES
('a', '0000-00-00 00:00:00', '', '', '', ''),
('b', '0000-00-00 00:00:00', '', '', '', ''),
('c', '0000-00-00 00:00:00', '', '', '', ''),
('d', '0000-00-00 00:00:00', '', '', '', ''),
('a', '0000-00-00 00:00:00', '', '', '', ''),
('a', '0000-00-00 00:00:00', '', '', '', ''),
('z', '0000-00-00 00:00:00', '', '', '', ''),
('Azka', '2022-07-13 15:26:40', '11', '22', '7', 'tidak layak kurban'),
('uy', '2022-07-13 14:51:57', '', '', '', ''),
('q', '2022-07-13 15:28:15', '11', '22', '99', 'tidak layak kurban');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
