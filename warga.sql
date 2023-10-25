-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 02:27 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warga`
--

-- --------------------------------------------------------

--
-- Table structure for table `blok_kavling`
--

CREATE TABLE `blok_kavling` (
  `kd_blok` int(3) NOT NULL,
  `nama_blok` varchar(10) NOT NULL,
  `no_blok` varchar(3) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blok_kavling`
--

INSERT INTO `blok_kavling` (`kd_blok`, `nama_blok`, `no_blok`, `lokasi`) VALUES
(12, 'ma', '123', 'bandung'),
(23, 'ma', '23', 'jakarta'),
(43, 'anggrek', '3', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `kd_penduduk` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status1` enum('menikah','belum menikah','janda','duda') NOT NULL,
  `status2` enum('laki-laki','perempuan') NOT NULL,
  `status3` enum('kepala keluarga','istri','anak','orangtua','saudara') NOT NULL,
  `kd_blok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`kd_penduduk`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `status1`, `status2`, `status3`, `kd_blok`) VALUES
(13, '12', 'lina', 'bogor', '2023-10-26', 'menikah', 'perempuan', 'istri', 124),
(12, '12', 'audi', 'bogor', '2023-10-21', 'belum menikah', 'perempuan', 'saudara', 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
