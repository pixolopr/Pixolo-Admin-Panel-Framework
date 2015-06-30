-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2015 at 03:10 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kteventz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cisessions`
--

CREATE TABLE IF NOT EXISTS `cisessions` (
  `session_id` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(11) NOT NULL,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `comppanyname` varchar(255) DEFAULT NULL,
  `companylogo` varchar(255) DEFAULT NULL,
  `showimage` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `description` text,
  `showcase` int(11) DEFAULT NULL,
  `upcoming` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `logo`, `comppanyname`, `companylogo`, `showimage`, `timestamp`, `description`, `showcase`, `upcoming`) VALUES
(1, 'Event 1', NULL, 'pixolo production', NULL, NULL, NULL, 'this is a test event', NULL, NULL),
(2, 'USA trip', NULL, 'AKshay', 'akshay.png', NULL, NULL, 'hey this is akshays trip', NULL, NULL),
(3, 'Event 3', 'logo.png', 'Pixolo', 'pixolo.png', NULL, '2015-06-22 18:30:00', 'desc', 1, 1),
(4, 'Omkar Event', 'omkarevent.png', 'pixolo', 'pixolo.png', NULL, '2015-06-22 18:30:00', 'desc', 1, 0),
(5, 'Abhay', NULL, 'pixolo', NULL, NULL, '1993-05-27 18:30:00', 'desc', 1, 0),
(6, 'Abhay', NULL, 'pixolo', NULL, NULL, '0000-00-00 00:00:00', 'desc', 1, 0),
(7, 'Omkars Birthday Party', NULL, 'Pixolo Organizers', NULL, NULL, '2015-06-24 18:30:00', 'omkars birthday part', 0, 1),
(8, 'party', NULL, 'Pixolo Organizers', NULL, NULL, '0000-00-00 00:00:00', 'kjj', 1, 1),
(9, 'jyoti', NULL, 'jyotipixolo', NULL, NULL, '0000-00-00 00:00:00', 'ajsndjasdla', 1, 0),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '', 'pixolo_portfolio_filter.zip', '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(12, '', 'pixolo_portfolio_filter.zip', '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(13, '', 'pixolo_portfolio_filter.zip', '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '', 'favicon.ico', '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(16, '', 'favicon.ico', '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(17, '', 'logo.png', '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(18, '', 'logo.png', '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '', 'favicon.ico', '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(21, '', 'favicon.ico', '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(22, '', 'logo.png', '', 'favicon.ico', NULL, '0000-00-00 00:00:00', '', 1, 1),
(23, '', 'logo.png', '', 'favicon.ico', NULL, '0000-00-00 00:00:00', '', 1, 1),
(24, '', 'logo.png', '', 'favicon.ico', NULL, '0000-00-00 00:00:00', '', 1, 1),
(25, '', 'logo.png', '', 'favicon.ico', NULL, '0000-00-00 00:00:00', '', 1, 1),
(26, '', NULL, '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(27, '', NULL, '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(28, '', NULL, '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(29, '', NULL, '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(30, '', NULL, '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(31, '', NULL, '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(32, '', NULL, '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1),
(33, '', NULL, '', NULL, NULL, '0000-00-00 00:00:00', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'abhay', 'abhay@pixolo.co.in', '53a13a6377b3e69bfc8a4cadf79d839468451478fff521889a1e6202fcf5571afa5873f99c25e66a92d22f0632898f6f4711efe545944d434b8fc5f9e06bb51f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cisessions`
--
ALTER TABLE `cisessions`
 ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
