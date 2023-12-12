-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2023 at 04:35 PM
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

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `ma_sinh_vien`, `ten_nguoi_dung`, `ho_ten`, `mat_khau`, `email`, `so_dien_thoai`, `trang_thai`, `anh_dai_dien`) VALUES
(1, '85723', 'ntduyet', 'Nguyễn Thế Duyệt', '123', 'nguyentheduyet.mtp@gmail.com', '0982763267', 'sẵn sàng', '');

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
(6, 'Phòng GYMM', 7.00, 'Đang hoạt động', '2023-12-10 22:55:24', 'admin', 'sp-6.jpeg');

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
(1, 'Phòng 301', '8 người', 4, 10.00, 'Sẵn Sàng', 'bg.jpeg', 'slide1.jpg', '<h3>Lăn Kim Tế B&agrave;o Gốc</h3>\r\n\r\n<p><strong>Lăn kim tế b&agrave;o gốc l&agrave; một quy tr&igrave;nh thẩm mỹ phổ biến được sử dụng để cải thiện sức khỏe v&agrave; ngoại h&igrave;nh của da. Quy tr&igrave;nh n&agrave;y bao gồm sử dụng một dụng cụ lăn kim c&oacute; những kim nhỏ để lăn qua da, g&acirc;y ra c&aacute;c vết th&acirc;m nhập nhỏ, từ đ&oacute; k&iacute;ch th&iacute;ch qu&aacute; tr&igrave;nh t&aacute;i tạo tế b&agrave;o v&agrave; tăng cường sản xuất collagen.</strong></p>\r\n\r\n<p>Tế b&agrave;o gốc được sử dụng trong quy tr&igrave;nh lăn kim tế b&agrave;o gốc thường l&agrave; tế b&agrave;o gốc từ ch&iacute;nh cơ thể của bạn hoặc từ nguồn tế b&agrave;o gốc b&ecirc;n ngo&agrave;i. Trước khi tiến h&agrave;nh quy tr&igrave;nh n&agrave;y, tế b&agrave;o gốc thường được t&aacute;ch ri&ecirc;ng v&agrave; chuẩn bị để c&oacute; thể được &aacute;p dụng l&ecirc;n da sau khi da đ&atilde; được lăn kim.</p>\r\n\r\n<p>C&aacute;c lợi &iacute;ch của lăn kim tế b&agrave;o gốc c&oacute; thể bao gồm:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>K&iacute;ch th&iacute;ch sự t&aacute;i tạo tế b&agrave;o: Qu&aacute; tr&igrave;nh lăn kim tạo ra c&aacute;c vết th&acirc;m nhập nhỏ v&agrave;o da, k&iacute;ch th&iacute;ch sự phục hồi v&agrave; t&aacute;i tạo tế b&agrave;o mới. Điều n&agrave;y c&oacute; thể gi&uacute;p cải thiện t&igrave;nh trạng da mờ, nhăn nheo, sẹo v&agrave; vết th&acirc;m.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tăng cường sản xuất collagen: Khi da bị lăn kim, qu&aacute; tr&igrave;nh tự nhi&ecirc;n của cơ thể phản ứng bằng c&aacute;ch tăng cường sản xuất collagen. Collagen l&agrave; một loại protein quan trọng gi&uacute;p da đ&agrave;n hồi v&agrave; mịn m&agrave;ng.</p>\r\n	</li>\r\n	<li>\r\n	<p>Cải thiện hấp thụ sản phẩm chăm s&oacute;c da: Qu&aacute; tr&igrave;nh lăn kim tạo ra c&aacute;c lỗ nhỏ tr&ecirc;n da, tăng khả năng hấp thụ c&aacute;c sản phẩm chăm s&oacute;c da như kem dưỡng, serum v&agrave; tinh chất. Điều n&agrave;y gi&uacute;p c&aacute;c th&agrave;nh phần chăm s&oacute;c da th&acirc;m nhập s&acirc;u v&agrave;o da v&agrave; c&oacute; hiệu quả tốt hơn.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Tuy nhi&ecirc;n, quy tr&igrave;nh lăn kim tế b&agrave;o gốc cần được thực hiện bởi c&aacute;c chuy&ecirc;n gia c&oacute; kinh nghiệm để tr&aacute;nh nguy cơ nhiễm tr&ugrave;ng v&agrave; t&aacute;c động kh&ocirc;ng mong muốn l&ecirc;n da. Ngo&agrave;i ra, mỗi người c&oacute; thể c&oacute; phản ứng da kh&aacute;c nhau sau qu&aacute; tr&igrave;nh lăn kim tế b&agrave;o gốc.</p>\r\n\r\n<p>Trước khi quyết định tiến h&agrave;nh lăn kim tế b&agrave;o gốc, n&ecirc;n tham khảo &yacute; kiến của b&aacute;c sĩ hoặc chuy&ecirc;n gia thẩm mỹ để được tư vấn v&agrave; đ&aacute;nh gi&aacute; xem liệu phương ph&aacute;p n&agrave;y c&oacute; ph&ugrave; hợp với t&igrave;nh trạng da v&agrave; mục ti&ecirc;u c&aacute; nh&acirc;n của bạn hay kh&ocirc;ng.</p>\r\n\r\n<p><strong>Lưu &yacute; rằng th&ocirc;ng tin tr&ecirc;n đ&acirc;y chỉ mang t&iacute;nh chất tham khảo. Việc x&aacute;c định liệu ph&aacute;p ph&ugrave; hợp v&agrave; quyết định quy tr&igrave;nh Lăn Kim Tế B&agrave;o Gốc cần được thực hiện dưới sự hướng dẫn v&agrave; gi&aacute;m s&aacute;t của một b&aacute;c sĩ chuy&ecirc;n khoa thẩm mỹ c&oacute; kinh nghiệm.</strong></p>\r\n\r\n<p><strong>Trước khi quyết định quy tr&igrave;nh Lăn Kim Tế B&agrave;o Gốc, qu&yacute; kh&aacute;ch n&ecirc;n t&igrave;m hiểu v&agrave; tham khảo &yacute; kiến chuy&ecirc;n gia thẩm mỹ để được tư vấn cụ thể về phương ph&aacute;p v&agrave; kỹ thuật th&iacute;ch hợp cho trường hợp của m&igrave;nh.</strong></p>\r\n\r\n<p><em><strong>H&atilde;y để lại th&ocirc;ng tin li&ecirc;n hệ, BlackMed Spa sẵn s&agrave;ng phục vụ, giải đ&aacute;p mọi thắc mắc của qu&yacute; kh&aacute;ch 24/7!</strong></em></p>\r\n', '<p>Ch&agrave;o mừng bạn đến với kh&ocirc;ng gian sống thoải m&aacute;i v&agrave; hiện đại tại k&iacute; t&uacute;c x&aacute; của ch&uacute;ng t&ocirc;i! Ph&ograve;ng ở của ch&uacute;ng t&ocirc;i kh&ocirc;ng chỉ l&agrave; nơi nghỉ m&agrave; c&ograve;n l&agrave; kh&ocirc;ng gian tự do, tạo điều kiện tốt nhất cho sự ph&aacute;t triển c&aacute; nh&acirc;n v&agrave; học tập. Ph&ograve;ng: Ch&uacute;ng t&ocirc;i tự h&agrave;o giới thiệu c&aacute;c ph&ograve;ng ở rộng r&atilde;i, s&aacute;ng sủa v&agrave; được trang bị đầy đủ tiện nghi. Mỗi ph&ograve;ng đều c&oacute; cửa sổ lớn mang lại nguồn &aacute;nh s&aacute;ng tự nhi&ecirc;n, gi&uacute;p tạo n&ecirc;n kh&ocirc;ng kh&iacute; ấm c&uacute;ng v&agrave; thoải m&aacute;i. Nội thất: Ph&ograve;ng ở được trang bị đầy đủ nội thất, bao gồm giường thoải m&aacute;i, b&agrave;n l&agrave;m việc, tủ quần &aacute;o v&agrave; khu vực giữ đồ c&aacute; nh&acirc;n. Tất cả đều được thiết kế với sự thoải m&aacute;i v&agrave; tiện &iacute;ch đặt l&ecirc;n h&agrave;ng đầu. Tiện &iacute;ch: K&iacute; t&uacute;c x&aacute; của ch&uacute;ng t&ocirc;i cung cấp nhiều tiện &iacute;ch để đảm bảo cuộc sống h&agrave;ng ng&agrave;y của bạn su&ocirc;n sẻ. Từ ph&ograve;ng tập thể dục đến khu vực nấu ăn chung, bạn sẽ c&oacute; đầy đủ cơ hội để gặp gỡ v&agrave; chia sẻ c&ugrave;ng cộng đồng. An ninh: Ch&uacute;ng t&ocirc;i coi trọng an ninh v&agrave; sự an to&agrave;n. Hệ thống an ninh hiện đại đảm bảo rằng bạn c&oacute; thể y&ecirc;n t&acirc;m sinh sống v&agrave; l&agrave;m việc trong kh&ocirc;ng gian chung của ch&uacute;ng t&ocirc;i. Kh&ocirc;ng gian xanh: K&iacute; t&uacute;c x&aacute; của ch&uacute;ng t&ocirc;i được thiết kế với &yacute; thức về m&ocirc;i trường. Ch&uacute;ng t&ocirc;i tận dụng &aacute;nh s&aacute;ng tự nhi&ecirc;n v&agrave; c&oacute; c&aacute;c biện ph&aacute;p tiết kiệm năng lượng, gi&uacute;p tạo ra m&ocirc;i trường sống l&agrave;nh mạnh v&agrave; th&acirc;n thiện với thi&ecirc;n nhi&ecirc;n. H&atilde;y đặt ch&acirc;n đến v&agrave; trải nghiệm sự thoải m&aacute;i, an ninh v&agrave; sự gắn kết cộng đồng tại k&iacute; t&uacute;c x&aacute; của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i hy vọng bạn sẽ tận hưởng mọi khoảnh khắc tại ng&ocirc;i nh&agrave; mới n&agrave;y!</p>\r\n', 'admin'),
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
  `AnhDaiDien` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `thanhtoan_ibfk_1` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
