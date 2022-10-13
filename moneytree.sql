/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.4.24-MariaDB : Database - moneytree
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`moneytree` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `moneytree`;

/*Table structure for table `bank_accounts` */

DROP TABLE IF EXISTS `bank_accounts`;

CREATE TABLE `bank_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `acc_ttitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acc_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acc_iban` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bank_accounts` */

insert  into `bank_accounts`(`id`,`bank_title`,`acc_ttitle`,`acc_no`,`acc_iban`) values (1,'HBL','shahzeb','02337823032723','A2302337823032723'),(2,'UBL','Shahzeb1','657890-9876546','04327657890-9876546'),(3,'UBL','Shahzeb1','657890-9876546','04327657890-9876546'),(4,'UBL','Shahzeb1','657890-9876546','04327657890-9876546');

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(250) NOT NULL,
  `blog_long_discript` varchar(10000) NOT NULL,
  `blog_short_discript` varchar(500) NOT NULL,
  `blog_image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `blog` */

insert  into `blog`(`id`,`blog_title`,`blog_long_discript`,`blog_short_discript`,`blog_image`) values (1,'lorem ipsum 121','Mubassir22','HELLLOP990','blog_thumbnails/WhatsApp Image 2022-06-12 at 9.44.03 PM.jpeg'),(2,'jnnnianis','HELLO','HELLO','https://bloomscape.com/wp-content/uploads/2021/06/bloomscape_mini-money-tree_charcoal_0621-scaled-e1625248480586.jpg'),(3,'Lorem Ipsum','HYED','233','https://cdn.pixabay.com/photo/2017/09/07/08/54/money-2724241__480.jpg'),(5,'hello','hii','hiiiii','blog_thumbnails/380-3806832_100-customer-satisfaction-guarantee-customer-satisfaction-guarantee-badge-removebg-preview.png');

/*Table structure for table `committe_subscription` */

DROP TABLE IF EXISTS `committe_subscription`;

CREATE TABLE `committe_subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `committee_num` int(11) NOT NULL,
  `committe_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `committee_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `committee_no` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `committe_subscription` */

/*Table structure for table `committee` */

DROP TABLE IF EXISTS `committee`;

CREATE TABLE `committee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `committee_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `committee` */

insert  into `committee`(`id`,`committee_name`,`time`) values (1,'6 Months','2022-07-26 01:36:50'),(2,'10 Months','2022-07-26 01:36:50');

/*Table structure for table `committee_user` */

DROP TABLE IF EXISTS `committee_user`;

CREATE TABLE `committee_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `committee_num` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `committe_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `committee_start_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `committee_no` int(11) NOT NULL,
  `status` enum('Paid','UnPaid','Pending','') COLLATE utf8_unicode_ci NOT NULL,
  `payment_no` int(11) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `months` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `committee_user` */

insert  into `committee_user`(`id`,`user_id`,`committee_num`,`committe_id`,`time`,`committee_start_month`,`amount`,`committee_no`,`status`,`payment_no`,`payment_date`,`months`) values (1,16,'1658848601',2,'2022-07-26 20:16:41','January',200,2,'UnPaid',1,'0000-00-00 00:00:00','January'),(2,16,'1658848601',2,'2022-07-26 20:16:41','January',200,2,'UnPaid',2,'0000-00-00 00:00:00','February'),(3,16,'1658848601',2,'2022-07-26 20:16:41','January',200,2,'UnPaid',3,'0000-00-00 00:00:00','March'),(4,16,'1658848601',2,'2022-07-26 20:16:41','January',200,2,'UnPaid',4,'0000-00-00 00:00:00','April'),(5,16,'1658848601',2,'2022-07-26 20:16:41','January',200,2,'UnPaid',5,'0000-00-00 00:00:00','May'),(6,16,'1658848601',2,'2022-07-26 20:16:41','January',200,2,'UnPaid',6,'0000-00-00 00:00:00','June'),(7,16,'1658848601',2,'2022-07-26 20:16:41','January',200,2,'UnPaid',7,'0000-00-00 00:00:00','July'),(8,16,'1658848601',2,'2022-07-26 20:16:41','January',200,2,'UnPaid',8,'0000-00-00 00:00:00','August'),(9,16,'1658848601',2,'2022-07-26 20:16:41','January',200,2,'UnPaid',9,'0000-00-00 00:00:00','September'),(10,16,'1658848601',2,'2022-07-26 20:16:41','January',200,2,'UnPaid',10,'0000-00-00 00:00:00','October'),(11,16,'1658848612',1,'2022-07-26 20:16:52','January',200,2,'UnPaid',1,'0000-00-00 00:00:00','January'),(12,16,'1658848612',1,'2022-07-26 20:16:52','January',200,2,'UnPaid',2,'0000-00-00 00:00:00','February'),(13,16,'1658848612',1,'2022-07-26 20:16:52','January',200,2,'UnPaid',3,'0000-00-00 00:00:00','March'),(14,16,'1658848612',1,'2022-07-26 20:16:52','January',200,2,'UnPaid',4,'0000-00-00 00:00:00','April'),(15,16,'1658848612',1,'2022-07-26 20:16:52','January',200,2,'UnPaid',5,'0000-00-00 00:00:00','May'),(16,16,'1658848612',1,'2022-07-26 20:16:52','January',200,2,'UnPaid',6,'0000-00-00 00:00:00','June'),(17,16,'1658848730',1,'2022-07-26 20:19:17','March',200,2,'Paid',1,'0000-00-00 00:00:00','March'),(18,16,'1658848730',1,'2022-07-26 20:18:50','March',200,2,'UnPaid',2,'0000-00-00 00:00:00','April'),(19,16,'1658848730',1,'2022-07-26 20:20:05','March',200,2,'Paid',3,'0000-00-00 00:00:00','May'),(20,16,'1658848730',1,'2022-07-26 20:18:50','March',200,2,'UnPaid',4,'0000-00-00 00:00:00','June'),(21,16,'1658848730',1,'2022-07-26 20:18:50','March',200,2,'UnPaid',5,'0000-00-00 00:00:00','July'),(22,16,'1658848730',1,'2022-07-26 20:18:50','March',200,2,'UnPaid',6,'0000-00-00 00:00:00','August'),(23,16,'1658854246',1,'2022-07-26 21:50:46','March',200,2,'UnPaid',1,'0000-00-00 00:00:00','March'),(24,16,'1658854246',1,'2022-07-26 21:50:46','March',200,2,'UnPaid',2,'0000-00-00 00:00:00','April'),(25,16,'1658854246',1,'2022-07-26 21:50:46','March',200,2,'UnPaid',3,'0000-00-00 00:00:00','May'),(26,16,'1658854246',1,'2022-07-26 21:50:46','March',200,2,'UnPaid',4,'0000-00-00 00:00:00','June'),(27,16,'1658854246',1,'2022-07-26 21:50:46','March',200,2,'UnPaid',5,'0000-00-00 00:00:00','July'),(28,16,'1658854246',1,'2022-07-26 21:50:46','March',200,2,'UnPaid',6,'0000-00-00 00:00:00','August');

/*Table structure for table `faqs` */

DROP TABLE IF EXISTS `faqs`;

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `answer` varchar(10000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `faqs` */

insert  into `faqs`(`id`,`question`,`answer`,`time`) values (1,'C#,Python,Ruby,laravel1','C#,Python,Ruby,laravel','2022-07-22 00:12:34'),(2,'Cow,dogs','Cow,dogs','2022-07-15 10:11:03'),(3,'What is your First name?','Muhammad','2022-04-04 20:12:22'),(4,'What is your last name?','Yousuf','2022-04-04 20:12:22'),(5,'what is your name','sayf','2022-07-07 16:35:00');

/*Table structure for table `kyc_approval` */

DROP TABLE IF EXISTS `kyc_approval`;

CREATE TABLE `kyc_approval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applied_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `cnic` int(11) NOT NULL,
  `utility_bill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Unapproved','Approved','Reject','') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `kyc_approval` */

insert  into `kyc_approval`(`id`,`applied_date`,`user_id`,`cnic`,`utility_bill`,`status`) values (1,'2022-05-17 05:08:44',1,0,'1786194895image_picker6509116533986288950.jpg','Unapproved'),(2,'2022-05-26 02:35:53',5,5456777,'138894074image_picker1427329030.jpg','Unapproved'),(3,'2022-05-26 02:54:43',13,52108,'2139067074image_picker2139608576502456774.jpg','Unapproved');

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `notifications` */

insert  into `notifications`(`id`,`userid`,`title`,`message`,`date`) values (4,2,'Tree Money1000','Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.','2022-07-20 00:00:38'),(5,2,'tree money ','Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.','2022-04-28 21:58:58'),(6,2,'tree money ','Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.','2022-04-28 21:58:58'),(7,2,'tree money ','Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.','2022-04-28 21:58:58'),(8,2,'tree money ','Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.','2022-04-28 21:58:58'),(9,2,'tree money ','Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.','2022-04-28 21:58:58'),(10,2,'tree money ','Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.','2022-04-28 21:58:58'),(11,2,'tree money ','Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.','2022-04-28 21:58:58');

/*Table structure for table `plan_posting` */

DROP TABLE IF EXISTS `plan_posting`;

CREATE TABLE `plan_posting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `profit_percent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_posting` */

insert  into `plan_posting`(`id`,`plan_id`,`date`,`profit_percent`) values (1,1,'2022-07-22 11:03:49',20),(2,1,'2022-04-19 16:02:40',15),(3,1,'2022-04-20 16:03:55',10),(4,1,'2022-04-21 16:05:33',20),(5,1,'2022-04-22 16:05:33',10),(6,1,'2022-04-23 16:06:41',35),(7,1,'2022-04-24 16:06:41',40),(8,1,'2022-04-17 15:16:09',39),(9,1,'2022-04-16 15:20:47',40),(10,1,'2022-04-15 15:22:32',42),(11,1,'2022-04-14 15:23:06',43),(12,1,'2022-04-13 15:23:30',44),(13,1,'2022-04-12 15:23:44',25),(14,1,'2022-04-11 15:24:37',63),(15,1,'2022-04-10 15:25:56',49),(16,1,'2022-04-09 15:25:56',50),(17,1,'2022-04-08 15:26:41',21),(18,1,'2022-04-07 15:26:41',22),(19,1,'2022-04-06 15:28:48',42),(20,1,'2022-04-05 15:28:48',44),(21,1,'2022-04-04 15:29:18',70),(22,1,'2022-04-03 15:29:18',71),(23,1,'2022-04-02 15:31:34',73),(24,1,'2022-04-01 15:31:34',74),(25,1,'2021-01-30 15:39:17',10),(26,1,'2021-01-29 15:39:17',11),(27,1,'2021-01-28 15:40:47',22),(28,1,'2021-01-27 15:39:17',0),(29,1,'2021-01-26 15:39:17',23),(30,1,'2021-01-25 15:39:17',24),(31,1,'2021-01-24 15:39:17',25),(32,1,'2021-01-23 15:39:17',26),(33,1,'2021-02-01 15:44:17',14),(34,1,'2021-02-01 15:44:17',16),(35,1,'2021-02-02 15:44:17',15),(36,1,'2021-02-03 15:44:17',14),(37,1,'2021-03-02 15:44:17',10),(38,1,'2021-03-03 15:44:17',11),(39,1,'2021-04-06 15:44:17',10),(40,1,'2021-04-13 15:44:17',11),(41,1,'2021-04-16 15:44:17',14),(42,4,'2021-04-15 15:44:17',15),(53,1,'2022-04-26 23:41:50',10),(56,1,'2021-05-05 15:51:29',15),(57,1,'2021-06-08 15:51:29',16),(58,1,'2021-07-05 15:51:29',18),(59,1,'2021-08-02 15:51:29',19),(60,1,'2021-09-15 15:51:29',11),(61,1,'2021-10-19 15:51:29',12),(62,1,'2021-11-16 15:51:29',10),(63,1,'2021-12-09 15:51:29',12),(64,1,'2020-12-01 15:51:29',10),(65,1,'2020-11-02 15:51:29',11),(66,1,'2020-10-05 15:51:29',14),(67,4,'2020-09-08 15:51:29',14),(69,2,'2022-05-14 15:51:29',35),(70,2,'2022-05-13 15:51:29',36),(71,2,'2022-05-12 19:12:51',37),(72,2,'2022-05-11 15:51:29',38),(73,2,'2022-05-10 15:51:29',39),(74,2,'2022-05-09 15:51:29',40),(75,2,'2022-05-08 15:51:29',41),(76,2,'2022-05-07 15:51:29',42),(77,3,'2022-05-14 15:51:29',20),(78,3,'2022-04-14 15:51:29',21),(79,3,'2022-03-14 15:51:29',22),(80,3,'2022-02-14 15:51:29',23),(81,3,'2022-01-14 15:51:29',24),(83,4,'2022-05-14 15:51:29',22),(84,4,'2021-05-08 15:51:29',23),(85,4,'2020-09-14 15:51:29',20),(86,4,'2019-09-15 15:51:29',19),(87,4,'2018-09-08 15:51:29',18),(88,4,'2017-09-08 15:51:29',17),(89,4,'2016-09-08 15:51:29',16),(90,4,'2015-09-14 15:51:29',15),(91,4,'2014-09-08 15:51:29',14),(92,4,'2013-09-08 15:51:29',13),(93,2,'2022-05-14 15:51:29',16),(94,2,'2022-04-14 15:51:29',17),(95,2,'2022-03-14 15:51:29',14),(96,2,'2022-02-14 15:51:29',15),(97,2,'2022-01-14 15:51:29',10),(98,2,'2022-05-14 15:51:29',22),(99,2,'2021-05-14 15:51:29',23),(100,2,'2020-05-14 15:51:29',20),(101,2,'2019-05-14 15:51:29',19),(102,2,'2018-05-14 15:51:29',18),(103,2,'2017-05-14 15:51:29',17),(104,2,'2016-05-14 15:51:29',19),(105,2,'2015-05-14 15:51:29',18),(106,2,'2014-05-14 15:51:29',20),(107,2,'2013-05-14 15:51:29',21),(108,3,'2022-05-13 15:51:29',13),(109,3,'2022-05-12 15:51:29',12),(110,3,'2022-05-19 15:51:29',12),(111,3,'2022-05-11 15:51:29',11),(112,3,'2022-05-10 15:51:29',10),(113,3,'2022-05-09 15:51:29',9),(114,3,'2022-05-13 19:33:07',8),(115,2,'2022-05-07 15:51:29',7),(116,2,'2022-05-06 15:51:29',6),(117,2,'2022-05-05 15:51:29',5),(118,2,'2022-05-04 15:51:29',4),(119,2,'2022-05-03 15:51:29',20),(120,2,'2022-05-02 15:51:29',2),(121,2,'2022-05-01 15:51:29',1),(122,3,'2022-05-14 15:51:29',22),(123,3,'2021-05-14 15:51:29',21),(124,3,'2020-05-14 15:51:29',20),(125,3,'2019-05-14 15:51:29',19),(126,3,'2018-05-14 15:51:29',18),(127,3,'2017-05-14 15:51:29',17),(128,3,'2016-05-14 15:51:29',16),(129,3,'2015-05-14 15:51:29',15),(130,3,'2014-05-14 15:51:29',14),(131,3,'2013-05-14 15:51:29',13),(132,3,'2012-05-14 15:51:29',12),(133,3,'2011-05-14 15:51:29',11),(134,3,'2010-05-14 15:51:29',10),(135,4,'2022-05-13 15:51:29',13),(136,4,'2022-05-12 15:51:29',12),(137,4,'2022-05-12 15:51:29',12),(138,4,'2022-05-11 15:51:29',11),(139,4,'2022-05-10 15:51:29',10),(140,4,'2022-05-09 15:51:29',9),(141,4,'2022-05-08 15:51:29',8),(142,4,'2022-05-07 15:51:29',7),(143,4,'2022-05-06 15:51:29',6),(144,4,'2022-05-05 15:51:29',5),(145,4,'2022-05-04 15:51:29',4),(146,4,'2022-05-03 15:51:29',3),(147,4,'2022-05-02 15:51:29',2),(148,4,'2022-05-01 15:51:29',1),(149,4,'2022-04-14 15:51:29',4),(150,4,'2022-03-14 15:51:29',3),(151,4,'2022-03-14 15:51:29',23),(152,4,'2022-02-14 15:51:29',2),(153,4,'2022-01-14 15:51:29',40);

/*Table structure for table `plan_user` */

DROP TABLE IF EXISTS `plan_user`;

CREATE TABLE `plan_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `type` enum('sell','purchase') NOT NULL,
  `status` tinyint(1) NOT NULL,
  `amount` float NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `plan_user` */

insert  into `plan_user`(`id`,`user_id`,`plan_id`,`type`,`status`,`amount`,`create_date`) values (1,1,1,'purchase',0,20,'2022-07-22 03:53:17'),(2,1,1,'purchase',0,25,'2022-05-17 05:04:55'),(3,1,4,'purchase',0,5,'2022-05-17 05:05:16'),(4,1,3,'purchase',0,5000,'2022-05-17 05:05:34'),(5,3,1,'purchase',0,5000,'2022-05-17 06:10:03'),(6,3,4,'purchase',0,10000,'2022-05-17 06:10:42'),(7,17,1,'purchase',0,5000,'2022-06-13 07:38:12'),(8,2,1,'sell',0,0,'2022-07-10 00:07:49');

/*Table structure for table `plans` */

DROP TABLE IF EXISTS `plans`;

CREATE TABLE `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_amount` double NOT NULL,
  `plan_mode` varchar(100) NOT NULL,
  `plan_details` varchar(250) NOT NULL,
  `maturityperiod` varchar(250) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `plans` */

insert  into `plans`(`id`,`plan_amount`,`plan_mode`,`plan_details`,`maturityperiod`,`create_time`,`create_by`) values (1,2000,'3 Months','assanasonasodsfasd','3 M','2022-07-18 02:20:32',0),(2,300,'6 Months','oamasomasomas','6 M','2022-05-14 03:09:03',0),(3,1000,'1 Year','asasasas','1 Y','2022-05-14 03:09:12',0),(4,2000,'3 Year Plus','saasnsaom','3 Year','2022-05-14 03:09:24',0),(5,3000,'Crorepathi','saasnsaom','5 year','2022-05-14 03:09:24',0),(6,0,'','','','2022-07-18 02:01:30',0);

/*Table structure for table `profit` */

DROP TABLE IF EXISTS `profit`;

CREATE TABLE `profit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_input_invest` double NOT NULL,
  `plan_use_amount` double NOT NULL,
  `plan_use_admin_input` double NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `profit` */

/*Table structure for table `referral` */

DROP TABLE IF EXISTS `referral`;

CREATE TABLE `referral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `reffered_by` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `referral` */

insert  into `referral`(`id`,`user_id`,`reffered_by`,`time`) values (1,0,0,'2022-05-19 17:30:30'),(2,0,0,'2022-05-20 22:13:14'),(3,0,0,'2022-05-20 23:19:56'),(4,0,0,'2022-05-21 04:23:04'),(5,0,0,'2022-05-23 20:46:19'),(6,0,0,'2022-05-23 23:56:28'),(7,0,0,'2022-05-24 03:29:30'),(8,0,0,'2022-05-24 03:40:29'),(9,0,0,'2022-05-24 05:09:48'),(10,0,0,'2022-05-24 23:47:06'),(11,0,0,'2022-05-25 00:54:28'),(12,0,0,'2022-05-25 02:35:02'),(13,0,0,'2022-05-25 02:51:36'),(14,0,0,'2022-05-25 02:55:39'),(15,0,0,'2022-05-25 18:45:14'),(16,0,0,'2022-05-25 23:34:08'),(17,0,0,'2022-05-25 23:44:02'),(18,0,0,'2022-05-26 01:25:14'),(19,0,0,'2022-05-26 01:34:34'),(20,0,0,'2022-05-26 01:46:22'),(21,0,0,'2022-05-26 02:42:11'),(22,0,0,'2022-05-26 02:42:48'),(23,0,0,'2022-05-26 02:43:56'),(24,0,0,'2022-05-26 03:00:30'),(25,0,0,'2022-05-26 03:04:48'),(26,0,0,'2022-05-26 03:34:03'),(27,0,0,'2022-05-26 04:21:14'),(28,0,0,'2022-05-26 04:35:40'),(29,0,0,'2022-07-10 01:40:52'),(30,0,0,'2022-07-10 01:54:58');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `token` varchar(250) NOT NULL,
  `referal_id` varchar(100) NOT NULL,
  `profile_image` varchar(250) NOT NULL,
  `login_info` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `social_id` varchar(250) DEFAULT NULL,
  `bankname` varchar(255) DEFAULT NULL,
  `accounttitle` varchar(255) DEFAULT NULL,
  `iban` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`create_time`,`name`,`email`,`phone_number`,`password`,`token`,`referal_id`,`profile_image`,`login_info`,`social_id`,`bankname`,`accounttitle`,`iban`) values (1,'2022-05-28 17:20:42','Shahzeb Shahzeb','sshahzeb762@gmail.com','03470216835',NULL,'34ed4cbe33168f4a782b414f0471c3','SHAHZ18','1673715327image_picker7169095324085879498.jpg','2022-05-28 17:20:42','108748686512667638205','Hbl','Sh','0027829'),(2,'2022-05-26 04:27:55','Muhammad Yousuf','muhammad.yousuf786678@gmail.com','03223087547',NULL,'52b397b474149e25421b0614206d1e','MUHAM41','https://lh3.googleusercontent.com/a-/AOh14Gg5WSVHXNszn6IcAl-I8pB1ZOUGREpcC0qEtNzL','2022-05-26 04:27:55','116702045659236458430','Meezan','Cash','536486980808'),(3,'2022-05-17 05:51:46','Hooker Man','hookerman3@gmail.com',NULL,NULL,'ac885cbdf8b0bb7d3c01f6d2ca9880','HOOKE70','https://lh3.googleusercontent.com/a-/AOh14Ggl9TbqaYmXJf1Rtk7tcVvbC906jl-mBeWIVAex','2022-05-17 05:51:46','110016431408404997007',NULL,NULL,NULL),(4,'2022-05-20 23:20:34','A','A@gmail.com','12345778282','12345678','821baf3609791507e6eb30eb92de06','JJJ958282','','2022-05-20 23:20:34',NULL,'null','null','null'),(5,'2022-05-19 18:03:50','shahzeb quantex','shahzeb.quantex@gmail.com',NULL,NULL,'3e370c9eb109ae9a3b0c392e1e59d2','SHAHZ40','null','2022-05-19 18:03:50','114185325380483965475',NULL,NULL,NULL),(6,'2022-05-20 18:15:45','GEC C','pz.educ@gmail.com',NULL,NULL,'7a26bf3da47094fe99183a512d8841','GECC58','null','2022-05-20 18:15:45','110639213507652789552',NULL,NULL,NULL),(7,'2022-05-21 04:47:09','Sufiyan Khanzada','sufiyankhanzada1254@gmail.com',NULL,NULL,'597c8df011e7d588e45aee7a2c4afc','SUFIY41','https://lh3.googleusercontent.com/a-/AOh14GjJ7MrwWvLD2FdDtUOL_7wzrVpkkszFyAAQBvsEFA','2022-05-21 04:47:09','111330217189483349160',NULL,NULL,NULL),(8,'2022-05-21 07:04:21','null','ronniespencer.16902@gmail.com',NULL,NULL,'cfd5ed70399cfe09252ebdfb41b85a','NULL71','null','2022-05-21 07:04:21','114601211552490951607',NULL,NULL,NULL),(9,'2022-05-23 20:46:04','Muhammad Yousuf','MuhammadYousuf786678@gmail.com','03223087547','12345678','4f84a1fa1a2362f2392d91778ddf41','MUHAM387547','','2022-05-23 20:46:04',NULL,NULL,NULL,NULL),(10,'2022-05-24 03:33:32','Muhammad Yousuf','muhammadyousufgemini@gmail.com',NULL,NULL,'1d20dccf685c2334a912aa9b1ef15c','MUHAM74','null','2022-05-24 03:33:32','118100136072291488638',NULL,NULL,NULL),(11,'2022-05-24 05:35:57','Shahzeb Naqvi','shahzeb.naqvi12@yahoo.com',NULL,NULL,'37b83a5ab8f2a695a5921a40ffb54a','SHAHZ93','https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=5074663275932730&width=200&ext=1655926556&hash=AeSngkC4d_Wr5Y5NT5E','2022-05-24 05:35:57','5074663275932730',NULL,NULL,NULL),(12,'2022-06-13 18:58:02','Waleed Asad','null','null',NULL,'0aadf5e4164d1b55af07a8f1e9790a','WALEE32','https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=125581570138316&width=200&ext=1655930516&hash=AeQ0uiOo5qeH5yh1XwY','2022-06-13 18:58:02','125581570138316','null','null','null'),(13,'2022-05-24 23:46:53','Admin','admin@gmail.com','03212134568','Asad12345','253a359884dd7266dec7e9630da934','ADMIN184568','','2022-05-24 23:46:53',NULL,NULL,NULL,NULL),(14,'2022-05-26 01:53:19','Muhammad Yousuf','null',NULL,NULL,'994a0dbc147640be7d2892e452dd36','MUHAM61','https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1631657217212552&width=200&ext=1656085997&hash=AeQM49NM044JOdkmcIc','2022-05-26 01:53:19','1631657217212552',NULL,NULL,NULL),(15,'2022-05-26 07:06:13','null','nelsonhawkins.77872@gmail.com',NULL,NULL,'e8902b4f4e696d1a15d77e7b70b2b0','NULL51','null','2022-05-26 07:06:13','113951256139816197276',NULL,NULL,NULL),(16,'2022-07-08 18:31:12','Shahzeb Naqvi','shahzeb.naqvi12@gmail.com',NULL,NULL,'b59bfebf1175c671fa17ca6454d392','SHAHZ13','1079459780image_picker6305156351164404471.jpg','2022-07-08 18:31:12','108970029339482958627',NULL,NULL,NULL),(17,'2022-06-13 07:33:49','waleed asad','waleedasad27@gmail.com',NULL,NULL,'2ea551dfaa887f5c3b4e12adfc60fb','WALEE84','null','2022-06-13 07:33:49','113253517895012849613',NULL,NULL,NULL),(18,'2022-07-06 23:54:52','Zayn Rajput™','zayn.premio@gmail.com',NULL,NULL,'ab421016168dbdcce91835826b03a4','ZAYN85','https://lh3.googleusercontent.com/a-/AOh14GjSKU0L_LEsLSnn5sff0bIRevXYsaGdm6tKpi1v9g','2022-07-06 23:54:52','115874241006238216664',NULL,NULL,NULL),(19,'2022-07-10 01:40:41','Yousuf ','muhammad.yousuf@gmail.com','03223087541','12345678','ba83b13536a95ddbc2323e56f5aea1','YOUSU967541','','2022-07-10 01:40:41',NULL,NULL,NULL,NULL);

/*Table structure for table `wallet` */

DROP TABLE IF EXISTS `wallet`;

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tranaction_type` enum('add','subtract','withdraw','credit','profit','referal') CHARACTER SET utf8 NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` double NOT NULL,
  `image` varchar(250) CHARACTER SET latin1 NOT NULL,
  `status` enum('Not Approved','Approved','Rejected') NOT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Data for the table `wallet` */

insert  into `wallet`(`id`,`user_id`,`tranaction_type`,`time`,`amount`,`image`,`status`,`plan_name`) values (1,1,'credit','2022-07-22 03:48:54',50000,'wallet_Pics/Code-It-Logical-HD-Wallpaper-1.jpg','Not Approved','sufiysn'),(6,1,'withdraw','2022-05-17 05:06:40',440,'','Approved',NULL),(7,3,'credit','2022-05-17 06:07:44',50000,'138607536950c010e3-2944-479a-958d-35f1be2598533793221898319126893.jpg','Approved',NULL),(8,3,'credit','2022-05-17 06:07:41',50000,'1676947929ecfd14a9-699f-4628-8a92-49657353cb64874755532919993746.jpg','Not Approved',NULL),(9,3,'subtract','2022-05-17 06:10:03',5000,'','Approved',NULL),(10,3,'subtract','2022-05-17 06:10:42',10000,'','Approved',NULL),(11,3,'withdraw','2022-05-17 06:11:19',5000,'','Not Approved',NULL),(12,1,'withdraw','2022-05-17 23:04:12',220,'','Not Approved',NULL),(13,1,'withdraw','2022-05-19 00:05:08',5000,'','Not Approved',NULL),(14,4,'credit','2022-05-20 23:21:07',10000,'1188631904image_picker1506970370.png','Not Approved',NULL),(15,2,'credit','2022-05-24 01:37:47',5000,'641750491image_picker3377935700426616497.png','Not Approved',NULL),(16,5,'profit','2022-05-26 02:16:29',222,'47059563image_picker446889438.jpg','Approved',NULL),(17,13,'credit','2022-05-26 03:08:13',2000,'1279272474image_picker1547995838886968025.jpg','Not Approved',NULL),(18,5,'profit','2022-05-26 03:19:49',2222,'1431509961image_picker139666235.jpg','Approved',NULL),(19,2,'credit','2022-05-26 04:25:05',10000,'1757951770image_picker905629837294508778.jpg','Not Approved',NULL),(20,17,'credit','2022-06-13 07:36:49',50000,'373148835d7163f32-0c1f-4f67-91d2-abcec859d840448735226.jpg','Approved',NULL),(21,17,'subtract','2022-06-13 07:38:12',5000,'','Approved',NULL),(22,12,'credit','2022-06-28 16:30:10',22,'1937681731image_picker4523670528166089266.jpg','Not Approved',NULL),(23,12,'credit','2022-07-02 01:18:36',2000,'1364938632b2cac495-30f0-4d02-aaac-c41e0ecb898c6935248691144377033.jpg','Approved',NULL),(24,12,'withdraw','2022-07-02 01:22:29',1500,'','Approved',NULL),(25,2,'add','2022-07-10 00:07:49',0,'','Approved',NULL);

/*Table structure for table `youtubelinks` */

DROP TABLE IF EXISTS `youtubelinks`;

CREATE TABLE `youtubelinks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `link` varchar(300) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `youtubelinks` */

insert  into `youtubelinks`(`id`,`title`,`link`,`thumbnail`,`time`) values (17,'messs222237','hello12261','video-thumbnails/Api Authorization.png','2022-07-22 00:12:44');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
