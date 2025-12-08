
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
INSERT INTO `products` VALUES (1,NULL,'Mleko 3,2% (Łaciate)','mleko_3_2',4,3.2,4.7,3.2,4.7,60.4,0, '2025-09-20 13:20:09','2025-09-20 23:06:32'),
                              (2,NULL,'Mąka pszenna tortowa','maka_pszenna_tortowa',5,10,72,1,2.4,341,0,'2025-09-20 13:20:09','2025-09-20 13:20:09'),
                              (3,NULL,'Pierś z kurczaka bez skróry','piers-z-kurczaka-bez-skory',35,22.5,0,4,0,120,0,'2025-09-20 13:20:09','2025-09-20 23:20:57'),
                              (4,NULL,'Twaróg półtłusty','twarog-poltlusty',28,16,3.8,4,3.8,115.2,0,'2025-09-20 13:20:09','2025-09-20 23:21:41'),
                              (5,NULL,'Cukier','cukier',13,0,100,0,100,115,0,'2025-09-20 13:20:09','2025-09-20 23:06:52'),
                              (6,NULL,'Jajka','jajka',30,12.5,0.5,9.5,0.5,137.5,0,'2025-09-20 13:20:09','2025-09-20 23:13:59'),
                              (7,NULL,'Olej rzepakowy','olej-rzapakowy',5,0,0,100,0,900,0,'2025-09-20 13:20:09','2025-09-20 13:20:09'),
                              (8,NULL,'Surowy owoc','surowy-owoc',1,0,0,0,0,0,0,'2025-09-20 13:20:09','2025-09-20 13:20:09'),
                              (9,NULL,'Ziemniaki','ziemniaki',5,2,20,0,0,75,0,'2025-09-20 13:20:09','2025-09-20 23:09:27')
                              ,(10,NULL,'Warzywa mrożone','warzywa',15,NULL,NULL,NULL,NULL,NULL,0,'2025-09-20 13:45:11','2025-09-20 23:20:24'),
                               (11,NULL,'Jogurt Activia Smakowa','jogurt-activia-smakowa',17,3,10,12,10,160,0,'2025-09-20 23:14:54','2025-09-20 23:15:59');
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

