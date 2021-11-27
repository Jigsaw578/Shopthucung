-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 10:36 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopthucung`
--

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
(15, 'Phụ kiện'),
(17, 'Chó');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`, `iduser`) VALUES
(29, 'Alaskan', 5000000.00, 'Alaskan.jpg', 'Alaska là một giống chó cỡ lớn, hữu ích và thân thiện. Chúng sở hữu ngoại hình đáng yêu với bộ lông dày như một cục bông di động lớn. Cùng tính cách thân thiện, hoạt bát, thông minh và trung thành. Tại Việt Nam, Alaska rất được săn đón và nằm trong top những giống chó cảnh được nuôi nhiều nhất tại nước ta hiện nay.', 0, 17, 1),
(30, 'Becgie', 5000000.00, 'Becgie.jpg', 'Chó Becgie Đức (German Shepherd Dog hay chó GSD) xuất hiện vào năm 1899 do Đại Úy của quân đội Đức, ông Max Von Stephanitz lai tạo ra. Ban đầu, chó béc giê được nuôi nhằm mục đích chăn gia súc, bảo vệ tài sản, kéo xe…. Khi Đức rơi vào thế chiến thứ nhất, giống chó này được đưa đến phục vụ trong quân đội và lực lượng cảnh sát. Nhiệm vụ lúc bấy giờ của chúng là: Bảo vệ, đưa thư, cứu hộ và canh gác.', 0, 17, 1),
(31, 'Golden', 10000000.00, 'Golden.jpg', 'Giống chó Golden hay còn được biết đến với tên gọi khác là Golden Retriever. Đặc điểm chung của giống chó này chính là ngoại hình đáng yêu cùng tính cách thông minh, ngoan ngoãn và rất biết vâng lời. Được nuôi phổ biến nhiều nhất tại Mỹ, sự thân thiện và trung thành của Golden chính là yếu tố khiến nhiều người yêu thích và tìm mua. Bài viết này sẽ làm rõ về nguồn gốc lịch sử, ngoại hình, tính cách và những bí mật về loài chó thông minh này nhé! ', 0, 17, 1),
(32, 'Great Dane', 8000000.00, 'Great Dane.jpg', 'rat great', 0, 17, 1),
(33, 'Husky', 7000000.00, 'Husky1.jpg', 'Thật dễ dàng để thấy tại sao nhiều người lại bị thu hút bởi kiểu sói giống như sói của Siberi, nhưng hãy lưu ý rằng con chó thông minh và thể thao này có thể độc lập và đầy thử thách đối với chủ sở hữu chó đầu tiên. ', 0, 17, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(11) NOT NULL,
  `phonenumber` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `phonenumber`) VALUES
(1, 'admin', 123456, 123456789),
(2, 'admin2', 123456, 123456789);

--
-- Chỉ mục cho các bảng đã đổ
--

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
  ADD KEY `lk_sanpham_danhmuc` (`iddm`),
  ADD KEY `lk_sanpham_user` (`iduser`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `lk_sanpham_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
