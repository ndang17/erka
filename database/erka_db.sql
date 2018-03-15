/*
SQLyog Community v12.5.0 (64 bit)
MySQL - 10.1.26-MariaDB : Database - erka_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`erka_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `erka_db`;

/*Table structure for table `about_us` */

DROP TABLE IF EXISTS `about_us`;

CREATE TABLE `about_us` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tittle` varchar(200) DEFAULT NULL,
  `Description` text,
  `UpdateBy` varchar(200) DEFAULT NULL,
  `UpdateAt` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `about_us` */

insert  into `about_us`(`ID`,`Tittle`,`Description`,`UpdateBy`,`UpdateAt`) values 
(1,'Introduction Ok','<p><strong>My Company IS</strong></p>','nndg.ace3@gmail.com','2018-03-12 23:11:34');

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tittle` varchar(200) DEFAULT NULL,
  `Description` text,
  `Photo` varchar(200) DEFAULT NULL,
  `Status` enum('0','1') DEFAULT NULL,
  `UpdateBy` varchar(200) DEFAULT NULL,
  `UpdateAt` datetime DEFAULT NULL,
  `Order` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`ID`,`Tittle`,`Description`,`Photo`,`Status`,`UpdateBy`,`UpdateAt`,`Order`) values 
(1,'Tes Input Title','<p><strong>Oke Beklah</strong></p>','services_1521123718.jpg','1','nndg.ace3@gmail.com','2018-03-15 21:22:18',3),
(2,'k','<p>oke lah disini</p>','services_1521124183.jpg','1','nndg.ace3@gmail.com','2018-03-15 21:30:11',1),
(3,'Nandang ','<p>Oke beneran</p>','services_1521124617.JPG','1','nndg.ace3@gmail.com','2018-03-15 21:37:14',4),
(4,'Wisuda Udinus','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','services_1521124650.jpg','1','nndg.ace3@gmail.com','2018-03-15 21:38:54',2);

/*Table structure for table `sliders` */

DROP TABLE IF EXISTS `sliders`;

CREATE TABLE `sliders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tittle` varchar(200) DEFAULT NULL,
  `Description` text,
  `ReadMore` enum('0','1') DEFAULT NULL,
  `ReadMoreFile` varchar(200) DEFAULT NULL,
  `Photo` varchar(200) DEFAULT NULL,
  `Status` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `sliders` */

insert  into `sliders`(`ID`,`Tittle`,`Description`,`ReadMore`,`ReadMoreFile`,`Photo`,`Status`) values 
(1,'sac','                        ',NULL,NULL,'slider_1520780766.png','0'),
(2,'fvdvdscsdcsd','                        ',NULL,NULL,'slider_1520780847.jpg','0'),
(3,'x','                        ',NULL,NULL,'slider_1520780884.png','0'),
(4,'ok lah','text area                        ',NULL,NULL,'slider_1520781045.PNG','0');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `LastLogin` datetime DEFAULT NULL,
  `Status` enum('0','1') DEFAULT NULL,
  `UpdateBy` varchar(200) DEFAULT NULL,
  `UpdateAt` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`ID`,`Name`,`Email`,`Password`,`LastLogin`,`Status`,`UpdateBy`,`UpdateAt`) values 
(1,'Nandang','nndg.ace3@gmail.com','47aa7631f0864bd9e6869de450d476964e07dc83','2018-03-15 19:53:11','0',NULL,NULL),
(4,'Nandang 4','nndg.m94@gmail.com','9289ab660041422fc031e3f50866828b0c5066dd','2018-03-13 01:08:08','1','nndg.m94@gmail.com','2018-03-13 01:07:47'),
(8,'nandang','nndg@gmail.com','f28ffa2f0518da1f788e9aff723138336a08cc83','2018-03-13 01:00:43','1','nndg.ace3@gmail.com','2018-03-13 00:38:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
