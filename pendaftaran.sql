-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Okt 2016 pada 14.33
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nama_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_nama_admin` (
`id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
`id_pendaftar` int(255) NOT NULL,
  `nilairapot` int(11) NOT NULL,
  `nilaiskhun` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_pendaftar`, `nilairapot`, `nilaiskhun`) VALUES
(1, 80, 81);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendaftaran`
--

CREATE TABLE IF NOT EXISTS `tbl_pendaftaran` (
`id_pendaftar` int(255) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `Kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `tempat_tanggal_lahir` varchar(50) NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` int(12) NOT NULL,
  `nama_ayah` text NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nama_ibu` text NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `agama_orang_tua` text NOT NULL,
  `alamat_orang_tua` varchar(50) NOT NULL,
  `no_hp_orang_tua` int(15) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_pendaftar`, `nama`, `Kelamin`, `agama`, `tempat_tanggal_lahir`, `asal_sekolah`, `nisn`, `alamat`, `no_telepon`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `agama_orang_tua`, `alamat_orang_tua`, `no_hp_orang_tua`) VALUES
(1, 'Rizqi', 'Laki-laki', 'Islam', 'Banyuwangi, 12 Juni 1996', 'SMP 1 GLAGAH', '1', 'Jl. Batanghari', 1234, 'Ayah', 'guru', 'Ibu', 'ibu rumah tangga', 'Islam', 'Jl. Batanghari', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_nama_admin`
--
ALTER TABLE `tbl_nama_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
 ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
 ADD PRIMARY KEY (`id_pendaftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_nama_admin`
--
ALTER TABLE `tbl_nama_admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
MODIFY `id_pendaftar` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
MODIFY `id_pendaftar` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
