-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 10:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timbox_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `rfc` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(18) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `password`, `name`, `email`, `rfc`, `direccion`, `telefono`, `website`) VALUES
(1, 'sawada10', 'Erick Rodriguez', 'maximumtheivan@gmail.com', 'ROAE951210HBC', 'Av. Guadamur 398', '6862378901', 'www.example.go'),
(2, '12345', 'Aldo Rodriguez', 'machete_mx@gmail.com', 'ROAR890224HBC', 'Av. Guadamur 398', '6861184842', 'www.tryhard.com'),
(5, 'SAWADA10', 'Edison Marth', 'EDISON@GMAIL.COM', 'ROAE951012HB4', 'Av. duque de boronia', '6862378899', 'www.facebook.com'),
(6, 'eliot123', 'Ivan Aguilar', 'ivan1995@hotmail.com', 'ROAI871222HIY', '', '', ''),
(13, '123', 'rENATO', 'RENATO@gmail.com', 'RERE991111HFB', '', '', ''),
(17, 'catrina', 'Liliana Aguilar', 'liliana@gmail.com', 'AGLI991122HAP', 'Av. quintas del rey 985', '6865814775', 'REDDIT.COM/R/teamsolomid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
