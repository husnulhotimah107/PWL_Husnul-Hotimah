-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Apr 2020 pada 09.03
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
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dok` int(10) NOT NULL,
  `nama_dok` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_dok` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_telp_dok` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `spesialis_dok` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dok`, `nama_dok`, `alamat_dok`, `no_telp_dok`, `spesialis_dok`) VALUES
(1, 'Dika Putra', 'Probolinggo', '085247003680', 'Dokter Umum'),
(2, 'Lina Hesty', 'Kota Batu', '09878767766', 'Otak'),
(3, 'Dion Pratama', 'Gresik', '09875213456', 'Paru - Paru'),
(4, 'Mawar Eka L', 'Surabaya', '089655345765', 'Ginjal'),
(5, 'Andini Aprilia', 'Jakarta', '089345233248', 'Gigi'),
(8, ' Kevin Julio', 'Jakarta', '085234564789', 'Jantung'),
(9, 'Maulana Malik', 'Sidoarjo', '089876543234', 'Saraf'),
(10, 'Aprilia Lestasi', 'Malang', '081234123678', 'Dokter Bedah'),
(11, 'Fira Septiana', 'Lumajang', '085678726766', 'Pembuluh Darah'),
(12, 'Indra Irawan', 'Malang', '084247003697', 'Kulit'),
(13, 'Bambang Pamungkas', 'Surabaya', '085127866765', 'Mata'),
(14, 'Fitria Agustin', 'Surabaya', '089657657897', 'Anak'),
(15, 'Dodi Hendrawan', 'Probolinggo', '0828787036976', 'Gigi Anak'),
(16, 'Amar Rista', 'Lumajang', '089661787676', 'Dokter Umum'),
(17, 'Maya Hestyanti', 'Singosari', '089234562897', 'Dokter Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(10) NOT NULL,
  `nama_obat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_obat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stok_obat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jenis_obat`, `stok_obat`) VALUES
(1, 'paracetamol', 'sirup', 7),
(3, 'Ultraflu', 'Tablet', 8),
(4, 'Paramex', 'Kapsul', 18),
(5, 'Misagrib', 'kapsul', 15),
(7, 'Kortikosteroid', 'Salep', 20),
(8, 'Polysilane', 'Tablet', 21),
(9, 'Polysilane', 'Sirup', 32),
(10, 'Termorex', 'Sirup', 20),
(11, 'Entrostop', 'Sirup', 15),
(12, 'Broncare', 'Kapsul', 19),
(13, 'Ibuprofen', 'Tablet', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

CREATE TABLE `periksa` (
  `id_periksa` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dok` int(11) NOT NULL,
  `keluhan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tglperiksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `periksa`
--

INSERT INTO `periksa` (`id_periksa`, `id_user`, `id_dok`, `keluhan`, `tglperiksa`) VALUES
(1, 10, 17, 'Demam', '2020-03-11'),
(2, 8, 17, 'Pusing', '2020-03-14'),
(3, 11, 17, 'Pusing', '2020-03-03'),
(4, 14, 15, 'Gigi Berlubang', '2020-03-05'),
(5, 9, 17, 'flu', '2020-03-07'),
(6, 7, 17, 'Demam', '2020-03-28'),
(7, 12, 3, 'Sesak Nafas', '2020-04-01'),
(8, 13, 14, 'Diare', '2020-03-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `id_dok` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `biaya` int(100) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_periksa`, `id_dok`, `id_obat`, `biaya`, `tgl_transaksi`) VALUES
(1, 13, 8, 14, 11, 40000, '2020-03-11'),
(2, 8, 2, 17, 5, 35000, '2020-03-30'),
(3, 10, 6, 17, 13, 50000, '2020-03-19'),
(5, 14, 4, 15, 12, 30000, '2020-03-13'),
(6, 9, 5, 17, 3, 27000, '2020-03-04'),
(7, 7, 6, 17, 3, 25000, '2020-03-11'),
(9, 12, 7, 3, 7, 45000, '2020-03-01'),
(11, 11, 3, 17, 4, 40000, '2020-04-01');

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
(5, 'Livia Yurike', 'Livia', 'kliviayurike@gmail.com', '3fb4b2291f7bf8c4835b8a11f1cf199f', 'user', 'Aktif'),
(6, 'Husnul Hotimah', 'husnul', 'husnul@gmail.com', 'f468f7176cf2bb5504bc2f04db1e3b18', 'user', 'Aktif'),
(7, 'devi', 'Devi', 'devi@gmail.com', '18965f652fdc43f0b18da6a3d6d3c3cf', 'user', 'Aktif'),
(8, 'Dea Lidya', 'dea', 'dea@gmail.com', 'e4c3f224a956d5a5877a58a7be32e2a6', 'user', 'Aktif'),
(9, 'Indah Aulia', 'indah', 'indah@gmail.com', 'fcc460c203d840d04d91f9bb55b7520f', 'user', 'Tidak Aktif'),
(10, 'Julian', 'julian', 'julian@gmail.com', '338c23e8eafc19ec9236404deac0bef4', 'user', 'Aktif'),
(11, 'Dwi Putra', 'dwi', 'dwi@gmail.com', '6c8802fe5ad2bc2330d382e8ad6c52ca', 'user', 'Aktif'),
(12, 'Diah Ayu', 'diah', 'diah@gmail.com', 'f7811db90d2dc7058b8416e2eaf5e795', 'user', 'Aktif'),
(13, 'Erik Friska', 'erik', 'erik@gmail.com', 'f12537e9605b2b1bf3122bb12a0e24f7', 'user', 'Tidak Aktif'),
(14, 'Samuel', 'samuel', 'samuel@gmail.com', 'd8ae5776067290c4712fa454006c8ec6', 'user', 'Aktif'),
(15, 'Tiara Friska', 'tiara', 'tiara@gmail.com', 'edf2b993f24a5f014ead4d701c66953f', 'user', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id_periksa`),
  ADD KEY `id_dok` (`id_dok`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_dok` (`id_dok`),
  ADD KEY `id_periksa` (`id_periksa`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dok` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id_periksa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `periksa_ibfk_1` FOREIGN KEY (`id_dok`) REFERENCES `dokter` (`id_dok`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `periksa_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_dok`) REFERENCES `dokter` (`id_dok`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_periksa`) REFERENCES `periksa` (`id_periksa`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
