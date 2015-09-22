-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2015 at 05:12 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `zone_to_geozone`
--

CREATE TABLE IF NOT EXISTS `zone_to_geozone` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `geo_zone_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zone_to_geozone`
--

INSERT INTO `zone_to_geozone` (`id`, `country_id`, `zone_id`, `created_at`, `updated_at`, `geo_zone_id`) VALUES
(5, 129, 1972, 1442894107, 1442894107, 5),
(6, 1, 1, 1442894466, 1442894466, 5),
(8, 3, 4, 1442894609, 1442894609, 5),
(10, 10, 156, 1442894677, 1442894677, 6),
(11, 162, 1973, 1442930611, 1442930611, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zone_to_geozone`
--
ALTER TABLE `zone_to_geozone`
  ADD PRIMARY KEY (`id`,`geo_zone_id`), ADD KEY `fk_zone_to_geozone_geo_zone1_idx` (`geo_zone_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zone_to_geozone`
--
ALTER TABLE `zone_to_geozone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `zone_to_geozone`
--
ALTER TABLE `zone_to_geozone`
ADD CONSTRAINT `fk_geo_zone` FOREIGN KEY (`geo_zone_id`) REFERENCES `geo_zone` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
