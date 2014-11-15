-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- ホスト: 127.0.0.1
-- 生成日時: 2014 年 7 月 24 日 12:13
-- サーバのバージョン: 5.5.32
-- PHP のバージョン: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `kosenmn`
--
CREATE DATABASE IF NOT EXISTS `kosenmn` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `kosenmn`;

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) NOT NULL,
  `rght` int(10) NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `is_spam` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'clean',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `author_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_email` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `language` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment_type` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'comment',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `kakomons`
--

CREATE TABLE IF NOT EXISTS `kakomons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `university` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gakubu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `user_id` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- テーブルのデータのダンプ `kakomons`
--

INSERT INTO `kakomons` (`id`, `name`, `dir`, `university`, `gakubu`, `year`, `other`, `created`, `modified`, `deleted`, `user_id`, `extra1`, `extra2`) VALUES
(1, 'dentsuu_jyouhou_H2009.jpg', '/files/uploads/dentsuu_jyouhou_H2009.jpg', 'dentsuu', 'jyouhou', 2009, '', '2014-03-12 14:39:17', '2014-03-12 14:39:17', NULL, '53205f3a-8490-477f-b96d-0c8040766f4b', NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `photos`
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
  `user_id` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- テーブルのデータのダンプ `photos`
--

INSERT INTO `photos` (`id`, `title`, `description`, `album`, `height`, `width`, `created`, `modified`, `deleted`, `user_id`, `extra1`, `extra2`) VALUES
(6, '', NULL, 'hi there', NULL, NULL, '2014-07-10 10:30:54', '2014-07-10 10:30:54', 0, '53be4d58-86dc-4397-96e8-1a3440766f4b', NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `file` longtext COLLATE utf8_unicode_ci,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- テーブルのデータのダンプ `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `text`, `file`, `created`, `modified`, `deleted`, `extra1`, `extra2`) VALUES
(3, '53be4d58-86dc-4397-96e8-1a3440766f4b', 'welcome to kosem.mn', '<p>hi</p>\r\n', NULL, '2014-07-10 10:38:55', '2014-07-10 10:38:55', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_token` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT '0',
  `email_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_token_expires` datetime DEFAULT NULL,
  `tos` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_action` datetime DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `first_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT '1',
  `birthday` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `major` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kosen_kanji` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kosen_roman` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kosen_year` year(4) DEFAULT '2000',
  `fb_acc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `high_school` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `university1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `university2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `university3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `course3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `work3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number_mon` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number_jap` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_id` int(10) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `extra1` text COLLATE utf8_unicode_ci,
  `extra2` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `BY_USERNAME` (`username`),
  KEY `BY_EMAIL` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `slug`, `password`, `password_token`, `email`, `email_verified`, `email_token`, `email_token_expires`, `tos`, `active`, `last_login`, `last_action`, `is_admin`, `role`, `created`, `modified`, `first_name`, `last_name`, `gender`, `birthday`, `status`, `major`, `kosen_kanji`, `kosen_roman`, `kosen_year`, `fb_acc`, `high_school`, `university1`, `course1`, `university2`, `course2`, `university3`, `course3`, `work1`, `department1`, `work2`, `department2`, `work3`, `department3`, `country`, `city`, `phone_number_mon`, `phone_number_jap`, `photo_id`, `deleted`, `extra1`, `extra2`) VALUES
('53be4d58-86dc-4397-96e8-1a3440766f4b', 'amiraa', 'amiraa', 'a8fc5c821a3628d2e72662c2328d2a2e052721a6', NULL, 'amiraa.ax@gmail.com', 1, 'i36s0k4zut', '2014-07-11 10:22:47', 1, 1, '2014-07-23 21:45:26', NULL, 1, 'admin', '2014-07-10 10:22:48', '2014-07-23 21:45:26', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL),
('53be5148-bd10-47fa-b937-1a3440766f4b', 'sura', 'sura', 'f9cd4853f5a11f9e88d32745f321fb4f4bd0cceb', NULL, 'sura@sura.com', 1, NULL, NULL, 1, 1, '2014-07-10 10:39:56', NULL, 0, 'registered', '2014-07-10 10:39:36', '2014-07-10 10:39:56', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 2000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);


CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `ip_address` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
