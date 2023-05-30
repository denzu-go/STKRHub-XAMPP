-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 30, 2023 at 10:51 AM
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
-- Database: `stkrhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresses`
--

CREATE TABLE `adresses` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `recipient` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adresses`
--

INSERT INTO `adresses` (`address_id`, `user_id`, `contact`, `house_number`, `street`, `city`, `province`, `postal_code`, `recipient`) VALUES
(1, 3, '09215839319', '134 san miguel', 'coloong', 'Valenzuela City', 'metro manila', 1445, 'kevin Ilagan'),
(2, 3, '0941293123', '123', 'asd', 'asdddasd', 'adasdsad', 1445, 'denzel go'),
(5, 4, '0941293123', '134 san miguel', 'coloong', 'Valenzuela City', 'metro manila', 1445, 'kevin Ilagan');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category`, `product_name`, `product_price`, `product_description`) VALUES
(1, 'cards', 'tarrot cards', 200, 'here are the tarrot cards that you can design'),
(2, 'board', '2 fold board', 350, 'here are the tarrot cards that you can design'),
(3, 'box', 'cardboard box', 370, 'here are the tarrot cards that you can design'),
(4, 'token', 'warrior token', 100, 'here are the tarrot cards that you can design');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `username`, `password`) VALUES
(1, '1231', '123', '123@example.com', 'qwerty', '$2y$10$gTiFznWnKLNvfN6oEnaZsuVc9AXkbatiJdrvQqxffOsBPgULLODdi'),
(2, 'denzel', 'go', 'denzelgo@example.com', 'denzel_go', '$2y$10$SpivZ7MkGLiNx6WaNar8C..eLjN4mHXcnAarUB6DH8c04NviNM0/i'),
(3, 'kevin', 'ilagan', 'kevin@example.com', 'pogi', '$2y$10$ysrp8eJsckbfvrSqHMNxxOddU9b2um5037CgTRrnL98mwnIYnqZAC'),
(4, 'john', 'labrador', 'jlabrador@example.com', 'shetsuna02', '$2y$10$ZI3JXFlQztcuKnCv7FB8muQ8RdK1MromQEXX13z7am/ldmadX4Mua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresses`
--
ALTER TABLE `adresses`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresses`
--
ALTER TABLE `adresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adresses`
--
ALTER TABLE `adresses`
  ADD CONSTRAINT `adresses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
