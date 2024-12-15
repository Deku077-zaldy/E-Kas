-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2024 at 06:50 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `pass`) VALUES
(1, 'Administrator I', 'dicky@gmail.com', '2'),
(3, 'Administrator II', 'junet@gmail.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` int NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `catatan`) VALUES
(1, 'Besok, Hari minggu akan ada kunjungan dari pihak dinas untuk mengecek kinerja karyawan.'),
(2, 'Hari Kamis jam 8 akan ada rapat, diharapkan kepada semua karyawan agar dapat berhadir.'),
(3, 'Tingkatkan lagi pendapatan, dan minimalkan pengeluaran'),
(4, 'tgl 6 domain dan hosting banyak yang akan expired, dan harus diperpanjang lagi');

-- --------------------------------------------------------

--
-- Table structure for table `hutang`
--

CREATE TABLE `hutang` (
  `id_hutang` int NOT NULL,
  `jumlah` int NOT NULL,
  `tgl_hutang` date NOT NULL,
  `alasan` text NOT NULL,
  `penghutang` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hutang`
--

INSERT INTO `hutang` (`id_hutang`, `jumlah`, `tgl_hutang`, `alasan`, `penghutang`) VALUES
(18, 50000, '2022-08-20', 'Beli Batrai Mic', 'Beli Batrai Mic'),
(20, 50000, '2024-12-02', 'Sewa Ruangan', 'Sewa Ruangan');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int NOT NULL,
  `nama` varchar(40) NOT NULL,
  `posisi` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `umur` int NOT NULL,
  `kontak` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `posisi`, `alamat`, `umur`, `kontak`) VALUES
(1, 'Arya', 'Ketua Umum', 'Denpasar', 20, '082332442552'),
(2, 'Cahya', 'Wakil Ketua I', 'Denpasar', 28, '081223434553'),
(3, 'Yoga', 'Wakil Ketua II', 'Denpasar', 22, '082334455667'),
(4, 'Adhi', 'Sekertaris Jendral', 'Denpasar', 22, '081234567890'),
(5, 'Ayu', 'Bendahara', 'Denpasar', 23, '082345678901'),
(6, 'Widya', 'Sekretaris', 'Denpasar', 22, '081345678912'),
(7, 'Evan', 'Koor Komisi I', 'Denpasar', 28, '082456789023'),
(8, 'Amanda', 'Komisi I', 'Denpasar', 26, '081456789034'),
(9, 'Gusti', 'Koor Komisi II', 'Denpasar', 24, '082567890145'),
(10, 'Dicky', 'Komisi II ', 'Denpasar', 27, '081567890156'),
(11, 'Yohanes', 'Komisi II', 'Denpasar', 29, '082678901267'),
(12, 'Hansyen', 'Komisi II', 'Denpasar', 21, '081678901278'),
(13, 'Farel', 'Koor Komisi III', 'Denpasar', 22, '082789012389'),
(14, 'Justin', 'Komisi III', 'Denpasar', 25, '081789012390'),
(15, 'Artha', 'Komisi III', 'Denpasar', 23, '082890123401'),
(16, 'Hafidz', 'Koor Komisi IV', 'Denpasar', 26, '081890123412'),
(17, 'Danen', 'Komisi IV', 'Denpasar', 24, '082901234523'),
(18, 'Suma', 'Komisi IV', 'Denpasar', 27, '081901234534'),
(19, 'Cikita', 'Koor Komisi V', 'Denpasar', 22, '082012345645'),
(20, 'Gek Ayu', 'Komisi V', 'Denpasar', 21, '081012345656');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int NOT NULL,
  `tgl_pemasukan` date NOT NULL,
  `jumlah` int NOT NULL,
  `id_sumber` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `tgl_pemasukan`, `jumlah`, `id_sumber`) VALUES
(1, '2022-07-06', 5500000, 1),
(2, '2022-07-09', 7500000, 5),
(3, '2022-07-25', 8500000, 5),
(4, '2022-08-30', 550000, 3),
(5, '2022-08-02', 5700000, 5),
(6, '2022-08-04', 35500000, 1),
(7, '2022-08-06', 75800000, 1),
(8, '2022-08-06', 540000, 2),
(9, '2022-08-07', 760000, 4),
(10, '2022-08-09', 800000, 3),
(11, '2022-08-10', 8500000, 5),
(12, '2022-08-10', 800000, 3),
(13, '2022-08-13', 15000000, 1),
(14, '2022-08-15', 35000000, 1),
(15, '2022-08-16', 760000, 2),
(16, '2022-08-17', 8000000, 5),
(17, '2022-08-18', 2500000, 3),
(18, '2022-08-19', 550000, 4),
(19, '2022-08-20', 250000, 2),
(20, '2022-08-20', 250000, 2),
(21, '2022-08-21', 4500000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int NOT NULL,
  `tgl_pengeluaran` date NOT NULL,
  `jumlah` int NOT NULL,
  `id_sumber` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tgl_pengeluaran`, `jumlah`, `id_sumber`) VALUES
(1, '2022-07-15', 7500000, 6),
(2, '2022-07-16', 25000000, 7),
(3, '2022-07-11', 5500000, 8),
(4, '2022-07-12', 250000, 9),
(5, '2022-08-15', 750000, 10),
(6, '2022-08-17', 435000, 8),
(7, '2022-08-19', 253000, 9),
(8, '2022-08-18', 750000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sumber`
--

CREATE TABLE `sumber` (
  `id_sumber` int NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumber`
--

INSERT INTO `sumber` (`id_sumber`, `nama`) VALUES
(1, 'Sumber Internal'),
(2, 'Sumber Eksternal'),
(3, 'Kegiatan dan Acara'),
(4, 'Sponsorship'),
(5, 'Sumber Lainnya'),
(6, 'Kegiatan dan Acara'),
(7, 'Promosi dan Publikasi'),
(8, 'Kegiatan Rutin'),
(9, 'Operasional'),
(10, 'Sumber Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `uang`
--

CREATE TABLE `uang` (
  `id_uang` int NOT NULL,
  `tgl_uang` date NOT NULL,
  `id_pengeluaran` int DEFAULT NULL,
  `id_pendapatan` int DEFAULT NULL,
  `jumlah` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uang`
--

INSERT INTO `uang` (`id_uang`, `tgl_uang`, `id_pengeluaran`, `id_pendapatan`, `jumlah`) VALUES
(1, '2019-10-23', NULL, 1, 500000),
(2, '2019-10-24', 2, NULL, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indexes for table `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`id_hutang`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`),
  ADD KEY `id_sumber` (`id_sumber`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_sumber` (`id_sumber`);

--
-- Indexes for table `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indexes for table `uang`
--
ALTER TABLE `uang`
  ADD PRIMARY KEY (`id_uang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id_hutang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sumber`
--
ALTER TABLE `sumber`
  MODIFY `id_sumber` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uang`
--
ALTER TABLE `uang`
  MODIFY `id_uang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
