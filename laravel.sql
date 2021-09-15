-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 05:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `catName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catName`) VALUES
(8, 'Seeds'),
(11, 'Farming Instruments'),
(23, 'Furtilizer');

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
(7, '2021_01_04_111937_create_product_requests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `notificationType` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `approval` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `description`, `notificationType`, `name`, `userType`, `approval`) VALUES
(14, 'I need More Products', 'leaveManager', 'arefin101', 'manager', 'accepted'),
(15, 'I Want T Leave', 'Leave Seller', 'Samman', 'seller', 'accepted'),
(16, 'We Need This More', 'More Product', 'Farmer1', 'farmer', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL,
  `expDate` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `imageURL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `category`, `price`, `quantity`, `expDate`, `description`, `imageURL`) VALUES
(55, 'Paddy', 'Seeds', '1200', 200, '12th June', 'Gold Paddy', 'paddy.jpg'),
(56, 'Fieldmaster Massey Fergusson Disc Plough. Agricultural Machinery', 'Farming Instruments', '80000', 5, '30Dec 2021', 'Fieldmaster\r\nMassey Fergusson Disc Plough. Agricultural Machinery(Redm,WHite)', '0000375_mf-disc-ploughs_1000.jpeg'),
(57, 'Govt to procure 30,000 tons bagged urea, 50,000 tons bulk urea fertilizer', 'Furtilizer', '500', 200, '30September', 'Govt to procure 30,000 tons bagged urea, 50,000 tons bulk urea fertilizer', 'bigstock-chemical-plant-urea-fertilizer-373846231-1600865365858.gif'),
(58, 'Mango Seeds', 'Seeds', '50', 30, '4th April', 'Lengra', '169a517ec8b88f953dd6090e14451db4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_requests`
--

CREATE TABLE `product_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_requests`
--

INSERT INTO `product_requests` (`id`, `user`, `category`, `productName`, `quantity`, `approval`, `price`) VALUES
(1, 'me', '1', '1', '1', 'rejected', 1),
(2, 'farmer101', 'Monitor', 'Xiaomi Mi 1C 23.8 Inch Full HD IPS', '1', 'rejected', 12500),
(3, 'farmer101', 'Monitor', '1', '1', 'rejected', 1),
(4, 'farmer101', 'Furtilizer', 'Govt to procure 30,000 tons bagged urea, 50,000 tons bulk urea fertilizer', '1', 'accepted', 500),
(5, 'farmer101', 'Seeds', 'Mango Seeds', '1', 'rejected', 50),
(6, 'farmer102', 'Furtilizer', 'Govt to procure 30,000 tons bagged urea, 50,000 tons bulk urea fertilizer', '1', 'accepted', 500),
(7, 'farmer102', 'Seeds', 'Paddy', '1', 'accepted', 1200),
(8, 'farmer103', 'Seeds', 'Mango Seeds', '1', 'accepted', 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `validity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `userName`, `userType`, `email`, `DOB`, `contact`, `image`, `password`, `validity`) VALUES
(21, 'Shamsul Arefin Khan', 'arefin101', 'manager', 'arefin910@gmail.com', '1997-04-15', '0152772611', 'null', '1234', 'valid'),
(32, 'farmer1', 'farmer101', 'farmer', 'farmer101@gmail.com', '15th April 1997', '01829747029', 'null', '1234', 'valid'),
(36, 'Farmer2', 'farmer102', 'farmer', 'alexmarfee101@gmail.com', '15/5/1999', '01829747029', 'null', '1234', 'valid'),
(37, 'Farmer3', 'farmer103', 'farmer', 'alexmarfee101@gmail.com', '15/5/1999', '01829747029', 'null', '1234', 'valid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_requests`
--
ALTER TABLE `product_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `product_requests`
--
ALTER TABLE `product_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
