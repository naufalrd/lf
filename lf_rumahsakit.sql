-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2021 pada 09.13
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lf_rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(30) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username_admin`, `id_admin`) VALUES
('admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `level`) VALUES
('admin', '$2y$10$lBmcQFm5ugnUkllW3Ikd0OZE70g0SRnTrrjs9rpT8wSz/OdUgYrB.', 'admin'),
('dokter', '$2y$10$PrRToUYYehwwQ6RwCiuvFe6jrdHcLldj2ojKzy46KV7g6jUo0gUd2', 'dokter'),
('pasien', '$2y$10$srJfT/3ULJxfUKOHJq2LvOi6xvPis0J/D8Jq.UBYPz9N843SsgUSK', 'pasien'),
('perawat', '$2y$10$ilaV8h8Vfpd6dfgRz9NmhOHn7gtdtyK9JImpNzmSRxTFK2yws5DE.', 'perawat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id_pasien` int(11) NOT NULL,
  `no antri` int(11) NOT NULL DEFAULT 0,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `username_dokter` varchar(30) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `notelp_dokter` varchar(10) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `nama_poli` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`username_dokter`, `nama_dokter`, `notelp_dokter`, `id_dokter`, `nama_poli`, `status`) VALUES
('dokter', 'dokter', '087', 1, 'jantung', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `username_pasien` varchar(30) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `umur_pasien` varchar(3) NOT NULL,
  `alamat_pasien` varchar(255) NOT NULL,
  `id_pasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`username_pasien`, `nama_pasien`, `umur_pasien`, `alamat_pasien`, `id_pasien`) VALUES
('pasien', 'Pasien Tampan', '12', 'Rumah Pasien', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perawat`
--

CREATE TABLE `perawat` (
  `username_perawat` varchar(30) NOT NULL,
  `nama_perawat` varchar(30) NOT NULL,
  `notelp_perawat` varchar(10) NOT NULL,
  `id_perawat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perawat`
--

INSERT INTO `perawat` (`username_perawat`, `nama_perawat`, `notelp_perawat`, `id_perawat`) VALUES
('perawat', 'perawat', '0877', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_pasien` int(11) NOT NULL,
  `diagnosis` text NOT NULL,
  `obat` text NOT NULL,
  `tensi` varchar(255) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_username_admin` (`username_admin`);

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD KEY `fk_antri_id_pasien` (`id_pasien`),
  ADD KEY `fk_antri_id_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `fk_username_dokter` (`username_dokter`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `fk_username_pasien` (`username_pasien`);

--
-- Indeks untuk tabel `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id_perawat`),
  ADD KEY `fk_username_perawat` (`username_perawat`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD KEY `fk_record_idpasien` (`id_pasien`),
  ADD KEY `fk_record_iddokter` (`id_dokter`),
  ADD KEY `fk_record_idperawat` (`id_perawat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perawat`
--
ALTER TABLE `perawat`
  MODIFY `id_perawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_username_admin` FOREIGN KEY (`username_admin`) REFERENCES `akun` (`username`);

--
-- Ketidakleluasaan untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `fk_antri_id_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `fk_antri_id_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Ketidakleluasaan untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `fk_username_dokter` FOREIGN KEY (`username_dokter`) REFERENCES `akun` (`username`);

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_username_pasien` FOREIGN KEY (`username_pasien`) REFERENCES `akun` (`username`);

--
-- Ketidakleluasaan untuk tabel `perawat`
--
ALTER TABLE `perawat`
  ADD CONSTRAINT `fk_username_perawat` FOREIGN KEY (`username_perawat`) REFERENCES `akun` (`username`);

--
-- Ketidakleluasaan untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `fk_record_iddokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `fk_record_idpasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `fk_record_idperawat` FOREIGN KEY (`id_perawat`) REFERENCES `perawat` (`id_perawat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
