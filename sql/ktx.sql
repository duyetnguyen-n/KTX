-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2023 at 03:20 PM
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
-- Database: `ktx`
--

-- --------------------------------------------------------

--
-- Table structure for table `Blog`
--

CREATE TABLE `Blog` (
  `id` int(11) NOT NULL,
  `tenBaiViet` text NOT NULL,
  `noiDung` text NOT NULL,
  `ngayTao` date NOT NULL,
  `nguoiTao` varchar(100) NOT NULL,
  `anhDaiDien` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `ma_sinh_vien` varchar(255) NOT NULL,
  `ten_nguoi_dung` varchar(255) NOT NULL,
  `ho_ten` text NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `trang_thai` varchar(50) DEFAULT 'sẵn sàng',
  `anh_dai_dien` varchar(255) DEFAULT 'Facebook-Avatar_3.png',
  `reset_token` varchar(255) DEFAULT NULL,
  `quyen` text NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `ma_sinh_vien`, `ten_nguoi_dung`, `ho_ten`, `mat_khau`, `email`, `so_dien_thoai`, `trang_thai`, `anh_dai_dien`, `reset_token`, `quyen`) VALUES
(1, '85723', 'ntduyet', 'Nguyễn Thế Duyệt', '$2y$10$j0LwdHs/dnGwJi4fmnIJAu1oPt9tC7ZDddHXrP6yvxe68f02O/XYq', 'nguyentheduyet.mtp@gmail.com', '0982763267', 'sẵn sàng', 'avt1.jpg', NULL, 'client'),
(3, '999', 'ha', 'Nguyễn Thị Như Hà', '$2y$10$vzVcvnk0dB/6Db3FuuvfheejuyVmjZrBbJvBhbfyAz8xmMl5dECWe', 'ha@gmail.com', '0976473823', 'sẵn sàng', 'logo.jpeg', NULL, 'client'),
(4, '9998', 'Duyet1', 'Nguyễn Thị Như Hà', '$2y$10$flrowRQx97ll.UxHQAMuLun0XI7SC2CN..RX89DbH8mHkrzu.VtQi', 'duyet@gmail.com', '0940214943', 'sẵn sàng', 'avt1.jpg', NULL, 'admin'),
(6, '86093', 'duyet', 'Nguyễn Thế Duyệt', '$2y$10$G63t4THE.AhI69RHkoLniOGn7Y2KL3WxOv59SfjDGyy3alVzo0ici', 'ha86093@st.viamru.edu.vn', '0982763267', 'sẵn sàng', '', NULL, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `dang_ky_dich_vu`
--

CREATE TABLE `dang_ky_dich_vu` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(255) NOT NULL,
  `id_dichvu` int(11) NOT NULL,
  `ngay_dang_ky` date NOT NULL,
  `nguoi_tao` varchar(255) NOT NULL,
  `ngay_tao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dang_ky_dich_vu`
--

INSERT INTO `dang_ky_dich_vu` (`id`, `tendangnhap`, `id_dichvu`, `ngay_dang_ky`, `nguoi_tao`, `ngay_tao`) VALUES
(1, 'Duyet1', 6, '2023-12-22', 'Duyet1', '2023-12-20 13:08:15');

--
-- Triggers `dang_ky_dich_vu`
--
DELIMITER $$
CREATE TRIGGER `dang_ky_dich_vu_after_insert` AFTER INSERT ON `dang_ky_dich_vu` FOR EACH ROW BEGIN
    -- Cộng tổng số tiền ở bảng thanh_toan khi đăng ký dịch vụ
    UPDATE thanh_toan
    SET tong_so_tien = tong_so_tien + (SELECT gia FROM dichvu WHERE id = NEW.id_dichvu)
    WHERE tendangnhap = NEW.tendangnhap;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `huy_dang_ky_dich_vu_after_delete` AFTER DELETE ON `dang_ky_dich_vu` FOR EACH ROW BEGIN
    -- Trừ tổng số tiền ở bảng thanh_toan khi hủy đăng ký dịch vụ
    UPDATE thanh_toan
    SET tong_so_tien = GREATEST(tong_so_tien - (SELECT gia FROM dichvu WHERE id = OLD.id_dichvu), 0)
    WHERE tendangnhap = OLD.tendangnhap;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dang_ky_phong`
--

CREATE TABLE `dang_ky_phong` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(255) DEFAULT NULL,
  `idphong` int(11) DEFAULT NULL,
  `tu_ngay` date DEFAULT NULL,
  `den_ngay` date DEFAULT NULL,
  `ngay_tao` datetime DEFAULT current_timestamp(),
  `anh_dai_dien` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dang_ky_phong`
--

INSERT INTO `dang_ky_phong` (`id`, `tendangnhap`, `idphong`, `tu_ngay`, `den_ngay`, `ngay_tao`, `anh_dai_dien`) VALUES
(9, 'Duyet1', 4, '2022-10-20', '2023-02-12', '2023-12-20 14:38:08', 'sp-7.webp');

--
-- Triggers `dang_ky_phong`
--
DELIMITER $$
CREATE TRIGGER `dang_ky_phong_after_insert` AFTER INSERT ON `dang_ky_phong` FOR EACH ROW BEGIN
    -- Tăng số người hiện tại của phòng lên 1
    UPDATE phong
    SET so_luong_hien_tai = so_luong_hien_tai + 1
    WHERE id = NEW.idphong;

    -- Kiểm tra xem số người hiện tại có bằng sức chứa không
    IF (SELECT so_luong_hien_tai FROM phong WHERE id = NEW.idphong) = (SELECT suc_chua FROM phong WHERE id = NEW.idphong) THEN
        -- Nếu bằng, cập nhật trạng thái thành "Đủ"
        UPDATE phong
        SET trang_thai = 'Đủ'
        WHERE id = NEW.idphong;
    END IF;

    -- Cộng tổng số tiền ở bảng thanh_toan khi đăng ký phòng
    UPDATE thanh_toan
    SET tong_so_tien = tong_so_tien + (SELECT gia FROM phong WHERE id = NEW.idphong)
    WHERE tendangnhap = NEW.tendangnhap;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `huy_dang_ky_phong_after_delete` AFTER DELETE ON `dang_ky_phong` FOR EACH ROW BEGIN
    -- Trừ tổng số tiền ở bảng thanh_toan khi hủy đăng ký phòng
    UPDATE thanh_toan
    SET tong_so_tien = GREATEST(tong_so_tien - (SELECT gia FROM phong WHERE id = OLD.id), 0)
    WHERE tendangnhap = OLD.tendangnhap;

    -- Giảm số người hiện tại của phòng xuống 1
    UPDATE phong
    SET so_luong_hien_tai = so_luong_hien_tai - 1
    WHERE id = OLD.id;

    -- Kiểm tra xem số người hiện tại có nhỏ hơn sức chứa không
    IF (SELECT so_luong_hien_tai FROM phong WHERE id = OLD.id) < (SELECT suc_chua FROM phong WHERE id = OLD.id) THEN
        -- Nếu nhỏ hơn, cập nhật trạng thái thành "Chưa đủ"
        UPDATE phong
        SET trang_thai = 'Chưa đủ'
        WHERE id = OLD.id;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dang_ky_trang_thiet_bi`
--

CREATE TABLE `dang_ky_trang_thiet_bi` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(255) NOT NULL,
  `ma_trang_thiet_bi` int(11) NOT NULL,
  `ngay_dang_ky` date NOT NULL,
  `nguoi_tao` varchar(255) NOT NULL,
  `ngay_tao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Triggers `dang_ky_trang_thiet_bi`
--
DELIMITER $$
CREATE TRIGGER `dang_ky_trang_thiet_bi_after_insert` AFTER INSERT ON `dang_ky_trang_thiet_bi` FOR EACH ROW BEGIN
    -- Cộng tổng số tiền ở bảng thanh_toan khi đăng ký trang thiết bị
    UPDATE thanh_toan
    SET tong_so_tien = tong_so_tien + (SELECT giaThue FROM trangthietbi WHERE MaTrangThietBi = NEW.ma_trang_thiet_bi)
    WHERE tendangnhap = NEW.tendangnhap;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `huy_dang_ky_trang_thiet_bi_after_delete` AFTER DELETE ON `dang_ky_trang_thiet_bi` FOR EACH ROW BEGIN
    -- Trừ tổng số tiền ở bảng thanh_toan khi hủy đăng ký trang thiết bị
    UPDATE thanh_toan
    SET tong_so_tien = GREATEST(tong_so_tien - (SELECT giaThue FROM trangthietbi WHERE MaTrangThietBi = OLD.ma_trang_thiet_bi), 0)
    WHERE tendangnhap = OLD.tendangnhap;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `ten_dv` varchar(255) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `trangthai` varchar(255) NOT NULL,
  `ngaytao` datetime DEFAULT current_timestamp(),
  `nguoitao` varchar(255) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`id`, `ten_dv`, `gia`, `trangthai`, `ngaytao`, `nguoitao`, `anh`) VALUES
(6, 'Phòng GYM', 6.00, 'Tạm ngưng', '2023-12-10 22:55:24', 'admin', 'sp-6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `dich_vu_da_dang_ky`
--

CREATE TABLE `dich_vu_da_dang_ky` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(255) NOT NULL,
  `id_dichvu` int(11) NOT NULL,
  `ngay_dang_ky` date NOT NULL,
  `nguoi_tao` varchar(255) NOT NULL,
  `ngay_tao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dich_vu_da_dang_ky`
--

INSERT INTO `dich_vu_da_dang_ky` (`id`, `tendangnhap`, `id_dichvu`, `ngay_dang_ky`, `nguoi_tao`, `ngay_tao`) VALUES
(1, 'ntduyet', 6, '2023-12-21', 'ntduyet', '2023-12-20 13:13:15'),
(2, 'ntduyet', 6, '2023-12-22', 'ntduyet', '2023-12-20 14:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `donvi`
--

CREATE TABLE `donvi` (
  `MaDonVi` int(11) NOT NULL,
  `TenDonVi` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khuvuc`
--

CREATE TABLE `khuvuc` (
  `id` int(11) NOT NULL,
  `tenkhu` varchar(255) NOT NULL,
  `ngaytao` datetime DEFAULT current_timestamp(),
  `nguoitao` varchar(255) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuvuc`
--

INSERT INTO `khuvuc` (`id`, `tenkhu`, `ngaytao`, `nguoitao`, `anh`) VALUES
(0, ' A', '0000-00-00 00:00:00', 'admin', 'anh');

-- --------------------------------------------------------

--
-- Table structure for table `loaitrangthietbi`
--

CREATE TABLE `loaitrangthietbi` (
  `MaLoaiTrangThietBi` int(11) NOT NULL,
  `TenLoaiTrangThietBi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `SoLuong` int(11) DEFAULT 0,
  `NgayTao` datetime DEFAULT current_timestamp(),
  `NguoiTao` varchar(255) NOT NULL,
  `anh` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`, `status`) VALUES
('admin', 'admin123', 'admin', 1),
('duyet', 'duyet123', 'client', 1),
('d', '1', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id` int(11) NOT NULL,
  `ten_phong` text NOT NULL,
  `suc_chua` int(11) NOT NULL,
  `id_tang` int(11) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `trang_thai` text NOT NULL DEFAULT 'Chưa đủ',
  `anh_dai_dien` varchar(500) DEFAULT NULL,
  `anh_khac` varchar(1000) DEFAULT NULL,
  `nguoi_tao` text DEFAULT NULL,
  `noi_dung` text DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `so_luong_hien_tai` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id`, `ten_phong`, `suc_chua`, `id_tang`, `gia`, `trang_thai`, `anh_dai_dien`, `anh_khac`, `nguoi_tao`, `noi_dung`, `mo_ta`, `so_luong_hien_tai`) VALUES
(4, 'Phòng 101', 8, 1, 10, 'Đủ', 'sp-7.webp', 'sp-9.jpeg', 'Duyet1', '<h3>AMENITIES AND SERVICES</h3>\r\n\r\n<ul>\r\n	<li>Priviliged in Bruges</li>\r\n	<li>High satisfaction</li>\r\n	<li>Unparalleded service</li>\r\n	<li>Aenean sollicitudin</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Priviliged in Bruges</li>\r\n	<li>High satisfaction</li>\r\n	<li>Unparalleded service</li>\r\n	<li>Aenean sollicitudin</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Priviliged in Bruges</li>\r\n	<li>High satisfaction</li>\r\n	<li>Unparalleded service</li>\r\n	<li>Aenean sollicitudin</li>\r\n</ul>\r\n\r\n<h3>PRICING PLANS</h3>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>Mon</th>\r\n			<th>Tue</th>\r\n			<th>Wed</th>\r\n			<th>Thu</th>\r\n			<th>Fri</th>\r\n			<th>Sat</th>\r\n			<th>Sun</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>$200</td>\r\n			<td>$150</td>\r\n			<td>$150</td>\r\n			<td>$100</td>\r\n			<td>$300</td>\r\n			<td>$210</td>\r\n			<td>$250</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>REVIEWS</h3>\r\n\r\n<p><img alt=\"\" src=\"images/blog/author1.jpg\" /></p>\r\n\r\n<h4>David Bobby</h4>\r\n\r\n<p>Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Vestibulum sed metus in lorem tristique ullamcorper id vitae erat. Nulla mollis sapien sollicitudin lacinia lacinia.</p>\r\n\r\n<h4>Add review</h4>\r\n\r\n<form action=\"#\" method=\"post\">\r\n<p>Your rating</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Your review</p>\r\n<textarea cols=\"8\" required=\"\" rows=\"5\"></textarea></form>\r\n', '<p>This large suite in the courtyard adobe has a Queen-size built-in platform bed and a large indoor/outdoor stone tub with a rain shower. The suite features a full kitchen with breakfast bar, a spacious sitting area with a wood burning fireplace. The private patio offers dramatic views of the San Jacinto Mountains. The suite features a full kitchen with breakfast bar, a spacious sitting area with a wood burning fireplace. The private patio offers dramatic views of the San Jacinto Mountains.</p>\r\n\r\n<p>The suite features a full kitchen with breakfast bar, a spacious sitting area with a wood burning fireplace. The private patio offers dramatic views of the San Jacinto Mountains.</p>\r\n', 9),
(5, 'Phòng 102', 6, 1, 15, 'Chưa đủ', 'sp-8.webp', 'sp-5.webp', 'Duyet1', '<h3>AMENITIES AND SERVICES</h3>\r\n\r\n<ul>\r\n	<li>Priviliged in Bruges</li>\r\n	<li>High satisfaction</li>\r\n	<li>Unparalleded service</li>\r\n	<li>Aenean sollicitudin</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Priviliged in Bruges</li>\r\n	<li>High satisfaction</li>\r\n	<li>Unparalleded service</li>\r\n	<li>Aenean sollicitudin</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Priviliged in Bruges</li>\r\n	<li>High satisfaction</li>\r\n	<li>Unparalleded service</li>\r\n	<li>Aenean sollicitudin</li>\r\n</ul>\r\n\r\n<h3>PRICING PLANS</h3>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>Mon</th>\r\n			<th>Tue</th>\r\n			<th>Wed</th>\r\n			<th>Thu</th>\r\n			<th>Fri</th>\r\n			<th>Sat</th>\r\n			<th>Sun</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>$200</td>\r\n			<td>$150</td>\r\n			<td>$150</td>\r\n			<td>$100</td>\r\n			<td>$300</td>\r\n			<td>$210</td>\r\n			<td>$250</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>REVIEWS</h3>\r\n\r\n<p><img alt=\"\" src=\"images/blog/author1.jpg\" /></p>\r\n\r\n<h4>David Bobby</h4>\r\n\r\n<p>Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Vestibulum sed metus in lorem tristique ullamcorper id vitae erat. Nulla mollis sapien sollicitudin lacinia lacinia.</p>\r\n\r\n<h4>Add review</h4>\r\n\r\n<form action=\"#\" method=\"post\">\r\n<p>Your rating</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Your review</p>\r\n<textarea cols=\"8\" required=\"\" rows=\"5\"></textarea></form>\r\n', '<p>This large suite in the courtyard adobe has a Queen-size built-in platform bed and a large indoor/outdoor stone tub with a rain shower. The suite features a full kitchen with breakfast bar, a spacious sitting area with a wood burning fireplace. The private patio offers dramatic views of the San Jacinto Mountains. The suite features a full kitchen with breakfast bar, a spacious sitting area with a wood burning fireplace. The private patio offers dramatic views of the San Jacinto Mountains.</p>\r\n\r\n<p>The suite features a full kitchen with breakfast bar, a spacious sitting area with a wood burning fireplace. The private patio offers dramatic views of the San Jacinto Mountains.</p>\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `phong_da_dang_ky`
--

CREATE TABLE `phong_da_dang_ky` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(255) DEFAULT NULL,
  `idphong` int(11) DEFAULT NULL,
  `tu_ngay` date DEFAULT NULL,
  `den_ngay` date DEFAULT NULL,
  `ngay_tao` datetime DEFAULT current_timestamp(),
  `anh_dai_dien` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phong_da_dang_ky`
--

INSERT INTO `phong_da_dang_ky` (`id`, `tendangnhap`, `idphong`, `tu_ngay`, `den_ngay`, `ngay_tao`, `anh_dai_dien`) VALUES
(4, 'ntduyet', 2, '2003-10-20', '2023-02-12', '2023-12-16 21:15:22', 'sp-3.webp'),
(5, 'ntduyet', 3, '2003-10-20', '2023-02-12', '2023-12-16 22:43:50', 'sp-3.webp'),
(7, 'ntduyet', 5, '2003-10-20', '2023-02-12', '2023-12-19 21:44:31', 'sp-8.webp'),
(8, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-19 21:55:06', 'sp-5.webp'),
(9, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 00:52:52', 'sp-5.webp'),
(10, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(11, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(12, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(13, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(14, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(15, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(16, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(17, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(18, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(19, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(20, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(21, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(22, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(23, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:23:45', 'sp-5.webp'),
(24, 'ntduyet', 3, '2022-10-20', '2023-02-12', '2023-12-20 14:41:35', 'sp-5.webp'),
(25, 'ntduyet', 4, '2020-10-20', '2023-02-12', '2023-12-20 14:43:26', 'sp-7.webp'),
(26, 'ntduyet', 5, '2003-10-20', '2023-02-12', '2023-12-20 14:46:49', 'sp-8.webp'),
(27, 'ntduyet', 4, '2003-10-20', '2023-02-12', '2023-12-20 15:05:56', 'sp-7.webp'),
(28, 'duyet', 4, '2003-10-20', '2023-02-12', '2023-12-20 15:09:00', 'sp-7.webp'),
(29, 'duyet', 4, '2003-10-20', '2023-02-12', '2023-12-20 15:10:19', 'sp-7.webp');

--
-- Triggers `phong_da_dang_ky`
--
DELIMITER $$
CREATE TRIGGER `phong_da_dang_ky_after_insert` AFTER INSERT ON `phong_da_dang_ky` FOR EACH ROW BEGIN
    -- Tăng số người hiện tại của phòng lên 1
    UPDATE phong
    SET so_luong_hien_tai = so_luong_hien_tai + 1
    WHERE id = NEW.idphong;

    -- Kiểm tra xem số người hiện tại có bằng sức chứa không
    IF (SELECT so_luong_hien_tai FROM phong WHERE id = NEW.idphong) = (SELECT suc_chua FROM phong WHERE id = NEW.idphong) THEN
        -- Nếu bằng, cập nhật trạng thái thành "Đủ"
        UPDATE phong
        SET trang_thai = 'Đủ'
        WHERE id = NEW.idphong;
    END IF;

    -- Cộng tổng số tiền ở bảng thanh_toan khi đăng ký phòng
    UPDATE thanh_toan
    SET tong_so_tien = tong_so_tien + (SELECT gia FROM phong WHERE id = NEW.idphong)
    WHERE tendangnhap = NEW.tendangnhap;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `phong_huy_dang_ky_after_delete` BEFORE DELETE ON `phong_da_dang_ky` FOR EACH ROW BEGIN
    -- Trừ tổng số tiền ở bảng thanh_toan khi hủy đăng ký phòng
    UPDATE thanh_toan
    SET tong_so_tien = GREATEST(tong_so_tien - (SELECT gia FROM phong WHERE id = OLD.id), 0)
    WHERE tendangnhap = OLD.tendangnhap;

    -- Giảm số người hiện tại của phòng xuống 1
    UPDATE phong
    SET so_luong_hien_tai = so_luong_hien_tai - 1
    WHERE id = OLD.id;

    -- Kiểm tra xem số người hiện tại có nhỏ hơn sức chứa không
    IF (SELECT so_luong_hien_tai FROM phong WHERE id = OLD.id) < (SELECT suc_chua FROM phong WHERE id = OLD.id) THEN
        -- Nếu nhỏ hơn, cập nhật trạng thái thành "Chưa đủ"
        UPDATE phong
        SET trang_thai = 'Chưa đủ'
        WHERE id = OLD.id;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tang`
--

CREATE TABLE `tang` (
  `id` int(11) NOT NULL,
  `ten_tang` varchar(255) NOT NULL,
  `khuvuc` varchar(255) NOT NULL,
  `ngaytao` datetime DEFAULT current_timestamp(),
  `nguoitao` text NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tang`
--

INSERT INTO `tang` (`id`, `ten_tang`, `khuvuc`, `ngaytao`, `nguoitao`, `anh`) VALUES
(1, 'Tầng 1', 'B', '2023-12-12 00:07:43', 'admin', 'avt1.jpg'),
(3, 'Tầng 2', 'A', '0000-00-00 00:00:00', 'admin', 'avt1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `thanh_toan`
--

CREATE TABLE `thanh_toan` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(255) NOT NULL,
  `ngay_thanh_toan` date NOT NULL DEFAULT current_timestamp(),
  `tong_so_tien` decimal(10,2) DEFAULT 0.00,
  `phuong_thuc_thanh_toan` varchar(255) NOT NULL,
  `nguoi_tao` varchar(255) NOT NULL,
  `ngay_tao` datetime DEFAULT current_timestamp(),
  `trang_thai` text NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanh_toan`
--

INSERT INTO `thanh_toan` (`id`, `tendangnhap`, `ngay_thanh_toan`, `tong_so_tien`, `phuong_thuc_thanh_toan`, `nguoi_tao`, `ngay_tao`, `trang_thai`) VALUES
(12, 'duyet', '2023-12-20', NULL, 'Loan', 'Duyet1', '2023-12-20 15:09:14', 'Completed'),
(13, 'duyet', '2023-12-20', NULL, 'Loan', 'Duyet1', '2023-12-20 15:20:13', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `thanh_toan_demo`
--

CREATE TABLE `thanh_toan_demo` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(255) NOT NULL,
  `ngay_thanh_toan` date NOT NULL,
  `tong_so_tien` decimal(10,2) DEFAULT 0.00,
  `phuong_thuc_thanh_toan` varchar(255) NOT NULL,
  `trang_thai` text DEFAULT 'Pending',
  `nguoi_tao` varchar(255) NOT NULL,
  `ngay_tao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanh_toan_demo`
--

INSERT INTO `thanh_toan_demo` (`id`, `tendangnhap`, `ngay_thanh_toan`, `tong_so_tien`, `phuong_thuc_thanh_toan`, `trang_thai`, `nguoi_tao`, `ngay_tao`) VALUES
(13, 'ha', '9999-10-10', 0.00, 'Loan', 'Pending', 'Duyet1', '2023-12-20 01:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `trangthietbi`
--

CREATE TABLE `trangthietbi` (
  `MaTrangThietBi` int(11) NOT NULL,
  `MaLoaiTrangThietBi` int(11) DEFAULT NULL,
  `TenTrangThietBi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `GiaThue` decimal(10,2) DEFAULT NULL,
  `AnhTrangThietBi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Triggers `trangthietbi`
--
DELIMITER $$
CREATE TRIGGER `Trg_AfterDeleteTrangThietBi` AFTER DELETE ON `trangthietbi` FOR EACH ROW UPDATE LoaiTrangThietBi
SET SoLuong = CASE WHEN SoLuong > 0 THEN SoLuong - 1 ELSE 0 END
WHERE MaLoaiTrangThietBi = OLD.MaLoaiTrangThietBi
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Trg_AfterInsertTrangThietBi` AFTER INSERT ON `trangthietbi` FOR EACH ROW UPDATE LoaiTrangThietBi
SET SoLuong = SoLuong + 1
WHERE MaLoaiTrangThietBi = NEW.MaLoaiTrangThietBi
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `trang_thiet_bi_da_dang_ky`
--

CREATE TABLE `trang_thiet_bi_da_dang_ky` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(255) NOT NULL,
  `ma_trang_thiet_bi` int(11) NOT NULL,
  `ngay_dang_ky` date NOT NULL,
  `nguoi_tao` varchar(255) NOT NULL,
  `ngay_tao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Blog`
--
ALTER TABLE `Blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `ma_sinh_vien` (`ma_sinh_vien`),
  ADD UNIQUE KEY `ten_nguoi_dung` (`ten_nguoi_dung`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- Indexes for table `dang_ky_dich_vu`
--
ALTER TABLE `dang_ky_dich_vu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tendangnhap` (`tendangnhap`),
  ADD KEY `id_dichvu` (`id_dichvu`);

--
-- Indexes for table `dang_ky_phong`
--
ALTER TABLE `dang_ky_phong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tendangnhap` (`tendangnhap`),
  ADD KEY `idphong` (`idphong`);

--
-- Indexes for table `dang_ky_trang_thiet_bi`
--
ALTER TABLE `dang_ky_trang_thiet_bi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tendangnhap` (`tendangnhap`),
  ADD KEY `ma_trang_thiet_bi` (`ma_trang_thiet_bi`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dich_vu_da_dang_ky`
--
ALTER TABLE `dich_vu_da_dang_ky`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tendangnhap` (`tendangnhap`),
  ADD KEY `id_dichvu` (`id_dichvu`);

--
-- Indexes for table `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`MaDonVi`);

--
-- Indexes for table `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaitrangthietbi`
--
ALTER TABLE `loaitrangthietbi`
  ADD PRIMARY KEY (`MaLoaiTrangThietBi`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phong_da_dang_ky`
--
ALTER TABLE `phong_da_dang_ky`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tendangnhap` (`tendangnhap`),
  ADD KEY `idphong` (`idphong`);

--
-- Indexes for table `tang`
--
ALTER TABLE `tang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanh_toan`
--
ALTER TABLE `thanh_toan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tendangnhap` (`tendangnhap`);

--
-- Indexes for table `thanh_toan_demo`
--
ALTER TABLE `thanh_toan_demo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tendangnhap` (`tendangnhap`);

--
-- Indexes for table `trangthietbi`
--
ALTER TABLE `trangthietbi`
  ADD PRIMARY KEY (`MaTrangThietBi`);

--
-- Indexes for table `trang_thiet_bi_da_dang_ky`
--
ALTER TABLE `trang_thiet_bi_da_dang_ky`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tendangnhap` (`tendangnhap`),
  ADD KEY `ma_trang_thiet_bi` (`ma_trang_thiet_bi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Blog`
--
ALTER TABLE `Blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dang_ky_dich_vu`
--
ALTER TABLE `dang_ky_dich_vu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dang_ky_phong`
--
ALTER TABLE `dang_ky_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dang_ky_trang_thiet_bi`
--
ALTER TABLE `dang_ky_trang_thiet_bi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dich_vu_da_dang_ky`
--
ALTER TABLE `dich_vu_da_dang_ky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `phong_da_dang_ky`
--
ALTER TABLE `phong_da_dang_ky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tang`
--
ALTER TABLE `tang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thanh_toan`
--
ALTER TABLE `thanh_toan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `thanh_toan_demo`
--
ALTER TABLE `thanh_toan_demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `trang_thiet_bi_da_dang_ky`
--
ALTER TABLE `trang_thiet_bi_da_dang_ky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dang_ky_dich_vu`
--
ALTER TABLE `dang_ky_dich_vu`
  ADD CONSTRAINT `dang_ky_dich_vu_ibfk_1` FOREIGN KEY (`tendangnhap`) REFERENCES `client` (`ten_nguoi_dung`),
  ADD CONSTRAINT `dang_ky_dich_vu_ibfk_2` FOREIGN KEY (`id_dichvu`) REFERENCES `dichvu` (`id`);

--
-- Constraints for table `dang_ky_phong`
--
ALTER TABLE `dang_ky_phong`
  ADD CONSTRAINT `dang_ky_phong_ibfk_1` FOREIGN KEY (`tendangnhap`) REFERENCES `client` (`ten_nguoi_dung`),
  ADD CONSTRAINT `dang_ky_phong_ibfk_2` FOREIGN KEY (`idphong`) REFERENCES `phong` (`id`);

--
-- Constraints for table `dang_ky_trang_thiet_bi`
--
ALTER TABLE `dang_ky_trang_thiet_bi`
  ADD CONSTRAINT `dang_ky_trang_thiet_bi_ibfk_1` FOREIGN KEY (`tendangnhap`) REFERENCES `client` (`ten_nguoi_dung`),
  ADD CONSTRAINT `dang_ky_trang_thiet_bi_ibfk_2` FOREIGN KEY (`ma_trang_thiet_bi`) REFERENCES `trangthietbi` (`MaTrangThietBi`);

--
-- Constraints for table `thanh_toan`
--
ALTER TABLE `thanh_toan`
  ADD CONSTRAINT `thanh_toan_ibfk_1` FOREIGN KEY (`tendangnhap`) REFERENCES `client` (`ten_nguoi_dung`);

--
-- Constraints for table `thanh_toan_demo`
--
ALTER TABLE `thanh_toan_demo`
  ADD CONSTRAINT `thanh_toan_demo_ibfk_1` FOREIGN KEY (`tendangnhap`) REFERENCES `client` (`ten_nguoi_dung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
