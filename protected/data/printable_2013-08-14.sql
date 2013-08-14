# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.28)
# Datenbank: printable
# Erstellungsdauer: 2013-08-14 10:10:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Export von Tabelle tbl_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_categories`;

CREATE TABLE `tbl_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Export von Tabelle tbl_files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_files`;

CREATE TABLE `tbl_files` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `description` longtext,
  `upload_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Export von Tabelle tbl_files_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_files_categories`;

CREATE TABLE `tbl_files_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Export von Tabelle tbl_files_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_files_user`;

CREATE TABLE `tbl_files_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Export von Tabelle tbl_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `prename` varchar(128) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `name`, `prename`, `registration_date`, `admin`)
VALUES
	(1,'admin','admin','test1@example.com','Sascha','Thullner',NULL,1),
	(2,'test2','pass2','test2@example.com',NULL,NULL,NULL,0),
	(3,'test3','pass3','test3@example.com',NULL,NULL,NULL,0),
	(4,'test4','pass4','test4@example.com',NULL,NULL,NULL,0),
	(5,'test5','pass5','test5@example.com',NULL,NULL,NULL,0),
	(6,'test6','pass6','test6@example.com',NULL,NULL,NULL,0),
	(7,'test7','pass7','test7@example.com',NULL,NULL,NULL,0),
	(8,'test8','pass8','test8@example.com',NULL,NULL,NULL,0),
	(9,'test9','pass9','test9@example.com',NULL,NULL,NULL,0),
	(10,'test10','pass10','test10@example.com',NULL,NULL,NULL,0),
	(11,'test11','pass11','test11@example.com',NULL,NULL,NULL,0),
	(12,'test12','pass12','test12@example.com',NULL,NULL,NULL,0),
	(13,'test13','pass13','test13@example.com',NULL,NULL,NULL,0),
	(14,'test14','pass14','test14@example.com',NULL,NULL,NULL,0),
	(15,'test15','pass15','test15@example.com',NULL,NULL,NULL,0),
	(16,'test16','pass16','test16@example.com',NULL,NULL,NULL,0),
	(17,'test17','pass17','test17@example.com',NULL,NULL,NULL,0),
	(18,'test18','pass18','test18@example.com',NULL,NULL,NULL,0),
	(19,'test19','pass19','test19@example.com',NULL,NULL,NULL,0),
	(20,'test20','pass20','test20@example.com',NULL,NULL,NULL,0),
	(21,'test21','pass21','test21@example.com',NULL,NULL,NULL,0);

/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
