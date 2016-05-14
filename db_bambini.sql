-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 14 2016 г., 12:27
-- Версия сервера: 5.5.49-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_bambini`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show` tinyint(1) NOT NULL,
  KEY `blocks_name_index` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `blocks`
--

INSERT INTO `blocks` (`name`, `title`, `show`) VALUES
('static_all_site', '', 0),
('static_about', '', 0),
('static_good_atm', 'Добрая атмосфера', 0),
('dom_upgrade', 'Развивающие программы!!', 0),
('dom_target_upgrade', '', 0),
('dom_staff', 'Работники', 0),
('dom_all_images', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `bools`
--

CREATE TABLE IF NOT EXISTS `bools` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `crops`
--

CREATE TABLE IF NOT EXISTS `crops` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `man_sufix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target_sufix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cache_index` int(11) NOT NULL,
  `man_x1` int(11) NOT NULL,
  `man_y1` int(11) NOT NULL,
  `man_x2` int(11) NOT NULL,
  `man_y2` int(11) NOT NULL,
  `target_x1` int(11) NOT NULL,
  `target_y1` int(11) NOT NULL,
  `target_x2` int(11) NOT NULL,
  `target_y2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Дамп данных таблицы `crops`
--

INSERT INTO `crops` (`id`, `value`, `name`, `image_name`, `block_name`, `group_name`, `group_id`, `image_id`, `alt`, `link`, `man_sufix`, `target_sufix`, `cache_index`, `man_x1`, `man_y1`, `man_x2`, `man_y2`, `target_x1`, `target_y1`, `target_x2`, `target_y2`) VALUES
(2, '', 'big', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 74, 79, '', 'good_atm_gallery_atm_pict_74_big.jpg', 'primary', 'primary', 3, 165, 245, 635, 555, 165, 245, 635, 555),
(3, '', 'big', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 75, 80, '', 'good_atm_gallery_atm_pict_75_big.jpg', 'primary', 'primary', 3, 165, 245, 635, 555, 165, 245, 635, 555),
(5, '', 'big', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 77, 82, '', 'good_atm_gallery_atm_pict_77_big.jpg', 'primary', 'primary', 3, 165, 245, 635, 555, 165, 245, 635, 555),
(6, '', 'medium', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 75, 80, '', 'good_atm_gallery_atm_pict_75_medium.jpg', 'primary', 'primary', 3, 285, 315, 515, 485, 285, 315, 515, 485),
(7, '', 'medium', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 74, 79, '', 'good_atm_gallery_atm_pict_74_medium.jpg', 'primary', 'primary', 3, 285, 315, 515, 485, 285, 315, 515, 485),
(8, '', 'big', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 76, 81, '', 'good_atm_gallery_atm_pict_76_big.jpg', 'primary', 'primary', 3, 165, 245, 635, 555, 165, 245, 635, 555),
(9, '', 'big', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 78, 83, '', 'good_atm_gallery_atm_pict_78_big.jpg', 'primary', 'primary', 3, 165, 245, 635, 555, 165, 245, 635, 555),
(11, '', 'medium', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 77, 82, '', 'good_atm_gallery_atm_pict_77_medium.jpg', 'primary', 'primary', 3, 285, 315, 515, 485, 285, 315, 515, 485),
(12, '', 'small', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 74, 79, '', 'good_atm_gallery_atm_pict_74_small.jpg', 'primary', 'primary', 3, 315, 345, 485, 455, 315, 345, 485, 455),
(13, '', 'medium', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 76, 81, '', 'good_atm_gallery_atm_pict_76_medium.jpg', 'primary', 'primary', 3, 285, 315, 515, 485, 285, 315, 515, 485),
(14, '', 'small', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 75, 80, '', 'good_atm_gallery_atm_pict_75_small.jpg', 'primary', 'primary', 3, 315, 345, 485, 455, 315, 345, 485, 455),
(15, '', 'medium', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 78, 83, '', 'good_atm_gallery_atm_pict_78_medium.jpg', 'primary', 'primary', 3, 285, 315, 515, 485, 285, 315, 515, 485),
(16, '', 'small', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 76, 81, '', 'good_atm_gallery_atm_pict_76_small.jpg', 'primary', 'primary', 3, 315, 345, 485, 455, 315, 345, 485, 455),
(17, '', 'small', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 77, 82, '', 'good_atm_gallery_atm_pict_77_small.jpg', 'primary', 'primary', 3, 315, 345, 485, 455, 315, 345, 485, 455),
(18, '', 'small', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 78, 83, '', 'good_atm_gallery_atm_pict_78_small.jpg', 'primary', 'primary', 3, 315, 345, 485, 455, 315, 345, 485, 455),
(19, '', 'big', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 79, 84, '', 'good_atm_gallery_atm_pict_79_big.jpg', 'primary', 'primary', 3, 165, 245, 635, 555, 165, 245, 635, 555),
(20, '', 'big', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 80, 85, '', 'good_atm_gallery_atm_pict_80_big.jpg', 'primary', 'primary', 3, 165, 245, 635, 555, 165, 245, 635, 555),
(21, '', 'big', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 81, 86, '', 'good_atm_gallery_atm_pict_81_big.jpg', 'primary', 'primary', 3, 165, 245, 635, 555, 165, 245, 635, 555),
(22, '', 'medium', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 79, 84, '', 'good_atm_gallery_atm_pict_79_medium.jpg', 'primary', 'primary', 3, 285, 315, 515, 485, 285, 315, 515, 485),
(23, '', 'medium', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 80, 85, '', 'good_atm_gallery_atm_pict_80_medium.jpg', 'primary', 'primary', 3, 285, 315, 515, 485, 285, 315, 515, 485),
(24, '', 'medium', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 81, 86, '', 'good_atm_gallery_atm_pict_81_medium.jpg', 'primary', 'primary', 3, 285, 315, 515, 485, 285, 315, 515, 485),
(25, '', 'small', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 79, 84, '', 'good_atm_gallery_atm_pict_79_small.jpg', 'primary', 'primary', 3, 315, 345, 485, 455, 315, 345, 485, 455),
(26, '', 'big', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 82, 87, '', 'good_atm_gallery_atm_pict_82_big.jpg', 'primary', 'primary', 3, 165, 245, 635, 555, 165, 245, 635, 555),
(27, '', 'small', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 80, 85, '', 'good_atm_gallery_atm_pict_80_small.jpg', 'primary', 'primary', 3, 315, 345, 485, 455, 315, 345, 485, 455),
(28, '', 'big', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 83, 88, '', 'good_atm_gallery_atm_pict_83_big.jpg', 'primary', 'primary', 3, 165, 245, 635, 555, 165, 245, 635, 555),
(29, '', 'small', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 81, 86, '', 'good_atm_gallery_atm_pict_81_small.jpg', 'primary', 'primary', 3, 315, 345, 485, 455, 315, 345, 485, 455),
(30, '', 'medium', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 82, 87, '', 'good_atm_gallery_atm_pict_82_medium.jpg', 'primary', 'primary', 3, 285, 315, 515, 485, 285, 315, 515, 485),
(31, '', 'medium', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 83, 88, '', 'good_atm_gallery_atm_pict_83_medium.jpg', 'primary', 'primary', 3, 285, 315, 515, 485, 285, 315, 515, 485),
(32, '', 'small', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 82, 87, '', 'good_atm_gallery_atm_pict_82_small.jpg', 'primary', 'primary', 3, 315, 345, 485, 455, 315, 345, 485, 455),
(33, '', 'small', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 83, 88, '', 'good_atm_gallery_atm_pict_83_small.jpg', 'primary', 'primary', 3, 315, 345, 485, 455, 315, 345, 485, 455),
(34, '', 'big', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 84, 89, '', 'program_gallery_program_gallery_pict_84_big.jpg', 'primary', 'primary', 1, 155, 218, 645, 583, 155, 217, 645, 582),
(35, '', 'big', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 87, 92, '', 'program_gallery_program_gallery_pict_87_big.jpg', 'primary', 'primary', 1, 155, 218, 645, 583, 155, 217, 645, 582),
(36, '', 'big', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 85, 90, '', 'program_gallery_program_gallery_pict_85_big.jpg', 'primary', 'primary', 1, 155, 218, 645, 583, 155, 217, 645, 582),
(37, '', 'big', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 86, 91, '', 'program_gallery_program_gallery_pict_86_big.jpg', 'primary', 'primary', 1, 155, 218, 645, 583, 155, 217, 645, 582),
(38, '', 'big', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 88, 93, '', 'program_gallery_program_gallery_pict_88_big.jpg', 'primary', 'primary', 1, 155, 218, 645, 583, 155, 217, 645, 582),
(39, '', 'medium', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 84, 89, '', 'program_gallery_program_gallery_pict_84_medium.jpg', 'primary', 'primary', 1, 285, 315, 515, 485, 285, 315, 515, 485),
(40, '', 'medium', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 85, 90, '', 'program_gallery_program_gallery_pict_85_medium.jpg', 'primary', 'primary', 1, 285, 315, 515, 485, 285, 315, 515, 485),
(41, '', 'medium', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 87, 92, '', 'program_gallery_program_gallery_pict_87_medium.jpg', 'primary', 'primary', 1, 285, 315, 515, 485, 285, 315, 515, 485),
(42, '', 'medium', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 86, 91, '', 'program_gallery_program_gallery_pict_86_medium.jpg', 'primary', 'primary', 1, 285, 315, 515, 485, 285, 315, 515, 485),
(43, '', 'medium', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 88, 93, '', 'program_gallery_program_gallery_pict_88_medium.jpg', 'primary', 'primary', 1, 285, 315, 515, 485, 285, 315, 515, 485),
(44, '', 'small', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 84, 89, '', 'program_gallery_program_gallery_pict_84_small.jpg', 'primary', 'primary', 1, 315, 345, 485, 455, 315, 345, 485, 455),
(45, '', 'small', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 87, 92, '', 'program_gallery_program_gallery_pict_87_small.jpg', 'primary', 'primary', 1, 315, 345, 485, 455, 315, 345, 485, 455),
(46, '', 'small', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 85, 90, '', 'program_gallery_program_gallery_pict_85_small.jpg', 'primary', 'primary', 1, 315, 345, 485, 455, 315, 345, 485, 455),
(47, '', 'small', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 86, 91, '', 'program_gallery_program_gallery_pict_86_small.jpg', 'primary', 'primary', 1, 315, 345, 485, 455, 315, 345, 485, 455),
(48, '', 'small', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 88, 93, '', 'program_gallery_program_gallery_pict_88_small.jpg', 'primary', 'primary', 1, 315, 345, 485, 455, 315, 345, 485, 455);

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_id` int(10) unsigned NOT NULL,
  `group_owner_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sorter` int(11) NOT NULL,
  `show` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `groups_slug_index` (`slug`),
  KEY `groups_owner_id_index` (`owner_id`),
  KEY `groups_group_owner_name_index` (`group_owner_name`),
  KEY `groups_group_name_index` (`group_name`),
  KEY `groups_block_name_index` (`block_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=89 ;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `slug`, `owner_id`, `group_owner_name`, `group_name`, `block_name`, `title`, `sorter`, `show`, `created_at`, `updated_at`) VALUES
(7, '', 0, '', 'staff_list', 'dom_staff', '', 1, 0, '2016-05-12 03:11:22', '2016-05-12 03:11:23'),
(25, '', 0, '', 'program_type', 'dom_target_upgrade', '', 2, 0, '2016-05-12 04:00:40', '2016-05-12 04:00:40'),
(29, 'sdhsdhsdh', 25, '', 'upgrade_program', 'dom_target_upgrade', '', 1, 0, '2016-05-12 04:18:06', '2016-05-12 04:18:17'),
(30, 'polettttttttttttttttttttttttttttttttttttttt', 25, '', 'upgrade_program', 'dom_target_upgrade', '', 2, 0, '2016-05-12 04:18:08', '2016-05-12 05:25:33'),
(49, '', 0, '', 'program_type', 'dom_target_upgrade', '', 3, 0, '2016-05-12 05:23:28', '2016-05-12 05:23:28'),
(50, '', 49, '', 'upgrade_program', 'dom_target_upgrade', '', 1, 0, '2016-05-12 05:23:41', '2016-05-12 05:23:41'),
(51, 'varvarvrv', 49, '', 'upgrade_program', 'dom_target_upgrade', '', 2, 0, '2016-05-12 05:23:44', '2016-05-12 05:24:21'),
(52, 'pole-strokovoe-namerrrrrrrrrrrrrrrrrr', 49, '', 'upgrade_program', 'dom_target_upgrade', '', 3, 0, '2016-05-12 05:24:48', '2016-05-12 05:25:03'),
(53, '', 29, '', 'program_gall', 'dom_target_upgrade', '', 1, 0, '2016-05-12 05:52:07', '2016-05-12 05:52:07'),
(54, '', 29, '', 'program_gall', 'dom_target_upgrade', '', 2, 0, '2016-05-12 05:52:19', '2016-05-12 05:52:19'),
(55, '', 51, '', 'program_gall', 'dom_target_upgrade', '', 1, 0, '2016-05-12 05:53:02', '2016-05-12 05:53:02'),
(56, '', 51, '', 'program_gall', 'dom_target_upgrade', '', 2, 0, '2016-05-12 05:53:04', '2016-05-12 05:53:04'),
(57, '', 51, '', 'program_gall', 'dom_target_upgrade', '', 3, 0, '2016-05-12 05:53:04', '2016-05-12 05:53:04'),
(60, '', 0, '', 'features', 'static_about', '', 3, 0, '2016-05-12 05:55:09', '2016-05-12 05:55:09'),
(68, 'gdgdg', 0, '', 'upgrade_programs', 'dom_upgrade', '', 1, 0, '2016-05-13 02:44:11', '2016-05-14 00:42:19'),
(69, 'dhdfhdjs', 0, '', 'upgrade_programs', 'dom_upgrade', '', 2, 0, '2016-05-13 02:44:12', '2016-05-14 00:40:35'),
(70, 'xvnxn', 0, '', 'upgrade_programs', 'dom_upgrade', '', 3, 0, '2016-05-13 02:44:13', '2016-05-14 00:40:45'),
(71, '', 0, '', 'features', 'static_about', '', 4, 0, '2016-05-13 03:09:39', '2016-05-13 03:09:39'),
(72, '', 0, '', 'features', 'static_about', '', 5, 0, '2016-05-13 03:09:41', '2016-05-13 03:09:41'),
(73, '', 0, '', 'features', 'static_about', '', 6, 0, '2016-05-13 03:12:50', '2016-05-13 03:12:51'),
(74, '', 0, '', 'good_atm_gallery', 'static_good_atm', '', 5, 0, '2016-05-13 04:05:07', '2016-05-13 04:05:07'),
(75, '', 0, '', 'good_atm_gallery', 'static_good_atm', '', 6, 0, '2016-05-13 04:05:09', '2016-05-13 04:05:09'),
(76, '', 0, '', 'good_atm_gallery', 'static_good_atm', '', 7, 0, '2016-05-13 04:05:37', '2016-05-13 04:05:37'),
(77, '', 0, '', 'good_atm_gallery', 'static_good_atm', '', 8, 0, '2016-05-13 04:05:38', '2016-05-13 04:05:38'),
(78, '', 0, '', 'good_atm_gallery', 'static_good_atm', '', 9, 0, '2016-05-13 04:05:40', '2016-05-13 04:05:40'),
(79, '', 0, '', 'good_atm_gallery', 'static_good_atm', '', 10, 0, '2016-05-13 04:05:41', '2016-05-13 04:05:41'),
(80, '', 0, '', 'good_atm_gallery', 'static_good_atm', '', 11, 0, '2016-05-13 04:05:42', '2016-05-13 04:05:42'),
(81, '', 0, '', 'good_atm_gallery', 'static_good_atm', '', 12, 0, '2016-05-13 04:05:43', '2016-05-13 04:05:43'),
(82, '', 0, '', 'good_atm_gallery', 'static_good_atm', '', 13, 0, '2016-05-13 04:05:44', '2016-05-13 04:05:44'),
(83, '', 0, '', 'good_atm_gallery', 'static_good_atm', '', 14, 0, '2016-05-13 04:05:46', '2016-05-13 04:05:46'),
(84, '', 69, '', 'program_gallery', 'dom_upgrade', '', 1, 0, '2016-05-14 01:26:47', '2016-05-14 01:26:47'),
(85, '', 69, '', 'program_gallery', 'dom_upgrade', '', 2, 0, '2016-05-14 01:26:49', '2016-05-14 01:26:50'),
(86, '', 69, '', 'program_gallery', 'dom_upgrade', '', 3, 0, '2016-05-14 01:27:08', '2016-05-14 01:27:09'),
(87, '', 69, '', 'program_gallery', 'dom_upgrade', '', 4, 0, '2016-05-14 01:27:10', '2016-05-14 01:27:10'),
(88, '', 69, '', 'program_gallery', 'dom_upgrade', '', 5, 0, '2016-05-14 01:27:11', '2016-05-14 01:27:11');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `prefix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `original_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `primary_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secondary_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preview_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cache_index` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=94 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `value`, `name`, `block_name`, `group_name`, `group_id`, `prefix`, `alt`, `original_link`, `primary_link`, `secondary_link`, `icon_link`, `preview_link`, `cache_index`) VALUES
(10, '', 'logo', 'static_all_site', '', 0, 'static_all_site_logo_0', 'fhdfh', 'static_all_site_logo_0.PNG', 'static_all_site_logo_0_primary.PNG', 'static_all_site_logo_0_secondary.PNG', 'static_all_site_logo_0_icon.PNG', 'static_all_site_logo_0_preview.PNG', 10),
(11, '', 'head', 'static_about', '', 0, 'static_about_head_0', 'dfgdfg', 'placeholders/placeholder_700_700_808080.jpg', 'static_about_head_0_primary.PNG', 'static_about_head_0_secondary.PNG', 'static_about_head_0_icon.PNG', 'static_about_head_0_preview.PNG', 41),
(12, '', 'director_face', 'static_about', '', 0, 'static_about_director_face_0', 'dfgdfg', 'placeholders/placeholder_700_700_808080.jpg', 'static_about_director_face_0_primary.PNG', 'static_about_director_face_0_secondary.PNG', 'static_about_director_face_0_icon.PNG', 'static_about_director_face_0_preview.PNG', 43),
(19, '', 'face', 'dom_staff', 'staff_list', 7, '', '', 'placeholders/placeholder_700_700_808080.jpg', 'placeholders/placeholder_700_700_808080.jpg', 'placeholders/placeholder_500_500_808080.jpg', 'placeholders/placeholder_100_100_808080.jpg', 'placeholders/placeholder_100_100_808080.jpg', 0),
(35, '', 'type_pict', 'dom_target_upgrade', 'program_type', 25, 'program_type_type_pict_25', '', 'placeholders/placeholder_700_700_808080.jpg', 'program_type_type_pict_25_primary.jpg', 'program_type_type_pict_25_secondary.jpg', 'program_type_type_pict_25_icon.jpg', 'program_type_type_pict_25_preview.jpg', 4),
(57, '', 'type_pict', 'dom_target_upgrade', 'program_type', 49, 'program_type_type_pict_49', 'dsgsdg', 'placeholders/placeholder_700_700_808080.jpg', 'program_type_type_pict_49_primary.jpg', 'program_type_type_pict_49_secondary.jpg', 'program_type_type_pict_49_icon.jpg', 'program_type_type_pict_49_preview.jpg', 4),
(58, '', 'program_gallery_pict', 'dom_target_upgrade', 'program_gall', 53, 'program_gall_program_gallery_pict_53', '', 'placeholders/placeholder_700_700_808080.jpg', 'program_gall_program_gallery_pict_53_primary.png', 'program_gall_program_gallery_pict_53_secondary.png', 'program_gall_program_gallery_pict_53_icon.png', 'program_gall_program_gallery_pict_53_preview.png', 3),
(59, '', 'program_gallery_pict', 'dom_target_upgrade', 'program_gall', 54, 'program_gall_program_gallery_pict_54', '', 'placeholders/placeholder_700_700_808080.jpg', 'program_gall_program_gallery_pict_54_primary.jpg', 'program_gall_program_gallery_pict_54_secondary.jpg', 'program_gall_program_gallery_pict_54_icon.jpg', 'program_gall_program_gallery_pict_54_preview.jpg', 2),
(60, '', 'program_gallery_pict', 'dom_target_upgrade', 'program_gall', 55, 'program_gall_program_gallery_pict_55', '', 'placeholders/placeholder_700_700_808080.jpg', 'program_gall_program_gallery_pict_55_primary.png', 'program_gall_program_gallery_pict_55_secondary.png', 'program_gall_program_gallery_pict_55_icon.png', 'program_gall_program_gallery_pict_55_preview.png', 1),
(61, '', 'program_gallery_pict', 'dom_target_upgrade', 'program_gall', 56, '', '', 'placeholders/placeholder_700_700_808080.jpg', 'placeholders/placeholder_700_700_808080.jpg', 'placeholders/placeholder_500_500_808080.jpg', 'placeholders/placeholder_100_100_808080.jpg', 'placeholders/placeholder_100_100_808080.jpg', 1),
(62, '', 'program_gallery_pict', 'dom_target_upgrade', 'program_gall', 57, 'program_gall_program_gallery_pict_57', '', 'placeholders/placeholder_700_700_808080.jpg', 'program_gall_program_gallery_pict_57_primary.jpg', 'program_gall_program_gallery_pict_57_secondary.jpg', 'program_gall_program_gallery_pict_57_icon.jpg', 'program_gall_program_gallery_pict_57_preview.jpg', 1),
(65, '', 'feature_pict', 'static_about', 'features', 60, 'features_feature_pict_60', '', 'placeholders/placeholder_700_700_808080.jpg', 'features_feature_pict_60_primary.png', 'features_feature_pict_60_secondary.png', 'features_feature_pict_60_icon.png', 'features_feature_pict_60_preview.png', 13),
(73, '', 'upgrade_program', 'dom_upgrade', 'upgrade_programs', 68, 'upgrade_programs_upgrade_program_68', '', 'upgrade_programs_upgrade_program_68.png', 'upgrade_programs_upgrade_program_68_primary.png', 'upgrade_programs_upgrade_program_68_secondary.png', 'upgrade_programs_upgrade_program_68_icon.png', 'upgrade_programs_upgrade_program_68_preview.png', 5),
(74, '', 'upgrade_program', 'dom_upgrade', 'upgrade_programs', 69, 'upgrade_programs_upgrade_program_69', '', 'upgrade_programs_upgrade_program_69.png', 'upgrade_programs_upgrade_program_69_primary.png', 'upgrade_programs_upgrade_program_69_secondary.png', 'upgrade_programs_upgrade_program_69_icon.png', 'upgrade_programs_upgrade_program_69_preview.png', 6),
(75, '', 'upgrade_program', 'dom_upgrade', 'upgrade_programs', 70, 'upgrade_programs_upgrade_program_70', '', 'upgrade_programs_upgrade_program_70.png', 'upgrade_programs_upgrade_program_70_primary.png', 'upgrade_programs_upgrade_program_70_secondary.png', 'upgrade_programs_upgrade_program_70_icon.png', 'upgrade_programs_upgrade_program_70_preview.png', 3),
(76, '', 'feature_pict', 'static_about', 'features', 71, 'features_feature_pict_71', '', 'placeholders/placeholder_700_700_808080.jpg', 'features_feature_pict_71_primary.png', 'features_feature_pict_71_secondary.png', 'features_feature_pict_71_icon.png', 'features_feature_pict_71_preview.png', 4),
(77, '', 'feature_pict', 'static_about', 'features', 72, 'features_feature_pict_72', '', 'placeholders/placeholder_700_700_808080.jpg', 'features_feature_pict_72_primary.png', 'features_feature_pict_72_secondary.png', 'features_feature_pict_72_icon.png', 'features_feature_pict_72_preview.png', 4),
(78, '', 'feature_pict', 'static_about', 'features', 73, '', '', 'placeholders/placeholder_700_700_808080.jpg', 'placeholders/placeholder_700_700_808080.jpg', 'placeholders/placeholder_500_500_808080.jpg', 'placeholders/placeholder_100_100_808080.jpg', 'placeholders/placeholder_100_100_808080.jpg', 2),
(79, '', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 74, 'good_atm_gallery_atm_pict_74', '', 'good_atm_gallery_atm_pict_74.PNG', 'good_atm_gallery_atm_pict_74_primary.PNG', 'good_atm_gallery_atm_pict_74_secondary.PNG', 'good_atm_gallery_atm_pict_74_icon.PNG', 'good_atm_gallery_atm_pict_74_preview.PNG', 12),
(80, '', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 75, 'good_atm_gallery_atm_pict_75', '', 'good_atm_gallery_atm_pict_75.PNG', 'good_atm_gallery_atm_pict_75_primary.PNG', 'good_atm_gallery_atm_pict_75_secondary.PNG', 'good_atm_gallery_atm_pict_75_icon.PNG', 'good_atm_gallery_atm_pict_75_preview.PNG', 12),
(81, '', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 76, 'good_atm_gallery_atm_pict_76', '', 'good_atm_gallery_atm_pict_76.jpg', 'good_atm_gallery_atm_pict_76_primary.jpg', 'good_atm_gallery_atm_pict_76_secondary.jpg', 'good_atm_gallery_atm_pict_76_icon.jpg', 'good_atm_gallery_atm_pict_76_preview.jpg', 12),
(82, '', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 77, 'good_atm_gallery_atm_pict_77', '', 'good_atm_gallery_atm_pict_77.PNG', 'good_atm_gallery_atm_pict_77_primary.PNG', 'good_atm_gallery_atm_pict_77_secondary.PNG', 'good_atm_gallery_atm_pict_77_icon.PNG', 'good_atm_gallery_atm_pict_77_preview.PNG', 12),
(83, '', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 78, 'good_atm_gallery_atm_pict_78', '', 'good_atm_gallery_atm_pict_78.PNG', 'good_atm_gallery_atm_pict_78_primary.PNG', 'good_atm_gallery_atm_pict_78_secondary.PNG', 'good_atm_gallery_atm_pict_78_icon.PNG', 'good_atm_gallery_atm_pict_78_preview.PNG', 12),
(84, '', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 79, 'good_atm_gallery_atm_pict_79', '', 'good_atm_gallery_atm_pict_79.PNG', 'good_atm_gallery_atm_pict_79_primary.PNG', 'good_atm_gallery_atm_pict_79_secondary.PNG', 'good_atm_gallery_atm_pict_79_icon.PNG', 'good_atm_gallery_atm_pict_79_preview.PNG', 12),
(85, '', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 80, 'good_atm_gallery_atm_pict_80', '', 'good_atm_gallery_atm_pict_80.PNG', 'good_atm_gallery_atm_pict_80_primary.PNG', 'good_atm_gallery_atm_pict_80_secondary.PNG', 'good_atm_gallery_atm_pict_80_icon.PNG', 'good_atm_gallery_atm_pict_80_preview.PNG', 7),
(86, '', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 81, 'good_atm_gallery_atm_pict_81', '', 'good_atm_gallery_atm_pict_81.png', 'good_atm_gallery_atm_pict_81_primary.png', 'good_atm_gallery_atm_pict_81_secondary.png', 'good_atm_gallery_atm_pict_81_icon.png', 'good_atm_gallery_atm_pict_81_preview.png', 9),
(87, '', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 82, 'good_atm_gallery_atm_pict_82', '', 'good_atm_gallery_atm_pict_82.jpg', 'good_atm_gallery_atm_pict_82_primary.jpg', 'good_atm_gallery_atm_pict_82_secondary.jpg', 'good_atm_gallery_atm_pict_82_icon.jpg', 'good_atm_gallery_atm_pict_82_preview.jpg', 10),
(88, '', 'atm_pict', 'static_good_atm', 'good_atm_gallery', 83, 'good_atm_gallery_atm_pict_83', '', 'good_atm_gallery_atm_pict_83.PNG', 'good_atm_gallery_atm_pict_83_primary.PNG', 'good_atm_gallery_atm_pict_83_secondary.PNG', 'good_atm_gallery_atm_pict_83_icon.PNG', 'good_atm_gallery_atm_pict_83_preview.PNG', 10),
(89, '', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 84, 'program_gallery_program_gallery_pict_84', '', 'placeholders/placeholder_700_700_808080.jpg', 'program_gallery_program_gallery_pict_84_primary.png', 'program_gallery_program_gallery_pict_84_secondary.png', 'program_gallery_program_gallery_pict_84_icon.png', 'program_gallery_program_gallery_pict_84_preview.png', 3),
(90, '', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 85, 'program_gallery_program_gallery_pict_85', '', 'placeholders/placeholder_700_700_808080.jpg', 'program_gallery_program_gallery_pict_85_primary.jpg', 'program_gallery_program_gallery_pict_85_secondary.jpg', 'program_gallery_program_gallery_pict_85_icon.jpg', 'program_gallery_program_gallery_pict_85_preview.jpg', 3),
(91, '', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 86, 'program_gallery_program_gallery_pict_86', '', 'placeholders/placeholder_700_700_808080.jpg', 'program_gallery_program_gallery_pict_86_primary.png', 'program_gallery_program_gallery_pict_86_secondary.png', 'program_gallery_program_gallery_pict_86_icon.png', 'program_gallery_program_gallery_pict_86_preview.png', 2),
(92, '', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 87, 'program_gallery_program_gallery_pict_87', '', 'placeholders/placeholder_700_700_808080.jpg', 'program_gallery_program_gallery_pict_87_primary.png', 'program_gallery_program_gallery_pict_87_secondary.png', 'program_gallery_program_gallery_pict_87_icon.png', 'program_gallery_program_gallery_pict_87_preview.png', 2),
(93, '', 'program_gallery_pict', 'dom_upgrade', 'program_gallery', 88, 'program_gallery_program_gallery_pict_88', '', 'placeholders/placeholder_700_700_808080.jpg', 'program_gallery_program_gallery_pict_88_primary.png', 'program_gallery_program_gallery_pict_88_secondary.png', 'program_gallery_program_gallery_pict_88_icon.png', 'program_gallery_program_gallery_pict_88_preview.png', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_06_27_131534_create_blocks_table', 1),
('2015_06_27_131553_create_groups_table', 1),
('2015_06_27_131608_create_images_table', 1),
('2015_06_27_162911_create_stringfields_table', 1),
('2015_06_27_162920_create_textfields_table', 1),
('2015_07_01_133347_create_numbs_table', 1),
('2015_07_01_134525_create_bools_table', 1),
('2015_07_28_095851_create_pdatetimes_table', 1),
('2016_04_17_142100_create_crops_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `numbs`
--

CREATE TABLE IF NOT EXISTS `numbs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pdatetimes`
--

CREATE TABLE IF NOT EXISTS `pdatetimes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` tinyint(1) NOT NULL,
  `value` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `stringfields`
--

CREATE TABLE IF NOT EXISTS `stringfields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=127 ;

--
-- Дамп данных таблицы `stringfields`
--

INSERT INTO `stringfields` (`id`, `block_name`, `group_id`, `group_name`, `name`, `value`) VALUES
(25, 'static_all_site', 0, '', 'logo_descr', 'Девиз'),
(26, 'static_all_site', 0, '', 'phone', 'Телефон'),
(27, 'static_all_site', 0, '', 'map_link', 'dfhdfhd'),
(28, 'static_all_site', 0, '', 'copy', '© Клуб детского развития «Бамбини»!!!'),
(29, 'static_all_site', 0, '', 'tell_everyone', 'Расскажите друзьям о нашем клубе, если у них есть дети :-)@@@'),
(30, 'static_about', 0, '', 'question', 'Как развивать ребенка, если не хватает времени?'),
(31, 'static_about', 0, '', 'director_name', 'Алла Збарщук'),
(32, 'static_about', 0, '', 'director_prof', 'директор и основатель!'),
(35, 'static_about', 0, '', 'feature_title', 'rwqrqwr'),
(42, 'dom_staff', 7, 'staff_list', 'name', 'поле строковое - name'),
(43, 'dom_staff', 7, 'staff_list', 'dolzhnost', 'поле строковое - dolzhnost'),
(78, 'dom_target_upgrade', 25, 'program_type', 'type_name', 'sdhsdhsdh'),
(79, 'dom_target_upgrade', 25, 'program_type', 'type_descr', 'sdhsdhsdh'),
(81, 'dom_target_upgrade', 29, 'upgrade_program', 'name', 'sdhsdhsdh'),
(82, 'dom_target_upgrade', 29, 'upgrade_program', 'program_name', 'поле строковое - program_name'),
(83, 'dom_target_upgrade', 30, 'upgrade_program', 'name', 'полеттттттттттттттттттттттттттттттттттттттт'),
(84, 'dom_target_upgrade', 30, 'upgrade_program', 'program_name', 'поле строттттттттттттттттттттттт'),
(94, 'dom_target_upgrade', 49, 'program_type', 'type_name', 'поле рлрд'),
(95, 'dom_target_upgrade', 49, 'program_type', 'type_descr', 'полежржржр'),
(96, 'dom_target_upgrade', 50, 'upgrade_program', 'name', 'поле строковое - name'),
(97, 'dom_target_upgrade', 50, 'upgrade_program', 'program_name', 'поле строковое - program_name'),
(98, 'dom_target_upgrade', 51, 'upgrade_program', 'name', 'варварврв'),
(99, 'dom_target_upgrade', 51, 'upgrade_program', 'program_name', 'ррррррррррррррррррррдрдр'),
(100, 'dom_target_upgrade', 52, 'upgrade_program', 'name', 'поле строковое - nameрррррррррррррррррр'),
(101, 'dom_target_upgrade', 52, 'upgrade_program', 'program_name', 'поле строковоррррррррррррррррррррррррррррр'),
(102, 'static_about', 60, 'features', 'feature_name', 'поле строковое - feature_name'),
(113, 'dom_upgrade', 68, 'upgrade_programs', 'name', 'gdgdg'),
(114, 'dom_upgrade', 68, 'upgrade_programs', 'program_name', 'поле строковое - program_name'),
(115, 'dom_upgrade', 69, 'upgrade_programs', 'name', 'dhdfhdjs'),
(116, 'dom_upgrade', 69, 'upgrade_programs', 'program_name', 'Название программы'),
(117, 'dom_upgrade', 70, 'upgrade_programs', 'name', 'xvnxn'),
(118, 'dom_upgrade', 70, 'upgrade_programs', 'program_name', 'поле строковое - program_name'),
(119, 'static_about', 71, 'features', 'feature_name', 'поле строковое - feature_name'),
(120, 'static_about', 72, 'features', 'feature_name', 'поле строковое - feature_name'),
(121, 'static_about', 73, 'features', 'feature_name', 'поле строковое - feature_name'),
(122, 'dom_target_upgrade', 29, 'upgrade_program', 'program_name_descr', 'фвфв'),
(123, 'dom_target_upgrade', 30, 'upgrade_program', 'program_name_descr', ''),
(124, 'dom_target_upgrade', 50, 'upgrade_program', 'program_name_descr', ''),
(125, 'dom_target_upgrade', 51, 'upgrade_program', 'program_name_descr', ''),
(126, 'dom_target_upgrade', 52, 'upgrade_program', 'program_name_descr', '');

-- --------------------------------------------------------

--
-- Структура таблицы `textfields`
--

CREATE TABLE IF NOT EXISTS `textfields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=58 ;

--
-- Дамп данных таблицы `textfields`
--

INSERT INTO `textfields` (`id`, `block_name`, `group_id`, `group_name`, `name`, `value`) VALUES
(4, 'static_about', 0, '', 'director_descr', '<p>Каждый родитель знает, мозг активней всего формируется до 6 лет: это главный этап умственного\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; развития. Пропустив его, малыш начинает отставать от сверстников, ему сложно дается учеба в школе,\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; он замыкается в коллективе, избегает общения. Восполнить этот пробел неимоверно сложно.\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p><p>\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Но жизнь такова, что иногда мы действительно не успеваем дать ребенку необходимое: работа и бытовые\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; обязанности занимают слишком много времени. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-family: ''Trebuchet MS'', Helvetica, Verdana, sans-serif; line-height: 1.45em;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></p><p>\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Поэтому мы открыли Bambini. Мы хотим, чтобы наши дети могли научиться творчеству и общению в\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; коллективе, учились с интересом и энтузиазмом, а родители были спокойны: малыш получит достаточно\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; внимания, заботы и пользы.\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>'),
(10, 'dom_staff', 7, 'staff_list', 'descr', 'поле текст - descr'),
(21, 'dom_target_upgrade', 29, 'upgrade_program', 'descr', 'поле текст - descr'),
(22, 'dom_target_upgrade', 30, 'upgrade_program', 'descr', 'поле темтмтттттттттттттттт'),
(32, 'dom_target_upgrade', 50, 'upgrade_program', 'descr', 'поле текст - descr'),
(33, 'dom_target_upgrade', 51, 'upgrade_program', 'descr', 'поле текст - descrржржр'),
(34, 'dom_target_upgrade', 52, 'upgrade_program', 'descr', 'ссссссссссссссссссссссссссссссс'),
(35, 'static_about', 60, 'features', 'feature_descr', 'поле текст - feature_descr'),
(49, 'dom_upgrade', 68, 'upgrade_programs', 'descr', 'поле текст - descr'),
(50, 'dom_upgrade', 68, 'upgrade_programs', 'preview_descr', 'поле текст - preview_descr'),
(51, 'dom_upgrade', 69, 'upgrade_programs', 'descr', '<p>Описание</p><br>'),
(52, 'dom_upgrade', 69, 'upgrade_programs', 'preview_descr', '<p>Описание программы на главной странице</p><br>'),
(53, 'dom_upgrade', 70, 'upgrade_programs', 'descr', 'поле текст - descr'),
(54, 'dom_upgrade', 70, 'upgrade_programs', 'preview_descr', 'поле текст - preview_descr'),
(55, 'static_about', 71, 'features', 'feature_descr', 'поле текст - feature_descr'),
(56, 'static_about', 72, 'features', 'feature_descr', 'поле текст - feature_descr'),
(57, 'static_about', 73, 'features', 'feature_descr', 'поле текст - feature_descr');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mr.kaluchii@mail.ru', 'mr.kaluchii@mail.ru', '$2y$10$62gOJaEaaNDbhv44F9QJ1OEv5ut092xQg841vyXrlGI8ff1rbvgQS', 'oieyxFAOcJoIdNkK9j0zNeINAaLAN8n7td8is14gjNHlVAU1XSmWBJ4711J5', '2016-05-12 01:09:21', '2016-05-13 23:55:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
