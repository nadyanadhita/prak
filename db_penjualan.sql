-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Mei 2020 pada 04.17
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id_admin` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_item`
--

CREATE TABLE IF NOT EXISTS `tbl_item` (
`id_item` int(4) NOT NULL,
  `kode` int(90) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `merek` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_item`
--

INSERT INTO `tbl_item` (`id_item`, `kode`, `nama`, `merek`) VALUES
(4, 1, 'sabun', 'garuda'),
(5, 2, 'pepsoden', 'h1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembelian`
--

CREATE TABLE IF NOT EXISTS `tbl_pembelian` (
`id_pembelian` int(11) NOT NULL,
  `no_pembelian` text NOT NULL,
  `tgl_pembelian` text NOT NULL,
  `suplier` text NOT NULL,
  `total` text NOT NULL,
  `terbayar` text NOT NULL,
  `sisa` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembelian`
--

INSERT INTO `tbl_pembelian` (`id_pembelian`, `no_pembelian`, `tgl_pembelian`, `suplier`, `total`, `terbayar`, `sisa`) VALUES
(2, 'p002', '02-02-2002', 'joni', '10000', '20000', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penjualan`
--

CREATE TABLE IF NOT EXISTS `tbl_penjualan` (
`id_penjualan` int(11) NOT NULL,
  `no_penjualan` text NOT NULL,
  `tgl_penjualan` text NOT NULL,
  `costumer` text NOT NULL,
  `total` text NOT NULL,
  `berbayar` text NOT NULL,
  `sisa` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`id_penjualan`, `no_penjualan`, `tgl_penjualan`, `costumer`, `total`, `berbayar`, `sisa`) VALUES
(3, 'S0001', '02-02-2020', 'joko', '20000', '30000', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_stok`
--

CREATE TABLE IF NOT EXISTS `tbl_stok` (
`id_stok` int(11) NOT NULL,
  `kode` text NOT NULL,
  `id_item` int(6) NOT NULL,
  `jumlah` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_stok`
--

INSERT INTO `tbl_stok` (`id_stok`, `kode`, `id_item`, `jumlah`) VALUES
(2, '0', 4, '2'),
(3, '0', 5, '55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
 ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
 ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
 ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `tbl_stok`
--
ALTER TABLE `tbl_stok`
 ADD PRIMARY KEY (`id_stok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
MODIFY `id_item` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_stok`
--
ALTER TABLE `tbl_stok`
MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
