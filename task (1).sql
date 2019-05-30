-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2019 at 03:05 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` varchar(500) NOT NULL,
  `price` double NOT NULL,
  `sale` double NOT NULL,
  `kind_of_tour` varchar(50) NOT NULL,
  `days` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `content`, `price`, `sale`, `kind_of_tour`, `days`) VALUES
(17, 'from $1175 was $1305 Jaz Dahabeya - Dahab - 4 Days / 3 Nights', 'uplodes/post.jpg', 'Experience the delights of Egypt with a Nile cruise vacation. \r\nYouâ€™ll begin your expedition in Cairo, where youâ€™ll visit the Giza Pyramids and \r\nthe Egyptian Museum before flying to Luxor to embark on a Nile cruise ship. Discover captivating ruins and majestic natural scenery between Luxor \r\nand Aswan on a luxurious 5-day cruise before returning to Cairo to depart.....', 2324, 3435, 'private', 'Saturday, Sunday & Thursday'),
(18, 'Iberotel Luxor - 4 Days / 3 Nights ', 'uplodes/post2.jpg', 'Experience the delights of Egypt with a Nile cruise vacation. Youâ€™ll begin your expedition in Cairo, where youâ€™ll visit the Giza Pyramids and the Egyptian Museum before flying to Luxor to embark on a Nile cruise ship. Discover captivating ruins and majestic natural scenery between Luxor and Aswan on a luxurious 5-day cruise before returning to Cairo to depart.....', 820, 720, 'Public', 'Saturday, Sunday & Thursday'),
(19, 'Murcure Karnek Luxue Hotel 4 Days/3 Nights', 'uplodes/post3.jpg', 'Experience the delights of Egypt with a Nile cruise vacation. Youâ€™ll begin your expedition in Cairo, where youâ€™ll visit the Giza Pyramids and the Egyptian Museum before flying to Luxor to embark on a Nile cruise ship. Discover captivating ruins and majestic natural scenery between Luxor and Aswan on a luxurious 5-day cruise before returning to Cairo to depart.....', 456, 374, 'Private', 'Saturday, Sunday & Thursday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
