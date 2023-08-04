-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: NilaiSantri
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `NilaiSantri`
--

DROP TABLE IF EXISTS `NilaiSantri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `NilaiSantri` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nilai` int DEFAULT NULL,
  `divisi` enum('multimedia','marketer','programmer') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NilaiSantri`
--

LOCK TABLES `NilaiSantri` WRITE;
/*!40000 ALTER TABLE `NilaiSantri` DISABLE KEYS */;
INSERT INTO `NilaiSantri` VALUES (1,'Danu',100,'programmer'),(2,'Ibnu',99,'multimedia'),(3,'Darajati',98,'marketer'),(4,'Duine',77,'programmer'),(5,'Eigin',96,'multimedia'),(6,'Midare',95,'marketer'),(7,'Rafid',94,'programmer'),(8,'Haris',95,'multimedia'),(9,'Garuda',94,'marketer'),(10,'Raditya',93,'programmer'),(12,'Eki',91,'marketer'),(13,'Robby',90,'programmer'),(14,'Farhan',89,'multimedia'),(15,'Akbar',88,'marketer');
/*!40000 ALTER TABLE `NilaiSantri` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-04 15:06:10
