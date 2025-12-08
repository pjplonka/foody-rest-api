
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

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,NULL,'Mleko 3,2% (Łaciate)','mleko_3_2',4,3.2,4.7,3.2,4.7,60.4,1,'2025-09-20 13:20:09','2025-11-28 10:45:21'),(2,NULL,'Mąka pszenna tortowa','maka_pszenna_tortowa',5,10,72,1,2.4,341,0,'2025-09-20 13:20:09','2025-09-20 13:20:09'),(3,NULL,'Pierś z kurczaka bez skróry','piers-z-kurczaka-bez-skory',35,22.5,0,4,0,120,0,'2025-09-20 13:20:09','2025-09-20 23:20:57'),(4,3,'Twaróg półtłusty','twarog-poltlusty',28,16,3.8,4,3.8,115.2,1,'2025-09-20 13:20:09','2025-10-14 10:57:25'),(5,NULL,'Cukier','cukier',13,0,100,0,100,115,0,'2025-09-20 13:20:09','2025-09-20 23:06:52'),(6,NULL,'Jajka','jajka',30,12.5,0.5,9.5,0.5,137.5,0,'2025-09-20 13:20:09','2025-09-20 23:13:59'),(7,NULL,'Olej rzepakowy','olej-rzapakowy',5,0,0,100,0,900,0,'2025-09-20 13:20:09','2025-09-20 13:20:09'),(8,NULL,'Surowy owoc','surowy-owoc',1,0,0,0,0,0,0,'2025-09-20 13:20:09','2025-09-20 13:20:09'),(9,NULL,'Ziemniaki','ziemniaki',5,2,20,0,0,75,0,'2025-09-20 13:20:09','2025-09-20 23:09:27'),(10,NULL,'Warzywa mrożone','warzywa',15,NULL,NULL,NULL,NULL,NULL,0,'2025-09-20 13:45:11','2025-09-20 23:20:24'),(11,NULL,'Jogurt Activia Smakowa','jogurt-activia-smakowa',17,3,10,12,10,160,0,'2025-09-20 23:14:54','2025-09-20 23:15:59'),(12,NULL,'Burger Wołowy Lidl 180g','burger-wolowy-lidl-180g',42,18,0,20,0,NULL,1,'2025-10-04 15:51:29','2025-10-04 15:51:29'),(13,NULL,'Sałata','salata',1,NULL,NULL,NULL,NULL,NULL,0,'2025-10-04 16:32:50','2025-10-04 16:32:50'),(14,NULL,'Mozarella Kulka','mozarella-kulka',15,17,2,16,1,220,1,'2025-10-04 16:35:10','2025-10-04 16:35:49'),(15,NULL,'Bułka Hamburgerowa','bulka-hamburgerowa',1,NULL,NULL,NULL,NULL,NULL,0,'2025-10-04 16:35:41','2025-10-04 16:35:41'),(16,1,'Pomidor Malinowy','pomidor-malinowy',25,1,5,0,5,NULL,0,'2025-10-04 16:36:55','2025-10-14 10:54:37'),(17,NULL,'Musztarda Miodowa','musztarda-miodowa',1,NULL,NULL,NULL,NULL,NULL,0,'2025-10-04 16:56:30','2025-10-04 16:56:30'),(18,NULL,'Mix do sałatek Bakalland (chrupiący)','mix-do-salatek-chrupiacy',75,23,16,24,6,372,1,'2025-10-13 16:52:51','2025-10-14 12:16:35'),(19,3,'Ser feta','ser-feta',45,11,3.5,16,3.5,202,1,'2025-10-13 20:17:23','2025-10-14 10:37:51'),(20,NULL,'Oliwa z oliwek','oliwa-z-oliwek',50,0,0,100,0,NULL,0,'2025-10-13 20:25:59','2025-10-14 10:42:30'),(21,NULL,'Kukurydza w puszce','kukurydza-w-puszce',30,2.7,11,1.4,5,67.4,1,'2025-10-13 20:30:06','2025-10-14 10:36:33'),(22,NULL,'Pieczywo jasne','pieczywo-jasne',1,NULL,NULL,NULL,NULL,NULL,0,'2025-10-13 20:39:53','2025-10-13 20:39:53'),(23,NULL,'Ryż jaśminowy','ryz-jasminowy',1,NULL,NULL,NULL,NULL,NULL,0,'2025-10-13 20:54:45','2025-10-13 20:54:45'),(24,NULL,'Mix sałat','mix-salat',30,0,0,0,0,NULL,0,'2025-10-14 10:39:35','2025-10-14 10:39:35'),(25,NULL,'Chleb Graham (pieczywo)','chleb-graham-pieczywo',1,8,50,1,0,241,0,'2025-10-14 10:48:39','2025-10-14 10:48:39'),(26,NULL,'Olej do smażenia 3 ziarna Kujawski','olej-do-smazenia-3-ziarna-kujawski',20,0,0,100,0,NULL,1,'2025-10-14 10:52:11','2025-10-14 11:02:00'),(27,NULL,'Fasolka cięta (warzywa mrożone)','fasolka-cieta-warzywa-mrozone',20,NULL,NULL,NULL,NULL,NULL,0,'2025-10-14 10:52:46','2025-10-14 10:52:46'),(28,1,'Jabłko','jablko',15,0,14,0,14,NULL,1,'2025-10-14 10:55:31','2025-10-14 10:55:43'),(29,1,'Awokado','awokado',40,2,8.5,15,0,177,1,'2025-10-14 10:59:30','2025-10-14 11:01:50'),(30,3,'Skyr Fruvita','skyr-fruvita',15,10,10,0,10,NULL,0,'2025-10-14 11:05:24','2025-10-14 11:05:24'),(31,6,'Ziele angielskie','ziele-angielskie',1,0,0,0,0,NULL,0,'2025-10-14 12:15:43','2025-10-14 12:15:43'),(32,NULL,'Woda','woda',0,0,0,0,0,NULL,0,'2025-10-14 12:18:38','2025-10-14 12:18:38'),(33,NULL,'Płatki owsiane górskie','platki-owsiane-gorskie',10,13,6.7,61,0,627.8,0,'2025-11-28 10:45:03','2025-11-28 10:45:03');
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

