/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - users
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`users` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `users`;

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
(3,'user');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `cnic` varchar(20) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`user_id`,`email`,`cnic`),
  UNIQUE KEY `email` (`email`,`cnic`),
  UNIQUE KEY `cnic` (`cnic`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`user_id`,`first_name`,`last_name`,`email`,`password`,`cnic`,`phone_no`,`role_id`,`status`) values 
(1,'zameer','tunio','abc@gmail.com','ZAmeer12@','45302-3434233-1','+92303-3423344',2,0),
(3,'admin','sahab','admin@gmail.com','ZAmeer12@','45302-3434233-3','+92303-3423344',1,1),
(4,'ravi','shankr','ravi@gmail.com','ZAmeer12@','34555-3433434-4','+92343-4344434',2,0),
(5,'naseer','soomro','naseer@gmail.com','ZAmeer12@','34555-3312334-4','+92343-4214434',2,1),
(6,'abkarim','','abc123@gmail.com','ZAmeer12@','45302-3455553-1','+92303-3423344',2,0),
(7,'abid','','abc234@gmail.com','ZAmeer12@','23453-3434233-1','+92303-3423344',2,1),
(8,'asad','','assadphl@gmail.com','ZAmeer12@','09788-3455553-1','+92303-3423344',2,0),
(9,'jan','','abc3434@gmail.com','ZAmeer12@','09876-3434233-7','+92303-3423344',2,1),
(10,'jeem','','admin7878@gmail.com','ZAmer12@','89765-5434233-1','+92303-3423344',2,1);

/*Table structure for table `users_data` */

DROP TABLE IF EXISTS `users_data`;

CREATE TABLE `users_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `cnic` varchar(20) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`cnic`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users_data` */

insert  into `users_data`(`id`,`first_name`,`last_name`,`email`,`password`,`cnic`,`phone_no`,`address`,`country`,`gender`) values 
(1,'zamee',' ','abc@gmail.com','ZAmeer12@','45302-3434233-1','+92303-3423344','a qalskdfjqpoieurasldkjf','Pikistan','male'),
(5,'zamee','','abcq@gmail.com','ZAmeer12@','45382-3434233-1','+92303-3423344','a q;alskdfjqpoieur;asldkjf','Pikistan','male'),
(6,'zameer','tunio','lskdfj@hmail.com','ZAmeer12@','45382-3434233-7','+92309-3343234','yaqoob tunio','Pikistan','male');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
