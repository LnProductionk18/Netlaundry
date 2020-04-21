-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 04:35 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id` varchar(50) NOT NULL,
  `nama_pel` varchar(50) NOT NULL,
  `notel_pel` varchar(15) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `des_baju` varchar(50) NOT NULL,
  `des_paket` varchar(50) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `tot_bayar` varchar(10) NOT NULL,
  `des_bayar` varchar(50) NOT NULL,
  `pengambilan` enum('Belum_diambil','Sudah_diambil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id`, `nama_pel`, `notel_pel`, `tgl_masuk`, `tgl_keluar`, `des_baju`, `des_paket`, `berat`, `tot_bayar`, `des_bayar`, `pengambilan`) VALUES
('p0002', 'Hidrolik', '0825268166584', '2019-08-19', '2019-08-21', 'Dalam Proses', 'Cuci Kering + Setrika', '2', '14000', 'Lunas', 'Belum_diambil'),
('pel001', 'Yoel Christian Dagun', '082255221626', '2019-08-20', '2019-08-23', 'Baru Masuk', 'Cuci Kering + Setrika', '7', '49000', 'Belum Bayar', 'Belum_diambil');

-- --------------------------------------------------------

--
-- Table structure for table `login_session`
--

CREATE TABLE `login_session` (
  `uid` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_session`
--

INSERT INTO `login_session` (`uid`, `name`, `username`, `password`, `level`) VALUES
(1, 'leoy nugad', 'lnpro', 'cf6d4989c3bfc68e04bce7858ff0182d', 'admin'),
(2, 'Yoel Christian Dagun', 'yoda', '81dc9bdb52d04dc20036dbd8313ed055', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` varchar(50) NOT NULL,
  `des_paket` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `des_paket`, `harga`) VALUES
('netln01', 'Cuci Kering', 'Rp. 5000/kg'),
('netln02', 'Cuci Kering + Setrika', 'Rp. 7000/kg'),
('netln03', 'Cuci Kering + Setrika (4 Jam selesai)', 'Rp. 10000/kg'),
('netln04', 'Karpet', 'Rp. 15000/mtr');

-- --------------------------------------------------------

--
-- Table structure for table `status_baju`
--

CREATE TABLE `status_baju` (
  `id_status_baju` varchar(50) NOT NULL,
  `des_baju` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_baju`
--

INSERT INTO `status_baju` (`id_status_baju`, `des_baju`) VALUES
('st001', 'Baru Masuk'),
('st002', 'Dalam Proses'),
('st003', 'Selesai (Dapat Diambil)');

-- --------------------------------------------------------

--
-- Table structure for table `status_bayar`
--

CREATE TABLE `status_bayar` (
  `id_status_bayar` varchar(20) NOT NULL,
  `des_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_bayar`
--

INSERT INTO `status_bayar` (`id_status_bayar`, `des_bayar`) VALUES
('byr01', 'Lunas'),
('byr02', 'Belum Bayar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_session`
--
ALTER TABLE `login_session`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `status_baju`
--
ALTER TABLE `status_baju`
  ADD PRIMARY KEY (`id_status_baju`);

--
-- Indexes for table `status_bayar`
--
ALTER TABLE `status_bayar`
  ADD PRIMARY KEY (`id_status_bayar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_session`
--
ALTER TABLE `login_session`
  MODIFY `uid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
