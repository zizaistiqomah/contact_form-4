-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Agu 2024 pada 05.59
-- Versi server: 5.7.25
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_form`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_form`
--

CREATE TABLE `contact_form` (
  `Nama` varchar(50) NOT NULL,
  `NIM` varchar(20) NOT NULL,
  `Gender` enum('m','f','o') NOT NULL,
  `Kelas` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Saran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`NIM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
