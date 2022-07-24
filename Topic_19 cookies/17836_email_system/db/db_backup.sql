/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - email_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`email_system` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `email_system`;

/*Table structure for table `emails` */

DROP TABLE IF EXISTS `emails`;

CREATE TABLE `emails` (
  `email_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` longtext NOT NULL,
  `sender_email` varchar(40) NOT NULL,
  `reciever_email` varchar(40) NOT NULL DEFAULT 'null',
  `draft_status` tinyint(4) NOT NULL DEFAULT 0,
  `sender_dlt_sts` tinyint(4) NOT NULL DEFAULT 0,
  `reciever_dlt_sts` tinyint(4) NOT NULL DEFAULT 0,
  `reciever_trash_sts` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) DEFAULT 0,
  `send_date` datetime DEFAULT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `emails` */

insert  into `emails`(`email_id`,`msg`,`sender_email`,`reciever_email`,`draft_status`,`sender_dlt_sts`,`reciever_dlt_sts`,`reciever_trash_sts`,`deleted`,`send_date`) values 
(2,'fine what about you','zam@gmail.com','abc@gmail.com',0,0,0,0,0,'2022-04-14 03:25:02'),
(3,'sst docter','abc@gmail.com','zam@gmail.com',1,0,0,0,0,'2022-04-14 04:02:45'),
(4,'zameer tunio','abc@gmail.com','zam@gmail.com',0,0,0,0,0,'2022-04-14 04:31:23'),
(6,'a quick brown ','zam@gmail.com','naseer@gmail.com',1,0,0,0,0,'2022-04-14 22:09:21'),
(7,'how to you and you to me','zam@gmail.com','naseer@gmail.com',0,0,0,0,0,'2022-04-14 22:11:47'),
(8,'yes i am fine what about you jana','naseer@gmail.com','zam@gmail.com',0,0,0,0,0,'2022-04-14 22:12:23');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `imgpath` varchar(150) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`user_id`,`user_name`,`email`,`password`,`imgpath`) values 
(1,'abc','abc@gmail.com','202cb962ac59075b964b07152d234b70','images/_image_2171IMG_20190803_140803_532-1.jpg'),
(2,'zam','zam@gmail.com','202cb962ac59075b964b07152d234b70','images/_image_8900IMG_20190523_094112-1.jpg'),
(3,'Naseer','naseer@gmail.com','202cb962ac59075b964b07152d234b70','images/_image_8900IMG_20190523_094112-1.jpg'),
(4,'asad','asad@gmail.com','202cb962ac59075b964b07152d234b70','images/_image_3212campus.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
