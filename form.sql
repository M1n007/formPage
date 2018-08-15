-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2018 at 09:14 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nama_lengkap` text,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `asal_sekolah` varchar(100) DEFAULT NULL,
  `provinsi` text,
  `kabupaten` text,
  `tempat_lahir` text,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `alamat_email` varchar(100) DEFAULT NULL,
  `tahun_lulus` varchar(5) DEFAULT NULL,
  `prog_study` text,
  `after_lulus` text,
  `where_study` varchar(500) DEFAULT NULL,
  `alasan_study` varchar(500) DEFAULT NULL,
  `where_study_work` varchar(500) DEFAULT NULL,
  `sudah_bekerja` text NOT NULL,
  `nama_instansi` varchar(250) DEFAULT NULL,
  `alamat_perusahaan` varchar(250) DEFAULT NULL,
  `jabatan` text,
  `where_you_get` text,
  `sesuai` text,
  `puas` text,
  `berhubungan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `nama_lengkap`, `jenis_kelamin`, `asal_sekolah`, `provinsi`, `kabupaten`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `alamat_email`, `tahun_lulus`, `prog_study`, `after_lulus`, `where_study`, `alasan_study`, `where_study_work`, `sudah_bekerja`, `nama_instansi`, `alamat_perusahaan`, `jabatan`, `where_you_get`, `sesuai`, `puas`, `berhubungan`) VALUES
(4, 'aldhy prakoso', 'Laki-Laki', 'ga tau', 'Texas', 'houston', 'houston', '2018-06-14', '2815361417', 'Forrankint77@cuvox.de', '2019', 'kmkmz', NULL, 'kmkmkmkmkmk', 'kmkmk', 'kmkmkm', '', 'pt awe', 'jln qnqn', 'kjkkj', 'kjkjkjkjkj', 'tidak', 'tidak', 'ya'),
(5, '', 'Laki-Laki', '', '', '', '', '0000-00-00', '', '', '', '', NULL, '', '', '', '', '', '', '', '', 'ya', 'ya', 'ya'),
(6, '', 'Laki-Laki', '', '', '', '', '0000-00-00', '', '', '', '', 'Array', '', '', '', '', '', '', '', '', 'ya', 'ya', 'ya'),
(7, '', 'Laki-Laki', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ya', 'ya', 'ya'),
(8, '', 'Laki-Laki', '', '', '', '', '0000-00-00', '', '', '', '', 'yes', '', '', '', '', '', '', '', '', 'ya', 'ya', 'ya'),
(9, '', 'Laki-Laki', '', '', '', '', '0000-00-00', '', '', '', '', 'yes', '', '', '', 'no', '', '', '', '', 'ya', 'ya', 'ya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
