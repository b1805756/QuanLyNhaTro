-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2022 lúc 09:41 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlnhatro`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongia`
--

CREATE TABLE `dongia` (
  `tenphong` int(11) NOT NULL,
  `giadien` int(11) NOT NULL,
  `gianuoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dongia`
--

INSERT INTO `dongia` (`tenphong`, `giadien`, `gianuoc`) VALUES
(1, 4000, 7000),
(2, 4000, 7000),
(3, 3500, 6000),
(4, 3500, 6000),
(5, 3500, 6000),
(6, 3500, 6000),
(7, 3000, 5000),
(8, 3000, 5000),
(9, 3000, 5000),
(10, 3000, 5000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `tenphong` int(11) NOT NULL,
  `csdien` int(11) NOT NULL,
  `csnuoc` int(11) NOT NULL,
  `chiphikhac` int(11) NOT NULL DEFAULT 0,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `tenphong`, `csdien`, `csnuoc`, `chiphikhac`, `thanhtien`) VALUES
(18, 2, 20, 20, 0, 1670000),
(19, 8, 20, 20, 0, 1390000),
(20, 9, 50, 50, 0, 1530000),
(21, 8, 20, 20, 0, 1410000),
(22, 9, 30, 15, 0, 1280000),
(23, 5, 18, 21, 0, 1507000),
(24, 9, 23, 15, 30000, 1274000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `tenphong` int(11) NOT NULL,
  `giaphong` int(11) NOT NULL,
  `mota` varchar(200) NOT NULL,
  `trangthai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`tenphong`, `giaphong`, `mota`, `trangthai`) VALUES
(1, 1500000, 'Phòng đầu mặt tiền, có thể mở kinh doanh. Diện tích 65m vuông, có gác đúc. Sạch sẽ thoáng mát, điện nước đầy đủ.', 0),
(2, 1400000, 'Phòng còn mới, gác đúc, hơn 50m vuông. Điện nước mạnh, sóng wifi tốt. ', 0),
(3, 1400000, 'Phòng mới, sạch đẹp, gác đúc, điện nước đầy đủ.', 0),
(4, 1300000, 'Phòng mới, có gác, điện nước đầy đủ.', 0),
(5, 1300000, 'Phòng mới, có gác, điện nước đầy đủ.', 0),
(6, 1300000, 'Phòng mới, có gác, điện nước đầy đủ.', 1),
(7, 1200000, 'Phòng mới, có gác, điện nước đầy đủ.', 0),
(8, 1200000, 'Phòng mới, có gác, điện nước đầy đủ.', 1),
(9, 1100000, 'Phòng mới, có gác, điện nước đầy đủ.', 1),
(10, 1100000, 'Phòng mới, có gác, điện nước đầy đủ.', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlchothue`
--

CREATE TABLE `qlchothue` (
  `CCCD` varchar(12) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `NgaySinh` date NOT NULL,
  `QueQuan` varchar(200) NOT NULL,
  `SoDienThoai` varchar(13) NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `TenPhong` int(11) NOT NULL,
  `NgayChoThue` date NOT NULL,
  `NgayTraPhong` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `qlchothue`
--

INSERT INTO `qlchothue` (`CCCD`, `HoTen`, `NgaySinh`, `QueQuan`, `SoDienThoai`, `GioiTinh`, `TenPhong`, `NgayChoThue`, `NgayTraPhong`) VALUES
('354124974', 'Nguyễn Quang Thịnh', '2000-04-05', 'Phụng Hiệp, Hậu Giang.', '0797943241', 'Nam', 8, '2020-06-14', NULL),
('356682343', 'Phạm Văn Nghĩa', '2002-06-06', 'Cần Thơ', '0942301254', 'Nam', 6, '2022-04-30', NULL),
('363256332', 'Nguyễn Trần Đại Phú', '1998-06-10', 'Phụng Hiệp, Hậu Giang.', '0923366233', 'Nam', 5, '2022-04-26', '2022-05-06'),
('364123102', 'Nguyễn Ngọc Thịnh', '2000-03-11', 'Phong Điền, Cần Thơ.', '0898354512', 'Nam', 2, '2020-03-11', '2022-04-29'),
('364181231', 'Lê Văn Nam', '2001-02-15', 'Mỹ Tú, Sóc Trăng', '0932175212', 'Nam', 1, '2022-04-01', '2022-04-29'),
('364181428', 'Lê Thị Mỹ Xuyên', '2003-03-22', 'Vĩnh Châu, Sóc Trăng.', '0392307133', 'Nữ', 9, '2021-08-17', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `CCCD` varchar(12) NOT NULL,
  `MatKhau` varchar(32) NOT NULL,
  `tenphong` int(11) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`CCCD`, `MatKhau`, `tenphong`, `role`) VALUES
('1', '1', 9, 0),
('354124974', '1', 8, 0),
('356682343', '1', 6, 0),
('363256332', '1', 5, 0),
('364123102', '1', 2, 0),
('364181231', '1', 1, 0),
('364181428', '1', 9, 0),
('admin', 'admin', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dongia`
--
ALTER TABLE `dongia`
  ADD PRIMARY KEY (`tenphong`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`,`tenphong`),
  ADD KEY `tenphong` (`tenphong`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`tenphong`);

--
-- Chỉ mục cho bảng `qlchothue`
--
ALTER TABLE `qlchothue`
  ADD PRIMARY KEY (`CCCD`,`TenPhong`),
  ADD KEY `TenPhong` (`TenPhong`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`CCCD`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dongia`
--
ALTER TABLE `dongia`
  ADD CONSTRAINT `dongia_ibfk_1` FOREIGN KEY (`tenphong`) REFERENCES `phong` (`tenphong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`tenphong`) REFERENCES `phong` (`tenphong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `qlchothue`
--
ALTER TABLE `qlchothue`
  ADD CONSTRAINT `qlchothue_ibfk_1` FOREIGN KEY (`TenPhong`) REFERENCES `phong` (`tenphong`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
