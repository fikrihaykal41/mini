-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 11:22 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gelora`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 123);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `notampil` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pbb` int(11) NOT NULL,
  `danton` int(11) NOT NULL,
  `penalty1` int(11) NOT NULL,
  `utama` int(11) NOT NULL,
  `vafor` int(11) NOT NULL,
  `penalty2` int(11) NOT NULL,
  `umum` int(11) NOT NULL,
  `kostum` int(11) NOT NULL,
  `favorit` int(11) NOT NULL,
  `pasukan` int(11) NOT NULL,
  `ujianperpang` int(11) NOT NULL,
  `pelatih` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`notampil`, `nama`, `pbb`, `danton`, `penalty1`, `utama`, `vafor`, `penalty2`, `umum`, `kostum`, `favorit`, `pasukan`, `ujianperpang`, `pelatih`) VALUES
(1, 'SMAN 1 Kota Tangerang', 2000, 100, 20, 2080, 900, 100, 2880, 123, 23, 2880, 13, 2893),
(2, 'SMAN 2 Kota Tangerang', 123, 122, 123, 122, 451, 123, 450, 123, 14, 450, 23, 473),
(3, 'SMAN 3 Kota Tangerang', 12, 12, 12, 12, 324, 12, 324, 3, 312, 324, 12, 336),
(4, 'SMAN 4 Kota Tangerang', 231, 121, 21, 331, 456, 323, 464, 312, 3, 464, 123, 587),
(5, 'SMAN 5 Kota Tangerang', 1233, 123, 12, 1344, 312, 123, 1533, 123, 123, 1533, 3, 1536),
(6, 'SMAN 6 Kota Tangerang', 1232, 121, 231, 1122, 121, 121, 1122, 23, 213, 1122, 12, 1134),
(7, 'SMAN 7 Kota Tangerang', 1212, 231, 425, 1018, 533, 123, 1428, 123, 3, 1428, 3, 1431),
(8, 'SMAN 8 Kota Tangerang', 122, 312, 2, 432, 2, 3, 431, 123, 23, 431, 23, 454),
(9, 'SMAN 9 Kota Tangerang', 1, 1, 1, 1, 1, 1, 1, 123, 213, 1, 123, 124),
(10, 'SMAN 10 Kota Tangerang', 1123, 213, 32, 1304, 3, 32, 1275, 123, 23, 1275, 123, 1398),
(11, 'SMAN 11 Kota Tangerang', 231, 132, 123, 240, 123, 23, 340, 12, 32, 340, 213, 553),
(12, 'SMAN 12 Kota Tangerang', 12, 23, 32, 3, 22, 12, 13, 12, 2, 13, 2, 15),
(13, 'SMAN 13 Kota Tangerang', 12, 212, 21, 203, 12, 12, 203, 2, 3, 203, 4, 207),
(14, 'SMAN 14 Kota Tangerang', 12, 221, 453, -220, 123, 123, -220, 73, 23, -220, 23, -197),
(15, 'SMAN 15 Kota Tangerang', 2000, 100, 0, 2100, 1000, 0, 3100, 200, 300, 3100, 150, 3250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`notampil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
