-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 11:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registeredstud`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middle_initial` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `birthdate` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `registerdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `middle_initial`, `lastname`, `birthdate`, `gender`, `address`, `email`, `phone`, `registerdate`) VALUES
(2000299, 'John Rex', 'Briones', 'Banal', '2001-10-25', 'Male', 'Dita', 'johnrex2510@gmail.com', 98872345112, '2022-06-01 14:25:10'),
(2000320, 'Ivan', 'Salgado', 'Ranada', '2002-06-06', 'Male', 'Pulo Cabuyao Laguna', 'ranadais559@gmail.com', 9518373968, '2022-06-02 14:06:55'),
(2000322, 'Patricia', 'Manalo', 'Gecoso', '2001-12-01', 'Female', 'Mahogany', 'Gecoso@gmail.com', 9162981231, '2022-06-02 16:38:24'),
(2000323, 'Justine', 'Ann', 'Martinez', '2001-05-11', 'Female', 'Sala', 'justineAnn@gmail.com', 9145681231, '2022-06-02 16:39:09'),
(2000324, 'Ken', 'Juvic', 'Marasigan', '2001-01-11', 'Male', 'Pulo', 'kenJuvic@gmail.com', 9145615631, '2022-06-02 16:40:29'),
(2000325, 'Jade', 'Antonette', 'Camcaman', '2002-10-11', 'Female', 'Pulo', 'camcamanJade@gmail.com', 9143215631, '2022-06-02 16:41:28'),
(2000326, 'Abegil', 'Cruz', 'Tutor', '2002-07-16', 'Female', 'Mamatid', 'tutor@gmail.com', 9343215631, '2022-06-02 16:42:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000328;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
