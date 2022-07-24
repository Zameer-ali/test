/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - university
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`university` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `university`;

/*Table structure for table `batch` */

DROP TABLE IF EXISTS `batch`;

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`batch_id`),
  KEY `dept_id` (`dept_id`),
  CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `batch` */

insert  into `batch`(`batch_id`,`name`,`dept_id`) values 
(1,'14CS',1),
(2,'13SW',2),
(3,'12TL',3),
(4,'13TL',3),
(5,'14SW',2);

/*Table structure for table `course_batch` */

DROP TABLE IF EXISTS `course_batch`;

CREATE TABLE `course_batch` (
  `cb_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cb_id`),
  KEY `batch_id` (`batch_id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `course_batch_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`),
  CONSTRAINT `course_batch_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `course_batch` */

insert  into `course_batch`(`cb_id`,`batch_id`,`course_id`) values 
(1,1,1),
(2,2,4),
(3,3,2),
(4,4,3),
(5,5,2),
(6,5,3);

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `courses` */

insert  into `courses`(`course_id`,`course_name`) values 
(1,'JAVA'),
(2,'PHP'),
(3,'NETWORKING'),
(4,'PHYTHON'),
(5,'WEB DEV'),
(6,'APP DEV');

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `department` */

insert  into `department`(`dept_id`,`dept_name`) values 
(1,'BS-CS'),
(2,'BS-SW'),
(3,'BS-TL'),
(4,'ENGLISH'),
(5,'BBA');

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(20) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  UNIQUE KEY `stu_id` (`stu_id`),
  KEY `dept_id` (`dept_id`),
  KEY `batch_id` (`batch_id`),
  CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  CONSTRAINT `student_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `student` */

insert  into `student`(`stu_id`,`stu_name`,`gender`,`dept_id`,`batch_id`) values 
(1,'ZAMEER','male',1,1),
(2,'SHAISTA','female',2,4),
(3,'ASAD','male',2,2),
(4,'YASIR','male',3,3),
(5,'AHMED','male',4,4),
(6,'NADIA','female',3,4),
(7,'REZA','female',2,4),
(8,'SHEZA','female',2,4);

/*Table structure for table `teacher` */

DROP TABLE IF EXISTS `teacher`;

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(20) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`teacher_id`),
  KEY `dept_id` (`dept_id`),
  CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `teacher` */

insert  into `teacher`(`teacher_id`,`teacher_name`,`gender`,`dept_id`) values 
(1,'KOMAL','female',1),
(2,'SHAISTA','female',4),
(3,'NASEER','male',2),
(4,'KARIM','male',3),
(5,'ALI','male',1);

/*Table structure for table `teacher_course` */

DROP TABLE IF EXISTS `teacher_course`;

CREATE TABLE `teacher_course` (
  `tc_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tc_id`),
  KEY `teacher_id` (`teacher_id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `teacher_course_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`),
  CONSTRAINT `teacher_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `teacher_course` */

insert  into `teacher_course`(`tc_id`,`course_id`,`teacher_id`) values 
(1,1,4),
(2,3,2),
(3,4,5),
(4,5,3),
(5,1,3),
(6,2,5);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
