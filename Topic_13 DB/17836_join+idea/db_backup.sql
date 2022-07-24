/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - hospital
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hospital` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `hospital`;

/*Table structure for table `district_hospitals` */

DROP TABLE IF EXISTS `district_hospitals`;

CREATE TABLE `district_hospitals` (
  `hosp_id` int(11) NOT NULL AUTO_INCREMENT,
  `hosp_name` varchar(20) DEFAULT NULL,
  `ms_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`hosp_id`),
  UNIQUE KEY `ms_id` (`ms_id`),
  CONSTRAINT `district_hospitals_ibfk_1` FOREIGN KEY (`ms_id`) REFERENCES `ms` (`ms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `district_hospitals` */

insert  into `district_hospitals`(`hosp_id`,`hosp_name`,`ms_id`) values 
(2,'LUMHS',1),
(3,'AGHA KHAN',3),
(4,'CHANDKA',2);

/*Table structure for table `doctors` */

DROP TABLE IF EXISTS `doctors`;

CREATE TABLE `doctors` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `Doctor_Name` varchar(20) DEFAULT NULL,
  `shift` varchar(20) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `ms_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`doc_id`),
  KEY `ms_id` (`ms_id`),
  CONSTRAINT `doctors_ibfk_2` FOREIGN KEY (`ms_id`) REFERENCES `ms` (`ms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `doctors` */

insert  into `doctors`(`doc_id`,`Doctor_Name`,`shift`,`gender`,`ms_id`) values 
(1,'Ali Raza','morning','male',3),
(2,'Shaista','evening','female',1),
(3,'Kayoom','morning','male',2),
(4,'Salma','evening','female',NULL);

/*Table structure for table `doctors_patients` */

DROP TABLE IF EXISTS `doctors_patients`;

CREATE TABLE `doctors_patients` (
  `doc_pat_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`doc_pat_id`),
  KEY `patient_id` (`patient_id`),
  KEY `doc_id` (`doc_id`),
  CONSTRAINT `doctors_patients_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `doctors_patients_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `doctors` (`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `doctors_patients` */

insert  into `doctors_patients`(`doc_pat_id`,`doc_id`,`patient_id`) values 
(1,1,3),
(2,2,1),
(3,2,3),
(5,3,4);

/*Table structure for table `ms` */

DROP TABLE IF EXISTS `ms`;

CREATE TABLE `ms` (
  `ms_id` int(11) NOT NULL AUTO_INCREMENT,
  `ms_name` varchar(20) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  PRIMARY KEY (`ms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ms` */

insert  into `ms`(`ms_id`,`ms_name`,`gender`) values 
(1,'Zameer','male'),
(2,'Masooma','female'),
(3,'Sittara','female'),
(4,'SAINDAD','male');

/*Table structure for table `patient` */

DROP TABLE IF EXISTS `patient`;

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(20) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `patient` */

insert  into `patient`(`patient_id`,`patient_name`,`gender`,`date`) values 
(1,'KHAN','male','2022-03-20'),
(2,'ALI RAZA','male','2022-03-15'),
(3,'KOMAL','female','2022-03-15'),
(4,'NASEER','male','2022-03-22');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
