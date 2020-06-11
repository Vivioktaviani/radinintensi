-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 12:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radininten`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(4) NOT NULL,
  `nomor_dokumen` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nama_dokumen` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tanggal_dokumen` date NOT NULL,
  `tujuan_dokumen` enum('kepala bandara','kepala koordinator') CHARACTER SET latin1 NOT NULL,
  `file_dokumen` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `komentar` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(4) NOT NULL,
  `nip` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jabatan` varchar(20) CHARACTER SET latin1 NOT NULL,
  `unit` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `role` enum('kepala bandara','pegawai kampen','kepala staff','') CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama`, `jabatan`, `unit`, `password`, `role`) VALUES
(1, '1802071310980002', 'Margareta Oktaviani ', 'Staff Kampen', 'Kampen', 'vivi', 'pegawai kampen'),
(2, '1802071105990003', 'Arjuna Satrio ', 'kepala bandara', 'kepala ', 'arjuna', 'kepala bandara');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pengiriman`
--

CREATE TABLE `riwayat_pengiriman` (
  `id_pengiriman` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `status` enum('0','1','') NOT NULL,
  `komentar` varchar(1000) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nomor_dokumen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `riwayat_pengiriman`
--
ALTER TABLE `riwayat_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
