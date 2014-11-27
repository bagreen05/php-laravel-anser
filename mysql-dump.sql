-- phpMyAdmin SQL Dump
-- version 4.2.3deb1.trusty~ppa.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 05 2014 г., 20:53
-- Версия сервера: 5.5.38-0ubuntu0.14.04.1
-- Версия PHP: 5.5.16-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `anser`
--

-- --------------------------------------------------------

--
-- Структура таблицы `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
`id` int(10) unsigned NOT NULL,
  `title_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `title_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `gallery_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `banners`
--

INSERT INTO `banners` (`id`, `title_ru`, `title_ro`, `description`, `active`, `gallery_id`, `created_at`, `updated_at`) VALUES
(2, 'Мы знаем, мы умеем, мы делаем', 'Cunoaștem ceea ce facem!', '', 1, 26, '2014-01-02 15:27:19', '2014-02-28 05:05:31'),
(3, 'На первом месте - качество работы', 'În primul rând - calitatea muncii!', '', 1, 27, '2014-01-02 15:45:55', '2014-02-28 05:06:39'),
(4, 'Наши объекты говорят сами за себя', 'Obiectele noastre ne reprezinta', '', 1, 33, '2014-01-04 06:17:17', '2014-02-28 05:09:17');

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
`id` int(10) unsigned NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, '2013-12-29 18:52:10', '2013-12-29 18:52:10'),
(2, 1, '2013-12-29 18:53:26', '2013-12-29 18:53:26'),
(3, 1, '2013-12-29 19:04:23', '2013-12-29 19:04:23'),
(4, 1, '2013-12-30 10:52:03', '2013-12-30 10:52:03'),
(5, 1, '2013-12-30 11:17:04', '2013-12-30 11:17:04'),
(6, 1, '2013-12-30 11:19:33', '2013-12-30 11:19:33'),
(7, 1, '2013-12-30 11:24:31', '2013-12-30 11:24:31'),
(8, 1, '2013-12-30 11:26:50', '2013-12-30 11:26:50'),
(9, 1, '2013-12-30 11:28:23', '2013-12-30 11:28:23'),
(10, 1, '2013-12-30 11:30:08', '2013-12-30 11:30:08'),
(11, 1, '2013-12-30 11:32:50', '2013-12-30 11:32:50'),
(12, 1, '2013-12-30 11:34:50', '2013-12-30 11:34:50'),
(13, 1, '2013-12-30 11:37:37', '2013-12-30 11:37:37'),
(14, 1, '2013-12-30 11:39:48', '2013-12-30 11:39:48'),
(15, 1, '2013-12-30 11:41:34', '2013-12-30 11:41:34'),
(16, 1, '2013-12-30 11:43:23', '2013-12-30 11:43:23'),
(17, 1, '2013-12-30 13:27:37', '2013-12-30 13:27:37'),
(18, 1, '2013-12-30 14:16:34', '2013-12-30 14:16:34'),
(19, 1, '2013-12-30 14:28:02', '2013-12-30 14:28:02'),
(20, 1, '2013-12-30 15:37:25', '2013-12-30 15:37:25'),
(21, 1, '2013-12-30 15:52:01', '2013-12-30 15:52:01'),
(22, 1, '2013-12-30 15:57:32', '2013-12-30 15:57:32'),
(23, 1, '2013-12-30 16:01:52', '2013-12-30 16:01:52'),
(24, 1, '2013-12-30 16:09:22', '2013-12-30 16:09:22'),
(25, 1, '2013-12-30 16:31:06', '2013-12-30 16:31:06'),
(26, 1, '2014-01-02 15:27:19', '2014-01-02 15:27:19'),
(27, 1, '2014-01-02 15:45:55', '2014-01-02 15:45:55'),
(28, 1, '2014-01-04 05:00:04', '2014-01-04 05:00:04'),
(29, 1, '2014-01-04 05:02:55', '2014-01-04 05:02:55'),
(30, 1, '2014-01-04 05:06:38', '2014-01-04 05:06:38'),
(31, 1, '2014-01-04 05:09:38', '2014-01-04 05:09:38'),
(32, 1, '2014-01-04 05:11:33', '2014-01-04 05:11:33'),
(33, 1, '2014-01-04 06:17:17', '2014-01-04 06:17:17'),
(34, 1, '2014-01-22 18:35:11', '2014-01-22 18:35:11'),
(35, 1, '2014-02-27 16:21:49', '2014-02-27 16:21:49'),
(36, 1, '2014-02-28 07:46:01', '2014-02-28 07:46:01'),
(37, 1, '2014-02-28 07:47:43', '2014-02-28 07:47:43'),
(38, 1, '2014-02-28 07:50:20', '2014-02-28 07:50:20'),
(39, 1, '2014-02-28 07:52:12', '2014-02-28 07:52:12'),
(40, 1, '2014-02-28 07:54:30', '2014-02-28 07:54:30'),
(41, 1, '2014-02-28 07:55:28', '2014-02-28 07:55:28'),
(42, 1, '2014-02-28 07:56:33', '2014-02-28 07:56:33');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(10) unsigned NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `root` tinyint(1) NOT NULL,
  `gallery_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=134 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `active`, `imageable_id`, `imageable_type`, `name`, `root`, `gallery_id`, `created_at`, `updated_at`) VALUES
(7, 1, 0, '', 'EalQEbackground.jpg', 0, 4, '2013-12-30 11:10:23', '2013-12-30 11:10:23'),
(9, 1, 0, '', 'KHqyLrabota12.jpg', 1, 6, '2013-12-30 11:20:20', '2013-12-30 11:23:09'),
(10, 1, 0, '', 'XQx0fteplodoma.jpg', 1, 7, '2013-12-30 11:25:28', '2013-12-30 11:25:34'),
(11, 1, 0, '', 'yKaUbelectric1.jpg', 1, 8, '2013-12-30 11:27:20', '2013-12-30 11:27:26'),
(12, 1, 0, '', 'tZeBOteplodoma.jpg', 1, 9, '2013-12-30 11:28:51', '2013-12-30 11:29:06'),
(13, 1, 0, '', '30Hzuwatersistem.jpg', 1, 10, '2013-12-30 11:30:40', '2013-12-30 11:30:59'),
(14, 1, 0, '', 'JtLF6gazsistem.jpg', 1, 11, '2013-12-30 11:33:23', '2013-12-30 11:33:30'),
(15, 1, 0, '', 'q8FKbrabota1.jpg', 1, 12, '2013-12-30 11:35:25', '2013-12-30 11:35:30'),
(16, 1, 0, '', 'QFmaytehnologia.jpg', 1, 13, '2013-12-30 11:38:48', '2013-12-30 11:38:59'),
(17, 1, 0, '', 'ER5v3pol.jpg', 1, 14, '2013-12-30 11:40:27', '2013-12-30 11:40:32'),
(18, 1, 0, '', 'PFph330-2.jpg', 0, 14, '2013-12-30 11:40:48', '2013-12-30 11:40:48'),
(19, 1, 0, '', 'Za9rI30-4.jpg', 0, 14, '2013-12-30 11:40:48', '2013-12-30 11:40:48'),
(20, 1, 0, '', 'eSb32fasad1.jpg', 1, 15, '2013-12-30 11:42:02', '2013-12-30 11:42:08'),
(21, 1, 0, '', 'LEamGfasad2.jpg', 0, 15, '2013-12-30 11:42:36', '2013-12-30 11:42:36'),
(22, 1, 0, '', 'yqK1Sfasad3.jpg', 0, 15, '2013-12-30 11:42:36', '2013-12-30 11:42:36'),
(23, 1, 0, '', 'HgRgUfasad4.jpg', 0, 15, '2013-12-30 11:42:36', '2013-12-30 11:42:36'),
(24, 1, 0, '', 'HPdV6rem.jpg', 1, 16, '2013-12-30 11:43:49', '2013-12-30 11:43:55'),
(25, 1, 0, '', 'LGG6t30-4.jpg', 1, 17, '2013-12-30 13:28:41', '2013-12-30 13:28:49'),
(27, 1, 0, '', 'bZSOnsfatcer1.jpg', 1, 19, '2013-12-30 14:31:31', '2013-12-30 14:31:37'),
(28, 1, 0, '', 'JOIZBdrag1.jpg', 1, 20, '2013-12-30 15:38:36', '2013-12-30 15:41:14'),
(29, 1, 0, '', 'n8oKydrag2.jpg', 0, 20, '2013-12-30 15:41:08', '2013-12-30 15:41:14'),
(30, 1, 0, '', 'KiwEEdrag3.jpg', 0, 20, '2013-12-30 15:41:08', '2013-12-30 15:41:14'),
(31, 1, 0, '', 'dS7Hhnew1.jpg', 0, 18, '2013-12-30 15:50:25', '2014-02-27 16:02:32'),
(32, 1, 0, '', 'PgCUwnew2.jpg', 0, 18, '2013-12-30 15:50:25', '2014-02-27 16:02:32'),
(33, 1, 0, '', '28etunew3.jpg', 0, 18, '2013-12-30 15:50:25', '2014-02-27 16:02:32'),
(34, 1, 0, '', 'BvtbVtol1.jpg', 1, 21, '2013-12-30 15:53:50', '2013-12-30 15:56:02'),
(35, 1, 0, '', 'okxA0tol2.jpg', 0, 21, '2013-12-30 15:53:50', '2013-12-30 15:56:02'),
(36, 1, 0, '', 'FUy1Ptol3.jpg', 0, 21, '2013-12-30 15:53:50', '2013-12-30 15:56:02'),
(37, 1, 0, '', 'NqdCYtol5.jpg', 0, 21, '2013-12-30 15:53:50', '2013-12-30 15:56:02'),
(38, 1, 0, '', 'hbVUztol4.jpg', 0, 21, '2013-12-30 15:55:56', '2013-12-30 15:56:02'),
(39, 1, 0, '', 'IQuAnren1.jpg', 1, 22, '2013-12-30 16:00:39', '2013-12-30 16:00:46'),
(40, 1, 0, '', '0RnkOren2.jpg', 0, 22, '2013-12-30 16:00:39', '2013-12-30 16:00:46'),
(41, 1, 0, '', 'UQTdjren3.jpg', 0, 22, '2013-12-30 16:00:40', '2013-12-30 16:00:46'),
(42, 1, 0, '', 'Qp4Bnren4.jpg', 0, 22, '2013-12-30 16:00:40', '2013-12-30 16:00:46'),
(43, 1, 0, '', 'ZPpSoren5.jpg', 0, 22, '2013-12-30 16:00:40', '2013-12-30 16:00:46'),
(44, 1, 0, '', 'nxPUHchok1.jpg', 1, 23, '2013-12-30 16:04:29', '2013-12-30 16:05:46'),
(45, 1, 0, '', 'OR85zchok2.jpg', 0, 23, '2013-12-30 16:04:29', '2013-12-30 16:05:46'),
(46, 1, 0, '', 'KSTH4chok3.jpg', 0, 23, '2013-12-30 16:04:29', '2013-12-30 16:05:46'),
(47, 1, 0, '', '4mCMKchok4.jpg', 0, 23, '2013-12-30 16:04:29', '2013-12-30 16:05:46'),
(48, 1, 0, '', 'dOVO6chok5.jpg', 0, 23, '2013-12-30 16:04:29', '2013-12-30 16:05:46'),
(49, 1, 0, '', 'CCeSrcp1 (1).jpg', 0, 24, '2013-12-30 16:14:33', '2013-12-30 16:14:47'),
(50, 1, 0, '', 'cKkdtcp1.jpg', 1, 24, '2013-12-30 16:14:33', '2013-12-30 16:14:47'),
(51, 1, 0, '', 'MbcYhcp2.jpg', 0, 24, '2013-12-30 16:14:33', '2013-12-30 16:14:47'),
(52, 1, 0, '', 'mhqaocp3.jpg', 0, 24, '2013-12-30 16:14:33', '2013-12-30 16:14:47'),
(53, 1, 0, '', 'RxWMPcp4.jpg', 0, 24, '2013-12-30 16:14:33', '2013-12-30 16:14:47'),
(54, 1, 0, '', 'sKPEGcp5.jpg', 0, 24, '2013-12-30 16:14:33', '2013-12-30 16:14:47'),
(55, 1, 0, '', '3swUvcp6.jpg', 0, 24, '2013-12-30 16:14:33', '2013-12-30 16:14:47'),
(56, 1, 0, '', 'AIGt9cp7.jpg', 0, 24, '2013-12-30 16:14:33', '2013-12-30 16:14:47'),
(60, 1, 0, '', 'qPmOCcp12.jpg', 0, 24, '2013-12-30 16:14:33', '2013-12-30 16:14:47'),
(61, 1, 0, '', 'ocXFJcp13.jpg', 0, 24, '2013-12-30 16:14:33', '2013-12-30 16:14:47'),
(67, 1, 0, '', 'kHbOdmagamall.jpg', 0, 25, '2013-12-30 16:32:04', '2013-12-30 16:32:11'),
(68, 1, 0, '', '688xtmall.jpg', 0, 25, '2013-12-30 16:32:04', '2013-12-30 16:32:11'),
(69, 1, 0, '', 'MXerdmall1 (1).jpg', 0, 25, '2013-12-30 16:32:04', '2013-12-30 16:32:11'),
(70, 1, 0, '', 'eHSGumall1.jpg', 1, 25, '2013-12-30 16:32:04', '2013-12-30 16:32:11'),
(71, 1, 0, '', 'DxvNqmall31.jpg', 0, 25, '2013-12-30 16:32:04', '2013-12-30 16:32:11'),
(72, 1, 0, '', 'odvPGdrag2.jpg', 0, 5, '2013-12-30 17:01:58', '2014-02-27 16:03:20'),
(73, 1, 0, '', 'rekxfdrag3.jpg', 0, 5, '2013-12-30 17:01:58', '2014-02-27 16:03:20'),
(75, 1, 0, '', 'HBOiemall.jpg', 0, 5, '2013-12-30 17:01:58', '2014-02-27 16:03:20'),
(80, 1, 0, '', 'i8pq9362.jpg', 1, 29, '2014-01-04 05:03:33', '2014-01-04 05:03:50'),
(81, 1, 0, '', 'bG2l6logo.gif', 1, 30, '2014-01-04 05:07:44', '2014-01-04 05:07:49'),
(82, 1, 0, '', 'UBlqGMMall-0.jpg', 1, 31, '2014-01-04 05:09:50', '2014-01-04 05:09:56'),
(83, 1, 0, '', '9GWyM1958.jpg', 1, 32, '2014-01-04 05:11:47', '2014-01-04 05:12:04'),
(85, 1, 0, '', 'rE1gldemo.slide1gk-is-118.jpg', 1, 33, '2014-01-09 20:12:01', '2014-01-09 20:12:06'),
(86, 1, 0, '', '9rkYTdemo.slide3gk-is-118.jpg', 1, 27, '2014-01-09 20:14:44', '2014-01-09 20:14:49'),
(91, 1, 0, '', 'SZ113EBxj1neww.jpg', 1, 18, '2014-02-27 16:02:27', '2014-02-27 16:02:32'),
(92, 1, 0, '', 'L6jxF2ydKobuildere.jpg', 1, 5, '2014-02-27 16:03:16', '2014-02-27 16:03:20'),
(93, 1, 0, '', '5SmTw0JKjXlogo (1).png', 1, 28, '2014-02-27 16:06:28', '2014-02-27 16:06:34'),
(94, 1, 0, '', 'M7qZT7Y8Jmdemo.slide2gk-is-118.jpg', 1, 26, '2014-02-27 16:08:13', '2014-02-27 16:08:19'),
(95, 1, 0, '', 'mR3cLDesert.jpg', 1, 36, '2014-02-28 07:46:49', '2014-02-28 07:46:52'),
(96, 1, 0, '', 'COfkxФото0439.jpg', 0, 42, '2014-02-28 07:59:58', '2014-02-28 08:00:20'),
(97, 1, 0, '', 'HJPRuФото0440.jpg', 1, 42, '2014-02-28 08:00:15', '2014-02-28 08:00:20'),
(98, 1, 0, '', 'OBoOXФото0447.jpg', 0, 42, '2014-02-28 08:00:46', '2014-02-28 08:00:46'),
(99, 1, 0, '', 'y4n3zФото0467.jpg', 0, 42, '2014-02-28 08:01:31', '2014-02-28 08:01:31'),
(100, 1, 0, '', 'pQgAEФото0470.jpg', 0, 42, '2014-02-28 08:02:05', '2014-02-28 08:02:05'),
(101, 1, 0, '', '7SKnZФото0479.jpg', 0, 42, '2014-02-28 08:02:32', '2014-02-28 08:02:32'),
(102, 1, 0, '', 'XUyCxФото0480.jpg', 0, 42, '2014-02-28 08:02:46', '2014-02-28 08:02:46'),
(103, 1, 0, '', 'sw3uXФото0481.jpg', 0, 42, '2014-02-28 08:03:04', '2014-02-28 08:03:04'),
(104, 1, 0, '', 'TElVHФото0506.jpg', 0, 42, '2014-02-28 08:08:01', '2014-02-28 08:08:01'),
(105, 1, 0, '', 'jyTOxФото0513.jpg', 0, 42, '2014-02-28 08:08:01', '2014-02-28 08:08:01'),
(106, 1, 0, '', '6c2NvФото0514.jpg', 0, 42, '2014-02-28 08:08:01', '2014-02-28 08:08:01'),
(107, 1, 0, '', 'uI2hBФото0523.jpg', 0, 42, '2014-02-28 08:08:01', '2014-02-28 08:08:01'),
(108, 1, 0, '', 'meLfXФото0525.jpg', 0, 42, '2014-02-28 08:08:01', '2014-02-28 08:08:01'),
(109, 1, 0, '', 'omnyaФото0526.jpg', 0, 42, '2014-02-28 08:08:01', '2014-02-28 08:08:01'),
(110, 1, 0, '', 'HBdAwФото0530.jpg', 0, 42, '2014-02-28 08:08:01', '2014-02-28 08:08:01'),
(111, 1, 0, '', 'CLbXMФото0543.jpg', 0, 42, '2014-02-28 08:08:01', '2014-02-28 08:08:01'),
(112, 1, 0, '', 'JxwswФото0020.jpg', 0, 42, '2014-02-28 08:09:10', '2014-02-28 08:09:10'),
(113, 1, 0, '', '6YtVmФото0021.jpg', 0, 42, '2014-02-28 08:09:10', '2014-02-28 08:09:10'),
(114, 1, 0, '', 'FK21yФото0022.jpg', 0, 42, '2014-02-28 08:09:10', '2014-02-28 08:09:10'),
(115, 1, 0, '', 'TswOcФото0562.jpg', 1, 40, '2014-02-28 08:10:47', '2014-02-28 08:11:07'),
(116, 1, 0, '', 'GI8IGФото0571.jpg', 0, 40, '2014-02-28 08:10:47', '2014-02-28 08:11:07'),
(117, 1, 0, '', 'bCcHGФото0575.jpg', 0, 40, '2014-02-28 08:10:47', '2014-02-28 08:11:07'),
(118, 1, 0, '', 'b20y0Фото0558.jpg', 0, 40, '2014-02-28 08:10:47', '2014-02-28 08:11:07'),
(119, 1, 0, '', 'XsbjDФото0559.jpg', 0, 40, '2014-02-28 08:10:47', '2014-02-28 08:11:07'),
(120, 1, 0, '', 'L9oDdФото0003.jpg', 0, 40, '2014-02-28 08:13:37', '2014-02-28 08:13:37'),
(121, 1, 0, '', 'nHGY1Фото0004 - копия.jpg', 0, 40, '2014-02-28 08:13:37', '2014-02-28 08:13:37'),
(122, 1, 0, '', 'HBvr1Фото0008.jpg', 0, 40, '2014-02-28 08:13:37', '2014-02-28 08:13:37'),
(123, 1, 0, '', 'Lq34yФото0014.jpg', 0, 40, '2014-02-28 08:13:37', '2014-02-28 08:13:37'),
(124, 1, 0, '', 'DBFW5Фото0015.jpg', 0, 40, '2014-02-28 08:13:37', '2014-02-28 08:13:37'),
(125, 1, 0, '', 'Ks3qwФото0016.jpg', 0, 40, '2014-02-28 08:13:37', '2014-02-28 08:13:37'),
(126, 1, 0, '', 'ztrM0Фото0018.jpg', 0, 40, '2014-02-28 08:15:12', '2014-02-28 08:15:12'),
(127, 1, 0, '', 'hcO3SФото0019.jpg', 0, 40, '2014-02-28 08:15:44', '2014-02-28 08:15:44'),
(128, 1, 0, '', 'meV7IФото0001.jpg', 0, 39, '2014-02-28 08:15:58', '2014-02-28 08:15:58'),
(131, 1, 0, '', '9XeUQФото0256.jpg', 0, 38, '2014-02-28 08:19:19', '2014-02-28 08:29:34'),
(132, 1, 0, '', 'PMj5F000005468189.jpg', 1, 38, '2014-02-28 08:29:31', '2014-02-28 08:29:34'),
(133, 1, 0, '', 'o8JTf000005468189.jpg', 1, 37, '2014-02-28 08:38:56', '2014-02-28 08:39:00');

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
('2013_12_17_112042_create-users-table', 1),
('2013_12_19_082047_create_galleries_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `occupations`
--

CREATE TABLE IF NOT EXISTS `occupations` (
`id` int(10) unsigned NOT NULL,
  `name_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `parent` int(11) NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL DEFAULT '10',
  `gallery_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `occupations`
--

INSERT INTO `occupations` (`id`, `name_ru`, `name_ro`, `description_ru`, `description_ro`, `active`, `parent`, `position`, `gallery_id`, `created_at`, `updated_at`) VALUES
(3, 'Строительство жилых и коммерческих зданий', 'Construcția clădirilor rezidențiale și comerciale', '<p>Аnser-Construct.srl - динамично развивающаяся многопрофильная компания. Anser-Constгct. srl вошла в строительный бизнес и активно диверсифицировала свою деятельность в данном секторе, развивая следующие направления:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Строительство административных зданий</p>\r\n	</li>\r\n	<li>\r\n	<p>Строительство временных зданий и сооружений</p>\r\n	</li>\r\n	<li>\r\n	<p>Строительство жилых зданий</p>\r\n	</li>\r\n	<li>\r\n	<p>Строительство коммерческих зданий</p>\r\n	</li>\r\n	<li>\r\n	<p>Строительство промышленных зданий и сооружений</p>\r\n	</li>\r\n</ul>\r\n', '', 1, 0, 10, 5, '2013-12-30 11:17:04', '2014-02-27 20:45:16'),
(4, 'Отделочные работы', 'Lucrări de finisare', '<p>Одной из&nbsp;гарантий того, что фирма выполнит взятые на&nbsp;себя обязательства, является срок ее&nbsp;существования на&nbsp;рынке и те объекты, которые сейчас украшают облик нашего города.</p>\r\n', '', 1, 0, 10, 6, '2013-12-30 11:19:33', '2014-02-27 20:46:46'),
(5, 'Инженерные сети и коммуникации', 'Rețele inginerice și de comunicații', '<p>Наша компания осуществляет следующие виды работ по инженерным коммуникациям</p>\r\n', '', 1, 0, 10, 7, '2013-12-30 11:24:31', '2014-02-27 20:49:06'),
(6, 'Монтаж электрических сетей', 'Montarea rețelelor electrice', '<p>&nbsp;Монтаж энергетических и электрических сетей и коммуникаций.&nbsp; :</p>\r\n\r\n<ul>\r\n	<li>&nbsp;осветительные, ВРУ, &nbsp;счетчики электроэнергии, автоматы, пускатели,&nbsp;автоматические выключатели, контроллеры и др.</li>\r\n	<li>&nbsp;Заключаем договора на диагностику и обслуживание электрических сетей и коммуникаций</li>\r\n</ul>\r\n', '', 1, 5, 10, 8, '2013-12-30 11:26:50', '2014-02-27 20:58:01'),
(7, 'Системы тепловых сетей и коммуникаций', 'Sisteme termice și de comunicații', '<p>Монтаж отопительных систем, прокладка трубопровода, строительство тепловых сетей и коммуникаций:</p>\r\n\r\n<ul>\r\n	<li>трубопроводная арматура: трубы медные, металлические и пластиковые, вентили, краны, задвижки, клапаны, радиаторы отопления, теплоизолированные трубы;</li>\r\n	<li>измерительные приборы: счетчики газа, тепла, термометры и манометры, регуляторы температуры, термостаты;</li>\r\n	<li>специализированное оборудование: дымоходы, вытяжки, расширительные баки;</li>\r\n	<li>&nbsp;строительство тепловых сетей.</li>\r\n</ul>\r\n', '', 1, 5, 10, 9, '2013-12-30 11:28:23', '2014-02-27 20:59:24'),
(8, 'Системы водоснабжения и канализации', 'Sisteme de alimentare cu apă și de canalizare', '<p>Монтаж систем водоснабжения и канализации, прокладка трубопровода, строительство сетей и коммуникаций:</p>\r\n\r\n<ul>\r\n	<li>трубы и арматура: металлические, медные и пластиковые трубы различного диаметра, вентиля, задвижки, краны, предохранительные клапаны, сантехника и другая запорная арматура;</li>\r\n	<li>специальное оборудование: электродвигатели, насосы, помпы, фильтры очистки воды, баки и резервуары;</li>\r\n	<li>конструкции водоснабжения: строительство водопроводов и монтаж внутренних коммуникаций водоснабжения и канализации, бурение скважин, строительство водозаборных и водоочистных сооружений.</li>\r\n	<li>&nbsp;Заключаем договора на диагностику и обслуживание систем канализации и коммуникаций водоснабжения.</li>\r\n</ul>\r\n', '', 1, 5, 10, 10, '2013-12-30 11:30:08', '2014-02-27 21:01:23'),
(9, 'Системы газоснабжения', 'Sisteme de alimentare cu gaz', '<p>Монтаж систем газоснабжения:</p>\r\n\r\n<ul>\r\n	<li>Автономная газификация объектов любой сложности;</li>\r\n	<li>Оборудование и установка автономных газовых систем под ключ;</li>\r\n	<li>Монтаж и последующее сопровождение объектов автономного газоснабжения по всей территории Молдовы выполняется профессиональными бригадами;</li>\r\n	<li>Оформление технической документации, регистрация и сдача объектов;</li>\r\n	<li>Гарантийное и послегарантийное, сервисное обслуживание объектов с автономной газификацией;</li>\r\n</ul>\r\n', '', 1, 5, 10, 11, '2013-12-30 11:32:50', '2014-02-27 21:01:59'),
(10, 'Механизированные штукатурные работы', 'Lucrări mecanizate de tencuieală', '<p>Машинное оштукатуривание поверхностей специалистами нашей компании - это быстро, качественно и аккуратно.</p>\r\n\r\n<p>Слаженная работа всех специалистов помогает достичь непревзойденного эффекта и уровня предоставляемых услуг по оштукатуриванию поверхностей.</p>\r\n\r\n<p><strong>СКОРОСТЬ</strong></p>\r\n\r\n<p>Высокая скорость проводимых работ достигнута, благодаря механизации многих процессов, - к примеру, перемешивание и нанесение раствора.</p>\r\n\r\n<p>Использование профессионального немецкого оборудования.</p>\r\n\r\n<p>Используемый штукатурный раствор на основе гипса дает возможность без промежуточного армирования нанести за один прием слой штукатурки 5-7см.</p>\r\n\r\n<p><strong>КАЧЕСТВО</strong></p>\r\n\r\n<p>Гипсовый штукатурный раствор придает смеси большую пластичность, влияющую, в свою очередь, на качество конечного результата. Иными словами, исключается возможность возникновения неровностей и &laquo;трещин&raquo; в виде сеточки.</p>\r\n\r\n<p>Раствор на основе гипса - экологически чистый, не содержит вредных компонентов, регулирует влажность помещения и создает благоприятный микроклимат.</p>\r\n\r\n<p>Нанесение под высоким давлением позволяет улучшить сцепление с поверхностью.</p>\r\n\r\n<p><strong>ЭКОНОМИЯ</strong></p>\r\n\r\n<p>В виду того, что большинство процессов стали механизированными, уменьшилось количество рабочих, принимающих участие в штукатурных работах. Это позволяет сэкономить время и средства на оплату предоставляемых услуг.</p>\r\n\r\n<p>Специалисты нашей компании заранее проведут все расчеты материалов, необходимых для оштукатуривания заданной поверхности. Это позволяет избежать дополнительных трат и значительно сэкономит время на проведение работ.</p>\r\n\r\n<p>После штукатурных работ не требуется последующее шпатлевание поверхности, что позволяет значительно сэкономить на материалах .</p>\r\n\r\n<p>Один звонок в нашу фирму, и работы начнутся незамедлительно. Все максимально быстро и качественно, согласно нормативам, предъявляемым к данному виду услуг.</p>\r\n', '', 1, 4, 10, 12, '2013-12-30 11:34:50', '2014-02-27 20:50:22'),
(11, 'Полусухая стяжка', 'Șapă semi-uscată', '<p>Использование новейшего оборудования и технологических процессов, а также полная автоматизация работ, позволяет говорить о преимуществе полусухой стяжки полов перед другими способами выравнивания поверхности.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Наша компания, специализируясь в данной области, может предложить проведение работ по устройству стяжки полов по доступным ценам. Все работы выполняются высококлассными специалистами, с использованием специального оборудования.</p>\r\n\r\n<p>Полусухая стяжка пола с фиброволокном по немецкой технологии, которая будет проведена мастерами нашей фирмы, имеет ряд преимуществ, среди которых:</p>\r\n\r\n<p><strong>Преимущества</strong></p>\r\n\r\n<p>Скорость выполнения работ. К примеру, одна бригада наших специалистов способна за смену обработать от 150 до 300кв.м поверхности пола.</p>\r\n\r\n<p>Использование специальной затирочной машины непосредственно во время производства стяжки, дает возможность не только избежать возникновения пустот и трещин, но и позволяет значительно сэкономить на приобретении дополнительных самовыравнивающихся материалов.</p>\r\n\r\n<p>Для приготовления раствора для стяжки пола необходимо минимальное количество воды. Ровно столько, сколько требуется для процесса гидратации цемента.</p>\r\n\r\n<p>Добавление в раствор фиброволокна позволяет сделать стяжку полов более долговечной и устойчивой к образованию нежелательных трещин.</p>\r\n\r\n<p>Существует возможность укладки электрического кабеля и теплых полов.</p>\r\n\r\n<p>Раствор может подаваться до 30 этажа.</p>\r\n\r\n<p>Преимуществом полусухой стяжки с фиброволокном можно считать ее возможность уже через 12 часов после проведения работ выдержать пешеходную нагрузку.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 1, 4, 10, 13, '2013-12-30 11:37:37', '2014-02-27 20:51:33'),
(12, 'Промышленные полы', 'Podele industriale', '<p>Полы изготавливаются нашей компанией из самого качественного бетона с абсолютно ровной поверхностью. Такой бетонный пол меньше склонен к истиранию, что расширяет его сферу применения. Бетонные полы используются в объектах сельского хозяйства, в промышленных помещениях, торговых центрах.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Высокие технические характеристики и короткие сроки укладки сделали бетонный пол популярным современным покрытием.</p>\r\n\r\n<p>Бетонные полы устроены во всех крупных зданиях, которые были возведены в последние десять лет. Выбор застройщиков очевиден: такие полы удовлетворяют сразу нескольким важным требованиям. Прежде всего, бетонный пол является надежным и прочным основанием, способным выдерживать большие нагрузки без потери своих технических свойств. Немаловажным является и сравнительно небольшая стоимость пола при возможности создать бетонный пол с прекрасными эстетическими характеристиками. Таким образом, можно изготовить ровный пол, не требующий финишной отделки.&nbsp;</p>\r\n', '', 1, 4, 10, 14, '2013-12-30 11:39:48', '2014-02-27 20:52:20'),
(13, 'Утепление фасадов', 'Termoizolarea fațadelor', '<p>За эти годы у нас собрался высококвалифицированный коллектив монтажников и одним из основных видов нашей деятельности стало&nbsp;<strong>утепление фасадов</strong>&nbsp;и отделка не только жилых домов и коттеджей, но и промышленных, административно-офисных зданий.</p>\r\n\r\n<p>Наше сотрудничество начинается с обеспечения полной комплектации системы утепления фасада высокотехнологичными и качественными материалами. Затем квалифицированные сотрудники нашей компании производят монтаж утепления в соответствии с технологическими картами, разработанными для каждой конкретной системы.Фасад &mdash; это лицо здания. И от того, как он будет оформлен, зависит и мнение о вас, или вашей компании.</p>\r\n\r\n<p>Уникальная архитектура вашего здания всегда будет радовать глаз входящих, и вызывать вопросы о том, как удалось этого добиться. В тесном сотрудничестве с дизайнерами-архитекторами наша компания предлагает клиентам воплотить их самые сокровенные мечты.</p>\r\n', '', 1, 4, 10, 15, '2013-12-30 11:41:34', '2014-02-27 21:03:11'),
(14, 'Ремонт квартир', 'Reparație', '<p>Одно из основных направлений услуг ─ это комплексный ремонт квартир. Вся хлопотливая и трудная работа будет реализована за вас нашими профессионалами. В диапазон этих услуг входят характерные виды ремонтных работ от момента создания первых чертежей проекта до этапа его сдачи: дизайн интерьера, составление графика работ, сметы и т. п. Преимущество, в делегирование полномочий очевидно ─ подав заявку на комплексный ремонт, вы сберегаете своё время, деньги и нервы. Работа кипит, а вы между тем занимаетесь своими делами и продолжаете вести привычный образ жизни.</p>\r\n\r\n<p>Комплексный ремонт квартир по сути, это может быть любой тип ремонта, разница в том, что организация ремонта под ключ полностью ложиться на наши плечи. Это закупка и доставка материалов на объект, вывоз строительного мусора. Контроль за работой возможных субподрядных организаций. Например если вы закажите окна, металлическую входную дверь в выбранной вами компании или подобранной нами, мы проследим за качеством установки и примем работу. А так же урегулируем все вопросы с вашей местной управляющей организацией - это может быть отключение стояков для замены радиаторов отопления и многие другие нюансы.</p>\r\n', '', 1, 4, 10, 16, '2013-12-30 11:43:23', '2014-02-27 20:56:57');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `gallery_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `name`, `description`, `active`, `gallery_id`, `created_at`, `updated_at`) VALUES
(2, '"Basconlux" S.R.L.', '', 1, 28, '2014-01-04 05:00:04', '2014-01-04 05:10:15'),
(3, '"Moldconstruct Market" S.R.L.', '', 1, 29, '2014-01-04 05:02:55', '2014-01-04 05:10:31'),
(4, 'S.A. "Termocom"', '', 1, 30, '2014-01-04 05:06:38', '2014-01-04 05:07:44'),
(5, '"SHAN LIAN  INTERNATIONAL GROUP" S.R.L', '', 1, 31, '2014-01-04 05:09:38', '2014-01-04 05:09:50'),
(6, '"Acar-Construct" S.R.L.', '', 1, 32, '2014-01-04 05:11:33', '2014-01-04 05:11:47');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(200) NOT NULL,
  `value` text CHARACTER SET utf8 NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `updated_at`, `created_at`) VALUES
(1, 'title', 'Anser Construct S.R.L', '2014-02-28 09:03:12', '0000-00-00 00:00:00'),
(2, 'description_ru', '<p>Наша компания основана в Кишиневе в 2006 году. Главные направления деятельности компании это - строительство, ремонт и реконструкция, газовые и водопроводные коммуникации. За время нашей деятельности мы завершили более 30 объектов различных типов - жилых, промышленных, торговых. Сплоченный, профессиональный коллектив позволяет выполнять работы строго по согласованному графику.</p>\r\n', '2014-02-28 09:03:12', '0000-00-00 00:00:00'),
(3, 'description_ro', '<p>Compania de construcţii SRL &ldquo;<strong>Anser-Construct</strong>&rdquo; a fost creată in 2006 in Chișinău.&nbsp;Principalele activități ale companiei fiind - lucrari de construcţie, reparație și reconstrucție,&nbsp;trasarea comunicaţiilor de gaz și apă.&Icirc;n timpul activității am finalizat mai mult de 30 de obiecte de diferite tipuri -&nbsp;rezidentiale, industriale, comerciale. Pe parcursul anilor de activitate am ciştigat &icirc;ncrederea multor clienți ce nu regretă &icirc;n prezent alegerea facută.</p>\r\n', '2014-02-28 09:03:12', '0000-00-00 00:00:00'),
(4, 'mobile', '68121171', '2014-02-28 09:03:12', '0000-00-00 00:00:00'),
(5, 'phone', '54 55 14', '2014-02-28 09:03:12', '0000-00-00 00:00:00'),
(6, 'email', 'anserconstruct@mail.ru', '2014-02-28 09:03:12', '0000-00-00 00:00:00'),
(7, 'language', 'ru', '2014-02-28 09:03:12', '0000-00-00 00:00:00'),
(8, 'vacant_ru', '<p>Наша компания предлагает работу следующим специалистам:</p>\r\n\r\n<ul>\r\n	<li>Штукатур</li>\r\n	<li>Отделочник</li>\r\n	<li>Каменщики</li>\r\n	<li>Сантехник</li>\r\n	<li>Сварщик</li>\r\n	<li>Экскаваторщик</li>\r\n</ul>\r\n', '2014-02-28 09:03:12', '0000-00-00 00:00:00'),
(9, 'vacant_ro', '', '2014-02-28 09:03:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.md', '$2y$10$qHxlHrQfF0O4.bKW.HGe4.W4z6ix4B4r6P6mePAoIUHxw2UucNIUW', '2013-12-29 18:51:49', '2013-12-29 18:51:49');

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE IF NOT EXISTS `works` (
`id` int(10) unsigned NOT NULL,
  `name_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `name_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `description_ro` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `lat` text COLLATE utf8_unicode_ci NOT NULL,
  `lng` text COLLATE utf8_unicode_ci NOT NULL,
  `gallery_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`id`, `name_ru`, `name_ro`, `description_ru`, `description_ro`, `active`, `lat`, `lng`, `gallery_id`, `created_at`, `updated_at`) VALUES
(3, 'Жилой комплекс "New Sity"', 'Complex rezidențial "New Sity"', '', '', 1, '47.04329951326663', '28.856896050274372', 18, '2013-12-30 14:16:34', '2014-02-27 21:05:18'),
(4, 'Жилой комплекс по ул. Сфатул Цэрий, 59', 'Complex rezidențial str. Sfatul Țării, 59', '', '', 1, '47.02993071829912', '28.828838006593287', 19, '2013-12-30 14:28:02', '2014-02-27 21:06:41'),
(5, 'Жилой комплекс "Dragalina-1"', 'Complex rezidențial "Dragalina-1"', '', '', 1, '46.9725081824561', '28.851228626444936', 20, '2013-12-30 15:37:25', '2014-02-27 21:07:02'),
(6, 'Жилой комплекс по ул. Толстого 24/1', 'Complex rezidențial str. Lev Tolstoi, 24/1', '', '', 1, '47.01038797137893', '28.84141618385911', 21, '2013-12-30 15:52:01', '2014-02-27 21:08:21'),
(7, 'Элитный загородный посёлок "Renesans Sity"', '"Renesans Sity"', '', '', 1, '47.05848985054722', '28.75834096223116', 22, '2013-12-30 15:57:32', '2014-02-27 21:14:32'),
(8, 'Элитный жилой комплекc "Чокырлия"', 'Complex rezidential de lux "Ciocîrlia"', '', '', 1, '47.00911915244791', '28.802282586693764', 23, '2013-12-30 16:01:52', '2014-02-27 21:13:52'),
(9, 'Coliseum Palace – Дом, достойный Вас', 'Coliseum Palace', '<p>&quot;Для счастья нужно большое сердце, и не надо большой комнаты&quot;, - гласит древняя китайская поговорка. Но&nbsp; очевидно, что в современной жизни для счастья нужна и &quot;большая&quot; комната,&nbsp; где будет уютно и спокойно вам и вашим близким.</p>\r\n', '', 1, '47.04888034504209', '28.869595304131508', 24, '2013-12-30 16:09:22', '2014-02-27 21:10:49'),
(10, '"Мегаполис-молл"', '"Megapolis-Mall"', '<p>MEGAPOLIS MALL - это единственный проект в Республике Молдова подобного масштаба, современный и новый, соответствующий европейским стандартам и последним требованиям в этой области.</p>\r\n', '', 1, '47.07072184406234', '28.8885395221223', 25, '2013-12-30 16:31:06', '2014-02-27 21:11:32'),
(14, '"Pereflex Market"', '"Pereflex Market"', '', '', 1, '47.00939440870049', '28.878031857311726', 37, '2014-02-28 07:47:43', '2014-02-28 07:50:16'),
(15, 'Жилой дом по улице "Bernardazzi 83"', 'Casa de locuit pe strada "Bernardazzi 83"', '', '', 1, '47.01696111391461', '28.826272264122963', 38, '2014-02-28 07:50:20', '2014-02-28 08:18:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
 ADD PRIMARY KEY (`id`), ADD KEY `gallery_id` (`gallery_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`), ADD KEY `images_gallery_id_foreign` (`gallery_id`);

--
-- Indexes for table `occupations`
--
ALTER TABLE `occupations`
 ADD PRIMARY KEY (`id`), ADD KEY `occupations_gallery_id_foreign` (`gallery_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
 ADD PRIMARY KEY (`id`), ADD KEY `partners_gallery_id_foreign` (`gallery_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
 ADD PRIMARY KEY (`id`), ADD KEY `works_gallery_id_foreign` (`gallery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `occupations`
--
ALTER TABLE `occupations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `banners`
--
ALTER TABLE `banners`
ADD CONSTRAINT `banners_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`);

--
-- Ограничения внешнего ключа таблицы `images`
--
ALTER TABLE `images`
ADD CONSTRAINT `images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`);

--
-- Ограничения внешнего ключа таблицы `occupations`
--
ALTER TABLE `occupations`
ADD CONSTRAINT `occupations_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`);

--
-- Ограничения внешнего ключа таблицы `partners`
--
ALTER TABLE `partners`
ADD CONSTRAINT `partners_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`);

--
-- Ограничения внешнего ключа таблицы `works`
--
ALTER TABLE `works`
ADD CONSTRAINT `works_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;