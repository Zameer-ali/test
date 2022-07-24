/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.22-MariaDB : Database - dummy_data
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dummy_data` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dummy_data`;

/*Table structure for table `dummy` */

DROP TABLE IF EXISTS `dummy`;

CREATE TABLE `dummy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

/*Data for the table `dummy` */

insert  into `dummy`(`id`,`product`,`name`,`no`) values 
(1,'Eldon Base for stackable storage shelf, platinum','Muhammed MacIntyre',3),
(2,'1.7 Cubic Foot Compact \"Cube\" Office Refrigerators','Barry French',293),
(3,'Cardinal Slant-D? Ring Binder, Heavy Gauge Vinyl','Barry French',293),
(4,'R380','Clay Rozendal',483),
(5,'Holmes HEPA Air Purifier','Carlos Soltero',515),
(6,'G.E. Longer-Life Indoor Recessed Floodlight Bulbs','Carlos Soltero',515),
(7,'Angle-D Binders with Locking Rings, Label Holders','Carl Jackson',613),
(8,'SAFCO Mobile Desk Side File, Wire Frame','Carl Jackson',613),
(9,'SAFCO Commercial Wire Shelving, Black','Monica Federle',643),
(10,'Xerox 198','Dorothy Badders',678),
(11,'Xerox 1980','Neola Schneider',807),
(12,'Advantus Map Pennant Flags and Round Head Tacks','Neola Schneider',807),
(13,'Holmes HEPA Air Purifier','Carlos Daly',868),
(14,'DS/HD IBM Formatted Diskettes, 200/Pack - Staples','Carlos Daly',868),
(15,'Wilson Jones 1\" Hanging DublLock? Ring Binders','Claudia Miner',933),
(16,'Ultra Commercial Grade Dual Valve Door Closer','Neola Schneider',995),
(17,'#10-4 1/8\" x 9 1/2\" Premium Diagonal Seam Envelopes','Allen Rosenblatt',998),
(18,'Hon 4-Shelf Metal Bookcases','Sylvia Foulston',1154),
(19,'Lesro Sheffield Collection Coffee Table, End Table, Center Table, Corner Table','Sylvia Foulston',1154),
(20,'g520','Jim Radford',1344),
(21,'LX 788','Jim Radford',1344),
(22,'Avery 52','Carlos Soltero',1412),
(23,'Plymouth Boxed Rubber Bands by Plymouth','Carlos Soltero',1412),
(24,'GBC Pre-Punched Binding Paper, Plastic, White, 8-1/2\" x 11\"','Carl Ludwig',1539),
(25,'Maxell 3.5\" DS/HD IBM-Formatted Diskettes, 10/Pack','Carl Ludwig',1539),
(26,'Newell 335','Don Miller',1540),
(27,'SANFORD Liquid Accent? Tank-Style Highlighters','Annie Cyprus',1702),
(28,'Canon PC940 Copier','Carl Ludwig',1761),
(29,'Tenex Personal Project File with Scoop Front Design, Black','Carlos Soltero',1792),
(30,'Col-Erase? Pencils with Erasers','Grant Carroll',2275),
(31,'Imation 3.5\" DS/HD IBM Formatted Diskettes, 10/Pack','Don Miller',2277),
(32,'White Dual Perf Computer Printout Paper, 2700 Sheets, 1 Part, Heavyweight, 20 lbs., 14 7/8 x 11','Don Miller',2277),
(33,'Self-Adhesive Address Labels for Typewriters by Universal','Alan Barnes',2532),
(34,'Accessory37','Alan Barnes',2532),
(35,'Fuji 5.2GB DVD-RAM','Jack Garza',2631),
(36,'Bevis Steel Folding Chairs','Julia West',2757),
(37,'Avery Binder Labels','Eugene Barchas',2791),
(38,'Hon Every-Day? Chair Series Swivel Task Chairs','Eugene Barchas',2791),
(39,'IBM Multi-Purpose Copy Paper, 8 1/2 x 11\", Case','Eugene Barchas',2791),
(40,'Global Troy? Executive Leather Low-Back Tilter','Edward Hooks',2976),
(41,'XtraLife? ClearVue? Slant-D? Ring Binders by Cardinal','Brad Eason',3232),
(42,'Computer Printout Paper with Letter-Trim Perforations','Nicole Hansen',3524),
(43,'6160','Dorothy Wardle',3908),
(44,'Avery 49','Aaron Bergman',4132),
(45,'Hoover Portapower? Portable Vacuum','Jim Radford',4612),
(46,'Timeport L7089','Annie Cyprus',4676),
(47,'Avery 510','Annie Cyprus',4676),
(48,'Xerox 1881','Annie Cyprus',4676),
(49,'LX 788','Annie Cyprus',4676),
(50,'Cardinal Slant-D? Ring Binder, Heavy Gauge Vinyl','Annie Cyprus',5284);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
