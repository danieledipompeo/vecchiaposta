-- MySQL dump 10.13  Distrib 5.5.27, for Linux (i686)
--
-- Host: localhost    Database: vecchiaposta
-- ------------------------------------------------------
-- Server version	5.5.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titolo` varchar(50) DEFAULT NULL,
  `descrizione` text,
  `effetto` text,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (1,'sliderHome','slider per le immagini della home page',NULL,100,420);
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_entities`
--

DROP TABLE IF EXISTS `sys_entities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_entities` (
  `name` varchar(50) NOT NULL,
  `content_name` varchar(50) DEFAULT NULL,
  `owner` varchar(1) DEFAULT NULL,
  `forum` varchar(1) DEFAULT NULL,
  `forum_moderator` int(10) unsigned NOT NULL,
  `moderator_group` int(10) unsigned NOT NULL,
  `priviledged_group` int(10) unsigned NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_entities`
--

LOCK TABLES `sys_entities` WRITE;
/*!40000 ALTER TABLE `sys_entities` DISABLE KEYS */;
INSERT INTO `sys_entities` VALUES ('slider','slider','','',0,0,0),('sys_entities','sys_entities','','',0,0,0),('sys_file','sys_file','','',0,0,0),('sys_group','sys_group','','',0,0,0),('sys_image','sys_image','1','',0,0,0),('sys_image_slider','sys_image_slider','','',0,0,0),('sys_log','sys_log','','',0,0,0),('sys_menu','sys_menu','','',0,0,0),('sys_news','sys_news','1','',0,0,0),('sys_page','sys_page','1','',0,0,0),('sys_section','sys_section','','',0,0,0),('sys_service','sys_service','','',0,0,0),('sys_servicecategory','sys_servicecategory','','',0,0,0),('sys_service_sys_group','sys_service_sys_group','','',0,0,0),('sys_user','sys_user','','',0,0,0),('sys_user_sys_group','sys_user_sys_group','','',0,0,0);
/*!40000 ALTER TABLE `sys_entities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_file`
--

DROP TABLE IF EXISTS `sys_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `data` longblob NOT NULL,
  `size` int(11) DEFAULT NULL,
  `filetype` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_file`
--

LOCK TABLES `sys_file` WRITE;
/*!40000 ALTER TABLE `sys_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_group`
--

DROP TABLE IF EXISTS `sys_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_group`
--

LOCK TABLES `sys_group` WRITE;
/*!40000 ALTER TABLE `sys_group` DISABLE KEYS */;
INSERT INTO `sys_group` VALUES (1,'Administrator','Administration Group.');
/*!40000 ALTER TABLE `sys_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_image`
--

DROP TABLE IF EXISTS `sys_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner` varchar(50) DEFAULT NULL,
  `filename` varchar(255) NOT NULL,
  `data` longblob NOT NULL,
  `size` int(11) DEFAULT NULL,
  `filetype` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_image`
--

LOCK TABLES `sys_image` WRITE;
/*!40000 ALTER TABLE `sys_image` DISABLE KEYS */;
INSERT INTO `sys_image` VALUES (17,'admin','camera32.png','iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAwOC8xOC8wOaw6EPwAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzQGstOgAAABqElEQVRYhe2WP08VQRTFf888S2zUwg4SCgsSBUsLLCzuaeB9AAs+gAWJHYXxGxDoKPwKitUpX2iMiUqCkY74h8SSGGsSh4K3ZCHu7svAsphwki127pl7z8zsuTu9lBJd4kan1a8FXAUB/dyJkjaBxRrKO9uDpjy9HBdImgS+j0Gdsv2jjnBqByRVqrHdK70uj1G84NVyc7+BpYvi9VJKtStvC8WO9s8OXAbKC/5/bVhA0iLwsDS0aXundQGSHgBvgdvAHvAbmARWJL0HBrb/NOXJOoJR8SHwFZi1/cj2U9vTwGPgHjCUdKsVAcAqsG17wfa3csD2J2DA8c6sNSU6jw1nbO9WBSU9B9aBf7qrcF22C+qKj7ABNC6sNRvaPgQOOxMg6S5wszUBkuYaKEtUnP8ppJSIiJRSYtwnIoYR8TEi7lTE70fEQUSsVsRP6uU2omWO+8AbSS+Az7b/SuoDz4CXwD7wqilR1hGMWu0TYAL4AOxL2gV+Aa+Bn8D8OJ0wuxXb/gLMSpofiSlwOf+CkpAtYCt3/omALi4lkHkpvUh0fiG5FtC5gCM4+dgNyHwwdQAAAABJRU5ErkJggg==',592,'image/png'),(18,'admin','circleleft32.png','iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAK8AAACvABQqw0mAAAABZ0RVh0Q3JlYXRpb24gVGltZQAwOC8xOC8wOaw6EPwAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzQGstOgAAACUElEQVRYhcWXTW4TQRCFv4nY4oQbhAvADYBkVxsnwhdIxD6CCzgW3oMl1hiksGWwwqJ2KAoX4AQIiXUwwftMFt096unp8fzYJk+yNBpV13tdXVPPnWRZxl1i607ZgXtNA0UEYAc4tL9nwHYQdg1cADNgpqp/6/JWVsASuuceMAWugPfAQYQc++7AxlyJyNSuLeTzkcR6QERQVffcBz4CD+p2U4E5cKSq535eh1IFAvIhppxdybFrZyIyVNVSJQoVcOQ2aAiMgGQFch8ZMFLV1/4mcwEBeR+z83WR+yIOVfXcvShVAOgBv1it7MswB3ZV9R+UeyABJhskx+aeiEhSEGB3vw0cd0z8HXjRMPYIM1NKFeh3IF5Y4qfAhxbr+qGABDPh2uArsAtMVbWNqeRcYQX2Gyb4DQwwU+9POFwaYj8mIDZeQ7wDHgOpqmax4dIQvZiAZciAY1U9AebetCyN1zbwBezUxCbAWxE5WRd5KKDWOjEiJyLyTUQerVD+qAAwfl6HBNgDfjiD6YjoJLxskSABRiLyU0SedBBwGQrIMAbUBgnwELgQkTc0H2Q5V1iBtKUAX8gr2k3CtCDAnuU1cNZRBDQ3sU/Ypg8rkAEvMfN9U1hYjgwi/wntZ/Uc+LwhAQNVzY86tGN3FF+A8QbIxzZ3jkIPeCIy4HTNIsbAaeiahR6oEDFgtZ5Y2Bw5uT89S2YUEZFiPL/L13Fm16bYpgv9I3oxCQOtoC3KV7P7wbIF3tUM86ndLDOvSgEVIhxiLuqb2Y17cBWt8oylAv4HbgFXRPgP0S2R4QAAAABJRU5ErkJggg==',760,'image/png'),(19,'admin','contactcard32.png','iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAwOC8xOC8wOaw6EPwAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzQGstOgAAABVElEQVRYhe2XMU7DMBSGv0RlQUicALUTYuMIzZg3wcbaI1RcgB4hR2BlKttbewsWloxsDB2jhiEuCqkdXGTFkeg/xe/F7//9+9lKkrquiYk0KvtJAJDkeb4FziPxv6WGPIlAngDXEzOoVPVsKGYRuQJKGEEPTFwJEbkHCmBqQiWwVNXXkAKsDhjydYsc87w2uWBwOVD0zCmAAxdExOtKVdUfDe8SMHXEe3Pd4l3YRI62CUvcKy1dxXy3wUfAkqYJXbkD/Ga/C9YtMEftEdi2whXwAmz+QuSC1QERyYAn4KLz7gNwIyKZqn525oQ5BSIyozlml44atyaf9RX2hc2Bood8j7mILFT1eR8I4oBZ/Z1PIWABfAsI5UB2xNx5exCqB2ZHCMA048ZW2BfjuglVdQWshhQQ3YHoApI8z3c0H4i7gblToEqBjwjkGM735PRv+O8FfAHJP2JjVd/23gAAAABJRU5ErkJggg==',508,'image/png');
/*!40000 ALTER TABLE `sys_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_image_slider`
--

DROP TABLE IF EXISTS `sys_image_slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_image_slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_sys_image` int(10) unsigned NOT NULL,
  `id_slider` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_image_slider`
--

LOCK TABLES `sys_image_slider` WRITE;
/*!40000 ALTER TABLE `sys_image_slider` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_image_slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_log`
--

DROP TABLE IF EXISTS `sys_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `operation` varchar(20) DEFAULT NULL,
  `entity` varchar(100) DEFAULT NULL,
  `itemid` varchar(255) DEFAULT NULL,
  `service` varchar(100) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_log`
--

LOCK TABLES `sys_log` WRITE;
/*!40000 ALTER TABLE `sys_log` DISABLE KEYS */;
INSERT INTO `sys_log` VALUES (1,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','localhost'),(2,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','localhost'),(3,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.it'),(4,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.it'),(5,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(6,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(7,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(8,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(9,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(10,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(11,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(12,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(13,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(14,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(15,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(16,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(17,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(18,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(19,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(20,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(21,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(22,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(23,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(24,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(25,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(26,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(27,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(28,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(29,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(30,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(31,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(32,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(33,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(34,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(35,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(36,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(37,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(38,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(39,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(40,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(41,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(42,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(43,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(44,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(45,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(46,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(47,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(48,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(49,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(50,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(51,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(52,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(53,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(54,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(55,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(56,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(57,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo'),(58,'LOGIN','','','login.php','admin','0000-00-00 00:00:00','vecchiaposta.lo');
/*!40000 ALTER TABLE `sys_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_menu`
--

DROP TABLE IF EXISTS `sys_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entry` varchar(100) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` int(10) unsigned NOT NULL,
  `linked_page` int(10) unsigned NOT NULL,
  `parent` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_menu`
--

LOCK TABLES `sys_menu` WRITE;
/*!40000 ALTER TABLE `sys_menu` DISABLE KEYS */;
INSERT INTO `sys_menu` VALUES (1,'Home','index.php',1,0,0),(2,'Camere','camere.php',2,0,0),(3,'Attività','attivita.php',3,0,0),(4,'Eventi','eventi.php',4,0,0),(5,'Dintorni','dintorni.php',5,0,0),(6,'Dove SIamo','dove-siamo.php',6,0,0),(8,'Camera singola','camera-singola.php',1,0,2),(9,'Camera doppia','camera-doppia.php',2,0,2),(10,'Camera tripla','camera-tripla.php',3,0,2),(11,'Camera quadrupla','camera-quadrupla.php',4,0,2),(12,'Ippovia del Gran Sasso','ippovia-del-gran-sasso.php',1,0,3),(13,'L\'anello del Lago','anello-del-lago-campotosto.php',2,0,3),(14,'Da cagnano al Gran Sasso','cagnano-gran-sasso.php',3,0,3),(15,'Perdonanza Celestiniana','perdonanza-celestiniana.php',1,0,4),(16,'Sagre e feste','sagre-feste.php',2,0,4),(17,'Festa del Cioccolato','festa-cioccolato.pph',3,0,4),(18,'Amatrice','amatrice.php',1,0,5),(19,'L\'Aquila','aquila.php',2,0,5),(20,'Lago di Campotosto','lago-campotosto.php',3,0,5);
/*!40000 ALTER TABLE `sys_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_news`
--

DROP TABLE IF EXISTS `sys_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner` varchar(50) DEFAULT NULL,
  `title` varchar(68) NOT NULL,
  `lastmod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `creation` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` varchar(1) DEFAULT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_news`
--

LOCK TABLES `sys_news` WRITE;
/*!40000 ALTER TABLE `sys_news` DISABLE KEYS */;
INSERT INTO `sys_news` VALUES (1,'admin','Offerta','2013-09-17 22:00:00','2013-09-16 22:00:00','2013-09-05 15:52:00','*','<p>vi aspettiamo per i week-end... camera doppia a partire da 45&euro;</p>'),(2,'admin','Offerta 2','2013-09-18 10:07:26','2013-09-17 22:00:00','2013-09-18 10:07:00','','<p>test ssssssssssssssssssssssssss sssssssssssssssssssssssssss s &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;s s s</p>');
/*!40000 ALTER TABLE `sys_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_page`
--

DROP TABLE IF EXISTS `sys_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `subtitle` varchar(100) DEFAULT NULL,
  `body` text,
  `position` int(10) unsigned NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `section` int(10) unsigned NOT NULL,
  `father` int(10) unsigned NOT NULL,
  `foto` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_page`
--

LOCK TABLES `sys_page` WRITE;
/*!40000 ALTER TABLE `sys_page` DISABLE KEYS */;
INSERT INTO `sys_page` VALUES (5,NULL,'Il B&B',NULL,'','<p>In una splendita villa immersa nel verde a circa 15 minuti dall&rsquo;Aquila, il Bed &amp; Breakfast La Vecchia Posta &egrave; lieto di ospitarvi in camere con servizi privati e tv. E&rsquo; a vostra disposizione l&rsquo;ampio spazio verde di propriet&agrave; e un parcheggio riservato. Per i pasti vi consigliamo di assaggiare le offerte culinarie del ristorante la monachina, a circa 10km dal B&amp;B, oppure se vi trovate a L&rsquo;Aquila vi consigliamo le fregnacce del ristorante la rupe. Il B&amp;B vi offre inoltre la possibilit&agrave; di noleggiare gratuitamente mountainbike disponibili nella struttura e a vostra completa disposizione. Se desiderate fare passeggiate a cavallo vi indichiamo due maneggi nelle vicinanze: Shenandoah Ranch Western Riding Centro Ippico Saint Just Su richiesta &egrave; fruibile il servizio di lavanderia e trasporto da e verso la stazione dei treni e il terminal dei bus. Ti aspettiamo al Bed &amp; Breakfast La Vecchia Posta, prenota ora la tua vacanza da noi</p>',0,'',0,0,0),(6,'admin','Alcuni servizi offerti del B&B',NULL,'','<ul class=\"list3\">\r\n<li>Parcheggio privato</li>\r\n<li>Servizio sveglia e Colazione in stanza</li>\r\n<li>Riassetto giornaliero stanza</li>\r\n<li>Animali domestici ammessi</li>\r\n<li>Parco di propriet&agrave;</li>\r\n<li>Kit di benvenuto</li>\r\n<li>Biciclette a disposizione</li>\r\n<li>TV in camera</li>\r\n<li>Internet WiFi</li>\r\n</ul>',0,'',0,0,0);
/*!40000 ALTER TABLE `sys_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_section`
--

DROP TABLE IF EXISTS `sys_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_section` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_section`
--

LOCK TABLES `sys_section` WRITE;
/*!40000 ALTER TABLE `sys_section` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_service`
--

DROP TABLE IF EXISTS `sys_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `script` varchar(100) DEFAULT NULL,
  `entry` varchar(100) DEFAULT NULL,
  `visible` varchar(1) DEFAULT NULL,
  `des` text,
  `position` int(10) unsigned NOT NULL,
  `servicecategory` int(10) unsigned NOT NULL,
  `entities` varchar(50) DEFAULT NULL,
  `superuser_group` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_service`
--

LOCK TABLES `sys_service` WRITE;
/*!40000 ALTER TABLE `sys_service` DISABLE KEYS */;
INSERT INTO `sys_service` VALUES (1,'Login','login.php','Login','*','<p>Login service</p>',2,0,'',0),(2,'Logout','logout.php','Logout','*','<p>Logout service</p>',1,0,'',0),(3,'User Management','admin-users-manager.php','Users','*','',1,1,'',0),(4,'Group Management','admin-groups-manager.php','Groups','*','',2,1,'',0),(5,'Service Management','admin-services-manager.php','Services','*','',3,1,'',0),(6,'Service Category Management','admin-servicecategory-manager.php','Service Categories','*','',4,1,'',0),(7,'Page Management','admin-pages-manager.php','Pages','*','',1,2,'',0),(8,'Menu Management','admin-menu-manager.php','Menu','*','',2,2,'',0),(10,'News','admin-news-manager.php','News','*','',3,2,'',0),(11,'Image','admin-image-manager.php','Image',NULL,'',4,2,NULL,0),(12,'Slider','admin-slider-manager.php','Slider',NULL,'',5,2,NULL,0);
/*!40000 ALTER TABLE `sys_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_service_sys_group`
--

DROP TABLE IF EXISTS `sys_service_sys_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_service_sys_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_sys_service` int(10) unsigned NOT NULL,
  `id_sys_group` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_service_sys_group`
--

LOCK TABLES `sys_service_sys_group` WRITE;
/*!40000 ALTER TABLE `sys_service_sys_group` DISABLE KEYS */;
INSERT INTO `sys_service_sys_group` VALUES (3,3,1),(4,4,1),(5,5,1),(7,7,1),(8,8,1),(9,9,1),(10,10,1),(13,13,1),(14,14,1),(17,11,1),(19,12,1),(20,6,1),(24,2,1),(25,1,1);
/*!40000 ALTER TABLE `sys_service_sys_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_servicecategory`
--

DROP TABLE IF EXISTS `sys_servicecategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_servicecategory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `position` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_servicecategory`
--

LOCK TABLES `sys_servicecategory` WRITE;
/*!40000 ALTER TABLE `sys_servicecategory` DISABLE KEYS */;
INSERT INTO `sys_servicecategory` VALUES (1,'System',1),(2,'Content',2);
/*!40000 ALTER TABLE `sys_servicecategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_user`
--

DROP TABLE IF EXISTS `sys_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `active` varchar(1) DEFAULT NULL,
  `active_newsletter` varchar(1) DEFAULT NULL,
  `processed` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_user`
--

LOCK TABLES `sys_user` WRITE;
/*!40000 ALTER TABLE `sys_user` DISABLE KEYS */;
INSERT INTO `sys_user` VALUES ('admin','00a149ee78bb584e9c9ea35d78b1019b','dipompeodaniele@gmail.com','daniele','di pompeo','','','','');
/*!40000 ALTER TABLE `sys_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_user_sys_group`
--

DROP TABLE IF EXISTS `sys_user_sys_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_user_sys_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username_sys_user` varchar(50) DEFAULT NULL,
  `id_sys_group` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_user_sys_group`
--

LOCK TABLES `sys_user_sys_group` WRITE;
/*!40000 ALTER TABLE `sys_user_sys_group` DISABLE KEYS */;
INSERT INTO `sys_user_sys_group` VALUES (1,'admin',1),(2,'test',1);
/*!40000 ALTER TABLE `sys_user_sys_group` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-09-19 12:45:29
