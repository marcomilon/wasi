-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jan 05, 2018 at 10:01 PM
-- Server version: 5.7.20
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `wasi`
--
CREATE DATABASE IF NOT EXISTS `wasi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wasi`;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `uniqid` varchar(32) NOT NULL,
  `type` enum('form','set','document') NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `uniqid`, `type`, `title`, `body`, `created_at`) VALUES
(26, '5a4ea48b1c859', 'form', 'About', '[\"name\", \"lastname\", \"phone\"]', '2018-01-04 22:02:51'),
(27, '5a4ea4a9ab7c4', 'form', 'Header', '[\"title\", \"description\"]', '2018-01-04 22:03:21'),
(28, '5a4ea4dbefd2e', 'set', 'About', '[26,27]', '2018-01-04 22:04:11'),
(29, '5a4ea54a09846', 'document', 'Sobre marco', '{\"metadata\":{\"set\":\"28\",\"title\":\"Sobre marco\"},\"name\":\"Marco\",\"lastname\":\"Milon\",\"phone\":\"987204172\",\"title\":\"Sobre mi\",\"description\":\"Pagina sobre marco milon\"}', '2018-01-04 22:06:02'),
(30, '5a4ff4f8040c9', 'document', 'tetete', '{\"metadata\":{\"set\":\"28\",\"title\":\"tetete\"},\"name\":\"Hola\",\"lastname\":\"que \",\"phone\":\"90709275902\",\"title\":\"sdtwt\",\"description\":\"testst\"}', '2018-01-05 21:58:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqid` (`uniqid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;
