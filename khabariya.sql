-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 08:39 AM
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
-- Database: `khabariya`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `date`) VALUES
(11, 'Fan', '2019-04-09 09:50:30'),
(12, 'osijdfklsdj', '2019-04-10 08:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `date`, `category`, `img`) VALUES
(27, 'dfsdf', '<p>sdfsdf</p>', '2019-04-10 09:29:55', 'tv', '20190110_181216.jpg'),
(28, 'cvdf', '<p>gsdgsdf</p>', '2019-04-10 09:30:20', 'tv', '20190110_181215.jpg'),
(29, 'Test', '<p>hello</p>', '2019-04-10 09:32:30', 'fashion', '20190110_181216.jpg'),
(30, 'Jansamadhan', '<p>Hello</p>', '2019-04-10 09:33:59', 'tv', '20190110_181215.jpg'),
(31, 'Jansamadhan', '<p>Hello</p>', '2019-04-10 09:34:11', 'tv', '20190110_181215.jpg'),
(32, 'Aajtak', '<p>Hello</p>', '2019-04-10 09:35:56', 'tv', '20190110_181216.jpg'),
(33, 'Sdfasdasd', '<p>sfdsdfsdf</p>', '2019-04-10 09:51:20', 'fashion', '20190110_181216.jpg'),
(34, 'Sfgsfg', '<p>sfgfsg</p>', '2019-04-10 10:35:01', 'entertainment', 'eremote.00_00_08_06.Still001.jpg'),
(35, 'Test5', '<p>test5</p>', '2019-04-10 11:13:39', 'fashion', 'eremote.00_00_08_06.Still001.jpg'),
(37, 'Sdfsdf', '<p>sdfsdf</p>', '2019-04-10 11:16:46', 'entertainment', 'eremote.00_00_08_06.Still001.jpg'),
(38, 'Sdfsdf', '<p>sfsdf</p>', '2019-04-10 11:17:27', 'tv', 'eremote.00_00_08_06.Still001.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
