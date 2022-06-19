-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 12:33 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_absensi`
--

CREATE TABLE `data_absensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tanggalAbsensi` date NOT NULL,
  `waktu` time NOT NULL,
  `keterangan` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_absensi`
--

INSERT INTO `data_absensi` (`id`, `nama`, `tanggalAbsensi`, `waktu`, `keterangan`) VALUES
(53, 'Azka', '2022-06-18', '09:48:09', 'hadir'),
(54, 'Azka', '2022-06-17', '10:27:43', 'hadir'),
(55, 'Azka', '2022-06-16', '10:28:10', 'izin'),
(56, 'Azka', '2022-06-15', '10:28:35', 'izin'),
(57, 'Azka', '2022-06-19', '10:28:55', 'alpha'),
(58, 'Natalia', '2022-06-19', '13:27:55', 'hadir'),
(59, 'Andika', '2022-06-19', '13:27:56', 'hadir'),
(60, 'Anton', '2022-06-19', '13:27:59', 'hadir'),
(61, 'Azka Alhalifi', '2022-06-19', '13:37:58', 'hadir'),
(62, 'Alice', '2022-06-19', '13:51:11', 'hadir'),
(63, 'Angel', '2022-06-19', '13:51:12', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `jenisKelamin` varchar(1) NOT NULL,
  `jabatan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role`, `gambar`, `jenisKelamin`, `jabatan`) VALUES
(6, 'Nailul', 'ilul4530@gmail.com', '$2y$10$9kBIGdPYUfzeWi9PeeSJxurCWBkwJh26Wulcw4UQnYGw7cY5C2CY2', 'admin', 'default.png', 'L', 'Administartion'),
(8, 'Azka', 'azka@gmail.com', '$2y$10$EmgSvgg/4VXlWre0Dk7eqOXhn68KEiwqKeRsG1v3tJ/Qm2huObeYm', 'karyawan', 'face7.jpg', 'L', 'Operator'),
(9, 'Natalia', 'natalia@gmail.co', '$2y$10$69zsLmBByUOYLlme08XhH.mb7M5nGiP3hZ5RNykm6mbUhoUpp5rjy', 'karyawan', 'avatar-3.jpg', 'P', 'Teknisi'),
(10, 'Andika', 'andi@gmail.com', '$2y$10$E7p02wwaUXjKlZuumM4xLe1m88t45eIzFxabGC6NsstXx1jmLWTTC', 'karyawan', 'face13.jpg', 'L', 'Security'),
(11, 'Anton', 'antonnnnn028@gmail.com', '$2y$10$HEJsESXKnx26TP1PL5TleuDgmLMgbdoflQKZI0p1fvZiWA8l4a6C6', 'karyawan', 'unsplash-1.jpg', 'L', 'IT Support'),
(13, 'Alice', 'alice@gmail.co', '$2y$10$ZEcqzLlt//kLv2lmoXZhde.iYp0Ci1jdaPZFqmq49V0rGW7u4iTle', 'karyawan', 'avatar-5.jpg', 'P', 'Manager'),
(14, 'Angel', 'angel@gmail.com', '$2y$10$HMySTB/HnopNwvjJQNuLvO.eFrK2GSCvPqXUrOlgRCQ4L68Y0vhAW', 'karyawan', 'avatar-4.jpg', 'P', 'Operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_absensi`
--
ALTER TABLE `data_absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_absensi`
--
ALTER TABLE `data_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
