-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2021 pada 16.13
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockbarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `idkeluar` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qty` int(11) NOT NULL,
  `penerima` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barangkeluar`
--

INSERT INTO `barangkeluar` (`idkeluar`, `id`, `tanggal`, `qty`, `penerima`) VALUES
(29, 251, '2021-12-16 14:38:11', 5, 'fatma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `idmasuk` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qty` int(11) NOT NULL,
  `penerima` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barangmasuk`
--

INSERT INTO `barangmasuk` (`idmasuk`, `id`, `tanggal`, `qty`, `penerima`) VALUES
(2130, 250, '2021-12-16 13:47:39', 3, 'fatma'),
(2131, 251, '2021-12-16 13:47:53', 2, 'fatma'),
(2132, 251, '2021-12-16 14:07:42', 5, 'fatma'),
(2133, 251, '2021-12-16 14:36:25', 5, 'fatma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisbarang`
--

CREATE TABLE `jenisbarang` (
  `id` int(11) NOT NULL,
  `idbarang` varchar(11) NOT NULL,
  `image` varchar(99) NOT NULL,
  `merkbarang` varchar(20) NOT NULL,
  `tipebarang` varchar(20) NOT NULL,
  `ket` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenisbarang`
--

INSERT INTO `jenisbarang` (`id`, `idbarang`, `image`, `merkbarang`, `tipebarang`, `ket`, `jumlah`, `deskripsi`) VALUES
(250, 'HP001', '115ab424f7d9a05f5258232360ffb117.png', 'vivo', 'v5s', '2', 3, '<p>CPU:&nbsp;</p>\r\n<ul>\r\n<li style=\"list-style-type: circle;\">OS :&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">Ukuran Layar :</li>\r\n<li style=\"list-style-type: circle;\">Kamera : 16 mp</li>\r\n<li style=\"list-style-type: circle;\">Memori: 4000</li>\r\n<li style=\"list-style-type: circle;\">SIM:</li>\r\n<li style=\"list-style-type: circle;\">Baterai:</li>\r\n<li style=\"list-style-type: circle;\">Berat:&nbsp;</li>\r\n</ul>'),
(251, 'HP002', 'c4752790d613edb5515b7cc29b117727.jpg', 'samsung', 'A32', '2', 10, '<p>DESKRIPSI PRODUK</p>\r\n<ul style=\"list-style-type: initial;\">\r\n<li style=\"list-style-type: circle;\">Processor :</li>\r\n<li style=\"list-style-type: circle;\">CPU:&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">OS :&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">Ukuran Layar :</li>\r\n<li style=\"list-style-type: circle;\">Kamera :&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">Memori:</li>\r\n<li style=\"list-style-type: circle;\">SIM:</li>\r\n<li style=\"list-style-type: circle;\">Baterai:</li>\r\n<li style=\"list-style-type: circle;\">Berat:&nbsp;</li>\r\n</ul>'),
(252, 'HP003', '926149558e01acc1d2f7450f8a52b8df.', 'iPhone', 'XR', '2', 0, '<p style=\"text-align: center;\"><span style=\"text-decoration: underline; font-family: verdana, geneva, sans-serif;\">DESKRIPSI PRODUK</span></p>\r\n<ul style=\"list-style-type: initial;\">\r\n<li style=\"list-style-type: circle;\">Processor :</li>\r\n<li style=\"list-style-type: circle;\">CPU:&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">OS :&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">Ukuran Layar :&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">Kamera : 16 mp</li>\r\n<li style=\"list-style-type: circle;\">Memori: 256 gb</li>\r\n<li style=\"list-style-type: circle;\">SIM:</li>\r\n<li style=\"list-style-type: circle;\">Baterai:</li>\r\n<li style=\"list-style-type: circle;\">Berat:&nbsp;</li>\r\n</ul>'),
(253, 'HP004', '7d574b29cc9a55de4684fd2feae518ce.webp', 'Samsung', 'S21', '1', 0, '<p>DESKRIPSI PRODUK</p>\r\n<ul style=\"list-style-type: initial;\">\r\n<li style=\"list-style-type: circle;\">Processor :</li>\r\n<li style=\"list-style-type: circle;\">CPU:&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">OS :&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">Ukuran Layar :</li>\r\n<li style=\"list-style-type: circle;\">Kamera :&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">Memori:</li>\r\n<li style=\"list-style-type: circle;\">SIM:</li>\r\n<li style=\"list-style-type: circle;\">Baterai:</li>\r\n<li style=\"list-style-type: circle;\">Berat:&nbsp;</li>\r\n</ul>'),
(254, 'HP005', 'b0e5d4a8d6aa9448d436ba892fbcf830.', 'samsung', 'samsung y', '2', 0, '<p style=\"text-align: center;\"><span style=\"text-decoration: underline; font-family: verdana, geneva, sans-serif;\">DESKRIPSI PRODUK</span></p>\r\n<ul style=\"list-style-type: initial;\">\r\n<li style=\"list-style-type: circle;\">Processor :</li>\r\n<li style=\"list-style-type: circle;\">CPU:&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">OS :&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">Ukuran Layar :</li>\r\n<li style=\"list-style-type: circle;\">Kamera :&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">Memori:</li>\r\n<li style=\"list-style-type: circle;\">SIM:</li>\r\n<li style=\"list-style-type: circle;\">Baterai:</li>\r\n<li style=\"list-style-type: circle;\">Berat:&nbsp;</li>\r\n</ul>'),
(255, 'HP006', '862b3c2c8f838b00b0bfdc1fd6e649e8.webp', 'Lenovo', 'A32', '2', 0, '<p><span style=\"text-decoration: underline; font-family: verdana, geneva, sans-serif;\">DESKRIPSI PRODUK</span></p>\r\n<ul style=\"list-style-type: initial;\">\r\n<li style=\"list-style-type: circle;\">Processor :</li>\r\n<li style=\"list-style-type: circle;\">CPU:&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">OS :&nbsp;</li>\r\n<li style=\"list-style-type: circle;\">Ukuran Layar :</li>\r\n<li style=\"list-style-type: circle;\">Kamera : 36 mp</li>\r\n<li style=\"list-style-type: circle;\">Memori:</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `name` longtext NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `massage` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `admin` varchar(20) NOT NULL DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `usertable`
--

INSERT INTO `usertable` (`id`, `username`, `name`, `email`, `password`, `code`, `status`, `admin`) VALUES
(33, 'budi', 'BudI', 'fatmaoh54@gmail.com', '$2y$10$HOkdvaVUeyx7bSz.LzVFs.GIPByTmFUd.7NVl3EdH9lPmHGkfEbam', 0, 'verified', 'operator'),
(37, 'fatmaa', 'Fatma Ananta', 'fatmaoh54@gmail.com', '$2y$10$RTsOmRx7cgHHf6zLEKGioOT0yKWvffJWYjeCoT9dBJS4CHWM/gxXq', 0, 'verified', 'admin'),
(39, 'admin', 'Fatma Ananta', 'frabilaicha@gmail.com', '$2y$10$cPUnWw0P1f0VWWAtyEWjtOd.DBH2wpiF7v30s9.sxmMB7WW2.S0GW', 0, 'verified', 'admin'),
(40, 'user', 'Fatma Ananta', 'fatmananta@gmail.com', '$2y$10$0Onq.kn/cLiBqT.On0hDLuLFa4YE43QuKDXPphv9b5949SBh4.W.y', 0, 'verified', 'guest'),
(41, 'admin', 'icha frabila', 'admin@gmail.com', '$2y$10$orxclMG0fLWf2jW5u4iV4O/Nd.8vgZab2kMziDuzXp3RB5/5jx3cW', 0, 'verified', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`idkeluar`);

--
-- Indeks untuk tabel `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`idmasuk`);

--
-- Indeks untuk tabel `jenisbarang`
--
ALTER TABLE `jenisbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangkeluar`
--
ALTER TABLE `barangkeluar`
  MODIFY `idkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `idmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2134;

--
-- AUTO_INCREMENT untuk tabel `jenisbarang`
--
ALTER TABLE `jenisbarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT untuk tabel `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
