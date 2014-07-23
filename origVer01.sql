-- haha


SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `kosenweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `kosenweb` ;

-- -----------------------------------------------------
-- Table `kosenweb`.`kakomons`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosenweb`.`kakomons` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `dir` VARCHAR(255) NOT NULL ,
  `university` VARCHAR(255) NOT NULL ,
  `gakubu` VARCHAR(255) NOT NULL ,
  `year` INT(11) NOT NULL ,
  `other` VARCHAR(255) NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL ,
  `deleted` TINYINT(1) NULL ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `extra1` TEXT NULL DEFAULT NULL ,
  `extra2` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `kosenweb`.`photos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosenweb`.`photos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(256) NOT NULL ,
  `description` TEXT NULL ,
  `album` VARCHAR(256) NOT NULL ,
  `height` INT(11) NULL ,
  `width` INT(11) NULL DEFAULT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL ,
  `deleted` TINYINT(1) NULL DEFAULT '0' ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `extra1` TEXT NULL ,
  `extra2` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `kosenweb`.`posts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosenweb`.`posts` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `user_id` VARCHAR(36) NOT NULL ,
  `title` VARCHAR(255) NOT NULL ,
  `text` LONGTEXT NOT NULL ,
  `file` LONGTEXT NULL DEFAULT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `deleted` TINYINT(1) NULL DEFAULT '0' ,
  `extra1` TEXT NULL DEFAULT NULL ,
  `extra2` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `kosenweb`.`comments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosenweb`.`comments` (
  `id` VARCHAR(36) NOT NULL ,
  `parent_id` VARCHAR(36) NULL DEFAULT NULL ,
  `foreign_key` VARCHAR(36) NOT NULL ,
  `user_id` VARCHAR(36) NULL DEFAULT NULL ,
  `lft` INT(10) NOT NULL ,
  `rght` INT(10) NOT NULL ,
  `model` VARCHAR(255) NOT NULL ,
  `approved` TINYINT(1) NOT NULL DEFAULT '1' ,
  `is_spam` VARCHAR(20) NOT NULL DEFAULT 'clean' ,
  `title` VARCHAR(255) NULL DEFAULT NULL ,
  `slug` VARCHAR(255) NULL DEFAULT NULL ,
  `body` TEXT NULL DEFAULT NULL ,
  `author_name` VARCHAR(255) NULL DEFAULT NULL ,
  `author_url` VARCHAR(255) NULL DEFAULT NULL ,
  `author_email` VARCHAR(128) NOT NULL DEFAULT '' ,
  `language` VARCHAR(6) NULL DEFAULT NULL ,
  `comment_type` VARCHAR(32) NOT NULL DEFAULT 'comment' ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `kosenweb`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `kosenweb`.`users` (
  `id` VARCHAR(36) NOT NULL ,
  `username` VARCHAR(255) NOT NULL ,
  `slug` VARCHAR(255) NOT NULL ,
  `password` VARCHAR(128) NULL DEFAULT NULL ,
  `password_token` VARCHAR(128) NULL DEFAULT NULL ,
  `email` VARCHAR(255) NULL DEFAULT NULL ,
  `email_verified` TINYINT(1) NULL DEFAULT '0' ,
  `email_token` VARCHAR(255) NULL DEFAULT NULL ,
  `email_token_expires` DATETIME NULL DEFAULT NULL ,
  `tos` TINYINT(1) NULL DEFAULT '0' ,
  `active` TINYINT(1) NULL DEFAULT '0' ,
  `last_login` DATETIME NULL DEFAULT NULL ,
  `last_action` DATETIME NULL DEFAULT NULL ,
  `is_admin` TINYINT(1) NULL DEFAULT '0' ,
  `role` VARCHAR(255) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `first_name` VARCHAR(45) NULL DEFAULT NULL ,
  `last_name` VARCHAR(45) NULL DEFAULT NULL ,
  `gender` TINYINT(1) NULL DEFAULT '1' ,
  `birthday` DATE NULL DEFAULT NULL ,
  `status` VARCHAR(255) NULL DEFAULT NULL ,
  `major` VARCHAR(255) NULL DEFAULT NULL ,
  `kosen_kanji` VARCHAR(255) NULL DEFAULT NULL ,
  `kosen_roman` VARCHAR(255) NULL DEFAULT NULL ,
  `kosen_year` YEAR NULL DEFAULT '2000' ,
  `fb_acc` VARCHAR(255) NULL DEFAULT NULL ,
  `high_school` VARCHAR(255) NULL DEFAULT NULL ,
  `university1` VARCHAR(255) NULL DEFAULT NULL ,
  `course1` VARCHAR(255) NULL DEFAULT NULL ,
  `university2` VARCHAR(255) NULL DEFAULT NULL ,
  `course2` VARCHAR(255) NULL DEFAULT NULL ,
  `university3` VARCHAR(255) NULL DEFAULT NULL ,
  `course3` VARCHAR(255) NULL DEFAULT NULL ,
  `work1` VARCHAR(45) NULL DEFAULT NULL ,
  `department1` VARCHAR(255) NULL DEFAULT NULL ,
  `work2` VARCHAR(45) NULL DEFAULT NULL ,
  `department2` VARCHAR(255) NULL DEFAULT NULL ,
  `work3` VARCHAR(255) NULL DEFAULT NULL ,
  `department3` VARCHAR(255) NULL DEFAULT NULL ,
  `country` VARCHAR(45) NULL DEFAULT NULL ,
  `city` VARCHAR(45) NULL DEFAULT NULL ,
  `phone_number_mon` VARCHAR(20) NULL DEFAULT NULL ,
  `phone_number_jap` VARCHAR(20) NULL DEFAULT NULL ,
  `photo_id` INT(10) NULL DEFAULT NULL ,
  `deleted` TINYINT(1) NULL DEFAULT '0' ,
  `extra1` TEXT NULL DEFAULT NULL ,
  `extra2` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `BY_USERNAME` (`username` ASC) ,
  INDEX `BY_EMAIL` (`email` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

USE `kosenweb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
