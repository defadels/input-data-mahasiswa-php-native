-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 03:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `kode_siswa` int(3) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `no_hpwali` varchar(15) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `tahun_lulus` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`kode_siswa`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `jenis_kelamin`, `no_hpwali`, `nama_wali`, `usia`, `tahun_lulus`) VALUES
(4, 'Muhammad Fadhil Adha', 'Medan', '2002-02-26', 'Jl. Karya Gg. Salak', 'Islam', 'laki-laki', '081376190300', 'Ida Kuswarini', '19', 2023),
(6, 'Nabilah Fikriyah', 'Medan', '2002-10-26', 'Asalan', 'Islam', 'perempuan', '082273318016', 'Ahmad Fadly', '19', 2023),
(7, 'Mestika Tiara Anggreini', 'Medan', '2002-06-18', 'Medan', 'Islam', 'perempuan', '081376490300', 'Rina Bali', '17', 2025),
(8, 'Zaid Abdurrahman', 'Medan', '0000-00-00', 'Setia Budi Ringroad', 'Islam', 'laki-laki', '0898775624', 'Rizal Phili', '19', 2023),
(9, 'Ridho Sadewo', 'Medan', '0000-00-00', 'Medan', 'Islam', 'laki-laki', '08527321332', 'Eko', '22', 2023),
(10, 'Erdiansyah', 'Medan', '0000-00-00', 'Medan', 'Islam', 'laki-laki', '081546298', 'Yuli', '17', 2026);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`kode_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
