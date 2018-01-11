-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 05:17 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mattress`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_tbl`
--

CREATE TABLE `bill_tbl` (
  `bill_no` int(11) NOT NULL,
  `fk_email_id` varchar(50) NOT NULL,
  `fk_product_id` varchar(50) NOT NULL,
  `amount` double NOT NULL,
  `date` varchar(50) NOT NULL,
  `shipping_address` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_tbl`
--

INSERT INTO `bill_tbl` (`bill_no`, `fk_email_id`, `fk_product_id`, `amount`, `date`, `shipping_address`, `payment_type`) VALUES
(1, 'kumarrajwani31@gmail.com', '3,2,', 2600, '03-07-17', 'new address', 'visa'),
(2, 'kumarrajwani31@gmail.com', '3,2,4,', 4600, '03-07-17', 'new address', 'visa'),
(3, 'kumarrajwani31@gmail.com', '3,2,4,7,', 5600, '03-07-17', 'new address', 'visa'),
(4, 'kumarrajwani31@gmail.com', '3,', 1600, '03-07-17', 'new address', 'visa'),
(5, 'kumarrajwani31@gmail.com', '3,6,', 3100, '03-07-17', 'new address', 'visa');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `cart_id` int(11) NOT NULL,
  `fk_email_id` varchar(50) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`cart_id`, `fk_email_id`, `fk_product_id`, `quantity`) VALUES
(17, 'kumarrajwani31@gmail.com', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`cat_id`, `cat_name`) VALUES
(1, 'classic'),
(2, 'simple'),
(3, 'amazing'),
(4, 'linen'),
(5, 'popular');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `mfg` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  `warrenty` int(11) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `soh` int(11) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `fk_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `pname`, `price`, `mfg`, `color`, `warrenty`, `image1`, `image2`, `image3`, `soh`, `detail`, `fk_cat_id`) VALUES
(2, 'ipsum', 1000, 'bombay dying', 'blue,red', 2, 'images/pi2.jpg', 'images/', 'images/', 10, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut', 1),
(3, 'ipsum 1', 1500, 'alians', 'red', 2, 'images/pi5.jpg', 'images/', 'images/', 10, 'dLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt u', 3),
(4, 'ipsum 2', 2000, 'bombay dying', 'white', 2, 'images/pi.jpg', 'images/', 'images/', 15, 'dLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt u', 2),
(5, 'ipsum 3', 2000, 'ms fabric', 'white', 3, 'images/pi1.jpg', 'images/', 'images/', 10, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut', 4),
(6, 'bombay 4', 1500, 'bombay dying', 'blue', 2, 'images/pi4.jpg', 'images/si.jpg', 'images/', 10, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut', 5),
(7, 'ipsum 5', 1000, 'alians', 'red,white', 1, 'images/pi3.jpg', 'images/', 'images/', 5, 'dLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt u', 1),
(8, 'ipsum 6', 2000, 'ms fabric', 'white', 3, 'images/pic1.jpg', 'images/', 'images/', 5, 'dLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt u', 2),
(9, 'ipsum 7', 2000, 'alians', 'geomatric', 3, 'images/pic2.jpg', 'images/', 'images/', 15, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut', 3),
(10, 'ipsum 8', 2000, 'bombay dying', 'mix', 3, 'images/t4.jpg', 'images/', 'images/', 10, 'dLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt u', 4),
(11, 'ipsum 9', 1500, 'bombay dying', 'pink', 3, 'images/si2.jpg', 'images/', 'images/', 10, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `email` varchar(50) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` varchar(200) NOT NULL,
  `token` varchar(10) NOT NULL,
  `verify` int(11) NOT NULL,
  `user_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`email`, `uname`, `password`, `address`, `mobile_no`, `gender`, `image`, `token`, `verify`, `user_type`) VALUES
('abc@gmail.com', 'bsdks', 'abcabc', 'kjdfnwdj', 73826487, 'female', 'userimg/avatar3.png', 'f18288b44f', 1, 'user'),
('kumar109@gmail.com', 'hfkdghj', 'kumar109', 'nsfkgsjng', 6742, 'male', 'userimg/user8-128x128.jpg', '57aeee35c9', 1, 'user'),
('kumarrajwani1811@gmail.com', 'kumar', 'kumar109', 'address', 8141873476, 'male', 'userimg/johnson.jpg', '', 1, 'admin'),
('kumarrajwani31@gmail.com', 'kumar naresh', 'kumar109', 'new address', 12131313, 'male', 'userimg/kumar.jpg', '8dd291cbea', 1, 'user'),
('shahilmansuri4211@gmail.com', 'sahil', 'shahil4211', 'sahil new address', 234, 'male', 'userimg/kumar4.jpg', 'e863fb23a1', 1, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_tbl`
--
ALTER TABLE `bill_tbl`
  ADD PRIMARY KEY (`bill_no`);

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_tbl`
--
ALTER TABLE `bill_tbl`
  MODIFY `bill_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
