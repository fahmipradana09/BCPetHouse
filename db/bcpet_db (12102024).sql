-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2024 at 05:15 AM
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
(5, '2024-05-13 23:09:32', 8, 'fasdf', '21d1', '213fa', '12s', '123', '2024-05-13 23:09:41', '2024-05-13 23:09:42', 'dfas', '1'),
(7, '2024-07-08 23:11:07', 12, 'Ambulatoir test', 'Ambulatoir test', 'Ambulatoir test', 'Ambulatoir test', 'N/A', '2024-07-08 16:11:40', '2024-07-08 16:11:40', 'Ambulatoir test', NULL),
(8, '2024-07-08 23:12:12', 13, 'Tst', 'Tst', 'Tst', 'Tst', 'N/A', '2024-07-08 16:12:29', '2024-07-08 16:12:29', 'Tst', NULL),
(9, '2024-07-08 23:15:11', 8, 'Tst', 'Tst', 'Tst', 'Tst', 'N/A', '2024-07-08 16:15:11', '2024-07-08 16:15:11', 'Tst', NULL),
(10, '2024-07-08 23:17:09', 8, 'Ini baru lagi', 'Ini baru lagi', 'Ini baru lagi', 'Ini baru lagi', 'N/A', '2024-07-08 16:17:09', '2024-07-08 16:17:09', 'Ini baru lagi', NULL),
(11, '2024-07-08 23:20:05', 8, 'asdfadf', 'asdfa', 'fasdf', 'dfasdfas', 'N/A', '2024-07-08 16:20:05', '2024-07-08 16:20:05', 'asdfas', NULL),
(12, '2024-09-03 08:58:10', 14, 'saf', 'asf', 'asf', 'asf', 'N/A', '2024-09-03 01:58:35', '2024-09-03 01:58:35', 'asf', NULL),
(18, '2024-09-03 09:56:45', 20, 'saf', 'asf', 'asf', 'asf', 'N/A', '2024-09-03 03:09:02', '2024-09-03 03:09:02', 'asf', NULL),
(19, '2024-09-03 09:56:45', 21, 'saf', 'asf', 'asf', 'asf', 'N/A', '2024-09-03 03:09:21', '2024-09-03 03:09:21', 'asf', NULL),
(20, '2024-09-03 10:10:10', 22, 'sIni sudah bisa', 'Ini sudah bisa', 'Ini sudah bisa', 'Ini sudah bisa', 'N/A', '2024-09-03 03:10:38', '2024-09-03 03:10:38', 'Ini sudah bisa', NULL),
(21, '2024-09-04 08:48:22', 23, 'asdf', 'asdfasf', 'asdadsf', 'saddfasf', 'N/A', '2024-09-04 01:48:48', '2024-09-04 01:48:48', 'asdfsaf', NULL),
(22, '2024-09-04 09:28:34', 24, 'adsf', 'asf', 'asfgh', 'a', 'N/A', '2024-09-04 02:28:59', '2024-09-04 02:28:59', 'dfsf', NULL),
(23, '2024-09-04 09:43:49', 25, 'af', 'as', 'fasd', 'asfas', 'N/A', '2024-09-04 02:45:09', '2024-09-04 02:45:09', 'f', NULL),
(24, '2024-09-04 09:45:14', 26, 'kuyh', 'jfg', 'fhjf', 'jhfghj', 'N/A', '2024-09-04 02:45:32', '2024-09-04 02:45:32', 'fhjf', NULL),
(25, '2024-09-05 15:49:06', 27, 's', 's', 'ss', 's', 'N/A', '2024-09-05 08:49:40', '2024-09-05 08:49:40', 's', NULL),
(26, '2024-09-05 15:57:41', 28, 'basdf', 'asf', 'asf', 'asf', 'N/A', '2024-09-05 08:58:01', '2024-09-05 08:58:01', 'asf', '1'),
(27, '2024-09-06 11:08:31', 1, 'tes', 'tes', 'tstss', 'tsadfas', 'N/A', '2024-09-06 04:08:31', '2024-09-06 04:08:31', 'tests', NULL),
(28, '2024-09-06 11:19:08', 2, 'Tes Baru di pet', 'Tes Baru di pet', 'Tes Baru di pet', 'Tes Baru di pet', 'N/A', '2024-09-06 04:19:08', '2024-09-06 04:19:08', 'Tes Baru di pet', NULL),
(29, '2024-09-06 11:20:35', 2, 'Test Baru Pet', 'Test Baru Pet', 'Test Baru Pet', 'Test Baru Pet', 'N/A', '2024-09-06 04:20:35', '2024-09-06 04:20:35', 'Test Baru Pet', NULL),
(30, '2024-09-06 11:25:28', 2, 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'N/A', '2024-09-06 04:25:28', '2024-09-06 04:25:28', 'Tes Ambulatoir Pet', NULL),
(32, '2024-09-06 11:29:02', 2, 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'N/A', '2024-09-06 04:29:02', '2024-09-06 04:29:02', 'Tes Ambulatoir Pet', NULL),
(33, '2024-09-06 11:29:22', 2, 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'N/A', '2024-09-06 04:29:22', '2024-09-06 04:29:22', 'Tes Ambulatoir Pet', NULL),
(34, '2024-09-06 11:30:13', 2, 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'Tes Ambulatoir Pet', 'N/A', '2024-09-06 04:30:13', '2024-09-06 04:30:13', 'Tes Ambulatoir Pet', NULL),
(35, '2024-09-06 11:30:46', 1, 'Tes Damasya Kucing', 'Tes Damasya Kucing', 'Tes Damasya Kucing', 'Tes Damasya Kucing', 'N/A', '2024-09-06 04:30:46', '2024-09-06 04:30:46', 'Tes Damasya Kucing', NULL),
(36, '2024-09-06 11:31:10', 1, 'Tes Damasya Kucing 2', 'Tes Damasya Kucing 2', 'Tes Damasya Kucing 2', 'Tes Damasya Kucing 2', 'N/A', '2024-09-06 04:31:10', '2024-09-06 04:31:10', 'Tes Damasya Kucing 2', NULL),
(37, '2024-09-06 11:31:26', 1, 'Tes Damasya Kucing 2', 'Tes Damasya Kucing 2', 'Tes Damasya Kucing 2', 'Tes Damasya Kucing 2', 'N/A', '2024-09-06 04:31:26', '2024-09-06 04:31:26', 'Tes Damasya Kucing 2', NULL),
(38, '2024-09-06 11:33:14', 1, 'gembul 1', 'Cakit', 'gembul 1 cayang', 'Cakitt', 'N/A', '2024-09-06 04:33:14', '2024-09-06 04:33:14', 'cakitt', NULL),
(39, '2024-09-12 14:37:05', 30, 'cakit berat', 'cakit berat present', 'cakit berat temuan klinis', 'cakir berat pengobatan\r\n', 'N/A', '2024-09-12 07:37:05', '2024-09-12 07:37:05', 'cakit berat diagnosa', '0'),
(40, '2024-09-12 16:35:39', 31, 'kucing', 'kucin', 'kucign', 'kucing', 'N/A', '2024-09-12 09:35:39', '2024-09-12 09:35:39', 'kucing', '0'),
(41, '2024-09-12 17:00:25', 32, 'tes dulu', 'tesss dulu', 'dulu tes', 'dulu\r\n', 'N/A', '2024-09-12 10:00:25', '2024-09-12 10:00:25', 'ulud set', '1'),
(42, '2024-09-12 17:14:50', 9, 'tssts', 'tste', 'sfsaf', 'rrassfa', 'N/A', '2024-09-12 10:14:50', '2024-09-12 10:14:50', 'fasfaf', NULL),
(43, '2024-09-13 15:18:15', 10, 'sakit kepala', 'sakit kepala', 'sakit kepala', 'sakit kepala\r\n', 'N/A', '2024-09-13 08:18:15', '2024-09-13 08:18:15', 'sakit kepala', NULL),
(44, '2024-09-13 15:20:53', 10, 'pusing', 'pusing', 'pusing', 'pusing', 'N/A', '2024-09-13 08:20:53', '2024-09-13 08:20:53', 'pusing', NULL),
(45, '2024-09-18 10:39:58', 33, 'testiingg', 'Precobaan', 'Percobaan', 'Percobaaan', 'N/A', '2024-09-18 03:39:58', '2024-09-18 03:39:58', 'Percobaan', '0'),
(46, '2024-09-18 10:39:58', 34, 'testiingg', 'Precobaan', 'Percobaan', 'Percobaaan', 'N/A', '2024-09-18 03:39:58', '2024-09-18 03:39:58', 'Percobaan', '0'),
(47, '2024-09-18 10:39:59', 35, 'testiingg', 'Precobaan', 'Percobaan', 'Percobaaan', 'N/A', '2024-09-18 03:39:59', '2024-09-18 03:39:59', 'Percobaan', '0'),
(48, '2024-09-18 10:39:59', 36, 'testiingg', 'Precobaan', 'Percobaan', 'Percobaaan', 'N/A', '2024-09-18 03:39:59', '2024-09-18 03:39:59', 'Percobaan', '0'),
(49, '2024-09-18 10:39:59', 37, 'testiingg', 'Precobaan', 'Percobaan', 'Percobaaan', 'N/A', '2024-09-18 03:39:59', '2024-09-18 03:39:59', 'Percobaan', '0'),
(50, '2024-09-18 10:39:59', 38, 'testiingg', 'Precobaan', 'Percobaan', 'Percobaaan', 'N/A', '2024-09-18 03:39:59', '2024-09-18 03:39:59', 'Percobaan', '0'),
(51, '2024-09-18 10:39:59', 39, 'testiingg', 'Precobaan', 'Percobaan', 'Percobaaan', 'N/A', '2024-09-18 03:39:59', '2024-09-18 03:39:59', 'Percobaan', '0'),
(52, '2024-09-18 11:39:12', 40, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'hgfd', '0'),
(53, '2024-09-18 11:39:12', 41, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'hgfd', '0'),
(54, '2024-09-18 11:39:12', 42, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'hgfd', '0'),
(55, '2024-09-18 11:39:12', 43, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'hgfd', '0'),
(56, '2024-09-18 11:39:12', 44, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'hgfd', '0'),
(57, '2024-09-18 11:39:12', 45, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'hgfd', '0'),
(58, '2024-09-18 11:39:12', 46, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'hgfd', '0'),
(59, '2024-09-18 11:39:12', 47, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'hgfd', '0'),
(60, '2024-09-18 11:39:13', 48, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'hgfd', '0'),
(61, '2024-09-18 11:39:13', 49, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'hgfd', '0'),
(62, '2024-09-18 11:39:13', 50, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'hgfd', '0'),
(63, '2024-09-18 11:39:13', 51, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'hgfd', '0'),
(64, '2024-09-18 11:39:13', 52, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'hgfd', '0'),
(65, '2024-09-18 11:39:13', 53, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'hgfd', '0'),
(66, '2024-09-18 11:39:13', 54, 'asdfasf', 'asfas', 'dfasdf', 'hnbds', 'N/A', '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'hgfd', '0'),
(67, '2024-09-18 11:42:18', 55, 'percobaaan', 'percobaaan', 'percobaaan', 'percobaaan', 'N/A', '2024-09-18 04:42:18', '2024-09-18 04:42:18', 'percobaaan', '0'),
(68, '2024-10-09 11:28:38', 1, 'fasf', 'asfa', 'asdfasfas', 'N/Aasdfasf', 'N/A', '2024-10-09 11:28:48', '2024-10-09 11:28:48', 'asfa', '1');

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
  `malam_note` varchar(250) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fisiologis`
--

INSERT INTO `fisiologis` (`id`, `rawat_inap_id`, `date_rawatInap`, `pagi_medication`, `siang_medication`, `malam_medication`, `pagi_temperature`, `siang_temperature`, `malam_temperature`, `pagi_respiratory_rate`, `siang_respiratory_rate`, `malam_respiratory_rate`, `pagi_hearthbeat_rate`, `siang_hearthbeat_rate`, `malam_hearthbeat_rate`, `pagi_crt`, `siang_crt`, `malam_crt`, `pagi_turgor`, `siang_turgor`, `malam_turgor`, `pagi_dideaksi`, `siang_dideaksi`, `malam_dideaksi`, `pagi_eat_status`, `siang_eat_status`, `malam_eat_status`, `pagi_drink_status`, `siang_drink_status`, `malam_drink_status`, `pagi_note`, `siang_note`, `malam_note`, `updated_at`, `deleted_at`, `created_at`) VALUES
(1, 1, '2024-05-12 17:38:54', 'dfsa', 'asdfas', 'fasf', 'sdfas', 'asdf23', 'asdf2', '21e', 'fasdf22', '23rsad', 'df2342', '23fw', '242fs', '23fs', '2fsd', 'safs32', 'saf2', 'fsf22', '23rfsd', 'f2ss', 'asdfa2', '2fsaa', 'sadfa2', 'asdf2', 'asdf2', 'asdfa', '2das', 'asdfas', 'asf22', '23424g', 'BAGUS', NULL, NULL, '2024-10-10 15:10:00'),
(2, 1, '2024-05-12 17:39:36', '231sf', 'wf24', '4324', 'nfghf', 'hfgh', 'ytuty', 'fhf', 'tryr5', 'fghf4', '4gd', 'dfgd', '3gdf', 'dfg', 'dgd', 'gdf', 'sdfgs', 'sdgs', 'sdgs', 'hgfh', 'jyt', 'jft', 'fhf', 'ghf', 'fghf', '5hfg', 'fghf', 'fh455', 'ghf', 'refdc', 'hgfd', NULL, NULL, '2024-10-10 15:10:00'),
(3, 1, '2024-09-18 15:32:37', 'yhgd', 'dhd', 'fgh', 'hfgjj', 'hfdgh', 'dfh', 'dfghd', 'dfhdfh', 'fgfshd', 'gsdgs', 'hsdfg', 'sdfjm', 'uyioyukj', 'mnjghjk', 'klkjht', 'yt', 'kj,hgt', 'iuytr', 'juu', 'iuyg', 'k,kjhg', 'u7yg', 'ytryg', 'ghdujghfg', 'fgh4', 'ujhgfd', 'jfhj', 'nbdthytte', 'yrtr', 'ryw', NULL, NULL, '2024-10-10 15:10:00'),
(4, 47, '2024-10-09 11:30:25', 'faf', 'ffdss', 'sfasf', 'asdfa', 'afasf', 'asdfa', 'asdfas', 'sdfasf', 'asdfas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-10 15:10:00'),
(5, 47, '2024-10-10 14:46:34', 'SAkit hati lagi', 'dfas', 'halooo', 'tester dulu', 'asghgdsd', 'shjgfd', 'fasdfghhgfg', 'ghjh44th', '45ref', '453ref', '423424', 'dfgdg3', '3242', 'bsg', '32424fgd', 'gdfg', 'kjghgfu', 'yiuh', 'oihgf', 'oiujhg', 'dfsdgffd', 'ojhg', 'rtyrv', 'nbngh', 'sdfsfd', 'tyujkmn', 'tfdffgf', 'hdfh', 'dfghd', 'dgfh', '2024-10-10 07:46:34', NULL, '2024-10-10 15:10:00'),
(6, 47, '2024-10-10 15:58:55', 'coba hari ini', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 08:10:03', NULL, '2024-10-10 08:10:03'),
(7, 1, '2024-10-10 17:03:54', 'baruu2', '', '', 'baru dak', '', '', 'tess', '', '', 'tess', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 10:03:54', NULL, '2024-10-10 09:21:26'),
(8, NULL, '2024-10-10 16:22:53', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 09:22:53', NULL, '2024-10-10 09:22:53'),
(9, NULL, '2024-10-10 16:31:13', 'coba hari ini', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 09:31:13', NULL, '2024-10-10 09:31:13'),
(10, NULL, '2024-10-10 16:35:47', '25 pagi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 09:35:47', NULL, '2024-10-10 09:35:47'),
(11, NULL, '2024-10-10 16:35:47', '25 pagi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 09:35:47', NULL, '2024-10-10 09:35:47'),
(12, NULL, '2024-10-10 16:36:12', 'baruu2', '', '', 'tes dulu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 09:36:12', NULL, '2024-10-10 09:36:12'),
(13, NULL, '2024-10-10 16:38:17', 'baruu2', '', '', 'baruusdak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 09:38:17', NULL, '2024-10-10 09:38:17'),
(14, NULL, '2024-10-10 17:04:16', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 10:04:16', NULL, '2024-10-10 10:04:16'),
(15, NULL, '2024-10-10 17:10:33', 'awfewfsfwesd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 10:10:33', NULL, '2024-10-10 10:10:33'),
(16, NULL, '2024-10-10 17:10:40', 'gsdgsdgsgsgsdgs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 10:10:40', NULL, '2024-10-10 10:10:40'),
(17, NULL, '2024-10-10 17:11:53', 'HOREEE BISAAA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 10:11:53', NULL, '2024-10-10 10:11:53'),
(18, 6, '2024-10-10 17:13:58', 'HOREEE BISA 2', '', '', 'tambah', '', '', 'tess lagi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-10-10 10:13:58', NULL, '2024-10-10 10:12:05');

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
(8, 'Baso', 'Baso\'s Pet', 'Bebas asal sopan', '0811444111111', 'Kucing', '1 bulan', 'male', '2024-02-24 11:31:18', '2024-09-05 07:51:05', '2024-02-24 18:31:18', 'Hitam', 'Anggora'),
(9, 'tidak\'s owner', 'tidak tau coy', 'tidak tauress', '033221111', 'tidak diketahui', '31', 'undefined', '2024-02-24 11:57:12', '2024-09-12 10:25:37', '2024-02-24 18:57:12', '-', '-'),
(10, 'tidak\'s owner', 'tidak ngerti COKKKKKKKKK', 'tidak tauress', '55555555555555555', 'tidak diketahui', '31', 'female', '2024-02-24 11:57:47', '2024-09-13 08:16:44', '2024-02-24 18:57:47', '-', '-'),
(11, 'aping', 'aping cakep', 'pasar terong ', '131231', 'kucing', '21', 'female', '2024-05-12 10:14:46', '2024-09-12 10:26:09', '2024-05-12 17:14:46', 'hitam', 'bebas'),
(12, 'Ambulatoir', 'Ini baru', 'Ambulatoir Ambulatoir v AmbulatoirAmbulatoir Ambulatoir', '11111111111', 'Ambulatoir', '12', 'male', '2024-07-08 16:11:40', '2024-07-08 16:11:40', '2024-07-08 23:11:40', 'Ambulatoir', 'Ambulatoir'),
(13, 'Tst', 'Tst', 'Tst', 'Tst', 'Tst', '15', 'undefined', '2024-07-08 16:12:29', '2024-07-08 16:12:29', '2024-07-08 23:12:29', 'Tst', 'Tst'),
(14, 'tes', 'tes', 'testse', '12313', 'testtd', 'tes', 'male', '2024-09-03 01:58:35', '2024-09-03 01:58:35', '2024-09-03 08:58:35', 'asdfasdf', 'asdfasfa'),
(15, 'Bisa nih bos', 'Bisa nih bos', 'Bisa nih bos Bisa nih bos', '11123123', 'fasf', '100000', 'male', '2024-09-03 02:50:32', '2024-09-03 02:50:32', '2024-09-03 09:50:32', 'asdfasdsfaf', 'asdfasfaasfas'),
(16, 'Bisa nih bos', 'Bisa nih bos', 'Bisa nih bos Bisa nih bos', '11123123', 'fasf', '100000', 'male', '2024-09-03 02:52:04', '2024-09-03 02:52:04', '2024-09-03 09:52:04', 'asdfasdsfaf', 'asdfasfaasfas'),
(17, 'bisa nih bos', 'bisa nih bos', 'bisa nih bos bisa nih bos bisa nih bos', '111111111111111111', 'bisa nih bos', '10000', 'male', '2024-09-03 02:52:31', '2024-09-03 02:52:31', '2024-09-03 09:52:31', 'asdfasdsfaf', 'asdfasfaasfas'),
(18, 'bisa nih bos', 'bisa nih bos', 'bisa nih bos bisa nih bos bisa nih bos', '111111111111111111', 'bisa nih bos', '10000', 'male', '2024-09-03 02:56:42', '2024-09-03 02:56:42', '2024-09-03 09:56:42', 'asdfasdsfaf', 'asdfasfaasfas'),
(19, 'baruuuu', 'baruuuu', 'baruuuu', '1111111', 'baruuuu', '222', 'male', '2024-09-03 02:57:06', '2024-09-03 02:57:06', '2024-09-03 09:57:06', 'baruuuu', 'baruuuu'),
(20, 'baruuuu', 'baruuuu', 'baruuuu', '1111111', 'baruuuu', '222', 'male', '2024-09-03 03:09:02', '2024-09-03 03:09:02', '2024-09-03 10:09:02', 'baruuuu', 'baruuuu'),
(21, 'baruuuu', 'baruuuu', 'baruuuu', '1111111', 'baruuuu', '222', 'male', '2024-09-03 03:09:21', '2024-09-03 03:09:21', '2024-09-03 10:09:21', 'baruuuu', 'baruuuu'),
(22, 'Ini sudah bisa', 'Ini sudah bisa', 'Ini sudah bisa', '1111111111111', 'Ini sudah bisa', '10000000', 'female', '2024-09-03 03:10:38', '2024-09-03 03:10:38', '2024-09-03 10:10:38', 'Ini sudah bisa', 'Ini sudah bisa'),
(23, 'tes duluu', 'tes baru bro', 'aasufhanf asf asdf', '123123123', 'asffsa', '100', 'female', '2024-09-04 01:48:48', '2024-09-04 01:48:48', '2024-09-04 08:48:48', 'biru', 'asdffas'),
(24, 'tes', 'TES BARU', 'testse', '12312', 'tes', 'tes', 'female', '2024-09-04 02:28:59', '2024-09-04 02:28:59', '2024-09-04 09:28:59', 'tasfas', 'tes'),
(25, 'satu dua tiga', 'baru di tes', 'fasfasf', '1231', 'sfasf', '123', 'undefined', '2024-09-04 02:45:09', '2024-09-04 02:45:09', '2024-09-04 09:45:09', 'safas', 'asdfas'),
(26, 'sfasf', 'tasdf', 'afafd', '55676', 'sfas', 'fasf', 'undefined', '2024-09-04 02:45:32', '2024-09-04 02:45:32', '2024-09-04 09:45:32', 'hujhfd', 'a'),
(27, 'Ini baruuuu bangeta', 'Ini baru coy', 'Ini baruuuu bangeta', '1111111111111', 'Dugong', '9009009', 'undefined', '2024-09-05 08:49:40', '2024-09-05 08:49:40', '2024-09-05 15:49:40', 'Hitam', 'persia'),
(28, 'tes', 'Baruuu coyy', 'fsaf', '1123123', 'asdfa', '123123', 'undefined', '2024-09-05 08:58:01', '2024-09-05 08:58:01', '2024-09-05 15:58:01', 'asfasf', 'asfaff'),
(29, 'Pammi ganteng', 'blanigg', 'di sudiang', '08112223333', 'Kucing', '21', 'undefined', '2024-09-12 07:36:03', '2024-09-12 07:36:03', '2024-09-12 14:36:03', 'kuning', 'Konglomerat'),
(30, 'Pammi ganteng', 'blanigg', 'di sudiang', '08112223333', 'Kucing', '21', 'undefined', '2024-09-12 07:37:05', '2024-09-12 07:37:05', '2024-09-12 14:37:05', 'kuning', 'Konglomerat'),
(31, 'fahmi pradana ', 'fahmi pradana ', 'sudiang', '0993221', 'kucing', '23', 'female', '2024-09-12 09:35:39', '2024-09-12 09:35:39', '2024-09-12 16:35:39', 'hitam', 'kucing'),
(32, 'fakmi', 'faymi pradayna', 'jaykarte', '1332212', 'kucing', '23', 'undefined', '2024-09-12 10:00:25', '2024-09-12 10:00:25', '2024-09-12 17:00:25', 'waduh', 'tes'),
(33, 'Percobaan', 'percobaaan', 'Percobaan', '13132454343', 'tessting', 'Percobaan', 'male', '2024-09-18 03:39:58', '2024-09-18 03:39:58', '2024-09-18 10:39:58', 'irengcok', 'cobaa'),
(34, 'Percobaan', 'percobaaan', 'Percobaan', '13132454343', 'tessting', 'Percobaan', 'male', '2024-09-18 03:39:58', '2024-09-18 03:39:58', '2024-09-18 10:39:58', 'irengcok', 'cobaa'),
(35, 'Percobaan', 'percobaaan', 'Percobaan', '13132454343', 'tessting', 'Percobaan', 'male', '2024-09-18 03:39:59', '2024-09-18 03:39:59', '2024-09-18 10:39:59', 'irengcok', 'cobaa'),
(36, 'Percobaan', 'percobaaan', 'Percobaan', '13132454343', 'tessting', 'Percobaan', 'male', '2024-09-18 03:39:59', '2024-09-18 03:39:59', '2024-09-18 10:39:59', 'irengcok', 'cobaa'),
(37, 'Percobaan', 'percobaaan', 'Percobaan', '13132454343', 'tessting', 'Percobaan', 'male', '2024-09-18 03:39:59', '2024-09-18 03:39:59', '2024-09-18 10:39:59', 'irengcok', 'cobaa'),
(38, 'Percobaan', 'percobaaan', 'Percobaan', '13132454343', 'tessting', 'Percobaan', 'male', '2024-09-18 03:39:59', '2024-09-18 03:39:59', '2024-09-18 10:39:59', 'irengcok', 'cobaa'),
(39, 'Percobaan', 'percobaaan', 'Percobaan', '13132454343', 'tessting', 'Percobaan', 'male', '2024-09-18 03:39:59', '2024-09-18 03:39:59', '2024-09-18 10:39:59', 'irengcok', 'cobaa'),
(40, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:12', '2024-09-18 04:39:12', '2024-09-18 11:39:12', 'Percobaan', 'Percobaan'),
(41, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:12', '2024-09-18 04:39:12', '2024-09-18 11:39:12', 'Percobaan', 'Percobaan'),
(42, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:12', '2024-09-18 04:39:12', '2024-09-18 11:39:12', 'Percobaan', 'Percobaan'),
(43, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:12', '2024-09-18 04:39:12', '2024-09-18 11:39:12', 'Percobaan', 'Percobaan'),
(44, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:12', '2024-09-18 04:39:12', '2024-09-18 11:39:12', 'Percobaan', 'Percobaan'),
(45, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:12', '2024-09-18 04:39:12', '2024-09-18 11:39:12', 'Percobaan', 'Percobaan'),
(46, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:12', '2024-09-18 04:39:12', '2024-09-18 11:39:12', 'Percobaan', 'Percobaan'),
(47, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:12', '2024-09-18 04:39:12', '2024-09-18 11:39:12', 'Percobaan', 'Percobaan'),
(48, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:13', '2024-09-18 04:39:13', '2024-09-18 11:39:13', 'Percobaan', 'Percobaan'),
(49, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:13', '2024-09-18 04:39:13', '2024-09-18 11:39:13', 'Percobaan', 'Percobaan'),
(50, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:13', '2024-09-18 04:39:13', '2024-09-18 11:39:13', 'Percobaan', 'Percobaan'),
(51, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:13', '2024-09-18 04:39:13', '2024-09-18 11:39:13', 'Percobaan', 'Percobaan'),
(52, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:13', '2024-09-18 04:39:13', '2024-09-18 11:39:13', 'Percobaan', 'Percobaan'),
(53, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:13', '2024-09-18 04:39:13', '2024-09-18 11:39:13', 'Percobaan', 'Percobaan'),
(54, 'Percobaan', 'percobaaan', 'Percobaan', '34567898765', 'Percobaan', 'Percobaan', 'undefined', '2024-09-18 04:39:13', '2024-09-18 04:39:13', '2024-09-18 11:39:13', 'Percobaan', 'Percobaan'),
(55, 'percobaaan', 'percobaaan', 'percobaaan', '2312344', 'percobaaan', 'percobaaan', 'female', '2024-09-18 04:42:18', '2024-09-18 04:42:18', '2024-09-18 11:42:18', 'percobaaan', 'percobaaan');

-- --------------------------------------------------------

--
-- Table structure for table `rawat_inap`
--

CREATE TABLE `rawat_inap` (
  `id` int(50) NOT NULL,
  `date_in_hospitalized` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_done` int(2) NOT NULL DEFAULT 0,
  `date_out_hospitalized` timestamp NULL DEFAULT NULL,
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

INSERT INTO `rawat_inap` (`id`, `date_in_hospitalized`, `is_done`, `date_out_hospitalized`, `id_ambulatoir`, `id_petProfile`, `created_at`, `updated_at`, `status`, `prognosa`, `medication_plan`) VALUES
(1, '2024-10-11 08:08:34', 1, '2024-03-26 01:55:47', 2, 8, '2024-02-24 19:05:39', '2024-02-24 19:05:41', 'tidak tertolo g', 'masih diperteanyakan', 'pengobatan'),
(5, '2024-10-11 08:08:37', 1, '2024-09-04 02:45:09', 23, 25, '2024-09-04 02:45:09', '2024-09-04 02:45:09', 'N/A', NULL, NULL),
(6, '2024-10-11 08:08:37', 1, '2024-09-04 02:45:32', 24, 26, '2024-09-04 02:45:32', '2024-09-04 02:45:32', 'N/A', NULL, NULL),
(7, '2024-10-11 08:08:39', 1, '2024-09-05 08:49:40', 25, 27, '2024-09-05 08:49:40', '2024-09-05 08:49:40', 'N/A', NULL, NULL),
(8, '2024-10-11 08:08:40', 1, '2024-09-05 08:58:01', 26, 28, '2024-09-05 08:58:01', '2024-09-05 08:58:01', 'N/A', NULL, NULL),
(11, '2024-10-11 08:08:41', 1, '2024-09-06 04:29:22', 33, 2, '2024-09-06 04:29:22', '2024-09-06 04:29:22', 'N/A', NULL, NULL),
(12, '2024-10-11 08:08:42', 1, '2024-09-06 04:30:13', 34, 2, '2024-09-06 04:30:13', '2024-09-06 04:30:13', 'N/A', NULL, NULL),
(13, '2024-10-11 08:08:42', 1, '2024-09-06 04:30:46', 35, 1, '2024-09-06 04:30:46', '2024-09-06 04:30:46', 'N/A', NULL, NULL),
(14, '2024-10-11 08:08:43', 1, '2024-09-06 04:31:10', 36, 1, '2024-09-06 04:31:10', '2024-09-06 04:31:10', 'N/A', NULL, NULL),
(15, '2024-10-11 08:08:46', 1, '2024-09-06 04:31:26', 37, 1, '2024-09-06 04:31:26', '2024-09-06 04:31:26', 'N/A', NULL, NULL),
(16, '2024-10-11 08:08:44', 1, '2024-09-06 04:33:14', 38, 1, '2024-09-06 04:33:14', '2024-09-06 04:33:14', 'N/A', NULL, NULL),
(17, '2024-10-11 08:08:47', 1, '2024-09-12 07:37:05', 39, 30, '2024-09-12 07:37:05', '2024-09-12 07:37:05', 'N/A', NULL, NULL),
(18, '2024-10-11 08:08:48', 1, '2024-09-12 09:35:39', 40, 31, '2024-09-12 09:35:39', '2024-09-12 09:35:39', 'N/A', NULL, NULL),
(19, '2024-10-11 08:08:47', 1, '2024-09-12 10:00:25', 41, 32, '2024-09-12 10:00:25', '2024-09-12 10:00:25', 'N/A', NULL, NULL),
(20, '2024-10-11 08:08:49', 1, '2024-09-12 10:14:50', 42, 9, '2024-09-12 10:14:50', '2024-09-12 10:14:50', 'N/A', NULL, NULL),
(21, '2024-10-11 08:08:50', 1, '2024-09-13 08:18:15', 43, 10, '2024-09-13 08:18:15', '2024-09-13 08:18:15', 'N/A', NULL, NULL),
(22, '2024-10-11 08:08:49', 1, '2024-09-13 08:20:53', 44, 10, '2024-09-13 08:20:53', '2024-09-13 08:20:53', 'N/A', NULL, NULL),
(23, '2024-10-11 08:08:51', 1, '2024-09-18 03:39:58', 45, 33, '2024-09-18 03:39:58', '2024-09-18 03:39:58', 'N/A', NULL, NULL),
(24, '2024-10-11 08:08:50', 1, '2024-09-18 03:39:58', 46, 34, '2024-09-18 03:39:58', '2024-09-18 03:39:58', 'N/A', NULL, NULL),
(25, '2024-10-11 08:08:53', 1, '2024-09-18 03:39:59', 47, 35, '2024-09-18 03:39:59', '2024-09-18 03:39:59', 'N/A', NULL, NULL),
(26, '2024-10-11 08:08:54', 1, '2024-09-18 03:39:59', 48, 36, '2024-09-18 03:39:59', '2024-09-18 03:39:59', 'N/A', NULL, NULL),
(27, '2024-10-11 08:08:55', 1, '2024-09-18 03:39:59', 49, 37, '2024-09-18 03:39:59', '2024-09-18 03:39:59', 'N/A', NULL, NULL),
(28, '2024-10-11 08:08:59', 1, '2024-09-18 03:39:59', 50, 38, '2024-09-18 03:39:59', '2024-09-18 03:39:59', 'N/A', NULL, NULL),
(29, '2024-10-11 08:09:05', 1, '2024-09-18 03:39:59', 51, 39, '2024-09-18 03:39:59', '2024-09-18 03:39:59', 'N/A', NULL, NULL),
(30, '2024-10-11 08:09:05', 1, '2024-09-18 04:39:12', 52, 40, '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'N/A', NULL, NULL),
(31, '2024-10-11 08:09:06', 1, '2024-09-18 04:39:12', 53, 41, '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'N/A', NULL, NULL),
(32, '2024-10-11 08:09:07', 1, '2024-09-18 04:39:12', 54, 42, '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'N/A', NULL, NULL),
(33, '2024-10-11 08:09:10', 1, '2024-09-18 04:39:12', 55, 43, '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'N/A', NULL, NULL),
(34, '2024-10-11 08:09:11', 1, '2024-09-18 04:39:12', 56, 44, '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'N/A', NULL, NULL),
(35, '2024-10-11 08:09:12', 1, '2024-09-18 04:39:12', 57, 45, '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'N/A', NULL, NULL),
(36, '2024-10-11 08:09:12', 1, '2024-09-18 04:39:12', 58, 46, '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'N/A', NULL, NULL),
(37, '2024-10-11 08:09:15', 1, '2024-09-18 04:39:12', 59, 47, '2024-09-18 04:39:12', '2024-09-18 04:39:12', 'N/A', NULL, NULL),
(38, '2024-10-11 08:09:16', 1, '2024-09-18 04:39:13', 60, 48, '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'N/A', NULL, NULL),
(39, '2024-10-11 08:09:17', 1, '2024-09-18 04:39:13', 61, 49, '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'N/A', NULL, NULL),
(40, '2024-10-11 08:09:17', 1, '2024-09-18 04:39:13', 62, 50, '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'N/A', NULL, NULL),
(41, '2024-10-11 08:09:19', 1, '2024-09-18 04:39:13', 63, 51, '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'N/A', NULL, NULL),
(42, '2024-10-11 08:09:19', 1, '2024-09-18 04:39:13', 64, 52, '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'N/A', NULL, NULL),
(43, '2024-10-11 08:09:20', 1, '2024-09-18 04:39:13', 65, 53, '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'N/A', NULL, NULL),
(44, '2024-10-11 08:09:21', 1, '2024-09-18 04:39:13', 66, 54, '2024-09-18 04:39:13', '2024-09-18 04:39:13', 'N/A', NULL, NULL),
(45, '2024-10-11 08:09:32', 0, '2024-09-18 04:42:18', 67, 55, '2024-09-18 04:42:18', '2024-09-18 04:42:18', 'N/A', NULL, NULL),
(46, '2024-10-11 08:09:23', 1, '2024-10-09 04:28:17', NULL, NULL, '2024-10-09 11:28:30', '2024-10-09 11:28:30', 'N/A', NULL, NULL),
(47, '2024-10-11 08:09:33', 0, '2024-10-09 04:29:36', 68, 1, '2024-10-09 11:29:49', '2024-10-09 11:29:49', 'SAkit', 'SAkit', NULL);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `fisiologis`
--
ALTER TABLE `fisiologis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pet_profile`
--
ALTER TABLE `pet_profile`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `rawat_inap`
--
ALTER TABLE `rawat_inap`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
