-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2021 lúc 10:35 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

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
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(29, 'Alaskan', 5000000.00, 'Alaskan.jpg', 'Alaska là một giống chó cỡ lớn, hữu ích và thân thiện. Chúng sở hữu ngoại hình đáng yêu với bộ lông dày như một cục bông di động lớn. Cùng tính cách thân thiện, hoạt bát, thông minh và trung thành. Tại Việt Nam, Alaska rất được săn đón và nằm trong top những giống chó cảnh được nuôi nhiều nhất tại nước ta hiện nay.', 0, 17),
(30, 'Becgie', 5000000.00, 'Becgie.jpg', 'Chó Becgie Đức (German Shepherd Dog hay chó GSD) xuất hiện vào năm 1899 do Đại Úy của quân đội Đức, ông Max Von Stephanitz lai tạo ra. Ban đầu, chó béc giê được nuôi nhằm mục đích chăn gia súc, bảo vệ tài sản, kéo xe…. Khi Đức rơi vào thế chiến thứ nhất, giống chó này được đưa đến phục vụ trong quân đội và lực lượng cảnh sát. Nhiệm vụ lúc bấy giờ của chúng là: Bảo vệ, đưa thư, cứu hộ và canh gác.', 0, 17),
(31, 'Golden', 10000000.00, 'Golden.jpg', 'Giống chó Golden hay còn được biết đến với tên gọi khác là Golden Retriever. Đặc điểm chung của giống chó này chính là ngoại hình đáng yêu cùng tính cách thông minh, ngoan ngoãn và rất biết vâng lời. Được nuôi phổ biến nhiều nhất tại Mỹ, sự thân thiện và trung thành của Golden chính là yếu tố khiến nhiều người yêu thích và tìm mua. Bài viết này sẽ làm rõ về nguồn gốc lịch sử, ngoại hình, tính cách và những bí mật về loài chó thông minh này nhé! ', 0, 17),
(32, 'Great Dane', 8000000.00, 'Great Dane.jpg', 'rat great', 0, 17),
(33, 'Husky', 7000000.00, 'Husky1.jpg', 'Thật dễ dàng để thấy tại sao nhiều người lại bị thu hút bởi kiểu sói giống như sói của Siberi, nhưng hãy lưu ý rằng con chó thông minh và thể thao này có thể độc lập và đầy thử thách đối với chủ sở hữu chó đầu tiên. ', 0, 17),
(40, 'American Eskimo', 4000000.00, 'American Eskimo.jpg', 'Các American Eskimo Dog là một giống chó của chó đồng hành , có nguồn gốc ở Đức . Chó Eskimo Mỹ là một thành viên của gia đình Spitz . Tổ tiên của giống chó này là German Spitz , nhưng do tình cảm chống Đức trong Chiến tranh thế giới thứ nhất , nó được đổi tên thành \"American Eskimo Dog\". Mặc dù Chó Eskimo Mỹ hiện đại đã được xuất khẩu với tên gọi German Spitz Gross (hoặc Mittel, tùy thuộc vào chiều cao của con chó), các giống chó này đã khác nhau và các tiêu chuẩn khác nhau đáng kể. Ngoài việc phục vụ như một con chó canh gác và bạn đồng hành, American Eskimo Dog cũng đạt được mức độ phổ biến cao ở Hoa Kỳ trong những năm 1930 và 1940 như mộtngười biểu diễn xiếc .\r\n\r\nCó ba loại kích thước của giống Chó Eskimo Hoa Kỳ, đồ chơi, thu nhỏ và tiêu chuẩn. Chúng có những điểm chung giống với chó Spitz Nhật Bản , chó Spitz Đan Mạch , Volpino Italiano , chó Spitz Đức , chó Spitz Ấn Độ và Samoyeds .', 0, 17),
(41, 'Samoyed', 7000000.00, 'Samoyed.jpg', 'Samoyed là một giống chó săn có nguồn gốc từ vùng Siberia, đây là giống chó có bộ lông trắng tinh như tuyết cùng tính cách mang nhiều đặc điểm của chó sói là những đặc trưng nổi bật của giống chó này. Samoyed có nghĩa là giống chó có khả năng tự tìm ra thức ăn. Samoyed từng là chó kéo xe trượt tuyết trước khi trở thành bạn dành cho giới thượng lưu và hợp thời trang như ngày nay, nó cũng từng được những người thợ săn và đánh cá nuôi. Trang nhã và lanh lợi, giống chó này ngày nay trở nên một trong những giống chó mốt nhất của những người yêu chó và được gọi là Nàng Bạch tuyết của rừng Taiga.[1]', 0, 17),
(45, 'Pug mặt xệ vàng', 10000000.00, 'cho-pug-ma-xe.jpg', 'Thân hình chó Pug to ngang và được gọi là body “vuông” – chiều cao từ chân đến vai gần bằng chiều dài từ vai đến mông – và thường nặng không quá 10kg. Đầu của chúng rất lớn, tròn hình bánh bao, tai lớn, tròn và cụp, đôi mắt rất to tròn và có màu nâu sẫm. Miệng chó pug rộng, hàm to và khỏe, hàm dưới dài hơn hàm trên nên thường nhô ra bên ngoài.\r\n\r\nMặt chó pug là điểm đáng yêu nhất của chúng, da mặt chúng dày và chảy xệ, xếp thành nhiều nếp. Mặt pug càng nhiều nếp càng đẹp, chúng là giống chó có khuôn mặt xệ nhất trong tất cả các giống chó mặt xệ.\r\n\r\nChó pug có khung xương rộng, vai rộng hơn hông. Chân ngắn, người to (còn gọi là dáng heo lùn). Cổ to và dày. Nhiều chú chó Pug mập còn có da chảy xệ ở cổ và chân. Đuôi pug ngắn và thường cuộn tròn trên lưng. Chúng có bộ lông mỏng, xát da nên mất rất ít công chải chuốt. Tuy nhiên chúng hay nghịch bẩn, thích lê la (ở Đức giống chó này được gọi là “Giẻ lau sàn” do suốt ngày lê la) nên thường xuyên phải tắm.', 0, 17);

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
(2, 'admin2', 123456, 123456789),
(7, 'tuanduong', 123456, 961544452),
(8, 'aaa', 123456, 111111);

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
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
