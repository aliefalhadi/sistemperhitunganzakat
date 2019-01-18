-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 08:51 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hitungzakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_program`
--

CREATE TABLE `info_program` (
  `infoProgramId` int(11) NOT NULL,
  `infoProgramJenisProgramId` int(11) DEFAULT NULL,
  `infoProgramJudul` varchar(35) DEFAULT NULL,
  `infoProgramTanggal` date DEFAULT NULL,
  `infoProgramIsi` text,
  `infoProgramFoto` text,
  `infoProgramStatus` enum('Tidak Aktif','Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_program`
--

CREATE TABLE `jenis_program` (
  `jenisProgramId` int(11) NOT NULL,
  `jenisProgramNama` varchar(35) DEFAULT NULL,
  `jenisProgramStatus` enum('Tidak Aktif','Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_zakat`
--

CREATE TABLE `jenis_zakat` (
  `jenisZakatId` int(11) NOT NULL,
  `jenisZakatNama` varchar(35) DEFAULT NULL,
  `jenisZakatNisab` double DEFAULT NULL,
  `jenisZakatStatus` enum('Aktif','Tidak Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_zakat`
--

INSERT INTO `jenis_zakat` (`jenisZakatId`, `jenisZakatNama`, `jenisZakatNisab`, `jenisZakatStatus`) VALUES
(1, 'Zakat Emas', 583585, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `norek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id`, `nama`, `norek`) VALUES
(1, 'Bank Mandiri', '11551102688'),
(2, 'Bank Mandiri', '11551102688'),
(3, 'Bank BRI', '11551102688');

-- --------------------------------------------------------

--
-- Table structure for table `mustahik`
--

CREATE TABLE `mustahik` (
  `mustahikId` int(11) NOT NULL,
  `mustahikNama` varchar(35) DEFAULT NULL,
  `mustahikNIK` bigint(20) DEFAULT NULL,
  `mustahikTempatLahir` varchar(35) DEFAULT NULL,
  `mustahikTanggalLahir` date DEFAULT NULL,
  `mustahikJenisKelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `mustahikAlamat` varchar(35) DEFAULT NULL,
  `mustahhikTelepon` varchar(20) DEFAULT NULL,
  `mustahikEmail` varchar(35) DEFAULT NULL,
  `mustahikStatus` enum('Tidak Aktif','Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawaiId` int(11) NOT NULL,
  `pegawaiUserId` int(11) DEFAULT NULL,
  `pegawaiNama` varchar(35) DEFAULT NULL,
  `pegawaiJabatan` varchar(35) DEFAULT NULL,
  `pegawaiAlamat` varchar(35) DEFAULT NULL,
  `pegawaitelepon` varchar(20) DEFAULT NULL,
  `pegawaiEmail` varchar(35) DEFAULT NULL,
  `pegawaiStatus` enum('Tidak Aktif','Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawaiId`, `pegawaiUserId`, `pegawaiNama`, `pegawaiJabatan`, `pegawaiAlamat`, `pegawaitelepon`, `pegawaiEmail`, `pegawaiStatus`) VALUES
(1, 1, 'rifai', 'pemberdayaan', 'jl. hdhe', 'hwiiw', 'kdefn@gmail.com', 'Aktif'),
(2, 2, 'ari', 'fundraising', 'jl. hdhe', 'hwiiw', 'kdefn@gmail.com', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_zakat`
--

CREATE TABLE `pembayaran_zakat` (
  `pembayaranZakatId` int(11) NOT NULL,
  `pembayaranZakatUserId` int(11) NOT NULL,
  `pembayaranZakatJenisZakatId` int(11) NOT NULL,
  `pembayaranZakatPegawaiId` int(11) NOT NULL,
  `pembayaranZakatJumlah` int(11) NOT NULL,
  `pembayaranZakatBukti` text NOT NULL,
  `pembayaranZakatStatus` enum('Tidak Masuk','Masuk') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanya_jawab`
--

CREATE TABLE `tanya_jawab` (
  `tanyaJawanId` int(11) NOT NULL,
  `tanyaJawabUserId` int(11) DEFAULT NULL,
  `tanyaJawabPertanyaan` text,
  `tanyaJawabJawaban` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` varchar(35) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `foto` text,
  `tanggal_pendaftaran` date DEFAULT NULL,
  `role` enum('Admin','pengguna','Amil') DEFAULT NULL,
  `status` enum('Tidak Aktif','Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `username`, `password`, `nama`, `email`, `telepon`, `foto`, `tanggal_pendaftaran`, `role`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '089878987867', NULL, '2018-11-27', 'Admin', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `zakat_nonmember`
--

CREATE TABLE `zakat_nonmember` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(110) DEFAULT NULL,
  `noHp` varchar(11) DEFAULT NULL,
  `alamat` text,
  `jenisZakatId` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `metodepembayaranId` int(11) DEFAULT NULL,
  `tglPembayaran` datetime DEFAULT NULL,
  `pegawaiId` int(11) DEFAULT NULL,
  `status` enum('belum-konfirmasi','sudah-konfirmasi') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zakat_nonmember`
--

INSERT INTO `zakat_nonmember` (`id`, `nama`, `email`, `noHp`, `alamat`, `jenisZakatId`, `total`, `metodepembayaranId`, `tglPembayaran`, `pegawaiId`, `status`) VALUES
(1, 'alief', 'alief@gmail.com', '88888888', 'alief@gmail.com', 1, 2917925, 1, '2018-12-09 00:00:00', 1, 'belum-konfirmasi'),
(2, 'bima', 'bima@gmail.com', '08236745735', 'jl. Garuda sakti', 1, 2917925, 1, '2018-12-10 00:00:00', 1, 'belum-konfirmasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_program`
--
ALTER TABLE `info_program`
  ADD PRIMARY KEY (`infoProgramId`);

--
-- Indexes for table `jenis_program`
--
ALTER TABLE `jenis_program`
  ADD PRIMARY KEY (`jenisProgramId`);

--
-- Indexes for table `jenis_zakat`
--
ALTER TABLE `jenis_zakat`
  ADD PRIMARY KEY (`jenisZakatId`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mustahik`
--
ALTER TABLE `mustahik`
  ADD PRIMARY KEY (`mustahikId`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawaiId`);

--
-- Indexes for table `pembayaran_zakat`
--
ALTER TABLE `pembayaran_zakat`
  ADD PRIMARY KEY (`pembayaranZakatId`);

--
-- Indexes for table `tanya_jawab`
--
ALTER TABLE `tanya_jawab`
  ADD PRIMARY KEY (`tanyaJawanId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `zakat_nonmember`
--
ALTER TABLE `zakat_nonmember`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_program`
--
ALTER TABLE `info_program`
  MODIFY `infoProgramId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_program`
--
ALTER TABLE `jenis_program`
  MODIFY `jenisProgramId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_zakat`
--
ALTER TABLE `jenis_zakat`
  MODIFY `jenisZakatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mustahik`
--
ALTER TABLE `mustahik`
  MODIFY `mustahikId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawaiId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran_zakat`
--
ALTER TABLE `pembayaran_zakat`
  MODIFY `pembayaranZakatId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tanya_jawab`
--
ALTER TABLE `tanya_jawab`
  MODIFY `tanyaJawanId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zakat_nonmember`
--
ALTER TABLE `zakat_nonmember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
