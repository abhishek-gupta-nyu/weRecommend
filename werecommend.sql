-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 02:25 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `werecommend`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`) VALUES
(1, 'ALARM CLOCK BAKELIKE RED'),
(2, 'ALARM CLOCK BAKELIKE GREEN'),
(3, 'PINK REGENCY TEACUP AND SAUCER'),
(4, 'GREEN REGENCY TEACUP AND SAUCER'),
(5, 'ROSES REGENCY TEACUP AND SAUCER'),
(6, 'JUMBO BAG RED RETROSPOT'),
(7, 'JUMBO  BAG BAROQUE BLACK WHITE'),
(8, 'JUMBO BAG PINK POLKADOT'),
(9, 'JUMBO SHOPPER VINTAGE RED PAISLEY'),
(10, 'JUMBO STORAGE BAG SUKI'),
(11, 'LUNCH BAG  BLACK SKULL.'),
(12, 'LUNCH BAG RED RETROSPOT'),
(13, 'ALARM CLOCK BAKELIKE PINK'),
(14, 'SPACEBOY LUNCH BOX'),
(15, 'DOLLY GIRL LUNCH BOX'),
(16, 'PLASTERS IN TIN SPACEBOY'),
(17, 'PLASTERS IN TIN CIRCUS PARADE'),
(18, 'PLASTERS IN TIN WOODLAND ANIMALS'),
(19, 'SET of 6 RED SPOTTY PAPER CUPS'),
(20, 'SET of 20 RED RETROSPOT PAPER NAPKINS'),
(21, 'SET of 6 RED SPOTTY PAPER PLATES'),
(22, 'ROUND SNACK BOXES SET OF 4 FRUITS'),
(23, 'ROUND SNACK BOXES SET OF 4 WOODLAND'),
(24, 'RED RETROSPOT CHARLOTTE BAG'),
(25, 'WOODLAND CHARLOTTE BAG');

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE `recommend` (
  `recommend_id` int(11) NOT NULL,
  `antecedent_id` int(11) NOT NULL,
  `consequent_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommend`
--

INSERT INTO `recommend` (`recommend_id`, `antecedent_id`, `consequent_id`, `country_id`) VALUES
(1, 1, 2, 1),
(2, 2, 1, 1),
(3, 3, 4, 1),
(4, 4, 3, 1),
(5, 4, 5, 1),
(6, 5, 4, 1),
(7, 6, 7, 1),
(8, 7, 6, 1),
(9, 6, 8, 1),
(10, 8, 6, 1),
(11, 6, 9, 1),
(12, 9, 6, 1),
(13, 6, 10, 1),
(14, 10, 6, 1),
(15, 11, 12, 1),
(16, 12, 11, 1),
(17, 18, 17, 2),
(18, 17, 18, 2),
(19, 22, 17, 2),
(20, 17, 22, 2),
(21, 23, 17, 2),
(22, 17, 23, 2),
(23, 16, 18, 2),
(24, 18, 16, 2),
(25, 23, 18, 2),
(26, 18, 23, 2),
(27, 24, 25, 2),
(28, 25, 24, 2),
(29, 23, 22, 2),
(30, 22, 23, 2),
(31, 23, 14, 2),
(32, 14, 23, 2),
(33, 23, 25, 2),
(34, 25, 23, 2),
(35, 2, 13, 3),
(36, 13, 2, 3),
(37, 1, 2, 3),
(38, 2, 1, 3),
(39, 1, 13, 3),
(40, 13, 1, 3),
(41, 14, 15, 3),
(42, 15, 14, 3),
(43, 16, 17, 3),
(44, 17, 16, 3),
(45, 18, 17, 3),
(46, 17, 18, 3),
(47, 16, 18, 3),
(48, 18, 16, 3),
(49, 19, 20, 3),
(50, 20, 19, 3),
(51, 21, 20, 3),
(52, 20, 21, 3),
(53, 19, 21, 3),
(54, 21, 19, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`recommend_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `recommend`
--
ALTER TABLE `recommend`
  MODIFY `recommend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
