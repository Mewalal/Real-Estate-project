-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2022 at 09:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` int(50) DEFAULT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `properties_type`
--

CREATE TABLE `properties_type` (
  `id` int(255) NOT NULL,
  `sale` varchar(255) NOT NULL,
  `rent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `propertylist`
--

CREATE TABLE `propertylist` (
  `Id` int(5) NOT NULL,
  `property_title` varchar(50) NOT NULL,
  `land_area` varchar(10) NOT NULL,
  `pro_price` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `soldrent` varchar(10) NOT NULL,
  `kechen` int(10) NOT NULL,
  `hall` int(10) NOT NULL,
  `bedroom` int(10) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `balcony` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertylist`
--

INSERT INTO `propertylist` (`Id`, `property_title`, `land_area`, `pro_price`, `address`, `description`, `image`, `soldrent`, `kechen`, `hall`, `bedroom`, `bathroom`, `balcony`) VALUES
(58, 'land', '500sq fit', '4000000', 'baluwataar', 'road side', 'upload/blog-6.jpg', 'sell', 0, 0, 0, 0, 0),
(60, 'Vilas', '400 sq fit', '100000', 'chitwan', 'good place', 'upload/property-1.jpg', 'rent', 2, 3, 2, 2, 2),
(61, 'house', '200sq fit', '2500000', 'chitwan', 'good place', 'upload/property-11.jpg', 'sell', 2, 3, 6, 2, 1),
(62, 'Apartment', '300sq fit', '4000000', 'hetauda', 'road side', 'upload/recent-property-3.jpg', 'sell', 2, 2, 5, 2, 2),
(63, 'land', '400sq fit', '40,00,000', 'ktm', 'good place', 'upload/bg-photo-1.jpg', 'sell', 0, 0, 0, 0, 0),
(64, 'house', '600sq fit', '50,00,000', 'narayanghat', 'good place', 'upload/blog-3.jpg', 'sell', 3, 3, 5, 2, 2),
(65, 'office', '300sq fit', '40,00,000', 'chitwan', '', 'upload/blog-4.jpg', '', 3, 3, 2, 3, 2),
(66, 'Apartment', '300sq fit', '40,00,000', 'ktm', 'road side', 'upload/blog-6.jpg', 'sell', 2, 2, 4, 2, 2),
(67, 'house', '400sq fit', '30,00,000', 'butwal', 'good place', 'upload/5.jpg', 'sell', 3, 4, 6, 5, 3),
(68, 'house', '300sq fit', '100,00,', '', '', 'upload/blog-3.jpg', '', 5, 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `password2`) VALUES
(2, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(3, 'mohan', 'mohan@gmail.com', 'mohan', 'mohan'),
(15, 'ajay', 'ajay@gmail.com', 'ajay', 'ajay'),
(17, 'rosan', 'rosan@gmail.com', 'rosan', 'rosan'),
(18, 'asd', 'ad@gmail.com', 'asd', 'asd'),
(21, 'ajay', 'admin@gmail.coam', 'admin', 'adminn'),
(32, 'mahes', 'mahes@gmail.com', 'mahes', 'mahes'),
(33, 'sahil shah', 'sahill@gmail.com', 'sahil', 'sahil'),
(34, 'abcd', 'abcd@gmail.com', 'abcd', 'abcd'),
(35, 'ram', 'ram@gmail.com', 'ram', 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties_type`
--
ALTER TABLE `properties_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertylist`
--
ALTER TABLE `propertylist`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `propertylist`
--
ALTER TABLE `propertylist`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
