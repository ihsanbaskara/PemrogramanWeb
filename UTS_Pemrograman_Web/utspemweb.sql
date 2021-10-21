-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2021 at 08:21 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utspemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `halaman_about`
--

CREATE TABLE `halaman_about` (
  `url_gambar` text NOT NULL,
  `nama` text NOT NULL,
  `penjelasan` text NOT NULL,
  `email` text NOT NULL,
  `instagram` text NOT NULL,
  `github` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman_about`
--

INSERT INTO `halaman_about` (`url_gambar`, `nama`, `penjelasan`, `email`, `instagram`, `github`) VALUES
('./assets/images/ihsan.jpeg', 'Ihsan Baskara', 'Halo semua! Perkenalkan nama saya Muhammad Ihsan Baskara. Saat ini saya berusia 20 tahun. Saya sedang menjalani pendidikan di Universitas Pembangunan Jaya. Saya memiliki hobi bermain game dan otomotif.', 'ican2701@gmail.com', 'https://instagram.com/shanbskr', 'https://github.com/ihsanbaskara');

-- --------------------------------------------------------

--
-- Table structure for table `halaman_hobi`
--

CREATE TABLE `halaman_hobi` (
  `url_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman_hobi`
--

INSERT INTO `halaman_hobi` (`url_gambar`) VALUES
('./assets/images/motor_1.jpg'),
('./assets/images/motor_2.jpg'),
('./assets/images/game_1.jpg'),
('./assets/images/game_2.jpg'),
('./assets/images/motor_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `halaman_home`
--

CREATE TABLE `halaman_home` (
  `nama` text NOT NULL,
  `penjelasan` text NOT NULL,
  `url_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman_home`
--

INSERT INTO `halaman_home` (`nama`, `penjelasan`, `url_gambar`) VALUES
('Ihsan Baskara', 'Ini merupakan sebuah website portofolio saya. Selamat datang!', './assets/images/ihsan.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `halaman_kontak`
--

CREATE TABLE `halaman_kontak` (
  `judul` text NOT NULL,
  `konten` text NOT NULL,
  `github` text NOT NULL,
  `instagram` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman_kontak`
--

INSERT INTO `halaman_kontak` (`judul`, `konten`, `github`, `instagram`, `email`) VALUES
('Hubungi Saya', 'Untuk kerjasama / partnership atau hal lain, bisa menghubungi saya melalui beberapa sosial media berikut.', 'fab fa-github', 'fab fa-instagram', 'fas fa-envelope-square');

-- --------------------------------------------------------

--
-- Table structure for table `halaman_pesan`
--

CREATE TABLE `halaman_pesan` (
  `nama` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman_pesan`
--

INSERT INTO `halaman_pesan` (`nama`, `pesan`) VALUES
('ihsan', 'dawdawdas'),
('dwadwa', 'dwada dwadawd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
