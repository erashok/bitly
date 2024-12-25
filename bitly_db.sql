-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 11:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitly_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_12_21_090732_create_urls_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `original_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`id`, `original_url`, `short_url`, `created_at`, `updated_at`) VALUES
(1, 'https://app.bitly.com/Boch5Dwf6wA/links/create', 'MXK6lH', '2024-12-21 03:45:29', '2024-12-21 03:45:29'),
(2, 'https://app.short.io/domains/connect', '5VdlVa', '2024-12-21 03:52:20', '2024-12-21 03:52:20'),
(3, 'https://app.bitly.com/Boch5Dwf6wA/links/create', 'HQMrfV', '2024-12-21 03:53:44', '2024-12-21 03:53:44'),
(4, 'https://app.bitly.com/Boch5Dwf6wA/links/create', '4G9idw', '2024-12-21 04:04:33', '2024-12-21 04:04:33'),
(5, 'https://bitly.com/', 'ivGIP9', '2024-12-21 04:18:06', '2024-12-21 04:18:06'),
(6, 'https://bitly.com/', 'NRPp9e', '2024-12-21 04:18:24', '2024-12-21 04:18:24'),
(7, 'https://tinyurl.com/', '2RQrsG', '2024-12-21 04:18:35', '2024-12-21 04:18:35'),
(8, 'https://tinyurl.com/', '3WGNWy', '2024-12-21 04:19:16', '2024-12-21 04:19:16'),
(9, 'https://tinyurl.com/', 'nHWJKg', '2024-12-21 04:19:18', '2024-12-21 04:19:18'),
(10, 'https://tinyurl.com/', 'mbUfGk', '2024-12-21 04:19:19', '2024-12-21 04:19:19'),
(11, 'https://tinyurl.com/', 'HVnScR', '2024-12-21 04:19:20', '2024-12-21 04:19:20'),
(12, 'https://tinyurl.com/', 'DbGdjj', '2024-12-21 04:19:21', '2024-12-21 04:19:21'),
(13, 'https://tinyurl.com/', 'V43wDj', '2024-12-21 04:19:22', '2024-12-21 04:19:22'),
(14, 'https://tinyurl.com/', 'aC8w4l', '2024-12-21 04:19:23', '2024-12-21 04:19:23'),
(15, 'https://tinyurl.com/', 'FOqccc', '2024-12-21 04:19:31', '2024-12-21 04:19:31'),
(16, 'https://tinyurl.com/', 'XK36h5', '2024-12-21 04:20:55', '2024-12-21 04:20:55'),
(17, 'https://tinyurl.com/', 'ZEjfSA', '2024-12-21 04:22:12', '2024-12-21 04:22:12'),
(18, 'https://tinyurl.com/', '0araY4', '2024-12-21 04:22:34', '2024-12-21 04:22:34'),
(19, 'https://tinyurl.com/', 'PT9EFT', '2024-12-21 04:23:16', '2024-12-21 04:23:16'),
(20, 'https://tinyurl.com/', '8QSM0H', '2024-12-21 04:26:06', '2024-12-21 04:26:06'),
(21, 'https://tinyurl.com/', 'oZtJ8o', '2024-12-21 04:26:16', '2024-12-21 04:26:16'),
(22, 'https://tinyurl.com/', 'hg6g2T', '2024-12-21 04:27:31', '2024-12-21 04:27:31'),
(23, 'https://tinyurl.com/', 'Uv82Cs', '2024-12-21 04:28:11', '2024-12-21 04:28:11'),
(24, 'https://tinyurl.com/', '3IlPFr', '2024-12-21 04:28:14', '2024-12-21 04:28:14'),
(25, 'https://tinyurl.com/', 'HbgjAp', '2024-12-21 04:29:08', '2024-12-21 04:29:08'),
(26, 'https://tinyurl.com/', 'VWPGLZ', '2024-12-21 04:29:12', '2024-12-21 04:29:12'),
(27, 'https://tinyurl.com/', 'vUxmGf', '2024-12-21 04:29:15', '2024-12-21 04:29:15'),
(28, 'https://tinyurl.com/', 'zVthFK', '2024-12-21 04:29:57', '2024-12-21 04:29:57'),
(29, 'https://tinyurl.com/', 'LcwSC9', '2024-12-21 04:31:29', '2024-12-21 04:31:29'),
(30, 'https://tinyurl.com/', 'UqNmK1', '2024-12-21 04:31:52', '2024-12-21 04:31:52'),
(31, 'https://tinyurl.com/', 'cnoV8U', '2024-12-21 04:32:15', '2024-12-21 04:32:15'),
(32, 'https://tinyurl.com/', 'GhQeLj', '2024-12-21 04:33:07', '2024-12-21 04:33:07'),
(33, 'https://tinyurl.com/', 'mCJqPY', '2024-12-21 04:33:10', '2024-12-21 04:33:10'),
(34, 'https://tinyurl.com/', '5FrWuX', '2024-12-21 04:33:11', '2024-12-21 04:33:11'),
(35, 'https://tinyurl.com/', 'ImPkZe', '2024-12-21 04:33:12', '2024-12-21 04:33:12'),
(36, 'https://tinyurl.com/', 'elX0qW', '2024-12-21 04:33:58', '2024-12-21 04:33:58'),
(37, 'https://tinyurl.com/', 'cFuBth', '2024-12-21 04:34:00', '2024-12-21 04:34:00'),
(38, 'https://tinyurl.com/', 'lfmOpd', '2024-12-21 04:34:01', '2024-12-21 04:34:01'),
(39, 'https://tinyurl.com/', '76BPX2', '2024-12-21 04:35:01', '2024-12-21 04:35:01'),
(40, 'https://chatgpt.com/c/676690f2-d14c-8012-8ff3-842013c8f6e4', 'bTa9zb', '2024-12-21 04:35:20', '2024-12-21 04:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `urls_short_url_unique` (`short_url`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
