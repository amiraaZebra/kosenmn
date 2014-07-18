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