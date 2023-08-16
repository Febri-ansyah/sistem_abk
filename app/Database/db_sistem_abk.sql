-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 10:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistem_abk`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_abk`
--

CREATE TABLE `jenis_abk` (
  `kode_jenis` varchar(5) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_abk`
--

INSERT INTO `jenis_abk` (`kode_jenis`, `nama_jenis`) VALUES
('ABK1', 'Autis'),
('ABK2', 'Tuna Grahita'),
('ABK3', 'Tuna Rungu'),
('ABK4', 'Tuna Netra (Hampir Buta)'),
('ABK5', 'Tuna Daksa'),
('ABK6', 'Tuna Netra (Buta Total)');

-- --------------------------------------------------------

--
-- Table structure for table `karakter_abk`
--

CREATE TABLE `karakter_abk` (
  `gejala_karakter` varchar(5) NOT NULL,
  `karakteristik_karakter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karakter_abk`
--

INSERT INTO `karakter_abk` (`gejala_karakter`, `karakteristik_karakter`) VALUES
('G1', 'Kurang bisa berpikir secara logis'),
('G2', 'Tingkat kecerdasan sekitar 50/55 – 70/75'),
('G3', 'Kurang memiliki kemampuan menganalisa');

-- --------------------------------------------------------

--
-- Table structure for table `users_abk`
--

CREATE TABLE `users_abk` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `password_user` text NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `level_user` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_abk`
--

INSERT INTO `users_abk` (`id_user`, `nama_user`, `password_user`, `email_user`, `level_user`) VALUES
(4, 'admin', '$2y$10$PV.LlCuhIdOVXkELuyUON.sSWc7TJhUX4pgweWZkDFAA56CSruyyK', 'admin@sys.co', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_abk`
--
ALTER TABLE `jenis_abk`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `karakter_abk`
--
ALTER TABLE `karakter_abk`
  ADD PRIMARY KEY (`gejala_karakter`);

--
-- Indexes for table `users_abk`
--
ALTER TABLE `users_abk`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_abk`
--
ALTER TABLE `users_abk`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
