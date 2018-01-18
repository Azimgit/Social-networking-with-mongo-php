-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 03:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `from_` varchar(30) NOT NULL,
  `clg` varchar(300) NOT NULL,
  `to_` varchar(30) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `read_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `from_`, `clg`, `to_`, `msg`, `read_`) VALUES
(13, 'steve', 'a@gmail.com', 'someclg', 'a@gmail.com', 'hi', 1),
(14, 'steve', 'a@gmail.com', 'someclg', 'a@gmail.com', 'hello', 1),
(15, 'azim', 'azim@gmail.com', 'msrit', 'a@gmail.com', 'hi', 1),
(16, 'steve', 'a@gmail.com', 'someclg', 'azim@gmail.com', 'hello', 1),
(17, 'azim', 'azim@gmail.com', 'msrit', 'a@gmail.com', 'hello', 1),
(18, 'steve', 'a@gmail.com', 'someclg', 'a@gmail.com', 'hi', 1),
(19, 'steve', 'a@gmail.com', 'someclg', 'azim@gmail.com', 'hi', 1),
(20, 'steve', 'a@gmail.com', 'someclg', 'a@gmail.com', 'jfbjda', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
