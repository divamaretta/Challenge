-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2020 pada 17.41
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challenge`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_nilai_siswa`
--

CREATE TABLE `form_nilai_siswa` (
  `NIS` int(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Nilai_Web` int(5) NOT NULL,
  `Nilai_PBO` int(5) NOT NULL,
  `Nilai_Basdat` int(5) NOT NULL,
  `Nilai_Desain` int(5) NOT NULL,
  `Nilai_Progdas` int(5) NOT NULL,
  `Jurusan` int(15) DEFAULT NULL,
  `Kelas` int(15) DEFAULT NULL,
  `Rata_rata` double NOT NULL,
  `Predikat` varchar(20) NOT NULL,
  `Keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `form_nilai_siswa`
--

INSERT INTO `form_nilai_siswa` (`NIS`, `Nama`, `Alamat`, `Nilai_Web`, `Nilai_PBO`, `Nilai_Basdat`, `Nilai_Desain`, `Nilai_Progdas`, `Jurusan`, `Kelas`, `Rata_rata`, `Predikat`, `Keterangan`) VALUES
(1234, 'Diva Maretta', 'Jl in aja dulu', 100, 95, 90, 89, 95, 1, 1, 94, 'A', 'Excellent'),
(2234, 'Rensi Meila ', 'Jl ku bersamanya', 98, 90, 88, 91, 95, 1, 2, 92, 'A', 'Excellent'),
(4434, 'Hwang Renjun', 'Jl ke pelaminan bersamaku', 95, 90, 100, 89, 90, 2, 2, 93, 'A', 'Excellent');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `Id_jurusan` int(10) NOT NULL,
  `Jurusan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`Id_jurusan`, `Jurusan`) VALUES
(1, 'RPL'),
(2, 'TKJ'),
(3, 'MM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `Id_kelas` int(3) NOT NULL,
  `Kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`Id_kelas`, `Kelas`) VALUES
(1, 'X'),
(2, 'XI'),
(3, 'XII');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form_nilai_siswa`
--
ALTER TABLE `form_nilai_siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `Id_kelas` (`Kelas`),
  ADD KEY `Id_jurusan` (`Jurusan`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`Id_jurusan`) USING BTREE;

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Id_kelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `form_nilai_siswa`
--
ALTER TABLE `form_nilai_siswa`
  MODIFY `NIS` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=818261738;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `Id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `form_nilai_siswa`
--
ALTER TABLE `form_nilai_siswa`
  ADD CONSTRAINT `form_nilai_siswa_ibfk_1` FOREIGN KEY (`Kelas`) REFERENCES `kelas` (`Id_kelas`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `form_nilai_siswa_ibfk_2` FOREIGN KEY (`Jurusan`) REFERENCES `jurusan` (`Id_jurusan`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
