-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2023 at 02:37 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashofa_kam`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'haulage service'),
(2, 'mining'),
(3, 'Events');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `post` text NOT NULL,
  `date-created` date NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `post`, `date-created`, `category`, `image`) VALUES
(7, 'I\'m highly impressed by KAM CEO, Kamoru Yusuf\'s industrial drives - DG SON', 'kam-holding-boss-bags-osun-varsity-honorary-doctorate', '<p>The Director-General of Standard Organisation of Nigeria, (SON) Mallam Salim Farooq, on Monday commended the heavy investments of the Group Managing Director of KAM Holding Ltd, Dr. Kamoru Yusuf, whereby these investments impacted positively on the lives of numerous Nigerians and expatriates. He also lauded KAM Holding Ltd for playing pivotal roles in the Iron and Steel manufacturing business and setting the pace for others to emulate in line with the guidelines of SON as well as that of other regulatory agencies.</p>', '0000-00-00', 'All category', ' blog-image.jpg'),
(8, 'KAM Holding boss bags Osun varsity\'s honorary doctorate degree', 'kam-holding-boss-bags-osun-varsity-honorary-doctorate', '<p>Authority of the Osun State University, Osogbo has nominated and set to confer an Honorary Doctorate Degree award on the Group Managing Director/CEO of KAM Holding Ltd., Dr. Kamoru Yusuf, for his innovations and laudable contributions to nation-building.</p>', '0000-00-00', 'All category', ' osun-doctorate-hon.jpeg'),
(9, 'I believe strongly in â€˜One Nigeriaâ€™, KAM Holding CEO sues for unity', '', '<p>The Group Managing Director/CEO of KAM Holding Ltd. Dr. Kamoru Yusuf, has reiterated his passion and believe in Nigeria as one indivisible entity despite the ongoing social and economic challenges facing the nation urging Nigerians to remain united and peaceful.</p>', '0000-00-00', 'All category', ' kam-bosses.jpg'),
(10, 'Friends, others honour KAM Holding CEO, Kamoru Yusuf over MON Award', NULL, '<p>Friends, others honour KAM Holding CEO, Kamoru Yusuf over MON Award</p>', '0000-00-00', 'haulage service', 'kam-fam-n-friends.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `email`, `password`, `image`) VALUES
(1, 'Kam', 'info@kamholding.net', '098f6bcd4621d373cade4e832627b4f6', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
