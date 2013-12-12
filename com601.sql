-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2013 at 12:31 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `assignment_name`) VALUES
(1, 'Rich Internet Application Assignment 1 '),
(2, 'Web Graphics & Animation Assignment 1'),
(3, 'Rich Internet Application Assignment 2');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` char(9) DEFAULT NULL,
  `assignment_id` int(3) DEFAULT NULL,
  `comment_body` varchar(1000) DEFAULT NULL,
  `private` tinyint(1) DEFAULT NULL,
  `module_ass` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `assignment_id` (`assignment_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `user_id`, `assignment_id`, `comment_body`, `private`, `module_ass`) VALUES
(1, 'B00560248', 1, 'This is a test', 0, NULL),
(2, 'b00564645', NULL, ' Is dick :) ', NULL, ' COM 602 - Assignment One'),
(3, 'b00564645', NULL, ' iuhouh ', NULL, ' ugug'),
(4, 'b00564645', NULL, ' rab is a tool ', NULL, ' COM 601'),
(5, 'b00564645', NULL, ' kuykhih ', NULL, ' htut');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` char(4) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `campus` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `campus`) VALUES
('ICT', 'Information Communication Technology', 'Jordanstown'),
('IMD', 'Interactive Multimedia Design', 'Jordanstown');

-- --------------------------------------------------------

--
-- Table structure for table `course_module`
--

CREATE TABLE `course_module` (
  `CRN` int(5) unsigned NOT NULL,
  `course_id` char(4) NOT NULL DEFAULT '',
  KEY `CRN` (`CRN`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_module`
--

INSERT INTO `course_module` (`CRN`, `course_id`) VALUES
(61491, 'IMD');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`CRN`, `module_name`, `module_description`, `year`) VALUES
(61491, 'COM602', 'Web Comp Graphics & Animation', 4),
(68818, 'COM601', 'Rich Internet Application Development', 4),
(71216, 'COM533', 'Final Year Project for IMD & ICT', 4);

-- --------------------------------------------------------

--
-- Table structure for table `module_assignment`
--

CREATE TABLE `module_assignment` (
  `CRN` int(5) unsigned NOT NULL,
  `assignment_id` int(3) DEFAULT NULL,
  KEY `CRN` (`CRN`),
  KEY `assignment_id` (`assignment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module_assignment`
--

INSERT INTO `module_assignment` (`CRN`, `assignment_id`) VALUES
(61491, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` char(9) NOT NULL DEFAULT '',
  `forename` varchar(30) NOT NULL DEFAULT '',
  `surname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` char(30) NOT NULL DEFAULT '',
  `course_id` char(4) DEFAULT '',
  `role` varchar(7) NOT NULL DEFAULT '',
  `img_url` varchar(3000) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `forename`, `surname`, `email`, `password`, `course_id`, `role`, `img_url`) VALUES
('B00526614', 'Filly', 'Campbell', 'f@boo.com', 'password', 'IMD', 'student', 'img/avatar1_small.jpg'),
('B00535355', 'Rab', 'McKee', 'r@boo.com', 'password', 'IMD', 'student', 'img/rabhimself.jpg'),
('B00560248', 'Chris', 'Marks', 'c@boo.com', 'password', 'IMD', 'student', 'img/chris.jpg'),
('B00564645', 'Gareth', 'Donaldson', 'g@boo.com', 'password', 'IMD', 'student', 'img/gareth.jpg'),
('E213535', 'Peter', 'Nicholl', 'p@boo.com', 'password', 'IMD', 'staff', 'img/nicholl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_assignment`
--

CREATE TABLE `user_assignment` (
  `user_id` char(9) NOT NULL DEFAULT '',
  `assignment_id` int(3) NOT NULL,
  `feedback_url` varchar(3000) DEFAULT NULL,
  `first_viewed` datetime DEFAULT NULL,
  `last_viewed` datetime DEFAULT NULL,
  `view_count` int(2) DEFAULT NULL,
  `Module` varchar(100) DEFAULT NULL,
  `module_name` varchar(300) DEFAULT NULL,
  `assignment_name` varchar(100) DEFAULT NULL,
  `forname` varchar(30) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `assignment_brief` varchar(100) DEFAULT NULL,
  KEY `assignment_id` (`assignment_id`),
  KEY `user_id` (`user_id`),
  KEY `assignment_name` (`assignment_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_assignment`
--

INSERT INTO `user_assignment` (`user_id`, `assignment_id`, `feedback_url`, `first_viewed`, `last_viewed`, `view_count`, `Module`, `module_name`, `assignment_name`, `forname`, `surname`, `assignment_brief`) VALUES
('B00526614', 1, '<a href="../uploads/b00526614-com601-ass1.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 601', 'Rich Internet Application Development', 'Assignment 1', 'Filly', 'Campbell', '<a href="../uploads/com601-assignmentBrief.pdf" target="_blank">View Brief</a>'),
('B00564645', 2, '<a href="../uploads/b00564645-com601-ass2.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 601', 'Rich Internet Application Development', 'Assignment 2', 'Gareth', 'Donaldson', '<a href="../uploads/com601-assignmentBrief-2.pdf" target="_blank">View Brief</a>'),
('B00564645', 1, '<a href="../uploads/b00564645-com601-ass1.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 601', 'Rich Internet Application Development', 'Assignment 1', 'Gareth', 'Donaldson', '<a href="../uploads/com601-assignmentBrief.pdf" target="_blank">View Brief</a>'),
('B00526614', 2, '<a href="../uploads/b00526614-com601-ass2.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 601', 'Rich Internet Application Development', 'Assignment 2', 'Filly', 'Campbell', '<a href="../uploads/com601-assignmentBrief-2.pdf" target="_blank">View Brief</a>'),
('B00560248', 1, '<a href="../uploads/b00560248-com601-ass1.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 601', 'Rich Internet Application Development', 'Assignment 1', 'Chris', 'Marks', '<a href="../uploads/com601-assignmentBrief.pdf" target="_blank">View Brief</a>'),
('B00560248', 2, '<a href="../uploads/b00560248-com601-ass2.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 601', 'Rich Internet Application Development', 'Assignment 2', 'Chris', 'Marks', '<a href="../uploads/com601-assignmentBrief-2.pdf" target="_blank">View Brief</a>'),
('B00535355', 1, '<a href="../uploads/b00535355-com601-ass1.pdf" target="_blank">View PDF</a>', NULL, NULL, 0, 'COM 601', 'Rich Internet Application Development', 'Assignment 1', 'Rab', 'McKee', '<a href="../uploads/com601-assignmentBrief.pdf" target="_blank">View Brief</a>'),
('B00535355', 2, '<a href="../uploads/b00535355-com601-ass2.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 601', 'Rich Internet Application Development', 'Assignment 2', 'Rab', 'McKee', '<a href="../uploads/com601-assignmentBrief-2.pdf" target="_blank">View Brief</a>'),
('B00535355', 1, '<a href="../uploads/b00535355-com602-ass1.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 602', 'Web Comp Graphics & Animation', 'Assignment 1', 'Rab', 'McKee', '<a href="../uploads/com602-assignmentBrief.pdf" target="_blank">View Brief</a>'),
('B00564645', 2, '<a href="../uploads/b00564645-com602-ass2.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 602', 'Web Comp Graphics & Animation', 'Assignment 2', 'Gareth', 'Donaldson', '<a href="../uploads/com602-assignmentBrief-2.pdf" target="_blank">View Brief</a>'),
('B00564645', 1, '<a href="../uploads/b00564645-com602-ass1.pdf" target="_blank">View PDF</a>', NULL, NULL, 0, 'COM 602', 'Web Comp Graphics & Animation', 'Assignment 1', 'Gareth', 'Donaldson', '<a href="../uploads/com602-assignmentBrief.pdf" target="_blank">View Brief</a>'),
('B00535355', 2, '<a href="../uploads/b00535355-com602-ass2.pdf" target="_blank">View PDF</a>', NULL, NULL, 0, 'COM 602', 'Web Comp Graphics & Animation', 'Assignment 2', 'Rab', 'McKee', '<a href="../uploads/com602-assignmentBrief-2.pdf" target="_blank">View Brief</a>'),
('B00526614', 1, '<a href="../uploads/b00526614-com602-ass1.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 602', 'Web Comp Graphics & Animation', 'Assignment 1', 'Filly', 'Campbell', '<a href="../uploads/com602-assignmentBrief.pdf" target="_blank">View Brief</a>'),
('B00526614', 2, '<a href="../uploads/b00526614-com602-ass2.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 602', 'Web Comp Graphics & Animation', 'Assignment 2', 'Filly', 'Campbell', '<a href="../uploads/com602-assignmentBrief-2.pdf" target="_blank">View Brief</a>'),
('B00560248', 1, '<a href="../uploads/b00560248-com602-ass1.pdf" target="_blank">View PDF</a>', NULL, NULL, 0, 'COM 602', 'Web Comp Graphics & Animation', 'Assignment 1', 'Chris', 'Marks', '<a href="../uploads/com602-assignmentBrief.pdf" target="_blank">View Brief</a>'),
('B00560248', 2, '<a href="../uploads/b00560248-com602-ass2.pdf" target="_blank">View PDF</a>', '2013-11-02 12:00:00', '2013-11-02 12:00:00', 1, 'COM 602', 'Web Comp Graphics & Animation', 'Assignment 2', 'Chris', 'Marks', '<a href="../uploads/com602-assignmentBrief-2.pdf" target="_blank">View Brief</a>');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`assignment_id`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

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
  ADD CONSTRAINT `module_assignment_ibfk_1` FOREIGN KEY (`CRN`) REFERENCES `module` (`CRN`),
  ADD CONSTRAINT `module_assignment_ibfk_2` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`assignment_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `user_assignment`
--
ALTER TABLE `user_assignment`
  ADD CONSTRAINT `user_assignment_ibfk_2` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`assignment_id`),
  ADD CONSTRAINT `user_assignment_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
