-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 01:41 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anemia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_det_hasil`
--

CREATE TABLE `tbl_det_hasil` (
  `kode_det_hasil` int(11) NOT NULL,
  `kode_periksa` varchar(11) NOT NULL,
  `kode_pakar` varchar(5) NOT NULL,
  `nilai_hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_det_hasil`
--

INSERT INTO `tbl_det_hasil` (`kode_det_hasil`, `kode_periksa`, `kode_pakar`, `nilai_hasil`) VALUES
(1, '20210315', 'PK01', 86.6),
(2, '20210315', 'PK02', 76.3),
(3, '20210315', 'PK03', 80.9),
(4, '20210315', 'PK04', 80.4),
(5, '20210315', 'PK05', 83.2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `kode_gejala` varchar(4) NOT NULL,
  `nama_gejala` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G01', 'Kelelahan & Kelemahan'),
('G02', 'Sesak Nafas'),
('G03', 'Tampak Pucat'),
('G04', 'Perubahan Warna Tinja'),
('G05', 'Denyut Jantung Cepat'),
('G06', 'Tekanan Darah Rendah'),
('G07', 'Frekuensi Nafas Cepat'),
('G08', 'Pucat atau Kulit Dingin'),
('G09', 'Pusing'),
('G10', 'Sakit Kepala'),
('G11', 'Nyeri dada'),
('G12', 'Sembelit'),
('G13', 'Daya Konsentrasi rendah'),
('G14', 'Rambut Rontok'),
('G15', 'Memburuknya Masalah Jantung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil`
--

CREATE TABLE `tbl_hasil` (
  `kode_periksa` varchar(11) NOT NULL,
  `kode_pasien` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hasil`
--

INSERT INTO `tbl_hasil` (`kode_periksa`, `kode_pasien`) VALUES
('20210315', 'P00001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `kode_nilai` int(11) NOT NULL,
  `kode_pakar` varchar(5) DEFAULT NULL,
  `kode_gejala` varchar(4) NOT NULL,
  `cf_pakar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`kode_nilai`, `kode_pakar`, `kode_gejala`, `cf_pakar`) VALUES
(1, 'PK01', 'G01', 0.9),
(2, 'PK01', 'G02', 0.5),
(3, 'PK01', 'G03', 1),
(4, 'PK01', 'G04', 0.3),
(5, 'PK01', 'G05', 0.5),
(6, 'PK01', 'G06', 0.3),
(7, 'PK01', 'G07', 0.8),
(8, 'PK01', 'G08', 0.3),
(9, 'PK01', 'G09', 0.9),
(10, 'PK01', 'G10', 0.9),
(11, 'PK01', 'G11', 0.4),
(12, 'PK01', 'G12', 0.3),
(13, 'PK01', 'G13', 0.7),
(14, 'PK01', 'G14', 0.3),
(15, 'PK01', 'G15', 0.3),
(19, 'PK02', 'G01', 0.8),
(20, 'PK02', 'G02', 0.2),
(24, 'PK02', 'G03', 0.9),
(25, 'PK02', 'G04', 0.1),
(26, 'PK02', 'G05', 0.5),
(27, 'PK02', 'G06', 0.2),
(28, 'PK02', 'G07', 0.4),
(29, 'PK02', 'G08', 0.8),
(30, 'PK02', 'G09', 1),
(31, 'PK02', 'G10', 0.3),
(32, 'PK02', 'G11', 0.1),
(33, 'PK02', 'G12', 0.1),
(34, 'PK02', 'G13', 0.3),
(35, 'PK02', 'G14', 0.1),
(36, 'PK02', 'G15', 0.2),
(37, 'PK03', 'G01', 0.9),
(38, 'PK03', 'G02', 0.1),
(39, 'PK03', 'G03', 0.9),
(40, 'PK03', 'G04', 0.1),
(41, 'PK03', 'G05', 0.3),
(42, 'PK03', 'G06', 0.4),
(43, 'PK03', 'G07', 0.3),
(44, 'PK03', 'G08', 0.9),
(45, 'PK03', 'G09', 1),
(46, 'PK03', 'G10', 0.9),
(47, 'PK03', 'G11', 0.1),
(48, 'PK03', 'G12', 0),
(49, 'PK03', 'G13', 0.6),
(50, 'PK03', 'G14', 0.1),
(51, 'PK03', 'G15', 0.7),
(52, 'PK04', 'G01', 0.7),
(53, 'PK04', 'G02', 0.2),
(54, 'PK04', 'G03', 0.9),
(55, 'PK04', 'G04', 0.2),
(56, 'PK04', 'G05', 0.6),
(57, 'PK04', 'G06', 0.6),
(58, 'PK04', 'G07', 0.5),
(59, 'PK04', 'G08', 0.8),
(60, 'PK04', 'G09', 1),
(61, 'PK04', 'G10', 0.4),
(62, 'PK04', 'G11', 0.1),
(63, 'PK04', 'G12', 0.2),
(64, 'PK04', 'G13', 0.5),
(65, 'PK04', 'G14', 0.1),
(66, 'PK04', 'G15', 0.6),
(67, 'PK05', 'G01', 0.9),
(68, 'PK05', 'G02', 0.3),
(69, 'PK05', 'G03', 0.9),
(70, 'PK05', 'G04', 0.3),
(71, 'PK05', 'G05', 0.3),
(72, 'PK05', 'G06', 0.7),
(73, 'PK05', 'G07', 0.3),
(74, 'PK05', 'G08', 0.6),
(75, 'PK05', 'G09', 1),
(76, 'PK05', 'G10', 0.4),
(77, 'PK05', 'G11', 0.3),
(78, 'PK05', 'G12', 0.3),
(79, 'PK05', 'G13', 0.5),
(80, 'PK05', 'G14', 0.3),
(81, 'PK05', 'G15', 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pakar`
--

CREATE TABLE `tbl_pakar` (
  `kode_pakar` varchar(5) NOT NULL,
  `nama_pakar` varchar(30) NOT NULL,
  `jabatan` enum('Dokter','Bidan') NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pakar`
--

INSERT INTO `tbl_pakar` (`kode_pakar`, `nama_pakar`, `jabatan`, `username`, `pass`) VALUES
('PK01', 'dr.Nina', 'Dokter', 'nina', '123'),
('PK02', 'Bidan Susani', 'Bidan', 'susani', '123'),
('PK03', 'Bidan ariani lutfi', 'Bidan', 'ariani', '123'),
('PK04', 'Bidan indra Susilawati', 'Bidan', 'indra', '123'),
('PK05', 'Bidan Frida ', 'Bidan', 'frida', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `kode_pasien` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `wilayah` varchar(30) NOT NULL,
  `alamat` tinytext NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`kode_pasien`, `nama`, `tgl_lahir`, `wilayah`, `alamat`, `username`, `pass`) VALUES
('P00001', 'Siti Hajar Aprilianti', '1999-04-02', 'Sumber Anyar', 'Sumber Anyar', 'siti', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_det_hasil`
--
ALTER TABLE `tbl_det_hasil`
  ADD PRIMARY KEY (`kode_det_hasil`),
  ADD KEY `kode_periksa` (`kode_periksa`),
  ADD KEY `kode_pakar` (`kode_pakar`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  ADD PRIMARY KEY (`kode_periksa`),
  ADD KEY `kode_pasien` (`kode_pasien`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`kode_nilai`),
  ADD KEY `kode_pakar` (`kode_pakar`),
  ADD KEY `kode_gejala` (`kode_gejala`);

--
-- Indexes for table `tbl_pakar`
--
ALTER TABLE `tbl_pakar`
  ADD PRIMARY KEY (`kode_pakar`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`kode_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_det_hasil`
--
ALTER TABLE `tbl_det_hasil`
  MODIFY `kode_det_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `kode_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_det_hasil`
--
ALTER TABLE `tbl_det_hasil`
  ADD CONSTRAINT `tbl_det_hasil_ibfk_1` FOREIGN KEY (`kode_periksa`) REFERENCES `tbl_hasil` (`kode_periksa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_det_hasil_ibfk_2` FOREIGN KEY (`kode_pakar`) REFERENCES `tbl_pakar` (`kode_pakar`);

--
-- Constraints for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  ADD CONSTRAINT `tbl_hasil_ibfk_1` FOREIGN KEY (`kode_pasien`) REFERENCES `tbl_pasien` (`kode_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_ibfk_1` FOREIGN KEY (`kode_pakar`) REFERENCES `tbl_pakar` (`kode_pakar`),
  ADD CONSTRAINT `tbl_nilai_ibfk_2` FOREIGN KEY (`kode_gejala`) REFERENCES `tbl_gejala` (`kode_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
