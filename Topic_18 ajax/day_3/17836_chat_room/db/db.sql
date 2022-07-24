/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - chat_room
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`chat_room` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `chat_room`;

/*Table structure for table `chat_table` */

DROP TABLE IF EXISTS `chat_table`;

CREATE TABLE `chat_table` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` longtext NOT NULL,
  `add_on` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `chat_table` */

insert  into `chat_table`(`msg_id`,`msg`,`add_on`,`user_id`) values 
(1,'slkdfjlsadjkf','2022-04-14 00:03:55',1),
(2,'kjdhfkajsdkajsdkjaksjd','2022-04-13 00:10:10',2),
(3,'ww','2022-04-13 01:21:14',1),
(4,'ww','2022-04-13 01:21:16',1),
(5,'ww','2022-04-13 01:21:18',1),
(6,'a quick ','2022-04-13 01:21:27',1),
(7,'a quick ','2022-04-13 01:21:27',1),
(9,'a;lsdkfjaaaaaaaaaaaaaaaaaaaaaaaa a;lsdkfja sd;laksdjf;alksdjf;alkdsjfa;l sdkjf;alksdjfa;lskdjfaklsdjf; lakjsd;flakjsdflaksj;flkja;lsd kfjasldfkjasljkdf','2022-04-13 01:22:42',1),
(10,'a;lsdkfjaaaaaaaaaaaaaaaaaaaaaaaa a;lsdkfja sd;laksdjf;alksdjf;alkdsjfa;l sdkjf;alksdjfa;lskdjfaklsdjf; lakjsd;flakjsdflaksj;flkja;lsd kfjasldfkjasljkdf','2022-04-13 01:23:34',1),
(11,'hello world','2022-04-13 01:29:57',4),
(12,'yes','2022-04-13 01:30:17',1),
(14,'yes','2022-04-13 01:30:54',1),
(15,'je je','2022-04-13 01:37:38',3);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `imgpath` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`user_id`,`user_name`,`email`,`password`,`imgpath`,`status`) values 
(1,'abc','abc@gmail.com','202cb962ac59075b964b07152d234b70','images/_image_2171IMG_20190803_140803_532-1.jpg',0),
(2,'zam','zam@gmail.com','202cb962ac59075b964b07152d234b70','images/_image_8900IMG_20190523_094112-1.jpg',1),
(3,'Naseer','naseer@gmail.com','202cb962ac59075b964b07152d234b70','images/_image_8900IMG_20190523_094112-1.jpg',0),
(4,'asad','asad@gmail.com','202cb962ac59075b964b07152d234b70','images/_image_3212campus.jpg',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
