-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 10:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `vill_city` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `post_office` varchar(255) DEFAULT NULL,
  `police_station` varchar(255) DEFAULT NULL,
  `pin` varchar(100) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `uid`, `user_id`, `state`, `district`, `vill_city`, `block`, `post_office`, `police_station`, `pin`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'ADRSBB43BAF320240222', 'USER044D554020240222', 'west_bengal', 'Hooghly', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', '712410', '9679377775', '2024-02-22 17:59:14', '2024-02-22 17:59:14'),
(4, 'ADRS1E57372D20240226', 'USERD5EB233F20240226', 'west_bengal', 'howrah', NULL, 'liluah', 'liluah', 'liluah', '700001', '1425879635', '2024-02-26 07:02:00', '2024-02-26 07:02:00'),
(5, 'ADRS5C0CD96C20240229', 'USERC6BBEA7720240229', 'west_bengal', 'hooghly', 'tarakeswar', 'tarakeswar', 'tatakeswar', 'tarakeswar', '712410', '9679377775', '2024-02-29 12:08:09', '2024-02-29 12:08:09'),
(6, 'ADRS9482DB5B20240301', 'USER38DA001F20240301', 'west_bengal', 'Hooghly', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', '712410', '9679377775', '2024-03-01 07:11:36', '2024-03-01 07:11:36'),
(7, 'ADRS9D6197E220240301', 'USERDE77D64620240301', 'west_bengal', 'Hooghly', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', '712410', '9679377775', '2024-03-01 07:13:14', '2024-03-01 07:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `centre`
--

CREATE TABLE `centre` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `franchise_type` varchar(255) DEFAULT NULL,
  `referral_id` varchar(255) DEFAULT NULL,
  `centre_name` varchar(255) DEFAULT NULL,
  `fathers_name` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `centre_place` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `post_office` varchar(255) DEFAULT NULL,
  `police_station` varchar(255) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `total_area` varchar(255) DEFAULT NULL,
  `total_computers` varchar(255) DEFAULT NULL,
  `total_staff` varchar(255) DEFAULT NULL,
  `logo_img` varchar(255) DEFAULT NULL,
  `signature_img` varchar(255) DEFAULT NULL,
  `aadhar_img` varchar(255) DEFAULT NULL,
  `last_qualification_img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centre`
--

INSERT INTO `centre` (`id`, `uid`, `user_id`, `franchise_type`, `referral_id`, `centre_name`, `fathers_name`, `state`, `district`, `centre_place`, `block`, `post_office`, `police_station`, `pincode`, `contact`, `total_area`, `total_computers`, `total_staff`, `logo_img`, `signature_img`, `aadhar_img`, `last_qualification_img`, `created_at`, `updated_at`) VALUES
(3, 'CENTREC9D1D49920240222', 'USER044D554020240222', 'paid(15000)', '123', 'Subhankar Study Centre', 'Sukumar Sharma', 'west_bengal', 'Hooghly', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', '712410', '9679377775', '2000', '50', '28', '/uploads/centre_img/fd5983f2a97e7cc2218ee8091f6c06d2.jpg', '/uploads/centre_img/d50cf05b8e5a86f349c4b32692a8184e.jpg', '/uploads/centre_img/796c9ca8d1574d4ed2b9d07b4296039b.jpg', '/uploads/centre_img/9f69bb49309cd023426aee1ac9acf059.jpg', '2024-02-22 17:59:14', '2024-02-22 17:59:14'),
(4, 'CENTRE6F01986120240301', 'USER38DA001F20240301', 'paid(10000)', '123', 'Subhankar Study Centre', 'Rabindranath Halder', 'west_bengal', 'Hooghly', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', '712410', '9679377775', '2000', '50', '28', '/uploads/centre_img/9a0844a7880c763ee46a633837af4226.jpg', '/uploads/centre_img/6e1c53206cc4df307a2de280e01e9319.jpg', '/uploads/centre_img/9d2590d5854f1034c16e69fb856efe6a.jpg', '/uploads/centre_img/c68ae30fe727c6fbb2a75ed5cc3b2467.jpg', '2024-03-01 07:11:36', '2024-03-01 07:11:36'),
(5, 'CENTREDD2CF8A720240301', 'USERDE77D64620240301', 'paid(15000)', '123', 'Subhankar Study Centre', 'Rabindranath Halder', 'west_bengal', 'Hooghly', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', 'Tarakeswar', '712410', '9679377775', '2000', '50', '28', '/uploads/centre_img/90a41fc21c5d40d89229540ebf1e7e94.jpg', '/uploads/centre_img/a132cbaf50e2752577ab1774800392cd.jpg', '/uploads/centre_img/ed8c3282ff5dcb6857cf1f93058a4e58.jpg', '/uploads/centre_img/5d796abdc2dc584b3a47c05cca0b7bbe.jpg', '2024-03-01 07:13:14', '2024-03-01 07:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_description` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `uid`, `course_name`, `course_description`, `duration`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CRSB4DDE4DE20240227', 'Course 1 edited', 'new course edited', '1year', '/uploads/course_img/a24f6e680efb2f0d247464cfbb952bfb.jpg', 'active', '2024-03-02 09:40:31', '2024-02-27 11:44:33'),
(5, 'CRSBA808CB420240228', 'Course 2', 'course 2', '3month', '/uploads/course_img/471cbe9aa50bd4439e13cc5a4a792cce.jpg', 'active', '2024-03-02 09:37:51', '2024-02-28 07:05:39'),
(6, 'CRSFC3E921720240302', 'Java master', 'Here you can learn java, advance java and its framework springboot.', '6month', '/uploads/course_img/70d71e16a8129959cde245b092233478.jpg', 'active', '2024-03-02 09:37:12', '2024-03-02 09:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `enroled_course`
--

CREATE TABLE `enroled_course` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroled_course`
--

INSERT INTO `enroled_course` (`id`, `uid`, `course_id`, `user_id`, `user_email`, `created_at`, `updated_at`) VALUES
(1, 'ENROLE27F54D520240228', 'CRSBA808CB420240228', 'USERD5EB233F20240226', 'rohit@gmail.com', '2024-02-28 14:04:21', '2024-02-28 14:04:21'),
(2, 'ENROLCDBFF16220240229', 'CRSB4DDE4DE20240227', 'USERC6BBEA7720240229', 'subhankar02@gmail.com', '2024-02-29 12:09:29', '2024-02-29 12:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `get_in_touch`
--

CREATE TABLE `get_in_touch` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `get_in_touch`
--

INSERT INTO `get_in_touch` (`id`, `uid`, `name`, `email`, `phone`, `address`, `message`, `created_at`, `updated_at`) VALUES
(1, 'GNT152A30D120240301', 'Subhankar Sharma', 'subhankar02@gmail.com', '9679377775', 'Tarakeswar, bajitpur, hospital road', NULL, '2024-03-01 10:36:25', '2024-03-01 10:36:25'),
(2, 'GNT160DFC0C20240301', 'SUKUMAR Sharma', 'ram101@gmail.com', '09679244442', 'BAJITPUR', 'hello', '2024-03-01 10:38:49', '2024-03-01 10:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `uid`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'NOT65B87B6D20240227', 'Semester Examination edited', 'All the students are hear by notified that the up coming odd semester will start from next week. edited', 'active', '2024-02-28 06:53:16', '2024-02-27 13:01:31'),
(3, 'NOTF5E9232E20240228', 'Even Semester Examination', 'All the students are hear by notified that the up coming Even semester will start from next week. edited', 'active', '2024-02-28 07:23:41', '2024-02-28 07:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `students_id` varchar(255) DEFAULT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `th_marks` varchar(255) DEFAULT NULL,
  `practical_marks` varchar(255) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  `grand_total` varchar(100) DEFAULT NULL,
  `start_date` varchar(100) DEFAULT NULL,
  `end_date` varchar(100) DEFAULT NULL,
  `parcentage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `uid`, `students_id`, `course_id`, `subject`, `th_marks`, `practical_marks`, `total`, `grand_total`, `start_date`, `end_date`, `parcentage`, `created_at`, `updated_at`) VALUES
(14, 'RS6230AE0820240229', 'USERC6BBEA7720240229', 'CRSBA808CB420240228', 'bengali', '50', '20', '70', '70', '2023-10-02', '2024-03-02', '70', '2024-03-02 09:53:35', '2024-02-29 16:09:10'),
(20, 'RSD2BE12B120240302', 'USERD5EB233F20240226', 'CRSFC3E921720240302', 'bengali', '50', '20', '70', '217', '2023-10-02', '2024-03-02', '72.333333333333', '2024-03-02 09:52:35', '2024-03-02 09:52:35'),
(21, 'RS7A69E44B20240302', 'USERD5EB233F20240226', 'CRSFC3E921720240302', 'Math', '65', '10', '75', '217', '2023-10-02', '2024-03-02', '72.333333333333', '2024-03-02 09:52:35', '2024-03-02 09:52:35'),
(22, 'RSFF307BB720240302', 'USERD5EB233F20240226', 'CRSFC3E921720240302', 'abcd', '52', '20', '72', '217', '2023-10-02', '2024-03-02', '72.333333333333', '2024-03-02 09:52:35', '2024-03-02 09:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `fathers_name` varchar(255) DEFAULT NULL,
  `whatsapp_no` varchar(255) DEFAULT NULL,
  `aadhar` varchar(255) DEFAULT NULL,
  `last_qualification` varchar(255) DEFAULT NULL,
  `passing_year` varchar(100) DEFAULT NULL,
  `marks_in_parcentage` varchar(100) DEFAULT NULL,
  `marks` varchar(100) DEFAULT NULL,
  `exam_board` varchar(255) DEFAULT NULL,
  `aadhar_img` varchar(255) DEFAULT NULL,
  `marksheet_img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `uid`, `user_id`, `fathers_name`, `whatsapp_no`, `aadhar`, `last_qualification`, `passing_year`, `marks_in_parcentage`, `marks`, `exam_board`, `aadhar_img`, `marksheet_img`, `created_at`, `updated_at`) VALUES
(3, 'STU29BA3D2620240226', 'USERD5EB233F20240226', 'Kishore', '9658462314', '658846231425', '12th', '2024-02-08', '84', '420', 'WBBHSE', '/uploads/student_img/b114eb8b1f0f2eec92ce246c29390263.jpg', '/uploads/student_img/0409d9e1bdc01aad09a753a3e9d7fe67.jpg', '2024-02-26 07:02:00', '2024-02-26 07:02:00'),
(4, 'STU18982DA720240229', 'USERC6BBEA7720240229', 'Sukumar Sharma', '9679377775', '658846231425', '12th', '2020-06-10', '84', '420', 'WBBHSE', '/uploads/student_img/842c078eb8dce97d01dc943b66929afa.jpg', '/uploads/student_img/718bfbbd22b85d12558a5b880cf74c46.jpg', '2024-02-29 12:08:09', '2024-02-29 12:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `uid`, `name`, `type`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'TSTMNLF7D293B620240304', 'akash', 'cofounder', 'new cofounder', '/uploads/testimonial_img/63f88eed2d17694edb209d4b67dfcf40.jpg', '2024-03-04 06:17:08', '2024-03-04 06:17:08'),
(2, 'TSTMNL8D1CE89820240304', 'Rohan', 'ceo', 'old ceo', '/uploads/testimonial_img/ab5cf0de00a316c6ac80a523baabf175.jpg', '2024-03-04 06:26:25', '2024-03-04 06:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `name`, `email`, `phone`, `dob`, `img`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(3, 'USER044D554020240222', 'Subhankar Sharma', 'subhankar12@gmail.com', '9679377775', '2024-02-02', '/uploads/users_img/824014ca9870445ebefb95bed3282944.jpg', '25d55ad283aa400af464c76d713c07ad', 'centre', 'inactive', '2024-03-01 18:00:29', '2024-02-22 17:59:14'),
(6, 'USERD5EB233F20240226', 'Rohit Das', 'rohit@gmail.com', '9658462314', '2002-02-15', '/uploads/users_img/b7a0805d67bb5eedcf5fbc796a8cc84a.jpg', '25d55ad283aa400af464c76d713c07ad', 'student', 'active', '2024-03-01 06:12:50', '2024-02-26 07:02:00'),
(7, 'USER2F19232320240226', 'admin', 'admin@gmail.com', '9679377775', '15-01-2002', '/uploads/users_img/', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'active', '2024-02-26 07:17:53', '2024-02-26 07:17:53'),
(8, 'USERC6BBEA7720240229', 'Subhankar Sharma', 'subhankar02@gmail.com', '9679377775', '2002-01-15', '/uploads/users_img/146d282d4e77d93263245740716a61bc.jpg', '25d55ad283aa400af464c76d713c07ad', 'student', 'active', '2024-02-29 12:09:03', '2024-02-29 12:08:09'),
(10, 'USERDE77D64620240301', 'Milan Halder', 'milan25@gmail.com', '9679377775', '2000-10-24', '/uploads/users_img/1a398a667fa9a42266473385244a93c0.jpg', '25d55ad283aa400af464c76d713c07ad', 'centre', 'active', '2024-03-01 07:14:10', '2024-03-01 07:13:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centre`
--
ALTER TABLE `centre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enroled_course`
--
ALTER TABLE `enroled_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `centre`
--
ALTER TABLE `centre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enroled_course`
--
ALTER TABLE `enroled_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
