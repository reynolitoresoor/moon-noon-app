-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 04:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `well_being_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `article`, `content`, `attachment`, `created_at`, `updated_at`) VALUES
(1, 50, 'Test Article', 'Some example text some example text. John Doe is an architect and engineer. Some example text some example text. John Doe is an architect and engineer. Some example text some example text. John Doe is an architect and engineer', 'uploads/articles/article1.jpg', '2024-12-03 03:26:53', '2024-12-03 03:26:53'),
(3, 0, 'adfadf', 'Some example text some example text. John Doe is an architect and engineer. Some example text some example text. John Doe is an architect and engineer. Some example text some example text. John Doe is an architect and engineer', 'uploads/articles/article2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 0, 'asda', 'Some example text some example text. John Doe is an architect and engineer. Some example text some example text. John Doe is an architect and engineer. Some example text some example text. John Doe is an architect and engineer', 'uploads/articles/article3.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 0, 'New Article', 'Some example text some example text. John Doe is an architect and engineer. Some example text some example text. John Doe is an architect and engineer. Some example text some example text. John Doe is an architect and engineer', 'uploads/articles/article2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `issue` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `user_id`, `issue`, `created_at`, `updated_at`) VALUES
(1, 48, 'test issue.', '2024-11-04 02:26:47', '2024-11-04 02:26:47'),
(2, 48, 'test issues asdfasdfa.', '2024-11-04 02:27:01', '2024-11-04 02:27:01'),
(4, 55, 'testraasdfasdfdaasdfasdf. asdfasdfadsf adfasdfdasf', '2024-11-04 05:03:18', '2024-11-04 05:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `to_user` varchar(255) NOT NULL,
  `from_user` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `is_delated` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `to_user`, `from_user`, `message`, `attachment`, `is_delated`, `created_at`, `updated_at`) VALUES
(1, 'test@gmail.com', 'student@gmail.com', 'test message.', '', NULL, '2024-11-18 05:29:51', '2024-11-18 05:29:51'),
(2, 'test@gmail.com', 'student@gmail.com', 'new message.', '', NULL, '2024-11-18 05:31:03', '2024-11-18 05:31:03'),
(3, 'test@gmail.com', 'student@gmail.com', 'asdfasdfsaf', '', NULL, '2024-11-18 05:31:42', '2024-11-18 05:31:42'),
(4, 'test@gmail.com', 'student@gmail.com', 'asdfasdfadf adsfasdf', '', NULL, '2024-11-18 05:31:59', '2024-11-18 05:31:59'),
(5, 'reyno@gmail.com', 'student@gmail.com', 'asdfasdfasdfasdf', '', NULL, '2024-11-23 02:41:35', '2024-11-23 02:41:35'),
(6, 'adfasdf@gmail.com', 'student@gmail.com', 'test message.', '', NULL, '2024-11-23 03:03:54', '2024-11-23 03:03:54'),
(7, 'new@gmail.com', 'student@gmail.com', 'test lan.', '', NULL, '2024-11-23 03:05:50', '2024-11-23 03:05:50'),
(8, 'student@gmail.com', 'new@gmail.com', 'asdfasdfa', '', NULL, '2024-11-23 03:07:42', '2024-11-23 03:07:42'),
(9, 'student@gmail.com', 'reyno@gmail.com', 'test', '', NULL, '2024-11-23 03:08:39', '2024-11-23 03:08:39'),
(10, 'teacher@gmail.com', 'student@gmail.com', 'Hi ma\'am!', '', NULL, '2024-11-23 03:16:37', '2024-11-23 03:16:37'),
(11, 'student@gmail.com', 'teacher@gmail.com', 'Hi dong!', '', NULL, '2024-11-23 03:17:19', '2024-11-23 03:17:19'),
(12, 'teacher@gmail.com', 'student@gmail.com', 'Goods ra ma\'am.', '', NULL, '2024-11-23 04:17:38', '2024-11-23 04:17:38'),
(13, 'teacher@gmail.com', 'student@gmail.com', 'hahaha', '', NULL, '2024-11-23 04:18:48', '2024-11-23 04:18:48'),
(14, 'teacher@gmail.com', 'student@gmail.com', 'asdfasdfadsf', '', NULL, '2024-11-23 04:18:51', '2024-11-23 04:18:51'),
(15, 'teacher@gmail.com', 'student@gmail.com', 'asdfasdf', '', NULL, '2024-11-23 04:18:54', '2024-11-23 04:18:54'),
(16, 'teacher@gmail.com', 'student@gmail.com', 'asdfasdfasdf', '', NULL, '2024-11-23 04:18:56', '2024-11-23 04:18:56'),
(17, 'teacher@gmail.com', 'student@gmail.com', 'adfasdfadf', '', NULL, '2024-11-23 04:18:59', '2024-11-23 04:18:59'),
(18, 'teacher@gmail.com', 'student@gmail.com', 'test', '', NULL, '2024-11-23 04:19:02', '2024-11-23 04:19:02'),
(19, 'teacher@gmail.com', 'student@gmail.com', 'asdfasdfa', '', NULL, '2024-11-23 04:19:07', '2024-11-23 04:19:07'),
(20, 'teacher@gmail.com', 'student@gmail.com', 'asdfasdf', '', NULL, '2024-11-23 04:20:28', '2024-11-23 04:20:28'),
(21, 'student@gmail.com', 'teacher@gmail.com', 'Naunsa na man ka dong uy!', '', NULL, '2024-11-23 04:21:54', '2024-11-23 04:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post` text DEFAULT NULL,
  `attachments` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post`, `attachments`, `created_at`) VALUES
(28, 45, 'test', '', '2023-06-13 08:50:08'),
(29, 44, 'test', NULL, '2023-06-14 01:24:28'),
(30, 44, 'hahaha', NULL, '2023-06-14 01:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `about_yourself` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `user_salt` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 = inactive, 1 = active',
  `type` int(11) DEFAULT 3 COMMENT '1=admin, 2=teacher, 3=student, 4=councilor',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `first_name`, `last_name`, `middle_name`, `age`, `about_yourself`, `phone`, `profile`, `user_salt`, `status`, `type`, `create_at`) VALUES
(47, 'rey', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6PnGeW92PRWQPqvih4tS1', 'rey', 'reso', 'test', 45, 'test', NULL, 'uploads/profile/sample profile.jpg', 'PnGeW92PRWQPqvih4tS1', 1, 3, '2023-06-14 04:28:50'),
(48, 'test', 'test1@gmail.com', '098f6bcd4621d373cade4e832627b4f6Q4OfpXNc2rtVTIpNdKpp', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 'Q4OfpXNc2rtVTIpNdKpp', 1, 3, '2024-10-15 00:04:37'),
(50, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3kZp6GrKb7EkovDrXLjHt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kZp6GrKb7EkovDrXLjHt', 1, 1, '2024-11-04 01:28:55'),
(53, 'new', 'new@gmail.com', '22af645d1859cb5ca6da0c484f1f37eaYQuU04WUCr7o6Zf55HGM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YQuU04WUCr7o6Zf55HGM', 1, 2, '2024-11-04 03:02:58'),
(54, 'testuser', 'adfasdf@gmail.com', '098f6bcd4621d373cade4e832627b4f6l1xLOH4FlspviTEBNFoa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'l1xLOH4FlspviTEBNFoa', 1, 3, '2024-11-04 03:05:38'),
(55, 'reyno', 'reyno@gmail.com', '098f6bcd4621d373cade4e832627b4f60Gfl9WYy5zTx43KMYMnk', 'reyno', 'test', NULL, NULL, NULL, NULL, NULL, '0Gfl9WYy5zTx43KMYMnk', 1, 3, '2024-11-04 03:09:24'),
(56, 'teacher', 'teacher@gmail.com', '8d788385431273d11e8b43bb78f3aa41QUd9Aeo7OiDpiuNGJcWI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QUd9Aeo7OiDpiuNGJcWI', 1, 2, '2024-11-04 06:08:35'),
(57, 'student', 'student@gmail.com', 'cd73502828457d15655bbd7a63fb0bc8vI38IgM571KE4tgyYNON', 'student', 'student', '', 0, '', '', 'uploads/profile/sample profile.jpg', 'vI38IgM571KE4tgyYNON', 1, 3, '2024-11-06 00:13:43'),
(58, 'councilor', 'coucilor@gmail.com', '1d2562eec5142e590984a7f0ad335ddfLQQy8VWqXuhwA8g3XbFi', 'councilor', 'councilor', NULL, NULL, NULL, NULL, NULL, 'LQQy8VWqXuhwA8g3XbFi', 1, 4, '2024-12-03 00:53:56'),
(59, 'couciloruser', 'couciloruser@gmail.com', 'b6c323c6ce5d3018c8d733c1a130150eA7bThUWu7zvxnXyTljOg', 'couciloruser', 'couciloruser', NULL, NULL, NULL, NULL, NULL, 'A7bThUWu7zvxnXyTljOg', 1, 4, '2024-12-03 00:54:44'),
(60, '', '', 'd41d8cd98f00b204e9800998ecf8427ej6cv7o3GbUpmAR47J0XA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'j6cv7o3GbUpmAR47J0XA', 1, 3, '2024-12-03 02:51:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
