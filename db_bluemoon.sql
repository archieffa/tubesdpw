-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 02:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bluemoon`
--

-- --------------------------------------------------------

--
-- Table structure for table `jeniskamar`
--

CREATE TABLE `jeniskamar` (
  `id_jeniskamar` int(11) NOT NULL,
  `jenis_kamar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `jenis_pembayaran` varchar(15) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `jenis_pembayaran`) VALUES
(1, 'E-Money'),
(2, 'Transfer Bank');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan_bayar`
--

CREATE TABLE `pilihan_bayar` (
  `id_pilihan_bayar` int(11) NOT NULL,
  `id_pembayaran` int(11) DEFAULT NULL,
  `nama_pilihanbayar` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pilihan_bayar`
--

INSERT INTO `pilihan_bayar` (`id_pilihan_bayar`, `id_pembayaran`, `nama_pilihanbayar`) VALUES
(1, 1, 'LinkAja'),
(2, 1, 'OVO'),
(3, 1, 'DANA'),
(4, 1, 'ShopeePay'),
(5, 2, 'BCA'),
(6, 2, 'BRI'),
(7, 2, 'BNI'),
(8, 2, 'MANDIRI'),
(9, 2, 'BSI');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_booking`
--

CREATE TABLE `t_booking` (
  `id_booking` int(11) NOT NULL,
  `name_cust_booking` varchar(100) DEFAULT NULL,
  `check_in_booking` date DEFAULT NULL,
  `check_out_booking` date DEFAULT NULL,
  `guests_booking` varchar(100) DEFAULT NULL,
  `room_booking` varchar(100) DEFAULT '',
  `pilihan_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_booking`
--

INSERT INTO `t_booking` (`id_booking`, `name_cust_booking`, `check_in_booking`, `check_out_booking`, `guests_booking`, `room_booking`, `pilihan_bayar`) VALUES
(1, 'cek', '2023-05-31', '2023-06-06', NULL, 'Premium Room', 'LinkAja');

-- --------------------------------------------------------

--
-- Table structure for table `t_contact`
--

CREATE TABLE `t_contact` (
  `id_contact` int(11) NOT NULL,
  `nama_contact` varchar(50) DEFAULT NULL,
  `email_contact` varchar(50) DEFAULT NULL,
  `pesan_contact` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_contact`
--

INSERT INTO `t_contact` (`id_contact`, `nama_contact`, `email_contact`, `pesan_contact`) VALUES
(1, 'yaya', 'yaya@gmail.com', 'kamarnya masih agak kotor');

-- --------------------------------------------------------

--
-- Table structure for table `t_payment`
--

CREATE TABLE `t_payment` (
  `id_payment` int(11) NOT NULL,
  `total_payment` varchar(100) DEFAULT NULL,
  `payment` varchar(100) DEFAULT NULL,
  `id_booking` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_role`
--

CREATE TABLE `t_role` (
  `id_role` int(11) NOT NULL,
  `user_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_role`
--

INSERT INTO `t_role` (`id_role`, `user_role`) VALUES
(1, 'Admin'),
(2, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `t_room`
--

CREATE TABLE `t_room` (
  `id_room` int(11) NOT NULL,
  `type_room` varchar(100) DEFAULT NULL,
  `price_room` varchar(100) DEFAULT NULL,
  `size_room` varchar(100) DEFAULT NULL,
  `capacity_room` varchar(100) DEFAULT NULL,
  `bed_room` varchar(100) DEFAULT NULL,
  `services_room` varchar(100) DEFAULT NULL,
  `image_room` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_room`
--

INSERT INTO `t_room` (`id_room`, `type_room`, `price_room`, `size_room`, `capacity_room`, `bed_room`, `services_room`, `image_room`) VALUES
(5, 'Suite Room', 'Rp 1.500.000', '110.0 m2', '8 Dewasa', '1 King Bed, 1 Queen Bed, 2 Ranjang Bertingkat', 'AC, Televisi, Sofa, Lemari, Dapur, Meja dan Kursi Makan, Kamar Mandi dengan Bathub, Balkon', ''),
(7, 'Premium Room', 'Rp 900.000', '55.0 m2', '4 Orang', '2 Double Bed', 'AC, Televisi, Sofa, Lemari, Dapur, Meja dan Kursi Makan, Kamar Mandi, Balkon', 'gallery-1.jpg'),
(8, 'Deluxe Room', 'Rp 900.000', '55.0 m2', '4 Orang', '2 Double Bed', 'AC, Televisi, Sofa, Lemari, Dapur, Meja dan Kursi Makan, Kamar Mandi, Balkon', 'gallery-4.jpg'),
(9, 'Double Room', 'Rp 1.000.000', '55.0 m2', '3 orang', '1 Queen Bed, 1 Single Bed', 'AC, Televisi, Sofa, Lemari, Dapur, Meja dan Kursi Makan, Kamar Mandi dengan Bathub, Balkon', 'room-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama_lengkap`, `email`, `tanggal_lahir`, `jenis_kelamin`, `password`, `id_role`) VALUES
(3, 'Dokyeom', 'dokyeom@gmail.com', '1997-02-18', '1', '$2y$10$L3B1./jpF5lKsQXkiqPRDuC3SAXP7DTkgfm9PZDCkha0a3QZaEr/q', 2),
(4, 'Syifa Azzahra', 'syifa@gmail.com', '2003-12-26', '2', '$2y$10$jsmETxTgAVLjXOOEg60U3O5LntbEM7JIw2zUed6kjr60Ym1NWM/AC', 2),
(5, 'Marcello Este Camarro', 'marcello@gmail.com', '2001-01-01', '1', '$2y$10$uTml3z8VDPcfhq6sJsQq7uv8ps8IRFuple5f42B4gpRJ9jNy0KA36', 2),
(6, 'admin1', 'admin1@gmail.com', '2000-12-12', '1', '$2y$10$gNqV980Gj4nzFDzH81uhVeEMgOCAU6Hz4LW6wbCnG2Cj//YgC175u', 1),
(7, 'admin2', 'admin2@gmail.com', '2000-12-12', '2', '$2y$10$LRl2/bhrrhrIeaHjKdo4dO6RDkPeuRsRLgG9LCNnxAm/dPzaUhmjO', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeniskamar`
--
ALTER TABLE `jeniskamar`
  ADD PRIMARY KEY (`id_jeniskamar`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `t_booking`
--
ALTER TABLE `t_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `t_contact`
--
ALTER TABLE `t_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `t_payment`
--
ALTER TABLE `t_payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `t_role`
--
ALTER TABLE `t_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `t_room`
--
ALTER TABLE `t_room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jeniskamar`
--
ALTER TABLE `jeniskamar`
  MODIFY `id_jeniskamar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_booking`
--
ALTER TABLE `t_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_contact`
--
ALTER TABLE `t_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_payment`
--
ALTER TABLE `t_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_role`
--
ALTER TABLE `t_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_room`
--
ALTER TABLE `t_room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
