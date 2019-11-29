-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 06:55 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dack`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_account`
--

CREATE TABLE `active_account` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `secretac` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `active_account`
--

INSERT INTO `active_account` (`id`, `userId`, `secretac`, `createdAt`) VALUES
(1, 6, 'WaSMFV9sy7', '2018-12-13 17:41:48'),
(2, 7, 'XPzl5Uc7gI', '2018-12-13 17:43:28'),
(3, 8, 'GMrA544tQC', '2018-12-13 17:46:58'),
(4, 9, '0QQK4XuU6a', '2018-12-13 17:50:39'),
(5, 10, 'PNBQd9704j', '2018-12-13 17:53:17'),
(6, 11, '1oziUThAik', '2018-12-13 17:54:53'),
(7, 12, 'VpYtkoyANV', '2018-12-13 18:04:51'),
(8, 13, '4ui79hE7jS', '2018-12-13 18:10:10'),
(9, 14, 'RsBgVYJgse', '2018-12-13 18:14:50'),
(10, 15, 'cO7K12cWYt', '2018-12-13 18:18:37'),
(11, 23, 'CEoXwIrKFu', '2018-12-14 10:29:36'),
(12, 24, 'lr32jpVJOG', '2018-12-14 10:33:49'),
(13, 25, 'mdkKckJn8Z', '2018-12-14 10:36:38'),
(14, 26, 'hCKqRJVGd6', '2018-12-14 10:41:17'),
(15, 27, 'e13G55zMCU', '2018-12-14 10:42:47'),
(16, 28, 'wWf4I3b408', '2018-12-15 11:22:13'),
(17, 29, 'rl0FZzSQJw', '2018-12-27 20:42:43'),
(18, 29, 'oJ0WwlGyoO', '2018-12-27 20:48:52'),
(19, 29, '4znctaPika', '2018-12-27 20:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `users` int(11) NOT NULL,
  `usersfollow` int(11) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`users`, `usersfollow`, `createAt`) VALUES
(28, 27, '2018-12-27 20:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `user1Id` int(11) NOT NULL,
  `user2Id` int(11) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`user1Id`, `user2Id`, `createAt`) VALUES
(28, 27, '2018-12-27 20:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `content`, `userId`, `createdAt`, `count`) VALUES
(1, '123', 0, '2018-12-27 16:29:49', 0),
(2, '123', 0, '2018-12-27 16:30:11', 0),
(3, '123', 0, '2018-12-27 16:30:31', 0),
(4, '123', 0, '2018-12-27 16:30:57', 0),
(5, '123', 0, '2018-12-27 16:33:44', 0),
(6, '123', 0, '2018-12-27 16:36:12', 0),
(7, '123', 0, '2018-12-27 16:37:34', 0),
(8, '123', 0, '2018-12-27 16:40:30', 0),
(9, '123', 28, '2018-12-27 16:54:08', 0),
(10, '456', 28, '2018-12-27 16:54:23', 0),
(11, '123', 28, '2018-12-27 17:08:41', 0),
(12, 'khoi mat lol', 28, '2018-12-27 17:09:52', 0),
(13, 'khoi mat cac', 28, '2018-12-27 17:10:07', 0),
(14, 'suc vat khoi', 28, '2018-12-27 17:10:18', 0),
(15, '123ddd  ', 28, '2018-12-27 17:55:17', 0),
(16, '123 456', 28, '2018-12-27 18:26:24', 1),
(17, 'Tôi yêu em', 28, '2018-12-27 20:21:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `secret` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `used` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reset_password`
--

INSERT INTO `reset_password` (`id`, `userId`, `secret`, `createdAt`, `used`) VALUES
(1, 5, '6HqxGf8lyy', '2018-12-13 16:51:27', 0),
(2, 5, 'WV5Qn0FYZu', '2018-12-13 16:53:38', 0),
(3, 5, '5FD9nUXLJB', '2018-12-13 16:54:28', 0),
(4, 5, 'eS4h4ftWYM', '2018-12-13 16:55:26', 0),
(5, 5, 'clOGhm7jia', '2018-12-13 16:56:48', 0),
(6, 5, 'ELdvsMspu1', '2018-12-13 16:59:41', 1),
(7, 5, 'EE1VSrPkhB', '2018-12-13 17:10:21', 1),
(8, 5, 'CLKvZacYM4', '2018-12-13 17:11:36', 1),
(9, 5, 'yIO4t08bC2', '2018-12-13 17:18:53', 1),
(10, 5, 'C2Z4GXPeln', '2018-12-13 17:24:42', 1),
(11, 17, 'w5ionqA6iY', '2018-12-13 18:25:58', 1),
(12, 17, '9NZYOaojpU', '2018-12-13 18:32:22', 1),
(13, 25, 'OxEweOORY7', '2018-12-14 10:37:08', 1),
(14, 25, 'Begjf2jE2Z', '2018-12-15 11:09:54', 1),
(15, 28, 'fh9i1EAFK5', '2018-12-15 11:23:13', 1),
(16, 29, '6lyAH9k3Ow', '2018-12-27 20:51:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `used` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fullname`, `used`) VALUES
(27, 'myforrever22@gmail.com', '$2y$10$flHNWamUu5ld.aSqpfS1a..7lTHIP1jCHyWclNNvBzU4BIZv4t5K6', 'Kim', 1),
(28, 'myforrever21@gmail.com', '$2y$10$l9wKWZfLTQU4d7s52V.5p.lL/hBpiwtuBDIcEZ1k0FOXsClE6QhCO', 'Kim JiSoo', 1),
(29, 'myforrever24@gmail.com', '$2y$10$Ibb4R6W/f.M2P1mq1ccN4.Jv2zqmWDK9A0rvW9RTwlvTsZ1iLyU7e', 'Kim Jennie', 1),
(30, 'myforrever24@gmail.com', '$2y$10$Tkq.xA08l86SIMho3n7ppuG42gupcjVz3cRAyUKZlPOOCZn/IeFgK', 'ChaeYoung', 0),
(31, 'myforrever24@gmail.com', '$2y$10$GPU/4xQEJJjoFSxr4w0V4Oz8ueXXh5x5uG0u5hVWFoNfImOFouuoO', 'Lisa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_account`
--
ALTER TABLE `active_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`usersfollow`,`users`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`user1Id`,`user2Id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_account`
--
ALTER TABLE `active_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
