-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2020 pada 09.47
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

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
(5, 'Wahyupurnama43', '$2y$10$50EdOgPZL82pBkoKT4E0l.weH0K4tALdU74Qx.HxaUcZeTa8cI/ra', 'wahyu purnama', 27255, '2020-04-02', 2),
(6, 'wahyuada', '$2y$10$7JnO1G7bZV5ifOX//i2UfecOwYHyLpBAKos9tClslMCfGmffhbKCK', 'wahyu putra', 127652, '2020-04-05', 3),
(8, 'yudhaadistara', '$2y$10$6reJ4w37Res1XbiIKatDme1dlftfiruzW9DApIvKdv.RIYipAWh1y', 'Yudha Adistara', 213212, '2020-04-05', 3);

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
(28, 'Laptop', 10, '2020-03-30', 1, '00.21959600 1585994342.jpg', 'Tolong jangan dibawa pulang !!!!!!!!!!!', 33, 8, 5),
(29, 'Obeng', 7, '2020-04-04', 1, 'd0.34987100 1585994200.jpg', 'Jika pinjam obeng harap kembalikan dan rapikan kembali', 33, 8, 4),
(30, 'Prihandana putra', -9, '2020-04-04', 2, 'h0.67667600 1585994427.jpg', 'BARANG INI SEKALI PAKAI, HABIS DIGUNAKAN BUANG', 33, 8, 4);

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
(33, 'Alat IT', '001', 'untuk anak IT saja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kembali`
--

CREATE TABLE `tb_kembali` (
  `id_kembali` int(11) NOT NULL,
  `tanggal_pinjam` datetime NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `jumlah_pinjam` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `id_auth` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kembali`
--

INSERT INTO `tb_kembali` (`id_kembali`, `tanggal_pinjam`, `jatuh_tempo`, `jumlah_pinjam`, `denda`, `id_auth`, `id_barang`) VALUES
(9, '2020-04-05 00:00:00', '2020-04-07', 2, 10000, 4, 28),
(10, '2020-04-12 00:00:00', '2020-04-15', 3, 0, 4, 28);

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
  `tanggal_pinjam` datetime NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jumlah_pinjam` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL COMMENT '1 = dipinjam 0=proses_pinjam',
  `id_auth` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id_peminjam`, `tanggal_pinjam`, `tanggal_kembali`, `jumlah_pinjam`, `status`, `id_auth`, `id_barang`) VALUES
(11, '2020-04-03 00:00:00', '2020-04-06', 1, 1, 5, 28),
(20, '2020-04-05 00:00:00', '2020-04-07', 5, 0, 6, 29),
(22, '2020-04-05 00:00:00', '2020-04-08', 5, 0, 6, 30),
(23, '2020-04-05 00:00:00', '2020-04-05', 5, 0, 8, 30);

--
-- Trigger `tb_pinjam`
--
DELIMITER $$
CREATE TRIGGER `pinjam` AFTER INSERT ON `tb_pinjam` FOR EACH ROW BEGIN
 UPDATE tb_barang
 SET jumlah = jumlah - NEW.jumlah_pinjam
 WHERE
 id_barang = NEW.id_barang;
 END
$$
DELIMITER ;

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
(8, 'Ruang Guru RPL', '001', 'Jika ambil barang harap lapor terlebih dahulu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id_auth`);

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
  ADD UNIQUE KEY `uk_tb_pinjam` (`id_auth`,`id_barang`);

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
  MODIFY `id_auth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tb_kembali`
--
ALTER TABLE `tb_kembali`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
