-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2022 pada 11.57
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(13) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `level` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `username`, `password`, `nama`, `level`) VALUES
(1, 'jenal', '123', 'jenal', 'admin'),
(2, 'user', '123', 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trouble`
--

CREATE TABLE `trouble` (
  `id_form` int(11) NOT NULL,
  `tanggal_buat` datetime DEFAULT NULL,
  `customer` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_hp` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `trouble`
--

INSERT INTO `trouble` (`id_form`, `tanggal_buat`, `customer`, `nama`, `alamat`, `email`, `no_hp`) VALUES
(2, '0000-00-00 00:00:00', '123', 'Setiawan Dimas Arimurti', 'Desa kritig RT/RW 001/005 Petanahan', 'dimas@gmail.com', '08283737378'),
(3, '0000-00-00 00:00:00', '', 'fff', 'fff', 'ff@gmail', 'fff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kendala`
--

CREATE TABLE `t_kendala` (
  `id_form` int(10) NOT NULL,
  `tanggal_buat` date DEFAULT NULL,
  `customer` varchar(10) DEFAULT NULL,
  `team` varchar(10) DEFAULT NULL,
  `pic` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  `product_name` varchar(10) DEFAULT NULL,
  `site_location` varchar(10) DEFAULT NULL,
  `status2` varchar(10) DEFAULT NULL,
  `problem` varchar(50) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_kendala`
--

INSERT INTO `t_kendala` (`id_form`, `tanggal_buat`, `customer`, `team`, `pic`, `status`, `category`, `product_name`, `site_location`, `status2`, `problem`, `action`) VALUES
(31, '2022-07-20', 'BSI', 'cvc', 'cvc', 'Open', 'Incident', 'cvc', 'cvc', 'S1', 'cvcc', 'cvc');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `trouble`
--
ALTER TABLE `trouble`
  ADD PRIMARY KEY (`id_form`);

--
-- Indeks untuk tabel `t_kendala`
--
ALTER TABLE `t_kendala`
  ADD PRIMARY KEY (`id_form`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `trouble`
--
ALTER TABLE `trouble`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_kendala`
--
ALTER TABLE `t_kendala`
  MODIFY `id_form` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
