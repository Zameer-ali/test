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

/*Table structure for table `categories_table` */

DROP TABLE IF EXISTS `categories_table`;

CREATE TABLE `categories_table` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_category` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `categories_table` */

/*Table structure for table `comments_table` */

DROP TABLE IF EXISTS `comments_table`;

CREATE TABLE `comments_table` (
  `comments_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`comments_id`),
  KEY `post_id` (`post_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `comments_table_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post_table` (`post_id`),
  CONSTRAINT `comments_table_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `comments_table` */

/*Table structure for table `feedback_table` */

DROP TABLE IF EXISTS `feedback_table`;

CREATE TABLE `feedback_table` (
  `fdb_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `feedback` longtext DEFAULT NULL,
  PRIMARY KEY (`fdb_id`),
  KEY `user_id` (`user_id`),
  KEY `guest_id` (`guest_id`),
  CONSTRAINT `feedback_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`user_id`),
  CONSTRAINT `feedback_table_ibfk_2` FOREIGN KEY (`guest_id`) REFERENCES `guests_table` (`guest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `feedback_table` */

/*Table structure for table `guests_table` */

DROP TABLE IF EXISTS `guests_table`;

CREATE TABLE `guests_table` (
  `guest_id` int(11) NOT NULL AUTO_INCREMENT,
  `guest_name` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`guest_id`,`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `guests_table` */

/*Table structure for table `post_table` */

DROP TABLE IF EXISTS `post_table`;

CREATE TABLE `post_table` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post` longtext NOT NULL,
  `image` text DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `post_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`user_id`),
  CONSTRAINT `post_table_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories_table` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `post_table` */

/*Table structure for table `roles_table` */

DROP TABLE IF EXISTS `roles_table`;

CREATE TABLE `roles_table` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles_table` */

/*Table structure for table `users_table` */

DROP TABLE IF EXISTS `users_table`;

CREATE TABLE `users_table` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(4) NOT NULL DEFAULT 2,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `cnic` (`cnic`),
  UNIQUE KEY `email` (`email`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_table_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles_table` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `users_table` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
