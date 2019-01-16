-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 01:41 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `draganddrop`
--

-- --------------------------------------------------------

--
-- Table structure for table `sorting_items`
--

CREATE TABLE IF NOT EXISTS `sorting_items` (
  `id` int(10) NOT NULL,
  `title` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `position_order` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sorting_items`
--

INSERT INTO `sorting_items` (`id`, `title`, `description`, `position_order`) VALUES
(1, 'Home', 'Home Description Coming Soon..!!!!', 1),
(2, 'About', 'About Description Coming Soon..!!!!', 2),
(3, 'Service', 'Product Features Description Coming Soon..!!!!', 6),
(4, 'Solution', 'Solution Description Coming Soon..!!!!', 4),
(7, 'ContactUs', 'ContactUs Description Coming Soon...!!', 7),
(5, 'Employee', 'Employee Description Coming Soon..!!', 5),
(6, 'Support', 'Support Description Coming Soon...!!!', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sorting_items`
--
ALTER TABLE `sorting_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sorting_items`
--
ALTER TABLE `sorting_items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
