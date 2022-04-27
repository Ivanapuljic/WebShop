-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 01:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`) VALUES
(1, 'levis');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `user_id` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product`, `price`, `size`, `quantity`, `user_id`, `status`, `product_id`) VALUES
(137, 'Levis Jeans', '29.99', 'M', 1, 2, 0, 0),
(138, 'Adidas Football', '17.99', 'S', 1, 2, 0, 0),
(139, 'Nike T-Shirt', '20.99', 'S', 1, 2, 0, 0),
(140, 'Levis Jeans', '29.99', 'S', 1, 2, 0, 0),
(141, 'Levis Jeans', '29.99', 'S', 2, 2, 0, 0),
(142, 'Levis Jeans', '29.99', 'M', 1, 2, 0, 0),
(143, 'Nike T-Shirt', '20.99', 'L', 2, 2, 0, 0),
(144, 'Levis Jeans', '29.99', 'M', 1, 2, 0, 0),
(145, 'Levis Jeans', '29.99', 'S', 1, 2, 0, 0),
(146, 'Levis Jeans', '29.99', 'S', 1, 7, 0, 0),
(147, 'Nike T-Shirt', '20.99', 'S', 2, 7, 0, 0),
(148, 'Levis Jeans', '29.99', 'S', 1, 4, 0, 0),
(149, 'Levis Jeans', '29.99', 'S', 1, 4, 0, 0),
(150, 'Levis Jeans', '29.99', 'S', 1, 4, 0, 0),
(151, 'Levis Jeans', '29.99', 'L', 1, 4, 0, 0),
(152, 'Nike T-Shirt', '20.99', 'S', 2, 4, 0, 0),
(153, 'Nike T-Shirt', '20.99', 'S', 1, 4, 0, 0),
(154, 'Levis Jeans', '29.99', 'S', 1, 4, 0, 0),
(157, 'Nike T-Shirt', '20.99', 'S', 1, 4, 0, 0),
(158, 'Zara Dress', '35.99', 'M', 2, 4, 0, 0),
(160, 'Red Skirt', '10.99', 'M', 2, 4, 0, 0),
(161, 'Levis Jeans', '29.99', 'M', 1, 4, 0, 0),
(163, 'Red Skirt', '10.99', 'S', 1, 4, 0, 0),
(177, 'Black Jumpsuit', '25.99', 'S', 2, 4, 0, 0),
(184, 'Levis Jeans', '29.99', 'S', 1, 4, 0, 0),
(186, 'Nike T-Shirt', '20.99', 'S', 1, 4, 0, 0),
(188, 'Nike T-Shirt', '20.99', 'S', 2, 4, 0, 0),
(189, 'Nike T-Shirt', '20.99', 'M', 1, 0, 1, 0),
(190, 'Tracksuit Top', '17.99', 'S', 1, 0, 1, 0),
(193, 'Striped T-Shirt', '10.99', 'L', 1, 5, 0, 0),
(194, 'Levis Jeans', '29.99', 'S', 1, 5, 1, 0),
(196, 'Levis Jeans', '29.99', 'S', 1, 1, 0, 0),
(201, 'Nike T-Shirt', '20.99', 'S', 1, 1, 0, 0),
(202, 'Zara Dress', '35.99', 'S', 1, 1, 0, 0),
(203, 'Striped T-Shirt', '10.99', 'S', 1, 1, 0, 0),
(204, 'Nike T-Shirt', '20.99', 'S', 1, 1, 0, 0),
(205, 'Nike T-Shirt', '20.99', 'S', 1, 1, 0, 0),
(206, 'Striped T-Shirt', '10.99', 'S', 1, 1, 0, 0),
(207, 'Levis Jeans', '29.99', 'S', 2, 1, 0, 0),
(208, 'Striped T-Shirt', '10.99', 'S', 12, 1, 0, 0),
(209, 'Zara Dress', '35.99', 'S', 1, 1, 0, 0),
(210, 'Striped T-Shirt', '10.99', 'S', 1, 1, 0, 0),
(211, 'Nike T-Shirt', '20.99', 'S', 2, 1, 0, 0),
(212, 'Levis Jeans', '29.99', 'S', 1, 1, 0, 0),
(213, 'Nike T-Shirt', '20.99', 'S', 1, 1, 0, 0),
(214, 'Zara Dress', '35.99', 'S', 123, 1, 0, 0),
(215, 'Zara Dress', '35.99', 'S', 1, 1, 0, 0),
(216, 'Zara Dress', '35.99', 'S', 1, 1, 0, 0),
(217, 'Striped T-Shirt', '10.99', 'S', 2, 1, 0, 0),
(218, 'Nike T-Shirt', '20.99', 'S', 1, 1, 0, 0),
(219, 'Nike T-Shirt', '20.99', 'S', 1, 1, 0, 0),
(220, 'Zara Dress', '35.99', 'S', 2, 1, 0, 0),
(221, 'Nike T-Shirt', '20.99', 'S', 2, 1, 0, 0),
(222, 'Striped T-Shirt', '10.99', 'S', 1, 1, 0, 0),
(223, 'Nike T-Shirt', '20.99', 'L', 6, 1, 0, 0),
(224, 'Nike T-Shirt', '20.99', 'S', 1, 1, 0, 0),
(225, 'Nike T-Shirt', '20.99', 'S', 1, 1, 0, 0),
(226, 'Levis Jeans', '29.99', 'S', 1, 1, 0, 0),
(227, 'Zara Dress', '35.99', 'S', 1, 1, 0, 0),
(228, 'Striped T-Shirt', '10.99', 'S', 2, 1, 0, 0),
(229, 'Nike T-Shirt', '20.99', 'S', 1, 1, 0, 0),
(230, 'Levis Jeans', '29.99', 'S', 1, 1, 0, 0),
(231, 'Nike T-Shirt', '20.99', 'S', 1, 1, 0, 0),
(242, 'Black Jumpsuit', '25.99', 'M', 1, 1, 0, 11),
(243, 'Nike T-Shirt', '20.99', 'S', 2, 1, 0, 6),
(244, 'Black Jumpsuit', '25.99', 'S', 1, 1, 0, 11),
(245, 'Black Shirt', '20.99', 'S', 3, 1, 0, 18),
(246, 'Nike T-Shirt', '20.99', 'S', 1, 1, 0, 6),
(247, 'Striped T-Shirt', '10.99', 'S', 1, 1, 0, 8),
(248, 'Zara Dress', '35.99', 'S', 1, 1, 0, 7),
(249, 'Nike T-Shirt', '20.99', 'S', 2, 1, 0, 6),
(250, 'Red Skirt', '10.99', 'S', 2, 1, 0, 10),
(251, 'Nike T-Shirt', '20.99', 'S', 1, 4, 0, 6),
(252, 'Striped T-Shirt', '10.99', 'S', 2, 4, 0, 8),
(253, 'abc', '15.00', 'S', 1, 1, 0, 22);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `url`) VALUES
(1, 'T-Shirts', 'tshirt.php'),
(2, 'Tracksuits', 'tracksuit.php'),
(5, 'Jeans', 'jeans.php'),
(6, 'Dresses', 'dress.php'),
(7, 'Shirts', 'shirt.php'),
(8, 'Jackets', 'jacket.php'),
(9, 'Skirts', 'skirt.php'),
(10, 'Jumpsuits', 'jumpsuit.php');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`) VALUES
(35, 1),
(36, 1),
(37, 1),
(39, 1),
(38, 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `list_price` decimal(10,2) NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT '0',
  `sizes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `list_price`, `brand`, `category`, `image`, `description`, `featured`, `sizes`) VALUES
(1, 'Levis Jeans', '29.99', '39.99', 'Levi\'s', '5', '/webshop/images/levisjeans.jpg', 'These iconic Levi\'s jeans come with the brand\'s signature wedgie silhouette for a fit that hugs your waist and hips. A faded wash adds a vintage-inspired feel to the laid-back style.', 1, 'S:5,M:6,L:8'),
(6, 'Nike T-Shirt', '20.99', '30.99', 'Nike', '1', '/webshop/images/nike.jpg', 'The Nike Sportswear NSW T-Shirt has a bold, fresh take on our classic logo. It\'s made with soft, breathable cotton to keep you comfortable.', 1, 'S:7,M:8,L:10'),
(7, 'Zara Dress', '35.99', '42.99', 'Zara', '6', '/webshop/images/dress.jpg', 'This dress features a floral fabric with a pleated skirt, plunge neckline and tie waist, style with strappy heels for a feminine look that will gain compliments.', 1, 'S:5;M:6;L:8'),
(8, 'Striped T-Shirt', '10.99', '15.99', 'Stradivarius', '1', '/webshop/images/shirt.jpg', 'A simple t-shirt dress is essential in any wardrobe and we are obsessing over this monochrome style. Featuring a bold stripe material and an oversized fit, team it with an oversized denim jacket for a chilled but chic look.', 1, 'S:3;M:5;L:7'),
(9, 'Black Denim Jacket', '25.99', '30.99', 'Zara', '8', '/webshop/images/denim_jacket.jpg', 'Rock some fabulous denim with this jacket. Featuring a bang on trend oversized fit, dreamy distressed look and raw edge finish. This jacket is a wardrobe staple and needs to purchased immediately! Style over your favourite outfit to give it an edgy look.', 1, 'S:5'),
(10, 'Red Skirt', '10.99', '17.99', 'Pull&Bear', '9', '/webshop/images/skirt.jpg', 'Add a pop of colour to your look with this a-line mini. Featuring a red denim material with bronze button fastening and a thigh-skimming length, team it with a slogan tee and heeled boots for a look we\'re loving ', 1, 'M:7'),
(11, 'Black Jumpsuit', '25.99', '30.99', 'Zara', '10', '/webshop/images/jumpsuit.jpg', 'Give your weekend wardrobe a new all-in-one with this jumpsuit. Featuring a black figure-hugging fabric, a one shoulder drape neckline and a wide leg fit, just add some strappy heels and statement earrings for a look we\'re loving.', 1, 'L:8'),
(12, 'Tracksuit Top', '17.99', '25.99', 'Bershka', '2', '/webshop/images/tracksuit_top.jpg', 'Get the ultimate 80\'s vibes in this fire tracksuit top. Featuring a black material with contrasting nude and red panels, a zip-up front and a cropped length, team it with the matching joggers and strappy heels for a weekend style.', 1, 'M:8'),
(18, 'Black Shirt', '20.99', '15.99', 'Stradivarius', '7', '/webshop/images/shirt1.jpg', 'Oversized shirts are perfect to dress your look up or down. Featuring a black cotton material with a button fastening and an oversized fit. Team this with your fave jeans and strappy heels for day drinks with your bestie.', 1, 'S:5; M:6; L:7'),
(22, 'Black Dress', '30.99', '25.99', 'Zara', '6', '/webshop/images/dress1.jpg', 'This blazer dress will give you a fierce look with tons of attitude. Featuring a classic black fabric with an asymmetric design and gold button detailing, style with gold heels and a pendant necklace for a chic weekend vibe.', 1, 'M:8');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `size` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`product_id`, `order_id`, `size`, `quantity`) VALUES
(6, 36, 'S', 2),
(6, 38, 'S', 1),
(7, 35, 'S', 1),
(8, 35, 'S', 1),
(8, 38, 'S', 2),
(10, 37, 'S', 2),
(22, 39, 'S', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_number` int(10) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_address`, `city`, `post_number`, `role`) VALUES
(1, 'ivanapuljic', '12345', 'Ivana', 'PuljiÄ‡', 'ivana@gmail.com', 'abc abc', 'osijek', 0, ''),
(4, 'ivana', '12345', 'Ivana', 'Puljic', 'ivana@gmail.com', 'abc abc', '', 0, ''),
(5, 'ivana.puljic', '12345', 'Ivana', 'PuljiÄ‡', 'ivana@gmail.com', 'abc abc', 'abc', 12345, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`product_id`,`order_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_order_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `product_order_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_order_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_order_ibfk_5` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
