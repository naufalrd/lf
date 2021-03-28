-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 05:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(30) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `id_admin`) VALUES
('admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `level`) VALUES
('admin', '$2y$10$lBmcQFm5ugnUkllW3Ikd0OZE70g0SRnTrrjs9rpT8wSz/OdUgYrB.', 'admin'),
('dokter', '$2y$10$PrRToUYYehwwQ6RwCiuvFe6jrdHcLldj2ojKzy46KV7g6jUo0gUd2', 'dokter'),
('pasien', '$2y$10$srJfT/3ULJxfUKOHJq2LvOi6xvPis0J/D8Jq.UBYPz9N843SsgUSK', 'pasien'),
('perawat', '$2y$10$ilaV8h8Vfpd6dfgRz9NmhOHn7gtdtyK9JImpNzmSRxTFK2yws5DE.', 'perawat');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_pasien` int(11) NOT NULL,
  `no_antri` int(11) NOT NULL DEFAULT 0,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_pasien`, `no_antri`, `id_dokter`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
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
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`username_dokter`, `nama_dokter`, `notelp_dokter`, `id_dokter`, `nama_poli`, `status`) VALUES
('dokter', 'dokter', '087', 1, 'jantung', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `username_pasien` varchar(30) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `umur_pasien` varchar(3) NOT NULL,
  `alamat_pasien` varchar(255) NOT NULL,
  `id_pasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`username_pasien`, `nama_pasien`, `umur_pasien`, `alamat_pasien`, `id_pasien`) VALUES
('pasien', 'Pasien Tampan', '12', 'Rumah Pasien', 1);

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE `perawat` (
  `username_perawat` varchar(30) NOT NULL,
  `nama_perawat` varchar(30) NOT NULL,
  `notelp_perawat` varchar(10) NOT NULL,
  `id_perawat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`username_perawat`, `nama_perawat`, `notelp_perawat`, `id_perawat`) VALUES
('perawat', 'perawat', '0877', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rekammedis` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `diagnosis` text NOT NULL,
  `obat` text NOT NULL,
  `tensi` varchar(255) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rekammedis`, `id_pasien`, `diagnosis`, `obat`, `tensi`, `id_dokter`, `id_perawat`, `tanggal`) VALUES
(1, 1, 'sakit uwuw', 'uwuw', '110', 1, 1, '2021-03-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_username_admin` (`username_admin`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD KEY `fk_antri_id_pasien` (`id_pasien`),
  ADD KEY `fk_antri_id_dokter` (`id_dokter`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `fk_username_dokter` (`username_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `fk_username_pasien` (`username_pasien`);

--
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id_perawat`),
  ADD KEY `fk_username_perawat` (`username_perawat`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rekammedis`),
  ADD KEY `fk_record_idpasien` (`id_pasien`),
  ADD KEY `fk_record_iddokter` (`id_dokter`),
  ADD KEY `fk_record_idperawat` (`id_perawat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perawat`
--
ALTER TABLE `perawat`
  MODIFY `id_perawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_rekammedis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_username_admin` FOREIGN KEY (`username_admin`) REFERENCES `akun` (`username`);

--
-- Constraints for table `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `fk_antri_id_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `fk_antri_id_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `fk_username_dokter` FOREIGN KEY (`username_dokter`) REFERENCES `akun` (`username`);

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_username_pasien` FOREIGN KEY (`username_pasien`) REFERENCES `akun` (`username`);

--
-- Constraints for table `perawat`
--
ALTER TABLE `perawat`
  ADD CONSTRAINT `fk_username_perawat` FOREIGN KEY (`username_perawat`) REFERENCES `akun` (`username`);

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `fk_record_iddokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `fk_record_idpasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `fk_record_idperawat` FOREIGN KEY (`id_perawat`) REFERENCES `perawat` (`id_perawat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
