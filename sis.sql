-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2018 at 12:15 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details`
--

DROP TABLE IF EXISTS `academic_details`;
CREATE TABLE IF NOT EXISTS `academic_details` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `college_year` varchar(255) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_cgpa` double NOT NULL,
  `tename` varchar(255) NOT NULL,
  `teboard` varchar(255) NOT NULL,
  `teyear` varchar(255) NOT NULL,
  `tecgpa` double NOT NULL,
  `twelve_name` varchar(255) NOT NULL,
  `twelve_board` varchar(255) NOT NULL,
  `twelve_year` varchar(255) NOT NULL,
  `twelve_cgpa` double NOT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `reg_no_2` (`reg_no`),
  KEY `reg_no` (`reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_details`
--

INSERT INTO `academic_details` (`aid`, `reg_no`, `dept`, `roll`, `programme`, `sem`, `college_year`, `college_name`, `college_cgpa`, `tename`, `teboard`, `teyear`, `tecgpa`, `twelve_name`, `twelve_board`, `twelve_year`, `twelve_cgpa`) VALUES
(1, '20150132', 'IT', '12', 'B.TECH', '6th', '2019', 'nit dgp', 7, 'rns', 'icse', '2013', 85, 'pvm', 'isc', '2015', 86),
(3, '20150111', 'IT', '10', 'B.TECH', '5th', '2019', 'national institute of technology durgapur', 8, 'xyz', 'wb', '2013', 85, 'xxyyzz', 'isc', '2015', 90),
(4, '20140132', 'IT', '3', 'B.TECH', '6th', '2019', 'nit durgapur', 8, 'hwh ka koi school', 'icse', '2013', 90, 'ags', 'isc', '2015', 90),
(5, '20150144', 'IT', '12', 'B.TECH', '-1', '2019', 'nit dgp', 7, 'rns', 'icse', '2013', 85, 'pvm', 'isc', '2015', 86),
(6, '20150195', 'IT', '8', 'B.TECH', '6th', '2019', 're college', 8, 'dum dum airport school', 'wb', '2013', 85, 'dum dum airport school', 'wb', '2015', 85);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` int(10) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(255) NOT NULL,
  `adminpassword` varchar(255) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `adminname`, `adminpassword`) VALUES
(1, 'dd', '123456'),
(3, 'admin', '000000'),
(5, 'new admin', '321654'),
(6, 'newadd', '321654');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

DROP TABLE IF EXISTS `personal_details`;
CREATE TABLE IF NOT EXISTS `personal_details` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `bg` varchar(5) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `cadd` varchar(255) NOT NULL,
  `cpin` varchar(255) NOT NULL,
  `cstate` varchar(255) NOT NULL,
  `ccoun` varchar(255) NOT NULL,
  `padd` varchar(255) NOT NULL,
  `ppin` varchar(255) NOT NULL,
  `pstate` varchar(255) NOT NULL,
  `pcoun` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `hobbyextra` varchar(255) NOT NULL,
  `eac` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `reg_no_2` (`reg_no`),
  KEY `reg_no` (`reg_no`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`pid`, `reg_no`, `fname`, `mname`, `lname`, `gname`, `dob`, `age`, `email`, `phone`, `bg`, `gender`, `caste`, `cadd`, `cpin`, `cstate`, `ccoun`, `padd`, `ppin`, `pstate`, `pcoun`, `hobby`, `hobbyextra`, `eac`) VALUES
(2, '20150132', 'sahil', '.', 'jaiswal', 'satish jaiswal', '1996-11-13', 22, 'sahil131196@gmail.com', '9836286146', 'B+', 'male', 'OBC', '225 shyamnagar road', '700055', 'west', 'india', '225 shyamnagar road', '700055', 'west', 'india', 'Reading,Singing,Dancing', 'sleeping', 'quiz'),
(3, '20150111', 'Shreya', '', 'De', 'something', '2018-03-09', 1, 'deshreya@gmail.com', '9874563210', 'AB+', 'Female', 'SC', 'dont know, somewhere in kolkata', '700009', 'west bengal', 'india', 'hall 13 nit dgp', '713209', 'west bengal', 'india', 'Reading,Singing,Dancing,', '', 'none'),
(4, '20140132', 'anand', 'amazon', 'jhunjhunwala', 'xyz jhunjhunwala', '2018-03-16', 1, 'anand13696@gmail.com', '9874563210', 'AB+', 'male', 'GEN', 'howrah', '700061', 'west bengal', 'india', 'howrah', '700061', 'west bengal', 'india', 'Reading,Singing,Dancing,coding', '', 'nothing'),
(6, '20150133', 'yogesh', 'maadu ', 'todi', 'xyz todi', '2018-03-03', 1, 'yogesh98@gmail.com', '9874563210', 'B+', 'male', 'GEN', 'bangur, jessore road', '700056', 'west bengal', 'india', 'hall 3 room 219, nit dgp', '713209', 'west bengal', 'india', 'Reading,Singing,Dancing,series', '', 'counter strike'),
(7, '20150144', 'vikas', 'kumar', 'singh', 'satish kumar', '1995-12-28', 22, 'vikas95@gmail.com', '9874563210', 'B+', 'male', 'OBC', 'new alipore', '700045', 'west bengal', 'india', 'new alipore', '700045', 'west bengal', 'india', 'Reading,Singing,Dancing', 'gaming', 'volleyball'),
(8, '20150195', 'akash', 'kr', 'mishra', 'abc', '1997-11-06', 22, 'akash123@gmail.com', '7896541230', 'B+', 'male', 'OBC', 'sdfghjkl', '700032', 'west bengal', 'india', 'sdfghjkl', '700032', 'west bengal', 'india', 'Reading,Singing,Dancing', '', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reg_no_2` (`reg_no`),
  KEY `reg_no` (`reg_no`),
  KEY `username` (`username`),
  KEY `password` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `reg_no`, `phone`, `username`, `password`) VALUES
(35, '20150132', '9836286146', 'sahil1311', 'bd28ec3c0d87500c1e869a55ed75256f'),
(36, '20150111', '9874563210', 'shreya', '670b14728ad9902aecba32e22fa4f6bd'),
(37, '20150100', '9836286146', 'lihas', '14e1b600b1fd579f47433b88e8d85291'),
(42, '20153210', '9632587410', 'abcde', '670b14728ad9902aecba32e22fa4f6bd'),
(43, '20152222', '8965230147', 'jazzy', '670b14728ad9902aecba32e22fa4f6bd'),
(44, '20140132', '9874563210', 'anand', 'e3ceb5881a0a1fdaad01296d7554868d'),
(45, '20150133', '9876541230', 'yogesh', '670b14728ad9902aecba32e22fa4f6bd'),
(46, '20150144', '9051501325', 'vikas', '670b14728ad9902aecba32e22fa4f6bd'),
(47, '20150195', '7896541230', 'akash123', '670b14728ad9902aecba32e22fa4f6bd'),
(48, '20136541', '7896541230', 'testuser', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `registrationrequest`
--

DROP TABLE IF EXISTS `registrationrequest`;
CREATE TABLE IF NOT EXISTS `registrationrequest` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `reg_no` (`reg_no`),
  KEY `password` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationrequest`
--

INSERT INTO `registrationrequest` (`id`, `reg_no`, `phone`, `username`, `password`) VALUES
(7, '20136542', '8975642310', 'testuser2', 'd553d148479a268914cecb77b2b88e6a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
