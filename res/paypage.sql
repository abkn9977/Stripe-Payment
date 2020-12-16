-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 09:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paypage`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `created_at`) VALUES
('cus_Ia1EHhkiNq6fbL', 'Aftab', 'Ansari', 'abkn9977@gmail.com', '2020-12-16 09:30:34'),
('cus_Ia1L4j32BI477F', 'Red ', 'Bull', 'redbull@gmail.com', '2020-12-16 09:37:52'),
('cus_Ia2NwWc07cMEtv', 'Juned', 'Khan', 'juned@gmail.com', '2020-12-16 10:42:20'),
('cus_Ia2Xc9MsDtGbql', 'Simon', 'Lame', 'lame@gmail.com', '2020-12-16 10:52:00'),
('cus_IZQbPAo5gISIxR', 'Singer', 'Dancer', 'cd@gmail.com', '2020-12-14 19:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `product`, `amount`, `currency`, `status`, `created_at`) VALUES
('ch_1HyHjrAKyiNbhJfo4U7V8x0x', 'cus_IZQbPAo5gISIxR', 'Intro to react course', '5000', 'inr', 'succeeded', '2020-12-14 19:41:30'),
('ch_1HyrBkAKyiNbhJfo5xttQ3Sn', 'cus_Ia1EHhkiNq6fbL', 'Intro to react course', '5000', 'inr', 'succeeded', '2020-12-16 09:30:34'),
('ch_1HyrIoAKyiNbhJfoJ9tW7dgy', 'cus_Ia1L4j32BI477F', 'Intro to react course', '5000', 'inr', 'succeeded', '2020-12-16 09:37:52'),
('ch_1HysJCAKyiNbhJfoBVowmxuK', 'cus_Ia2NwWc07cMEtv', 'Intro to react course', '5000', 'inr', 'succeeded', '2020-12-16 10:42:20'),
('ch_1HysSYAKyiNbhJfoMYSvBMCT', 'cus_Ia2Xc9MsDtGbql', 'Intro to react course', '5000', 'inr', 'succeeded', '2020-12-16 10:52:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
