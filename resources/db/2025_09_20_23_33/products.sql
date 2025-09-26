
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
DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `protein` double DEFAULT NULL,
  `carbs` double DEFAULT NULL,
  `fat` double DEFAULT NULL,
  `sugar` double DEFAULT NULL,
  `calories` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Mleko 3,2% (Łaciate)','mleko_3_2',5,3.2,4.7,3.2,4.7,60,'2025-09-20 13:20:09','2025-09-20 13:20:09'),(2,'Mąka pszenna tortowa','maka_pszenna_tortowa',5,10,72,1,2.4,341,'2025-09-20 13:20:09','2025-09-20 13:20:09'),(3,'Pierś z kurczaka bez skróry','piers-z-kurczaka-bez-skory',5,22.5,0,4,0,120,'2025-09-20 13:20:09','2025-09-20 13:20:09'),(4,'Twaróg półtłusty','twarog-poltlusty',5,16,3.8,4,3.8,115,'2025-09-20 13:20:09','2025-09-20 13:20:09'),(5,'Cukier','cukier',5,0,100,0,100,115,'2025-09-20 13:20:09','2025-09-20 13:20:09'),(6,'Jajka','jajka',5,12.5,0.5,9.5,0.5,143,'2025-09-20 13:20:09','2025-09-20 13:20:09'),(7,'Olej rzepakowy','olej-rzapakowy',5,0,0,100,0,900,'2025-09-20 13:20:09','2025-09-20 13:20:09'),(8,'Surowy owoc','surowy-owoc',1,0,0,0,0,0,'2025-09-20 13:20:09','2025-09-20 13:20:09'),(9,'Ziemniaki','ziemniaki',1,2,20,0,0,75,'2025-09-20 13:20:09','2025-09-20 13:20:09');
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

