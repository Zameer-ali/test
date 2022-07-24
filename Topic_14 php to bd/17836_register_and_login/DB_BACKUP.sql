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
