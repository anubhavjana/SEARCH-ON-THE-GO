-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 11:00 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `firstname` varchar(80) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`firstname`, `lastname`, `email`, `comments`) VALUES
('A', 'B', 'ASDSC@gmail.com', 'XVB'),
('ANUBHAV', 'JANA', 'anubhav.jana@gmail.com', 'THIS HELPED ME A LOT ! THANK YOU :)'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Ronet', 'Swaminathan', '', ''),
('a', 'xs', 'cxc@gmail.com', 'asdas'),
('Mohit', 'Sharma', 'ABC@GMAIL.COM', 'good !'),
('a', 'c', 'avc@gmail.com', 'OKAY'),
('', '', '', ''),
('RIJU', 'MUKHERJEE', 'ABC@GMAIL.COM', 'NICE'),
('UMANG', 'AGGARWAL', 'umang@gmail.com', 'nice'),
('AYAN', 'KONAR', 'ayankonar@gmail.com', 'NICE'),
('', '', '', ''),
('', '', '', ''),
('ayan', 'konar', 'abc@gmail.com', 'good'),
('', '', '', ''),
('PRTAM', 'SINGH', 'ADAFS@GMAIL.COM', 'ABC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
