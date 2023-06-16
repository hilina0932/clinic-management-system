-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 11:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_no` int(8) DEFAULT NULL,
  `access_type` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `fname`, `mname`, `lname`, `gender`, `address`, `phone_no`, `access_type`, `username`, `password`) VALUES
(73, 'gigi', 'girma', 'ah', 'female', 'addis', 67899222, 'Admin', 'giah', 'giah1234'),
(74, 'meski', 'meheret', 'teka', 'female', 'AA', 123456, 'Doctor', 'meteka', 'meteka1234'),
(75, 'sisay', 'mekonnen', 'ka', 'male', 'addis', 67899222, 'Admin', 'sika', 'sika1234');

-- --------------------------------------------------------

--
-- Table structure for table `dbms_db`
--

CREATE TABLE `dbms_db` (
  `user_id` int(20) NOT NULL,
  `fname` int(50) NOT NULL,
  `mname` int(50) NOT NULL,
  `lname` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drug_register`
--

CREATE TABLE `drug_register` (
  `drug_id` int(20) NOT NULL,
  `user_id` int(50) NOT NULL,
  `drug_name` varchar(50) NOT NULL,
  `product_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `quantity` int(50) NOT NULL,
  `requested_quantity` int(50) NOT NULL,
  `new_quantity` int(66) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drug_register`
--

INSERT INTO `drug_register` (`drug_id`, `user_id`, `drug_name`, `product_date`, `exp_date`, `quantity`, `requested_quantity`, `new_quantity`, `date`) VALUES
(6, 0, 'gigi', '2023-06-22', '2024-01-25', 640, 12, 0, '2023-06-06 17:25:39'),
(7, 0, 'ss', '2023-05-31', '2024-05-28', 340, 120, 0, '2023-06-04 08:48:54'),
(8, 0, 'col', '2023-06-22', '2024-04-25', 1000, 0, 0, '2023-06-06 14:32:49'),
(9, 0, 'gggg', '2023-06-07', '2022-09-08', 77, 0, 0, '2023-06-06 17:11:51'),
(10, 0, 'gigi', '2023-06-07', '2022-06-16', 23, 0, 0, '2023-06-06 23:38:15'),
(11, 0, 'mmm', '2023-07-18', '2018-12-11', 12, 0, 0, '2023-06-06 23:43:17'),
(12, 0, 'mmm', '2023-07-18', '2018-12-11', 12, 0, 0, '2023-06-06 23:47:08'),
(13, 0, 'ss', '2023-06-08', '2022-03-08', 12, 0, 0, '2023-06-06 23:47:31'),
(14, 0, 'ss', '2023-05-31', '2021-05-06', 23, 0, 0, '2023-06-07 10:17:25'),
(15, 0, 'gigi', '0000-00-00', '2025-05-29', 0, 0, 0, '2023-06-07 11:10:06'),
(16, 0, 'mmm', '2022-06-21', '2024-02-15', 1000, 0, 0, '2023-06-07 11:16:13'),
(17, 0, 'mmm', '2022-06-21', '2024-02-15', 1000, 0, 0, '2023-06-07 11:18:23'),
(18, 0, 'parastamol', '2023-03-26', '2023-06-09', 1000, 0, 0, '2023-06-07 11:18:39'),
(19, 0, 'paras', '2023-06-01', '2024-11-01', 23, 0, 0, '2023-06-07 11:53:30'),
(20, 0, 'paras', '2023-06-01', '2024-11-01', 23, 0, 0, '2023-06-07 11:55:09'),
(21, 0, 'paras', '2024-02-02', '2022-10-06', 3, 0, 0, '2023-06-07 11:55:46'),
(22, 0, 'meski', '2023-06-21', '2022-10-19', 3, 0, 0, '2023-06-08 10:05:07'),
(23, 0, 'ss', '2023-06-09', '2023-06-23', 0, 0, 0, '2023-06-10 11:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`fname`, `mname`, `lname`, `gender`, `address`, `username`, `password`, `role`) VALUES
('mifta', 'junedin', 'aa', 'male', 'werabe', 'miaa', 'miaa1234', 'manager'),
('hilina', 'mosha', 'gg', 'female', 'addis', 'higg', 'higg1234', 'doctor'),
('girum', 'girma', 'ahmed', 'female', 'werabe', 'giahmed', 'giahmed1234', 'lab'),
('sisay', 'mekonn', 'kab', 'male', 'AA', 'sikab', 'sikab1234', 'nurse'),
('sisay', 'mekonn', 'kab', 'male', 'AA', 'sikab', 'sikab1234', 'nurse'),
('sisay', 'mekonnen', 'kab', 'male', 'aa', 'sikab', 'sikab1234', 'doctor'),
('shumet', 'wolde', 'fff', 'male', 'we', 'shfff', 'shfff1234', 'lab');

-- --------------------------------------------------------

--
-- Table structure for table `lab_prescription`
--

CREATE TABLE `lab_prescription` (
  `user_id` int(40) NOT NULL,
  `card_no` int(50) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `labrequest_id` int(50) NOT NULL,
  `test` text NOT NULL,
  `result` varchar(40) NOT NULL,
  `history` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab_prescription`
--

INSERT INTO `lab_prescription` (`user_id`, `card_no`, `fname`, `mname`, `labrequest_id`, `test`, `result`, `history`, `status`, `date`) VALUES
(0, 6, 'gigi', 'kkk', 61, '', '', 'rrrss', '1', '2023-06-09 23:17:22'),
(0, 1, 'gigi', 'haha', 62, '', '', 'dff', '1', '2023-06-09 23:26:13'),
(0, 5, 'gigi', 'kkk', 63, 'ph.blood', '', 'vbbm', '0', '2023-06-09 23:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `lab_result`
--

CREATE TABLE `lab_result` (
  `user_id` int(20) NOT NULL,
  `result_id` int(20) NOT NULL,
  `card_no` int(50) NOT NULL,
  `result` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `labrequest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `card_no` int(20) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `region` varchar(50) NOT NULL,
  `wereda` varchar(40) NOT NULL,
  `Phone_No` int(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `history` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`card_no`, `stud_id`, `fname`, `mname`, `lname`, `age`, `gender`, `address`, `region`, `wereda`, `Phone_No`, `department`, `history`, `user_id`, `date`) VALUES
(1, '678', 'gigi', 'haha', 'lala', 56, 'female', 'bhhu', 'hujn', 'mnjhb', 9887676, 'computer science', '', 0, '2023-05-27 21:20:52'),
(2, '0148', 'atalo', 'ayenew', 'melese', 24, 'male', 'werabe', 'Amara', 'reee', 67899222, 'computer science', '', 0, '2023-05-30 21:39:35'),
(3, '99', 'meski', 'mehret', 'teka', 24, 'female', 'werabe', 'Amara', 'reee', 2147483647, 'computer science', '', 0, '2023-06-01 11:41:50'),
(4, '33', 'eee', 'ff', 'df', 5, 'female', 'rr', 'fdd', 'tgfr', 965734262, 'computer science', '', 0, '2023-06-04 22:41:01'),
(5, '434', 'gigi', 'kkk', 'tamre', 4, 'female', 'werabe', 'Amara', 'mnjhb', 956544343, '1', '', 0, '2023-06-06 22:42:24'),
(7, '23', 'gigi', 'lili', 'ah', 33, 'female', 'werabe', 'Amara', 'reee', 943434343, '3', '', 0, '2023-06-06 22:47:24'),
(8, '23', 'gigi', 'kkk', 'haha', 4, 'male', 'werabe', 'Amara', 'reee', 67899, 'Sport', '', 0, '2023-06-06 23:02:35'),
(9, '23', 'gigi', 'kkk', 'haha', 4, 'male', 'werabe', 'Amara', 'reee', 67899, 'Sport', '', 0, '2023-06-06 23:03:44'),
(10, '23', 'gigi', 'kkk', 'haha', 4, 'male', 'werabe', 'Amara', 'reee', 67899, 'Sport', '', 0, '2023-06-06 23:04:11'),
(11, '33', 'sisay', 'mekonnen', 'ka', 5, 'female', 'AA', 'fdd', 'tgfr', 965734262, 'computer science', '', 0, '2023-06-09 23:55:48'),
(12, '23', 'gigi', 'kkk', 'haha', 4, 'male', 'werabe', 'hujn', 'reee', 67899, 'It', '', 0, '2023-06-10 11:11:07'),
(13, '23', 'gigi', 'kkk', 'ki', 4, 'female', 'rrrrrrr', 'hujn', 'reee', 987665434, '1', '', 0, '2023-06-10 11:16:19'),
(14, '23', 'hgf', 'ff', 'dd', 33, 'female', 'ffff', 'ggg', 'gg', 123456, '1', '', 0, '2023-06-10 11:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `pharmacyrequest_id` int(50) NOT NULL,
  `drug_id` int(50) NOT NULL,
  `drug_name` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `scale` varchar(50) NOT NULL,
  `new_quantity` int(50) NOT NULL,
  `product_date` date NOT NULL,
  `exp_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`pharmacyrequest_id`, `drug_id`, `drug_name`, `quantity`, `scale`, `new_quantity`, `product_date`, `exp_date`, `date`) VALUES
(35, 0, 'ss', 72, '', 0, '0000-00-00', '2023-06-06 17:00:55', '2023-06-06 17:00:55'),
(36, 0, 'gigi', 5, '', 0, '0000-00-00', '2023-06-04 10:37:05', '2023-06-04 10:37:05'),
(37, 0, 'gigi', 12, '', 0, '0000-00-00', '2023-06-06 17:26:05', '2023-06-06 17:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `pharma_prescription`
--

CREATE TABLE `pharma_prescription` (
  `user_id` int(20) NOT NULL,
  `card_no` int(50) NOT NULL,
  `pharmarequest_id` int(20) NOT NULL,
  `drug_name` varchar(50) NOT NULL,
  `dose` varchar(30) NOT NULL,
  `frequency` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharma_prescription`
--

INSERT INTO `pharma_prescription` (`user_id`, `card_no`, `pharmarequest_id`, `drug_name`, `dose`, `frequency`, `quantity`, `status`, `date`) VALUES
(12, 443, 10, 'ss', 'dff', '4', 12, '', '2023-06-05 20:51:14'),
(1, 1, 11, 'gigi', '77', '4', 2, '', '2023-06-05 20:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(20) NOT NULL,
  `user_id` int(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `scale` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `user_id`, `item_name`, `scale`, `quantity`, `status`, `date`) VALUES
(12, 12, ' alcohol', '500gm', '1000', '', '2023-06-05 11:32:40'),
(13, 2, ' alcohol', 'litter', '3', '', '2023-06-05 18:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('meski', 'Meskimeheret1621@gmail.com', '$2y$10$YQK8lQDGQSRqi9U0m2yX6e0'),
('hani', 'girumgirma56@gmail.com', '$2y$10$W582hJE0r7ztMVL7pcwEKOq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `dbms_db`
--
ALTER TABLE `dbms_db`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `drug_register`
--
ALTER TABLE `drug_register`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `lab_prescription`
--
ALTER TABLE `lab_prescription`
  ADD PRIMARY KEY (`labrequest_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `card_no` (`card_no`);

--
-- Indexes for table `lab_result`
--
ALTER TABLE `lab_result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `card_no` (`card_no`),
  ADD KEY `labrequest_id` (`labrequest_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`card_no`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`pharmacyrequest_id`);

--
-- Indexes for table `pharma_prescription`
--
ALTER TABLE `pharma_prescription`
  ADD PRIMARY KEY (`pharmarequest_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `drug_register`
--
ALTER TABLE `drug_register`
  MODIFY `drug_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lab_prescription`
--
ALTER TABLE `lab_prescription`
  MODIFY `labrequest_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `lab_result`
--
ALTER TABLE `lab_result`
  MODIFY `result_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `card_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `pharmacyrequest_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pharma_prescription`
--
ALTER TABLE `pharma_prescription`
  MODIFY `pharmarequest_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lab_result`
--
ALTER TABLE `lab_result`
  ADD CONSTRAINT `labrequest_id` FOREIGN KEY (`labrequest_id`) REFERENCES `lab_prescription` (`labrequest_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
