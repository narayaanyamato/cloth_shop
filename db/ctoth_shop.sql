-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 09:31 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctoth_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`) VALUES
(1, '', 'swaynnarayan@gmail.com', '7847869140', 'hi this niku..'),
(2, 'pinky swain', 'pinky23june@gmail.com', '8111706944', 'hi,this is pinky from bhanganagar....'),
(3, 'NARAYAN YAMATO', 'swaynnarayan@gmail.com', '7847869140', 'tthis is php mail tesing using localhost...xampo server..');

-- --------------------------------------------------------

--
-- Table structure for table `logup`
--

CREATE TABLE `logup` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pass` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logup`
--

INSERT INTO `logup` (`id`, `fname`, `lname`, `email`, `pass`) VALUES
(1, 'Narayan', 'Yamato', 'narayan@gmail.com', 'b8c33c3dd582e4f03fa0fd106c3e0c5f');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_img` varchar(300) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` varchar(30) DEFAULT NULL,
  `catogory` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_img`, `product_name`, `product_price`, `catogory`) VALUES
(1, 'm-t285hs-as7whdngr-seven-rocks-original-imafz3wkfs8pevqc.jpeg', 'Striped Men Polo Neck Dark Blue, Light Green, White T-Shirt', '349/-', 'men'),
(2, 'm-fmtsh0247-flying-machine-original-imagfqbcghubgtbz.jpeg', 'men Matlock Seersucker Performance Trouser', '529/-', 'male'),
(3, 's-lykpcslbd61177-louis-philippe-sport-original-imafw7dfsjhtf3hg.jpeg', 'Printed Men Collared Neck T-Shirt', '329/-', 'male'),
(4, 'xxl-t325-pwgh-seven-rocks-original-imafvpbgf6nchmfj.jpeg', 'Solid Men Mandarin Collar Green T-Shirt', '520/-', 'male'),
(5, 'm-fmtsh0027-flying-machine-original-imagfqaydm4s9rua.jpeg', 'Color Block Men Polo Neck T-Shirt', '449/-', 'male'),
(6, '184108012021-Black-Dupion-Silk-Kurta-Pajama.jpg', 'men Black-Dupion-Silk-Kurta-Pajama', '629/-', 'male'),
(7, '13344616102019-Green-Jacquard-Readymade-Kurta-Pajama.jpg', 'men Green-Jacquard-Readymade-Kurta-Pajama', '729/-', 'male'),
(8, '121-LP-46-MKS-IM13082020-Peach-Dupion-Silk-Readymade-Kurta-Pajama.jpg', 'Peach-Dupion-Silk-Readymade-Kurta-Pajama', '649/-', 'male'),
(9, '1637715042021-Maroon-Silk-Kurta-Pajama.jpg', 'Maroon-Silk-Kurta-Pajama', '549/-', 'male'),
(10, '2453902122017-Navy-Blue-Banarasi-Silk-Indo-Western-Sherwani.jpg', 'men Navy-Blue-Banarasi-Silk-Indo-Western-Sherwani', '729/-', 'male'),
(11, '10876425122020-Brown-Rayon-Readymade-Kurti.jpg', ' Brown-Rayon-Readymade-Kurti  women/femal/ladies', '749/-', 'ladies'),
(12, '11185406022021-Yellow-Cotton-Kurta-Set-With-Pant.jpg', 'Yellow-Cotton-Kurta-Set-With-Pant women', '529/-', 'ladies'),
(13, '11503513032021-Blue-Rayon-Kurta-Set-With-Palazzo.jpg', 'women Blue-Rayon-Kurta-Set-With-Palazzo', '499/-', 'ladies'),
(14, '801119022021-Maroon-Rayon-Kurta-Set-With-Pant.jpg', 'Maroon-Rayon-Kurta-Set-With-Pant red color', '629/-', 'ladies'),
(15, '489-KIDS-NC12122019-Blue-Silk-Kids-Readymade-Kurta-Pajama.jpg', 'Blue-Silk-Kids-Readymade-Kurta-Pajama', '729/-', 'kids'),
(16, '1531502112020-Maroon-Art-Silk-Kids-Readymade-Kids-Sherwani.jpg', 'Maroon-Art-Silk-Kids-Readymade-Kids-Sherwani', '649/-', 'kids'),
(17, 'NC-KSKD-07026012021-Black-Faux-Georgette-Kids-Sharara-Suit.jpg', 'Black-Faux-Georgette-Kids-Sharara-Suit', '449/-', 'kids'),
(18, 'NC-KSKD-01526012021-Maroon-Shimmer-Georgette-Kids-Pant-Style-Suit.jpg', 'Maroon-Shimmer-Georgette-Kids-Pant-Style-Suit', '599/-', 'kids'),
(19, 'NFS003BLUE24012020-Blue-Brocade-Readymade-Kids-Gown.jpg', 'Blue-Brocade-Readymade-Kids-Gown', '629/-', 'kids');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `imgpath` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `imgpath`) VALUES
(1, 'diya1.jpg'),
(2, ''),
(3, ''),
(4, 'IMG_20200810_152812-1.jpg'),
(5, 'theletterkilleth.jfif'),
(6, 'white-hearts-png-8.png'),
(7, 'IMG20201212130814-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logup`
--
ALTER TABLE `logup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logup`
--
ALTER TABLE `logup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
