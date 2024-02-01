-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 06:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_captions`
--

CREATE TABLE IF NOT EXISTS `blog_captions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_captions`
--

INSERT INTO `blog_captions` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Creative Blog Post', 'Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.', NULL, '2024-01-27 06:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Web Design', 'web-design', 1, '2024-01-27 22:43:20', NULL),
(4, 'Web Development', 'web-development', 1, '2024-01-27 22:43:40', NULL),
(5, 'Graphics Design', 'graphics-design', 1, '2024-01-27 22:43:51', NULL),
(6, 'Wordpress Customization', 'wordpress-customization', 1, '2024-01-27 22:44:08', NULL),
(7, 'Wordpress Development', 'wordpress-development', 1, '2024-01-27 22:44:21', NULL),
(8, 'Laravel Cms', 'laravel-cms', 1, '2024-01-27 22:44:32', NULL),
(9, 'Database', 'database', 1, '2024-01-27 22:44:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_items`
--

CREATE TABLE IF NOT EXISTS `blog_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `view` varchar(255) NOT NULL DEFAULT '0',
  `tags` mediumtext DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_items`
--

INSERT INTO `blog_items` (`id`, `user_id`, `category_id`, `title`, `slug`, `view`, `tags`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 3, 'Great things never come from.', 'great-things-never-come-from.', '2', 'web,design,ui/ux', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>\r\n<blockquote style=\"box-sizing: border-box; outline: none; margin: 30px 0px; padding: 50px; border-left-width: 10px; border-left-color: #ff885e; background-color: #f3f7ff; font-size: 18px; line-height: 28px; color: #282828; font-weight: 600; border-radius: 10px; font-family: \'Open Sans\', sans-serif;\">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.</blockquote>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 635.035px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 635.035px;\" src=\"../../frontend/images/gallery-3.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 635.035px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 635.035px;\" src=\"../../frontend/images/gallery-4.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>', 'upload/Blog/1789311756624652.jpg', 1, '2024-01-27 23:44:26', '2024-01-31 01:35:18'),
(3, 2, 4, 'Don’t stop when you’re tired. Stop when.', 'don’t-stop-when-you’re-tired.-stop-when.', '7', 'web,development', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>\r\n<blockquote style=\"box-sizing: border-box; outline: none; margin: 30px 0px; padding: 50px; border-left-width: 10px; border-left-color: #ff885e; background-color: #f3f7ff; font-size: 18px; line-height: 28px; color: #282828; font-weight: 600; border-radius: 10px; font-family: \'Open Sans\', sans-serif;\">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.</blockquote>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 635.035px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 635.035px;\" src=\"../../frontend/images/gallery-3.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 635.035px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 635.035px;\" src=\"../../frontend/images/gallery-4.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>', 'upload/Blog/1789312670697175.jpg', 1, '2024-01-27 23:58:58', '2024-01-31 04:40:06'),
(4, 2, 5, 'Success doesn’t just find you.', 'success-doesn’t-just-find-you.', '9', 'desig,grphics', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>\r\n<blockquote style=\"box-sizing: border-box; outline: none; margin: 30px 0px; padding: 50px; border-left-width: 10px; border-left-color: #ff885e; background-color: #f3f7ff; font-size: 18px; line-height: 28px; color: #282828; font-weight: 600; border-radius: 10px; font-family: \'Open Sans\', sans-serif;\">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.</blockquote>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 635.035px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 635.035px;\" src=\"../../frontend/images/gallery-3.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 635.035px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 635.035px;\" src=\"../../frontend/images/gallery-4.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>', 'upload/Blog/1789312774112600.jpg', 1, '2024-01-28 00:00:36', '2024-01-31 04:44:11'),
(5, 2, 6, 'Sometimes later becomes never.', 'sometimes-later-becomes-never.', '8', 'never,wordpress', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>\r\n<blockquote style=\"box-sizing: border-box; outline: none; margin: 30px 0px; padding: 50px; border-left-width: 10px; border-left-color: #ff885e; background-color: #f3f7ff; font-size: 18px; line-height: 28px; color: #282828; font-weight: 600; border-radius: 10px; font-family: \'Open Sans\', sans-serif;\">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.</blockquote>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 635.035px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 635.035px;\" src=\"../../frontend/images/gallery-3.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 635.035px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 635.035px;\" src=\"../../frontend/images/gallery-4.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>', 'upload/Blog/1789312826710851.jpg', 1, '2024-01-28 00:01:27', '2024-01-31 00:36:29'),
(6, 2, 7, 'Don’t wait for opportunity. Create', 'don’t-wait-for-opportunity.-create', '14', 'wordpress,development', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>\r\n<blockquote style=\"box-sizing: border-box; outline: none; margin: 30px 0px; padding: 50px; border-left-width: 10px; border-left-color: #ff885e; background-color: #f3f7ff; font-size: 18px; line-height: 28px; color: #282828; font-weight: 600; border-radius: 10px; font-family: \'Open Sans\', sans-serif;\">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took.</blockquote>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 635.035px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 635.035px;\" src=\"../../frontend/images/gallery-3.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 635.035px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 635.035px;\" src=\"../../frontend/images/gallery-4.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>', 'upload/Blog/1789312931780197.jpg', 1, '2024-01-28 00:02:51', '2024-01-31 00:37:08'),
(7, 3, 5, 'Possimus voluptatem', 'possimus-voluptatem', '5', 'Delectus nulla volu', '<p>http://localhost:8000/</p>', 'upload/Blog/1789600824715015.jpg', 1, '2024-01-31 04:19:03', '2024-01-31 04:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `client_captions`
--

CREATE TABLE IF NOT EXISTS `client_captions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_captions`
--

INSERT INTO `client_captions` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Our client Feedback', 'Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.', NULL, '2024-01-27 06:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `client_items`
--

CREATE TABLE IF NOT EXISTS `client_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_items`
--

INSERT INTO `client_items` (`id`, `icon`, `name`, `role`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(3, NULL, 'Barrera Ramsey', 'Managing Director, DevignEdge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequuntur\r\n										provident iusto cumque nulla laboriosam quos ipsam enim eum! Itaque ipsum nam\r\n										ratione eius porro excepturi.', 1, '2024-01-27 06:12:33', NULL),
(4, NULL, 'Alexa Cunningham', 'Reiciendis at quaera', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequuntur\r\n										provident iusto cumque nulla laboriosam quos ipsam enim eum! Itaque ipsum nam\r\n										ratione eius porro excepturi.', 1, '2024-01-27 06:13:25', NULL),
(5, NULL, 'Wayne Mullen', 'Velit architecto lab', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequuntur\r\n										provident iusto cumque nulla laboriosam quos ipsam enim eum! Itaque ipsum nam\r\n										ratione eius porro excepturi.', 1, '2024-01-27 06:13:34', '2024-01-27 06:13:55'),
(6, NULL, 'Quin Mason', 'Praesentium rerum cu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequuntur\r\n										provident iusto cumque nulla laboriosam quos ipsam enim eum! Itaque ipsum nam\r\n										ratione eius porro excepturi.', 1, '2024-01-27 06:13:46', NULL),
(7, NULL, 'Rama Mccall', 'Et magnam et volupta', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequuntur\r\n										provident iusto cumque nulla laboriosam quos ipsam enim eum! Itaque ipsum nam\r\n										ratione eius porro excepturi.', 1, '2024-01-27 06:14:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_captions`
--

CREATE TABLE IF NOT EXISTS `contact_captions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_captions`
--

INSERT INTO `contact_captions` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Lets Work Together', 'Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.', NULL, '2024-01-29 21:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Cherokee Lawrence', 'carotovap@mailinator.com', 'Quidem cillum ut sae', 'A dolorum omnis ab e', '2024-01-29 21:40:27', '2024-01-29 21:40:27'),
(2, 'Yasir Barker', 'taxot@mailinator.com', 'In dolore accusamus', 'Ex laborum Voluptas', '2024-01-29 21:41:42', '2024-01-29 21:41:42'),
(3, 'Bell Hewitt', 'gavu@mailinator.com', 'Maxime explicabo No', 'Eius enim maxime eni', '2024-01-29 21:50:57', '2024-01-29 21:50:57'),
(4, 'Florence Johns', 'suwen@mailinator.com', 'Libero sint quam odi', 'Qui ea voluptates do', '2024-01-29 21:52:54', '2024-01-29 21:52:54'),
(5, 'Florence Johns', 'suwen@mailinator.com', 'Libero sint quam odi', 'Qui ea voluptates do', '2024-01-29 21:54:20', '2024-01-29 21:54:20'),
(6, 'Jerome Schneider', 'jimadomo@mailinator.com', 'Consequuntur eum in', 'Alias a quae et elig', '2024-01-29 21:57:38', '2024-01-29 21:57:38'),
(7, 'Jerome Schneider', 'jimadomo@mailinator.com', 'Consequuntur eum in', 'Alias a quae et elig', '2024-01-29 21:59:49', '2024-01-29 21:59:49'),
(8, 'Jerome Schneider', 'jimadomo@mailinator.com', 'Consequuntur eum in', 'Alias a quae et elig', '2024-01-29 22:00:39', '2024-01-29 22:00:39'),
(9, 'Jerome Schneider', 'jimadomo@mailinator.com', 'Consequuntur eum in', 'Alias a quae et elig', '2024-01-29 22:04:07', '2024-01-29 22:04:07'),
(10, 'Mehedi', 'admin@gmail.com', 'test mail data', 'testing purpose', '2024-01-29 22:16:47', '2024-01-29 22:16:47'),
(11, 'Lewis Becker', 'dizo@mailinator.com', 'Facere aliqua Volup', 'Vel est aliqua Volu', '2024-01-29 22:18:23', '2024-01-29 22:18:23'),
(12, 'Lewis Becker', 'dizo@mailinator.com', 'Facere aliqua Volup', 'Vel est aliqua Volu', '2024-01-29 22:23:32', '2024-01-29 22:23:32'),
(13, 'Rebekah Eaton', 'kogihefum@mailinator.com', 'Exercitation sit si', 'Culpa eum enim offic', '2024-01-29 22:27:31', '2024-01-29 22:27:31'),
(14, 'Stuart Dunlap', 'fuwyqa@mailinator.com', 'Minim sapiente solut', 'Sit ratione nisi qua', '2024-01-29 22:28:56', '2024-01-29 22:28:56'),
(16, 'Chase Cabrera', 'kisicicoto@mailinator.com', 'Qui similique volupt', 'Maxime aut deserunt', '2024-01-29 23:04:22', '2024-01-29 23:04:22'),
(18, 'Katelyn Robbins', 'ceraq@mailinator.com', 'Id ipsum ut consequ', 'Quis enim provident', '2024-01-31 23:04:42', '2024-01-31 23:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone_icon` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email_icon` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `details`, `image`, `phone_icon`, `phone_number`, `email_icon`, `email_address`, `created_at`, `updated_at`) VALUES
(1, '5 Years Experiences on Design & Development.', 'Lorem ipsum dolor sit amet consectetur. voluptate dignissimos recusandae omnis delectus quas incidunt inventore placeat ea illo totam consequuntur odio.\r\n</br></br>\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quo fugit officia itaque soluta minus officiis, atque, debitis ipsa ipsum, adipisci delectus eaque cum laudantium incidunt ex hic laboriosam similique rerum.', 'upload/Experience/1789241852358681.gif', 'fas fa-mobile-android-alt', '+8801306110366', 'fas fa-envelope', 'mjjibon114@gmail.com', NULL, '2024-01-27 05:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `left_title` mediumtext DEFAULT NULL,
  `right_title` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `left_title`, `right_title`, `created_at`, `updated_at`) VALUES
(1, 'Copyright 2023 <span>Mehedi</span>. All Rights Reserved.', 'Powered by Jibonbd.xyz&nbsp; | &nbsp; 2023 - 2024', NULL, '2024-01-30 04:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `footer_tops`
--

CREATE TABLE IF NOT EXISTS `footer_tops` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `short_details` mediumtext DEFAULT NULL,
  `facebook_icon` varchar(255) DEFAULT NULL,
  `facebook_link` mediumtext DEFAULT NULL,
  `instagram_icon` varchar(255) DEFAULT NULL,
  `instagram_link` mediumtext DEFAULT NULL,
  `twitter_icon` varchar(255) DEFAULT NULL,
  `twitter_link` mediumtext DEFAULT NULL,
  `behance_icon` varchar(255) DEFAULT NULL,
  `behance_link` mediumtext DEFAULT NULL,
  `userful_title` varchar(255) DEFAULT NULL,
  `portfolio_title` varchar(255) DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `contact_info_title` varchar(255) DEFAULT NULL,
  `contact_info_address` varchar(255) DEFAULT NULL,
  `contact_info_number` varchar(255) DEFAULT NULL,
  `contact_info_email` varchar(255) DEFAULT NULL,
  `helop_info_title` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `register` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_tops`
--

INSERT INTO `footer_tops` (`id`, `logo`, `short_details`, `facebook_icon`, `facebook_link`, `instagram_icon`, `instagram_link`, `twitter_icon`, `twitter_link`, `behance_icon`, `behance_link`, `userful_title`, `portfolio_title`, `blog_title`, `contact_info_title`, `contact_info_address`, `contact_info_number`, `contact_info_email`, `helop_info_title`, `login`, `register`, `created_at`, `updated_at`) VALUES
(1, 'upload/FooterTop/1789506676821551.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, libero.', 'fab fa-facebook-f', NULL, 'fab fa-linkedin-in', 'fsa', 'fab fa-twitter', 'fsa', 'fab fa-behance', 'fsa', 'Useful Link', 'Portfolio', 'Blog', 'Contact Info', 'Rangpur,Paglapir,Bangladesh', '+880187359339', 'mjjibon114@gmail.com', 'Help', 'Login', 'Rgister Account', NULL, '2024-01-30 04:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE IF NOT EXISTS `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `home_page_title` varchar(255) DEFAULT NULL,
  `all_blog_page_title` varchar(255) DEFAULT NULL,
  `all_portfolio_page_title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `logo`, `favicon`, `home_page_title`, `all_blog_page_title`, `all_portfolio_page_title`, `created_at`, `updated_at`) VALUES
(1, 'upload/Logo/1789516945672125.png', 'upload/Logo/1789517007201109.png', 'Mehedi| Personal Portfolio Template', 'Mehedi Portfolio | All Blog', 'Mehedi Portfolio | All Portfolio', NULL, '2024-01-31 01:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE IF NOT EXISTS `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `btn_text` mediumtext DEFAULT NULL,
  `image` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `user_id`, `title`, `details`, `btn_text`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Hi, I am <span class=\"text-theme\">Mehedi</span>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque at, aperiam corrupti earum quasi, porro voluptatem commodi eos laboriosam nam quis nostrum, molestiae nesciunt dolore.', 'Hire Me', 'upload/Home/1788983962559297.jpg', NULL, '2024-01-24 08:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `home_abouts`
--

CREATE TABLE IF NOT EXISTS `home_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `leading` mediumtext DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `cv_file` mediumtext DEFAULT NULL,
  `image` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_abouts`
--

INSERT INTO `home_abouts` (`id`, `user_id`, `heading`, `leading`, `details`, `cv_file`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'About Me', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos repellendus sapiente, quae et eos dolorum.', 'Consectetur adipisicing elit. Laborum, magni libero similique, laboriosam, delectus reiciendis minima minus dolorem sit fuga rerum atque vel quaerat ipsum perspiciatis neque maxime recusandae fugit\r\n</br>\r\n</br>\r\nIpsum dolor sit amet, consectetur adipisicing elit. Laborum, magni libero similique, laboriosam, delectus reiciendis minima minus dolorem sit fuga rerum atque vel quaerat ipsum perspiciatis neque maxime recusandae fugit.', 'upload/About/1789123288433474.docx', 'upload/About/1789124967767238.jpg', '2024-01-01 03:15:06', '2024-01-25 22:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_24_042354_create_typeds_table', 2),
(6, '2024_01_24_140643_create_heroes_table', 3),
(7, '2024_01_24_145836_create_services_table', 4),
(8, '2024_01_26_030206_create_home_abouts_table', 5),
(9, '2024_01_26_044010_create_portfolio_captions_table', 6),
(10, '2024_01_26_050604_create_portfolio_categories_table', 7),
(13, '2024_01_26_054151_create_portfolio_items_table', 8),
(14, '2024_01_27_041252_create_skill_captions_table', 9),
(15, '2024_01_27_060017_create_skillitems_table', 10),
(16, '2024_01_27_103807_create_experiences_table', 11),
(20, '2024_01_27_112315_create_client_captions_table', 12),
(21, '2024_01_27_113354_create_client_items_table', 12),
(22, '2024_01_27_121912_create_blog_captions_table', 13),
(24, '2024_01_28_041438_create_blog_categories_table', 14),
(25, '2024_01_28_040931_create_blog_items_table', 15),
(26, '2024_01_30_030038_create_contact_captions_table', 16),
(27, '2024_01_30_032509_create_contact_messages_table', 17),
(28, '2024_01_30_051202_create_footer_tops_table', 18),
(29, '2024_01_30_103917_create_footers_table', 19),
(32, '2024_01_30_110245_create_general_settings_table', 20),
(33, '2024_01_30_110252_create_seo_settings_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_captions`
--

CREATE TABLE IF NOT EXISTS `portfolio_captions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_captions`
--

INSERT INTO `portfolio_captions` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Latest Portfolio', '<strong>Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.\r\n\r\n                                </strong>', NULL, '2024-01-25 23:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE IF NOT EXISTS `portfolio_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `user_id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(4, 2, 'Branding Design', 1, '2024-01-25 23:39:53', NULL),
(5, 2, 'User Interface', 1, '2024-01-25 23:40:05', NULL),
(6, 2, 'User Experience', 1, '2024-01-25 23:40:14', NULL),
(7, 2, 'Web Development', 1, '2024-01-25 23:40:24', '2024-01-26 00:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_items`
--

CREATE TABLE IF NOT EXISTS `portfolio_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `port_cat_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `image` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_items`
--

INSERT INTO `portfolio_items` (`id`, `user_id`, `port_cat_id`, `title`, `slug`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'Black Golden', 'black-golden', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.</p>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-1.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-2.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<h3 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 1.75rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">Process Story</h3>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis, voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>\r\n<ul class=\"dots-list\" style=\"box-sizing: border-box; outline: none; padding: 10px 0px 0px; margin: 0px 0px 30px; list-style: none; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">First refinement become it over a may an that harmonic every away.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Clarinet she or here, separated hides. With work a and so pay different chooses answer.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Never analyzed the of boss\'s films death, heaven cache name any judgment, all.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta .</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla, consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod. Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti .</p>', 'upload/Portfolio/1789212105533623.jpg', 1, '2024-01-26 21:20:31', NULL),
(2, 2, 4, 'Ines Campbell', 'ines-campbell', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.</p>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-1.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-2.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<h3 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 1.75rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">Process Story</h3>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis, voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>\r\n<ul class=\"dots-list\" style=\"box-sizing: border-box; outline: none; padding: 10px 0px 0px; margin: 0px 0px 30px; list-style: none; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">First refinement become it over a may an that harmonic every away.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Clarinet she or here, separated hides. With work a and so pay different chooses answer.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Never analyzed the of boss\'s films death, heaven cache name any judgment, all.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta .</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla, consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod. Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti .</p>', 'upload/Portfolio/1789212263256509.jpg', 1, '2024-01-26 21:23:02', NULL),
(3, 2, 4, 'Guerrero Woodard', 'guerrero-woodard', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.</p>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-1.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-2.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<h3 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 1.75rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">Process Story</h3>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis, voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>\r\n<ul class=\"dots-list\" style=\"box-sizing: border-box; outline: none; padding: 10px 0px 0px; margin: 0px 0px 30px; list-style: none; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">First refinement become it over a may an that harmonic every away.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Clarinet she or here, separated hides. With work a and so pay different chooses answer.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Never analyzed the of boss\'s films death, heaven cache name any judgment, all.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta .</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla, consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod. Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti .</p>', 'upload/Portfolio/1789212306218051.jpg', 1, '2024-01-26 21:23:43', NULL),
(4, 2, 5, 'Fitzgerald Stanton', 'fitzgerald-stanton', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.</p>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-1.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-2.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<h3 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 1.75rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">Process Story</h3>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis, voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>\r\n<ul class=\"dots-list\" style=\"box-sizing: border-box; outline: none; padding: 10px 0px 0px; margin: 0px 0px 30px; list-style: none; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">First refinement become it over a may an that harmonic every away.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Clarinet she or here, separated hides. With work a and so pay different chooses answer.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Never analyzed the of boss\'s films death, heaven cache name any judgment, all.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta .</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla, consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod. Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti .</p>', 'upload/Portfolio/1789212397680576.jpg', 1, '2024-01-26 21:25:10', NULL),
(5, 2, 5, 'Wendi Michael', 'wendi-michael', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.</p>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-1.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-2.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<h3 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 1.75rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">Process Story</h3>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis, voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>\r\n<ul class=\"dots-list\" style=\"box-sizing: border-box; outline: none; padding: 10px 0px 0px; margin: 0px 0px 30px; list-style: none; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">First refinement become it over a may an that harmonic every away.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Clarinet she or here, separated hides. With work a and so pay different chooses answer.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Never analyzed the of boss\'s films death, heaven cache name any judgment, all.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta .</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla, consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod. Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti .</p>', 'upload/Portfolio/1789212436442991.jpg', 1, '2024-01-26 21:25:47', NULL),
(6, 2, 5, 'Prince Phelps', 'prince-phelps', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.</p>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-1.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-2.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<h3 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 1.75rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">Process Story</h3>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis, voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>\r\n<ul class=\"dots-list\" style=\"box-sizing: border-box; outline: none; padding: 10px 0px 0px; margin: 0px 0px 30px; list-style: none; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">First refinement become it over a may an that harmonic every away.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Clarinet she or here, separated hides. With work a and so pay different chooses answer.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Never analyzed the of boss\'s films death, heaven cache name any judgment, all.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta .</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla, consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod. Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti .</p>', 'upload/Portfolio/1789212489179156.jpg', 1, '2024-01-26 21:26:37', NULL),
(7, 2, 6, 'Janice Wilder', 'janice-wilder', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.</p>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-1.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-2.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<h3 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 1.75rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">Process Story</h3>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis, voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>\r\n<ul class=\"dots-list\" style=\"box-sizing: border-box; outline: none; padding: 10px 0px 0px; margin: 0px 0px 30px; list-style: none; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">First refinement become it over a may an that harmonic every away.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Clarinet she or here, separated hides. With work a and so pay different chooses answer.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Never analyzed the of boss\'s films death, heaven cache name any judgment, all.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta .</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla, consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod. Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti .</p>', 'upload/Portfolio/1789212863606702.jpg', 1, '2024-01-26 21:27:28', '2024-01-26 21:32:34'),
(8, 2, 6, 'Guerrero Woodard', 'guerrero-woodard', 'That and normal and we\'ve class. Explain attained.\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.\r\n\r\n\r\n\r\nProcess Story\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis, voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.\r\n\r\nFirst refinement become it over a may an that harmonic every away.\r\nClarinet she or here, separated hides. With work a and so pay different chooses answer.\r\nNever analyzed the of boss\'s films death, heaven cache name any judgment, all.\r\nHic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta .\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla, consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod. Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti .', 'upload/Portfolio/1789212582287720.jpg', 1, '2024-01-26 21:28:06', '2024-01-26 21:29:00'),
(10, 2, 7, 'Guerrero Woodard', 'guerrero-woodard', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.</p>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-1.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-2.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<h3 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 1.75rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">Process Story</h3>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis, voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>\r\n<ul class=\"dots-list\" style=\"box-sizing: border-box; outline: none; padding: 10px 0px 0px; margin: 0px 0px 30px; list-style: none; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">First refinement become it over a may an that harmonic every away.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Clarinet she or here, separated hides. With work a and so pay different chooses answer.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Never analyzed the of boss\'s films death, heaven cache name any judgment, all.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta .</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla, consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod. Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti .</p>', 'upload/Portfolio/1789212760337592.jpg', 1, '2024-01-26 21:30:56', NULL),
(11, 2, 7, 'Gayle Gaines', 'gayle-gaines', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.</p>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-1.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-2.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<h3 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 1.75rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">Process Story</h3>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis, voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>\r\n<ul class=\"dots-list\" style=\"box-sizing: border-box; outline: none; padding: 10px 0px 0px; margin: 0px 0px 30px; list-style: none; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">First refinement become it over a may an that harmonic every away.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Clarinet she or here, separated hides. With work a and so pay different chooses answer.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Never analyzed the of boss\'s films death, heaven cache name any judgment, all.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta .</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla, consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod. Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti .</p>', 'upload/Portfolio/1789212802165742.jpg', 1, '2024-01-26 21:31:36', NULL);
INSERT INTO `portfolio_items` (`id`, `user_id`, `port_cat_id`, `title`, `slug`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(12, 2, 7, 'Branding Design', 'branding-design', '<h2 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 2rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">That and normal and we\'ve class. Explain attained.</h2>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem porro ex repellat nobis maxime odio et, dolore fuga excepturi culpa, officiis voluptate aspernatur similique officia nihil exercitationem qui corporis iste assumenda eum quaerat? Porro amet repellat molestias eos iusto suscipit quos ex beatae aut voluptate deserunt dicta esse ullam ipsa nihil minima odio vitae, architecto totam, praesentium impedit excepturi ipsam.</p>\r\n<ul class=\"gallery\" style=\"box-sizing: border-box; outline: none; padding: 0px; margin: 30px 0px 0px; list-style: none; display: flex; justify-content: space-between; flex-wrap: wrap; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-1.jpg\" alt=\"\" /></li>\r\n<li style=\"box-sizing: border-box; outline: none; margin-bottom: 30px; width: 546.847px; border-radius: 10px; overflow: hidden;\"><img class=\"img-fluid w-100\" style=\"box-sizing: border-box; outline: none; vertical-align: middle; max-width: 100%; height: auto; border: 0px; width: 546.847px;\" src=\"file:///C:/Users/MEHEDI%20HASSAN%20JIBON/Desktop/theme/frontend/images/gallery-2.jpg\" alt=\"\" /></li>\r\n</ul>\r\n<h3 style=\"box-sizing: border-box; outline: none; margin: 0px 0px 15px; line-height: 1.2em; font-size: 1.75rem; font-family: Poppins, sans-serif; color: #190844; background-color: #ffffff;\">Process Story</h3>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta et veniam omnis, voluptatem qui dolorem nulla provident totam saepe, odit quibusdam dignissimos tempora autem ut illo obcaecati ducimus sint repudiandae! Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta enim at reiciendis?.</p>\r\n<ul class=\"dots-list\" style=\"box-sizing: border-box; outline: none; padding: 10px 0px 0px; margin: 0px 0px 30px; list-style: none; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">First refinement become it over a may an that harmonic every away.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Clarinet she or here, separated hides. With work a and so pay different chooses answer.</li>\r\n<li style=\"box-sizing: border-box; outline: none; margin: 10px 0px;\">Never analyzed the of boss\'s films death, heaven cache name any judgment, all.</li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 1rem; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Hic eos nam aperiam fugit? Perspiciatis explicabo ab harum. Sed ducimus veniam voluptatibus qui ea, atque sint eum quae molestiae quod officiis, at enim ab necessitatibus laborum! Dolores necessitatibus a earum perspiciatis ut consectetur corrupti omnis cum fugit, explicabo dolorem similique deleniti inventore natus! Quaerat sit soluta .</p>\r\n<p style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0px; color: #282828; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #ffffff;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo animi libero suscipit praesentium perferendis possimus, ex dicta eius ea soluta sunt. Sapiente nulla, consequuntur ipsam saepe ad numquam blanditiis fugiat animi. Harum fugit incidunt nostrum eligendi doloremque vero possimus illum consequuntur quae sint officia repudiandae porro maxime cupiditate dolor magnam totam sit natus id neque quod. Molestias illo repudiandae laudantium illum perspiciatis nisi quasi amet corrupti .</p>', 'upload/Portfolio/1789212849585715.jpg', 1, '2024-01-26 21:32:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE IF NOT EXISTS `seo_settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `author_name` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `meta_descriptions` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `author_name`, `meta_title`, `meta_keyword`, `meta_descriptions`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi Hasan Jibon', 'Mehedi personal portfolio webiste template by laravel cms', 'mehedi portfolio,portfolio,bangladesh developer', '1. Discover a diverse collection of my creative work and achievements showcased in my portfolio website.\r\n2. Explore my portfolio website to witness a captivating display of my professional accomplishments and creative endeavors.\r\n3. Immerse yourself in the world of my portfolio website, where my talents and achievements are elegantly showcased for your perusal.', NULL, '2024-01-31 00:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `title`, `details`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'Branding Design', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.', 1, '2024-01-24 09:19:10', '2024-01-24 09:39:21'),
(4, 2, 'User Interface', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.', 1, '2024-01-24 09:31:04', '2024-01-24 09:39:35'),
(5, 2, 'User Experience', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.', 1, '2024-01-24 09:33:40', '2024-01-24 09:39:40'),
(6, 2, 'Non optio qui paria', 'Et dolore adipisicin', 0, '2024-01-24 09:39:56', '2024-01-31 20:50:34'),
(7, 2, 'Similique ratione so', 'Explicabo Dolorem q', 0, '2024-01-24 09:43:08', '2024-01-24 09:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `skillitems`
--

CREATE TABLE IF NOT EXISTS `skillitems` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skillitems`
--

INSERT INTO `skillitems` (`id`, `user_id`, `title`, `percent`, `color`, `status`, `created_at`, `updated_at`) VALUES
(4, 2, 'Web Design', 95, '#558bff', 1, '2024-01-27 04:19:52', NULL),
(5, 2, 'Graphic Design', 85, '#fecc90', 1, '2024-01-27 04:21:55', NULL),
(6, 2, 'Web Developement', 70, '#ff885e', 1, '2024-01-27 04:22:39', NULL),
(7, 2, 'Application Development', 90, '#282828', 1, '2024-01-27 04:23:16', NULL),
(8, 2, 'Analytical Abilities', 80, '#190844', 1, '2024-01-27 04:24:05', NULL),
(9, 2, 'Problem Solbing', 65, '#9dd3ff', 1, '2024-01-27 04:24:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skill_captions`
--

CREATE TABLE IF NOT EXISTS `skill_captions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_captions`
--

INSERT INTO `skill_captions` (`id`, `title`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Skills', 'Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.', 'upload/Skill/1789221597283321.gif', NULL, '2024-01-26 23:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `typeds`
--

CREATE TABLE IF NOT EXISTS `typeds` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `type_text` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `typeds`
--

INSERT INTO `typeds` (`id`, `user_id`, `type_text`, `status`, `created_at`, `updated_at`) VALUES
(5, 2, 'I can create awesome stuff.', 1, '2024-01-24 01:01:33', '2024-01-24 08:05:20'),
(6, 2, 'I\'m ui/ux designer.', 1, '2024-01-24 01:01:42', '2024-01-24 08:05:25'),
(7, 2, 'Let\'s work together.', 1, '2024-01-24 01:01:49', '2024-01-24 08:05:29'),
(8, 2, 'Web Designer', 1, '2024-01-24 08:03:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `short_descriptions` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `facebook` mediumtext DEFAULT NULL,
  `twitter` mediumtext DEFAULT NULL,
  `instagram` mediumtext DEFAULT NULL,
  `role` enum('superadmin','admin','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `username`, `short_descriptions`, `image`, `facebook`, `twitter`, `instagram`, `role`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi', 'mjjibon115@gmail.com', '01873593399', 'mehedibd360', NULL, NULL, NULL, NULL, NULL, 'superadmin', 'active', NULL, '$2y$12$epNZnIqNR2YqA9rC30.3xulV5eDBtQJMQNo4Vx8Ldx/FQOyxOQuai', 'oaxOYxCRQ49kEnzO32HCZjhb2kxvhIdKcovzWmHEcu4anFp5nv8ONlE5d2OY', '2024-01-22 23:54:57', NULL),
(2, 'jibon', 'mjjibon114@gmail.com', '01306110366', 'jibonbd360', 'Hi My Name I s Mehedi Hassan Jibon', 'upload/Admin/1788883509785349.jpg', 'https://www.facebook.com/profile.php?id=100095246880254', 'https://twitter.com/', 'https://www.instagram.com/', 'admin', 'active', NULL, '$2y$12$EB0I7NNDIeMv0DsqDv7VmO/VQI.mqP/.stc2IZP.yaos8E7R4evLW', 'xpimW9ET6gtA8z4wixBNyOIONOYEobf33Hv1WTle2Ed7GbwTqOIda9lX42Oq', '2024-01-22 23:54:57', '2024-01-23 09:25:48'),
(3, 'Asif', 'asif114@gmail.com', '01806110366', 'asifbd360', NULL, NULL, NULL, NULL, NULL, 'admin', 'active', NULL, '$2y$12$c2qYnvNf7pIMx9/RoCYDNOpyDKgcuS9reS27CzNMRp1xUlj3/nuCa', '0WDNoaY05gOr0v50rtome7WqICrdJhnTn3uHn78Jf8x8Ow6movvfUGrsXWYQ', '2024-01-22 23:54:57', '2024-01-23 07:09:24'),
(4, 'Myrtis Tromp', 'leanna.donnelly@example.org', '+1-830-998-5214', 'ritchie.madilyn', NULL, NULL, NULL, NULL, NULL, 'user', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'DDpBCkrDp7ky57yjPtNRpsdXDm71axCa4vZ285sp7K0BMlcgTFywiGyG5g57', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(5, 'Wilson Bartell', 'doyle.hugh@example.net', '+1-980-734-1393', 'qohara', NULL, NULL, NULL, NULL, NULL, 'admin', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'ToBgq0S8p6', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(6, 'Chanel Tremblay', 'bhowell@example.org', '936-673-6143', 'vswift', NULL, NULL, NULL, NULL, NULL, 'user', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'JBs5e0QMBTzhdmZUDzvf8WMOv5iB7LAE7QwOCMxnVol7yNGTXhaPeWXhTVp3', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(7, 'Skye Kshlerin', 'aernser@example.com', '(341) 751-6960', 'bailey.jairo', NULL, NULL, NULL, NULL, NULL, 'admin', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'Q39AsGEVRB', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(8, 'Myriam Simonis', 'charlie.marquardt@example.com', '(862) 694-5499', 'hessel.rozella', NULL, NULL, NULL, NULL, NULL, 'user', 'inactive', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'ggno77oltH', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(9, 'Ted Hand', 'torphy.candice@example.org', '346-237-3003', 'osbaldo.nolan', NULL, NULL, NULL, NULL, NULL, 'admin', 'inactive', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'Y9Bsxp3iVf', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(10, 'Kurt Schaden', 'romaguera.daisy@example.net', '+17083788878', 'muller.carolina', NULL, NULL, NULL, NULL, NULL, 'user', 'inactive', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'dHHUghkbU9', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(11, 'King Bernier', 'herzog.sandrine@example.net', '1-434-590-6621', 'abeier', NULL, NULL, NULL, NULL, NULL, 'admin', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'vG3m41gC2t', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(12, 'Jasper Bradtke', 'bergnaum.kiana@example.com', '+1 (920) 884-4393', 'lebsack.norwood', NULL, NULL, NULL, NULL, NULL, 'admin', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'eadrwc9ZC5', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(13, 'Mr. Nils Koss DDS', 'evans.prosacco@example.com', '769.523.8379', 'bogisich.carson', NULL, NULL, NULL, NULL, NULL, 'user', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'nK4VMAY6Z4', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(14, 'Maxine Greenfelder IV', 'tevin54@example.com', '445.957.4717', 'sean56', NULL, NULL, NULL, NULL, NULL, 'user', 'inactive', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'Q0ap0zVXfO', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(15, 'Miss Frieda Harris Jr.', 'valerie48@example.org', '+1.385.740.6184', 'walker.amani', NULL, NULL, NULL, NULL, NULL, 'admin', 'inactive', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'h4aBOxTWWd', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(16, 'Mr. Simeon Renner', 'hills.blanca@example.net', '701.222.0246', 'hahn.anabelle', NULL, NULL, NULL, NULL, NULL, 'admin', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'yUWoneHOvj', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(17, 'Cordie Becker', 'rogahn.dave@example.org', '(229) 447-2922', 'zieme.gaylord', NULL, NULL, NULL, NULL, NULL, 'admin', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'k9Z2oUKcVh', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(18, 'Arlene Stiedemann IV', 'buford.mcclure@example.org', '1-539-878-7564', 'krista34', NULL, NULL, NULL, NULL, NULL, 'user', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'xi9rtNHY5Z', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(19, 'Jerome Bailey', 'darrion76@example.org', '+1-364-715-3042', 'stroman.megane', NULL, NULL, NULL, NULL, NULL, 'user', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'mDL7xXqEbZ', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(20, 'Ebba Fisher', 'sidney.blanda@example.net', '1-580-325-0270', 'ysawayn', NULL, NULL, NULL, NULL, NULL, 'user', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'MnRXDkJjkT', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(21, 'Mr. Lance Ortiz II', 'erik.batz@example.net', '925-970-9876', 'cartwright.estell', NULL, NULL, NULL, NULL, NULL, 'admin', 'inactive', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'JOpH8QfDuk', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(22, 'Eldon Block', 'whansen@example.com', '(678) 909-8382', 'ikuvalis', NULL, NULL, NULL, NULL, NULL, 'admin', 'inactive', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'tMG9Q5nZhr', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(23, 'Seth Klocko', 'albin59@example.net', '+1 (609) 290-0128', 'zemlak.carroll', NULL, NULL, NULL, NULL, NULL, 'user', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'mBIU1exTes', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(24, 'Howell Kub', 'lhahn@example.net', '848.692.7701', 'lucious.stroman', NULL, NULL, NULL, NULL, NULL, 'admin', 'inactive', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', '7b4uiPxt2L', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(25, 'Izabella Anderson IV', 'aron68@example.org', '+1-845-488-9346', 'heller.brandt', NULL, NULL, NULL, NULL, NULL, 'admin', 'inactive', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', '1P0raSh0ak', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(26, 'Anthony Hartmann', 'jazmyn27@example.org', '(480) 702-6903', 'von.sammie', NULL, NULL, NULL, NULL, NULL, 'user', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'U6dVy3blWX', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(27, 'Brain Zulauf Sr.', 'daugherty.kelsie@example.com', '(620) 402-4414', 'west.catherine', NULL, NULL, NULL, NULL, NULL, 'admin', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'bpXefC3F7I', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(28, 'Mrs. Aletha McKenzie', 'maureen80@example.net', '+1-657-246-4235', 'meichmann', NULL, NULL, NULL, NULL, NULL, 'admin', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'aqPvSxUW1b', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(29, 'Mr. Durward Collier II', 'brekke.oma@example.net', '681-446-6633', 'yheller', NULL, NULL, NULL, NULL, NULL, 'user', 'inactive', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'GQzFtJb18b', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(30, 'Keegan Simonis', 'fhirthe@example.com', '+12838730113', 'wyman.danial', NULL, NULL, NULL, NULL, NULL, 'admin', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', '7qREYmLyou', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(31, 'Una Ebert', 'katrine46@example.org', '(210) 505-3595', 'dcartwright', NULL, NULL, NULL, NULL, NULL, 'user', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'd5f1mjzj2V', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(32, 'Troy Wyman', 'brakus.dannie@example.net', '+1-680-727-3485', 'imogene.armstrong', NULL, NULL, NULL, NULL, NULL, 'user', 'active', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'wre3S53CaO', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(33, 'Krystel Witting', 'bosco.alia@example.net', '+1 (585) 838-5643', 'flarkin', NULL, NULL, NULL, NULL, NULL, 'admin', 'inactive', '2024-01-22 23:54:58', '$2y$12$7oyckA9HdeXlTqkADBCW6OYKl7pwzWjso6eAFGidktEk3boEq6Qrq', 'AOHHF0MQYY', '2024-01-22 23:54:58', '2024-01-22 23:54:58'),
(36, 'Drew Fry', 'vudu@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user', 'inactive', NULL, '$2y$12$5hIeLTe6eW7Yi5uWlNq0kutBrnpeeTQDIKHeSRdP6.eUHzpHVRa76', 'c19QXEkUUjH77WsPUhEWL9WiCcDKLIZjHOPVAXxJN23znUkrxbhbtivik6aO', '2024-01-23 10:08:53', '2024-01-23 10:08:53'),
(37, 'Adhora', 'adhora114@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user', 'inactive', NULL, '$2y$12$IWn3JKB8t0Ee.gOWIi4YlOi7VMdRKhst4kufdYVR/2csPbT997oCa', 'UkJFO7NWXauXGGXJepR2z4sVruyvEht9qJF9Rtp1GxsAEQbtsXhIb7Eu6F6R', '2024-01-25 22:29:43', '2024-01-25 22:29:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
