-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 04:17 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentattendancesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `STUDENT_NAME` varchar(30) DEFAULT NULL,
  `MATRIC_NUM` varchar(10) NOT NULL,
  `STATUS` char(25) DEFAULT NULL,
  `COURSE_ID` varchar(10) NOT NULL,
  `NO` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`STUDENT_NAME`, `MATRIC_NUM`, `STATUS`, `COURSE_ID`, `NO`) VALUES
('Muhd Zaid bin Zakaria', 'BI17110005', '1', '', 13),
('Muhamad', 'BI17110009', '3', '', 12),
('Muhamad Hasif bin Ali', 'BI17110010', '2', '', 10),
('Lisa Mayamin binti Mahmud', 'BI17110011', '1', '', 6),
('Muhamad Shahmin', 'BI17110012', '1', '', 11),
('Muhamad Ali', 'BI17110014', '1', '', 8),
('Jacklyn Victor', 'BI17110015', '2', '', 2),
('John Cena Mcgregor', 'BI17110016', '1', '', 4),
('Nadiah binti Ahmad', 'BI17110019', '1', '', 14),
('Jamilah binti Jamolin', 'BI17110021', '2', '', 3),
('Muhamad Aniq bin Abu Bakar', 'BI17110022', '3', '', 9),
('Nur Cahaya bte Matahari', 'BI17110056', '1', '', 15),
('Bryan Kent', 'BI17110102', '3', '', 1),
('Mohd Ustaz bin Imam', 'BI17110123', '1', '', 7),
('Khabib bin Nurmagemodov', 'BI17110203', '1', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `STATUS` int(1) NOT NULL,
  `STATUS_DESCRIPTION` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`STATUS`, `STATUS_DESCRIPTION`) VALUES
(1, 'Attend'),
(2, 'Absent'),
(3, 'Absent with reason');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `MATRIC_NUM` varchar(10) NOT NULL,
  `EMAIL` varchar(25) DEFAULT NULL,
  `STUDENT_NUM` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`MATRIC_NUM`, `EMAIL`, `STUDENT_NUM`) VALUES
('BI17110005', 'Zaidhensem23@gmail.com', '0197866465'),
('BI17110009', 'PahlawaNeraka7@gmail.com', '01112093456'),
('BI17110010', 'Hasief17@gmail.com', '01112544341'),
('BI17110011', 'Lisacantik33@gmail.com', '0123546798'),
('BI17110012', 'shahminsyair52@gmail.com', '01112073752'),
('BI17110014', 'Alibaba33@Yahoo.com', '0177773457'),
('BI17110015', 'Jacklynofcal98@gmail.com', '0177213224'),
('BI17110016', 'JohnCena43@Yahoo.com', '0183456789'),
('BI17110019', 'Some1luvrex@Yahoo.com', '01113056777'),
('BI17110021', 'PuteriJamilah@gmail.com', '0177773457'),
('BI17110022', 'Akuxiehensem@Yahoo.com', '0128895678'),
('BI17110056', 'sinarmentari2@Yahoo.com', '01123545567'),
('BI17110102', 'BryanKent55@gmail.com', '01114345464'),
('BI17110123', 'Ahlisyurga99@Yahoo.com', '0192567878'),
('BI17110203', 'cintakumelur2@Yahoo.com', '01132522897');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`MATRIC_NUM`),
  ADD UNIQUE KEY `MATRIC_NUM` (`MATRIC_NUM`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`STATUS`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`MATRIC_NUM`),
  ADD UNIQUE KEY `MATRIC_NUM` (`MATRIC_NUM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
