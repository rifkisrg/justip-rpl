-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 12:19 AM
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
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tambahbuku`
--

CREATE TABLE `tambahbuku` (
  `id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `bahasa` varchar(128) NOT NULL,
  `tahun_terbit` varchar(100) NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `image`, `password`, `role_id`, `is_active`) VALUES
(5, 'Rizky Maulana Iqbal', 'rizkyiqbal1606@gmail.com', '175150201111047', 'default.jpg', '$2y$10$6VEMhrHblqqJxoxvKp53LOEk/5t3TJ5fSW/l4ruCZ8.5wjvhkZ.Wm', 2, 1),
(6, 'Aku Baru', 'dhifand@gmail.com', '175150201111047', 'default.jpg', '$2y$10$u3Bhfw/vT1uIE1Wu9gMVTekytO4NAEqmCcX/RlLrUMd0o9PB3o3sq', 2, 1),
(8, 'Rizky Maulana Iqbal', 'radityarin@gmail.com', '11', 'upload/product/default.jpg', '$2y$10$RXI5X4vz21QVd6VqZzuIW.3BqGEaR1xR52YvrDSnntC1ndDVTUiNO', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_rule`
--

CREATE TABLE `user_rule` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_rule`
--

INSERT INTO `user_rule` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tambahbuku`
--
ALTER TABLE `tambahbuku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_rule`
--
ALTER TABLE `user_rule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tambahbuku`
--
ALTER TABLE `tambahbuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_rule`
--
ALTER TABLE `user_rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
