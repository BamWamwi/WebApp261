-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 11:06 AM
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
-- Database: `dvdshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `dactor` varchar(50) NOT NULL,
  `nameactor` varchar(20) NOT NULL,
  `lastnameactor` varchar(20) NOT NULL,
  `ageactor` int(5) NOT NULL,
  `nicknameactor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`dactor`, `nameactor`, `lastnameactor`, `ageactor`, `nicknameactor`) VALUES
('1', 'Jaehyun', 'Jeong', 25, 'Jaehyun');

-- --------------------------------------------------------

--
-- Table structure for table `dvdbio`
--

CREATE TABLE `dvdbio` (
  `did` varchar(20) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `ddetail` varchar(50) NOT NULL,
  `dtime` date NOT NULL,
  `nameactor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='dvd detail';

-- --------------------------------------------------------

--
-- Table structure for table `memberbio`
--

CREATE TABLE `memberbio` (
  `mid` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mlastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='memberbio';

--
-- Dumping data for table `memberbio`
--

INSERT INTO `memberbio` (`mid`, `mname`, `mlastname`, `address`, `telephone`) VALUES
('100', 'Chattaphon', 'Leechaiyapornkul', 'Bangkok', 968123546),
('20', 'Thanawat', '', '', 898944631),
('50', 'Thanawat', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`dactor`);

--
-- Indexes for table `dvdbio`
--
ALTER TABLE `dvdbio`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `memberbio`
--
ALTER TABLE `memberbio`
  ADD PRIMARY KEY (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
