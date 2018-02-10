-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 06:38 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) DEFAULT NULL,
  `category` enum('book','stationary') DEFAULT NULL,
  `purchase_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `purchase_time`) VALUES
(1, 'wings on fire', 'book', '2017-07-21 17:19:48'),
(2, 'half girlfriend', 'book', '2017-07-21 17:19:48'),
(3, 'pen', 'stationary', '2017-07-21 17:19:48'),
(4, 'school bag', 'stationary', '2017-07-21 17:19:48'),
(5, 'harry_potter', 'book', '2017-07-21 17:19:48'),
(6, 'tiffin', 'stationary', '2017-07-21 17:19:48'),
(7, 'sachin', 'book', '2017-07-21 17:51:09'),
(8, 'pencil_box', 'stationary', '2017-07-21 17:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `first_name` char(20) NOT NULL,
  `last_name` char(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `passwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `phone`, `registration_time`, `passwd`) VALUES
(1, 'kapil98arora@gmail.com', 'kapil', 'arora', 9587267827, '2017-07-21 17:47:47', NULL),
(2, 'nikhil2004arora@gmail.com', 'nikhil', 'king', 8955924202, '2017-07-21 08:13:13', NULL),
(3, 'arorag0769@gmail.com', 'mukes', 'king', 9785674420, '2017-07-21 08:14:04', NULL),
(4, 'abishek1601arora@gmail.com', 'abishek', 'king', 9610858300, '2017-07-21 08:14:41', NULL),
(5, 'ayush98arora@gmail.com', 'ayush', 'arora', 9587267457, '2017-07-21 17:50:12', NULL),
(6, 'vivyan98arora@gmail.com', 'vivyan', 'arora', 9584267827, '2017-07-21 17:50:12', NULL),
(7, 'savi98arora@gmail.com', 'savi', 'arora', 9585267827, '2017-07-21 17:50:12', NULL),
(8, 'kinkong98arora@gmail.com', 'kingkong', 'arora', 9584267827, '2017-07-21 17:50:13', NULL),
(9, 'training@internshala.com', 'Internshala', 'web development', 9587267827, '2017-07-25 19:59:17', NULL),
(10, 'training@internshala.com', 'Internshala', 'web development', 9587267827, '2017-07-25 20:02:37', NULL),
(11, 'kapilonline@gmail.com', 'kapil''s', 'web development', 9587267827, '2017-07-25 20:17:36', NULL),
(12, 'ayushsharma@gmail.com', 'ayush', 'sharma', 8955924202, '2017-07-26 17:39:57', NULL),
(14, 'kaka@gmail.com', 'kaka', 'waka', 123, '2017-07-26 21:24:52', NULL),
(15, 'hello@gmail.com', 'hello', 'king', 12, '2017-07-27 18:41:57', NULL),
(16, 'lalu@gmail.com', 'lalu', 'yadav', 52, '2017-07-27 18:51:44', NULL),
(17, 'leela@gmail.com', 'leela', 'yadav', 52, '2017-07-27 18:53:35', NULL),
(22, 'babu@gmail.com', 'babu', 'singh', 52, '2017-07-27 19:01:58', '123'),
(23, 'babu@gmail.com', 'babu', 'singh', 52, '2017-07-27 19:13:19', ''),
(24, 'justnow@gmail.com', 'sucess', 'got', 66, '2017-07-28 05:20:55', 'md5(kapil)'),
(25, 'justnow@gmail.com', 'sucess', 'got', 66, '2017-07-28 05:22:59', '81dc9bdb52d04dc20036dbd8313ed055'),
(26, 'kaka@gmail.com', 'aa', 'bb', 453, '2017-07-30 16:16:16', '202cb962ac59075b964b07152d234b70'),
(27, 'yes@gmail.com', 'new', 'user', 123, '2017-07-30 17:21:28', '202cb962ac59075b964b07152d234b70'),
(28, 'k@gmail.com', 'qwe', 'rty', 45, '2017-07-30 19:22:34', '202cb962ac59075b964b07152d234b70'),
(29, 'kaka@gmail.com', 'ayush', 'arora', 4, '2017-07-30 19:23:13', 'cfcd208495d565ef66e7dff9f98764da'),
(30, 'kaka@gmail.com', 'v', 'd', 12, '2017-07-30 19:24:08', 'cfcd208495d565ef66e7dff9f98764da'),
(31, 'kaka@gmail.com', 'z', 'x', 45, '2017-07-30 19:25:15', 'cfcd208495d565ef66e7dff9f98764da'),
(32, 'cx@gmail.com', 'c', 'x', 5, '2017-07-30 19:43:29', 'cfcd208495d565ef66e7dff9f98764da'),
(33, 'loka@gmail.com', 'vb', 'sc', 1, '2017-07-30 19:52:31', 'cfcd208495d565ef66e7dff9f98764da'),
(34, 'kloa@gmail.com', 'a', 'c', 1, '2017-07-30 19:53:04', 'cfcd208495d565ef66e7dff9f98764da'),
(35, 'nmcm@gmail.com', ' cnc', 'sjs', 55, '2017-07-30 19:54:21', 'cfcd208495d565ef66e7dff9f98764da'),
(36, 'kabnka@gmail.com', 'adf', 'qww', 8, '2017-07-30 19:54:58', 'cfcd208495d565ef66e7dff9f98764da'),
(37, 'ka@gmail.com', 'kapil', 'arora', 5, '2017-07-30 20:01:01', 'cfcd208495d565ef66e7dff9f98764da'),
(38, 'kaksa@gmail.com', 'f', 's', 4, '2017-07-30 20:02:05', 'cfcd208495d565ef66e7dff9f98764da'),
(39, 'kakca@gmail.com', 'dc', 'sds', 4, '2017-07-30 20:03:20', 'cfcd208495d565ef66e7dff9f98764da'),
(40, 'kakzca@gmail.com', 'cv', 'sd', 0, '2017-07-30 20:04:57', 'cfcd208495d565ef66e7dff9f98764da'),
(41, 'php@gmail.com', 'simple', 'hai', 78, '2017-07-30 20:10:44', '202cb962ac59075b964b07152d234b70'),
(42, 'php1@gmail.com', 'kjs', 'jn', 4, '2017-07-30 20:17:41', '202cb962ac59075b964b07152d234b70'),
(43, 'la@gmail.com', 'l', 'a', 4, '2017-07-30 20:58:15', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  KEY `user_id_2` (`user_id`,`product_id`),
  KEY `user_id_3` (`user_id`,`product_id`),
  KEY `user_id_4` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `product_id`) VALUES
(8, 1, 7),
(4, 2, 3),
(6, 2, 3),
(2, 3, 1),
(1, 3, 4),
(5, 3, 5),
(7, 3, 5),
(3, 4, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
