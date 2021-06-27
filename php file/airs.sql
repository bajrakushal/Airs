-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 08:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `Product_id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `Product_id`, `email`) VALUES
(2, 2, 'ram@gmail.com'),
(3, 2, 'ram@gmail.com'),
(4, 2, 'ram@gmail.com'),
(5, 1, 'ram@gmail.com'),
(6, 1, 'ram@gmail.com'),
(7, 2, 'ram@gmail.com'),
(8, 2, 'ram@gmail.com'),
(9, 1, 'ram@gmail.com'),
(10, 1, 'ram@gmail.com'),
(11, 1, 'ram@gmail.com'),
(12, 1, 'ram@gmail.com'),
(13, 1, 's@gmail.com'),
(14, 1, 's@gmail.com'),
(15, 2, 's@gmail.com'),
(16, 1, 's@gmail.com'),
(17, 2, 's@gmail.com'),
(18, 1, 's@gmail.com'),
(19, 1, 'h@gmail.com'),
(20, 1, 'shrijan@gmail.com'),
(21, 2, 'shrijan@gmail.com'),
(22, 6, 'ku@gmail.com'),
(23, 5, 'ku@gmail.com'),
(24, 5, 'ku@gmail.com'),
(25, 5, 'ku@gmail.com'),
(26, 8, 'ku@gmail.com'),
(51, 11, 'ku@gmail.com'),
(52, 11, 'ku@gmail.com'),
(53, 12, 'ku@gmail.com'),
(56, 14, 'ku@gmail.com'),
(57, 14, 'ku@gmail.com'),
(59, 17, 'ram@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Fine_arts'),
(2, 'collectibles'),
(3, 'Home_decor');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `artist` varchar(200) NOT NULL,
  `price` int(20) DEFAULT NULL,
  `height` int(100) NOT NULL,
  `width` int(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `Name`, `artist`, `price`, `height`, `width`, `description`, `image`, `status`, `category_id`) VALUES
(15, 'Art1 ', 'John Howard', 3000, 25, 34, 'Acrylic on Canvas', 'art.JPG', 'unsold', 1),
(16, 'Ernest Leitz Wetzalr Microscope', 'Assorted Materials', 1650, 7, 8, 'Acrylic on Canvas', 'collection.JPG', 'unsold', 2),
(17, 'Mukhalingas(Pair)', 'Assorted Materials', 1750, 7, 1750, 'Acrylic on Canvas', 'collection1.JPG', 'unsold', 2),
(18, 'Spainsh Vase with Ram Heads', 'Porcelain', 1500, 26, 17, 'Acrylic on Canvas', 'collection2.jpg', 'unsold', 2),
(19, 'Spizixos Canifors- Illustration', '', 600, 135, 10, 'Print on high grade', 'home.jpg', 'unsold', 3),
(20, 'Art2', 'John Howard', 1500, 17, 15, 'Acrylic on Canvas', 'art2.jpg', 'unsold', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `address`, `contact`, `password`, `role`) VALUES
('Kushal', 'ku@gmail.com', 'htd', '98601', '123456', 'seller'),
('ram', 'ram@gmail.com', 'nyc', '981112121', '123', 'buyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
