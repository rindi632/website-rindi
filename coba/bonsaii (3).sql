-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2024 pada 21.35
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonsaii`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `image`, `quantity`, `total`) VALUES
(18, 3, 'bonsai sakura', '1000000', 'BA.jpg', 1, 0),
(19, 3, 'bonsai rambat', '900000', 'bongsaii.jpg', 1, 0),
(21, 5, 'bonsai sakura', '1000000', 'BA.jpg', 1, 0),
(22, 6, 'bonsai anggrek', '1890000', 'oo.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_person`
--

CREATE TABLE `contact_person` (
  `id` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `telpon` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact_person`
--

INSERT INTO `contact_person` (`id`, `nama`, `email`, `telpon`, `alamat`) VALUES
(2, 'tajja', 'taja@gmail.com', 2147483647, 'padang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` int(10) NOT NULL,
  `id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `email_pelanggan` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `tanggal_pemesanan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_pelanggan`, `alamat_pelanggan`, `email_pelanggan`, `metode_pembayaran`, `total_harga`, `tanggal_pemesanan`) VALUES
(3, 'Nama Pelanggan', 'Alamat Pelanggan', 'email@pelanggan.com', 'Metode Pembayaran', 3400000.00, '2024-05-20 14:57:29'),
(4, 'Nama Pelanggan', 'Alamat Pelanggan', 'email@pelanggan.com', 'Metode Pembayaran', 2900000.00, '2024-05-20 15:09:22'),
(5, 'Nama Pelanggan', 'Alamat Pelanggan', 'email@pelanggan.com', 'Metode Pembayaran', 2900000.00, '2024-05-20 15:11:00'),
(6, 'Nama Pelanggan', 'Alamat Pelanggan', 'email@pelanggan.com', 'Metode Pembayaran', 2900000.00, '2024-05-20 15:43:57'),
(7, 'Nama Pelanggan', 'Alamat Pelanggan', 'email@pelanggan.com', 'Metode Pembayaran', 4790000.00, '2024-07-08 16:22:40'),
(8, 'Nama Pelanggan', 'Alamat Pelanggan', 'email@pelanggan.com', 'Metode Pembayaran', 4790000.00, '2024-07-08 17:34:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'bonsai sakura', 'tanaman umur enam bulan', 1000000, 'BA.jpg'),
(2, 'bonsai cemara', 'produk baru', 1125000, 'bongsaiii.jpg'),
(3, 'bongsai pinus', 'tanaman berumur 8 bulan', 780000, 'BB.jpg'),
(4, 'bonsai rambat', 'produk rekomendasi', 900000, 'bongsaii.jpg'),
(5, 'bonsai pinus', 'tanaman berumur 3 bulan', 1500000, 'BV.jpg'),
(6, 'bonsai rotan', 'produk rekomendasi', 999000, 'BS.jpg'),
(7, 'bonsai sakura', 'tanpa keterangan', 1999999, 'kk.jpg'),
(8, 'bonsai anggrek', 'bonsai yg sudah memiliki bunga', 1890000, 'oo.jpg'),
(9, 'bonsai random', 'produk yg dipilih ketik pada pesan', 999000, 'yy.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `stok_awal` int(11) NOT NULL,
  `stok_tersedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok_awal`, `stok_tersedia`) VALUES
(1, 'Produk bonsai anggrek', 100, 80),
(2, 'Produk Bonsai pinus', 200, 150),
(3, 'Produk bonsai sakura', 300, 250);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_produk`, `harga`, `jumlah`, `tanggal`) VALUES
(1, 1, 2000000, 20, '2024-06-01'),
(2, 2, 1999999, 30, '2024-06-01'),
(3, 1, 800000, 15, '2024-06-02'),
(4, 3, 999999, 25, '2024-06-02'),
(5, 2, 799000, 20, '2024-06-03'),
(6, 3, 1000000, 30, '2024-06-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'user', 'bonsai@gmail.com', '$2y$10$gDndfLIOURqr1jqkrZcYsun5Cut8JHy0284R/l8Sf5iqTmubf6WT2'),
(4, 'haloo', 'haloo@gmail.com', '$2y$10$q62aJsoh3fUrzsvLRrG0uuZR2ccXKxfdjqU/6CViuXLsaQML.ZLqq'),
(5, 'root', 'taja@gmail.com', '$2y$10$iAHNXwWd9dHS.B0mZbITvu/iyrIvTOjloXWTD1xEMkXWpItQijhOm'),
(6, 'oja', 'oja@gmail.com', '$2y$10$4tczGDNx2sU2YDa./IRfcO2ErMWCZ5eOnJdFDrC/JFQSLYxFDqbAe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact_person`
--
ALTER TABLE `contact_person`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `contact_person`
--
ALTER TABLE `contact_person`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
