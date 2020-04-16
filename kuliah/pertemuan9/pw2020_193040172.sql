-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 20.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Devis Suparlan', '193040172', 'devissuparlan07@gmail.com\r\n', 'Teknik Informatika', 'devis.jpg'),
(2, 'syahna', '193040016', 'syahnazahra@gmail.com', 'Teknik Informatika', 'sana.jpg'),
(3, 'dio', '193040168', 'dio@gmail.com', 'Teknik Informatika', 'yoy.jpg'),
(4, 'kevin', '193040156', 'kevin@gmail.com', 'Teknik Informatika', 'vin.jpg'),
(5, 'shandika', '193040189', 'shandika@gmail.com', 'Teknik Informatika', 'shandika.jpg'),
(6, 'Hengky', '193010088', 'hengky@gmail.com', 'Teknik Industri', 'hengky.jpg'),
(7, 'abil', '193060088', 'abil@gmail.com', 'Perancangan WIlayah dan Kota', 'abil.jpg'),
(8, 'Dai ', '191020010', 'dai@gmail.com', 'Pancasila dan Kewarganegaraan', 'dai.jpg'),
(9, 'Alva', '192020020', 'alva@gmail.com', 'Manajemen', 'alva.jpg'),
(10, 'agam', '195060070', 'agam@gmail.com', 'hukum', 'agam.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
