-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 03:07 PM
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
-- Database: `fisdas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `tanggal`) VALUES
(1, 'Penerimaan Asisten', '<p>Penerimaan asisten 2020 akan segera dilaksanakan</p>\r\n', '2020-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pengulangan`
--

CREATE TABLE `jadwal_pengulangan` (
  `npm` varchar(10) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelompok` varchar(5) NOT NULL,
  `shift` int(2) NOT NULL,
  `modul_ulang` varchar(5) NOT NULL,
  `tgl_ulang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_pengulangan`
--

INSERT INTO `jadwal_pengulangan` (`npm`, `kelas`, `nama`, `kelompok`, `shift`, `modul_ulang`, `tgl_ulang`) VALUES
('52415323', '4IA15', 'Fachri Hidayat', '18 A', 2, 'K2', '2019-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_praktikum`
--

CREATE TABLE `jadwal_praktikum` (
  `npm` varchar(8) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelompok` varchar(5) NOT NULL,
  `m1` varchar(2) NOT NULL,
  `m2` varchar(2) NOT NULL,
  `m3` varchar(2) NOT NULL,
  `m4` varchar(2) NOT NULL,
  `m5` varchar(2) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `shift` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_praktikum`
--

INSERT INTO `jadwal_praktikum` (`npm`, `kelas`, `nama`, `kelompok`, `m1`, `m2`, `m3`, `m4`, `m5`, `hari`, `shift`) VALUES
('52415323', '4IA15', 'Fachri Hidayat', '17 A', 'K1', 'K2', 'M1', 'L2', 'L1', 'Senin', 3),
('52416254', '4IA15', 'Iman Rais', '18 A', 'K2', 'K1', 'K8', 'O7', 'O2', 'Senin', 3),
('57415386', '4IA17', 'zaka', '17 A', 'K2', 'K1', 'M0', 'M1', 'M3', 'Selasa', 4);

-- --------------------------------------------------------

--
-- Table structure for table `kalender_akademik`
--

CREATE TABLE `kalender_akademik` (
  `id_kalender` int(11) NOT NULL,
  `kegiatan` text NOT NULL,
  `tanggal_kegiatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kalender_akademik`
--

INSERT INTO `kalender_akademik` (`id_kalender`, `kegiatan`, `tanggal_kegiatan`) VALUES
(1, 'Pendistribusian FRS ke mahasiswa melalui situs baak.gunadarma.ac.id', '6 Maret – 23 Maret 2019'),
(2, 'Praktikum Minggu Kedua', '6 Maret – 23 Maret 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_pengulangan`
--
ALTER TABLE `jadwal_pengulangan`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `jadwal_praktikum`
--
ALTER TABLE `jadwal_praktikum`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  ADD PRIMARY KEY (`id_kalender`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  MODIFY `id_kalender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
