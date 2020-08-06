-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 10:25 AM
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
  `blog_pic` varchar(200) NOT NULL,
  `blog_desc` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date_time` datetime NOT NULL,
  `deleted_date_time` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0-shown,1-hidden,2-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_category`, `blog_title`, `blog_pic`, `blog_desc`, `user_id`, `created_date_time`, `modified_date_time`, `deleted_date_time`, `status`) VALUES
(7, '1', 'this is a fashion blod', 'blog_pictures/05082020030114anna-wangler-_GqwoiT7QY8-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9, '2020-08-05 01:01:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, '3', 'asdadas', 'blog_pictures/05082020030724kieren-andrews-k0f4JaBPyFM-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9, '2020-08-05 01:07:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(11, '6', 'This is a Fitness blog', 'blog_pictures/05082020034048stefan-stefancik-TPv9dh822VA-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9, '2020-08-05 01:40:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(12, '8', 'This is a sports blog', 'blog_pictures/05082020072404Lionel-Messi-dribble-Barcelona-Real-Madrid.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 8, '2020-08-05 05:24:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

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
(8, 'Saisarvesh Naik', 'Curchorem Goa', '8007023761', 'saisarvesh.naik007@gmail.com', 'sarvesh', 'nopass', 'profile_pictures/050820200122112019-04-09-23-43-41-01~2.jpeg', 'male', 0, '2020-08-04 23:23:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(9, 'lloyd', 'margao goa', '4334455465', 'lloys@gmail.com', 'lloyd123', 'lloyd', 'profile_pictures/05082020020244WhatsAppImage2019-10-18at10.56.10AM.jpeg', 'male', 1, '2020-08-05 00:03:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, 'varsha', 'curchorem goa', '9545830298', 'saisarvesh.naik007@gmail.com', 'varshu', 'varshu', 'profile_pictures/05082020085824IMG_20181222_161336-01.jpeg', 'male', 1, '2020-08-05 06:58:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(38, 'asdasdasd', 'asdaasd', '12121212', 'saisarvesh.naik007@gmail.com', 'light123', 'nopaaasss', 'profile_pictures/05082020094813IMG_20181222_161336-01.jpeg', 'male', 1, '2020-08-05 07:48:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(39, 'adasd', 'asdasdas', '122313131231', 'saisarvesh.naik007@gmail.com', 'light123', 'nopass', 'profile_pictures/05082020104216ERZ51k_XYAAhSoa.jpg', 'male', 1, '2020-08-05 08:44:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(40, 'Anil', 'curchorem goa', '6776766565', 'saisarvesh.naik007@gmail.com', 'sarvesh', 'password', 'profile_pictures/0508202011463130904.jpg', 'male', 1, '2020-08-05 09:47:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(41, 'asdasd', 'asdasd', '11212121212', 'saisarvesh.naik007@gmail.com', 'saisaisai', 'nopass', 'profile_pictures/05082020195422ERZ51k_XYAAhSoa.jpg', 'male', 1, '2020-08-05 17:54:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

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
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
