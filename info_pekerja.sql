-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 05:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megaholdings`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_pekerja`
--

CREATE TABLE `info_pekerja` (
  `id` int(3) NOT NULL,
  `nama_pekerja` varchar(50) NOT NULL,
  `no_kp` varchar(12) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_pekerja`
--

INSERT INTO `info_pekerja` (`id`, `nama_pekerja`, `no_kp`, `jantina`, `no_hp`) VALUES
(128, 'Ilham Aliff', '030406040246', 'LELAKI', '01110582755'),
(564, 'Athirah', '030506070896', 'PEREMPUAN', '0139170155'),
(567, 'Nurul Najwa', '030808101224', 'PEREMPUAN', '01151559408'),
(666, 'Aina Atikah', '031210080604', 'PEREMPUAN', '01485625862'),
(987, 'Alia Atirah Aziz', '030708050405', 'PEREMPUAN', '0193078957');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_pekerja`
--
ALTER TABLE `info_pekerja`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_kp` (`no_kp`),
  ADD UNIQUE KEY `no_kp_2` (`no_kp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_pekerja`
--
ALTER TABLE `info_pekerja`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=988;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
