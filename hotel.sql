-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2020 pada 01.41
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(25) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `kategori_galeri_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `nama_galeri`, `gambar`, `kategori_galeri_id`) VALUES
(1, 'Kamar Vip', '1365042f4f5857e1cb1e0f1c939f915c.jpg', 3),
(2, 'Restaurant', '01e7f79b0ce37d6a0a1302b94b6adc10.jpg', 3),
(3, 'Kamar Bed 2', '4ff6a5e7c6ca5a905adeeaef1aaa401c.jpg', 2),
(4, 'Ruang Meating', 'a0d71c8c9c82ec0dd32c8434e78ca8cb.jpg', 4),
(5, 'Galeri Kamar', '7aec040fb8587c8e6517079eac71d709.jpg', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nomer_kamar` char(5) NOT NULL,
  `harga_kamar` bigint(15) NOT NULL,
  `fasilitas_kamar` text NOT NULL,
  `status_kamar` int(2) NOT NULL,
  `kelas_kamar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_kamar`, `nomer_kamar`, `harga_kamar`, `fasilitas_kamar`, `status_kamar`, `kelas_kamar_id`) VALUES
(1, 'A01', 350000, 'Berikut Keteranggan Kamar dan fasilitasnya', 1, 1),
(2, 'A02', 350000, 'Berikut Adalah Fasilitas Kamar', 1, 1),
(3, 'B01', 300000, 'Isi Kamar', 0, 2),
(4, 'B02', 300000, 'Isi Kamar 2', 1, 2),
(5, 'A03', 350000, 'Isi kamar 5', 1, 1),
(6, 'A04', 350000, 'Isi Kamar A04', 1, 1),
(7, 'A05', 350000, 'Isi Kamar A05', 1, 1),
(8, 'A06', 350000, 'Isi Kamar', 0, 1),
(9, 'B03', 300000, 'Isi kamar', 0, 2),
(10, 'B04', 300000, 'Isi Kamar B04', 0, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kamar_gambar`
--

CREATE TABLE `tbl_kamar_gambar` (
  `id_kamar_gambar` int(11) NOT NULL,
  `nama_kamar_gambar` varchar(50) NOT NULL,
  `kamar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kamar_gambar`
--

INSERT INTO `tbl_kamar_gambar` (`id_kamar_gambar`, `nama_kamar_gambar`, `kamar_id`) VALUES
(1, 'ff494a1f31812ce31f5b640dcad0fd69.jpg', 2),
(2, '077436260370e54d21df41f08de9cf77.jpg', 1),
(3, '94744ca39f5d3d39dd02237949297c2a.jpg', 3),
(4, '1bb939c553b1f0fa8f9d12d4648b7cf9.jpg', 4),
(5, '3b68462ccff0c2ea1df278fa7fdfd91e.jpg', 5),
(6, 'de8bdefdef0ee5215ad66f122af25766.jpg', 6),
(7, '912886d30cbbe1b74e7bd9d58ccc048c.jpg', 7),
(8, '4e23c294a4f69d205524209847d2e635.jpg', 8),
(9, '88f54d8756f67030a6ac91bee5f9d186.jpg', 9),
(10, '3b01d294e9c98a0e63a49ddbf769eeac.jpg', 10),
(12, '375aa38fd39a9e15e58368e0e384918f.jpg', 1),
(13, '5db8529314d4356baf2cd41345adbfd5.jpg', 1),
(14, '5cc182bf378a78ea786ba6c7ef733403.jpg', 1),
(15, 'b3baae25d4edf29e0800b364046c06de.jpg', 1),
(16, 'a3661c89024db482ce197c7b10c8b582.jpg', 1),
(17, '48141c39a7196324e846eb74183c050b.png', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori_galeri`
--

CREATE TABLE `tbl_kategori_galeri` (
  `id_kategori_galeri` int(11) NOT NULL,
  `nama_kategori_galeri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori_galeri`
--

INSERT INTO `tbl_kategori_galeri` (`id_kategori_galeri`, `nama_kategori_galeri`) VALUES
(2, 'Category First'),
(3, 'Category Second'),
(4, 'Category Three'),
(5, 'Category Four');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas_kamar`
--

CREATE TABLE `tbl_kelas_kamar` (
  `id_kelas_kamar` int(11) NOT NULL,
  `nama_kelas_kamar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas_kamar`
--

INSERT INTO `tbl_kelas_kamar` (`id_kelas_kamar`, `nama_kelas_kamar`) VALUES
(1, 'KELAS A'),
(2, 'KELAS B'),
(3, 'KELAS C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reservasi`
--

CREATE TABLE `tbl_reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `nama_reservasi` varchar(25) NOT NULL,
  `telp_reservasi` varchar(12) NOT NULL,
  `alamat_reservasi` text NOT NULL,
  `tgl_reservasi_masuk` date NOT NULL,
  `tgl_reservasi_keluar` date NOT NULL,
  `kamar_id` int(11) NOT NULL,
  `status_reservasi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_reservasi`
--

INSERT INTO `tbl_reservasi` (`id_reservasi`, `nama_reservasi`, `telp_reservasi`, `alamat_reservasi`, `tgl_reservasi_masuk`, `tgl_reservasi_keluar`, `kamar_id`, `status_reservasi`) VALUES
(1, 'Niko Prakoso', '045676688', 'Purworejo', '2015-07-27', '2015-07-28', 2, 2),
(2, 'Dimas ', '082325125341', 'Suwawal Barat rt 02 rw 01', '2020-01-09', '2020-01-16', 10, 1),
(3, 'Dimas ', '082325125341', 'Suwawal Barat rt 02 rw 01', '2020-01-09', '2020-01-16', 10, 2),
(4, 'Dimas ', '082325125341', 'ad', '2020-01-09', '2020-01-12', 1, 1),
(5, 'Dimas ', '082325125341', 'Suwawal rt 04 rw 01\r\nTOESERBA', '2020-01-10', '2020-01-11', 5, 1),
(6, 'Dimas ', '082325125341', '989', '2020-01-13', '2020-01-14', 6, 1),
(7, 'Dimas', '0892323', 'Suwawal', '2020-01-14', '2020-01-15', 4, 1),
(8, 'Arka', '082325125341', 'Jepara', '2020-01-23', '2020-01-24', 7, 1),
(9, 'Dimas ', '082325125341', 'Jepara', '0000-00-00', '0000-00-00', 2, 2),
(10, 'Dimas ', '082325125341', 'Jepara', '0000-00-00', '0000-00-00', 3, 2),
(11, 'Diko', '082325125341', 'Sinanggul', '2020-01-21', '2020-01-22', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reservasi_pembayaran`
--

CREATE TABLE `tbl_reservasi_pembayaran` (
  `id_reservasi_pembayaran` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `nominal_pembayaran` int(11) NOT NULL,
  `uang_bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `reservasi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_reservasi_pembayaran`
--

INSERT INTO `tbl_reservasi_pembayaran` (`id_reservasi_pembayaran`, `tgl_pembayaran`, `nominal_pembayaran`, `uang_bayar`, `kembalian`, `reservasi_id`) VALUES
(1, '2015-07-27', 350000, 400000, 50000, 1),
(2, '2020-01-09', 2100000, 1000, -2099000, 3),
(3, '2020-01-20', 175000, 1000, 0, 9),
(4, '2020-01-21', 150000, 200000, 0, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id_saran` int(11) NOT NULL,
  `nama_saran` varchar(20) NOT NULL,
  `email_saran` varchar(25) NOT NULL,
  `telp_saran` bigint(15) NOT NULL,
  `isi_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_saran`
--

INSERT INTO `tbl_saran` (`id_saran`, `nama_saran`, `email_saran`, `telp_saran`, `isi_saran`) VALUES
(1, 'Muhammad Roziqin', 'roziqin_iqin@yahoo.com', 987654345, 'Contoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\nContoh isi saran untuk hotel sistem.\r\n'),
(2, 'Muhammad ainun najib', 'ainunnajib@yahoo.com', 766567890908, 'tes'),
(3, 'Dimas Ariyanto', 'dimasariyanto890@gmail.co', 82325125341, 'lebih ditingkatkan\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tentang_hotel`
--

CREATE TABLE `tbl_tentang_hotel` (
  `id_tentang_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(20) NOT NULL,
  `alamat_tentang_hotel` varchar(35) NOT NULL,
  `email_tentang_hotel` varchar(25) NOT NULL,
  `telp_tentang_hotel` bigint(15) NOT NULL,
  `isi_tentang_hotel` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `tw` varchar(50) NOT NULL,
  `gp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tentang_hotel`
--

INSERT INTO `tbl_tentang_hotel` (`id_tentang_hotel`, `nama_hotel`, `alamat_tentang_hotel`, `email_tentang_hotel`, `telp_tentang_hotel`, `isi_tentang_hotel`, `logo`, `fb`, `tw`, `gp`) VALUES
(1, 'HOTEL', 'Jl Mgelang Km 9 Mulungan', 'admin@hotel.com', 9876543567, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '22ba7c5da75a7a4f79f8e92ed4aa6292.png', 'http://facebook.com', 'http://twitter.com', 'http://gplus.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `email_user` varchar(20) NOT NULL,
  `telp_user` bigint(15) NOT NULL,
  `username_user` varchar(10) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `user_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email_user`, `telp_user`, `username_user`, `password_user`, `user_group_id`) VALUES
(1, 'Pemilik Hotel', 'admin@hotel.com', 98765456, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'operator', 'operator@hotel.com', 98765467, 'operator', 'e10adc3949ba59abbe56e057f20f883e', 2),
(4, 'Dimas Ariyanto', 'dimas@operator.com', 82325125341, 'operator', 'ef1b4ce6dcefed364189d90967f2e8ae', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_group`
--

CREATE TABLE `tbl_user_group` (
  `id_user_group` int(11) NOT NULL,
  `nama_user_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user_group`
--

INSERT INTO `tbl_user_group` (`id_user_group`, `nama_user_group`) VALUES
(1, 'admin'),
(2, 'operator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `tbl_kamar_gambar`
--
ALTER TABLE `tbl_kamar_gambar`
  ADD PRIMARY KEY (`id_kamar_gambar`);

--
-- Indeks untuk tabel `tbl_kategori_galeri`
--
ALTER TABLE `tbl_kategori_galeri`
  ADD PRIMARY KEY (`id_kategori_galeri`);

--
-- Indeks untuk tabel `tbl_kelas_kamar`
--
ALTER TABLE `tbl_kelas_kamar`
  ADD PRIMARY KEY (`id_kelas_kamar`);

--
-- Indeks untuk tabel `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indeks untuk tabel `tbl_reservasi_pembayaran`
--
ALTER TABLE `tbl_reservasi_pembayaran`
  ADD PRIMARY KEY (`id_reservasi_pembayaran`);

--
-- Indeks untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `tbl_tentang_hotel`
--
ALTER TABLE `tbl_tentang_hotel`
  ADD PRIMARY KEY (`id_tentang_hotel`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_user_group`
--
ALTER TABLE `tbl_user_group`
  ADD PRIMARY KEY (`id_user_group`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_kamar_gambar`
--
ALTER TABLE `tbl_kamar_gambar`
  MODIFY `id_kamar_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori_galeri`
--
ALTER TABLE `tbl_kategori_galeri`
  MODIFY `id_kategori_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas_kamar`
--
ALTER TABLE `tbl_kelas_kamar`
  MODIFY `id_kelas_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_reservasi_pembayaran`
--
ALTER TABLE `tbl_reservasi_pembayaran`
  MODIFY `id_reservasi_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_tentang_hotel`
--
ALTER TABLE `tbl_tentang_hotel`
  MODIFY `id_tentang_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_group`
--
ALTER TABLE `tbl_user_group`
  MODIFY `id_user_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
