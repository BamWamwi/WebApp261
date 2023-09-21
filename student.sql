-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 11:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `petid` int(2) NOT NULL,
  `pet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='petdetail';

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`petid`, `pet`) VALUES
(10, 'cat'),
(11, 'rabbit'),
(12, 'dog'),
(13, 'cow'),
(14, 'fish');

-- --------------------------------------------------------

--
-- Table structure for table `studentbio`
--

CREATE TABLE `studentbio` (
  `sid` int(3) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `slastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='studentdetail';

--
-- Dumping data for table `studentbio`
--

INSERT INTO `studentbio` (`sid`, `sname`, `slastname`, `address`, `telephone`) VALUES
(1, 'uraiwann', '', '', ''),
(101, 'Wanwi', 'Chuaiaueama', 'Bangkok', '0968123547'),
(102, 'Jirapinya', 'Moolya', 'Bangkok', '0632707698'),
(103, 'Supanut', 'Auttawach', 'Ayuttaya', '0958672135'),
(104, 'Chanin', 'Imjinda', 'Bangkok', '0943178795'),
(105, 'Thanawat', 'Jantawong', 'Bangkok', '0650654970'),
(106, 'tawan', '', '', ''),
(107, 'uraiwan', 'inyaem', 'bangkok', '0898944631');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentbio`
--
ALTER TABLE `studentbio`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
