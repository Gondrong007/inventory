-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2021 at 05:28 PM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uterioco_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(1) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `NoTelp` varchar(15) NOT NULL,
  `Alamat` text NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `Username`, `Password`, `NoTelp`, `Alamat`, `Status`) VALUES
(1, 'admin', 'D033E22AE348AEB5660FC2140AEC35850C4DA997', '0834535', 'Dimana Aja Oke Dahh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `LogAktivitas`
--

CREATE TABLE `LogAktivitas` (
  `id` bigint(11) NOT NULL,
  `Aktivitas` varchar(150) NOT NULL,
  `UsersId` int(11) NOT NULL,
  `Waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `MasterPerusahaan`
--

CREATE TABLE `MasterPerusahaan` (
  `id` int(11) NOT NULL,
  `NamaPerusahaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `MasterPerusahaan`
--

INSERT INTO `MasterPerusahaan` (`id`, `NamaPerusahaan`) VALUES
(1, 'PT. Midtrans'),
(2, 'PT. Teknologi Bersama');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` bigint(11) NOT NULL,
  `NamaUsers` varchar(255) NOT NULL,
  `EmailUsers` varchar(100) NOT NULL,
  `NoTelp` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `NamaPerusahaan` varchar(255) NOT NULL,
  `AlamatUsers` text,
  `Status` int(1) NOT NULL DEFAULT '0',
  `VerifierAccord` varchar(150) NOT NULL,
  `TglRegistrasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `LogAktivitas`
--
ALTER TABLE `LogAktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `MasterPerusahaan`
--
ALTER TABLE `MasterPerusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `LogAktivitas`
--
ALTER TABLE `LogAktivitas`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `MasterPerusahaan`
--
ALTER TABLE `MasterPerusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
