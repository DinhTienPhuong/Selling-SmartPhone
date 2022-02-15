-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 04:12 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `allphptricks`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `proid` int(10) NOT NULL AUTO_INCREMENT,
  `proname` varchar(250) NOT NULL,
  `procode` varchar(100) NOT NULL,
  `proprice` double(9,2) NOT NULL,
  `proimage` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`proid`, `proname`, `procode`, `proprice`, `proimage`) VALUES
(1, 'Easy Polo Black Edition1', 'Easy01', 10.00, 'images/product1.jpg'),
(2, 'Easy Polo Black Edition2', 'Easy02', 20.00, 'images/product2.jpg'),
(3, 'Easy Polo Black Edition3', 'Easy03', 30.00, 'images/product3.jpg'),
(4, 'Easy Polo Black Edition4', 'Easy04', 40.00, 'images/product4.jpg'),
(5, 'Easy Polo Black Edition5', 'Easy05', 50.00, 'images/product5.jpg'),
(6, 'Easy Polo Black Edition6', 'Easy06', 60.00, 'images/product6.jpg');


CREATE TABLE `users` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
