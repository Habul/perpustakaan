/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 8.0.30 : Database - laravel8_perpustakaan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravel8_perpustakaan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `laravel8_perpustakaan`;

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sampul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit_id` bigint unsigned NOT NULL,
  `kategori_id` bigint unsigned NOT NULL,
  `rak_id` bigint unsigned NOT NULL,
  `stok` int NOT NULL,
  `dipinjam` int NOT NULL DEFAULT '0',
  `total` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `buku` */

insert  into `buku`(`id`,`judul`,`slug`,`sampul`,`penulis`,`penerbit_id`,`kategori_id`,`rak_id`,`stok`,`dipinjam`,`total`,`created_at`,`updated_at`) values 
(1,'Bintang','bintang','buku/Sampul_novel_Bintang.jpeg','Tere liye',2,2,2,9,0,9,'2023-01-20 16:08:06','2024-02-04 04:12:07'),
(2,'Matahari','matahari','buku/Sampul_novel_Matahari.jpeg','Tere liye',3,2,3,9,0,9,'2023-01-20 16:08:06','2024-01-24 12:10:37'),
(3,'Tentang kamu','tentang-kamu','buku/Tentang_Kamu_sampul.jpeg','Tere liye',2,2,4,11,0,11,'2023-01-20 16:08:06','2024-02-04 04:11:55'),
(4,'Gusdur','gusdur','buku/gusdur.jpg','Greg borton',2,3,7,11,0,11,'2023-01-20 16:08:06','2023-06-11 10:25:58'),
(5,'Habibie','habibie','buku/habibie.jpg','Raden toto sugiharto',2,3,8,10,0,10,'2023-01-20 16:08:06','2024-02-04 04:24:17'),
(6,'Naruto volume 58','naruto-volume-58','buku/naruto-58.jpg','Masashi kishimoto',3,6,12,9,1,10,'2023-01-20 16:08:06','2024-02-04 04:29:59'),
(7,'Naruto volume 71','naruto-volume-71','buku/naruto-71.jpg','Masashi kishimoto',3,6,13,7,0,7,'2023-01-20 16:08:06','2024-01-24 12:12:20'),
(8,'Keselamatan di rumah dan di perjalanan','keselamatan-di-rumah-dan-di-perjalanan','buku/QiszOlutp3AVH2SC6QqAtf5FJeguDolSjCOhmR6w.jpg','Kemendikbud',1,1,1,3,0,3,'2023-01-26 14:12:26','2023-08-26 17:36:50'),
(9,'Testbuku','testbuku','buku/GkBo4SGVDCFXlxmt5ns2wNk0heVjKVe71q2zHsaF.jpg','Test2',2,2,2,0,0,1,'2023-08-26 17:30:34','2023-08-26 17:31:46');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int unsigned NOT NULL,
  `nama` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

/*Table structure for table `detail_peminjaman` */

DROP TABLE IF EXISTS `detail_peminjaman`;

CREATE TABLE `detail_peminjaman` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `peminjaman_id` bigint unsigned NOT NULL,
  `buku_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=574 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detail_peminjaman` */

insert  into `detail_peminjaman`(`id`,`peminjaman_id`,`buku_id`,`created_at`,`updated_at`) values 
(571,531,5,'2024-02-04 04:19:09','2024-02-04 04:19:09'),
(572,532,3,'2024-02-04 04:23:28','2024-02-04 04:23:28'),
(573,533,6,'2024-02-04 04:29:55','2024-02-04 04:29:55');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kategori` */

insert  into `kategori`(`id`,`nama`,`slug`,`created_at`,`updated_at`) values 
(1,'None','none','2023-01-20 16:08:05','2023-01-20 16:08:05'),
(2,'Novel','novel','2023-01-20 16:08:05','2023-01-20 16:08:05'),
(3,'Sejarah','sejarah','2023-01-20 16:08:05','2023-01-20 16:08:05'),
(4,'Religi','religi','2023-01-20 16:08:05','2023-01-20 16:08:05'),
(5,'Biografi','biografi','2023-01-20 16:08:06','2023-01-20 16:08:06'),
(6,'Komik','komik','2023-01-20 16:08:06','2023-01-20 16:08:06');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2021_06_10_074424_create_permission_tables',1),
(5,'2021_06_10_092718_create_kategori_table',1),
(6,'2021_06_10_092904_create_rak_table',1),
(7,'2021_06_10_092922_create_penerbit_table',1),
(8,'2021_06_10_092940_create_buku_table',1),
(9,'2021_06_25_084641_create_peminjaman_table',1),
(10,'2021_06_25_085011_create_detail_peminjaman_table',1);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values 
(1,'App\\Models\\User',1),
(2,'App\\Models\\User',2),
(3,'App\\Models\\User',3),
(3,'App\\Models\\User',4),
(3,'App\\Models\\User',5),
(3,'App\\Models\\User',6),
(3,'App\\Models\\User',7),
(3,'App\\Models\\User',8),
(3,'App\\Models\\User',9),
(3,'App\\Models\\User',10),
(3,'App\\Models\\User',11),
(3,'App\\Models\\User',12),
(3,'App\\Models\\User',13),
(3,'App\\Models\\User',14),
(3,'App\\Models\\User',15),
(3,'App\\Models\\User',16),
(3,'App\\Models\\User',17),
(3,'App\\Models\\User',18),
(3,'App\\Models\\User',19),
(3,'App\\Models\\User',20),
(3,'App\\Models\\User',21),
(3,'App\\Models\\User',22),
(3,'App\\Models\\User',23),
(3,'App\\Models\\User',24),
(3,'App\\Models\\User',25),
(3,'App\\Models\\User',26),
(3,'App\\Models\\User',27),
(3,'App\\Models\\User',28),
(3,'App\\Models\\User',29),
(3,'App\\Models\\User',30),
(3,'App\\Models\\User',31),
(3,'App\\Models\\User',32),
(3,'App\\Models\\User',33),
(3,'App\\Models\\User',34),
(3,'App\\Models\\User',35),
(3,'App\\Models\\User',36),
(3,'App\\Models\\User',37),
(3,'App\\Models\\User',38),
(3,'App\\Models\\User',39),
(3,'App\\Models\\User',40),
(3,'App\\Models\\User',41),
(3,'App\\Models\\User',42),
(3,'App\\Models\\User',43),
(3,'App\\Models\\User',44),
(3,'App\\Models\\User',45),
(3,'App\\Models\\User',46),
(3,'App\\Models\\User',47),
(3,'App\\Models\\User',48),
(3,'App\\Models\\User',49),
(3,'App\\Models\\User',50),
(3,'App\\Models\\User',51),
(3,'App\\Models\\User',52),
(3,'App\\Models\\User',53),
(3,'App\\Models\\User',54),
(3,'App\\Models\\User',55),
(3,'App\\Models\\User',56),
(3,'App\\Models\\User',57),
(3,'App\\Models\\User',58),
(3,'App\\Models\\User',59),
(3,'App\\Models\\User',60),
(3,'App\\Models\\User',61),
(3,'App\\Models\\User',62),
(3,'App\\Models\\User',63),
(3,'App\\Models\\User',64),
(3,'App\\Models\\User',65),
(3,'App\\Models\\User',66),
(3,'App\\Models\\User',67),
(3,'App\\Models\\User',68),
(3,'App\\Models\\User',69),
(3,'App\\Models\\User',70),
(3,'App\\Models\\User',71),
(3,'App\\Models\\User',72),
(3,'App\\Models\\User',73),
(3,'App\\Models\\User',74),
(3,'App\\Models\\User',75),
(3,'App\\Models\\User',76),
(3,'App\\Models\\User',77),
(3,'App\\Models\\User',78),
(3,'App\\Models\\User',79),
(3,'App\\Models\\User',80),
(3,'App\\Models\\User',81),
(3,'App\\Models\\User',82),
(3,'App\\Models\\User',83),
(3,'App\\Models\\User',84),
(3,'App\\Models\\User',85),
(3,'App\\Models\\User',86),
(3,'App\\Models\\User',87),
(3,'App\\Models\\User',88),
(3,'App\\Models\\User',89),
(3,'App\\Models\\User',90),
(3,'App\\Models\\User',91),
(3,'App\\Models\\User',92),
(3,'App\\Models\\User',93),
(3,'App\\Models\\User',94),
(3,'App\\Models\\User',95),
(3,'App\\Models\\User',96),
(3,'App\\Models\\User',97),
(3,'App\\Models\\User',98),
(3,'App\\Models\\User',99),
(3,'App\\Models\\User',100),
(3,'App\\Models\\User',101),
(3,'App\\Models\\User',102),
(3,'App\\Models\\User',103),
(3,'App\\Models\\User',104),
(3,'App\\Models\\User',105),
(3,'App\\Models\\User',106),
(3,'App\\Models\\User',107),
(3,'App\\Models\\User',108),
(3,'App\\Models\\User',109),
(3,'App\\Models\\User',110),
(3,'App\\Models\\User',111),
(3,'App\\Models\\User',112),
(3,'App\\Models\\User',113),
(3,'App\\Models\\User',114),
(3,'App\\Models\\User',115),
(3,'App\\Models\\User',116),
(3,'App\\Models\\User',117),
(3,'App\\Models\\User',118),
(3,'App\\Models\\User',119),
(3,'App\\Models\\User',120),
(3,'App\\Models\\User',121),
(3,'App\\Models\\User',122),
(3,'App\\Models\\User',123),
(3,'App\\Models\\User',124),
(3,'App\\Models\\User',125),
(3,'App\\Models\\User',126),
(3,'App\\Models\\User',127),
(3,'App\\Models\\User',128),
(3,'App\\Models\\User',129),
(3,'App\\Models\\User',130),
(3,'App\\Models\\User',131),
(3,'App\\Models\\User',132),
(3,'App\\Models\\User',133),
(3,'App\\Models\\User',134),
(3,'App\\Models\\User',135),
(3,'App\\Models\\User',136),
(3,'App\\Models\\User',137),
(3,'App\\Models\\User',138),
(3,'App\\Models\\User',139),
(3,'App\\Models\\User',140),
(3,'App\\Models\\User',141),
(3,'App\\Models\\User',142),
(3,'App\\Models\\User',143),
(3,'App\\Models\\User',144),
(3,'App\\Models\\User',145),
(3,'App\\Models\\User',146),
(3,'App\\Models\\User',147),
(3,'App\\Models\\User',148),
(3,'App\\Models\\User',149),
(3,'App\\Models\\User',150),
(3,'App\\Models\\User',151),
(3,'App\\Models\\User',152),
(3,'App\\Models\\User',153),
(3,'App\\Models\\User',154),
(3,'App\\Models\\User',155),
(3,'App\\Models\\User',156),
(3,'App\\Models\\User',157),
(3,'App\\Models\\User',158),
(3,'App\\Models\\User',159),
(3,'App\\Models\\User',160),
(3,'App\\Models\\User',161),
(3,'App\\Models\\User',162),
(3,'App\\Models\\User',163),
(3,'App\\Models\\User',164),
(3,'App\\Models\\User',165),
(3,'App\\Models\\User',166),
(3,'App\\Models\\User',167),
(3,'App\\Models\\User',168),
(3,'App\\Models\\User',169),
(3,'App\\Models\\User',170),
(3,'App\\Models\\User',171),
(3,'App\\Models\\User',172),
(3,'App\\Models\\User',173),
(3,'App\\Models\\User',174),
(3,'App\\Models\\User',175),
(3,'App\\Models\\User',176),
(3,'App\\Models\\User',177),
(3,'App\\Models\\User',178),
(3,'App\\Models\\User',179),
(3,'App\\Models\\User',180),
(3,'App\\Models\\User',181),
(3,'App\\Models\\User',182),
(3,'App\\Models\\User',183),
(3,'App\\Models\\User',184),
(3,'App\\Models\\User',185),
(3,'App\\Models\\User',186),
(3,'App\\Models\\User',187),
(3,'App\\Models\\User',188),
(3,'App\\Models\\User',189),
(3,'App\\Models\\User',190),
(3,'App\\Models\\User',191),
(3,'App\\Models\\User',192),
(3,'App\\Models\\User',193),
(3,'App\\Models\\User',194),
(3,'App\\Models\\User',195),
(3,'App\\Models\\User',196),
(3,'App\\Models\\User',197),
(3,'App\\Models\\User',198),
(3,'App\\Models\\User',199),
(3,'App\\Models\\User',200),
(3,'App\\Models\\User',201),
(3,'App\\Models\\User',202),
(3,'App\\Models\\User',203),
(3,'App\\Models\\User',204),
(3,'App\\Models\\User',205),
(3,'App\\Models\\User',206),
(3,'App\\Models\\User',207),
(3,'App\\Models\\User',208),
(3,'App\\Models\\User',209),
(3,'App\\Models\\User',210),
(3,'App\\Models\\User',211),
(3,'App\\Models\\User',212),
(3,'App\\Models\\User',213),
(3,'App\\Models\\User',214),
(3,'App\\Models\\User',215),
(3,'App\\Models\\User',216),
(3,'App\\Models\\User',217),
(3,'App\\Models\\User',218),
(3,'App\\Models\\User',219),
(3,'App\\Models\\User',220),
(3,'App\\Models\\User',221),
(3,'App\\Models\\User',222),
(3,'App\\Models\\User',223),
(3,'App\\Models\\User',224),
(3,'App\\Models\\User',225),
(3,'App\\Models\\User',226),
(3,'App\\Models\\User',227),
(3,'App\\Models\\User',228),
(3,'App\\Models\\User',229),
(3,'App\\Models\\User',230),
(3,'App\\Models\\User',231),
(3,'App\\Models\\User',232),
(3,'App\\Models\\User',233),
(3,'App\\Models\\User',234),
(3,'App\\Models\\User',235),
(3,'App\\Models\\User',236),
(3,'App\\Models\\User',237),
(3,'App\\Models\\User',238),
(3,'App\\Models\\User',239),
(3,'App\\Models\\User',240),
(3,'App\\Models\\User',241),
(3,'App\\Models\\User',242),
(3,'App\\Models\\User',243),
(3,'App\\Models\\User',244),
(3,'App\\Models\\User',245),
(3,'App\\Models\\User',246),
(3,'App\\Models\\User',247),
(3,'App\\Models\\User',248),
(3,'App\\Models\\User',249),
(3,'App\\Models\\User',250),
(3,'App\\Models\\User',251),
(3,'App\\Models\\User',252),
(3,'App\\Models\\User',253),
(3,'App\\Models\\User',254),
(3,'App\\Models\\User',255),
(3,'App\\Models\\User',256),
(3,'App\\Models\\User',257),
(3,'App\\Models\\User',258),
(3,'App\\Models\\User',259),
(3,'App\\Models\\User',260),
(3,'App\\Models\\User',261),
(3,'App\\Models\\User',262),
(3,'App\\Models\\User',263),
(3,'App\\Models\\User',264),
(3,'App\\Models\\User',265),
(3,'App\\Models\\User',266),
(3,'App\\Models\\User',267),
(3,'App\\Models\\User',268),
(3,'App\\Models\\User',269),
(3,'App\\Models\\User',270),
(3,'App\\Models\\User',271),
(3,'App\\Models\\User',272),
(3,'App\\Models\\User',273),
(3,'App\\Models\\User',274),
(3,'App\\Models\\User',275),
(3,'App\\Models\\User',276),
(3,'App\\Models\\User',277),
(3,'App\\Models\\User',278),
(3,'App\\Models\\User',279),
(3,'App\\Models\\User',280),
(3,'App\\Models\\User',281),
(3,'App\\Models\\User',282),
(3,'App\\Models\\User',283),
(3,'App\\Models\\User',284),
(3,'App\\Models\\User',285),
(3,'App\\Models\\User',286),
(3,'App\\Models\\User',287),
(3,'App\\Models\\User',288),
(3,'App\\Models\\User',289),
(3,'App\\Models\\User',290),
(3,'App\\Models\\User',291),
(3,'App\\Models\\User',292),
(3,'App\\Models\\User',293),
(3,'App\\Models\\User',294),
(3,'App\\Models\\User',295),
(3,'App\\Models\\User',296),
(3,'App\\Models\\User',297),
(3,'App\\Models\\User',298),
(3,'App\\Models\\User',299),
(3,'App\\Models\\User',300),
(3,'App\\Models\\User',301),
(3,'App\\Models\\User',302),
(3,'App\\Models\\User',303),
(3,'App\\Models\\User',304),
(3,'App\\Models\\User',305),
(3,'App\\Models\\User',306),
(3,'App\\Models\\User',307),
(3,'App\\Models\\User',308),
(3,'App\\Models\\User',309),
(3,'App\\Models\\User',310),
(3,'App\\Models\\User',311),
(3,'App\\Models\\User',312),
(3,'App\\Models\\User',313),
(3,'App\\Models\\User',314),
(3,'App\\Models\\User',315),
(3,'App\\Models\\User',316),
(3,'App\\Models\\User',317),
(3,'App\\Models\\User',318),
(3,'App\\Models\\User',319),
(3,'App\\Models\\User',320),
(3,'App\\Models\\User',321),
(3,'App\\Models\\User',322),
(3,'App\\Models\\User',323),
(3,'App\\Models\\User',324),
(3,'App\\Models\\User',325),
(3,'App\\Models\\User',326),
(3,'App\\Models\\User',327),
(3,'App\\Models\\User',328),
(3,'App\\Models\\User',329),
(3,'App\\Models\\User',330),
(3,'App\\Models\\User',331),
(3,'App\\Models\\User',332),
(3,'App\\Models\\User',333),
(3,'App\\Models\\User',334),
(3,'App\\Models\\User',335),
(3,'App\\Models\\User',336),
(3,'App\\Models\\User',337),
(3,'App\\Models\\User',338),
(3,'App\\Models\\User',339),
(3,'App\\Models\\User',340),
(3,'App\\Models\\User',341),
(3,'App\\Models\\User',342),
(3,'App\\Models\\User',343),
(3,'App\\Models\\User',344),
(3,'App\\Models\\User',345),
(3,'App\\Models\\User',346),
(3,'App\\Models\\User',347),
(3,'App\\Models\\User',348),
(3,'App\\Models\\User',349),
(3,'App\\Models\\User',350),
(3,'App\\Models\\User',351),
(3,'App\\Models\\User',352),
(3,'App\\Models\\User',353),
(3,'App\\Models\\User',354),
(3,'App\\Models\\User',355),
(3,'App\\Models\\User',356),
(3,'App\\Models\\User',357),
(3,'App\\Models\\User',358),
(3,'App\\Models\\User',359),
(3,'App\\Models\\User',360),
(3,'App\\Models\\User',361),
(3,'App\\Models\\User',362),
(3,'App\\Models\\User',363),
(3,'App\\Models\\User',364),
(3,'App\\Models\\User',365),
(3,'App\\Models\\User',366),
(3,'App\\Models\\User',367),
(3,'App\\Models\\User',368),
(3,'App\\Models\\User',369),
(3,'App\\Models\\User',370),
(3,'App\\Models\\User',371),
(3,'App\\Models\\User',372),
(3,'App\\Models\\User',373),
(3,'App\\Models\\User',374),
(3,'App\\Models\\User',375),
(3,'App\\Models\\User',376),
(3,'App\\Models\\User',377),
(3,'App\\Models\\User',378),
(3,'App\\Models\\User',379),
(3,'App\\Models\\User',380),
(3,'App\\Models\\User',381),
(3,'App\\Models\\User',382),
(3,'App\\Models\\User',383),
(3,'App\\Models\\User',384),
(3,'App\\Models\\User',385),
(3,'App\\Models\\User',386),
(3,'App\\Models\\User',387),
(3,'App\\Models\\User',388),
(3,'App\\Models\\User',389),
(3,'App\\Models\\User',390),
(3,'App\\Models\\User',391),
(3,'App\\Models\\User',392),
(3,'App\\Models\\User',393),
(3,'App\\Models\\User',394),
(3,'App\\Models\\User',395),
(3,'App\\Models\\User',396),
(3,'App\\Models\\User',397),
(3,'App\\Models\\User',398),
(3,'App\\Models\\User',399),
(3,'App\\Models\\User',400),
(3,'App\\Models\\User',401),
(3,'App\\Models\\User',402),
(3,'App\\Models\\User',403),
(3,'App\\Models\\User',404),
(3,'App\\Models\\User',405),
(3,'App\\Models\\User',406),
(3,'App\\Models\\User',407),
(3,'App\\Models\\User',408),
(3,'App\\Models\\User',409),
(3,'App\\Models\\User',410),
(3,'App\\Models\\User',411),
(3,'App\\Models\\User',412),
(3,'App\\Models\\User',413),
(3,'App\\Models\\User',414),
(3,'App\\Models\\User',415),
(3,'App\\Models\\User',416),
(3,'App\\Models\\User',417),
(3,'App\\Models\\User',418),
(3,'App\\Models\\User',419),
(3,'App\\Models\\User',420),
(3,'App\\Models\\User',421),
(3,'App\\Models\\User',422),
(3,'App\\Models\\User',423),
(3,'App\\Models\\User',424),
(3,'App\\Models\\User',425),
(3,'App\\Models\\User',426),
(3,'App\\Models\\User',427),
(3,'App\\Models\\User',428),
(3,'App\\Models\\User',429),
(3,'App\\Models\\User',430),
(3,'App\\Models\\User',431),
(3,'App\\Models\\User',432),
(3,'App\\Models\\User',433),
(3,'App\\Models\\User',434),
(3,'App\\Models\\User',435),
(3,'App\\Models\\User',436),
(3,'App\\Models\\User',437),
(3,'App\\Models\\User',438),
(3,'App\\Models\\User',439),
(3,'App\\Models\\User',440),
(3,'App\\Models\\User',441),
(3,'App\\Models\\User',442),
(3,'App\\Models\\User',443),
(3,'App\\Models\\User',444),
(3,'App\\Models\\User',445),
(3,'App\\Models\\User',446),
(3,'App\\Models\\User',447),
(3,'App\\Models\\User',448),
(3,'App\\Models\\User',449),
(3,'App\\Models\\User',450),
(3,'App\\Models\\User',451),
(3,'App\\Models\\User',452),
(3,'App\\Models\\User',453),
(3,'App\\Models\\User',454),
(3,'App\\Models\\User',455),
(3,'App\\Models\\User',456),
(3,'App\\Models\\User',457),
(3,'App\\Models\\User',458),
(3,'App\\Models\\User',459),
(3,'App\\Models\\User',460),
(3,'App\\Models\\User',461),
(3,'App\\Models\\User',462),
(3,'App\\Models\\User',463),
(3,'App\\Models\\User',464),
(3,'App\\Models\\User',465),
(3,'App\\Models\\User',466),
(3,'App\\Models\\User',467),
(3,'App\\Models\\User',468),
(3,'App\\Models\\User',469),
(3,'App\\Models\\User',470),
(3,'App\\Models\\User',471),
(3,'App\\Models\\User',472),
(3,'App\\Models\\User',473),
(3,'App\\Models\\User',474),
(3,'App\\Models\\User',475),
(3,'App\\Models\\User',476),
(3,'App\\Models\\User',477),
(3,'App\\Models\\User',478),
(3,'App\\Models\\User',479),
(3,'App\\Models\\User',480),
(3,'App\\Models\\User',481),
(3,'App\\Models\\User',482),
(3,'App\\Models\\User',483),
(3,'App\\Models\\User',484),
(3,'App\\Models\\User',485),
(3,'App\\Models\\User',486),
(3,'App\\Models\\User',487),
(3,'App\\Models\\User',488),
(3,'App\\Models\\User',489),
(3,'App\\Models\\User',490),
(3,'App\\Models\\User',491),
(3,'App\\Models\\User',492),
(3,'App\\Models\\User',493),
(3,'App\\Models\\User',494),
(3,'App\\Models\\User',495),
(3,'App\\Models\\User',496),
(3,'App\\Models\\User',497),
(3,'App\\Models\\User',498),
(3,'App\\Models\\User',499),
(3,'App\\Models\\User',500),
(3,'App\\Models\\User',501),
(3,'App\\Models\\User',502),
(3,'App\\Models\\User',503),
(3,'App\\Models\\User',504),
(3,'App\\Models\\User',505),
(3,'App\\Models\\User',506),
(3,'App\\Models\\User',507),
(3,'App\\Models\\User',511),
(3,'App\\Models\\User',512),
(3,'App\\Models\\User',513);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `peminjaman` */

DROP TABLE IF EXISTS `peminjaman`;

CREATE TABLE `peminjaman` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_pinjam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `peminjam_nama` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peminjam_id` bigint unsigned DEFAULT NULL,
  `petugas_pinjam` bigint unsigned DEFAULT NULL,
  `petugas_kembali` bigint unsigned DEFAULT NULL,
  `status` int NOT NULL,
  `denda` int DEFAULT '0',
  `denda_hilang` int DEFAULT '0',
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `hilang` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=534 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `peminjaman` */

insert  into `peminjaman`(`id`,`kode_pinjam`,`peminjam_nama`,`peminjam_id`,`petugas_pinjam`,`petugas_kembali`,`status`,`denda`,`denda_hilang`,`tanggal_pinjam`,`tanggal_kembali`,`tanggal_pengembalian`,`hilang`,`created_at`,`updated_at`) values 
(531,'643649066','habul',NULL,2,2,3,0,30000,'2024-02-04','2024-02-14','2024-02-04',0,'2024-02-04 04:19:09','2024-02-04 04:24:17'),
(532,'970183111','andre',NULL,2,NULL,1,0,0,'2024-02-05','2024-02-15',NULL,0,'2024-02-04 04:23:28','2024-02-04 04:23:28'),
(533,'179945652','rivan',NULL,2,NULL,2,0,0,'2024-02-06','2024-02-16',NULL,0,'2024-02-04 04:29:55','2024-02-04 04:29:59');

/*Table structure for table `penerbit` */

DROP TABLE IF EXISTS `penerbit`;

CREATE TABLE `penerbit` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `penerbit` */

insert  into `penerbit`(`id`,`nama`,`slug`,`created_at`,`updated_at`) values 
(1,'None','none','2023-01-20 16:08:06','2023-01-20 16:08:06'),
(2,'Gramedia','gramedia','2023-01-20 16:08:06','2023-01-20 16:08:06'),
(3,'Erlangga','erlangga','2023-01-20 16:08:06','2023-01-20 16:08:06');

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

/*Table structure for table `rak` */

DROP TABLE IF EXISTS `rak`;

CREATE TABLE `rak` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `rak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `baris` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `rak` */

insert  into `rak`(`id`,`rak`,`baris`,`slug`,`kategori_id`,`created_at`,`updated_at`) values 
(1,'0','0','0',1,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(2,'1','1','1-1',2,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(3,'1','2','1-2',2,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(4,'1','3','1-3',2,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(5,'1','4','1-4',2,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(6,'1','5','1-5',2,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(7,'2','1','2-1',3,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(8,'2','2','2-2',3,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(9,'2','3','2-3',3,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(10,'2','4','2-4',3,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(11,'2','5','2-5',3,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(12,'3','1','3-1',6,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(13,'3','2','3-2',6,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(14,'3','3','3-3',6,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(15,'3','4','3-4',6,'2023-01-20 16:08:06','2023-01-20 16:08:06'),
(16,'3','5','3-5',6,'2023-01-20 16:08:06','2023-01-20 16:08:06');

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(1,'admin','web','2023-01-20 16:08:05','2023-01-20 16:08:05'),
(2,'petugas','web','2023-01-20 16:08:05','2023-01-20 16:08:05'),
(3,'peminjam','web','2023-01-20 16:08:05','2023-01-20 16:08:05');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=514 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`kelas`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Admin','','admin@gmail.com','2023-01-20 16:08:05','$2y$10$rQxvywTaFOkwcyg8eDCnAerj0UgZ/lJmWYvy5O10GZJBJZqaidY1e',NULL,'2023-01-20 16:08:05','2023-01-20 16:08:05'),
(2,'Petugas','','petugas@gmail.com','2023-01-20 16:08:05','$2y$10$uqG0CdWbFAVnD1kjHF1q4.ejrBmPACQ9fYIhlZPzMTfZjvr9j/pHi',NULL,'2023-01-20 16:08:05','2023-01-20 16:08:05');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
