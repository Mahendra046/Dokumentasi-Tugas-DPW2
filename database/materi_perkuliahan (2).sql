-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 06:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `materi_perkuliahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `artikel` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `berat` decimal(11,5) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_user`, `nama`, `foto`, `harga`, `berat`, `stok`, `deskripsi`, `created_at`, `updated_at`) VALUES
(48, 2, 'ps1', 'app/image/produk/48-1662822239-WR.jpg', 5000000, '0.25000', 12, 'barang rare', '2022-09-10 08:03:59', '2022-09-10 08:03:59'),
(49, 2, 'ps3', 'app/image/produk/49-1662822321-65.png', 1500000, '2.00000', 120, 'belii satt', '2022-09-10 08:05:21', '2022-09-10 08:05:21'),
(50, 2, 'ps4 pro', 'app/image/produk/50-1662822405-DX.png', 3899999, '2.00000', 120, 'belii bang', '2022-09-10 08:06:45', '2022-09-10 08:06:46'),
(51, 2, 'ps2', 'app/image/produk/51-1662822536-3e.png', 500000, '1.50000', 100, 'hati-hati barang langka', '2022-09-10 08:08:56', '2022-09-10 08:08:56'),
(52, 2, 'ps5', 'app/image/produk/52-1662822780-F9.png', 7300000, '2.30000', 120, 'anjay MBR', '2022-09-10 08:13:00', '2022-09-10 08:13:00'),
(53, 2, 'logo ig', 'app/image/produk/53-1662825160-Px.png', 0, '0.00000', 1, 'random', '2022-09-10 08:52:40', '2022-09-10 08:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `password`, `foto`, `jenis_kelamin`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'arzn', 'arjun@gmail.com', 'arjunmahendra', '$2y$10$HzmM4WX02m4IDfP5WEVaeOp8ubNKKzrPA5SwtuTyy3dD1Z5mRWC0a', NULL, 1, NULL, '2022-08-29 23:46:55', '2022-09-09 05:43:29'),
(5, 'maxrenggar', 'arjunmahendra046@gmail.com', 'arjunrenggar', '$2y$10$7sZTRzDSkJ7DGR/nNpr1me5quikVlv5ac87OCyMoUDiLQpks0hxiq', NULL, 2, NULL, '2022-09-06 07:33:02', '2022-09-09 05:43:41'),
(10, 'arjunmax', 'arjunmax@gmail.com', 'arjunmax', '$2y$10$nIQXw0plnrialNyuEv/J7ePmi19RHa4xzvr41bHen/T.uX.mlZ.OW', NULL, 1, NULL, '2022-09-09 02:50:38', '2022-09-09 02:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_handphone` varchar(16) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `no_handphone`, `created_at`, `updated_at`) VALUES
(1, 2, '+62895372200063', '2022-09-03 20:11:47', '2022-09-03 20:11:47'),
(2, 8, '082157025971', '2022-09-06 07:41:11', '2022-09-06 07:41:11'),
(3, 5, '+62896532880912', '2022-09-06 08:02:15', '2022-09-06 08:02:15'),
(4, 8, '232343657809', '2022-09-06 08:16:01', '2022-09-06 08:16:01'),
(5, 9, '+62896532880912', '2022-09-07 10:30:48', '2022-09-07 10:30:48'),
(6, 10, '082157025971', '2022-09-09 02:50:38', '2022-09-09 02:50:38'),
(7, 11, '+62895372200063', '2022-09-09 03:04:30', '2022-09-09 03:04:30'),
(8, 12, '+62896532880912', '2022-09-09 03:05:12', '2022-09-09 03:05:12'),
(9, 13, '+62896532880912', '2022-09-09 03:05:44', '2022-09-09 03:05:44'),
(10, 14, '082157025971', '2022-09-09 03:12:39', '2022-09-09 03:12:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
