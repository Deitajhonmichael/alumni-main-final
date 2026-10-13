-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2026 at 04:06 AM
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
-- Database: `alumni_system`
--
CREATE DATABASE IF NOT EXISTS `alumni_system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `alumni_system`;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action` varchar(100) NOT NULL,
  `table_name` varchar(50) DEFAULT NULL,
  `record_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `user_id`, `action`, `table_name`, `record_id`, `ip_address`, `created_at`) VALUES
(1, 1, 'User logged in', NULL, NULL, '::1', '2026-06-26 04:26:00'),
(2, 1, 'Added alumni', 'alumni', 1, '::1', '2026-06-26 04:27:09'),
(3, 1, 'Added event', 'events', 1, '::1', '2026-06-26 04:28:19'),
(4, 1, 'Added user', 'users', 4, '::1', '2026-06-26 04:29:40'),
(5, 1, 'User logged out', NULL, NULL, '::1', '2026-06-26 04:29:46'),
(6, NULL, 'User logged in', NULL, NULL, '::1', '2026-06-26 04:29:48'),
(7, NULL, 'Toggled newsletter subscription', 'newsletter_subscriptions', NULL, '::1', '2026-06-26 04:31:29'),
(8, NULL, 'Updated profile', 'alumni', 2, '::1', '2026-06-26 04:33:59'),
(9, NULL, 'User logged out', NULL, NULL, '::1', '2026-06-26 04:34:22'),
(10, 1, 'User logged in', NULL, NULL, '::1', '2026-06-26 04:34:42'),
(11, 1, 'Added user', 'users', 7, '::1', '2026-06-26 04:36:53'),
(12, 1, 'User logged out', NULL, NULL, '::1', '2026-06-26 04:36:59'),
(13, 7, 'User logged in', NULL, NULL, '::1', '2026-06-26 04:37:01'),
(14, 7, 'User logged out', NULL, NULL, '::1', '2026-06-26 04:46:18'),
(15, 7, 'User logged in', NULL, NULL, '::1', '2026-06-26 04:46:20'),
(16, 7, 'User logged out', NULL, NULL, '::1', '2026-06-26 04:47:31'),
(17, 1, 'User logged in', NULL, NULL, '::1', '2026-07-03 00:30:03'),
(18, 1, 'User logged in', NULL, NULL, '::1', '2026-09-05 01:31:46'),
(19, 1, 'User logged in', NULL, NULL, '::1', '2026-09-05 02:23:33'),
(20, 1, 'User logged out', NULL, NULL, '::1', '2026-09-05 03:18:15'),
(21, 1, 'User logged in', NULL, NULL, '::1', '2026-09-05 03:18:25'),
(22, 1, 'Admin requested new verification code', NULL, NULL, '::1', '2026-09-05 03:19:08'),
(23, 1, 'Admin requested new verification code', NULL, NULL, '::1', '2026-09-05 03:21:39'),
(24, 1, 'Admin requested new verification code', NULL, NULL, '::1', '2026-09-05 03:25:25'),
(25, 1, 'Admin requested new verification code', NULL, NULL, '::1', '2026-09-05 03:31:14'),
(26, 1, 'User logged out', NULL, NULL, '::1', '2026-09-05 03:35:42'),
(27, 1, 'User logged in', NULL, NULL, '::1', '2026-09-05 03:35:45'),
(28, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-09-05 03:36:06'),
(29, 1, 'User logged out', NULL, NULL, '::1', '2026-09-05 03:36:58'),
(30, 7, 'User logged in', NULL, NULL, '::1', '2026-09-05 03:37:44'),
(31, 7, 'User logged out', NULL, NULL, '::1', '2026-09-05 03:39:15'),
(32, 7, 'User logged in', NULL, NULL, '::1', '2026-09-05 03:39:17'),
(33, 7, 'User completed email verification', NULL, NULL, '::1', '2026-09-05 03:39:49'),
(34, 7, 'User logged out', NULL, NULL, '::1', '2026-09-05 03:39:54'),
(35, 1, 'User logged in', NULL, NULL, '::1', '2026-09-05 03:41:59'),
(36, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-09-05 03:42:25'),
(37, 1, 'User logged out', NULL, NULL, '::1', '2026-09-05 03:42:49'),
(38, 1, 'User logged in', NULL, NULL, '::1', '2026-09-05 03:44:29'),
(39, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-09-05 03:45:56'),
(40, 1, 'User logged out', NULL, NULL, '::1', '2026-09-05 03:48:47'),
(41, 1, 'User logged in', NULL, NULL, '::1', '2026-10-06 12:42:45'),
(42, 1, 'User logged out', NULL, NULL, '::1', '2026-10-06 12:45:10'),
(43, 1, 'User logged in', NULL, NULL, '::1', '2026-10-06 12:45:11'),
(44, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-06 12:48:04'),
(45, 1, 'User logged out', NULL, NULL, '::1', '2026-10-06 12:55:43'),
(46, 1, 'User logged in', NULL, NULL, '::1', '2026-10-06 12:55:46'),
(47, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-06 13:05:25'),
(48, 1, 'User logged out', NULL, NULL, '::1', '2026-10-06 13:05:31'),
(49, 1, 'User logged in', NULL, NULL, '::1', '2026-10-06 13:05:50'),
(50, 1, 'User logged out', NULL, NULL, '::1', '2026-10-06 13:12:59'),
(51, 1, 'User logged in', NULL, NULL, '::1', '2026-10-06 13:13:03'),
(52, 1, 'Admin requested new verification code', NULL, NULL, '::1', '2026-10-06 13:14:06'),
(53, 1, 'Admin requested new verification code', NULL, NULL, '::1', '2026-10-06 13:14:25'),
(54, 1, 'User logged out', NULL, NULL, '::1', '2026-10-06 22:25:57'),
(55, 7, 'User logged in', NULL, NULL, '::1', '2026-10-06 22:26:50'),
(56, 7, 'User completed email verification', NULL, NULL, '::1', '2026-10-06 22:28:44'),
(57, 7, 'User logged out', NULL, NULL, '::1', '2026-10-06 22:28:53'),
(58, 1, 'User logged in', NULL, NULL, '::1', '2026-10-06 22:34:25'),
(59, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-06 22:34:41'),
(60, 1, 'User logged out', NULL, NULL, '::1', '2026-10-06 22:35:04'),
(61, 1, 'User logged in', NULL, NULL, '::1', '2026-10-06 22:35:06'),
(62, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-06 22:35:31'),
(63, 1, 'User logged out', NULL, NULL, '::1', '2026-10-06 22:35:40'),
(64, 1, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:04:19'),
(65, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-07 03:04:46'),
(66, 1, 'Added event', 'events', 2, '::1', '2026-10-07 03:06:07'),
(67, 1, 'User logged out', NULL, NULL, '::1', '2026-10-07 03:07:10'),
(68, 7, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:07:17'),
(69, 7, 'User completed email verification', NULL, NULL, '::1', '2026-10-07 03:08:16'),
(70, 7, 'Added job placement', 'job_placements', 1, '::1', '2026-10-07 03:09:02'),
(71, 7, 'User logged out', NULL, NULL, '::1', '2026-10-07 03:09:57'),
(72, 1, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:10:08'),
(73, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-07 03:10:42'),
(74, 1, 'Added user', 'users', 8, '::1', '2026-10-07 03:14:31'),
(75, 1, 'User logged out', NULL, NULL, '::1', '2026-10-07 03:15:03'),
(76, 8, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:15:05'),
(77, 8, 'User completed email verification', NULL, NULL, '::1', '2026-10-07 03:15:43'),
(78, 8, 'Requested transcript', 'transcript_requests', 1, '::1', '2026-10-07 03:20:12'),
(79, 8, 'User logged out', NULL, NULL, '::1', '2026-10-07 03:20:49'),
(80, 1, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:20:53'),
(81, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-07 03:21:17'),
(82, 1, 'Updated transcript request', 'transcript_requests', 1, '::1', '2026-10-07 03:21:33'),
(83, 1, 'User logged out', NULL, NULL, '::1', '2026-10-07 03:24:03'),
(84, 1, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:24:59'),
(85, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-07 03:25:16'),
(86, 8, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:25:32'),
(87, 8, 'User completed email verification', NULL, NULL, '::1', '2026-10-07 03:26:08'),
(88, 8, 'Requested certificate reprint', 'certificate_requests', 1, '::1', '2026-10-07 03:26:27'),
(89, 1, 'Updated certificate request', 'certificate_requests', 1, '::1', '2026-10-07 03:26:53'),
(90, 1, 'Updated certificate request', 'certificate_requests', 1, '::1', '2026-10-07 03:33:05'),
(91, 1, 'Updated certificate request', 'certificate_requests', 1, '::1', '2026-10-07 03:37:59'),
(92, 8, 'User logged out', NULL, NULL, '::1', '2026-10-07 03:39:43'),
(93, 1, 'User logged out', NULL, NULL, '::1', '2026-10-07 03:41:28'),
(94, 1, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:46:56'),
(95, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-07 03:47:19'),
(96, 1, 'User logged out', NULL, NULL, '::1', '2026-10-07 03:49:05'),
(97, 1, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:49:07'),
(98, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-07 03:49:29'),
(99, 1, 'User logged out', NULL, NULL, '::1', '2026-10-07 03:49:41'),
(100, 1, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:50:35'),
(101, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-07 03:50:56'),
(102, 1, 'User logged out', NULL, NULL, '::1', '2026-10-07 03:51:06'),
(103, 1, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:51:08'),
(104, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-07 03:51:34'),
(105, 1, 'User logged out', NULL, NULL, '::1', '2026-10-07 03:57:43'),
(106, 1, 'User logged in', NULL, NULL, '::1', '2026-10-07 03:57:50'),
(107, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-07 03:58:24'),
(108, 1, 'User logged in', NULL, NULL, '::1', '2026-10-13 01:23:07'),
(109, 1, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-13 01:23:59'),
(110, 1, 'Added user', 'users', 9, '::1', '2026-10-13 01:24:56'),
(111, 1, 'User logged out', NULL, NULL, '::1', '2026-10-13 01:25:02'),
(112, 9, 'User logged in', NULL, NULL, '::1', '2026-10-13 01:25:04'),
(113, 9, 'Admin requested new verification code', NULL, NULL, '::1', '2026-10-13 01:26:51'),
(114, 9, 'Admin completed email verification', NULL, NULL, '::1', '2026-10-13 01:27:21'),
(115, 9, 'User logged out', NULL, NULL, '::1', '2026-10-13 01:27:33'),
(116, 9, 'User logged in', NULL, NULL, '::1', '2026-10-13 01:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `student_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT 'USA',
  `graduation_year` int(11) NOT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `major` varchar(100) DEFAULT NULL,
  `batch` varchar(20) DEFAULT NULL,
  `current_employer` varchar(100) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `user_id`, `student_id`, `first_name`, `last_name`, `email`, `phone`, `date_of_birth`, `gender`, `address`, `city`, `state`, `country`, `graduation_year`, `degree`, `major`, `batch`, `current_employer`, `job_title`, `linkedin_url`, `profile_picture`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ALU309108', 'Michael', 'deita', 'jhonmichaeldeita@gmail.com', '0963452547', NULL, NULL, NULL, NULL, NULL, 'USA', 2025, '123', 'it', '2', NULL, NULL, NULL, NULL, 1, '2026-06-26 04:27:09', '2026-06-26 04:27:09'),
(2, NULL, 'ALU000004', 'faculty1', 'deia', 'michaeldeita2020@gmail.com', '123445', '2026-06-26', 'male', 'awruwygrbdhs', 'asfs', 'shsjf', 'USA', -9, '1', '134', '1', 'sjhjfs', 'sjshs', 'http://localhost/alumni/login.php', 'uploads/profiles/6a3e0136b8e56.png', 1, '2026-06-26 04:31:03', '2026-06-26 04:33:58'),
(3, 7, 'ALU000007', 'michael', '', 'michaeldeita0@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'USA', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2026-06-26 04:46:23', '2026-06-26 04:46:23'),
(4, 8, 'ALU000008', 'vince', '', 'vincemabulay@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'USA', 2026, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2026-10-07 03:18:56', '2026-10-07 03:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `batch_reunions`
--

CREATE TABLE `batch_reunions` (
  `id` int(11) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `reunion_title` varchar(100) NOT NULL,
  `reunion_date` date NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `organizer_id` int(11) DEFAULT NULL,
  `budget` decimal(10,2) DEFAULT NULL,
  `expected_attendees` int(11) DEFAULT NULL,
  `status` enum('planning','confirmed','completed','cancelled') DEFAULT 'planning',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_requests`
--

CREATE TABLE `certificate_requests` (
  `id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `certificate_type` enum('degree','transcript','completion','other') DEFAULT 'degree',
  `reason` text NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','processing','completed','rejected') DEFAULT 'pending',
  `admin_notes` text DEFAULT NULL,
  `completed_date` timestamp NULL DEFAULT NULL,
  `fee` decimal(10,2) DEFAULT 0.00,
  `payment_status` enum('pending','paid','waived') DEFAULT 'pending',
  `certificate_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificate_requests`
--

INSERT INTO `certificate_requests` (`id`, `alumni_id`, `certificate_type`, `reason`, `request_date`, `status`, `admin_notes`, `completed_date`, `fee`, `payment_status`, `certificate_file`) VALUES
(1, 4, 'degree', 'sample', '2026-10-07 03:26:27', 'completed', '', '2026-10-07 03:37:59', 5.00, 'paid', '../uploads/certificates/6ac5be97c871e.png');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `alumni_id` int(11) DEFAULT NULL,
  `donor_name` varchar(100) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `donation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_method` enum('credit_card','bank_transfer','check','other') DEFAULT 'credit_card',
  `is_anonymous` tinyint(1) DEFAULT 0,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor_campaigns`
--

CREATE TABLE `donor_campaigns` (
  `id` int(11) NOT NULL,
  `campaign_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `goal_amount` decimal(10,2) NOT NULL,
  `current_amount` decimal(10,2) DEFAULT 0.00,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `campaign_type` enum('scholarship','infrastructure','research','general','other') DEFAULT 'general',
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `event_date` date NOT NULL,
  `event_time` time DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `venue` varchar(100) DEFAULT NULL,
  `max_attendees` int(11) DEFAULT NULL,
  `registration_deadline` date DEFAULT NULL,
  `event_type` enum('reunion','networking','seminar','workshop','other') DEFAULT 'networking',
  `image_url` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `event_date`, `event_time`, `location`, `venue`, `max_attendees`, `registration_deadline`, `event_type`, `image_url`, `is_active`, `created_at`) VALUES
(1, 'sample', 'sample1', '2026-06-26', '02:01:00', 'sample', 'sample', -75, '2026-06-27', 'networking', NULL, 1, '2026-06-26 04:28:19'),
(2, 'sample', 'ahaaj', '2026-10-07', '08:39:00', 'bcp', 'bcp', 10, '2026-10-07', 'networking', NULL, 1, '2026-10-07 03:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `event_registrations`
--

CREATE TABLE `event_registrations` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_status` enum('pending','paid','free','cancelled') DEFAULT 'pending',
  `payment_amount` decimal(10,2) DEFAULT 0.00,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `category` enum('general','event','website','services','other') DEFAULT 'general',
  `subject` varchar(150) DEFAULT NULL,
  `message` text NOT NULL,
  `rating` int(11) DEFAULT 0,
  `submitted_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('new','reviewed','resolved') DEFAULT 'new',
  `admin_response` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `graduate_tracking`
--

CREATE TABLE `graduate_tracking` (
  `id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `tracking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `current_status` enum('employed','self_employed','unemployed','further_studies','other') NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `industry` varchar(50) DEFAULT NULL,
  `salary_range` varchar(50) DEFAULT NULL,
  `work_location` varchar(100) DEFAULT NULL,
  `is_relevant_to_degree` tinyint(1) DEFAULT 1,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_placements`
--

CREATE TABLE `job_placements` (
  `id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `placement_date` date NOT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `job_type` enum('full_time','part_time','contract','internship') DEFAULT 'full_time',
  `industry` varchar(50) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `is_verified` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_placements`
--

INSERT INTO `job_placements` (`id`, `alumni_id`, `company_name`, `job_title`, `placement_date`, `salary`, `job_type`, `industry`, `location`, `description`, `is_verified`, `created_at`) VALUES
(1, 3, 'sample', 'sample', '2026-10-07', 675.00, 'full_time', 'sample', 'bcp', '', 0, '2026-10-07 03:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `content` text NOT NULL,
  `sent_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `sent_by` int(11) DEFAULT NULL,
  `recipient_count` int(11) DEFAULT 0,
  `status` enum('draft','sent','scheduled') DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscriptions`
--

CREATE TABLE `newsletter_subscriptions` (
  `id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `is_subscribed` tinyint(1) DEFAULT 1,
  `subscription_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `unsubscribe_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter_subscriptions`
--

INSERT INTO `newsletter_subscriptions` (`id`, `alumni_id`, `is_subscribed`, `subscription_date`, `unsubscribe_date`) VALUES
(1, 2, 1, '2026-06-26 04:31:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reunion_attendees`
--

CREATE TABLE `reunion_attendees` (
  `id` int(11) NOT NULL,
  `reunion_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `attendance_status` enum('registered','confirmed','attended','declined') DEFAULT 'registered',
  `dietary_requirements` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_answers`
--

CREATE TABLE `survey_answers` (
  `id` int(11) NOT NULL,
  `response_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_questions`
--

CREATE TABLE `survey_questions` (
  `id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `question_type` enum('text','multiple_choice','rating','boolean') DEFAULT 'text',
  `options` text DEFAULT NULL,
  `is_required` tinyint(1) DEFAULT 1,
  `question_order` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_responses`
--

CREATE TABLE `survey_responses` (
  `id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `response_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transcript_requests`
--

CREATE TABLE `transcript_requests` (
  `id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `purpose` text NOT NULL,
  `delivery_method` enum('pickup','email','mail') DEFAULT 'email',
  `delivery_address` text DEFAULT NULL,
  `status` enum('pending','processing','completed','rejected') DEFAULT 'pending',
  `admin_notes` text DEFAULT NULL,
  `completed_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transcript_requests`
--

INSERT INTO `transcript_requests` (`id`, `alumni_id`, `request_date`, `purpose`, `delivery_method`, `delivery_address`, `status`, `admin_notes`, `completed_date`) VALUES
(1, 4, '2026-10-07 03:20:12', 'saple', 'email', '', 'processing', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('admin','staff','alumni') DEFAULT 'alumni',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES
(1, 'admin', '$2y$10$M6BA8xwKmOdGInLXiZa1NucPFrXbH8QAd7jF.v/QxZDKMaPOF8ENC', 'leahbatal40@gmail.com', 'admin', '2026-06-26 04:18:21'),
(7, 'michael', '$2y$10$OEOQayglaHqlL.b6KY3MJOY6YrCVqrVAvhdrF2hw5LX1roXqvvVBe', 'michaeldeita160@gmail.com', 'staff', '2026-06-26 04:36:53'),
(8, 'vince', '$2y$10$gpnGlxCniro5lW0F9JG5c.zcE0ZnK5gLfiTB63g0iBjLOwvOqM8ve', 'vincemabulay@gmail.com', 'alumni', '2026-10-07 03:14:31'),
(9, 'benmabulay', '$2y$10$4TlZXEzfOqd1.c8G1Z93OukEf6o.Ea1bXOz3J1.Wxz0p8rXNk1gR6', 'benmabulay204@gmail.com', 'admin', '2026-10-13 01:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `verification_codes`
--

CREATE TABLE `verification_codes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `expires_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_used` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verification_codes`
--

INSERT INTO `verification_codes` (`id`, `user_id`, `code`, `created_at`, `expires_at`, `is_used`) VALUES
(18, 1, '984903', '2026-09-05 03:35:45', '2026-09-05 00:35:45', 1),
(22, 7, '060459', '2026-09-05 03:39:17', '2026-09-05 00:39:17', 1),
(24, 1, '658543', '2026-09-05 03:41:59', '2026-09-05 00:41:59', 1),
(26, 1, '817340', '2026-09-05 03:44:29', '2026-09-05 00:44:29', 1),
(31, 1, '520323', '2026-10-06 12:45:11', '2026-10-06 09:45:11', 1),
(34, 1, '374009', '2026-10-06 13:04:51', '2026-10-06 10:04:51', 1),
(48, 7, '080796', '2026-10-06 22:28:26', '2026-10-06 18:59:26', 1),
(50, 1, '556553', '2026-10-06 22:34:25', '2026-10-06 19:05:25', 1),
(52, 1, '206788', '2026-10-06 22:35:07', '2026-10-06 19:06:07', 1),
(54, 1, '707301', '2026-10-07 03:04:19', '2026-10-06 23:35:19', 1),
(56, 7, '002171', '2026-10-07 03:07:17', '2026-10-06 23:38:17', 1),
(59, 1, '492023', '2026-10-07 03:10:15', '2026-10-06 23:41:15', 1),
(61, 8, '745367', '2026-10-07 03:15:05', '2026-10-06 23:46:05', 1),
(63, 1, '340130', '2026-10-07 03:20:53', '2026-10-06 23:51:53', 1),
(65, 1, '598212', '2026-10-07 03:24:59', '2026-10-06 23:55:59', 1),
(67, 8, '751326', '2026-10-07 03:25:32', '2026-10-06 23:56:32', 1),
(69, 1, '001004', '2026-10-07 03:46:56', '2026-10-07 00:17:56', 1),
(71, 1, '325004', '2026-10-07 03:49:07', '2026-10-07 00:20:07', 1),
(73, 1, '563985', '2026-10-07 03:50:35', '2026-10-07 00:21:35', 1),
(75, 1, '066962', '2026-10-07 03:51:08', '2026-10-07 00:22:08', 1),
(77, 1, '939900', '2026-10-07 03:58:00', '2026-10-07 00:29:00', 1),
(79, 1, '119458', '2026-10-13 01:23:07', '2026-10-12 21:54:07', 1),
(82, 9, '809504', '2026-10-13 01:26:46', '2026-10-12 21:57:46', 1),
(84, 9, '796367', '2026-10-13 01:48:32', '2026-10-12 22:19:32', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `batch_reunions`
--
ALTER TABLE `batch_reunions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organizer_id` (`organizer_id`);

--
-- Indexes for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `donor_campaigns`
--
ALTER TABLE `donor_campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_registrations`
--
ALTER TABLE `event_registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_registration` (`event_id`,`alumni_id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `graduate_tracking`
--
ALTER TABLE `graduate_tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `job_placements`
--
ALTER TABLE `job_placements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sent_by` (`sent_by`);

--
-- Indexes for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_subscription` (`alumni_id`);

--
-- Indexes for table `reunion_attendees`
--
ALTER TABLE `reunion_attendees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_attendee` (`reunion_id`,`alumni_id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_answers`
--
ALTER TABLE `survey_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `response_id` (`response_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `survey_questions`
--
ALTER TABLE `survey_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `survey_id` (`survey_id`);

--
-- Indexes for table `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_response` (`survey_id`,`alumni_id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `transcript_requests`
--
ALTER TABLE `transcript_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `verification_codes`
--
ALTER TABLE `verification_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_verification_user_id` (`user_id`),
  ADD KEY `idx_verification_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `batch_reunions`
--
ALTER TABLE `batch_reunions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_campaigns`
--
ALTER TABLE `donor_campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_registrations`
--
ALTER TABLE `event_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `graduate_tracking`
--
ALTER TABLE `graduate_tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_placements`
--
ALTER TABLE `job_placements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reunion_attendees`
--
ALTER TABLE `reunion_attendees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_answers`
--
ALTER TABLE `survey_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_questions`
--
ALTER TABLE `survey_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_responses`
--
ALTER TABLE `survey_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transcript_requests`
--
ALTER TABLE `transcript_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `verification_codes`
--
ALTER TABLE `verification_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD CONSTRAINT `activity_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `batch_reunions`
--
ALTER TABLE `batch_reunions`
  ADD CONSTRAINT `batch_reunions_ibfk_1` FOREIGN KEY (`organizer_id`) REFERENCES `alumni` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  ADD CONSTRAINT `certificate_requests_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`campaign_id`) REFERENCES `donor_campaigns` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `donations_ibfk_2` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `event_registrations`
--
ALTER TABLE `event_registrations`
  ADD CONSTRAINT `event_registrations_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `event_registrations_ibfk_2` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `graduate_tracking`
--
ALTER TABLE `graduate_tracking`
  ADD CONSTRAINT `graduate_tracking_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_placements`
--
ALTER TABLE `job_placements`
  ADD CONSTRAINT `job_placements_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD CONSTRAINT `newsletters_ibfk_1` FOREIGN KEY (`sent_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  ADD CONSTRAINT `newsletter_subscriptions_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reunion_attendees`
--
ALTER TABLE `reunion_attendees`
  ADD CONSTRAINT `reunion_attendees_ibfk_1` FOREIGN KEY (`reunion_id`) REFERENCES `batch_reunions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reunion_attendees_ibfk_2` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `survey_answers`
--
ALTER TABLE `survey_answers`
  ADD CONSTRAINT `survey_answers_ibfk_1` FOREIGN KEY (`response_id`) REFERENCES `survey_responses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `survey_answers_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `survey_questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `survey_questions`
--
ALTER TABLE `survey_questions`
  ADD CONSTRAINT `survey_questions_ibfk_1` FOREIGN KEY (`survey_id`) REFERENCES `surveys` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD CONSTRAINT `survey_responses_ibfk_1` FOREIGN KEY (`survey_id`) REFERENCES `surveys` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `survey_responses_ibfk_2` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transcript_requests`
--
ALTER TABLE `transcript_requests`
  ADD CONSTRAINT `transcript_requests_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `verification_codes`
--
ALTER TABLE `verification_codes`
  ADD CONSTRAINT `verification_codes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
--
-- Database: `carrental`
--
CREATE DATABASE IF NOT EXISTS `carrental` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `carrental`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2017-06-18 12:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` date DEFAULT NULL,
  `ToDate` date DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`) VALUES
(3, 'ceejltayco@gmail.com', 38, '2019-11-14', '2019-11-16', 'Rent for business trip.', 3, '2019-11-10 14:48:19'),
(4, 'ceejltayco@gmail.com', 44, '2019-12-04', '2019-12-04', 'For roadtrip.', 3, '2019-12-03 15:39:43'),
(5, 'jbadilles@gmail.com', 38, '2019-12-04', '2019-12-04', 'For business trip.', 3, '2019-12-04 07:48:29'),
(6, 'ceejltayco@gmail.com', 38, '2019-12-23', '2019-12-23', 'For company outing.', 3, '2019-12-21 16:30:10'),
(7, 'ceejltayco@gmail.com', 39, '2019-12-23', '2019-12-25', 'For business trp.', 3, '2019-12-21 19:14:23'),
(11, 'ceejltayco@gmail.com', 37, '2020-01-12', '2020-01-12', 'Test for notification', 2, '2020-01-12 09:14:11'),
(12, 'ceejltayco@gmail.com', 37, '2020-01-26', '2020-01-26', 'Test Only.', 2, '2020-01-26 08:12:27'),
(13, 'ceejltayco@gmail.com', 37, '2020-01-26', '2020-01-26', 'Family use.', 2, '2020-01-26 08:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(4, 'Nissan', '2017-06-18 16:25:13', NULL),
(5, 'Toyota', '2017-06-18 16:25:24', NULL),
(8, 'Mitsubishi', '2019-09-26 06:07:11', NULL),
(9, 'Ford', '2019-09-28 15:41:32', NULL),
(10, 'Honda', '2019-10-20 11:14:36', NULL),
(11, 'Foton', '2019-10-20 12:01:09', NULL),
(12, 'Isuzu', '2019-10-20 12:10:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblconfirmation`
--

CREATE TABLE `tblconfirmation` (
  `id` int(5) NOT NULL,
  `booking_id` int(5) DEFAULT NULL,
  `confirm` tinyint(1) DEFAULT NULL,
  `date_confirmed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblconfirmation`
--

INSERT INTO `tblconfirmation` (`id`, `booking_id`, `confirm`, `date_confirmed`) VALUES
(1, 4, 0, '2019-12-04'),
(2, 5, 0, '2019-12-04'),
(3, 6, 0, '2019-12-22'),
(4, 7, 0, '2019-12-22'),
(6, 11, 0, '2020-01-19'),
(7, 12, 0, '2020-01-26'),
(8, 13, 0, '2020-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Davao City', 'ezrentonline@gmail.com', '09959237974');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Harry Den', 'webhostingamigo@gmail.com', '2147483647', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-06-18 10:03:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbllocation`
--

CREATE TABLE `tbllocation` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `lat` decimal(10,7) NOT NULL,
  `lng` decimal(10,7) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblnotifications`
--

CREATE TABLE `tblnotifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '<br>\r\n<p style=\"color: red; font-size: 15px; text-align: left;\"><strong>(1) Reservation Policy</strong></p>\r\n<p style=\"font-size: 14px;text-align: left;\">Upon reservation you must comply the following requirements below:</p>\r\n<ul>\r\n<li style=\"font-size: 14px;text-align: left;\">Renter must be 21 yrs old and above.</li>\r\n<li style=\"font-size: 14px;text-align: left;\">Must have professional driver\'s licence.</li>\r\n<li style=\"font-size: 14px;text-align: left;\">Must have 2 government issued ID\'s.</li>\r\n</ul>\r\n<p style=\"font-size: 14px;text-align: left;\">Reservation must be done one week before vehicle usage. The vehicle owner will confirmed the reservation once the owner confirmed the reservation the renter must pay 40% of the total bill to complete the transaction the payment must be done within 2 days if failure to do so will automatically cancel the reservation. Once a reservation is confirmed the renter must come on the pick-up date failure to do so, there will be a 400 pesos penalty for absence.</p>\r\n\r\n<hr class=\"dashed\">\r\n\r\n<p style=\"color: red; font-size: 15px; text-align: left;\"><strong>(2) Payment Policy</strong></p>\r\n<p style=\"font-size: 14px;text-align: left;\">Payment for reservation can be placed using money transfer/remittance to the account that this provided by the owner.</p>\r\n\r\n<hr class=\"dashed\">\r\n\r\n<p style=\"color: red; font-size: 15px; text-align: left;\"><strong>(3) Return Policy</strong></p>\r\n<p style=\"font-size: 14px;text-align: left;\">The renter must return the vehicle good condition, the fuel of the vehicle must have the same level of fuel from the pick-up date. If the vehicle will have a damaged upon return the customer will be charged depending on the owner. If the vehicle is returned late the renter will be penalized of 500 php.</p>\r\n\r\n<hr class=\"dashed\">\r\n\r\n<p style=\"color: red; font-size: 15px; text-align: left;\"><strong>(4) Destination</strong></p>\r\n<p style=\"font-size: 14px;text-align: left;\">Vehicle can be used within and outside the vicinity of the city except from critical areas.</p>\r\n\r\n<hr class=\"dashed\">\r\n\r\n\r\n<p style=\"color: red; font-size: 15px; text-align: left;\"><strong>(5) Promotions</strong></p>\r\n<p style=\"font-size: 14px;text-align: left;\">EZRent offers promotions. In order to avail and be updated about promotions user must subscribe to EZRent.</p>\r\n\r\n'),
(2, 'Privacy Policy', 'privacy', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(3, 'About Us ', 'aboutus', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>'),
(11, 'FAQs', 'faqs', '																														<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Address------Test &nbsp; &nbsp;dsfdsfds</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayments`
--

CREATE TABLE `tblpayments` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `invoice_id` varchar(255) NOT NULL,
  `external_id` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_details` text DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `paid_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblratings`
--

CREATE TABLE `tblratings` (
  `id` int(5) NOT NULL,
  `rental_id` int(5) NOT NULL,
  `renter_id` int(5) NOT NULL,
  `booking_Id` int(5) NOT NULL,
  `rating` int(5) DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `date_rated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblratings`
--

INSERT INTO `tblratings` (`id`, `rental_id`, `renter_id`, `booking_Id`, `rating`, `type`, `date_rated`) VALUES
(1, 93, 94, 3, 5, 1, '2019-12-03'),
(2, 93, 94, 3, 4, 0, '2019-12-04'),
(3, 96, 94, 4, 5, 0, '2019-12-04'),
(4, 96, 94, 4, 4, 1, '2019-12-04'),
(5, 93, 97, 5, 4, 1, '2019-12-05'),
(6, 93, 94, 6, 5, 1, '2019-12-22'),
(7, 95, 94, 7, 5, 1, '2020-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(11) NOT NULL,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblusage`
--

CREATE TABLE `tblusage` (
  `id` int(5) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `start` tinyint(1) NOT NULL,
  `confirmation` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusage`
--

INSERT INTO `tblusage` (`id`, `booking_id`, `start`, `confirmation`) VALUES
(1, 4, 0, 0),
(4, 5, 0, 1),
(5, 6, 0, 1),
(6, 7, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `verified_at` date DEFAULT NULL,
  `UserType` varchar(2) NOT NULL DEFAULT '0',
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `LenderLat` double DEFAULT NULL,
  `LenderLng` double DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `verified_at`, `UserType`, `FullName`, `EmailId`, `Password`, `ContactNo`, `LenderLat`, `LenderLng`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(93, '2019-11-10', '0', 'Lender Demo 1', 'lender1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 7.0783746, 125.55014419999998, NULL, NULL, NULL, NULL, '2019-11-09 17:43:45', '2019-11-09 17:46:39'),
(94, NULL, '1', 'Ceej Tayco', 'ceejltayco@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, NULL, NULL, NULL, NULL, '2019-11-09 17:44:25', NULL),
(95, '2019-11-10', '0', 'Lender Demo 2', 'lender2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 7.014706483897799, 125.49596476718136, NULL, NULL, NULL, NULL, '2019-11-10 06:37:55', '2019-11-10 06:39:31'),
(96, '2019-12-03', '0', 'Lender Demo 3', 'lender3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 7.053109999999999, 125.5589463, NULL, NULL, NULL, NULL, '2019-11-10 07:30:50', '2019-12-03 15:36:26'),
(97, NULL, '1', 'Jenny Mae Badilles', 'jbadilles@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, NULL, NULL, NULL, NULL, '2019-12-04 07:47:28', NULL),
(98, '2019-12-22', '0', 'Lender 4', 'lender4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 7.049762499541513, 125.58792300292976, NULL, NULL, NULL, NULL, '2019-12-21 16:47:51', '2019-12-21 19:52:20'),
(99, NULL, '1', 'Renter123', 'renter123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, NULL, NULL, NULL, NULL, '2020-01-18 07:47:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `vehicle_or` varchar(120) DEFAULT NULL,
  `vehicle_cr` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `user_id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`, `lat`, `lng`, `vehicle_or`, `vehicle_cr`) VALUES
(37, 93, 'Fortuner', 5, 'Toyota Fortuner Brand new (White)', 5000, 'Diesel', 2019, 20, '2015_Toyota_Fortuner_(New_Zealand).jpg', '2018_Toyota_Fortuner_(KUN160R)_Crusade_wagon_(2018-09-28)_01.jpg', '2018_Toyota_Fortuner_(KUN160R)_Crusade_wagon_(2018-09-28)_02.jpg', '1488710.jpg', '', 1, 1, 1, NULL, 1, 1, 1, NULL, 1, 1, 1, 1, '2019-11-10 09:17:40', '2019-11-10 13:25:53', 7.0783746, 125.55014419999998, 'orcr-main-1546929571.jpg', 'registration-certificate-card-haryana-2.jpg'),
(38, 93, 'Rush', 5, 'Toyota Rush Brand New', 2500, 'Diesel', 2019, 10, 'maxresdefault.jpg', 'Toyota Rush Exterior-4.jpg', 'Toyota Rush Exterior-16.jpg', 'toyota_rush-saf-cover.jpeg', 'toyota-rush-front-angle-low-view-721039.jpg', 1, 1, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, NULL, '2019-11-10 09:52:35', NULL, 7.0783746, 125.55014419999998, 'orcr-main-1546929571.jpg', 'registration-certificate-card-haryana-2.jpg'),
(39, 95, 'Xpander', 8, 'Mitsubishi Xpander Brand new 2019', 2500, 'Diesel', 2019, 15, 'xpander1.jpg', 'xpander2.jpg', 'xpander3.jpg', 'xpander4.jpg', '', 1, 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, NULL, '2019-12-03 15:04:03', '2019-12-03 15:32:07', 7.014706483897799, 125.49596476718136, 'official receipt.jpg', 'certificate of registration.jpg'),
(44, 96, 'Navarra', 4, 'Nissan Navarra 2019 Orange', 2500, 'Diesel', 2019, 20, 'navarra1.jpg', 'navarra2.jpg', 'navarra3.jpg', 'navarra4.jpg', '', 1, 1, 1, NULL, 1, 1, 1, NULL, 1, 1, 1, NULL, '2019-12-03 15:35:23', NULL, 7.053109999999999, 125.5589463, 'official receipt 1.jpg', 'certificate of registration 1.jpg'),
(45, 98, 'Montero Sport', 8, 'Montero Sport 2019 edition white', 5000, 'Diesel', 2019, 20, 'montero 1.jpg', 'montero 2.jpg', 'montero 3.jpeg', 'montero 4.jpg', '', 1, 1, 1, NULL, 1, 1, 1, NULL, 1, 1, 1, 1, '2019-12-21 16:56:48', '2019-12-21 16:58:19', 7.049762499541513, 125.58792300292976, 'car-registration-main.jpg', 'blog-850x420-2-51.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblconfirmation`
--
ALTER TABLE `tblconfirmation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllocation`
--
ALTER TABLE `tbllocation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `tblnotifications`
--
ALTER TABLE `tblnotifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpayments`
--
ALTER TABLE `tblpayments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblratings`
--
ALTER TABLE `tblratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_Id` (`booking_Id`),
  ADD KEY `rental_id` (`rental_id`,`renter_id`) USING BTREE,
  ADD KEY `tblratings_ibfk_2` (`renter_id`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusage`
--
ALTER TABLE `tblusage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblconfirmation`
--
ALTER TABLE `tblconfirmation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbllocation`
--
ALTER TABLE `tbllocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblnotifications`
--
ALTER TABLE `tblnotifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblpayments`
--
ALTER TABLE `tblpayments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblratings`
--
ALTER TABLE `tblratings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblusage`
--
ALTER TABLE `tblusage`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblconfirmation`
--
ALTER TABLE `tblconfirmation`
  ADD CONSTRAINT `tblconfirmation_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `tblbooking` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbllocation`
--
ALTER TABLE `tbllocation`
  ADD CONSTRAINT `tbllocation_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `tblbooking` (`id`) ON DELETE CASCADE;
--
-- Database: `customer_registration`
--
CREATE DATABASE IF NOT EXISTS `customer_registration` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `customer_registration`;

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `user_type` enum('customer','admin') NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `table_name` varchar(50) DEFAULT NULL,
  `record_id` int(11) DEFAULT NULL,
  `old_values` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`old_values`)),
  `new_values` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`new_values`)),
  `ip_address` varchar(45) NOT NULL,
  `user_agent` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_type`, `user_id`, `action`, `table_name`, `record_id`, `old_values`, `new_values`, `ip_address`, `user_agent`, `created_at`) VALUES
(1, 'admin', 1, 'login', 'admin_users', 1, NULL, NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36 Edg/146.0.0.0', '2026-03-18 23:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `role` enum('super_admin','admin','manager','staff') NOT NULL DEFAULT 'staff',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `password`, `full_name`, `role`, `is_active`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', '$argon2id$v=19$m=65536,t=4,p=1$NEJ4QlhkRk5wQXM0SmtCaA$sYm4iR5yRVcHiyd+cOVBXnm1r91unbYJGPUOgOY+FSg', 'System Administrator', 'super_admin', 1, '2026-03-18 23:39:46', '2026-03-18 23:39:19', '2026-03-18 23:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `communication_logs`
--

CREATE TABLE `communication_logs` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `communication_type` enum('email','sms','push') NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('sent','failed','pending') NOT NULL DEFAULT 'pending',
  `sent_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `delivery_address` text DEFAULT NULL,
  `dietary_preferences` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`dietary_preferences`)),
  `communication_preferences` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`communication_preferences`)),
  `data_processing_consent` tinyint(1) NOT NULL DEFAULT 0,
  `marketing_consent` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `mobile_verified` tinyint(1) NOT NULL DEFAULT 0,
  `account_status` enum('active','inactive','suspended') NOT NULL DEFAULT 'active',
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_segments`
--

CREATE TABLE `customer_segments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `criteria` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`criteria`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_segment_assignments`
--

CREATE TABLE `customer_segment_assignments` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `segment_id` int(11) NOT NULL,
  `assigned_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `html_content` text NOT NULL,
  `text_content` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `subject`, `html_content`, `text_content`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'welcome', 'Welcome to Our Loyalty Program!', '<h2>Welcome {{name}}!</h2><p>Thank you for joining our loyalty program. You have received {{welcome_points}} welcome points!</p>', 'Welcome {{name}}! Thank you for joining our loyalty program. You have received {{welcome_points}} welcome points!', 1, '2026-03-18 23:39:19', '2026-03-18 23:39:19'),
(2, 'birthday', 'Happy Birthday {{name}}!', '<h2>Happy Birthday {{name}}!</h2><p>As a birthday gift, we\'ve added {{birthday_points}} bonus points to your account!</p>', 'Happy Birthday {{name}}! As a birthday gift, we\'ve added {{birthday_points}} bonus points to your account!', 1, '2026-03-18 23:39:19', '2026-03-18 23:39:19'),
(3, 'points_earned', 'You Earned Points!', '<h2>Great News!</h2><p>You earned {{points}} points from your recent purchase. Your current balance is {{total_points}} points.</p>', 'Great News! You earned {{points}} points from your recent purchase. Your current balance is {{total_points}} points.', 1, '2026-03-18 23:39:19', '2026-03-18 23:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `loyalty_points`
--

CREATE TABLE `loyalty_points` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `transaction_type` enum('earned','redeemed','welcome_bonus','adjustment') NOT NULL,
  `description` varchar(255) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `reference_id` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_number` varchar(50) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `points_earned` int(11) NOT NULL DEFAULT 0,
  `order_status` enum('pending','confirmed','shipped','delivered','cancelled') NOT NULL DEFAULT 'pending',
  `payment_status` enum('pending','paid','failed','refunded') NOT NULL DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `delivered_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `remember_tokens`
--

CREATE TABLE `remember_tokens` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expires_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `points_required` int(11) NOT NULL,
  `reward_type` enum('discount','free_item','voucher','service') NOT NULL,
  `reward_value` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `stock_quantity` int(11) DEFAULT NULL,
  `valid_from` date NOT NULL,
  `valid_until` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `name`, `description`, `points_required`, `reward_type`, `reward_value`, `is_active`, `stock_quantity`, `valid_from`, `valid_until`, `created_at`, `updated_at`) VALUES
(1, '₱50 Discount', 'Get ₱50 off your next purchase', 500, 'discount', '50', 1, NULL, '2026-03-18', '2027-03-18', '2026-03-18 23:39:19', '2026-03-18 23:39:19'),
(2, '₱100 Discount', 'Get ₱100 off your next purchase', 900, 'discount', '100', 1, NULL, '2026-03-18', '2027-03-18', '2026-03-18 23:39:19', '2026-03-18 23:39:19'),
(3, 'Free Delivery', 'Free delivery on your next order', 300, 'service', 'free_delivery', 1, NULL, '2026-03-18', '2026-09-18', '2026-03-18 23:39:19', '2026-03-18 23:39:19'),
(4, 'Birthday Cake', 'Complimentary birthday cake on your birthday month', 1200, 'free_item', 'birthday_cake', 1, NULL, '2026-03-18', '2028-03-18', '2026-03-18 23:39:19', '2026-03-18 23:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `reward_redemptions`
--

CREATE TABLE `reward_redemptions` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `reward_id` int(11) NOT NULL,
  `points_used` int(11) NOT NULL,
  `redemption_code` varchar(50) NOT NULL,
  `status` enum('pending','approved','used','expired') NOT NULL DEFAULT 'pending',
  `redeemed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` text NOT NULL,
  `setting_type` enum('string','number','boolean','json') NOT NULL DEFAULT 'string',
  `description` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `setting_key`, `setting_value`, `setting_type`, `description`, `updated_at`) VALUES
(1, 'points_per_peso', '1', 'number', 'Points earned per peso spent', '2026-03-18 23:39:19'),
(2, 'welcome_bonus_points', '100', 'number', 'Points given to new customers', '2026-03-18 23:39:19'),
(3, 'birthday_bonus_points', '50', 'number', 'Bonus points given on birthday', '2026-03-18 23:39:19'),
(4, 'min_redemption_points', '100', 'number', 'Minimum points required for redemption', '2026-03-18 23:39:19'),
(5, 'points_expiry_days', '365', 'number', 'Days after which points expire', '2026-03-18 23:39:19'),
(6, 'email_verification_required', '0', 'boolean', 'Require email verification for registration', '2026-03-18 23:39:19'),
(7, 'mobile_verification_required', '1', 'boolean', 'Require mobile verification for registration', '2026-03-18 23:39:19'),
(8, 'data_retention_days', '2555', 'number', 'Days to retain customer data (7 years per RA 10173)', '2026-03-18 23:39:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user` (`user_type`,`user_id`),
  ADD KEY `idx_action` (`action`),
  ADD KEY `idx_table` (`table_name`),
  ADD KEY `idx_created` (`created_at`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `communication_logs`
--
ALTER TABLE `communication_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_customer` (`customer_id`),
  ADD KEY `idx_type` (`communication_type`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_sent` (`sent_at`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_status` (`account_status`),
  ADD KEY `idx_created` (`created_at`);

--
-- Indexes for table `customer_segments`
--
ALTER TABLE `customer_segments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_segment_assignments`
--
ALTER TABLE `customer_segment_assignments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_customer_segment` (`customer_id`,`segment_id`),
  ADD KEY `idx_customer` (`customer_id`),
  ADD KEY `idx_segment` (`segment_id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `loyalty_points`
--
ALTER TABLE `loyalty_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_customer` (`customer_id`),
  ADD KEY `idx_transaction_type` (`transaction_type`),
  ADD KEY `idx_created` (`created_at`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_number` (`order_number`),
  ADD KEY `idx_customer` (`customer_id`),
  ADD KEY `idx_status` (`order_status`),
  ADD KEY `idx_order_date` (`order_date`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_order` (`order_id`);

--
-- Indexes for table `remember_tokens`
--
ALTER TABLE `remember_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `idx_customer` (`customer_id`),
  ADD KEY `idx_token` (`token`),
  ADD KEY `idx_expires` (`expires_at`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_active` (`is_active`),
  ADD KEY `idx_validity` (`valid_from`,`valid_until`);

--
-- Indexes for table `reward_redemptions`
--
ALTER TABLE `reward_redemptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `redemption_code` (`redemption_code`),
  ADD KEY `reward_id` (`reward_id`),
  ADD KEY `idx_customer` (`customer_id`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_expires` (`expires_at`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_key` (`setting_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `communication_logs`
--
ALTER TABLE `communication_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_segments`
--
ALTER TABLE `customer_segments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_segment_assignments`
--
ALTER TABLE `customer_segment_assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loyalty_points`
--
ALTER TABLE `loyalty_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remember_tokens`
--
ALTER TABLE `remember_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reward_redemptions`
--
ALTER TABLE `reward_redemptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `communication_logs`
--
ALTER TABLE `communication_logs`
  ADD CONSTRAINT `communication_logs_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_segment_assignments`
--
ALTER TABLE `customer_segment_assignments`
  ADD CONSTRAINT `customer_segment_assignments_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_segment_assignments_ibfk_2` FOREIGN KEY (`segment_id`) REFERENCES `customer_segments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `loyalty_points`
--
ALTER TABLE `loyalty_points`
  ADD CONSTRAINT `loyalty_points_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `remember_tokens`
--
ALTER TABLE `remember_tokens`
  ADD CONSTRAINT `remember_tokens_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reward_redemptions`
--
ALTER TABLE `reward_redemptions`
  ADD CONSTRAINT `reward_redemptions_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reward_redemptions_ibfk_2` FOREIGN KEY (`reward_id`) REFERENCES `rewards` (`id`) ON DELETE CASCADE;
--
-- Database: `grading_system`
--
CREATE DATABASE IF NOT EXISTS `grading_system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `grading_system`;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`log_id`, `user_id`, `action`, `details`, `created_at`) VALUES
(1, 1, 'bulk_approve_grades', 'Approved 4 pending grade submissions', '2026-03-25 03:04:48'),
(2, 1, 'bulk_approve_verification', 'Approved 12 grades in verification page', '2026-03-25 03:50:41'),
(3, 1, 'bulk_approve_grades', 'Approved 4 pending grade submissions', '2026-03-26 01:04:00'),
(4, 1, 'bulk_approve_course', 'Approved 4 grades for course: CS201', '2026-03-26 03:43:58'),
(5, 1, 'bulk_approve_grades', 'Approved 8 pending grade submissions', '2026-03-30 17:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `credits` decimal(3,1) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `semester` varchar(20) NOT NULL,
  `academic_year` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_code`, `course_name`, `description`, `credits`, `department`, `faculty_id`, `semester`, `academic_year`, `created_at`) VALUES
(1, 'CS101', 'Introduction to Programming', 'Basic programming concepts and problem solving', 3.0, 'Computer Science', 2, 'Fall 2024', '2024-2025', '2026-01-27 14:53:26'),
(2, 'CS201', 'Data Structures', 'Advanced data structures and algorithms', 4.0, 'Computer Science', 2, 'Fall 2024', '2024-2025', '2026-01-27 14:53:26'),
(3, 'MATH101', 'Calculus I', 'Differential and integral calculus', 4.0, 'Mathematics', 3, 'Fall 2024', '2024-2025', '2026-01-27 14:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `email_verification`
--

CREATE TABLE `email_verification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verification_code` varchar(6) NOT NULL,
  `is_used` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `expires_at` timestamp NOT NULL DEFAULT (current_timestamp() + interval 10 minute),
  `used_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_verification`
--

INSERT INTO `email_verification` (`id`, `user_id`, `email`, `verification_code`, `is_used`, `created_at`, `expires_at`, `used_at`) VALUES
(58, 2, 'deitamichael19@gmail.com', '005478', 1, '2026-03-30 17:43:29', '2026-03-31 02:53:19', NULL),
(60, 1, 'michaeldeita2020@gmail.com', '559364', 1, '2026-03-30 17:45:58', '2026-03-31 02:55:53', NULL),
(64, 4, 'yurisamav4@gmail.com', '356656', 0, '2026-03-30 17:50:41', '2026-03-31 03:00:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enrollment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `section` varchar(20) DEFAULT 'A',
  `enrollment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('active','dropped','completed') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`enrollment_id`, `student_id`, `course_id`, `section`, `enrollment_date`, `status`) VALUES
(1, 4, 1, 'A', '2026-01-27 14:53:26', 'active'),
(2, 4, 2, 'A', '2026-01-27 14:53:26', 'active'),
(3, 5, 1, 'A', '2026-01-27 14:53:26', 'active'),
(4, 5, 2, 'A', '2026-01-27 14:53:26', 'active'),
(5, 6, 3, 'A', '2026-01-27 14:53:26', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `grade_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `prelim_grade` decimal(5,2) DEFAULT NULL,
  `midterm_grade` decimal(5,2) DEFAULT NULL,
  `final_grade` decimal(5,2) DEFAULT NULL,
  `assignment_grade` decimal(5,2) DEFAULT NULL,
  `quiz_grade` decimal(5,2) DEFAULT NULL,
  `overall_grade` decimal(5,2) DEFAULT NULL,
  `grade_status` enum('pending','submitted','approved','rejected') DEFAULT 'pending',
  `remarks` text DEFAULT NULL,
  `submitted_at` timestamp NULL DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `registrar_remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `student_id`, `course_id`, `faculty_id`, `prelim_grade`, `midterm_grade`, `final_grade`, `assignment_grade`, `quiz_grade`, `overall_grade`, `grade_status`, `remarks`, `submitted_at`, `approved_at`, `approved_by`, `registrar_remarks`) VALUES
(1, 4, 1, 2, 88.00, 92.00, 90.00, 95.00, 87.00, 90.40, 'submitted', '[Registrar: ]', '2026-03-30 17:56:39', '2026-03-30 17:56:05', 1, ''),
(2, 5, 1, 2, 78.00, 82.00, 80.00, 85.00, 79.00, 80.60, 'submitted', '', '2026-03-30 17:56:39', '2026-03-30 17:56:05', 1, NULL),
(3, 4, 2, 2, 85.00, 88.00, 87.00, 90.00, 86.00, 87.10, 'submitted', '', '2026-03-30 17:57:18', '2026-03-30 17:56:05', 1, ''),
(4, 5, 2, 2, 92.00, 94.00, 93.00, 96.00, 91.00, 93.20, 'submitted', '', '2026-03-30 17:57:18', '2026-03-30 17:56:05', 1, ''),
(5, 4, 1, 2, 88.00, 92.00, 90.00, 95.00, 87.00, 90.40, 'submitted', '[Registrar: ]', '2026-03-30 17:56:39', '2026-03-30 17:56:05', 1, ''),
(6, 4, 2, 2, 85.00, 88.00, 87.00, 90.00, 86.00, 87.10, 'submitted', '', '2026-03-30 17:57:18', '2026-03-30 17:56:05', 1, ''),
(7, 5, 1, 2, 78.00, 82.00, 80.00, 85.00, 79.00, 80.60, 'submitted', '', '2026-03-30 17:56:39', '2026-03-30 17:56:05', 1, NULL),
(8, 5, 2, 2, 92.00, 94.00, 93.00, 96.00, 91.00, 93.20, 'submitted', '', '2026-03-30 17:57:18', '2026-03-30 17:56:05', 1, NULL),
(9, 6, 3, 3, 76.00, 78.00, 77.00, 80.00, 75.00, 77.30, 'approved', NULL, NULL, '2026-03-25 03:50:41', 1, NULL),
(10, 1, 1, 3, 88.00, 92.00, 95.00, 90.00, 93.00, 92.00, 'approved', NULL, NULL, '2026-03-25 03:50:41', 1, NULL),
(11, 1, 2, 3, 85.00, 87.00, 90.00, 88.00, 89.00, 87.80, 'approved', NULL, NULL, '2026-03-25 03:50:41', 1, NULL),
(12, 1, 3, 4, 78.00, 82.00, 85.00, 80.00, 83.00, 82.40, 'approved', NULL, NULL, '2026-03-25 03:50:41', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade_change_requests`
--

CREATE TABLE `grade_change_requests` (
  `request_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `old_prelim` decimal(5,2) DEFAULT NULL,
  `new_prelim` decimal(5,2) DEFAULT NULL,
  `old_midterm` decimal(5,2) DEFAULT NULL,
  `new_midterm` decimal(5,2) DEFAULT NULL,
  `old_final` decimal(5,2) DEFAULT NULL,
  `new_final` decimal(5,2) DEFAULT NULL,
  `old_assignment` decimal(5,2) DEFAULT NULL,
  `new_assignment` decimal(5,2) DEFAULT NULL,
  `old_quiz` decimal(5,2) DEFAULT NULL,
  `new_quiz` decimal(5,2) DEFAULT NULL,
  `reason` text NOT NULL,
  `request_status` enum('pending','approved','rejected') DEFAULT 'pending',
  `requested_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `processed_at` timestamp NULL DEFAULT NULL,
  `processed_by` int(11) DEFAULT NULL,
  `registrar_remarks` text DEFAULT NULL,
  `registrar_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade_change_requests`
--

INSERT INTO `grade_change_requests` (`request_id`, `grade_id`, `faculty_id`, `student_id`, `course_id`, `old_prelim`, `new_prelim`, `old_midterm`, `new_midterm`, `old_final`, `new_final`, `old_assignment`, `new_assignment`, `old_quiz`, `new_quiz`, `reason`, `request_status`, `requested_at`, `processed_at`, `processed_by`, `registrar_remarks`, `registrar_notes`) VALUES
(1, 2, 2, 5, 1, 0.00, 90.00, 0.00, 90.00, 0.00, 90.00, 0.00, 90.00, 0.00, 90.00, 'sample', 'approved', '2026-01-27 15:56:02', '2026-01-27 15:56:27', 1, NULL, ''),
(2, 7, 2, 5, 1, 78.00, 99.00, 82.00, 99.00, 80.00, 99.00, 85.00, 99.00, 79.00, 99.00, 'sample', 'rejected', '2026-03-25 03:16:01', '2026-03-25 03:52:41', 1, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade_reports`
--

CREATE TABLE `grade_reports` (
  `report_id` int(11) NOT NULL,
  `report_type` enum('class_sheet','pass_fail_summary','grade_analytics') NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `academic_year` varchar(20) DEFAULT NULL,
  `generated_by` int(11) NOT NULL,
  `report_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`report_data`)),
  `generated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade_reports`
--

INSERT INTO `grade_reports` (`report_id`, `report_type`, `course_id`, `semester`, `academic_year`, `generated_by`, `report_data`, `generated_at`) VALUES
(1, 'pass_fail_summary', 0, '', '', 2, '[{\"course_code\":\"CS101\",\"course_name\":\"Introduction to Programming\",\"semester\":\"Fall 2024\",\"academic_year\":\"2024-2025\",\"total_students\":3,\"passed\":\"3\",\"failed\":\"0\",\"average_grade\":\"90.93\",\"highest_grade\":\"92.00\",\"lowest_grade\":\"90.40\"},{\"course_code\":\"CS201\",\"course_name\":\"Data Structures\",\"semester\":\"Fall 2024\",\"academic_year\":\"2024-2025\",\"total_students\":2,\"passed\":\"2\",\"failed\":\"0\",\"average_grade\":\"87.45\",\"highest_grade\":\"87.80\",\"lowest_grade\":\"87.10\"},{\"course_code\":\"MATH101\",\"course_name\":\"Calculus I\",\"semester\":\"Fall 2024\",\"academic_year\":\"2024-2025\",\"total_students\":2,\"passed\":\"2\",\"failed\":\"0\",\"average_grade\":\"79.85\",\"highest_grade\":\"82.40\",\"lowest_grade\":\"77.30\"}]', '2026-01-27 18:28:59'),
(2, 'pass_fail_summary', 0, '', '', 2, '[{\"course_code\":\"CS101\",\"course_name\":\"Introduction to Programming\",\"semester\":\"Fall 2024\",\"academic_year\":\"2024-2025\",\"total_students\":3,\"passed\":\"3\",\"failed\":\"0\",\"average_grade\":\"90.93\",\"highest_grade\":\"92.00\",\"lowest_grade\":\"90.40\"},{\"course_code\":\"CS201\",\"course_name\":\"Data Structures\",\"semester\":\"Fall 2024\",\"academic_year\":\"2024-2025\",\"total_students\":2,\"passed\":\"2\",\"failed\":\"0\",\"average_grade\":\"87.45\",\"highest_grade\":\"87.80\",\"lowest_grade\":\"87.10\"},{\"course_code\":\"MATH101\",\"course_name\":\"Calculus I\",\"semester\":\"Fall 2024\",\"academic_year\":\"2024-2025\",\"total_students\":2,\"passed\":\"2\",\"failed\":\"0\",\"average_grade\":\"79.85\",\"highest_grade\":\"82.40\",\"lowest_grade\":\"77.30\"}]', '2026-01-27 18:32:54'),
(3, 'class_sheet', 1, '', '', 1, '[{\"grade_id\":1,\"student_id\":4,\"course_id\":1,\"faculty_id\":2,\"prelim_grade\":\"88.00\",\"midterm_grade\":\"92.00\",\"final_grade\":\"90.00\",\"assignment_grade\":\"95.00\",\"quiz_grade\":\"87.00\",\"overall_grade\":\"90.40\",\"grade_status\":\"approved\",\"remarks\":\"[Registrar: ]\",\"submitted_at\":\"2026-03-24 20:05:33\",\"approved_at\":\"2026-03-24 20:50:41\",\"approved_by\":1,\"registrar_remarks\":\"\",\"student_name\":\"Johnson\",\"student_email\":\"yurisamav4@gmail.com\",\"course_code\":\"CS101\",\"course_name\":\"Introduction to Programming\",\"semester\":\"Fall 2024\",\"academic_year\":\"2024-2025\",\"faculty_name\":\"Dr. John michael\"},{\"grade_id\":5,\"student_id\":4,\"course_id\":1,\"faculty_id\":2,\"prelim_grade\":\"88.00\",\"midterm_grade\":\"92.00\",\"final_grade\":\"90.00\",\"assignment_grade\":\"95.00\",\"quiz_grade\":\"87.00\",\"overall_grade\":\"90.40\",\"grade_status\":\"approved\",\"remarks\":\"[Registrar: ]\",\"submitted_at\":\"2026-03-24 20:05:33\",\"approved_at\":\"2026-03-24 20:50:41\",\"approved_by\":1,\"registrar_remarks\":\"\",\"student_name\":\"Johnson\",\"student_email\":\"yurisamav4@gmail.com\",\"course_code\":\"CS101\",\"course_name\":\"Introduction to Programming\",\"semester\":\"Fall 2024\",\"academic_year\":\"2024-2025\",\"faculty_name\":\"Dr. John michael\"},{\"grade_id\":10,\"student_id\":1,\"course_id\":1,\"faculty_id\":3,\"prelim_grade\":\"88.00\",\"midterm_grade\":\"92.00\",\"final_grade\":\"95.00\",\"assignment_grade\":\"90.00\",\"quiz_grade\":\"93.00\",\"overall_grade\":\"92.00\",\"grade_status\":\"approved\",\"remarks\":null,\"submitted_at\":null,\"approved_at\":\"2026-03-24 20:50:41\",\"approved_by\":1,\"registrar_remarks\":null,\"student_name\":\"System Administrator\",\"student_email\":\"michaeldeita2020@gmail.com\",\"course_code\":\"CS101\",\"course_name\":\"Introduction to Programming\",\"semester\":\"Fall 2024\",\"academic_year\":\"2024-2025\",\"faculty_name\":\"Prof. Jane\"},{\"grade_id\":2,\"student_id\":5,\"course_id\":1,\"faculty_id\":2,\"prelim_grade\":\"78.00\",\"midterm_grade\":\"82.00\",\"final_grade\":\"80.00\",\"assignment_grade\":\"85.00\",\"quiz_grade\":\"79.00\",\"overall_grade\":\"80.60\",\"grade_status\":\"approved\",\"remarks\":\"\",\"submitted_at\":\"2026-03-24 20:05:33\",\"approved_at\":\"2026-03-24 20:50:41\",\"approved_by\":1,\"registrar_remarks\":null,\"student_name\":\"Wilson\",\"student_email\":\"jhondeita739@gmail.com\",\"course_code\":\"CS101\",\"course_name\":\"Introduction to Programming\",\"semester\":\"Fall 2024\",\"academic_year\":\"2024-2025\",\"faculty_name\":\"Dr. John michael\"},{\"grade_id\":7,\"student_id\":5,\"course_id\":1,\"faculty_id\":2,\"prelim_grade\":\"78.00\",\"midterm_grade\":\"82.00\",\"final_grade\":\"80.00\",\"assignment_grade\":\"85.00\",\"quiz_grade\":\"79.00\",\"overall_grade\":\"80.60\",\"grade_status\":\"approved\",\"remarks\":\"\",\"submitted_at\":\"2026-03-24 20:05:33\",\"approved_at\":\"2026-03-24 20:50:41\",\"approved_by\":1,\"registrar_remarks\":null,\"student_name\":\"Wilson\",\"student_email\":\"jhondeita739@gmail.com\",\"course_code\":\"CS101\",\"course_name\":\"Introduction to Programming\",\"semester\":\"Fall 2024\",\"academic_year\":\"2024-2025\",\"faculty_name\":\"Dr. John michael\"}]', '2026-03-25 03:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` enum('faculty','registrar','student') NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `email`, `user_type`, `department`, `created_at`, `last_login`) VALUES
(1, 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'System Administrator', 'michaeldeita2020@gmail.com', 'registrar', 'Registrar Office', '2026-01-27 14:53:26', '2026-03-30 17:45:53'),
(2, 'faculty1', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Dr. John michael', 'deitamichael19@gmail.com', 'faculty', 'Computer Science', '2026-01-27 14:53:26', '2026-03-30 17:43:19'),
(3, 'faculty2', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Prof. Jane', 'legaspimichael889@gmail.com', 'faculty', 'Mathematics', '2026-01-27 14:53:26', NULL),
(4, 'student1', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Johnson', 'yurisamav4@gmail.com', 'student', 'Computer Science', '2026-01-27 14:53:26', '2026-03-30 17:50:36'),
(5, 'student2', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Wilson', 'jhondeita739@gmail.com', 'student', 'Computer Science', '2026-01-27 14:53:26', '2026-01-27 18:23:48'),
(6, 'student3', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Carol', 'michaeldeita160@gmail.com', 'student', 'Mathematics', '2026-01-27 14:53:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_code` (`course_code`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `email_verification`
--
ALTER TABLE `email_verification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `verification_code` (`verification_code`),
  ADD KEY `expires_at` (`expires_at`),
  ADD KEY `idx_user_code_active` (`user_id`,`verification_code`,`is_used`,`expires_at`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD UNIQUE KEY `unique_enrollment` (`student_id`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `approved_by` (`approved_by`);

--
-- Indexes for table `grade_change_requests`
--
ALTER TABLE `grade_change_requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `processed_by` (`processed_by`);

--
-- Indexes for table `grade_reports`
--
ALTER TABLE `grade_reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `generated_by` (`generated_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email_verification`
--
ALTER TABLE `email_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `grade_change_requests`
--
ALTER TABLE `grade_change_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grade_reports`
--
ALTER TABLE `grade_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD CONSTRAINT `activity_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `email_verification`
--
ALTER TABLE `email_verification`
  ADD CONSTRAINT `fk_email_verification_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `grades_ibfk_3` FOREIGN KEY (`faculty_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `grades_ibfk_4` FOREIGN KEY (`approved_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `grade_change_requests`
--
ALTER TABLE `grade_change_requests`
  ADD CONSTRAINT `grade_change_requests_ibfk_1` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`grade_id`),
  ADD CONSTRAINT `grade_change_requests_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `grade_change_requests_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `grade_change_requests_ibfk_4` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `grade_change_requests_ibfk_5` FOREIGN KEY (`processed_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `grade_reports`
--
ALTER TABLE `grade_reports`
  ADD CONSTRAINT `grade_reports_ibfk_1` FOREIGN KEY (`generated_by`) REFERENCES `users` (`user_id`);
--
-- Database: `hrms`
--
CREATE DATABASE IF NOT EXISTS `hrms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `hrms`;

-- --------------------------------------------------------

--
-- Table structure for table `ai_screening_results`
--

CREATE TABLE `ai_screening_results` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `job_vacancy_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `strengths` text DEFAULT NULL,
  `concerns` text DEFAULT NULL,
  `recommendation` varchar(50) DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `ai_generated` tinyint(1) DEFAULT 0,
  `screened_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ai_screening_results`
--

INSERT INTO `ai_screening_results` (`id`, `applicant_id`, `job_vacancy_id`, `score`, `strengths`, `concerns`, `recommendation`, `feedback`, `ai_generated`, `screened_at`) VALUES
(1, 3, 1, 100, '[\"Has educational background\",\"Meets minimum experience requirement\",\"Has listed skills and qualifications\"]', '[]', 'Recommend', 'Based on the provided information, the applicant recommend for this position.', 0, '2026-08-28 01:44:39'),
(2, 4, 2, 100, '[\"Has educational background\",\"Meets minimum experience requirement\",\"Has listed skills and qualifications\"]', '[]', 'Recommend', 'Based on the provided information, the applicant recommend for this position.', 0, '2026-08-28 03:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `resume_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `date_of_birth`, `gender`, `resume_path`, `created_at`, `updated_at`) VALUES
(1, 'James', 'Wilson', 'james.wilson@email.com', '555-0201', '111 First St', '1993-04-10', 'male', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(2, 'Jennifer', 'Taylor', 'jennifer.taylor@email.com', '555-0202', '222 Second Ave', '1991-09-25', 'female', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(3, 'Robert', 'Anderson', 'robert.anderson@email.com', '555-0203', '333 Third Blvd', '1994-02-14', 'male', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(4, 'michael', 'deita', 'michaeldeita2020@gmail.com', '123445', 'awruwygrbdhs', '2026-08-28', 'male', 'Array', '2026-08-28 03:01:01', '2026-08-28 03:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_documents`
--

CREATE TABLE `applicant_documents` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `document_type` varchar(50) NOT NULL,
  `document_path` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_education`
--

CREATE TABLE `applicant_education` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `field_of_study` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `gpa` decimal(3,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_education`
--

INSERT INTO `applicant_education` (`id`, `applicant_id`, `institution`, `degree`, `field_of_study`, `start_date`, `end_date`, `gpa`, `created_at`) VALUES
(1, 1, 'State University', 'Bachelor of Science', 'Computer Science', '2011-09-01', '2015-05-15', 3.80, '2026-08-28 00:54:51'),
(2, 2, 'City College', 'Bachelor of Arts', 'Marketing', '2010-09-01', '2014-05-20', 3.50, '2026-08-28 00:54:51'),
(3, 3, 'Tech Institute', 'Bachelor of Science', 'Information Technology', '2012-09-01', '2016-05-10', 3.70, '2026-08-28 00:54:51'),
(4, 4, 'bcp', 'BSIT', 'SAMPLE', NULL, '2019-12-31', NULL, '2026-08-28 03:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_work_experience`
--

CREATE TABLE `applicant_work_experience` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_work_experience`
--

INSERT INTO `applicant_work_experience` (`id`, `applicant_id`, `company`, `position`, `start_date`, `end_date`, `description`, `created_at`) VALUES
(1, 1, 'ABC Corp', 'Junior Developer', '2015-06-01', '2018-12-31', 'Developed web applications', '2026-08-28 00:54:51'),
(2, 2, 'XYZ Agency', 'Marketing Assistant', '2014-07-01', '2019-08-31', 'Managed social media campaigns', '2026-08-28 00:54:51'),
(3, 3, 'Tech Solutions', 'IT Support', '2016-06-01', '2020-03-31', 'Provided technical support', '2026-08-28 00:54:51'),
(4, 4, 'Previous Company', 'Previous Position', '2025-08-28', NULL, 'SAMPLE', '2026-08-28 03:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `check_in` time DEFAULT NULL,
  `check_out` time DEFAULT NULL,
  `status` enum('present','absent','late','half_day','leave','holiday') DEFAULT 'present',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `benefit_type` enum('health','insurance','retirement','other') NOT NULL,
  `employer_contribution` decimal(12,2) DEFAULT NULL,
  `employee_contribution` decimal(12,2) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`id`, `name`, `description`, `benefit_type`, `employer_contribution`, `employee_contribution`, `is_active`, `created_at`) VALUES
(1, 'Health Insurance', 'Medical coverage for employees', 'health', 500.00, 100.00, 1, '2026-08-27 23:52:26'),
(2, 'Dental Insurance', 'Dental coverage for employees', 'health', 50.00, 20.00, 1, '2026-08-27 23:52:26'),
(3, 'Life Insurance', 'Life insurance coverage', 'insurance', 200.00, 0.00, 1, '2026-08-27 23:52:26'),
(4, '401k Retirement', 'Retirement savings plan', 'retirement', 500.00, 500.00, 1, '2026-08-27 23:52:26'),
(5, 'Health Insurance', 'Medical coverage for employees', 'health', 500.00, 100.00, 1, '2026-08-28 00:54:51'),
(6, 'Dental Insurance', 'Dental coverage for employees', 'health', 50.00, 20.00, 1, '2026-08-28 00:54:51'),
(7, 'Life Insurance', 'Life insurance coverage', 'insurance', 200.00, 0.00, 1, '2026-08-28 00:54:51'),
(8, '401k Retirement', 'Retirement savings plan', 'retirement', 500.00, 500.00, 1, '2026-08-28 00:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `claim_type` varchar(50) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `description` text DEFAULT NULL,
  `claim_date` date NOT NULL,
  `status` enum('pending','approved','rejected','paid') DEFAULT 'pending',
  `approved_by` int(11) DEFAULT NULL,
  `approved_amount` decimal(12,2) DEFAULT NULL,
  `approved_date` timestamp NULL DEFAULT NULL,
  `rejection_reason` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `claim_documents`
--

CREATE TABLE `claim_documents` (
  `id` int(11) NOT NULL,
  `claim_id` int(11) NOT NULL,
  `document_path` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `manager_id`, `created_at`, `updated_at`) VALUES
(1, 'Human Resources', 'Manages employee relations and recruitment', NULL, '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(2, 'Information Technology', 'Handles technology infrastructure and support', NULL, '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(3, 'Finance', 'Manages financial operations and accounting', NULL, '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(4, 'Marketing', 'Handles marketing and communications', NULL, '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(5, 'Operations', 'Manages day-to-day operations', NULL, '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(6, 'Sales', 'Handles sales and business development', NULL, '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(7, 'Human Resources', 'Manages employee relations and recruitment', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(8, 'Information Technology', 'Handles technology infrastructure and support', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(9, 'Finance', 'Manages financial operations and accounting', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(10, 'Marketing', 'Handles marketing and communications', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(11, 'Operations', 'Manages day-to-day operations', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(12, 'Sales', 'Handles sales and business development', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_number` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `marital_status` enum('single','married','divorced','widowed') DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `employment_status` enum('active','inactive','on_leave','terminated','resigned') DEFAULT 'active',
  `hire_date` date NOT NULL,
  `termination_date` date DEFAULT NULL,
  `termination_reason` text DEFAULT NULL,
  `salary` decimal(12,2) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_number`, `first_name`, `last_name`, `email`, `phone`, `address`, `date_of_birth`, `gender`, `marital_status`, `department_id`, `position_id`, `supervisor_id`, `employment_status`, `hire_date`, `termination_date`, `termination_reason`, `salary`, `profile_picture`, `created_at`, `updated_at`) VALUES
(1, 'EMP001', 'John', 'Smith', 'john.smith@hrms.com', '555-0101', '123 Main St, City', '1990-05-15', 'male', 'married', 1, 1, NULL, 'active', '2020-01-15', NULL, NULL, 75000.00, NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(2, 'EMP002', 'Sarah', 'Johnson', 'sarah.johnson@hrms.com', '555-0102', '456 Oak Ave, Town', '1992-08-22', 'female', 'single', 2, 4, 1, 'active', '2021-03-10', NULL, NULL, 60000.00, NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(3, 'EMP003', 'Michael', 'Williams', 'michael.williams@hrms.com', '555-0103', '789 Pine Rd, Village', '1988-12-01', 'male', 'married', 3, 6, NULL, 'active', '2019-06-20', NULL, NULL, 52000.00, NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(4, 'EMP004', 'Emily', 'Brown', 'emily.brown@hrms.com', '555-0104', '321 Elm St, City', '1995-03-18', 'female', 'single', 4, 8, NULL, 'active', '2022-09-05', NULL, NULL, 48000.00, NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(5, 'EMP005', 'David', 'Davis', 'david.davis@hrms.com', '555-0105', '654 Maple Dr, Town', '1985-07-30', 'male', 'married', 5, 9, NULL, 'active', '2018-11-12', NULL, NULL, 70000.00, NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(6, 'EMP20261410', 'michael', 'deita', 'michaeldeita2020@gmail.com', '123445', 'awruwygrbdhs', '2026-08-28', 'male', 'single', 3, 6, 1, 'active', '2026-08-28', NULL, NULL, 750.00, NULL, '2026-08-28 03:50:24', '2026-08-28 03:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `employee_benefits`
--

CREATE TABLE `employee_benefits` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `benefit_id` int(11) NOT NULL,
  `enrollment_date` date NOT NULL,
  `status` enum('active','inactive','terminated') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_benefits`
--

INSERT INTO `employee_benefits` (`id`, `employee_id`, `benefit_id`, `enrollment_date`, `status`, `created_at`) VALUES
(1, 1, 1, '2020-01-15', 'active', '2026-08-28 00:54:51'),
(2, 1, 2, '2020-01-15', 'active', '2026-08-28 00:54:51'),
(3, 1, 3, '2020-01-15', 'active', '2026-08-28 00:54:51'),
(4, 2, 1, '2021-03-10', 'active', '2026-08-28 00:54:51'),
(5, 2, 4, '2021-03-10', 'active', '2026-08-28 00:54:51'),
(6, 3, 1, '2019-06-20', 'active', '2026-08-28 00:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `employee_documents`
--

CREATE TABLE `employee_documents` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `document_type` varchar(50) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `document_path` varchar(255) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `uploaded_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_documents`
--

INSERT INTO `employee_documents` (`id`, `employee_id`, `document_type`, `document_name`, `document_path`, `expiry_date`, `uploaded_at`, `uploaded_by`) VALUES
(1, 4, 'Government ID', 'sample', 'employee_documents/6a90fc9e73358_1787886750.docx', '2026-08-28', '2026-08-28 03:12:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_training`
--

CREATE TABLE `employee_training` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `training_program_id` int(11) NOT NULL,
  `enrollment_date` date NOT NULL,
  `completion_date` date DEFAULT NULL,
  `status` enum('enrolled','in_progress','completed','dropped') DEFAULT 'enrolled',
  `certificate_path` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employment_history`
--

CREATE TABLE `employment_history` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `effective_date` date NOT NULL,
  `action_type` enum('hire','promotion','transfer','demotion','salary_change','status_change','termination') NOT NULL,
  `from_department_id` int(11) DEFAULT NULL,
  `to_department_id` int(11) DEFAULT NULL,
  `from_position_id` int(11) DEFAULT NULL,
  `to_position_id` int(11) DEFAULT NULL,
  `from_salary` decimal(12,2) DEFAULT NULL,
  `to_salary` decimal(12,2) DEFAULT NULL,
  `from_status` varchar(50) DEFAULT NULL,
  `to_status` varchar(50) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employment_history`
--

INSERT INTO `employment_history` (`id`, `employee_id`, `effective_date`, `action_type`, `from_department_id`, `to_department_id`, `from_position_id`, `to_position_id`, `from_salary`, `to_salary`, `from_status`, `to_status`, `reason`, `created_by`, `created_at`) VALUES
(1, 6, '2026-08-28', 'hire', NULL, 3, NULL, 6, NULL, 750.00, NULL, 'active', NULL, 1, '2026-08-28 03:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `id` int(11) NOT NULL,
  `job_application_id` int(11) NOT NULL,
  `interview_type` enum('phone','video','in_person') NOT NULL,
  `scheduled_date` datetime NOT NULL,
  `duration` int(11) DEFAULT 60,
  `interviewer_id` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `meeting_link` varchar(255) DEFAULT NULL,
  `status` enum('scheduled','completed','cancelled','rescheduled') DEFAULT 'scheduled',
  `notes` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interviews`
--

INSERT INTO `interviews` (`id`, `job_application_id`, `interview_type`, `scheduled_date`, `duration`, `interviewer_id`, `location`, `meeting_link`, `status`, `notes`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 'video', '2024-02-20 14:00:00', 60, 1, 'Zoom Meeting', NULL, 'completed', 'Strong technical skills, good communication', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(2, 1, 'in_person', '2024-02-25 10:00:00', 90, 1, 'Office Conference Room', NULL, 'completed', 'Excellent problem-solving abilities', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(3, 4, 'phone', '2026-08-28 03:16:00', 60, 1, '', '', 'scheduled', NULL, NULL, '2026-08-28 03:47:02', '2026-08-28 03:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `interview_assessments`
--

CREATE TABLE `interview_assessments` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `comments` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `job_vacancy_id` int(11) NOT NULL,
  `cover_letter` text DEFAULT NULL,
  `application_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','under_review','shortlisted','interview_scheduled','interviewed','offered','accepted','rejected','withdrawn') DEFAULT 'pending',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `applicant_id`, `job_vacancy_id`, `cover_letter`, `application_date`, `status`, `notes`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'I am excited to apply for the Senior Software Developer position. With 5 years of experience...', '2024-02-14 18:30:00', 'interviewed', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(2, 2, 2, 'I would like to apply for the Marketing Specialist position. My experience in digital marketing...', '2024-02-19 18:30:00', 'accepted', '', '2026-08-28 00:54:51', '2026-08-28 11:13:10'),
(3, 3, 1, 'I am applying for the Senior Software Developer role. I have strong technical skills...', '2024-02-29 18:30:00', 'pending', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(4, 4, 2, 'SAMPLE', '2026-08-28 03:01:02', 'interview_scheduled', NULL, '2026-08-28 03:01:02', '2026-08-28 03:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancies`
--

CREATE TABLE `job_vacancies` (
  `id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `requirements` text DEFAULT NULL,
  `responsibilities` text DEFAULT NULL,
  `vacancies_count` int(11) DEFAULT 1,
  `salary_range` varchar(50) DEFAULT NULL,
  `status` enum('active','closed','filled') DEFAULT 'active',
  `posted_date` date NOT NULL,
  `closing_date` date DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_vacancies`
--

INSERT INTO `job_vacancies` (`id`, `position_id`, `title`, `description`, `requirements`, `responsibilities`, `vacancies_count`, `salary_range`, `status`, `posted_date`, `closing_date`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 4, 'Senior Software Developer', 'We are looking for an experienced software developer to join our IT team.', '5+ years experience in PHP, MySQL, JavaScript', 'Develop and maintain web applications, mentor junior developers', 2, '60000-80000', 'active', '2024-01-01', '2024-12-31', 1, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(2, 8, 'Marketing Specialist', 'Join our marketing team to execute innovative campaigns.', '2+ years experience in digital marketing', 'Execute marketing campaigns, manage social media, create content', 1, '45000-55000', 'active', '2024-02-01', '2024-11-30', 1, '2026-08-28 00:54:51', '2026-08-28 00:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_type_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_days` int(11) NOT NULL,
  `reason` text DEFAULT NULL,
  `status` enum('pending','approved','rejected','cancelled') DEFAULT 'pending',
  `approved_by` int(11) DEFAULT NULL,
  `approved_date` timestamp NULL DEFAULT NULL,
  `rejection_reason` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`id`, `employee_id`, `leave_type_id`, `start_date`, `end_date`, `total_days`, `reason`, `status`, `approved_by`, `approved_date`, `rejection_reason`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2024-06-01', '2024-06-05', 5, 'Family vacation', 'approved', 1, '2024-05-20 04:30:00', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(2, 3, 2, '2024-05-15', '2024-05-16', 2, 'Medical appointment', 'approved', 1, '2024-05-14 09:30:00', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(3, 4, 1, '2024-07-10', '2024-07-12', 3, 'Personal time', 'pending', NULL, NULL, NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `days_allowed` int(11) NOT NULL,
  `is_paid` tinyint(1) DEFAULT 1,
  `requires_approval` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `name`, `description`, `days_allowed`, `is_paid`, `requires_approval`, `created_at`) VALUES
(1, 'Annual Leave', 'Regular vacation leave', 15, 1, 1, '2026-08-27 23:52:26'),
(2, 'Sick Leave', 'Medical leave for illness', 10, 1, 1, '2026-08-27 23:52:26'),
(3, 'Maternity Leave', 'Leave for childbirth', 90, 1, 1, '2026-08-27 23:52:26'),
(4, 'Paternity Leave', 'Leave for new fathers', 7, 1, 1, '2026-08-27 23:52:26'),
(5, 'Personal Leave', 'Personal emergency leave', 3, 1, 1, '2026-08-27 23:52:26'),
(6, 'Unpaid Leave', 'Leave without pay', 30, 0, 1, '2026-08-27 23:52:26'),
(7, 'Annual Leave', 'Regular vacation leave', 15, 1, 1, '2026-08-28 00:54:51'),
(8, 'Sick Leave', 'Medical leave for illness', 10, 1, 1, '2026-08-28 00:54:51'),
(9, 'Maternity Leave', 'Leave for childbirth', 90, 1, 1, '2026-08-28 00:54:51'),
(10, 'Paternity Leave', 'Leave for new fathers', 7, 1, 1, '2026-08-28 00:54:51'),
(11, 'Personal Leave', 'Personal emergency leave', 3, 1, 1, '2026-08-28 00:54:51'),
(12, 'Unpaid Leave', 'Leave without pay', 30, 0, 1, '2026-08-28 00:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `type` enum('info','success','warning','error') DEFAULT 'info',
  `is_read` tinyint(1) DEFAULT 0,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `title`, `message`, `type`, `is_read`, `link`, `created_at`) VALUES
(1, 1, 'Interview Scheduled', 'Interview has been scheduled for application #4', 'info', 0, NULL, '2026-08-28 03:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `onboarding`
--

CREATE TABLE `onboarding` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `job_application_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `status` enum('pending','in_progress','completed','delayed') DEFAULT 'pending',
  `assigned_hr_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onboarding`
--

INSERT INTO `onboarding` (`id`, `employee_id`, `job_application_id`, `start_date`, `status`, `assigned_hr_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2021-03-10', 'completed', 1, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(2, 2, 2, '2026-08-28', 'in_progress', 1, '2026-08-28 03:24:54', '2026-08-28 03:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `onboarding_checklist_items`
--

CREATE TABLE `onboarding_checklist_items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `is_required` tinyint(1) DEFAULT 1,
  `order_index` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onboarding_checklist_items`
--

INSERT INTO `onboarding_checklist_items` (`id`, `name`, `description`, `category`, `is_required`, `order_index`, `created_at`) VALUES
(1, 'Submit Government IDs', 'Submit valid government-issued IDs', 'Documents', 1, 1, '2026-08-27 23:52:26'),
(2, 'Sign Employment Contract', 'Review and sign employment contract', 'Documents', 1, 2, '2026-08-27 23:52:26'),
(3, 'Complete Tax Forms', 'Submit completed tax forms', 'Documents', 1, 3, '2026-08-27 23:52:26'),
(4, 'Provide Bank Details', 'Submit bank account for payroll', 'Documents', 1, 4, '2026-08-27 23:52:26'),
(5, 'Emergency Contact Information', 'Provide emergency contact details', 'Information', 1, 5, '2026-08-27 23:52:26'),
(6, 'IT Equipment Setup', 'Receive and configure IT equipment', 'Setup', 1, 6, '2026-08-27 23:52:26'),
(7, 'Email Account Setup', 'Create company email account', 'Setup', 1, 7, '2026-08-27 23:52:26'),
(8, 'System Access Setup', 'Grant access to necessary systems', 'Setup', 1, 8, '2026-08-27 23:52:26'),
(9, 'Office Orientation', 'Complete office tour and orientation', 'Training', 1, 9, '2026-08-27 23:52:26'),
(10, 'Department Introduction', 'Meet with department team', 'Training', 1, 10, '2026-08-27 23:52:26'),
(11, 'Policy Review', 'Review company policies and handbook', 'Training', 1, 11, '2026-08-27 23:52:26'),
(12, 'Security Training', 'Complete security awareness training', 'Training', 1, 12, '2026-08-27 23:52:26'),
(13, 'Submit Government IDs', 'Submit valid government-issued IDs', 'Documents', 1, 1, '2026-08-28 00:54:51'),
(14, 'Sign Employment Contract', 'Review and sign employment contract', 'Documents', 1, 2, '2026-08-28 00:54:51'),
(15, 'Complete Tax Forms', 'Submit completed tax forms', 'Documents', 1, 3, '2026-08-28 00:54:51'),
(16, 'Provide Bank Details', 'Submit bank account for payroll', 'Documents', 1, 4, '2026-08-28 00:54:51'),
(17, 'Emergency Contact Information', 'Provide emergency contact details', 'Information', 1, 5, '2026-08-28 00:54:51'),
(18, 'IT Equipment Setup', 'Receive and configure IT equipment', 'Setup', 1, 6, '2026-08-28 00:54:51'),
(19, 'Email Account Setup', 'Create company email account', 'Setup', 1, 7, '2026-08-28 00:54:51'),
(20, 'System Access Setup', 'Grant access to necessary systems', 'Setup', 1, 8, '2026-08-28 00:54:51'),
(21, 'Office Orientation', 'Complete office tour and orientation', 'Training', 1, 9, '2026-08-28 00:54:51'),
(22, 'Department Introduction', 'Meet with department team', 'Training', 1, 10, '2026-08-28 00:54:51'),
(23, 'Policy Review', 'Review company policies and handbook', 'Training', 1, 11, '2026-08-28 00:54:51'),
(24, 'Security Training', 'Complete security awareness training', 'Training', 1, 12, '2026-08-28 00:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `onboarding_progress`
--

CREATE TABLE `onboarding_progress` (
  `id` int(11) NOT NULL,
  `onboarding_id` int(11) NOT NULL,
  `checklist_item_id` int(11) NOT NULL,
  `status` enum('pending','in_progress','completed','skipped') DEFAULT 'pending',
  `completed_date` date DEFAULT NULL,
  `completed_by` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onboarding_progress`
--

INSERT INTO `onboarding_progress` (`id`, `onboarding_id`, `checklist_item_id`, `status`, `completed_date`, `completed_by`, `notes`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'completed', '2021-03-08', 1, NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(2, 1, 2, 'completed', '2021-03-08', 1, NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(3, 1, 3, 'completed', '2021-03-09', 1, NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(4, 1, 4, 'completed', '2021-03-09', 1, NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(5, 1, 5, 'completed', '2021-03-10', 1, NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(6, 2, 1, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(7, 2, 13, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(8, 2, 2, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(9, 2, 14, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(10, 2, 3, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(11, 2, 15, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(12, 2, 4, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(13, 2, 16, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(14, 2, 5, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(15, 2, 17, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(16, 2, 6, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(17, 2, 18, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(18, 2, 7, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(19, 2, 19, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:54', '2026-08-28 03:24:54'),
(20, 2, 8, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:55', '2026-08-28 03:24:55'),
(21, 2, 20, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:55', '2026-08-28 03:24:55'),
(22, 2, 9, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:55', '2026-08-28 03:24:55'),
(23, 2, 21, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:55', '2026-08-28 03:24:55'),
(24, 2, 10, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:55', '2026-08-28 03:24:55'),
(25, 2, 22, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:55', '2026-08-28 03:24:55'),
(26, 2, 11, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:55', '2026-08-28 03:24:55'),
(27, 2, 23, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:55', '2026-08-28 03:24:55'),
(28, 2, 12, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:55', '2026-08-28 03:24:55'),
(29, 2, 24, 'pending', NULL, NULL, NULL, '2026-08-28 03:24:55', '2026-08-28 03:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `salary_range` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `title`, `description`, `department_id`, `salary_range`, `created_at`, `updated_at`) VALUES
(1, 'HR Manager', 'Manages HR operations and team', 1, '60000-80000', '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(2, 'HR Specialist', 'Handles recruitment and employee relations', 1, '40000-55000', '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(3, 'IT Manager', 'Manages IT infrastructure and team', 2, '70000-90000', '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(4, 'Software Developer', 'Develops and maintains software', 2, '50000-70000', '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(5, 'Finance Manager', 'Manages financial operations', 3, '65000-85000', '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(6, 'Accountant', 'Handles accounting tasks', 3, '45000-60000', '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(7, 'Marketing Manager', 'Manages marketing strategies', 4, '55000-75000', '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(8, 'Marketing Specialist', 'Executes marketing campaigns', 4, '40000-55000', '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(9, 'Operations Manager', 'Manages daily operations', 5, '60000-80000', '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(10, 'Sales Manager', 'Manages sales team', 6, '55000-75000', '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(11, 'Sales Representative', 'Handles sales activities', 6, '35000-50000', '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(12, 'HR Manager', 'Manages HR operations and team', 1, '60000-80000', '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(13, 'HR Specialist', 'Handles recruitment and employee relations', 1, '40000-55000', '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(14, 'IT Manager', 'Manages IT infrastructure and team', 2, '70000-90000', '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(15, 'Software Developer', 'Develops and maintains software', 2, '50000-70000', '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(16, 'Finance Manager', 'Manages financial operations', 3, '65000-85000', '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(17, 'Accountant', 'Handles accounting tasks', 3, '45000-60000', '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(18, 'Marketing Manager', 'Manages marketing strategies', 4, '55000-75000', '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(19, 'Marketing Specialist', 'Executes marketing campaigns', 4, '40000-55000', '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(20, 'Operations Manager', 'Manages daily operations', 5, '60000-80000', '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(21, 'Sales Manager', 'Manages sales team', 6, '55000-75000', '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(22, 'Sales Representative', 'Handles sales activities', 6, '35000-50000', '2026-08-28 00:54:51', '2026-08-28 00:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `setting_key` varchar(50) NOT NULL,
  `setting_value` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `setting_key`, `setting_value`, `description`, `updated_at`) VALUES
(1, 'company_name', 'HRMS Company', 'Company name', '2026-08-27 23:52:26'),
(2, 'default_currency', 'USD', 'Default currency', '2026-08-27 23:52:26'),
(3, 'date_format', 'Y-m-d', 'Default date format', '2026-08-27 23:52:26'),
(4, 'time_format', 'H:i', 'Default time format', '2026-08-27 23:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `training_programs`
--

CREATE TABLE `training_programs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `instructor` varchar(100) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `max_participants` int(11) DEFAULT NULL,
  `status` enum('planned','ongoing','completed','cancelled') DEFAULT 'planned',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('admin','hr','employee') NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin@hrms.com', 'admin', NULL, '2026-08-27 23:52:26', '2026-08-27 23:52:26'),
(3, 'hruser', '$2y$12$zpttfCeDZ5lugpCzp4FEDOXEkY9K4YjSVcxYdOtFI2JlAopxm1G1i', 'hr@hrms.com', 'hr', NULL, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(4, 'empuser', '$2y$12$zpttfCeDZ5lugpCzp4FEDOXEkY9K4YjSVcxYdOtFI2JlAopxm1G1i', 'employee@hrms.com', 'employee', 2, '2026-08-28 00:54:51', '2026-08-28 00:54:51'),
(5, 'michaeldeita2020', '$2y$10$tVhtJYsHZtGcCGnU13Nfh.igDkwOeKNz7t1lL5EmqL.RNmNhMFojG', 'michaeldeita2020@gmail.com', 'employee', 6, '2026-08-28 03:50:24', '2026-08-28 03:50:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ai_screening_results`
--
ALTER TABLE `ai_screening_results`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_screening` (`applicant_id`,`job_vacancy_id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant_documents`
--
ALTER TABLE `applicant_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `applicant_education`
--
ALTER TABLE `applicant_education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `applicant_work_experience`
--
ALTER TABLE `applicant_work_experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_attendance` (`employee_id`,`date`);

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `approved_by` (`approved_by`);

--
-- Indexes for table `claim_documents`
--
ALTER TABLE `claim_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `claim_id` (`claim_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_number` (`employee_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_benefits`
--
ALTER TABLE `employee_benefits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `benefit_id` (`benefit_id`);

--
-- Indexes for table `employee_documents`
--
ALTER TABLE `employee_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_training`
--
ALTER TABLE `employee_training`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `training_program_id` (`training_program_id`);

--
-- Indexes for table `employment_history`
--
ALTER TABLE `employment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_assessments`
--
ALTER TABLE `interview_assessments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interview_id` (`interview_id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`),
  ADD KEY `job_vacancy_id` (`job_vacancy_id`);

--
-- Indexes for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `onboarding`
--
ALTER TABLE `onboarding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onboarding_checklist_items`
--
ALTER TABLE `onboarding_checklist_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onboarding_progress`
--
ALTER TABLE `onboarding_progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_key` (`setting_key`);

--
-- Indexes for table `training_programs`
--
ALTER TABLE `training_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ai_screening_results`
--
ALTER TABLE `ai_screening_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `applicant_documents`
--
ALTER TABLE `applicant_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_education`
--
ALTER TABLE `applicant_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `applicant_work_experience`
--
ALTER TABLE `applicant_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `claim_documents`
--
ALTER TABLE `claim_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_benefits`
--
ALTER TABLE `employee_benefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_documents`
--
ALTER TABLE `employee_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_training`
--
ALTER TABLE `employee_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employment_history`
--
ALTER TABLE `employment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `interview_assessments`
--
ALTER TABLE `interview_assessments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_vacancies`
--
ALTER TABLE `job_vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `onboarding`
--
ALTER TABLE `onboarding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `onboarding_checklist_items`
--
ALTER TABLE `onboarding_checklist_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `onboarding_progress`
--
ALTER TABLE `onboarding_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training_programs`
--
ALTER TABLE `training_programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant_documents`
--
ALTER TABLE `applicant_documents`
  ADD CONSTRAINT `applicant_documents_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `applicant_education`
--
ALTER TABLE `applicant_education`
  ADD CONSTRAINT `applicant_education_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `applicant_work_experience`
--
ALTER TABLE `applicant_work_experience`
  ADD CONSTRAINT `applicant_work_experience_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `claims`
--
ALTER TABLE `claims`
  ADD CONSTRAINT `claims_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `claims_ibfk_2` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `claim_documents`
--
ALTER TABLE `claim_documents`
  ADD CONSTRAINT `claim_documents_ibfk_1` FOREIGN KEY (`claim_id`) REFERENCES `claims` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_benefits`
--
ALTER TABLE `employee_benefits`
  ADD CONSTRAINT `employee_benefits_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_benefits_ibfk_2` FOREIGN KEY (`benefit_id`) REFERENCES `benefits` (`id`);

--
-- Constraints for table `employee_training`
--
ALTER TABLE `employee_training`
  ADD CONSTRAINT `employee_training_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_training_ibfk_2` FOREIGN KEY (`training_program_id`) REFERENCES `training_programs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `interview_assessments`
--
ALTER TABLE `interview_assessments`
  ADD CONSTRAINT `interview_assessments_ibfk_1` FOREIGN KEY (`interview_id`) REFERENCES `interviews` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `job_applications_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_applications_ibfk_2` FOREIGN KEY (`job_vacancy_id`) REFERENCES `job_vacancies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `positions_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
--
-- Database: `inventory_system`
--
CREATE DATABASE IF NOT EXISTS `inventory_system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `inventory_system`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `parent_category_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `document_number` varchar(50) NOT NULL,
  `document_type` enum('invoice','receipt','delivery_note','quotation','contract','other') NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `file_path` varchar(500) DEFAULT NULL,
  `related_po_id` int(11) DEFAULT NULL,
  `related_supplier_id` int(11) DEFAULT NULL,
  `upload_date` date NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `status` enum('active','expired','archived') DEFAULT 'active',
  `uploaded_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `document_number`, `document_type`, `title`, `description`, `file_path`, `related_po_id`, `related_supplier_id`, `upload_date`, `expiry_date`, `status`, `uploaded_by`, `created_at`, `updated_at`) VALUES
(1, 'DOC-20260627-001', 'invoice', 'Purchase Invoice - PO-20260627-001', 'Invoice received from Tech Supplies for the completed laptop and accessory order.', 'uploads/sample-invoice-po-20260627-001.pdf', 1, 1, '2026-06-15', NULL, 'active', 'admin', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(2, 'DOC-20260627-002', 'delivery_note', 'Delivery Note - PO-20260627-001', 'Signed delivery confirmation for the main warehouse technology replenishment.', 'uploads/sample-delivery-note-po-20260627-001.pdf', 1, 1, '2026-06-15', NULL, 'active', 'admin', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(3, 'DOC-20260627-003', 'quotation', 'Quotation - Office Expansion Furniture', 'Approved quotation from Office Essentials Depot for chairs and lighting.', 'uploads/sample-quotation-office-expansion.pdf', 2, 4, '2026-06-18', '2026-07-31', 'active', 'admin', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(4, 'DOC-20260627-004', 'contract', 'Warehouse Equipment Supply Contract', 'Annual contract covering storage systems and warehouse equipment supply.', 'uploads/sample-contract-warehouse-equipment.pdf', NULL, 5, '2026-06-20', '2027-06-20', 'active', 'admin', '2026-08-22 02:50:30', '2026-08-22 02:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `unit_price` decimal(10,2) NOT NULL,
  `reorder_level` int(11) DEFAULT 10,
  `warehouse_id` int(11) DEFAULT NULL,
  `location_in_warehouse` varchar(100) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `last_restocked` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `status` enum('in_stock','low_stock','out_of_stock','discontinued') DEFAULT 'in_stock',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `sku`, `product_name`, `description`, `category`, `quantity`, `unit_price`, `reorder_level`, `warehouse_id`, `location_in_warehouse`, `supplier_id`, `last_restocked`, `expiry_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SKU-001', 'Laptop Computer', 'High-performance laptop for business use', 'Electronics', 50, 899.99, 10, 1, '', 1, NULL, NULL, 'in_stock', '2026-08-22 02:50:30', '2026-08-22 04:25:51'),
(2, 'SKU-002', 'Office Chair', 'Ergonomic office chair with lumbar support', 'Furniture', 100, 249.99, 20, 1, NULL, 2, NULL, NULL, 'in_stock', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(3, 'SKU-003', 'Printer Paper', 'A4 size printer paper, 500 sheets per ream', 'Supplies', 500, 12.99, 100, 2, NULL, 3, NULL, NULL, 'in_stock', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(4, 'SKU-004', 'Wireless Mouse', 'Ergonomic wireless mouse', 'Electronics', 200, 29.99, 30, 1, NULL, 1, NULL, NULL, 'in_stock', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(5, 'SKU-005', 'Desk Lamp', 'LED desk lamp with adjustable brightness', 'Furniture', 75, 45.99, 15, 2, NULL, 2, NULL, NULL, 'in_stock', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(6, 'SKU-006', 'Industrial Shelving Unit', 'Heavy-duty steel shelving for warehouse organization', 'Warehouse Equipment', 25, 329.99, 5, 3, 'Aisle D-04', 5, NULL, NULL, 'in_stock', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(7, 'SKU-007', 'Network Switch 24-Port', 'Managed 24-port gigabit switch for office network expansion', 'Electronics', 18, 189.50, 6, 1, 'Aisle B-02', 1, NULL, NULL, 'in_stock', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(8, 'SKU-008', 'Safety Gloves Pack', 'Protective gloves pack for warehouse and handling operations', 'Safety', 250, 8.75, 50, 2, 'Aisle C-01', 3, NULL, NULL, 'in_stock', '2026-08-22 02:50:30', '2026-08-22 02:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_stocks`
--

CREATE TABLE `inventory_stocks` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `quantity_on_hand` int(11) NOT NULL DEFAULT 0,
  `reorder_level` int(11) NOT NULL DEFAULT 10,
  `location_code` varchar(100) DEFAULT NULL,
  `status` enum('in_stock','low_stock','out_of_stock') DEFAULT 'in_stock',
  `last_counted_at` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logistics`
--

CREATE TABLE `logistics` (
  `id` int(11) NOT NULL,
  `shipment_number` varchar(50) NOT NULL,
  `po_id` int(11) DEFAULT NULL,
  `carrier` varchar(255) DEFAULT NULL,
  `tracking_number` varchar(100) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `shipment_date` date DEFAULT NULL,
  `estimated_arrival` date DEFAULT NULL,
  `actual_arrival` date DEFAULT NULL,
  `shipping_cost` decimal(10,2) DEFAULT NULL,
  `status` enum('pending','in_transit','delivered','delayed','cancelled') DEFAULT 'pending',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logistics`
--

INSERT INTO `logistics` (`id`, `shipment_number`, `po_id`, `carrier`, `tracking_number`, `origin`, `destination`, `shipment_date`, `estimated_arrival`, `actual_arrival`, `shipping_cost`, `status`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'SHP-20260627-001', 1, 'Global Logistics Ltd.', 'GL-20260615-1001', 'San Francisco, USA', 'New York, USA', '2026-06-12', '2026-06-15', '2026-06-15', 275.00, 'delivered', 'Shipment delivered on time to the main warehouse receiving dock.', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(2, 'SHP-20260627-002', 2, 'FreightFast', 'FF-20260619-2048', 'Dallas, USA', 'Los Angeles, USA', '2026-06-19', '2026-06-25', NULL, 420.50, 'in_transit', 'Furniture shipment is currently moving through the western distribution route.', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(3, 'SHP-20260627-003', 3, 'Warehouse Express', 'WE-20260624-8890', 'Atlanta, USA', 'Chicago, USA', '2026-06-24', '2026-06-30', NULL, 315.75, 'pending', 'Carrier booking confirmed; shipment awaiting pickup from supplier warehouse.', '2026-08-22 02:50:30', '2026-08-22 02:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `notification_type` enum('stock_low','stock_out','stock_restocked','po_created','po_received','warehouse_alert','system') NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `related_inventory_id` int(11) DEFAULT NULL,
  `related_warehouse_id` int(11) DEFAULT NULL,
  `related_po_id` int(11) DEFAULT NULL,
  `priority` enum('low','medium','high','critical') DEFAULT 'medium',
  `is_read` tinyint(1) DEFAULT 0,
  `voice_announced` tinyint(1) DEFAULT 0,
  `announcement_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification_settings`
--

CREATE TABLE `notification_settings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `voice_enabled` tinyint(1) DEFAULT 1,
  `voice_volume` decimal(3,2) DEFAULT 1.00,
  `voice_rate` decimal(3,2) DEFAULT 1.00,
  `voice_pitch` decimal(3,2) DEFAULT 1.00,
  `voice_language` varchar(10) DEFAULT 'en-US',
  `notify_stock_low` tinyint(1) DEFAULT 1,
  `notify_stock_out` tinyint(1) DEFAULT 1,
  `notify_stock_restocked` tinyint(1) DEFAULT 1,
  `notify_po_created` tinyint(1) DEFAULT 1,
  `notify_po_received` tinyint(1) DEFAULT 1,
  `notify_warehouse_alert` tinyint(1) DEFAULT 1,
  `auto_announce` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification_settings`
--

INSERT INTO `notification_settings` (`id`, `user_id`, `voice_enabled`, `voice_volume`, `voice_rate`, `voice_pitch`, `voice_language`, `notify_stock_low`, `notify_stock_out`, `notify_stock_restocked`, `notify_po_created`, `notify_po_received`, `notify_warehouse_alert`, `auto_announce`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1.00, 1.00, 1.00, 'en-US', 1, 1, 1, 1, 1, 1, 1, '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(2, 1, 1, 1.00, 1.00, 1.00, 'en-US', 1, 1, 1, 1, 1, 1, 1, '2026-08-22 02:50:56', '2026-08-22 02:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `procurement_requests`
--

CREATE TABLE `procurement_requests` (
  `id` int(11) NOT NULL,
  `request_number` varchar(50) NOT NULL,
  `requested_by` varchar(255) NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `urgency` enum('low','medium','high','critical') DEFAULT 'medium',
  `justification` text DEFAULT NULL,
  `estimated_cost` decimal(10,2) DEFAULT NULL,
  `status` enum('pending','approved','rejected','processed') DEFAULT 'pending',
  `approved_by` varchar(255) DEFAULT NULL,
  `approval_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `procurement_requests`
--

INSERT INTO `procurement_requests` (`id`, `request_number`, `requested_by`, `department`, `item_name`, `quantity`, `urgency`, `justification`, `estimated_cost`, `status`, `approved_by`, `approval_date`, `created_at`, `updated_at`) VALUES
(1, 'PR-20260627-001', 'Alice Green', 'IT', 'Network Switch 24-Port', 6, 'high', 'Required for network expansion in the new office wing.', 1137.00, 'approved', 'admin', '2026-06-21', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(2, 'PR-20260627-002', 'Brian Foster', 'Facilities', 'Industrial Shelving Unit', 8, 'critical', 'Additional storage racks are needed before the next inbound shipment arrives.', 2639.92, 'pending', NULL, NULL, '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(3, 'PR-20260627-003', 'Carla Diaz', 'Warehouse Operations', 'Safety Gloves Pack', 100, 'medium', 'Monthly PPE replenishment for receiving and dispatch teams.', 875.00, 'processed', 'admin', '2026-06-23', '2026-08-22 02:50:30', '2026-08-22 02:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `unit_cost` decimal(10,2) DEFAULT 0.00,
  `unit_price` decimal(10,2) DEFAULT 0.00,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `id` int(11) NOT NULL,
  `po_number` varchar(50) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `requested_by_user_id` int(11) DEFAULT NULL,
  `created_by_user_id` int(11) DEFAULT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `order_date` date NOT NULL,
  `expected_delivery` date DEFAULT NULL,
  `actual_delivery` date DEFAULT NULL,
  `subtotal` decimal(12,2) NOT NULL DEFAULT 0.00,
  `total_amount` decimal(12,2) NOT NULL,
  `status` enum('draft','pending','approved','ordered','received','cancelled') DEFAULT 'draft',
  `notes` text DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_orders`
--

INSERT INTO `purchase_orders` (`id`, `po_number`, `supplier_id`, `requested_by_user_id`, `created_by_user_id`, `warehouse_id`, `order_date`, `expected_delivery`, `actual_delivery`, `subtotal`, `total_amount`, `status`, `notes`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'PO-20260627-001', 1, NULL, NULL, 1, '2026-06-10', '2026-06-15', '2026-06-15', 5399.65, 5399.65, 'received', 'Technology restocking order for laptops and wireless accessories.', 'admin', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(2, 'PO-20260627-002', 4, NULL, NULL, 2, '2026-06-18', '2026-06-25', NULL, 10459.50, 10459.50, 'ordered', 'Furniture replenishment order for branch office expansion.', 'admin', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(3, 'PO-20260627-003', 5, NULL, NULL, 3, '2026-06-22', '2026-06-30', NULL, 3514.92, 3514.92, 'approved', 'Approved warehouse equipment and safety supplies order.', 'admin', '2026-08-22 02:50:30', '2026-08-22 02:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_items`
--

CREATE TABLE `purchase_order_items` (
  `id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `line_total` decimal(10,2) DEFAULT NULL,
  `received_quantity` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_order_items`
--

INSERT INTO `purchase_order_items` (`id`, `po_id`, `product_id`, `inventory_id`, `product_name`, `quantity`, `unit_price`, `total_price`, `line_total`, `received_quantity`) VALUES
(1, 1, NULL, 1, 'Laptop Computer', 5, 899.99, 4499.95, NULL, 5),
(2, 1, NULL, 4, 'Wireless Mouse', 30, 29.99, 899.70, NULL, 30),
(3, 2, NULL, 2, 'Office Chair', 40, 249.99, 9999.60, NULL, 0),
(4, 2, NULL, 5, 'Desk Lamp', 10, 45.99, 459.90, NULL, 0),
(5, 3, NULL, 6, 'Industrial Shelving Unit', 8, 329.99, 2639.92, NULL, 0),
(6, 3, NULL, 8, 'Safety Gloves Pack', 100, 8.75, 875.00, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_movements`
--

CREATE TABLE `stock_movements` (
  `id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `movement_type` enum('in','out','transfer','adjustment') NOT NULL,
  `quantity` int(11) NOT NULL,
  `reference_type` varchar(50) DEFAULT NULL,
  `reference_id` int(11) DEFAULT NULL,
  `from_warehouse_id` int(11) DEFAULT NULL,
  `to_warehouse_id` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `performed_by` varchar(255) DEFAULT NULL,
  `movement_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `tax_id` varchar(50) DEFAULT NULL,
  `payment_terms` varchar(100) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT 5.00,
  `status` enum('active','inactive','blacklisted') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `company_name`, `contact_person`, `email`, `phone`, `address`, `city`, `country`, `tax_id`, `payment_terms`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tech Supplies Inc.', 'Robert Wilson', 'robert@techsupplies.com', '+1-555-0201', '100 Tech Street', 'San Francisco', 'USA', NULL, NULL, 4.50, 'active', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(2, 'Global Logistics Ltd.', 'Sarah Brown', 'sarah@globallogistics.com', '+1-555-0202', '200 Shipping Lane', 'Miami', 'USA', NULL, NULL, 4.80, 'active', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(3, 'Quality Materials Co.', 'David Lee', 'david@qualitymaterials.com', '+1-555-0203', '300 Industrial Road', 'Houston', 'USA', NULL, NULL, 4.20, 'active', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(4, 'Office Essentials Depot', 'Emily Carter', 'emily@officeessentials.com', '+1-555-0204', '410 Market Street', 'Dallas', 'USA', 'TX-884421', 'Net 30', 4.60, 'active', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(5, 'Warehouse Solutions Group', 'Marcus Reed', 'marcus@warehousesolutions.com', '+1-555-0205', '725 Storage Park', 'Atlanta', 'USA', 'GA-672210', 'Net 45', 4.70, 'active', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(6, 'Pacific Components Hub', 'Nina Patel', 'nina@pacificcomponents.com', '+1-555-0206', '98 Harbor Drive', 'Seattle', 'USA', 'WA-229871', 'Prepaid', 4.10, 'inactive', '2026-08-22 02:50:30', '2026-08-22 02:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('admin','manager','staff','viewer') DEFAULT 'staff',
  `status` enum('active','inactive') DEFAULT 'active',
  `face_data` text DEFAULT NULL,
  `face_enrolled` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `email`, `role`, `status`, `face_data`, `face_enrolled`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$k3zVatzRqp1qy4VZZ4JrHO4DYh0p9n1dvv90R/MthYhwT7bSfKOzW', 'System Administrator', 'admin@inventory.com', 'admin', 'active', '[-0.18359220027923584,0.04232482612133026,0.0772683247923851,-0.1342601180076599,-0.08473458141088486,-0.09555840492248535,-0.08671721071004868,-0.11418057978153229,0.12258409708738327,-0.15511681139469147,0.20435954630374908,-0.07096440345048904,-0.2168576717376709,-0.07180124521255493,-0.017792046070098877,0.18681320548057556,-0.1507532000541687,-0.1418934464454651,-0.0661492571234703,-0.04303770884871483,0.061023592948913574,0.0003673422907013446,-0.045299142599105835,0.052976612001657486,-0.11419970542192459,-0.3330114781856537,-0.09216861426830292,-0.026857076212763786,-0.0014976023230701685,-0.05637260153889656,-0.04707722365856171,-0.007981385104358196,-0.20275886356830597,-0.07810582965612411,-0.004661671817302704,0.11764474958181381,-0.03165385127067566,0.010810750536620617,0.16948673129081726,-0.015303981490433216,-0.25452229380607605,-0.0156269371509552,0.07157005369663239,0.2810063362121582,0.16496220231056213,0.11165189743041992,-0.0008769509149715304,-0.05418405309319496,0.09158462285995483,-0.20486006140708923,0.07614045590162277,0.1237189993262291,0.150737464427948,0.04333848878741264,0.017480483278632164,-0.1448153406381607,0.04048081114888191,0.17572103440761566,-0.1748357117176056,0.047475822269916534,0.08820562064647675,-0.10931988805532455,0.0034150704741477966,-0.019785122945904732,0.28727877140045166,0.07003556936979294,-0.1565600335597992,-0.07738535851240158,0.14215220510959625,-0.10544943064451218,-0.057761866599321365,-0.026491845026612282,-0.1514764279127121,-0.18476052582263947,-0.3890109062194824,0.024757491424679756,0.3732822835445404,0.11347603052854538,-0.19200162589550018,0.04858214035630226,-0.028065115213394165,0.02805532142519951,0.1596425324678421,0.11449354887008667,-0.06647911667823792,0.03433680534362793,-0.0534871444106102,0.025820426642894745,0.17870129644870758,-0.028138022869825363,-0.015634262934327126,0.17224019765853882,0.023631403222680092,0.06212146207690239,-0.012503761798143387,0.02709176018834114,-0.07496334612369537,-0.012975131161510944,-0.12331348657608032,0.017487933859229088,0.0378185510635376,0.0022274379152804613,0.050192344933748245,0.1518998146057129,-0.17435288429260254,0.1604165881872177,0.05445517599582672,0.023853905498981476,-0.020989831537008286,0.09394785016775131,-0.08277478814125061,-0.145638570189476,0.07620216906070709,-0.1844666302204132,0.1793932318687439,0.2558339238166809,0.036556605249643326,0.13653382658958435,0.13089719414710999,0.023732224479317665,0.03493166342377663,0.03674987703561783,-0.17424535751342773,-0.018730195239186287,0.11702390015125275,-0.03546072542667389,0.17056795954704285,0.08207506686449051]', 1, '2026-08-22 02:50:30', '2026-08-22 04:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `capacity` decimal(10,2) NOT NULL,
  `current_usage` decimal(10,2) DEFAULT 0.00,
  `manager_name` varchar(255) DEFAULT NULL,
  `manager_contact` varchar(50) DEFAULT NULL,
  `status` enum('active','inactive','maintenance') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `name`, `location`, `capacity`, `current_usage`, `manager_name`, `manager_contact`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Main Warehouse', '123 Industrial Park, New York', 10000.00, 0.00, 'John Smith', '+1-555-0101', 'active', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(2, 'Secondary Warehouse', '456 Commerce Ave, Los Angeles', 5000.00, 0.00, 'Jane Doe', '+1-555-0102', 'active', '2026-08-22 02:50:30', '2026-08-22 02:50:30'),
(3, 'Distribution Center', '789 Logistics Blvd, Chicago', 15000.00, 0.00, 'Mike Johnson', '+1-555-0103', 'active', '2026-08-22 02:50:30', '2026-08-22 02:50:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `parent_category_id` (`parent_category_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `document_number` (`document_number`),
  ADD KEY `related_po_id` (`related_po_id`),
  ADD KEY `related_supplier_id` (`related_supplier_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD KEY `warehouse_id` (`warehouse_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `inventory_stocks`
--
ALTER TABLE `inventory_stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `warehouse_id` (`warehouse_id`);

--
-- Indexes for table `logistics`
--
ALTER TABLE `logistics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shipment_number` (`shipment_number`),
  ADD KEY `po_id` (`po_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `related_inventory_id` (`related_inventory_id`),
  ADD KEY `related_warehouse_id` (`related_warehouse_id`),
  ADD KEY `related_po_id` (`related_po_id`);

--
-- Indexes for table `notification_settings`
--
ALTER TABLE `notification_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `procurement_requests`
--
ALTER TABLE `procurement_requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `request_number` (`request_number`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `po_number` (`po_number`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `warehouse_id` (`warehouse_id`);

--
-- Indexes for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `po_id` (`po_id`),
  ADD KEY `inventory_id` (`inventory_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `stock_movements`
--
ALTER TABLE `stock_movements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventory_id` (`inventory_id`),
  ADD KEY `from_warehouse_id` (`from_warehouse_id`),
  ADD KEY `to_warehouse_id` (`to_warehouse_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_face_enrolled` (`face_enrolled`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inventory_stocks`
--
ALTER TABLE `inventory_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logistics`
--
ALTER TABLE `logistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_settings`
--
ALTER TABLE `notification_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `procurement_requests`
--
ALTER TABLE `procurement_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_movements`
--
ALTER TABLE `stock_movements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`related_po_id`) REFERENCES `purchase_orders` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `documents_ibfk_2` FOREIGN KEY (`related_supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `inventory_stocks`
--
ALTER TABLE `inventory_stocks`
  ADD CONSTRAINT `inventory_stocks_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventory_stocks_ibfk_2` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `logistics`
--
ALTER TABLE `logistics`
  ADD CONSTRAINT `logistics_ibfk_1` FOREIGN KEY (`po_id`) REFERENCES `purchase_orders` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`related_inventory_id`) REFERENCES `inventory` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`related_warehouse_id`) REFERENCES `warehouses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `notifications_ibfk_3` FOREIGN KEY (`related_po_id`) REFERENCES `purchase_orders` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `notification_settings`
--
ALTER TABLE `notification_settings`
  ADD CONSTRAINT `notification_settings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD CONSTRAINT `purchase_orders_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`),
  ADD CONSTRAINT `purchase_orders_ibfk_2` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  ADD CONSTRAINT `purchase_order_items_ibfk_1` FOREIGN KEY (`po_id`) REFERENCES `purchase_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purchase_order_items_ibfk_2` FOREIGN KEY (`inventory_id`) REFERENCES `inventory` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `stock_movements`
--
ALTER TABLE `stock_movements`
  ADD CONSTRAINT `stock_movements_ibfk_1` FOREIGN KEY (`inventory_id`) REFERENCES `inventory` (`id`),
  ADD CONSTRAINT `stock_movements_ibfk_2` FOREIGN KEY (`from_warehouse_id`) REFERENCES `warehouses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `stock_movements_ibfk_3` FOREIGN KEY (`to_warehouse_id`) REFERENCES `warehouses` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
--
-- Database: `lpg_delivery_system`
--
CREATE DATABASE IF NOT EXISTS `lpg_delivery_system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `lpg_delivery_system`;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `action` varchar(60) NOT NULL,
  `details` varchar(500) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `user_id`, `action`, `details`, `ip_address`, `created_at`) VALUES
(1, 1, 'seed', 'Database seeded with demo data', '127.0.0.1', '2026-08-07 07:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(190) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `notes` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `address`, `city`, `latitude`, `longitude`, `notes`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Meera Sharma', '+91 98111 00001', 'meera@example.com', '14, Green Park, Main Market', 'New Delhi', 28.5893000, 77.2061000, 'Prefers morning delivery', 1, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(2, 'Rohan Verma', '+91 98111 00002', 'rohan@example.com', '221, Lajpat Nagar, Block C', 'New Delhi', 28.5672000, 77.2443000, NULL, 1, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(3, 'Anita Desai', '+91 98111 00003', 'anita@example.com', '5, Hauz Khas Village', 'New Delhi', 28.5494000, 77.2001000, 'Apartment - 3rd floor', 1, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(4, 'Vikram Malhotra', '+91 98111 00004', 'vikram@example.com', 'B-12, Vasant Vihar, Market Road', 'New Delhi', 28.5574000, 77.1604000, NULL, 1, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(5, 'Sunita Rao', '+91 98111 00005', 'sunita@example.com', '45, Defence Colony, Flyover Market', 'New Delhi', 28.5740000, 77.2297000, 'Has elderly parents - ring twice', 1, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(6, 'Arjun Nair', '+91 98111 00006', 'arjun@example.com', '9, Saket District Centre', 'New Delhi', 28.5245000, 77.2060000, NULL, 1, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(7, 'Priya Kapoor', '+91 98111 00007', 'priya@example.com', '77, Greater Kailash Part 1', 'New Delhi', 28.5530000, 77.2437000, 'Landline at gate', 1, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(8, 'Suresh Iyer', '+91 98111 00008', 'suresh@example.com', '18, Janakpuri West, Block A', 'New Delhi', 28.6250000, 77.0858000, NULL, 1, '2026-08-07 07:22:57', '2026-08-07 07:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `cylinders`
--

CREATE TABLE `cylinders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `capacity_kg` decimal(5,2) NOT NULL DEFAULT 14.20,
  `status` enum('available','out_for_delivery','delivered','returned','damaged') NOT NULL DEFAULT 'available',
  `current_owner_id` bigint(20) UNSIGNED DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cylinders`
--

INSERT INTO `cylinders` (`id`, `serial_number`, `capacity_kg`, `status`, `current_owner_id`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'LPG-CYL-0001', 14.20, 'available', NULL, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(2, 'LPG-CYL-0002', 14.20, 'available', NULL, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(3, 'LPG-CYL-0003', 14.20, 'available', NULL, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(4, 'LPG-CYL-0004', 14.20, 'available', NULL, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(5, 'LPG-CYL-0005', 14.20, 'available', NULL, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(6, 'LPG-CYL-0006', 14.20, 'available', NULL, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(7, 'LPG-CYL-0007', 14.20, 'available', NULL, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(8, 'LPG-CYL-0008', 14.20, 'available', NULL, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(9, 'LPG-CYL-0009', 14.20, 'available', NULL, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(10, 'LPG-CYL-0010', 14.20, 'available', NULL, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(11, 'LPG-CYL-0011', 19.00, 'available', NULL, 'Large commercial cylinder', '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(12, 'LPG-CYL-0012', 19.00, 'available', NULL, 'Large commercial cylinder', '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(13, 'LPG-CYL-0013', 14.20, 'returned', NULL, 'Empty - awaiting refill', '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(14, 'LPG-CYL-0014', 14.20, 'damaged', NULL, 'Valve damaged - quarantined', '2026-08-07 07:22:57', '2026-08-07 07:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('assigned','out_for_delivery','delivered','failed','returned') NOT NULL DEFAULT 'assigned',
  `started_at` datetime DEFAULT NULL,
  `delivered_at` datetime DEFAULT NULL,
  `delivered_by` bigint(20) UNSIGNED DEFAULT NULL,
  `recipient_name` varchar(120) DEFAULT NULL,
  `recipient_sign` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `order_id`, `driver_id`, `status`, `started_at`, `delivered_at`, `delivered_by`, `recipient_name`, `recipient_sign`, `notes`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'delivered', '2026-08-01 09:15:00', '2026-08-01 10:02:00', NULL, 'Meera Sharma', NULL, 'Handed to customer', '2026-08-07 07:22:58', '2026-08-07 07:22:58'),
(2, 2, 1, 'out_for_delivery', '2026-08-05 10:30:00', NULL, NULL, NULL, NULL, NULL, '2026-08-07 07:22:58', '2026-08-07 07:22:58'),
(3, 3, 2, 'assigned', '2026-08-06 11:00:00', NULL, NULL, NULL, NULL, NULL, '2026-08-07 07:22:58', '2026-08-07 07:22:58');

--
-- Triggers `deliveries`
--
DELIMITER $$
CREATE TRIGGER `trg_deliveries_after_update` AFTER UPDATE ON `deliveries` FOR EACH ROW BEGIN
    IF NEW.status = 'delivered' AND OLD.status <> 'delivered' THEN
        UPDATE orders SET status = 'delivered', payment_status = 'paid'
         WHERE id = NEW.order_id;
        -- Mark the delivered cylinders as 'delivered' to the customer
        UPDATE cylinders c
           JOIN delivery_items di ON di.cylinder_id = c.id
           SET c.status = 'delivered', c.current_owner_id = (SELECT customer_id FROM orders WHERE id = NEW.order_id)
         WHERE di.delivery_id = NEW.id;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_items`
--

CREATE TABLE `delivery_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `delivery_id` bigint(20) UNSIGNED NOT NULL,
  `cylinder_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `vehicle_no` varchar(30) DEFAULT NULL,
  `license_no` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `user_id`, `name`, `phone`, `vehicle_no`, `license_no`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 3, 'Rajesh Kumar', '+91 90000 00001', 'DL-01-AB-1234', 'DL-2019-0045123', 1, '2026-08-07 07:22:58', '2026-08-07 07:22:58'),
(2, 4, 'Amit Singh', '+91 90000 00002', 'DL-01-CD-5678', 'DL-2021-0078945', 1, '2026-08-07 07:22:58', '2026-08-07 07:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `driver_locations`
--

CREATE TABLE `driver_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `heading` decimal(5,2) DEFAULT NULL,
  `speed_kmh` decimal(6,2) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_locations`
--

INSERT INTO `driver_locations` (`id`, `driver_id`, `latitude`, `longitude`, `heading`, `speed_kmh`, `is_active`, `updated_at`) VALUES
(1, 1, 28.5705000, 77.2218000, 90.00, 32.50, 1, '2026-08-07 07:22:58'),
(2, 2, 28.5510000, 77.2010000, 180.00, 0.00, 1, '2026-08-07 07:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identifier` varchar(190) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `attempted_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(30) NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('pending','assigned','out_for_delivery','delivered','cancelled') NOT NULL DEFAULT 'pending',
  `order_date` date NOT NULL,
  `scheduled_date` date DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `payment_method` enum('cash','card','online') DEFAULT 'cash',
  `payment_status` enum('unpaid','paid') NOT NULL DEFAULT 'unpaid',
  `notes` text DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `customer_id`, `driver_id`, `status`, `order_date`, `scheduled_date`, `total_amount`, `payment_method`, `payment_status`, `notes`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'LPG-ORD-1001', 1, 1, 'delivered', '2026-08-01', '2026-08-01', 1065.00, 'cash', 'paid', 'First delivery - new customer', 1, '2026-08-07 07:22:58', '2026-08-07 07:22:58'),
(2, 'LPG-ORD-1002', 2, 1, 'out_for_delivery', '2026-08-05', '2026-08-05', 1065.00, 'cash', 'unpaid', NULL, 1, '2026-08-07 07:22:58', '2026-08-07 07:22:58'),
(3, 'LPG-ORD-1003', 3, 2, 'assigned', '2026-08-06', '2026-08-06', 1065.00, 'online', 'unpaid', NULL, 2, '2026-08-07 07:22:58', '2026-08-07 07:22:58'),
(4, 'LPG-ORD-1004', 4, NULL, 'pending', '2026-08-07', '2026-08-08', 1065.00, 'cash', 'unpaid', 'Call before delivery', 2, '2026-08-07 07:22:58', '2026-08-07 07:22:58'),
(5, 'LPG-ORD-1005', 5, 2, 'pending', '2026-08-07', '2026-08-09', 2130.00, 'card', 'unpaid', 'Two cylinders', 1, '2026-08-07 07:22:58', '2026-08-07 07:22:58'),
(6, 'LPG-ORD-1006', 1, NULL, 'cancelled', '2026-08-03', NULL, 1065.00, 'cash', 'unpaid', 'Customer cancelled - travel', 2, '2026-08-07 07:22:58', '2026-08-07 07:22:58');

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `trg_orders_after_assign` AFTER UPDATE ON `orders` FOR EACH ROW BEGIN
    IF NEW.status = 'assigned' AND OLD.status <> 'assigned' AND NEW.driver_id IS NOT NULL THEN
        INSERT INTO deliveries (order_id, driver_id, status, started_at)
        VALUES (NEW.id, NEW.driver_id, 'assigned', NOW());
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `capacity_kg` decimal(5,2) NOT NULL DEFAULT 14.20,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `unit_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `subtotal` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `capacity_kg`, `quantity`, `unit_price`, `subtotal`) VALUES
(1, 1, 14.20, 1, 1065.00, 1065.00),
(2, 2, 14.20, 1, 1065.00, 1065.00),
(3, 3, 14.20, 1, 1065.00, 1065.00),
(4, 4, 14.20, 1, 1065.00, 1065.00),
(5, 5, 14.20, 2, 1065.00, 2130.00),
(6, 6, 14.20, 1, 1065.00, 1065.00);

--
-- Triggers `order_items`
--
DELIMITER $$
CREATE TRIGGER `trg_order_items_after_delete` AFTER DELETE ON `order_items` FOR EACH ROW BEGIN
    UPDATE orders
       SET total_amount = (SELECT COALESCE(SUM(subtotal),0) FROM order_items WHERE order_id = OLD.order_id)
     WHERE id = OLD.order_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_order_items_after_insert` AFTER INSERT ON `order_items` FOR EACH ROW BEGIN
    UPDATE orders
       SET total_amount = (SELECT COALESCE(SUM(subtotal),0) FROM order_items WHERE order_id = NEW.order_id)
     WHERE id = NEW.order_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trg_order_items_after_update` AFTER UPDATE ON `order_items` FOR EACH ROW BEGIN
    UPDATE orders
       SET total_amount = (SELECT COALESCE(SUM(subtotal),0) FROM order_items WHERE order_id = NEW.order_id)
     WHERE id = NEW.order_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(190) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` enum('admin','dispatcher','driver','customer') NOT NULL DEFAULT 'customer',
  `phone` varchar(30) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `last_login_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password_hash`, `role`, `phone`, `is_active`, `last_login_at`, `created_at`, `updated_at`) VALUES
(1, 'System Administrator', 'admin@demo.com', '$2y$10$oK.KqT10JL/AHrM0A3eGpuBoJaatwHvQNIEveInJKYehCAtHbjwsu', 'admin', '+91 98765 43210', 1, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(2, 'Head Dispatcher', 'dispatcher@demo.com', '$2y$10$ClIR3G1ecOniW00XR.VoUe/Uj8VU/pup2gXDW0LWfXdGdYfZc27km', 'dispatcher', '+91 91234 56780', 1, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(3, 'Rajesh Kumar', 'driver1@demo.com', '$2y$10$MSpf9tb1b6TSBKegIzn8COQO84P0imReuluFPGLYPTbZKJmFWCb0O', 'driver', '+91 90000 00001', 1, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(4, 'Amit Singh', 'driver2@demo.com', '$2y$10$BhoaNnZHX7Ax86gyGrNeX.AUpHsNmXZjmcbuMm4lEanuDkIFqMW/y', 'driver', '+91 90000 00002', 1, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57'),
(5, 'Demo Customer', 'customer@demo.com', '$2y$10$FgjurCPggYZwOsAT7.dJT.cZUr4QA5sPM2KgbfOgfoFg2HynCwU52', 'customer', '+91 90000 00003', 1, NULL, '2026-08-07 07:22:57', '2026-08-07 07:22:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_activity_user` (`user_id`),
  ADD KEY `idx_activity_action` (`action`),
  ADD KEY `idx_activity_created` (`created_at`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_customers_phone` (`phone`),
  ADD KEY `idx_customers_city` (`city`),
  ADD KEY `idx_customers_active` (`is_active`);

--
-- Indexes for table `cylinders`
--
ALTER TABLE `cylinders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_cylinders_serial` (`serial_number`),
  ADD KEY `idx_cylinders_status` (`status`),
  ADD KEY `idx_cylinders_owner` (`current_owner_id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_del_order` (`order_id`),
  ADD KEY `idx_del_driver` (`driver_id`),
  ADD KEY `idx_del_status` (`status`),
  ADD KEY `fk_del_by` (`delivered_by`);

--
-- Indexes for table `delivery_items`
--
ALTER TABLE `delivery_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_delivery_items_del` (`delivery_id`),
  ADD KEY `idx_delivery_items_cyl` (`cylinder_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_drivers_user` (`user_id`),
  ADD KEY `idx_drivers_active` (`is_active`);

--
-- Indexes for table `driver_locations`
--
ALTER TABLE `driver_locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_loc_driver` (`driver_id`),
  ADD KEY `idx_loc_driver` (`driver_id`),
  ADD KEY `idx_loc_updated` (`updated_at`),
  ADD KEY `idx_loc_active` (`is_active`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_attempts_identifier` (`identifier`,`attempted_at`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_orders_number` (`order_number`),
  ADD KEY `idx_orders_status` (`status`),
  ADD KEY `idx_orders_customer` (`customer_id`),
  ADD KEY `idx_orders_driver` (`driver_id`),
  ADD KEY `idx_orders_date` (`order_date`),
  ADD KEY `fk_orders_created_by` (`created_by`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_items_order` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_users_email` (`email`),
  ADD KEY `idx_users_role` (`role`),
  ADD KEY `idx_users_active` (`is_active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cylinders`
--
ALTER TABLE `cylinders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_items`
--
ALTER TABLE `delivery_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `driver_locations`
--
ALTER TABLE `driver_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD CONSTRAINT `fk_activity_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `cylinders`
--
ALTER TABLE `cylinders`
  ADD CONSTRAINT `fk_cylinders_owner` FOREIGN KEY (`current_owner_id`) REFERENCES `customers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `fk_del_by` FOREIGN KEY (`delivered_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_del_driver` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_del_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `delivery_items`
--
ALTER TABLE `delivery_items`
  ADD CONSTRAINT `fk_di_cylinder` FOREIGN KEY (`cylinder_id`) REFERENCES `cylinders` (`id`),
  ADD CONSTRAINT `fk_di_delivery` FOREIGN KEY (`delivery_id`) REFERENCES `deliveries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `fk_drivers_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `driver_locations`
--
ALTER TABLE `driver_locations`
  ADD CONSTRAINT `fk_loc_driver` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_orders_customer` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `fk_orders_driver` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_items_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"snap_to_grid\":\"off\",\"angular_direct\":\"direct\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'service ', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"active_verification_codes\",\"compliance_records\",\"departments\",\"documents\",\"facilities_reservations\",\"gmail_verification_codes\",\"gmail_verification_logs\",\"gmail_verification_settings\",\"legal_documents\",\"legal_entities\",\"legal_procedures\",\"login_history\",\"password_resets\",\"users\",\"verification_stats\",\"visitors\",\"warehouse_spaces\"],\"table_structure[]\":[\"active_verification_codes\",\"compliance_records\",\"departments\",\"documents\",\"facilities_reservations\",\"gmail_verification_codes\",\"gmail_verification_logs\",\"gmail_verification_settings\",\"legal_documents\",\"legal_entities\",\"legal_procedures\",\"login_history\",\"password_resets\",\"users\",\"verification_stats\",\"visitors\",\"warehouse_spaces\"],\"table_data[]\":[\"active_verification_codes\",\"compliance_records\",\"departments\",\"documents\",\"facilities_reservations\",\"gmail_verification_codes\",\"gmail_verification_logs\",\"gmail_verification_settings\",\"legal_documents\",\"legal_entities\",\"legal_procedures\",\"login_history\",\"password_resets\",\"users\",\"verification_stats\",\"visitors\",\"warehouse_spaces\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_columns\":\"something\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"alumni_system\",\"table\":\"users\"},{\"db\":\"alumni_system\",\"table\":\"verification_codes\"},{\"db\":\"hrms\",\"table\":\"users\"},{\"db\":\"hrms_db\",\"table\":\"users\"},{\"db\":\"aasict_db\",\"table\":\"member\"},{\"db\":\"aasict_db\",\"table\":\"user\"},{\"db\":\"service_management\",\"table\":\"gmail_verification_codes\"},{\"db\":\"service_management\",\"table\":\"facilities_reservations\"},{\"db\":\"service_management\",\"table\":\"gmail_verification_settings\"},{\"db\":\"service_management\",\"table\":\"gmail_verification_logs\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2026-10-13 02:05:53', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":246}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `security`
--
CREATE DATABASE IF NOT EXISTS `security` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `security`;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `user_id`, `action`, `description`, `ip_address`, `user_agent`, `created_at`) VALUES
(1, 1, 'LOGIN_SUCCESS', 'User logged in successfully', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', '2026-01-23 05:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `attempt_time` datetime DEFAULT current_timestamp(),
  `success` tinyint(1) NOT NULL,
  `user_agent` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `username`, `ip_address`, `attempt_time`, `success`, `user_agent`) VALUES
(1, 'admin', '::1', '2026-01-23 05:49:15', 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0'),
(2, 'admin', '::1', '2026-01-23 05:49:26', 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0'),
(3, 'admin', '::1', '2026-01-23 05:49:36', 0, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` datetime DEFAULT current_timestamp(),
  `ip_address` varchar(45) NOT NULL,
  `user_agent` text DEFAULT NULL,
  `device_info` text DEFAULT NULL,
  `is_successful` tinyint(1) DEFAULT 1,
  `session_id` varchar(255) DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `user_id`, `login_time`, `ip_address`, `user_agent`, `device_info`, `is_successful`, `session_id`, `logout_time`) VALUES
(1, 1, '2025-12-15 15:56:26', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(2, 1, '2025-12-15 15:59:26', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(3, 1, '2026-01-04 17:44:06', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(4, 1, '2026-01-12 14:21:06', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(5, 1, '2026-01-12 16:34:12', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(6, 1, '2026-01-12 16:38:49', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(7, 1, '2026-01-12 17:17:58', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(8, 1, '2026-01-18 19:06:07', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(9, 1, '2026-01-18 19:30:45', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(10, 1, '2026-01-18 19:32:01', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(11, 1, '2026-01-18 19:33:04', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(12, 1, '2026-01-18 19:33:10', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(13, 1, '2026-01-18 19:33:57', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(14, 1, '2026-01-18 19:39:50', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 1, NULL, NULL),
(15, 1, '2026-01-23 05:49:15', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 1, NULL, NULL),
(16, 1, '2026-01-23 05:49:27', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 1, NULL, NULL),
(17, 1, '2026-01-23 05:49:36', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 1, NULL, NULL),
(18, 1, '2026-01-23 05:52:09', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `is_read` tinyint(1) DEFAULT 0,
  `priority` enum('low','medium','high','urgent') DEFAULT 'medium',
  `created_at` datetime DEFAULT current_timestamp(),
  `read_at` datetime DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `type`, `title`, `message`, `data`, `is_read`, `priority`, `created_at`, `read_at`, `expires_at`) VALUES
(1, 1, 'login_activity', 'New Login Detected', 'A new login to your account was detected from IP: ::1', '{\"ip_address\":\"::1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/144.0.0.0 Safari\\/537.36 Edg\\/144.0.0.0\",\"success\":true}', 0, 'medium', '2026-01-23 05:52:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification_preferences`
--

CREATE TABLE `notification_preferences` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notification_type` varchar(50) NOT NULL,
  `email_enabled` tinyint(1) DEFAULT 1,
  `in_app_enabled` tinyint(1) DEFAULT 1,
  `sms_enabled` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `used` tinyint(1) DEFAULT 0,
  `ip_address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rate_limits`
--

CREATE TABLE `rate_limits` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `attempts` int(11) DEFAULT 1,
  `window_start` datetime DEFAULT current_timestamp(),
  `last_attempt` datetime DEFAULT current_timestamp(),
  `is_blacklisted` tinyint(1) DEFAULT 0,
  `blacklist_until` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rate_limits`
--

INSERT INTO `rate_limits` (`id`, `ip_address`, `attempts`, `window_start`, `last_attempt`, `is_blacklisted`, `blacklist_until`) VALUES
(1, '::1', 1, '2026-01-23 05:44:39', '2026-01-23 05:44:39', 0, NULL),
(2, '::1', 3, '2026-01-23 05:49:15', '2026-01-23 05:49:36', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `security_events`
--

CREATE TABLE `security_events` (
  `id` int(11) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `severity` enum('low','medium','high','critical') NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` text DEFAULT NULL,
  `event_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`event_data`)),
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `resolved` tinyint(1) DEFAULT 0,
  `resolved_at` datetime DEFAULT NULL,
  `resolved_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security_events`
--

INSERT INTO `security_events` (`id`, `event_type`, `severity`, `user_id`, `ip_address`, `user_agent`, `event_data`, `description`, `created_at`, `resolved`, `resolved_at`, `resolved_by`) VALUES
(1, 'LOGIN_FAILED', 'medium', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', '[]', 'Failed login attempt for username: admin', '2026-01-23 05:49:15', 0, NULL, NULL),
(2, 'LOGIN_FAILED', 'medium', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', '[]', 'Failed login attempt for username: admin', '2026-01-23 05:49:27', 0, NULL, NULL),
(3, 'LOGIN_FAILED', 'medium', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', '[]', 'Failed login attempt for username: admin', '2026-01-23 05:49:36', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_metrics`
--

CREATE TABLE `system_metrics` (
  `id` int(11) NOT NULL,
  `metric_name` varchar(100) NOT NULL,
  `metric_value` decimal(10,2) NOT NULL,
  `metric_unit` varchar(20) DEFAULT NULL,
  `recorded_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `is_verified` tinyint(1) DEFAULT 0,
  `is_locked` tinyint(1) DEFAULT 0,
  `failed_attempts` int(11) DEFAULT 0,
  `locked_until` datetime DEFAULT NULL,
  `verification_code` varchar(10) DEFAULT NULL,
  `verification_expiry` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password_hash`, `is_verified`, `is_locked`, `failed_attempts`, `locked_until`, `verification_code`, `verification_expiry`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', '$2y$10$YoeVXqbBppiVk/haBEztjelh2WOCuX64WPNo22nKRE8VWRbA4rkoq', 1, 0, 0, NULL, NULL, NULL, '2025-12-15 06:45:10', '2026-01-23 05:52:09'),
(2, 'newadmin1', 'newadmin123@gmail.com', '$2y$10$9soq2LH6vN54fZAt8.Uqm.6AbSckYoPr9vbd5/H513Ne9UsaWp5d.', 1, 0, 0, NULL, NULL, NULL, '2026-01-19 17:12:22', '2026-01-19 17:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `last_activity` datetime DEFAULT current_timestamp(),
  `expires_at` datetime NOT NULL,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sessions`
--

INSERT INTO `user_sessions` (`id`, `user_id`, `session_id`, `ip_address`, `user_agent`, `created_at`, `last_activity`, `expires_at`, `is_active`) VALUES
(1, 1, 'n8jgv5bha0tl5hkva2p6oqi1c7', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36 Edg/144.0.0.0', '2026-01-23 05:52:09', '2026-01-23 05:52:09', '2026-01-23 16:52:09', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_action` (`action`),
  ADD KEY `idx_created` (`created_at`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_username` (`username`),
  ADD KEY `idx_attempt_time` (`attempt_time`),
  ADD KEY `idx_ip` (`ip_address`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_login_time` (`login_time`),
  ADD KEY `idx_ip` (`ip_address`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_type` (`type`),
  ADD KEY `idx_is_read` (`is_read`),
  ADD KEY `idx_priority` (`priority`),
  ADD KEY `idx_created` (`created_at`);

--
-- Indexes for table `notification_preferences`
--
ALTER TABLE `notification_preferences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_type` (`user_id`,`notification_type`),
  ADD KEY `idx_user_id` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `idx_token` (`token`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_expires` (`expires_at`);

--
-- Indexes for table `rate_limits`
--
ALTER TABLE `rate_limits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_ip` (`ip_address`),
  ADD KEY `idx_window` (`window_start`),
  ADD KEY `idx_blacklist` (`is_blacklisted`,`blacklist_until`);

--
-- Indexes for table `security_events`
--
ALTER TABLE `security_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_event_type` (`event_type`),
  ADD KEY `idx_severity` (`severity`),
  ADD KEY `idx_created` (`created_at`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_resolved` (`resolved`),
  ADD KEY `resolved_by` (`resolved_by`);

--
-- Indexes for table `system_metrics`
--
ALTER TABLE `system_metrics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_metric_name` (`metric_name`),
  ADD KEY `idx_recorded_at` (`recorded_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_username` (`username`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_verification` (`verification_code`,`verification_expiry`);

--
-- Indexes for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `session_id` (`session_id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_session_id` (`session_id`),
  ADD KEY `idx_expires` (`expires_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification_preferences`
--
ALTER TABLE `notification_preferences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rate_limits`
--
ALTER TABLE `rate_limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `security_events`
--
ALTER TABLE `security_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_metrics`
--
ALTER TABLE `system_metrics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD CONSTRAINT `activity_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `login_history`
--
ALTER TABLE `login_history`
  ADD CONSTRAINT `login_history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notification_preferences`
--
ALTER TABLE `notification_preferences`
  ADD CONSTRAINT `notification_preferences_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD CONSTRAINT `password_resets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `security_events`
--
ALTER TABLE `security_events`
  ADD CONSTRAINT `security_events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `security_events_ibfk_2` FOREIGN KEY (`resolved_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD CONSTRAINT `user_sessions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
--
-- Database: `service_management`
--
CREATE DATABASE IF NOT EXISTS `service_management` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `service_management`;

-- --------------------------------------------------------

--
-- Stand-in structure for view `active_verification_codes`
-- (See below for the actual view)
--
CREATE TABLE `active_verification_codes` (
`id` int(11)
,`user_id` int(11)
,`username` varchar(50)
,`email` varchar(255)
,`verification_code` varchar(6)
,`expiry_time` datetime
,`is_used` tinyint(1)
,`created_at` timestamp
,`used_at` timestamp
,`status` varchar(7)
);

-- --------------------------------------------------------

--
-- Table structure for table `compliance_records`
--

CREATE TABLE `compliance_records` (
  `id` int(11) NOT NULL,
  `compliance_type` varchar(100) NOT NULL,
  `compliance_score` decimal(5,2) DEFAULT 0.00,
  `last_audit_date` date DEFAULT NULL,
  `next_audit_date` date DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `description`, `created_at`) VALUES
(1, 'Human Resources', 'Employee management and policies', '2026-03-14 17:45:11'),
(2, 'Finance', 'Financial records and accounting', '2026-03-14 17:45:11'),
(3, 'Operations', 'Daily operations and logistics', '2026-03-14 17:45:11'),
(4, 'Legal', 'Legal documents and compliance', '2026-03-14 17:45:11'),
(5, 'IT', 'Information technology and systems', '2026-03-14 17:45:11'),
(6, 'Marketing', 'Marketing materials and campaigns', '2026-03-14 17:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `document_name` varchar(255) NOT NULL,
  `file_path` varchar(500) NOT NULL,
  `document_type` varchar(50) NOT NULL,
  `archived_date` date NOT NULL,
  `time_received` datetime DEFAULT current_timestamp(),
  `time_given` datetime DEFAULT NULL,
  `purpose` text DEFAULT NULL,
  `action_taken` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `department_id`, `document_name`, `file_path`, `document_type`, `archived_date`, `time_received`, `time_given`, `purpose`, `action_taken`, `description`, `created_at`) VALUES
(1, 1, 2, 'sample', '', 'it', '0000-00-00', '2026-03-14 17:21:48', NULL, 'samoke', NULL, 'sample', '2026-03-15 00:21:48'),
(2, 1, 1, 'michael', '', 'sample101', '0000-00-00', '2026-03-14 21:40:05', NULL, 'sample', NULL, 'sample101sampl', '2026-03-15 04:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `date_start` date NOT NULL,
  `date_ended` date DEFAULT NULL,
  `reason` enum('resigned','evicted','terminated','retired','transferred','active') DEFAULT 'active',
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `department_id`, `position`, `date_start`, `date_ended`, `reason`, `user_id`, `created_at`) VALUES
(1, 'John Smith', 1, 'HR Manager', '2023-01-15', NULL, 'active', 1, '2026-03-14 17:45:11'),
(2, 'Sarah Johnson', 2, 'Financial Analyst', '2023-02-20', NULL, 'active', NULL, '2026-03-14 17:45:11'),
(3, 'Michael Chen', 3, 'Operations Supervisor', '2023-03-10', NULL, 'active', NULL, '2026-03-14 17:45:11'),
(4, 'Emily Davis', 4, 'Legal Advisor', '2023-01-05', NULL, 'active', NULL, '2026-03-14 17:45:11'),
(5, 'Robert Wilson', 5, 'IT Specialist', '2023-04-12', NULL, 'active', NULL, '2026-03-14 17:45:11'),
(6, 'Lisa Anderson', 6, 'Marketing Manager', '2023-02-28', NULL, 'resigned', NULL, '2026-03-14 17:45:11'),
(7, 'David Brown', 1, 'Recruitment Specialist', '2022-06-15', NULL, 'terminated', NULL, '2026-03-14 17:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `facilities_reservations`
--

CREATE TABLE `facilities_reservations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `facility_name` varchar(100) NOT NULL,
  `reservation_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `purpose` text NOT NULL,
  `status` enum('pending','approved','rejected','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities_reservations`
--

INSERT INTO `facilities_reservations` (`id`, `user_id`, `facility_name`, `reservation_date`, `start_time`, `end_time`, `purpose`, `status`, `created_at`) VALUES
(1, 1, 'Break Room', '2026-03-14', '15:29:00', '15:33:00', 'sample 101', 'approved', '2026-03-14 22:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `gmail_verification_codes`
--

CREATE TABLE `gmail_verification_codes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verification_code` varchar(6) NOT NULL,
  `expiry_time` datetime NOT NULL,
  `is_used` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `used_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gmail_verification_logs`
--

CREATE TABLE `gmail_verification_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verification_code` varchar(6) NOT NULL,
  `attempt_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `status` enum('sent','verified','failed','expired') NOT NULL,
  `error_message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gmail_verification_settings`
--

CREATE TABLE `gmail_verification_settings` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(100) NOT NULL,
  `setting_value` text NOT NULL,
  `description` text DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gmail_verification_settings`
--

INSERT INTO `gmail_verification_settings` (`id`, `setting_name`, `setting_value`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'gmail_host', 'smtp.gmail.com', 'Gmail SMTP host', 1, '2026-03-14 17:45:11', '2026-03-14 17:45:11'),
(2, 'gmail_port', '587', 'Gmail SMTP port', 1, '2026-03-14 17:45:11', '2026-03-14 17:45:11'),
(3, 'gmail_encryption', 'tls', 'Gmail SMTP encryption', 1, '2026-03-14 17:45:11', '2026-03-14 17:45:11'),
(4, 'gmail_username', 'michaeldeita2020@gmail.com', 'Gmail username', 1, '2026-03-14 17:45:11', '2026-03-14 17:45:11'),
(5, 'gmail_password', 'dbdfnvytwmabbxqe', 'Gmail app password', 1, '2026-03-14 17:45:11', '2026-03-14 17:45:11'),
(6, 'from_email', 'michaeldeita2020@gmail.com', 'From email address', 1, '2026-03-14 17:45:11', '2026-03-14 17:45:11'),
(7, 'from_name', 'Service Management System', 'From name', 1, '2026-03-14 17:45:11', '2026-03-14 17:45:11'),
(8, 'code_expiry_minutes', '60', 'Verification code expiry in minutes', 1, '2026-03-14 17:45:11', '2026-03-14 17:45:11'),
(9, 'max_attempts', '5', 'Maximum verification attempts per code', 1, '2026-03-14 17:45:11', '2026-03-14 17:45:11'),
(10, 'resend_cooldown_minutes', '2', 'Minutes to wait before resending code', 1, '2026-03-14 17:45:11', '2026-03-14 17:45:11'),
(11, 'enable_logging', '1', 'Enable verification logging', 1, '2026-03-14 17:45:11', '2026-03-14 17:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `legal_documents`
--

CREATE TABLE `legal_documents` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `document_title` varchar(255) NOT NULL,
  `document_type` varchar(50) NOT NULL,
  `file_path` varchar(500) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('active','expired','pending_review') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `legal_entities`
--

CREATE TABLE `legal_entities` (
  `id` int(11) NOT NULL,
  `entity_type` enum('license','contract','attorney','employee_record','case') NOT NULL,
  `entity_name` varchar(255) NOT NULL,
  `contact_info` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `time_out` datetime DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive','pending','resolved') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `legal_procedures`
--

CREATE TABLE `legal_procedures` (
  `id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `procedure_step` varchar(255) NOT NULL,
  `step_description` text DEFAULT NULL,
  `responsible_party` varchar(255) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `status` enum('pending','in_progress','completed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(45) NOT NULL,
  `user_agent` text NOT NULL,
  `device_type` varchar(50) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `login_status` enum('success','failed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `user_id`, `login_time`, `ip_address`, `user_agent`, `device_type`, `browser`, `platform`, `login_status`) VALUES
(1, 1, '2026-03-14 22:04:04', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36 Edg/145.0.0.0', 'Desktop', 'Chrome', 'Windows', 'success'),
(2, 1, '2026-03-15 00:25:00', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36 Edg/145.0.0.0', 'Desktop', 'Chrome', 'Windows', 'success'),
(3, 1, '2026-03-15 00:25:35', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36 Edg/145.0.0.0', 'Desktop', 'Chrome', 'Windows', 'success'),
(4, 1, '2026-03-15 03:06:25', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows', 'failed'),
(5, 1, '2026-03-15 03:20:41', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows', 'failed'),
(6, 1, '2026-03-15 04:20:11', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'Desktop', 'Chrome', 'Windows', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email_verified` tinyint(1) DEFAULT 0,
  `verification_code` varchar(6) DEFAULT NULL,
  `verification_code_expiry` datetime DEFAULT NULL,
  `failed_attempts` int(11) DEFAULT 0,
  `locked_until` datetime DEFAULT NULL,
  `is_locked` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone_number`, `password_hash`, `email_verified`, `verification_code`, `verification_code_expiry`, `failed_attempts`, `locked_until`, `is_locked`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'michaeldeita2020@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL, 0, NULL, 0, '2026-03-14 17:45:11', '2026-03-15 04:20:11');

-- --------------------------------------------------------

--
-- Stand-in structure for view `verification_stats`
-- (See below for the actual view)
--
CREATE TABLE `verification_stats` (
`date` date
,`total_attempts` bigint(21)
,`successful` decimal(22,0)
,`failed` decimal(22,0)
,`expired` decimal(22,0)
,`success_rate` decimal(28,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visitor_name` varchar(255) NOT NULL,
  `visitor_email` varchar(255) NOT NULL,
  `visitor_phone` varchar(50) NOT NULL,
  `purpose_of_visit` text NOT NULL,
  `visit_date` date NOT NULL,
  `check_in_time` time DEFAULT NULL,
  `check_out_time` time DEFAULT NULL,
  `actions_taken` text DEFAULT NULL,
  `status` enum('scheduled','checked_in','checked_out','cancelled') DEFAULT 'scheduled',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `user_id`, `visitor_name`, `visitor_email`, `visitor_phone`, `purpose_of_visit`, `visit_date`, `check_in_time`, `check_out_time`, `actions_taken`, `status`, `created_at`) VALUES
(1, 1, 'admin', 'michaeldeita2020@gmail.com', 'N/A', 'System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access', '2026-03-14', '15:39:38', NULL, NULL, 'checked_in', '2026-03-14 18:50:17'),
(2, 1, 'admin', 'michaeldeita2020@gmail.com', 'N/A', 'System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access', '2026-03-14', '15:38:25', NULL, NULL, 'checked_in', '2026-03-14 20:17:38'),
(3, 1, 'admin', 'michaeldeita2020@gmail.com', 'N/A', 'System Interaction - documents: view - Document management access', '2026-03-14', '13:17:57', NULL, NULL, 'scheduled', '2026-03-14 20:17:57'),
(4, 1, 'admin', 'michaeldeita2020@gmail.com', 'N/A', 'System Interaction - legal: view - Legal management access', '2026-03-14', '15:14:01', NULL, NULL, 'checked_in', '2026-03-14 22:14:01'),
(5, 1, 'admin', 'michaeldeita2020@gmail.com', 'N/A', 'System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access, System Interaction - dashboard: view - Main dashboard access', '2026-03-15', '22:23:24', NULL, NULL, 'checked_in', '2026-03-15 00:02:04'),
(6, 1, 'admin', 'michaeldeita2020@gmail.com', 'N/A', 'System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access, System Interaction - facilities: view - Facilities reservation access', '2026-03-15', '21:21:13', '03:51:30', NULL, 'checked_in', '2026-03-15 00:02:21'),
(7, 1, 'admin', 'michaeldeita2020@gmail.com', 'N/A', 'System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Document management access, System Interaction - documents: view - Viewing document management page, System Interaction - documents: view - Viewing document management page, System Interaction - documents: view - Viewing document management page', '2026-03-15', '22:18:05', NULL, NULL, 'checked_in', '2026-03-15 00:21:28'),
(8, 1, 'admin', 'michaeldeita2020@gmail.com', 'N/A', 'System Interaction - legal: view - Legal management access', '2026-03-15', '22:23:13', NULL, NULL, 'checked_in', '2026-03-15 05:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_spaces`
--

CREATE TABLE `warehouse_spaces` (
  `id` int(11) NOT NULL,
  `space_name` varchar(100) NOT NULL,
  `space_type` enum('storage','office','meeting_room','loading_dock','reception','other') NOT NULL,
  `capacity` int(11) DEFAULT 0,
  `location_x` int(11) DEFAULT 0,
  `location_y` int(11) DEFAULT 0,
  `width` int(11) DEFAULT 50,
  `height` int(11) DEFAULT 50,
  `color` varchar(7) DEFAULT '#3b82f6',
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouse_spaces`
--

INSERT INTO `warehouse_spaces` (`id`, `space_name`, `space_type`, `capacity`, `location_x`, `location_y`, `width`, `height`, `color`, `is_active`, `created_at`) VALUES
(1, 'Main Storage Area', 'storage', 100, 50, 50, 200, 150, '#3b82f6', 1, '2026-03-14 17:45:11'),
(2, 'Conference Room A', 'meeting_room', 10, 300, 50, 100, 80, '#10b981', 1, '2026-03-14 17:45:11'),
(3, 'Executive Office', 'office', 4, 450, 50, 80, 60, '#f59e0b', 1, '2026-03-14 17:45:11'),
(4, 'Loading Dock', 'loading_dock', 5, 50, 250, 120, 70, '#ef4444', 1, '2026-03-14 17:45:11'),
(5, 'Reception Area', 'reception', 20, 200, 250, 150, 90, '#8b5cf6', 1, '2026-03-14 17:45:11'),
(6, 'Break Room', 'other', 15, 400, 250, 100, 70, '#06b6d4', 1, '2026-03-14 17:45:11');

-- --------------------------------------------------------

--
-- Structure for view `active_verification_codes`
--
DROP TABLE IF EXISTS `active_verification_codes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `active_verification_codes`  AS SELECT `gvc`.`id` AS `id`, `gvc`.`user_id` AS `user_id`, `u`.`username` AS `username`, `gvc`.`email` AS `email`, `gvc`.`verification_code` AS `verification_code`, `gvc`.`expiry_time` AS `expiry_time`, `gvc`.`is_used` AS `is_used`, `gvc`.`created_at` AS `created_at`, `gvc`.`used_at` AS `used_at`, CASE WHEN `gvc`.`is_used` = 1 THEN 'Used' WHEN `gvc`.`expiry_time` < current_timestamp() THEN 'Expired' ELSE 'Active' END AS `status` FROM (`gmail_verification_codes` `gvc` join `users` `u` on(`gvc`.`user_id` = `u`.`id`)) WHERE `gvc`.`expiry_time` > current_timestamp() AND `gvc`.`is_used` = 0 ;

-- --------------------------------------------------------

--
-- Structure for view `verification_stats`
--
DROP TABLE IF EXISTS `verification_stats`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `verification_stats`  AS SELECT cast(`gvl`.`attempt_time` as date) AS `date`, count(0) AS `total_attempts`, sum(case when `gvl`.`status` = 'verified' then 1 else 0 end) AS `successful`, sum(case when `gvl`.`status` = 'failed' then 1 else 0 end) AS `failed`, sum(case when `gvl`.`status` = 'expired' then 1 else 0 end) AS `expired`, round(sum(case when `gvl`.`status` = 'verified' then 1 else 0 end) / count(0) * 100,2) AS `success_rate` FROM `gmail_verification_logs` AS `gvl` GROUP BY cast(`gvl`.`attempt_time` as date) ORDER BY cast(`gvl`.`attempt_time` as date) DESC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compliance_records`
--
ALTER TABLE `compliance_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `department_name` (`department_name`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fk_documents_department` (`department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `facilities_reservations`
--
ALTER TABLE `facilities_reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `gmail_verification_codes`
--
ALTER TABLE `gmail_verification_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_code` (`verification_code`),
  ADD KEY `idx_expiry` (`expiry_time`);

--
-- Indexes for table `gmail_verification_logs`
--
ALTER TABLE `gmail_verification_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_attempt_time` (`attempt_time`);

--
-- Indexes for table `gmail_verification_settings`
--
ALTER TABLE `gmail_verification_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_name` (`setting_name`),
  ADD KEY `idx_setting_name` (`setting_name`);

--
-- Indexes for table `legal_documents`
--
ALTER TABLE `legal_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `legal_entities`
--
ALTER TABLE `legal_entities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legal_procedures`
--
ALTER TABLE `legal_procedures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_id` (`case_id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `warehouse_spaces`
--
ALTER TABLE `warehouse_spaces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compliance_records`
--
ALTER TABLE `compliance_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `facilities_reservations`
--
ALTER TABLE `facilities_reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gmail_verification_codes`
--
ALTER TABLE `gmail_verification_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gmail_verification_logs`
--
ALTER TABLE `gmail_verification_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gmail_verification_settings`
--
ALTER TABLE `gmail_verification_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `legal_documents`
--
ALTER TABLE `legal_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `legal_entities`
--
ALTER TABLE `legal_entities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `legal_procedures`
--
ALTER TABLE `legal_procedures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `warehouse_spaces`
--
ALTER TABLE `warehouse_spaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
--
-- Database: `student_management_system`
--
CREATE DATABASE IF NOT EXISTS `student_management_system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `student_management_system`;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `section` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `prelim_course_output` decimal(5,2) DEFAULT 0.00,
  `prelim_examination` decimal(5,2) DEFAULT 0.00,
  `prelim_total` decimal(5,2) DEFAULT 0.00,
  `midterm_course_output` decimal(5,2) DEFAULT 0.00,
  `midterm_examination` decimal(5,2) DEFAULT 0.00,
  `midterm_total` decimal(5,2) DEFAULT 0.00,
  `finals_course_output` decimal(5,2) DEFAULT 0.00,
  `finals_examination` decimal(5,2) DEFAULT 0.00,
  `finals_total` decimal(5,2) DEFAULT 0.00,
  `gwa` decimal(5,2) DEFAULT 0.00,
  `letter_grade` varchar(10) DEFAULT '',
  `remarks` varchar(20) DEFAULT 'PENDING',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `email`, `created_at`) VALUES
(1, 'admin', '$2y$10$YoeVXqbBppiVk/haBEztjelh2WOCuX64WPNo22nKRE8VWRbA4rkoq', 'Administrator', 'admin@sms.com', '2026-01-23 12:49:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_class_section` (`class_name`,`section`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_student_subject` (`student_id`,`subject`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
