-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 01:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiscica`
--

-- --------------------------------------------------------

--
-- Table structure for table `feladvanyok`
--

CREATE TABLE `feladvanyok` (
  `id` int(11) NOT NULL,
  `kep1` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `kep2` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `kep3` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `kep4` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `kep5` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `megoldas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `feladvanyok`
--

INSERT INTO `feladvanyok` (`id`, `kep1`, `kep2`, `kep3`, `kep4`, `kep5`, `megoldas`) VALUES
(1, 'cicakepek/cica1.jpg', 'cicakepek/cica2.jpg', 'cicakepek/rajz1.jpg', 'cicakepek/tmacs1.jpg', 'cicakepek/tmacs2.jpg', 3),
(2, 'cicakepek/cica3.jpg', 'cicakepek/rajz2.jpg', 'cicakepek/cica4.jpg', 'cicakepek/tmacs3.jpg', 'cicakepek/tmacs4.jpg', 2),
(3, 'cicakepek/cica5.jpg', 'cicakepek/cica6.jpg', 'cicakepek/tmacs6.jpg', 'cicakepek/tmacs5.jpg', 'cicakepek/rajz3.jpg', 5),
(4, 'cicakepek/rajz4.jpg', 'cicakepek/cica7.jpg', 'cicakepek/tmacs7.jpg', 'cicakepek/tmacs8.jpg', 'cicakepek/tmacs9.jpg', 1),
(5, 'cicakepek/rajz5.jpg', 'cicakepek/rajz6.jpg', 'cicakepek/rajz7.jpg', 'cicakepek/tmacs10.jpg', 'cicakepek/rajz8.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `problema`
--

CREATE TABLE `problema` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `problema_tipus` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `bovebb` varchar(6000) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_hungarian_ci NOT NULL,
  `auth` varchar(16) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `auth`) VALUES
(23, 'cica', 'b9abdd7e4f97f9cd3c43c72f0d45e10e', 'cica@cica.cica', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feladvanyok`
--
ALTER TABLE `feladvanyok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problema`
--
ALTER TABLE `problema`
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
-- AUTO_INCREMENT for table `feladvanyok`
--
ALTER TABLE `feladvanyok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `problema`
--
ALTER TABLE `problema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
