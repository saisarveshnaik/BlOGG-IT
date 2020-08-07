-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 12:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `blog_title` varchar(50) NOT NULL,
  `blog_pic` varchar(200) NOT NULL,
  `blog_short_desc` varchar(100) NOT NULL,
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
(15, '1', 'This is a fashion blog', 'blog_pictures/06082020161258fashion.jpg', 'Fashion is a popular aesthetic expression at a par', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 42, '2020-08-06 08:43:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, '2', 'In this blog I talk about food.', 'blog_pictures/06082020161518food.jpg', 'Food is any substance consumed to provide nutritio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 42, '2020-08-06 08:45:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, '3', 'I traveled to India', 'blog_pictures/06082020163336travel.jpg', 'In this blog ill tell about the experience i had in India', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 42, '2020-08-06 09:03:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, '6', 'This is blog to keep you fit!', 'blog_pictures/06082020163546fitness.jpg', 'callisthenics (British English) is a form of exercise consisting of a variety of movements that exer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 42, '2020-08-06 09:05:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(19, '7', 'New DIY blog!!!', 'blog_pictures/06082020164428diy.jpg', '\"Do it yourself\" (\"DIY\") is the method of building, modifying, or repairing things without the direc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 43, '2020-08-06 09:14:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(20, '8', 'Ronaldo won an award', 'blog_pictures/06082020164617sports.jpg', 'Football is a family of team sports that involve, to varying degrees, kicking a ball to score a goal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 43, '2020-08-06 09:16:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, '9', 'Finance blog is here!!', 'blog_pictures/06082020164806finance.jpg', 'Finance is a term for matters regarding the management, creation, and study of money and investments', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 43, '2020-08-06 09:18:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(22, '10', 'This is a political post!', 'blog_pictures/06082020165206political.jpg', 'Politics set of activities that are associated with making decisions in groups, or other forms of po', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 44, '2020-08-06 09:22:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(23, '11', 'Parenting should be done correctly', 'blog_pictures/06082020165334parenting.jpg', 'Parenting or child rearing is the process of promoting and supporting the physical, emotional, socia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 44, '2020-08-06 09:23:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(24, '12', 'Talk about buisness.', 'blog_pictures/06082020165429buisness.jpg', 'Business is the activity of making one\'s living or making money by producing or buying and selling p', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 44, '2020-08-06 09:24:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(0, '3', 'GOA', 'blog_pictures/0608202018185220200728_130547.jpg', 'A Beautiful place in Goa', 'gfcgfc gcvhgvhgvdfsf fesfef ewfe wfwe fwe fe f f ewfedsfdsfsdf ees fd sf f sd fsd ssdfsds ewfewfwefefew fd ds fd gb gf ngfn ghnhnhgnhgn hgnhg nhgnhg nhg nhg nmhgm ghn gfb fvg cv dsfv sdv dsf vfd vfd v fdv fdbvfd b fdb fdb fd bf  bf bf dbfd bdf b fdb fd vfdv  fd v vfd bv fd vfd b fdb fdb df bdf bvfd v dfsv fdv fd v df', 1, '2020-08-06 16:18:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

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
  `comment_text` varchar(100) NOT NULL,
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
(1, 'xfgxfgxfg        f gfd gfd g  g g fg dfg   gdfg\r\n rgdrgrd grd g grd ', 1, 7, '2020-08-06 09:04:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'Ride Is Life', 1, 15, '2020-08-06 10:04:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, '', 1, 14, '2020-08-06 14:37:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, '', 1, 14, '2020-08-06 14:37:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, '', 1, 14, '2020-08-06 14:37:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, '', 1, 14, '2020-08-06 14:37:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(7, '', 1, 14, '2020-08-06 14:37:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(8, 'fgajja', 1, 15, '2020-08-06 14:46:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(9, '', 1, 14, '2020-08-06 14:46:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, '', 1, 13, '2020-08-06 14:46:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(11, '', 1, 13, '2020-08-06 14:46:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(12, '', 1, 13, '2020-08-06 14:46:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, 'sdadawdawdw', 1, 15, '2020-08-06 14:51:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(14, 'dawdwada', 1, 14, '2020-08-06 14:51:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, 'dawdawdawd', 1, 13, '2020-08-06 14:51:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, 'wadwaawd', 1, 13, '2020-08-06 14:51:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, 'wddwadawd', 1, 13, '2020-08-06 14:51:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, 'ok tested', 1, 13, '2020-08-06 14:51:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(19, 'wow', 1, 0, '2020-08-06 16:31:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(20, '', 1, 0, '2020-08-06 16:32:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, 'hello', 1, 24, '2020-08-07 09:26:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `blog_id` varchar(5) NOT NULL,
  `user_id` varchar(5) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1 COMMENT '1-like   2-unlike',
  `created_date_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`blog_id`, `user_id`, `status`, `created_date_time`) VALUES
('24', '1', 2, '2020-08-07'),
('22', '1', 1, '2020-08-07'),
('23', '1', 2, '2020-08-07');

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
  `profile_pic` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `user_type` int(5) NOT NULL DEFAULT 1 COMMENT '0-admin 1-user',
  `created_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date_time` datetime DEFAULT NULL,
  `deleted_date_time` datetime NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_address`, `user_cont`, `user_email`, `username`, `password`, `profile_pic`, `gender`, `user_type`, `created_date_time`, `modified_date_time`, `deleted_date_time`, `status`) VALUES
(1, 'Lloyd Dias', 'Goa', '9763032890', 'diaslloydt@gmail.com', 'Beast17', '123456', '', '0', 0, '2020-08-05 04:38:06', NULL, '0000-00-00 00:00:00', 1),
(2, 'Lloyd Dais', 'Majorda Goa', '9763032890', 'diaslloydt@gmail.com', 'Beast25', 'lloyddias', 'profile_pictures/05082020114609image_750x_5cc969fd', 'male', 1, '2020-08-05 09:47:01', NULL, '0000-00-00 00:00:00', 0),
(8, 'Saisarvesh Naik', 'Curchorem Goa', '8007023761', 'saisarvesh.naik007@gmail.com', 'sarvesh', 'nopass', 'profile_pictures/050820200122112019-04-09-23-43-41', 'male', 1, '2020-08-04 17:53:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(9, 'lloyd', 'margao goa', '4334455465', 'lloys@gmail.com', 'lloyd123', 'lloyd', 'profile_pictures/05082020020244WhatsAppImage2019-1', 'male', 1, '2020-08-04 18:33:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, 'varsha', 'curchorem goa', '9545830298', 'saisarvesh.naik007@gmail.com', 'varshu', 'varshu', 'profile_pictures/05082020085824IMG_20181222_161336', 'male', 1, '2020-08-05 01:28:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(38, 'asdasdasd', 'asdaasd', '12121212', 'saisarvesh.naik007@gmail.com', 'light123', 'nopaaasss', 'profile_pictures/05082020094813IMG_20181222_161336', 'male', 1, '2020-08-05 02:18:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(39, 'adasd', 'asdasdas', '122313131231', 'saisarvesh.naik007@gmail.com', 'light123', 'nopass', 'profile_pictures/05082020104216ERZ51k_XYAAhSoa.jpg', 'male', 1, '2020-08-05 03:14:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(40, 'Anil', 'curchorem goa', '6776766565', 'saisarvesh.naik007@gmail.com', 'sarvesh', 'password', 'profile_pictures/0508202011463130904.jpg', 'male', 1, '2020-08-05 04:17:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
