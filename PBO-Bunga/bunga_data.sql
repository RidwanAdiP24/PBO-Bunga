-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2022 pada 15.41
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bunga_data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bunga`
--

CREATE TABLE `tb_bunga` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jumlah` int(32) NOT NULL,
  `jumlah_bunga` int(32) NOT NULL,
  `jangka_waktu` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bunga`
--

INSERT INTO `tb_bunga` (`id`, `nama`, `jumlah`, `jumlah_bunga`, `jangka_waktu`) VALUES
(19, 'Ridwan Adi ', 500000, 2, 12),
(22, 'Ridwan Adi Pratama', 500000, 1, 12);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bunga`
--
ALTER TABLE `tb_bunga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bunga`
--
ALTER TABLE `tb_bunga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
