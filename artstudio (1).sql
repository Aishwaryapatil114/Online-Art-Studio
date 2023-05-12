-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 07:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artstudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `art_id` varchar(20) NOT NULL,
  `artist_id` varchar(30) NOT NULL,
  `art_height` int(20) NOT NULL,
  `art_width` int(20) NOT NULL,
  `art_title` text NOT NULL,
  `art_desc` text NOT NULL,
  `art_price` int(30) NOT NULL,
  `art_color` text NOT NULL,
  `art_weight` int(20) NOT NULL,
  `art_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` varchar(30) NOT NULL,
  `artist_name` text NOT NULL,
  `artist_specia` text NOT NULL,
  `artist_birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artsupplies`
--

CREATE TABLE `artsupplies` (
  `artsupp_id` varchar(30) NOT NULL,
  `artsupp_type` text NOT NULL,
  `artsupp_price` int(40) NOT NULL,
  `art_brand` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `offer_id` varchar(40) NOT NULL,
  `order_id` varchar(40) NOT NULL,
  `bill_price` int(30) NOT NULL,
  `bill_time` time(6) NOT NULL,
  `bill_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exhibition`
--

CREATE TABLE `exhibition` (
  `e_num` varchar(30) NOT NULL,
  `e_time` time(6) NOT NULL,
  `e_date` date NOT NULL,
  `e_addr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` varchar(30) NOT NULL,
  `offer_dura` int(20) NOT NULL,
  `offer_rate` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `order_id` varchar(30) NOT NULL,
  `order_type` text NOT NULL,
  `order_price` int(20) NOT NULL,
  `order_quan` int(30) NOT NULL,
  `order_sup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supp_id` varchar(30) NOT NULL,
  `supp_name` text NOT NULL,
  `supp_loca` text NOT NULL,
  `supp_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(100) NOT NULL,
  `user_first` text NOT NULL,
  `user_last` text NOT NULL,
  `user_birth` date NOT NULL,
  `user_addr` varchar(100) NOT NULL,
  `user_city` text NOT NULL,
  `user_cont` bigint(40) NOT NULL,
  `user_gender` text NOT NULL,
  `user_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_first`, `user_last`, `user_birth`, `user_addr`, `user_city`, `user_cont`, `user_gender`, `user_pass`) VALUES
('', '', '', '0000-00-00', '', '', 0, 'male', ''),
('Aish114', 'Aishwarya', 'Patil', '2001-12-22', '19 b vaibhav nagar ', 'Dhule', 7620635123, 'female', '114114');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` text NOT NULL,
  `apiKey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`art_id`),
  ADD KEY `artid` (`artist_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `artsupplies`
--
ALTER TABLE `artsupplies`
  ADD PRIMARY KEY (`artsupp_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `userid` (`user_id`),
  ADD KEY `offid` (`offer_id`),
  ADD KEY `orderid` (`order_id`);

--
-- Indexes for table `exhibition`
--
ALTER TABLE `exhibition`
  ADD PRIMARY KEY (`e_num`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `art`
--
ALTER TABLE `art`
  ADD CONSTRAINT `artid` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `offid` FOREIGN KEY (`offer_id`) REFERENCES `offer` (`offer_id`),
  ADD CONSTRAINT `orderid` FOREIGN KEY (`order_id`) REFERENCES `order1` (`order_id`),
  ADD CONSTRAINT `userid` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
