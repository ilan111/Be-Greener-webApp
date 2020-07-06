-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_user`
--

DROP TABLE IF EXISTS `b_user`;
CREATE TABLE IF NOT EXISTS `b_user` (
  `id_pk` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `industry` varchar(500) NOT NULL,
  `p_name` varchar(500) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id_pk`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_user`
--

INSERT INTO `b_user` (`id_pk`, `name`, `industry`, `p_name`, `contact`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'kohkaaf Software', 'I.T', 'Ahmad Mustafa', '03035000800', 'ahmadmustafa1996@gmail.com', '12345', '2020-06-10 12:06:43', '2020-06-10 12:56:51'),
(4, 'family foods', 'production', 'Ahmad Mustafa', '03035000800', 'family@gmail.com', '123', '2020-06-10 13:14:13', '2020-06-10 13:14:13'),
(5, 'Volka Foods', 'production', 'ahmad', '03032000600', 'volka@gmail.com', '123', '2020-06-11 23:13:43', '2020-06-11 23:13:43'),
(9, 'test', 'test', 'test', '0330', 'test@gmail.com', '123', '2020-06-13 10:41:33', '2020-06-13 10:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

DROP TABLE IF EXISTS `chart`;
CREATE TABLE IF NOT EXISTS `chart` (
  `id_pk` int(11) NOT NULL,
  `col_1` int(11) NOT NULL,
  `col_2` int(11) NOT NULL,
  `col_3` int(11) NOT NULL,
  `col_4` int(11) NOT NULL,
  `col_5` int(11) NOT NULL,
  PRIMARY KEY (`id_pk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id_pk`, `col_1`, `col_2`, `col_3`, `col_4`, `col_5`) VALUES
(2, 167, 173, 128, 184, 159),
(4, 144, 265, 169, 108, 108),
(5, 201, 153, 292, 237, 300),
(9, 224, 258, 196, 154, 164);

-- --------------------------------------------------------

--
-- Table structure for table `questionare`
--

DROP TABLE IF EXISTS `questionare`;
CREATE TABLE IF NOT EXISTS `questionare` (
  `id_qn` int(255) NOT NULL AUTO_INCREMENT,
  `id_pk` int(255) NOT NULL,
  `invdate` date NOT NULL,
  `q_foot` int(1) NOT NULL,
  `q_cycle` int(1) NOT NULL,
  `q_bus` int(1) NOT NULL,
  `q_bike` int(1) NOT NULL,
  `q_car` int(1) NOT NULL,
  `q_taxi` int(1) NOT NULL,
  `q_train` int(1) NOT NULL,
  `q_flight` int(1) NOT NULL,
  `q_2` varchar(50) NOT NULL,
  `q_3` varchar(50) NOT NULL,
  `q_4` varchar(50) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `user` varchar(1) NOT NULL,
  `total` int(255) NOT NULL,
  PRIMARY KEY (`id_qn`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionare`
--

INSERT INTO `questionare` (`id_qn`, `id_pk`, `invdate`, `q_foot`, `q_cycle`, `q_bus`, `q_bike`, `q_car`, `q_taxi`, `q_train`, `q_flight`, `q_2`, `q_3`, `q_4`, `active`, `user`, `total`) VALUES
(1, 1, '2020-06-09', 1, 0, 0, 0, 0, 0, 0, 0, '0', 'Vegetarian', '10-50', 1, 'n', 0),
(2, 1, '2020-06-09', 1, 1, 1, 1, 1, 1, 1, 1, '5-15', 'dairy', '10-50', 1, 'n', 0),
(3, 1, '2020-06-09', 0, 0, 0, 0, 1, 0, 0, 0, '2-5', 'Vegetarian', '1-10', 1, 'n', 0),
(4, 1, '2020-06-09', 1, 0, 0, 0, 0, 1, 0, 1, '5-15', 'dairy', '10-50', 0, 'n', 0),
(5, 1, '2020-06-10', 1, 0, 0, 0, 0, 0, 0, 0, '0', 'dairy', '10-50', 0, 'n', 0),
(9, 2, '2020-06-11', 1, 0, 0, 0, 0, 0, 0, 0, '2-5', 'Vegetarian', '0', 0, 'b', 10),
(7, 2, '2020-06-11', 1, 0, 0, 0, 0, 1, 1, 0, '5-15', 'Vegetarian', '10-50', 0, 'b', 25),
(8, 2, '2020-06-11', 1, 0, 0, 0, 0, 0, 0, 0, '2-5', 'Vegetarian', '10-50', 0, 'b', 18),
(10, 4, '2020-06-11', 0, 1, 0, 0, 0, 1, 1, 0, '5-15', 'dairy', '1-10', 0, 'b', 23),
(11, 5, '2020-06-11', 1, 0, 0, 0, 0, 0, 0, 0, '2-5', 'vegan', '1-10', 0, 'b', 12),
(12, 4, '2020-06-12', 1, 0, 0, 0, 0, 1, 0, 0, '2-5', 'Vegetarian', '10-50', 0, 'b', 19);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_pk` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(500) NOT NULL,
  `f_name` varchar(500) NOT NULL,
  `l_name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  PRIMARY KEY (`id_pk`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_pk`, `user_name`, `f_name`, `l_name`, `email`, `password`, `address`, `created_at`, `updated_at`) VALUES
(1, 'zain', 'zain', 'mumtaz', 'zainmumtaz82@gmail.com', 'zain', 'multan', '0000-00-00 00:00:00.000000', '2020-06-09 22:27:07.000000'),
(2, '', 'sample', 'khan', 'khan@mail.com', 'zain', '', '2020-06-05 13:10:36.000000', '2020-06-05 13:10:36.000000'),
(3, '', 'new sample', '000000', 'loin@mail.com', 'zain', '', '2020-06-05 13:17:39.000000', '2020-06-05 13:17:39.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
