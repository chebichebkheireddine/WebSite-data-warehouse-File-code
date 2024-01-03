-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2022 at 06:21 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_a` int(10) NOT NULL AUTO_INCREMENT,
  `fast_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pasword` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `id_S` int(11) NOT NULL,
  `about_him` varchar(300) NOT NULL,
  `id_work` int(11) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_a`, `fast_name`, `last_name`, `email`, `pasword`, `photo`, `id_S`, `about_him`, `id_work`) VALUES
(1, 'lantri', 'farouk', 'fa@gmail.com', '12345', 'phto.jpg', 1, 'hhhhhh', 1),
(3, 'narjs', 'bnlonis', 'na', '123', 'phto.jpg', 2, 'sidjc', 2);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `id_do` int(11) NOT NULL AUTO_INCREMENT,
  `name_d` varchar(200) NOT NULL,
  `path_d` varchar(400) NOT NULL,
  `auter_by` varchar(200) NOT NULL,
  `des_d` varchar(500) NOT NULL,
  PRIMARY KEY (`id_do`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id_do`, `name_d`, `path_d`, `auter_by`, `des_d`) VALUES
(1, 'chebicheb', 'exercices1.pdf', 'kheireddine', '<p>chebicn</p>'),
(2, 'chebicheb', '002838181.pdf', 'kkkkk', '<p>sdn</p>'),
(3, 'dkn', 'article-MRCT_VM_300712.pdf', 'fkcjed', '<p>dvknv</p>');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id_S` int(11) NOT NULL AUTO_INCREMENT,
  `name_s` varchar(100) NOT NULL,
  `id_a` int(11) NOT NULL,
  PRIMARY KEY (`id_S`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id_S`, `name_s`, `id_a`) VALUES
(1, 'Web dev', 1),
(3, 'java', 2),
(5, 'web sit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

DROP TABLE IF EXISTS `works`;
CREATE TABLE IF NOT EXISTS `works` (
  `id_W` int(10) NOT NULL AUTO_INCREMENT,
  `name_W` varchar(200) NOT NULL,
  `dec_W` varchar(500) NOT NULL,
  `type_W` enum('colectiv','indev') DEFAULT NULL,
  `id_a` int(11) NOT NULL,
  PRIMARY KEY (`id_W`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id_W`, `name_W`, `dec_W`, `type_W`, `id_a`) VALUES
(1, 'talnd', 'Talend is an open source data integration platform. It provides various software and services for data integration, data management, enterprise application integration, data quality, cloud storage and Big Data', 'colectiv', 1),
(2, 'Schema Workbench', 'Schema Workbench is designed to accommodate multiple sub-windows. By default they are arranged in a cascading fashion. However, you may find more value in a tiled format, especially if you put the JDBC Explorer window next to your Schema window so that you can see the database structure at a glance.', 'colectiv', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
