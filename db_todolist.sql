-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 12:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id` int(11) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id`, `status`) VALUES
(1, 'pending'),
(2, 'accomplished');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tasks`
--

CREATE TABLE `tb_tasks` (
  `id` int(11) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT 1,
  `task` text NOT NULL,
  `data_register` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tasks`
--

INSERT INTO `tb_tasks` (`id`, `id_status`, `task`, `data_register`) VALUES
(1, 1, 'Read a book', '2023-12-23 00:35:14'),
(2, 1, 'Buy beer', '2023-12-23 00:38:43'),
(3, 1, 'Buy new phone', '2023-12-23 00:43:30'),
(4, 1, 'Watch a Vasco game', '2023-12-23 00:46:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tasks`
--
ALTER TABLE `tb_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_status` (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_tasks`
--
ALTER TABLE `tb_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_tasks`
--
ALTER TABLE `tb_tasks`
  ADD CONSTRAINT `tb_tasks_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `tb_status` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
