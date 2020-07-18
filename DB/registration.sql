-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 10, 2020 at 08:52 PM
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
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `salary` int(255) NOT NULL,
  `deptno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empid`, `name`, `dob`, `salary`, `deptno`) VALUES
(1, 'Akshaj', '2020-06-29', 100000, 11),
(2, 'Ram', '2020-06-30', 50000, 12),
(3, 'Shyam', '2020-07-07', 60000, 11);

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
('nakshaj1999@gmail.com', 'akshaj1999');

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
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`empid`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
