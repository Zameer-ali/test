/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - job_portal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`job_portal` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `job_portal`;

/*Table structure for table `academic_info` */

DROP TABLE IF EXISTS `academic_info`;

CREATE TABLE `academic_info` (
  `acd_id` int(11) NOT NULL AUTO_INCREMENT,
  `qualification` varchar(40) DEFAULT NULL,
  `university` varchar(30) DEFAULT NULL,
  `complete_date` date DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`acd_id`),
  KEY `candidate_id` (`candidate_id`),
  CONSTRAINT `academic_info_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`condidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `academic_info` */

insert  into `academic_info`(`acd_id`,`qualification`,`university`,`complete_date`,`candidate_id`) values 
(1,'GRADUATION(IT)','UNIVERSITY OF SINDH','2022-03-08',3),
(2,'INTERMEDIATE','GOVT COLLEGE','2022-03-14',4),
(3,'MATRIC','SCHOLL GOCT','2022-03-22',11),
(4,'MASTERS','MEHRAN','2022-03-25',15),
(5,'PHD','LUMHS','2022-03-24',12),
(6,'INTERMEDIATE','GOVT DEGREE','2022-03-14',3),
(7,'INTERMIDIATE','COLLEGE','2022-03-23',12),
(8,'GRADUATION','LUMHS','2022-03-23',11),
(9,'MATRIC','MEHRAN','2022-03-22',10),
(10,'MASTERS','SINDH','2022-03-23',10);

/*Table structure for table `application_status` */

DROP TABLE IF EXISTS `application_status`;

CREATE TABLE `application_status` (
  `app_s_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` enum('accept','reject') DEFAULT 'reject',
  `j_app_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`app_s_id`),
  KEY `j_app_id` (`j_app_id`),
  CONSTRAINT `application_status_ibfk_1` FOREIGN KEY (`j_app_id`) REFERENCES `job_applications` (`j_app_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `application_status` */

insert  into `application_status`(`app_s_id`,`status`,`j_app_id`) values 
(1,'accept',1),
(2,'accept',4),
(3,'reject',1),
(4,'accept',6),
(5,'reject',8),
(6,'accept',3),
(7,'reject',2),
(8,'reject',8),
(9,'reject',5),
(10,'accept',2);

/*Table structure for table `candidate` */

DROP TABLE IF EXISTS `candidate`;

CREATE TABLE `candidate` (
  `condidate_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  PRIMARY KEY (`condidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `candidate` */

insert  into `candidate`(`condidate_id`,`name`,`gender`) values 
(1,'ZAMEER','male'),
(2,'KOMAL','female'),
(3,'ASAD','male'),
(4,'NASEER','male'),
(5,'SITARA','female'),
(6,'SHAISTA','female'),
(7,'ROBIMA','female'),
(8,'YASIR','male'),
(9,'KARIM','male'),
(10,'KALEEM','male'),
(11,'MASOOMA','female'),
(12,'ABID','male'),
(13,'AROJ','female'),
(14,'YASEEN','male'),
(15,'SARWAR','male'),
(16,'BAKSHAL','male'),
(17,'QADIR','male'),
(18,'GULBAR','male'),
(19,'YASMEEN','female'),
(20,'GULFI','female');

/*Table structure for table `candidate_jobs` */

DROP TABLE IF EXISTS `candidate_jobs`;

CREATE TABLE `candidate_jobs` (
  `cj_id` int(11) NOT NULL AUTO_INCREMENT,
  `condidate_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cj_id`),
  KEY `condidate_id` (`condidate_id`),
  KEY `job_id` (`job_id`),
  CONSTRAINT `candidate_jobs_ibfk_1` FOREIGN KEY (`condidate_id`) REFERENCES `candidate` (`condidate_id`),
  CONSTRAINT `candidate_jobs_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `candidate_jobs` */

insert  into `candidate_jobs`(`cj_id`,`condidate_id`,`job_id`) values 
(1,11,2),
(2,12,3),
(3,2,1),
(4,5,2),
(5,6,4),
(6,8,7),
(7,9,5),
(8,14,2),
(9,13,8),
(10,11,7),
(11,9,3),
(12,3,5);

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `company` */

insert  into `company`(`company_id`,`company_name`) values 
(1,'REXO'),
(2,'USA SW'),
(3,'SKILLPO'),
(4,'INNOVATIVE');

/*Table structure for table `contact_numbers` */

DROP TABLE IF EXISTS `contact_numbers`;

CREATE TABLE `contact_numbers` (
  `c_n_id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(20) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_n_id`),
  KEY `company_id` (`company_id`),
  CONSTRAINT `contact_numbers_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `contact_numbers` */

insert  into `contact_numbers`(`c_n_id`,`number`,`company_id`) values 
(1,903453432,2),
(2,93409239,4),
(3,89798000,3),
(4,235567777,1),
(5,34567788,2),
(6,345656754,3),
(7,345465756,4),
(8,23323434,2);

/*Table structure for table `job_applications` */

DROP TABLE IF EXISTS `job_applications`;

CREATE TABLE `job_applications` (
  `j_app_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`j_app_id`),
  KEY `job_id` (`job_id`),
  CONSTRAINT `job_applications_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `job_applications` */

insert  into `job_applications`(`j_app_id`,`date`,`job_id`) values 
(1,'2022-03-23',2),
(2,'2022-03-23',5),
(3,'2022-03-23',4),
(4,'2022-03-23',8),
(5,'2022-03-23',5),
(6,'2022-03-23',2),
(7,'2022-03-23',1),
(8,'2022-03-23',7),
(9,'2022-03-23',4);

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(30) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`job_id`),
  KEY `company_id` (`company_id`),
  CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jobs` */

insert  into `jobs`(`job_id`,`job_name`,`company_id`) values 
(1,'PHP JOB',2),
(2,'JAVA JOB',4),
(3,'PHP JOB',3),
(4,'PYTHON JOB',1),
(5,'PHP JOB',2),
(6,'JAVA JOB',3),
(7,'PHP JOB',4),
(8,'PYTHON JOB',2);

/*Table structure for table `pro_skills` */

DROP TABLE IF EXISTS `pro_skills`;

CREATE TABLE `pro_skills` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `skill` varchar(30) DEFAULT NULL,
  `complete_date` date DEFAULT NULL,
  `center` varchar(30) DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `candidate_id` (`candidate_id`),
  CONSTRAINT `pro_skills_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`condidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pro_skills` */

insert  into `pro_skills`(`pro_id`,`skill`,`complete_date`,`center`,`candidate_id`) values 
(1,'PHP','2022-03-24','HIDAYA',2),
(2,'PHP','2022-03-22','HIDAYA',5),
(3,'JAVA','2022-03-23','APTEC',8),
(4,'PHYTHON','2022-03-23','APTEC',10),
(5,'JAVA','2022-03-31','MEHRAN',17),
(6,'REACT','2022-03-23','SINDH',20),
(7,'MOBILE','2022-03-23','LUMHS',11),
(8,'PHP','2022-03-23','HIDAYA',11),
(9,'MOBILE','2022-03-23','MEHARAN',2);

/*Table structure for table `work_experiece` */

DROP TABLE IF EXISTS `work_experiece`;

CREATE TABLE `work_experiece` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `organization` varchar(40) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`exp_id`),
  KEY `candidate_id` (`candidate_id`),
  CONSTRAINT `work_experiece_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`condidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `work_experiece` */

insert  into `work_experiece`(`exp_id`,`organization`,`start_date`,`end_date`,`candidate_id`) values 
(1,'HIDAYA','2022-03-15','2022-03-23',12),
(2,'APTECT','2022-03-23','2022-03-23',11),
(3,'HIDAYA','2022-03-23','2022-03-23',13),
(4,'HIDAYA','2022-03-23','2022-03-23',13),
(5,'APTEC','2022-03-23','2022-03-23',14),
(6,'MEHARAN','2022-03-23','2022-03-23',15),
(7,'SINDH','2022-03-23','2022-03-23',1),
(8,'LUMHS','2022-03-23','2022-03-23',3),
(9,'HIDAYA','2022-03-23','2022-03-23',2),
(10,'MEHRAN','2022-03-23','2022-03-23',5),
(11,'SINDH','2022-03-23','2022-03-23',19),
(12,'HIDAYA','2022-03-23','2022-03-23',13),
(13,'LUMHS','2022-03-23','2022-03-23',9);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
