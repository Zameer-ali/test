/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - hist_blog_management_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hist_blog_management_system` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `hist_blog_management_system`;

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `logs_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`logs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `logs` */

insert  into `logs`(`logs_id`,`login`,`logout`,`user_id`) values 
(1,'2022-03-28 21:31:42','2022-03-28 21:31:45',2),
(2,'2022-03-28 21:41:41','2022-03-28 21:49:04',1),
(3,'2022-03-28 21:49:14','2022-03-28 21:50:05',1),
(4,'2022-03-28 21:50:15','2022-03-28 22:13:16',1),
(5,'2022-03-28 22:13:27','2022-03-28 22:19:47',3),
(6,'2022-03-28 22:19:56','2022-03-28 22:20:10',2),
(7,'2022-03-28 22:20:21','0000-00-00 00:00:00',1);

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_by_user_id` int(11) DEFAULT NULL,
  `post_title` varchar(200) DEFAULT NULL,
  `post_summary` text DEFAULT NULL,
  `post_description` text DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `post_by_user_id` (`post_by_user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_by_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `posts` */

insert  into `posts`(`post_id`,`post_by_user_id`,`post_title`,`post_summary`,`post_description`) values 
(1,1,'post 1','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout'),
(2,1,'post 222','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layouttttt','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layouttttttttt'),
(3,1,'post 333','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout'),
(4,1,'a','sadada','sadasdasd'),
(7,1,'adasdasd','adasdasd','dasdadasd'),
(8,3,'post 441','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout'),
(9,1,'post 1','post 1','post 1'),
(10,1,'post 11','post 1','post 1'),
(11,1,'post 13','post 1','post 1'),
(12,1,'post 14','post 1','post 1'),
(13,1,'post 18','post 1','post 1'),
(14,1,'post 98','post 1','post 1'),
(15,1,'post 183','post 1','post 1'),
(16,1,'post 1433333333','post 1','post 1'),
(19,3,'a;ldkjf','a;lkdfj','a;dkfj');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) DEFAULT NULL,
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
  `role_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`user_id`,`role_id`,`full_name`,`email`,`user_password`,`gender`) values 
(1,1,'Admin Hist','admin@gmail.com','1234321','Male'),
(2,3,'User Hist','user@gmail.com','12345678','Male'),
(3,2,'Author Hist','author@gmail.com','12345678','Male'),
(4,2,'zaMEER','abc123@gmail.com','123','male'),
(5,2,'naseer','naser@gmail.com','12334','female');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
