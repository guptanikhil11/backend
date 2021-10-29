-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2021 at 12:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addweb trainee`
--

CREATE TABLE `addweb trainee` (
  `sr.no` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `contact` int(13) NOT NULL,
  `depart.` varchar(15) NOT NULL,
  `Sallary` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addweb trainee`
--

INSERT INTO `addweb trainee` (`sr.no`, `Name`, `contact`, `depart.`, `Sallary`) VALUES
(1, 'vikas', 3432535, 'developmant', 321323),
(2, 'manoj', 243254352, 'computer sc', 13121),
(3, 'mukesh', 9184352, 'computer sc', 13000),
(4, 'snajay', 919904352, 'computer sc', 130000),
(5, 'pintu', 91918254, 'computer sc', 13001),
(6, 'mohit', 243254352, 'computer sc', 13121),
(7, 'prince', 243254352, 'computer sc', 13121),
(8, 'jitendra', 243254352, 'computer sc', 13121),
(9, 'ravi', 243254352, 'computer sc', 13121),
(10, 'manshi', 243254352, 'computer sc', 13121);

-- --------------------------------------------------------

--
-- Table structure for table `Art`
--

CREATE TABLE `Art` (
  `sr.no` int(11) NOT NULL,
  `Name` varchar(34) NOT NULL,
  `Roll` varchar(34) NOT NULL,
  `city` varchar(34) NOT NULL,
  `department` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Art`
--

INSERT INTO `Art` (`sr.no`, `Name`, `Roll`, `city`, `department`) VALUES
(1, 'sahil', 'developer', 'jaipur', 'development'),
(2, 'kaushal', 'python developer', 'ranchi', 'development'),
(3, 'nitin', 'sales', 'jaipur', 'sales'),
(4, 'nishant', 'sales manager', 'jaipur', 'sales'),
(5, 'lalit', 'data operator', 'jaipur', 'sales'),
(6, 'sudhanshu', 'sales operator', 'jaipur', 'sales'),
(7, 'nikhil', 'data entry', 'jaipur', 'sales'),
(8, 'mohit', 'DA', 'jaipur', 'sales'),
(9, 'vigyan', 'operator', 'jaipur', 'sales'),
(10, 'pihu', 'sales', 'jaipur', 'sales');

-- --------------------------------------------------------

--
-- Table structure for table `backend department`
--

CREATE TABLE `backend department` (
  `sr.no` int(11) NOT NULL,
  `Name` varchar(34) NOT NULL,
  `contact` int(34) NOT NULL,
  `city` varchar(34) NOT NULL,
  `class` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backend department`
--

INSERT INTO `backend department` (`sr.no`, `Name`, `contact`, `city`, `class`) VALUES
(1, 'billu', 1342355, 'mohnajodaro', 2),
(2, 'ravan', 4234242, 'delhi', 2),
(3, 'ram', 4234242, 'delhi', 2),
(4, 'shyam', 4234242, 'delhi', 2),
(5, 'radheshyam', 4234242, 'delhi', 2),
(6, 'mukul', 4234242, 'delhi', 2),
(7, 'ramesh', 988086443, 'delhi', 1),
(8, 'radheshyam', 98804242, 'delhi', 3),
(9, 'abdul', 98734242, 'delhi', 4),
(10, 'shivkumar', 980834242, 'haryana', 2);

-- --------------------------------------------------------

--
-- Table structure for table `canteen detail`
--

CREATE TABLE `canteen detail` (
  `sr.no` int(11) NOT NULL,
  `Name` varchar(23) NOT NULL,
  `grade` int(22) NOT NULL,
  `pocket` int(22) NOT NULL,
  `spend` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canteen detail`
--

INSERT INTO `canteen detail` (`sr.no`, `Name`, `grade`, `pocket`, `spend`) VALUES
(1, 'nikhil', 2, 2112, 221),
(2, 'vinod', 1, 22212, 2122),
(3, 'vishnu', 1, 22212, 2122),
(4, 'rajkumar', 1, 22212, 2000),
(5, 'kedar', 3, 22212, 30000),
(6, 'don', 1, 20000, 2000),
(7, 'gungun', 1, 22212, 2122),
(8, 'kantilal', 1, 22212, 9882),
(9, 'michle', 1, 20012, 9844),
(10, 'joe', 2, 22212, 20098);

-- --------------------------------------------------------

--
-- Table structure for table `development`
--

CREATE TABLE `development` (
  `dep.id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `contact` int(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `salary` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `development`
--

INSERT INTO `development` (`dep.id`, `Name`, `contact`, `city`, `salary`) VALUES
(1, 'lokesh', 31244311, 'raipur', 244442),
(2, 'naira', 343242344, 'raipur', 244442),
(3, 'aaditya', 3214314, 'raipur', 244442),
(4, 'gunng', 2343242, 'raipur', 244442),
(5, 'vinit', 4242412, 'bassi', 12311),
(6, 'monu', 312312311, 'dausa', 32131),
(7, 'mohit', 31441414, 'jharkhand', 213123),
(8, 'Rohan', 2132131231, 'pakistan', 324242),
(9, 'abhishek', 4235345, 'lalsot', 32414),
(10, 'vikshit', 32425245, 'dholpur', 234221);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `sr.no` int(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `Roll` varchar(11) NOT NULL,
  `DoJ` datetime NOT NULL,
  `Sallary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sr.no`, `Name`, `Roll`, `DoJ`, `Sallary`) VALUES
(1, 'nikhil', 'programmer', '2021-10-29 10:30:40', 20000),
(2, 'vikas', 'jprog', '2021-10-29 07:02:45', 30000),
(3, 'lokesh', 'python', '2021-10-29 07:03:17', 20000),
(4, 'lokesh', 'python', '2021-10-29 07:03:17', 20000),
(5, 'mohan', 'java', '2021-10-29 07:03:59', 43000),
(6, 'mukes', 'full s', '2021-10-29 07:05:41', 443444),
(7, 'gunng', 'prog', '2021-10-29 07:06:11', 34044),
(8, 'gunng', 'prog', '2021-10-29 07:06:11', 34044),
(9, 'vishnu', 'writer', '2021-10-29 07:06:42', 43433),
(10, 'rahul', 'food', '2021-10-29 07:07:14', 33141);

-- --------------------------------------------------------

--
-- Table structure for table `employee 1`
--

CREATE TABLE `employee 1` (
  `emp.id` int(11) NOT NULL,
  `last name` varchar(9) NOT NULL,
  `first name` varchar(10) NOT NULL,
  `depart.` varchar(12) NOT NULL,
  `mail` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee 1`
--

INSERT INTO `employee 1` (`emp.id`, `last name`, `first name`, `depart.`, `mail`) VALUES
(1, 'gupta', 'nikhil', 'development', 'nikhil@gmail'),
(2, 'sharma', 'rahul', 'develop.', 'rahul@gmail'),
(3, 'saini', 'vikas', 'computer', 'nikhi@gmail'),
(4, 'saini', 'lokesh', 'computer', 'loku@gmail'),
(5, 'mohan', 'shakti', 'mechanical', 'shak@gmail'),
(6, 'ritik', 'lala', 'computer', 'lala@gmail'),
(7, 'khan', 'sardar', 'bomb fekna', 'bomb@gmail'),
(8, 'vaseyppur', 'king', 'computer', 'king@gmail'),
(9, 'nawaj', 'khan', 'computer', 'khan@gmail'),
(10, 'aamir', 'rana', 'programming', 'rana@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `grade wise officers`
--

CREATE TABLE `grade wise officers` (
  `emp.id` int(11) NOT NULL,
  `name` varchar(23) NOT NULL,
  `department` varchar(33) NOT NULL,
  `salary` int(21) NOT NULL,
  `review point` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade wise officers`
--

INSERT INTO `grade wise officers` (`emp.id`, `name`, `department`, `salary`, `review point`) VALUES
(1, 'nishant', 'sales', 20000, 3),
(2, 'lalit', 'sales', 30203, 4),
(3, 'nikhil', 'sales', 30893, 4),
(4, 'phanishawar', 'sales', 30000, 1),
(5, 'mukesh', 'sales', 30989, 3),
(6, 'poonam', 'sales', 30000, 2),
(7, 'honk', 'sales', 35000, 2),
(8, 'lavi', 'computer', 32000, 1),
(9, 'mahesh', 'computer', 40000, 2),
(10, 'vivek', 'sales', 30203, 3);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `contact` int(10) NOT NULL,
  `department` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `Name`, `address`, `contact`, `department`) VALUES
(1, 'aaditya', 'jaipur', 343242344, 'develop'),
(2, 'manish', 'jaipur', 31244311, 'develop'),
(3, 'naira', 'jaipur', 31244311, 'develop'),
(4, 'naira', 'jaipur', 31244311, 'develop'),
(5, 'mohan', 'jaipur', 343242344, 'develop'),
(6, 'mohan', 'jaipur', 24241324, 'develop'),
(7, 'mohan', 'jaipur', 343242344, 'develop'),
(8, 'mohan', 'jaipur', 24241324, 'develop'),
(9, 'vinod', 'ranchi', 2343242, 'content r'),
(10, 'vikas', 'ranchi', 3214314, 'content w');

-- --------------------------------------------------------

--
-- Table structure for table `transport data`
--

CREATE TABLE `transport data` (
  `emp.id` int(11) NOT NULL,
  `last name` varchar(32) NOT NULL,
  `first name` varchar(32) NOT NULL,
  `depart.` varchar(32) NOT NULL,
  `grade` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport data`
--

INSERT INTO `transport data` (`emp.id`, `last name`, `first name`, `depart.`, `grade`) VALUES
(1, 'gupta', 'mohan', 'development', 2),
(2, 'sharma', 'snajay', 'computer', 1),
(3, 'verma', 'ajay', 'computer', 4),
(4, 'sharma', 'vinod', 'computer', 3),
(5, 'singh', 'vijay', 'hardware', 1),
(6, 'sharma', 'nikhil', 'computer', 2),
(7, 'rana', 'snajay', 'computer', 1),
(8, 'molana', 'snajay', 'development', 1),
(9, 'abdul', 'khan', 'mechanical', 1),
(10, 'sharma', 'ram', 'computer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addweb trainee`
--
ALTER TABLE `addweb trainee`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `Art`
--
ALTER TABLE `Art`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `backend department`
--
ALTER TABLE `backend department`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `canteen detail`
--
ALTER TABLE `canteen detail`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `development`
--
ALTER TABLE `development`
  ADD PRIMARY KEY (`dep.id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `employee 1`
--
ALTER TABLE `employee 1`
  ADD PRIMARY KEY (`emp.id`);

--
-- Indexes for table `grade wise officers`
--
ALTER TABLE `grade wise officers`
  ADD PRIMARY KEY (`emp.id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport data`
--
ALTER TABLE `transport data`
  ADD PRIMARY KEY (`emp.id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addweb trainee`
--
ALTER TABLE `addweb trainee`
  MODIFY `sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Art`
--
ALTER TABLE `Art`
  MODIFY `sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `backend department`
--
ALTER TABLE `backend department`
  MODIFY `sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `canteen detail`
--
ALTER TABLE `canteen detail`
  MODIFY `sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `development`
--
ALTER TABLE `development`
  MODIFY `dep.id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee 1`
--
ALTER TABLE `employee 1`
  MODIFY `emp.id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `grade wise officers`
--
ALTER TABLE `grade wise officers`
  MODIFY `emp.id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transport data`
--
ALTER TABLE `transport data`
  MODIFY `emp.id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
