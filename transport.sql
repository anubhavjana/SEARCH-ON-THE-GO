-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 10:59 AM
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
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `busno` varchar(11) DEFAULT NULL,
  `start` varchar(71) DEFAULT NULL,
  `destination1` varchar(71) DEFAULT NULL,
  `destination2` varchar(71) DEFAULT NULL,
  `destination3` varchar(71) DEFAULT NULL,
  `destination4` varchar(71) DEFAULT NULL,
  `destination5` varchar(71) DEFAULT NULL,
  `final` varchar(71) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busno`, `start`, `destination1`, `destination2`, `destination3`, `destination4`, `destination5`, `final`) VALUES
('515', 'TAMBARAM', 'PERANGULATHUR', 'VANDALOOR', 'VIT', 'MAMBAKKAM', 'KELAMBAKKAM', 'MAMALLAPURAM'),
('555', 'TAMBARAM', 'PERANGULATHUR', 'VANDALOOR', 'VIT', 'KELAMBAKKAM', 'KALAVAKKAM', 'THIROUPORUR'),
('102', 'BROADWAY', 'CHEPAUK', 'ADYAR', 'THORAPAKKAM', 'NAVALUR', 'KELAMBAKKAM', 'VEPAMPATTU'),
('10A', 'BROADWAY', 'CENTRAL', 'TNAGAR', 'SAIDAPET', 'VAANAGRAM', 'KUMUNANCHAVADI', 'POONNAMALLE'),
('19D', 'TNAGAR', 'THORAPAKKAM', 'SHOZINGANNALUR', 'CHROMPET', 'TAMBARAM', 'CMBT', 'KOYAMBEDY'),
('51N', 'TNAGAR', 'SAIDAPET', 'ST THOMAS MOUNT', 'NAVALUR', 'KELAMBAKKAM', 'KOVALAM', 'CHENGELPET'),
('49GS', 'THIRUVANMAYUR', 'ADYAR', 'GUINDY', 'PORUR', 'RAMAPURAM', 'VAANAGRAM', 'THIRUVERKADU');

-- --------------------------------------------------------

--
-- Table structure for table `fare`
--

CREATE TABLE `fare` (
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `distance` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`source`, `destination`, `distance`) VALUES
('TAMBARAM', 'KELAMBAKKAM', 25);

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
