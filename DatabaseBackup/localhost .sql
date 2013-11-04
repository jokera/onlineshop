-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2013 at 04:06 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `market`
--
CREATE DATABASE IF NOT EXISTS `market` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `market`;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `username`, `password`, `email_address`) VALUES
(3, 'Hristo', 'Stoyanov', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@hristostoyanov.info'),
(4, 'Angel', 'Metaxoff', 'sads', 'f668bd04d1a6cfc29378e24829cddba9', 'ange@ad.bg'),
(5, 'Angel', 'Stoyanov', 'angel', 'c84258e9c39059a89ab77d846ddab909', 'angel2@abv.bg'),
(6, 'Ivan', 'Ivan', 'ivan', '2c42e5cf1cdbafea04ed267018ef1511', 'ivan@as.bg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `catalog_id` (`catalog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `catalog_id`, `description`) VALUES
(18, 'Book', 2, 1, 'The best book ever!'),
(19, 'Tshirt', 2, 2, 'White'),
(21, 'Hat', 4, 34, 'Black');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
