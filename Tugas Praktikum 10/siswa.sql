-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 05:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `No` int(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `nisn` varchar(40) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tempatlahir` varchar(200) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `noakta` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `negara` varchar(200) NOT NULL,
  `Namanegara` varchar(200) NOT NULL,
  `kebutuhan` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `rt` varchar(30) NOT NULL,
  `rw` varchar(30) NOT NULL,
  `dusun` varchar(200) NOT NULL,
  `kelurahan` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `kodepos` varchar(30) NOT NULL,
  `lintang` varchar(100) NOT NULL,
  `bujur` varchar(100) NOT NULL,
  `tinggal` varchar(200) NOT NULL,
  `transpor` varchar(200) NOT NULL,
  `kks` varchar(200) NOT NULL,
  `anakke` varchar(30) NOT NULL,
  `penerimakps` varchar(200) NOT NULL,
  `nokps` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`No`, `nama`, `jenis`, `nisn`, `nik`, `tempatlahir`, `tanggal`, `noakta`, `agama`, `negara`, `Namanegara`, `kebutuhan`, `alamat`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kodepos`, `lintang`, `bujur`, `tinggal`, `transpor`, `kks`, `anakke`, `penerimakps`, `nokps`) VALUES
(223, 'Nizar Zulmi', 'Laki-Laki', '18082010013', '22223235567676', 'Surabaya', '19-08-1999', '1121212121', 'ISLAM', 'WNI', 'Indonesia', 'TIDAK', 'Ketapang Suko', '09', '03', 'Ketapang', 'Suko', 'Sukodono', '61258', '6Ls', '7BU', 'Rumah Sendiri', 'Sepeda Motor', '123546677565', '1', 'TIDAK', ''),
(225, 'Dini Adila', 'Perempuan', '1808201001344', '22223235567676', 'Sidoarjo', '24-03-2000', '333333333343455', 'ISLAM', 'WNI', 'Indonesia', 'TIDAK', 'Geluran PLN', '04', '07', 'Sepanjang', 'Geluran', 'Geluran', '61258', '6Ls', '7BU', 'Rumah Sendiri', 'Sepeda Motor', '123546677565', '1', 'TIDAK', ''),
(226, 'James Cameron', 'Laki-Laki', '180820100134455', '22255676762', 'Sidoarjo', '2-05-2000', '33367333343455', 'Katolik', 'Asing', 'Australia', 'TIDAK', 'Candi', '08', '12', 'Candi', 'Candi', 'Sidoarjo', '61258', '4Ls', '9Bu', 'Apartement', 'Mobil', '', '2', 'TIDAK', ' Hanya boleh menggunakan angka'),
(234, 'Nizar Zulmi', 'Laki-Laki', '180820100134455', '22223235567676', 'Surabaya', '19-08-1999', '333333333343455', 'ISLAM', 'WNI', 'Indonesia', 'TIDAK', 'Ketapang Suko', '04', '03', 'Ketapang', 'Suko', 'Sukodono', '61258', '6Ls', '9Bu', 'Rumah Sendiri', 'Sepeda Motor', '123546677565', '1', 'TIDAK', ''),
(235, 'Nizar Zulmi', 'Laki-Laki', '180820100134455', '22223235567676', 'Surabaya', '19-08-1999', '333333333343455', 'ISLAM', 'WNI', 'Indonesia', 'TIDAK', 'Ketapang Suko', '04', '03', 'Ketapang', 'Suko', 'Sukodono', '61258', '6Ls', '9Bu', '', '', '123546677565', '', 'TIDAK', ''),
(236, 'Nizar Zulmi', '', '180820100134455', '22223235567676', 'Surabaya', '19-08-1999', '333333333343455', 'ISLAM', '', 'Indonesia', '', 'Ketapang Suko', '04', '03', 'Ketapang', 'Suko', 'Sukodono', '61258', '6Ls', '9Bu', 'Rumah Sendiri', 'Sepeda Motor', '123546677565', '1', 'TIDAK', ' Hanya boleh menggunakan angka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
