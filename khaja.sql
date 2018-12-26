-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 01:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `un` varchar(60) NOT NULL,
  `ln` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`un`, `ln`, `gender`, `pwd`) VALUES
('khajali', 'dhoni', 'male', '7080'),
('khajali', 'dhoni', 'male', '8090'),
('khajali', 'dhoni', 'male', '546'),
('khajali', 'dhoni', 'male', '546'),
('sumanth', 'juturu', 'male', 'jvs'),
('sumanth', 'juturu', 'male', 'jvs'),
('sumanth', 'juturu', 'male', 'jvs'),
('sumanth', 'juturu', 'male', 'jvs'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('pavan', 'gajjala', 'male', 'pavan'),
('pavan', 'gajjala', 'male', 'pavan'),
('teja', 'j', 'male', 'teja'),
('teja', 'j', 'male', 'teja'),
('a', 'b', 'male', 'c'),
('a', 'b', 'male', 'c'),
('jsum', 'juturu', 'male', '5678'),
('jsum', 'juturu', 'male', '5678'),
('hjk', 'b', 'male', '345'),
('hjk', 'b', 'male', '345'),
('manoj', 'dhoni', 'male', '0000'),
('manoj', 'dhoni', 'male', '0000'),
('sandhya', 'a', 'female', 'san'),
('sandhya', 'a', 'female', 'san'),
('op', 'j', 'female', 'opj'),
('op', 'j', 'female', 'opj'),
('chakri', 'k', 'male', 'chakri'),
('chakri', 'k', 'male', 'chakri'),
('lk', 'b', 'male', 'lk'),
('lk', 'b', 'male', 'lk'),
('ravina', 'k', 'female', 'rav'),
('ravina', 'k', 'female', 'rav');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
