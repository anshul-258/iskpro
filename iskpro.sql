-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2021 at 05:03 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.2.24-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iskpro`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-10-21 07:13:53', '2019-10-21 07:13:53'),
(2, 'salesrep', '2019-10-21 07:13:53', '2019-10-21 07:13:53'),
(3, 'contributor', '2021-02-15 10:48:06', '2021-02-15 10:48:06'),
(4, 'customer', '2021-02-15 10:48:06', '2021-02-15 10:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$fDO.a9nOKZ8cMsct/ayveeR6y1IvdnTuLm/WP7DDs/99Bp/RZGOA.', 1, 'active', 'ODMiICsn4a205xml44cuHEwXU8UfGAQDNHtsOVNQ2y06YEsl8tB9KcAWoy3I', '2019-10-21 01:46:16', '2021-02-16 01:03:27'),
(2, 'salesrep', 'sale@gmail.com', '$2y$10$p3DKtqVSR2kKOkKYTvCWee9bFSVsfk0z/4.Ib2W/hQV2LyCI1aNaG', 2, 'active', 'pyuibZcUv2FCPIvGmVLbE0R61M5Wlj2lCLs4dB5ZI0UwqLX4gT5xiqB10aAz', '2019-10-21 02:01:22', '2019-11-28 07:18:05'),
(3, 'cont', 'cont@gmail.com', '$2y$10$p3DKtqVSR2kKOkKYTvCWee9bFSVsfk0z/4.Ib2W/hQV2LyCI1aNaG', 3, 'active', '6VqdLPyJlTCEVDNgtBGyb52BKBAu30XaxNmTJoBwnIxWnzQIAo9loLq5mars', '2019-10-21 02:01:22', '2019-11-28 07:18:05'),
(4, 'customer', 'cust@gmail.com', '$2y$10$p3DKtqVSR2kKOkKYTvCWee9bFSVsfk0z/4.Ib2W/hQV2LyCI1aNaG', 4, 'active', 'hglinQlS6Skc7ZHDPu8L4ZG3Nq3QbLIgBR3yd5YIo5PsEQerQ5xWGm2u3Qzp', '2019-10-21 02:01:22', '2019-11-28 07:18:05'),
(7, 'anshul', 'anshul@gmail.com', '$2y$10$fDO.a9nOKZ8cMsct/ayveeR6y1IvdnTuLm/WP7DDs/99Bp/RZGOA.', 4, 'active', 'RTveiPcVi9l0sEx3eThU6hfI6ayNDIGubuOpCvbilcyl5apuA6vzBCCa3pl8', '2021-02-16 05:37:20', '2021-02-16 05:41:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
