-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2021 pada 05.10
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

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
-- Struktur dari tabel `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `kode_gejala` varchar(4) NOT NULL,
  `nama_gejala` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gejala`
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
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `kode_nilai` int(11) NOT NULL,
  `kode_pakar` varchar(5) DEFAULT NULL,
  `kode_gejala` varchar(4) NOT NULL,
  `cf_pakar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nilai`
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
(15, 'PK01', 'G15', 0.3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pakar`
--

CREATE TABLE `tbl_pakar` (
  `kode_pakar` varchar(5) NOT NULL,
  `nama_pakar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pakar`
--

INSERT INTO `tbl_pakar` (`kode_pakar`, `nama_pakar`) VALUES
('PK01', 'dr.Nina'),
('PK02', 'Bidan Susani'),
('PK03', 'Bidan ariani lutfi'),
('PK04', 'Bidan indra Susilawati'),
('PK05', 'Bidan Frida ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`kode_nilai`),
  ADD KEY `kode_pakar` (`kode_pakar`),
  ADD KEY `kode_gejala` (`kode_gejala`);

--
-- Indeks untuk tabel `tbl_pakar`
--
ALTER TABLE `tbl_pakar`
  ADD PRIMARY KEY (`kode_pakar`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_ibfk_1` FOREIGN KEY (`kode_pakar`) REFERENCES `tbl_pakar` (`kode_pakar`),
  ADD CONSTRAINT `tbl_nilai_ibfk_2` FOREIGN KEY (`kode_gejala`) REFERENCES `tbl_gejala` (`kode_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
