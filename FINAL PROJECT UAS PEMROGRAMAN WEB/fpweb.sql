-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 06:13 AM
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
-- Database: `fpweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelguru`
--

CREATE TABLE `tabelguru` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jeniskelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `nomortelp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelguru`
--

INSERT INTO `tabelguru` (`id`, `nama`, `alamat`, `jeniskelamin`, `agama`, `nomortelp`) VALUES
(2, 'Budi W', 'Ketapang', 'Laki-laki', 'Islam', '223213123'),
(9, 'Nizar Zulmi', 'Ketapang', 'Laki-laki', 'Islam', '12312'),
(10, 'Dini Adila', 'geluran', 'Perempuan', 'Islam', '08577657657657'),
(11, 'Sumirnah ', 'Geluran', 'Perempuan', 'Kristen', '543453534'),
(12, 'Lakunti', 'Sukodono', 'Laki-laki', 'Hindu', '342343265');

-- --------------------------------------------------------

--
-- Table structure for table `tabelkelas10`
--

CREATE TABLE `tabelkelas10` (
  `id` int(11) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pkn` varchar(200) NOT NULL,
  `bhsindo` varchar(200) NOT NULL,
  `matematika` varchar(200) NOT NULL,
  `bhsing` varchar(200) NOT NULL,
  `senibudaya` varchar(200) NOT NULL,
  `penjas` varchar(200) NOT NULL,
  `catatanwali` varchar(200) NOT NULL,
  `sakit` varchar(200) NOT NULL,
  `izin` varchar(200) NOT NULL,
  `tanpaket` varchar(200) NOT NULL,
  `hasil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelkelas10`
--

INSERT INTO `tabelkelas10` (`id`, `semester`, `nama`, `agama`, `pkn`, `bhsindo`, `matematika`, `bhsing`, `senibudaya`, `penjas`, `catatanwali`, `sakit`, `izin`, `tanpaket`, `hasil`) VALUES
(6, '1', 'Nizar Zulmi', '90', '90', '90', '88', '80', '90', '90', ' LOSS', '-', '-', '-', 'Lulus'),
(7, '2', 'Nizar Zulmi', '90', '90', '100', '100', '100', '100', '100', ' OKE MANTAP', '-', '-', '-', 'LULUS YA'),
(8, '1', 'Dini Adila', '90', '90', '90', '90', '90', '90', '90', ' OKE', '-', '-', '-', '-'),
(9, '5', 'Nizar Zulmi', '90', '90', '90', '90', '90', '90', '90', ' OKE', '-', '-', '-', 'LULUS');

-- --------------------------------------------------------

--
-- Table structure for table `tabelkelas11`
--

CREATE TABLE `tabelkelas11` (
  `id` int(11) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pkn` varchar(200) NOT NULL,
  `bhsindo` varchar(200) NOT NULL,
  `matematika` varchar(200) NOT NULL,
  `bhsing` varchar(200) NOT NULL,
  `senibudaya` varchar(200) NOT NULL,
  `penjas` varchar(200) NOT NULL,
  `catatanwali` varchar(200) NOT NULL,
  `sakit` varchar(200) NOT NULL,
  `izin` varchar(200) NOT NULL,
  `tanpaket` varchar(200) NOT NULL,
  `hasil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelkelas11`
--

INSERT INTO `tabelkelas11` (`id`, `semester`, `nama`, `agama`, `pkn`, `bhsindo`, `matematika`, `bhsing`, `senibudaya`, `penjas`, `catatanwali`, `sakit`, `izin`, `tanpaket`, `hasil`) VALUES
(1, '1', 'Ananda Lakunti', '90', '90', '90', '90', '90', '90', '90', 'OKe ', '-', '-', '-', 'LULUS YA'),
(3, '2', 'Ananda Lakunti', '90', '90', '90', '90', '80', '8', '90', ' OKE', '4', '5', '3', 'Tidak Lulus'),
(4, '3', 'Ananda Lakunti', '90', '90', '90', '90', '90', '90', '90', 'OKE SIP ', '-', '-', '-', 'LULUS YA');

-- --------------------------------------------------------

--
-- Table structure for table `tabelkelas12`
--

CREATE TABLE `tabelkelas12` (
  `id` int(11) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pkn` varchar(200) NOT NULL,
  `bhsindo` varchar(200) NOT NULL,
  `matematika` varchar(200) NOT NULL,
  `bhsing` varchar(200) NOT NULL,
  `senibudaya` varchar(200) NOT NULL,
  `penjas` varchar(200) NOT NULL,
  `catatanwali` varchar(200) NOT NULL,
  `sakit` varchar(200) NOT NULL,
  `izin` varchar(200) NOT NULL,
  `tanpaket` varchar(200) NOT NULL,
  `hasil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelkelas12`
--

INSERT INTO `tabelkelas12` (`id`, `semester`, `nama`, `agama`, `pkn`, `bhsindo`, `matematika`, `bhsing`, `senibudaya`, `penjas`, `catatanwali`, `sakit`, `izin`, `tanpaket`, `hasil`) VALUES
(1, '1', 'Nizar Zulmi', '90', '90', '90', '88', '90', '90', '90', ' LOOs', '1', '3', '-', 'Naik Kelas');

-- --------------------------------------------------------

--
-- Table structure for table `tabelsiswa10`
--

CREATE TABLE `tabelsiswa10` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jeniskelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `kelas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelsiswa10`
--

INSERT INTO `tabelsiswa10` (`id`, `nama`, `alamat`, `jeniskelamin`, `agama`, `kelas`) VALUES
(10, 'Ananda Lakunti A', 'Sukodono', 'Laki-laki', 'Islam', '10'),
(11, 'Muhammad Nizar Zulmi', 'Ketapang', 'Laki-laki', 'Islam', '10'),
(12, 'Dini Adila', 'Geluran', 'Perempuan', 'Islam', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tabelsiswa11`
--

CREATE TABLE `tabelsiswa11` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jeniskelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `kelas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelsiswa11`
--

INSERT INTO `tabelsiswa11` (`id`, `nama`, `alamat`, `jeniskelamin`, `agama`, `kelas`) VALUES
(1, 'Ananda Lakunti', 'Sukodono', 'Laki-Laki', 'Islam', '11'),
(2, 'Nizar', 'Ketapang', 'Laki-Laki', 'Islam', '11');

-- --------------------------------------------------------

--
-- Table structure for table `tabelsiswa12`
--

CREATE TABLE `tabelsiswa12` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jeniskelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `kelas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelsiswa12`
--

INSERT INTO `tabelsiswa12` (`id`, `nama`, `alamat`, `jeniskelamin`, `agama`, `kelas`) VALUES
(1, 'Budi', 'Geluran', 'Laki - Laki', 'Islam', '12'),
(2, 'James', 'Pondok Jati', 'Laki - Laki', 'Katolik', '12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Pak Budi', 'budiguru1', 'budiguru123', 'admin'),
(2, 'nizar zulmi', 'nizar19', 'nizar123', 'murid'),
(3, 'gurukelas11', 'gurukelas11', 'guru11', 'guru11'),
(4, 'gurukelas12', 'gurukelas12', 'guru12', 'guru12'),
(5, 'TU', 'Tusma', 'tusmatadika', 'tatausaha'),
(6, 'Ananda Lakunti', 'lakunti', 'lakunti123', 'murid11'),
(9, 'Dini Adila', 'dini1', 'dini123', 'Murid'),
(11, 'Rudianto', 'rudi5', 'rudi123', 'guru10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelguru`
--
ALTER TABLE `tabelguru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelkelas10`
--
ALTER TABLE `tabelkelas10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelkelas11`
--
ALTER TABLE `tabelkelas11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelkelas12`
--
ALTER TABLE `tabelkelas12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelsiswa10`
--
ALTER TABLE `tabelsiswa10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelsiswa11`
--
ALTER TABLE `tabelsiswa11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelsiswa12`
--
ALTER TABLE `tabelsiswa12`
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
-- AUTO_INCREMENT for table `tabelguru`
--
ALTER TABLE `tabelguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabelkelas10`
--
ALTER TABLE `tabelkelas10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabelkelas11`
--
ALTER TABLE `tabelkelas11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabelkelas12`
--
ALTER TABLE `tabelkelas12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabelsiswa10`
--
ALTER TABLE `tabelsiswa10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tabelsiswa11`
--
ALTER TABLE `tabelsiswa11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabelsiswa12`
--
ALTER TABLE `tabelsiswa12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
