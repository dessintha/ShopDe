-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2020 pada 18.16
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `invoices`
--

INSERT INTO `invoices` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(2, 'Kang Mus', 'Sawit', '2020-10-20', '2020-10-21 16:59:07'),
(4, 'Yasmine', 'semarang', '2020-10-20', '2020-10-21 17:26:23'),
(5, 'Yasmine', 'Boyolali', '2020-10-20', '2020-10-21 22:52:44'),
(6, 'Siti', 'Sawit Manjung', '2020-10-20', '2020-10-21 22:57:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_brg` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(8, 'Bola', 'Bola Basket', 'Olahraga', 100000, 30, '307805_2.jpg'),
(11, 'Bola ', 'Bola Sepak', 'Olahraga', 250000, 4, 'download2.jpg'),
(12, 'Kebaya', 'Kebaya warna coklat', 'Pakaian Wanita', 250000, 9, '66bce5b1b1fe7da49059bf0f32847461.png'),
(13, 'Kemeja', 'Kemeja Pria Lengan Panjang', 'Pakaian Pria', 300000, 15, '35734172_2baeece8-bd76-4aab-9a8b-817374dd83a8_1536_1536.jpeg'),
(14, 'Kaos', 'Kaos Pria Lengan Pendek', 'Pakaian Pria', 50000, 20, '41487614_1b4673ef-c477-4a60-ab6e-84ec7be5789c_900_900.jpeg'),
(15, 'Raket', 'Raket Warna Kuning', 'Olahraga', 245000, 17, '64426626_b1047753-c6c6-4023-9ab1-853e9e2d9efc_1200_1000.jpg'),
(17, 'Baju Anak', 'Baju Anak Pria', 'Pakaian Anak', 245000, 5, 'c81e942f908a274689c096ced8575579.jpg'),
(18, 'Kulkas', 'Kulkas Sanken', 'Elektronik', 945000, 3, 'download3.jpg'),
(19, 'TV', 'Tv merk samsung', 'Elektronik', 3500000, 7, 'id-fhd-t5500-ua43t6500akxxd-frontblack-229359102.jpg'),
(21, 'Dress', 'Dress Anak', 'Pakaian Anak', 1320000, 8, 'osella-kids-9197-5384222-1.jpg'),
(22, 'Sepatu Sport', 'Sepatu Adidas', 'Olahraga', 750000, 19, '1896967_26c5b163-acc7-41dd-9b07-b5b9becd6b76.jpg'),
(24, 'HP', 'HP Samsung a51', 'Elektronik', 4700000, 7, 'samsung-galaxy-a51.jpg'),
(25, 'Blouse', 'Blouse Lengan Panjang', 'Pakaian Wanita', 98000, 5, 'download_(1).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_brg` varchar(200) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 5, 11, 'Bola ', 1, 250000, ''),
(2, 6, 12, 'Kebaya', 1, 250000, ''),
(3, 6, 21, 'Dress', 1, 1320000, ''),
(4, 6, 25, 'Blouse', 1, 98000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN 
	UPDATE tb_barang SET stok = stok - NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
