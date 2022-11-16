-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2022 pada 10.59
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stationery`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok_barang` varchar(10) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga_barang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `stok_barang`, `deskripsi_barang`, `harga_barang`) VALUES
(2, 'Pensil 2B Joyko', '100', '17,5 cm x diameter 3,5 cm', 'Rp. 1.500,-'),
(10, 'Penggaris Butterfly', '650', 'panjang 30 cm', 'Rp. 3.000,-'),
(23, 'Lem Castol ', '234', 'besar ', 'Rp. 10.500,-'),
(28, 'Block Note Garis Kecil', '444', 'ukuran 10cm x 7,5 cm', 'Rp. 5.000,-'),
(30, 'Ballpoint Greebel', '400', 'tinta hitam', 'Rp. 2.150,-'),
(43, 'Spidol Snowman Marker Besar', '108', 'hitam,merah,biru', 'Rp. 6.000,-'),
(44, 'Isi Cutter Besar L-500', '104', 'isi 12 pcs ', 'Rp. 6.200,-'),
(55, 'Buku Gambar A4', '320', '20 cm x 30 cm', 'Rp. 3.400,-'),
(56, 'HVS Sidu A4', '50', '70 gr 1 rim', 'Rp.40.000,-'),
(59, 'Stop Map Kertas', '348', 'kuning,pink,hijau,biru', 'Rp. 1.200,-'),
(66, 'Isolasi Double Tape', '190', '10m x 1/2 inch', 'Rp. 2.400,-'),
(67, 'Spidol Snowman Kecil', '160', '12 warna', 'Rp. 12.000,-'),
(70, 'Black board', '75', 'panjang 20cm x 30 cm', 'Rp. 20.000'),
(73, 'Kertas Kado Biasa', '250', '50 cm x50 cm Motif Random', 'Rp. 1.500,-'),
(78, 'Tip Ex Kenko', '256', 'panjang 5m x 5mm', 'Rp. 4.300,-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id_pembeli` int(10) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `notelp_pembeli` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`id_pembeli`, `nama_pembeli`, `alamat_pembeli`, `notelp_pembeli`) VALUES
(3, 'Diva Fariha Aswarina', 'Jl. Dino No.1 ,Surakarta', '08647265435'),
(4, 'Fara Putri Cahyadi', 'Jl. Lulusan No.18 ,Solo', '08648446566'),
(5, 'Freya Nur Azizah', 'Jl. Showroom No.88 ,Bandung', '08537286789'),
(6, 'Zahran Putra Khaullah', 'Jl. Sawi Putih No.5 ,Surabaya', '08438762438'),
(7, 'Nivasya Rina', 'Jl. Teleport No.12 ,Boyolali', '08859723369'),
(8, 'Vianita Rafanya Putri', 'Jl. Bunga No.54 ,Klaten', '08637987654'),
(9, 'Dea Banowati', 'Jl. Nanonano No.11 ,Mojosongo', '08158564927'),
(10, 'Gege Saputra Herland', 'Jl. Sejahtera No.4, Maluku', '08838590678'),
(11, 'Aldo Reza Pratama ', 'Jl. Kuningan No.9 ,Jakarta', '08745623457'),
(12, 'Shania Andhira ', 'Jl. Sempurna No.1 ,Jogjakarta', '08345667826'),
(13, 'Gracio Mahesa Nation', 'Jl. Buatan No.31 ,Jakarta', '08667729933'),
(14, 'Hassan Davi Airlangga', 'Jl. Nabati No.20, Surakarta', '08456920376');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  MODIFY `id_pembeli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
