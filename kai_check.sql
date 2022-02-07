-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 11:01 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kai_check`
--
CREATE DATABASE IF NOT EXISTS `kai_check` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kai_check`;

-- --------------------------------------------------------

--
-- Table structure for table `bagian_user`
--

CREATE TABLE IF NOT EXISTS `bagian_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tempat` varchar(50) NOT NULL,
  PRIMARY KEY (`tempat`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bagian_user`
--

INSERT INTO `bagian_user` (`id`, `tempat`) VALUES
(1, 'Kantor DIVRE'),
(2, 'LRT');

-- --------------------------------------------------------

--
-- Table structure for table `cctv_kantor`
--

CREATE TABLE IF NOT EXISTS `cctv_kantor` (
  `kode` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cctv_kantor`
--

INSERT INTO `cctv_kantor` (`kode`, `lokasi`) VALUES
('CCTVDV1', 'Pintu Masuk Satpam'),
('CCTVDV10', 'Parkiran Motor Karyawan '),
('CCTVDV11', 'Parkiran Mobil Belakang'),
('CCTVDV12', 'Parkiran Motor Belakang'),
('CCTVDV13', 'Parkiran Motor Depan Kantin'),
('CCTVDV14', 'Arah Ruangan Aset Humas Hukum'),
('CCTVDV15', 'Parkiran Mobil Arah Masjid Samping'),
('CCTVDV16', 'Parkiran Motor Arah Masjid Smaping'),
('CCTVDV17', 'Pintu Utama Kantor Divre'),
('CCTVDV18', 'Ruang Resepsionist'),
('CCTVDV19', 'Tangga Atas Resepsionist'),
('CCTVDV2', 'Pintu Keluar Satpam'),
('CCTVDV20', 'PD12 Arah Ruang Sriwijaya'),
('CCTVDV21', 'Arah Ruang Sintel'),
('CCTVDV22', 'Area Depan Ruang Deputy'),
('CCTVDV23', 'Ruang Sarana Angfas'),
('CCTVDV24', 'Depan Ruang Keuangan'),
('CCTVDV25', 'Arah Ruang Rapat Babaranjang'),
('CCTVDV26', 'Jalan Belakang Arah Pusdal'),
('CCTVDV27', 'Lapangan Badminton'),
('CCTVDV28', 'Arah Ruang SDM'),
('CCTVDV29', 'Tangga depan JJ'),
('CCTVDV3', 'Halaman Masjid'),
('CCTVDV30', 'Depan Ruang IT'),
('CCTVDV4', 'Parkiran Mobil 1'),
('CCTVDV5', 'Parkiran Mobil 2'),
('CCTVDV6', 'Pos Satpam Pintu keluar'),
('CCTVDV7', 'Parkiran Mobil Samping'),
('CCTVDV8', 'Parkiran Motor Karyawan'),
('CCTVDV9', 'Parkiran Motor Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `cctv_kereta`
--

CREATE TABLE IF NOT EXISTS `cctv_kereta` (
  `kode` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `nama_kereta` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `kereta` (`nama_kereta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cctv_kereta`
--

INSERT INTO `cctv_kereta` (`kode`, `lokasi`, `nama_kereta`, `tanggal`) VALUES
('K1 00212', 'Kereta Eksekutif', 'Serelo 2', '2020-02-07'),
('K100201', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K100202', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K100203', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K100204', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K100205', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K100210', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K100211-1', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K100211-2', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K106617-1', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K106617-2', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K106618-1', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K106618-2', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K106619-1', 'Kereta Eksekutf', 'Serelo 1', '0000-00-00'),
('K106619-2', 'Kereta Eksekuif', 'Serelo 1', '0000-00-00'),
('K106620-1', 'Kereta Eksekuif', 'Serelo 1', '0000-00-00'),
('K106620-2', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K106621-1', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K106621-2', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K108101-1', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K108101-2', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K108102-1', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K108102-2', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K108103-1', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K108103-2', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K108104-1', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K108104-2', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K108105', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00'),
('K2 06604-1', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 06604-2', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 06608', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 06611', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 06612-1', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 06612-2', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 06613-1', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 06613-2', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 06614-1', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 06614-2', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 07822-1', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 07822-2', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 07823-1', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 07823-2', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 07853', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 07858-1', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('K2 07858-2', 'Kereta Bisnis', 'Serelo 1', '0000-00-00'),
('KMP3 00703', 'kereta makan', 'Serelo 1', '0000-00-00'),
('M100201', 'Kereta Makan', 'Serelo 1', '0000-00-00'),
('M100202', 'Kereta Eksekutif', 'Serelo 1', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cctv_stasiun`
--

CREATE TABLE IF NOT EXISTS `cctv_stasiun` (
  `nama_stasiun` varchar(50) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `cctv_stasiun` (`nama_stasiun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cctv_stasiun`
--

INSERT INTO `cctv_stasiun` (`nama_stasiun`, `kode`, `lokasi`) VALUES
('Lubuk Linggau', '850050', 'CS'),
('Kertapati', 'CCTVKPT1', 'Area Parkir Mobil Arah Tiket Parkir'),
('Kertapati', 'CCTVKPT10', 'Arah Mess Sriwijaya'),
('Kertapati', 'CCTVKPT11', 'Parkir Motor Mess Sriwijaya'),
('Kertapati', 'CCTVKPT12', 'Depan CIC'),
('Kertapati', 'CCTVKPT13', 'Depan Loket'),
('Kertapati', 'CCTVKPT14', 'Ruang Customer Service'),
('Kertapati', 'CCTVKPT15', 'Area Pertokoan'),
('Kertapati', 'CCTVKPT16', 'Area Boarding Luar'),
('Kertapati', 'CCTVKPT17', 'Pintu Masuk Boarding Dalam'),
('Kertapati', 'CCTVKPT18', 'Ruang Tunggu 1'),
('Kertapati', 'CCTVKPT19', 'Ruang Tunggu 2'),
('Kertapati', 'CCTVKPT2', 'Area Parkir Mobil Depan Pintu Keluar'),
('Kertapati', 'CCTVKPT20', 'Ruang Tunggu 3'),
('Kertapati', 'CCTVKPT21', 'Area Batas Ruang Tunggu Penumpang'),
('Kertapati', 'CCTVKPT22', 'Arah Pintu Keluar Penumpang'),
('Kertapati', 'CCTVKPT23', 'Area Depan Ruang Schowing'),
('Kertapati', 'CCTVKPT24', 'Area Jalur KA'),
('Kertapati', 'CCTVKPT25', 'Area Jalur KA'),
('Kertapati', 'CCTVKPT26', 'Area Jalur KA'),
('Kertapati', 'CCTVKPT27', 'Area Jalur KA'),
('Kertapati', 'CCTVKPT28', 'Area Jalur KA'),
('Kertapati', 'CCTVKPT29', 'Area Jalur KA'),
('Kertapati', 'CCTVKPT3', 'Area Parkir Mobil Depan Pintu Utama'),
('Kertapati', 'CCTVKPT30', 'Area Jalur KA'),
('Kertapati', 'CCTVKPT31', 'Ruang Loket'),
('Kertapati', 'CCTVKPT4', 'Area Drop Out Penumpang Depan Pintu Utama'),
('Kertapati', 'CCTVKPT5', 'Area Drop Out Penumpang Arah Pintu Pertokoan'),
('Kertapati', 'CCTVKPT6', 'Area Drop Out Penumpang Depan Boarding'),
('Kertapati', 'CCTVKPT7', 'Area Drop Out Penumpang Arah Pintu Keluar Mobil'),
('Kertapati', 'CCTVKPT8', 'Taman Samping Boarding'),
('Kertapati', 'CCTVKPT9', 'Pintu Keluar Parkiran Mobil');

-- --------------------------------------------------------

--
-- Table structure for table `jaringan_boarding`
--

CREATE TABLE IF NOT EXISTS `jaringan_boarding` (
  `nama_stasiun` varchar(50) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama_boarding` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `boarding_stasiun` (`nama_stasiun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaringan_boarding`
--

INSERT INTO `jaringan_boarding` (`nama_stasiun`, `kode`, `nama_boarding`) VALUES
('Kertapati', 'BRDKPT1', 'Boarding1'),
('Kertapati', 'BRDKPT2', 'Boarding2'),
('Lubuk Linggau', 'BRDLLG1', 'Boarding1'),
('Lubuk Linggau', 'BRDLLG2', 'Boarding2'),
('Lahat', 'BRDLT1', 'Boarding1'),
('Muara Enim', 'BRDME1', 'Boarding1'),
('Prabumulih', 'BRDPBM1', 'Boarding1'),
('Tebing tinggi', 'BRDTI1', 'Boarding1');

-- --------------------------------------------------------

--
-- Table structure for table `jaringan_cic`
--

CREATE TABLE IF NOT EXISTS `jaringan_cic` (
  `nama_stasiun` varchar(20) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama_cic` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `cic_stasiun` (`nama_stasiun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaringan_cic`
--

INSERT INTO `jaringan_cic` (`nama_stasiun`, `kode`, `nama_cic`) VALUES
('Kota Padang', 'CICKOP1', 'cic1'),
('Kertapati', 'CICKTP1', 'cic1'),
('Kertapati', 'CICKTP2', 'cic2'),
('Lubuk Linggau', 'CICLLG1', 'cic1'),
('Lubuk Linggau', 'CICLLG2', 'cic2'),
('Lahat', 'CICLT1', 'cic1'),
('Muara Enim', 'CICME1', 'cic1'),
('Prabumulih', 'CICPBM1', 'cic1'),
('Payakabung', 'CICPYK1', 'cic1'),
('Tebing tinggi', 'CICTI1', 'cic1');

-- --------------------------------------------------------

--
-- Table structure for table `jaringan_cs`
--

CREATE TABLE IF NOT EXISTS `jaringan_cs` (
  `nama_stasiun` varchar(50) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama_cs` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `cs_stasiun` (`nama_stasiun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaringan_cs`
--

INSERT INTO `jaringan_cs` (`nama_stasiun`, `kode`, `nama_cs`) VALUES
('Kertapati', 'CSKPT2', 'cs2'),
('Kertapati', 'CSKPTI', 'cs1'),
('Lubuk Linggau', 'CSLLG1', 'cs1'),
('Prabumulih', 'CSPBM1', 'cs1');

-- --------------------------------------------------------

--
-- Table structure for table `jaringan_loket`
--

CREATE TABLE IF NOT EXISTS `jaringan_loket` (
  `nama_stasiun` varchar(50) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama_loket` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `loket_stasiun` (`nama_stasiun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaringan_loket`
--

INSERT INTO `jaringan_loket` (`nama_stasiun`, `kode`, `nama_loket`) VALUES
('Kertapati', 'LKTKPT1', 'Loket 1'),
('Kertapati', 'LKTKPT2', 'Loket 2'),
('Kertapati', 'LKTKPT3', 'Loket 3'),
('Kertapati', 'LKTKPT4', 'Loket 4'),
('Lubuk Linggau', 'LKTLLG1', 'Loket 1'),
('Lubuk Linggau', 'LKTLLG2', 'Loket 2'),
('Lubuk Linggau', 'LKTLLG3', 'Loket 3'),
('Lubuk Linggau', 'LKTLLG4', 'Loket 4'),
('Lahat', 'LKTLT1', 'Loket 1'),
('Lahat', 'LKTLT2', 'Loket 2'),
('Prabumulih', 'LKTPBM1', 'Loket 1'),
('Prabumulih', 'LKTPBM2', 'Loket 2'),
('Tebing Tinggi', 'LKTTI1', 'Loket 1'),
('Tebing Tinggi', 'LKTTI2', 'Loket 2');

-- --------------------------------------------------------

--
-- Table structure for table `jaringan_td`
--

CREATE TABLE IF NOT EXISTS `jaringan_td` (
  `nama_stasiun` varchar(50) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama_td` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `td_stasiun` (`nama_stasiun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaringan_td`
--

INSERT INTO `jaringan_td` (`nama_stasiun`, `kode`, `nama_td`) VALUES
('Kertapati', 'TDKPT1', 'td1'),
('Lubuk Linggau', 'TDLLG1', 'td1'),
('Lahat', 'TDLT1', 'td1'),
('Muara Enim', 'TDME1', 'td1'),
('Prabumulih', 'TDPBM1', 'td1'),
('Tebing Tinggi', 'TDTI1', 'td1');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_locotrack`
--

CREATE TABLE IF NOT EXISTS `jenis_locotrack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`nama`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jenis_locotrack`
--

INSERT INTO `jenis_locotrack` (`id`, `nama`) VALUES
(1, 'CC201'),
(2, 'CC204'),
(3, 'CC206'),
(4, 'SR');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_cctv_di_kereta`
--

CREATE TABLE IF NOT EXISTS `kondisi_cctv_di_kereta` (
  `tanggal_cek` date NOT NULL,
  `jam` time NOT NULL,
  `nama_kereta_cek` varchar(50) NOT NULL,
  `kode_cctv` varchar(20) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `pemeriksa` varchar(50) NOT NULL,
  KEY `kode_kereta` (`kode_cctv`),
  KEY `pemeriksa` (`pemeriksa`),
  KEY `pemeriksa_2` (`pemeriksa`),
  KEY `pemeriksa_3` (`pemeriksa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_cctv_kantor`
--

CREATE TABLE IF NOT EXISTS `kondisi_cctv_kantor` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `kode_cctv` varchar(20) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `pemeriksa` varchar(50) NOT NULL,
  KEY `kode_fk_kantor` (`kode_cctv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_cctv_stasiun`
--

CREATE TABLE IF NOT EXISTS `kondisi_cctv_stasiun` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `kode_cctv` varchar(20) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `pemeriksa` varchar(50) NOT NULL,
  KEY `fk_stasiun` (`kode_cctv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_jaringan_boarding`
--

CREATE TABLE IF NOT EXISTS `kondisi_jaringan_boarding` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `kode_jaringan` varchar(20) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `pemeriksa` varchar(50) NOT NULL,
  KEY `fk_boarding` (`kode_jaringan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_jaringan_boarding`
--

INSERT INTO `kondisi_jaringan_boarding` (`tanggal`, `jam`, `kode_jaringan`, `kondisi`, `pemeriksa`) VALUES
('2020-02-10', '19:34:15', 'BRDKPT1', 'baik', 'admin'),
('2020-02-10', '19:34:15', 'BRDKPT2', 'baik', 'admin'),
('2020-02-10', '19:34:15', 'BRDLLG1', 'baik', 'admin'),
('2020-02-10', '19:34:15', 'BRDLLG2', 'baik', 'admin'),
('2020-02-10', '19:34:15', 'BRDLT1', 'baik', 'admin'),
('2020-02-10', '19:34:15', 'BRDME1', 'baik', 'admin'),
('2020-02-10', '19:34:15', 'BRDPBM1', 'baik', 'admin'),
('2020-02-10', '19:34:15', 'BRDTI1', 'baik', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_jaringan_cic`
--

CREATE TABLE IF NOT EXISTS `kondisi_jaringan_cic` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `kode_jaringan` varchar(25) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `pemeriksa` varchar(50) NOT NULL,
  KEY `kode_jaringan` (`kode_jaringan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_jaringan_cs`
--

CREATE TABLE IF NOT EXISTS `kondisi_jaringan_cs` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `kode_jaringan` varchar(20) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `pemeriksa` varchar(50) NOT NULL,
  KEY `fk_cs` (`kode_jaringan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_jaringan_loket`
--

CREATE TABLE IF NOT EXISTS `kondisi_jaringan_loket` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `kode_jaringan` varchar(20) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `pemeriksa` varchar(50) NOT NULL,
  KEY `fk_loket` (`kode_jaringan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_jaringan_td`
--

CREATE TABLE IF NOT EXISTS `kondisi_jaringan_td` (
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `kode_jaringan` varchar(25) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `pemeriksa` varchar(50) NOT NULL,
  KEY `kode_jaringan` (`kode_jaringan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_locotrack`
--

CREATE TABLE IF NOT EXISTS `kondisi_locotrack` (
  `kode_locotrack` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `kondisi` varchar(11) NOT NULL,
  `pemeriksa` varchar(50) NOT NULL,
  KEY `kodeloco` (`kode_locotrack`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locotrack`
--

CREATE TABLE IF NOT EXISTS `locotrack` (
  `jenis_locotrack` varchar(25) NOT NULL,
  `kode` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `locotrack` (`jenis_locotrack`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locotrack`
--

INSERT INTO `locotrack` (`jenis_locotrack`, `kode`) VALUES
('CC201', 'CC2010402'),
('CC201', 'CC2010403'),
('CC201', 'CC2018335'),
('CC201', 'CC2018338'),
('CC201', 'CC2018339'),
('CC201', 'CC2018340'),
('CC201', 'CC2018341'),
('CC201', 'CC2018343'),
('CC201', 'CC2018346'),
('CC201', 'CC2018912'),
('CC201', 'CC2018913'),
('CC201', 'CC2018915'),
('CC201', 'CC2018916'),
('CC201', 'CC2018917'),
('CC201', 'CC2019301'),
('CC204', 'CC02040801'),
('CC204', 'CC02040802'),
('CC204', 'CC2040601'),
('CC204', 'CC2040602'),
('CC204', 'CC2040701'),
('CC204', 'CC2040702'),
('CC204', 'CC2040901'),
('CC204', 'CC2040902'),
('CC204', 'CC2040903'),
('CC204', 'CC2040904'),
('CC204', 'CC2041001'),
('CC204', 'CC2041002'),
('CC204', 'CC2041003'),
('CC204', 'CC2041101'),
('CC204', 'CC2041102'),
('CC204', 'CC2041103'),
('CC204', 'CC2041104'),
('CC204', 'CC2041105'),
('CC204', 'CC2041106'),
('CC204', 'CC2041107'),
('CC204', 'CC2041108'),
('CC204', 'CC2041109'),
('CC204', 'CC2041110'),
('CC204', 'CC2041111'),
('CC204', 'CC2041112'),
('CC204', 'CC2041113'),
('CC204', 'CC2041114'),
('CC204', 'CC2041115'),
('CC204', 'CC2041116'),
('CC204', 'CC2041117'),
('CC206', 'CC2061512'),
('CC206', 'CC2061513'),
('CC206', 'CC2061514'),
('CC206', 'CC2061515'),
('CC206', 'CC2061516'),
('CC206', 'CC2061517'),
('CC206', 'CC2061518'),
('CC206', 'CC2061519'),
('CC206', 'CC2061520'),
('CC206', 'CC2061521'),
('CC206', 'CC2061522'),
('CC206', 'CC2061523'),
('CC206', 'CC2061524'),
('CC206', 'CC2061525'),
('CC206', 'CC2061526'),
('CC206', 'CC2061527'),
('CC206', 'CC2061528'),
('CC206', 'CC2061529'),
('CC206', 'CC2061530'),
('CC206', 'CC2061531'),
('CC206', 'CC2061532'),
('CC206', 'CC2061533'),
('CC206', 'CC2061534'),
('CC206', 'CC2061535'),
('CC206', 'CC2061536'),
('CC206', 'CC2061537'),
('CC206', 'CC2061538'),
('CC206', 'CC2061539'),
('CC206', 'CC2061601'),
('CC206', 'CC2061602'),
('CC206', 'CC2061603'),
('CC206', 'CC2061604'),
('CC206', 'CC2061605'),
('CC206', 'CC2061606'),
('CC206', 'CC2061607'),
('CC206', 'CC2061608'),
('CC206', 'CC2061609'),
('CC206', 'CC2061610'),
('CC206', 'CC2061611'),
('SR', 'C95552'),
('SR', 'D06104'),
('SR', 'J11633'),
('SR', 'KD282224'),
('SR', 'MTT6423'),
('SR', 'PBR400URS'),
('SR', 'RB08201'),
('SR', 'RB08202'),
('SR', 'S138202'),
('SR', 'SR28806'),
('SR', 'SR31201'),
('SR', 'SR31301'),
('SR', 'SR31503'),
('SR', 'SR38801'),
('SR', 'SR390'),
('SR', 'SR39003'),
('SR', 'SR39006');

-- --------------------------------------------------------

--
-- Table structure for table `nama_kereta`
--

CREATE TABLE IF NOT EXISTS `nama_kereta` (
  `kereta` varchar(50) NOT NULL,
  PRIMARY KEY (`kereta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nama_kereta`
--

INSERT INTO `nama_kereta` (`kereta`) VALUES
('Serelo 1'),
('Serelo 2'),
('Sindang 1'),
('Sindang 2');

-- --------------------------------------------------------

--
-- Table structure for table `nama_stasiun`
--

CREATE TABLE IF NOT EXISTS `nama_stasiun` (
  `id_stasiun` int(11) NOT NULL AUTO_INCREMENT,
  `stasiun` varchar(50) NOT NULL,
  PRIMARY KEY (`stasiun`),
  UNIQUE KEY `id_stasiun` (`id_stasiun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `nama_stasiun`
--

INSERT INTO `nama_stasiun` (`id_stasiun`, `stasiun`) VALUES
(1, 'Kertapati'),
(2, 'Kota Padang'),
(3, 'Lahat'),
(4, 'Lubuk Linggau'),
(5, 'Muara Enim'),
(6, 'Payakabung'),
(7, 'Prabumulih'),
(8, 'Tebing Tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `bagian` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role_id` int(1) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `bagian` (`bagian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`bagian`, `username`, `password`, `nama`, `role_id`) VALUES
('Kantor DIVRE', 'admin', 'admin', 'admin', 1),
('Kantor DIVRE', 'manager', 'manager', 'manager', 2),
('Kantor DIVRE', 'meta', 'meta', 'meta', 3),
('LRT', 'pegawai', 'pegawaii', 'Deni', 3),
('LRT', 'pegawai1', 'pegawai1', 'pegawai_1', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cctv_kereta`
--
ALTER TABLE `cctv_kereta`
  ADD CONSTRAINT `kereta` FOREIGN KEY (`nama_kereta`) REFERENCES `nama_kereta` (`kereta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cctv_stasiun`
--
ALTER TABLE `cctv_stasiun`
  ADD CONSTRAINT `cctv_stasiun` FOREIGN KEY (`nama_stasiun`) REFERENCES `nama_stasiun` (`stasiun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jaringan_boarding`
--
ALTER TABLE `jaringan_boarding`
  ADD CONSTRAINT `boarding_stasiun` FOREIGN KEY (`nama_stasiun`) REFERENCES `nama_stasiun` (`stasiun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jaringan_cic`
--
ALTER TABLE `jaringan_cic`
  ADD CONSTRAINT `cic_stasiun` FOREIGN KEY (`nama_stasiun`) REFERENCES `nama_stasiun` (`stasiun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jaringan_cs`
--
ALTER TABLE `jaringan_cs`
  ADD CONSTRAINT `cs_stasiun` FOREIGN KEY (`nama_stasiun`) REFERENCES `nama_stasiun` (`stasiun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jaringan_loket`
--
ALTER TABLE `jaringan_loket`
  ADD CONSTRAINT `loket_stasiun` FOREIGN KEY (`nama_stasiun`) REFERENCES `nama_stasiun` (`stasiun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jaringan_td`
--
ALTER TABLE `jaringan_td`
  ADD CONSTRAINT `td_stasiun` FOREIGN KEY (`nama_stasiun`) REFERENCES `nama_stasiun` (`stasiun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kondisi_cctv_di_kereta`
--
ALTER TABLE `kondisi_cctv_di_kereta`
  ADD CONSTRAINT `kode_kereta` FOREIGN KEY (`kode_cctv`) REFERENCES `cctv_kereta` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kondisi_cctv_kantor`
--
ALTER TABLE `kondisi_cctv_kantor`
  ADD CONSTRAINT `kode_fk_kantor` FOREIGN KEY (`kode_cctv`) REFERENCES `cctv_kantor` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kondisi_cctv_stasiun`
--
ALTER TABLE `kondisi_cctv_stasiun`
  ADD CONSTRAINT `fk_stasiun` FOREIGN KEY (`kode_cctv`) REFERENCES `cctv_stasiun` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kondisi_jaringan_boarding`
--
ALTER TABLE `kondisi_jaringan_boarding`
  ADD CONSTRAINT `fk_boarding` FOREIGN KEY (`kode_jaringan`) REFERENCES `jaringan_boarding` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kondisi_jaringan_cs`
--
ALTER TABLE `kondisi_jaringan_cs`
  ADD CONSTRAINT `fk_cs` FOREIGN KEY (`kode_jaringan`) REFERENCES `jaringan_cs` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kondisi_jaringan_loket`
--
ALTER TABLE `kondisi_jaringan_loket`
  ADD CONSTRAINT `fk_loket` FOREIGN KEY (`kode_jaringan`) REFERENCES `jaringan_loket` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kondisi_locotrack`
--
ALTER TABLE `kondisi_locotrack`
  ADD CONSTRAINT `kodeloco` FOREIGN KEY (`kode_locotrack`) REFERENCES `locotrack` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `locotrack`
--
ALTER TABLE `locotrack`
  ADD CONSTRAINT `locotrack` FOREIGN KEY (`jenis_locotrack`) REFERENCES `jenis_locotrack` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `bagian` FOREIGN KEY (`bagian`) REFERENCES `bagian_user` (`tempat`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
