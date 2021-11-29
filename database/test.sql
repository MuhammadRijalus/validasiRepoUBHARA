-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 06:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mhs`
--

CREATE TABLE `data_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama-panggilan` varchar(50) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `tmp-lahir` varchar(50) NOT NULL,
  `tgl-lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mhs`
--

INSERT INTO `data_mhs` (`id`, `nama`, `nama-panggilan`, `nim`, `tmp-lahir`, `tgl-lahir`) VALUES
(1, 'Muhammad Rijalus Sholihin', 'rijalus', '211080200132', 'Surabaya', '2000-08-30'),
(2, 'Bagus R.K.A', 'Bagas', '098746847920', 'Kediri', '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `user_mhs`
--

CREATE TABLE `user_mhs` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `passwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_mhs`
--

INSERT INTO `user_mhs` (`id`, `username`, `passwd`) VALUES
(1, 'rijalus', '123456'),
(2, 'bagas', '654321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_mhs`
--
ALTER TABLE `user_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mhs`
--
ALTER TABLE `data_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_mhs`
--
ALTER TABLE `user_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
