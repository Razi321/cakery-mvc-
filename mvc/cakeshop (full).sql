-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 12:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_code` int(11) NOT NULL,
  `admin_name` varchar(32) NOT NULL,
  `admin_email` varchar(32) NOT NULL,
  `admin_pw` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_code`, `admin_name`, `admin_email`, `admin_pw`) VALUES
(14, 'nidhal', 'nidhal@gmail.com', 'fbca02ade083da41c40a2b6600c51457'),
(45, 'hamdi', 'hamdi@yahoo.com', '2adcb5923c2a96d57070444d5a970777'),
(78, 'khaled', 'khaled@gmail.com', '25114403f1c7c591ee6774fb128684cd');

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `cakeid` varchar(8) NOT NULL,
  `cakename` varchar(32) NOT NULL,
  `price` double NOT NULL,
  `format` varchar(32) NOT NULL,
  `perso` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`cakeid`, `cakename`, `price`, `format`, `perso`) VALUES
('17', 'cupcake', 100, 'meduim', 'no'),
('20', 'muffin', 90, 'large', 'no'),
('24', 'Layer cake\r\n', 25, 'tiny', 'yes'),
('27', 'Birthday cake', 250, 'double', 'no'),
('29', 'apple cake', 45, 'meduim', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `code` varchar(8) NOT NULL,
  `chefname` varchar(32) NOT NULL,
  `cheflastname` varchar(32) NOT NULL,
  `salary` double NOT NULL,
  `expyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`code`, `chefname`, `cheflastname`, `salary`, `expyear`) VALUES
('11', 'tarek', 'yousef', 800, 7),
('14', 'aziz', 'ben moha', 400, 3),
('16', 'seif', 'amor', 1500, 4),
('45', 'ahmed', 'aziz', 740, 4);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `cin` varchar(8) NOT NULL,
  `clientname` varchar(32) NOT NULL,
  `clientemail` varchar(32) NOT NULL,
  `clientpw` varchar(16) NOT NULL,
  `tel` varchar(8) NOT NULL,
  `adress` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cin`, `clientname`, `clientemail`, `clientpw`, `tel`, `adress`) VALUES
('12345678', 'mohamed', 'moahamed@gmail.com', 'a8854a2c3b969bf9', '25666877', 'tunis ,tunis'),
('13005000', 'aziz', 'azzz@gmail.com', 'd79c8788088c2193', '54787888', 'tunis'),
('14520000', 'yesin', 'yesin@gmail.com', 'ab4f63f9ac651525', '71547889', 'tunis'),
('44445678', 'hamza', 'hamza@gmail.com', '7c37be7260f8cd7c', '24777877', 'bizerte,tunis'),
('44845678', 'aziz', 'marwen@gmail.com', 'a77bd33dd0000258', '98155877', 'sousse,tunis'),
('45786232', 'mohamed', 'moahamed.med@gmail.com', '0deffb2644d59612', '54777888', 'tunis ,tunis'),
('47898979', 'azer', 'azer@gmail.com', '8ad37b4df25d5250', '71222544', 'sousse'),
('75845623', 'marwen', 'marwen@gmail.com', '54a88dfe917755b0', '5515583', 'tunis,tunis');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `fb_client` varchar(16) NOT NULL,
  `subject` varchar(16) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `fb_client`, `subject`, `content`) VALUES
(761, 'youssef', 'delivery', 'not what i expected,not that good, some delay '),
(2945, 'hamza', 'prices', 'good prices tho                    '),
(5990, 'youssef', 'prices', 'best prices ever                    '),
(6322, 'marwen', 'quality', 'amazing quality, best cakery ever                    '),
(8735, 'azer', 'prices', 'very good prices                     ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_client` varchar(32) NOT NULL,
  `order_cake` varchar(32) NOT NULL,
  `order_amount` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_adress` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_client`, `order_cake`, `order_amount`, `order_date`, `order_adress`) VALUES
(114, 'azer', 'apple', 5, '2019-05-15', 'sousse'),
(453, 'hamza', 'Layer', 3, '2019-05-16', 'bizerte,tunis'),
(1706, 'mohamed', 'cupcake-', 2, '2019-05-09', 'tunis ,tunis'),
(4961, 'mohamed', 'muffin-', 3, '2019-05-09', 'tunis ,tunis'),
(9232, 'yesin', 'Birthday', 2, '2019-05-16', 'tunis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_code`);

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`cakeid`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cin`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
