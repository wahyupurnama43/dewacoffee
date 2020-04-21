-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2020 pada 09.10
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `id_auth` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_induk` int(18) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `id_level` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`id_auth`, `username`, `password`, `nama`, `no_induk`, `tgl_daftar`, `id_level`) VALUES
(4, 'admin', '$2y$10$9.CbUnaIz5jLv3snrjnuIu0YGqcuDvQnMAGwMqB7E1ujz7odN8pCS', 'Admin', 0, '2020-03-29', 1),
(5, 'Wahyupurnama43', '$2y$10$50EdOgPZL82pBkoKT4E0l.weH0K4tALdU74Qx.HxaUcZeTa8cI/ra', 'wahyu purnama', 27255, '2020-04-02', 3),
(6, 'prihandana', '$2y$10$qDRMa.e08Qwwqt4.opCQCO5KsXFiAptvDH3L6TzL.WvY6Xcznihb2', 'I Gusti Putu Ngurah Prihandana', 12312, '2020-04-05', 3),
(12, 'yudha adistara', '$2y$10$1//KhJysDS9UUkUzUN8wCu/e/FqwZLeh/bK3e/3dngI92jiei35Uq', 'Yudha Adistara', 12112, '2020-04-19', 3),
(13, 'trinity', '$2y$10$BsP6eqjG02QQVP2gMrQOsuHYI4Wx1lrh9MvybVrCMtbn9niNVXFE2', 'Trinity Laksmi ', 27258, '2020-04-21', 3),
(15, 'jeni andini', '$2y$10$aNIIk.NkaDukjaJQ6OGh8OuFyN1Gn4cfIqiTEOcX7QLpfu1IZsNAy', 'jeni andini', 12312, '2020-04-21', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `id_detail_pinjam` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  `jumlah_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`id_detail_pinjam`, `id_barang`, `id_peminjam`, `jumlah_pinjam`) VALUES
(37, 43, 50, 5),
(38, 44, 51, 3),
(39, 43, 52, 5),
(40, 44, 53, 5),
(41, 43, 54, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notif`
--

CREATE TABLE `notif` (
  `id_notif` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_detail_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notif`
--

INSERT INTO `notif` (`id_notif`, `status`, `id_detail_pinjam`) VALUES
(2, 0, 37),
(3, 0, 38),
(4, 0, 39),
(5, 0, 40),
(6, 0, 41);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_brng` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kondisi` tinyint(2) NOT NULL COMMENT '1= baik , 2=rusak',
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `id_auth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_brng`, `jumlah`, `tanggal_masuk`, `kondisi`, `gambar`, `deskripsi`, `id_jenis`, `id_ruang`, `id_auth`) VALUES
(43, 'Laptop', 1, '2020-04-18', 1, 'd0.55833700 1587200276.jpg', 'sada', 37, 11, 4),
(44, 'Poster', 10, '2020-04-19', 1, 't0.95055100 1587273385.jpg', 'qwedasda', 37, 11, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  `kode_jenis` varchar(4) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `nama_jenis`, `kode_jenis`, `keterangan`) VALUES
(37, 'Laptop', '001', 'asdas'),
(38, 'Seni', '005', 'sadasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kembali`
--

CREATE TABLE `tb_kembali` (
  `id_kembali` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `denda` int(11) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `id_auth` int(11) NOT NULL,
  `id_detail_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kembali`
--

INSERT INTO `tb_kembali` (`id_kembali`, `tanggal_pinjam`, `denda`, `jatuh_tempo`, `id_auth`, `id_detail_pinjam`) VALUES
(1, '0000-00-00', 0, '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(7) NOT NULL,
  `level` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`, `level`) VALUES
(1, 'admin', 1),
(2, 'petugas', 2),
(3, 'user', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id_peminjam` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` tinyint(3) NOT NULL COMMENT '1 = dipinjam 0=proses_pinjam 2= kembali',
  `id_auth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id_peminjam`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `id_auth`) VALUES
(50, '2020-04-20', '2020-04-23', 0, 5),
(51, '2020-04-20', '2020-04-23', 0, 6),
(52, '2020-04-21', '2020-04-24', 0, 13),
(53, '2020-04-21', '2020-04-22', 0, 15),
(54, '2020-04-21', '2020-04-25', 0, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(100) NOT NULL,
  `kode_ruang` varchar(5) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_ruang`, `nama_ruang`, `kode_ruang`, `keterangan`) VALUES
(11, 'laptop', '221', 'poooijo'),
(12, 'UKS', '000', 'asda');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id_auth`);

--
-- Indeks untuk tabel `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`id_detail_pinjam`);

--
-- Indeks untuk tabel `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- Indeks untuk tabel `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `tb_kembali`
--
ALTER TABLE `tb_kembali`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indeks untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD UNIQUE KEY `uk_tb_detail` (`id_auth`,`status`);

--
-- Indeks untuk tabel `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth`
--
ALTER TABLE `auth`
  MODIFY `id_auth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  MODIFY `id_detail_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `notif`
--
ALTER TABLE `notif`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tb_kembali`
--
ALTER TABLE `tb_kembali`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
