-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2013 at 06:19 PM
-- Server version: 5.5.9
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `com601`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(3) NOT NULL AUTO_INCREMENT,
  `assignment_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` VALUES(1, 'Rich Internet Application Assignment 1 jQuery');
INSERT INTO `assignment` VALUES(2, 'Web Graphics & Animation Assignment 1');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` char(9) DEFAULT NULL,
  `assignment_id` int(3) DEFAULT NULL,
  `comment_body` varchar(1000) DEFAULT NULL,
  `private` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `student_id` (`student_id`),
  KEY `assignment_id` (`assignment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` char(4) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `campus` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` VALUES('', '', '');
INSERT INTO `course` VALUES('ICT', 'Information Communication Technology', 'Jordanstown');
INSERT INTO `course` VALUES('IMD', 'Interactive Multimedia Design', 'Jordanstown');

-- --------------------------------------------------------

--
-- Table structure for table `course_module`
--

CREATE TABLE `course_module` (
  `CRN` int(5) unsigned NOT NULL,
  `course_id` char(4) NOT NULL DEFAULT '',
  KEY `CRN` (`CRN`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_module`
--


-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `CRN` int(5) unsigned NOT NULL,
  `module_name` varchar(100) DEFAULT NULL,
  `module_description` varchar(1000) DEFAULT NULL,
  `year` int(1) DEFAULT NULL,
  PRIMARY KEY (`CRN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` VALUES(61491, 'Web Graphics and Animation', 'Web graphics & animation', 4);
INSERT INTO `module` VALUES(68818, 'Rich Internet Application', 'Something', 4);
INSERT INTO `module` VALUES(71216, 'Major Project', 'Final Year Project for IMD & ICT', 4);

-- --------------------------------------------------------

--
-- Table structure for table `module_assignment`
--

CREATE TABLE `module_assignment` (
  `CRN` int(5) unsigned NOT NULL,
  `assignment_id` int(3) DEFAULT NULL,
  KEY `CRN` (`CRN`),
  KEY `assignment_id` (`assignment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_assignment`
--


-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` char(9) NOT NULL DEFAULT '',
  `title` varchar(4) DEFAULT NULL,
  `forename` varchar(25) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` VALUES('E00112233', 'Mr', 'Peter', 'Nicholl', NULL);
INSERT INTO `staff` VALUES('E00223344', 'Mr', 'Staff', 'Teaching', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` char(9) NOT NULL DEFAULT '',
  `forename` varchar(30) NOT NULL DEFAULT '',
  `surname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL DEFAULT '',
  `course_id` char(4) NOT NULL DEFAULT '',
  PRIMARY KEY (`student_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` VALUES('B00526614', 'Filly', 'Campbell', 'campbell-p15@email.ulster.ac.uk', 'boom', 'IMD');
INSERT INTO `student` VALUES('B00535355', 'Robert', 'McKee', 'mckee-r6@email.ulster.ac.uk', 'boom', 'IMD');
INSERT INTO `student` VALUES('B00560248', 'Chris', 'Marks', 'marks-c1@email.ulster.ac.uk', 'boom', 'IMD');
INSERT INTO `student` VALUES('B00564645', 'Gareth', 'Donaldson', 'donaldson-g4@email.ulster.ac.uk', 'boom', 'IMD');
INSERT INTO `student` VALUES('B00567777', 'Jimmy ', 'Cricket', 'campbell-p15@email.ulster.ac.uk', 'boom', 'ICT');

-- --------------------------------------------------------

--
-- Table structure for table `student_assignment`
--

CREATE TABLE `student_assignment` (
  `student_id` char(9) NOT NULL DEFAULT '',
  `assignment_id` int(3) NOT NULL,
  `feedback_url` varchar(3000) DEFAULT NULL,
  `first_viewed` datetime DEFAULT NULL,
  `last_viewed` datetime DEFAULT NULL,
  `view_count` int(2) DEFAULT NULL,
  KEY `student_id` (`student_id`),
  KEY `assignment_id` (`assignment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_assignment`
--

INSERT INTO `student_assignment` VALUES('B00560248', 1, NULL, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`assignment_id`),
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `course_module`
--
ALTER TABLE `course_module`
  ADD CONSTRAINT `course_module_ibfk_2` FOREIGN KEY (`CRN`) REFERENCES `module` (`CRN`),
  ADD CONSTRAINT `course_module_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `module_assignment`
--
ALTER TABLE `module_assignment`
  ADD CONSTRAINT `module_assignment_ibfk_2` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`assignment_id`),
  ADD CONSTRAINT `module_assignment_ibfk_1` FOREIGN KEY (`CRN`) REFERENCES `module` (`CRN`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `student_assignment`
--
ALTER TABLE `student_assignment`
  ADD CONSTRAINT `student_assignment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `student_assignment_ibfk_2` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`assignment_id`);
