-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 08:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogging`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_category` varchar(100) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_pic` varchar(200) NOT NULL,
  `blog_short_desc` varchar(200) NOT NULL,
  `blog_desc` varchar(5000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date_time` datetime NOT NULL,
  `deleted_date_time` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0-shown,1-hidden,2-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_category`, `blog_title`, `blog_pic`, `blog_short_desc`, `blog_desc`, `user_id`, `created_date_time`, `modified_date_time`, `deleted_date_time`, `status`) VALUES
(15, '1', 'This is a fashion blog', 'blog_pictures/06082020161258fashion.jpg', 'Fashion is a popular aesthetic expression at a par', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 42, '2020-08-06 14:13:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, '2', 'In this blog I talk about food.', 'blog_pictures/06082020161518food.jpg', 'Food is any substance consumed to provide nutritio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 42, '2020-08-06 14:15:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, '3', 'I traveled to India', 'blog_pictures/06082020163336travel.jpg', 'In this blog ill tell about the experience i had in India', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 42, '2020-08-06 14:33:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, '6', 'This is blog to keep you fit!', 'blog_pictures/06082020163546fitness.jpg', 'callisthenics (British English) is a form of exercise consisting of a variety of movements that exer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 42, '2020-08-06 14:35:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(19, '7', 'New DIY blog!!!', 'blog_pictures/06082020164428diy.jpg', '\"Do it yourself\" (\"DIY\") is the method of building, modifying, or repairing things without the direc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 43, '2020-08-06 14:44:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(20, '8', 'Ronaldo won an award', 'blog_pictures/06082020164617sports.jpg', 'Football is a family of team sports that involve, to varying degrees, kicking a ball to score a goal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 43, '2020-08-06 14:46:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, '9', 'Finance blog is here!!', 'blog_pictures/06082020164806finance.jpg', 'Finance is a term for matters regarding the management, creation, and study of money and investments', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 43, '2020-08-06 14:48:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(22, '10', 'This is a political post!', 'blog_pictures/06082020165206political.jpg', 'Politics set of activities that are associated with making decisions in groups, or other forms of po', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 44, '2020-08-06 14:52:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(23, '11', 'Parenting should be done.', 'blog_pictures/06082020165334parenting.jpg', 'Parenting or child rearing is the process of promoting and supporting the physical, emotional, socia', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 44, '2020-08-06 14:53:36', '2020-08-07 06:56:53', '0000-00-00 00:00:00', 0),
(24, '12', 'Talk about buisness.', 'blog_pictures/06082020165429buisness.jpg', 'Business is the activity of making one\'s living or making money by producing or buying and selling p', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 44, '2020-08-06 14:54:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(27, '5', 'asdasd', 'blog_pictures/07082020164239Lionel-Messi-dribble-Barcelona-Real-Madrid.jpg', 'asdasdas', 'adsasdasdas', 42, '2020-08-07 14:42:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(28, '3', 'asdasd', 'blog_pictures/07082020165644ERZ51k_XYAAhSoa.jpg', 'asdsadasd', 'asdasdasdasdasd', 42, '2020-08-07 14:56:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(29, '2', 'asdasdasd', 'blog_pictures/07082020174651patrick-fore-850jTF12RSQ-unsplash.jpg', 'asdasdasd', 'asdasdasdasdas', 42, '2020-08-07 15:46:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(30, '3', 'asdasd', 'blog_pictures/07082020182149Lionel-Messi-dribble-Barcelona-Real-Madrid.jpg', 'asdasd', 'jkhjhgfhjgjg', 42, '2020-08-07 16:21:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(31, '4', 'asdasads', 'blog_pictures/07082020184111fitness.jpg', 'asdasdasd', 'asdasdasdasdas', 42, '2020-08-07 16:41:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
(32, '3', 'asdasdasdasd', 'blog_pictures/07082020201655kieren-andrews-k0f4JaBPyFM-unsplash.jpg', 'adasdasasdasd', 'asdasdasdasdasdasd', 44, '2020-08-07 18:16:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `status`) VALUES
(1, 'Fashion', 1),
(2, 'Food', 1),
(3, 'Travel', 1),
(4, 'Music', 1),
(5, 'Lifestyle', 1),
(6, 'Fitness', 1),
(7, 'DIY', 1),
(8, 'Sports', 1),
(9, 'Finance', 1),
(10, 'Political', 1),
(11, 'Parenting', 1),
(12, 'Business', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_text` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_date_time` datetime NOT NULL,
  `deleted_date_time` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_text`, `user_id`, `blog_id`, `created_date_time`, `modified_date_time`, `deleted_date_time`, `status`) VALUES
(1, '', 42, 28, '2020-08-07 15:38:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, '', 42, 28, '2020-08-07 15:39:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'undefined', 42, 28, '2020-08-07 15:41:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 'aasdadasd', 42, 28, '2020-08-07 15:45:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'hahahahahaha', 42, 28, '2020-08-07 15:45:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, 'ghashgasdghahgasdghasd', 42, 27, '2020-08-07 15:46:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(7, 'dafafasasf', 42, 29, '2020-08-07 15:47:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(8, 'noice', 42, 24, '2020-08-07 15:50:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(9, 'asdasdasdadasd', 42, 27, '2020-08-07 15:56:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, 'adasdasdasda', 42, 29, '2020-08-07 15:59:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(11, 'i am from village are.. I like', 42, 29, '2020-08-07 16:10:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(12, 'hhjkhkjjggkh', 42, 20, '2020-08-07 16:23:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, 'kajshdkashdkjahsjkd', 42, 31, '2020-08-07 16:41:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(14, 'askjdhkahsd', 44, 31, '2020-08-07 18:16:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `blog_id` varchar(5) NOT NULL,
  `user_id` varchar(5) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1 COMMENT '1-like,2-dislike',
  `created_date_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`blog_id`, `user_id`, `status`, `created_date_time`) VALUES
('27', '42', 1, '2020-08-07'),
('28', '42', 1, '2020-08-07'),
('28', '44', 1, '2020-08-07'),
('27', '44', 1, '2020-08-07'),
('28', '43', 2, '2020-08-07'),
('27', '43', 1, '2020-08-07'),
('29', '42', 1, '2020-08-07'),
('24', '42', 1, '2020-08-07'),
('20', '42', 2, '2020-08-07'),
('31', '42', 2, '2020-08-07'),
('31', '44', 1, '2020-08-07'),
('32', '44', 1, '2020-08-07'),
('32', '43', 1, '2020-08-07'),
('31', '43', 1, '2020-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `report_category` varchar(50) NOT NULL,
  `report_desc` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `blog_id`, `user_id`, `report_category`, `report_desc`, `created_at`, `status`) VALUES
(1, 31, 42, 'spam', 'this is a spam', '2020-08-07 23:43:03', 1),
(2, 31, 44, 'Hatred and Bullying', 'asdasdasdasd', '2020-08-07 23:46:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_cont` varchar(15) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `user_type` int(5) NOT NULL DEFAULT 1 COMMENT '0-admin 1-user',
  `created_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date_time` datetime NOT NULL,
  `deleted_date_time` datetime NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_address`, `user_cont`, `user_email`, `username`, `password`, `profile_pic`, `gender`, `user_type`, `created_date_time`, `modified_date_time`, `deleted_date_time`, `status`) VALUES
(42, 'Saisarvesh', 'Carriamoddi curchorem goa', '8007023761', 'saisarvesh.naik007@gmail.com', 'saisarvesh', 'saisarvesh', 'profile_pictures/060820201558422019-04-09-23-43-41-01~2.jpeg', 'male', 0, '2020-08-06 14:01:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(43, 'sai', 'margao goa', '9867568756', 'sai@gmail.com', 'sai', 'sai', 'profile_pictures/06082020163902WhatsAppImage2019-10-18at10.56.10AM.jpeg', 'male', 1, '2020-08-06 14:41:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(44, 'sarvesh', 'curchorem goa', '7867787656', 'saisarvesh@gmail.com', 'sarvesh', 'sarvesh', 'profile_pictures/06082020164954ScreenClip.png', 'male', 1, '2020-08-06 14:49:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
