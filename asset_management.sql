-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2023 pada 08.27
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asset_management`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `no_karyawan` int(11) NOT NULL,
  `nama_karyawan` char(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `jabatan` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `departement`
--

CREATE TABLE `departement` (
  `no_departement` int(11) NOT NULL,
  `kode_departement` varchar(10) NOT NULL,
  `group_departement` char(255) NOT NULL,
  `singkatan` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_asset`
--

CREATE TABLE `group_asset` (
  `no_group` int(11) NOT NULL,
  `kode_group` varchar(10) NOT NULL,
  `nama_group_asset` char(255) NOT NULL,
  `status_group_asset` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `no_history` int(11) NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `departement_tujuan` char(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `alokated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_asset`
--

CREATE TABLE `list_asset` (
  `no_list_asset` int(11) NOT NULL,
  `kode_asset` varchar(10) NOT NULL,
  `set` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `tanggal_pakai` date NOT NULL,
  `nama_asset` char(255) NOT NULL,
  `group` char(255) NOT NULL,
  `pic` char(255) NOT NULL,
  `departement` char(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kondisi` char(255) NOT NULL,
  `foto_asset` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `no_supplier` int(11) NOT NULL,
  `nama_supplier` char(255) NOT NULL,
  `alamat` text NOT NULL,
  `kota` char(255) NOT NULL,
  `telphone` int(11) NOT NULL,
  `mobile_phone` int(11) NOT NULL,
  `fax` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`kode_departement`);

--
-- Indeks untuk tabel `group_asset`
--
ALTER TABLE `group_asset`
  ADD PRIMARY KEY (`kode_group`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
