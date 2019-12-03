-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 06:08 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelkuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty_paket` int(5) NOT NULL,
  `total_harga_paket` int(11) NOT NULL,
  `waktu_brngkt` time NOT NULL,
  `waktu_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `telp_customer` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jk_customer` enum('laki-laki','perempuan') NOT NULL,
  `foto_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `deskripsi_destinasi` text NOT NULL,
  `alamat_destinasi` varchar(255) NOT NULL,
  `biaya_destinasi` int(11) NOT NULL,
  `durasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto_destinasi`
--

CREATE TABLE `foto_destinasi` (
  `id_destinasi` int(11) NOT NULL,
  `foto_destinasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto_hotel`
--

CREATE TABLE `foto_hotel` (
  `id_hotel` int(11) NOT NULL,
  `foto_fotel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `id_ph` int(11) NOT NULL,
  `nama_hotel` varchar(255) NOT NULL,
  `deskripsi_hotel` text NOT NULL,
  `lokasi_hotel` varchar(255) NOT NULL,
  `biaya_hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_paket` varchar(255) NOT NULL,
  `biaya_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket_destinasi`
--

CREATE TABLE `paket_destinasi` (
  `id_paket` int(11) NOT NULL,
  `id_destinasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket_hotel`
--

CREATE TABLE `paket_hotel` (
  `id_paket` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `qty_kamar` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner_hotel`
--

CREATE TABLE `partner_hotel` (
  `id_ph` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_ph` varchar(255) NOT NULL,
  `telp_ph` varchar(13) NOT NULL,
  `foto_ktp_ph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(10) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tingkatan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`),
  ADD UNIQUE KEY `id_customer` (`id_customer`),
  ADD UNIQUE KEY `id_paket` (`id_paket`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `foto_destinasi`
--
ALTER TABLE `foto_destinasi`
  ADD KEY `id_destinasi` (`id_destinasi`);

--
-- Indexes for table `foto_hotel`
--
ALTER TABLE `foto_hotel`
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `id_partner_hotel` (`id_ph`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `paket_destinasi`
--
ALTER TABLE `paket_destinasi`
  ADD UNIQUE KEY `id_paket` (`id_paket`),
  ADD UNIQUE KEY `id_destinasi` (`id_destinasi`);

--
-- Indexes for table `paket_hotel`
--
ALTER TABLE `paket_hotel`
  ADD UNIQUE KEY `id_hotel` (`id_hotel`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `partner_hotel`
--
ALTER TABLE `partner_hotel`
  ADD PRIMARY KEY (`id_ph`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD CONSTRAINT `destinasi_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`);

--
-- Constraints for table `foto_destinasi`
--
ALTER TABLE `foto_destinasi`
  ADD CONSTRAINT `foto_destinasi_ibfk_1` FOREIGN KEY (`id_destinasi`) REFERENCES `destinasi` (`id_destinasi`);

--
-- Constraints for table `foto_hotel`
--
ALTER TABLE `foto_hotel`
  ADD CONSTRAINT `foto_hotel_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`id_ph`) REFERENCES `partner_hotel` (`id_ph`);

--
-- Constraints for table `paket_destinasi`
--
ALTER TABLE `paket_destinasi`
  ADD CONSTRAINT `paket_destinasi_ibfk_1` FOREIGN KEY (`id_destinasi`) REFERENCES `destinasi` (`id_destinasi`),
  ADD CONSTRAINT `paket_destinasi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`);

--
-- Constraints for table `paket_hotel`
--
ALTER TABLE `paket_hotel`
  ADD CONSTRAINT `paket_hotel_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `paket_hotel_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`);

--
-- Constraints for table `partner_hotel`
--
ALTER TABLE `partner_hotel`
  ADD CONSTRAINT `partner_hotel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
