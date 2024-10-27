-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2024 at 06:02 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogvibes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_pwd` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pwd`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin123', '2024-09-09 18:30:00', '2024-09-09 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Food', '2024-09-10 12:46:11', '2024-10-11 06:42:33'),
(2, 'Lifestyle', '2024-10-02 19:56:06', '2024-10-11 06:42:18'),
(3, 'Festival', '2024-10-03 17:39:19', '2024-10-11 06:42:55'),
(4, 'Travel', '2024-10-11 06:43:04', '2024-10-11 06:43:04'),
(5, 'Fitness', '2024-10-11 06:43:16', '2024-10-11 06:43:16'),
(6, 'Health & Fitness', '2024-10-11 06:43:43', '2024-10-11 06:43:43'),
(7, 'DIY Craft', '2024-10-11 06:44:03', '2024-10-11 06:44:03'),
(8, 'News', '2024-10-11 06:44:44', '2024-10-11 06:44:44'),
(9, 'Business', '2024-10-11 06:45:03', '2024-10-11 06:45:03'),
(10, 'Tech', '2024-10-11 06:47:20', '2024-10-11 06:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `contact_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_email`, `contact_message`, `created_at`, `updated_at`) VALUES
(1, 'abc@gmail.com', 'Good blod collections..', '2024-09-10 12:09:31', '2024-09-10 12:09:31'),
(2, 'djpadia@gmail.com', 'Good Blogs Site', '2024-10-07 07:44:17', '2024-10-07 07:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `post_category_id_foreign` (`category_id`),
  KEY `post_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `content`, `image`, `tags`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Navratri', 'Navaratri[a] is an annual Hindu festival observed in honor of the goddess Durga, an aspect of Adi Parashakti, the supreme goddess. For Shaivites and Shaktas, Durga is a form or actually is Goddess Parvati. It spans over nine nights (and ten days), first in the month of Chaitra (March/April of the Gregorian calendar),', '1728309288lion.jpg', '#navratri #garba #9day', 3, 1, '2024-10-07 08:24:48', '2024-10-07 08:24:48'),
(2, 'Girled Sandwich', 'I used to use whatever sandwich bread my parents bought, from Classic White Wonder Bread to Private Selection’s specialty breads, and Kraft Singles American Cheese. Now, my go-to is Wegmans Sourdough Sandwich Bread and any of their block cheeses—my favorite is pepper jack.\r\nHere’s what I do to make the perfect grilled cheese sandwich: \r\nAssemble the sandwich on a microwave-safe plate. Microwave it on high for 40 seconds to one minute, until you can see on the sides that the cheese is melted. The timing depends on the thickness of the bread and the power of the microwave; I’ve found 40 seconds is enough for standard sandwich bread. \r\nWhile the sandwich is in the microwave, heat a skillet—I prefer cast iron—on medium-high heat and add about haf a tablespoon of butter. \r\nFlip the microwaved sandwich onto the skillet once ready, with the plate-side facing up. This is important because steam will accumulate between the plate and the sandwich, and you want to release it so that the sandwich doesn’t get soggy. If you let the microwaved sandwich sit on the plate for long, it’ll get wet and sticky from the trapped steam. \r\nCook each side for one to two minutes, depending on how toasted you like it. Cut the sandwich (I’m team diagonal) and voila, the perfect grilled cheese sandwich!', '1728652103Grilled-Cheese.jpg', '#GirledSandwich #cheese #food', 1, 3, '2024-10-11 07:38:23', '2024-10-11 07:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `about_user`, `password`, `number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aadhya', 'a@gmail.com', 'Im student', '202cb962ac59075b964b07152d234b70', '7777777777', 1, '2024-10-07 08:19:11', '2024-10-07 08:19:11'),
(2, 'anamika', 'abc@gmail.com', 'student', '012424224c77e9b1d29b271aa4611a45', '8521478889', 1, '2024-10-08 04:52:08', '2024-10-08 04:52:08'),
(3, 'Jignasha', 'j@gmail.com', 'Winner', 'f1ae6c04a0efde2a797e673ddec9ad94', '9658741230', 1, '2024-10-08 04:53:27', '2024-10-08 04:53:27');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
