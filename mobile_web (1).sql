-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 07:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(30) DEFAULT NULL,
  `contactno` int(10) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageID` int(11) DEFAULT NULL,
  `imagename` varchar(50) DEFAULT NULL,
  `file_path` varchar(300) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageID`, `imagename`, `file_path`, `description`) VALUES
(1, 'samsung_S24', '../Img/samsung_S24.jpg', 'S24'),
(2, 'samsung_S22n', '../Img/samsung_S22n.jpg', 'S22'),
(3, 'galaxy-s24-ultra-1', '../Img/galaxy-s24-ultra-1.jpg', 'S24Ultra'),
(4, 'S24', '../Img/S24.jpg', 'Gs24'),
(5, 'Z fold5', '../Img/Z fold5.jpg', 'Samsung Z fold5'),
(6, 'Samsung-Galaxy-Z-Flip-5', '../Img/Samsung-Galaxy-Z-Flip-5.jpg', 'Flip 5'),
(7, 'Samsung Galaxy A55-500x500', '../Img/Samsung Galaxy A55-500x500.jpg', 'A55'),
(8, 'A35', '../Img/A35.jpg', 'galaxy A35'),
(9, 'Samsung-Galaxy-A25-5G-Fantasy-Blue', '../Img/Samsung-Galaxy-A25-5G-Fantasy-Blue.jpg', 'A25'),
(10, 'MBPSSM-M556BLGASLK-S-1--1730187495', '../Img/MBPSSM-M556BLGASLK-S-1--1730187495.jpg', 'M55'),
(11, 'Samsung Galaxy M35-500x500', '../Img/Samsung Galaxy M35-500x500.jpg', 'M35'),
(12, 'Samsung-Galaxy-F55-5G', '../Img/Samsung-Galaxy-F55-5G.jpg', 'F55'),
(13, 'xiaomi-redmi-note4-sn-3', '../Img/xiaomi-redmi-note4-sn-3.jpg', 'redmi note 4'),
(14, 'Xiaomi-Redmi-Note-13-Pro-Plus-5G-8GB-RAM-256GB', '../Img/Xiaomi-Redmi-Note-13-Pro-Plus-5G-8GB-RAM-256GB.jpg', 'redmi 13 pro +'),
(15, '366831', '../Img/366831.jpg', 'redmi 13 pro'),
(16, 'Redmi Note 13 5G', '../Img/images.jpg', 'redmi 13'),
(17, 'Redmi 13C', '../Img/-original-imahfk4xenbzxwrh.webp', 'note 13c'),
(18, 'Redmi 12', '../Img/f76d64842787c8a6df8c59858b19496f.png', '12'),
(19, 'Redmi K70 Pro', '../Img/Redmi-K70-duo.jpg', 'K70 pro'),
(20, 'Redmi K70', '../Img/images-1.jpg', 'K70'),
(21, 'Redmi A3', '../Img/Xiaomi-Redmi-A3.jpg', 'A3');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `redmi_model`
--

CREATE TABLE `redmi_model` (
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `samsung_model`
--

CREATE TABLE `samsung_model` (
  `name` varchar(20) NOT NULL,
  `description` varchar(700) DEFAULT NULL,
  `price` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `samsung_model`
--

INSERT INTO `samsung_model` (`name`, `description`, `price`) VALUES
('Galaxy A25 5G', '6.5\" Super AMOLED display,Exynos 1280 processor,6/8GB RAM, 128GB storage,50MP main camera,5000mAh battery', 'Rs.62,000.00'),
('Galaxy A35 5G', '6.6\" Super AMOLED display,Exynos 1380 processor,6/8GB RAM, up to 256GB storage,48MP main camera,5000mAh battery', 'Rs.70,000.00'),
('Galaxy A55 5Gs', '6.6\" Super AMOLED display,Exynos 1480 processor,Up to 8GB RAM, 256GB storage,50MP main camera,5000mAh battery,IP67 water resistance', 'Rs.92,000.00'),
('Galaxy F55 5G', 'Similar specs to A55 with market-specific variations,Online exclusive availability,Competitive pricing', 'Rs.79,000.00'),
('Galaxy M35 5G', '6.6\" Super AMOLED display,MediaTek processor,6GB RAM, 128GB storage,50MP main camera,6000mAh battery', 'Rs.60,000.00'),
('Galaxy M55 5G', '6.7\" Super AMOLED display,Snapdragon 7 Gen 1 processor,Up to 8GB RAM, 256GB storage,50MP main camera,5000mAh battery', 'Rs 1,14000.00'),
('Galaxy S24', '6.2\" FHD+ Dynamic AMOLED display,Snapdragon 8 Gen 3 processor,8GB RAM and up to 256GB storage,50MP main camera,4000mAh battery', 'Rs.2,75000.00'),
('Galaxy Z Flip5', '6.7\" main display when unfolded,3.4\" cover display,Snapdragon 8 Gen 2 processor,8GB RAM', 'Rs.1,85000.00'),
('Galaxy Z Fold5', '7.6\" main display when unfolded,6.2\" cover display,Snapdragon 8 Gen 2 processor,12GB RAM,Improved hinge design', 'Rs.3,90000.00'),
('Samsung S22', 'Display: 6.1\" Dynamic AMOLED 2X, 120Hz, FHD+,Chipset: Snapdragon 8 Gen 1 (USA/China) or Exynos 2200 (Global),Storage: 128 GB or 256 GB (no microSD),Cameras:,Rear: 50 MP (main), 12 MP (ultrawide), 10 MP (telephoto, 3x zoom),Front: 10 MP,Battery: 3,700 mAh, 25W fast charging, Other: IP68 water resistance, 5G, stereo speakers, no headphone jack', 'Rs.139000.00'),
('Samsung S24', 'Display: 6.1 Dynamic AMOLED 2X, 120Hz, FHD+, Chipset: Snapdragon 8 Gen 2 (USA/China) or Exynos 2200 (Global),Storage: 128 GB or 256 GB (no microSD),Cameras:,Rear: 50 MP (main), 12 MP (ultrawide), 10 MP (telephoto, 3x zoom), Front: 12 MP,Battery: 3,900 mAh, 25W fast charging,Other: IP68 water resistance, 5G, no headphone jack, stereo speakers', 'Rs.175000.00'),
('Samsung S24 Ultra', '6.8\" QHD+ Dynamic AMOLED display,Snapdragon 8 Gen 3 processor,Up to 12GB RAM and 1TB storage,200MP main camera with enhanced AI features,5000mAh battery,S Pen support', 'Rs.290000.00');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `samsung_model`
--
ALTER TABLE `samsung_model`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
