-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 07:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_07_11_152531_create_users', 1),
(3, '2023_07_23_133552_create_products', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `sure_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `entry_time` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `app_status` varchar(255) NOT NULL,
  `status_date` varchar(255) NOT NULL,
  `ref_number` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `issu_date` varchar(255) NOT NULL,
  `exp_date` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `first_name`, `sure_name`, `middle_name`, `birth_date`, `type`, `duration`, `entry_time`, `period`, `app_status`, `status_date`, `ref_number`, `country`, `district`, `number`, `issu_date`, `exp_date`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 'Kato', 'Marcia Clemons', 'Basil Rhodes', '20-Jun-1984', 'Amet laboriosam es', 'Aperiam officia mini', '1998-09-12', '01/01/2024 - 01/15/2024', 'Sed quasi ex facilis', '13-Dec-2012', '603', 'Id magni quis facili', 'Voluptatem rem volup', '570', '24-Feb-1977', '18-Jun-1979', 'uploads/1709567529-slider7.jpg', '2024-03-04 06:36:03', '2024-03-04 09:52:09'),
(2, 'Zachery', 'Bradley Mayer', 'Ulric Lindsey', '18-Sep-1971', 'Est voluptate ea vo', 'Est quam temporibus', '2000-05-12', '01/01/2024 - 01/15/2024', 'Suscipit nobis tempo', '14-Feb-1981', '926', 'Hic magni natus magn', 'Ea ut placeat volup', '432', '03-Dec-2004', '02-Sep-2023', 'uploads/1709565955-tool-razor-utility-knife-small-appliances-home-appliances-1157294-pxhere.com_ (1).jpg', '2024-03-04 09:25:55', '2024-03-04 09:25:55'),
(4, 'Cherokee', 'Bree Wagner', 'Graiden Berger', '28-Aug-2006', 'Ut provident suscip', 'Reprehenderit id bea', '2009-11-09', '01/01/2024 - 01/15/2024', 'Aperiam porro sint p', '27-Oct-1973', '672', 'Vitae rem et optio', 'Ex mollit assumenda', '723', '28-Dec-1985', '17-Mar-2014', 'uploads/1709576571-watch-hand-clock-time-fashion-set-686610-pxhere.com_-1.jpg', '2024-03-04 12:22:52', '2024-03-04 12:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `mobile`, `password`, `otp`, `created_at`, `updated_at`) VALUES
(1, 'MR a', 'Abdullah', 'abir@gmail.com', '0174845151', 'abir@gmail.com', '', '2024-03-04 09:41:56', '2024-03-04 11:34:11'),
(2, 'Gil', 'Morrow', 'vufilubi@mailinator.com', 'Ducimus enim minim', 'Pa$$w0rd!', '0', '2024-03-04 03:48:23', '2024-03-04 03:48:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
