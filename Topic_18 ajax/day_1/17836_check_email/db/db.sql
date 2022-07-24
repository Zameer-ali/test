/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - for_search
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`for_search` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `for_search`;

/*Table structure for table `cities` */

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(40) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cities` */

insert  into `cities`(`id`,`city_name`,`country_id`) values 
(1,'karachi',1),
(2,'hyderabad',1),
(3,'jamshoro',1),
(4,'Naushhro',1),
(5,'delhi',2),
(6,'mumbai',2),
(7,'kolkata',2),
(8,'Guangzhou',4),
(9,'beijing',4),
(10,'Balakhna',3),
(11,'Tehran',5),
(12,'Mashhad',5),
(13,'Baghdad',6),
(14,'Mosul',6);

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `countries` */

insert  into `countries`(`country_id`,`country_name`) values 
(1,'Pakistan'),
(2,'India'),
(3,'Russia'),
(4,'china'),
(5,'Iran'),
(6,'Iraq');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `cnic` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cnic` (`cnic`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=45304 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`cnic`,`email`,`phone`,`img`) values 
(2,'zameer','45302-5434233-1','am@gmail.com','8768787','IMG_20190803_140803_532-1.jpg'),
(6,'zameer','45302-5433233-1','zzzam@gmail.com','8768787','IMG_zameer.jpg'),
(22,'zameer','45362-5433233-1','zzam@gmail.com','8768787','IMG_zameer.jpg'),
(23,'zameer','47362-5433233-1','zam334@gmail.com','8768787','zam.jpg'),
(25,'zameer','400362-5433233-1','zam221334@gmail.com','8768787','PASS_FOTO_SMALL_SIZE_4X6.jpg'),
(26,'zameer','40036asd2-5433233-1','zam2w3ee334@gmail.com','8768787','PASS_FOTO_SMALL_SIZE_4X6.jpg'),
(45303,NULL,NULL,NULL,NULL,'PASS_FOTO_SMALL_SIZE_4X6.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
