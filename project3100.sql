-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2017 at 05:12 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project3100`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `booking_info`
--
CREATE TABLE IF NOT EXISTS `booking_info` (
`Date_to_be_booked` date
,`Catagory` varchar(30)
,`No_of_Rooms` int(3)
,`ID` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `booking_info_fuwang`
--
CREATE TABLE IF NOT EXISTS `booking_info_fuwang` (
`Date_to_be_booked` date
,`Catagory` varchar(30)
,`No_of_Rooms` int(3)
,`ID` int(11)
);
-- --------------------------------------------------------

--
-- Table structure for table `coxinn`
--

CREATE TABLE IF NOT EXISTS `coxinn` (
  `ID` int(11) NOT NULL auto_increment,
  `Date_to_be_booked` date NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `Contact_No` int(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Catagory` varchar(30) NOT NULL,
  `No_of_Rooms` int(3) NOT NULL,
  `Total_Room` int(5) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `coxinn`
--

INSERT INTO `coxinn` (`ID`, `Date_to_be_booked`, `Full_Name`, `Contact_No`, `Gender`, `Address`, `Catagory`, `No_of_Rooms`, `Total_Room`) VALUES
(32, '2016-11-15', 'MEHEDI', 1556789987, 'M', 'CHAPAI NABABGANJ', 'Premium', 5, 20),
(31, '2016-11-15', 'RANA', 1765432654, 'M', 'GAJIPUR', 'Delux Twin', 1, 10),
(30, '2016-11-16', 'MUKTA', 1923456543, 'F', 'MANIKGANJ', 'Regular Twin', 2, 13),
(28, '2016-11-15', 'NAJIFA', 1764534253, 'F', 'SAVAR, DHAKA', 'Premium', 2, 20),
(29, '2016-11-16', 'ERA ISLAM', 1554876542, 'F', 'NAKHALPARA, DHAKA', 'Normal', 4, 20),
(27, '2016-11-15', 'SUMAIYA SUCHI', 286517964, 'F', 'RANGPUR', 'Delux', 1, 15),
(26, '2016-11-15', 'FARIA', 1675345678, 'F', 'ZIGATOLA,DHAKA', 'Delux Twin', 2, 10),
(33, '2016-11-16', 'RABBANI', 1865435432, 'M', 'JOYPURHAT', 'Regular Twin', 3, 13),
(34, '2016-11-16', 'SHOTEZ', 1176544329, 'M', 'TANGAIL', 'Delux', 6, 15),
(35, '2016-11-15', 'BRISTY ME', 1176543646, 'F', 'GAZIPUR', 'Regular', 3, 17),
(36, '2016-11-16', 'AMIL', 1922499910, 'M', 'LALMATIA, DHAKA', 'Premium', 3, 20),
(37, '2016-11-16', 'PROME', 1823456765, 'F', 'CHUWADANGA', 'Delux', 2, 15),
(38, '2016-11-15', 'MOMOTA', 1765436475, 'F', 'CHAPAI NABABGANJ', 'Delux Twin', 4, 10),
(39, '2016-11-16', 'FAHIM', 1670087654, 'M', 'ZIGATOLA, DHAKA', 'Premium', 1, 20),
(40, '2016-11-17', 'Nasif', 1765423456, 'M', 'Noakhali', 'Premium', 3, 20);

-- --------------------------------------------------------

--
-- Stand-in structure for view `customers_info`
--
CREATE TABLE IF NOT EXISTS `customers_info` (
`ID` int(11)
,`Full_Name` varchar(30)
,`Contact_no` int(15)
,`Gender` varchar(10)
,`Address` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `customers_info_fuwang`
--
CREATE TABLE IF NOT EXISTS `customers_info_fuwang` (
`ID` int(11)
,`Full_Name` varchar(30)
,`Contact_no` int(15)
,`Gender` varchar(10)
,`Address` varchar(50)
);
-- --------------------------------------------------------

--
-- Table structure for table `fuwang`
--

CREATE TABLE IF NOT EXISTS `fuwang` (
  `ID` int(11) NOT NULL auto_increment,
  `Date_to_be_booked` date NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `Contact_No` int(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Catagory` varchar(30) NOT NULL,
  `No_of_Rooms` int(3) NOT NULL,
  `Total_Room` int(5) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fuwang`
--

INSERT INTO `fuwang` (`ID`, `Date_to_be_booked`, `Full_Name`, `Contact_No`, `Gender`, `Address`, `Catagory`, `No_of_Rooms`, `Total_Room`) VALUES
(1, '2017-01-19', 'Mukta', 1876542345, 'F', 'Manikgonj', 'Delux', 4, 15),
(2, '2017-01-20', 'Anika ', 1876543132, 'F', 'MitaliRoad', 'Premium', 5, 20),
(3, '2017-01-20', 'ERA ISLAM', 2147483647, 'F', 'Nakhal Para', 'Delux Twin', 3, 10),
(4, '2017-01-19', 'Amil', 1765425364, 'M', 'Lalmatia, Dhaka', 'Delux', 3, 15),
(5, '2017-01-18', 'Nobel', 1654432456, 'M', 'Zigatola', 'Premium', 4, 20),
(6, '2017-01-20', 'Farzana', 2147483647, 'F', 'Chadpur', 'Delux', 3, 15),
(7, '2017-01-18', 'Zahanara', 2147483647, 'F', 'Hatembag', 'Delux Twin', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(3) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'coxinn', 'coxinn123'),
(2, 'fuwang', 'fuwang123'),
(3, 'jhawban', 'jhawban123');

-- --------------------------------------------------------

--
-- Stand-in structure for view `room_info`
--
CREATE TABLE IF NOT EXISTS `room_info` (
`Date_to_be_booked` date
,`Catagory` varchar(30)
,`Total_room` int(5)
,`Available` decimal(33,0)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `room_info_fuwang`
--
CREATE TABLE IF NOT EXISTS `room_info_fuwang` (
`Date_to_be_booked` date
,`Catagory` varchar(30)
,`Total_room` int(5)
,`Available` decimal(33,0)
);
-- --------------------------------------------------------

--
-- Structure for view `booking_info`
--
DROP TABLE IF EXISTS `booking_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project3100`.`booking_info` AS select `project3100`.`coxinn`.`Date_to_be_booked` AS `Date_to_be_booked`,`project3100`.`coxinn`.`Catagory` AS `Catagory`,`project3100`.`coxinn`.`No_of_Rooms` AS `No_of_Rooms`,`project3100`.`coxinn`.`ID` AS `ID` from `project3100`.`coxinn` order by `project3100`.`coxinn`.`Date_to_be_booked`,`project3100`.`coxinn`.`ID`;

-- --------------------------------------------------------

--
-- Structure for view `booking_info_fuwang`
--
DROP TABLE IF EXISTS `booking_info_fuwang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project3100`.`booking_info_fuwang` AS select `project3100`.`fuwang`.`Date_to_be_booked` AS `Date_to_be_booked`,`project3100`.`fuwang`.`Catagory` AS `Catagory`,`project3100`.`fuwang`.`No_of_Rooms` AS `No_of_Rooms`,`project3100`.`fuwang`.`ID` AS `ID` from `project3100`.`fuwang`;

-- --------------------------------------------------------

--
-- Structure for view `customers_info`
--
DROP TABLE IF EXISTS `customers_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project3100`.`customers_info` AS select `project3100`.`coxinn`.`ID` AS `ID`,`project3100`.`coxinn`.`Full_Name` AS `Full_Name`,`project3100`.`coxinn`.`Contact_No` AS `Contact_no`,`project3100`.`coxinn`.`Gender` AS `Gender`,`project3100`.`coxinn`.`Address` AS `Address` from `project3100`.`coxinn` order by `project3100`.`coxinn`.`ID`;

-- --------------------------------------------------------

--
-- Structure for view `customers_info_fuwang`
--
DROP TABLE IF EXISTS `customers_info_fuwang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project3100`.`customers_info_fuwang` AS select `project3100`.`fuwang`.`ID` AS `ID`,`project3100`.`fuwang`.`Full_Name` AS `Full_Name`,`project3100`.`fuwang`.`Contact_No` AS `Contact_no`,`project3100`.`fuwang`.`Gender` AS `Gender`,`project3100`.`fuwang`.`Address` AS `Address` from `project3100`.`fuwang`;

-- --------------------------------------------------------

--
-- Structure for view `room_info`
--
DROP TABLE IF EXISTS `room_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project3100`.`room_info` AS select `project3100`.`coxinn`.`Date_to_be_booked` AS `Date_to_be_booked`,`project3100`.`coxinn`.`Catagory` AS `Catagory`,`project3100`.`coxinn`.`Total_Room` AS `Total_room`,(`project3100`.`coxinn`.`Total_Room` - sum(`project3100`.`coxinn`.`No_of_Rooms`)) AS `Available` from `project3100`.`coxinn` group by `project3100`.`coxinn`.`Date_to_be_booked`,`project3100`.`coxinn`.`Catagory`;

-- --------------------------------------------------------

--
-- Structure for view `room_info_fuwang`
--
DROP TABLE IF EXISTS `room_info_fuwang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project3100`.`room_info_fuwang` AS select `project3100`.`fuwang`.`Date_to_be_booked` AS `Date_to_be_booked`,`project3100`.`fuwang`.`Catagory` AS `Catagory`,`project3100`.`fuwang`.`Total_Room` AS `Total_room`,(`project3100`.`fuwang`.`Total_Room` - sum(`project3100`.`fuwang`.`No_of_Rooms`)) AS `Available` from `project3100`.`fuwang` group by `project3100`.`fuwang`.`Date_to_be_booked`,`project3100`.`fuwang`.`Catagory`;
