-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 02:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
  `date_checkup` datetime NOT NULL DEFAULT current_timestamp(),
  `pet_id` int(50) NOT NULL DEFAULT 0,
  `amnesa` varchar(100) NOT NULL DEFAULT 'N/A',
  `status_present` varchar(100) NOT NULL DEFAULT 'N/A',
  `clinical_finding` varchar(150) NOT NULL DEFAULT 'N/A',
  `medication` varchar(100) DEFAULT 'N/A',
  `verif_doc` varchar(30) DEFAULT 'N/A',
  `updated_at` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  `diagnosis` varchar(50) DEFAULT 'N/A',
  `hospitalized_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ambulatoir`
--

INSERT INTO `ambulatoir` (`id`, `date_checkup`, `pet_id`, `amnesa`, `status_present`, `clinical_finding`, `medication`, `verif_doc`, `updated_at`, `created_at`, `diagnosis`, `hospitalized_status`) VALUES
(1, '2024-02-24 18:53:48', 10, '-', '-', '-', '-', 'N/A', '2024-02-24 11:57:47', '2024-02-24 11:57:47', '-', '0'),
(2, '2024-02-24 17:45:58', 8, 'kurang paham', 'Sama', 'Tidak tau juga', '-', 'N/A', '2024-02-24 11:31:18', '2024-02-24 11:31:18', '-', '0'),
(3, '2024-05-12 17:13:45', 11, 'fasdfasdf', 'jomblo', 'asdf', 'pdkt', 'N/A', '2024-05-12 10:14:46', '2024-05-12 10:14:46', 'sakit hati', '0'),
(4, '2024-05-13 23:09:05', 8, 'asdf', 'fdddd', 'sadf', 'fsd', 'fsdf', '2024-05-13 23:09:21', '2024-05-13 23:09:22', 'N/Aasdf', '2'),
(5, '2024-05-13 23:09:32', 8, 'fasdf', '21d1', '213fa', '12s', '123', '2024-05-13 23:09:41', '2024-05-13 23:09:42', 'dfas', '1');

-- --------------------------------------------------------

--
-- Table structure for table `fisiologis`
--

CREATE TABLE `fisiologis` (
  `id` int(11) NOT NULL,
  `rawat_inap_id` int(11) DEFAULT NULL,
  `date_rawatInap` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pagi_medication` varchar(250) DEFAULT NULL,
  `siang_medication` varchar(250) DEFAULT NULL,
  `malam_medication` varchar(250) DEFAULT NULL,
  `pagi_temperature` varchar(250) DEFAULT NULL,
  `siang_temperature` varchar(250) DEFAULT NULL,
  `malam_temperature` varchar(250) DEFAULT NULL,
  `pagi_respiratory_rate` varchar(250) DEFAULT NULL,
  `siang_respiratory_rate` varchar(250) DEFAULT NULL,
  `malam_respiratory_rate` varchar(250) DEFAULT NULL,
  `pagi_hearthbeat_rate` varchar(250) DEFAULT NULL,
  `siang_hearthbeat_rate` varchar(250) DEFAULT NULL,
  `malam_hearthbeat_rate` varchar(250) DEFAULT NULL,
  `pagi_crt` varchar(250) DEFAULT NULL,
  `siang_crt` varchar(250) DEFAULT NULL,
  `malam_crt` varchar(250) DEFAULT NULL,
  `pagi_turgor` varchar(250) DEFAULT NULL,
  `siang_turgor` varchar(250) DEFAULT NULL,
  `malam_turgor` varchar(250) DEFAULT NULL,
  `pagi_dideaksi` varchar(250) DEFAULT NULL,
  `siang_dideaksi` varchar(250) DEFAULT NULL,
  `malam_dideaksi` varchar(250) DEFAULT NULL,
  `pagi_eat_status` varchar(250) DEFAULT NULL,
  `siang_eat_status` varchar(250) DEFAULT NULL,
  `malam_eat_status` varchar(250) DEFAULT NULL,
  `pagi_drink_status` varchar(250) DEFAULT NULL,
  `siang_drink_status` varchar(250) DEFAULT NULL,
  `malam_drink_status` varchar(250) DEFAULT NULL,
  `pagi_note` varchar(250) DEFAULT NULL,
  `siang_note` varchar(250) DEFAULT NULL,
  `malam_note` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fisiologis`
--

INSERT INTO `fisiologis` (`id`, `rawat_inap_id`, `date_rawatInap`, `pagi_medication`, `siang_medication`, `malam_medication`, `pagi_temperature`, `siang_temperature`, `malam_temperature`, `pagi_respiratory_rate`, `siang_respiratory_rate`, `malam_respiratory_rate`, `pagi_hearthbeat_rate`, `siang_hearthbeat_rate`, `malam_hearthbeat_rate`, `pagi_crt`, `siang_crt`, `malam_crt`, `pagi_turgor`, `siang_turgor`, `malam_turgor`, `pagi_dideaksi`, `siang_dideaksi`, `malam_dideaksi`, `pagi_eat_status`, `siang_eat_status`, `malam_eat_status`, `pagi_drink_status`, `siang_drink_status`, `malam_drink_status`, `pagi_note`, `siang_note`, `malam_note`) VALUES
(1, 1, '2024-05-12 17:38:54', 'dfsa', 'asdfas', 'fasf', 'sdfas', 'asdf23', 'asdf2', '21e', 'fasdf22', '23rsad', 'df2342', '23fw', '242fs', '23fs', '2fsd', 'safs32', 'saf2', 'fsf22', '23rfsd', 'f2ss', 'asdfa2', '2fsaa', 'sadfa2', 'asdf2', 'asdf2', 'asdfa', '2das', 'asdfas', 'asf22', '23424g', 'BAGUS'),
(2, 1, '2024-05-12 17:39:36', '231sf', 'wf24', '4324', 'nfghf', 'hfgh', 'ytuty', 'fhf', 'tryr5', 'fghf4', '4gd', 'dfgd', '3gdf', 'dfg', 'dgd', 'gdf', 'sdfgs', 'sdgs', 'sdgs', 'hgfh', 'jyt', 'jft', 'fhf', 'ghf', 'fghf', '5hfg', 'fghf', 'fh455', 'ghf', 'refdc', 'hgfd');

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
(2, 'Pammi', 'Blatig', 'F Tebet, jaksel', '08222222111', 'kucing', '11', 'undefined', '0000-00-00 00:00:00', '2024-05-14 14:47:44', '0000-00-00 00:00:00', 'grey', 'persia'),
(8, 'Baso', 'Baso\'s Pet', 'Bebas asal sopan', '0811444111111', 'Kucing', '1 bulan', 'male', '2024-02-24 11:31:18', '2024-06-20 22:37:57', '2024-02-24 18:31:18', 'Hitam', 'Anggora'),
(9, 'tidak\'s owner', 'tidak', 'tidak tauress', '033221111', 'tidak diketahui', '31', 'undefined', '2024-02-24 11:57:12', '2024-02-24 11:57:12', '2024-02-24 18:57:12', '-', '-'),
(10, 'tidak\'s owner', 'tidak', 'tidak tauress', '033221111', 'tidak diketahui', '31', 'undefined', '2024-02-24 11:57:47', '2024-02-24 11:57:47', '2024-02-24 18:57:47', '-', '-'),
(11, 'aping', 'aping', 'pasar terong ', '131231', 'kucing', '21', 'female', '2024-05-12 10:14:46', '2024-05-12 10:14:46', '2024-05-12 17:14:46', 'hitam', 'bebas');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `id` int(11) NOT NULL,
  `date_in_hospitalized` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_out_hospitalized` timestamp NOT NULL DEFAULT current_timestamp(),
  `medication` varchar(50) NOT NULL,
  `id_ambulatoir` int(50) DEFAULT NULL,
  `id_petProfile` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT 'N/A',
  `prognosa` varchar(300) DEFAULT NULL,
  `medication_plan` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rawat_inap`
--

INSERT INTO `rawat_inap` (`id`, `date_in_hospitalized`, `date_out_hospitalized`, `medication`, `id_ambulatoir`, `id_petProfile`, `created_at`, `updated_at`, `status`, `prognosa`, `medication_plan`) VALUES
(1, '2024-02-24 12:06:53', '2024-03-26 01:55:47', 'yndtk', 2, 8, '2024-02-24 19:05:39', '2024-02-24 19:05:41', 'tidak tertolo g', NULL, NULL);

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
-- Indexes for table `fisiologis`
--
ALTER TABLE `fisiologis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_fisiologis_rawat_inap` (`rawat_inap_id`);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fisiologis`
--
ALTER TABLE `fisiologis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet_profile`
--
ALTER TABLE `pet_profile`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ambulatoir`
--
ALTER TABLE `ambulatoir`
  ADD CONSTRAINT `FK_ambulatoir_pet_profile` FOREIGN KEY (`pet_id`) REFERENCES `pet_profile` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fisiologis`
--
ALTER TABLE `fisiologis`
  ADD CONSTRAINT `FK_fisiologis_rawat_inap` FOREIGN KEY (`rawat_inap_id`) REFERENCES `rawat_inap` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
