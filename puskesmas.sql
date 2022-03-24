-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Feb 2019 pada 08.23
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_poli` varchar(255) NOT NULL,
  `nama_dokter` varchar(70) NOT NULL,
  `nomor_antrian` varchar(10) NOT NULL,
  `tanggal_pesan` varchar(50) NOT NULL,
  `pilih_metode_pembayaran` varchar(255) NOT NULL,
  `no_asuransi` varchar(255) NOT NULL,
  `tanggal_antrian` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `keluhan_penyakit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `id_user`, `kode_poli`, `nama_dokter`, `nomor_antrian`, `tanggal_pesan`, `pilih_metode_pembayaran`, `no_asuransi`, `tanggal_antrian`, `status`, `keluhan_penyakit`) VALUES
(131, 36, '1', 'gunawan wicaksono', 'DU1', '2019-01-21', 'TUNAI', '', '01/21/2019', 'belum diperiksa', ''),
(132, 7, '1', 'haris maulana', 'DU1', '2019-01-21', 'TUNAI', '', '01/21/2019', 'belum diperiksa', ''),
(133, 2, '1', 'haris maulana', 'DU2', '2019-01-21', 'Pilih Metode Pembayaran', '', '01/21/2019', 'belum diperiksa', ''),
(134, 2, '1', 'gunawan wicaksono', 'DU1', '2019-01-21', 'Pilih Metode Pembayaran', '', '01/14/2019', 'belum diperiksa', ''),
(136, 2, '2', 'jumi', 'DG1', '2019-01-21', 'Pilih Metode Pembayaran', '', '01/06/2019', 'belum diperiksa', ''),
(137, 2, '3', 'kim', 'DA1', '2019-01-21', 'Pilih Metode Pembayaran', '', '01/01/2019', 'belum diperiksa', ''),
(142, 37, '1', 'gunawan wicaksono', 'DU1', '2019-01-21', 'Pilih Metode Pembayaran', '', '01/22/2019', 'belum diperiksa', ''),
(143, 37, '1', 'gunawan wicaksono', 'DU2', '2019-01-21', 'BPJS', '', '01/21/2019', 'belum diperiksa', ''),
(144, 6, '1', 'gunawan wicaksono', 'DU2', '2019-01-21', 'Pilih Metode Pembayaran', '', '01/22/2019', 'belum diperiksa', ''),
(145, 6, '1', 'gunawan bangsat', 'DU1', '2019-01-22', 'Pilih Metode Pembayaran', '', '01/23/2019', 'belum diperiksa', ''),
(146, 6, '1', 'Dr Alexander', 'DU1', '2019-01-22', 'Pilih Metode Pembayaran', '', '01/27/2019', 'belum diperiksa', ''),
(147, 6, '1', 'haris maulana', 'DU1', '2019-01-23', 'Pilih Metode Pembayaran', '', '01/24/2019', 'belum diperiksa', ''),
(148, 6, '1', 'gunawan gunandar', 'DU1', '2019-01-23', 'TUNAI', '', '01/23/2019', 'sudah diperiksa', 'sakit'),
(149, 6, '1', 'haris maulana', 'DU2', '2019-01-23', 'Pilih Metode Pembayaran', '', '01/24/2019', 'belum diperiksa', ''),
(150, 6, '1', 'Dr Alexander', 'DU1', '2019-01-23', 'Pilih Metode Pembayaran', '', '01/24/2019', 'belum diperiksa', ''),
(151, 6, '1', 'gunawan gunandar', 'DU2', '2019-01-23', 'Pilih Metode Pembayaran', '', '01/23/2019', 'belum diperiksa', ''),
(152, 6, '1', 'haris maulana', 'DU3', '2019-01-23', 'ASKES', '', '01/24/2019', 'belum diperiksa', ''),
(153, 6, '2', 'jumi', 'DG1', '2019-01-24', 'BPJS', '', '01/25/2019', 'belum diperiksa', ''),
(154, 6, '1', 'Dr Elishabet', 'DU1', '2019-01-26', 'TUNAI', '9491491215251412451212412', '01/25/2019', 'sudah diperiksa', 'demam berdarah'),
(155, 6, '1', 'Dr Alexander', 'DU1', '2019-01-26', 'TUNAI', '', '01/28/2019', 'belum diperiksa', ''),
(156, 6, '1', 'gunawan gunandar', 'DU1', '2019-01-26', 'TUNAI', '', '01/28/2019', 'belum diperiksa', ''),
(157, 6, '1', 'Dr Alexander', 'DU1', '2019-01-27', 'TUNAI', '', '01/21/2019', 'belum diperiksa', ''),
(158, 6, '1', 'gunawan gunandar', 'DU1', '2019-01-27', 'BPJS', '', '01/21/2019', 'belum diperiksa', ''),
(159, 6, '1', 'haris maulana', 'DU1', '2019-01-27', 'ASKES', '', '01/29/2019', 'belum diperiksa', ''),
(160, 6, '1', 'gunawan gunandar', 'DU1', '2019-01-27', 'ASKES', '', '01/15/2019', 'belum diperiksa', ''),
(161, 6, '1', 'haris maulana', 'DU1', '2019-01-27', 'BPJS', '', '01/28/2019', 'belum diperiksa', ''),
(162, 6, '1', 'Dr Alexander', 'DU2', '2019-01-27', 'ASKES', '', '01/21/2019', 'belum diperiksa', ''),
(163, 6, '1', 'Dr Alexander', 'DU1', '2019-01-27', 'BPJS', '', '01/29/2019', 'belum diperiksa', ''),
(164, 6, '1', 'haris maulana', 'DU1', '2019-01-28', 'Pilih Metode Pembayaran', '', '01/29/2019', 'sudah diperiksa', 'demam'),
(165, 6, '1', 'haris maulana', 'DU2', '2019-01-28', 'Pilih Metode Pembayaran', '', '01/29/2019', 'sudah diperiksa', 'tipus'),
(166, 6, '1', 'haris maulana', 'DU1', '2019-01-28', 'TUNAI', '', '01/30/2019', 'sudah diperiksa', 'demam berdarah'),
(167, 6, '1', 'haris maulana', 'DU3', '2019-01-28', 'TUNAI', '', '01/29/2019', 'belum diperiksa', ''),
(168, 6, '1', 'haris maulana', 'DU4', '2019-01-28', 'TUNAI', '', '01/29/2019', 'belum diperiksa', ''),
(169, 6, '1', 'haris maulana', 'DU5', '2019-01-28', 'TUNAI', '', '01/29/2019', 'belum diperiksa', ''),
(170, 6, '1', 'haris maulana', 'DU6', '2019-01-28', 'TUNAI', '', '01/29/2019', 'belum diperiksa', ''),
(171, 6, '1', 'gunawan gunandar', 'DU1', '2019-01-28', 'TUNAI', '', '01/28/2019', 'belum diperiksa', ''),
(172, 6, '1', 'haris maulana', 'DU1', '2019-01-28', 'TUNAI', '', '01/28/2019', 'belum diperiksa', ''),
(173, 6, '1', 'haris maulana', 'DU2', '2019-01-28', 'TUNAI', '', '01/28/2019', 'belum diperiksa', ''),
(174, 6, '1', 'haris maulana', 'DU3', '2019-01-28', 'TUNAI', '', '01/28/2019', 'belum diperiksa', ''),
(175, 6, '1', 'haris maulana', 'DU7', '2019-01-28', 'TUNAI', '', '01/29/2019', 'belum diperiksa', ''),
(176, 6, '1', 'haris maulana', 'DU8', '2019-01-28', 'TUNAI', '', '01/29/2019', 'belum diperiksa', ''),
(177, 52, '2', 'juju', 'DG1', '2019-01-28', 'TUNAI', '', '01/28/2019', 'sudah diperiksa', 'sakit gigi'),
(178, 52, '2', 'juju', 'DG2', '2019-01-28', 'TUNAI', '', '01/28/2019', 'belum diperiksa', ''),
(179, 52, '1', 'haris maulana', 'DU4', '2019-01-28', 'TUNAI', '', '01/28/2019', 'belum diperiksa', ''),
(180, 52, '2', 'juju', 'DG3', '2019-01-28', 'TUNAI', '', '01/28/2019', 'sudah diperiksa', 'tambal gigi'),
(181, 6, '2', 'juju', 'DG4', '2019-01-28', 'TUNAI', '', '01/28/2019', 'sudah diperiksa', 'nambah gigi'),
(182, 2, '2', 'juju', 'DG5', '2019-01-28', 'TUNAI', '', '01/28/2019', 'belum diperiksa', ''),
(183, 6, '1', 'haris maulana', 'DU1', '2019-02-01', 'TUNAI', '', '02/01/2019', 'sudah diperiksa', 'asa'),
(184, 6, '1', 'haris maulana', 'DU2', '2019-02-01', 'TUNAI', '', '02/01/2019', 'sudah diperiksa', 'demam'),
(185, 6, '1', 'haris maulana', 'DU3', '2019-02-01', 'TUNAI', '', '02/01/2019', 'sudah diperiksa', 'gigi bolong'),
(186, 6, '1', 'haris maulana', 'DU4', '2019-02-01', 'TUNAI', '', '02/01/2019', 'sudah diperiksa', 'tipus'),
(187, 6, '1', 'haris maulana', 'DU5', '2019-02-01', 'TUNAI', '', '02/01/2019', 'belum diperiksa', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `kode_poli` int(11) NOT NULL,
  `nomor_telepon` int(11) NOT NULL,
  `jam _kerja_awal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli`
--

CREATE TABLE `poli` (
  `kode_poli` int(11) NOT NULL,
  `id_poli` varchar(10) NOT NULL,
  `nama_poli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poli`
--

INSERT INTO `poli` (`kode_poli`, `id_poli`, `nama_poli`) VALUES
(1, 'DU', 'Poli Umum'),
(2, 'DG', 'Poli Gigi'),
(3, 'DA', 'Poli Anak'),
(4, 'BD', 'Poli Bidan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Pasien','Petugas','Dokter') NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `nomor_tlp` varchar(255) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `kode_poli` int(11) DEFAULT NULL,
  `jam_awal` varchar(50) DEFAULT NULL,
  `jam_akhir` varchar(50) DEFAULT NULL,
  `hari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `level`, `nama`, `alamat`, `jenis_kelamin`, `tgl_lahir`, `nomor_tlp`, `nik`, `kode_poli`, `jam_awal`, `jam_akhir`, `hari`) VALUES
(1, 'hafizmm06@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Petugas', 'hafiz', 'sarijadi', '1', '06-11-1997', '0895782842', '0', 0, '', '', ''),
(2, 'soniaprastica@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pasien', 'sonia', 'sarijadi', '2', '19-10-2015', '82199301248', '0', 0, NULL, '0000-00-00 00:00:00', ''),
(3, 'wawat@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Petugas', 'wawan', 'pasteur', '1', '20-09-1998', '824792749188492', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(4, 'wawat123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pasien', 'wawat', 'pasteur', '1', '12/23/2018', '085930623', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(6, 'asd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pasien', 'jo', 'sariasih', '1', '12/19/2018', '6891924848769', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(7, 'piw@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pasien', 'piw', 'pasteur', '1', '12/20/2018', '0897484839', '0', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(24, 'juju@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'juju', 'kalimantan', 'Jenis Kelamin', '1993-08-09', '', NULL, 2, '07.30', '09.30 ', 'senin-sabtu'),
(25, 'kim@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'dr kim kurniawan', 'kiloan', 'Jenis Kelamin', '1994-01-10', '', NULL, 3, '07.30', '09.30', 'senin-sabtu'),
(28, 'jumi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'jumi', 'kopo', 'Jenis Kelamin', '1992-09-07', '', NULL, 2, '09.30', '11.30', 'senin-sabtu'),
(29, 'amrullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'dr amrullah', 'jl gegerkalong', 'Jenis Kelamin', '1993-10-09', '', NULL, 3, '09.30', '11.30', 'senin-sabtu'),
(31, 'ga@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pasien', 'ga', 'sarkem', '1', '1995-11-09', '0892984772845', '1214241412515', NULL, NULL, NULL, ''),
(32, 'jalal@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pasien', 'jalal udin', 'pasar sarijadi', '1', '1992-11-06', '08556282934', '2192949291851991', NULL, NULL, NULL, ''),
(34, 'haris@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'haris maulana', 'sariasih', 'Jenis Kelamin', '1995-11-06', '08374771828', NULL, 1, '07.30', '09.30', 'senin-sabtu'),
(35, 'julaeha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'julaeha', 'cikopo', 'Jenis Kelamin', '1991-02-01', '', NULL, 4, '07.30', '09.30', 'senin-sabtu'),
(36, 'sarijah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pasien', 'sarijah', 'sarijadi', '2', '1995-11-04', '086662774718', '9288727174814123', NULL, NULL, NULL, ''),
(37, 'sarmilah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pasien', 'sarmilah', 'sariasih', '2', '1994-11-06', '08876616412', '08287417478112', NULL, NULL, NULL, ''),
(38, '6969@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pasien', 'laklak', 'lakjsdlkasd', '1', '2019-01-15', '989234', '6969696969', NULL, NULL, NULL, ''),
(40, 'gunawan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'gunawan gunandar', 'kebon kopi', 'Jenis Kelamin', '1998-06-11', '', NULL, 1, '09.30', '11.30', 'senin-sabtu'),
(41, 'alex@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'Dr Alexander', 'Sukajadi', 'Jenis Kelamin', '1990-05-07', '', NULL, 1, '12.00', '14.00', 'senin-kamis'),
(43, 'asepmaulana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'Asep Maulana', 'sariasih', 'Jenis Kelamin', '1992-06-08', '', NULL, 2, '12.00', '14.00 ', 'senin-kamis'),
(44, 'nanda@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'drs nanda', 'jl lengkong kecil', 'Jenis Kelamin', '1990-11-06', '', NULL, 4, '09.30 ', '11.30', 'senin-sabtu'),
(49, 'asd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Pasien', 'asdadasdsdadadsad', 'adsadsada', '1', '2000-01-01', '1321321321', '11321321321', NULL, NULL, NULL, ''),
(50, 'kimkurniawan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'kimberly', 'paskal', 'Jenis Kelamin', '1992-04-01', '', NULL, 3, '12.00', '14.00', 'senin-kamis'),
(51, 'hamdut@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dokter', 'hamdut', 'alun-alun', 'Jenis Kelamin', '1992-12-08', '', NULL, 4, '12.00', '14.00', 'senin-kamis'),
(52, 'hafizmm11.hm@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pasien', 'hafiz muzaffar', 'sarijadi', '1', '1997-11-06', '087739673161', '8282847881992902', NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`kode_poli`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `kode_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
