-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2022 at 04:13 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17072873_crashtrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftaralat`
--

CREATE TABLE `daftaralat` (
  `id_Daftaralat` int(5) NOT NULL,
  `id_Alat` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftaralat`
--

INSERT INTO `daftaralat` (`id_Daftaralat`, `id_Alat`, `status`) VALUES
(0, '1', 'registered'),
(1, '2', 'registered'),
(2, '3', 'registered'),
(3, '4', 'registered'),
(4, '5', 'registered'),
(5, '6', 'registered'),
(6, '7', 'registered');

-- --------------------------------------------------------

--
-- Table structure for table `daftarlacak`
--

CREATE TABLE `daftarlacak` (
  `Id_Lacak` int(5) NOT NULL,
  `Pengendara` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Alat` int(5) NOT NULL,
  `Koordinat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daftarlacak`
--

INSERT INTO `daftarlacak` (`Id_Lacak`, `Pengendara`, `Id_Alat`, `Koordinat`, `Waktu`) VALUES
(3, 'ajijan', 2, '-8.619616 116.097506', '2021-05-20 00:12:25'),
(4, 'not set', 3, '-8.619616 116.097506', '2021-05-20 00:12:30'),
(9, 'ajijan', 2, '-8.619616 116.097506', '2021-05-24 22:26:37'),
(10, 'ajijan', 2, '-8.619616 116.097506', '2021-05-24 22:33:12'),
(12, 'not set', 6, '-8.619616 116.097506', '2021-05-24 22:33:40'),
(14, 'ajijan', 2, '123', '2021-06-09 19:19:06'),
(16, 'ajijan', 2, '123', '2021-09-01 14:21:42'),
(19, 'Azizan Syarofi', 1, '-8.619642, 116.097608', '2021-11-06 15:59:14'),
(21, 'Azizan Syarofi', 1, '-8.6605824,115.2024576', '2021-12-08 14:55:25'),
(22, 'Azizan Syarofi', 1, '-8.6605824,115.2024576', '2021-12-08 15:00:59'),
(23, 'Azizan Syarofi', 1, '-8.6605824,115.2024576', '2021-12-08 15:03:41'),
(24, 'Azizan Syarofi', 1, '-8.661176,115.211384', '2021-12-08 15:41:35'),
(25, 'Azizan Syarofi', 1, '-8.661176,115.211384', '2021-12-08 15:47:07'),
(26, 'Azizan Syarofi', 1, '-8.661176,115.211384', '2021-12-08 15:47:10'),
(34, 'Azizan Syarofi', 1, '-8.619416667,116.097566667', '2021-12-14 23:03:40'),
(35, 'Azizan Syarofi', 1, '-8.626016667,116.115383333', '2022-01-31 11:35:58'),
(36, 'Azizan Syarofi', 1, '-8.626009,116.115387', '2022-01-31 11:56:23'),
(37, 'Azizan Syarofi', 1, '-8.626009,116.115387', '2022-01-31 11:56:26'),
(38, 'Azizan Syarofi', 1, '-8.626009,116.115387', '2022-01-31 12:00:23'),
(39, 'Azizan Syarofi', 1, '-8.626009,116.115387', '2022-01-31 12:00:26'),
(40, 'Azizan Syarofi', 1, '-8.626009,116.115387', '2022-01-31 12:02:01'),
(41, 'Azizan Syarofi', 1, '-8.635698,116.098995', '2022-02-20 23:17:21'),
(42, 'Azizan Syarofi', 1, '-8.635700,116.098980', '2022-02-23 15:47:44'),
(43, 'Azizan Syarofi', 1, '-8.635690,116.098963', '2022-02-23 16:42:03'),
(44, 'Azizan Syarofi', 1, '-8.635690,116.098963', '2022-02-24 11:45:01'),
(45, 'Azizan Syarofi', 1, '-8.635690,116.098963', '2022-02-24 11:55:23'),
(46, 'Azizan Syarofi', 1, '-8.635690,116.098963', '2022-02-24 11:57:24'),
(47, 'Azizan Syarofi', 1, '-8.635690,116.098963', '2022-02-24 12:00:29'),
(48, 'Azizan Syarofi', 1, '-8.635690,116.098963', '2022-02-24 12:08:12'),
(49, 'Azizan Syarofi', 1, '-8.635690,116.098963', '2022-02-24 12:11:47'),
(50, 'Azizan Syarofi', 1, ',23', '2022-07-08 18:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_Alat` varchar(10) NOT NULL,
  `no_Plat` varchar(10) NOT NULL,
  `nm_Pengendara` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `tipe` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_Alat`, `no_Plat`, `nm_Pengendara`, `merk`, `tipe`) VALUES
('1', '3152 AZ', 'Azizan Syarofi', 'Yamaha', 'Mio S'),
('2', 'ASD123', 'ajijan', 'yamaha', 'yamaha z 115'),
('3', 'not set', 'not set', 'not set', 'not set'),
('4', 'not set', 'not set', 'not set', 'not set'),
('5', '3573 AD', 'Azizan', 'Honda', 'Vario 150'),
('6', 'not set', 'not set', 'not set', 'not set'),
('7', '2121 K', 'Ajijan', 'Yamaha', 'Jupiter Z');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_Pemilik` int(5) NOT NULL,
  `id_Alat` varchar(10) NOT NULL,
  `id_Pengguna` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_Pemilik`, `id_Alat`, `id_Pengguna`) VALUES
(0, '1', 0),
(1, '2', 1),
(2, '3', 2),
(3, '4', 3),
(4, '5', 0),
(5, '5', 4),
(6, '6', 5),
(7, '1', 6),
(10, '6', 9),
(11, '7', 0),
(17, '7', 13),
(18, '1', 14),
(19, '5', 14),
(20, '7', 14),
(21, '1', 15),
(22, '5', 15),
(23, '7', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_Pengguna` int(5) NOT NULL,
  `nm_Pengguna` varchar(25) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `parent` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_Pengguna`, `nm_Pengguna`, `username`, `password`, `email`, `cid`, `parent`) VALUES
(0, 'Azizan Syarofi', 'ajijan', 'ajijan', 'zerostratagem@gmail.com', '1864881662', 'yes'),
(1, 'ajijan2', 'ajijan2', 'ajijan2', 'ajijan2@gmail.com', 'not set', 'yes'),
(2, 'not set', 'a', 'a', 'a@g.m', '1867149856', 'yes'),
(3, 'not set', 'av', 'a', 'a@g.l', 'not set', 'yes'),
(4, 'paman', 'paman', 'paman123', 'paman123@gmail.com', 'not set', 'no'),
(5, 'not set', 'asd', 'asd', 'asd@g.m', 'not set', 'yes'),
(6, 'Kakak', 'kakak', 'kakak123', 'kakak123@gmail.com', 'not set', 'no'),
(9, 'teman asd', 'temanasd', 'temanasd', 'temanasd@g.m', 'not set', 'no'),
(13, 'adik', 'adik', 'adik123', 'adik123@gmail.com', 'not set', 'no'),
(14, 'Bibi', 'bibi', 'Bibi321', 'bibi321@gmail.com', 'not set', 'no'),
(15, 'Kakak', 'kakak123', 'kakak321', 'kakaaa@gmail.com', '1867149856', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftaralat`
--
ALTER TABLE `daftaralat`
  ADD PRIMARY KEY (`id_Daftaralat`);

--
-- Indexes for table `daftarlacak`
--
ALTER TABLE `daftarlacak`
  ADD PRIMARY KEY (`Id_Lacak`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_Alat`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_Pemilik`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_Pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
