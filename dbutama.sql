-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 06:50 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbutama`
--

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL,
  `birthplace` varchar(191) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `religion` enum('Islam','Katolik','Protestan','Hindu','Budha','Konghucu') DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `ktp` varchar(191) NOT NULL,
  `npwp` varchar(191) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(191) DEFAULT NULL,
  `pekerjaan` enum('PNS','TNI/Polri','Karyawan BUMN','Karyawan Swasta','Wiraswasta','Pelajar/Mahasiswa','Ibu Rumah Tangga','Tidak Bekerja') NOT NULL,
  `nama_ibukandung` varchar(191) DEFAULT NULL,
  `nomor_bpjs` varchar(191) DEFAULT NULL,
  `password` text NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peminjam_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_pinjaman` varchar(191) DEFAULT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `tenor` smallint(6) DEFAULT NULL,
  `biaya` decimal(8,2) DEFAULT NULL,
  `bunga` decimal(8,2) DEFAULT NULL,
  `total_cair` decimal(18,2) DEFAULT NULL,
  `total_cicilan` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
