-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220528.cc1733a80d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 02:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mainshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_products`
--

CREATE TABLE `all_products` (
  `id` int(50) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `delprice` double NOT NULL,
  `discount` double NOT NULL,
  `ratings` double NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_products`
--

INSERT INTO `all_products` (`id`, `type`, `name`, `brand`, `price`, `delprice`, `discount`, `ratings`, `created_at`, `img`) VALUES
(1, 'freshfood', 'Onions', 'Vegetables', 21, 26.25, 20, 4.5, '2022-05-01 10:33:15.524210', 'freshfoodonion1.1.png'),
(2, '', 'Tomatos', 'Vegetables', 34, 42.5, 20, 4.5, '2022-05-01 10:01:43.581989', 'freshfoodtomato1.1.png'),
(3, '', 'Potatos', 'Vagetables', 30, 37.5, 20, 4.5, '2022-05-01 10:01:43.581989', 'freshfoodpotato1.1.png'),
(4, '', 'Cauliflower (Medium)', 'Vagetables', 22, 27.5, 20, 4.5, '2022-05-01 10:01:43.581989', 'freshfoodcauliflower1.1.png'),
(5, '', 'Capsicum Hybrid Green', 'Vagetables', 69, 86.25, 20, 4.5, '2022-05-01 10:01:43.581989', 'freshfoodcapsicum1.1.png'),
(6, '', 'Bananas', 'Fruits', 104, 130, 20, 4.8, '2022-05-01 10:01:43.581989', 'freshfoodbanana1.1.png'),
(7, '', 'Apples', 'Fruits', 136, 204.1, 33, 4.8, '2022-05-01 10:01:43.581989', 'freshfoodapple1.1.png'),
(8, '', 'Cabbage', 'Vegetables', 11.44, 14.3, 20, 4.5, '2022-05-01 10:01:43.581989', 'freshfoodcabbage1.1.png'),
(9, '', 'Oranges', 'Fruits', 78, 97.5, 20, 4.5, '2022-05-01 10:01:43.581989', 'freshfoodorange1.1.png'),
(10, '', 'Dragon Fruit', 'Fruits', 55.62, 83.2, 33, 4.6, '2022-05-01 10:01:43.581989', 'freshfooddragonfruit1.1.png'),
(16, 'appliances', 'Samsung 7 Kg 5 Star Inverter, Hygiene Steam Fully-Automatic Front Loading Washing Machine', 'Samsung', 29990, 34700, 14, 4.3, '2022-05-01 10:33:36.298909', 'appliances1.1.png'),
(17, 'beauty', 'Park Avenue Voyage Signature Deodorant For Men, 220ml', 'Park Avenue', 214, 299, 28, 4.3, '2022-05-01 10:33:47.234427', 'hygine1.1.png'),
(18, 'electronics', 'Acer Nitro 5 Gaming Laptop/ 12th Gen Intel Core i5-12500H Processor 12 core', 'Acer', 91999, 99999, 8, 4.5, '2022-05-01 10:34:02.802444', 'electronics1.1.png'),
(19, '', 'Ant Esports H530 Wired Over Ear Headphones with mic (Blue)', 'Ant Esports', 1399, 2999, 53, 4.1, '2022-05-01 10:02:18.781947', 'electronics2.1.png'),
(21, 'fashion', 'MEN SHIRT NOVA 14', 'MEN\'S SHIRT', 450, 900, 50, 4.2, '2022-05-01 10:34:18.618150', 'mensclothing1.1.png'),
(22, '', 'MEN SHIRT NOVA 15', 'MEN\'S SHIRT', 450, 999, 50, 4.2, '2022-05-01 10:02:36.852003', 'mensclothing2.1.png'),
(23, '', 'HOODED SHIRTS FOR MEN', 'GIZA COTTON', 499, 1999, 75, 4.6, '2022-05-01 10:02:36.852003', 'summercollection8.1.png'),
(24, '', 'MEN SEA GREEN & WHITE SLIM FIT PRINTED CASUAL SHIRT', 'HIGHLANDER', 571, 1099, 48, 4.5, '2022-05-01 10:02:36.852003', 'summercollection1.1.jpg'),
(25, '', 'SASSAFRAS BROWN & RED GEOMETRIC PRINTED GEORGETTE WRAP CROP TOP', 'SASSAFRAS', 779, 1499, 48, 4.2, '2022-05-01 10:02:36.852003', 'womensclothing3.1.png'),
(26, '', 'WOMEN PEACH-COLOURED EMBROIDERED KURTA WITH PALAZZOS', 'ANOUK', 994, 2099, 55, 4.5, '2022-05-01 10:02:36.852003', 'womensclothing1.1.jpg'),
(27, '', 'GREEN ETHNIC MOTIFS PANELLED PURE COTTON KURTI WITH TROUSERS & DUPATTA', 'LIBAS', 1999, 2999, 60, 4.6, '2022-05-01 10:02:36.852003', 'summercollection4.1.jpg'),
(28, '', 'NAVY BLUE & GREY STANDARD FIT COLOURBLOCKED CASUAL SHIRT', 'CAMPUS SUTRA', 659, 1499, 56, 4.2, '2022-05-01 10:02:36.852003', 'summercollection5.1.jpg'),
(29, '', 'PLAIN LYCRA MEN SHIRT-WHITE', 'NEUTRONS', 824, 3299, 75, 4.5, '2022-05-01 10:02:36.852003', 'summercollection6.1.jpg'),
(36, 'mobiles', 'IQOO 9 Pro 5G (Dark Cruise, 120W FlashCharge,8GB RAM, 256GB Storage) ', 'IQOO', 64990, 74990, 13, 4.9, '2022-05-01 10:34:40.657399', 'mobile1.1.png'),
(37, '', 'Xiaomi 11T Pro 5G Hyperphone (Moonlight White,8GB RAM,256GB Storage)', 'Xiaomi', 41999, 52999, 21, 4.8, '2022-05-01 10:02:53.936956', 'mobile2.1.png'),
(38, '', 'OnePlus 10 Pro 5G (Volcanic Black, 120W FlashCharge,8GB RAM, 128GB Storage)', 'OnePlus', 63649, 66999, 5, 4.7, '2022-05-01 10:02:53.936956', 'mobile3.1.png'),
(39, '', 'Samsung Galaxy S21 FE 5G (Lavender, 120W FastCharge,8GB, 256GB Storage)', 'Samsung', 58999, 69900, 16, 4.5, '2022-05-01 10:02:53.936956', 'mobile4.1.png'),
(43, 'shoes', 'SNEAKERS FOR MEN (MULTICOLOR)', 'STROLLIN', 399, 999, 60, 4.5, '2022-05-01 10:35:01.432478', 'deatailed1.1.jpeg'),
(44, '', 'CASUAL PARTYWEAR OUTDOORS SHOES', 'LAYASA', 398, 999, 60, 4, '2022-05-22 18:21:59.337971', 'deatailed2.1.jpeg'),
(45, '', 'WALKING SHOES FOR MEN (MULTICOLOR)', 'ARIVO', 699, 1999, 65, 4.8, '2022-05-22 18:21:59.763611', 'deatailed3.1.jpeg'),
(46, '', 'RAMBOW FUNKY SHOE FOR GYM', 'ARDEO', 489, 1599, 69, 4.1, '2022-05-22 18:21:59.883527', 'deatailed4.1.jpeg'),
(47, '', 'CASUAL SNEAKERS SHOES FOR MEN SNEAKERS', 'EZDEZARIO', 499, 999, 55, 4.1, '2022-05-22 18:22:00.043614', 'deatailed5.1.jpeg'),
(48, '', '411 CASUAL SNEAKERS FOR MEN (BLACK)', 'NUMENZO', 499, 1999, 75, 4.1, '2022-05-22 18:22:00.065577', 'deatailed6.1.jpeg'),
(49, '', 'CASUALS FOR MEN (MULTICOLOR)', 'MAGNOLIA', 399, 1499, 73, 4.5, '2022-05-01 10:03:10.038016', 'deatailed7.2.jpeg'),
(50, '', 'SHOES FOR MEN (BLACK, GREY)', 'HIDA', 399, 999, 60, 4, '2022-05-22 18:22:00.099483', 'deatailed8.1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `appliances`
--

CREATE TABLE `appliances` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `delprice` double NOT NULL,
  `discount` double NOT NULL,
  `ratings` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`id`, `name`, `img`, `brand`, `price`, `delprice`, `discount`, `ratings`, `created_at`) VALUES
(1, 'Samsung 7 Kg 5 Star Inverter, Hygiene Steam Fully-Automatic Front Loading Washing Machine', 'appliances1.1.png', 'Samsung', 29990, 34700, 14, 4.3, '2022-04-28 13:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `beauty`
--

CREATE TABLE `beauty` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `delprice` double NOT NULL,
  `discount` double NOT NULL,
  `ratings` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beauty`
--

INSERT INTO `beauty` (`id`, `name`, `img`, `brand`, `price`, `delprice`, `discount`, `ratings`, `created_at`) VALUES
(1, 'Park Avenue Voyage Signature Deodorant For Men, 220ml', 'hygine1.1.png', 'Park Avenue', 214, 299, 28, 4.3, '2022-04-28 13:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` int(50) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`id`, `username`, `password`, `first_name`, `last_name`, `gender`, `email`, `address`, `city`, `state`, `zipcode`, `country`) VALUES
(1, 'surajnate', 'surajnate@1234', 'Suraj', 'Nate', 'Male', 'surajnate29@gmail.com', 'Eksar Dongri, Sodawala lane, Samta Nagar, Boriwali(w), Mum-400092', 'Mumbai', 'Maharashtra', 400092, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `delprice` double NOT NULL,
  `discount` double NOT NULL,
  `ratings` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `name`, `img`, `brand`, `price`, `delprice`, `discount`, `ratings`, `created_at`) VALUES
(1, 'Acer Nitro 5 Gaming Laptop/ 12th Gen Intel Core i5-12500H Processor 12 core', 'electronics1.1.png', 'Acer', 91999, 99999, 8, 4.5, '2022-04-28 12:31:11'),
(2, 'Ant Esports H530 Wired Over Ear Headphones with mic (Blue)', 'electronics2.1.png', 'Ant Esports', 1399, 2999, 53, 4.1, '2022-04-28 12:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `delprice` double NOT NULL,
  `discount` double NOT NULL,
  `ratings` double NOT NULL,
  `creted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`id`, `name`, `img`, `brand`, `price`, `delprice`, `discount`, `ratings`, `creted_at`) VALUES
(1, 'MEN SHIRT NOVA 14', 'mensclothing1.1.png', 'MEN\'S SHIRT', 450, 900, 50, 4.2, '2022-04-29 13:36:06'),
(2, 'MEN SHIRT NOVA 15', 'mensclothing2.1.png', 'MEN\'S SHIRT', 450, 999, 50, 4.2, '2022-04-29 13:36:59'),
(3, 'HOODED SHIRTS FOR MEN', 'summercollection8.1.png', 'GIZA COTTON', 499, 1999, 75, 4.6, '2022-04-29 13:37:10'),
(4, 'MEN SEA GREEN & WHITE SLIM FIT PRINTED CASUAL SHIRT', 'summercollection1.1.jpg', 'HIGHLANDER', 571, 1099, 48, 4.5, '2022-04-28 09:54:55'),
(5, 'SASSAFRAS BROWN & RED GEOMETRIC PRINTED GEORGETTE WRAP CROP TOP', 'womensclothing3.1.png', 'SASSAFRAS', 779, 1499, 48, 4.2, '2022-04-28 10:01:06'),
(6, 'WOMEN PEACH-COLOURED EMBROIDERED KURTA WITH PALAZZOS', 'womensclothing1.1.jpg', 'ANOUK', 994, 2099, 55, 4.5, '2022-04-28 10:01:06'),
(7, 'GREEN ETHNIC MOTIFS PANELLED PURE COTTON KURTI WITH TROUSERS & DUPATTA', 'summercollection4.1.jpg', 'LIBAS', 1999, 2999, 60, 4.6, '2022-04-28 10:09:20'),
(8, 'NAVY BLUE & GREY STANDARD FIT COLOURBLOCKED CASUAL SHIRT', 'summercollection5.1.jpg', 'CAMPUS SUTRA', 659, 1499, 56, 4.2, '2022-04-28 10:09:46'),
(9, 'PLAIN LYCRA MEN SHIRT-WHITE', 'summercollection6.1.jpg', 'NEUTRONS', 824, 3299, 75, 4.5, '2022-04-28 10:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `freshfood`
--

CREATE TABLE `freshfood` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `delprice` double NOT NULL,
  `discount` double NOT NULL,
  `ratings` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freshfood`
--

INSERT INTO `freshfood` (`id`, `name`, `img`, `brand`, `price`, `delprice`, `discount`, `ratings`, `created_at`) VALUES
(1, 'Onions', 'freshfoodonion1.1.png', 'Vegetables', 21, 26.25, 20, 4.5, '2022-04-26 04:45:43'),
(2, 'Tomatos', 'freshfoodtomato1.1.png', 'Vegetables', 34, 42.5, 20, 4.5, '2022-04-26 04:45:43'),
(3, 'Potatos', 'freshfoodpotato1.1.png', 'Vagetables', 30, 37.5, 20, 4.5, '2022-04-26 04:45:43'),
(4, 'Cauliflower (Medium)', 'freshfoodcauliflower1.1.png', 'Vagetables', 22, 27.5, 20, 4.5, '2022-04-26 05:10:51'),
(5, 'Capsicum Hybrid Green', 'freshfoodcapsicum1.1.png', 'Vagetables', 69, 86.25, 20, 4.5, '2022-04-26 05:11:09'),
(6, 'Bananas', 'freshfoodbanana1.1.png', 'Fruits', 104, 130, 20, 4.8, '2022-04-26 06:12:01'),
(7, 'Apples', 'freshfoodapple1.1.png', 'Fruits', 136, 204.1, 33, 4.8, '2022-04-26 04:45:43'),
(8, 'Cabbage', 'freshfoodcabbage1.1.png', 'Vegetables', 11.44, 14.3, 20, 4.5, '2022-04-26 04:45:43'),
(9, 'Oranges', 'freshfoodorange1.1.png', 'Fruits', 78, 97.5, 20, 4.5, '2022-04-26 07:05:00'),
(10, 'Dragon Fruit', 'freshfooddragonfruit1.1.png', 'Fruits', 55.62, 83.2, 33, 4.6, '2022-04-26 07:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE `grocery` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `delprice` double NOT NULL,
  `discount` double NOT NULL,
  `ratings` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`id`, `name`, `img`, `brand`, `price`, `delprice`, `discount`, `ratings`, `created_at`) VALUES
(1, 'Fortune Soyabean Oil, 1L Pouch', 'groceryoil.png', 'FORTUNE', 185, 215, 14, 4, '2022-05-28 17:49:00'),
(2, 'Tata Salt, Vacuum Evaporated Iodised, 1kg Pouch', 'grocerysalt.png', 'Tata', 21, 25, 16, 4, '2022-05-28 17:49:08'),
(3, 'Daawat Rozana Super, Naturally Aged, Rich Aroma, Basmati Rice, 5 Kg', 'groceryrice.png', 'DAAWAT', 359, 425, 16, 4, '2022-05-28 17:49:17'),
(4, 'Santoor Sandalwood and Turmeric Bath Soap Combo Offer, 125 g (Pack of 4)', 'grocerysope.png', 'SANTOOR', 174, 190, 8, 4, '2022-05-28 17:49:25'),
(5, 'Bajaj 100% Pure Coconut Oil 600 ml', 'grocerycoconut.png', 'Bajaj', 160, 261, 39, 4, '2022-05-28 17:49:35'),
(6, 'Tide Plus Double Power Detergent Washing Powder Jasmine & Rose 7kg + 3kg FREE', 'grocerydetergent.png', 'Tide', 870, 999, 13, 4, '2022-05-28 17:49:44'),
(7, 'Aashirvaad Shudh Chakki Atta, 5kg Pack, 100 % Whole Wheat Atta, 0% Maida', 'groceryaata.png', 'Aashirvaad', 340, 400, 15, 4, '2022-05-28 17:49:56'),
(8, 'Sunfeast YiPPee! Magic Masala, Instant Noodles (Pack of 12), 810g ​', 'grocerymagiie.png\r\n', 'YiPPee', 130, 144, 10, 4, '2022-05-28 17:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `delprice` double NOT NULL,
  `discount` double NOT NULL,
  `ratings` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `name`, `img`, `brand`, `price`, `delprice`, `discount`, `ratings`, `created_at`) VALUES
(1, 'IQOO 9 Pro 5G (Dark Cruise, 120W FlashCharge,8GB RAM, 256GB Storage) ', 'mobile1.1.png', 'IQOO', 64990, 74990, 13, 4.9, '2022-04-28 11:08:24'),
(2, 'Xiaomi 11T Pro 5G Hyperphone (Moonlight White,8GB RAM,256GB Storage)', 'mobile2.1.png', 'Xiaomi', 41999, 52999, 21, 4.8, '2022-04-28 10:38:15'),
(3, 'OnePlus 10 Pro 5G (Volcanic Black, 120W FlashCharge,8GB RAM, 128GB Storage)', 'mobile3.1.png', 'OnePlus', 63649, 66999, 5, 4.7, '2022-04-28 11:06:17'),
(4, 'Samsung Galaxy S21 FE 5G (Lavender, 120W FastCharge,8GB, 256GB Storage)', 'mobile4.1.png', 'Samsung', 58999, 69900, 16, 4.5, '2022-04-28 11:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `delprice` double NOT NULL,
  `discount` double NOT NULL,
  `ratings` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `name`, `img`, `brand`, `price`, `delprice`, `discount`, `ratings`, `created_at`) VALUES
(1, 'SNEAKERS FOR MEN (MULTICOLOR)', 'deatailed1.1.jpeg', 'STROLLIN', 399, 999, 60, 4.5, '2022-04-26 04:53:28'),
(2, 'CASUAL PARTYWEAR OUTDOORS SHOES', 'deatailed2.1.jpeg', 'LAYASA', 398, 999, 60, 4.1, '2022-04-26 04:53:40'),
(3, 'WALKING SHOES FOR MEN (MULTICOLOR)', 'deatailed3.1.jpeg', 'ARIVO', 699, 1999, 65, 4.8, '2022-04-26 04:53:55'),
(4, 'RAMBOW FUNKY SHOE FOR GYM', 'deatailed4.1.jpeg', 'ARDEO', 489, 1599, 69, 4.2, '2022-04-26 04:54:04'),
(5, 'CASUAL SNEAKERS SHOES FOR MEN SNEAKERS', 'deatailed5.1.jpeg', 'EZDEZARIO', 499, 999, 55, 4.2, '2022-04-26 04:56:41'),
(6, '411 CASUAL SNEAKERS FOR MEN (BLACK)', 'deatailed6.1.jpeg', 'NUMENZO', 499, 1999, 75, 4.2, '2022-04-26 04:56:41'),
(7, 'CASUALS FOR MEN (MULTICOLOR)', 'deatailed7.2.jpeg', 'MAGNOLIA', 399, 1499, 73, 4.5, '2022-04-26 04:59:49'),
(8, 'SHOES FOR MEN (BLACK, GREY)', 'deatailed8.1.jpeg', 'HIDA', 399, 999, 60, 4.1, '2022-04-26 04:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `delprice` double NOT NULL,
  `discount` double NOT NULL,
  `ratings` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `img`, `brand`, `price`, `delprice`, `discount`, `ratings`, `created_at`) VALUES
(1, 'Neulife Badminton Steel Racket with 3 Shuttlecock (Multicolor,Set of 2)', 'batmentan.png', 'Neulife', 220, 399, 45, 3, '2022-05-28 17:00:04'),
(2, 'Adrenex by Flipkart TrainX Football - Size: 5  (Pack of 1, Multicolor)', 'football.png', 'TrainX', 269, 579, 53, 4, '2022-05-28 17:04:55'),
(3, 'PRO GYM Men Cool Dry Compression T-Shirt & Lower for Athletic Workout and Running (Black, Medium)', 'sportsware.jpg', 'PRO GYM', 698, 999, 30, 4, '2022-05-28 17:16:16'),
(4, 'NAVYSPORT Mens Calf Length Cotton Socks - Pack of 3.', 'sportssocks.jpg', 'NAVYSPORT', 259, 599, 57, 4, '2022-05-28 17:20:37'),
(5, 'Gear Statement Maxis Duffel-cum-Backpack 33 Ltrs Black-Yellow Travel Duffle for Gym, Biking, Sport.', 'sportsabag.jpg', 'Gear', 895, 999, 10, 4, '2022-05-28 17:23:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_products`
--
ALTER TABLE `all_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appliances`
--
ALTER TABLE `appliances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beauty`
--
ALTER TABLE `beauty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freshfood`
--
ALTER TABLE `freshfood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grocery`
--
ALTER TABLE `grocery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_products`
--
ALTER TABLE `all_products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `appliances`
--
ALTER TABLE `appliances`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beauty`
--
ALTER TABLE `beauty`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_login`
--
ALTER TABLE `customer_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `freshfood`
--
ALTER TABLE `freshfood`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `grocery`
--
ALTER TABLE `grocery`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



