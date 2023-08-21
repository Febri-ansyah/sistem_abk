-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 08:47 PM
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
-- Stand-in structure for view `daftar_riwayat_konsultasi`
-- (See below for the actual view)
--
CREATE TABLE `daftar_riwayat_konsultasi` (
`id_konsultasi` varchar(11)
,`nama_user` varchar(100)
,`email_user` varchar(255)
,`kode_jenis` varchar(5)
,`nama_jenis` varchar(100)
,`solusi_jenis` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_abk`
--

CREATE TABLE `jenis_abk` (
  `kode_jenis` varchar(5) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  `solusi_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_abk`
--

INSERT INTO `jenis_abk` (`kode_jenis`, `nama_jenis`, `solusi_jenis`) VALUES
('ABK1', 'Autis', 'Terapi perilaku kognitif, pelatihan keterampilan sosial, melakukan pembelajaran dengan konsep permainan ringan, melatih tingkat konsentrasi anak.'),
('ABK2', 'Tuna Grahita', 'Dalam pembelajaran anak tuna grahita memerlukan metode khusus untuk mempelajari keterampilan membaca. Salah satunya dengan menggunakan metode kinesthetic tactile untuk pengenalan huruf dan kata melalui seluruh indera.'),
('ABK3', 'Tuna Rungu', 'Menggunakan alat bantu dengar untuk meningkatkan daya ketajaman pendengarannya, memerlukan latihan membaca bibir untuk pemahaman percakapan, latihan bicara artikulasi, latihan kosakata, diperlukannya pelatihan pendengeran yang intensif,'),
('ABK4', 'Tuna Netra (Hampir Buta)', 'Latihan orientasi dan mobilitas adalah jalan dengan pendamping awas, latihan jalan mandiri, latihan jalan dengan menggunakan tongkat atau sign guide. Metode pembelajaran menggunakan player digital ascesible system yang  digunakan untuk memperoleh informas'),
('ABK5', 'Tuna Daksa', 'Melakukan metode terapi fisik membantu dalam memposisikan tubuh dan pola-pola gerakan melakukan pembelajaran dalam pemahaman gerak, melakukan program pembinaan gerakan tubuh.'),
('ABK6', 'Tuna Netra (Buta Total)', 'Memerlukan sarana baca dengan huruf braille, radio dan pustaka kaset, pembelajaran pendidikan jasmani adaftif yang berkaitan dengan jenis kecacatan anak dan memodifikasi sarana dan prasarana olah raga meliputi ukuran lapangan serta alat yang digunakan dal');

-- --------------------------------------------------------

--
-- Table structure for table `karakter_abk`
--

CREATE TABLE `karakter_abk` (
  `id_karakter` int(11) NOT NULL,
  `gejala_karakter` varchar(5) NOT NULL,
  `karakteristik_karakter` varchar(255) NOT NULL,
  `kode_jenis` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karakter_abk`
--

INSERT INTO `karakter_abk` (`id_karakter`, `gejala_karakter`, `karakteristik_karakter`, `kode_jenis`) VALUES
(1, 'G1', 'Kurang bisa berpikir secara logis', ''),
(2, 'G2', 'Tingkat kecerdasan sekitar 50/55 – 70/75', ''),
(3, 'G3', 'Kurang memiliki kemampuan menganalisa', ''),
(4, 'G4', 'Sulit bersosialisasi dengan orang lain', ''),
(5, 'G5', 'Sulit diajak berkomunikasi dan berinteraksi.', ''),
(6, 'G6', 'Kurang dapat menghubungkan kejadian yang satu adegan dengan yang lain.', ''),
(7, 'G7', 'Tidak dapat membedakan sesuatu yang penting dan tidak penting. ', ''),
(8, 'G8', 'Memiliki pola kebiasaan yang berulang-ulang.', ''),
(9, 'G9', 'Memiliki imajinasi yang lemah.', ''),
(10, 'G10', 'Kurang dapat mengendalikan emosinya atau tempramen. ', ''),
(11, 'G11', 'Memiliki kepribadian yang kurang harmonis.', ''),
(12, 'G12', 'Memiliki daya konsentrasi yang kurang', ''),
(13, 'G13', 'Keterlambatan dalam perkembangan', ''),
(14, 'G14', 'Mengalami kehilangan pendengaran antara 27 - 40 DB.', ''),
(15, 'G15', 'Tidak dapat menangkap suatu percakapan yang lemah.', ''),
(16, 'G16', 'Sering terjadi kesalahpahaman terhadap lawan bicara.', ''),
(17, 'G17', 'Kesulitan membedakan suara.', ''),
(18, 'G18', 'Pergaulan terbatas hanya sebatas anak tuna rungu-wicara.', ''),
(19, 'G19', 'Tidak memiliki kesadaran bahwa benda-benda yang berada disekitarnya mengalami getaran suara.', ''),
(20, 'G20', 'Hanya dapat mendengar suara keras sekali pada jarak kira-kira 1 inci.', ''),
(21, 'G21', 'Kecacatan pada bagian tubuh tertentu.', ''),
(22, 'G22', 'Sulitnya dalam melakukan pekerjaan/bermain', ''),
(23, 'G23', 'Kesulitan dalam mencari atau menunjuk suatu benda.', ''),
(24, 'G24', 'Berjalan dengan cara menyeretkan atau menggeserkan kaki.', ''),
(25, 'G25', 'Lemahnya dalam berpikir.', ''),
(26, 'G26', 'Keterbelakangan mental.', ''),
(27, 'G27', 'Memiliki keseimbangan tubuh yang lemah.', ''),
(28, 'G28', 'Mengalami tramuna dalam tingkat tertentu.', ''),
(29, 'G29', 'Penglihatan tidak bermanfaat bagi orientasi mobilitas.', ''),
(30, 'G30', 'Curiga yang berlebihan terhadap orang lain karena disebabkan oleh penglihatan yang terganggu.', ''),
(31, 'G31', 'Tidak mengenal adanya rangsangan sinar.', ''),
(32, 'G32', 'Seluruhnya tergantung pada alat indera selain mata.', ''),
(33, 'G33', 'Kesulitan melakukan gerakan yang halus atau lembut.', ''),
(34, 'G34', 'Kerjasama antara mata dengan anggota badan yang lemah.', '');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi_abk`
--

CREATE TABLE `konsultasi_abk` (
  `id_konsultasi` varchar(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `ceklis_konsultasi` text NOT NULL,
  `kode_jenis` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konsultasi_abk`
--

INSERT INTO `konsultasi_abk` (`id_konsultasi`, `nama_user`, `ceklis_konsultasi`, `kode_jenis`) VALUES
('48d386ea96', 'user', 'G1=,G2=,G3=,G4=,G5=,G6=,G7=,G8=,G9=,G10=,G11=,G12=,G13=,G14=,G15=,G16=,G17=,G18=,G19=,G20=,G21=,G22=,G23=,G24=,G25=,G26=,G27=,G28=,G29=,G30=,G31=Y,G32=Y,G33=Y,G34=Y,', 'ABK6');

-- --------------------------------------------------------

--
-- Table structure for table `users_abk`
--

CREATE TABLE `users_abk` (
  `nama_user` varchar(100) NOT NULL,
  `password_user` text NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `level_user` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_abk`
--

INSERT INTO `users_abk` (`nama_user`, `password_user`, `email_user`, `level_user`) VALUES
('master', '$2y$10$1INtFouunbN2eJC4i/cT3eAB491/nYgL/kdkErVwpwklN.pJAheru', 'master.key@sys.co', 1),
('user', '$2y$10$2yPkNm.Fy7rySorsktxC9.UkfTQCUPtJEam8S9rVxW/CdZrljc/qO', 'user@sys.co', 2);

-- --------------------------------------------------------

--
-- Structure for view `daftar_riwayat_konsultasi`
--
DROP TABLE IF EXISTS `daftar_riwayat_konsultasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_riwayat_konsultasi`  AS SELECT `konsultasi_abk`.`id_konsultasi` AS `id_konsultasi`, `users_abk`.`nama_user` AS `nama_user`, `users_abk`.`email_user` AS `email_user`, `jenis_abk`.`kode_jenis` AS `kode_jenis`, `jenis_abk`.`nama_jenis` AS `nama_jenis`, `jenis_abk`.`solusi_jenis` AS `solusi_jenis` FROM ((`users_abk` join `konsultasi_abk` on(`users_abk`.`nama_user` = `konsultasi_abk`.`nama_user`)) join `jenis_abk` on(`konsultasi_abk`.`kode_jenis` = `jenis_abk`.`kode_jenis`))  ;

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
  ADD PRIMARY KEY (`id_karakter`);

--
-- Indexes for table `konsultasi_abk`
--
ALTER TABLE `konsultasi_abk`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `users_abk`
--
ALTER TABLE `users_abk`
  ADD PRIMARY KEY (`nama_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karakter_abk`
--
ALTER TABLE `karakter_abk`
  MODIFY `id_karakter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
