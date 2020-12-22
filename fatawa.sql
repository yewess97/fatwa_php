-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 09:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fatawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `questions_id` int(6) DEFAULT NULL,
  `users_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `questions_id` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `question_text` text NOT NULL,
  `specialize_id` int(6) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `specialize`
--

CREATE TABLE `specialize` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `card_image` text NOT NULL,
  `alt_image` varchar(50) NOT NULL,
  `books_name_ar` varchar(255) NOT NULL,
  `books_name_en` varchar(255) NOT NULL,
  `books_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialize`
--

INSERT INTO `specialize` (`id`, `name_ar`, `name_en`, `description_ar`, `description_en`, `card_image`, `alt_image`, `books_name_ar`, `books_name_en`, `books_link`) VALUES
(2, 'Ø§Ù„Ù€Ù€Ø¹Ù€Ù€Ù‚Ù€Ù€ÙŠÙ€Ù€Ø¯Ø©', 'Al-Aqidah', 'Ø§Ù„Ø¹Ù‚ÙŠØ¯Ø© Ø§Ù„Ø¥Ø³Ù„Ø§Ù…ÙŠØ© Ù‡ÙŠ Ø§Ù„Ø¥ÙŠÙ…Ø§Ù† Ø§Ù„Ø¬Ø§Ø²Ù… Ø¨Ø§Ù„Ù„Ù‡ ØªØ¹Ø§Ù„Ù‰ ÙˆÙ…Ù„Ø§Ø¦ÙƒØªÙ‡ ÙˆÙƒØªØ¨Ù‡ ÙˆØ±Ø³Ù„Ù‡ ÙˆØ§Ù„ÙŠÙˆÙ… Ø§Ù„Ø¢Ø®Ø± ÙˆØ¨Ø§Ù„Ù‚Ø¯Ø± Ø®ÙŠØ±Ù‡ ÙˆØ´Ø±Ù‡ ÙˆØ¨ÙƒÙ„ Ù…Ø§ Ø«Ø¨Øª Ù…Ù† Ø£ØµÙˆÙ„ Ø§Ù„Ø¯ÙŠÙ† ÙˆÙ…Ù† Ø£Ù…ÙˆØ± Ø§Ù„ØºÙŠØ¨ ÙˆØ£Ø®Ø¨Ø§Ø±Ù‡', 'The Islamic Aqidah is the firm belief in God (ALLAH) Almighty, his angels, his books, His Messengers, the Last Day (Doomsday), and in the both good and bad of his destiny, in addition in all that is proven from the fundamentals of the Islamic religion and  in matters of the unseen and its news', 'images/aqidah.jpg', 'aqidah_image', 'ÙƒØªØ¨ ÙÙŠ Ø§Ù„ØªÙˆØ­ÙŠØ¯ ÙˆØ§Ù„Ø¹Ù‚ÙŠØ¯Ø© Ø§Ù„Ø¥Ø³Ù„Ø§Ù…ÙŠØ©', 'Books on Monotheism and Islamic Aqidah', 'https://waqfeya.com/category.php?cid=3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `birth_date` datetime NOT NULL,
  `social_status` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `specialize_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `birth_date`, `social_status`, `email`, `password`, `country`, `phone`, `type`, `specialize_id`) VALUES
(1, '', 'male', '1997-12-24 00:00:00', 'single', 'yewess97@gmail.com', 'y.a24121997', '357994', '01011836243', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_id` (`questions_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_id` (`questions_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialize_id` (`specialize_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `specialize`
--
ALTER TABLE `specialize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `specialize_id` (`specialize_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialize`
--
ALTER TABLE `specialize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`questions_id`) REFERENCES `questions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`questions_id`) REFERENCES `questions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`specialize_id`) REFERENCES `specialize` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`specialize_id`) REFERENCES `specialize` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
