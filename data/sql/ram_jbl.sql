-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2013 at 11:37 AM
-- Server version: 5.1.47
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ram_jbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_user` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `admin_user`, `admin_pass`) VALUES
(1, 'super', '1b3231655cebb7a1f783eddf27d254ca');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `status`, `updated_at`, `created_at`) VALUES
(1, 'DAK<br>Canned Meats', 'image.jpg', 0, '2011-09-27 15:43:02', '2011-09-27 15:43:02'),
(2, 'DAK<br>Hotdog & Cocktail Sausages', 'image.jpg', 0, '2011-09-27 15:43:22', '2011-09-27 15:43:22'),
(3, 'Pietro Coricelli', 'image.jpg', 0, '2011-09-27 15:43:48', '2011-09-27 15:43:48'),
(4, 'Pietro Coricelli<br>The Italian Art of Olive Oil', 'image.jpg', 0, '2011-09-27 15:45:17', '2011-09-27 15:45:17'),
(5, 'Pietro Coricelli<br>Extra Virgin Olive Oil Range', 'image.jpg', 0, '2011-09-27 15:45:42', '2011-09-27 15:45:42'),
(6, 'Pietro Coricelli<br>Fruttato Gran Classe', 'image.jpg', 0, '2011-09-27 15:46:02', '2011-09-27 15:46:02'),
(7, 'Pietro Coricelli<br>Aceto Balsamico di Modena', 'image.jpg', 0, '2011-09-27 15:46:28', '2011-09-27 15:46:28'),
(8, 'Pietro Coricelli<br>100% Pure Olive Oil', 'image.jpg', 0, '2011-09-27 15:46:53', '2011-09-27 15:46:53'),
(9, 'Pietro Coricelli<br>Extra Virgin Olive Oil', 'image.jpg', 0, '2011-09-27 15:47:15', '2011-09-27 15:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `image`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Olive Oil, Extra Vergin Oil &amp; Balsamic Vinegar', 'image.jpg', 1, '2011-09-27 15:19:33', '2011-09-27 15:17:44'),
(2, 'Maasdam Cheese &amp; Edam Loaves', 'image.jpg', 1, '2011-09-27 15:19:34', '2011-09-27 15:18:27'),
(3, 'Pasta', 'image.jpg', 1, '2011-09-27 15:19:35', '2011-09-27 15:18:55'),
(4, 'Canned Tomatoes &amp; Passata', 'image.jpg', 1, '2011-09-27 15:19:36', '2011-09-27 15:19:29'),
(5, 'Canned Meats &amp; Cooked Chicken Breast', 'image.jpg', 1, '2011-09-27 15:22:27', '2011-09-27 15:20:21'),
(6, 'Canned Vegetables', 'image.jpg', 1, '2011-09-27 15:22:28', '2011-09-27 15:20:58'),
(7, 'Wet Cat &amp; Dog Food', 'image.jpg', 1, '2011-09-27 15:22:29', '2011-09-27 15:21:32'),
(8, 'Canned Fruit, Artichokes &amp; Mashrooms', 'image.jpg', 1, '2011-09-27 15:22:30', '2011-09-27 15:22:17'),
(9, 'Italian Salami', 'image.jpg', 1, '2011-09-27 15:28:05', '2011-09-27 15:24:02'),
(10, '&nbsp;', 'image.jpg', 0, '2011-09-27 18:52:52', '2011-09-27 15:26:11'),
(11, 'Olives', 'image.jpg', 1, '2011-09-27 15:27:57', '2011-09-27 15:26:50'),
(12, 'Sliced &amp; Grated Cheese', 'image.jpg', 1, '2011-09-27 15:27:56', '2011-09-27 15:27:36'),
(13, 'Caviar', 'image.jpg', 0, '2011-09-27 18:48:38', '2011-09-27 15:28:46'),
(14, 'Tuna &amp; Corn Beef', 'image.jpg', 0, '2011-09-27 18:48:38', '2011-09-27 15:29:07'),
(15, 'Italian Mortadella', 'image.jpg', 0, '2011-09-27 18:48:18', '2011-09-27 15:29:30'),
(16, 'Smoked Salmon &amp; Trimmings', 'image.jpg', 0, '2011-09-27 18:48:17', '2011-09-27 15:29:57'),
(17, 'Juices, Ice Teas &amp; Nectars', 'image.jpg', 0, '2011-09-27 18:48:17', '2011-09-27 15:31:03'),
(18, 'Grated Cheese', 'image.jpg', 0, '2011-09-27 18:48:16', '2011-09-27 15:31:28'),
(19, 'Granny''s Pride Honey &amp; Carob Syrup', 'image.jpg', 0, '2011-09-27 18:48:16', '2011-09-27 15:32:05'),
(20, 'Jam, Marmalade &amp; Jelly', 'image.jpg', 1, '2011-09-30 17:54:22', '2011-09-27 15:32:30'),
(21, 'Cheddar Cheeses', 'image.jpg', 0, '2011-09-27 18:35:27', '2011-09-27 15:33:49'),
(22, 'Canned Mussels', 'image.jpg', 0, '2011-09-27 18:35:27', '2011-09-27 15:34:16'),
(23, 'Pepato &amp; Romano Cheese', 'image.jpg', 0, '2011-09-27 18:35:28', '2011-09-27 15:34:42'),
(24, 'Olives', 'image.jpg', 0, '2011-09-27 18:35:29', '2011-09-27 15:35:05'),
(25, 'Cat Litter', 'image.jpg', 0, '2011-09-27 18:35:30', '2011-09-27 15:37:02'),
(26, 'Sun Flower Oils', 'image.jpg', 0, '2011-09-27 18:35:31', '2011-09-27 15:37:27'),
(27, 'Prosciutto Crudo', 'image.jpg', 0, '2011-09-27 18:35:32', '2011-09-27 15:37:58'),
(28, 'Various Cheeses', 'image.jpg', 0, '2011-09-27 18:35:33', '2011-09-27 15:38:25'),
(29, 'UHT &amp; Flavoured Milk', 'image.jpg', 0, '2011-09-27 18:35:33', '2011-09-27 15:39:21'),
(30, 'Salami', 'image.jpg', 0, '2011-09-27 18:35:34', '2011-09-27 15:39:42'),
(31, 'Italian Parmigiano Reggiano &amp; Grana Padano Cheese', 'image.jpg', 0, '2011-09-27 18:35:24', '2011-09-27 15:40:16');
