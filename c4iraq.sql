 -- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 12:24 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c4iraq`
--

-- --------------------------------------------------------

--
-- Table structure for table `team_profile`
--

CREATE TABLE `team_profile` (
  `user` varchar(30) NOT NULL,
  `fullName` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` text CHARACTER SET utf8mb4 NOT NULL,
  `phone` int(12) NOT NULL,
  `about` text CHARACTER SET utf8mb4 NOT NULL,
  `langProg` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `img` text NOT NULL,
  `fb` text NOT NULL,
  `github` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_profile`
--

INSERT INTO `team_profile` (`user`, `fullName`, `email`, `city`, `phone`, `about`, `langProg`, `img`, `fb`, `github`) VALUES
('alaa.akiel', 'Alaa Akiel', 'alaa.akiel@codeforiraq.org', 'الكوت', 2147483647, 'shfjklhalskdfh\r\nashdfaklshdfk\r\naskdhfalksfhjk', 'python,php,javascript', 'alaa.akiel.jpg', 'alaa.akile', 'alaaProg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;