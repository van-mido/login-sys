CREATE DATABASE IF NOT EXISTS login CHARACTER SET utf8 COLLATE utf8_general_ci;

USE login;
--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `pwd_reset` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'admin',1,'admin@southpark.com','21232f297a57a5a743894a0e4a801fc3',''),(2,'ecartman',2,'ecartman@southpark.com','c2915c68dd89e9cb746dde154e612b65',NULL),(3,'smarsh',2,'smarsh@southpark.com','81dc9bdb52d04dc20036dbd8313ed055',NULL),(3,'cheff',2,'cheff@southpark.com','680472087f0f5724ffc491a37569e4ad',NULL),(4,'bstotch',2,'bstotch@southpark.com','827ccb0eea8a706c4c34a16891f84e7b',NULL),(5,'tblack',2,'tblack@soutpark.com','81dc9bdb52d04dc20036dbd8313ed055',NULL),(6,'smalkinson',2,'smalkinson@southpark.com','81dc9bdb52d04dc20036dbd8313ed055',NULL),(7,'ctucker',2,'ctucker@southpark.com','81dc9bdb52d04dc20036dbd8313ed055',NULL),(8,'kmccormick',1,'kmccormick@southpark.com','81dc9bdb52d04dc20036dbd8313ed055',NULL);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'admin'),(2,'member');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-09  9:12:26
