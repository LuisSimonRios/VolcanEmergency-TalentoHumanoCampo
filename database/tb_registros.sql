-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2023 at 06:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `control_talento_humano`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_registros`
--

CREATE TABLE `tb_registros` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `emergencia` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `institucion` varchar(50) NOT NULL,
  `profesion` varchar(50) NOT NULL,
  `celular` int(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `hora_inicio` varchar(10) NOT NULL,
  `hora_final` varchar(10) NOT NULL,
  `condicion_fisica_prev` varchar(100) NOT NULL,
  `condicion_fisica_post` varchar(100) NOT NULL,
  `condicion_psico_prev` varchar(100) NOT NULL,
  `condicion_psico_post` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_registros`
--

INSERT INTO `tb_registros` (`id`, `fecha`, `emergencia`, `nombre`, `institucion`, `profesion`, `celular`, `correo`, `hora_inicio`, `hora_final`, `condicion_fisica_prev`, `condicion_fisica_post`, `condicion_psico_prev`, `condicion_psico_post`) VALUES
(1, '2023-04-19', 'volvo', 'sdafs', 'sdfaads', 'sadfds', 2323, 'simonriosarcila@gmail.com', '1607', '1708', 'asfsd', 'safs', 'sdfaasd', 'safds'),
(2, '2023-04-19', 'volvo', 'sdafs', 'sdfaads', 'sadfds', 2323, 'simonriosarcila@gmail.com', '0514', '1816', 'asfsd', 'safs', 'sdfaasd', 'safds'),
(3, '2023-04-06', 'saab', 'simon', 'hola', 'asfdsfda', 232323, 'luisa_f_trujillo@hotmail.com', '0029', '1330', 'safs', 'asdfsd', 'sadfsad', 'sdafdsafs'),
(4, '2023-04-19', 'volvo', 'simon', 'ruasdf', 'adsfasd', 23232, 'simonriosarcila@gmail.com', '0030', '1230', 'sfsd', 'asdfas', 'asdfds', 'sadfsd'),
(5, '2023-04-21', 'volvo', 'simon', 'fsdfds', 'sdfgsdf', 23232, 'alduver1965@hotmail.com', '0034', '0236', 'sadfasd', 'sadfds', 'asdfsd', 'asdfds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_registros`
--
ALTER TABLE `tb_registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_registros`
--
ALTER TABLE `tb_registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
