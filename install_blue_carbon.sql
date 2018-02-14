-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 03:37 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue_carbon`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(16) NOT NULL,
  `header` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `project` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `header`, `detail`, `project`) VALUES
(1, 'Written in:', 'Turbo Pascal', 27),
(2, 'Released:', '1995', 27),
(3, 'Developer:', 'Gabriele Cirulli', 29),
(11, 'Publisher:', 'Gabriele Cirulli', 29),
(19, 'Written in:', 'Javascript', 29),
(20, 'Written in:', ' PHP', 31),
(21, 'Designer', 'David White', 28),
(22, 'Written in:', 'C++, Lua', 28),
(23, 'Website:', 'http://battleforwesnoth.org/', 28),
(24, 'GitHub:', 'https://github.com/ItsSeaJay/blue-carbon', 33);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `first_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`first_name`, `middle_name`, `last_name`) VALUES
('John', '', 'Doe');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(16) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `initiative` int(16) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(2048) CHARACTER SET ascii NOT NULL,
  `trailer` varchar(2048) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `subtitle`, `initiative`, `description`, `thumbnail`, `trailer`) VALUES
(33, 'Hello, World!', 'Your first Blue Carbon Project.', 0, 'If you are reading this, then that means **Blue Carbon** installed correctly!\r\n\r\nFeel free to delete this project, and replace it with something more authentic. If you have any questions, suggestions, or issues, feel free to get in touch. I hope that you have as much fun using it as I did making it.\r\n\r\nI can\'t thank you enough.\r\n\r\n~ Callum ([@ItsSeaJay](https://twitter.com/ItsSeaJay/))', 'https://via.placeholder.com/640/360/', 'https://www.youtube.com/embed/DH0BQtwEAsM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(16) NOT NULL,
  `username` varchar(128) CHARACTER SET ascii NOT NULL,
  `password` varchar(255) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'root', '$2y$10$9aiKzGFYh693yXtCcRSkounLu431uJFqRXWrpnVF0QK/P6mZnIXOG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
