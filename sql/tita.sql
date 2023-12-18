-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 12:13 PM
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
(1, 'Jhon Doe', 'admin@gmail.com', '$2y$10$IiIkCc2kAwX0xI0wGL5KUONglx9Um7M3/gDBVcsCUBxaERHxPgzHS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` text NOT NULL,
  `cng_kit_id` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `zip` text NOT NULL,
  `unique_payment_id` text DEFAULT NULL,
  `txn_id` text DEFAULT NULL,
  `transaction_details` text DEFAULT NULL,
  `verification_otp` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `installer_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `cng_kit_id`, `date`, `time`, `zip`, `unique_payment_id`, `txn_id`, `transaction_details`, `verification_otp`, `status`, `installer_id`, `created_at`, `updated_at`) VALUES
(1, '1', '3', '2023-12-01', '21:50', '412450', 'tLLVIRrJqLq6anTQemcaxRvtOuEpVf', 'pi_3OJrj7SCgMR7q6bk0fTGXzqm', '{\"id\":\"pi_3OJrj7SCgMR7q6bk0fTGXzqm\",\"object\":\"payment_intent\",\"amount\":100000,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":0,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"always\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic\",\"client_secret\":\"pi_3OJrj7SCgMR7q6bk0fTGXzqm_secret_9gR0TDkjlsqCicqj5xKAJJTNn\",\"confirmation_method\":\"automatic\",\"created\":1701756205,\"currency\":\"usd\",\"customer\":null,\"description\":null,\"invoice\":null,\"last_payment_error\":null,\"latest_charge\":null,\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":null,\"payment_method_configuration_details\":null,\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"}},\"payment_method_types\":[\"card\"],\"processing\":null,\"receipt_email\":null,\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"requires_payment_method\",\"transfer_data\":null,\"transfer_group\":null}', NULL, 'completed', '9', '2023-12-01 03:11:23', '2023-12-06 01:01:39'),
(2, '1', '3', '2023-12-05', '09:32', '412450', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 02:12:18', '2023-12-05 02:12:18'),
(3, '1', '3', '2023-12-05', '09:32', '412450', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 02:12:29', '2023-12-05 02:12:29'),
(4, '1', '3', '2023-12-05', '07:32', '412450', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 02:17:32', '2023-12-05 02:17:32'),
(5, '1', '4', '2023-12-05', '01:35', '412450', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 02:19:24', '2023-12-05 02:19:24'),
(6, '1', '4', '2023-12-05', '08:01', '412450', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 02:20:37', '2023-12-05 02:20:37'),
(7, '1', '4', '2023-12-05', '08:01', '412450', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 02:21:17', '2023-12-05 02:21:17'),
(8, '1', '4', '2023-12-05', '08:01', '412450', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 02:24:08', '2023-12-05 02:24:08'),
(9, '1', '4', '2023-12-05', '08:01', '412450', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 02:24:27', '2023-12-05 02:24:27'),
(10, '1', '4', '2023-12-05', '08:01', '412450', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-05 02:24:42', '2023-12-05 02:24:42'),
(11, '2', '4', '2023-12-06', '21:07', '111111', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-06 03:19:15', '2023-12-06 03:19:15'),
(12, '2', '3', '2023-12-06', '18:48', '457845', NULL, 'pi_3OKHyUSCgMR7q6bk1qCqAvEq', '{\"id\":\"pi_3OKHyUSCgMR7q6bk1qCqAvEq\",\"object\":\"payment_intent\",\"amount\":100000,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":0,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"always\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic\",\"client_secret\":\"pi_3OKHyUSCgMR7q6bk1qCqAvEq_secret_ckmB85JDVvuff8IRmpp7mIphH\",\"confirmation_method\":\"automatic\",\"created\":1701857102,\"currency\":\"usd\",\"customer\":null,\"description\":null,\"invoice\":null,\"last_payment_error\":null,\"latest_charge\":null,\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":null,\"payment_method_configuration_details\":null,\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"}},\"payment_method_types\":[\"card\"],\"processing\":null,\"receipt_email\":null,\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"requires_payment_method\",\"transfer_data\":null,\"transfer_group\":null}', NULL, 'completed', '12', '2023-12-06 03:36:16', '2023-12-06 04:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `booking_requests`
--

CREATE TABLE `booking_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` text NOT NULL,
  `booking_id` text DEFAULT NULL,
  `cng_kit_id` text DEFAULT NULL,
  `cng_kit_amount` text DEFAULT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `zip` text NOT NULL,
  `request_send_to_installer` text NOT NULL,
  `payment_link` text DEFAULT NULL,
  `unique_payment_id` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT 'pending',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_requests`
--

INSERT INTO `booking_requests` (`id`, `user_id`, `booking_id`, `cng_kit_id`, `cng_kit_amount`, `date`, `time`, `zip`, `request_send_to_installer`, `payment_link`, `unique_payment_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(12, '1', '1', '3', '1000', '2023-12-01', '21:50', '412450', '10', NULL, NULL, 'rejected', NULL, '2023-12-01 03:11:23', '2023-12-04 23:45:36'),
(13, '1', '1', '3', '1000', '2023-12-01', '21:50', '412450', '9', NULL, NULL, 'completed', NULL, '2023-12-01 03:11:28', '2023-12-04 23:45:36'),
(14, '1', '10', '4', '2000', '2023-12-05', '08:01', '412450', '11', NULL, NULL, 'pending', NULL, '2023-12-05 02:24:42', '2023-12-05 02:24:42'),
(15, '2', '12', '3', '1000', '2023-12-06', '18:48', '457845', '12', NULL, NULL, 'completed', NULL, '2023-12-06 03:36:16', '2023-12-06 04:47:08');

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

--
-- Dumping data for table `choose_colors`
--

INSERT INTO `choose_colors` (`id`, `color`, `created_at`, `updated_at`) VALUES
(1, '#000000', NULL, NULL),
(2, '#ffffff', NULL, NULL),
(3, '#facde6', NULL, NULL),
(4, '#0000ff', NULL, NULL),
(5, '#008000', NULL, NULL),
(6, '#FF0000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cng_kits`
--

CREATE TABLE `cng_kits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `description` text DEFAULT NULL,
  `price` text NOT NULL,
  `image` text DEFAULT NULL,
  `kit_type` text NOT NULL,
  `vehicle_name` text NOT NULL,
  `application` text NOT NULL,
  `vehicle_type` text NOT NULL,
  `brand` text NOT NULL,
  `slug` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cng_kits`
--

INSERT INTO `cng_kits` (`id`, `title`, `description`, `price`, `image`, `kit_type`, `vehicle_name`, `application`, `vehicle_type`, `brand`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Animi ab sed magnam - 002', '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1000', '301120231701327461_titleimg3.png', 'Atque accusantium si', 'Dorothy Mcgee', 'Ex laborum minima un', 'Diesel', 'Est recusandae Lab', 'animi-ab-sed-magnam-002', NULL, '2023-11-30 00:10:02', '2023-11-30 01:57:00'),
(4, 'Omnis esse blanditi', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>', '2000', '301120231701322814_1700809449_image_2023-10-10_23_01_50.png', 'Maxime a quibusdam i', 'Flynn Mcconnell', 'Dolores do qui moles', 'Diesel', 'Amet elit elit do', 'omnis-esse-blanditi', NULL, '2023-11-30 00:10:14', '2023-11-30 01:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `cng_kit_product_details`
--

CREATE TABLE `cng_kit_product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cng_kits_id` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cng_kit_product_details`
--

INSERT INTO `cng_kit_product_details` (`id`, `cng_kits_id`, `features`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, '3', 'Deserunt iure in lab', '2023-11-30 00:38:13', '2023-11-30 00:10:02', '2023-11-30 00:38:13'),
(5, '4', 'Qui ut sapiente natu', '2023-11-30 01:57:55', '2023-11-30 00:10:14', '2023-11-30 01:57:55'),
(6, '3', 'Deserunt iure in lab - 0001', '2023-11-30 00:38:13', '2023-11-30 00:10:02', '2023-11-30 00:38:13'),
(7, '3', 'Deserunt iure in lab', '2023-11-30 00:38:44', '2023-11-30 00:38:31', '2023-11-30 00:38:44'),
(8, '3', 'Deserunt iure in lab - 0001', '2023-11-30 00:38:44', '2023-11-30 00:38:31', '2023-11-30 00:38:44'),
(9, '3', 'Deserunt iure in lab', '2023-11-30 00:39:12', '2023-11-30 00:38:44', '2023-11-30 00:39:12'),
(10, '3', 'Deserunt iure in lab - 0001', '2023-11-30 00:39:12', '2023-11-30 00:38:44', '2023-11-30 00:39:12'),
(11, '3', 'Nesciunt non quia m', '2023-11-30 00:39:12', '2023-11-30 00:38:44', '2023-11-30 00:39:12'),
(12, '3', 'Deserunt iure in lab', '2023-11-30 00:41:16', '2023-11-30 00:39:12', '2023-11-30 00:41:16'),
(13, '3', 'Deserunt iure in lab - 0001', '2023-11-30 00:41:16', '2023-11-30 00:39:12', '2023-11-30 00:41:16'),
(14, '3', 'Nesciunt non quia m', '2023-11-30 00:41:16', '2023-11-30 00:39:12', '2023-11-30 00:41:16'),
(15, '3', 'Nesciunt non quia m-0002', '2023-11-30 00:41:16', '2023-11-30 00:39:12', '2023-11-30 00:41:16'),
(16, '3', 'Deserunt iure in lab', '2023-11-30 01:27:41', '2023-11-30 00:41:16', '2023-11-30 01:27:41'),
(17, '3', 'Deserunt iure in lab - 0001', '2023-11-30 01:27:41', '2023-11-30 00:41:16', '2023-11-30 01:27:41'),
(18, '3', 'Nesciunt non quia m', '2023-11-30 01:27:41', '2023-11-30 00:41:16', '2023-11-30 01:27:41'),
(19, '3', 'Nesciunt non quia m-0002', '2023-11-30 00:53:51', '2023-11-30 00:41:16', '2023-11-30 00:53:51'),
(20, '3', 'Deserunt iure in lab', '2023-11-30 01:33:12', '2023-11-30 01:27:41', '2023-11-30 01:33:12'),
(21, '3', 'Deserunt iure in lab - 0001', '2023-11-30 01:33:12', '2023-11-30 01:27:41', '2023-11-30 01:33:12'),
(22, '3', 'Nesciunt non quia m', '2023-11-30 01:33:12', '2023-11-30 01:27:41', '2023-11-30 01:33:12'),
(23, '3', 'Deserunt iure in lab', '2023-11-30 01:33:36', '2023-11-30 01:33:12', '2023-11-30 01:33:36'),
(24, '3', 'Deserunt iure in lab - 0001', '2023-11-30 01:33:36', '2023-11-30 01:33:12', '2023-11-30 01:33:36'),
(25, '3', 'Nesciunt non quia m', '2023-11-30 01:33:36', '2023-11-30 01:33:12', '2023-11-30 01:33:36'),
(26, '3', 'Deserunt iure in lab', '2023-11-30 01:36:07', '2023-11-30 01:33:36', '2023-11-30 01:36:07'),
(27, '3', 'Deserunt iure in lab - 0001', '2023-11-30 01:36:07', '2023-11-30 01:33:36', '2023-11-30 01:36:07'),
(28, '3', 'Nesciunt non quia m', '2023-11-30 01:36:07', '2023-11-30 01:33:36', '2023-11-30 01:36:07'),
(29, '3', 'Deserunt iure in lab', '2023-11-30 01:57:00', '2023-11-30 01:36:07', '2023-11-30 01:57:00'),
(30, '3', 'Deserunt iure in lab - 0001', '2023-11-30 01:57:00', '2023-11-30 01:36:07', '2023-11-30 01:57:00'),
(31, '3', 'Nesciunt non quia m', '2023-11-30 01:57:00', '2023-11-30 01:36:07', '2023-11-30 01:57:00'),
(32, '3', 'Deserunt iure in lab', NULL, '2023-11-30 01:57:00', '2023-11-30 01:57:00'),
(33, '3', 'Deserunt iure in lab - 0001', NULL, '2023-11-30 01:57:00', '2023-11-30 01:57:00'),
(34, '3', 'Nesciunt non quia m', NULL, '2023-11-30 01:57:00', '2023-11-30 01:57:00'),
(35, '4', 'Qui ut sapiente natu', NULL, '2023-11-30 01:57:55', '2023-11-30 01:57:55');

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
  `inst_code` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_img` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `exam_link_id` text DEFAULT NULL,
  `approvel_by_admin` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installers`
--

INSERT INTO `installers` (`id`, `inst_code`, `name`, `email`, `phone_number`, `password`, `profile_img`, `status`, `exam_link_id`, `approvel_by_admin`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Quinn Silas Dunn Walker', 'cilovihex@mailinator.com', '+1 (488) 461-2447', '$2y$12$NcVadKWFUwmuSzrT.KSFi.cf.AMPUFxQSNDNAnVuNd6EDv7K/iAu2', NULL, 'active', NULL, 'rejected', '2023-11-27 02:25:01', '2023-11-27 02:01:45', '2023-11-27 02:25:01'),
(2, NULL, 'Olympia Aspen Gray Griffin', 'rybowareg@mailinator.com', '+1 (151) 541-6713', '$2y$12$YuEeRJVl9AHSL3Znj5f1OeTKZFvqIfUpxlh/1okZWJKLWY8rplZfW', NULL, 'active', '5FC66OQCxJQJySszh0lTyWRskwp6gyI5r6Zd13bZ', 'rejected', NULL, '2023-11-27 02:30:07', '2023-11-28 05:27:33'),
(3, NULL, 'Buckminster Pascale Berry Kirkland', 'tita123test@yopmail.com', '+1 (706) 638-8264', '$2y$12$m8kufrGsQflVxkJGf1SRGOUkNc83Yrym2j0Bzsy7.SAoG7a6W02qq', NULL, 'active', 'nuWlsOhItOmfUPBfXJ3TdJriXjFB8r7fBCr5Wv1g', 'rejected', NULL, '2023-11-27 02:57:24', '2023-11-29 01:27:47'),
(4, NULL, 'Danielle Eleanor Thompson Sykes', 'tita12345test@yopmail.com', '+1 (642) 974-3946', '$2y$12$cLm5v1GVu0MoOzSoDhdL0e1xNkI8jIhM5BBQ6Odxt637NMQiwramC', NULL, 'active', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', 'rejected', NULL, '2023-11-28 22:51:56', '2023-11-29 01:11:52'),
(5, NULL, 'Keane Hedy Ortega Hewitt', 'vetuq@mailinator.com', '+1 (732) 872-1761', '$2y$12$9qVy4eioAxknRdfIF8.5TO7idcQho36rawv6x4Faz8dBiDVsMey6a', NULL, 'active', NULL, 'in_progress', NULL, '2023-11-30 04:37:06', '2023-11-30 04:37:33'),
(6, NULL, 'Chiquita Ava Knight Roach', 'Qywuzujyq@mailinator.com', '+1 (331) 296-4871', '$2y$12$vEYWuviHvyceifKZpsrL3OVlNo4P1dmkd/2dWqjAyc7cyabx4S0se', NULL, 'active', NULL, 'in_progress', NULL, '2023-11-30 04:49:57', '2023-11-30 04:52:17'),
(7, NULL, 'Mason Noel Vasquez Lowery', 'Kofulo@mailinator.com', '+1 (574) 634-9879', '$2y$12$3CVlKj.qsWmSkVHp1BrHnemJBsZ95Y1mK9g.VfsbT3/GjjNgK6awC', NULL, 'active', NULL, 'in_progress', NULL, '2023-11-30 04:50:36', '2023-11-30 04:52:12'),
(8, NULL, 'Castor Meghan Kirkland Montoya', 'Radilivit@mailinator.com', '+1 (635) 841-8123', '$2y$12$2rIp1uCzfro5SmoWc3JyeOrjFOxI9zSwJ1M13JMHoZ0R8qxwc36T6', NULL, 'active', NULL, 'in_progress', NULL, '2023-11-30 04:51:21', '2023-11-30 04:52:08'),
(9, NULL, 'Roth Brady Best Bradshaw', 'Tita001test@yopmail.com', '+1 (467) 289-5018', '$2y$12$i8/1Z6GO/ATGf.pzc.d4E.nZFp26xrRFAgAHrEwaJ8VlLX1OO9962', NULL, 'active', NULL, 'in_progress', NULL, '2023-11-30 22:43:34', '2023-11-30 22:43:34'),
(10, NULL, 'Hyatt Ulric Sexton Lyons', 'Tita002test@yopmail.com', '+1 (934) 205-7115', '$2y$12$Qgkqb0HXIRcAuQZ26pp0Wu2OVZ.hpxCjwT1OvkmZLrZd3itvAeODa', NULL, 'active', NULL, 'in_progress', NULL, '2023-11-30 22:45:04', '2023-11-30 22:45:04'),
(11, NULL, 'Shoshana Oscar Nieves Haynes', 'Tita003test@yopmail.com', '+1 (283) 169-4094', '$2y$12$jTAir1.1TbC1lgWHU2e3BOqHOCqwsCPi1myJQzFjoc0QJTWXOxbtu', NULL, 'active', NULL, 'approved', NULL, '2023-11-30 22:46:06', '2023-11-30 22:46:06'),
(12, NULL, 'Heather Amethyst Mclaughlin Crane', 'Testinst001@yopmail.com', '+1 (178) 449-7192', '$2y$12$DdHpJVPzioT1Ky2149GsAeyejI.sENvCFu5qvWcKu9VBCp2J7fy9G', NULL, 'active', '8ETzrkD9vVrF5O8Pqr46fkE2VsyAGGO3uc7YaZ5Z', 'approved', NULL, '2023-12-06 03:05:37', '2023-12-06 03:30:07'),
(13, NULL, 'Ruth Unity Dean Velazquez', 'Testinst002@yopmail.com', '+1 (154) 106-3754', '$2y$12$fwwmp6eeisQWcnWDOCbz6OxsIPEhMMxuTnHWspMMDvhlDZK7Q2U8u', NULL, 'active', NULL, 'in_progress', NULL, '2023-12-06 03:10:20', '2023-12-06 03:13:46'),
(14, NULL, 'Reed Octavia Moses Franklin', 'Testinst003@yopmail.com', '+1 (639) 767-4522', '$2y$12$LSvmrxS.a.x0Nilcp57lCuEFlJJI8M.VOTjm08z.oHU91GCGlg0aO', NULL, 'active', 'vSPeIdLdJLk0yitRGeZTj89gTBaYSXFQaooGJcxY', 'in_progress', NULL, '2023-12-06 03:11:26', '2023-12-08 02:42:21'),
(15, NULL, 'Bert Samuel Stout Fleming', 'Hilysi@mailinator.com', '+1 (857) 188-7941', '$2y$12$pyHzngTuf91u.P3i9bg9x.JoKs8dMdOeyphXHb3RE9lTWVZIgxvWm', NULL, 'active', NULL, 'pending', NULL, '2023-12-07 22:52:00', '2023-12-07 22:52:00'),
(16, 'INST_00016', 'Briar Perry Spears Forbes', 'xyrydujo@mailinator.com', '+1 (184) 134-3184', '$2y$12$kI0vRdfRkudr1bJXjtvw6O2B4hA4CkiXHEMQ5lhyS5LR/isAocWz6', NULL, 'active', NULL, 'pending', NULL, '2023-12-08 02:40:04', '2023-12-08 02:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `installer_available_locations`
--

CREATE TABLE `installer_available_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text DEFAULT NULL,
  `installer_location_id` text DEFAULT NULL,
  `zip` text DEFAULT NULL,
  `location_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '1', 'Odit in qui aut mole', 'Rem numquam ea ea as', 'Eum facere molestias', 'images/Installer/1701070305_141120231699947086_u-xl-6.jpg', 'images/Installer/1701070305_141120231699947086_u-xl-6.jpg', 'images/Installer/1701070305_141120231699947086_u-xl-6.jpg', 'Witt and Petty Traders', 'Ut recusandae Conse', '2023-11-27 02:01:45', '2023-11-27 02:01:45'),
(2, '2', 'Qui in voluptas impe', 'Illo velit voluptat', 'Sunt quasi ea asperi', 'images/Installer/1701072007_141120231699947086_u-xl-6.jpg', 'images/Installer/1701072007_141120231699947086_u-xl-6.jpg', 'images/Installer/1701072007_141120231699947086_u-xl-6.jpg', 'Hood and Thomas Co', 'Non quis aspernatur', '2023-11-27 02:30:07', '2023-11-27 02:30:07'),
(3, '3', 'Modi nulla sit imped', 'Ad soluta voluptas s', 'Laborum dolores aut', 'images/Installer/1701073643_141120231699947086_u-xl-6.jpg', 'images/Installer/1701073643_141120231699947086_u-xl-6.jpg', 'images/Installer/1701073643_141120231699947086_u-xl-6.jpg', 'Phelps Sherman Trading', 'Quaerat illum ut no', '2023-11-27 02:57:24', '2023-11-27 02:57:24'),
(4, '4', 'Illum nihil volupta', 'Aut est ut nostrum q', 'Laborum eu veniam e', 'images/Installer/1701231716_141120231699947086_u-xl-6.jpg', 'images/Installer/1701231716_141120231699947086_u-xl-6.jpg', 'images/Installer/1701231716_141120231699947086_u-xl-6.jpg', 'Fisher Sampson LLC', 'Voluptas in adipisic', '2023-11-28 22:51:56', '2023-11-28 22:51:56'),
(5, '5', 'Aliquam qui omnis no', 'Ut cum est cupiditat', 'Perferendis quisquam', 'images/Installer/1701338826_aboutimg.jpg', 'images/Installer/1701338826_aboutimg.jpg', 'images/Installer/1701338826_aboutimg.jpg', 'Cervantes and Sanchez Co', 'Rerum autem do et su', '2023-11-30 04:37:07', '2023-11-30 04:37:07'),
(6, '6', 'Magna cupiditate qui', 'Cupiditate laudantiu', 'Culpa eum fuga Reru', 'images/Installer/1701339596_AudiLogo.png', 'images/Installer/1701339596_bg2.png', 'images/Installer/1701339596_bg2.png', 'Freeman Melendez Associates', 'Est commodo et sapie', '2023-11-30 04:49:57', '2023-11-30 04:49:57'),
(7, '7', 'Est ipsum qui in eos', 'Rem ad at possimus', 'Qui aperiam aliqua', 'images/Installer/1701339636_blog2.jpg', 'images/Installer/1701339636_car1.png', 'images/Installer/1701339636_aboutimg.jpg', 'Heath Sloan Traders', 'Maxime consequatur n', '2023-11-30 04:50:36', '2023-11-30 04:50:36'),
(8, '8', 'Nihil commodo debiti', 'Exercitation nihil f', 'Officia maxime dicta', 'images/Installer/1701339681_car1.png', 'images/Installer/1701339681_car1.png', 'images/Installer/1701339681_car3.png', 'Torres and Brown Co', 'Sit eum expedita pe', '2023-11-30 04:51:21', '2023-11-30 04:51:21'),
(9, '9', 'A consequatur anim', 'Est labore corporis', 'Esse laboriosam ma', 'images/Installer/1701404013_blog3.jpg', 'images/Installer/1701404013_Blogs.png', 'images/Installer/1701404013_AudiLogo.png', 'Dennis Joseph Co', 'Ipsam enim excepteur', '2023-11-30 22:43:34', '2023-11-30 22:43:34'),
(10, '10', 'Repellendus Ut perf', 'Maxime consequuntur', 'Consequat Illo cons', 'images/Installer/1701404103_aboutimg.jpg', 'images/Installer/1701404103_contact_img.jpg', 'images/Installer/1701404103_car2.png', 'Richmond Green Trading', 'Fugit laudantium e', '2023-11-30 22:45:04', '2023-11-30 22:45:04'),
(11, '11', 'Ullam et iusto itaqu', 'At nihil aspernatur', 'Eu assumenda placeat', 'images/Installer/1701404166_Blogs.png', 'images/Installer/1701404166_car2.png', 'images/Installer/1701404166_contact_img.jpg', 'Short Butler Plc', 'Aliquam totam id ex', '2023-11-30 22:46:06', '2023-11-30 22:46:06'),
(12, '12', 'Eveniet dicta conse', 'Mollit exercitation', 'Soluta soluta exerci', 'images/Installer/1701851737_Blogs.png', 'images/Installer/1701851737_Blogs.png', 'images/Installer/1701851737_car2.png', 'Boyd and Cummings Inc', 'Asperiores harum sim', '2023-12-06 03:05:37', '2023-12-06 03:05:37'),
(13, '13', 'Sunt nisi laboriosa', 'Dolore voluptate per', 'Possimus illum exe', 'images/Installer/1701852020_AudiLogo.png', 'images/Installer/1701852020_bg4.png', 'images/Installer/1701852020_car1.png', 'Crawford and Dixon Trading', 'Aspernatur labore ve', '2023-12-06 03:10:20', '2023-12-06 03:10:20'),
(14, '14', 'Earum assumenda labo', 'Unde consequatur des', 'Do proident culpa', 'images/Installer/1701852086_blog3.jpg', 'images/Installer/1701852086_car3.png', 'images/Installer/1701852086_blog3.jpg', 'Estes Frank Plc', 'Nam quia fugiat dol', '2023-12-06 03:11:26', '2023-12-06 03:11:26'),
(15, '15', 'Sunt aute Nam ut ess', 'Qui laborum a non vo', 'Asperiores error ten', 'images/Installer/1702009320_1700809449_free-vector-graphic-workspace-of-web-developer-with-text-code-on-abstract-blue-background-isometric-design-for-software-preview-110109393.jpg', 'images/Installer/1702009320_1700809449_image_2023-10-10_23_01_50.png', 'images/Installer/1702009320_1700809449_free-vector-graphic-workspace-of-web-developer-with-text-code-on-abstract-blue-background-isometric-design-for-software-preview-110109393.jpg', 'House Petty Associates', 'Cum esse id exercit', '2023-12-07 22:52:00', '2023-12-07 22:52:00'),
(16, '16', 'Quam reiciendis plac', 'Necessitatibus dolor', 'Consequat Beatae iu', 'images/Installer/1702023003_1700809449_image_2023-10-10_23_01_50.png', 'images/Installer/1702023003_1700809449_image_2023-10-10_23_01_50.png', 'images/Installer/1702023003_1700809449_free-vector-graphic-workspace-of-web-developer-with-text-code-on-abstract-blue-background-isometric-design-for-software-preview-110109393.jpg', 'Goodman Contreras Plc', 'Quos doloremque in n', '2023-12-08 02:40:04', '2023-12-08 02:40:04');

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
(1, '1', 'At velit reiciendis', 'Cillum cillum nisi a', 'Beck Blackwell', 'Numquam rerum cupidi', 'Ea quos temporibus e', '38596', '2023-11-27 02:01:45', '2023-11-27 02:01:45'),
(2, '2', 'Qui odio et debitis', 'Id omnis error dolor', 'Jaime Mcconnell', 'Quis laborum molliti', 'Nostrum reprehenderi', '10181', '2023-11-27 02:30:07', '2023-11-27 02:30:07'),
(3, '3', 'Nam culpa nostrum ra', 'Et in voluptatibus o', 'Cathleen Maldonado', 'Et modi adipisicing', 'Pariatur Qui accusa', '72034', '2023-11-27 02:57:24', '2023-11-27 02:57:24'),
(4, '4', 'Deserunt anim ex et', 'Maiores nihil fugiat', 'Xander Brooks', 'Eius non laboris ali', 'Ex dignissimos quis', '17617', '2023-11-28 22:51:56', '2023-11-28 22:51:56'),
(5, '5', 'Excepteur debitis pr', 'Mollitia culpa nulla', 'Reuben Lawson', 'Error cum ad pariatu', 'Rem qui ad beatae la', '50385', '2023-11-30 04:37:07', '2023-11-30 04:37:07'),
(6, '6', 'Magni ex animi tene', 'Sed tempore magnam', 'Kylie Bryant', 'Rerum quo ipsa quia', 'Sunt qui quo omnis p', '84396', '2023-11-30 04:49:57', '2023-11-30 04:49:57'),
(7, '7', 'Necessitatibus ullam', 'Deleniti voluptatem', 'Michael Carey', 'Aut voluptas sint la', 'Laudantium pariatur', '95940', '2023-11-30 04:50:36', '2023-11-30 04:50:36'),
(8, '8', 'Sequi ut aut incidid', 'Error repudiandae ha', 'Ocean Richards', 'Consequatur reprehe', 'Ipsum adipisicing ex', '31697', '2023-11-30 04:51:21', '2023-11-30 04:51:21'),
(9, '9', 'Sed deserunt elit s', 'Corporis tempore mi', 'Maia Knight', 'Corrupti eum atque', 'Quia dolor do et nat', '43721', '2023-11-30 22:43:34', '2023-11-30 22:43:34'),
(10, '10', 'Sunt eligendi cillu', 'Et dolore facere fac', 'Amir Melton', 'Dolor cupiditate vol', 'Quae est qui lorem c', '27359', '2023-11-30 22:45:04', '2023-11-30 22:45:04'),
(11, '11', 'Aperiam autem tenetu', 'Reprehenderit consec', 'Nadine Salinas', 'Et consectetur venia', 'Dolor nostrum simili', '99289', '2023-11-30 22:46:06', '2023-11-30 22:46:06'),
(12, '12', 'Laudantium ut incid', 'Eos impedit mollit', 'Zenia Beach', 'Autem aut ducimus a', 'Magna voluptatem ver', '40983', '2023-12-06 03:05:37', '2023-12-06 03:05:37'),
(13, '13', 'Earum ea cupidatat n', 'Deserunt possimus v', 'McKenzie Mcleod', 'Explicabo Est minus', 'Enim officia volupta', '80504', '2023-12-06 03:10:20', '2023-12-06 03:10:20'),
(14, '14', 'Necessitatibus et cu', 'Aliquid nobis cupida', 'Nathaniel Webb', 'Veniam aliqua Est', 'Sit consectetur duc', '76105', '2023-12-06 03:11:26', '2023-12-06 03:11:26'),
(15, '15', 'Magnam et exercitati', 'Eos quo ab rerum qu', 'Constance Flores', 'Dolore occaecat sapi', 'Facere voluptatem N', '46920', '2023-12-07 22:52:00', '2023-12-07 22:52:00'),
(16, '16', 'Corporis ullam qui d', 'Rerum omnis voluptat', 'Graiden Frederick', 'Modi nostrum officii', 'Molestiae dolor face', '69940', '2023-12-08 02:40:04', '2023-12-08 02:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `installer_test_results`
--

CREATE TABLE `installer_test_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text DEFAULT NULL,
  `exam_link_id` text DEFAULT NULL,
  `total_question` text DEFAULT NULL,
  `correct_question` text DEFAULT NULL,
  `percent_obtain` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installer_test_results`
--

INSERT INTO `installer_test_results` (`id`, `installer_id`, `exam_link_id`, `total_question`, `correct_question`, `percent_obtain`, `status`, `created_at`, `updated_at`) VALUES
(7, '3', 'nuWlsOhItOmfUPBfXJ3TdJriXjFB8r7fBCr5Wv1g', '5', '2', '40', 'Fail', '2023-11-28 02:51:36', '2023-11-28 02:51:36'),
(8, '3', 'nuWlsOhItOmfUPBfXJ3TdJriXjFB8r7fBCr5Wv1g', '5', '0', '0', 'Fail', '2023-11-28 02:52:38', '2023-11-28 02:52:38'),
(9, '3', 'nuWlsOhItOmfUPBfXJ3TdJriXjFB8r7fBCr5Wv1g', '5', '3', '60', 'Fail', '2023-11-28 02:52:45', '2023-11-28 02:52:45'),
(10, '2', '5FC66OQCxJQJySszh0lTyWRskwp6gyI5r6Zd13bZ', '5', '2', '40', 'Fail', '2023-11-28 03:11:00', '2023-11-28 03:11:00'),
(11, '2', '5FC66OQCxJQJySszh0lTyWRskwp6gyI5r6Zd13bZ', '5', '2', '40', 'Fail', '2023-11-28 03:11:19', '2023-11-28 03:11:19'),
(17, '4', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', '5', '1', '20', 'Fail', '2023-11-29 01:07:22', '2023-11-29 01:07:22'),
(18, '4', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', '5', '2', '40', 'Fail', '2023-11-29 01:07:39', '2023-11-29 01:07:39'),
(19, '4', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', '5', '0', '0', 'Fail', '2023-11-29 01:08:43', '2023-11-29 01:08:43'),
(20, '4', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', '5', '1', '20', 'Fail', '2023-11-29 01:11:41', '2023-11-29 01:11:41'),
(21, '4', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', '5', '1', '20', 'Fail', '2023-11-29 01:11:52', '2023-11-29 01:11:52'),
(22, '3', 'nuWlsOhItOmfUPBfXJ3TdJriXjFB8r7fBCr5Wv1g', '5', '1', '20', 'Fail', '2023-11-29 01:27:33', '2023-11-29 01:27:33'),
(23, '3', 'nuWlsOhItOmfUPBfXJ3TdJriXjFB8r7fBCr5Wv1g', '5', '0', '0', 'Fail', '2023-11-29 01:27:47', '2023-11-29 01:27:47'),
(24, '12', '8ETzrkD9vVrF5O8Pqr46fkE2VsyAGGO3uc7YaZ5Z', '5', '2', '40', 'Fail', '2023-12-06 03:26:03', '2023-12-06 03:26:03'),
(25, '12', '8ETzrkD9vVrF5O8Pqr46fkE2VsyAGGO3uc7YaZ5Z', '5', '1', '20', 'Fail', '2023-12-06 03:26:16', '2023-12-06 03:26:16'),
(26, '12', '8ETzrkD9vVrF5O8Pqr46fkE2VsyAGGO3uc7YaZ5Z', '5', '3', '60', 'Fail', '2023-12-06 03:26:44', '2023-12-06 03:26:44'),
(27, '12', '8ETzrkD9vVrF5O8Pqr46fkE2VsyAGGO3uc7YaZ5Z', '5', '0', '0', 'Fail', '2023-12-06 03:28:20', '2023-12-06 03:28:20'),
(28, '12', '8ETzrkD9vVrF5O8Pqr46fkE2VsyAGGO3uc7YaZ5Z', '5', '5', '100', 'Pass', '2023-12-06 03:30:07', '2023-12-06 03:30:07');

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
(1, '5', '123456', '2023-11-30 04:47:02', '2023-11-30 04:47:02'),
(2, '5', '657842', '2023-11-30 04:47:02', '2023-11-30 04:47:02'),
(3, '5', '987457', '2023-11-30 04:47:02', '2023-11-30 04:47:02'),
(4, '5', '412451', '2023-11-30 04:47:02', '2023-11-30 04:47:02'),
(5, '5', '657894', '2023-11-30 04:47:02', '2023-11-30 04:47:02'),
(6, '6', '657842', '2023-11-30 04:53:54', '2023-11-30 04:53:54'),
(7, '6', '123456', '2023-11-30 04:53:54', '2023-11-30 04:53:54'),
(8, '6', '321987', '2023-11-30 04:53:54', '2023-11-30 04:53:54'),
(9, '6', '100002', '2023-11-30 04:53:54', '2023-11-30 04:53:54'),
(10, '8', '321987', '2023-11-30 04:59:08', '2023-11-30 04:59:08'),
(11, '8', '5478456', '2023-11-30 04:59:08', '2023-11-30 04:59:08'),
(12, '8', '123456', '2023-11-30 04:59:08', '2023-11-30 04:59:08'),
(13, '8', '412451', '2023-11-30 04:59:08', '2023-11-30 04:59:08'),
(14, '7', '123456', '2023-11-30 05:00:21', '2023-11-30 05:00:21'),
(15, '7', '412451', '2023-11-30 05:00:21', '2023-11-30 05:00:21'),
(16, '7', '657842', '2023-11-30 05:00:21', '2023-11-30 05:00:21'),
(17, '7', '100234', '2023-11-30 05:00:21', '2023-11-30 05:00:21'),
(18, '11', '457840', '2023-11-30 04:47:02', '2023-11-30 04:47:02'),
(19, '10', '478965', '2023-11-30 04:47:02', '2023-11-30 04:47:02'),
(20, '9', '457840', '2023-11-30 04:47:02', '2023-11-30 04:47:02'),
(21, '11', '412450', '2023-11-30 04:47:02', '2023-11-30 04:47:02'),
(22, '9', '412450', '2023-11-30 04:47:02', '2023-11-30 04:47:02'),
(23, '10', '220124', '2023-11-30 04:53:54', '2023-11-30 04:53:54'),
(24, '10', '412450', '2023-11-30 04:53:54', '2023-11-30 04:53:54'),
(25, '9', '220124', '2023-11-30 04:53:54', '2023-11-30 04:53:54'),
(26, '14', '457845', '2023-12-06 03:14:47', '2023-12-06 03:14:47'),
(27, '14', '657894', '2023-12-06 03:14:47', '2023-12-06 03:14:47'),
(28, '14', '111111', '2023-12-06 03:14:47', '2023-12-06 03:14:47'),
(29, '14', '124501', '2023-12-06 03:14:47', '2023-12-06 03:14:47'),
(30, '13', '111111', '2023-12-06 03:16:07', '2023-12-06 03:16:07'),
(31, '13', '145120', '2023-12-06 03:16:07', '2023-12-06 03:16:07'),
(32, '13', '124501', '2023-12-06 03:16:07', '2023-12-06 03:16:07'),
(33, '12', '657894', '2023-12-06 03:17:25', '2023-12-06 03:17:25'),
(34, '12', '457845', '2023-12-06 03:17:25', '2023-12-06 03:17:25');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_10_104210_create_resources_table', 1),
(7, '2023_11_13_034435_create_admins_table', 1),
(8, '2023_11_13_045745_create_vehicles_table', 1),
(9, '2023_11_13_051418_create_blogs_table', 1),
(10, '2023_11_13_051812_create_vehicle_colors_table', 1),
(11, '2023_11_13_052245_create_vehicle_galleries_table', 1),
(12, '2023_11_13_052619_create_choose_colors_table', 1),
(13, '2023_11_13_073315_create_videos_table', 1),
(14, '2023_11_13_080006_create_vehicle_features_table', 1),
(15, '2023_11_13_084907_create_p_d_f_s_table', 1),
(16, '2023_11_13_100449_alter_vehicles', 1),
(17, '2023_11_14_042903_create_installers_table', 1),
(18, '2023_11_14_052435_alter_installers', 1),
(19, '2023_11_14_063458_alter_installers', 1),
(20, '2023_11_14_080826_create_installer_locations_table', 1),
(22, '2023_11_14_101543_create_contact_us_table', 1),
(23, '2023_11_15_074029_create_installer_zips_table', 1),
(24, '2023_11_15_103211_create_installer_banks_table', 1),
(25, '2023_11_20_042103_create_installer_infos_table', 1),
(26, '2023_11_24_050516_create_quotes_table', 1),
(27, '2023_11_24_095847_create_test_questions_table', 1),
(28, '2023_11_27_072618_installer_available_locations', 1),
(29, '2023_11_27_084006_alter_installers', 2),
(30, '2023_11_28_042314_create_installer_test_results_table', 3),
(31, '2023_11_28_110928_create_test_instructions_table', 4),
(32, '2023_11_29_043534_alter_test_instructions', 5),
(33, '2023_11_29_062434_alter_test_instructions', 6),
(34, '2023_11_29_071428_create_cng_kits_table', 7),
(35, '2023_11_29_072259_create_cng_kit_product_details_table', 7),
(36, '2023_11_29_074938_create_vehicle_types_table', 8),
(37, '2023_11_30_053620_alter_cng_kits', 9),
(38, '2023_11_30_053632_alter_cng_kit_product_details', 9),
(39, '2023_11_30_071943_alter_cng_kits', 10),
(40, '2023_11_30_103804_create_booking_requests_table', 11),
(41, '2023_12_01_053929_alter_booking_requests', 12),
(42, '2023_12_01_082027_create_bookings_table', 13),
(43, '2023_12_01_083339_alter_booking_requests', 13),
(44, '2023_12_01_105859_alter_bookings', 14),
(45, '2023_12_04_101011_alter_booking_requests', 15),
(46, '2023_12_04_110112_alter_booking_requests', 16),
(47, '2023_12_04_121613_alter_bookings', 17),
(48, '2023_12_05_055732_alter_bookings', 18),
(49, '2023_12_06_045009_alter_bookings', 19),
(50, '2023_12_07_044953_create_user_details_table', 20),
(51, '2023_12_07_102711_alter_user_details', 21),
(53, '2023_11_14_093204_create_reports_table', 22),
(54, '2023_12_08_050133_alter_reports', 22),
(55, '2023_12_08_075427_alter_installers', 23);

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

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inspector_id` text DEFAULT NULL,
  `workshop_type` text DEFAULT NULL,
  `workshop_size` text DEFAULT NULL,
  `risk_management` text DEFAULT NULL,
  `front_image` text DEFAULT NULL,
  `application_conformation` text DEFAULT NULL,
  `work_area` text DEFAULT NULL,
  `wideshot_street` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `installer_id`, `created_at`, `updated_at`, `inspector_id`, `workshop_type`, `workshop_size`, `risk_management`, `front_image`, `application_conformation`, `work_area`, `wideshot_street`) VALUES
(1, '15', '2023-12-08 01:14:10', '2023-12-08 01:14:10', '1234', '+1 (927) 838-5316', 'syli@mailinator.com', 'Quidem earum eiusmod', '081220231702017850_1700809449_free-vector-graphic-workspace-of-web-developer-with-text-code-on-abstract-blue-background-isometric-design-for-software-preview-110109393.jpg', 'not_confirmed', '081220231702017850_1700809449_free-vector-graphic-workspace-of-web-developer-with-text-code-on-abstract-blue-background-isometric-design-for-software-preview-110109393.jpg', '081220231702017850_1700809449_free-vector-graphic-workspace-of-web-developer-with-text-code-on-abstract-blue-background-isometric-design-for-software-preview-110109393.jpg');

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
-- Table structure for table `test_instructions`
--

CREATE TABLE `test_instructions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instruction` text DEFAULT NULL,
  `time_limit` text DEFAULT NULL,
  `attempt_limit` text NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_instructions`
--

INSERT INTO `test_instructions` (`id`, `instruction`, `time_limit`, `attempt_limit`, `created_at`, `updated_at`) VALUES
(1, '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '3', '5', '2023-11-28 06:43:12', '2023-12-06 03:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `test_questions`
--

CREATE TABLE `test_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `answer` text NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_questions`
--

INSERT INTO `test_questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Et nihil corrupti e', 'Repudiandae necessit', 'Laboriosam sapiente', 'Voluptatum blanditii', 'Voluptatem Dolorum', 'Voluptatem Dolorum', 'active', '2023-11-27 02:00:33', '2023-11-27 02:00:33'),
(2, 'Esse ducimus odit v', 'Modi in nostrum et a', 'Velit proident del', 'Consectetur in conse', 'Sed magnam veniam r', 'Modi in nostrum et a', 'active', '2023-11-27 02:00:40', '2023-11-27 02:00:40'),
(3, 'Est in ipsum labori', 'Mollitia sit ea accu', 'Voluptatem laudantiu', 'Voluptatem Illo quo', 'Consequatur dolor o', 'Voluptatem laudantiu', 'active', '2023-11-27 02:00:53', '2023-11-27 02:00:53'),
(4, 'Dolore tempora magna', 'Ipsam odio nostrud n', 'Delectus libero num', 'Ut voluptas debitis', 'Deleniti ipsa ex co', 'Ut voluptas debitis', 'active', '2023-11-27 02:01:00', '2023-11-27 02:01:00'),
(5, 'Qui quisquam ipsa v', 'Possimus quisquam a', 'Sunt velit adipisci', 'In perspiciatis rep', 'Ea pariatur Aliqua', 'Sunt velit adipisci', 'active', '2023-11-27 02:01:07', '2023-11-28 23:26:33');

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
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Carissa Hart', 'Tita003test@yopmail.com', '8984578410', NULL, '$2y$12$Nf/gYMpQREfNfDy2O/CHAuWVlvFIPZ38/o4ABGrY9XyiC35L7G5Iu', 'images/User/1701333545_user.png', NULL, '2023-11-30 03:09:05', '2023-12-05 06:38:56'),
(2, 'Stone Sosa', 'Testuser003@yopmail.com', '1374512450', NULL, '$2y$12$wjHQoqySzO9hdmUBwwW4geq.pgIv7zNrcZ/r46G3q8vH4HRZZNLnG', 'images/User/1701852515_contact_img.jpg', NULL, '2023-12-06 03:18:35', '2023-12-06 03:18:35'),
(3, 'Basia Whitaker', 'zebev@mailinator.com', '2025478940', NULL, '$2y$12$KISUSWE4y1HEYZKvmuRxSuQpQCBbPW0Q7YhTz1UV4EHRPGj1A5pO6', '', NULL, '2023-12-07 06:27:56', '2023-12-07 06:27:56'),
(4, 'Germane Cooley', 'cobahil@mailinator.com', '5064784510', NULL, '$2y$12$981JIXrpgxPZeMb3qoH8sunKugd/qpx0Yg3jGtDIzvF3C6.g0SDVe', '', NULL, '2023-12-07 06:29:19', '2023-12-07 06:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `driver_id` text DEFAULT NULL,
  `proof_of_vehicle` text DEFAULT NULL,
  `vehicle_type` text DEFAULT NULL,
  `vehicle_year` text DEFAULT NULL,
  `vehicle_make` text DEFAULT NULL,
  `vehicle_model` text DEFAULT NULL,
  `engine_power` text DEFAULT NULL,
  `engine_capacity` text DEFAULT NULL,
  `injection_type` text DEFAULT NULL,
  `vin_number` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `address`, `driver_id`, `proof_of_vehicle`, `vehicle_type`, `vehicle_year`, `vehicle_make`, `vehicle_model`, `engine_power`, `engine_capacity`, `injection_type`, `vin_number`, `created_at`, `updated_at`) VALUES
(1, '3', 'Magna ullam ea volup', 'Fugiat molestiae om', NULL, 'SUV', '1977', 'Laboriosam quia num', 'Qui nihil sint odit', 'Corrupti placeat a', 'Ullamco voluptas pra', 'Veniam voluptatem m', '280', '2023-12-07 06:27:56', '2023-12-07 06:27:56'),
(2, '4', 'Nisi occaecat id ali', 'Omnis sapiente natus', 'images/Vehicle/1701950359_1701333545_user.png', 'Heavy Duty Trucks', '1985', 'Nihil eiusmod non au', 'Laboris voluptate es', 'Accusamus nostrum ex', 'Laboriosam magni la', 'Voluptate a in rerum', '701', '2023-12-07 06:29:19', '2023-12-07 06:29:19');

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

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `year_of_launch`, `range`, `power`, `charging_time`, `seating_capacity`, `distance`, `battery_capacity`, `features`, `vehicle_type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'rojeda@mailinator.com', '1979', '4', 'sojepete@mailinator.com', '970', '352', '627', '47', NULL, NULL, NULL, '2023-11-29 03:35:51', '2023-11-29 04:21:53'),
(2, 'fapykic@mailinator.com', '2007', '38', 'toluzibihe@mailinator.com', '623', '481', '888', '687', NULL, NULL, NULL, '2023-12-08 04:35:32', '2023-12-08 05:01:35');

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

--
-- Dumping data for table `vehicle_colors`
--

INSERT INTO `vehicle_colors` (`id`, `vehicle_id`, `color`, `created_at`, `updated_at`) VALUES
(10, '1', '#ffffff', '2023-11-29 04:21:53', '2023-11-29 04:21:53'),
(11, '1', '#facde6', '2023-11-29 04:21:53', '2023-11-29 04:21:53'),
(12, '1', '#0000ff', '2023-11-29 04:21:53', '2023-11-29 04:21:53'),
(13, '1', '#0000ff', '2023-11-29 04:21:53', '2023-11-29 04:21:53'),
(14, '1', '#008000', '2023-11-29 04:21:53', '2023-11-29 04:21:53'),
(15, '1', '#ff0000', '2023-11-29 04:21:53', '2023-11-29 04:21:53'),
(20, '2', '#80a804', '2023-12-08 05:01:35', '2023-12-08 05:01:35'),
(21, '2', '#d72828', '2023-12-08 05:01:35', '2023-12-08 05:01:35'),
(22, '2', '#190101', '2023-12-08 05:01:35', '2023-12-08 05:01:35'),
(23, '2', '#1e6745', '2023-12-08 05:01:35', '2023-12-08 05:01:35');

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

--
-- Dumping data for table `vehicle_features`
--

INSERT INTO `vehicle_features` (`id`, `vehicle_id`, `feature`, `created_at`, `updated_at`) VALUES
(3, '1', 'Repudiandae iste sun', '2023-11-29 04:21:53', '2023-11-29 04:21:53'),
(5, '2', 'Cum molestias repreh', '2023-12-08 05:01:35', '2023-12-08 05:01:35');

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

--
-- Dumping data for table `vehicle_galleries`
--

INSERT INTO `vehicle_galleries` (`id`, `vehicle_id`, `img`, `created_at`, `updated_at`) VALUES
(1, '1', '291120231701248751_131120231699872354_aboutimg.jpg', '2023-11-29 03:35:51', '2023-11-29 03:35:51'),
(2, '1', '291120231701248751_131120231699872425_car1.png', '2023-11-29 03:35:51', '2023-11-29 03:35:51'),
(3, '2', '081220231702029932_1700809449_free-vector-graphic-workspace-of-web-developer-with-text-code-on-abstract-blue-background-isometric-design-for-software-preview-110109393.jpg', '2023-12-08 04:35:32', '2023-12-08 04:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

CREATE TABLE `vehicle_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Petrol', NULL, NULL),
(2, 'Diesel', NULL, NULL);

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
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_requests`
--
ALTER TABLE `booking_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_colors`
--
ALTER TABLE `choose_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cng_kits`
--
ALTER TABLE `cng_kits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cng_kit_product_details`
--
ALTER TABLE `cng_kit_product_details`
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
-- Indexes for table `installer_available_locations`
--
ALTER TABLE `installer_available_locations`
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
-- Indexes for table `installer_test_results`
--
ALTER TABLE `installer_test_results`
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
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
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
-- Indexes for table `test_instructions`
--
ALTER TABLE `test_instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_questions`
--
ALTER TABLE `test_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `booking_requests`
--
ALTER TABLE `booking_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `choose_colors`
--
ALTER TABLE `choose_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cng_kits`
--
ALTER TABLE `cng_kits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cng_kit_product_details`
--
ALTER TABLE `cng_kit_product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `installer_available_locations`
--
ALTER TABLE `installer_available_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installer_banks`
--
ALTER TABLE `installer_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installer_infos`
--
ALTER TABLE `installer_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `installer_locations`
--
ALTER TABLE `installer_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `installer_test_results`
--
ALTER TABLE `installer_test_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `installer_zips`
--
ALTER TABLE `installer_zips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_d_f_s`
--
ALTER TABLE `p_d_f_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `test_instructions`
--
ALTER TABLE `test_instructions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_questions`
--
ALTER TABLE `test_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle_colors`
--
ALTER TABLE `vehicle_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `vehicle_features`
--
ALTER TABLE `vehicle_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle_galleries`
--
ALTER TABLE `vehicle_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
