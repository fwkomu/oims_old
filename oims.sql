-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 05:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oims`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `checked` tinyint(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `DATE` date NOT NULL,
  `ENTRY` text NOT NULL,
  PRIMARY KEY (`DATE`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`checked`, `username`, `DATE`, `ENTRY`) VALUES
(0, 'frank', '2017-10-18', 'Testing of input today'),
(0, 'frank', '2017-10-19', '1 smiling student on his way to graduation'),
(0, 'frank', '2017-10-20', '1 smiling student on his way to graduation'),
(0, 'frank', '2017-10-25', '1 smiling student on his way to graduation');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `menu_name` varchar(30) NOT NULL,
  `position` int(3) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `subject_id`, `menu_name`, `position`, `visible`, `content`) VALUES
(1, 1, 'Our Mission', 1, 1, 'Our mission has always been to provide the best photography, design and marketing services.'),
(2, 1, 'Our History', 2, 1, 'Sorely founded in 2016 by Francis Wambugu'),
(3, 2, 'Edit logs', 1, 1, 'Mon-Fri'),
(4, 2, 'Summary', 2, 1, 'All month...'),
(5, 3, 'Trainer', 1, 1, 'Trainer...'),
(6, 3, 'Supervisor', 2, 1, 'Supervisor...'),
(7, 1, 'About OIMS', 3, 1, 'OIMS is an acronym that stands for Online Internship Management System. This system is meant to assist the student keep a record of field activities. It will show the organization in which the student has worked on attachment and the period of time spent in that organization.\r\n\r\nDAILY REPORT\r\nThe student should record clearly the work done on each day during the period of attachment. Students are required to present their logs periodically to the lecturer/supervisor for assessment of content and progress. The lecturer/supervisor can use any part for his/her comment where necessary.\r\n\r\nREPORT WRITING\r\nAt the end of the attachment exercise, a student is expected to write a report on the experiences acquired during the attachment. The organization of the report should take the following format:\r\na)Introduction\r\nb)Mainframe of report\r\n   •General description of the organization and departments where attached\r\n   •General activities undertaken in the organization\r\n   •Specific activities undertaken during attachment\r\n   •A profile in skills and competencies gained\r\n   •Activities in which the student applied his/her skills for the benefit of the organization\r\nc)Analysis, observations and critique\r\nd)Summary and conclusions\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `username` varchar(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `ID` int(10) NOT NULL,
  `gender` binary(6) NOT NULL,
  `DOB` date NOT NULL,
  `PA` varchar(15) NOT NULL,
  `PC` int(10) NOT NULL,
  `town` varchar(10) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kin` varchar(30) NOT NULL,
  `Relationship` varchar(10) NOT NULL,
  `ktel` varchar(20) NOT NULL,
  `School` varchar(50) NOT NULL,
  `SPA` varchar(15) NOT NULL,
  `SPC` int(10) NOT NULL,
  `Stown` varchar(10) NOT NULL,
  `Stel` varchar(20) NOT NULL,
  `Semail` varchar(30) NOT NULL,
  `Dept` varchar(40) NOT NULL,
  `HOD` varchar(30) NOT NULL,
  `CC` varchar(10) NOT NULL,
  `Company` varchar(40) NOT NULL,
  `CPA` varchar(10) NOT NULL,
  `CPC` int(10) NOT NULL,
  `Ctown` varchar(10) NOT NULL,
  `Ctel` varchar(20) NOT NULL,
  `Cemail` varchar(30) NOT NULL,
  `trainer` varchar(40) NOT NULL,
  `position` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`username`, `name`, `ID`, `gender`, `DOB`, `PA`, `PC`, `town`, `tel`, `email`, `kin`, `Relationship`, `ktel`, `School`, `SPA`, `SPC`, `Stown`, `Stel`, `Semail`, `Dept`, `HOD`, `CC`, `Company`, `CPA`, `CPC`, `Ctown`, `Ctel`, `Cemail`, `trainer`, `position`) VALUES
('frank', 'Frank', 31346714, '\0\0\0\0\0\0', '0000-00-00', '39376', 623, 'Nairobi', '0705513035', 'fwkomu@gmail.com', 'Gits', 'Brother', '0723261621', 'The Catholic University Of Eastern Africa', '00000', 0, 'Nairobi', '0700000000', 'cuea@gmail.com', 'Maths', 'Mirugi', 'CMT', 'Ipsos', '5525', 52, 'Nairobi', '0755454545', 'ipsos@gmail.com', 'Abedi', 'IT manager');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(30) NOT NULL,
  `position` int(3) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `menu_name`, `position`, `visible`) VALUES
(1, 'About Zaidi Creatives', 1, 1),
(2, 'Logs', 2, 1),
(3, 'Ratings', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(60) NOT NULL,
  `user_role` varchar(10) NOT NULL DEFAULT 'student',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `hashed_password`, `user_role`) VALUES
('Abedi', '$2y$10$MzQzYTlhNzhlOWFkNGI2YOsDuc1UvnfvnrNePb3g7G.9J5a7n77pm', 'trainer'),
('frank', '$2y$10$MTk5ODU0ZmJhYTgyMjE1Z.pVuXu2uiQTJyK5oGJM6YSY2DTjAu.7W', 'admin'),
('Kioko', '$2y$10$YjkwYzFhZmY1ODNjODFkMO8WoTBlmtVJjuazquEjZQbPDKpjBURB.', 'supervisor'),
('Komu', '$2y$10$OGRkMjliM2RiZGI2MzdiZe2dv6TLAhqElhqzlUI1tHGugh9aUdL5q', 'student'),
('Sironic', '$2y$10$MjIxZjY1ZjZjYTMyZWZjMOJp2C6lVG5ujQkQYap0R39ZXWJ9Chlw6', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
