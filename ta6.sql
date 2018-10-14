-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2018 pada 16.02
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta_6`
--

CREATE TABLE `ta_6` (
  `nim` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `status` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  `judul_postingan` varchar(20) NOT NULL,
  `tanggal_postingan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ta_6`
--

INSERT INTO `ta_6` (`nim`, `nama`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`, `status`, `foto`, `judul_postingan`, `tanggal_postingan`) VALUES
(123, 'ayas', 'D3MI-41-01', 'Perempuan', 'Menulis, ', 'FTE', 'jogja', '', '', '', '0000-00-00'),
(2147483647, 'Aan Yuni Adi Saputri', 'D3MI-41-02', 'Perempuan', 'Menulis, Menari, ', 'FIT', 'Surakarta', '', '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ta_6`
--
ALTER TABLE `ta_6`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
