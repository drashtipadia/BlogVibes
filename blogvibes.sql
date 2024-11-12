-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 12, 2024 at 07:34 AM
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
(1, 'admin', 'admin123', '2024-11-05 18:30:00', '2024-11-09 07:42:45');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Festival', '2024-11-06 11:56:16', '2024-11-06 11:56:16'),
(2, 'Food', '2024-11-06 11:56:47', '2024-11-06 11:56:47'),
(3, 'IT', '2024-11-06 11:57:27', '2024-11-06 11:57:35'),
(4, 'News', '2024-11-08 23:56:56', '2024-11-08 23:56:56'),
(5, 'Travel', '2024-11-08 23:58:20', '2024-11-08 23:58:20'),
(6, 'DIY', '2024-11-08 23:58:39', '2024-11-08 23:58:39'),
(7, 'Sport', '2024-11-08 23:58:58', '2024-11-08 23:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `com_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `comment_post_id_foreign` (`post_id`),
  KEY `comment_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comments`, `post_id`, `user_id`, `com_status`, `created_at`, `updated_at`) VALUES
(1, 'Good', 1, 1, 1, '2024-11-06 12:13:08', '2024-11-08 11:34:56'),
(3, 'Diwali is lights of festival', 1, 4, 1, '2024-11-10 14:12:24', '2024-11-10 14:12:24'),
(4, 'May be test will be good', 2, 4, 1, '2024-11-10 14:14:08', '2024-11-10 14:22:31'),
(5, 'Diwali is my favourite festival.', 1, 3, 1, '2024-11-10 15:29:50', '2024-11-10 15:29:50'),
(6, 'Now Today Gold rate is high', 5, 5, 1, '2024-11-10 22:35:25', '2024-11-10 22:57:59');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_email`, `contact_message`, `created_at`, `updated_at`) VALUES
(1, 'parth@gmail.com', 'can Upload more than 1 picture in blog?', '2024-11-09 00:39:59', '2024-11-09 00:39:59'),
(2, 'jhon@gmail.com', 'How can hide Comment?', '2024-11-09 00:40:49', '2024-11-09 00:40:49'),
(3, 'mp@gmail.com', 'add lifestyle category', '2024-11-09 00:41:41', '2024-11-09 00:41:41'),
(4, 'an.98@gmail.com', 'How can add a blog', '2024-11-09 00:44:01', '2024-11-09 00:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `post_category_id_foreign` (`category_id`),
  KEY `post_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `content`, `image`, `tags`, `category_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Diwali', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolores earum ex aspernatur inventore quos, aperiam atque corrupti voluptate itaque reprehenderit sunt, eligendi tempora sequi vitae. Officiis iusto labore rerum!', '1730914082passage.jpg', '#diwali #deepawali #hindu #festival #lighting #Rangoli #firecreck', 1, 1, 1, '2024-11-06 11:58:02', '2024-11-08 23:15:33'),
(2, 'Banana Bread', 'Banana bread is one of those classic, all-American comfort food recipes that fills the whole house with warmth and makes everything better. Banana bread is magic.\r\nThis recipe is flexible! Any of the following flours will work well. I love to use white whole wheat flour and whole wheat pastry flour—they offer all the whole wheat nutrients, without the characteristically nutty flavor.\r\nAll-purpose flour\r\nGluten-free all-purpose flour blend\r\nOat flour\r\nSpelt flour\r\nWhole wheat flour\r\nWhole wheat pastry flour\r\nWhite whole wheat flour\r\nreheat oven to 325 degrees Fahrenheit (165 degrees Celsius) and grease a 9×5-inch loaf pan.\r\nIn a large bowl, beat the oil and honey together with a whisk. Add the eggs and beat well, then whisk in the mashed bananas and milk. (If your coconut oil solidifies on contact with cold ingredients, simply let the bowl rest in a warm place for a few minutes, like on top of your stove, or warm it for about 10 seconds in the microwave.)\r\nAdd the baking soda, vanilla, salt and cinnamon, and whisk to blend. Lastly, switch to a big spoon and stir in the flour, just until combined. Some lumps are ok! If you’re adding any additional mix-ins, gently fold them in now.\r\nPour the batter into your greased loaf pan and sprinkle lightly with cinnamon. If you’d like a pretty swirled effect, run the tip of a knife across the batter in a zig-zag pattern.\r\nBake for 55 to 60 minutes, or until a toothpick inserted into the center comes out clean (typically, if I haven’t added any mix-ins, my bread is done at 55 minutes; if I have added mix-ins, it needs closer to 60 minutes). Let the bread cool in the loaf pan for at least 10 minutes. You may need to run a butter knife around the edges to loosen the bread from the pan. Carefully transfer the loaf to a wire rack to cool before slicing.', '1731130520healthy-banana-bread.jpg', '#food #diet #banana #bread #bake #breadrecipe #bananabread #healthyfood', 2, 3, 1, '2024-11-09 00:05:20', '2024-11-09 00:05:20'),
(3, 'Holi at Braj Bhoomi', 'I got to witness the famous Lath Maar Holi at Nandgaon, Uttar Pradesh. The company of a bunch of awesomesauce people and brilliant photographers lifted my spirits to a whole new level, and I couldn’t stop going  over what I saw and experienced.\r\nThis year was a different story altogether. In spite of trying my level best to travel with this awesomesauce bunch (well, you got to when experiencing this place at this time of the year; it kinda makes you feel safe and secure), I couldn’t get myself to enrol on this colour extravaganza. A blogger friend of mine was coming to India and I just couldn’t miss being there for her on the very first day of India darshan. I showed her around a lot of places around Delhi, made her try some home-cooked chicken curry, paranthas, bread pakoras, gol-gappas and to top all of that, a nice bowl of authentic Rabri Kulfi. After having introduced her to the many flavours and colours of India, I decided to take off to Barsana with a few friends. I was in no mood to miss Holi this year at one of the most amazing places in India. So, here I was sitting in a car that zoomed off in full-swing towards the Radha Rani Temple in Barsana\r\nThe vibes and aura of the place this time was nothing compared to what I had experienced last year. Wait, there’s a reason to it! We were a day late to the place and the Lath Maar Holi was all played and done with. Great! What a waste of time!\r\nTo not let our spirits down, we took off to Vrindavan to experience the Ghat culture, the famous parikrama attended by thousands of devotees and the first day of darshan at the famous Banke Bihari Temple. To be honest, my experience at the temple was one of the worst I have ever had in my entire life. If you think it was because of the crowd, then you are somewhat right. There’s more to the story, though. An abundance of people intoxicated with god-knows-what pushed and stepped on people creating a stampede-like situation. Stop before you think that I am being a baby about all this. I have had my fair share of crowds living in a country like India. This was something else! I got pushed, groped and hit hard on the back while all I was trying to do was have a good time. All of this escalated to a point where I couldn’t breathe and thought I was going to die. Glad I had a friend along to help me out. It’s because of him and me constantly shouting that I couldn’t breathe, that we were given way out by some people.', '1731131224holi.jpg', '#holi #festival #barjholi #colors', 1, 3, 1, '2024-11-09 00:17:04', '2024-11-09 11:42:12'),
(4, 'GitHub Copilot learns new tricks', 'GitHub and Microsoft have taken their AI-powered programming assistant into new territories, tackling code reviews, simple web apps, Java upgrades, and Azure help and troubleshooting.\r\nThe role of GitHub as part of Microsoft’s developer division is much more than providing Microsoft and its customers with a mix of cloud-hosted and on-premises source code version control. First GitHub branched out into offering a CI/CD platform with a build and test runner in the shape of GitHub Actions. Then it added tools to help reduce the risk of common bugs and to automate patching known security holes by managing dependencies.\r\nThese features have all built on its role as the place where we store code, using that as a lever to help developers build all types of projects, from hobbyist hacks to scientific computing. GitHub has billions of lines of code that make up the largest software projects. All that code, much of it with permissive licenses, gives GitHub unprecedented insight into developer trends, which it wraps up in its annual Octoverse report on the programming languages and development tools we’re using.\r\n\r\nThat massive code base has allowed GitHub to build a set of AI-powered programming assistants, drawing on the collective experience of millions of developers to provide a set of Copilots that plug into familiar developer tools. I think of them as “AI pair programmers,” not so much writing code for you (though you can use them that way if you want) as offering a pool of collective knowledge to hint at alternate ways of doing things, helping solve problems and get around blockages.\r\nGitHub Universe 2024, held last week in San Francisco, saw GitHub expand its roster of Copilots, adding new AI-powered tools and services, as well as new options for its existing platform. These go beyond the semantic space explored by the original GitHub Copilot to provide AI agent-based services to help with migration tasks.', '1731131897githubcopilot.jpg', '#IT #Github #git #ai #gitlearn #GitAI #Copilot', 3, 3, 1, '2024-11-09 00:28:17', '2024-11-09 00:28:17'),
(5, 'Gold Price Today', 'Gold has been a great way to protect against inflation over the years. Gold is becoming more and more important to investors as an investment. Goodreturns (OneIndia Money) is giving you this information about the price of gold in India so that you can learn more about it. These gold prices are current as of today and come from well-known jewellers in the country.\r\nIf you want to invest in gold or buy gold jewellery for yourself. Find out the most recent prices for 24 karats and 22 karat gold in India and compare them so you can make a smart choice. In India, 10 grammes of 24-carat gold cost 52,785 rupees, while 10 grammes of 22-carat gold costs 47,750 rupees.\r\nAs on Nov 08, 2024 	1 gram	8 grams	10 grams	100 grams\r\n24 Carat Gold          	₹7,629	₹61,032	₹76,290	₹7,62,900\r\n24 Carat Gold  	        ₹7,676	₹61,408	₹76,760	₹7,67,600\r\n22 Carat Gold	                ₹7,205	₹57,640	₹72,050	₹7,20,500', '1731132363gold price.jpg', '#gold #goldprice #news #24carat', 4, 3, 1, '2024-11-09 00:36:03', '2024-11-09 05:00:10');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `about_user`, `password`, `number`, `created_at`, `updated_at`) VALUES
(1, 'Drashti', 'd@gmail.com', 'I\'m Pursuing Master Degree', '202cb962ac59075b964b07152d234b70', '9658741230', '2024-11-06 11:54:02', '2024-11-06 11:54:02'),
(2, 'Anamika', 'a@gmail.com', 'fnejksn vjkrf rfnfjke', '202cb962ac59075b964b07152d234b70', '9638527410', '2024-11-07 05:14:18', '2024-11-07 05:14:18'),
(3, 'Jay Padia', 'jay@gmail.com', 'Im science Student', 'f0e7d0d17cff891edbc9cdf92dcd9297', '9874652310', '2024-11-08 23:54:04', '2024-11-08 23:54:04'),
(4, 'Parth', 'parth@gmail.com', 'My Hobby is read book', '6db012f325716c8c81d88f23dc0d3302', '9658741111', '2024-11-09 00:39:09', '2024-11-10 16:36:36'),
(5, 'suketu', 'suketu91@gmail.com', 'Im business man', '7004a2011cb97c05477242d04d308ba3', '5869471230', '2024-11-09 00:49:50', '2024-11-09 00:49:50'),
(6, 'Aadhaya', 'aadhu@gmail.com', 'vbher vnirejn', '00c9b9ce0a8d8a26b3764cefab8f3e2f', '5847963214', '2024-11-09 00:51:26', '2024-11-09 00:51:26');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
