-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 04:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csi`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL,
  `sertifikasi_manajemen_diminati` varchar(255) NOT NULL,
  `status_aplikasi_sertifikasi` varchar(255) NOT NULL,
  `nama_organisasi` varchar(255) NOT NULL,
  `tlp_fax` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `jenis_organisasi` varchar(255) NOT NULL,
  `jml_manajemen` int(5) NOT NULL,
  `jml_admin` int(5) NOT NULL,
  `jml_parttime` int(5) NOT NULL,
  `jml_nonpermanen` int(5) NOT NULL,
  `jml_opl_shift1` int(5) NOT NULL,
  `jml_opl_shift2` int(5) NOT NULL,
  `jml_opl_shift3` int(5) NOT NULL,
  `pekerjaan_shift` varchar(255) NOT NULL,
  `jml_personil` int(5) NOT NULL,
  `alamat_kantor_pusat` varchar(255) NOT NULL,
  `l_kegiatan_utama` varchar(255) NOT NULL,
  `p_kegiatan_utama` varchar(255) NOT NULL,
  `multilokasi` varchar(5) NOT NULL,
  `ruanglingkup_sertifikasi` varchar(255) NOT NULL,
  `info_tambahan1` varchar(5) NOT NULL,
  `info_tambahan2` varchar(5) NOT NULL,
  `info_tambahan3` varchar(5) NOT NULL,
  `info_tambahan4` varchar(5) NOT NULL,
  `info_tambahan5` varchar(5) NOT NULL,
  `info_tambahan6` varchar(5) NOT NULL,
  `info_tambahan7` varchar(255) NOT NULL,
  `info_tambahan8` varchar(255) NOT NULL,
  `file_dokumen_persyaratan1` varchar(255) NOT NULL,
  `file_dokumen_persyaratan2` varchar(255) NOT NULL,
  `file_dokumen_persyaratan3` varchar(255) NOT NULL,
  `file_dokumen_persyaratan4` varchar(255) NOT NULL,
  `file_dokumen_persyaratan5` varchar(255) NOT NULL,
  `penawaran` varchar(255) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
