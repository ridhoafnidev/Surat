-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 04:23 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL,
  `no_skeluar` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `sifat` varchar(100) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `lampiran1` varchar(255) DEFAULT NULL,
  `lampiran2` varchar(255) DEFAULT NULL,
  `lampiran3` varchar(255) DEFAULT NULL,
  `lampiran4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `no_skeluar`, `tgl_surat`, `sifat`, `lampiran`, `nama_instansi`, `lampiran1`, `lampiran2`, `lampiran3`, `lampiran4`) VALUES
(1, '001', '2019-12-03', 'sifat', '4 lembar', 'UIN', '', '', '', ''),
(2, '002', '2019-12-04', 'sifat', '3 Lembar', 'UIR', '', '', '', ''),
(3, '2020', '2019-12-25', 'Umum', '4', 'uin', 'DATA PENIALAIAN.docx', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `no_smasuk` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `sifat` varchar(100) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `lampiran4` varchar(255) DEFAULT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `lampiran1` varchar(255) DEFAULT NULL,
  `lampiran2` varchar(255) DEFAULT NULL,
  `lampiran3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `no_smasuk`, `tgl_surat`, `tgl_diterima`, `sifat`, `lampiran`, `lampiran4`, `nama_instansi`, `lampiran1`, `lampiran2`, `lampiran3`) VALUES
(1, '001', '2019-12-03', '2019-12-04', 'Sifat', '4 Lembar', '', 'UNRI', '', '', ''),
(2, '858034', '2019-12-24', '2019-12-31', 'fsfsf', 'kdhfa', NULL, 'afdfad', '', '', ''),
(3, '9090', '2019-12-25', '2019-12-31', 'Penting', '4', '', 'uin suska', 'Anotasi 2019-12-22 204615.png', '', ''),
(4, '90902', '2019-12-25', '2019-12-31', 'Penting', '4', '', 'uin', 'Anotasi 2019-12-22 204414.png', 'haji6.jpg', ''),
(5, '8080', '2019-12-25', '2019-12-29', 'Penting', '1', '', 'uin', 'haji4.jpg', NULL, ''),
(6, '2020', '2019-12-25', '2019-12-26', 'Penting', '1', '', 'uin suska', 'DATA PENIALAIAN.docx', NULL, ''),
(7, '7070', '2019-12-25', '2019-12-31', 'Umum', '4', 'WhatsApp Image 2019-12-08 at 20.33.04.jpeg', 'uin suska', 'DATA PENIALAIAN.docx', 'FORMAT PROKER UKM FASTE.docx', 'FORMAT PROKER UKM FASTE.docx');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `level` enum('admin','kepala instansi') NOT NULL,
  `authKey` varchar(50) NOT NULL,
  `accesToken` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_pengguna`, `level`, `authKey`, `accesToken`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '', ''),
(2, 'kepalainstansi', '123456', 'Aminnuddin', 'kepala instansi', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
