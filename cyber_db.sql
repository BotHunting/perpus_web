-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2024 pada 11.21
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyber_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(20) NOT NULL,
  `judul_buku` varchar(256) NOT NULL,
  `penulis` varchar(256) NOT NULL,
  `edisi` int(20) NOT NULL,
  `impersum` varchar(256) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `isbn` varchar(256) NOT NULL,
  `golongan` varchar(256) NOT NULL,
  `bahasa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `edisi`, `impersum`, `lokasi`, `isbn`, `golongan`, `bahasa`) VALUES
('145', 'PPKN', 'Andika', 2, '2019', 'Bandung', '1A345D', 'Pendidikan', 'Indonesia'),
('2', 'Kisah Klasik', 'Andika', 1, '2015', 'Jakarta', '1G234GR', 'Buku Cerita', 'Indonesia'),
('23', 'Bahasa belanda', 'Hun Bergh', 3, '2019', 'Jakarta', '1G234G', 'Buku Bahasa', 'Indonesia'),
('3', 'Bahasa Jawa', 'Rr. Andrianadiningrat', 1, '2015', 'Yogyakarta', '2015.3.RRA', 'Buku Bahasa', 'Jawa'),
('4', 'Jayalah Indonesiaku', 'Almiraa', 1, '2016', 'Yogyakarta', '1A345DA', 'Buku Perjuangan', 'Indonesia'),
('5', 'Kisah Cintaku', 'Inosensia', 1, '2015', 'Yogyakarta', '1G234IN', 'Buku Cerita', 'Indonesia'),
('6', 'Algoritma Pemrograman', 'Drs.Wahyu Pujiono', 1, '2019', 'Yogyakarta', '1A345SRE', 'Buku Pendidikan', 'Cina'),
('A11', 'Bahasa indonesia', 'Ir Soekarno', 1, '1029', 'Jakarta', '1234', 'Buku Bahasa', 'Indonesia'),
('AB11', 'Kisah Klasik', 'Andika', 2019, '2014', 'Jogja', '123', 'Novel', 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `no_data` int(15) NOT NULL,
  `tanggal_pendataan` date NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `id_petugas` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `no_pinjam` varchar(255) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `nim` int(15) NOT NULL,
  `nama_pengunjung` varchar(256) NOT NULL,
  `prodi` varchar(256) NOT NULL,
  `fakultas` varchar(256) NOT NULL,
  `id_petugas` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`nim`, `nama_pengunjung`, `prodi`, `fakultas`, `id_petugas`) VALUES
(1800018041, 'Rosa', 'Teknik Informatika', 'FTI', 12355),
(1800018042, 'Wanda Amrina', 'Teknik Informatika', 'FTI', 174),
(1800018045, 'Rosalina', 'Teknik Informatika', 'Teknologi Industri', 174),
(1800018150, 'Inosensia Lionetta Pricillia', 'Teknik Informatika', 'FTI', 156),
(1800018153, 'Nurul Isti', 'Teknik Informatika', 'FTI', 124),
(1800018155, 'Dika putra', 'Teknik Informatika', 'Teknologi Industri', 114),
(1800018157, 'Anita Mira', 'Tekpang', 'Teknologi Industri', 145),
(1800018158, 'Wanda', 'Teknik Informatika', 'FTI', 114),
(1900018151, 'Marlina Maria', 'Manajemen', 'Ekonomi', 1234);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(15) NOT NULL,
  `nama_petugas` varchar(256) NOT NULL,
  `pekerjaan` varchar(256) NOT NULL,
  `sift` enum('senin - rabu pagi, kamis - sabtu siang','senin -  rabu siang, kamis - sabtu pagi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `pekerjaan`, `sift`) VALUES
(101, 'Achmad Faris Zubaidi', 'Tukang Gaduh', 'senin - rabu pagi, kamis - sabtu siang'),
(109, 'Silva Nandhini Nurhadizah', 'Guru Ngaji', 'senin - rabu pagi, kamis - sabtu siang'),
(114, 'Rika Sefia Damayanti', 'Orang Dalam', 'senin - rabu pagi, kamis - sabtu siang'),
(124, 'FAHRIAL HERMAWAN', 'Timses DPR', 'senin -  rabu siang, kamis - sabtu pagi'),
(145, 'YULIANA NABABAN', 'Jukir Pesawat', 'senin - rabu pagi, kamis - sabtu siang'),
(156, 'Sella Pratiwi', 'Stand Up Komedi', 'senin -  rabu siang, kamis - sabtu pagi'),
(174, 'ALI RIDHO', 'Ajudan Kades', 'senin -  rabu siang, kamis - sabtu pagi'),
(1234, 'AJENG ADIAR OKTAVIA', 'Ketua Partai', 'senin - rabu pagi, kamis - sabtu siang'),
(12355, 'AGUS SUSANTO R', 'Pembalap	', 'senin -  rabu siang, kamis - sabtu pagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `no_pinjam` int(255) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `nim` int(15) NOT NULL,
  `id_buku` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`no_pinjam`, `tanggal_pinjam`, `nim`, `id_buku`) VALUES
(5, '2024-02-16', 1800018045, 'A11'),
(23, '2024-02-16', 1800018041, '3'),
(51, '2024-02-16', 1800018153, 'A11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'zubed', '$2y$10$JXtjL2wFLvDHyM2rk.lueO2kM.GqQzAjwWIwimv/iopZTdMGgFGgi'),
(3, 'huda', '$2y$10$rqpGz3YiFPA537JWhlhGT.TFGqEJJyjiilqOu1ZOdYi26i8wIiPP6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`no_data`),
  ADD KEY `no_buku` (`id_buku`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`no_pinjam`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_petugas_2` (`id_petugas`),
  ADD KEY `id_petugas_3` (`id_petugas`),
  ADD KEY `id_petugas_4` (`id_petugas`),
  ADD KEY `id_petugas_5` (`id_petugas`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`no_pinjam`),
  ADD KEY `nim` (`nim`,`id_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `nim` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1900018152;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12356;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `no_pinjam` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `daftar_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD CONSTRAINT `pengunjung_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
