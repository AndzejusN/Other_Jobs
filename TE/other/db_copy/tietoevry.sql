-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.6.5-MariaDB-1:10.6.5+maria~focal - mariadb.org binary distribution
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for vegetarian
CREATE DATABASE IF NOT EXISTS `vegetarian` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `vegetarian`;

-- Dumping structure for table vegetarian.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table vegetarian.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table vegetarian.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table vegetarian.migrations: ~5 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_05_27_183926_create_products_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table vegetarian.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table vegetarian.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table vegetarian.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table vegetarian.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table vegetarian.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kcal` smallint(5) unsigned NOT NULL,
  `carb` decimal(5,1) unsigned NOT NULL,
  `protein` decimal(5,1) unsigned NOT NULL,
  `fat` decimal(5,1) unsigned NOT NULL,
  `group` tinyint(3) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table vegetarian.products: ~26 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT IGNORE INTO `products` (`id`, `name`, `kcal`, `carb`, `protein`, `fat`, `group`, `created_at`, `updated_at`) VALUES
	(1, 'couscous', 376, 77.4, 12.8, 0.6, 1, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(2, 'buckwheat', 349, 69.3, 12.6, 3.1, 1, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(3, 'pasta', 360, 74.0, 12.0, 2.0, 1, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(4, 'semolina', 349, 75.0, 10.0, 1.0, 1, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(5, 'pearl barley', 322, 63.2, 8.3, 0.3, 1, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(8, 'orange', 47, 11.7, 0.9, 0.1, 2, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(9, 'raspberry', 38, 12.0, 1.2, 0.6, 2, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(10, 'banana', 92, 23.4, 1.0, 0.4, 2, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(11, 'strawberry', 30, 7.0, 0.6, 0.3, 2, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(12, 'blackberry', 52, 12.7, 0.7, 0.3, 2, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(13, 'pear', 52, 13.4, 0.4, 0.3, 2, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(14, 'apple', 53, 13.0, 0.5, 0.5, 2, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(15, 'cucumber', 11, 2.3, 0.8, 0.2, 3, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(16, 'aubergine', 28, 6.6, 0.8, 0.2, 3, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(17, 'potato', 82, 18.0, 2.0, 0.0, 3, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(18, 'humus', 166, 14.2, 7.9, 9.6, 3, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(19, 'cabbage', 22, 5.4, 1.5, 0.2, 3, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(20, 'corn', 94, 19.8, 3.7, 1.6, 3, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(21, 'pumpkin', 26, 6.5, 1.0, 0.1, 3, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(22, 'cashew nuts', 585, 30.5, 15.8, 46.3, 4, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(23, 'walnuts', 654, 13.7, 15.2, 65.2, 4, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(24, 'pine nuts', 672, 13.0, 13.6, 68.4, 4, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(25, 'coconut', 362, 15.2, 4.5, 35.3, 4, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(26, 'hazelnuts', 658, 14.9, 17.6, 63.2, 4, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(27, 'almond nuts', 575, 22.0, 21.0, 49.0, 4, '2022-05-31 14:03:00', '2022-05-31 14:03:00'),
	(28, 'peanuts', 569, 19.2, 25.7, 46.1, 4, '2022-05-31 14:03:01', '2022-05-31 14:03:01');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table vegetarian.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table vegetarian.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
