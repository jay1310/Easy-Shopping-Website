-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 03:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('Jay', 'jayadmin@gmail.com', 'f0e7d0d17cff891edbc9cdf92dcd9297'),
('Admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500'),
('Jay', 'jay@gmail.com', 'f0e7d0d17cff891edbc9cdf92dcd9297');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `section` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `id` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(15) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `name`, `price`, `image`) VALUES
('k1', '3 Piece', 2499, 'k1.jpg'),
('k2', 'Cute Red', 2499, 'k2.jpg'),
('k3', 'Suit', 1999, 'k3.jpg'),
('k4', 'Long', 2199, 'k4.jpg'),
('k5', 'Kurta', 21099, 'k5.jpg'),
('k6', 'Hero', 1799, 'k6.jpg'),
('k7', 'Princess', 3299, 'k7.jpg'),
('k8', 'Red', 2199, 'k8.jpg'),
('k9', 'Yellow', 2199, 'k9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `id` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(15) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`id`, `name`, `price`, `image`) VALUES
('m1', 'Business', 1299, 'men1.jpg'),
('m2', 'Signature', 8999, 'men2.jpg'),
('m3', 'Urban', 4999, 'men3.jpg'),
('m4', 'Professional', 5299, 'men4.jpg'),
('m5', 'Formal', 3299, 'men5.jpg'),
('m6', 'Bollywood', 16999, 'men6.jpg'),
('m7', 'Decent', 2549, 'men7.jpg'),
('m8', 'Half blazer', 4999, 'men8.jpg'),
('m9', 'Shirt', 1299, 'men9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `section` varchar(20) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`section`, `pid`, `name`, `email`, `review`) VALUES
('men', 'm1', 'Jay', 'jay@gmail.com', 'Superb purchase. Very nice and fancy.'),
('men', 'm1', 'Deepak', 'dk@gmail.com', 'Really its awesome purchase. Very nice and fancy.'),
('men', 'm1', 'Rohan', 'rohan@gmail.com', 'Very good product. Thank you so much.'),
('men', 'm1', 'Sohan', 'sohan@gmail.com', 'A bit expensive but very good product. Thank you so much.'),
('men', 'm2', 'Rohan', 'rohan@gmail.com', 'Very good product. Thank you so much.'),
('men', 'm2', 'Jay', 'jay@gmail.com', 'Too good, just loved the product. Highly recommended. Thank you so much.'),
('men', 'm2', 'Sumit', 'sumit@gmail.com', 'Decent product. Go for it if you are looking for decent product.'),
('men', 'm2', 'Deepak', 'dk@gmail.com', 'Really its awesome purchase. Very nice and fancy.'),
('women', 'w1', 'Rohan', 'rohan@gmail.com', 'Very good product. Thank you so much.'),
('women', 'w1', 'Jay', 'jay@gmail.com', 'Too good, just loved the product. Highly recommended. Thank you so much.'),
('women', 'w1', 'Sumit', 'sumit@gmail.com', 'Decent product. Go for it if you are looking for decent product.'),
('women', 'w1', 'Deepak', 'dk@gmail.com', 'Really its awesome purchase. Very nice and fancy.'),
('kids', 'k1', 'Deepak', 'dk@gmail.com', 'Really its awesome purchase. Very nice and fancy.'),
('kids', 'k1', 'Jay', 'jay@gmail.com', 'Too good, just loved the product. Highly recommended. Thank you so much.'),
('kids', 'k1', 'Sumit', 'sumit@gmail.com', 'Decent product. Go for it if you are looking for decent product.'),
('women', 'w2', 'Jay Shrivastava', 'jay@gmail.com', 'Decent product. Go for it if you are looking for decent product.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('Jay Shrivastava', 'jay@gmail.com', 'f0e7d0d17cff891edbc9cdf92dcd9297'),
('Jay', 'j@gmail.com', 'f0e7d0d17cff891edbc9cdf92dcd9297');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(15) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id`, `name`, `price`, `image`) VALUES
('w1', 'Long Blue', 5999, 'w1.jpg'),
('w2', 'Saree1', 5499, 'w2.jpg'),
('w3', 'Party', 4999, 'w3.jpg'),
('w4', 'Printed', 4589, 'w4.jpg'),
('w5', 'Pink', 4999, 'w5.jpg'),
('w6', 'Urban', 7999, 'w6.jpg'),
('w7', 'Dotted', 2999, 'w7.jpg'),
('w8', 'Yellow', 3299, 'w8.jpg'),
('w9', 'Style', 5499, 'w9.jpg'),
('w10', 'Blue', 1299, 'w10.jpg'),
('w11', 'Princess', 7999, 'w11.jpg'),
('w12', 'Silk', 4299, 'w12.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
