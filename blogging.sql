-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 12:05 AM
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
  `blog_title` varchar(30) NOT NULL,
  `blog_pic` varchar(100) NOT NULL,
  `blog_desc` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date_time` datetime NOT NULL,
  `deleted_date_time` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_category`, `blog_title`, `blog_pic`, `blog_desc`, `user_id`, `created_date_time`, `modified_date_time`, `deleted_date_time`, `status`) VALUES
(2, '5', 'adasdasd', 'blog_pictures/04082020181742jonatan-pie-3l3RwQdHRHg-unsplash.jpg', 'asdasdasdasd', 4, '2020-08-04 16:17:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, '2', 'fooood', 'blog_pictures/05082020000029anna-wangler-_GqwoiT7QY8-unsplash.jpg', 'i love food', 5, '2020-08-04 22:00:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

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
  `modified_date_time` datetime NOT NULL,
  `deleted_date_time` datetime NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_address`, `user_cont`, `user_email`, `username`, `password`, `profile_pic`, `gender`, `user_type`, `created_date_time`, `modified_date_time`, `deleted_date_time`, `status`) VALUES
(3, 'saisarvesh', 'Curchorem Goa', '8007023761', 'saisarvesh.naik007@gmail.com', 'light123', 'nopass', 'profile_pictures/040820201654412019-04-09-23-43-41', 'male', 1, '2020-08-04 14:55:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 'lloyd', 'margao goa', '8898989898', 'lloys@gmail.com', 'lloyd123', 'lloyd', 'profile_pictures/04082020171424WhatsAppImage2019-1', 'male', 1, '2020-08-04 15:14:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'mahanta', 'quepem', '1212121212', 'mahanta@gmail.com', 'suvarsha', 'suvarsha', 'undefined', 'male', 1, '2020-08-04 19:41:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, 'Virendra Phoolwari', 'Margao Goa', '8978675645', 'virendra@gmail.com', 'Virus123', 'virus123', 'undefined', 'male', 1, '2020-08-04 21:23:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

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
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
