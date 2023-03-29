-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 03:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewakuyyy`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `tanggal_main` date NOT NULL,
  `durasi` varchar(11) NOT NULL,
  `jam_mulai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_lapangan`, `user`, `tanggal_booking`, `tanggal_main`, `durasi`, `jam_mulai`) VALUES
(1, 1, 'thoriq', '2023-03-24', '2023-03-25', '2', '14:00'),
(2, 2, 'irullah', '2023-03-24', '2023-03-25', '1', '20:00'),
(3, 3, 'thoriq', '2023-03-24', '2023-03-26', '1', '22:00');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id_lapangan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `status` enum('tersedia','tidak tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `nama`, `username`, `alamat`, `gambar`, `harga`, `jenis`, `status`) VALUES
(1, 'Daffa A', 'daffakuy', 'Jl. K.H. Moh Toha No.12', 'lap1.jpg', '80000', 'sistetis', 'tersedia'),
(2, 'daffa B', 'daffakuy', 'Jl. K.H. Moh Toha No.12', 'lap2.jpg', '70000', 'biasa', 'tersedia'),
(3, 'Perumda Futsal', 'andiAndi', 'Jl. Soekarno Hatta No.42', 'lap1.jpg', '80000', 'biasa', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'pemilik'),
(2, 'penyewa');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `nama_controller` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `nama_controller`) VALUES
(1, 'beranda', 'beranda'),
(2, 'kelola lapangan', 'lapangan'),
(3, 'validasi_pemilik', 'validasi'),
(4, 'laporan', 'laporan'),
(5, 'profil', 'profil'),
(6, 'booking', 'booking'),
(7, 'validasi_penyewa', 'validasi');

-- --------------------------------------------------------

--
-- Table structure for table `menu_level`
--

CREATE TABLE `menu_level` (
  `id_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_level`
--

INSERT INTO `menu_level` (`id_level`, `id_menu`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 3),
(1, 5),
(2, 1),
(2, 6),
(2, 7),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `nama`, `password`, `jenis_kelamin`, `nomor_telepon`, `id_level`) VALUES
('andiAndi', 'andi@gmail.com', 'Andi', '123', 'pria', '029837364', 1),
('daffakuy', 'daffa@gmail.com', 'Muhammad Daffa', '123', 'pria', '081928283', 1),
('irullah', 'irul@gmail.com', 'irul', '123', 'pria', '082939442', 2),
('thoriq', 'thoriq@gmail.com', 'Thotriq', '123', 'pria', '083293333', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_lapangan` (`id_lapangan`),
  ADD KEY `username` (`user`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id_lapangan`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `menu_level`
--
ALTER TABLE `menu_level`
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_lapangan`) REFERENCES `lapangan` (`id_lapangan`);

--
-- Constraints for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD CONSTRAINT `lapangan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `menu_level`
--
ALTER TABLE `menu_level`
  ADD CONSTRAINT `menu_level_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `menu_level_ibfk_2` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
