-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 01:45 AM
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
  `date_checkup` datetime NOT NULL,
  `pet_id` int(50) NOT NULL DEFAULT 0,
  `anemsa` varchar(100) NOT NULL DEFAULT '',
  `status_present` varchar(100) NOT NULL DEFAULT '',
  `clinical_finding` varchar(150) NOT NULL DEFAULT '',
  `medication` varchar(100) DEFAULT '',
  `verif_doc` varchar(30) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pet_profile`
--

CREATE TABLE `pet_profile` (
  `id` int(30) NOT NULL,
  `owner_name` varchar(50) DEFAULT 'N/A',
  `name` varchar(50) NOT NULL,
  `address` varchar(250) DEFAULT 'N/A',
  `phone` varchar(30) DEFAULT '0',
  `animal_type` varchar(50) DEFAULT '0',
  `age` varchar(10) DEFAULT '0',
  `gender` varchar(10) DEFAULT '0',
  `created_at` varchar(30) NOT NULL,
  `update_at` varchar(30) NOT NULL,
  `deleted_at` varchar(30) NOT NULL,
  `fur_color` varchar(20) NOT NULL,
  `race` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet_profile`
--

INSERT INTO `pet_profile` (`id`, `owner_name`, `name`, `address`, `phone`, `animal_type`, `age`, `gender`, `created_at`, `update_at`, `deleted_at`, `fur_color`, `race`) VALUES
(1, 'Damasya', 'Gembul', 'Jalan Medayu Utara', '08123123123', 'kucing', '21', 'Mele', '', '', '', 'white', 'angora'),
(2, 'Pammi', 'Blatig', 'F Tebet, jaksel', '08222222111', 'kucing', '11', 'Female', '', '', '', 'grey', 'persia');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `id` int(11) NOT NULL,
  `date_checkup` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `medication` varchar(50) NOT NULL,
  `id_ambulatoir` int(50) DEFAULT NULL,
  `hearthbeat_rate` int(20) DEFAULT NULL,
  `crt` varchar(50) DEFAULT NULL,
  `respiratory_rate` int(20) DEFAULT NULL,
  `turgor` int(20) DEFAULT NULL,
  `eat_status` varchar(50) DEFAULT NULL,
  `drink_status` varchar(50) DEFAULT NULL,
  `dideaksi` varchar(50) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `temperature` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD KEY `id_ambulatoir` (`id_ambulatoir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pet_profile`
--
ALTER TABLE `pet_profile`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `FK_rawat_inap_ambulatoir` FOREIGN KEY (`id_ambulatoir`) REFERENCES `ambulatoir` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
