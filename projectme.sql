-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 03:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectme`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_summaries`
--

CREATE TABLE `agent_summaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `threesession_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total_call` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_ticket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent_summaries`
--

INSERT INTO `agent_summaries` (`id`, `name`, `threesession_id`, `total_call`, `total_ticket`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `user_name`, `update_user_name`) VALUES
(10, 'Emona', 2, '12', '10', 1, NULL, NULL, NULL, NULL, '2020-07-13 23:06:25', '2020-07-13 23:06:25', 'aupu', ''),
(11, 'Onty', 1, '44', '22', 1, NULL, NULL, NULL, NULL, '2020-07-13 23:06:47', '2020-07-13 23:06:47', 'aupu', ''),
(12, 'Purnima', 4, '40', '30', 2, NULL, NULL, NULL, NULL, '2020-07-13 23:07:48', '2020-07-13 23:07:48', 'noor', ''),
(13, 'Hoimonty', 2, '22', '20', 2, NULL, NULL, NULL, NULL, '2020-07-13 23:08:20', '2020-07-13 23:08:20', 'noor', ''),
(14, 'Shiful', 4, '50', '25', 7, NULL, NULL, NULL, NULL, '2020-07-13 23:09:46', '2020-07-13 23:09:46', 'Muhammad', ''),
(15, 'polash', 1, '70', '50', 7, NULL, NULL, NULL, NULL, '2020-07-13 23:10:08', '2020-07-13 23:10:08', 'Muhammad', ''),
(16, 'Fuad', 1, '35', '23', 8, NULL, NULL, NULL, NULL, '2020-07-13 23:11:11', '2020-07-13 23:11:11', 'Ibrahim', ''),
(17, 'Tanvir', 4, '55', '49', 8, NULL, NULL, NULL, NULL, '2020-07-13 23:11:40', '2020-07-13 23:11:40', 'Ibrahim', ''),
(18, 'Krishna', 1, '20', '12', 9, NULL, NULL, NULL, NULL, '2020-07-13 23:12:39', '2020-07-13 23:12:39', 'Maryam', ''),
(19, 'Salman Khan', 2, '65', '39', 9, 1, NULL, NULL, NULL, '2020-07-13 23:13:06', '2020-07-14 20:44:37', 'Maryam', 'aupu'),
(21, 'Testing P_Delete 1111', 1, '111', '333', 1, 1, NULL, '2020-07-15 20:31:41', NULL, '2020-07-15 20:31:23', '2020-07-15 20:31:41', 'aupu', 'aupu'),
(22, 'Delete Testing 555', 1, 'www', 'fff', 9, NULL, NULL, '2020-07-15 20:53:07', NULL, '2020-07-15 20:52:53', '2020-07-15 20:53:07', 'Maryam', NULL),
(23, 'Test after csv', 2, '21', '31', 9, NULL, NULL, NULL, NULL, '2020-07-21 23:22:47', '2020-07-21 23:22:47', 'Maryam', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `csv_agents`
--

CREATE TABLE `csv_agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `threesession_id` int(20) UNSIGNED NOT NULL,
  `total_call` int(191) NOT NULL,
  `total_ticket` int(191) NOT NULL,
  `created_by` int(20) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_summary_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csv_agents`
--

INSERT INTO `csv_agents` (`id`, `name`, `threesession_id`, `total_call`, `total_ticket`, `created_by`, `user_name`, `agent_summary_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '', 1, 106, 95, 9, '', NULL, NULL, '2020-08-03 05:11:31', '2020-08-03 05:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_03_015911_create_threesessions_table', 2),
(5, '2020_07_03_025004_create_agent_summaries_table', 3),
(6, '2020_07_03_133902_create_permissions_table', 4),
(7, '2020_07_03_134015_create_roles_table', 4),
(8, '2020_07_03_141053_create_roles_permissions_table', 5),
(9, '2020_07_14_041844_modify_agent_summary', 6),
(10, '2020_07_15_023551_modifyagent_sumary', 7),
(11, '2020_07_22_023203_create_csv_agents_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `threesessions`
--

CREATE TABLE `threesessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threesessions`
--

INSERT INTO `threesessions` (`id`, `name`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Morning', NULL, NULL, '2020-07-02 21:35:57', '2020-07-02 22:01:55'),
(2, 'Evening', NULL, NULL, '2020-07-02 22:02:04', '2020-07-02 22:02:04'),
(4, 'Night', NULL, NULL, '2020-07-02 22:09:17', '2020-07-02 22:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','others') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('admin','supervisor','agent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `gender`, `user_type`, `user_status`, `image`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aupu', 'aupuchowdhhhury@gmail.com', '2020-07-03 08:33:00', '01787667262', '$2y$10$GiHVAug0vvLchdSDGmZNSO5VbC.JXPGIaE/aiy5BIsXEa0ildJVQa', 'male', 'admin', 'active', 'hair-styles-for-men-31.jpg', NULL, NULL, '2020-07-03 08:31:37', '2020-07-03 08:33:00'),
(2, 'noor', 'noor.web.journey@gmail.com', '2020-07-05 21:22:03', '01787667262', '$2y$10$DzJsSwkHShcz/mb776BBsePY0hKA9EPHRsBOPJUz3xc6OI26CfMOe', 'male', 'supervisor', 'active', 'photo-1506794778202-cad84cf45f1d.jfif', NULL, NULL, '2020-07-05 21:21:07', '2020-07-05 21:22:03'),
(7, 'Muhammad', 'aupuchowdhury@live.com', '2020-07-13 21:02:08', '01787667262', '$2y$10$yqv.eui.TA6hVU4Bf7fQPO6ZvQrANXwKF5YksK8hj9ql70jS8Fr9a', 'others', 'agent', 'active', 'photo-1506794778202-cad84cf45f1d.jfif', NULL, NULL, '2020-07-13 21:01:52', '2020-07-13 21:02:08'),
(8, 'Ibrahim', 'ibrahim@gmail.com', '2020-07-13 21:03:17', '01787667262', '$2y$10$FKfWfawmoGH104CGcLiXj.FSAje22Ecln9kx8sq61ORvBgmoDOTuy', 'others', 'agent', 'active', 'long-hair-men-3-1200x1249.jpg', NULL, NULL, '2020-07-13 21:03:05', '2020-07-13 21:03:17'),
(9, 'Maryam', 'maryam@abc.com', '2020-07-13 21:04:59', '01787667262', '$2y$10$U/Zz0yp5sub8lx6R9urFcuZQgwtRchhe4nMqopQCewKQ6AqIGL/Xu', 'female', 'agent', 'active', 'hair-styles-for-men-31.jpg', NULL, NULL, '2020-07-13 21:04:47', '2020-07-13 21:04:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_summaries`
--
ALTER TABLE `agent_summaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_summaries_threesession_id_foreign` (`threesession_id`);

--
-- Indexes for table `csv_agents`
--
ALTER TABLE `csv_agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `csv_agents_agent_summary_id_foreign` (`agent_summary_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `threesessions`
--
ALTER TABLE `threesessions`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `agent_summaries`
--
ALTER TABLE `agent_summaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `csv_agents`
--
ALTER TABLE `csv_agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `threesessions`
--
ALTER TABLE `threesessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent_summaries`
--
ALTER TABLE `agent_summaries`
  ADD CONSTRAINT `agent_summaries_threesession_id_foreign` FOREIGN KEY (`threesession_id`) REFERENCES `threesessions` (`id`);

--
-- Constraints for table `csv_agents`
--
ALTER TABLE `csv_agents`
  ADD CONSTRAINT `csv_agents_agent_summary_id_foreign` FOREIGN KEY (`agent_summary_id`) REFERENCES `agent_summaries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
