/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `test`;

/*Table structure for table `error_logs` */

DROP TABLE IF EXISTS `error_logs`;

CREATE TABLE `error_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `error_level` int(11) DEFAULT NULL,
  `error_msg` varchar(100) DEFAULT NULL,
  `error_line` int(11) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `error_logs` */

insert  into `error_logs`(`id`,`error_level`,`error_msg`,`error_line`,`path`,`date_time`) values 
(1,1045,'Access denied for user &#039;rot&#039;@&#039;localhost&#039; (using password: NO)',6,'H:XAMPhtdocsTopic_22 error17836_db_files.php','2022-04-19 00:30:02'),
(2,2,'Undefined variable $abc',32,'H:XAMPhtdocsTopic_22 error17836_db_files.php','2022-04-19 00:30:02'),
(3,1024,'Invalid User',37,'H:XAMPhtdocsTopic_22 error17836_db_files.php','2022-04-19 00:30:03'),
(4,1045,'Access denied for user &#039;rot&#039;@&#039;localhost&#039; (using password: NO)',6,'H:XAMPhtdocsTopic_22 error17836_db_files.php','2022-04-19 00:31:20'),
(5,2,'Undefined variable $abc',33,'H:XAMPhtdocsTopic_22 error17836_db_files.php','2022-04-19 00:31:20'),
(6,1024,'Invalid User',38,'H:XAMPhtdocsTopic_22 error17836_db_files.php','2022-04-19 00:31:20');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
