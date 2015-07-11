-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2015 at 05:51 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Implementation_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `activity_id` int(11) NOT NULL,
  `activity_name` varchar(30) NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activity_id`, `activity_name`) VALUES
(1, 'Site Preparation'),
(2, 'Soil Preparation'),
(3, 'Concrete Bed Layer'),
(4, 'Reinforced Concrete'),
(5, 'Brick Walls'),
(6, 'Finishes - Walls'),
(7, 'Finishes - Ceilings'),
(8, 'Finishes - Floors'),
(9, 'Doors - Carpentry'),
(10, 'Finishes - Windows'),
(11, 'Locksmith work'),
(12, 'Glass for Windows'),
(13, 'Internal painting'),
(14, 'Electrical work'),
(15, 'Electrical appliances'),
(16, 'Sink and water plumbing'),
(17, 'External walls painting'),
(18, 'Plaque install'),
(111, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `activity_photo`
--

CREATE TABLE IF NOT EXISTS `activity_photo` (
  `proj_act_id` varchar(30) NOT NULL,
  `image_filename` varchar(400) NOT NULL,
  KEY `proj_act_id` (`proj_act_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `activity_tracking`
--

CREATE TABLE IF NOT EXISTS `activity_tracking` (
  `proj_act_id` varchar(30) NOT NULL,
  `completed_percentage` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `proj_act_id` (`proj_act_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_tracking`
--

INSERT INTO `activity_tracking` (`proj_act_id`, `completed_percentage`, `date`) VALUES
('1-1', 25, '2015-04-01 00:00:00'),
('1-1', 50, '2015-04-15 00:00:00'),
('1-1', 100, '2015-04-30 00:00:00'),
('1-2', 10, '2015-05-05 00:00:00'),
('1-2', 60, '2015-05-20 00:00:00'),
('1-2', 100, '2015-05-25 00:00:00'),
('1-3', 100, '2015-05-30 00:00:00'),
('1-4', 40, '2015-06-05 00:00:00'),
('1-4', 100, '2015-06-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `budget_tracking`
--

CREATE TABLE IF NOT EXISTS `budget_tracking` (
  `project_id` varchar(30) NOT NULL,
  `budget_consumed` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget_tracking`
--

INSERT INTO `budget_tracking` (`project_id`, `budget_consumed`, `date`) VALUES
('1', 25000, '2015-06-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `user_id` varchar(30) NOT NULL,
  `project_id` varchar(30) NOT NULL,
  `currency` varchar(30) NOT NULL,
  `donation` int(11) NOT NULL,
  `usd_eqvt` int(11) NOT NULL,
  `donation_date` date NOT NULL,
  KEY `user_id` (`user_id`,`project_id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`user_id`, `project_id`, `currency`, `donation`, `usd_eqvt`, `donation_date`) VALUES
('dexter', '1', 'Rs', 3168, 50, '2015-03-01'),
('merilyn', '1', 'Rs', 6337, 100, '2015-02-01'),
('evan', '1', 'USD', 500, 500, '2015-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `partner_project`
--

CREATE TABLE IF NOT EXISTS `partner_project` (
  `user_id` varchar(30) NOT NULL,
  `project_id` varchar(30) NOT NULL,
  KEY `user_id` (`user_id`,`project_id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner_project`
--

INSERT INTO `partner_project` (`user_id`, `project_id`) VALUES
('jack', '1'),
('rohit', '1');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `project_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `current_budget` int(11) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `name`, `country`, `address`, `current_budget`) VALUES
('1', 'Abhinava', 'India', 'Mumbai, Maharashtra', 50000),
('2', 'Sevasadan', 'India', 'Pune, Maharashtra', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `project_activity`
--

CREATE TABLE IF NOT EXISTS `project_activity` (
  `proj_act_id` varchar(30) NOT NULL,
  `project_id` varchar(30) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`proj_act_id`),
  KEY `project_id` (`project_id`,`activity_id`),
  KEY `project_id_2` (`project_id`),
  KEY `activity_id` (`activity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_activity`
--

INSERT INTO `project_activity` (`proj_act_id`, `project_id`, `activity_id`, `weight`) VALUES
('1-1', '1', 1, 10),
('1-10', '1', 10, 5),
('1-11', '1', 11, 5),
('1-12', '1', 12, 5),
('1-13', '1', 13, 5),
('1-14', '1', 14, 5),
('1-15', '1', 15, 5),
('1-16', '1', 16, 5),
('1-17', '1', 17, 5),
('1-18', '1', 18, 5),
('1-2', '1', 2, 5),
('1-3', '1', 3, 5),
('1-4', '1', 4, 5),
('1-5', '1', 5, 10),
('1-6', '1', 6, 5),
('1-7', '1', 7, 5),
('1-8', '1', 8, 5),
('1-9', '1', 9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `address`, `country`, `email`, `number`, `user_id`, `password`, `type`) VALUES
('Bob', '10, Pyramid Towers', 'Germany', 'bob@gmail.com', '1234567891', 'bob', 'bob123', 'HHF'),
('Dexter', '1231, Happy Society', 'India', 'dexter@gmail.com', '9012345678', 'dexter', 'dexter123', 'Donor'),
('Evan', '645, Sunnyvale', 'US', 'evan@gmail.com', '3124567890', 'evan', 'evan123', 'Donor'),
('Jack', '143, Cubicals', 'Thailand', 'jack@gmail.com', '9876543210', 'jack', 'jack123', 'Partner'),
('Merilyn', '2048, Hiranandani', 'India', 'merilyn@gmail.com', '3456789012', 'merilyn', 'merilyn123', 'Donor'),
('Rohit', '212, Baklava', 'Thailand', 'rohit@gmail.com', '3334567890', 'rohit', 'rohit123', 'Partner');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_photo`
--
ALTER TABLE `activity_photo`
  ADD CONSTRAINT `activity_photo_proj_act_id` FOREIGN KEY (`proj_act_id`) REFERENCES `project_activity` (`proj_act_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `activity_tracking`
--
ALTER TABLE `activity_tracking`
  ADD CONSTRAINT `activity_tracking_proj_act_id` FOREIGN KEY (`proj_act_id`) REFERENCES `project_activity` (`proj_act_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `budget_tracking`
--
ALTER TABLE `budget_tracking`
  ADD CONSTRAINT `budget_tracking_project_id` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_project_id` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `partner_project`
--
ALTER TABLE `partner_project`
  ADD CONSTRAINT `partner_project_project_id` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `partner_project_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_activity`
--
ALTER TABLE `project_activity`
  ADD CONSTRAINT `project_activity_activity_id` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`activity_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_activity_project_id` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
