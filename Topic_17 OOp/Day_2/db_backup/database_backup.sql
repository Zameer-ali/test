/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - hist_bms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hist_bms` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `hist_bms`;

/*Table structure for table `hist` */

DROP TABLE IF EXISTS `hist`;

CREATE TABLE `hist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `hist` */

insert  into `hist`(`id`,`name`) values 
(1,''),
(2,'Sajjad Ali'),
(3,'Imtiaz Ali');

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_by_user_id` int(11) DEFAULT NULL,
  `post__title` varchar(200) DEFAULT NULL,
  `post_summary` text DEFAULT NULL,
  `post_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`post_id`),
  KEY `post_by_user_id` (`post_by_user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_by_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `posts` */

insert  into `posts`(`post_id`,`post_by_user_id`,`post__title`,`post_summary`,`post_description`,`created_at`) values 
(1,1,'post 11','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.','2022-03-25 12:15:56'),
(2,1,'post 2','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.						\r\n							','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.						','2022-03-25 11:20:23'),
(3,1,'post 33','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layoutttttt.','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layoutttttt.','2022-03-25 11:54:13'),
(7,2,'post 4','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.','2022-03-25 11:58:40'),
(9,1,'Post 12','Post 12','Post 12','2022-03-25 12:24:25'),
(10,1,'Post 13','Post 12','Post 12','2022-03-25 12:24:31'),
(11,1,'Post 15','Post 12','Post 12','2022-03-25 12:24:36'),
(12,1,'Post 15','Post 12','Post 12','2022-03-25 12:24:40'),
(13,1,'Post 16','Post 12','Post 12','2022-03-25 12:24:46'),
(14,1,'Post 17','Post 12','Post 12','2022-03-25 12:24:49'),
(15,1,'Post 18','Post 12','Post 12','2022-03-25 12:24:53'),
(16,1,'Post 19','Post 12','Post 12','2022-03-25 12:24:57'),
(17,1,'Post 20','Post 12','Post 12','2022-03-25 12:25:04'),
(18,1,'Post 21','Post 12','Post 12','2022-03-25 12:25:08');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) DEFAULT 'user',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

insert  into `roles`(`role_id`,`role`) values 
(1,'admin'),
(2,'author'),
(3,'user');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role` (`role`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`user_id`,`role`,`full_name`,`email`,`user_password`,`gender`) values 
(1,1,'Admin','admin@gmail.com','12345678','Male'),
(2,2,'Author','author@gmail.com','12345678','Male'),
(3,3,'User','user@gmail.com','12345678','Male');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
