-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2016 at 05:42 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `alldata`
--

CREATE TABLE IF NOT EXISTS `alldata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(150) NOT NULL,
  `local` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `hobby` varchar(250) NOT NULL,
  `gender` text NOT NULL,
  `status` int(11) NOT NULL,
  `fbid` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `alldata`
--

INSERT INTO `alldata` (`id`, `email`, `password`, `mobile`, `local`, `city`, `state`, `hobby`, `gender`, `status`, `fbid`) VALUES
(1, 'mohit@mail.com', 'd8052f9e09a17e6907629e76bbd261cc', 9057494483, 'kharghar', 'mumbai', 'maharashtra', '', 'male', 1, ''),
(2, 'abc@mail.com', '900150983cd24fb0d6963f7d28e17f72', 90574, 'sdf', 'gdfgd', 'trh', '', 'male', 0, ''),
(3, 'pqr@mail.com', 'f734fd4ff1214de59bab601aa34030d2', 5869, 'sdf', 'gdfgd', 'trh', '', 'female', 0, ''),
(14, 'mohitgarg68@gmail.com', '77b23d4cce9caf21cf36db8601e40cfa', 9057494483, 'kharghar', 'navi mumbai', 'maharashtra', ',coding', 'male', 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
