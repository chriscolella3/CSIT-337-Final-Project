-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2022 at 11:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodtropolisdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` char(255) NOT NULL,
  `productid` int(255) NOT NULL,
  `productname` char(255) NOT NULL,
  `productprice` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `bakeryaisle`
--

CREATE TABLE `bakeryaisle` (
  `productid` int(255) NOT NULL,
  `bakeryname` char(25) NOT NULL,
  `bakeryprice` double(15,0) NOT NULL,
  `bakeryimg` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bakeryaisle`
--

INSERT INTO `bakeryaisle` (`productid`, `bakeryname`, `bakeryprice`, `bakeryimg`) VALUES
(35, 'kvpaka', 124, ''),
(653, 'mald', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `beverageaisle`
--

CREATE TABLE `beverageaisle` (
  `productid` int(255) NOT NULL,
  `beveragename` char(25) NOT NULL,
  `beverageprice` decimal(15,0) NOT NULL,
  `beverageimg` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dairyaisle`
--

CREATE TABLE `dairyaisle` (
  `productid` int(255) NOT NULL,
  `dairyname` char(25) NOT NULL,
  `dairyprice` decimal(15,0) NOT NULL,
  `dairyimg` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `frozenfoodaisle`
--

CREATE TABLE `frozenfoodaisle` (
  `productid` int(255) NOT NULL,
  `frozenname` char(25) NOT NULL,
  `frozenprice` decimal(15,0) NOT NULL,
  `frozenimg` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fruitaisle`
--

CREATE TABLE `fruitaisle` (
  `productid` int(255) NOT NULL,
  `fruitname` char(25) NOT NULL,
  `fruitprice` decimal(15,0) NOT NULL,
  `fruitimg` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruitaisle`
--

INSERT INTO `fruitaisle` (`productid`, `fruitname`, `fruitprice`, `fruitimg`) VALUES
(2, 'Pineapple', '8', NULL),
(100, 'hundred', '100', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`) VALUES
(27, 'customer24', '$2y$10$Bfjft0FE8bnrIQWROaienex11IiL5nOSdXjy2bxFgFiKkdr3QhUhG', 'customer'),
(26, 'employee52', '$2y$10$BwGwAjN.cYHOD97a8oHb0uBCeQhcPts0ouXb04ZccxNtNrCHrDMUS', 'employee'),
(30, 'testingpdo', '$2y$10$tFseibHhsr14ZW2FewnZ5OnXGBPHa764MZ7aFkm4XEU/6YiKHnCcO', 'customer'),
(31, 'pleasework', '$2y$10$zBlUBlHV9HMKicC0W7Mnz.rDTRernZLJTLB16IoL38nTZebhIr4pS', 'customer'),
(32, 'blablabla', '$2y$10$grfCLT7JeIFLQvXxFLaF8eUNlxKYKujU0k2Xjus1giwAzCLuRBpam', 'customer'),
(33, 'jajajajajj', '$2y$10$/J.8vZgz4KPqhV9phSPRuenuAwCHGf2x/7Z/8MqFPKuKAomB/gRh.', 'customer'),
(34, 'admin', '$2y$10$s/nghFovTUPwzKKhZfSJdOo65XPxCGL4FpILkJwmorjRUURo8sWoy', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `vegetableaisle`
--

CREATE TABLE `vegetableaisle` (
  `productid` int(255) NOT NULL,
  `vegetablename` char(25) NOT NULL,
  `vegetableprice` decimal(15,0) NOT NULL,
  `vegetableimg` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bakeryaisle`
--
ALTER TABLE `bakeryaisle`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `beverageaisle`
--
ALTER TABLE `beverageaisle`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `dairyaisle`
--
ALTER TABLE `dairyaisle`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `fruitaisle`
--
ALTER TABLE `fruitaisle`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vegetableaisle`
--
ALTER TABLE `vegetableaisle`
  ADD PRIMARY KEY (`productid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
