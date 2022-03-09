-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 07:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpbddki`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pelapor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pelapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kejadian` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_kejadian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama_pelapor`, `alamat_pelapor`, `no_hp`, `jenis_kejadian`, `lokasi_kejadian`, `created_at`, `updated_at`) VALUES
(1, 'wowo', 'jaktim', '123445888', 'AMBULANCE', '-6.3654609, 106.9485883', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(2, 'ariq', 'jakarta', '123445888', 'KEBAKARAN', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(3, 'amel', 'jakarta', '123445888', 'KEBAKARAN', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(4, 'zaki', 'jakarta', '123445888', 'AMBULANCE', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(5, 'Zaki', 'jakarta', '123445888', 'POLISI', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(6, 'Kemal', 'jakarta', '123445888', 'POLISI', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(7, 'Arik', 'jakarta', '123445888', 'KEBAKARAN', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(8, 'Alya', 'jakarta', '123445888', 'KEBAKARAN', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(9, 'Yoga', 'jakarta', '123445888', 'AMBULANCE', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(10, 'Inka', 'jakarta', '123445888', 'AMBULANCE', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(11, 'Amin', 'jakarta', '123445888', 'KEBAKARAN', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(12, 'Angga', 'jakarta', '1234477888', 'BANJIR', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(13, 'Ayu', 'jakarta', '123446665', 'BANJIR', '-6.161728,106.8069432', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(14, 'farel', 'bekasi', '123446665', 'KEBAKARAN', '-6.2845209,106.8346614', '2020-09-10 12:10:15', '2020-09-10 12:10:15'),
(15, 'farel', 'bekasi', '123446665', 'KEBAKARAN', '-6.2845209,106.8346614', '2020-12-12 12:10:15', '2020-09-10 12:10:15'),
(16, 'amin', 'jakarta selatan', '123446665', 'BANJIR', '-6.229728,106.6894292', '2020-12-12 12:10:15', '2020-09-10 12:10:15'),
(17, 'zainal', 'jakarta selatan', '123446665', 'BANJIR', '-6.229728,106.6894292', '2020-12-12 12:10:15', '2020-09-10 12:10:15'),
(18, 'Probowo', 'jakarta timur', '12348888', 'KEBAKARAN', '-6.229728,106.6894292', '2020-12-12 12:10:15', '2020-09-10 12:10:15'),
(19, 'Cahyo', 'jakarta timur', '12348888', 'KEBAKARAN', '-6.229728,106.6894292', '2020-12-30 04:24:15', '2020-09-10 12:10:15');

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
(3, '2020_09_20_071316_create_table_data', 1);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin123@gmail.com', NULL, '$2y$10$iJgDVmfPKExumJ6wjvl./uFpcC1/yZtzZpB41hIdyAGpQ/Kg9MHFC', NULL, '2020-12-22 01:43:07', '2020-12-22 01:43:07'),
(2, 'admn', 'admin4321@gmail.com', NULL, '$2y$10$WxnhCK9MwNw/vWbkhA.q1OX2yh32ObkyRrtI6C78RF9OsrtvuOG5e', NULL, '2020-12-22 07:26:16', '2020-12-22 07:26:16'),
(3, 'Ariq', 'bpbd@gmail.com', NULL, '$2y$10$bQ2T/nidCuwuuzuCp5RzzuNKOOyC7dByGgGac8930gAv92y8P.F3y', NULL, '2020-12-22 19:12:44', '2020-12-27 08:54:19'),
(4, 'rashad', 'admin@gmail.com', NULL, '$2y$10$ot.5m4fUvOLqTfiOq8Rc9OyWgHN2AeeyZ6wge6qSWkGBC3bywzuGe', NULL, '2020-12-29 21:13:04', '2020-12-29 21:21:20'),
(5, 'kenda', 'kenda@gmail.com', NULL, '$2y$10$cqQ3a/BeJmYvDll1A3T3s.JpzGMv9tKXPSKrLc4eWrqxcG56AiUlq', NULL, '2021-03-22 04:36:01', '2021-03-22 04:36:01'),
(6, 'udin', 'udin@gmail.com', NULL, '$2y$10$hX7OYyy8fv1/2Kxevt4xqeUCHlsC4gxaOmJcSMSzGkkUhcKUVs/si', NULL, '2021-06-21 09:41:33', '2021-06-21 09:41:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
