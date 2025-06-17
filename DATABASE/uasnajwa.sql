-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2025 at 02:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasnajwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `iddokter` int(150) NOT NULL,
  `nama_dokter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`iddokter`, `nama_dokter`) VALUES
(2, 'dr. Andi Pratama - Umum'),
(3, 'dr. Intan Kusuma - Pediatri'),
(4, 'dr. Budi Santoso - Internis'),
(5, 'dr. Rendy Mahardika -  Ahli Bedah'),
(6, 'dr. Melati Wulandari - Obgyn'),
(7, 'dr. Fajar Rizky - Oftalmologis'),
(8, 'dr. Siska Handayani - THT'),
(9, 'dr. Yoga Prasetyo - Psikiater');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idpasien` int(200) NOT NULL,
  `nama_pasien` varchar(200) NOT NULL,
  `nama_dokter` varchar(150) NOT NULL,
  `jadwal_pasien` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `idpendaftaran` int(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(150) NOT NULL,
  `keluhan` text NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `waktu_kunjung` time NOT NULL,
  `iddokter` varchar(200) NOT NULL,
  `status` varchar(50) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`idpendaftaran`, `nama`, `tgl_lahir`, `alamat`, `telp`, `keluhan`, `tgl_pendaftaran`, `tgl_kunjung`, `waktu_kunjung`, `iddokter`, `status`) VALUES
(4, 'Rina Ayu', '1997-06-12', 'Jl. Mawar No. 25', '08776567780', 'demam tinggi dan batuk', '2025-06-12', '2025-06-19', '12:00:00', '2', 'disetujui'),
(5, 'Budi Santoso', '1995-05-04', 'Jl. Mawar No. 10', '08576326011', 'Sakit perut berulang', '2025-06-12', '2025-07-12', '13:00:00', '4', 'disetujui'),
(6, 'Clara Widya', '2015-04-22', 'Jl. Kenangan No. 7', '08952900129', 'Demam dan pilek', '2025-06-13', '2025-06-15', '15:00:00', '3', 'disetujui'),
(8, 'Erika Hidayat', '1992-12-12', 'Jl. Anggrek No. 19', '08119080076', 'Masalah Kehamilan', '2025-06-15', '2025-06-20', '12:00:00', '6', 'tidak disetujui'),
(9, 'Dimas Putra', '1988-04-23', 'Jl. Flamboyan No. 88', '08323894755', 'Cedera kaki', '2025-06-15', '2025-06-20', '09:00:00', '5', 'disetujui'),
(14, 'Fajar Nugroho', '1978-03-12', 'Jl. Cendana No. 34', '08369007645', 'Mata kabur dan nyeri', '2025-06-16', '2025-06-17', '15:00:00', '7', 'pending'),
(16, 'Gina Lestari', '2002-02-12', 'Jl. Dahlia No. 23', '08127890400', 'Gangguan pendengaran', '2025-06-16', '2025-06-16', '10:00:00', '8', 'pending'),
(20, 'Hendra Gunawan', '1985-11-18', 'Jl. Sakura No. 2', '08990345677', 'Stress berat dan insomnia', '2025-06-16', '2025-06-20', '10:00:00', '9', 'pending'),
(21, 'Intan Sari', '1998-09-04', 'Jl. Seruni No. 11', '08157890000', 'Radang tenggorokan', '2025-06-16', '2025-06-17', '13:00:00', '8', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `create_at`) VALUES
(9, 'adminnajwa', '$2y$10$MXCoPndIY19WePUAPPgWoeMgAr5xEP1Gv0kG6T2UjC0m5ePucFR3W', 'admin', '2025-06-15 16:20:09'),
(10, 'usernajwa', '$2y$10$B7fKFotG9jZ65vFG9C6oeOiLt27AM8emKC.dExCmkqXw3QPxGdPeW', 'user', '2025-06-15 16:20:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`iddokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`idpendaftaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `iddokter` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `idpendaftaran` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
