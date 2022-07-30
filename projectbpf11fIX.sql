-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 05:40 AM
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
-- Database: `projectbpf11`
--

-- --------------------------------------------------------

--
-- Table structure for table `alatberat`
--

CREATE TABLE `alatberat` (
  `id` int(11) NOT NULL,
  `merk` int(11) NOT NULL,
  `tipe` varchar(40) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `kondisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alatberat`
--

INSERT INTO `alatberat` (`id`, `merk`, `tipe`, `tahun`, `kondisi`) VALUES
(12, 6, 'KOM-14', '2011', 'DAPAT DIGUNAKAN'),
(13, 7, 'CAT-26', '2016', 'DALAM PERBAIKAN'),
(14, 9, 'HAL-23', '2011', 'RUSAK'),
(15, 6, 'KOM-19', '2011', 'DALAM PERBAIKAN');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `alamat`, `telepon`) VALUES
(6, 'Supryanto', 'Jl. Hangtuah no 108', '08227511932'),
(7, 'Andre', 'Jl. Teratai', '08221591255'),
(8, 'Hendro', 'Jl. Srikandi', '08123129411');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id`, `nama`) VALUES
(6, 'KOMATSU'),
(7, 'CATTERPILAR'),
(8, 'HITACHI'),
(9, 'HALLIBURTON');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `alatberat` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga` int(15) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `customer`, `alatberat`, `tgl_pinjam`, `tgl_kembali`, `harga`, `status`) VALUES
(5, 6, 13, '2022-07-22', '2022-07-23', 1000000, 'SUDAH LUNAS DAN MASIH DALAM PEMINJAMAN'),
(6, 8, 13, '2022-07-26', '2022-07-28', 230000, 'SUDAH LUNAS DAN BELUM DIKEMBALIKAN'),
(7, 6, 13, '2022-07-12', '2022-07-22', 1000000, 'SUDAH LUNAS DAN MASIH DALAM PEMINJAMAN');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`) VALUES
(5, 'Wilson', 'son@gmail.com', '123456', 'SuperAdmin'),
(6, 'Andi Supriyanto', 'supri@gmail.com', '123456', 'Admin'),
(8, 'Roy Citayem', 'roy@gmail.com', '123456', 'Admin'),
(9, 'Bonge Citayem', 'bonge@gmail.com', '123456', 'SuperAdmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alatberat`
--
ALTER TABLE `alatberat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alatberat_ibfk_1` (`merk`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_ibfk_1` (`customer`),
  ADD KEY `transaksi_ibfk_2` (`alatberat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alatberat`
--
ALTER TABLE `alatberat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alatberat`
--
ALTER TABLE `alatberat`
  ADD CONSTRAINT `alatberat_ibfk_1` FOREIGN KEY (`merk`) REFERENCES `merk` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`alatberat`) REFERENCES `alatberat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
