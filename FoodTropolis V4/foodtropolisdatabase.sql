-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 12:09 AM
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
(1, 'Pound Cake', 4, 0x706f756e6463616b652e6a7067),
(2, 'Cupcakes', 3, 0x63757063616b65732e6a7067);

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

--
-- Dumping data for table `beverageaisle`
--

INSERT INTO `beverageaisle` (`productid`, `beveragename`, `beverageprice`, `beverageimg`) VALUES
(1, 'Fanta', '3', 0x46616e74612e6a7067),
(2, 'Iced Tea', '3', 0x4963657465612e6a7067);

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

--
-- Dumping data for table `dairyaisle`
--

INSERT INTO `dairyaisle` (`productid`, `dairyname`, `dairyprice`, `dairyimg`) VALUES
(1, 'Milk', '3', 0x77686f6c656d696c6b2e6a7067),
(2, 'Cheese', '3', 0x6b726166746368656573652e6a7067);

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

--
-- Dumping data for table `frozenfoodaisle`
--

INSERT INTO `frozenfoodaisle` (`productid`, `frozenname`, `frozenprice`, `frozenimg`) VALUES
(1, 'Fries', '4', 0x676f6c64656e66726965732e6a706567),
(2, 'TV Dinner', '5', 0x545644696e6e65722e6a7067);

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
(1, 'Blueberries', '3', 0x626c7565626572726965732e6a7067),
(2, 'Grapes', '3', 0x6772617065732e6a7067);

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
(35, 'customer', '$2y$10$W1gefjGSplRoRC5660bag.VO6d9ul4.BxT8TySGmy.9wGm6UjPnzG', 'customer'),
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
-- Dumping data for table `vegetableaisle`
--

INSERT INTO `vegetableaisle` (`productid`, `vegetablename`, `vegetableprice`, `vegetableimg`) VALUES
(1, 'Cucumber', '4', 0x637563756d6265722e706e67),
(2, 'Avocado', '5', 0x61766f6361646f2e6a7067);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
