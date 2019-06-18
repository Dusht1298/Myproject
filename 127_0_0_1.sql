-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2018 at 04:22 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--
CREATE DATABASE IF NOT EXISTS `e_commerce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e_commerce`;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'LG Camera', 4000),
(3, 'Sony DSLR', 45000),
(4, 'Olympus DSLR', 50000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba #1111', 8000),
(9, 'H&W', 800),
(10, 'Luis Phil', 1000),
(11, 'John Zok', 1500),
(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`) VALUES
(1, 'Shubham', 'shubham@xyz.com', '12345', '9111097009', 'indore'),
(2, 'Shubham1', 'shubham1@xyz.com', '54321', '9111097009', 'indore'),
(3, 'Shubham2', 'shubham2@xyz.com', '12345', '9111097009', 'indore'),
(4, 'Shubham3', 'shubham3@xyz.com', '12345', '9111097009', 'indore'),
(5, 'Shubham4', 'shubham4@xyz.com', '12345', '9111097009', 'indore'),
(6, 'Shubham5', 'shubham4@xyz.com', '12345', '9111097009', 'indore'),
(7, 'Shubham6', 'shubham6@xyz.com', '12345', '9111097009', 'indore'),
(8, 'Shubham7', 'shubham7@xyz.com', '12345', '9111097009', 'indore'),
(9, 'Shubham8', 'shubham8@xyz.com', '12345', '9111097009', 'indore'),
(10, 'Shubham9', 'shubham9@xyz.com', '12345', '9111097009', 'indore'),
(11, 'Shubham10', 'shubham10@xyz.com', '12345', '9111097009', 'indore'),
(12, 'Shubham11', 'shubham11@xyz.com', '12345', '9111097009', 'indore'),
(13, 'Shubham12', 'shubham12@xyz.com', '12345', '9111097009', 'indore'),
(23, 'santosh', 'sj@gmail.com', '123', '0987654321', 'indore');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

DROP TABLE IF EXISTS `user_items`;
CREATE TABLE IF NOT EXISTS `user_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 1, 1, 'Added to cart'),
(2, 2, 2, 'Added to cart'),
(3, 3, 3, 'Added to cart'),
(4, 4, 4, 'Added to cart'),
(5, 5, 5, 'Added to cart'),
(6, 8, 8, 'Added to cart'),
(7, 6, 6, 'Added to cart'),
(8, 7, 7, 'Added to cart'),
(9, 9, 9, 'Added to cart'),
(10, 10, 12, 'Added to cart'),
(11, 11, 10, 'Added to cart'),
(12, 11, 12, 'Added to cart'),
(13, 7, 5, 'Added to cart'),
(14, 23, 1, 'Confirmed'),
(15, 23, 2, 'Confirmed'),
(16, 23, 3, 'Confirmed'),
(17, 23, 4, 'Confirmed'),
(18, 23, 6, 'Confirmed'),
(25, 23, 1, 'Confirmed'),
(24, 13, 2, 'Added to cart'),
(23, 13, 1, 'Added to cart'),
(22, 23, 9, 'Confirmed'),
(26, 23, 2, 'Confirmed'),
(27, 23, 3, 'Confirmed'),
(28, 23, 4, 'Confirmed'),
(29, 23, 2, 'Confirmed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
