-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 01:40 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `olxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE IF NOT EXISTS `accessories` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `productname` varchar(200) NOT NULL,
  `original_price` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `description` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'khalid', 'asdf'),
(3, 'khalid', 'asdf'),
(4, 'khalid', 'asdf'),
(5, 'khalid', 'asdf'),
(6, 'khalid', 'asdf'),
(7, 'nadia', 'tandugon');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `item_desc` varchar(200) NOT NULL,
  `item_price` int(5) NOT NULL,
  `date_ordered` int(30) NOT NULL,
  `ordered_by` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `item_desc`, `item_price`, `date_ordered`, `ordered_by`) VALUES
(9, 'Adidas Stan Smith', 4599, 0, ''),
(10, 'Adidas X PLR', 4999, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE IF NOT EXISTS `clothes` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `productname` varchar(200) NOT NULL,
  `original_price` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `description` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Brand` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Price` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Firstname`, `Lastname`, `Address`) VALUES
(1, 'khalid', 'tandugon', 'piapi'),
(2, 'khalid', 'tandugon', 'piapi'),
(3, 'khalid', 'tandugon', 'piapi'),
(4, 'khalid', 'tandugon', 'piapi'),
(5, 'khalid', 'tandugon', 'piapi'),
(6, 'khalid', 'tandugon', 'piapi'),
(7, 'nadia', 'tandugon', 'piapi');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE IF NOT EXISTS `shoes` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `productname` varchar(200) NOT NULL,
  `original_price` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `description` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `productname`, `original_price`, `price`, `description`) VALUES
(24, 'adidas stan smith.JPG', 4250, 4599, 'Adidas Stan Smith'),
(25, 'adidas x plr.JPG', 4599, 4999, 'Adidas X PLR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
