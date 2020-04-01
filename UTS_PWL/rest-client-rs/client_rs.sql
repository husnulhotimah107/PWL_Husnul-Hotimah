-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Apr 2020 pada 09.26
-- Versi server: 8.0.18
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client_rs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(50) NOT NULL,
  `nama_contact` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_contact` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama_contact`, `email_contact`, `pesan`) VALUES
(7, 'delisa', 'delisa@gmail.com', 'Pelayanan Bagus'),
(8, 'Amar', 'amar@gmail.com', 'Pelayanan kurang bagus'),
(9, 'siska', 'siska@gmail.com', 'Fasilitas kurang'),
(10, 'Vina', 'vina@gmail.com', 'Fasilitas cukup memadai'),
(11, 'Ela', 'ela@gmail.com', 'Kebersihan rumah sakit terjaga'),
(12, 'Farida', 'farida@gmail.com', 'Puas dengan pelayanannya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `level`, `status`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin', 'Aktif'),
(7, 'siska', 'siska', 'siska@gmail.com', '40159ac8fd3c00cb696f847442264fc0', 'user', 'Aktif'),
(8, 'Bimo', 'bimo', 'bimo@gmail.com', '5db482aa594b7c7587a8b1f39782fdcf', 'user', 'Tidak Aktif'),
(9, 'Farida', 'farida', 'farida@gmail.com', '41a6a36598a0acd0d0c3aac95edc7b35', 'user', 'Tidak Aktif'),
(10, 'Vina', 'vina', 'vina@gmail.com', 'cd3917432dff38d9fd5fd8986aad4fa2', 'user', 'Tidak Aktif'),
(11, 'Meliana', 'meliana', 'meliana@gmail.com', 'c5be13911d54b194b8283e23095076af', 'user', 'Tidak Aktif'),
(12, 'Amar', 'amar', 'amar@gmail.com', 'd01b8c6ea1a64ba2510df7cee1e4d604', 'user', 'Tidak Aktif'),
(13, 'Ela', 'ela', 'ela@gmail.com', '1a678dd35c0a78870326a921b769ba80', 'user', 'Tidak Aktif'),
(14, 'Delisa', 'delisa', 'delisa@gmail.com', '23b41f9945f897afaaacb80b169939b2', 'user', 'Tidak Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
