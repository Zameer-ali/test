/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - shoping_cart
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`shoping_cart` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `shoping_cart`;

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `item` */

insert  into `item`(`item_id`,`name`,`quantity`,`price`) values 
(1,'Shirt',40,500),
(2,'pent',20,400),
(3,'shoes',28,700),
(4,'suit',67,765),
(5,'full suit',76,987),
(6,'grocery',98,768);

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `item_id` (`item_id`),
  KEY `person_id` (`customer_id`),
  CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `person` (`customer_id`),
  CONSTRAINT `order_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`),
  CONSTRAINT `order_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `person` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `order` */

insert  into `order`(`order_id`,`order_date`,`customer_id`,`item_id`) values 
(1,'2022-03-23',3,2),
(2,'2022-02-07',4,3),
(3,'2022-01-04',5,1),
(4,'2021-12-07',1,5),
(5,'2022-03-25',2,4);

/*Table structure for table `person` */

DROP TABLE IF EXISTS `person`;

CREATE TABLE `person` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `person` */

insert  into `person`(`customer_id`,`Name`,`Gender`,`Date_of_birth`,`Address`) values 
(1,'shela','Female','2022-03-16','jamshoro'),
(2,'Sheraz','Male','2022-03-06','jamshoro'),
(3,'Zainab','Female','2022-03-23','jamshoro'),
(4,'Rashid','Male','2022-03-07','jamshoro'),
(5,'shamsher','Male','2022-03-02','jamshoro');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
