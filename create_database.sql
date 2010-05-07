# Sequel Pro dump
# Version 1630
# http://code.google.com/p/sequel-pro
#
# Host: 72.3.165.17 (MySQL 5.0.77-log)
# Database: 375570_billing
# Generation Time: 2010-05-07 12:36:43 -0400
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table billing
# ------------------------------------------------------------

DROP TABLE IF EXISTS `billing`;

CREATE TABLE `billing` (
  `id` int(11) NOT NULL auto_increment,
  `submit_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `client` varchar(200) NOT NULL,
  `due` varchar(40) NOT NULL,
  `employee` varchar(150) NOT NULL,
  `phasecode1` int(4) default NULL,
  `phasecode2` int(4) default NULL,
  `phasecode3` int(4) default NULL,
  `phasecode4` int(4) default NULL,
  `phasecode5` int(4) default NULL,
  `phasecode6` int(4) default NULL,
  `phasecode7` int(4) default NULL,
  `decription1` text,
  `decription2` text,
  `decription3` text,
  `decription4` text,
  `decription5` text,
  `decription6` text,
  `decription7` text,
  `cost1` decimal(11,2) default NULL,
  `cost2` decimal(11,2) default NULL,
  `cost3` decimal(11,2) default NULL,
  `cost4` decimal(11,2) default NULL,
  `cost5` decimal(11,2) default NULL,
  `cost6` decimal(11,2) default NULL,
  `cost7` decimal(11,2) default NULL,
  `total` decimal(11,2) default NULL,
  `comments` text,
  `invoice_sent` timestamp NULL default NULL,
  `status` varchar(20) default NULL,
  `initials` varchar(20) default NULL,
  `invoiceno` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=latin1;






/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
