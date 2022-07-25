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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Air Jordan Mid Purple Aqua','3.500 TL','\"Purple Aqua 2020\" Kadın Çok Renkli Ayakkabı','3','1650848980.jpg','2022-04-24 22:09:40','2022-04-25 00:31:35'),(2,'Kaws AEU89','13.095 TL','Kaws AEU89 123. No\'lu tablo','1','1650849001.jpg','2022-04-24 22:10:01','2022-04-24 22:10:01'),(3,'Nike Jordan 1 Mid Sonics','2.739 TL','Nike Jordan 1 Mid Sonics 2021 Fit For Health 2.0 554724','41','1650849033.jpg','2022-04-24 22:10:33','2022-04-24 22:10:33'),(5,'Supreme Ralph Steadman Box Logo Tee','840 TL','Black 100% Authentic Condition: New','33','1650856430.jpg','2022-04-25 00:13:50','2022-04-25 00:13:50'),(6,'adidas Yeezy Boost 350 V2','3.650 TL','Mono Cinder 100% Authentic Condition: New','2','1650856500.jpg','2022-04-25 00:15:00','2022-04-25 00:31:45'),(7,'LEGO Star Wars Ultimate Collector Series AT-AT Set 75313','26.300 TL','100% Authentic Condition: New','2','1650856563.png','2022-04-25 00:16:03','2022-04-25 00:16:03'),(8,'Beats by Dr. Dre Studio Buds Totally Wireless Noise Cancellinig Earphones MJ503LL/A','1.600 TL','Red 100% Authentic Condition: New','105','1650857485.jpg','2022-04-25 00:31:25','2022-04-25 00:31:25'),(9,'Apple Watch Series 7 GPS 45mm Midnight Aluminum with Midnight Sport Band','8.500 TL','A2474 / MKN53LL/A 100% Authentic Condition: New','1200','1650857576.png','2022-04-25 00:32:56','2022-04-25 00:32:56'),(10,'Pokémon TCG Sword & Shield','22.000 TL','Expansion Pack S10D Time Gazer/S10P Space Juggler Booster Box (Japanese) 2x Bundle 100% Authentic Condition: New','1','1650857654.png','2022-04-25 00:34:14','2022-04-25 00:34:14'),(11,'Pokémon TCG 25th Anniversary Celebrations','85.300 TL','Ultra-Premium Collection Box 100% Authentic Condition: New','1','1650857706.png','2022-04-25 00:35:06','2022-04-25 00:35:06'),(12,'DropX™ Exclusive: JID x Loso x Coachella Family Reunion 2022 Trucker Hat','1.250 TL','Black DropX™ Exclusive 100% Authentic Condition: New','2','1650857767.png','2022-04-25 00:36:07','2022-04-25 00:36:07'),(13,'DropX™ Exclusive: JID x Loso x Coachella Tee','2.300 TL','White DropX™ Exclusive 100% Authentic Condition: New','2','1650857845.png','2022-04-25 00:37:25','2022-04-25 00:37:25'),(14,'DropX™️ Exclusive: Vince Staples x Brownstone x Coachella Ramona Park Hoodie','3.000 TL','Black DropX™ Exclusive 100% Authentic Condition: New','2','1650857953.png','2022-04-25 00:39:13','2022-04-25 00:39:13'),(15,'drew house mascot ss tee','1.800 TL','lavender 100% Authentic Condition: New','12','1650857995.png','2022-04-25 00:39:55','2022-04-25 00:39:55'),(16,'Fear of God Essentials Core Collection Sweatpant','800 TL','Stretch Limo 100% Authentic Condition: New','5','1650858023.png','2022-04-25 00:40:23','2022-04-25 00:40:23'),(17,'adidas Yeezy Foam RNNR','28.000 TL','Sulfur 100% Authentic Condition: New','2','1650858081.png','2022-04-25 00:41:21','2022-04-25 00:41:21'),(18,'Jordan 2 Retro SP','4.500 TL','Union Grey Fog 100% Authentic Condition: New','31','1650858120.png','2022-04-25 00:42:00','2022-04-25 00:42:00'),(19,'New Balance 550','2.800 TL','Joe Freshgoods Conversations Amongst Us 100% Authentic Condition: New','11','1650858186.png','2022-04-25 00:43:06','2022-04-25 00:43:06'),(20,'Nike Dunk Low','2.800 TL','Retro White Black (2021) 100% Authentic Condition: New','42','1650858213.png','2022-04-25 00:43:33','2022-04-25 00:43:33'),(21,'Jordan 1 Retro','4.500 TL','Fragment Friends and Family 100% Authentic Condition: New','3','1650858242.png','2022-04-25 00:44:02','2022-04-25 00:44:02'),(22,'Yeezy Gap Engineered by Balenciaga Dove Hoodie','2.739 TL','Black 100% Authentic Condition: New','12','1650858290.png','2022-04-25 00:44:50','2022-04-25 00:44:50');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-25  6:57:36
