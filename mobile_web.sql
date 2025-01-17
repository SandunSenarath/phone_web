-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 09:15 AM
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
-- Table structure for table `buynow`
--

CREATE TABLE `buynow` (
  `product_name` varchar(30) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `price` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buynow`
--

INSERT INTO `buynow` (`product_name`, `description`, `price`) VALUES
('', '', 0);

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

--
-- Dumping data for table `redmi_model`
--

INSERT INTO `redmi_model` (`name`, `description`, `price`) VALUES
('Redmi Note 4 (MediaTek Variant', 'Display: 5.5-inch Full HD (1920x1080) IPS LCD,Processor: MediaTek Helio X20 deca-core,RAM: 2GB/3GB variants,Storage: 16GB/32GB, expandable via microSD,Camera: 13MP rear, 5MP front,Battery: 4100mAh,Special features: Metal body, fingerprint sensor,Operating System: MIUI 8 based on Android 6.0', 'Rs.29,500.00'),
('Redmi Note 13 Pro+ 5G', 'Display: 6.67\" 1.5K AMOLED, 120Hz,Processor: MediaTek Dimensity 7200 Ultra,Camera: 200MP main + 8MP ultrawide + 2MP macro,Front Camera: 16MP,Battery: 5000mAh, 120W charging,RAM/Storage: Up to 12GB/512GB,Special Features: IP68 rating, Gorilla Glass Victus', 'RS.94,990.00'),
('Redmi Note 13 Pro 5G', 'Display: 6.67\" FHD+ AMOLED, 120Hz,Processor: Snapdragon 7s Gen 2,Camera: 200MP main + 8MP ultrawide + 2MP macro,Front Camera: 16MP,Battery: 5100mAh, 67W charging,RAM/Storage: Up to 12GB/256GB,Special Features: IP54 rating', 'Rs.92,990.00'),
('Redmi 12', 'Display: 6.79\" FHD+, 90Hz,Processor: MediaTek Helio G88,Camera: 50MP main + 8MP ultrawide + 2MP macro,Front Camera: 8MP,Battery: 5000mAh, 18W charging,RAM/Storage: Up to 8GB/128GB,Special Features: IP53 rating, Glass back', 'Rs.Rs.41,990'),
('Redmi Note 13 5G', 'Display: 6.67\" FHD+ AMOLED, 120Hz,Processor: MediaTek Dimensity 6080,Camera: 108MP main + 8MP ultrawide + 2MP macro,Front Camera: 16MP,Battery: 5000mAh, 33W charging,RAM/Storage: Up to 8GB/256GB', 'Rs.209,900.00 '),
('Redmi K70 Pro', 'Display: 6.67\" 2K AMOLED, 120Hz,Processor: Snapdragon 8 Gen 2,Camera: 50MP main + 8MP ultrawide + 2MP macro,Front Camera: 16MP,Battery: 5000mAh, 120W charging,RAM/Storage: Up to 24GB/1TB,Special Features: IR blaster, Dolby Vision', 'Rs.111,182.00'),
('Redmi K70', 'Display: 6.67\" 2K AMOLED, 120Hz,Processor: Snapdragon 8 Gen 2,Camera: 50MP main + 8MP ultrawide + 2MP macro,Battery: 5500mAh, 120W charging,RAM/Storage: Up to 16GB/1TB', 'Rs.119,574.00'),
('Redmi A3', '6Display: 6.71\" HD+,Processor: MediaTek Helio G36,Camera: 8MP main,Battery: 5000mAh,RAM/Storage: Up to 4GB/64GB,Special Features: Leather-like back design', 'Rs.37,702.86');

-- --------------------------------------------------------

--
-- Table structure for table `samsung_model`
--

CREATE TABLE `samsung_model` (
  `name` varchar(20) NOT NULL,
  `description` varchar(700) DEFAULT NULL,
  `price` varchar(15) DEFAULT NULL,
  `file_path` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `samsung_model`
--

INSERT INTO `samsung_model` (`name`, `description`, `price`, `file_path`) VALUES
('Galaxy A25 5G', '6.5\" Super AMOLED display,Exynos 1280 processor,6/8GB RAM, 128GB storage,50MP main camera,5000mAh battery', 'Rs.62,000.00', '../Img/Samsung-Galaxy-A25-5G-Fantasy-Blue.jpg'),
('Galaxy A35 5G', '6.6\" Super AMOLED display,Exynos 1380 processor,6/8GB RAM, up to 256GB storage,48MP main camera,5000mAh battery', 'Rs.70,000.00', '../Img/A35.jpg'),
('Galaxy A55 5Gs', '6.6\" Super AMOLED display,Exynos 1480 processor,Up to 8GB RAM, 256GB storage,50MP main camera,5000mAh battery,IP67 water resistance', 'Rs.92,000.00', '../Img/Samsung Galaxy A55-500x500.jpg'),
('Galaxy F55 5G', 'Similar specs to A55 with market-specific variations,Online exclusive availability,Competitive pricing', 'Rs.79,000.00', '../Img/Samsung-Galaxy-F55-5G.jpg'),
('Galaxy M35 5G', '6.6\" Super AMOLED display,MediaTek processor,6GB RAM, 128GB storage,50MP main camera,6000mAh battery', 'Rs.60,000.00', '../Img/Samsung Galaxy M35-500x500.jpg'),
('Galaxy M55 5G', '6.7\" Super AMOLED display,Snapdragon 7 Gen 1 processor,Up to 8GB RAM, 256GB storage,50MP main camera,5000mAh battery', 'Rs 1,14000.00', '../Img/MBPSSM-M556BLGASLK-S-1--1730187495.jpg'),
('Galaxy S24', '6.2\" FHD+ Dynamic AMOLED display,Snapdragon 8 Gen 3 processor,8GB RAM and up to 256GB storage,50MP main camera,4000mAh battery', 'Rs.2,75000.00', '../Img/S24.jpg'),
('Galaxy Z Flip5', '6.7\" main display when unfolded,3.4\" cover display,Snapdragon 8 Gen 2 processor,8GB RAM', 'Rs.1,85000.00', '../Img/Samsung-Galaxy-Z-Flip-5.jpg'),
('Galaxy Z Fold5', '7.6\" main display when unfolded,6.2\" cover display,Snapdragon 8 Gen 2 processor,12GB RAM,Improved hinge design', 'Rs.3,90000.00', '../Img/Z fold5.jpg'),
('Samsung S22', 'Display: 6.1\" Dynamic AMOLED 2X, 120Hz, FHD+,Chipset: Snapdragon 8 Gen 1 (USA/China) or Exynos 2200 (Global),Storage: 128 GB or 256 GB (no microSD),Cameras:,Rear: 50 MP (main), 12 MP (ultrawide), 10 MP (telephoto, 3x zoom),Front: 10 MP,Battery: 3,700 mAh, 25W fast charging, Other: IP68 water resistance, 5G, stereo speakers, no headphone jack', 'Rs.139000.00', '../Img/samsung_S22n.jpg'),
('Samsung S24', 'Display: 6.1 Dynamic AMOLED 2X, 120Hz, FHD+, Chipset: Snapdragon 8 Gen 2 (USA/China) or Exynos 2200 (Global),Storage: 128 GB or 256 GB (no microSD),Cameras:,Rear: 50 MP (main), 12 MP (ultrawide), 10 MP (telephoto, 3x zoom), Front: 12 MP,Battery: 3,900 mAh, 25W fast charging,Other: IP68 water resistance, 5G, no headphone jack, stereo speakers', 'Rs.175000.00', '../Img/samsung_S24.jpg'),
('Samsung S24 Ultra', '6.8\" QHD+ Dynamic AMOLED display,Snapdragon 8 Gen 3 processor,Up to 12GB RAM and 1TB storage,200MP main camera with enhanced AI features,5000mAh battery,S Pen support', 'Rs.290000.00', '../Img/galaxy-s24-ultra-1.jpg');

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
