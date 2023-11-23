-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 10:24 AM
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
-- Database: `tita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` text NOT NULL,
  `profile_img` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `profile_img`, `created_at`, `updated_at`) VALUES
(1, 'jhon doe', 'admin@gmail.com', '$2y$10$IiIkCc2kAwX0xI0wGL5KUONglx9Um7M3/gDBVcsCUBxaERHxPgzHS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_description` longtext DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category`, `title`, `sub_description`, `slug`, `image`, `description`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'why-do-we-use-it', 'images/blog/1699860060_speech.png', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n<p>&nbsp;</p>', 'test', 'test', '2023-11-13 01:51:00', '2023-11-13 01:52:02'),
(4, 'phone', 'Nihil est earum null', 'Impedit commodi sae', 'nihil-est-earum-null', '131120231699871352_newspaper.png', 'Eos labore adipisic', 'Cillum ullam dolorem', 'Molestiae maiores no', '2023-11-13 04:59:12', '2023-11-13 04:59:12'),
(5, 'laptop', 'demo', 'test', 'demo', '151120231700051112_free-vector-graphic-workspace-of-web-developer-with-text-code-on-abstract-blue-background-isometric-design-for-software-preview-110109393.jpg', 'Eveniet ipsa quia', 'Reprehenderit vitae', 'Temporibus unde cumq', '2023-11-15 06:55:12', '2023-11-15 06:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `choose_colors`
--

CREATE TABLE `choose_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_one` varchar(255) DEFAULT NULL,
  `phone_two` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `installers`
--

CREATE TABLE `installers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `approvel_by_admin` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installers`
--

INSERT INTO `installers` (`id`, `name`, `email`, `phone_number`, `password`, `status`, `approvel_by_admin`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'teethi  dhar', 'admin@gmail.com', '1234567890', '$2y$12$vFEztHSig4OMpxv.7xIaQ.SPKKU4i2uYPIXTWwBtOJ/U5IjSuhN0G', 'active', 'approve', NULL, '2023-11-20 00:40:06', '2023-11-20 03:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `installer_banks`
--

CREATE TABLE `installer_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text NOT NULL,
  `card_holder_name` text NOT NULL,
  `card_number` text NOT NULL,
  `cvv` text NOT NULL,
  `expiry_month` text NOT NULL,
  `expiry_year` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installer_banks`
--

INSERT INTO `installer_banks` (`id`, `installer_id`, `card_holder_name`, `card_number`, `cvv`, `expiry_month`, `expiry_year`, `created_at`, `updated_at`) VALUES
(1, '2', 'Leslie Davidson', '1234444444444444', '1233', '04', '2030', '2023-11-15 05:52:34', '2023-11-15 06:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `installer_infos`
--

CREATE TABLE `installer_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text NOT NULL,
  `national_identification_no` text NOT NULL,
  `residental_address` text NOT NULL,
  `ocupation` text NOT NULL,
  `passport_photo` text NOT NULL,
  `national_id_card` text NOT NULL,
  `drivers_license` text NOT NULL,
  `company_name` text NOT NULL,
  `cac_registration` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installer_infos`
--

INSERT INTO `installer_infos` (`id`, `installer_id`, `national_identification_no`, `residental_address`, `ocupation`, `passport_photo`, `national_id_card`, `drivers_license`, `company_name`, `cac_registration`, `created_at`, `updated_at`) VALUES
(1, '1', '789654', 'Quidem quod est con', 'Et provident doloru', 'images/User/1700460605_speech.png', 'images/User/1700460605_healthy-lifestyle.png', 'images/User/1700460605_travel.png', 'Sandoval and Rocha LLC', 'Nisi quia eos commo', '2023-11-20 00:40:06', '2023-11-20 00:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `installer_locations`
--

CREATE TABLE `installer_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text NOT NULL,
  `street_no` text NOT NULL,
  `plot` text DEFAULT NULL,
  `street_name` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installer_locations`
--

INSERT INTO `installer_locations` (`id`, `installer_id`, `street_no`, `plot`, `street_name`, `city`, `state`, `zip`, `created_at`, `updated_at`) VALUES
(1, '1', 'state2', 'block1', 'street2', 'Kolkata', 'west bengal', '19053', '2023-11-20 00:40:06', '2023-11-20 01:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `installer_zips`
--

CREATE TABLE `installer_zips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text NOT NULL,
  `zip` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installer_zips`
--

INSERT INTO `installer_zips` (`id`, `installer_id`, `zip`, `created_at`, `updated_at`) VALUES
(1, '1', '12121', '2023-11-15 03:11:33', '2023-11-15 03:11:33'),
(2, '1', '212121', '2023-11-15 03:11:33', '2023-11-15 03:11:33'),
(3, '1', '455', '2023-11-15 03:12:02', '2023-11-15 03:12:02'),
(4, '1', '898', '2023-11-15 03:12:02', '2023-11-15 03:12:02'),
(5, '1', '478', '2023-11-15 03:12:02', '2023-11-15 03:12:02'),
(23, '2', '700109', '2023-11-15 04:29:59', '2023-11-15 04:29:59'),
(24, '2', '56892', '2023-11-15 04:29:59', '2023-11-15 04:29:59');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_10_104210_create_resources_table', 2),
(7, '2023_11_13_034435_create_admins_table', 3),
(9, '2023_11_13_051418_create_blogs_table', 4),
(10, '2023_11_13_073315_create_videos_table', 5),
(11, '2023_11_13_084907_create_p_d_f_s_table', 6),
(12, '2023_11_13_045745_create_vehicles_table', 7),
(13, '2023_11_13_051812_create_vehicle_colors_table', 7),
(14, '2023_11_13_052245_create_vehicle_galleries_table', 7),
(15, '2023_11_13_052619_create_choose_colors_table', 7),
(16, '2023_11_13_080006_create_vehicle_features_table', 7),
(17, '2023_11_13_100449_alter_vehicles', 7),
(20, '2023_11_14_101543_create_contact_us_table', 9),
(21, '2023_11_14_052435_alter_installers', 10),
(22, '2023_11_14_063458_alter_installers', 10),
(24, '2023_11_14_081822_create_installer_available_locations_table', 10),
(25, '2023_11_14_105915_alter_installer_available_locations', 10),
(27, '2023_11_15_074029_create_installer_zips_table', 12),
(28, '2023_11_15_103211_create_installer_banks_table', 13),
(30, '2014_10_12_000000_create_users_table', 14),
(32, '2023_11_14_042903_create_installers_table', 15),
(33, '2023_11_20_041427_alter_installer_table', 16),
(34, '2023_11_20_042103_create_installer_infos_table', 17),
(35, '2023_11_14_080826_create_installer_locations_table', 18),
(36, '2023_11_14_093204_create_reports_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `p_d_f_s`
--

CREATE TABLE `p_d_f_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `p_d_f_s`
--

INSERT INTO `p_d_f_s` (`id`, `title`, `pdf`, `created_at`, `updated_at`) VALUES
(8, 'new', '131120231699871236_Hanuman Chalisha.pdf', '2023-11-13 04:57:16', '2023-11-13 04:57:16'),
(9, 'Designing', '151120231700051223_Hanuman Chalisha.pdf', '2023-11-15 06:57:03', '2023-11-15 06:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `vehical_type` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `company_street_no` varchar(255) DEFAULT NULL,
  `company_block` varchar(255) DEFAULT NULL,
  `company_street_name` varchar(255) DEFAULT NULL,
  `company_city` varchar(255) DEFAULT NULL,
  `company_state` varchar(255) DEFAULT NULL,
  `additional_details` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `installer_id`, `company_name`, `contact_name`, `phone_number`, `email`, `address`, `vehical_type`, `make`, `model`, `year`, `company_street_no`, `company_block`, `company_street_name`, `company_city`, `company_state`, `additional_details`, `created_at`, `updated_at`) VALUES
(1, '1', 'Macdonald and Mitchell LLC', 'Michael Mccall', '1234567890', 'qywy@mailinator.com', 'Qui in nobis sunt et', '1', '3', 'Dolor delectus et n', '1984', 'Blevins Shepherd Plc', 'Hess and Hatfield Trading', 'Miranda and Hopper LLC', 'Wiggins Parker Associates', 'Sanford and Graves Trading', 'Deserunt aute commod', '2023-11-20 02:55:10', '2023-11-20 02:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL COMMENT 'Asdf@123',
  `image` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User1', 'user@gmail.com', '9999999999', NULL, '$2y$12$t87PsxWGoi.JeCe2Su8bu.ENL71iy3wdtJxqAnhIGDc6zB8VrQz2C', '171120231700193188_own.jpg', NULL, '2023-11-16 22:23:09', '2023-11-16 22:59:28'),
(2, 'Teethi Dhar', 'teethi@gmail.com', '1234567890', NULL, '$2y$12$JVnpjGPAaRFzi27FIFa3p.k.G8x/oMJY96t7W8n8iCWM.VP/3HTXW', 'images/User/1700205633_own.jpg', NULL, '2023-11-17 00:45:39', '2023-11-17 03:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `year_of_launch` varchar(255) NOT NULL,
  `range` varchar(255) NOT NULL,
  `power` varchar(255) NOT NULL,
  `charging_time` varchar(255) NOT NULL,
  `seating_capacity` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `battery_capacity` varchar(255) NOT NULL,
  `features` text DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_colors`
--

CREATE TABLE `vehicle_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_features`
--

CREATE TABLE `vehicle_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` varchar(255) NOT NULL,
  `feature` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_galleries`
--

CREATE TABLE `vehicle_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` varchar(255) NOT NULL,
  `img` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `video_link`, `created_at`, `updated_at`) VALUES
(2, 'Labore dolore molest', 'https://www.youtube.com/embed/140dAiIMk8o?si=KT-ZIvxrDKkIarwi', '2023-11-13 03:08:13', '2023-11-13 06:01:35'),
(4, 'Ut praesentium volup', 'https://www.youtube.com/embed/Ez8F0nW6S-w?si=BxREQ03u3Hsh-QNb', '2023-11-13 04:58:47', '2023-11-13 06:03:17'),
(5, 'Designing', 'https://www.youtube.com/embed/140dAiIMk8o?si=KT-ZIvxrDKkIarwi', '2023-11-15 06:58:16', '2023-11-15 06:58:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_colors`
--
ALTER TABLE `choose_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `installers`
--
ALTER TABLE `installers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_banks`
--
ALTER TABLE `installer_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_infos`
--
ALTER TABLE `installer_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_locations`
--
ALTER TABLE `installer_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_zips`
--
ALTER TABLE `installer_zips`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `p_d_f_s`
--
ALTER TABLE `p_d_f_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_colors`
--
ALTER TABLE `vehicle_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_features`
--
ALTER TABLE `vehicle_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_galleries`
--
ALTER TABLE `vehicle_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `choose_colors`
--
ALTER TABLE `choose_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installers`
--
ALTER TABLE `installers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `installer_banks`
--
ALTER TABLE `installer_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `installer_infos`
--
ALTER TABLE `installer_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `installer_locations`
--
ALTER TABLE `installer_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `installer_zips`
--
ALTER TABLE `installer_zips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_d_f_s`
--
ALTER TABLE `p_d_f_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_colors`
--
ALTER TABLE `vehicle_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_features`
--
ALTER TABLE `vehicle_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_galleries`
--
ALTER TABLE `vehicle_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
