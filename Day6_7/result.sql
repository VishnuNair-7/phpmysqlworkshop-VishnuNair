-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 06:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `a_email` varchar(80) NOT NULL,
  `pwd` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `a_email`, `pwd`) VALUES
(1, 'nvishnu41@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `creds`
--

CREATE TABLE `creds` (
  `id` int(11) NOT NULL,
  `emailid` varchar(80) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creds`
--

INSERT INTO `creds` (`id`, `emailid`, `pwd`) VALUES
(1, 'vishnunair08@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(2, 'riddhishaharkar07@gmail.com', '412fa0873b92e62e728bded90b5c86fa'),
(3, 'shrutipatel09@gmail.com', '97ac82a5b825239e782d0339e2d7b910'),
(6, 'siddhijain06@gmail.com', '7d65a8aae41aed0d57ff34eb1af481ab'),
(7, 'arjunpatil04@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `emailid` varchar(80) NOT NULL,
  `PHP` int(11) NOT NULL,
  `MySQL` int(11) NOT NULL,
  `HTML` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `name`, `emailid`, `PHP`, `MySQL`, `HTML`) VALUES
(1, 'Shreyas Kumar', 'shreyaskumar01@gmail.com', 62, 81, 91),
(2, 'Rishikesh Mhatre', 'rishikeshmhatre02@gmail.com', 51, 45, 77),
(3, 'Nandini Pillai', 'nandinipillai03@gmail.com', 76, 73, 86),
(4, 'Arjun Patil', 'arjunpatil04@gmail.com', 55, 63, 72),
(5, 'Isha Jain', 'ishajain05@gmail.com', 42, 40, 61),
(6, 'Siddhi Jain', 'siddhijain06@gmail.com', 84, 85, 86),
(7, 'Riddhi Shaharkar', 'riddhishaharkar07@gmail.com', 84, 88, 96),
(8, 'Vishnu Nair', 'vishnunair08@gmail.com', 84, 88, 96),
(9, 'Shruti Patel', 'shrutipatel09@gmail.com', 46, 53, 75),
(10, 'Sharayu Bhavsar', 'sharayubhavsar10@gmail.com', 77, 70, 83),
(11, 'Shreya Pandey', 'shreyapandey11@gmail.com', 83, 79, 91),
(12, 'Dhiraj Patil', 'dhirajpatil12@gmail.com', 62, 54, 70),
(13, 'Bhavesh Nemade', 'bhaveshnemade13@gmail.com', 40, 38, 45),
(14, 'Sakshi Singh', 'sakshisingh14@gmail.com', 80, 85, 90),
(16, '', '', 83, 84, 85),
(17, 'Ram Iyer', 'ramiyer15@gmail.com', 0, 0, 0),
(18, '', '', 83, 85, 86),
(19, 'Mukul S.', 'mukul16@gmail.com', 62, 60, 71);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstnames` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstnames`, `surname`, `email`) VALUES
(1, 'Shreyas', 'Kumar', 'shreyaskumar01@gmail.com'),
(2, 'Rishikesh', 'Mhatre', 'rishikeshmhatre02@gmail.com'),
(3, 'Nandini', 'Pillai', 'nandinipillai03@gmail.com'),
(4, 'Arjun', 'Patil', 'arjunpatil04@gmail.com'),
(5, 'Isha', 'Jain', 'ishajain05@gmail.com'),
(6, 'Siddhi', 'Jain', 'siddhijain06@gmail.com'),
(7, 'Riddhi', 'Shaharkar', 'riddhishaharkar07@gmail.com'),
(8, 'Vishnu', 'Nair', 'vishnunair08@gmail.com'),
(9, 'Shruti', 'Patel', 'shrutipatel09@gmail.com'),
(10, 'Sharayu', 'Bhavsar', 'sharayubhavsar10@gmail.com'),
(11, 'Shreya', 'Pandey', 'shreyapandey11@gmail.com'),
(12, 'Dhiraj', 'Patil', 'dhirajpatil12@gmail.com'),
(13, 'Bhavesh', 'Nemade', 'bhaveshnemade13@gmail.com'),
(14, 'Sakshi', 'Singh', 'sakshisingh14@gmail.com'),
(17, 'Ram', 'Iyer', 'ramiyer15@gmail.com'),
(19, 'Mukul', 'S.', 'mukul16@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creds`
--
ALTER TABLE `creds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `creds`
--
ALTER TABLE `creds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
