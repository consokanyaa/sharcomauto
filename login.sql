-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 06:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `itemname` varchar(20) NOT NULL,
  `itemprice` varchar(20) NOT NULL,
  `discount` int(11) NOT NULL,
  `item_dsc` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemname`, `itemprice`, `discount`, `item_dsc`, `status`) VALUES
(0, 'wheels', '500', 10, '	black in color				', 1),
(1, 'alloywheels', '30', 5, 'Brand:	Inovit\r\nModel:	RD21\r\nColour:	Gold\r\nSize Range: 18\" Only', 1),
(2, 'wheel spanner', '15', 5, 'L Type Wheel 4 size Spanner \r\n- rubber grib \r\n- chrome vanadium \r\n- includes 17x19mm & 21x23mm fittings', 1),
(3, 'steering wheel', '10', 6, 'Finger Grip Destroyer Wheel - 5 spoke, finger grip rim, black center cap, fits 3/4\" tapered shaft. \r\nDiameter: 13. 5\"\r\nStainless Steel ', 1),
(4, 'break pads', '50', 5, 'Weight:	3.99lbs\r\nAnti-Squeal Shims Included:	Yes\r\nBrake Pad Material:	Semi-Metallic\r\nInstallation Hardware Included:	No\r\nPackage Contents:	Brake Pad Set\r\nWear Sensor Type:	None', 1),
(5, 'Tyres', '200', 3, 'Unique tread compound for improved traction in wet and dry conditions\r\n\r\nSpecially designed tread pattern for a reliable and comfortable ride\r\n\r\nPlus the excellence of MICHELIN tyres in longevity and fuel saving', 1),
(6, 'Mounting Points', '200', 4, 'Flippable\r\nIncludes necessary mounting hardware.', 1),
(7, 'Side Mirrors', '40', 5, 'Model	Pajero Mini	Engine Model	4A30T\r\nProduct Name	Right Side Mirror MITSUBISHI Pajero Mini ABA-H58A	Engine Size	661\r\nChassis #	-	Fuel	Gasoline\r\nModel Code	ABA-H58A	Drive	-\r\nRegistration Year/month	2012/4	Auto Parts Maker	99999', 1),
(8, 'Head Lights', '50', 8, 'Certification: CE,RoHS\r\nUsage: Camping,Hiking or camping\r\nPower Source: Rechargeable Battery\r\nLight Source: LED\r\nType: Headlamps\r\nLamp Body Material: ABS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `id` int(10) UNSIGNED NOT NULL,
  `rolename` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`id`, `rolename`, `status`) VALUES
(1, 'Admin', 1),
(2, 'Sales', 1),
(3, 'Customer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `role`, `status`) VALUES
(17, 'Mercy Nkirote', '', 'Mercy', '$2y$10$a8cZOjnl3.JK6.ztPHVoi.9bSbOdtgMhkB3bqk4QwKIQghK57fu8e', 3, 1),
(19, 'ted', '', 'teddy', '$2y$10$h4P8qq7HOE7sqX6pNFtBauWFAOtx4uje9.Ikq/eHEl/dYZ8FcgumG', 3, 1),
(20, 'jon', '', 'jon1', '$2y$10$w5jY0dsfuGKjVL.9EM9VCuGKwqjAN3TLUI2Gp07kubopeKdYABIFq', 2, 1),
(21, 'conso', '', 'coni', '$2y$10$ZcvJ733hWhs2NQ352DZDdeQPXbT/AcW.bdtdyfpx8hBTy8tG1wwC.', 3, 1),
(22, 'michael', 'njihia', 'mike', '$2y$10$uDf6nisYZDUwl8Y3HJxcT.QNvwrO7H0rkcLMaKOKeCx0m1NtXPMAa', 3, 1),
(23, 'sharlyn', 'wanjiku', 'shiks', '$2y$10$Db1Ye7V1JoyHmqveX8vWcOPJZo9pyAtyszXWclzYOK079fRdzkkMG', 1, 1),
(24, 'mutua', 'musyoki', 'mutush', '$2y$10$vdNkP9UzU7tSmWpp.gJ/Zu3CKXKFmU8FRDpDkfcALqsidjiy61yqC', 2, 1),
(25, 'sharlyn', 'wanjiku', 'shi', '$2y$10$B2G9ZuxIAIQ.sYdiDXJ7c.KnXm.9s5ifBblYHKyjabAov5BN75NNW', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
