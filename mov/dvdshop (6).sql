-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 06:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `nicknameactor` varchar(20) NOT NULL,
  `movname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`dactor`, `nameactor`, `lastnameactor`, `ageactor`, `nicknameactor`, `movname`) VALUES
('1', 'Jaehyun', 'Jeong', 26, 'Jaehyun', 'Love Blood'),
('2', 'bammm', 'ten', 26, 'bannn', ''),
('3', 'Jayler', 'Jay', 26, 'Jaylerr', ''),
('4', 'Doyoung', 'Kim', 26, 'Doyoung', ''),
('5', 'Taeyong', 'Lee', 28, 'Bubu', '');

-- --------------------------------------------------------

--
-- Table structure for table `dvdbio`
--

CREATE TABLE `dvdbio` (
  `did` varchar(20) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `ddetail` varchar(100) NOT NULL,
  `dtime` date NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='dvd detail';

--
-- Dumping data for table `dvdbio`
--

INSERT INTO `dvdbio` (`did`, `dname`, `ddetail`, `dtime`, `price`) VALUES
('10', 'Love Blood', '4 people', '2023-10-04', '500'),
('40', 'Baggy', 'so fun', '2023-10-03', '1000'),
('56', 'Love Sick', 'BL', '2023-09-13', '4000');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='memberbio';

--
-- Dumping data for table `memberbio`
--

INSERT INTO `memberbio` (`mid`, `mname`, `mlastname`, `address`, `telephone`) VALUES
('10', 'Bamm', 'Bie', 'Bangkok', 968123547),
('20', 'Nnnn', 'Mmmm', 'Bangkok', 968123547),
('30', 'Llll', 'Pppp', 'Bangkok', 968123547),
('40', 'Preem', 'Sudhandsome', 'Bangkok', 968123547),
('50', 'Test', 'Lo', 'Bangkok', 2456543);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `oname` varchar(50) NOT NULL,
  `olast` varchar(50) NOT NULL,
  `omov` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`oname`, `olast`, `omov`) VALUES
('Bamm', 'Bie', 'Love Blood');

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
