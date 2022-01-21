-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 02:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanchuyenghanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nameAdmin` varchar(50) NOT NULL,
  `matkhau` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nameAdmin`, `matkhau`) VALUES
('VoDucKhang', 'Voduckhang'),
('VoDucKhang', '51802058');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `madanhmuc` varchar(50) NOT NULL,
  `tendanhmuc` varchar(50) DEFAULT NULL,
  `soluongdausach` int(11) DEFAULT NULL,
  `madonhang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`madanhmuc`, `tendanhmuc`, `soluongdausach`, `madonhang`) VALUES
('C001', 'ĐIỀU HÒA', 200, 'OR001'),
('C0010', 'Máy Cũ Giá Rẻ', 1000, 'OR003'),
('C002', 'LAPTOP', 300, 'OR002'),
('C003', 'Máy giặt', 500, 'OR001'),
('C004', 'Tủ Lạnh', 200, 'OR001'),
('C005', 'Máy nước nóng', 1000, 'OR001'),
('C009', 'PC - LINH KIỆN', 2000, 'OR004');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` varchar(50) NOT NULL,
  `makh` varchar(50) NOT NULL,
  `tendonhang` varchar(50) DEFAULT NULL,
  `ngaytaodon` date DEFAULT NULL,
  `noisanxuat` varchar(100) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `tongtien` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madonhang`, `makh`, `tendonhang`, `ngaytaodon`, `noisanxuat`, `soluong`, `tongtien`) VALUES
('OR001', '000001', 'TV', '2021-11-11', ' America', 500, ' 7000000'),
('OR002', '00002', 'Laptop', '2021-11-11', 'Germany', 10, '15000000'),
('OR003', 'CUS06', 'Đơn Hàng Bình Định', '2022-01-11', 'VIETNAM', 500, '700000000'),
('OR004', 'CUS02', 'Máy Lạnh', '0000-00-00', 'France', 1567, '273456799'),
('OR006', 'CUS01', 'Electric', '2022-01-10', 'Italy', 1, '2000000000'),
('OR007', 'CUS01', 'Try ', '2022-01-18', 'Italy', 1000, '11001100');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(50) NOT NULL,
  `tenkh` varchar(50) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `sodienthoai` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `matkhau` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `diachi`, `sodienthoai`, `email`, `matkhau`) VALUES
('000001', 'Võ Đức An Khang', '92 Phan Bội Châu', '0336286994', 'khangvo37@gmail.com', '   12345'),
('00002', 'Võ Đức Minh', '180 Trường Chinh', ' 012345678', 'voducankhang@gmail.com', ' 12345'),
('00003', 'Elpuga', 'Cao Lỗ, phường 4', '0336286994', 'khangvo37@gmail.com', 'abc12345'),
('CUS01', 'Savador', '1 Main Street North', '8041444444', 'savador@gmail.com', '1553'),
('CUS02', 'Evardor', '1 Main Street South', '9051555555', 'evador@gmail.com', '19055'),
('CUS03	', 'Hillsong', '242 Brook Street', '9057727722', 'hillsong@gmail.com', '12345'),
('CUS06', 'Jeada	', '570 Hillcrest Circle', '9051032311', 'jeada@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
('CUS08', 'Võ Đức Khang', 'Phú Ninh, Quảng Nam', '09998877', 'khangvo37@gmail.com', '202cb962ac59075b964b07152d234b70'),
('CUS09', 'Vsoul', 'Phú Nhuận', '0336286994', 'khangvo37@gmail.com', '202cb962ac59075b964b07152d234b70'),
('CUS11', 'Obito', 'Cà Mau', '033445566', 'obito@gmail.com', '202cb962ac59075b964b07152d234b70'),
('CUS15', 'PRDSIX', 'Trường THPT Nguyễn Dục', '0336286994', 'khangvo37@gmail.com', '202cb962ac59075b964b07152d234b70'),
('CUS17', 'Võ Đức Khang', 'topaz city apartment', '0336286994', 'duckhang37@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` varchar(50) NOT NULL,
  `madanhmuc` varchar(50) NOT NULL,
  `madonhang` varchar(50) DEFAULT NULL,
  `tensanpham` varchar(50) DEFAULT NULL,
  `giatien` double DEFAULT NULL,
  `hinhanh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `madanhmuc`, `madonhang`, `tensanpham`, `giatien`, `hinhanh`) VALUES
('PD0010', 'C003', 'OR003', 'Samsung Inverter WW10TP44DSH', 14190000, 'samsung-rt22m4032by-sv-300x300.jpg'),
('PD0011', 'C004', 'OR003', 'Samsung Inverter 236 lít RT22M4032BY/SV', 7490000, '1641179280-samsung-rt22m4032by-sv-300x300.jpg'),
('PD0012', 'C005', 'OR003', 'Máy nước nóng Ferroli MIDO-MXP ', 4190000, '1641179567-truc-tiep-ferroli-4500w-mido-mxp-45s.jpg'),
('PD005', 'C003', 'OR001', 'Xiaomi 11 Lite 5G NE', 8490000, '1641089712-Xiaomi-11-Lite-5G-NE.jpg'),
('PD007', 'C002', 'OR004', 'MacBook Air 13', 25900000, '1641118420-macbook-air-gallery1-20201110_GEO_US.jpg'),
('PD008', 'C001', 'OR002', 'Quạt điều hòa Kangaroo KG50F58 Quạt điều hòa Kanga', 2550000, '1641177971-quat-dieu-hoa-kangaroo-kg50f58-dd.jpg'),
('PD009', 'C002', 'OR001', 'Laptop Lenovo IdeaPad Slim 3 ', 13799000, '1641178690-lenovo-ideapad-5-xamnhat-dd.jpg'),
('PD012', 'C0010', 'OR001', 'Samsung Galaxy Z Fold3 5G 512GB', 34639000, '1642076624-samsung-galaxy-z-fold3-xanh-2.jpg'),
('PD013', 'C002', 'OR002', 'GALAXY TAB S7 FE', 7000000, '1642244106-lenovo-ideapad-5-xamnhat-dd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `thantoan`
--

CREATE TABLE `thantoan` (
  `mathanhtoan` varchar(50) NOT NULL,
  `madonhang` varchar(50) NOT NULL,
  `phuongthucthanhtoan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thantoan`
--

INSERT INTO `thantoan` (`mathanhtoan`, `madonhang`, `phuongthucthanhtoan`) VALUES
('P002', 'OR002', 'COD'),
('PM001', 'OR001', 'Banking');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`madanhmuc`),
  ADD KEY `madonhang` (`madonhang`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madonhang`),
  ADD KEY `fk_dh_kh` (`makh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `madonhang` (`madonhang`),
  ADD KEY `madanhmuc` (`madanhmuc`);

--
-- Indexes for table `thantoan`
--
ALTER TABLE `thantoan`
  ADD PRIMARY KEY (`mathanhtoan`),
  ADD KEY `madonhang` (`madonhang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD CONSTRAINT `danhmucsanpham_ibfk_1` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_dh_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`madanhmuc`) REFERENCES `danhmucsanpham` (`madanhmuc`);

--
-- Constraints for table `thantoan`
--
ALTER TABLE `thantoan`
  ADD CONSTRAINT `thantoan_ibfk_1` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
