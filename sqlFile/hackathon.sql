-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2015 at 09:07 PM
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
  `github_profile` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`dev_id`, `name`, `github_profile`) VALUES
(1, 'Mahesh Haldar', 'http://githuben.intranet.mckinsey.com/mahesh-kumar-haldar'),
(2, 'Akshit Meghawat', 'http://githuben.intranet.mckinsey.com/akshit-meghawat'),
(3, 'Abhinav', 'abhinav.git'),
(4, 'Apurva', 'Apurva.git');

-- --------------------------------------------------------

--
-- Table structure for table `developer_project_map`
--

CREATE TABLE IF NOT EXISTS `developer_project_map` (
`id` int(11) NOT NULL,
  `dev_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developer_project_map`
--

INSERT INTO `developer_project_map` (`id`, `dev_id`, `project_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 6),
(4, 4, 7),
(7, 1, 10),
(8, 1, 11),
(9, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `login`, `password`, `type`) VALUES
(1, 'shweta', 'admin', 'admin'),
(2, 'mahesh', 'mahesh', 'dev');

-- --------------------------------------------------------

--
-- Table structure for table `po_list`
--

CREATE TABLE IF NOT EXISTS `po_list` (
`po_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_list`
--

INSERT INTO `po_list` (`po_id`, `name`) VALUES
(1, 'Mukul'),
(2, 'VIshnu'),
(3, 'samarth'),
(4, 'Rohit'),
(5, 'Sam');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`project_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `name`, `start_day`, `end_day`, `description`) VALUES
(1, 'Pharm M & A', '2015-05-06', '2015-05-01', 'this is sample project'),
(2, 'LEG', '2015-05-07', '2015-05-01', 'sample'),
(3, 'test', '2015-01-07', '2015-06-06', 'asdasd'),
(6, 'masnd', '2015-02-02', '2016-02-02', 'asd'),
(7, 'masnd', '2015-04-28', '2015-04-30', 'asd'),
(8, 'asdas', '2015-04-29', '2015-05-21', 'asd'),
(9, 'masnd', '2015-05-05', '2015-05-21', ''),
(10, 'masnd', '2015-05-05', '2015-05-21', 'asd'),
(11, 'masnd', '2015-04-27', '2015-05-14', 'asd'),
(12, '', '2015-04-28', '2015-05-13', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `project_po_map`
--

CREATE TABLE IF NOT EXISTS `project_po_map` (
`id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_po_map`
--

INSERT INTO `project_po_map` (`id`, `po_id`, `project_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 6),
(4, 5, 7),
(8, 1, 11),
(9, 1, 12);

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
MODIFY `dev_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `developer_project_map`
--
ALTER TABLE `developer_project_map`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `po_list`
--
ALTER TABLE `po_list`
MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `project_po_map`
--
ALTER TABLE `project_po_map`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
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
