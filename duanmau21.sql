-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2021 lúc 02:49 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau21`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngay_bl` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngay_bl`) VALUES
(67, 'quần đẹp quá', 8, 35, '01:14:06pm 18/10/2021'),
(68, 'Giá bao nhiêu vậy shop', 8, 35, '01:14:17pm 18/10/2021'),
(69, 'Áo đẹp', 8, 21, '01:14:31pm 18/10/2021'),
(70, 'Đẹp', 8, 21, '01:14:38pm 18/10/2021'),
(71, 'Quần chất lượng', 15, 35, '01:15:08pm 18/10/2021'),
(72, 'chào shop', 15, 35, '01:15:17pm 18/10/2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(22, 'Áo thể thao'),
(23, 'Quần'),
(24, 'Mũ'),
(26, 'Áo Hoodie');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(21, 'Áo Polo thể thao - Đen', 100, 'ao1.1.jpg', 'Coolmate đã cho ra mắt rất nhiều sản phẩm áo thể thao với nhiều chất liệu: maxcool, quickdry,... và với mục tiêu tập trung vào chất liệu để đem đến cho khách hàng những chiếc áo tốt bắt nguồn từ chất liệu, chiếc áo Polo thể thao nam Promax-S1 đã được ra mắt vào đúng thời điểm mùa hè này để đảm bảo khách hàng nhà Coolmate luôn được thoải mái, dễ chịu mà vẫn lịch sự trong bất kỳ trường hợp nào. Cùng tìm hiểu vì sao chiếc áo Polo thể thao này lại là sản phẩm mà Coolmate tâm đắc để gửi đến khách hàng. ', 20, 22),
(22, 'Áo Polo thể thao - Xám', 90, 'ao1.2.jpg', 'Coolmate đã cho ra mắt rất nhiều sản phẩm áo thể thao với nhiều chất liệu: maxcool, quickdry,... và với mục tiêu tập trung vào chất liệu để đem đến cho khách hàng những chiếc áo tốt bắt nguồn từ chất liệu, chiếc áo Polo thể thao nam Promax-S1 đã được ra mắt vào đúng thời điểm mùa hè này để đảm bảo khách hàng nhà Coolmate luôn được thoải mái, dễ chịu mà vẫn lịch sự trong bất kỳ trường hợp nào. Cùng tìm hiểu vì sao chiếc áo Polo thể thao này lại là sản phẩm mà Coolmate tâm đắc để gửi đến khách hàng. ', 0, 22),
(23, 'Áo Polo thể thao - Xanh rêu', 80, 'ao1.3.jpg', 'Coolmate đã cho ra mắt rất nhiều sản phẩm áo thể thao với nhiều chất liệu: maxcool, quickdry,... và với mục tiêu tập trung vào chất liệu để đem đến cho khách hàng những chiếc áo tốt bắt nguồn từ chất liệu, chiếc áo Polo thể thao nam Promax-S1 đã được ra mắt vào đúng thời điểm mùa hè này để đảm bảo khách hàng nhà Coolmate luôn được thoải mái, dễ chịu mà vẫn lịch sự trong bất kỳ trường hợp nào. Cùng tìm hiểu vì sao chiếc áo Polo thể thao này lại là sản phẩm mà Coolmate tâm đắc để gửi đến khách hàng. ', 1, 22),
(25, 'Áo Polo thể thao - Xanh navy', 90, 'ao1.4.jpg', 'Coolmate đã cho ra mắt rất nhiều sản phẩm áo thể thao với nhiều chất liệu: maxcool, quickdry,... và với mục tiêu tập trung vào chất liệu để đem đến cho khách hàng những chiếc áo tốt bắt nguồn từ chất liệu, chiếc áo Polo thể thao nam Promax-S1 đã được ra mắt vào đúng thời điểm mùa hè này để đảm bảo khách hàng nhà Coolmate luôn được thoải mái, dễ chịu mà vẫn lịch sự trong bất kỳ trường hợp nào. Cùng tìm hiểu vì sao chiếc áo Polo thể thao này lại là sản phẩm mà Coolmate tâm đắc để gửi đến khách hàng. ', 0, 22),
(26, 'Áo Tank Top thể thao - Đen', 50, 'ao2.1.jpg', 'CHIẾC ÁO TANK TOP CHO MỌI VẬN ĐỘNG THOẢI MÁI HẾT SỨC\r\nTừ chạy bộ sáng sớm đến tập gym buổi chiều, bạn sẽ luôn thoải mái và tự tin hướng đến các mục tiêu tập luyện với chiếc áo Tank top Dri-Breathe của nhà Coolmate này. Dáng áo regular fit giúp bạn vận động tự nhiên, cùng với công nghệ Quick-dry sẽ giúp bạn luôn khô thoáng.', 0, 22),
(27, 'Áo Tank Top thể thao - Trắng', 40, 'ao2.2.jpg', 'CHIẾC ÁO TANK TOP CHO MỌI VẬN ĐỘNG THOẢI MÁI HẾT SỨC\r\nTừ chạy bộ sáng sớm đến tập gym buổi chiều, bạn sẽ luôn thoải mái và tự tin hướng đến các mục tiêu tập luyện với chiếc áo Tank top Dri-Breathe của nhà Coolmate này. Dáng áo regular fit giúp bạn vận động tự nhiên, cùng với công nghệ Quick-dry sẽ giúp bạn luôn khô thoáng.', 4, 22),
(28, 'Áo Hoodie nam - Đen', 150, 'ao3.2.jpg', 'Vẫn là thiết kế đơn giản và cơ bản, phù hợp nhất với nam giới trong mọi hoạt động, nhưng chiếc Áo Hoodie mũ trùm Classic này chắc chắn sẽ đem đến cho bạn sự trải nghiệm tốt hơn bao giờ hết so với những sản phẩm Hoodie mà bạn đang sử dụng. ', 0, 26),
(29, 'Áo Hoodie nam - Xanh rêu', 160, 'ao3.1.jpg', 'Vẫn là thiết kế đơn giản và cơ bản, phù hợp nhất với nam giới trong mọi hoạt động, nhưng chiếc Áo Hoodie mũ trùm Classic này chắc chắn sẽ đem đến cho bạn sự trải nghiệm tốt hơn bao giờ hết so với những sản phẩm Hoodie mà bạn đang sử dụng. ', 0, 26),
(30, 'Áo Hoodie nam - Xanh Navy', 170, 'ao3.3.jpg', 'Vẫn là thiết kế đơn giản và cơ bản, phù hợp nhất với nam giới trong mọi hoạt động, nhưng chiếc Áo Hoodie mũ trùm Classic này chắc chắn sẽ đem đến cho bạn sự trải nghiệm tốt hơn bao giờ hết so với những sản phẩm Hoodie mà bạn đang sử dụng. ', 0, 26),
(31, 'Mũ Bucket Hat thêu Care & Share Typo - Vàng', 41, 'mu1.1.jpg', 'Nếu bạn đã sở hữu những chiếc mũ lưỡi trai thuần nam tính hoặc những dáng mũ fedora lịch lãm, kiểu dáng mũ cao bồi cách điệu bụi bặm, và đang muốn tìm cho mình một chiếc mũ mang đến vẻ trẻ trung, năng động thì Bucket Hat chính là câu trả lời của bạn đây. Care & Share ra mắt phiên bản mũ Bucket Hat cùng với nhiều thiết kế ấn tượng nhưng không hề mất đi vẻ nam tính, đơn giản của bạn khi mang chiếc mũ này nhé! ', 0, 24),
(32, 'Mũ Bucket Hat thêu Care & Share Typo - Đen', 30, 'mu1.2.jpg', 'Nếu bạn đã sở hữu những chiếc mũ lưỡi trai thuần nam tính hoặc những dáng mũ fedora lịch lãm, kiểu dáng mũ cao bồi cách điệu bụi bặm, và đang muốn tìm cho mình một chiếc mũ mang đến vẻ trẻ trung, năng động thì Bucket Hat chính là câu trả lời của bạn đây. Care & Share ra mắt phiên bản mũ Bucket Hat cùng với nhiều thiết kế ấn tượng nhưng không hề mất đi vẻ nam tính, đơn giản của bạn khi mang chiếc mũ này nhé! ', 0, 24),
(33, 'Mũ Bucket Hat thêu Care & Share Typo - màu be', 30, 'mu1.3.jpg', 'Nếu bạn đã sở hữu những chiếc mũ lưỡi trai thuần nam tính hoặc những dáng mũ fedora lịch lãm, kiểu dáng mũ cao bồi cách điệu bụi bặm, và đang muốn tìm cho mình một chiếc mũ mang đến vẻ trẻ trung, năng động thì Bucket Hat chính là câu trả lời của bạn đây. Care & Share ra mắt phiên bản mũ Bucket Hat cùng với nhiều thiết kế ấn tượng nhưng không hề mất đi vẻ nam tính, đơn giản của bạn khi mang chiếc mũ này nhé! ', 0, 24),
(34, 'Quần Jeans Basic Slim - Xanh nhạt', 150, 'quan1.1.jpg', 'Nếu bạn đang tìm kiếm một chiếc quần Jeans vừa vặn, thoải mái, trẻ trung cùng mức giá hợp lý, thì đây là lựa chọn rất đáng để thử. Hơn 1 năm phát triển sản phẩm, Coolmate tự hào giới thiệu đến bạn chiếc Jeans đầu tiên của Coolmate với dáng Slim Fit với 3 màu dễ mặc dễ phối với những món đồ có sẵn trong tủ đồ nhà bạn.', 0, 23),
(35, 'Quần Jeans Basic Slim - Đen', 160, 'quan1.2.jpg', 'Nếu bạn đang tìm kiếm một chiếc quần Jeans vừa vặn, thoải mái, trẻ trung cùng mức giá hợp lý, thì đây là lựa chọn rất đáng để thử. Hơn 1 năm phát triển sản phẩm, Coolmate tự hào giới thiệu đến bạn chiếc Jeans đầu tiên của Coolmate với dáng Slim Fit với 3 màu dễ mặc dễ phối với những món đồ có sẵn trong tủ đồ nhà bạn.', 0, 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(55) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(55) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(3, 'admin@gmail.com', '12345', 'quandmph13848@fpt.edu.vn', NULL, NULL, 0),
(8, 'admin', '12345', 'thivan120876@gmail.com', 'An Trai, Hoai Duc, Ha Noi', '0123456', 1),
(15, 'khachhangvip', 'quanquan', 'quandmph13848@fpt.edu.vn', 'Hà Nam', '098765', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_bl_sp` (`idpro`),
  ADD KEY `lk_bl_tk` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sp_dm` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_bl_sp` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `lk_bl_tk` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sp_dm` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
