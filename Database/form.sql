-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2019 at 01:30 AM
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
  `sertifikasi_manajemen_diminati` varchar(50) NOT NULL,
  `status_aplikasi_sertifikasi` varchar(30) NOT NULL,
  `nama_organisasi` varchar(30) NOT NULL,
  `tlp_fax` varchar(15) NOT NULL,
  `website` varchar(20) NOT NULL,
  `jenis_organisasi` varchar(20) NOT NULL,
  `jml_manajemen` int(5) NOT NULL,
  `jml_admin` int(5) NOT NULL,
  `jml_parttime` int(5) NOT NULL,
  `jml_nonpermanen` int(5) NOT NULL,
  `jml_opl_shift1` int(5) NOT NULL,
  `jml_opl_shift2` int(5) NOT NULL,
  `jml_opl_shift3` int(5) NOT NULL,
  `pekerjaan_shift` varchar(20) NOT NULL,
  `jml_personil` int(5) NOT NULL,
  `alamat_kantor_pusat` varchar(50) NOT NULL,
  `l_kegiatan_utama` varchar(50) NOT NULL,
  `p_kegiatan_utama` varchar(30) NOT NULL,
  `multilokasi` varchar(5) NOT NULL,
  `ruanglingkup_sertifikasi` varchar(30) NOT NULL,
  `info_tambahan1` varchar(5) NOT NULL,
  `info_tambahan2` varchar(5) NOT NULL,
  `info_tambahan3` varchar(5) NOT NULL,
  `info_tambahan4` varchar(5) NOT NULL,
  `info_tambahan5` varchar(5) NOT NULL,
  `info_tambahan6` varchar(5) NOT NULL,
  `info_tambahan7` varchar(30) NOT NULL,
  `info_tambahan8` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id_form`, `sertifikasi_manajemen_diminati`, `status_aplikasi_sertifikasi`, `nama_organisasi`, `tlp_fax`, `website`, `jenis_organisasi`, `jml_manajemen`, `jml_admin`, `jml_parttime`, `jml_nonpermanen`, `jml_opl_shift1`, `jml_opl_shift2`, `jml_opl_shift3`, `pekerjaan_shift`, `jml_personil`, `alamat_kantor_pusat`, `l_kegiatan_utama`, `p_kegiatan_utama`, `multilokasi`, `ruanglingkup_sertifikasi`, `info_tambahan1`, `info_tambahan2`, `info_tambahan3`, `info_tambahan4`, `info_tambahan5`, `info_tambahan6`, `info_tambahan7`, `info_tambahan8`) VALUES
(5, 'Manajemen keselamatan OHSAS 18001', 'Sertifikasi awal', 'PT. Bio Farma (Persero)', '+62222033755', 'http://www.biofarma.', 'BUMN', 1, 1, 1, 1, 1, 1, 1, 'Masing-masing shift ', 7, 'Jl. Pasteur No.28 Bandung Jawa Barat Indonesia 401', 'Jl. Pasteur No.28 Bandung Jawa Barat Indonesia 401', 'Test Kegiatan Proses', 'Ya', 'Test Ruang Lingkup Sertifikasi', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Test Peraturan Perundangan', 'Test sudah berapa lama'),
(6, 'Manajemen mutu ISO 9001', 'Sertifikasi awal', 'PT. Bio Farma (Persero)', '+62222033755', 'http://www.biofarma.', 'BUMN', 3, 3, 3, 3, 3, 3, 3, 'Setiap shift melakuk', 21, 'Jl. Pasteur No.28 Bandung Jawa Barat Indonesia 401', 'Jl. Pasteur No.28 Bandung Jawa Barat Indonesia 401', 'Test Kegiatan Proses', 'Ya', 'Test Ruang Lingkup Sertifikasi', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Test Peraturan Perundangan', 'Test sudah berapa lama'),
(7, 'Manajemen lingkungan ISO 14001', 'Sertifikasi awal', 'PT. Bio Farma (Persero)', '+62222033755', 'http://www.biofarma.', 'BUMN', 1, 1, 1, 1, 1, 1, 1, 'Setiap shift melakuk', 7, 'Jl. Pasteur No.28 Bandung Jawa Barat Indonesia 401', 'Jl. Pasteur No.28 Bandung Jawa Barat Indonesia 401', 'Test Kegiatan Proses', 'Tidak', 'Test Ruang Lingkup Sertifikasi', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Test Peraturan Perundangan', 'Test sudah berapa lama');

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
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
