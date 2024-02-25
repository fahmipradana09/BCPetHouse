-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 03:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcpet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulatoir`
--

CREATE TABLE `ambulatoir` (
  `id` int(50) NOT NULL,
  `date_checkup` datetime NOT NULL,
  `pet_id` int(50) NOT NULL DEFAULT 0,
  `amnesa` varchar(100) NOT NULL DEFAULT 'N/A',
  `status_present` varchar(100) NOT NULL DEFAULT 'N/A',
  `clinical_finding` varchar(150) NOT NULL DEFAULT 'N/A',
  `medication` varchar(100) DEFAULT 'N/A',
  `verif_doc` varchar(30) DEFAULT 'N/A',
  `updated_at` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `diagnosis` varchar(50) DEFAULT 'N/A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ambulatoir`
--

INSERT INTO `ambulatoir` (`id`, `date_checkup`, `pet_id`, `amnesa`, `status_present`, `clinical_finding`, `medication`, `verif_doc`, `updated_at`, `created_at`, `diagnosis`) VALUES
(1, '2024-02-24 18:53:48', 10, '-', '-', '-', '-', 'N/A', '2024-02-24 11:57:47', '2024-02-24 11:57:47', '-'),
(2, '2024-02-24 17:45:58', 8, 'kurang paham', 'Sama', 'Tidak tau juga', '-', 'N/A', '2024-02-24 11:31:18', '2024-02-24 11:31:18', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pet_profile`
--

CREATE TABLE `pet_profile` (
  `id` int(30) NOT NULL,
  `owner_name` varchar(50) DEFAULT 'N/A',
  `name` varchar(50) NOT NULL,
  `address` varchar(250) DEFAULT 'N/A',
  `phone` varchar(30) DEFAULT 'N/A',
  `animal_type` varchar(50) DEFAULT 'N/A',
  `age` varchar(10) DEFAULT 'N/A',
  `gender` varchar(10) DEFAULT 'N/A',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime NOT NULL DEFAULT current_timestamp(),
  `color` varchar(20) NOT NULL DEFAULT 'N/A',
  `race` varchar(50) NOT NULL DEFAULT 'N/A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet_profile`
--

INSERT INTO `pet_profile` (`id`, `owner_name`, `name`, `address`, `phone`, `animal_type`, `age`, `gender`, `created_at`, `updated_at`, `deleted_at`, `color`, `race`) VALUES
(1, 'Damasya', 'Gembul', 'Jalan Medayu Utara', '08123123123', 'kucing', '21', 'Mele', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'white', 'angora'),
(2, 'Pammi', 'Blatig', 'F Tebet, jaksel', '08222222111', 'kucing', '11', 'Female', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'grey', 'persia'),
(8, 'Baso', 'Baso\'s Pet', 'Bebas asal sopan', '0811444111111', 'Kucing', '1 bulan', 'male', '2024-02-24 11:31:18', '2024-02-24 11:31:18', '2024-02-24 18:31:18', 'Hitam', 'Anggora'),
(9, 'tidak\'s owner', 'tidak', 'tidak tauress', '033221111', 'tidak diketahui', '31', 'undefined', '2024-02-24 11:57:12', '2024-02-24 11:57:12', '2024-02-24 18:57:12', '-', '-'),
(10, 'tidak\'s owner', 'tidak', 'tidak tauress', '033221111', 'tidak diketahui', '31', 'undefined', '2024-02-24 11:57:47', '2024-02-24 11:57:47', '2024-02-24 18:57:47', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `id` int(11) NOT NULL,
  `date_checkup` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `medication` varchar(50) NOT NULL,
  `id_ambulatoir` int(50) DEFAULT NULL,
  `hearthbeat_rate` varchar(50) DEFAULT 'N/A',
  `crt` varchar(50) DEFAULT 'N/A',
  `respiratory_rate` varchar(50) DEFAULT 'N/A',
  `turgor` varchar(50) DEFAULT 'N/A',
  `eat_status` varchar(50) DEFAULT 'N/A',
  `drink_status` varchar(50) DEFAULT 'N/A',
  `dideaksi` varchar(50) DEFAULT 'N/A',
  `note` varchar(50) DEFAULT 'N/A',
  `temperature` varchar(50) DEFAULT 'N/A',
  `id_petProfile` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT 'N/A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rawat_inap`
--

INSERT INTO `rawat_inap` (`id`, `date_checkup`, `medication`, `id_ambulatoir`, `hearthbeat_rate`, `crt`, `respiratory_rate`, `turgor`, `eat_status`, `drink_status`, `dideaksi`, `note`, `temperature`, `id_petProfile`, `created_at`, `updated_at`, `status`) VALUES
(1, '2024-02-24 12:06:53', 'yndtk', 2, '1', '1', '22', '2', '1123', '12312', '131', '123', '32', 8, '2024-02-24 19:05:39', '2024-02-24 19:05:41', 'tidak tertolo g');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambulatoir`
--
ALTER TABLE `ambulatoir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN KEY` (`pet_id`);

--
-- Indexes for table `pet_profile`
--
ALTER TABLE `pet_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ambulatoir` (`id_ambulatoir`),
  ADD KEY `id_petProfile` (`id_petProfile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambulatoir`
--
ALTER TABLE `ambulatoir`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet_profile`
--
ALTER TABLE `pet_profile`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ambulatoir`
--
ALTER TABLE `ambulatoir`
  ADD CONSTRAINT `FK_ambulatoir_pet_profile` FOREIGN KEY (`pet_id`) REFERENCES `pet_profile` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  ADD CONSTRAINT `FK_rawat_inap_ambulatoir` FOREIGN KEY (`id_ambulatoir`) REFERENCES `ambulatoir` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_rawat_inap_pet_profile` FOREIGN KEY (`id_petProfile`) REFERENCES `pet_profile` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
