-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 05:00 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan_11`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` INT(11) NOT NULL,
  `judul_buku` VARCHAR(50) NOT NULL,
  `nama_penerbit` VARCHAR(20) NOT NULL,
  `ISBN` VARCHAR(30) NOT NULL,
  `Tahun` YEAR(4) NOT NULL,
  `kategori` VARCHAR(20) NOT NULL,
  `stock` INT(11) NOT NULL,
  `status_buku` TINYINT(1) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `nama_penerbit`, `ISBN`, `Tahun`, `kategori`, `stock`, `status_buku`) VALUES
(1, 'The hunger Game', 'Suzanne Collins', '9780439023528', 2008, 'Novel', 5, 0),
(2, 'Harry Potter and the Goblet Of Fire', 'JK Rownling', '074754624X', 2000, 'Novel', 2, 0),
(3, 'Narnia: The Lion, The Witch and The Wardrobe', 'C.S. Lewis', '7207376', 1950, 'Fantasy', 1, 0),
(4, 'The Lightning Thief', 'Rick Riordan', ' 0786856297', 2005, 'Novel', 1, 0),
(5, 'Harry Potter and the Deathly Hallows', 'JK Rownling', '0545010225', 2007, 'Novel', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` INT(11) NOT NULL,
  `username` VARCHAR(12) NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  `level_user` VARCHAR(10) NOT NULL,
  `name` VARCHAR(20) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level_user`, `name`) VALUES
(1, 'user11', 'user123', 'user', 'user'),
(2, 'admin', 'admin123', 'admin', 'admin'),
(3, 'oka', 'oka123', 'user', 'oka'),
(4, 'user2', 'user123', 'user', 'user2');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `no_buku` int(11) NOT NULL,
  `username_id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `no_buku`, `username_id`, `judul`, `penerbit`, `kategori`, `tahun`) VALUES
(2, 2, 3, 'Harry Potter and the Goblet Of Fire', 'JK Rownling', 'Novel', '2000'),
(3, 1, 3, 'The hunger Game', 'Suzanne Collins', 'Novel', '2008');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
