/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - online_blogging_application
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`online_blogging_application` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `online_blogging_application`;

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `blog_title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `posts_per_page` int(11) NOT NULL,
  `bg_image` text DEFAULT NULL,
  `logo_img` text DEFAULT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `blog` */

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_category` varchar(255) NOT NULL,
  `cat_status` enum('Active','Inactive') DEFAULT 'Active',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `categories` */

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `comment_status` enum('Active','Inactive') DEFAULT 'Inactive',
  `disscussion` enum('Allow','disallow') DEFAULT 'Allow',
  PRIMARY KEY (`comments_id`),
  KEY `post_id` (`post_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `comments` */

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `country` */

/*Table structure for table `error_logs` */

DROP TABLE IF EXISTS `error_logs`;

CREATE TABLE `error_logs` (
  `err_id` int(11) NOT NULL AUTO_INCREMENT,
  `error_level` int(11) DEFAULT NULL,
  `err_line` int(11) DEFAULT NULL,
  `err_path` text DEFAULT NULL,
  `err_msg` text DEFAULT NULL,
  PRIMARY KEY (`err_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `error_logs` */

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `fdb_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `feedback` longtext NOT NULL,
  `fbd_date` datetime NOT NULL,
  PRIMARY KEY (`fdb_id`),
  KEY `user_id` (`user_id`),
  KEY `guest_id` (`guest_id`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`guest_id`) REFERENCES `guests` (`guest_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `feedback` */

/*Table structure for table `followers` */

DROP TABLE IF EXISTS `followers`;

CREATE TABLE `followers` (
  `follow_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `blog_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`follow_id`),
  KEY `blog_id` (`blog_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `followers_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `followers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `followers` */

/*Table structure for table `guests` */

DROP TABLE IF EXISTS `guests`;

CREATE TABLE `guests` (
  `guest_id` int(11) NOT NULL AUTO_INCREMENT,
  `guest_name` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`guest_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `guests` */

/*Table structure for table `home_town` */

DROP TABLE IF EXISTS `home_town`;

CREATE TABLE `home_town` (
  `home_town_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) DEFAULT NULL,
  `home_town` varchar(255) NOT NULL,
  PRIMARY KEY (`home_town_id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `home_town_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `home_town` */

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post` longtext NOT NULL,
  `post_date` datetime NOT NULL,
  `image` text DEFAULT NULL,
  `post_status` enum('Active','Inactive') DEFAULT 'Active',
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`),
  KEY `category_id` (`blog_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `posts` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

/*Table structure for table `theme` */

DROP TABLE IF EXISTS `theme`;

CREATE TABLE `theme` (
  `theme_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(255) NOT NULL,
  `font_family` varchar(255) NOT NULL,
  `font_size` varchar(255) NOT NULL,
  `background_color` varchar(255) NOT NULL,
  `post_bg_color` varchar(255) NOT NULL,
  PRIMARY KEY (`theme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `theme` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(4) NOT NULL DEFAULT 2,
  `theme_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `image` text DEFAULT NULL,
  `acc_status` enum('Active','Inactive') DEFAULT 'Inactive',
  `permission` enum('Approve','Reject','Pending') DEFAULT 'Pending',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  KEY `role_id` (`role_id`),
  KEY `theme_id` (`theme_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`theme_id`) REFERENCES `theme` (`theme_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
