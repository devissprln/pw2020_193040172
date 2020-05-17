-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2020 pada 14.47
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
-- Database: `tubes_193040172`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis_makanan` varchar(100) NOT NULL,
  `kelompok_makanan` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `gambar`, `jenis_makanan`, `kelompok_makanan`, `kategori`, `harga`) VALUES
(1, 'nasgor.png', 'karbohidrat', 'Makanan pokok', 'Sehat', '13.000'),
(2, 'ikan.png', 'Berlemak,Protein', 'Lauk Pauk', 'Sehat', '30.000'),
(3, 'kepiting.png', 'protein,lemak,kalori', 'Lauk Pauk', 'Sehat', '140.00'),
(4, 'tahu.png', 'Protein,Kalori', 'Lauk Pauk', 'Sehat', '1.000'),
(5, 'tempe.png', 'Protein', 'Lauk Pauk', 'Sehat', '2.000'),
(6, 'lele.png', 'Protein', 'Lauk Pauk', 'Sehat', '11.000'),
(7, 'udang.png', 'Protein', 'Lauk Pauk', 'Sehat', '67.000'),
(8, 'sosis.png', 'Protein', 'Lauk Pauk', 'Sehat', '30.000'),
(9, 'nugget.png', 'Protein', 'Lauk Pauk', 'Sehat', '35.000'),
(10, 'steakdagingsapi.png', 'lemak,kalori', 'Makanan Pokok/LaukPauk', 'Sekali Kali', '21.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'devis', '$2y$10$myHMLBG5blg08zVqarpvSe269HMxygGzvqZPeZg4H.xE8zKHtdZJG'),
(4, 'na', '$2y$10$5NbCzgGLKDgEpf29R4gW.O3xt0gb3xu/7ejDCjZTIEm7n994kEUdq'),
(5, 'qwe', '$2y$10$1h3yAFoVUUzEEviQ75UOwuRbcBtwHXYkmKHaI9zSHFSu67kJ18gqe'),
(6, 'asd', '$2y$10$fx6fUkJTUs9ldSvY2wEpy.EVZBplJSIXK5hlxa0.D.wgC8gdF0NIW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
