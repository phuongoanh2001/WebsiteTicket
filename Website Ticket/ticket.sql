-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 01:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `id`, `taikhoan`, `matkhau`) VALUES
('', 2, 'ngoctran', '123');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(200) NOT NULL,
  `replies` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Xin chào|Chào|Hello', 'Chào mừng bạn đến với Chatbot vé xe DUE!'),
(2, 'Bạn tên gì?|Bạn là ai?|Bạn tên gì|Bạn là ai', 'Tôi là chatbot vé xe DUE!'),
(3, 'Vé tháng bao nhiêu tiền?', 'Vé tháng 20.000 VND'),
(4, 'Vé kì bao nhiêu tiền?', 'Vé kì 110.000 VND'),
(5, 'Bye|Bye bye', 'Chào bạn! Hẹn gặp lại bạn lần sau nhé!'),
(6, 'Mình có một thắc mắc|Mình có một câu hỏi', 'Bạn có thắc mắc gì nào?');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `madonhang` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `ten_kh` varchar(50) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `gia_sp` int(10) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dienthoai` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `tinhtrang` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`madonhang`, `id_kh`, `ten_kh`, `ten_sp`, `gia_sp`, `soluong`, `thanhtien`, `ngaydathang`, `dienthoai`, `email`, `diachi`, `tinhtrang`) VALUES
(14, 7, 'nguyen van a', 'BARD 10010', 4000, 1, 4000, '2015-11-17 12:00:17', 944877038, 'thanhdat@gmail.com', 'hai phong viet nam', b'1'),
(15, 7, 'nguyen van b', 'BMW 10010', 1000, 1, 1000, '2015-11-17 12:01:39', 944877038, 'dathp123321@gmail.com', 'ha noi viet nam', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `dongsanpham`
--

CREATE TABLE `dongsanpham` (
  `id` int(11) NOT NULL,
  `tendongsp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dongsanpham`
--

INSERT INTO `dongsanpham` (`id`, `tendongsp`) VALUES
(1, 'Thẻ kỳ'),
(2, 'Thẻ tháng');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `sosanpham` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `diachi` varchar(50) NOT NULL,
  `tinhtrang` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madonhang`, `id_kh`, `tenkhachhang`, `sosanpham`, `tongtien`, `ngaydathang`, `diachi`, `tinhtrang`) VALUES
(14, 7, 'nguyen van a', 1, 4000, '2015-11-17 12:42:53', 'hai phong viet nam', b'1'),
(15, 7, 'DANG NGOC TRAN', 2, 21000, '2022-03-10 09:38:52', 'chinh huu', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `baohanh` varchar(12) NOT NULL,
  `id` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `gia` int(10) NOT NULL,
  `safeoff` int(10) NOT NULL,
  `category` varchar(3) NOT NULL,
  `avaibiliti` bit(1) NOT NULL DEFAULT b'1',
  `mota` text NOT NULL,
  `soluong` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`baohanh`, `id`, `tensanpham`, `url`, `gia`, `safeoff`, `category`, `avaibiliti`, `mota`, `soluong`) VALUES
('1', 1, 'Vé tháng 5', 'images/vethang5.png', 20000, 0, 'Thẻ', b'1', 'Vé sử dụng cho tháng 1. Đặt vé chỉ với 60s. Chọn vé cực nhanh và thuận tiện. Hoàn ngay 100% nếu không có vé, mang đến sự trải nghiệm trọn vẹn. Hàng ngàn ưu đãi cực chất độc quyền tại DUE.', '1000'),
('1', 2, 'Vé tháng 6', 'images/vethang6.png', 20000, 0, 'Thẻ', b'1', 'Vé sử dụng cho tháng 1. Đặt vé chỉ với 60s. Chọn vé cực nhanh và thuận tiện. Hoàn ngay 100% nếu không có vé, mang đến sự trải nghiệm trọn vẹn. Hàng ngàn ưu đãi cực chất độc quyền tại DUE.', '1000'),
('6', 8, 'Thẻ kỳ II ', 'images/theky2.png', 130000, 0, 'Thẻ', b'1', 'Vé sử dụng cho kỳ I. Đặt vé chỉ với 60s. Chọn vé cực nhanh và thuận tiện. Hoàn ngay 100% nếu không có vé, mang đến sự trải nghiệm trọn vẹn. Hàng ngàn ưu đãi cực chất độc quyền tại DUE.', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan1`
--

CREATE TABLE `taikhoan1` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(13) NOT NULL,
  `idstudent` varchar(12) NOT NULL,
  `class` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan1`
--

INSERT INTO `taikhoan1` (`id`, `username`, `password`, `address`, `gender`, `fname`, `lname`, `email`, `dienthoai`, `idstudent`, `class`) VALUES
(1, 'Đặng Ngọc Trân', 'ngoctran', '30 Chính Hữu Sơn Trà', 'Nữ', 'Trân', 'Đặng', 'dangngoctran2112@gmail.com', '0817830216', '191121521146', '45K21.1'),
(2, 'Đặng Ngọc Trân', 'dangngoctran', '74 Bạch Đằng Hà Nội', 'nam', 'Nguyễn', 'Trinh', 'dangngoctran@gmail.com', '+84081783021', '191121521146', '45K21.2'),
(3, 'dangngoctran', '123', '', '', 'Đặng', 'Trân', 'dangngoctran2112@gmail.com', '+840817830216', '191121521146', '45K21.1'),
(4, 'minh trang', 'Trang123#', '74 Bạch Đằng ', 'nam', 'Nguyễn', 'Trang', 'dangthanhtrang', '+840817830216', '191121521146', '45K21.1'),
(5, 'thanhtuyen', 'Thanhtuyen123@', '', '', 'Đặng', 'Tuyền', 'thanhtuyen@gmail.com', '+840817830216', '191121521159', '45K21.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`madonhang`),
  ADD UNIQUE KEY `tinhtrang` (`tinhtrang`);

--
-- Indexes for table `dongsanpham`
--
ALTER TABLE `dongsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madonhang`),
  ADD UNIQUE KEY `tinhtrang` (`tinhtrang`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan1`
--
ALTER TABLE `taikhoan1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `madonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dongsanpham`
--
ALTER TABLE `dongsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `taikhoan1`
--
ALTER TABLE `taikhoan1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
