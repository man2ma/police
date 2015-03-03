-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2015 at 07:14 PM
-- Server version: 5.5.40
-- PHP Version: 5.5.20-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `police`
--

-- --------------------------------------------------------

--
-- Table structure for table `offence_statement`
--

CREATE TABLE IF NOT EXISTS `offence_statement` (
  `statement_id` int(15) NOT NULL AUTO_INCREMENT,
  `offence_no` int(45) NOT NULL,
  `minute_file` varchar(200) NOT NULL,
  `force_no` varchar(45) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`statement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `offence_statement`
--

INSERT INTO `offence_statement` (`statement_id`, `offence_no`, `minute_file`, `force_no`, `date_uploaded`) VALUES
(1, 3, '6d626df7b50c60fc4232e0f628e21c7c.pdf', 'WP7298', '2015-01-20 13:25:34'),
(2, 2, '5fd1e44f1cd04041f115006c5a65ea16.pdf', 'WP7298', '2015-01-20 13:42:04'),
(3, 4, 'af6aacad84cbd531943485ece606d26d.pdf', 'WP7298', '2015-01-20 16:08:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
