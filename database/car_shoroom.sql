-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 09:52 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_shoroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`username`, `password`) VALUES
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(11) NOT NULL,
  `model` text NOT NULL,
  `color` text NOT NULL,
  `varient` text NOT NULL,
  `bPrice` text NOT NULL,
  `rTax` text NOT NULL,
  `ins` text NOT NULL,
  `total` text NOT NULL,
  `uemail` text NOT NULL,
  `paid` text NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `model`, `color`, `varient`, `bPrice`, `rTax`, `ins`, `total`, `uemail`, `paid`, `address`) VALUES
(1016, 'Hatchback', 'Sparkling Gold', 'Base --- Petrol', '446600', '66990', '13398', '526988', 'malli@gmail.com', 'Yes', 'Bangalore'),
(1017, 'SUV', 'Chill Metallic', 'Base --- Petrol', '668800', '100320', '20064', '789184', 'jithendra@gmail.com', 'Yes', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cname` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cname`, `email`, `message`) VALUES
('Jithendra R', 'jithendra@gmail.com', 'test'),
('Mallikappa', 'malli@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(50) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `mobile`, `username`, `pass`) VALUES
('HARISH', '9739303607', 'HARISHYADAVAN20@GMAIL.CO', 'HARISH');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `model` text NOT NULL,
  `varient` text NOT NULL,
  `basic` text NOT NULL,
  `rtax` text NOT NULL,
  `insurence` text NOT NULL,
  `total` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`model`, `varient`, `basic`, `rtax`, `insurence`, `total`) VALUES
('Hatchback', 'Mid --- Petrol', '496600', '74490', '14898', '585988'),
('Hatchback', 'Base --- Petrol', '446600', '66990', '13398', '526988'),
('Hatchback', 'Top --- Petrol', '546600', '81990', '16398', '644988'),
('Hatchback', 'Base --- Diesel', '555650', '83347', '16669', '655666'),
('Hatchback', 'Mid --- Diesel', '605650', '90847', '18169', '714666'),
('Hatchback', 'Top --- Diesel', '655650', '98347', '19669', '773666'),
('SUV', 'Base --- Petrol', '668800', '100320', '20064', '789184'),
('SUV', 'Mid --- Petrol', '718800', '107820', '21564', '848184'),
('SUV', 'Top --- Petrol', '768800', '115320', '23064', '907184'),
('SUV', 'Base --- Diesel', '728800', '109320', '21864', '859984'),
('SUV', 'Mid --- Diesel', '778800', '161820', '23364', '918984'),
('SUV', 'Top --- Diesel', '828800', '124320', '24864', '977984');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `cen` text NOT NULL,
  `sertype` text NOT NULL,
  `car` text NOT NULL,
  `picup` text NOT NULL,
  `appDate` text NOT NULL,
  `appTime` time NOT NULL,
  `email` text NOT NULL,
  `carnum` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`cen`, `sertype`, `car`, `picup`, `appDate`, `appTime`, `email`, `carnum`) VALUES
('Adugodi', '1', 'Hatchback Petrol', 'Yes', '05/18/2016', '09:00:00', 'malli@gmail.com', 'KA01AA1111'),
('Adugodi', '2', 'Hatchback Petrol', 'No', '05/19/2016', '10:00:00', 'malli@gmail.com', 'KA01AA1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1018;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
