-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2020 pada 22.27
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

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
-- Struktur dari tabel `paket_destinasi`
--

CREATE TABLE `paket_destinasi` (
  `id_paket` int(11) NOT NULL,
  `id_destinasi` int(11) NOT NULL,
  `type_paket` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_destinasi`
--

INSERT INTO `paket_destinasi` (`id_paket`, `id_destinasi`, `type_paket`) VALUES
(2, 1, 1),
(8, 2, 1),
(16, 1, 1),
(16, 2, 1),
(17, 1, 1),
(17, 2, 1),
(18, 1, 1),
(18, 2, 1),
(24, 1, 1),
(24, 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
