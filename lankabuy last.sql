-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 02:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lankabuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'isurangabtk@gmail.com', 'b0e3002dfb33fb575f035e18306b19b8', 'Kelum Isuranga', '0775001170', NULL, NULL),
(2, 'isurangait@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Madura', '0774005510', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_isactive` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `category_isactive`, `created_at`, `updated_at`) VALUES
(15, 'Mobile Phones & Accessories', 'Mobiles Devices', 1, NULL, NULL),
(16, 'Computers & Accessories', 'Computer Products', 1, NULL, NULL),
(17, 'Kids & Toys', 'Electronic Toys', 1, NULL, NULL),
(18, 'Women’s Clothing', 'Women’s Clothing', 1, NULL, NULL),
(19, 'Cellphones & Accessories', 'Cellphones & Accessories', 0, NULL, NULL),
(20, 'Computer, Office, Security', 'Computer, Office, Security', 1, NULL, NULL),
(21, 'Consumer Electronics', 'Consumer Electronics', 1, NULL, NULL),
(22, 'Toys, Kids & Baby', 'Toys, Kids & Baby', 1, NULL, NULL),
(23, 'Sports & Outdoors', 'Sports & Outdoors', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(10) UNSIGNED NOT NULL,
  `cus_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_email`, `cus_password`, `cus_mobile`, `created_at`, `updated_at`) VALUES
(1, 'kelum isuranga', 'isurangabtk@gmail.com', 'b0e3002dfb33fb575f035e18306b19b8', '0775001170', NULL, NULL),
(2, 'kelum isuranga', 'isurangabtk@gmail.com', 'b0e3002dfb33fb575f035e18306b19b8', '0775001170', NULL, NULL),
(3, '12345', 'shamil@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0775006670', NULL, NULL),
(4, 'Shamil', 'shamilnara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '077399559', NULL, NULL);

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
(1, '2019_02_14_082234_create_admin_table', 1),
(2, '2019_02_15_095428_create_category_table', 2),
(3, '2019_02_16_110529_create_products_table', 3),
(4, '2019_05_11_095021_create_customer_table', 4),
(5, '2019_05_11_111902_create_shipping_table', 5),
(6, '2019_05_18_100343_create_payment_table', 6),
(7, '2019_05_18_100428_create_order_table', 6),
(8, '2019_05_18_101553_create_order_details_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `cus_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `cus_id`, `shipping_id`, `payment_id`, `total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 5, '2,074.00', 'Completed', NULL, NULL),
(2, 1, 5, 6, '2,074.00', 'Completed', NULL, NULL),
(3, 1, 5, 7, '2,074.00', 'Pending', NULL, NULL),
(4, 1, 6, 8, '30,724.00', 'Completed', NULL, NULL),
(5, 1, 6, 9, '30,724.00', 'Pending', NULL, NULL),
(6, 1, 6, 10, '30,724.00', 'Pending', NULL, NULL),
(7, 1, 6, 11, '30,724.00', 'Completed', NULL, NULL),
(8, 1, 6, 12, '30,724.00', 'Pending', NULL, NULL),
(9, 1, 6, 13, '30,724.00', 'Pending', NULL, NULL),
(10, 1, 6, 14, '30,724.00', 'Pending', NULL, NULL),
(11, 1, 6, 15, '30,724.00', 'Pending', NULL, NULL),
(12, 1, 6, 16, '30,724.00', 'Pending', NULL, NULL),
(13, 1, 6, 17, '30,724.00', 'Pending', NULL, NULL),
(14, 1, 6, 18, '30,724.00', 'Pending', NULL, NULL),
(15, 1, 6, 19, '30,724.00', 'Pending', NULL, NULL),
(16, 1, 6, 20, '30,724.00', 'Pending', NULL, NULL),
(17, 1, 6, 21, '30,724.00', 'Pending', NULL, NULL),
(18, 1, 6, 22, '30,724.00', 'Pending', NULL, NULL),
(19, 1, 6, 23, '30,724.00', 'Pending', NULL, NULL),
(20, 1, 6, 24, '30,724.00', 'Pending', NULL, NULL),
(21, 1, 6, 25, '30,724.00', 'Pending', NULL, NULL),
(22, 1, 6, 26, '30,724.00', 'Pending', NULL, NULL),
(23, 1, 6, 27, '30,724.00', 'Pending', NULL, NULL),
(24, 1, 6, 28, '30,724.00', 'Pending', NULL, NULL),
(25, 1, 6, 29, '30,724.00', 'Pending', NULL, NULL),
(26, 1, 6, 30, '30,724.00', 'Pending', NULL, NULL),
(27, 1, 6, 31, '30,724.00', 'Pending', NULL, NULL),
(28, 1, 6, 32, '30,724.00', 'Pending', NULL, NULL),
(29, 1, 6, 33, '30,724.00', 'Pending', NULL, NULL),
(30, 1, 6, 34, '30,724.00', 'Pending', NULL, NULL),
(31, 1, 6, 35, '30,724.00', 'Pending', NULL, NULL),
(32, 1, 7, 36, '1,998.00', 'Pending', NULL, NULL),
(33, 1, 7, 37, '0.00', 'Pending', NULL, NULL),
(34, 3, 8, 38, '34,000.00', 'Pending', NULL, NULL),
(35, 4, 9, 39, '1,000.00', 'Completed', NULL, NULL),
(36, 4, 10, 40, '1,075.00', 'Pending', NULL, NULL),
(37, 4, 11, 41, '22,400.00', 'Pending', NULL, NULL),
(38, 4, 12, 42, '13,464.00', 'Pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 'Phone 2', '76', '1', '2019-05-18 11:30:21', NULL),
(2, 2, 10, 'Phone 2', '76', '1', '2019-05-18 11:30:30', NULL),
(3, 3, 10, 'Phone 2', '76', '1', '2019-05-18 11:30:34', NULL),
(4, 4, 12, 'gfdgfd', '5654', '5', '2019-05-18 11:47:45', NULL),
(5, 5, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 11:48:57', NULL),
(6, 5, 10, 'Phone 2', '76', '6', '2019-05-18 11:48:57', NULL),
(7, 5, 12, 'gfdgfd', '5654', '5', '2019-05-18 11:48:57', NULL),
(8, 6, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 11:57:47', NULL),
(9, 6, 10, 'Phone 2', '76', '6', '2019-05-18 11:57:47', NULL),
(10, 6, 12, 'gfdgfd', '5654', '5', '2019-05-18 11:57:47', NULL),
(11, 7, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:01:01', NULL),
(12, 7, 10, 'Phone 2', '76', '6', '2019-05-18 12:01:01', NULL),
(13, 7, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:01:01', NULL),
(14, 8, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:01:54', NULL),
(15, 8, 10, 'Phone 2', '76', '6', '2019-05-18 12:01:54', NULL),
(16, 8, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:01:54', NULL),
(17, 9, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:02:58', NULL),
(18, 9, 10, 'Phone 2', '76', '6', '2019-05-18 12:02:58', NULL),
(19, 9, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:02:58', NULL),
(20, 10, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:11:55', NULL),
(21, 10, 10, 'Phone 2', '76', '6', '2019-05-18 12:11:55', NULL),
(22, 10, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:11:55', NULL),
(23, 11, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:12:10', NULL),
(24, 11, 10, 'Phone 2', '76', '6', '2019-05-18 12:12:10', NULL),
(25, 11, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:12:10', NULL),
(26, 12, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:19:00', NULL),
(27, 12, 10, 'Phone 2', '76', '6', '2019-05-18 12:19:00', NULL),
(28, 12, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:19:00', NULL),
(29, 13, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:19:30', NULL),
(30, 13, 10, 'Phone 2', '76', '6', '2019-05-18 12:19:30', NULL),
(31, 13, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:19:30', NULL),
(32, 14, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:21:00', NULL),
(33, 14, 10, 'Phone 2', '76', '6', '2019-05-18 12:21:00', NULL),
(34, 14, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:21:00', NULL),
(35, 15, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:24:23', NULL),
(36, 15, 10, 'Phone 2', '76', '6', '2019-05-18 12:24:23', NULL),
(37, 15, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:24:23', NULL),
(38, 16, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:25:15', NULL),
(39, 16, 10, 'Phone 2', '76', '6', '2019-05-18 12:25:15', NULL),
(40, 16, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:25:15', NULL),
(41, 17, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:26:46', NULL),
(42, 17, 10, 'Phone 2', '76', '6', '2019-05-18 12:26:46', NULL),
(43, 17, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:26:46', NULL),
(44, 18, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:27:24', NULL),
(45, 18, 10, 'Phone 2', '76', '6', '2019-05-18 12:27:24', NULL),
(46, 18, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:27:24', NULL),
(47, 19, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:27:46', NULL),
(48, 19, 10, 'Phone 2', '76', '6', '2019-05-18 12:27:46', NULL),
(49, 19, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:27:46', NULL),
(50, 20, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:29:42', NULL),
(51, 20, 10, 'Phone 2', '76', '6', '2019-05-18 12:29:42', NULL),
(52, 20, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:29:42', NULL),
(53, 21, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:31:28', NULL),
(54, 21, 10, 'Phone 2', '76', '6', '2019-05-18 12:31:28', NULL),
(55, 21, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:31:28', NULL),
(56, 22, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:31:53', NULL),
(57, 22, 10, 'Phone 2', '76', '6', '2019-05-18 12:31:53', NULL),
(58, 22, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:31:53', NULL),
(59, 23, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:33:22', NULL),
(60, 23, 10, 'Phone 2', '76', '6', '2019-05-18 12:33:22', NULL),
(61, 23, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:33:22', NULL),
(62, 24, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:33:40', NULL),
(63, 24, 10, 'Phone 2', '76', '6', '2019-05-18 12:33:40', NULL),
(64, 24, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:33:40', NULL),
(65, 25, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:37:14', NULL),
(66, 25, 10, 'Phone 2', '76', '6', '2019-05-18 12:37:14', NULL),
(67, 25, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:37:14', NULL),
(68, 26, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:39:20', NULL),
(69, 26, 10, 'Phone 2', '76', '6', '2019-05-18 12:39:20', NULL),
(70, 26, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:39:20', NULL),
(71, 27, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:40:04', NULL),
(72, 27, 10, 'Phone 2', '76', '6', '2019-05-18 12:40:04', NULL),
(73, 27, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:40:04', NULL),
(74, 28, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:45:32', NULL),
(75, 28, 10, 'Phone 2', '76', '6', '2019-05-18 12:45:32', NULL),
(76, 28, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:45:32', NULL),
(77, 29, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:50:02', NULL),
(78, 29, 10, 'Phone 2', '76', '6', '2019-05-18 12:50:02', NULL),
(79, 29, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:50:02', NULL),
(80, 30, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:50:06', NULL),
(81, 30, 10, 'Phone 2', '76', '6', '2019-05-18 12:50:06', NULL),
(82, 30, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:50:06', NULL),
(83, 31, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-18 12:50:35', NULL),
(84, 31, 10, 'Phone 2', '76', '6', '2019-05-18 12:50:35', NULL),
(85, 31, 12, 'gfdgfd', '5654', '5', '2019-05-18 12:50:35', NULL),
(86, 32, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '2', '2019-05-25 09:27:50', NULL),
(87, 34, 8, 'Original Xiaomi Mi Colorful version', '1000', '34', '2019-05-25 20:10:17', NULL),
(88, 35, 8, 'Original Xiaomi Mi Colorful version', '1000', '1', '2019-05-26 09:55:00', NULL),
(89, 36, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '1', '2019-05-26 10:14:47', NULL),
(90, 36, 10, 'Phone 2', '76', '1', '2019-05-26 10:14:47', NULL),
(91, 37, 10, 'Phone 2', '76', '14', '2019-05-26 11:13:57', NULL),
(92, 37, 6, 'Earphones TWS Wireless Headphones', '3556', '6', '2019-05-26 11:13:57', NULL),
(93, 38, 7, 'i7s TWS Mini Wireless Bluetooth Earphone', '999', '12', '2019-05-26 11:20:40', NULL),
(94, 38, 9, 'Phone 1', '123', '12', '2019-05-26 11:20:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'bank', 'Pending', '2019-05-18 11:22:48', NULL),
(2, 'bank', '1', '2019-05-18 11:26:33', NULL),
(3, 'bank', 'Pending', '2019-05-18 11:27:32', NULL),
(4, 'check', 'Pending', '2019-05-18 11:28:04', NULL),
(5, 'check', 'Pending', '2019-05-18 11:30:21', NULL),
(6, 'cashondelivery', 'Pending', '2019-05-18 11:30:30', NULL),
(7, 'bank', '1', '2019-05-18 11:30:34', NULL),
(8, 'bank', 'Pending', '2019-05-18 11:47:45', NULL),
(9, 'bank', 'Pending', '2019-05-18 11:48:57', NULL),
(10, 'bank', 'Pending', '2019-05-18 11:57:47', NULL),
(11, 'bank', 'Pending', '2019-05-18 12:01:01', NULL),
(12, 'bank', 'Pending', '2019-05-18 12:01:54', NULL),
(13, 'bank', 'Pending', '2019-05-18 12:02:58', NULL),
(14, 'bank', 'Pending', '2019-05-18 12:11:55', NULL),
(15, 'bank', 'Pending', '2019-05-18 12:12:10', NULL),
(16, 'bank', 'Pending', '2019-05-18 12:19:00', NULL),
(17, 'bank', 'Pending', '2019-05-18 12:19:30', NULL),
(18, 'bank', 'Pending', '2019-05-18 12:21:00', NULL),
(19, 'bank', 'Pending', '2019-05-18 12:24:23', NULL),
(20, 'bank', 'Pending', '2019-05-18 12:25:15', NULL),
(21, 'bank', 'Pending', '2019-05-18 12:26:46', NULL),
(22, 'bank', 'Pending', '2019-05-18 12:27:24', NULL),
(23, 'bank', 'Pending', '2019-05-18 12:27:46', NULL),
(24, 'bank', 'Pending', '2019-05-18 12:29:42', NULL),
(25, 'bank', 'Pending', '2019-05-18 12:31:28', NULL),
(26, 'bank', 'Pending', '2019-05-18 12:31:53', NULL),
(27, 'bank', 'Pending', '2019-05-18 12:33:22', NULL),
(28, 'bank', 'Pending', '2019-05-18 12:33:40', NULL),
(29, 'bank', 'Pending', '2019-05-18 12:37:14', NULL),
(30, 'bank', 'Pending', '2019-05-18 12:39:20', NULL),
(31, 'bank', 'Pending', '2019-05-18 12:40:04', NULL),
(32, 'bank', 'Pending', '2019-05-18 12:45:32', NULL),
(33, 'bank', 'Pending', '2019-05-18 12:50:02', NULL),
(34, 'bank', '1', '2019-05-18 12:50:06', NULL),
(35, 'bank', '1', '2019-05-18 12:50:35', NULL),
(36, 'check', 'Pending', '2019-05-25 09:27:50', NULL),
(37, 'cashondelivery', 'Pending', '2019-05-25 09:28:16', NULL),
(38, 'cashondelivery', 'Pending', '2019-05-25 20:10:17', NULL),
(39, 'cashondelivery', 'Pending', '2019-05-26 09:55:00', NULL),
(40, 'cashondelivery', 'Pending', '2019-05-26 10:14:47', NULL),
(41, 'bank', 'Pending', '2019-05-26 11:13:57', NULL),
(42, 'cashondelivery', 'Pending', '2019-05-26 11:20:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_weight` double(8,2) NOT NULL,
  `product_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_isactive` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category_id`, `product_short_description`, `product_long_description`, `product_price`, `product_image`, `product_weight`, `product_brand`, `product_isactive`, `created_at`, `updated_at`) VALUES
(6, 'Earphones TWS Wireless Headphones', 16, 'Keyboardf', 'hgfhjgfjhfg', 3556.00, 'image/YubFA1tnL1nfZyzesD9I.jpg', 3465.00, 'Logitechi', 1, NULL, NULL),
(7, 'i7s TWS Mini Wireless Bluetooth Earphone', 15, 'earphone', 'Brand Name: HESTIA\r\nWireless Type: bluetooth\r\nPlug Type: Wireless\r\nFunction: For Mobile Phone,HiFi Headphone,For iPod,Sport,Common Headphone\r\nConnectors: None\r\nCommunication: Wireless\r\nActive Noise-Cancellation: Yes\r\nSupport Memory Card: No\r\nModel Number: T33/HQB-Q32\r\nSensitivity: 40±2dB\r\nIs wireless: Yes\r\nSupport APP: No\r\nStyle: Ear Hook\r\nLine Length: None\r\nWith Microphone: Yes\r\nResistance: 32Ω\r\nSupport Apt-x: No\r\nWaterproof: Yes\r\nFrequency Response Range: 20-24000Hz\r\nVolume Control: No\r\nControl Button: Yes\r\nVocalism Principle: Balanced Armature\r\nWaterproof upgrade: IPX5', 999.00, 'image/8hdknRI6Yx0zoi7cBb3v.jpg', 1.00, 'Xiaomi', 1, NULL, NULL),
(8, 'Original Xiaomi Mi Colorful version', 15, 'Earhpone', 'kjhkjhkh', 1000.00, 'image/sMCSzrgnfexRC8Cw3msW.jpg', 1.00, 'Xiaomi', 1, NULL, NULL),
(9, 'Phone 1', 15, 'phone', 'phone', 123.00, 'image/TyAIgG7RuDaXPBJJmzD7.jpg', 132.00, 'Dogee', 1, NULL, NULL),
(10, 'Phone 2', 16, 'kjhkjh', 'kjhjkh', 76.00, 'image/nCaLQPg05jH4TEOFbEQp.jpg', 564.00, 'Xiaomi', 1, NULL, NULL),
(11, 'hgjhg', 15, 'jhgjg', 'jhgjhg', 765.00, 'image/KqpoyPE34ZFeuzVcKLGF.jpg', 6756.00, 'gfd', 1, NULL, NULL),
(12, 'gfdgfd', 15, 'gfdgfd', 'gfdgfd', 5654.00, 'image/ugu5uUBaa8pC54kUmra4.jpg', 564.00, 'gfdgf', 1, NULL, NULL),
(13, 'gfdgf', 15, 'gfdgfd', 'gfdf', 65456.00, 'image/suKFuVhbYmDOsKiNCHNw.jpg', 6565.00, 'gfdgfd', 1, NULL, NULL),
(14, 'gfdh', 15, 'gfdgh', 'ghdfhfd', 654564.00, 'image/aVZTMyHyGHsmmGNeQlZ7.jpg', 65654.00, 'gfdhfd', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `shipping_email`, `shipping_fname`, `shipping_lname`, `shipping_address`, `shipping_city`, `shipping_zipcode`, `shipping_phone`, `created_at`, `updated_at`) VALUES
(1, 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'kjh', 'kjh', NULL, NULL),
(2, 'jhghjg@jhg.com', 'kwlum', 'isuranga', '2187/aj', 'kirama', '823423', '0775001170', NULL, NULL),
(3, 'hgf', 'hgf', 'hgf', 'hgf', 'hgf', 'hgf', 'hgf', NULL, NULL),
(4, 'jhg', 'hg', 'hg', 'hg', 'jhg', '76', '876876', NULL, NULL),
(5, 'kjh', 'kjh', 'jkh', 'kjh', 'kjh', 'jkh', 'jkh', NULL, NULL),
(6, 'kjh', 'kjh', 'kjh', 'kjh', 'kjh', '987', '9879', NULL, NULL),
(7, 'hgf', 'hgf', 'hgf', 'hgf', 'hgf', 'hgf', '76565', NULL, NULL),
(8, 'jhgghjg@gmail.com', 'shamil', 'narada', '213/A', 'colombo', '98797', '0775006670', NULL, NULL),
(9, 'naradashamil@gmail.com', 'Shamil', 'Narada', '217/B Walasmulla', 'South', '987987', '077600550', NULL, NULL),
(10, 'Isuranga', 'jhgj', 'jhghj', 'jhgj', 'jhg', 'hjg', '98789', NULL, NULL),
(11, 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', NULL, NULL),
(12, 'Kkjh@gmail.com', 'kjhkjh', 'kjhkjh', 'kjhkjh', 'kjhjkh', '987897', '98987975', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
