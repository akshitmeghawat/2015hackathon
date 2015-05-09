-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2015 at 05:25 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE IF NOT EXISTS `developers` (
`dev_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `github_profile` text NOT NULL,
  `tech` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`dev_id`, `name`, `github_profile`, `tech`) VALUES
(5, 'Aditi Joshi', 'https://github.com/Aditi', 'rails, html, css'),
(6, 'Mahesh Kumar', 'https://github.com/mahesh', 'rails, coffescript'),
(7, 'Akshit Meghawat', 'https://github.com/akshit', 'angularjs, html, css'),
(8, 'Apurva Jain', 'https://github.com/apurva', 'rails, html, css, angularjs'),
(9, 'Kakul Gupta', 'https://github.com/kakul', 'angularjs, html, css'),
(10, 'Abhimanyu Arya', 'https://github.com/abhimanyu', 'ios, html, css, objectivec'),
(11, 'Niket Jain', 'https://github.com/niket', 'ios, objectivec, html, css'),
(12, 'Atul ', 'https://github.com/atul', 'angularjs, html, css'),
(13, 'Mayanka', 'https://github.com/mayanka', 'angularjs, canvas'),
(14, 'Meenakshi', 'https://github.com/meenakshi', 'ios, html, css'),
(15, 'Vineetha', 'https://github.com/vineetha', 'photoshop, html, css');

-- --------------------------------------------------------

--
-- Table structure for table `developer_project_map`
--

CREATE TABLE IF NOT EXISTS `developer_project_map` (
`id` int(11) NOT NULL,
  `dev_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `tech` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developer_project_map`
--

INSERT INTO `developer_project_map` (`id`, `dev_id`, `project_id`, `tech`) VALUES
(10, 9, 13, 'null'),
(11, 7, 14, 'null'),
(12, 6, 15, 'null'),
(13, 5, 16, 'null'),
(14, 11, 16, 'null'),
(15, 15, 17, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `login`, `password`, `type`) VALUES
(3, 'admin', 'password', 'admin'),
(4, 'developer', 'developer', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `po_list`
--

CREATE TABLE IF NOT EXISTS `po_list` (
`po_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_list`
--

INSERT INTO `po_list` (`po_id`, `name`) VALUES
(6, 'Mukul'),
(7, 'Aditi'),
(8, 'Aditya'),
(9, 'Manav'),
(10, 'Swati'),
(11, 'Krutika'),
(12, 'Rakshit');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`project_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `description` text NOT NULL,
  `tech` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `name`, `start_day`, `end_day`, `description`, `tech`) VALUES
(13, 'MB RMA', '2015-04-29', '2015-05-15', 'sample description', 'canvas, html, css'),
(14, 'Insurance Analyser', '2015-04-24', '2015-05-28', 'lorem ipsum', 'rails, html, css'),
(15, 'Pharma', '2015-05-05', '2015-05-11', 'lorem ipsum', 'canvas, angularjs, html, css'),
(16, 'ABC Insurance', '2015-05-05', '2015-05-10', 'lorem ipsum', 'rails, html, css'),
(17, 'Project Checklist', '2015-05-01', '2015-05-05', 'lorem ipsum', 'php, html, css');

-- --------------------------------------------------------

--
-- Table structure for table `project_po_map`
--

CREATE TABLE IF NOT EXISTS `project_po_map` (
`id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_po_map`
--

INSERT INTO `project_po_map` (`id`, `po_id`, `project_id`) VALUES
(14, 6, 13),
(15, 12, 14),
(16, 8, 15),
(17, 10, 16),
(18, 11, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tech_skills`
--

CREATE TABLE IF NOT EXISTS `tech_skills` (
`tech_skills_id` int(11) NOT NULL,
  `skill` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_skills`
--

INSERT INTO `tech_skills` (`tech_skills_id`, `skill`) VALUES
(1, 'Java'),
(2, 'Ruby');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
 ADD PRIMARY KEY (`dev_id`);

--
-- Indexes for table `developer_project_map`
--
ALTER TABLE `developer_project_map`
 ADD PRIMARY KEY (`id`), ADD KEY `project_id_2` (`project_id`), ADD KEY `dev_id` (`dev_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_list`
--
ALTER TABLE `po_list`
 ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_po_map`
--
ALTER TABLE `project_po_map`
 ADD PRIMARY KEY (`id`), ADD KEY `po_id` (`po_id`), ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `tech_skills`
--
ALTER TABLE `tech_skills`
 ADD PRIMARY KEY (`tech_skills_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
MODIFY `dev_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `developer_project_map`
--
ALTER TABLE `developer_project_map`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `po_list`
--
ALTER TABLE `po_list`
MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `project_po_map`
--
ALTER TABLE `project_po_map`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tech_skills`
--
ALTER TABLE `tech_skills`
MODIFY `tech_skills_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `developer_project_map`
--
ALTER TABLE `developer_project_map`
ADD CONSTRAINT `developer_project_map_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`),
ADD CONSTRAINT `developer_project_map_ibfk_3` FOREIGN KEY (`dev_id`) REFERENCES `developers` (`dev_id`);

--
-- Constraints for table `project_po_map`
--
ALTER TABLE `project_po_map`
ADD CONSTRAINT `project_po_map_ibfk_1` FOREIGN KEY (`po_id`) REFERENCES `po_list` (`po_id`),
ADD CONSTRAINT `project_po_map_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
