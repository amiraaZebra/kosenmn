-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2014 at 04:03 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kosenzoloogoos`
--
CREATE DATABASE IF NOT EXISTS `kosenzoloogoos` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `kosenzoloogoos`;

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=65 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 128),
(2, 1, NULL, NULL, 'Comments', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Cs', 14, 15),
(9, 1, NULL, NULL, 'Events', 16, 27),
(10, 9, NULL, NULL, 'index', 17, 18),
(11, 9, NULL, NULL, 'view', 19, 20),
(12, 9, NULL, NULL, 'add', 21, 22),
(13, 9, NULL, NULL, 'edit', 23, 24),
(14, 9, NULL, NULL, 'delete', 25, 26),
(15, 1, NULL, NULL, 'Groups', 28, 39),
(16, 15, NULL, NULL, 'index', 29, 30),
(17, 15, NULL, NULL, 'view', 31, 32),
(18, 15, NULL, NULL, 'add', 33, 34),
(19, 15, NULL, NULL, 'edit', 35, 36),
(20, 15, NULL, NULL, 'delete', 37, 38),
(21, 1, NULL, NULL, 'Kakomons', 40, 49),
(22, 21, NULL, NULL, 'index', 41, 42),
(23, 21, NULL, NULL, 'view', 43, 44),
(24, 21, NULL, NULL, 'add', 45, 46),
(25, 21, NULL, NULL, 'delete', 47, 48),
(26, 1, NULL, NULL, 'Pages', 50, 53),
(27, 26, NULL, NULL, 'display', 51, 52),
(28, 1, NULL, NULL, 'Photos', 54, 65),
(29, 28, NULL, NULL, 'index', 55, 56),
(30, 28, NULL, NULL, 'view', 57, 58),
(31, 28, NULL, NULL, 'add', 59, 60),
(32, 28, NULL, NULL, 'edit', 61, 62),
(33, 28, NULL, NULL, 'delete', 63, 64),
(34, 1, NULL, NULL, 'Posts', 66, 77),
(35, 34, NULL, NULL, 'index', 67, 68),
(36, 34, NULL, NULL, 'view', 69, 70),
(37, 34, NULL, NULL, 'add', 71, 72),
(38, 34, NULL, NULL, 'edit', 73, 74),
(39, 34, NULL, NULL, 'delete', 75, 76),
(40, 1, NULL, NULL, 'Users', 78, 101),
(41, 40, NULL, NULL, 'home', 79, 80),
(42, 40, NULL, NULL, 'memberlist', 81, 82),
(43, 40, NULL, NULL, 'register', 83, 84),
(44, 40, NULL, NULL, 'login', 85, 86),
(45, 40, NULL, NULL, 'logout', 87, 88),
(46, 40, NULL, NULL, 'initDB', 89, 90),
(47, 40, NULL, NULL, 'index', 91, 92),
(48, 40, NULL, NULL, 'view', 93, 94),
(49, 40, NULL, NULL, 'add', 95, 96),
(50, 40, NULL, NULL, 'edit', 97, 98),
(51, 40, NULL, NULL, 'delete', 99, 100),
(52, 1, NULL, NULL, 'Videos', 102, 113),
(53, 52, NULL, NULL, 'index', 103, 104),
(54, 52, NULL, NULL, 'view', 105, 106),
(55, 52, NULL, NULL, 'add', 107, 108),
(56, 52, NULL, NULL, 'edit', 109, 110),
(57, 52, NULL, NULL, 'delete', 111, 112),
(58, 1, NULL, NULL, 'AclExtras', 114, 115),
(59, 1, NULL, NULL, 'Composer', 116, 117),
(60, 1, NULL, NULL, 'DebugKit', 118, 125),
(61, 60, NULL, NULL, 'ToolbarAccess', 119, 124),
(62, 61, NULL, NULL, 'history_state', 120, 121),
(63, 61, NULL, NULL, 'sql_explain', 122, 123),
(64, 1, NULL, NULL, 'Uploader', 126, 127);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 6),
(3, NULL, 'Group', 3, NULL, 7, 8),
(4, 1, 'User', 1, NULL, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_read` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_update` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_delete` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 34, '1', '1', '1', '1'),
(4, 2, 45, '1', '1', '1', '1'),
(5, 3, 1, '-1', '-1', '-1', '-1'),
(6, 3, 37, '1', '1', '1', '1'),
(7, 3, 38, '1', '1', '1', '1'),
(8, 3, 45, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `type_num` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE IF NOT EXISTS `cvs` (
  `id` int(10) unsigned NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime DEFAULT NULL,
  `country` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_name_UNIQUE` (`group_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `created`, `modified`, `deleted`, `extra1`, `extra2`) VALUES
(1, 'admin', '2013-10-12 05:44:43', '2013-10-12 05:44:43', 0, '', ''),
(2, 'leader', '2013-10-12 05:45:01', '2013-10-12 05:45:01', 0, '', ''),
(3, 'user', '2013-10-12 05:45:15', '2013-10-12 05:45:15', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kakomons`
--

CREATE TABLE IF NOT EXISTS `kakomons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `dir` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `university` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `gakubu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `kakomons`
--

INSERT INTO `kakomons` (`id`, `name`, `dir`, `university`, `gakubu`, `year`, `other`, `created`, `modified`, `deleted`, `user_id`, `extra1`, `extra2`) VALUES
(26, 'Ih-surguuli-1_Gakubu1_H4.jpg', '/files/uploads/Ih-surguuli-1_Gakubu1_H4.jpg', 'Ih surguuli 1', 'Gakubu1', 4, '', '2014-02-21 18:33:27', '2014-02-21 18:33:27', NULL, 1, NULL, NULL),
(27, 'Ih-surguuli-1_Gakubu1_H5.png', '/files/uploads/Ih-surguuli-1_Gakubu1_H5.png', 'Ih surguuli 1', 'Gakubu1', 5, '', '2014-02-21 18:33:41', '2014-02-21 18:33:41', NULL, 1, NULL, NULL),
(28, 'Ih-surguuli-1_Gakubu1_H17.jpg', '/files/uploads/Ih-surguuli-1_Gakubu1_H17.jpg', 'Ih surguuli 1', 'Gakubu1', 17, '', '2014-02-23 15:38:28', '2014-02-23 15:38:28', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `album` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=108 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `description`, `album`, `height`, `width`, `created`, `modified`, `deleted`, `user_id`, `extra1`, `extra2`) VALUES
(96, '', NULL, 'sample1', NULL, NULL, '2014-01-26 07:35:51', '2014-01-26 07:35:51', 0, 1, NULL, NULL),
(97, '', NULL, 'sample1', NULL, NULL, '2014-01-26 07:52:06', '2014-01-26 07:52:06', 0, 1, NULL, NULL),
(98, '', NULL, 'sample1', NULL, NULL, '2014-01-26 10:29:13', '2014-01-26 10:29:13', 0, 1, NULL, NULL),
(99, '', NULL, 'sample1', NULL, NULL, '2014-01-26 10:34:18', '2014-01-26 10:34:18', 0, 1, NULL, NULL),
(100, '', NULL, 'sample1', NULL, NULL, '2014-01-26 10:34:31', '2014-01-26 10:34:31', 0, 1, NULL, NULL),
(101, '', NULL, 'sample1', NULL, NULL, '2014-01-26 10:35:08', '2014-01-26 10:35:08', 0, 1, NULL, NULL),
(102, '', NULL, 'sample1', NULL, NULL, '2014-02-17 15:46:59', '2014-02-17 15:46:59', 0, 1, NULL, NULL),
(103, '', NULL, 'sample1', NULL, NULL, '2014-02-17 15:58:49', '2014-02-17 15:58:49', 0, 1, NULL, NULL),
(104, '', NULL, 'sample2', NULL, NULL, '2014-02-17 15:59:35', '2014-02-17 15:59:35', 0, 1, NULL, NULL),
(105, '', NULL, 'sample1', NULL, NULL, '2014-02-20 13:35:50', '2014-02-20 13:35:50', 0, 1, NULL, NULL),
(106, '', NULL, 'sa3', NULL, NULL, '2014-02-21 18:59:21', '2014-02-21 18:59:21', 0, 1, NULL, NULL),
(107, '', NULL, 'zzz', NULL, NULL, '2014-02-21 19:00:23', '2014-02-21 19:00:23', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `datatype` longtext COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `datatype`, `created`, `modified`, `deleted`, `user_id`, `extra1`, `extra2`) VALUES
(1, 'xaxaa', '<p>csasc asd Z<strong>asd&nbsp;</strong></p>\r\n', NULL, '2013-10-16 16:29:16', '2013-11-29 16:35:46', 0, 1, NULL, NULL),
(2, 'cvas', '<p><img alt="" src="/kosen/app/webroot/img/post_img/images/Superman.png" style="height:38px; width:50px" />asfd&nbsp;</p>\n', NULL, '2013-11-29 16:33:38', '2013-11-29 16:33:52', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `status` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `major` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `kosen` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `kosen_year` int(11) NOT NULL,
  `fb_acc` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email1` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `high_school` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `university1` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `university2` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `university3` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number1` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_pic` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `group_id` int(10) unsigned NOT NULL,
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `gender`, `birthday`, `status`, `major`, `kosen`, `kosen_year`, `fb_acc`, `email1`, `email2`, `high_school`, `university1`, `university2`, `university3`, `work1`, `work2`, `address`, `country`, `city`, `phone_number1`, `phone_number2`, `profile_pic`, `last_login`, `created`, `modified`, `deleted`, `group_id`, `extra1`, `extra2`) VALUES
(1, 'zoloo', 'c0b539f13004363e7a9db1a46bf136c9f6376cb4', 'Zolbayar', 'Naidanjav', 'm', '2013-10-12', '', 'bds', 'sdb', 4, '', 'aacvssfd@fga.com', '', '', '', '', '', '', '', 'Hikone shi, Shiromachi,', 'Japan', 'Hikone', '819099846903', '819099846903', NULL, '2013-10-12 05:46:00', '2013-10-12 05:48:38', '2013-10-12 05:48:38', 0, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_cv`
--

CREATE TABLE IF NOT EXISTS `user_cv` (
  `id` int(10) unsigned NOT NULL,
  `cv_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_year` int(4) DEFAULT NULL,
  `end_year` int(4) DEFAULT NULL,
  `created` datetime NOT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `modified` datetime DEFAULT NULL,
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `path` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
