-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2023 at 06:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `mentor` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `mentor`, `title`) VALUES
(1, 'C++', 'Ari', 'Dr.'),
(2, 'C#', 'Ari', 'Dr.'),
(3, 'C#', 'Ari', 'Dr.'),
(4, 'CSS', 'Cania', 'S.Kom'),
(5, 'HTML', 'Cania', 'S.Kom'),
(6, 'Javascript', 'Cania', 'S.Kom'),
(7, 'Python', 'Barry', 'S.T.'),
(8, 'Micropython', 'Barry', 'S.T.'),
(9, 'Java', 'Darren', 'M.T.'),
(10, 'Ruby', 'Darren', 'M.T.');

-- --------------------------------------------------------

--
-- Table structure for table `userCourse`
--

CREATE TABLE `userCourse` (
  `id_user` int(11) DEFAULT NULL,
  `id_course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userCourse`
--

INSERT INTO `userCourse` (`id_user`, `id_course`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 7),
(3, 8),
(3, 9),
(4, 1),
(4, 3),
(4, 5),
(5, 2),
(5, 4),
(5, 6),
(6, 7),
(6, 8),
(6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Andi', 'andi@andi.com', '1234', '2023-12-12 02:18:42', '2023-12-12 02:18:42'),
(2, 'Budi', 'budi@budi.com', '67890', '2023-12-12 02:21:37', '2023-12-12 02:21:37'),
(3, 'Caca', 'caca@caca.com', 'abcde', '2023-12-12 02:21:37', '2023-12-12 02:21:37'),
(4, 'Deni', 'deni@deni.com', 'fghij', '2023-12-12 02:23:16', '2023-12-12 02:23:16'),
(5, 'Euis', 'euis@euis.com', 'klmno', '2023-12-12 02:23:16', '2023-12-12 02:23:16'),
(6, 'Fafa', 'fafa@fafa.com', 'pqrst', '2023-12-12 02:23:16', '2023-12-12 02:23:16'),
(7, 'admin', 'admin@mail.com', 'admin', '2023-12-12 03:57:18', '2023-12-12 03:57:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userCourse`
--
ALTER TABLE `userCourse`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userCourse`
--
ALTER TABLE `userCourse`
  ADD CONSTRAINT `usercourse_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `usercourse_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
