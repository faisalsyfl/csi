-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2019 pada 04.53
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

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
-- Struktur dari tabel `consument`
--

CREATE TABLE `consument` (
  `consumentId` int(11) NOT NULL,
  `consumentUserId` int(11) NOT NULL,
  `consumentName` varchar(255) NOT NULL,
  `consumentAddress` text NOT NULL,
  `consumentRegional` varchar(255) NOT NULL,
  `consumentPhone` varchar(255) NOT NULL,
  `consumentEmail` varchar(255) NOT NULL,
  `consumentFax` varchar(255) NOT NULL,
  `consumentWebsite` varchar(255) DEFAULT NULL,
  `consumentStatus` int(11) DEFAULT NULL,
  `consumentCreatedAt` timestamp NULL DEFAULT NULL,
  `consumentUpdateAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `document`
--

CREATE TABLE `document` (
  `documentId` int(11) NOT NULL,
  `documentEmployeeId` int(11) NOT NULL,
  `documentFileUpload` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `documentCountDownload` int(11) DEFAULT NULL,
  `documentFilename` varchar(255) DEFAULT NULL,
  `documentLastUpdate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `employeeId` int(11) NOT NULL,
  `employeeUsername` varchar(255) NOT NULL,
  `employeePassword` varchar(255) NOT NULL,
  `employeeEmail` varchar(255) NOT NULL,
  `employeeNIP` varchar(255) NOT NULL,
  `employeePhone` varchar(255) NOT NULL,
  `employeeCustomer` tinyblob,
  `employeePermissions` text,
  `employeeActivated` time DEFAULT NULL,
  `employeeActive` tinyblob,
  `employeeActivationCode` varchar(255) DEFAULT NULL,
  `employeeActivatedAt` timestamp NULL DEFAULT NULL,
  `employeeLastLogin` timestamp NULL DEFAULT NULL,
  `employeePersistCode` varchar(255) DEFAULT NULL,
  `employeeResetPassword` varchar(255) DEFAULT NULL,
  `employeeFirstName` varchar(255) DEFAULT NULL,
  `employeeLastName` varchar(255) DEFAULT NULL,
  `employeCreatedAt` timestamp NULL DEFAULT NULL,
  `employeeUpdateAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
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
  `info_tambahan8` varchar(30) NOT NULL,
  `penawaran` varchar(255) NOT NULL,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`id_form`, `sertifikasi_manajemen_diminati`, `status_aplikasi_sertifikasi`, `nama_organisasi`, `tlp_fax`, `website`, `jenis_organisasi`, `jml_manajemen`, `jml_admin`, `jml_parttime`, `jml_nonpermanen`, `jml_opl_shift1`, `jml_opl_shift2`, `jml_opl_shift3`, `pekerjaan_shift`, `jml_personil`, `alamat_kantor_pusat`, `l_kegiatan_utama`, `p_kegiatan_utama`, `multilokasi`, `ruanglingkup_sertifikasi`, `info_tambahan1`, `info_tambahan2`, `info_tambahan3`, `info_tambahan4`, `info_tambahan5`, `info_tambahan6`, `info_tambahan7`, `info_tambahan8`, `penawaran`, `status`) VALUES
(5, 'Manajemen keselamatan OHSAS 18001', 'Sertifikasi awal', 'PT. Bio Gas(Persero)', '+62222033755', 'http://www.biofarma.', 'BUMN', 1, 1, 1, 1, 1, 1, 1, 'Masing-masing shift ', 7, 'Jl. Pasteur No.28 Bandung Jawa Barat Indonesia 401', 'Jl. Pasteur No.28 Bandung Jawa Barat Indonesia 401', 'Test Kegiatan Proses', 'Ya', 'Test Ruang Lingkup Sertifikasi', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Test Peraturan Perundangan', 'Test sudah berapa lama', '', NULL),
(14, 'Manajemen mutu ISO 9001', 'Sertifikasi ulang', 'PT. Bio Farma (Persero)', '+62222033755', 'http://www.biofarma.', 'BUMN', 1, 1, 1, 1, 5, 5, 5, 'Setiap shift melakuk', 35, 'Gud', 'Gad', 'asd', 'Ya', 'asdadad', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'asd', 'asd', '', '{\"1\":\"1.jpg,0\",\"2\":\"0\",\"3\":\"0,0,0,0\",\"4\":\"0,0,0,0,0,0,0\",\"5\":\"0,0,0,0,0,0,0,0,0,0\",\"6\":\"0,0\",\"7\":\"0,0,0,0,0\"}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `statusId` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `aplikasiSertifikasi` varchar(20) NOT NULL,
  `kajianAplikasi` varchar(20) NOT NULL,
  `penawaran` varchar(20) NOT NULL,
  `auditTahap1` varchar(20) NOT NULL,
  `auditTahap2` varchar(20) NOT NULL,
  `evaluasi` varchar(20) NOT NULL,
  `sertifikat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`statusId`, `formId`, `aplikasiSertifikasi`, `kajianAplikasi`, `penawaran`, `auditTahap1`, `auditTahap2`, `evaluasi`, `sertifikat`) VALUES
(5, 8, '0,1', '0', '0,0,0,0', '0,0,0,0,0,0,0', '0,0,0,0,0,0,0,0,0,0', '0,0', '0,0,0,0,0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `consument`
--
ALTER TABLE `consument`
  ADD PRIMARY KEY (`consumentId`) USING BTREE;

--
-- Indeks untuk tabel `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`documentId`) USING BTREE;

--
-- Indeks untuk tabel `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeId`) USING BTREE;

--
-- Indeks untuk tabel `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `consument`
--
ALTER TABLE `consument`
  MODIFY `consumentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `document`
--
ALTER TABLE `document`
  MODIFY `documentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `statusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
