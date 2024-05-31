-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 09:03 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penilaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `kd_absen` int(11) NOT NULL,
  `nm_bulan` varchar(10) NOT NULL,
  `nis` int(11) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `jml_hadir` int(11) NOT NULL,
  `alfa` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`kd_absen`, `nm_bulan`, `nis`, `nm_siswa`, `jml_hadir`, `alfa`, `izin`, `sakit`) VALUES
(1, 'Januari', 20240001, 'Ichbal Tachtiar Rosadi', 26, 0, 0, 0),
(2, 'Januari', 20240002, 'SalsaJuliani Nuryadin', 25, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admistrator');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(15) NOT NULL,
  `nm_guru` varchar(50) NOT NULL,
  `tmp_lahir_guru` varchar(50) NOT NULL,
  `tgl_lahir_guru` date NOT NULL,
  `jkel_guru` varchar(10) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `kd_matpel` varchar(10) NOT NULL,
  `nm_matpel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nm_guru`, `tmp_lahir_guru`, `tgl_lahir_guru`, `jkel_guru`, `alamat`, `telp`, `kd_matpel`, `nm_matpel`) VALUES
(1242526001, 'Ahmad Nurohman, S.Pd.', 'Jakarta', '1990-03-16', 'Laki-Laki', 'Jakarta Selatan', '083456723979', 'MP0001', 'Matematika'),
(1242526002, 'Sartika Indah Sari,S.Pd.', 'Tangerang', '1990-01-15', 'Perempuan', 'Tangerang Selatan', '089763989767', 'MP0002', 'Fisika'),
(1242526003, 'Bambang Kurniawan Putra, S.Pd.', 'Jakarta', '1989-06-20', 'Laki-Laki', 'Jakarta', '085786345987', 'MP0001', 'MP0001'),
(1242526004, 'Syifa Khaerunnisa,S.Pd.', 'Lampung', '1992-06-18', 'Perempuan', 'Tangerang', '089765345621', 'MP0002', 'MP0002');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` varchar(10) NOT NULL,
  `nm_kelas` varchar(50) NOT NULL,
  `jml_siswa` int(11) NOT NULL,
  `thn_ajaran` varchar(10) NOT NULL,
  `nip` int(15) NOT NULL,
  `nm_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `nm_kelas`, `jml_siswa`, `thn_ajaran`, `nip`, `nm_guru`) VALUES
('A001', 'X IPA 1', 32, '2023/2024', 1242526001, 'Ahmad Nurohman, S.Pd.'),
('A002', 'X IPA 2', 32, '2023/2024', 1242526002, 'Sartika Indah Sari,S.Pd.');

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE `matpel` (
  `kd_matpel` varchar(10) NOT NULL,
  `nm_matpel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`kd_matpel`, `nm_matpel`) VALUES
('MP0001', 'Matematika'),
('MP0002', 'Fisika'),
('MP0003', 'Biologi'),
('MP0004', 'Kimia');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `kd_nilai` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `kd_matpel` varchar(15) NOT NULL,
  `nm_matpel` varchar(50) NOT NULL,
  `uts_sem_ganjil` int(11) NOT NULL,
  `uas_sem_ganjil` int(11) NOT NULL,
  `uts_sem_genap` int(11) NOT NULL,
  `uas_sem_genap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`kd_nilai`, `nis`, `nm_siswa`, `kd_matpel`, `nm_matpel`, `uts_sem_ganjil`, `uas_sem_ganjil`, `uts_sem_genap`, `uas_sem_genap`) VALUES
(1, 20240001, 'Ichbal Tachtiar Rosadi', 'MP0001', 'Matematika', 80, 85, 80, 85),
(2, 20240002, 'SalsaJuliani Nuryadin', 'MP0002', 'Fisika', 85, 85, 85, 85);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jkel` varchar(10) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `nm_wali` varchar(50) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nm_siswa`, `tmp_lahir`, `tgl_lahir`, `jkel`, `alamat`, `telp`, `nm_wali`, `kd_kelas`, `username`, `password`) VALUES
(20240001, 'Ichbal Tachtiar Rosadi', 'Tangerang', '2002-06-25', 'Laki-Laki', 'Tangerang', '087232545666', 'Rosadi', 'A001', 'ichbal', 'ichbal240001'),
(20240002, 'SalsaJuliani Nuryadin', 'Tangerang', '2002-07-14', 'Perempuan', 'Tangerang Selatan', '085767888994', 'Nuryadin', 'A002', 'salsa', 'salsa240002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`kd_absen`),
  ADD KEY `fk_siswa` (`nis`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `fk_matpel` (`kd_matpel`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`),
  ADD KEY `fk_guru` (`nip`);

--
-- Indexes for table `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`kd_matpel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`kd_nilai`),
  ADD KEY `fk_siswa_a` (`nis`),
  ADD KEY `fk_matpel_a` (`kd_matpel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `fk_kelas` (`kd_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `kd_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `kd_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `fk_siswa` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `fk_matpel` FOREIGN KEY (`kd_matpel`) REFERENCES `matpel` (`kd_matpel`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `fk_guru` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_matpel_a` FOREIGN KEY (`kd_matpel`) REFERENCES `matpel` (`kd_matpel`),
  ADD CONSTRAINT `fk_siswa_a` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_kelas` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
