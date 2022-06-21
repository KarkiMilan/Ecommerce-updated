-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 09:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `PName` varchar(255) NOT NULL,
  `PPrice` varchar(255) NOT NULL,
  `PQuantity` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `Id` int(11) NOT NULL,
  `PName` varchar(255) NOT NULL,
  `PPrice` varchar(255) NOT NULL,
  `PImage` varchar(255) NOT NULL,
  `PCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`Id`, `PName`, `PPrice`, `PImage`, `PCategory`) VALUES
(16, 'Dell Alienware x14', '150000', 'uploadimage/laptop.jpg', 'Laptop'),
(37, 'Acer', '130000', 'uploadimage/acer.jpg', 'Home'),
(38, 'Acer G15', '130000', 'uploadimage/acer.jpg', 'Laptop'),
(39, 'HP Hyper 9', '110000', 'uploadimage/hp.jpg', 'Laptop'),
(40, 'IPhone 11 Mini', '100000', 'uploadimage/iphone11-green-select-2019.jpg', 'Home'),
(41, 'IPhone 11', '125000', 'uploadimage/iphone11-green-select-2019.jpg', 'Mobile'),
(42, 'Samsung Galaxy 8', '95000', 'uploadimage/istockphoto-1213025546-612x612.jpg', 'Mobile'),
(43, 'Huwaie y13 ', '95000', 'uploadimage/nova_9.jpg', 'Mobile'),
(44, 'Carry Bag', '6000', 'uploadimage/5044007-RLR00.jpg', 'Home'),
(45, 'Half Carry Bag', '6000', 'uploadimage/5044007-RLR00.jpg', 'Bag'),
(46, 'School Bag Normal', '7000', 'uploadimage/download.jpg', 'Bag'),
(47, 'School Bag', '3000', 'uploadimage/download (1).jpg', 'Bag'),
(52, 'Dell Vostro ', '95000', 'uploadimage/Dell-Vostro-3400-300x300.jpg', 'Laptop'),
(53, 'XPS 15 Touch Laptop', '115000', 'uploadimage/1615356731zQSa-Slim-3i.jpg', 'Laptop'),
(54, 'Acer Inspiron(2021)', '220000', 'uploadimage/JuW8918307-thumbnail.jpg', 'Laptop'),
(55, 'IPhone 12', '142000 ', 'uploadimage/apple-iphone-12.jpg', 'Mobile'),
(56, 'Samsung Galaxy S10', '85000', 'uploadimage/samsung-galaxy-s10-1.jpg', 'Mobile'),
(57, 'Redmi Note 10', '45000', 'uploadimage/redmi-10-prime-price-in-nepal-654654654456001.jpg', 'Mobile'),
(58, 'Hiking Bag', '7000', 'uploadimage/hiking-bag-15-litre-nh100-blue.jpg', 'Bag'),
(59, 'Pack Duffel Bag', '4000', 'uploadimage/a9a703b8-e899-441d-b23d-a0ed6d06db98.jpg', 'Bag'),
(60, 'Water Proff Bag ', '8500', 'uploadimage/812x12xg60L._UL1404_.jpg', 'Bag');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Number` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`Id`, `Username`, `Email`, `Number`, `Password`) VALUES
(20, 'milan', 'milankarki723@gmail.com', '9841640492', 'user123'),
(21, 'milankarki', 'milankarki23@gmail.com', '9841640492', 'user123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
