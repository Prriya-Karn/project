-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:7882
-- Generation Time: Sep 19, 2022 at 06:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `Name` varchar(255) NOT NULL,
  `Order` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Number` varchar(255) NOT NULL,
  `Add_food` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`Name`, `Order`, `Quantity`, `Address`, `Number`, `Add_food`, `Date`) VALUES
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00'),
('[priya karn]', '[biryani]', '[1]', '[najafgarh]', '[8368744279]', '[aalo matar]', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
