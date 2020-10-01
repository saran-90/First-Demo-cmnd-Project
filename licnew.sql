-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 06:25 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$u9eMvV1F0DZ1BG2FBbTq0.Pyy394LUSd0Qo/B.8Mp5Wc9u3L8.HNS', '0F0JmfLU3KaI7pqESUiceeyilaEsAht9vbuNOy2hgRGG3qch1oJShdIwb30V', '2018-11-01 20:30:00', '2018-11-08 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'lic policy', '2019-01-09 09:22:57', '2019-01-09 09:22:57'),
(2, 'jevan', '2019-01-09 09:23:15', '2019-01-09 09:23:15'),
(3, 'cat3', '2019-01-09 09:23:33', '2019-01-09 09:23:33'),
(4, 'cat4', '2019-01-09 09:23:51', '2019-01-09 09:23:51'),
(5, 'cat5', '2019-01-09 09:24:00', '2019-01-09 09:24:00'),
(6, 'cat6', '2019-01-09 09:24:11', '2019-01-09 09:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `egreetings`
--

CREATE TABLE `egreetings` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `egreetings`
--

INSERT INTO `egreetings` (`id`, `client_name`, `mobile_number`, `mail_id`, `created_at`, `updated_at`) VALUES
(3, 'Saravanaasd', '9877777556', 'rasssm@gmail.com', NULL, '2019-01-22 11:35:36'),
(7, 'balacc', '9600284241', 'dsb@gmail.com', NULL, NULL),
(9, 'Saravana', '9600284241', 'ram@gmail.com', NULL, NULL),
(10, 'bala', '8766766666', 'dsb@gmail.com', NULL, '2019-01-21 08:14:54'),
(11, 'Gala', '9585796622', 'gan@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_name`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'gallery1', 'jevan', '1547025987.jpg', '2019-01-09 09:26:27', '2019-01-09 09:26:27'),
(2, 'newimg', 'cat3', '1547026011.jpg', '2019-01-09 09:26:51', '2019-01-09 09:26:51'),
(3, 'fff', 'cat4', '1547096149.jpg', '2019-01-10 04:55:49', '2019-01-10 04:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(67, '2014_10_12_100000_create_password_resets_table', 2),
(72, '2018_11_02_150734_create_admins_table', 3),
(74, '2014_10_12_000000_create_users_table', 4),
(75, '2018_12_27_060716_create_categories_table', 4),
(76, '2018_12_28_081930_create_galleries_table', 4),
(77, '2019_01_09_151140_create_egreetings_table', 5),
(79, '2019_01_18_150333_create_newsletters_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `title`, `date`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(6, 'fgdfgdfg', '01-18-2019', 'dsfffffffffffffffffffffffffffffff', '1547812727.jpg', '2019-01-18 11:45:56', '2019-01-18 11:59:01'),
(7, 'hhhhh', '01-29-2019', 'sdsfsfdsdfffffffffffffff  fffffffffffffffffffff', '1547870848.jpg', '2019-01-19 04:06:37', '2019-01-21 09:32:18'),
(8, 'fgdfgdfg', '01-22-2019', 'dsfsdfsddfsdfsdfsdfs dfsdfsdfsdfsdfsdfsdfsdfsdfs ', '1547870815.jpg', '2019-01-19 04:06:55', '2019-01-19 04:06:55'),
(9, 'dddd', '01-21-2019', 'A newsletter about women, gender and society, delivered twice a week to your inbox. Illustration by Franziska Barczyk.Your Guide: \'Game of Thrones\'\r\nWinter is almost here! As we head into the final season of “Game of Thrones,” join our Westeros experts for a season-by-season rewatch. Once Season 8 commences, the newsletter will be full of intensive recaps, exclusive interviews and helpful explainers.Get what you need to know to start your day in the United States, Canada and the Americas, delivered to your inbox.', '1548067707.jpg', '2019-01-21 10:48:27', '2019-01-21 10:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professional` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(100) DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `mobile_number`, `location`, `professional`, `testimonial`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ramKumar', 'ram@gmail.com', NULL, '8774645645', 'Salem', 'AO Manager, ESS', 'Your Life can easily flow and be filled with joy. Embrace the possibilities', 0, '$2y$10$atNu1hXMPOKxBj2D9b6wj.htCOy4jKqVkHrKju4QrCprNsYPpL9Xm', 'BBH5BGjgX9zCt8v1zhBGQiZRHeYjWW3Lc82jt68aPSxC6Jt6GgmRN06VrDGf', '2019-01-09 08:31:24', '2019-01-09 08:31:24'),
(2, 'raja', 'raja@gmail.com', NULL, '6786876822', 'Coimbatore', 'IT FSS', 'I am writing to let you know that when I set up a life policy for myself', 0, '$2y$10$gS0.LANHRdNhuHeAofMUluIAzfRR.ugNI/ylnT8hvRk1gFOmVx9lO', 'gua1gCXBzDPvLqXZIkviOQfWg4mThJhHKyUsUEkO6CgOKV9lCph7F0XNAxUb', '2019-01-19 04:35:21', '2019-01-19 04:35:21'),
(3, 'pradeep', 'pradeep@gmail.com', NULL, '6786876865', 'Chennai', 'Web develpoer', 'I really appreciate all work that you have done so efficiently and so quickly.', 0, '$2y$10$weU9dfvktucu3n2lYOsp5.AyHpBaLBWutvS4EBHHvym9VTcx5mcWy', 'y5Nhxu6ll2ALDOsDPvh7esK7GhKXxe00RFlAoXbAnHg87AH7ysDRMH1di2iO', '2019-01-19 05:54:21', '2019-01-19 05:54:21'),
(4, 'karan', 'karan@gmail.com', NULL, '6786876865', 'Bengalure', 'LIC MD ,KEE', 'We appreciate the time that you have given us.', 1, '$2y$10$6BC3mVBAZ8.RRDKby5nx2OuTnt0H4gS5ctJ3eQ5Skhmvc4i8lkgjq', '0nvswmBhas9XfmzWdntWbR8OlgSMN7PR2jxIXHlYaiERgKyvh7m9zfBKa9jh', '2019-01-19 05:55:56', '2019-01-19 05:55:56'),
(5, 'manikandan', 'manikandan@gmail.com', NULL, '6786876865', 'Chennai', 'LIC support', 'Thank you for your help. It is was so efficient and easy ', 0, '$2y$10$zL20qvbLwLQvfqsjO7K3KeDaKMzfdsYfYDDaWTuJYeym.vWHIH4tG', 'axMeRaADyeOGsneV0mvuWAXUvS9HfcGuTuGnqaTATTAV77RaDB1nby0JLR5L', '2019-01-19 06:03:56', '2019-01-19 06:03:56'),
(6, 'Ramya', 'ramya@gmail.com', NULL, '7894456234', 'coimbatore', 'LIC mutual funds', 'What we learn from history is that people don\'t learn from history', NULL, '$2y$10$7uE87l.0hHrQ0jeklJghOuqT6I1HqZfb2t.63JudXRTJ283Gsa4ga', 'd98MNIBh4jlCXe61YRbAaPsDBb11doZYTU8evJJoS8QLrRVgjoWwFxuMoW5v', '2019-01-22 08:26:13', '2019-01-22 08:26:13'),
(7, 'saran', 'saran@gmail.com', NULL, '7894456234', 'salem', 'Finance assist,LIC', 'Nothing sedates rationality like large doses of effortless money.', 0, '$2y$10$uUnouyWlfOP2bztyNZJ5m.UStQYKm3bWYs9lCtgeY5tZ/5JDc64lO', 'QnYtlp6pNYbcayeoyheEGVd9MiVxnNYKx1tzexqEIHxonQqVcKZJ2Cso7xYw', '2019-01-22 08:28:41', '2019-01-22 08:28:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `egreetings`
--
ALTER TABLE `egreetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `egreetings`
--
ALTER TABLE `egreetings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
