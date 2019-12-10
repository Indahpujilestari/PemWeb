-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 10:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buah`
--

CREATE TABLE `tb_buah` (
  `kode_buah` int(11) NOT NULL,
  `nama_buah` varchar(20) DEFAULT NULL,
  `jenis_buah` varchar(20) DEFAULT NULL,
  `stok_buah` int(3) DEFAULT NULL,
  `harga_buah` double DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buah`
--

INSERT INTO `tb_buah` (`kode_buah`, `nama_buah`, `jenis_buah`, `stok_buah`, `harga_buah`, `foto`) VALUES
(1, 'apel', 'lokal', 40, 5000, NULL),
(2, 'apel', 'lokal', 40, 5000, NULL),
(3, 'manggis', 'lokal', 40, 5000, NULL),
(4, 'manggis', 'lokal', 40, 5000, NULL),
(5, 'kelapa', 'murah', 12, 1000, NULL),
(8, 'apel', 'lokal', 6, 80000, NULL),
(9, 'anggur', 'buah rumahan', 40, 5000, NULL),
(10, '', '', 0, 0, NULL),
(11, '', '', 0, 0, NULL),
(12, '', '', 0, 0, NULL),
(13, 'mangga', 'rumahan', 100, 100, NULL),
(14, 'tesssssss', 'buah rumahan', 15, 25000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'Admin Peken', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buah`
--
ALTER TABLE `tb_buah`
  ADD PRIMARY KEY (`kode_buah`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buah`
--
ALTER TABLE `tb_buah`
  MODIFY `kode_buah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
