-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 01:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentify-dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `daily_rent_price` varchar(255) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand`, `model`, `year`, `car_type`, `daily_rent_price`, `availability`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Prius', 'Toyota', '2012', 2012, 'sedan', '1500', 1, 'backend/assets/adminUploads/cars/1810876107437001.jpg', '2024-09-18 11:26:14', '2024-09-22 00:20:35'),
(6, 'Hilux', 'Toyota', '2005', 2005, 'truck', '1000', 1, 'backend/assets/adminUploads/cars/1810876134187607.jpg', '2024-09-18 11:38:36', '2024-09-22 00:21:00'),
(7, 'Camry', 'Toyota', '2002', 2002, 'sedan', '2500', 1, 'backend/assets/adminUploads/cars/1810876147352431.jpg', '2024-09-21 21:27:30', '2024-09-22 00:21:12'),
(8, 'Corolla', 'Toyota', '2002', 2002, 'sedan', '1000', 1, 'backend/assets/adminUploads/cars/1810876163647596.jpg', '2024-09-21 21:28:08', '2024-09-22 00:21:28'),
(9, 'Land Cruiser Prado', 'Toyota', '20019', 2019, 'suv', '7500', 1, 'backend/assets/adminUploads/cars/1810876175636079.jpg', '2024-09-21 21:28:47', '2024-09-22 00:21:40'),
(14, 'Jeep', 'Jeep', '2012', 2012, 'suv', '1500', 1, 'backend/assets/adminUploads/cars/1810875491306288.jpg', '2024-09-22 00:10:46', '2024-09-22 00:10:46'),
(15, 'Range Rover', 'Land Rover', '2016', 2016, 'suv', '30000', 1, 'backend/assets/adminUploads/cars/1810876193969350.jpg', '2024-09-22 00:15:21', '2024-09-22 00:21:57'),
(16, 'Audi', 'Audi', '2024', 2024, 'sports car', '15000', 1, 'backend/assets/adminUploads/cars/1810876239394503.jpg', '2024-09-22 00:16:46', '2024-09-22 08:59:41'),
(17, 'Marcedes', 'Marcedes', '2015', 2015, 'sports car', '8500', 1, 'backend/assets/adminUploads/cars/1810876248437922.jpg', '2024-09-22 00:18:24', '2024-09-22 09:00:09'),
(18, 'BMW M16', 'BMW', '2016', 2016, 'sports car', '50000', 1, 'backend/assets/adminUploads/cars/1810876260136057.jpg', '2024-09-22 00:19:55', '2024-09-22 00:22:59'),
(19, 'KIA Sedona', 'KIA', '2012', 2012, 'minivan', '2500', 1, 'backend/assets/adminUploads/cars/1810908945408207.jpg', '2024-09-22 09:02:30', '2024-09-22 09:02:30'),
(20, 'Volkswagen GOLF', 'Volkswagen', '2024', 2024, 'hatchback', '1200', 1, 'backend/assets/adminUploads/cars/1810909052662755.jpg', '2024-09-22 09:04:13', '2024-09-22 09:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(8, '0001_01_01_000000_create_users_table', 1),
(9, '0001_01_01_000001_create_cache_table', 1),
(10, '0001_01_01_000002_create_jobs_table', 1),
(11, '2024_09_18_142539_create_cars_table', 1),
(15, '2024_09_18_142930_create_rentals_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `pickup_location` text NOT NULL,
  `drop_off_location` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_cost` decimal(8,2) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'ongoing',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `user_id`, `car_id`, `pickup_location`, `drop_off_location`, `start_date`, `end_date`, `total_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 16, 'Shaheenbagh', 'St. Martin', '2001-10-24', '2006-10-24', 75000.00, 'completed', '2024-09-24 18:50:58', '2024-09-26 06:00:25'),
(2, 7, 1, 'Mirpur', 'Narangonj', '2026-09-24', '2028-09-24', 3000.00, 'cancelled', '2024-09-24 18:51:31', '2024-09-26 05:50:33'),
(3, 10, 17, 'Narayongonj', 'Sylhet', '2009-10-24', '2013-10-24', 34000.00, 'cancelled', '2024-09-25 10:19:27', '2024-09-25 11:41:32'),
(4, 10, 20, 'Sylhet', 'Dhaka', '2015-10-24', '2016-10-24', 1200.00, 'scheduled', '2024-09-25 10:23:53', '2024-09-26 05:51:21'),
(5, 6, 7, 'Cittagong', 'Kumilla', '2026-09-24', '2026-09-24', 2500.00, 'scheduled', '2024-09-25 12:15:51', '2024-09-26 05:51:30'),
(6, 6, 7, 'Kumilla', 'Chittagong', '2027-09-24', '2027-09-24', 2500.00, 'cancelled', '2024-09-25 12:17:13', '2024-09-26 05:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dLqU0mtpnZvKLWt1TzT4asemGnUSDPjZJK75mbXo', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibHhrZ1BYVnBOUzFjMXBhSFNrQU9pTDZQS3lKMnVGeU4wVVZsUmh2cSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2N1c3RvbWVyL21hbmFnZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1727372997),
('V4Pe8fm3kB07hQP9sMNxrCVewX2H2U0AgXEkz5yW', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRkdqeTRVR0liM1g4YVNTY0ZNRDdhbXV5bG5McW0xTHhETGZ6OEpRZiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbXktYWNjb3VudC9vcmRlcnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O30=', 1727366891);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'customer' COMMENT 'admin/customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi Hasan Nayem', 'nayemmh66@gmail.com', NULL, '$2y$12$4.CCabtC6n3NYKdKye5D/OUbv9UAQ00a2yedQ3rIf.fq3CaNIAcIe', 'admin', NULL, '2024-09-18 09:04:53', '2024-09-22 05:19:15'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$12$gqoIFqYCeWqb4nmQKBcdZubY2r2UeXar0/703T08v08VBksjrNkYG', 'admin', NULL, '2024-09-18 09:12:15', '2024-09-18 15:18:05'),
(3, 'Miss Julie Gibson', 'vroob@example.org', '2024-09-22 05:17:19', '$2y$12$HLxKEFzQUo4tvPk39fSq7uvU8mO5SdXBftvOhgWng5DvrvC2/d9hu', 'customer', '0MonbHT9qR', '2024-09-22 05:17:19', '2024-09-22 05:17:19'),
(4, 'Mazie Jerde', 'emmie99@example.net', '2024-09-22 05:17:19', '$2y$12$HLxKEFzQUo4tvPk39fSq7uvU8mO5SdXBftvOhgWng5DvrvC2/d9hu', 'customer', 'eD6alGQCTT', '2024-09-22 05:17:19', '2024-09-22 05:17:19'),
(5, 'Corbin Berge', 'anderson.delphia@example.net', '2024-09-22 05:17:19', '$2y$12$HLxKEFzQUo4tvPk39fSq7uvU8mO5SdXBftvOhgWng5DvrvC2/d9hu', 'customer', 'MK94Y8WpyL', '2024-09-22 05:17:19', '2024-09-22 05:17:19'),
(6, 'Jean Crona', 'mhirthe@example.net', '2024-09-22 05:17:19', '$2y$12$HLxKEFzQUo4tvPk39fSq7uvU8mO5SdXBftvOhgWng5DvrvC2/d9hu', 'customer', 'b4u0huOnHK', '2024-09-22 05:17:19', '2024-09-22 05:17:19'),
(7, 'Mr. Brant Lind', 'dgraham@example.org', '2024-09-22 05:17:19', '$2y$12$HLxKEFzQUo4tvPk39fSq7uvU8mO5SdXBftvOhgWng5DvrvC2/d9hu', 'customer', 'A4pQVE9KKv', '2024-09-22 05:17:19', '2024-09-22 05:17:19'),
(8, 'William Torphy', 'wyman.elvis@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '8CCmfclU0m', '2024-09-22 05:17:46', '2024-09-22 05:17:46'),
(9, 'Dr. Isac Bashirian', 'rosella08@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'LuE4YCCFXm', '2024-09-22 05:17:46', '2024-09-22 05:17:46'),
(10, 'Ms. Ottilie Bosco', 'cormier.gino@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'BMVVuAtVbjMExHiUmX7UoHOYJAuPynuJEUzpVmCAyPcRsv9UAtxMu3DOKCFb', '2024-09-22 05:17:46', '2024-09-25 18:13:36'),
(11, 'Anabelle Wilderman', 'bcrist@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'cSxLdLnvFiURT5HrhyjiMXaF0hTrTSWZOtVpP2qqGRAsEgBwqpQpmLdNDHSO', '2024-09-22 05:17:47', '2024-09-24 23:54:35'),
(12, 'Claudine Bins DDS', 'johnny42@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'Nq2Gdy2fsK', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(13, 'Alice Weimann', 'hoeger.ariane@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'XAQVe7qZYg', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(14, 'Mr. Mario Carter', 'feeney.jace@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'O93tTtDiOi', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(15, 'Mr. Lee Heller II', 'bhessel@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'nEBKKCdz04', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(16, 'Gregory Harris I', 'maia89@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'wsCVHY7HCd', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(17, 'Prof. Breana Windler MD', 'elta03@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'x1QezbzpbD', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(18, 'Dr. Katelynn Braun', 'ijaskolski@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'hq0JFtHGvs', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(19, 'Danny Schiller', 'fay22@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'hSnzB3BOYX', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(20, 'Kara Bernhard', 'andy01@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'Bq0jX742wK', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(21, 'Valentine White', 'mavis.gleichner@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '0ajylzdawzavMB5UNYvo633GgqswFhR1r7NDj9zeaZ8Rer3kWNT7az4jkman', '2024-09-22 05:17:47', '2024-09-23 14:36:34'),
(22, 'Antonina Pollich', 'oswald.crist@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'x7qT7kWQw4', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(23, 'Prof. Taya Runte PhD', 'upton.marc@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'ZHIDlkaiGy', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(24, 'Dr. Monserrate Kovacek MD', 'alayna14@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '4FzsKso9Ba', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(25, 'Dorris Lind', 'storphy@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'HdZQvefmSI', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(26, 'Charity Dare', 'mills.hermann@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'htaUup60ZH', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(27, 'Silas Wolf PhD', 'haley.boyle@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'tF9JWlEXHC', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(28, 'Orland Emard DVM', 'skulas@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'HjOvvFWoiL', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(29, 'Gerhard Satterfield', 'jane.erdman@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'qjohrkfa95', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(30, 'Marion Gusikowski', 'annetta80@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'xYiIcCMrSo', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(31, 'Michelle Prosacco', 'kayli80@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '95NFo0Itfn', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(32, 'Mr. Anderson Harvey DVM', 'armstrong.florencio@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'UYdtGlcpUn', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(33, 'Brendan Tromp', 'wunsch.hobart@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '3LOAXcN4L8', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(34, 'Adam Prosacco', 'owaelchi@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'EXZYApWbpV', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(35, 'Dr. Darrell Brakus MD', 'brendan16@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '7icKPYQ5Fu', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(36, 'Dr. Kristin Grimes MD', 'araceli35@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'SloAkn9rN9', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(37, 'Chester Kshlerin', 'elsie.daniel@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'P7faWSSCXE', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(38, 'Karlee Connelly', 'jevon47@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'pw41IPrPiC', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(39, 'Queen Donnelly', 'karianne.veum@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'cHfT4hgEkd', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(40, 'Dr. Kendrick Beer', 'gtremblay@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'w5A4QKChhc', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(41, 'Prof. Osvaldo Lesch DDS', 'rkessler@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'U1vYIexgdA', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(42, 'Virgil Maggio', 'georgette18@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'ydsoGy5qkx', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(43, 'Adrianna Romaguera', 'myah.hane@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'ae9zWRDokF', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(44, 'Kamren Botsford', 'london20@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'KvbUitv2xr', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(45, 'Prof. Cristal Murazik PhD', 'jayce.wilkinson@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'r7bWOoiqeq', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(46, 'Dr. Haskell Leannon IV', 'jakubowski.myrtle@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '5bZ9RodsiN', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(47, 'Ceasar Dooley', 'ryan.fay@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'KREE5XbecY', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(48, 'Anne Doyle', 'hellen93@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'bBE1t67jwg', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(49, 'Rosalinda Dooley', 'jason59@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'FeyumOD1dp', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(50, 'Kaycee Renner', 'beier.alba@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'KJvlPpVF4T', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(51, 'Prof. Winfield Moore I', 'jazlyn.yost@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 't6V4JL5YYO', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(52, 'Prof. Laila Tillman', 'jhackett@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '5teMRrqxLA', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(53, 'Isabella Reynolds', 'cyril29@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'txDu6MlWYB', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(54, 'Estrella Spencer', 'mcdermott.vesta@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'FzTSiYHqN8', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(55, 'Candido Predovic', 'stanton.kameron@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'V2P2wRlL1l', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(56, 'Joanne Greenholt', 'haven90@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'HeWimBB7m0', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(57, 'Rigoberto Prosacco MD', 'maeve.botsford@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'oCjMxTw1lj', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(58, 'Erick Ondricka', 'xcummings@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '65rUqqiNl3', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(59, 'Ms. Leilani Klocko', 'lizzie.gleichner@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'jRBRQ6Ksp7', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(60, 'Ms. Jeanette Brakus', 'wolff.billie@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'gYuyJUzVSg', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(61, 'Constance Langosh', 'shayne98@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'S2zx3nm1YD', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(62, 'Frida Bernhard', 'otis84@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'RnTkMrdPyU', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(63, 'Prof. Aaliyah Wuckert', 'jedidiah.quitzon@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '1mHogG5aLz', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(64, 'Shakira Gleichner', 'runolfsson.hilario@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'NFRbYjTYYY', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(65, 'Kimberly Torp', 'hattie57@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '5ZOLnQV9tT', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(66, 'Ellis Volkman I', 'rath.marc@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'sIyg3Gaoo9', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(67, 'Mrs. Delphine Donnelly I', 'jessie.frami@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'pxOUNWVAyB', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(68, 'Mr. Gabriel Kris', 'dreynolds@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'y8xJqAS5FD', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(69, 'Willie Roob', 'nolan.matteo@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'XECq5fadNN', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(70, 'Joanie Yundt III', 'ariane.carroll@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'nogg2WVGxF', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(71, 'Meredith Jones PhD', 'aeichmann@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'kfSFEdibtX', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(72, 'Nelda Spinka Sr.', 'bart.wolff@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'wYlHpxDYrt', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(73, 'Mrs. Nola Buckridge Sr.', 'rokuneva@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'OWStv0Mu7v', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(74, 'Lonnie Bernhard', 'bbraun@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '0klSYuD5Qx', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(75, 'Ms. Elissa Turner', 'tpollich@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'skxR2ha3CV', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(76, 'Mr. Dedrick Bartell', 'toni.sanford@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'gY9qyEsl4e', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(77, 'Aiden Grimes', 'graham.reggie@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'zuUamRb391', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(78, 'Prof. Jaren Hirthe V', 'phahn@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'ZZgL5HZPbv', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(79, 'Charlene Tromp', 'hparisian@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '2pqh7dMEbG', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(80, 'Eugene Hessel', 'qvonrueden@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'iJGymkru6N', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(81, 'Mr. Ward Von', 'ucrooks@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'KZnRZIqVsG', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(82, 'Ahmad Langosh DDS', 'fahey.bernie@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'JR4ZbjaG8p', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(83, 'Orval Kreiger DVM', 'ernser.caterina@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'ydHQCYemvt', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(84, 'Clifford Walker', 'jweimann@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'EbsKm3Bplu', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(85, 'Ms. Tania Strosin', 'hackett.toby@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'JRtop7mtG7', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(86, 'Telly Hane', 'moriah09@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'fEOFoHoIsA', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(87, 'Dorothy Braun', 'trath@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'WZ9HVqqGh0', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(88, 'Marshall Reilly', 'cordia65@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'ko0zeZDk67', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(89, 'Arvid Conroy', 'slesch@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'TynXm0o0La', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(90, 'Devonte Senger', 'ikessler@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'sVqWRwsCpn', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(91, 'Jimmy Kohler', 'jerde.lelah@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '4khvdxHaL9', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(92, 'Gerson Willms', 'zdamore@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'OBzeaXx9fZ', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(93, 'Ashly Gleichner', 'ullrich.harley@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '5eF4quIPch', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(94, 'Keaton D\'Amore', 'sophie.murazik@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'B9AP6l7dvF', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(95, 'Izabella Ankunding', 'alayna13@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'hpJWLfxwty', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(96, 'Marlene Christiansen', 'ryan33@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'dyAdLXSkZ5', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(97, 'Juliana Rippin III', 'ruthe73@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'OwpmO18Cht', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(98, 'Kelli Hammes', 'ratke.myrna@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'u145a6rIyJ', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(99, 'Logan Mayert DVM', 'nwolf@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'VZlagPuAu3', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(100, 'Mathilde Koss', 'lucious.bins@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'QgaJxgt5Ld', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(101, 'Mrs. Isabelle Pfannerstill', 'walton66@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'cARM7B9DXd', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(102, 'Lurline Lind', 'gutmann.marjolaine@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'JOfcUbeDMe', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(103, 'Della Zboncak MD', 'florine91@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '4rNYEolRbT', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(104, 'Dr. Larue Spencer III', 'hane.edward@example.com', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', '3EdnhU32u0', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(105, 'Susana Walsh', 'cdietrich@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'A7B7PBhntE', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(106, 'Mr. Torrance Morar Jr.', 'michelle35@example.net', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'uh3HlyL4r1', '2024-09-22 05:17:47', '2024-09-22 05:17:47'),
(107, 'Orpha Nader', 'wisozk.mitchel@example.org', '2024-09-22 05:17:46', '$2y$12$8V45Ow1c9kN0xA8nsxYmue1RgxEwssIw5TLgwbGIhqy/y/0H9JF.y', 'customer', 'xWWdg1D3sZ', '2024-09-22 05:17:47', '2024-09-22 05:17:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rentals_user_id_foreign` (`user_id`),
  ADD KEY `rentals_car_id_foreign` (`car_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
