-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: Shop
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (12,'Vanilla',12,12.00,'2017-05-31'),(13,'Mango',12,100.00,'2017-05-29'),(14,'Radish ',20,10.00,'2017-05-30'),(15,'radish ',20,10.00,'2017-05-30'),(16,'Badam',1,200.00,'2017-05-30'),(17,'Lime',20,10.00,'2017-05-29'),(18,'Lime',20,10.00,'2017-05-29'),(19,'onion ',10,12.00,'2017-05-30'),(20,'onion ',10,12.00,'2017-05-30'),(21,'edite',30,23.00,'2017-05-29'),(22,'vhgfdfvb ',12,45.00,'2017-05-30'),(23,'asdhgfgaf',122,20.00,'2017-05-30'),(24,'ASAF',12,231.00,'2017-05-30'),(25,'ASAF',12,231.00,'2017-05-30'),(26,'kadai',12,211.00,'2017-05-29'),(27,'faster',224,35.00,'2017-06-01'),(28,'faster',224,35.00,'2017-06-01'),(29,'sdsg',1113,121.00,'2017-05-29'),(30,'qwqr',12,214.00,'2017-05-30'),(31,'sdg',12,21.00,'2017-05-30'),(32,'Alland',12,23.00,'2017-05-30'),(33,'zsad',12,23.00,'2017-05-30'),(34,'Ajinamoto ',12,1241.00,'2017-05-30'),(35,'wordsste',12,20.00,'2017-06-02'),(36,'jasmie',12,123.00,'2017-05-31'),(37,'hjhjj',78,234.00,'2017-06-21'),(38,'sanbfahf',12,12.00,'2017-06-04'),(39,'sanbfahf',12,12.00,'2017-06-04'),(40,'kitel',12,12.00,'2017-06-06'),(41,'jile',23,23.00,'2017-06-03'),(42,'afahuf',12,12.00,'2017-06-25'),(43,'olx',23,12.00,'2017-06-20'),(44,'afahuf',12,12.00,'2017-06-25'),(45,'rwrer',23,21.00,'2017-06-29'),(46,'tile',23,12.00,'2017-06-14'),(47,'tile',23,12.00,'2017-06-14'),(48,'tile',23,12.00,'2017-06-14'),(49,'hiafjhdg',12,23.00,'2017-06-12');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-21 17:24:12
