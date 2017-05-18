-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: event
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booking` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `amt` int(11) NOT NULL,
  PRIMARY KEY (`bid`),
  KEY `id_idx` (`eid`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` VALUES (1,1,3,3,300),(2,1,3,3,300),(3,1,3,2,200),(4,1,3,2,200),(5,1,3,1,100),(6,1,3,2,200),(7,1,3,2,200),(8,1,3,3,300),(9,1,3,3,300),(10,3,3,2,6000),(11,3,3,2,6000),(12,3,3,2,6000),(13,3,6,4,12000),(14,3,6,3,9000),(15,2,7,2,500),(16,3,3,4,12000),(17,1,3,8,800),(18,1,3,5,500),(19,1,3,89,8900),(20,1,3,9000,900000),(21,1,3,10000000,1000000000),(22,1,7,5000,500000),(23,3,7,5000,15000000),(24,3,7,4,12000),(25,3,7,6578,19734000),(26,3,7,6900,20700000);
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_details`
--

DROP TABLE IF EXISTS `event_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_details` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(45) DEFAULT NULL,
  `eorganizer` varchar(60) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `venue` varchar(45) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `ticketprice` varchar(45) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `seats_ava` int(11) DEFAULT NULL,
  `contact1` int(11) DEFAULT NULL,
  `contact2` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `terms_conditions` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_details`
--

LOCK TABLES `event_details` WRITE;
/*!40000 ALTER TABLE `event_details` DISABLE KEYS */;
INSERT INTO `event_details` VALUES (1,'MUSIC CONCERT','Parker','Musical Concert by Raghu Dixit','bvb campus,hubli','2017-05-12','2017-05-15','100','https://static1.squarespace.com/static/58a005fed2b857eb65f26291/58a01362725e25197ebc6a07/58a0186f893fc0b6d3d4af2e/1486887040228/Raghu-Dixit-Project-CHE_5861.jpg?format=500w',100,756343,'534564643','',''),(2,'CINEMA','Ram Gopal Varma','Sarkar 3 is a 2017 Indian political crime thriller movie','Cinepolis,hubli','2017-05-15','2017-06-15','250','http://www.hindustantimes.com/rf/image_size_960x540/HT/p2/2017/05/13/Pictures/_603fdcc0-37e8-11e7-b30b-76e7402dac55.jpg',98,8565217,'9754222',NULL,NULL),(3,'Treking','Ramesh','Nishani Betta Trek','Madikeri','2017-05-16','2018-05-20','3000','http://a5.images.thrillophilia.com/image/upload/s--JbK4E_FJ--/c_fill,f_auto,fl_strip_profile,h_446,q_jpegmini,w_750/v1/images/photos/000/040/124/original/coorg-4.jpg.jpg?1453314051',-18469,67542343,'75653453',NULL,NULL);
/*!40000 ALTER TABLE `event_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phoneno` int(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'rthrt','yh','df@fed',567684,'cnh','hbfh'),(2,'rthrt','yh','df@fed',567684,'cnh','hbfh'),(3,'vinuta','k','vinuta@gmail.com',897534345,'vinuta','123'),(4,'vin','m','vin@gmail.com',97856343,'vinutam','123456'),(5,'gvdxv','vx','vx@gf',8673,'hfgh','gfg'),(6,'abc','abc','abc@g',94728,'abc','abc'),(7,'renuka','c','renuka@gmail.com',976453422,'renu','renu'),(8,'renuka','c','renuka@gmail.com',976453422,'renu','');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-18 11:48:54
