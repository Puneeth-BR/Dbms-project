-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2015 at 05:40 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `bevent`
--

CREATE TABLE IF NOT EXISTS `bevent` (
  `eid` int(4) NOT NULL AUTO_INCREMENT,
  `ename` varchar(30) NOT NULL,
  `etype` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `evenue` longtext NOT NULL,
  `edate` date NOT NULL,
  `edesc` longtext NOT NULL,
  `econtact` int(12) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bevent`
--

INSERT INTO `bevent` (`eid`, `ename`, `etype`, `city`, `evenue`, `edate`, `edesc`, `econtact`) VALUES
(2, 'qq', 'Seminar', 'Bangalore', 'qeqe', '2015-02-17', 'wDdafaf', 1133131313),
(5, 'Abc', 'Play', 'Bangalore', '#123,1st main,1st cross,xyz', '2015-02-27', 'xcdxdvdv', 2147483647),
(6, 'asadad', 'Seminar', 'Bangalore', 'adadadad', '2015-02-17', 'dadadaddaaddaad', 2147483647),
(7, 'wdewedwd', 'Play', 'Bangalore', 'scwsfvsvsvsv', '2015-02-28', 'adadad', 0),
(8, 'fvhghfh', 'Concerts', 'Bangalore', 'dWSwfw', '2015-02-17', 'Sassfsfssff', 13132113);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `uid` int(4) NOT NULL AUTO_INCREMENT,
  `cname` varchar(15) NOT NULL,
  `cemail` varchar(15) NOT NULL,
  `cquery` longtext NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`uid`, `cname`, `cemail`, `cquery`) VALUES
(6, 'Anjan', 'Anjank81@gmail.', 'Good!!!!'),
(5, 'jayanth', 'vgdfbtrg@3fgt.c', 'xc zc'),
(8, 'bharath', 'bharath@gmail.c', 'thanks '),
(7, 'abc', 'Anjank81@gmail.', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(4) NOT NULL AUTO_INCREMENT,
  `uname` varchar(15) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `city` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `pwd`, `gender`, `email`, `contact`, `city`) VALUES
(5, 'varun', 'varunv', 'Male', 'varunshet@gmail.com', '9876543210', 'Bangalore'),
(3, 'amar', '12345', 'Male', 'amar@xyz.com', '123456789', 'Bangalore'),
(4, 'admin', '12345', 'female', 'anjank81@gmail.com', '8892218179', 'Bangalore');
