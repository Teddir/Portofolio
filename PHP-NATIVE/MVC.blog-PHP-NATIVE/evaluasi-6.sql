-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: login
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

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
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artikel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `judulArtikel` varchar(255) NOT NULL,
  `artikel` text NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES (1,'pexels-pixabay-35888.jpg','Syukur Kepada Allah part2','Syukur secara bahasa,الثناء على المحسِن بما أَوْلاكَهُ من المعروف“Syukur adalah pujian bagi orang yang memberikan kebaikan, atas kebaikannya tersebut” (Lihat Ash Shahhah Fil Lughah karya Al Jauhari). Atau dalam bahasa Indonesia, bersyukur artinya berterima kasih.Sedangkan istilah syukur dalam agama, adalah sebagaimana yang dijabarkan oleh Ibnul Qayyim:الشكر ظهور أثر نعمة الله على لسان عبده: ثناء واعترافا، وعلى قلبه شهودا ومحبة، وعلى جوارحه انقيادا وطاعة“Syukur adalah menunjukkan adanya nikmat Allah pada dirinya. Dengan melalui lisan, yaitu berupa pujian dan mengucapkan kesadaran diri bahwa ia telah diberi nikmat. Dengan melalui hati, berupa persaksian dan kecintaan kepada Allah. Melalui anggota badan, berupa kepatuhan dan ketaatan kepada Allah” (Madarijus Salikin, 2/244).Lawan dari syukur adalah kufur nikmat, yaitu enggan menyadari atau bahkan mengingkari bahwa nikmat yang ia dapatkan adalah dari Allah Ta’ala. Semisal Qarun yang berkata,إِنَّمَا أُوتِيتُهُ عَلَى عِلْمٍ عِنْدِي“Sungguh harta dan kenikmatan yang aku miliki itu aku dapatkan dari ilmu yang aku miliki” (QS. Al-Qashash: 78).Syukur Adalah Salah Satu Sifat AllahKetahuilah bahwa syukur merupakan salah satu sifat dari sifat-sifat Allah yang husna. Yaitu Allah pasti akan membalas setiap amalan kebaikan yang dilakukan oleh hamba-Nya, tanpa luput satu orang pun dan tanpa terlewat satu amalan pun. Allah Ta’ala berfirman,إِنَّ اللَّهَ غَفُورٌ شَكُورٌ“Sesungguhnya Allah itu Ghafur dan Syakur” (QS. Asy-Syura: 23).Seorang ahli tafsir, Imam Abu Jarir Ath-Thabari, menafsirkan ayat ini dengan riwayat dari Qatadah, “Ghafur artinya Allah Maha Pengampun terhadap dosa, dan Syakur artinya Maha Pembalas Kebaikan sehingga Allah lipat-gandakan ganjarannya” (Tafsir Ath Thabari, 21/531).Dalam ayat yang lain, Allah Ta’ala berfirman,وَاللَّهُ شَكُورٌ حَلِيمٌ“Allah itu Syakur lagi Haliim” (QS. At-Taghabun: 17).Ibnu Katsir menafsirkan Syakur dalam ayat ini, “Maksudnya adalah memberi membalas kebaikan yang sedikit dengan ganjaran yang banyak” (Tafsir Al-Qur’an Al-Azhim, 8/141).Sehingga orang yang merenungi bahwa Allah adalah Maha Pembalas Kebaikan, dari Rabb kepada Hamba-Nya, ia akan menyadari bahwa tentu lebih layak lagi seorang hamba bersyukur kepada Rabb-Nya atas begitu banyak nikmat yang ia terima.Simak selengkapnya disini. Klik https://muslim.or.id/30031-jadilah-hamba-allah-yang-bersyukur.html','2020-04-10','Sejarah'),(2,'2.jpg','Ingat Allah','Syukur secara bahasa,الثناء على المحسِن بما أَوْلاكَهُ من المعروف“Syukur adalah pujian bagi orang yang memberikan kebaikan, atas kebaikannya tersebut” (Lihat Ash Shahhah Fil Lughah karya Al Jauhari). Atau dalam bahasa Indonesia, bersyukur artinya berterima kasih.Sedangkan istilah syukur dalam agama, adalah sebagaimana yang dijabarkan oleh Ibnul Qayyim:الشكر ظهور أثر نعمة الله على لسان عبده: ثناء واعترافا، وعلى قلبه شهودا ومحبة، وعلى جوارحه انقيادا وطاعة“Syukur adalah menunjukkan adanya nikmat Allah pada dirinya. Dengan melalui lisan, yaitu berupa pujian dan mengucapkan kesadaran diri bahwa ia telah diberi nikmat. Dengan melalui hati, berupa persaksian dan kecintaan kepada Allah. Melalui anggota badan, berupa kepatuhan dan ketaatan kepada Allah” (Madarijus Salikin, 2/244).Lawan dari syukur adalah kufur nikmat, yaitu enggan menyadari atau bahkan mengingkari bahwa nikmat yang ia dapatkan adalah dari Allah Ta’ala. Semisal Qarun yang berkata,إِنَّمَا أُوتِيتُهُ عَلَى عِلْمٍ عِنْدِي“Sungguh harta dan kenikmatan yan','2020-10-28','Agama'),(3,'Tambahkan subjudul.png','Ingat Allah','Syukur secara bahasa,الثناء على المحسِن بما أَوْلاكَهُ من المعروف“Syukur adalah pujian bagi orang yang memberikan kebaikan, atas kebaikannya tersebut” (Lihat Ash Shahhah Fil Lughah karya Al Jauhari). Atau dalam bahasa Indonesia, bersyukur artinya berterima kasih.Sedangkan istilah syukur dalam agama, adalah sebagaimana yang dijabarkan oleh Ibnul Qayyim:الشكر ظهور أثر نعمة الله على لسان عبده: ثناء واعترافا، وعلى قلبه شهودا ومحبة، وعلى جوارحه انقيادا وطاعة“Syukur adalah menunjukkan adanya nikmat Allah pada dirinya. Dengan melalui lisan, yaitu berupa pujian dan mengucapkan kesadaran diri bahwa ia telah diberi nikmat. Dengan melalui hati, berupa persaksian dan kecintaan kepada Allah. Melalui anggota badan, berupa kepatuhan dan ketaatan kepada Allah” (Madarijus Salikin, 2/244).Lawan dari syukur adalah kufur nikmat, yaitu enggan menyadari atau bahkan mengingkari bahwa nikmat yang ia dapatkan adalah dari Allah Ta’ala. Semisal Qarun yang berkata,إِنَّمَا أُوتِيتُهُ عَلَى عِلْمٍ عِنْدِي“Sungguh harta dan kenikmatan yan','1111-11-11','Agama'),(4,'5.jpeg','Khayalan Semu','Kitchen sink Mix and match multiple content types to create the card you need, or throw everything in there. Shown below are image styles, blocks, text styles, and a list group—all wrapped in a fixed-width card.','2222-02-22','Pendidikan'),(5,'5.jpeg','Jangan Banyak Halus','Kitchen sink Mix and match multiple content types to create the card you need, or throw everything in there. Shown below are image styles, blocks, text styles, and a list group—all wrapped in a fixed-width card.','2222-02-22','Sejarah'),(6,'Tambahkan subjudul.png','Ingat Allah part3','Syukur secara bahasa,الثناء على المحسِن بما أَوْلاكَهُ من المعروف“Syukur adalah pujian bagi orang yang memberikan kebaikan, atas kebaikannya tersebut” (Lihat Ash Shahhah Fil Lughah karya Al Jauhari). Atau dalam bahasa Indonesia, bersyukur artinya berterima kasih.Sedangkan istilah syukur dalam agama, adalah sebagaimana yang dijabarkan oleh Ibnul Qayyim:الشكر ظهور أثر نعمة الله على لسان عبده: ثناء واعترافا، وعلى قلبه شهودا ومحبة، وعلى جوارحه انقيادا وطاعة“Syukur adalah menunjukkan adanya nikmat Allah pada dirinya. Dengan melalui lisan, yaitu berupa pujian dan mengucapkan kesadaran diri bahwa ia telah diberi nikmat. Dengan melalui hati, berupa persaksian dan kecintaan kepada Allah. Melalui anggota badan, berupa kepatuhan dan ketaatan kepada Allah” (Madarijus Salikin, 2/244).Lawan dari syukur adalah kufur nikmat, yaitu enggan menyadari atau bahkan mengingkari bahwa nikmat yang ia dapatkan adalah dari Allah Ta’ala. Semisal Qarun yang berkata,إِنَّمَا أُوتِيتُهُ عَلَى عِلْمٍ عِنْدِي“Sungguh harta dan kenikmatan yan','1111-11-11','Agama'),(7,'download.jpeg','Ingat Allah','test','1111-11-11','Agama'),(8,'5.jpeg','Khayalan Semu','Syukur secara bahasa,الثناء على المحسِن بما أَوْلاكَهُ من المعروف“Syukur adalah pujian bagi orang yang memberikan kebaikan, atas kebaikannya tersebut” (Lihat Ash Shahhah Fil Lughah karya Al Jauhari). Atau dalam bahasa Indonesia, bersyukur artinya berterima kasih.Sedangkan istilah syukur dalam agama, adalah sebagaimana yang dijabarkan oleh Ibnul Qayyim:الشكر ظهور أثر نعمة الله على لسان عبده: ثناء واعترافا، وعلى قلبه شهودا ومحبة، وعلى جوارحه انقيادا وطاعة“Syukur adalah menunjukkan adanya nikmat Allah pada dirinya. Dengan melalui lisan, yaitu berupa pujian dan mengucapkan kesadaran diri bahwa ia telah diberi nikmat. Dengan melalui hati, berupa persaksian dan kecintaan kepada Allah. Melalui anggota badan, berupa kepatuhan dan ketaatan kepada Allah” (Madarijus Salikin, 2/244).Lawan dari syukur adalah kufur nikmat, yaitu enggan menyadari atau bahkan mengingkari bahwa nikmat yang ia dapatkan adalah dari Allah Ta’ala. Semisal Qarun yang berkata,إِنَّمَا أُوتِيتُهُ عَلَى عِلْمٍ عِنْدِي“Sungguh harta dan kenikmatan yan','1111-11-11','Pendidikan'),(9,'Tambahkan subjudul.png','Jangan Banyak Halus','Syukur secara bahasa,الثناء على المحسِن بما أَوْلاكَهُ من المعروف“Syukur adalah pujian bagi orang yang memberikan kebaikan, atas kebaikannya tersebut” (Lihat Ash Shahhah Fil Lughah karya Al Jauhari). Atau dalam bahasa Indonesia, bersyukur artinya berterima kasih.Sedangkan istilah syukur dalam agama, adalah sebagaimana yang dijabarkan oleh Ibnul Qayyim:الشكر ظهور أثر نعمة الله على لسان عبده: ثناء واعترافا، وعلى قلبه شهودا ومحبة، وعلى جوارحه انقيادا وطاعة“Syukur adalah menunjukkan adanya nikmat Allah pada dirinya. Dengan melalui lisan, yaitu berupa pujian dan mengucapkan kesadaran diri bahwa ia telah diberi nikmat. Dengan melalui hati, berupa persaksian dan kecintaan kepada Allah. Melalui anggota badan, berupa kepatuhan dan ketaatan kepada Allah” (Madarijus Salikin, 2/244).Lawan dari syukur adalah kufur nikmat, yaitu enggan menyadari atau bahkan mengingkari bahwa nikmat yang ia dapatkan adalah dari Allah Ta’ala. Semisal Qarun yang berkata,إِنَّمَا أُوتِيتُهُ عَلَى عِلْمٍ عِنْدِي“Sungguh harta dan kenikmatan yan','1111-11-11','Pendidikan'),(10,'sa','Syukuran','test','1111-11-11','Agama');
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login1`
--

DROP TABLE IF EXISTS `login1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login1`
--

LOCK TABLES `login1` WRITE;
/*!40000 ALTER TABLE `login1` DISABLE KEYS */;
INSERT INTO `login1` VALUES (1,'Teddi','$2y$10$.H1Xu5Iog4JLTD23CA6u7eDioheuDGR5VDYdzdFLIzzkU5.DffZ1e'),(2,'admin','123'),(3,'sofyan','$2y$10$QgmclBzf.1UkxACgOyaFB.nMAVht/JCnZW9ouq5BOdsm6zRKomhh6');
/*!40000 ALTER TABLE `login1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Admin','123'),(2,'selesai','selesai');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-18 16:38:02
