-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 06:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldokter`
--

CREATE TABLE `tbldokter` (
  `iddokter` int(11) NOT NULL,
  `namadokter` varchar(50) NOT NULL,
  `namapoli` varchar(50) NOT NULL,
  `idpoli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblpassien`
--

CREATE TABLE `tblpassien` (
  `id` int(11) NOT NULL,
  `namapassien` varchar(50) NOT NULL,
  `namapoli` varchar(50) NOT NULL,
  `idpoli` int(11) NOT NULL,
  `namadokter` varchar(50) NOT NULL,
  `iddokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpassien`
--

INSERT INTO `tblpassien` (`id`, `namapassien`, `namapoli`, `idpoli`, `namadokter`, `iddokter`) VALUES
(157, 'Bahri', 'Anak', 21, 'Lukman', 12),
(159, 'Supri', 'Syaraf', 22, 'Jerry', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldokter`
--
ALTER TABLE `tbldokter`
  ADD KEY `idpoli` (`idpoli`);

--
-- Indexes for table `tblpassien`
--
ALTER TABLE `tblpassien`
  ADD PRIMARY KEY (`idpoli`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbldokter`
--
ALTER TABLE `tbldokter`
  ADD CONSTRAINT `tbldokter_ibfk_1` FOREIGN KEY (`idpoli`) REFERENCES `tblpassien` (`idpoli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
