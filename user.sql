-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `financial_donation`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(10) NOT NULL,
  `status` char(10) NOT NULL,
  `Name_user` varchar(100) NOT NULL,
  `Department_user` varchar(100) NOT NULL,
  `Department_phone` int(10) NOT NULL,
  `Email_user` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 AUTO_INCREMENT=10 ;

--
-- dump ตาราง `user`
--

INSERT INTO `user` (`Id_user`, `username`, `password`, `status`, `Name_user`, `Department_user`, `Department_phone`, `Email_user`) VALUES
(1, 'admin', 'tawanchai5', '001', '', '', 0, ''),
(2, 'finan', 'tawanchai', '002', '', 'เจ้าหน้าที่การเงิน', 0, ''),
(3, 'tawanchai', 'donatebox', '002', 'เจ้าหน้าที่มูลนิธิ', '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
