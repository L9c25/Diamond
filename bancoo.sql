CREATE DATABASE  IF NOT EXISTS `diamond` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `diamond`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: diamond
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alugados`
--

DROP TABLE IF EXISTS `alugados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alugados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_imovel` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `chek-in` date DEFAULT NULL,
  `chek-out` date DEFAULT NULL,
  `price` float DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Forgein_imovel_idx` (`fk_imovel`),
  KEY `Forgein_user_idx` (`fk_user`),
  CONSTRAINT `Forgein_imovel` FOREIGN KEY (`fk_imovel`) REFERENCES `imovel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Forgein_user` FOREIGN KEY (`fk_user`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alugados`
--

LOCK TABLES `alugados` WRITE;
/*!40000 ALTER TABLE `alugados` DISABLE KEYS */;
/*!40000 ALTER TABLE `alugados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciep`
--

DROP TABLE IF EXISTS `ciep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ciep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planet` varchar(155) NOT NULL,
  `cod` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciep`
--

LOCK TABLES `ciep` WRITE;
/*!40000 ALTER TABLE `ciep` DISABLE KEYS */;
INSERT INTO `ciep` VALUES (1,'Terra',3),(2,'Lua',301),(3,'Marte',4);
/*!40000 ALTER TABLE `ciep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comodidades`
--

DROP TABLE IF EXISTS `comodidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comodidades` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `piscina` tinyint(4) DEFAULT 0,
  `arealazer` tinyint(4) DEFAULT 0,
  `varanda` tinyint(4) DEFAULT 0,
  `banheira` tinyint(4) DEFAULT 0,
  `academia` tinyint(4) DEFAULT 0,
  `estacionamento` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comodidades`
--

LOCK TABLES `comodidades` WRITE;
/*!40000 ALTER TABLE `comodidades` DISABLE KEYS */;
/*!40000 ALTER TABLE `comodidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compados`
--

DROP TABLE IF EXISTS `compados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_imovel` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `price` float NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Forgein_user_idx` (`fk_user`),
  KEY `Forgein_imovel_idx` (`fk_imovel`),
  KEY `FK_user_idx` (`fk_user`),
  KEY `FK_imovel_idx` (`fk_imovel`),
  CONSTRAINT `FKIMOVEL` FOREIGN KEY (`fk_imovel`) REFERENCES `imovel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FKUSER` FOREIGN KEY (`fk_user`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compados`
--

LOCK TABLES `compados` WRITE;
/*!40000 ALTER TABLE `compados` DISABLE KEYS */;
/*!40000 ALTER TABLE `compados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `corretores`
--

DROP TABLE IF EXISTS `corretores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `corretores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(155) NOT NULL,
  `phone` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `corretores`
--

LOCK TABLES `corretores` WRITE;
/*!40000 ALTER TABLE `corretores` DISABLE KEYS */;
/*!40000 ALTER TABLE `corretores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(155) NOT NULL,
  `numero` int(11) NOT NULL,
  `rua` varchar(155) NOT NULL,
  `ciep` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `asdasd_idx` (`ciep`),
  CONSTRAINT `asdasd` FOREIGN KEY (`ciep`) REFERENCES `ciep` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imovel`
--

DROP TABLE IF EXISTS `imovel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imovel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(145) NOT NULL,
  `pCompra` float NOT NULL,
  `descricao` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `disponibilidade` tinyint(4) NOT NULL,
  `area` float NOT NULL,
  `qtd_quartos` int(1) NOT NULL,
  `qtd_banheiros` int(1) NOT NULL,
  `qtd_vagasEst` int(1) NOT NULL,
  `fk_comodidades` int(11) NOT NULL,
  `fk_endereco` int(11) NOT NULL,
  `fk_corretor` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Forgein_comodidades_idx` (`fk_comodidades`),
  KEY `Forgein_endereco_idx` (`fk_endereco`),
  KEY `Forgein_corretor_idx` (`fk_corretor`),
  CONSTRAINT `Forgein_comodidades` FOREIGN KEY (`fk_comodidades`) REFERENCES `comodidades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Forgein_corretor` FOREIGN KEY (`fk_corretor`) REFERENCES `corretores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Forgein_endereco` FOREIGN KEY (`fk_endereco`) REFERENCES `endereco` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imovel`
--

LOCK TABLES `imovel` WRITE;
/*!40000 ALTER TABLE `imovel` DISABLE KEYS */;
/*!40000 ALTER TABLE `imovel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(105) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `adm` tinyint(4) NOT NULL DEFAULT 0,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'L9c25','$2y$10$OpoItoE6FsfnxJbRnF8bVe.W2wDv9NbLverW6bV47uc/v7d57981S',1,'2024-06-04 11:23:18'),(2,'Luquitas','$2y$10$qaDCeWwvimYWku9euXKPXucaVb7X1I4KvyPZxe8WGXEEGASj4.Lzu',0,'2024-06-04 11:24:05'),(3,'sarah','$2y$10$h8RCFpJmeOVvhwh/bI8XhuKziysK6cIkFRURDvC2BsOTxu.oT2JqC',0,'2024-06-04 11:25:53'),(4,'OAKSokASD','$2y$10$o8LiaodH3HmLLkgqLzvQ2u6k4lSfgCLk355TBd3ost4EKolanVXFC',0,'2024-06-04 11:26:19'),(5,'test','$2y$10$preALRLdYowjeLRbWu2Rxe0Rad1KM9cIgkPXXNJsSHbkSjP9/Vh0i',0,'2024-06-05 10:25:33');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'diamond'
--

--
-- Dumping routines for database 'diamond'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-06 13:36:32
