/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - za_bank
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`za_bank` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `za_bank`;

/*Table structure for table `user_info` */

DROP TABLE IF EXISTS `user_info`;

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone_no` varchar(30) DEFAULT NULL,
  `acount_no` int(11) DEFAULT NULL,
  `B_balance` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `acount_no` (`acount_no`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_info` */

insert  into `user_info`(`id`,`full_name`,`email`,`phone_no`,`acount_no`,`B_balance`) values 
(1,'zameer','zame@gmail.com','78787887',23243423,4000),
(2,'asad','asa@gamil.com','786768',343422,1235),
(3,'naseer','nase@gmail.com','7878',566766,14000),
(4,'zameer','zam@gmail.com','787878',457764,23),
(7,'zameer','zam1@gmail.com','787878',45776466,0),
(9,'zameer','zam2@gmail.com','787878',64355,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
