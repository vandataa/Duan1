-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2023 at 12:34 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `canho`
--

CREATE TABLE `canho` (
  `id` int NOT NULL,
  `vitri` varchar(255) NOT NULL,
  `niemyet` varchar(255) NOT NULL,
  `hinh` text NOT NULL,
  `video` text NOT NULL,
  `sophong` int NOT NULL,
  `sogiuong` int NOT NULL,
  `metvuong` int NOT NULL,
  `mota` text NOT NULL,
  `iddm` int NOT NULL,
  `tinhtrang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `canho`
--

INSERT INTO `canho` (`id`, `vitri`, `niemyet`, `hinh`, `video`, `sophong`, `sogiuong`, `metvuong`, `mota`, `iddm`, `tinhtrang`) VALUES
(1, 'Hoàng Mai', '12000000000', '313435252_159518436774776_6764635402509547616_n.jpg', 'https://youtu.be/V6xlGdD9NEE', 0, 0, 0, 'andkjwdlawpegapweg', 1, 1),
(2, 'Đống Đa', '16000000000', '336364304_1274038356656089_9023206749414966671_n.jpg', 'https://youtu.be/wYXncYhjgBY', 0, 0, 0, 'oaihsvklawe', 2, 1),
(3, 'Hoàng Mai', '12000000000', '314018552_159518220108131_3204437942316951355_n.jpg', 'https://youtu.be/XQPuTJthI_k', 3, 2, 200, 'rfagvbhjkdlawkd', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int NOT NULL,
  `chucvu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`id`, `chucvu`) VALUES
(1, 'Khách hàng'),
(2, 'Nhân viên'),
(3, 'Quản lí');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'Nhà đất'),
(2, 'Nhà cao tầng'),
(3, 'Biệt thự liền kề'),
(4, 'Chung cư');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int NOT NULL,
  `idkh` int NOT NULL,
  `idsp` int NOT NULL,
  `tinhtrang` int NOT NULL,
  `nhanvien` int NOT NULL,
  `ngaytuvan` date NOT NULL,
  `ghichu` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `idkh`, `idsp`, `tinhtrang`, `nhanvien`, `ngaytuvan`, `ghichu`) VALUES
(11, 1, 1, 1, 1, '2023-06-30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `chucvu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `taikhoan`, `matkhau`, `email`, `sdt`, `diachi`, `hoten`, `chucvu`) VALUES
(1, 'vandatpk', '1', 'vandatpk@gmail.com', '0787171897', 'Phương Khoan Sông Lô Vĩnh Phúc', 'Nguyễn Đạt', 3);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `taikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `hoten` varchar(255) NOT NULL,
  `chucvu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `taikhoan`, `matkhau`, `email`, `sdt`, `diachi`, `hoten`, `chucvu`) VALUES
(1, '1', '1', 'ndat165@gmail.com', '11', '1', '1', 3),
(2, 'vandatpk', '1', 'vandatpk@gmail.com', '0787171897', 'Phương Khoan Sông Lô Vĩnh Phúc', 'Nguyễn Đạt', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `id` int NOT NULL,
  `tinhtrang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`id`, `tinhtrang`) VALUES
(1, 'Đã nhận lịch'),
(2, 'Kí kết'),
(3, 'Kí kết thành công'),
(4, 'Hợp đồng bị hủy');

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang_home`
--

CREATE TABLE `tinhtrang_home` (
  `id` int NOT NULL,
  `tinhtrang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tinhtrang_home`
--

INSERT INTO `tinhtrang_home` (`id`, `tinhtrang`) VALUES
(1, 'Chưa bán'),
(2, 'Có tư vấn'),
(3, 'Đang kí kết'),
(4, 'Đã bán');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canho`
--
ALTER TABLE `canho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`),
  ADD KEY `tinhtrang` (`tinhtrang`);

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkh` (`idkh`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `nhanvien` (`nhanvien`),
  ADD KEY `tinhtrang` (`tinhtrang`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chucvu` (`chucvu`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chucvu` (`chucvu`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinhtrang_home`
--
ALTER TABLE `tinhtrang_home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canho`
--
ALTER TABLE `canho`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tinhtrang_home`
--
ALTER TABLE `tinhtrang_home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `canho`
--
ALTER TABLE `canho`
  ADD CONSTRAINT `canho_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `canho` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `canho_ibfk_2` FOREIGN KEY (`tinhtrang`) REFERENCES `tinhtrang_home` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`idkh`) REFERENCES `taikhoan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `khachhang_ibfk_2` FOREIGN KEY (`idsp`) REFERENCES `canho` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `khachhang_ibfk_3` FOREIGN KEY (`nhanvien`) REFERENCES `nhanvien` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `khachhang_ibfk_4` FOREIGN KEY (`tinhtrang`) REFERENCES `tinhtrang` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`chucvu`) REFERENCES `chucvu` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`chucvu`) REFERENCES `chucvu` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
