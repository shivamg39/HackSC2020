-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 12:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hacksc`
--

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `REmail` varchar(50) NOT NULL,
  `MenuItem` varchar(25) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `PickupTime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`REmail`, `MenuItem`, `Quantity`, `PickupTime`) VALUES
('USCHotels@usc.edu', 'Shrimp Pad Thai', 17, '5:00pm - 6:00pm'),
('McKaysNearUSC@gmail.com', 'McVeggie', 34, '7:00pm - 9:30pm'),
('moretonfig@usc.edu', 'FigCurry', 12, '3:00pm-4:30pm'),
('hello@cava.com', 'Chicken Avacado Bowl', 15, '9:00pm-10:00pm'),
('Kobunga@Usc.edu', 'Mango Shakes', 32, '11:00pm-12:15am'),
('tacobell@usuusc.edu', 'Carne Asada Tacos', 33, '4:00pm-6:00pm'),
('indianmanan@usc.edu', 'Shahi Paneer', 23, '8:00pm-9:00pm'),
('Pasta@usu.edu', 'Penne Pasta', 22, '11:30pm-1:00am'),
('Poblanos@usc.edu', 'Beef Burrito', 43, '2:00pm-3:00pm'),
('Ranchon@el.com', 'Fries with Ranch', 16, '11:00pm-12:30am'),
('Parksidedining@usc.edu', 'Buffet Leftovers', 13, '3:00pm-5:00pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
