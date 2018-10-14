-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 m. Spa 14 d. 13:05
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
-- Database: `guobosbaldai`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `guobosklientai`
--

CREATE TABLE `guobosklientai` (
  `id` int(11) NOT NULL,
  `vardas` text NOT NULL,
  `email` varchar(320) NOT NULL,
  `message` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `guobosklientai`
--

INSERT INTO `guobosklientai` (`id`, `vardas`, `email`, `message`, `date_created`) VALUES
(150, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(151, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(152, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(153, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(154, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(155, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(156, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(157, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(158, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(159, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(160, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(161, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(162, 'Asta', 'i_lukauskiene@yahoo.com', 'tu6tu', '2018-10-10 17:21:17'),
(163, 'Asta', 'i_lukauskiene@yahoo.com', 'weteryt', '2018-10-10 17:21:17'),
(164, '', '', '', '2018-10-10 17:21:17'),
(165, 'Asta', 'i_lukauskiene@yahoo.com', 'HUJFKEW', '2018-10-10 17:21:35'),
(166, 'Asta', 'i_lukauskiene@yahoo.com', 'HUJFKEW', '2018-10-11 07:54:58'),
(167, '', '', '', '2018-10-11 15:43:59'),
(168, '', '', '', '2018-10-11 15:56:35'),
(169, '', '', '', '2018-10-11 15:56:41'),
(170, 'Asta', 'i_lukauskiene@yahoo.com', 'hjgfjh', '2018-10-12 15:27:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guobosklientai`
--
ALTER TABLE `guobosklientai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guobosklientai`
--
ALTER TABLE `guobosklientai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
