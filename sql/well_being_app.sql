-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 05:58 PM
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
  `to_user` int(11) NOT NULL,
  `from_user` int(11) NOT NULL,
  `message` text NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `is_delated` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `type` int(11) DEFAULT 3 COMMENT '1=admin, 2=teacher, 3=student',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `first_name`, `last_name`, `middle_name`, `age`, `about_yourself`, `phone`, `profile`, `user_salt`, `status`, `type`, `create_at`) VALUES
(47, 'rey', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6PnGeW92PRWQPqvih4tS1', 'rey', 'reso', 'test', 45, 'test', NULL, NULL, 'PnGeW92PRWQPqvih4tS1', 1, 3, '2023-06-14 04:28:50'),
(48, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6Q4OfpXNc2rtVTIpNdKpp', 'test', 'test', 'test', NULL, NULL, NULL, NULL, 'Q4OfpXNc2rtVTIpNdKpp', 1, 3, '2024-10-15 00:04:37'),
(50, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3kZp6GrKb7EkovDrXLjHt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kZp6GrKb7EkovDrXLjHt', 1, 1, '2024-11-04 01:28:55'),
(51, '', '', 'd41d8cd98f00b204e9800998ecf8427eKvp8kYqApfQTbfeDuZ6I', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kvp8kYqApfQTbfeDuZ6I', 1, NULL, '2024-11-04 03:02:01'),
(52, '', '', 'd41d8cd98f00b204e9800998ecf8427eef9KNkGNpYkJIqJJLx4h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ef9KNkGNpYkJIqJJLx4h', 1, NULL, '2024-11-04 03:02:20'),
(53, 'new', 'new@gmail.com', '22af645d1859cb5ca6da0c484f1f37eaYQuU04WUCr7o6Zf55HGM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YQuU04WUCr7o6Zf55HGM', 1, NULL, '2024-11-04 03:02:58'),
(54, 'testuser', 'adfasdf@gmail.com', '098f6bcd4621d373cade4e832627b4f6l1xLOH4FlspviTEBNFoa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'l1xLOH4FlspviTEBNFoa', 1, 3, '2024-11-04 03:05:38'),
(55, 'reyno', 'reyno@gmail.com', '098f6bcd4621d373cade4e832627b4f60Gfl9WYy5zTx43KMYMnk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0Gfl9WYy5zTx43KMYMnk', 1, 3, '2024-11-04 03:09:24'),
(56, 'teacher', 'teacher@gmail.com', '8d788385431273d11e8b43bb78f3aa41QUd9Aeo7OiDpiuNGJcWI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QUd9Aeo7OiDpiuNGJcWI', 1, 2, '2024-11-04 06:08:35'),
(57, 'student', 'student@gmail.com', 'cd73502828457d15655bbd7a63fb0bc8vI38IgM571KE4tgyYNON', 'student', 'student', NULL, NULL, NULL, NULL, NULL, 'vI38IgM571KE4tgyYNON', 1, 3, '2024-11-06 00:13:43');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
