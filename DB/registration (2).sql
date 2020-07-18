-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 17, 2020 at 09:33 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `dependent`
--

CREATE TABLE `dependent` (
  `user` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `fooc` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `mooc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dependent`
--

INSERT INTO `dependent` (`user`, `fname`, `fooc`, `mname`, `mooc`) VALUES
('nakshaj1999@gmail.com', 'N Madhu', 'Engineer', 'N Sowjanya', 'Home Maker');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `deptno` int(20) NOT NULL,
  `dept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptno`, `dept`) VALUES
(11, 'COKE OVEN'),
(12, 'BLAST FURNACE'),
(13, 'RAIL MILL'),
(14, 'C & IT'),
(15, 'FINANCE'),
(16, 'HRD');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `hdate` date NOT NULL,
  `salary` int(10) NOT NULL,
  `deptno` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empid`, `email`, `name`, `dob`, `hdate`, `salary`, `deptno`) VALUES
(1, 'nakshaj1999@gmail.com', 'Nannapaneni Akshaj', '2020-07-03', '2020-07-25', 100000, 11),
(2, 'nanna_madhu@yahoo.com', 'N MADHU', '2020-06-03', '2020-07-12', 50000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `lno` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ltype` varchar(265) NOT NULL,
  `dfrom` date NOT NULL,
  `tfrom` time NOT NULL,
  `dto` date NOT NULL,
  `tto` time NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`lno`, `email`, `name`, `ltype`, `dfrom`, `tfrom`, `dto`, `tto`, `reason`, `status`) VALUES
(1, 'nanna_madhu@yahoo.com', 'N MADHU', 'Casual Leave', '2020-07-17', '10:37:00', '2020-07-24', '15:37:00', 'Going to Goa.', 'Applied [Pending]'),
(2, 'nakshaj1999@gmail.com', 'Nannapaneni Akshaj', 'Casual Leave', '2020-07-17', '11:50:00', '2020-08-09', '11:56:00', 'Going on a trip to Spain.', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `degree` varchar(255) NOT NULL,
  `desgn` varchar(255) NOT NULL,
  `hdate` date NOT NULL,
  `deptno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user`, `name`, `dob`, `degree`, `desgn`, `hdate`, `deptno`) VALUES
('nakshaj1999@gmail.com', 'Nannapaneni Akshaj', '1999-10-12', 'B.Tech', 'Manager', '2020-06-30', 11),
('nanna_madhu@yahoo.com', 'N MADHU', '2020-06-29', 'BE', 'DGM', '2020-07-08', 12);

-- --------------------------------------------------------

--
-- Table structure for table `profilea`
--

CREATE TABLE `profilea` (
  `user` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `degree` varchar(20) NOT NULL,
  `desgn` varchar(20) NOT NULL,
  `hdate` date NOT NULL,
  `deptno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profilea`
--

INSERT INTO `profilea` (`user`, `name`, `dob`, `degree`, `desgn`, `hdate`, `deptno`) VALUES
('nakshaj1999@gmail.com', 'Nannapaneni Akshaj', '2020-06-29', 'B.Tech', 'Manager', '2020-07-15', 11),
('nanna_madhu@yahoo.com', 'N MADHU', '2020-06-30', 'BE', 'D.G.M', '2020-07-14', 12);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `password`) VALUES
('nakshaj1999@gmail.com', 'krish1234'),
('nanna_madhu@yahoo.com', 'krish1234');

-- --------------------------------------------------------

--
-- Table structure for table `usertablea`
--

CREATE TABLE `usertablea` (
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertablea`
--

INSERT INTO `usertablea` (`user`, `password`) VALUES
('nanna_madhu@yahoo.com', 'krish1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dependent`
--
ALTER TABLE `dependent`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`deptno`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`empid`,`email`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`lno`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `usertablea`
--
ALTER TABLE `usertablea`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `lno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
