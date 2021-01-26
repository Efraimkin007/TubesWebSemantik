-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 02:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rss_database_link`
--

-- --------------------------------------------------------

--
-- Table structure for table `link_rss`
--

CREATE TABLE `link_rss` (
  `id_link_rss` int(11) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `link_data_rss` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link_rss`
--

INSERT INTO `link_rss` (`id_link_rss`, `title`, `link_data_rss`) VALUES
(1, 'Top Stories', 'http://rss.cnn.com/rss/edition.rss'),
(2, 'World', 'http://rss.cnn.com/rss/edition_world.rss'),
(6, 'Africa', 'http://rss.cnn.com/rss/edition_africa.rss'),
(10, 'America', 'http://rss.cnn.com/rss/edition_americas.rss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `link_rss`
--
ALTER TABLE `link_rss`
  ADD PRIMARY KEY (`id_link_rss`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `link_rss`
--
ALTER TABLE `link_rss`
  MODIFY `id_link_rss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
