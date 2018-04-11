-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 11, 2018 lúc 11:12 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybanmypham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongsanpham`
--

CREATE TABLE `dongsanpham` (
  `ID` int(11) NOT NULL,
  `TenDongSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dongsanpham`
--

INSERT INTO `dongsanpham` (`ID`, `TenDongSP`) VALUES
(1, 'Son & ChÄƒm sÃ³c mÃ´i'),
(2, 'DÆ°á»¡ng da'),
(3, 'Trang Ä‘iá»ƒm'),
(4, 'Táº¯m & chÄƒm sÃ³c cÆ¡ thá»ƒ'),
(5, 'NÆ°á»›c hoa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ID` int(11) NOT NULL,
  `TenKH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ID`, `TenKH`, `Email`, `MatKhau`, `DiaChi`, `SDT`) VALUES
(1, 'Nguyá»…n Thá»‹ Kim Thoa', 'kimthoa@gmail.com', '123456', '119/21/10 An DÆ°Æ¡ng VÆ°Æ¡ng Q5', '0123456789'),
(2, 'Nguyá»…n Minh ThÆ°', 'minhthu@gmail.com', '123456', 'Má»¹ BÃ¬nh TÃ¢n Trá»¥ Long An', '0909090909'),
(3, 'Nguyá»…n Minh ThÆ°', 'minhthu@gmail.com', '123456', 'Má»¹ BÃ¬nh TÃ¢n Trá»¥ Long An', '0909090909'),
(4, 'Nguyá»…n A', 'a@gmail.com', '123', '21', '12121212'),
(5, 'Nguyá»…n VÄƒn B', 'adminb@gmail.com', '123', 'An DÆ°Æ¡ng VÆ°Æ¡ng Q5', '019675846'),
(6, 'Nguyá»…n VÄƒn C', 'adminb@gmail.com', '123', 'An DÆ°Æ¡ng VÆ°Æ¡ng Q5', '019675846'),
(7, 'Nguyá»…n VÄƒn D', 'adminb@gmail.com', '123', 'An DÆ°Æ¡ng VÆ°Æ¡ng Q5', '019675846'),
(8, 'Nguyá»…n VÄƒn D', 'admin', 'admin', '12', '12'),
(9, 'Kim', 'kimthoa1@gmail.com', '123456', '332342', '133232'),
(10, 'Nguyá»…n', 'kimthoa4@gmail.com', '123456', '12', '12'),
(11, 'B', 'kimthoa@gmail.com', '123', '123', '123'),
(12, 'K', 'kimthoa6@gmail.com', '123', '123', '123'),
(13, 'aa', 'kimthoa@gmail.com', '123456', 'Aaa', 'aa'),
(14, 'aa', 'kimthoa@gmail.com', '123456', 'Aaa', 'aa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(11) NOT NULL,
  `TenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `XuatXu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia` int(10) NOT NULL,
  `SoLuongTon` int(5) NOT NULL,
  `IDDongSP` int(5) NOT NULL,
  `IDThuongHieu` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `TenSP`, `XuatXu`, `HinhAnh`, `MoTa`, `Gia`, `SoLuongTon`, `IDDongSP`, `IDThuongHieu`) VALUES
(1, 'ChÃ¬ káº» mÃ y ngang tháº¿ há»‡ má»›i Innisfree Auto Eyebrow Pencil', 'HÃ n Quá»‘c', '001.png', '', 59000, 13, 3, 1),
(2, 'Son 3CE Red Recipe MÃ u 212 Moon ( PhiÃªn Báº£n Valentine NÄƒm Nay)', 'HÃ n Quá»‘c', '002.png', '', 340000, 20, 1, 1),
(3, 'Son DÆ°á»¡ng MÃ´i CÃ³ MÃ u Innnisfree Eco Flower Tint Balm', 'HÃ n Quá»‘c', '007.png', '', 100000, 10, 1, 1),
(4, 'Son kem Amok', 'HÃ n Quá»‘c', '005.png', '', 120000, 70, 1, 1),
(5, 'Son dÆ°á»¡ng mÃ´i GLOW TINT JELLY LIP BALM', 'HÃ n Quá»‘c', '006.png', '', 250000, 20, 1, 1),
(6, 'Kem dÆ°á»¡ng áº©m Innisfree Green tea Balancing Cream', 'HÃ n Quá»‘c', 'innisfree.png', '', 340000, 0, 2, 1),
(7, 'Kem dÆ°á»¡ng tráº¯ng da Innisfree White Tone Up Cream', 'HÃ n Quá»‘c', '011.png', '', 320000, 40, 2, 1),
(8, 'Kem DÆ°á»¡ng Da Phong Lan TÃ­m Innisfree Orchid Enriched Cream', 'HÃ n Quá»‘c', '009.png', '', 310000, 34, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `ID` int(11) NOT NULL,
  `TenThuongHieu` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`ID`, `TenThuongHieu`) VALUES
(1, 'Innisfree'),
(3, 'ELF'),
(4, 'O HUI'),
(5, 'The Face Shop'),
(6, 'The Body Shop'),
(7, 'Laneige');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `dongsanpham`
--
ALTER TABLE `dongsanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `dongsanpham`
--
ALTER TABLE `dongsanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
