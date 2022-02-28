-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 05:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyedveh`
--

CREATE TABLE `buyedveh` (
  `bid` int(10) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `fuel` varchar(30) NOT NULL,
  `transmission` varchar(30) NOT NULL,
  `adtitle` varchar(300) NOT NULL,
  `price` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `image` varchar(300) NOT NULL,
  `userbuyed` varchar(30) NOT NULL,
  `datebuyed` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyedveh`
--

INSERT INTO `buyedveh` (`bid`, `brand`, `year`, `fuel`, `transmission`, `adtitle`, `price`, `contact`, `image`, `userbuyed`, `datebuyed`) VALUES
(25, 'Ford Mustang GT', '2010-01-19', 'ELECTRIC', 'Automatic', 'SPortz Car', '5000000', '789145236', 'mustang.jpg', 'ram@gmail.com', '2022-01-07'),
(26, 'Maruthi', '2021', 'DIESEL', 'Automatic', 'New Swift', '700000', '7894561232', 'maruti-swift-.jpg', 'ram@gmail.com', '2022-01-07'),
(27, 'Maruthi', '2018-02-15', 'PETROL', 'Automatic', 'Maruthi Swift VXI', '450000', '8794621233', 'swift.jpg', 'ashik@gmail.com', '2022-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `message`, `username`) VALUES
(14, 'Ram K P', 'Very Good Webstsite \r\nVehicle can be bougt Affordable cost', 'ram@gmail.com'),
(17, 'Ashik K A', 'Very good website for Selling and Buying Second hand Vehicle,\nGenuie Service,Good customer Service\nGood customer Service', 'ashik@gmail.com'),
(18, 'John Connor', 'Good customer Service', 'johnconnor@gmail.com'),
(19, 'Asif KA', 'Bery Good Website', 'asifka9116@gmail.com'),
(20, '', '', 'asifka9116@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `rid` int(11) NOT NULL,
  `vid` int(10) NOT NULL,
  `adtitle` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `kmdriven` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `vehreq` varchar(50) NOT NULL,
  `vehowner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rid`, `vid`, `adtitle`, `brand`, `year`, `kmdriven`, `description`, `price`, `image`, `vehreq`, `vehowner`) VALUES
(112, 72, 'Ford Mustang GT', 'Ford', '2022-01-04', '5000', 'V8 Petrol', '8000000', 'mustang.jpg', 'asifka9116@gmail.com', 'ram@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `selledveh`
--

CREATE TABLE `selledveh` (
  `sid` int(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `kmdriven` varchar(50) NOT NULL,
  `adtitle` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `userbuyed` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dateselled` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selledveh`
--

INSERT INTO `selledveh` (`sid`, `brand`, `year`, `fuel`, `transmission`, `kmdriven`, `adtitle`, `price`, `contact`, `userbuyed`, `image`, `dateselled`) VALUES
(32, 'Ford Mustang GT', '2010-01-19', 'ELECTRIC', 'Automatic', '80000', 'SPortz Car', '5000000', '789145236', 'asifka9116@gmail.com', 'mustang.jpg', '2022-01-07'),
(33, 'Maruthi', '2021', 'DIESEL', 'Automatic', '20000', 'New Swift', '700000', '7894561232', 'asifka9116@gmail.com', 'maruti-swift-.jpg', '2022-01-07'),
(34, 'Maruthi', '2018-02-15', 'PETROL', 'Automatic', '230000', 'Maruthi Swift VXI', '450000', '8794621233', 'asifka9116@gmail.com', 'swift.jpg', '2022-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `id` int(20) NOT NULL,
  `image` varchar(500) NOT NULL DEFAULT 'nodp.jpg',
  `name` varchar(50) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(75) NOT NULL,
  `state` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `usertype` varchar(30) NOT NULL DEFAULT 'user',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`id`, `image`, `name`, `username`, `password`, `cpassword`, `address`, `locality`, `city`, `district`, `state`, `gender`, `mob`, `dob`, `usertype`, `status`) VALUES
(1, 'team6.jpg', 'Asif K A', 'asifka9116@gmail.com', 'qwerty@123A', 'qwerty@123A', 'Kizhakekara', 'Kuruvamoozhy', 'Kanjirapally', 'Kollam', 'Kerala', 'Male', '9495170060', '1981-12-14', 'user', 1),
(2, 'user (6).jpg', 'ram', 'ram@gmail.com', 'ram', 'ram', 'KK', 'Koovapally', 'Koovapally', 'Kottayam', 'Kerala', 'Male', '8211147963', '0000-00-00', 'user', 1),
(3, '', 'admin', 'admin@gmail.com', 'admin', 'admin', '', '', '', '', '', '', '8521479635', '0000-00-00', 'admin', 1),
(23, 'user (3).jpg', 'John Connor', 'johnconnor@gmail.com', 'john', 'john', '24 Street', 'North Avenue', 'Broklyn', 'Broklyn', 'New York', 'Male', '+98 7852 125456', '1994-01-10', 'user', 1),
(30, 'team3.jpg', 'Ashik K A', 'ashik@gmail.com', 'ashik@A1', 'ashik@A1', 'KK', 'Koratty', 'Erumely', 'Kottaym', 'kerala', 'Male', '9846284006', '1986-02-04', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehreg`
--

CREATE TABLE `vehreg` (
  `vid` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `fuel` varchar(20) NOT NULL,
  `transmission` varchar(20) NOT NULL,
  `kmdriven` varchar(20) NOT NULL,
  `noofowner` varchar(20) NOT NULL,
  `adtitle` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(25) NOT NULL,
  `city` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sellername` varchar(60) NOT NULL,
  `sellermob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehreg`
--

INSERT INTO `vehreg` (`vid`, `id`, `brand`, `year`, `fuel`, `transmission`, `kmdriven`, `noofowner`, `adtitle`, `description`, `price`, `state`, `district`, `city`, `image`, `contact`, `username`, `sellername`, `sellermob`) VALUES
(69, 1, 'Hyundai', '2022-01-11', 'DIESEL', 'Automatic', '5000', '2', 'Hyndai Creta SX', '1.6 Litre engine', '200000', 'Kerala', 'Kottayam', 'Erumely', 'pexels-jagmeet-singh-1134857.jpg', '7894561231', 'asifka9116@gmail.com', 'Asif K A', '9495170060'),
(70, 1, 'Ambassador', '1970-01-05', 'DIESEL', 'Manuel', '1000056', '1', 'Ambassador', 'Diesel Ambassador', '50000', 'Himachal Pradesh', 'Bilaspur', 'Bila', 'ambassador.jpg', '8521479635', 'asifka9116@gmail.com', 'Asif K A', '9495170060'),
(71, 2, 'Mini Cooper', '2022-01-04', 'ELECTRIC', 'Automatic', '6000', '2', 'Mini Cooper JTK', 'New Mini Cooper', '80000', 'Assam', 'Baksa', 'Baksa', 'mini.jpg', '8521479633', 'ram@gmail.com', 'ram', '8211147963'),
(72, 2, 'Ford', '2022-01-04', 'DIESEL', 'Automatic', '5000', '1', 'Ford Mustang GT', 'V8 Petrol', '8000000', 'Kerala', 'Alappuzha', 'Alapuzha', 'mustang.jpg', '7852143698', 'ram@gmail.com', 'ram', '8211147963'),
(73, 2, 'Toyata', '2018-12-05', 'DIESEL', 'Automatic', '50000', '2', 'Toyota Etios', '4 new Tyres', '5000060', 'Karnataka', 'Bagalkot', 'Sreehalli', 'Fastest-Modified-Toyota-Etios.jpeg', '8521479636', 'ram@gmail.com', 'ram', '8211147963'),
(75, 2, 'Royal Enfield', '2018-01-15', 'PETROL', 'Manuel', '35000', '1', 'Bullet Standard 500', '500 CC BS4  Engine', '180000', 'Kerala', 'Kottayam', 'Erumely', 'Royal-Enfield-Bullet-500.jpg', '9633572288', 'ram@gmail.com', 'ram', '8211147963'),
(76, 1, 'Maruthi', '2018-12-02', 'CNG & Hybrid', 'Automatic', '420000', '1', 'Maruthi Celerio', 'ZXI Plus AMT', '4200000', 'Karnataka', 'Bangalore Rural', 'Kovala Halli', 'Maruti Celerio.jpg', '8945327913', 'asifka9116@gmail.com', 'Asif K A', '9495170060'),
(79, 30, 'Volkswagen', '2022-02-07', 'PETROL', 'Automatic', '4999', '1', 'Volkswagen Taigun', 'Fuel economy: 16-19 km\r\nEngine: 1.5 L 4-cylinder', '1800000', 'Kerala', 'Alappuzha', 'Alapuzha', 'Taigun-Launch-KV.jpg', '8956231477', 'ashik@gmail.com', 'Ashik K A', '9846284006'),
(80, 30, 'Kia', '2019-02-11', 'DIESEL', 'Automatic', '36000', '1', 'Kia Celtos 2019', 'Mileage : 20 kmpl\r\nEngine : 1493 cc', '900000', 'Tamil Nadu', 'Ariyalur', 'Chennai', 'kia-celtos 2019.jpg', '8745213699', 'ashik@gmail.com', 'Ashik K A', '9846284006'),
(81, 30, 'Maruthi', '1999-01-13', 'PETROL', 'Manuel', '892021', '1', 'Maruthi 800 Ac', 'Avg Mileage	16.1 kmpl\r\nEngine Displacement (cc)	79', '250000', 'Kerala', 'Thiruvananthapuram', 'Neyyattinkara', 'maruthi 800.jpg', '8521479633', 'ashik@gmail.com', 'Ashik K A', '9846284006'),
(83, 30, 'Toyata', '2018-02-14', 'PETROL', 'Automatic', '374998', '1', 'Toyota Etios Liva', 'Mileage : 18.16 to 23.59 kmpl\r\nEngine : 1197 to 13', '500000', 'Goa', 'North Goa', 'Goa', 'estios liva.jpg', '8521479633', 'ashik@gmail.com', 'Ashik K A', '9846284006'),
(92, 23, 'Tata', '2020-01-06', 'PETROL', 'Automatic', '26749', '1', 'TaTa Nexon XM', 'Max Power (bhp@rpm)	108.5bhp@4000rpm', '849998', 'Jammu and Kashmir', 'Anantnag', 'Srinagar', 'tata nexon.jpg', '8521479633', 'johnconnor@gmail.com', 'John Connor', '+98 7852 125456');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wid` int(20) NOT NULL,
  `vid` int(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `kmdriven` varchar(50) NOT NULL,
  `adtitle` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wid`, `vid`, `brand`, `year`, `kmdriven`, `adtitle`, `description`, `city`, `district`, `state`, `price`, `image`, `username`) VALUES
(58, 69, 'hyundai', '2022-01-11', '5000', 'Hyndai Creta SX', '1.6 Litre engine', 'Erumely', 'Kottayam', 'Kerala', '200000', 'pexels-jagmeet-singh-1134857.jpg', 'meera@gmail.com'),
(61, 71, 'Mini Cooper', '2022-01-04', '6000', 'Mini Cooper JTK', 'New Mini Cooper', 'Baksa', 'Baksa', 'Assam', '80000', 'mini.jpg', 'asifka9116@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyedveh`
--
ALTER TABLE `buyedveh`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `vid` (`vid`);

--
-- Indexes for table `selledveh`
--
ALTER TABLE `selledveh`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vehreg`
--
ALTER TABLE `vehreg`
  ADD PRIMARY KEY (`vid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wid`),
  ADD UNIQUE KEY `vid` (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyedveh`
--
ALTER TABLE `buyedveh`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `selledveh`
--
ALTER TABLE `selledveh`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `vehreg`
--
ALTER TABLE `vehreg`
  MODIFY `vid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `vehreg` (`vid`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `vehreg` (`vid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
