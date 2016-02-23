-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: adrianadebowska.com.mysql:3306
-- Generation Time: Feb 23, 2016 at 07:11 PM
-- Server version: 5.5.47-MariaDB-1~wheezy
-- PHP Version: 5.3.3-7+squeeze15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adrianadebowska`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `questionid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(150) NOT NULL,
  `choice1` varchar(150) NOT NULL,
  `choice2` varchar(150) NOT NULL,
  `choice3` varchar(150) NOT NULL,
  `answer` varchar(150) NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `quiz` (`questionid`, `name`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 'How many people can fit to this vehicle?', 'only 1', '2', '5', '10'),
(2, 'Is it easy?', 'yes', 'no', 'maybe', 'idk'),
(3, 'Who is it?', 'me', 'you', 'she', 'he'),
(15, 'ds', 'sdsd', 'sdsd', 'sfs', 'sdsd'),
(16, 'ds', 'sds', 'sdsd', 'sad', 'sdd'),
(17, 'ds', 'dsffffffffffffffffffffff', 'ffffffffffffffff', 'ffffffffffffff', 'dsfdsfds'),
(18, 'ds', 'dsffffffffffffffffffffff', 'ffffffffffffffff', 'ffffffffffffff', 'dsfdsfds'),
(19, 'dfdf', 'dfdff', 'dfdsdf', 'dfdfdf', 'dfdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
