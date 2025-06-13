-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2025 at 06:09 AM
-- Server version: 9.2.0
-- PHP Version: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice_login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pwd`, `created_at`) VALUES
(1, 'Yagyaraj Majhi', 'yagya@gmail.com', '$2y$10$ViiO.G4bKVhUyBJyrwRjQ.sZk8GrXiPe4QKJyKbjGXZZav5R.bg5u', '2025-06-12 22:41:39'),
(2, 'Ishika Chaudhary', 'ishika@gmail.com', '$2y$10$YYeoroZaH7MXUEVXCEDl5OWTHQKIVrrL/vwOBxlOIXtrkSEf7xpf6', '2025-06-12 23:38:44'),
(3, 'Elbish Chaudhary', 'elbish@gmnail.com', '$2y$10$MSdfIg40Br21ISfY6JxdSumdUSgf9eyJipT6ubb3mbZXEMVR.Rrf6', '2025-06-12 23:49:01'),
(4, 'Babulal Majhi', 'babulalmajhi@gmail.com', '$2y$10$Fys79a0tZ2XJJG6B0HdKp.9UsXO4crNUG5FbyzKdx8x25cS5jmLti', '2025-06-13 10:41:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
