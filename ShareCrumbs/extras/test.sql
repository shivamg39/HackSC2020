-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 06:38 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `GID` int(5) NOT NULL,
  `RestaurantName` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Latitude` float NOT NULL,
  `Longitude` float NOT NULL,
  `PhoneNum` int(12) DEFAULT NULL,
  `GiversEmail` varchar(30) NOT NULL,
  `GPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`GID`, `RestaurantName`, `Address`, `Latitude`, `Longitude`, `PhoneNum`, `GiversEmail`, `GPassword`) VALUES
(1, 'USC Hotel', '3540 S Figueroa St, Los Angeles, CA  90007', 34.0191, -118.281, 2137484141, 'USCHotels@usc.edu', 'RichieHotel'),
(2, 'McKays', '3540 S Figueroa St, Los Angeles, CA 90007', 34.0194, -118.281, 2137434111, 'McKaysNearUSC@gmail.com', 'Mcmfnigow144'),
(3, 'Moreton Fig', '3607 Trousdale Pkwy, Los Angeles, CA 90089', 34.0198, -118.286, 2138213441, 'moretonfig@usc.edu', 'Fig@123'),
(4, 'CAVA', '3201 S Hoover St Suite 1840, Los Angeles, CA 90089', 34.0249, -118.285, 2132129838, 'hello@cava.com', 'CavaLikeChipotle'),
(5, 'KOBUNGA', '929 W Jefferson Blvd Suite 1610, Los Angeles, CA 9', 34.025, -118.285, 2135365886, 'Kobunga@Usc.edu', 'KObungaDrinks'),
(6, 'Taco Bell', '3629 S Vermont Ave, Los Angeles, CA 90007', 34.0266, -118.276, 2147483647, 'tacobell@usuusc.edu', 'TacoEverywhere'),
(7, 'Manas Indian Cuisine', '2823 S Vermont Ave, Los Angeles, CA 90007', 34.0288, -118.292, 2147483647, 'indianmanan@usc.edu', 'IndianistheNicest'),
(8, 'Monarca Pasta & Grill', '2703 S Vermont Ave, Los Angeles, CA 90007', 34.0302, -118.292, 2147483647, 'Pasta@usu.edu', 'PastaisItalian'),
(9, 'Los Poblanos Restaurant', '1433 W Jefferson Blvd, Los Angeles, CA 90007', 34.0256, -118.298, 2147483647, 'Poblanos@usc.edu', 'ServingTacos'),
(10, 'El Ranchon', '3564 Normandie Ave #3429, Los Angeles, CA 90007', 34.0232, -118.3, 2147483647, 'Ranchon@el.com', 'OnaRanch'),
(11, 'Parkside Restaurant', '3771 South McClintock Ave, Los Angeles, CA 90089', 34.0187, -118.291, 2147483647, 'Parksidedining@usc.edu', 'ParksideLikeLBSU');

-- --------------------------------------------------------

--
-- Table structure for table `takers`
--

CREATE TABLE `takers` (
  `TID` int(5) NOT NULL,
  `TakerName` varchar(30) NOT NULL,
  `TEmail` varchar(50) NOT NULL,
  `TPassword` varchar(30) NOT NULL,
  `TPhoneNum` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takers`
--

INSERT INTO `takers` (`TID`, `TakerName`, `TEmail`, `TPassword`, `TPhoneNum`) VALUES
(101, 'Trojan Shelter', 'trojanshelter@gmail.com', 'Trojans', 2147483647),
(102, 'Los Angeles Youth Network', 'LAYouthNetwork@gmail.com', 'LAYouthLA', 2147483647),
(103, 'Salvation Army Westwood Transi', 'westwoodtlc@salvationarmy.org', 'SalvationLA', 2147483647),
(104, 'Good Shepherd Center for Homel', 'homeless@shepherd.org', 'HomeLess2020', 2132351460),
(105, 'Alex Cobers', 'alex.cobers@gmail.com', 'AlexAug1992', 2147483647),
(106, 'Karen Jamreq', 'karen.jamreq@gmail.com', 'MarchKaren02', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
