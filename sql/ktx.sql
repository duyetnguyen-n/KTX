-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2023 at 04:45 PM
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
  `anh_dai_dien` varchar(255) DEFAULT 'Facebook-Avatar_3.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `SoLuong` int(11) DEFAULT 0
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
('duyet', 'duyet123', 'client', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id` int(11) NOT NULL,
  `ten_phong` text NOT NULL,
  `suc_chua` text NOT NULL,
  `id_tang` int(11) NOT NULL,
  `gia` decimal(10,2) NOT NULL,
  `trang_thai` text NOT NULL,
  `anh_dai_dien` varchar(500) DEFAULT NULL,
  `anh_khac` varchar(1000) DEFAULT NULL,
  `noi_dung` text DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `nguoi_tao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id`, `ten_phong`, `suc_chua`, `id_tang`, `gia`, `trang_thai`, `anh_dai_dien`, `anh_khac`, `noi_dung`, `mo_ta`, `nguoi_tao`) VALUES
(1, 'Phòng 301', '8 người', 4, 10.00, 'Sẵn Sàng', 'bg.jpeg', 'slide1.jpg', 'Dưới đây là một đoạn mô tả chi tiết về phòng kí túc xá:\r\n\r\nChào mừng bạn đến với không gian sống độc đáo và ấm cúng tại kí túc xá của chúng tôi! Tại đây, chúng tôi cam kết mang đến cho bạn không chỉ một nơi ở, mà còn là một trải nghiệm sống đáng nhớ và thú vị.\r\n\r\nPhòng Ở:\r\n\r\nChất Lượng Đỉnh Cao: Mỗi phòng ở của chúng tôi được thiết kế để mang đến sự thoải mái tối đa và cảm giác như ở nhà. Bạn sẽ tận hưởng không gian rộng lớn với trang thiết bị hiện đại và nội thất sang trọng.\r\n\r\nÁnh Sáng Tự Nhiên: Phòng được thiết kế với nhiều cửa sổ lớn để tận dụng ánh sáng tự nhiên, tạo ra một môi trường sống sáng sủa và ấm áp.\r\n\r\nTiện Ích:\r\n\r\nPhòng Tập Thể Dục: Kí túc xá có một phòng tập thể dục hiện đại với các thiết bị tập luyện đa dạng, giúp bạn duy trì phong độ và tận hưởng lối sống lành mạnh.\r\n\r\nKhu Vực Nấu Ăn Chung: Khu vực nấu ăn chung rộng lớn với các thiết bị hiện đại, nơi bạn có thể tự do sáng tạo và thưởng thức những bữa ăn ngon.\r\n\r\nAn Ninh và An Toàn:\r\n\r\nHệ Thống An Ninh: Chúng tôi đặt sự an toàn của bạn lên hàng đầu. Hệ thống an ninh 24/7 và camera giám sát giúp bảo vệ bạn và tài sản của mình.\r\nGiao Tiếp và Gặp Gỡ:\r\n\r\nKhu Vực Giao Tiếp Chung: Kí túc xá có các khu vực chung lý tưởng để bạn có thể gặp gỡ và tương tác với cộng đồng. Đây là nơi lý tưởng để kết nối với những người sống cùng và xây dựng mối quan hệ.\r\nMôi Trường Xanh:\r\n\r\nThân Thiện Với Môi Trường: Chúng tôi cam kết thực hiện các biện pháp bảo vệ môi trường. Tận dụng năng lượng tái tạo và giảm lượng rác thải, chúng tôi mong muốn tạo ra một kí túc xá thân thiện với thiên nhiên.\r\nHãy đặt chân đến và trải nghiệm không gian sống đẳng cấp và chân thành tại kí túc xá của chúng tôi. Chúng tôi mong rằng bạn sẽ tìm thấy đây là một ngôi nhà thực sự và một cộng đồng đáng sống.\r\n\r\n\r\n\r\n\r\n\r\n', 'Chào mừng bạn đến với không gian sống thoải mái và hiện đại tại kí túc xá của chúng tôi! Phòng ở của chúng tôi không chỉ là nơi nghỉ mà còn là không gian tự do, tạo điều kiện tốt nhất cho sự phát triển cá nhân và học tập.\r\n\r\nPhòng: Chúng tôi tự hào giới thiệu các phòng ở rộng rãi, sáng sủa và được trang bị đầy đủ tiện nghi. Mỗi phòng đều có cửa sổ lớn mang lại nguồn ánh sáng tự nhiên, giúp tạo nên không khí ấm cúng và thoải mái.\r\n\r\nNội thất: Phòng ở được trang bị đầy đủ nội thất, bao gồm giường thoải mái, bàn làm việc, tủ quần áo và khu vực giữ đồ cá nhân. Tất cả đều được thiết kế với sự thoải mái và tiện ích đặt lên hàng đầu.\r\n\r\nTiện ích: Kí túc xá của chúng tôi cung cấp nhiều tiện ích để đảm bảo cuộc sống hàng ngày của bạn suôn sẻ. Từ phòng tập thể dục đến khu vực nấu ăn chung, bạn sẽ có đầy đủ cơ hội để gặp gỡ và chia sẻ cùng cộng đồng.\r\n\r\nAn ninh: Chúng tôi coi trọng an ninh và sự an toàn. Hệ thống an ninh hiện đại đảm bảo rằng bạn có thể yên tâm sinh sống và làm việc trong không gian chung của chúng tôi.\r\n\r\nKhông gian xanh: Kí túc xá của chúng tôi được thiết kế với ý thức về môi trường. Chúng tôi tận dụng ánh sáng tự nhiên và có các biện pháp tiết kiệm năng lượng, giúp tạo ra môi trường sống lành mạnh và thân thiện với thiên nhiên.\r\n\r\nHãy đặt chân đến và trải nghiệm sự thoải mái, an ninh và sự gắn kết cộng đồng tại kí túc xá của chúng tôi. Chúng tôi hy vọng bạn sẽ tận hưởng mọi khoảnh khắc tại ngôi nhà mới này!', 'admin'),
(2, 'Phòng 101', '4 người', 1, 15.00, 'Sẵn Sàng', 'sp-9.jpeg', 'sp-2.jpeg', 'Chào mừng bạn đến với không gian sống thoải mái và hiện đại tại kí túc xá của chúng tôi! Phòng ở của chúng tôi không chỉ là nơi nghỉ mà còn là không gian tự do, tạo điều kiện tốt nhất cho sự phát triển cá nhân và học tập.\r\n\r\nPhòng: Chúng tôi tự hào giới thiệu các phòng ở rộng rãi, sáng sủa và được trang bị đầy đủ tiện nghi. Mỗi phòng đều có cửa sổ lớn mang lại nguồn ánh sáng tự nhiên, giúp tạo nên không khí ấm cúng và thoải mái.\r\n\r\nNội thất: Phòng ở được trang bị đầy đủ nội thất, bao gồm giường thoải mái, bàn làm việc, tủ quần áo và khu vực giữ đồ cá nhân. Tất cả đều được thiết kế với sự thoải mái và tiện ích đặt lên hàng đầu.\r\n\r\nTiện ích: Kí túc xá của chúng tôi cung cấp nhiều tiện ích để đảm bảo cuộc sống hàng ngày của bạn suôn sẻ. Từ phòng tập thể dục đến khu vực nấu ăn chung, bạn sẽ có đầy đủ cơ hội để gặp gỡ và chia sẻ cùng cộng đồng.\r\n\r\nAn ninh: Chúng tôi coi trọng an ninh và sự an toàn. Hệ thống an ninh hiện đại đảm bảo rằng bạn có thể yên tâm sinh sống và làm việc trong không gian chung của chúng tôi.\r\n\r\nKhông gian xanh: Kí túc xá của chúng tôi được thiết kế với ý thức về môi trường. Chúng tôi tận dụng ánh sáng tự nhiên và có các biện pháp tiết kiệm năng lượng, giúp tạo ra môi trường sống lành mạnh và thân thiện với thiên nhiên.\r\n\r\nHãy đặt chân đến và trải nghiệm sự thoải mái, an ninh và sự gắn kết cộng đồng tại kí túc xá của chúng tôi. Chúng tôi hy vọng bạn sẽ tận hưởng mọi khoảnh khắc tại ngôi nhà mới này!', 'Chào mừng bạn đến với không gian sống thoải mái và hiện đại tại kí túc xá của chúng tôi! Phòng ở của chúng tôi không chỉ là nơi nghỉ mà còn là không gian tự do, tạo điều kiện tốt nhất cho sự phát triển cá nhân và học tập.\r\n\r\nPhòng: Chúng tôi tự hào giới thiệu các phòng ở rộng rãi, sáng sủa và được trang bị đầy đủ tiện nghi. Mỗi phòng đều có cửa sổ lớn mang lại nguồn ánh sáng tự nhiên, giúp tạo nên không khí ấm cúng và thoải mái.\r\n\r\nNội thất: Phòng ở được trang bị đầy đủ nội thất, bao gồm giường thoải mái, bàn làm việc, tủ quần áo và khu vực giữ đồ cá nhân. Tất cả đều được thiết kế với sự thoải mái và tiện ích đặt lên hàng đầu.\r\n\r\nTiện ích: Kí túc xá của chúng tôi cung cấp nhiều tiện ích để đảm bảo cuộc sống hàng ngày của bạn suôn sẻ. Từ phòng tập thể dục đến khu vực nấu ăn chung, bạn sẽ có đầy đủ cơ hội để gặp gỡ và chia sẻ cùng cộng đồng.\r\n\r\nAn ninh: Chúng tôi coi trọng an ninh và sự an toàn. Hệ thống an ninh hiện đại đảm bảo rằng bạn có thể yên tâm sinh sống và làm việc trong không gian chung của chúng tôi.\r\n\r\nKhông gian xanh: Kí túc xá của chúng tôi được thiết kế với ý thức về môi trường. Chúng tôi tận dụng ánh sáng tự nhiên và có các biện pháp tiết kiệm năng lượng, giúp tạo ra môi trường sống lành mạnh và thân thiện với thiên nhiên.\r\n\r\nHãy đặt chân đến và trải nghiệm sự thoải mái, an ninh và sự gắn kết cộng đồng tại kí túc xá của chúng tôi. Chúng tôi hy vọng bạn sẽ tận hưởng mọi khoảnh khắc tại ngôi nhà mới này!', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSinhVien` int(11) NOT NULL,
  `HoTen` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `SoDienThoai` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ngaytao` datetime DEFAULT current_timestamp(),
  `nguoitao` varchar(255) NOT NULL,
  `AnhDaiDien` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSinhVien`, `HoTen`, `NgaySinh`, `GioiTinh`, `DiaChi`, `SoDienThoai`, `Email`, `ngaytao`, `nguoitao`, `AnhDaiDien`) VALUES
(0, 'Nguyễn Thị Như Hà', '0000-00-00', 'Nữ', 'Thuỷ Nguyên - Hải Phòng', '0357164036', 'ha86093@st.vimaru.edu.vn', '0000-00-00 00:00:00', 'admin', 'AnhDaiDien');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `MaSinhVien` int(11) DEFAULT NULL,
  `TenDangNhap` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `MatKhau` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `QuyenTruyCap` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `TrangThai` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `MaThanhToan` int(11) NOT NULL,
  `MaSinhVien` int(11) DEFAULT NULL,
  `NgayThanhToan` date DEFAULT NULL,
  `TongSoTien` decimal(10,2) DEFAULT NULL,
  `PhuongThucThanhToan` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `ma_sinh_vien` (`ma_sinh_vien`),
  ADD UNIQUE KEY `ten_nguoi_dung` (`ten_nguoi_dung`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSinhVien`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD UNIQUE KEY `MaSinhVien` (`MaSinhVien`),
  ADD UNIQUE KEY `TenDangNhap` (`TenDangNhap`);

--
-- Indexes for table `tang`
--
ALTER TABLE `tang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`MaThanhToan`),
  ADD KEY `MaSinhVien` (`MaSinhVien`);

--
-- Indexes for table `trangthietbi`
--
ALTER TABLE `trangthietbi`
  ADD PRIMARY KEY (`MaTrangThietBi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tang`
--
ALTER TABLE `tang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`);

--
-- Constraints for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `thanhtoan_ibfk_1` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
