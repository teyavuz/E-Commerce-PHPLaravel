-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: epiz_31589229_arrivalmerch
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com','1','123456789','sdgfsfgs',NULL,'$2y$10$.N/xoNM47hwHz/LAEnnObeIx5Fc38uGVRyq9QtmD0HBCHn4qHjfXW',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-24 22:06:02','2022-04-24 22:06:02'),(2,'emre yavuz','teyavuz67@gmail.com','0','5359701716','ereğli',NULL,'$2y$10$Ym9utA9jLe24DHoL.I77YuZdpeFk4PwG7ECb96fQdFK9SEuW7nmie',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-24 22:07:04','2022-04-24 22:07:04'),(3,'Yasin Çetin','cetnyasin@gmail.com','0','5698745632','sakarya',NULL,'$2y$10$y6HxdmaFDgB6stIaDA6YRe/7SZHd0MqbPcMgEHyJ.REPWVUYKNdfO',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-24 22:18:09','2022-04-24 22:18:09'),(4,'Hüseyin Nas','huseyin@gmail.com','0','5478965412','gebze',NULL,'$2y$10$d7LvOFWBmnRpXW8TsZyM5u0yqqr/mCSVlld95dapsJbyuYmsHehgS',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-24 22:18:41','2022-04-24 22:18:41'),(5,'Okan Atabaş','okan@gmail.com','0','5412365478','gölcük',NULL,'$2y$10$ws2pCdEdO1FWvWrYRDn07.U9BrL9TijDrvSi3rNgi1.hlkdETvvhe',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-24 22:19:08','2022-04-24 22:19:08'),(6,'Fatih Çevik','fatih@gmail.com','0','5623145698','istanbul',NULL,'$2y$10$AYvb1UeeuKkeHoGvu8qtdOArOzgbsRIyO6a0i4/fIN9eFL43SJBxS',NULL,NULL,NULL,NULL,NULL,NULL,'2022-04-24 22:19:45','2022-04-24 22:19:45');
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

-- Dump completed on 2022-04-25  6:57:37
