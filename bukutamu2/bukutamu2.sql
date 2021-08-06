-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 05:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu2`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `notelp` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kepentingan` varchar(800) NOT NULL,
  `camera` varchar(250) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id`, `tanggal`, `nama`, `instansi`, `notelp`, `alamat`, `kepentingan`, `camera`, `jam_masuk`, `jam_keluar`) VALUES
(55, '2021-07-15', 'IQLIMA NUR HASANAH', 'ITK', '08997404088', 'GRAHA INDAH', 'BERTEMU PAK PUPUT', '1626319073.jpg', '12:00:00', '13:00:00'),
(56, '2021-07-07', 'IQLIMA NUR HASANAH', 'ITK', '08997404088', 'GRAHA INDAH', 'BERTEMU PAK PUPUT', '1625626155.jpg', '00:00:00', '00:00:00'),
(57, '2021-07-12', 'IQLIMA NUR HASANAH', 'ITK', '08997404088', 'GRAHA INDAH', 'BERTEMU PAK PUPUT', '1626065049.jpg', '00:00:00', '00:00:00'),
(59, '2021-07-14', 'artenyx', 'itk', '0987654321', 'ssamboja', 'asdfghjk', '1626239761.jpg', '10:11:00', '12:00:00'),
(62, '2021-07-14', 'iqlima', 'itk', '089999999', 'samboja', 'tdk ada', '1626246522.jpg', '00:00:00', '08:36:23'),
(64, '2021-07-15', 'iqlima Nur', 'itk', '08221113322', 'samboja', 'ga ada', '1626313037.jpg', '08:00:00', '09:37:27'),
(66, '2021-07-15', 'ryandi', 'JMTO', '1234567890', 'karang joang', 'masuk', '1626318989.jpg', '12:00:00', '11:37:17'),
(67, '2021-07-15', 'saya', 'dari mana aja', '0009988766', 'pokoknya', 'ga ada', '1626334363.jpg', '09:32:43', '15:33:11'),
(68, '2021-07-15', 'nama', 'instansi', '090909099', 'alamat', 'kepentingan', '1626334504.jpg', '09:35:04', '00:00:00'),
(69, '2021-07-15', 'nama', 'itk', '0899999999', 'alamat', 'masuk', '1626334594.jpg', '09:36:34', '15:38:17'),
(70, '2021-07-15', 'ada', 'gdvxgasv', '8737527537', 'ese', 'rs', '1626335731.jpg', '14:55:31', '15:58:04'),
(71, '2021-07-16', 'luffy', 'mugiwara', '0909090909', 'sunny go', 'cari one piece', '1626402390.jpg', '10:26:30', '00:00:00'),
(72, '2021-07-16', 'iqlima', 'coba', '009090909', 'coba', 'coba', '1626402481.jpg', '10:28:01', '00:00:00'),
(73, '2021-07-16', 'svs', 'dvsdbds', '8879', 'djcsdjb', 'jdbvjdb', '1626402578.jpg', '10:29:38', '00:00:00'),
(74, '2021-07-16', 'hcvhsavc', 'shvhdsvj', '8989890', 'hszcvhdsv', 'hdsvhsdvbjsd', '1626402996.jpg', '10:36:36', '00:00:00'),
(75, '2021-07-16', 'fdcbfsfvwe', 'ydsvcwsevj', '09898890', 'jsdvchsDVhb', 'sjcv sdhcvhsdvhd', '1626404451.jpg', '11:00:51', '00:00:00'),
(76, '2021-07-16', 'hfvbsHVbhsb', 'bvfhbhfvbh', '098779', 'sVBbev', 'sjVHshbvh', '1626404470.jpg', '11:01:10', '00:00:00'),
(77, '2021-07-16', 'sdvbdshbvhdsB', 'sjvbhsdvbdshb', '877790', 'hsdvbhsdbv', 'sdvhdsbvhsdbv', '1626404936.jpg', '11:08:56', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
