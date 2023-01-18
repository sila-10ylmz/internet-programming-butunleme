-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 02:23 PM
-- Server version: 5.7.30
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okculuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `geribildirim`
--

CREATE TABLE `geribildirim` (
  `id` int(11) NOT NULL,
  `isim` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesaj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `geribildirim`
--

INSERT INTO `geribildirim` (`id`, `isim`, `email`, `mesaj`) VALUES
(1, 'elif', 'elif@gmail.com', 'en sevdigim site'),
(2, 'sila', 'sila@gmail.com', 'bu bir mesajtir'),
(4, 'ismail', 'ismail@gmail.com', 'mesaj'),
(5, 'Elaman', 'Elaman@gmail.com', 'benim mesajim'),
(6, 'baris', 'baris@gmail.com', 'bu siteye begendim');

-- --------------------------------------------------------

--
-- Table structure for table `haber`
--

CREATE TABLE `haber` (
  `h_id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `haber`
--

INSERT INTO `haber` (`h_id`, `baslik`, `haber`, `foto`) VALUES
(2, 'en ', '                                                                                                                                                                                                                                                            ', '../media/1673970292annie-spratt-t3IYuQZRDNE-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ka_id` int(11) NOT NULL,
  `isim` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ka_id`, `isim`) VALUES
(3, 'haber'),
(5, 'Magazin');

-- --------------------------------------------------------

--
-- Table structure for table `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `k_id` int(11) NOT NULL,
  `isim` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kullanicilar`
--

INSERT INTO `kullanicilar` (`k_id`, `isim`, `email`, `sifre`) VALUES
(9, 'sila', 'sila@gmail.com', '7ef560008b7acc0fcc2b070fd1500ac8'),
(10, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500'),
(16, 'baris', 'baris@gmail.com', 'b8366b220de80f791e195c0388291471');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `geribildirim`
--
ALTER TABLE `geribildirim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haber`
--
ALTER TABLE `haber`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ka_id`);

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`k_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geribildirim`
--
ALTER TABLE `geribildirim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `haber`
--
ALTER TABLE `haber`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `ka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
