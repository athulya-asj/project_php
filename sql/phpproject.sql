-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 03:13 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `fact_applyleave`
--

CREATE TABLE `fact_applyleave` (
  `name` varchar(20) NOT NULL,
  `todate` date NOT NULL,
  `leavereason` varchar(40) NOT NULL,
  `fromdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fact_applyleave`
--

INSERT INTO `fact_applyleave` (`name`, `todate`, `leavereason`, `fromdate`) VALUES
('amitha', '2020-01-03', '', '0000-00-00'),
('amitha', '2020-01-03', '', '2020-01-04'),
('amitha', '2020-01-03', '', '2020-01-04'),
('vijith', '2020-01-03', '', '2020-01-09'),
('vijith', '2020-01-03', '', '2020-01-09'),
('', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `factid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `mobile` int(11) NOT NULL,
  `assigned_batch` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`factid`, `name`, `address`, `dob`, `gender`, `qualification`, `mobile`, `assigned_batch`, `username`, `password`) VALUES
(1001, 'john', 'john villa', '1987-07-09', 'male', 'BSC,MSC', 2147483647, 'FS', 'john', 'john'),
(1002, 'amitha', 'amitha', '1989-03-30', 'female', 'MCA', 934576364, 'JSD2', 'amitha', 'amitha'),
(1003, 'vijith', 'v&j house', '1985-06-02', 'male', 'BTECH EC', 987654321, 'UI', 'vijith', 'vijith');

-- --------------------------------------------------------

--
-- Table structure for table `facultys`
--

CREATE TABLE `facultys` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultys`
--

INSERT INTO `facultys` (`username`, `password`) VALUES
('gaana', 'gaana'),
('amitha', 'amitha'),
('vijith', 'vijith'),
('john', 'john'),
('gayathri', 'gayathri');

-- --------------------------------------------------------

--
-- Table structure for table `std_applyleave`
--

CREATE TABLE `std_applyleave` (
  `name` varchar(20) NOT NULL,
  `to_` varchar(20) NOT NULL,
  `leavereason` varchar(30) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_applyleave`
--

INSERT INTO `std_applyleave` (`name`, `to_`, `leavereason`, `fromdate`, `todate`) VALUES
('joncy', '', 'fever', '2020-01-03', '2020-01-08'),
('joncy', '', 'fever', '2020-01-03', '2020-01-08'),
('joncy', '', 'fever', '2020-01-03', '2020-01-08'),
('joncy', 'amitha', 'fever', '2020-01-02', '2020-01-07'),
('abhirami', 'gana', 'fever', '2020-01-03', '2020-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `std_attendance`
--

CREATE TABLE `std_attendance` (
  `date` date NOT NULL,
  `stdid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `hr1status` varchar(20) NOT NULL,
  `hr2status` varchar(20) NOT NULL,
  `hr3status` varchar(20) NOT NULL,
  `hr4status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_attendance`
--

INSERT INTO `std_attendance` (`date`, `stdid`, `name`, `hr1status`, `hr2status`, `hr3status`, `hr4status`) VALUES
('2020-01-02', 1001, 'athulya', 'present', 'present', 'present', 'present'),
('2020-01-14', 1002, 'abhirami', 'absent', 'present', 'absent', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `std_mark`
--

CREATE TABLE `std_mark` (
  `stdid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `assessment` int(11) NOT NULL,
  `submark1` int(11) NOT NULL,
  `submark2` int(11) NOT NULL,
  `submark3` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_mark`
--

INSERT INTO `std_mark` (`stdid`, `name`, `assessment`, `submark1`, `submark2`, `submark3`, `percentage`) VALUES
(1001, 'athulya', 1, 50, 50, 50, 100),
(1002, 'abhirami', 2, 40, 40, 45, 70);

-- --------------------------------------------------------

--
-- Table structure for table `std_register`
--

CREATE TABLE `std_register` (
  `stdid` int(11) NOT NULL,
  `admno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `admdate` int(11) NOT NULL,
  `guardian` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_register`
--

INSERT INTO `std_register` (`stdid`, `admno`, `name`, `address`, `dob`, `gender`, `mobile`, `admdate`, `guardian`, `batch`, `username`, `password`) VALUES
(0, 1231, 'abhirami', 'abhi', '1997-03-12', 'female', 2147483647, 2020, 'raman', 'jsd1', 'abhirami', 'abhirami'),
(1002, 1232, 'ajumal', 'ajumal nivas', '1995-02-22', 'male', 2147483647, 2020, 'muhammed', 'jsd1', 'ajumal', 'ajumal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`factid`);

--
-- Indexes for table `std_mark`
--
ALTER TABLE `std_mark`
  ADD PRIMARY KEY (`stdid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
