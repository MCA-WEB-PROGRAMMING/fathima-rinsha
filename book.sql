-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 11:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `accession_number` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `authors` varchar(500) NOT NULL,
  `edition` varchar(500) NOT NULL,
  `publisher` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`accession_number`, `title`, `authors`, `edition`, `publisher`) VALUES
(3, 'dgdf', 'fgdf', 'fgdf', 'fgdfg'),
(4, 'sree', 'gdg', 'gdfgd', 'gdf'),
(6, 'book', 'sree', 'edit1', 'sreelaya'),
(8, 'gy', 'fhf', 'lko', 'ccxsra'),
(10, 'html', 'sreelaya', 'edit5', 'vishal'),
(12, 'v', 'bhf', 'bjg', 'nkh'),
(13, '', '', '', ''),
(14, 's', 'ddtg', 'htlkk', 'cda'),
(15, 's', 'ddtg', 'htlkk', 'cda'),
(16, 'kh', 'gtys', 'gf', 'j'),
(17, 'p', 'jud', 'sf', 'hGAS'),
(18, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`accession_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `accession_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
