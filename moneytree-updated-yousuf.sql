-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 09:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneytree`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` int(11) NOT NULL,
  `bank_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `acc_ttitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acc_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acc_iban` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`id`, `bank_title`, `acc_ttitle`, `acc_no`, `acc_iban`) VALUES
(1, 'HBL', 'shahzeb', '02337823032723', 'A2302337823032723'),
(2, 'UBL', 'Shahzeb1', '657890-9876546', '04327657890-9876546'),
(3, 'UBL', 'Shahzeb1', '657890-9876546', '04327657890-9876546'),
(4, 'UBL', 'Shahzeb1', '657890-9876546', '04327657890-9876546');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(250) NOT NULL,
  `blog_long_discript` varchar(10000) NOT NULL,
  `blog_short_discript` varchar(500) NOT NULL,
  `blog_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `blog_long_discript`, `blog_short_discript`, `blog_image`) VALUES
(1, 'lorem ipsum 121', 'Mubassir22', 'HELLLOP990', 'blog_thumbnails/WhatsApp Image 2022-06-12 at 9.44.03 PM.jpeg'),
(2, 'jnnnianis', 'HELLO', 'HELLO', 'https://bloomscape.com/wp-content/uploads/2021/06/bloomscape_mini-money-tree_charcoal_0621-scaled-e1625248480586.jpg'),
(3, 'Lorem Ipsum', 'HYED', '233', 'https://cdn.pixabay.com/photo/2017/09/07/08/54/money-2724241__480.jpg'),
(5, 'hello', 'hii', 'hiiiii', 'blog_thumbnails/380-3806832_100-customer-satisfaction-guarantee-customer-satisfaction-guarantee-badge-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `id` int(11) NOT NULL,
  `committee_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`id`, `committee_name`, `time`) VALUES
(1, '6 Months', '2022-07-25 20:36:50'),
(2, '10 Months', '2022-07-25 20:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `committee_user`
--

CREATE TABLE `committee_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `committee_num` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `committe_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `committee_start_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `committee_no` int(11) NOT NULL,
  `status` enum('Paid','UnPaid','Pending','') COLLATE utf8_unicode_ci NOT NULL,
  `payment_no` int(11) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `months` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `committee_user`
--

INSERT INTO `committee_user` (`id`, `user_id`, `committee_num`, `committe_id`, `time`, `committee_start_month`, `amount`, `committee_no`, `status`, `payment_no`, `payment_date`, `months`) VALUES
(2, 1, '1658848601', 2, '2022-10-07 18:28:55', 'January', 200, 2, 'UnPaid', 2, '0000-00-00 00:00:00', 'February'),
(3, 16, '1658848601', 2, '2022-07-26 15:16:41', 'January', 200, 2, 'UnPaid', 3, '0000-00-00 00:00:00', 'March'),
(4, 16, '1658848601', 2, '2022-07-26 15:16:41', 'January', 200, 2, 'UnPaid', 4, '0000-00-00 00:00:00', 'April'),
(5, 16, '1658848601', 2, '2022-07-26 15:16:41', 'January', 200, 2, 'UnPaid', 5, '0000-00-00 00:00:00', 'May'),
(6, 16, '1658848601', 2, '2022-07-26 15:16:41', 'January', 200, 2, 'UnPaid', 6, '0000-00-00 00:00:00', 'June'),
(7, 16, '1658848601', 2, '2022-07-26 15:16:41', 'January', 200, 2, 'UnPaid', 7, '0000-00-00 00:00:00', 'July'),
(8, 16, '1658848601', 2, '2022-07-26 15:16:41', 'January', 200, 2, 'UnPaid', 8, '0000-00-00 00:00:00', 'August'),
(9, 16, '1658848601', 2, '2022-07-26 15:16:41', 'January', 200, 2, 'UnPaid', 9, '0000-00-00 00:00:00', 'September'),
(10, 16, '1658848601', 2, '2022-07-26 15:16:41', 'January', 200, 2, 'UnPaid', 10, '0000-00-00 00:00:00', 'October'),
(11, 16, '1658848612', 1, '2022-07-26 15:16:52', 'January', 200, 2, 'UnPaid', 1, '0000-00-00 00:00:00', 'January'),
(12, 16, '1658848612', 1, '2022-07-26 15:16:52', 'January', 200, 2, 'UnPaid', 2, '0000-00-00 00:00:00', 'February'),
(13, 16, '1658848612', 1, '2022-07-26 15:16:52', 'January', 200, 2, 'UnPaid', 3, '0000-00-00 00:00:00', 'March'),
(14, 16, '1658848612', 1, '2022-07-26 15:16:52', 'January', 200, 2, 'UnPaid', 4, '0000-00-00 00:00:00', 'April'),
(15, 16, '1658848612', 1, '2022-07-26 15:16:52', 'January', 200, 2, 'UnPaid', 5, '0000-00-00 00:00:00', 'May'),
(16, 16, '1658848612', 1, '2022-07-26 15:16:52', 'January', 200, 2, 'UnPaid', 6, '0000-00-00 00:00:00', 'June'),
(17, 16, '1658848730', 1, '2022-07-26 15:19:17', 'March', 200, 2, 'Paid', 1, '0000-00-00 00:00:00', 'March'),
(18, 16, '1658848730', 1, '2022-07-26 15:18:50', 'March', 200, 2, 'UnPaid', 2, '0000-00-00 00:00:00', 'April'),
(19, 16, '1658848730', 1, '2022-07-26 15:20:05', 'March', 200, 2, 'Paid', 3, '0000-00-00 00:00:00', 'May'),
(20, 16, '1658848730', 1, '2022-07-26 15:18:50', 'March', 200, 2, 'UnPaid', 4, '0000-00-00 00:00:00', 'June'),
(21, 16, '1658848730', 1, '2022-07-26 15:18:50', 'March', 200, 2, 'UnPaid', 5, '0000-00-00 00:00:00', 'July'),
(22, 16, '1658848730', 1, '2022-07-26 15:18:50', 'March', 200, 2, 'UnPaid', 6, '0000-00-00 00:00:00', 'August'),
(23, 16, '1658854246', 1, '2022-07-26 16:50:46', 'March', 200, 2, 'UnPaid', 1, '0000-00-00 00:00:00', 'March'),
(24, 16, '1658854246', 1, '2022-07-26 16:50:46', 'March', 200, 2, 'UnPaid', 2, '0000-00-00 00:00:00', 'April'),
(25, 16, '1658854246', 1, '2022-07-26 16:50:46', 'March', 200, 2, 'UnPaid', 3, '0000-00-00 00:00:00', 'May'),
(26, 16, '1658854246', 1, '2022-10-07 14:40:12', 'March', 200, 2, 'Paid', 4, '0000-00-00 00:00:00', 'June'),
(27, 16, '1658854246', 1, '2022-07-26 16:50:46', 'March', 200, 2, 'UnPaid', 5, '0000-00-00 00:00:00', 'July'),
(28, 16, '1658854246', 1, '2022-07-26 16:50:46', 'March', 200, 2, 'UnPaid', 6, '0000-00-00 00:00:00', 'August'),
(29, 1, '1658848609', 2, '2022-07-26 15:16:41', 'January', 200, 2, 'UnPaid', 2, '0000-00-00 00:00:00', 'February'),
(30, 1, '16588486099', 2, '2022-07-26 15:16:41', 'January', 200, 2, 'UnPaid', 2, '0000-00-00 00:00:00', 'February');

-- --------------------------------------------------------

--
-- Table structure for table `committe_subscription`
--

CREATE TABLE `committe_subscription` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `committee_num` int(11) NOT NULL,
  `committe_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `committee_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `committee_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposit_request`
--

CREATE TABLE `deposit_request` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(150) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(250) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit_request`
--

INSERT INTO `deposit_request` (`order_id`, `user_id`, `amount`, `date`, `image`, `status`) VALUES
(1, 1, '5000', '2022-10-20 21:39:01', 'image', 'approved'),
(2, 2, '600', '2022-10-06 23:38:14', '', 'approved'),
(3, 2, '5600', '2022-10-08 22:11:00', '', 'rej'),
(4, 3, '700', '2022-10-08 22:13:00', 'select', 'app'),
(5, 4, '9000', '2022-10-08 22:22:00', 'used', 'app'),
(6, 5, '10000', '2022-10-06 23:02:20', 'GOOD', 'verifieed'),
(7, 2, '6000', '2022-10-08 23:28:00', 'yousuf', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(10000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `time`) VALUES
(1, 'C#,Python,Ruby,laravel1', 'C#,Python,Ruby,laravel', '2022-07-21 19:12:34'),
(2, 'Cow,dogs', 'Cow,dogs', '2022-07-15 05:11:03'),
(3, 'What is your First name?', 'Muhammad', '2022-04-04 15:12:22'),
(4, 'What is your last name?', 'Yousuf', '2022-04-04 15:12:22'),
(5, 'what is your name', 'sayf', '2022-07-07 11:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `kyc_approval`
--

CREATE TABLE `kyc_approval` (
  `id` int(11) NOT NULL,
  `applied_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `cnic` int(11) NOT NULL,
  `utility_bill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Unapproved','Approved','Reject','') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kyc_approval`
--

INSERT INTO `kyc_approval` (`id`, `applied_date`, `user_id`, `cnic`, `utility_bill`, `status`) VALUES
(1, '2022-05-17 00:08:44', 1, 0, '1786194895image_picker6509116533986288950.jpg', 'Unapproved'),
(2, '2022-05-25 21:35:53', 5, 5456777, '138894074image_picker1427329030.jpg', 'Unapproved'),
(3, '2022-05-25 21:54:43', 13, 52108, '2139067074image_picker2139608576502456774.jpg', 'Unapproved');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `userid`, `title`, `message`, `date`) VALUES
(4, 2, 'Tree Money', 'Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.', '2022-09-28 19:03:35'),
(5, 2, 'tree money ', 'Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.', '2022-04-28 16:58:58'),
(6, 2, 'tree money ', 'Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.', '2022-04-28 16:58:58'),
(7, 2, 'tree money ', 'Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.', '2022-04-28 16:58:58'),
(8, 2, 'tree money ', 'Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.', '2022-04-28 16:58:58'),
(9, 2, 'tree money ', 'Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.', '2022-04-28 16:58:58'),
(10, 2, 'tree money ', 'Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.', '2022-04-28 16:58:58'),
(11, 2, 'tree money ', 'Refine the plan you’ve created for your clients and make adjustments as lifestyles and goals change.', '2022-04-28 16:58:58'),
(12, 0, 'tuesday', 'new day', '0000-00-00 00:00:00'),
(13, 0, 'Tuesday', 'new day', '2022-09-02 14:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `plan_amount` double NOT NULL,
  `plan_mode` varchar(100) NOT NULL,
  `plan_details` varchar(250) NOT NULL,
  `maturityperiod` varchar(250) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_amount`, `plan_mode`, `plan_details`, `maturityperiod`, `create_time`, `create_by`) VALUES
(1, 2000, '3 Months', 'assanasonasodsfasd', '3 M', '2022-07-17 21:20:32', 0),
(2, 300, '6 Months', 'oamasomasomas', '6 M', '2022-05-13 22:09:03', 0),
(3, 1000, '1 Year', 'asasasas', '1 Y', '2022-05-13 22:09:12', 0),
(4, 2000, '3 Year Plus', 'saasnsaom', '3 Year', '2022-05-13 22:09:24', 0),
(5, 3000, 'Regular Savings', 'saasnsaom', '5 year', '2022-10-07 17:16:20', 0),
(7, 25000, 'BC_6Months', 'feefef', 'good', '2022-10-11 17:30:29', 125125),
(8, 100000, 'BC_10Months', 'efgedgf', 'ewgfweg', '2022-10-31 17:31:35', 45241);

-- --------------------------------------------------------

--
-- Table structure for table `plan_posting`
--

CREATE TABLE `plan_posting` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `plan_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `profit_percent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plan_posting`
--

INSERT INTO `plan_posting` (`id`, `plan_id`, `plan_title`, `date`, `profit_percent`) VALUES
(170, 10, '2Year%%', '2022-10-07 19:19:00', 16),
(171, 7, '1yearplus', '2022-10-01 19:21:00', 16),
(172, 11, '10 MO', '2022-10-14 19:25:00', 19),
(173, 15, '6363', '2022-10-08 19:52:00', 19),
(174, 22, '3month', '2022-10-04 20:00:00', 22),
(175, 23, '', '2022-10-01 20:01:00', 23),
(176, 21, '10Month', '2022-10-08 20:45:00', 21),
(177, 23, '10Month', '2022-10-07 20:47:00', 23),
(178, 47, '12Month', '2022-10-14 20:51:00', 47),
(179, 10, '1YEAR', '2022-10-07 20:55:00', 210),
(180, 50, '1YearPlus', '2022-10-29 20:59:00', 51),
(181, 80, '3Month%', '2022-10-07 21:10:00', 82),
(182, 42, 'sufiyan', '2022-10-08 23:51:00', 87);

-- --------------------------------------------------------

--
-- Table structure for table `plan_user`
--

CREATE TABLE `plan_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `type` enum('sell','purchase') NOT NULL,
  `status` tinyint(1) NOT NULL,
  `amount` float NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan_user`
--

INSERT INTO `plan_user` (`id`, `user_id`, `plan_id`, `type`, `status`, `amount`, `create_date`) VALUES
(1, 1, 1, 'sell', 0, 500, '2022-09-26 18:30:47'),
(2, 1, 1, 'sell', 0, 25, '2022-10-06 18:47:35'),
(3, 1, 4, 'purchase', 0, 5, '2022-05-17 00:05:16'),
(4, 1, 3, 'purchase', 0, 5000, '2022-05-17 00:05:34'),
(5, 3, 1, 'purchase', 0, 5000, '2022-05-17 01:10:03'),
(6, 3, 4, 'purchase', 0, 10000, '2022-05-17 01:10:42'),
(7, 17, 1, 'purchase', 0, 5000, '2022-06-13 02:38:12'),
(8, 2, 1, 'sell', 0, 0, '2022-07-09 19:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `profit`
--

CREATE TABLE `profit` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_input_invest` double NOT NULL,
  `plan_use_amount` double NOT NULL,
  `plan_use_admin_input` double NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reffered_by` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`id`, `user_id`, `reffered_by`, `time`) VALUES
(1, 0, 0, '2022-05-19 12:30:30'),
(2, 0, 0, '2022-05-20 17:13:14'),
(3, 0, 0, '2022-05-20 18:19:56'),
(4, 0, 0, '2022-05-20 23:23:04'),
(5, 0, 0, '2022-05-23 15:46:19'),
(6, 0, 0, '2022-05-23 18:56:28'),
(7, 0, 0, '2022-05-23 22:29:30'),
(8, 0, 0, '2022-05-23 22:40:29'),
(9, 0, 0, '2022-05-24 00:09:48'),
(10, 0, 0, '2022-05-24 18:47:06'),
(11, 0, 0, '2022-05-24 19:54:28'),
(12, 0, 0, '2022-05-24 21:35:02'),
(13, 0, 0, '2022-05-24 21:51:36'),
(14, 0, 0, '2022-05-24 21:55:39'),
(15, 0, 0, '2022-05-25 13:45:14'),
(16, 0, 0, '2022-05-25 18:34:08'),
(17, 0, 0, '2022-05-25 18:44:02'),
(18, 0, 0, '2022-05-25 20:25:14'),
(19, 0, 0, '2022-05-25 20:34:34'),
(20, 0, 0, '2022-05-25 20:46:22'),
(21, 0, 0, '2022-05-25 21:42:11'),
(22, 0, 0, '2022-05-25 21:42:48'),
(23, 0, 0, '2022-05-25 21:43:56'),
(24, 0, 0, '2022-05-25 22:00:30'),
(25, 0, 0, '2022-05-25 22:04:48'),
(26, 0, 0, '2022-05-25 22:34:03'),
(27, 0, 0, '2022-05-25 23:21:14'),
(28, 0, 0, '2022-05-25 23:35:40'),
(29, 0, 0, '2022-07-09 20:40:52'),
(30, 0, 0, '2022-07-09 20:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `token` varchar(250) NOT NULL,
  `referal_id` varchar(100) NOT NULL,
  `profile_image` varchar(250) NOT NULL,
  `login_info` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `social_id` varchar(250) DEFAULT NULL,
  `bankname` varchar(255) DEFAULT NULL,
  `accounttitle` varchar(255) DEFAULT NULL,
  `iban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `create_time`, `name`, `email`, `phone_number`, `password`, `token`, `referal_id`, `profile_image`, `login_info`, `social_id`, `bankname`, `accounttitle`, `iban`) VALUES
(1, '2022-05-28 12:20:42', 'Shahzeb Shahzeb', 'sshahzeb762@gmail.com', '03470216835', NULL, '34ed4cbe33168f4a782b414f0471c3', 'SHAHZ18', '1673715327image_picker7169095324085879498.jpg', '2022-05-28 12:20:42', '108748686512667638205', 'Hbl', 'Sh', '0027829'),
(2, '2022-05-25 23:27:55', 'Muhammad Yousuf', 'muhammad.yousuf786678@gmail.com', '03223087547', NULL, '52b397b474149e25421b0614206d1e', 'MUHAM41', 'https://lh3.googleusercontent.com/a-/AOh14Gg5WSVHXNszn6IcAl-I8pB1ZOUGREpcC0qEtNzL', '2022-05-25 23:27:55', '116702045659236458430', 'Meezan', 'Cash', '536486980808'),
(3, '2022-10-07 17:12:26', 'Hooker Man', 'hookerman3@gmail.com', '154874847', NULL, 'ac885cbdf8b0bb7d3c01f6d2ca9880', 'HOOKE70', 'https://lh3.googleusercontent.com/a-/AOh14Ggl9TbqaYmXJf1Rtk7tcVvbC906jl-mBeWIVAex', '2022-10-07 17:12:26', '110016431408404997007', 'Meezan', NULL, '5454545415415415414'),
(4, '2022-10-07 17:10:20', 'A', 'A@gmail.com', '12345778282', '12345678', '821baf3609791507e6eb30eb92de06', 'JJJ958282', '', '2022-10-07 17:10:20', NULL, 'Meezan', 'null', '256546546458458'),
(5, '2022-05-19 13:03:50', 'shahzeb quantex', 'shahzeb.quantex@gmail.com', NULL, NULL, '3e370c9eb109ae9a3b0c392e1e59d2', 'SHAHZ40', 'null', '2022-05-19 13:03:50', '114185325380483965475', NULL, NULL, NULL),
(6, '2022-05-20 13:15:45', 'GEC C', 'pz.educ@gmail.com', NULL, NULL, '7a26bf3da47094fe99183a512d8841', 'GECC58', 'null', '2022-05-20 13:15:45', '110639213507652789552', NULL, NULL, NULL),
(7, '2022-05-20 23:47:09', 'Sufiyan Khanzada', 'sufiyankhanzada1254@gmail.com', NULL, NULL, '597c8df011e7d588e45aee7a2c4afc', 'SUFIY41', 'https://lh3.googleusercontent.com/a-/AOh14GjJ7MrwWvLD2FdDtUOL_7wzrVpkkszFyAAQBvsEFA', '2022-05-20 23:47:09', '111330217189483349160', NULL, NULL, NULL),
(8, '2022-05-21 02:04:21', 'null', 'ronniespencer.16902@gmail.com', NULL, NULL, 'cfd5ed70399cfe09252ebdfb41b85a', 'NULL71', 'null', '2022-05-21 02:04:21', '114601211552490951607', NULL, NULL, NULL),
(9, '2022-05-23 15:46:04', 'Muhammad Yousuf', 'MuhammadYousuf786678@gmail.com', '03223087547', '12345678', '4f84a1fa1a2362f2392d91778ddf41', 'MUHAM387547', '', '2022-05-23 15:46:04', NULL, NULL, NULL, NULL),
(10, '2022-05-23 22:33:32', 'Muhammad Yousuf', 'muhammadyousufgemini@gmail.com', NULL, NULL, '1d20dccf685c2334a912aa9b1ef15c', 'MUHAM74', 'null', '2022-05-23 22:33:32', '118100136072291488638', NULL, NULL, NULL),
(11, '2022-05-24 00:35:57', 'Shahzeb Naqvi', 'shahzeb.naqvi12@yahoo.com', NULL, NULL, '37b83a5ab8f2a695a5921a40ffb54a', 'SHAHZ93', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=5074663275932730&width=200&ext=1655926556&hash=AeSngkC4d_Wr5Y5NT5E', '2022-05-24 00:35:57', '5074663275932730', NULL, NULL, NULL),
(12, '2022-06-13 13:58:02', 'Waleed Asad', 'null', 'null', NULL, '0aadf5e4164d1b55af07a8f1e9790a', 'WALEE32', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=125581570138316&width=200&ext=1655930516&hash=AeQ0uiOo5qeH5yh1XwY', '2022-06-13 13:58:02', '125581570138316', 'null', 'null', 'null'),
(13, '2022-05-24 18:46:53', 'Admin', 'admin@gmail.com', '03212134568', 'Asad12345', '253a359884dd7266dec7e9630da934', 'ADMIN184568', '', '2022-05-24 18:46:53', NULL, NULL, NULL, NULL),
(14, '2022-05-25 20:53:19', 'Muhammad Yousuf', 'null', NULL, NULL, '994a0dbc147640be7d2892e452dd36', 'MUHAM61', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1631657217212552&width=200&ext=1656085997&hash=AeQM49NM044JOdkmcIc', '2022-05-25 20:53:19', '1631657217212552', NULL, NULL, NULL),
(15, '2022-05-26 02:06:13', 'null', 'nelsonhawkins.77872@gmail.com', NULL, NULL, 'e8902b4f4e696d1a15d77e7b70b2b0', 'NULL51', 'null', '2022-05-26 02:06:13', '113951256139816197276', NULL, NULL, NULL),
(16, '2022-07-08 13:31:12', 'Shahzeb Naqvi', 'shahzeb.naqvi12@gmail.com', NULL, NULL, 'b59bfebf1175c671fa17ca6454d392', 'SHAHZ13', '1079459780image_picker6305156351164404471.jpg', '2022-07-08 13:31:12', '108970029339482958627', NULL, NULL, NULL),
(17, '2022-06-13 02:33:49', 'waleed asad', 'waleedasad27@gmail.com', NULL, NULL, '2ea551dfaa887f5c3b4e12adfc60fb', 'WALEE84', 'null', '2022-06-13 02:33:49', '113253517895012849613', NULL, NULL, NULL),
(18, '2022-07-06 18:54:52', 'Zayn Rajput™', 'zayn.premio@gmail.com', NULL, NULL, 'ab421016168dbdcce91835826b03a4', 'ZAYN85', 'https://lh3.googleusercontent.com/a-/AOh14GjSKU0L_LEsLSnn5sff0bIRevXYsaGdm6tKpi1v9g', '2022-07-06 18:54:52', '115874241006238216664', NULL, NULL, NULL),
(19, '2022-07-09 20:40:41', 'Yousuf ', 'muhammad.yousuf@gmail.com', '03223087541', '12345678', 'ba83b13536a95ddbc2323e56f5aea1', 'YOUSU967541', '', '2022-07-09 20:40:41', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tranaction_type` enum('add','subtract','withdraw','credit','profit','referal') CHARACTER SET utf8 NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` double NOT NULL,
  `image` varchar(250) CHARACTER SET latin1 NOT NULL,
  `status` enum('Pending','Approved','Rejected') NOT NULL,
  `plan_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `user_id`, `tranaction_type`, `time`, `amount`, `image`, `status`, `plan_name`) VALUES
(6, 1, 'withdraw', '2022-09-26 18:02:53', 440, '', 'Approved', 'WAQS'),
(8, 3, '', '2022-10-04 14:25:16', 0, '', '', ''),
(9, 3, 'subtract', '2022-05-17 01:10:03', 5000, '', 'Approved', NULL),
(10, 3, 'subtract', '2022-05-17 01:10:42', 10000, '', 'Approved', NULL),
(11, 3, 'withdraw', '2022-05-17 01:11:19', 5000, '', '', NULL),
(12, 1, 'withdraw', '2022-05-17 18:04:12', 220, '', '', NULL),
(13, 1, 'withdraw', '2022-05-18 19:05:08', 5000, '', '', NULL),
(14, 4, 'credit', '2022-10-07 18:18:44', 10000, '1188631904image_picker1506970370.png', 'Approved', NULL),
(15, 2, 'credit', '2022-10-07 18:18:52', 5000, '641750491image_picker3377935700426616497.png', 'Approved', NULL),
(16, 5, 'profit', '2022-10-07 18:03:01', 222, '47059563image_picker446889438.jpg', 'Pending', NULL),
(17, 13, 'credit', '2022-05-25 22:08:13', 2000, '1279272474image_picker1547995838886968025.jpg', '', NULL),
(18, 5, 'profit', '2022-05-25 22:19:49', 2222, '1431509961image_picker139666235.jpg', 'Approved', NULL),
(19, 2, 'credit', '2022-05-25 23:25:05', 10000, '1757951770image_picker905629837294508778.jpg', '', NULL),
(20, 17, 'credit', '2022-06-13 02:36:49', 50000, '373148835d7163f32-0c1f-4f67-91d2-abcec859d840448735226.jpg', 'Approved', NULL),
(21, 17, 'subtract', '2022-06-13 02:38:12', 5000, '', 'Approved', NULL),
(22, 12, 'credit', '2022-06-28 11:30:10', 22, '1937681731image_picker4523670528166089266.jpg', '', NULL),
(23, 12, 'credit', '2022-07-01 20:18:36', 2000, '1364938632b2cac495-30f0-4d02-aaac-c41e0ecb898c6935248691144377033.jpg', 'Approved', NULL),
(24, 12, 'withdraw', '2022-07-01 20:22:29', 1500, '', 'Approved', NULL),
(25, 2, 'add', '2022-07-09 19:07:49', 0, '', 'Approved', NULL),
(27, 47, 'add', '2022-10-06 14:01:14', 30000, 'Select', 'Approved', '3month'),
(28, 49, 'withdraw', '2022-10-03 14:26:15', 90000, 'TAHIR', 'Rejected', '6MONTH'),
(29, 50, 'credit', '2022-10-10 14:27:09', 25000, 'Never', '', '1Year');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawl_request`
--

CREATE TABLE `withdrawl_request` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdrawl_request`
--

INSERT INTO `withdrawl_request` (`order_id`, `user_id`, `amount`, `date`, `image`, `status`) VALUES
(1, 1, '5000', '2022-10-06 23:35:23', 'Null', 'accept'),
(2, 2, '7000', '2022-10-15 23:32:00', 'good', 'nice'),
(3, 3, '25000', '2022-10-06 23:37:52', 'sufiyan', 'approved'),
(4, 4, '80000', '2022-10-06 23:50:10', 'ff', 'approveddd');

-- --------------------------------------------------------

--
-- Table structure for table `youtubelinks`
--

CREATE TABLE `youtubelinks` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `link` varchar(300) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youtubelinks`
--

INSERT INTO `youtubelinks` (`id`, `title`, `link`, `thumbnail`, `time`) VALUES
(19, 'ABC', 'https://www.youtube.com/watch?v=IPgRobvacUs', 'video-thumbnails/goal-removebg-preview (1).png', '2022-09-26 16:05:32'),
(20, 'Ajwad', 'https://www.youtube.com/watch?v=IPgRobvacUs', 'video-thumbnails/UK-icon-removebg-preview (1).png', '2022-09-26 15:55:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committee_user`
--
ALTER TABLE `committee_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committe_subscription`
--
ALTER TABLE `committe_subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit_request`
--
ALTER TABLE `deposit_request`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kyc_approval`
--
ALTER TABLE `kyc_approval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_posting`
--
ALTER TABLE `plan_posting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_user`
--
ALTER TABLE `plan_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profit`
--
ALTER TABLE `profit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawl_request`
--
ALTER TABLE `withdrawl_request`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `youtubelinks`
--
ALTER TABLE `youtubelinks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `committee_user`
--
ALTER TABLE `committee_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `committe_subscription`
--
ALTER TABLE `committe_subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposit_request`
--
ALTER TABLE `deposit_request`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kyc_approval`
--
ALTER TABLE `kyc_approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plan_posting`
--
ALTER TABLE `plan_posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `plan_user`
--
ALTER TABLE `plan_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profit`
--
ALTER TABLE `profit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `withdrawl_request`
--
ALTER TABLE `withdrawl_request`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `youtubelinks`
--
ALTER TABLE `youtubelinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
