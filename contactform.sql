-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 05:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contactform`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_test`
--

CREATE TABLE IF NOT EXISTS `add_test` (
`test_id` int(200) NOT NULL,
  `test_sub` varchar(999) NOT NULL,
  `test_name` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE IF NOT EXISTS `admindetails` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`id`, `username`, `password`, `level`) VALUES
(7, 'admin', 'admin', 0),
(8, 'saumya', 'saumya', 1),
(9, 'a1', 'a1', 1),
(10, 'a2', 'a2', 0),
(11, 'saa', 'saa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE IF NOT EXISTS `submissions` (
  `Name` text NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Subject` varchar(1000) NOT NULL,
  `Message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`Name`, `Email`, `Subject`, `Message`) VALUES
('dhruvjdashjdajsk', 'd@g.mail.com', 'qqq', 'qqqqqqq  '),
('Piyush', 'p@k.com', 'Hello', 'Test'),
('shubham', 's@g.com', 'welcome', 'welcome to my portal'),
('sandhya', 'sa@h.com', 'ghfhgc', 'erwredyghhn  '),
('sandhya', 'sandhyagautam1496@gmail.com', 'deetuoi', '  der556uioo'),
('Saumya Srivastava', 'saumya.311294@gmail.com', 'sas', 'da  '),
('seema', 'see@g.com', 'home', 'i m at home'),
('shreya', 'sh@h.com', 'it', 'it2'),
('shivani', 'shi@j.com', 'i study btech', 'i m in it'),
('sister', 'sis@g.com', 'y the', 'hell is not wrkng  '),
('suhani', 'suhanigupta06.161@gmail.com', 'abc', 'xyz'),
('Saumya', 'sumya@g.com', 'm a gal', 'hey there u r using php...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_test`
--
ALTER TABLE `add_test`
 ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
 ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_test`
--
ALTER TABLE `add_test`
MODIFY `test_id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admindetails`
--
ALTER TABLE `admindetails`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
