-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 03:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `xx_admin`
--

CREATE TABLE `xx_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1. admin, 2. owner',
  `nama` varchar(100) NOT NULL COMMENT '\r\n',
  `created_by` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_admin`
--

INSERT INTO `xx_admin` (`id_admin`, `username`, `password`, `status`, `nama`, `created_by`, `created_at`) VALUES
(1, 'riski', '$2y$10$9a7b78YWmpUO1yS3Q2CeMOuWvemjp4Q13q52ykg5alI/f9NrICqB.', 2, 'super admin', 'riski', '2020-06-16 21:31:56'),
(2, 'owner1', '$2y$10$Tcf.qeAsaORi2Bjy3dFDBu2K.JS2g2kxKfzG/tRWB/h//wDm2cmFi', 2, 'wian', 'super admin', '2022-06-04 17:11:56'),
(3, 'admin1', '$2y$10$YX0w8bvVDE2UY1jHqsg4yeCSqnZIRAk5keSmd0IUWvbljnUB/h/CG', 1, 'Rifki', 'super admin', '2022-06-09 23:14:27'),
(46, 'admin4', '$2y$10$I.m8hjcUcJg6NYuqo1PjRulZhpufc5MHFFn0G6SVJ2ataWiRVmEaG', 1, 'Debi NS', 'super admin', '2022-06-10 12:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `xx_jenis_kelamin`
--

CREATE TABLE `xx_jenis_kelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_jenis_kelamin`
--

INSERT INTO `xx_jenis_kelamin` (`id`, `nama`, `value`) VALUES
(1, 'Laki - Laki', 'L'),
(2, 'Perempuan', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `xx_kelas`
--

CREATE TABLE `xx_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` varchar(50) NOT NULL,
  `judul_kelas` varchar(100) NOT NULL,
  `jadwal_kelas` varchar(50) NOT NULL,
  `waktu_kelas` varchar(50) NOT NULL,
  `deskripsi_kelas` text NOT NULL,
  `harga_kelas` bigint(20) NOT NULL,
  `biaya_pendaftaran` bigint(20) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_kelas`
--

INSERT INTO `xx_kelas` (`id_kelas`, `kode_kelas`, `judul_kelas`, `jadwal_kelas`, `waktu_kelas`, `deskripsi_kelas`, `harga_kelas`, `biaya_pendaftaran`, `created_by`, `created_at`, `updated_at`) VALUES
(15, 'EX-KELAS2 2022', 'BAHASA INGGRIS', 'senin, rabu, jumaat', '09:00 - 13:00', 'Cinta Bahasa pagi adalah kelas yang berfokus dengan pelajaran yang berhubungan dengan membaca dan bisa mengenal bahasa agar tujuannya bisa terlaksana oleh karena itu smart bimbel menawarkan program khusus bagi anak anda dan berfokus pada kemampuan anak dilakukan pada pagi hari untuk Jadwal nya', 250000, 150000, 'Rifki', '2022-05-04', '2022-05-18'),
(16, 'EX-KELAS3 2022', 'BAHASA INDONESIA', 'senin, rabu, jumaat', '13:00 - 15:30', 'Cinta Bahasa pagi adalah kelas yang berfokus dengan pelajaran yang berhubungan dengan membaca dan bisa mengenal bahasa agar tujuannya bisa terlaksana oleh karena itu smart bimbel menawarkan program khusus bagi anak anda dan berfokus pada kemampuan anak dilakukan pada pagi hari untuk Jadwal nya', 250000, 150000, 'rifki', '2022-05-04', '2022-06-01'),
(17, 'EX-KELAS4 2022', 'MTK PEMINATAN', 'selasa, kamis', '09:00 - 13:00', 'Cinta Matematika adalah kelas yang berfokus dengan pelajaran yang berhubungan dengan menghitung dan bisa mengenal bahasa agar tujuannya bisa terlaksana oleh karena itu smart bimbel menawarkan program khusus bagi anak anda dan berfokus pada kemampuan anak dilakukan pada pagi hari untuk Jadwal nya', 250000, 150000, 'rifki', '2022-05-05', '2022-06-01'),
(18, 'EX-KELAS5 2022', 'MTK DASAR', 'selasa, kamis', '13:00 - 15:30', 'Cinta Matematika adalah kelas yang berfokus dengan pelajaran yang berhubungan dengan menghitung dan bisa mengenal bahasa agar tujuannya bisa terlaksana oleh karena itu smart bimbel menawarkan program khusus bagi anak anda dan berfokus pada kemampuan anak dilakukan pada sore hari untuk Jadwal nya', 250000, 150000, 'rifki', '2022-05-05', '2022-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `xx_pendaftaran`
--

CREATE TABLE `xx_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nomor_pendaftaran` varchar(50) NOT NULL,
  `status_pembayaran` int(11) NOT NULL DEFAULT 3 COMMENT '1. selesai bayar, 2. pending',
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '1. active, 2. inactive',
  `admin_acc` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(250) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_pendaftaran`
--

INSERT INTO `xx_pendaftaran` (`id_pendaftaran`, `id_user`, `id_kelas`, `nomor_pendaftaran`, `status_pembayaran`, `status`, `admin_acc`, `bukti_pembayaran`, `created_at`) VALUES
(8, 2, 16, 'EX-KELA2 202227964175600', 1, 1, 'Rifki', '2EX-KELA2_202227964175600.jpeg', '2022-05-18'),
(18, 14, 15, 'EX-KELAS2 2022147964694000', 1, 1, 'RIFKI', '14EX-KELAS2_2022147964694000.png', '2022-05-24'),
(27, 18, 15, 'EX-KELAS2 2022187965212400', 1, 1, 'rifki', '18EX-KELAS2_2022187965212400.png', '2022-05-30'),
(127, 33, 15, 'EX-KELAS2 2022337965471600', 1, 1, 'rifki', '33EX-KELAS2_2022337965471600.png', '2022-06-02'),
(181, 43, 15, 'EX-KELAS2 2022437966422000', 1, 1, 'Rifki', '43EX-KELAS2_2022437966422000.jpeg', '2022-06-13'),
(197, 44, 15, 'EX-KELAS2 2022447966594800', 1, 1, 'Rifki', '44EX-KELAS2_2022447966594800.jpeg', '2022-06-15'),
(198, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(199, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(200, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(201, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(202, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(203, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(204, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(205, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(206, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(207, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(208, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(209, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(210, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(211, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(212, 2, 18, '123', 3, 2, '', '', '2022-06-15'),
(213, 46, 15, 'EX-KELAS2 2022467974975600', 1, 1, 'Rifki', '46EX-KELAS2_2022467974975600.png', '2022-09-20'),
(214, 18, 17, 'EX-KELAS4 2022187976703600', 3, 2, '', '', '2022-10-10'),
(215, 47, 16, 'EX-KELAS3 2022477980246000', 1, 1, 'Rifki', '47EX-KELAS3_2022477980246000.jpeg', '2022-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `xx_profile`
--

CREATE TABLE `xx_profile` (
  `id_profile` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `umur` int(11) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_profile`
--

INSERT INTO `xx_profile` (`id_profile`, `id_user`, `foto`, `nama`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `umur`, `pendidikan`, `jenis_kelamin`, `alamat`, `created_at`) VALUES
(1, 1, '1.jpeg', 'Nizar Zulmi', '0331212', 'Indramayu', '2006-06-06', 14, 'SD', 'L', 'kenari', '2022-04-03'),
(2, 2, '2.png', 'riski ahmad ilham', '0895341206291', 'INDRAMAYU', '2005-03-21', 17, 'SMP', 'L', 'INDRAMAYU', '2022-05-22'),
(3, 3, '', 'wianur intiya', '08953412026201', 'indramayu', '2019-01-28', 3, 'SD', 'L', 'patrol', '2022-04-04'),
(4, 4, '', 'NIZAR ZULMI', '0895341206291', 'INDRAMAYU', '2008-03-21', 14, 'SMP', 'L', 'KEDOKAN BUNDER WETAN', '2022-05-17'),
(5, 5, '', 'NIZAR ZULMI', '089213', 'INDRAMAYU', '2010-02-02', 12, 'SD', 'L', 'KARANG AMPEL', '2022-05-19'),
(6, 7, '7.jpeg', 'rahmat', '0895341121', 'indramayu', '2009-03-04', 13, 'smp', 'L', 'indramayu', '2022-05-23'),
(7, 10, '10.png', 'ALI', '123123123', 'INDRAMAYU', '2010-02-02', 12, 'SD', 'L', 'KEDOKAN', '2022-05-24'),
(8, 14, '14.png', 'RISKI', '0895341206291', 'indramayu', '2010-02-02', 12, 'SD', 'L', 'indramayu', '2022-05-25'),
(9, 18, '18.png', 'RISKI AHMAD ILHAM', '0895341206291', 'INDRAMAYU', '2008-06-03', 13, 'SD', 'L', 'INDRAMAYU', '2022-10-10'),
(10, 6, '', 'Debi Nabilah NS', '0895322199012', 'Indramayu', '2010-02-02', 12, 'SD', 'P', 'Indramayu', '2022-05-31'),
(11, 20, '', 'wianur', '0895341206291', 'indramayu', '2010-02-02', 12, 'SD', 'L', 'INDRAMAYU', '2022-05-30'),
(12, 31, '31.png', 'wianur', '0899921321321', 'indramayu', '2010-02-02', 12, 'SD', 'L', 'indramayu', '2022-05-31'),
(13, 33, '33.png', 'HILMI HIDAYAT', '089531206291', 'Indramayu', '2010-02-02', 12, 'SD', 'L', 'Indramayu', '2022-06-02'),
(14, 35, '', 'dede nugroho', '0895341206291', 'indramayu', '2009-03-04', 13, 'SD', 'L', 'Indramayu', '2022-06-03'),
(15, 39, '39.jpeg', 'nizar', '0895341206291', 'indramayu', '2020-02-04', 2, 'SD', 'L', 'INDRAMAYU', '2022-06-09'),
(16, 43, '43.jpeg', 'SOLIHAH NABILAH DEBI', '082217400305', 'Indramayu', '2005-06-08', 17, 'SMA', 'P', 'Sindang Kerta kecamatan indramayu kabupaten indramayu provinsi jawa barat kode.pos 45211', '2022-06-13'),
(17, 44, '', 'hilyah kamilah', '0896721231', 'indeamayu', '2008-03-06', 14, 'SMP', 'P', 'indramayu', '2022-06-15'),
(18, 45, '', 'aditya', '', '', '', 0, '', '', '', '2022-09-20'),
(19, 46, '46.png', 'wian', '123123123', 'indramayu', '2005-07-14', 17, 'SMP', 'L', 'indramayu', '2022-09-20'),
(20, 47, '', 'maulana', '08912312312', 'indramayu', '2005-07-14', 17, 'SMA', 'L', 'indramayu', '2022-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `xx_users`
--

CREATE TABLE `xx_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1 COMMENT '1. active,2.inactive\r\n',
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xx_users`
--

INSERT INTO `xx_users` (`id_user`, `username`, `email`, `password`, `nama`, `is_active`, `created_at`) VALUES
(6, 'debi', 'debinabilahsholiha@gmail.com', '$2y$10$v6IB3jD2exc8W9ccnDi.q.drbuz2sHX56IC2OP9Z8STW/GLUu72ia', 'Debi Nabilah Sholihah', 1, '2022-05-21'),
(18, 'riski', 'riskiahmadiilham@gmail.com', '$2y$10$G7KesG6Ou8wuhTLgOyFo8OSxj1P3M9AuBCfqatjMrMHZBusO6vetG', 'riski ahmad ilham', 1, '2022-05-26'),
(33, 'hilmi', 'hilmihidayat@gmail.com', '$2y$10$r/nDl511wmGGm.DBlMsGSu3zG4RbeXZrGHfeQU3CR/tmUCa2umL0q', 'hilmi hidayat', 1, '2022-06-02'),
(37, 'uus', 'uusdaus@gmail.com', '$2y$10$Y3V8mgm5b0rMSySoxz8JDOAflpScc3jCmy.WTdSIYepoZ9SRsEIdi', 'uus daus', 1, '2022-06-05'),
(38, 'rahmat', 'rahmatirianto@gmail.com', '$2y$10$1Xql2wRwFMdwt21ueyRXI.Df016mFjX2nnfQcqjBdW61DXZPYUzky', 'rahmat irianto', 1, '2022-06-05'),
(39, 'nizar', 'nizarzulmi@gmail.com', '$2y$10$XfB2tDAipe7bKvWnQ/Ro4uaZWGZItBRclMTxOspj336XtgfsUY1Yu', 'nizar zulmi', 1, '2022-06-09'),
(40, 'daus', 'dausminijr@gmail.com', '$2y$10$QR2u/g7z3YKOAk8c2yPuQuxUJ4I78S//Xwy9FraLyUyPBHAek.qDu', 'daus mini', 1, '2022-06-09'),
(41, 'wianur', 'wianurintiyaangesti@gmail.com', '$2y$10$8BCky798Dg77Gaq/0O8z8Odft/WpKIK8Lh3v2NVeG/wJOv6c8N5tW', 'wianur intiya angesti', 1, '2022-06-10'),
(42, 'sakti', 'saktiadipamungkas@gmail.com', '$2y$10$GaC0yNr8ZoyGC.Cp33Apg.22Ah91eY8PjiHw2WJpMg5nlkKsB7uq.', 'sakti adi pamungkas', 1, '2022-06-12'),
(43, 'solihah', 'solihahnabilah@gmail.com', '$2y$10$cgJUpBGYfqDQM3oUMPfUPOTXkofLpcYjawwuAKgwnFg0L3Pkowx.G', 'solihah nabilah', 1, '2022-06-13'),
(44, 'hilyah', 'hilyah@gmail.com', '$2y$10$blVRnBs.bOI8E.aYUdxPU.SeBQVLj7X.CUUksVjuDVsCAkKNsliaq', 'hilyah', 1, '2022-06-15'),
(45, 'adit', 'aditya@gmail.com', '$2y$10$26QRjv4fRPOFLqQq1H3EYO1wCQCTkGHNqNmsID0tqy9aECV61Fyh6', 'aditya', 1, '2022-09-20'),
(46, 'wian', 'wian@gmail.com', '$2y$10$oZSQ4fwILMEPXZ3Vp0ZD7O2.j0tiu/Go4i59p4sd0ioS87b/fUt/m', 'wian', 1, '2022-09-20'),
(47, 'maul', 'maulana@gmail.com', '$2y$10$mI6SQG26ugz8b32mIIViAecR7eEK.Cq4E5ao8ALTTz/BZ6FDMQY36', 'maulana', 1, '2022-11-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xx_admin`
--
ALTER TABLE `xx_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `xx_jenis_kelamin`
--
ALTER TABLE `xx_jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xx_kelas`
--
ALTER TABLE `xx_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD UNIQUE KEY `kode_kelas` (`kode_kelas`);

--
-- Indexes for table `xx_pendaftaran`
--
ALTER TABLE `xx_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `xx_profile`
--
ALTER TABLE `xx_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `xx_users`
--
ALTER TABLE `xx_users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nik` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xx_admin`
--
ALTER TABLE `xx_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `xx_jenis_kelamin`
--
ALTER TABLE `xx_jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `xx_kelas`
--
ALTER TABLE `xx_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `xx_pendaftaran`
--
ALTER TABLE `xx_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `xx_profile`
--
ALTER TABLE `xx_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `xx_users`
--
ALTER TABLE `xx_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
