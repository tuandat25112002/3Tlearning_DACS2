-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2021 lúc 04:22 AM
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
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihocs`
--

CREATE TABLE `baihocs` (
  `id_baihoc` int(10) UNSIGNED NOT NULL,
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `slug_baihoc` varchar(255) NOT NULL,
  `tomtat` varchar(255) NOT NULL,
  `noidung` longtext NOT NULL,
  `kichhoat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baihocs`
--

INSERT INTO `baihocs` (`id_baihoc`, `id_sanpham`, `tieude`, `slug_baihoc`, `tomtat`, `noidung`, `kichhoat`) VALUES
(7, 9, 'Anh Văn 10: Unit 1: Family Life', 'anh-van-10-unit-1-family-life', 'Family Life Vocabulary - Grammar - Speaking - Reading - Listening - Writing', '<p><iframe frameborder=\"0\" height=\"539px\" src=\"https://www.youtube.com/embed/G2g7DHksgVk?list=PLUxH_xuNC0r84enZMs1lfyrUmu6p21b8s\" title=\"YouTube video player\" width=\"100%\"></iframe></p>', 0),
(8, 9, 'Tiếng Anh 10 - Unit 2: Your Body and You - Cô Mai Phương', 'tieng-anh-10-unit-2-your-body-and-you-co-mai-phuong', 'Your Body and You', '<p><iframe frameborder=\"0\" height=\"539\" src=\"https://www.youtube.com/embed/NCZLVPa-Ufw?list=PLUxH_xuNC0r84enZMs1lfyrUmu6p21b8s\" title=\"YouTube video player\" width=\"100%\"></iframe></p>', 0),
(9, 9, 'Tiếng Anh 10 - Unit 3: Music', 'tieng-anh-10-unit-3-music', 'Music', '<iframe width=\"100%\" height=\"539\" src=\"https://www.youtube.com/embed/Yi75N5YHfUA?list=PLUxH_xuNC0r84enZMs1lfyrUmu6p21b8s\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0),
(10, 9, 'Tiếng Anh 10 - Unit 4: For a Better Community', 'tieng-anh-10-unit-4-for-a-better-community', 'For a Better Community', '<p><iframe frameborder=\"0\" height=\"539\" src=\"https://www.youtube.com/embed/UNOWP0PRdyA?list=PLUxH_xuNC0r84enZMs1lfyrUmu6p21b8s\" title=\"YouTube video player\" width=\"100%\"></iframe></p>', 0),
(11, 9, 'Tiếng Anh 10 - Unit 5 Inventions', 'tieng-anh-10-unit-5-inventions', 'Inventions', '<iframe width=\"100%\" height=\"539\" src=\"https://www.youtube.com/embed/ZdxG6qq5YuI?list=PLUxH_xuNC0r84enZMs1lfyrUmu6p21b8s\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0),
(12, 9, 'Tiếng Anh 10 - Unit 6: Gender Equality - Cô Mai Phương', 'tieng-anh-10-unit-6-gender-equality-co-mai-phuong', 'tieng-anh-10-unit-6-gender-equality-co-mai-phuong', '<p><iframe frameborder=\"0\" height=\"539\" src=\"https://www.youtube.com/embed/qYr8T1m1Q-Q?list=PLUxH_xuNC0r84enZMs1lfyrUmu6p21b8s\" title=\"YouTube video player\" width=\"100%\"></iframe></p>', 0),
(13, 10, 'Tiếng Anh 12 - Unit 1: Life Stories', 'tieng-anh-12-unit-1-life-stories', 'Tiếng Anh lớp 12 Chương trình mới', '<p><iframe frameborder=\"0\" height=\"539\" src=\"https://www.youtube.com/embed/1i86AhHTzFA?list=PLUxH_xuNC0r95wSrr-NOjZ7Q07WmZcDRa\" title=\"YouTube video player\" width=\"100%\"></iframe></p>', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `id_sanpham`, `date`, `id_user`) VALUES
(22, 13, '2021-11-06', 45),
(23, 17, '2021-11-06', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class_models`
--

CREATE TABLE `class_models` (
  `idclass` int(11) NOT NULL,
  `nameclass` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `class_models`
--

INSERT INTO `class_models` (`idclass`, `nameclass`, `soluong`) VALUES
(1, '20SE1', 4),
(2, '20SE2', 0),
(3, '20SE3', 0),
(4, '20SE4', 0),
(5, '20SE5', 0),
(9, '20NS', 0),
(11, '20BA1', 0),
(12, '20GIT', 1),
(13, '21GBA', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucs`
--

CREATE TABLE `danhmucs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_lop` int(10) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `kichhoat` int(11) NOT NULL,
  `slug_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmucs`
--

INSERT INTO `danhmucs` (`id`, `id_lop`, `tendanhmuc`, `mota`, `kichhoat`, `slug_danhmuc`) VALUES
(9, 10, 'Toán Học 10', 'Toán học rất vui', 0, 'toan-hoc-10'),
(10, 10, 'Hóa học 10', 'Hóa học không khó', 0, 'hoa-hoc-10'),
(11, 10, 'Anh Văn 10', 'Giúp đạt điểm cao trong những kì thi', 0, 'anh-van-10'),
(13, 10, 'Lịch sử 10', 'Lịch sử không khó', 0, 'lich-su-10'),
(14, 10, 'Địa lý 10', 'Địa lý học không khó, chỉ cần bằng bạn chăm chỉ', 0, 'dia-ly-10'),
(15, 10, 'Sinh học 10', 'Sinh học 10', 0, 'sinh-hoc-10'),
(16, 10, 'Vật lý 10', 'Vật lý 10', 0, 'vat-ly-10'),
(17, 11, 'Toán Học 11', 'Toán dành cho học sinh lớp 11', 0, 'toan-hoc-11'),
(18, 11, 'Vật Lý 11', 'Vật Lý 11', 0, 'vat-ly-11'),
(19, 11, 'Hóa học 11', 'Hóa học 11', 0, 'hoa-hoc-11'),
(20, 11, 'Anh văn 11', 'Anh văn 11', 0, 'anh-van-11'),
(21, 11, 'Ngữ Văn 11', 'Ngữ Văn 11', 0, 'ngu-van-11'),
(22, 11, 'Sinh học 11', 'Sinh học 11', 0, 'sinh-hoc-11'),
(23, 11, 'Địa lý 11', 'Địa lý 11', 0, 'dia-ly-11'),
(25, 11, 'Lịch sử 11', 'Lịch sử 11', 0, 'lich-su-11'),
(26, 12, 'Toán Học 12', 'Toán học rất vui', 0, 'toan-hoc-12'),
(27, 10, 'Ngữ Văn 10', 'Ngữ Văn 10', 0, 'ngu-van-10'),
(28, 12, 'Vật lý 12', 'Vật lý 12', 0, 'vat-ly-12'),
(29, 12, 'Hóa học 12', 'Hóa học 12', 0, 'hoa-hoc-12'),
(30, 12, 'Anh Văn 12', 'Anh Văn 12', 0, 'anh-van-12'),
(31, 12, 'Ngữ Văn 12', 'Ngữ Văn 12', 0, 'ngu-van-12'),
(32, 12, 'Sinh học 12', 'Sinh 12', 0, 'sinh-hoc-12'),
(33, 12, 'Địa lý 12', 'Địa lý 12', 0, 'dia-ly-12'),
(34, 12, 'Lịch sử 12', 'Lịch sử 12', 0, 'lich-su-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giao_viens`
--

CREATE TABLE `giao_viens` (
  `id` int(10) UNSIGNED NOT NULL,
  `hodem` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `sodienthoai` varchar(255) NOT NULL,
  `CMND` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioithieu` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `kichhoat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giao_viens`
--

INSERT INTO `giao_viens` (`id`, `hodem`, `ten`, `avatar`, `sodienthoai`, `CMND`, `ngaysinh`, `gioithieu`, `email`, `gioitinh`, `kichhoat`) VALUES
(8, 'Nguyễn Quốc', 'Chí', 'thaychi-toan18.jpg', '0822768888', '32131231232', '1993-04-26', '<p>Gi&aacute;o vi&ecirc;n Nguyễn Quốc Ch&iacute;</p>\r\n\r\n<p>Gi&aacute;o vi&ecirc;n Nguyễn Quốc Ch&iacute; l&agrave; ai? Nguyễn Quốc Ch&iacute; gi&aacute;o vi&ecirc;n luyện thi Đại học m&ocirc;n To&aacute;n hot nhất hiện nay. T&igrave;m kiếm t&ecirc;n thầy &quot;Nguyễn Quốc Ch&iacute;&quot; tr&ecirc;n c&ocirc;ng cụ t&igrave;m kiếm Google, nhiều người sẽ bất ngờ với hơn 224. 000. 000 kết quả hiện thị (0, 47 gi&acirc;y), Facebook c&aacute; nh&acirc;n của thầy c&oacute; hơn 500. 000 người theo d&otilde;i. Những b&agrave;i giảng cuốn h&uacute;t được đầu tư c&ocirc;ng phu của thầy Ch&iacute; thu h&uacute;t h&agrave;ng triệu lượt xem. Nhiều bạn học sinh cho rằng m&ocirc;n to&aacute;n sẽ bớt kh&ocirc; khăn hơn khi được học thầy gi&aacute;o &quot;si&ecirc;u cấp&quot; đẹp trai, phong c&aacute;ch trẻ trung, h&agrave;i hước v&agrave; gần gũi như thầy Ch&iacute;. Thầy Ch&iacute; l&agrave; chuy&ecirc;n gia h&agrave;ng đầu về luyện thi To&aacute;n trắc nghiệm tại H&agrave; Nội. Thầy Ch&iacute; đ&atilde; v&agrave; đang tạo ra hệ thống b&agrave;i giảng, hỗ trợ giải b&agrave;i tập cho c&aacute;c em học sinh. Những livestream k&eacute;o d&agrave;i v&agrave;i tiếng đồng hồ, nhiều b&agrave;i giảng cực k&igrave; t&acirc;m huyết hay c&aacute;c phương ph&aacute;p l&agrave;m b&agrave;i s&aacute;ng tạo, dễ hiểu cũng được thầy Ch&iacute; chia sẻ rộng r&atilde;i gi&uacute;p nhiều học sinh học tốt m&ocirc;n To&aacute;n hơn. B&ecirc;n cạnh việc dạy học, thầy Ch&iacute; cũng thường xuy&ecirc;n tương t&aacute;c với c&aacute;c bạn học tr&ograve; qua mạng x&atilde; hội với những status &quot;mặn ch&aacute;t&quot; hay nhiều bức ảnh chế h&agrave;i hước nhận về h&agrave;ng ngh&igrave;n lượt th&iacute;ch, b&igrave;nh luận v&agrave; chia sẻ.</p>', 'chidt264@gmail.com', 0, 0),
(9, 'Hồ Thức', 'Thuận', 'ho-thuc-thuan-min69.jpg', '0973749373', '1999192922', '1992-07-23', '<p>Hồ Thức Thuận thầy gi&aacute;o trẻ điển trai c&oacute; nhiều năm kinh nghiệm luyện thi Đại học chất lượng cao, lọt Top gi&aacute;o vi&ecirc;n dạy To&aacute;n livestream c&oacute; lượng xem trực tiếp h&agrave;ng đầu. Hiện tại, Facebook c&aacute; nh&acirc;n của thầy Thuận c&oacute; hơn 240. 000 người theo d&otilde;i, Fanpage c&oacute; hơn 450. 000 người theo d&otilde;i, k&ecirc;nh Youtube đạt n&uacute;t bạc với hơn 129. 000 người đăng k&yacute;. C&oacute; thể n&oacute;i, thầy Hồ Thức Thuận đang l&agrave; một trong những gi&aacute;o vi&ecirc;n dạy To&aacute;n nổi tiếng nhất tr&ecirc;n mạng x&atilde; hội hiện nay.</p>\r\n\r\n<p>Thầy Thuận thi đỗ Thủ khoa Đại học Kinh tế Quốc d&acirc;n với tổng điểm 3 m&ocirc;n 27, 5 điểm&nbsp;(To&aacute;n: 9, 5; L&yacute;: 9, 5; H&oacute;a: 8, 5). Tự tin với kiến thức của m&igrave;nh v&agrave; mong muốn phụ gi&uacute;p bố mẹ, ngay từ năm thứ nhất Đại học, thầy Thuận đ&atilde; l&agrave;m gia sư cho nhiều bạn học sinh tr&ecirc;n địa b&agrave;n H&agrave; Nỗi. Đ&acirc;y l&agrave; cơ duy&ecirc;n đưa thầy Thuận đến với nghề &quot;G&otilde; đầu trẻ&quot;. Uy t&iacute;n của thầy Thuận được khẳng định, c&aacute;c phụ huynh tin tưởng v&agrave; đăng k&yacute; cho con em tới học. Từ đ&oacute;, việc dạy học ngấm v&agrave;o m&aacute;u, trở th&agrave;nh mục ti&ecirc;u nghề nghiệp của thầy Thuận. Sau khi tốt nghiệp, thầy Thuận tiếp tục giảng dạy 2 mốn To&aacute;n, L&yacute; ở c&aacute;c trung t&acirc;m. C&aacute;c lớp của thầy Thuận thu h&uacute;t rất đ&ocirc;ng học sinh theo học. C&aacute;ch dạy nhiệt t&igrave;nh v&agrave; hết m&igrave;nh của thầy Thuận đ&atilde; truyền lửa cho nhiều học sinh. Kh&ocirc;ng chỉ cung cấp kiến thức s&aacute;t với đề thi, thầy Thuận c&ograve;n c&oacute; những c&acirc;u chuyện h&agrave;i hước, th&uacute; vị để học sinh c&oacute; hứng th&uacute; với việc học. Thầy được đ&aacute;nh gi&aacute; l&agrave; &quot;Sứ giả truyền cảm hứng y&ecirc;u th&iacute;ch v&agrave; học tốt m&ocirc;n To&aacute;n&quot;. Nhiều học sinh của thầy Thuận thi đỗ v&agrave;o nhiều trường Đại học danh tiếng như: Đại học B&aacute;ch Khoa, Đại học Ngoại thương, Đại học Y H&agrave; Nội, Đại học Kinh tế Quốc d&acirc;n...</p>\r\n\r\n<p>Những b&agrave;i giảng của thầy Thuận được ghi lại bằng video, học tr&ograve; c&oacute; thể xem v&agrave; tự học ở nh&agrave;. Thầy lu&ocirc;n giải đ&aacute;p mọi thắc mắc của học sinh một c&aacute;ch tận t&igrave;nh, mọi l&uacute;c, mọi nơi.</p>', 'hothucthuan@gmail.com', 0, 0),
(10, 'Nguyễn Tiến', 'Đạt', 'thay-dat58.jpg', '0903288866', '1999192922', '1993-08-26', '<p>Nguyễn Tiến Đạt (Thầy Đạt To&aacute;n) - thầy gi&aacute;o điển trai c&oacute; phương ph&aacute;p dạy học độc đ&aacute;o khiến học sinh ng&agrave;y n&agrave;o cũng muốn đến lớp. Thầy Đạt vừa l&agrave; gi&aacute;o vi&ecirc;n dạy To&aacute;n nổi tiếng vừa l&agrave; Gi&aacute;m đốc trung t&acirc;m luyện thi Đại học Tiến Đạt ở H&agrave; Nội.</p>\r\n\r\n<p>Thầy Đạt l&agrave; gi&aacute;o vi&ecirc;n dạy To&aacute;n duy nhất cam kết điểm số v&agrave; đảm bảo tỉ lệ 100% đỗ Đại học. &ldquo;Tuổi trẻ t&agrave;i cao&rdquo; ch&iacute;nh l&agrave; mỹ từ khi nhắc về thầy Đạt với bảng th&agrave;nh t&iacute;ch đ&aacute;ng nể trong suốt chặng đường đứng tr&ecirc;n bục giảng:</p>\r\n\r\n<ul>\r\n	<li>Top đầu gi&aacute;o vi&ecirc;n trẻ c&oacute; học sinh theo học đ&ocirc;ng nhất H&agrave; Nội</li>\r\n	<li>Gi&aacute;o vi&ecirc;n dạy To&aacute;n Top đầu về luyện thi trắc nghiệm</li>\r\n	<li>L&agrave; gi&aacute;o vi&ecirc;n uy t&iacute;n được 20 tờ b&aacute;o nổi tiếng đưa tin v&agrave; 5 k&ecirc;nh truyền h&igrave;nh phỏng vấn: Zing, K&ecirc;nh 14, VTC, D&acirc;n Tr&iacute;, ANTV, QPTV, VNExpress</li>\r\n	<li>Mỗi năm c&oacute; h&agrave;ng ngh&igrave;n học sinh theo học đỗ Đại học với điểm số cao. Nổi tiếng khi đưa những học sinh trung b&igrave;nh, thậm ch&iacute; mất gốc đạt &gt; 9 điểm m&ocirc;n to&aacute;n trong c&aacute;c kỳ thi chỉ trong một thời gian ngắn.</li>\r\n</ul>\r\n\r\n<p>Thầy Đạt c&oacute; phương ph&aacute;p dạy s&aacute;ng tạo, c&aacute;ch giải cực dễ hiểu. Với nhiều năm kinh nghiệm luyện thi Đại học m&ocirc;n To&aacute;n, thầy Đạt lu&ocirc;n nắm bắt kịp thời những đổi mới trong c&aacute;ch ra đề của Bộ GD&amp; ĐT. Thầy kh&ocirc;ng ngừng đổi mới phương ph&aacute;p giảng dạy sao cho học sinh dễ tiếp cận nhất, tạo được hứng th&uacute;, say m&ecirc; cho học tr&ograve;. Thầy Đạt nhiệt t&igrave;nh giải đ&aacute;p mọi thắc mắc về b&agrave;i tập, chuyện thi cử đến cả việc hướng nghiệp cho học sinh. L&agrave; gi&aacute;o vi&ecirc;n trẻ, phong c&aacute;ch giảng dạy của thầy Đạt h&agrave;i hước, trẻ trung, gần gũi n&ecirc;n được nhiều học sinh y&ecirc;u mến.</p>\r\n\r\n<p>Học sinh của th&acirc;y Đạt được r&egrave;n kỹ năng tư duy, ghi nhớ tốt, kỹ năng giải b&agrave;i nhanh, c&aacute;c mẹo giải b&agrave;i tập v&agrave; đặc biệt c&aacute;ch sử dụng m&aacute;y t&iacute;nh bỏ t&uacute;i th&agrave;nh thạo. Thầy Đạt l&agrave; t&aacute;c giả bộ s&aacute;ch gi&uacute;p đạt điểm cao m&ocirc;n to&aacute;n, 50 thủ thuật d&ugrave;ng m&aacute;y t&iacute;nh casio vinacal đột ph&aacute;, tăng 300% tốc độ giải b&agrave;i, 15 kỹ thuật xử l&yacute; trắc nghiệm cực đỉnh&hellip;</p>', 'tiendatnguyen2510@gmail.com', 0, 0),
(11, 'Vũ Tuấn', 'Anh', 'vu-tuan-anh-mon-vat-ly-min61.jpg', '0349834672', '1999192922', '1993-07-23', '<p>Thầy Vũ Tuấn Anh l&agrave; gi&aacute;o vi&ecirc;n Vật l&yacute; nổi tiếng tr&ecirc;n mạng x&atilde; hội. Thầy tốt nghiệp loại giỏi trường Đại học Sư phạm H&agrave; Nội, Top 1 b&agrave;i giảng Vật l&yacute; c&oacute; lượt xem cao nhất năm 2018, gi&aacute;o vi&ecirc;n livestream Vật l&yacute; c&oacute; số lượng học sinh đ&ocirc;ng nhất cả nước năm 2018-2019-2020. Thầy l&agrave; t&aacute;c giả cuốn &quot;Luyện đề thần tốc&quot;- s&aacute;ch gối đầu giường của nhiều học sinh.<br />\r\nThầy Tuấn Anh l&agrave; một trong những gi&aacute;o vi&ecirc;n &quot;quyền lực&quot; tr&ecirc;n mạng x&atilde; hội. Facebook của thầy hiện c&oacute; hơn 210.000 người theo d&otilde;i với lượng tương t&aacute;c lớn. Hiện tại, thầy Tuấn Anh đang c&ocirc;ng t&aacute;c tại C&ocirc;ng ty Gi&aacute;o dục Trực tuyến Mclass, đồng thời cộng t&aacute;c với k&ecirc;nh Gi&aacute;o dục trực tuyến của VTV Cab. Thầy Tuấn Anh g&acirc;y ấn tượng nhờ c&aacute;ch giảng b&agrave;i s&aacute;ng tạo, dễ hiểu, nhiệt t&igrave;nh.<br />\r\nL&agrave; thế hệ gi&aacute;o vi&ecirc;n trẻ, thầy lu&ocirc;n bắt trend với c&aacute;c c&ocirc; cậu học tr&ograve;, đồng thời thường xuy&ecirc;n pha tr&ograve; cho học sinh cười giảm stress trong giờ học. Nhờ đ&oacute;, mỗi tiết học của thầy Tuấn Anh trở n&ecirc;n tươi mới, hấp dẫn hơn. Thầy lu&ocirc;n cố gắng gắn những c&ocirc;ng thức Vật l&yacute; phức tạp l&agrave; &quot;cơn &aacute;c mộng&quot; với nhiều thế hệ học sinh v&agrave;o hiện tượng th&acirc;n thuộc trong cuộc sống để học sinh dễ hiểu, dễ nhớ. Những b&agrave;i giảng h&agrave;i hước, phương ph&aacute;p giải dễ nhớ của thầy Tuấn Anh khiến học sinh vượt qua nỗi sợ m&ocirc;n Vật l&yacute; một c&aacute;ch dễ d&agrave;ng.<br />\r\nThầy Tuấn Anh c&oacute; &quot;độc chi&ecirc;u&quot; để biến m&ocirc;n Vật l&yacute; kh&ocirc; khan th&agrave;nh những b&agrave;i giảng hấp dẫn, tạo hứng th&uacute; cho học sinh. Mỗi hiện tượng Vật l&yacute;, thầy cố gắng t&igrave;m hiểu một c&aacute;ch chi tiết, đầy đủ nhất, đưa v&agrave;o c&aacute;c v&iacute; dụ thực tiễn gắn với nhũng thứ th&acirc;n thu&ocirc;c trong cuộc sống để giải th&iacute;ch cho học sinh. Đặc biệt, trong tiết học s&oacute;ng &acirc;m, thầy Tuấn Anh bắt đầu buổi học bằng một tiết mục h&aacute;t v&agrave; đệm đ&agrave;n Guitar để học sinh hứng th&uacute; hơn.<br />\r\nTrước đ&acirc;y, thầy Tuấn Anh từng c&oacute; qu&atilde;ng thời gian dạy Vật l&yacute; ở c&aacute;c trường THPT nhưng quyết định nghỉ để gắn b&oacute; với việc dạy học Online. Kh&ocirc;ng c&ograve;n b&oacute; buộc với h&igrave;nh ảnh bảng đen, phấn trắng, thầy c&oacute; thể lan tỏa kiến thức cho thật nhiều học sinh tr&ecirc;n cả nước. Mỗi năm, thầy Tuấn Anh dạy livestream cho h&agrave;ng chục ngh&igrave;n học sinh. Tr&ograve;n 10 năm gắn b&oacute; với nghề gi&aacute;o, thầy Tuấn Anh học th&ecirc;m được sự ki&ecirc;n nhẫn, bao dung. Th&agrave;nh c&ocirc;ng lớn nhất với thầy l&agrave; sự trưởng th&agrave;nh của học tr&ograve;.</p>\r\n\r\n<p>&nbsp;</p>', 'vutuananh@gmail.com', 0, 0),
(12, 'Chu Văn', 'Biên', 'thay-chu-van-bien27.jpg', '0943191900', '1999192922', '1970-12-02', '<p>Thầy Chu Văn Bi&ecirc;n - giảng vi&ecirc;n trường Đại học Hồng Đức, gi&aacute;o vi&ecirc;n luyện thi Đại học m&ocirc;n Vật l&yacute; nổi tiếng. Thầy Bi&ecirc;n c&oacute; nhiều phương ph&aacute;p giải, c&ocirc;ng thức Vật l&yacute; si&ecirc;u hay, si&ecirc;u nhanh gọn gi&uacute;p học sinh chinh phục điểm 9, 10 trong kỳ thi THPT Quốc gia. Thầy Bi&ecirc;n từng tham gia dạy học tr&ecirc;n truyền h&igrave;nh trong chương tr&igrave;nh Bổ trợ kiến thức k&ecirc;nh VTV2. Mấy năm trở lại đ&acirc;y, thầy Chu Văn Bi&ecirc;n c&ograve;n dạy học Online qua Fanpage v&agrave; Youtube. Học sinh khắp cả nước c&oacute; thể theo d&otilde;i những b&agrave;i giảng của thầy mọi l&uacute;c, mọi nơi.</p>\r\n\r\n<p><strong>Những ưu điểm của thầy Chu Văn Bi&ecirc;n:</strong></p>\r\n\r\n<ul>\r\n	<li>Dạy rất hay v&agrave; kiến thức rất s&aacute;t đề thi.</li>\r\n	<li>Nhiều tuyệt chi&ecirc;u, phương ph&aacute;p hay v&agrave; mới lạ.</li>\r\n	<li>C&oacute; nhiều lời khuy&ecirc;n cả trong cuộc sống.</li>\r\n</ul>\r\n\r\n<p>Giọng n&oacute;i đặc biệt c&ugrave;ng phong c&aacute;ch dạy h&agrave;i hước của thầy Bi&ecirc;n gi&uacute;p học sinh &quot;chống buồn ngủ&quot;, những tiết học bớt căng thẳng v&agrave; nh&agrave;m ch&aacute;n. Thầy lu&ocirc;n giảng kỹ từ s&aacute;ch gi&aacute;o khoa, s&aacute;ch b&agrave;i tập để học sinh hiểu r&otilde;, hiểu s&acirc;u về b&agrave;i học rồi mới đến c&aacute;c dạng n&acirc;ng cao. Với mỗi dạng b&agrave;i tập, thầy Bi&ecirc;n lu&ocirc;n ph&acirc;n t&iacute;ch kỹ phương ph&aacute;p, đ&agrave;o s&acirc;u bản chất vật l&yacute; của hiện tượng, dự đo&aacute;n hướng ph&aacute;t triển của b&agrave;i to&aacute;n. Nhờ đ&oacute;, thầy c&oacute; thể bắt b&agrave;i &yacute; tưởng ra đề, giảng dạy kiến thức rất s&aacute;t đề thi. Khi chọn đ&aacute;p &aacute;n trắc nghiệm, thầy Bi&ecirc;n lu&ocirc;n ph&acirc;n t&iacute;ch kỹ v&igrave; sao đ&aacute;p &aacute;n n&agrave;y đ&uacute;ng, đ&aacute;p &aacute;n kia sai.</p>\r\n\r\n<p>Thầy Bi&ecirc;n l&agrave; người kh&iacute;ch lệ, động vi&ecirc;n v&agrave; truyền cảm hứng cho học sinh. Nhiều học tr&ograve; của thầy cảm thấy học Vật l&yacute; dễ d&agrave;ng hơn. Thậm ch&iacute;, c&oacute; bạn từ sợ v&agrave; gh&eacute;t m&ocirc;n Vật l&yacute; th&agrave;nh y&ecirc;u th&iacute;ch m&ocirc;n học n&agrave;y.</p>', 'chuvanbien.vn@gmail.com', 0, 0),
(14, 'Phạm Văn', 'Thuận', 'hoa-thay-thuan50.jpg', '0981163685', '1999192922', '1994-02-02', '<p>Thầy Phạm Minh Thuận (Phạm Văn Thuận) gi&aacute;o vi&ecirc;n dạy h&oacute;a nổi tiếng tr&ecirc;n mạng x&atilde; hội. Thầy gi&aacute;o vui t&iacute;nh sở hữu lượng học sinh theo d&otilde;i đ&ocirc;ng đảo tr&ecirc;n Facebook (hơn 260.000 người). Thầy Thuận được học sinh cả nước gọi với biệt danh h&agrave;i hước &quot;Thuận h&ocirc;i n&aacute;ch&quot;. Khi dạy kh&oacute;a 2001, c&aacute;c bạn học sinh tuổi rắn n&ecirc;n thầy gọi c&aacute;c bạn l&agrave; &quot;Rắn h&ocirc;i n&aacute;ch&quot;. Ngay lập tức, học sinh &quot;phản đ&ograve;n&quot; gọi thầy l&agrave; &quot;Thuận h&ocirc;i n&aacute;ch&quot;. Từ đ&oacute;, biệt danh n&agrave;y đi k&egrave;m với thầy đến tận b&acirc;y giờ.<br />\r\nThầy Thuận l&agrave; thủ khoa đầu v&agrave;o trường Đại học Sư phạm H&agrave; Nội kh&oacute;a K62 (2012-2016). Sau khi tốt nghiệp, thầy học tiếp v&agrave; ho&agrave;n th&agrave;nh chương tr&igrave;nh đ&agrave;o tạo thạc sĩ tại trường năm 2018. Kh&ocirc;ng giống nhiều bạn b&egrave; c&ugrave;ng lớp, thầy Thuận chọn dạy học trực tuyến thay v&igrave; dạy ở trường. Thầy hiện đang l&agrave; gi&aacute;o vi&ecirc;n tại C&ocirc;ng ty Gi&aacute;o dục trực tuyến Mclass. Thầy Thuận được học sinh nhận x&eacute;t vui l&agrave; gi&aacute;o vi&ecirc;n dạy Live &quot;kh&ocirc; m&aacute;u nhất Vịnh Bắc Bộ&quot;, c&oacute; lượng học sinh theo d&otilde;i livestream m&ocirc;n h&oacute;a đ&ocirc;ng nhất cả nước.<br />\r\nKhi c&ograve;n học thạc sĩ, thầy Thuận t&igrave;nh cờ biết đến h&igrave;nh thức dạy livestream. Phải kh&oacute; khăn lắm thầy mới mua được chiếc điện thoại mới để dạy livestream. Sau một thời gian, thầy nhận thầy c&aacute;c bạn học sinh tiếp nhận kiến thức bằng c&aacute;ch n&agrave;y ng&agrave;y c&agrave;ng đ&ocirc;ng. Với thầy Thuận, dạy livestream hay đứng tr&ecirc;n bục giảng ở trường th&igrave; cũng l&agrave; gi&aacute;o vi&ecirc;n, chỉ kh&aacute;c nhau về h&igrave;nh thức m&agrave; th&ocirc;i. Thầy cảm thấy c&oacute; duy&ecirc;n n&ecirc;n quyết định theo đuổi nghiệp dạy livestream. Dạy học trực tuyến gi&uacute;p thầy truyền đạt kiến thức đến học sinh cả nước một c&aacute;ch dễ d&agrave;ng.<br />\r\nKiến thức kh&oacute; nhằn, kh&ocirc; khan của m&ocirc;n H&oacute;a học qua video livestream đầy s&aacute;ng tạo v&agrave; h&agrave;i hước của thầy Thuận trở n&ecirc;n dễ hiểu, dễ nhớ hơn. L&agrave; gi&aacute;o vi&ecirc;n trẻ n&ecirc;n thầy c&oacute; c&aacute;ch giảng gần gũi v&agrave; dễ tiếp thu hơn. Trong nhiều b&agrave;i giảng, thầy vui đ&ugrave;a, thậm ch&iacute; &quot;chửi&quot; vui c&aacute;c bạn học sinh. Thầy cũng thường chuẩn bị th&ecirc;m nhiều c&acirc;u hỏi b&ecirc;n ngo&agrave;i để chia sẻ khi livestream nhằm tạo hứng th&uacute; cho học sinh khi học b&agrave;i.<br />\r\nT&agrave;i năng v&agrave; h&agrave;i hước, thầy Thuận được nhiều c&ocirc; g&aacute;i thầm thương trộm nh&oacute;. Chia sẻ về mẫu bạn g&aacute;i thầy th&iacute;ch, thầy Thuận cho biết trước đ&acirc;y thường cảm nắng những bạn nữ c&oacute; ngoại h&igrave;nh xinh xắn. Giờ lớn hơn, thầy nhận thấy người con g&aacute;i truyền thống sẽ ph&ugrave; hợp hơn.</p>', 'minhthuan.hnue@gmail.com', 0, 0),
(15, 'Phạm', 'Thắng', 'Thay-Pham-Thang71.jpg', '0964114749', '1999192922', '1990-08-28', '<p>- L&agrave; học vi&ecirc;n tốt nghiệp thủ khoa của Học viện Kỹ thuật Qu&acirc;n sự v&agrave; được giữ lại Học viện l&agrave;m giảng vi&ecirc;n, chuy&ecirc;n ng&agrave;nh C&ocirc;ng nghệ H&oacute;a học.</p>\r\n\r\n<p>- Đam m&ecirc; với H&oacute;a học từ khi c&ograve;n nhỏ, th&iacute;ch t&igrave;m hiểu v&agrave; tự giải th&iacute;ch bản chất c&aacute;c hiện thượng H&oacute;a học xảy ra trong cuộc sống.</p>\r\n\r\n<p>- Đam m&ecirc; thể thao, th&iacute;ch b&oacute;ng đ&aacute;, b&oacute;ng chuyền v&agrave; b&oacute;ng b&agrave;n, th&iacute;ch nghe nhạc tiếng Anh, nhạc H&agrave;n, th&iacute;ch đọc truyện tr&igrave;nh th&aacute;m, xem phim khoa học viễn tưởng.</p>', 'gv.thangpd@hocmai.edu.vn', 0, 0),
(16, 'Phan Khắc', 'Nghệ', 'phan-khac-nghe54.jpg', '0976782958', '32131231232', '1988-02-02', '<p>Thầy Phan Khắc Nghệ l&agrave; gi&aacute;o vi&ecirc;n dạy m&ocirc;n Sinh học đồng thời l&agrave; Ph&oacute; Hiệu trưởng trường THPT Chuy&ecirc;n H&agrave; Tĩnh. Thầy tốt nghiệp Tiến sĩ tại Đại học Sư phạm H&agrave; Nội với c&ocirc;ng tr&igrave;nh luận &aacute;n c&oacute; đề t&agrave;i &ldquo;R&egrave;n luyện năng lực giải quyết vấn đề cho học sinh trong dạy học phần Di truyền học ở trường THPT chuy&ecirc;n&rdquo;.</p>\r\n\r\n<p>Tốt nghiệp đại học năm 1999, thầy Phan Khắc Nghệ l&agrave; một trong 2 sinh vi&ecirc;n xuất sắc được Trường Đại học Vinh giữ lại l&agrave;m c&aacute;n bộ giảng dạy khoa Sinh. Tuy nhi&ecirc;n v&igrave; ho&agrave;n cảnh gia đ&igrave;nh, thầy đ&agrave;nh gi&atilde; từ giảng đường đại học, trở về với trường THPT gần qu&ecirc; c&ocirc;ng t&aacute;c để c&oacute; điều kiện gi&uacute;p đỡ gia đ&igrave;nh.</p>\r\n\r\n<p>Th&agrave;nh t&iacute;ch của thầy Phan Khắc Nghệ khiến nhiều người cho&aacute;ng ngợp v&igrave; bề d&agrave;y kiến thức s&acirc;u rộng c&ugrave;ng sự nghi&ecirc;n cứu uy&ecirc;n th&acirc;m qua nhiều đầu s&aacute;ch thầy viết.</p>\r\n\r\n<p>THPT H&agrave; Huy Tập l&agrave; ng&ocirc;i trường đầu ti&ecirc;n thầy đứng tr&ecirc;n bục giảng. C&aacute;c đội tuyển HSG tỉnh m&ocirc;n Sinh do thầy giảng dạy li&ecirc;n tục c&oacute; 100% HS đoạt giải tỉnh v&agrave; c&oacute; em dự thi HSG quốc gia, đ&oacute; l&agrave; Nguyễn Văn Lương, HS kh&oacute;a 2000-2003. Th&aacute;ng 3/2004, trong hội thi gi&aacute;o vi&ecirc;n dạy giỏi m&ocirc;n Sinh THPT cấp tỉnh, thầy Nghệ đạt thủ khoa ngay lần đầu ti&ecirc;n tham gia.</p>\r\n\r\n<p>Thầy Nghệ được l&atilde;nh đạo Sở chọn về giảng dạy m&ocirc;n Sinh tại Trường THPT Chuy&ecirc;n H&agrave; Tĩnh, ng&ocirc;i trường cấp 3 nổi tiếng tại miền Trung. C&ugrave;ng với đồng nghiệp, c&aacute;c đội tuyển HSG quốc gia do thầy chủ nhiệm hoặc tham gia giảng dạy đều đạt kết quả cao. Nhiều năm liền, trường c&oacute; tỷ lệ 100% em dự thi đoạt giải quốc gia v&agrave; c&oacute; nhiều giải cao kh&aacute;c.</p>\r\n\r\n<p>Đặc biệt năm 2014, đội tuyển m&ocirc;n Sinh học dự thi 10 em th&igrave; đều đoạt giải, trong đ&oacute; c&oacute; 3 giải nh&igrave;, 5 giải ba, 2 giải khuyến kh&iacute;ch v&agrave; 1 em được Bộ GD&amp;ĐT gọi tham dự tuyển đội HSG dự thi quốc tế.</p>\r\n\r\n<p>&nbsp;</p>', 'phankhacnghe@gmail.com', 0, 0),
(17, 'Trương Công', 'Kiên', 'thay-kien-day-sinh45.jpg', '0399036696', '1999192922', '1993-11-20', '<p>Thầy gi&aacute;o Trương C&ocirc;ng Ki&ecirc;n c&oacute; hơn 4 năm kinh nghiệm giảng dạy, luyện thi m&ocirc;n Sinh học THPT quốc gia chất lượng, hiện thầy đang c&ocirc;ng t&aacute;c tại c&ocirc;ng ty gi&aacute;o dục trực tuyến Mclass. Thầy Ki&ecirc;n chia sẻ, chắc c&oacute; lẽ do sinh đ&uacute;ng ng&agrave;y Nh&agrave; gi&aacute;o Việt Nam 20/11 n&ecirc;n niềm đam m&ecirc; với nghiệp dạy học đ&atilde; ngấm s&acirc;u v&agrave;o t&acirc;m tr&iacute; của thầy ngay khi c&ograve;n l&agrave; sinh vi&ecirc;n. Để c&oacute; nhiều học sinh y&ecirc;u th&iacute;ch m&ocirc;n Sinh học, ngo&agrave;i việc tận t&acirc;m giảng dạy, lập ra những nh&oacute;m học tập m&ocirc;n Sinh học, tổ chức thi thử thường xuy&ecirc;n cho c&aacute;c em học sinh, thầy Ki&ecirc;n c&ograve;n viết s&aacute;ch để hỗ trợ c&aacute;c em học sinh &ocirc;n luyện m&ocirc;n Sinh học đạt kết quả cao. Năm 2018, thầy Ki&ecirc;n đ&atilde; ra mắt cuốn s&aacute;ch đầu tay C&ocirc;ng Ph&aacute; Đề Thi THPT Quốc Gia M&ocirc;n Sinh v&agrave; năm 2019 ra mắt cuốn Chinh Phục Vận Dụng Cao Sinh Học.</p>\r\n\r\n<p>Khi dạy livestream, thầy Ki&ecirc;n nhận ra c&oacute; rất nhiều học sinh ở khắp mọi nơi &quot;sợ Sinh&quot; do học chưa hiểu, chưa c&oacute; phương ph&aacute;p học ph&ugrave; hợp n&ecirc;n dần dần mất tự tin v&agrave; ch&aacute;n học m&ocirc;n Sinh học. Đặc biệt l&agrave; với m&ocirc;n Sinh học l&agrave; m&ocirc;n rất quan trọng để c&aacute;c em học sinh thi khối B v&agrave;o c&aacute;c trường đại học c&oacute; điểm số cao nhất cả nước như trường Đại học Y, Dược. Đối với mỗi học sinh, c&aacute;nh cửa đại học như một lối rẽ quyết định của cuộc đời v&agrave; những em học sinh muốn bước v&agrave;o c&aacute;nh cửa trường Đại học Y, Dược th&igrave; c&agrave;ng cần phải học thật tốt m&ocirc;n Sinh học n&ecirc;n &aacute;p lực học m&ocirc;n n&agrave;y lại c&agrave;ng lớn. Với sự trăn trở l&agrave;m sao để gi&uacute;p nhiều học sinh th&ecirc;m y&ecirc;u m&ocirc;n Sinh học đ&atilde; th&ocirc;i th&uacute;c thầy gi&aacute;o Ki&ecirc;n tổ chức, duy tr&igrave; c&aacute;c buổi livestream v&agrave; t&igrave;m c&aacute;ch truyền đạt kiến thức hiệu quả nhất cho c&aacute;c em học sinh.</p>\r\n\r\n<p>Với phương ph&aacute;p giảng dạy &quot;dễ nhớ - dễ hiểu - dễ vận dụng&quot; qua những từ kh&oacute;a ngắn gọn v&agrave; đặc sắc, mỗi buổi livestream của thầy Ki&ecirc;n đ&atilde; thu h&uacute;t h&agrave;ng ngh&igrave;n lượt tham gia học v&agrave; b&igrave;nh luận trả lời c&acirc;u hỏi của thầy. Kh&ocirc;ng kh&iacute; buổi học c&agrave;ng th&ecirc;m h&agrave;o hứng khi thầy xen kẽ những c&acirc;u chuyện cuộc sống &yacute; nghĩa về sự chia sẻ v&agrave; l&ograve;ng biết ơn đ&atilde; gi&uacute;p cho học sinh hăng h&aacute;i trong giờ học, hiểu b&agrave;i hơn. Thầy Ki&ecirc;n như một người bạn, người anh lắng nghe t&acirc;m sự v&agrave; đưa ra những lời khuy&ecirc;n để c&aacute;c em sống v&agrave; học tập t&iacute;ch cực hơn. Thầy Ki&ecirc;n được học tr&ograve; ưu &aacute;i gọi t&ecirc;n th&acirc;n mật l&agrave; &quot;Anh trai mưa quốc d&acirc;n&quot; hay &quot;Sứ giả truyền cảm hứng&quot;</p>', 'truongcongkien@gmail.com', 0, 0),
(18, 'Vũ Mai', 'Phương', 'co-mai-phuong65.jpg', '0989924488', '1999192922', '1988-08-02', '<p>Vũ Thị Mai Phương hay được c&aacute;c bạn trẻ gọi bằng c&aacute;i t&ecirc;n th&acirc;n thương &ldquo;c&ocirc; Mai Phương&rdquo;, hiện đang l&agrave; gi&aacute;m đốc trung t&acirc;m Ngoại ngữ 24h tại H&agrave; Nội. Mai Phương đ&atilde; c&oacute; đến 15 năm kinh nghiệm giảng dạy m&ocirc;n tiếng Anh. Mai Phương đang rất được giới trẻ học Anh văn y&ecirc;u th&iacute;ch bởi phương ph&aacute;p giảng dạy th&ocirc;ng minh v&agrave; ấn tượng. Ch&iacute;nh sự trẻ trung, d&iacute; dỏm trong c&aacute;ch giảng dạy đ&atilde; gi&uacute;p cho h&agrave;ng ngh&igrave;n bạn học sinh từ ch&aacute;n gh&eacute;t tiếng Anh chuyển sang y&ecirc;u th&iacute;ch v&agrave; th&agrave;nh c&ocirc;ng với khả năng tiếng Anh của m&igrave;nh. Xinh đẹp, trẻ trung, năng động, bền bỉ v&agrave; đổi mới lu&ocirc;n hội tụ ở Vũ Mai Phương. Y&ecirc;u th&iacute;ch v&agrave; đam m&ecirc; tiếng Anh từ nhỏ, Mai Phương lu&ocirc;n nổi bật với bảng th&agrave;nh t&iacute;ch đ&aacute;ng nể khi từng li&ecirc;n tiếp đạt th&agrave;nh t&iacute;ch học tập cao: 2 giải học sinh giỏi Quốc gia THPT, đỗ &Aacute; khoa khối D tại đại học Ngoại ngữ với 27 điểm. C&ocirc; cũng l&agrave; một trong rất &iacute;t người tại Việt Nam thi TOEIC đạt điểm tuyệt đối 990, IELTS với số điểm cao ngất ngưỡng 8.5 v&agrave; l&agrave; người c&oacute; được chứng chỉ giảng dạy TESOL &ndash; một chứng chỉ giảng tiếng Anh tại 80 Quốc gia tr&ecirc;n thế giới. Mai Phương kh&ocirc;ng chỉ c&oacute; bề d&agrave;y th&agrave;nh t&iacute;ch v&agrave; kinh nghiệm trong việc dạy v&agrave; học tiếng Anh, m&agrave; c&ograve;n tham gia bi&ecirc;n soạn c&aacute;c s&aacute;ch tham khảo rất thu h&uacute;t học sinh như: &ldquo;Tự luyện TOEIC 900&rdquo;, &ldquo;Ngữ ph&aacute;p d&agrave;nh cho thi trắc nghiệm&rdquo;.<br />\r\n<strong>Th&agrave;nh t&iacute;ch</strong></p>\r\n\r\n<ul>\r\n	<li>Gi&aacute;m đốc trung t&acirc;m Ngoại ngữ 24h</li>\r\n	<li>5 năm kinh nghiệm luyện thi ĐH m&ocirc;n Tiếng Anh</li>\r\n	<li>Đạt 2 giải học sinh giỏi quốc gia m&ocirc;n Tiếng Anh THPT</li>\r\n	<li>Đỗ &Aacute; khoa ĐH Ngoại thương khối D với 27 điểm, IELTS: 8.5</li>\r\n	<li>Chứng chỉ giảng dạy Tiếng Anh TESOL (Chứng chỉ giảng dạy Tiếng Anh 80 nước tr&ecirc;n thế giới)</li>\r\n	<li>T&aacute;c giả s&aacute;ch: Tự luyện TOEIC 900.</li>\r\n	<li>N&oacute;i về kinh nghiệm học tiếng Anh của bản th&acirc;n Mai Phương chia sẻ bằng bốn c&acirc;u ngắn gọn nhưng s&uacute;c t&iacute;ch: &ldquo;Học đ&uacute;ng phương ph&aacute;p &ndash; R&egrave;n luyện h&agrave;ng ng&agrave;y &ndash; Đặt ra mục ti&ecirc;u -Ki&ecirc;n tr&igrave; theo đuổi&rdquo;.</li>\r\n</ul>', 'vmphuong@gmail.com', 1, 0),
(19, 'Trang', 'Anh', 'co-trang-anh9.jpg', '0982707181', '1999192922', '1987-05-05', '<p>Với niềm đam m&ecirc; y&ecirc;u th&iacute;ch m&ocirc;n tiếng Anh v&agrave; nghề gi&aacute;o, c&ocirc; Nguyễn Thị Huyền Trang (Trang Anh) đ&atilde; chọn ng&agrave;nh sư phạm tiếng Anh. Năm 2009, tốt nghiệp đại học sư phạm, c&ocirc; nhận nhiệm vụ c&ocirc;ng t&aacute;c tại trường THPT Đại Từ, huyện Đại Từ, tỉnh Th&aacute;i Nguy&ecirc;n. Từ nhận thức s&acirc;u sắc lời dạy của B&aacute;c Hồ &quot;V&igrave; lợi &iacute;ch mười năm trồng c&acirc;y. V&igrave; lợi &iacute;ch trăm năm trồng người&quot;, c&ocirc; gi&aacute;o Nguyễn Thị Huyền Trang (Trang Anh) lu&ocirc;n n&ecirc;u cao vai tr&ograve;, tr&aacute;ch nhiệm của một người gi&aacute;o vi&ecirc;n gương mẫu, tận t&acirc;m truyền đạt kiến thức, quan t&acirc;m d&agrave;nh nhiều t&igrave;nh thương cho bao thế hệ học tr&ograve;. Trong hơn 10 năm đứng lớp, c&ocirc; lu&ocirc;n tu&acirc;n thủ một nguy&ecirc;n tắc, đ&oacute; l&agrave; &quot;Tận t&acirc;m với c&ocirc;ng việc, tận tụy, hết l&ograve;ng v&igrave; học sinh&quot;. Theo đ&oacute;, trong c&ocirc;ng vệc, c&ocirc; kh&ocirc;ng ngừng học hỏi, t&igrave;m t&ograve;i, n&acirc;ng cao tr&igrave;nh độ, kiến thức, chuy&ecirc;n m&ocirc;n, kỹ năng truyền đạt kiến thức; b&aacute;m s&aacute;t v&agrave;o kế hoạch, nhiệm vụ năm học của ng&agrave;nh, nh&agrave; trường v&agrave; ứng dụng nhạy b&eacute;n những th&agrave;nh quả của năm học trước để x&acirc;y dựng cho bản th&acirc;n một kế hoạch giảng dạy cụ thể, ph&ugrave; hợp với từng lứa tuổi học tr&ograve;. Để c&aacute;c em hứng th&uacute; với kiến thức, tiếp thu b&agrave;i giảng được tốt nhất, c&ocirc; gi&aacute;o Nguyễn Thị Huyền Trang (Trang Anh) đ&atilde; chủ động nghi&ecirc;n cứu, linh hoạt đổi mới phương ph&aacute;p giảng dạy, gi&uacute;p cho c&aacute;c tiết học trở n&ecirc;n sinh động, cuốn h&uacute;t. Kh&ocirc;ng chỉ d&agrave;nh thời gian để t&igrave;m t&ograve;i nghi&ecirc;n cứu c&aacute;c phương ph&aacute;p giảng dạy t&iacute;ch cực, c&ocirc; c&ograve;n tự trau dồi kiến thức, kỹ năng để đ&aacute;p ứng c&aacute;c y&ecirc;u cầu soạn giảng t&iacute;ch hợp với ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin trong giảng dạy. Nhờ đ&oacute;, những b&agrave;i giảng của c&ocirc; đ&atilde; nu&ocirc;i dưỡng niềm say m&ecirc; tiếng Anh với biết bao thế hệ học tr&ograve;, đ&atilde; gi&uacute;p nhiều em học sinh từ chỗ chưa y&ecirc;u th&iacute;ch đ&atilde; trở n&ecirc;n gắn b&oacute;, y&ecirc;u th&iacute;ch hơn với bộ m&ocirc;n tiếng Anh.</p>', 'tranganh050587@gmail.com', 1, 0),
(20, 'Phạm Minh', 'Nhật', 'pham-minh-nhat-min70.jpg', '0868318899', '1999192922', '1991-10-12', '<p>Thầy Phạm Minh Nhật (được học tr&ograve; gọi với c&aacute;i t&ecirc;n th&acirc;n mật Anh Tũn dạy Văn) l&agrave; một trong những gi&aacute;o vi&ecirc;n nổi tiếng nhất hiện nay. Thầy Nhật l&agrave; gi&aacute;o vi&ecirc;n Ngữ Văn c&oacute; nhiều người theo d&otilde;i nhất tr&ecirc;n mạng x&atilde; hội. Fanpage của thầy hiện c&oacute; hơn 910. 000 người theo d&otilde;i, Facebook c&aacute; nh&acirc;n cũng c&oacute; hơn 450. 000 người theo d&otilde;i. Đặc biệt, thầy Nhật l&agrave; gi&aacute;o vi&ecirc;n dạy Văn đầu ti&ecirc;n nhận N&uacute;t bạc Youtube. Kh&ocirc;ng chỉ l&agrave; thầy gi&aacute;o &quot;triệu view&quot;, thầy Nhật c&ograve;n l&agrave; Gi&aacute;m đốc Trung t&acirc;m luyện thi h&agrave;ng chục ngh&igrave;n học vi&ecirc;n. Thầy lu&ocirc;n dạy chi tiết từng t&aacute;c phẩm văn học, từng chuy&ecirc;n đề v&agrave; c&oacute; nhiều b&iacute; k&iacute;p gi&uacute;p học sinh đột ph&aacute; điểm m&ocirc;n Ngữ Văn. Thầy cũng thường xuy&ecirc;n cập nhật bộ đề mới nhất theo cấu tr&uacute;c đề minh họa của Bộ GD&amp; ĐT. Học sinh theo học thầy c&oacute; tỷ lệ đạt 8, 9 điểm cao nhất cả nước.</p>\r\n\r\n<p>Thầy Nhật c&oacute; b&iacute; quyết &quot;dạy Văn kh&ocirc;ng ru ngủ&quot;, c&oacute; thể khơi dậy năng khiếu văn chương ở học tr&ograve;. Giọng n&oacute;i nội lực, nhấn nh&aacute; đầy cảm x&uacute;c của thầy cũng l&agrave; một yếu tố khiến học sinh kh&ocirc;ng thể kh&ocirc;ng nghe. Thầy Nhật cho rằng việc gi&aacute;o vi&ecirc;n dạy Văn n&oacute;i chậm, đều đều, kh&ocirc;ng nhấn nh&aacute; khiến học sinh c&oacute; giảm gi&aacute;c bị ru ngủ, kh&ocirc;ng h&agrave;o hứng, kh&oacute; tiếp thu.</p>\r\n\r\n<p>Năm 2018, đoạn video thầy Nhật vừa dạy Văn vừa dạy c&aacute;ch thả th&iacute;nh được chia sẻ rầm rộ tr&ecirc;n khắp c&aacute;c trang mạng x&atilde; hội. Từ đ&oacute;, thầy thường xuy&ecirc;n chia sẻ c&aacute;c b&agrave;i giảng của m&igrave;nh l&ecirc;n Youtube v&agrave; Facebook c&aacute; nh&acirc;n để học sinh c&oacute; thể theo d&otilde;i v&agrave; học trực tuyến. Mỗi b&agrave;i giảng đều được thầy Nhật đầu tư c&ocirc;ng phu v&agrave; t&acirc;m huyết với c&aacute;ch tr&igrave;nh b&agrave;y ấn tượng, dễ xem, dễ nhớ. Thầy c&oacute; nhiều b&agrave;i giảng độc đ&aacute;o được học sinh v&iacute; &quot;như l&ecirc;n đồng&quot;.</p>\r\n\r\n<p>B&ecirc;n cạnh những b&agrave;i giảng th&uacute; vị, thầy Nhật c&ograve;n được học sinh y&ecirc;u mến v&igrave; t&iacute;nh c&aacute;ch gần gũi, th&acirc;n thiết với học tr&ograve;. Điều khiến thầy Nhật tự h&agrave;o nhất ch&iacute;nh l&agrave; học sinh của thầy lu&ocirc;n c&oacute; cảm gi&aacute;c lớp học l&agrave; nh&agrave;. Ng&agrave;y n&agrave;o đến lớp cũng vui vẻ v&agrave; thoải m&aacute;i như ở nh&agrave;. Học tr&ograve; coi thầy l&agrave; người anh th&acirc;n thiết.</p>\r\n\r\n<p>Th&aacute;ng 4/2020, thầy Nhật g&acirc;y tranh c&atilde;i khi ph&acirc;n t&iacute;ch b&agrave;i thơ &quot;S&oacute;ng&quot; của thi sĩ Xu&acirc;n Quỳnh. Nhiều người cho rằng thầy Nhật kh&ocirc;ng tập trung v&agrave;o b&agrave;i giảng, sai ho&agrave;n to&agrave;n &yacute; thơ, truyền b&aacute; tư tưởng sai lệch. B&agrave;i giảng của thầy Nhật vấp phải sự phản ứng dữ dội của nhiều gi&aacute;o vi&ecirc;n dạy Văn, những người y&ecirc;u th&iacute;ch văn học v&agrave; cộng đồng mạng. Nhiều người cho rằng &yacute; nghĩa t&aacute;c phẩm bị b&oacute;p m&eacute;o th&agrave;nh &quot;b&iacute; k&iacute;p t&aacute;n g&aacute;i&quot;, c&aacute;c th&ocirc;ng điệp truyền tải cũng kh&ocirc;ng ph&ugrave; hợp với đạo đức, lối sống của người Việt.</p>', 'thaynhat.dayvan@gmail.com', 0, 0),
(21, 'Đàm Thanh', 'Tùng', '85198400_2877088622382093_2727233851330920448_n5.jpg', '0349875146', '1999192922', '1993-06-14', '<p>Theo th&acirc;̀y Tùng, đ&ecirc;̀ thi THPT Qu&ocirc;́c gia m&ocirc;n Địa lý sẽ có t&acirc;́t cả 15 c&acirc;u hỏi v&ecirc;̀ ph&acirc;̀n kỹ năng địa lý, có th&ecirc;̉ là sử dụng atlat, sử dụng bi&ecirc;̉u đ&ocirc;̀ hoặc tính toán, xử lý bảng s&ocirc;́ li&ecirc;̣u; 25 c&acirc;u còn lại thu&ocirc;̣c v&ecirc;̀ lý thuy&ecirc;́t.</p>\r\n\r\n<p>Đặc bi&ecirc;̣t, các sĩ tử cũng c&acirc;̀n lưu ý những c&acirc;u hỏi v&ecirc;̀ dạng nh&acirc;̣n định, phủ định, ví dụ, &ldquo;đi&ecirc;̀u nào sau đ&acirc;y đúng?&rdquo;, &ldquo;đi&ecirc;̀u nào sau đ&acirc;y kh&ocirc;ng đúng?&rdquo;. Hoặc các c&acirc;u hỏi v&ecirc;̀ nguy&ecirc;n nh&acirc;n, ý nghĩa, k&ecirc;́t quả thường rơi vào ph&acirc;̀n ki&ecirc;́n thức vùng kinh t&ecirc;́ và ngành kinh t&ecirc;́. Đ&acirc;y là những c&acirc;u hỏi ở mức đ&ocirc;̣ v&acirc;̣n dụng hoặc v&acirc;̣n dụng cao, n&ecirc;n đòi hỏi thí sinh phải có các kỹ năng so sánh, t&ocirc;̉ng hợp ki&ecirc;́n thức.</p>\r\n\r\n<p>Th&acirc;̀y T&ugrave;ng nh&acirc;́n mạnh: &ldquo;Bởi v&acirc;̣y, quay trở lại quá trình học, m&ocirc;̃i học sinh phải lu&ocirc;n lu&ocirc;n có sự so sánh, đ&ocirc;́i chi&ecirc;́u. Ví dụ, hạn ch&ecirc;́ trong phát tri&ecirc;̉n chăn nu&ocirc;i ở trung du, mi&ecirc;̀n núi Bắc B&ocirc;̣ là gì; Hạn ch&ecirc;́ trong phát tri&ecirc;̉n chăn nu&ocirc;i ở đ&ocirc;̀ng bằng s&ocirc;ng H&ocirc;̀ng là gì, phải lu&ocirc;n có sự so sánh giữa các vùng với nhau, đ&ecirc;̉ rút ra những v&acirc;́n đ&ecirc;̀, từ đó sẽ kh&ocirc;ng bị lúng túng khi đứng trước m&ocirc;̣t c&acirc;u hỏi.</p>\r\n\r\n<p>Có m&ocirc;̣t v&acirc;́n đ&ecirc;̀ khi làm c&acirc;u hỏi trắc nghi&ecirc;̣m Địa lý, đó là các thí sinh thu&ocirc;̣c ki&ecirc;́n thức nhưng vì kh&ocirc;ng hi&ecirc;̉u bản ch&acirc;́t hoặc kh&ocirc;ng có sự so sánh n&ecirc;n khi gặp c&acirc;u hỏi trắc nghi&ecirc;̣m, có sự bi&ecirc;́n đ&ocirc;̉i c&acirc;u từ thì bắt đ&acirc;̀u cảm th&acirc;́y hoang mang&rdquo;.</p>', 'atschool.vn@gmail.com', 0, 0),
(22, 'Lê Phạm', 'Thành', 'croppedImg_98528308580.jpeg', '0976053496', '1999192922', '1984-11-18', '<h2>Tiểu sử Gi&aacute;o vi&ecirc;n L&ecirc; Phạm Th&agrave;nh</h2>\r\n\r\n<p><strong>Gi&aacute;o vi&ecirc;n L&ecirc; Phạm Th&agrave;nh l&agrave; ai?</strong><br />\r\nL&ecirc; Phạm Th&agrave;nh - gi&aacute;o vi&ecirc;n nổi tiếng, người truyền ngọn lửa đam m&ecirc; m&ocirc;n Ho&aacute; đến nhiều thế hệ học tr&ograve;. Thầy được học sinh d&agrave;nh tặng danh hiệu &quot;Ph&ugrave; thuỷ trẻ&quot; của những c&ocirc;ng thức ho&aacute; học bởi những c&ocirc;ng thức, những chương l&yacute; thuyết, những b&agrave;i tập Ho&aacute; học kh&ocirc; khan, kh&oacute; nhớ, kh&oacute; học qua sự truyền đạt của thầy trở n&ecirc;n dễ nhớ, dễ hiểu. Đặc biệt, thầy Th&agrave;nh c&oacute; khả năng &quot;ph&ugrave; ph&eacute;p&quot; khiến học sinh gh&eacute;t ho&aacute; th&agrave;nh y&ecirc;u, hứng t&uacute; với m&ocirc;n học. Nhiều thế hệ học sinh của thầy Th&agrave;nh khẳng định &quot; Ho&aacute; học l&agrave; một niềm vui. C&ograve;n vui hơn khi học ho&aacute; c&ugrave;ng thầy Th&agrave;nh&quot;. Phương ch&acirc;m dạy học của thầy Th&agrave;nh l&agrave; &quot;Chắc l&yacute; thuyết - Vững dạng to&aacute;n - Phản xạ nhanh - Linh hoạt xử l&yacute; t&igrave;nh huống&quot;.Thầy L&ecirc; Phạm Th&agrave;nh tốt nghiệp cử nh&acirc;n lớp Chất lượng cao khoa Ho&aacute; trường Đại học Sư phạm H&agrave; Nội (ni&ecirc;n kho&aacute; 2002-2006), l&agrave; Thạc sĩ chuy&ecirc;n ng&agrave;nh Ho&aacute; học l&yacute; thuyết v&agrave; Ho&aacute; l&yacute;. Thầy đ&atilde; c&oacute; hơn 15 năm kinh nghiệm dạy học, l&agrave; một trong 7 gi&aacute;o vi&ecirc;n luy&ecirc;n thi Ho&aacute; nổi tiếng ở H&agrave; N&ocirc;i. Nhiều học tr&ograve; của thầy Th&agrave;nh đạt kết quả cao, đỗ thủ khoa trong c&aacute;c kỳ thi Đại học, Cao đẳng. Đặc biệt, năm 2015, thầy Th&agrave;nh c&oacute; nhiều học sinh đạt điểm 10 Ho&aacute; nhất trong kỳ thi THPT Quốc gia.</p>\r\n\r\n<p>Kh&ocirc;ng chỉ giảng dạy trực tiếp, thầy Th&agrave;nh c&ograve;n l&agrave; gi&aacute;o vi&ecirc;n dạy trực tuyến tr&ecirc;n c&aacute;c diễn đ&agrave;n học tập Online. Thầy l&agrave; một trong những gi&aacute;o vi&ecirc;n dạy Online sớm nhất Việt Nam. Những b&agrave;i giảng th&uacute; vị, hấp dẫn v&agrave; vui nhộn của thầy Th&agrave;nh được học sinh cả nước theo d&otilde;i.</p>', 'lpthanh@gmail.com', 0, 0),
(23, 'Phạm Quốc', 'Toản', '24129812_10208279537344347_4650075259997956506_n86.jpg', '0964114740', '1999192922', '1983-05-13', '<ul>\r\n	<li><img src=\"https://tuyensinh247.com/themes/landingpage/img/icon-star.png\" />Tr&igrave;nh độ Thạc sỹ.</li>\r\n	<li><img src=\"https://tuyensinh247.com/themes/landingpage/img/icon-star.png\" />Nơi c&ocirc;ng t&aacute;c: Trường THPT Huỳnh Th&uacute;c Kh&aacute;ng; THPT H&agrave; Th&agrave;nh.</li>\r\n	<li><img src=\"https://tuyensinh247.com/themes/landingpage/img/icon-star.png\" />Nằm trong TOP c&aacute;c gi&aacute;o vi&ecirc;n dạy Vật L&iacute; tốt nhất to&agrave;n quốc; cố vấn chuy&ecirc;n m&ocirc;n cho c&aacute;c trang b&aacute;o nổi tiếng v&agrave; c&aacute;c chương tr&igrave;nh truyền h&igrave;nh.</li>\r\n	<li><img src=\"https://tuyensinh247.com/themes/landingpage/img/icon-star.png\" />L&agrave; gi&aacute;o vi&ecirc;n luyện thi v&agrave;o 10 v&agrave; luyện thi tốt nghiệp THPT &amp; ĐH rất nổi tiếng tại H&agrave; Nội.</li>\r\n</ul>', 'pqtoan@gmail.com', 0, 0),
(24, 'Lê Thị', 'Thu', '600-imggv16-55.png', '0964114722', '1999192922', '1985-02-22', '<ul>\r\n	<li><img src=\"https://tuyensinh247.com/themes/landingpage/img/icon-star.png\" />Tiến sĩ PPDH Lịch sử</li>\r\n	<li><img src=\"https://tuyensinh247.com/themes/landingpage/img/icon-star.png\" />Được nhận bằng khen của Bộ trưởng Bộ GD&amp;ĐT (2013).</li>\r\n	<li><img src=\"https://tuyensinh247.com/themes/landingpage/img/icon-star.png\" />20 năm kinh nghiệm luyện thi TN THPT &amp; ĐH, gi&uacute;p nhiều học sinh đạt điểm 9, 10.</li>\r\n</ul>', 'ltthu225@gmail.com', 1, 0),
(32, 'Cao Văn', 'Lệ', '', '0964114749', '1999999999', '1992-02-25', 'Chuyên ngành: Toán', 'caole25112002@gmail.com', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinhs`
--

CREATE TABLE `hocsinhs` (
  `id_hocsinh` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `ngaysinh` date NOT NULL,
  `idlop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hocsinhs`
--

INSERT INTO `hocsinhs` (`id_hocsinh`, `email`, `avatar`, `ngaysinh`, `idlop`) VALUES
(8, 'ntcly.20it1@vku.udn.vn', NULL, '2002-01-17', 12),
(9, 'dtdat.20it1@vku.udn.vn', '', '2002-02-25', 12),
(10, 'dtdat.20it1@vku.udn.vn', '', '2004-02-25', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logins`
--

CREATE TABLE `logins` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `logins`
--

INSERT INTO `logins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Dương Đạt', 'dtdat.20it1@vku.udn.vn', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'Lệ Cao', 'caole25112002@gmail.com', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophocs`
--

CREATE TABLE `lophocs` (
  `idlop` int(11) NOT NULL,
  `tenlop` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lophocs`
--

INSERT INTO `lophocs` (`idlop`, `tenlop`) VALUES
(10, '10'),
(11, '11'),
(12, '12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hodem` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `phanquyen` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id_user`, `email`, `password`, `hodem`, `ten`, `phanquyen`, `token`) VALUES
(6, 'ntcly.20it1@vku.udn.vn', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Nguyễn Thị Cẩm', 'Ly', 1, 'HUUEp00aTmsdXs022Om4hu6HLZhjJkxaSbWUO3z2'),
(14, 'ltthu225@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Lê Thị', 'Thu', 0, NULL),
(15, 'pqtoan@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Phạm Quốc ', 'Toản', 0, NULL),
(16, 'lpthanh@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Lê Phạm ', 'Thành', 0, NULL),
(17, 'atschool.vn@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Đàm Thanh  ', 'Tùng', 0, NULL),
(18, 'thaynhat.dayvan@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Phạm Minh', 'Nhật', 0, NULL),
(19, 'tranganh050587@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Trang', 'Anh', 0, NULL),
(20, 'vmphuong@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Vũ Mai', 'Phương', 0, NULL),
(21, 'truongcongkien@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Trương Công', 'Kiên', 0, NULL),
(22, 'phankhacnghe@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Phan Khắc ', 'Nghệ', 0, NULL),
(23, 'gv.thangpd@hocmai.edu.vn', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Phạm', 'Thắng', 0, NULL),
(24, 'minhthuan.hnue@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Phạm Minh', 'Thuận', 0, NULL),
(26, 'chuvanbien.vn@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Chu Văn', 'Biên', 0, NULL),
(27, 'vutuananh@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Vũ Tuấn', 'Anh', 0, NULL),
(28, 'tiendatnguyen2510@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Nguyễn Tiến', 'Đạt', 0, NULL),
(29, 'hothucthuan@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Hồ Thức ', 'Thuận', 0, NULL),
(30, 'chidt264@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Nguyễn Quốc', 'Chí', 0, NULL),
(45, 'dtdat.20it1@vku.udn.vn', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Dương Tuấn', 'Đạt', 1, 'TpCX5pfq0CFG0iLpykKKYbYqaNqcYXskqqHzEMRL'),
(47, 'caole25112002@gmail.com', '7878aaf810ac3a7c5c77e21ed7c4dae2', 'Cao Văn', 'Lệ', 0, 'TpCX5pfq0CFG0iLpykKKYbYqaNqcYXskqqHzEMRL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noibats`
--

CREATE TABLE `noibats` (
  `id` int(11) NOT NULL,
  `tennoibat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `noibats`
--

INSERT INTO `noibats` (`id`, `tennoibat`) VALUES
(1, 'Khóa học mới nhất'),
(2, 'Khóa học Thi THPT Quốc Gia'),
(3, 'Khóa học bình thường');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('caole25112002@gmail.com', '$2y$10$iB3bTvYgqm9T4ze/YkCNjutzu7Twyyp7BxS9gaw2kgchbQQrvAZiy', '2021-10-01 00:10:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphams`
--

CREATE TABLE `sanphams` (
  `sanpham_id` int(10) UNSIGNED NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `discount` float NOT NULL,
  `motasanpham` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_giaovien` int(10) UNSIGNED NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `slug_sanpham` varchar(255) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `idnoibat` int(11) NOT NULL,
  `kichhoat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanphams`
--

INSERT INTO `sanphams` (`sanpham_id`, `tensanpham`, `price`, `discount`, `motasanpham`, `id_danhmuc`, `id_giaovien`, `hinhanh`, `slug_sanpham`, `luotxem`, `idnoibat`, `kichhoat`) VALUES
(7, 'Anh Văn 11 (Chương trình mới)', 0, 0, '<p>Bạn đang l&agrave; học sinh THPT th&igrave; h&atilde;y truy cập ngay website học tập số 1 n&agrave;y nha. Trong đ&acirc;y c&oacute; đầy đủ c&aacute;c m&ocirc;n học cũng như kiến thức giảng dạy, &ocirc;n thi d&agrave;nh cho c&aacute;c bạn ở chuy&ecirc;n khoa kh&aacute;c nhau từ tự nhi&ecirc;n cho đến x&atilde; hội. Chủ yếu kiến thức c&oacute; trong web l&agrave; ở 3 khối 10, 11 v&agrave; 12 về kiến thức của c&aacute;c m&ocirc;n học l&agrave; to&aacute;n, l&yacute;, h&oacute;a, sinh, anh.<br />\r\nTrang web n&agrave;y sẽ cung cấp lời giải đặc biệt d&agrave;nh cho những b&agrave;i giảng kh&oacute; hiểu ở tr&ecirc;n lớp. Tại đ&acirc;y, bạn cũng được cung cấp những kiến thức v&ocirc; c&ugrave;ng bổ &iacute;ch v&agrave; cần thiết d&agrave;nh cho việc học của m&igrave;nh đạt kết quả cao.</p>', 20, 18, 'tienganh-1151.jpg', 'anh-van-11-chuong-trinh-moi', 224, 1, 0),
(9, 'Anh Văn 10 (Chương trình mới)', 200000, 10, '<p>S&aacute;ch Tiếng Anh lớp 10 đổi mới theo Đề &aacute;n ngoại ngữ quốc gia 2020 được triển khai th&iacute; điểm lần đầu ti&ecirc;n tại B&igrave;nh Phước từ năm học 2013-2014, với 1 lớp chuy&ecirc;n Anh tại Trường THPT chuy&ecirc;n Quang Trung. Đến nay, to&agrave;n tỉnh mới ho&agrave;n th&agrave;nh được 6 lớp tại c&aacute;c trường THPT: chuy&ecirc;n Quang Trung, chuy&ecirc;n B&igrave;nh Long, Đồng Xo&agrave;i, H&ugrave;ng Vương, Phước B&igrave;nh v&agrave; Lộc Ninh.</p>\r\n\r\n<p>Thầy Ng&ocirc; Văn T&uacute;, chuy&ecirc;n vi&ecirc;n&nbsp;ph&ograve;ng trung học&nbsp;(Sở GD-ĐT) cho biết: Chương tr&igrave;nh tiếng Anh mới c&oacute; những ưu điểm vượt trội cả về nội dung, h&igrave;nh thức v&agrave; phương ph&aacute;p giảng dạy. Chương tr&igrave;nh hướng trọng t&acirc;m n&acirc;ng cao kỹ năng cho học sinh như nghe, n&oacute;i, đọc, viết v&agrave; kỹ năng giao tiếp, l&agrave;m việc nh&oacute;m. Do đ&oacute;, nh&agrave; trường v&agrave; gi&aacute;o vi&ecirc;n cũng được trang bị đầy đủ từ cơ sở vật chất đến kiến thức, phương ph&aacute;p hiệu quả để đ&aacute;p ứng giảng dạy cả 4 kỹ năng cho học sinh. Song muốn đạt hiệu quả tốt nhất, học sinh n&ecirc;n bắt đầu học chương tr&igrave;nh tiếng Anh đổi mới ngay từ khi bước v&agrave;o bậc tiểu học.</p>', 11, 18, 'Cd-tieng-anh-10-thi-diem-minh-pham34.jpg', 'anh-van-10-chuong-trinh-moi', 208, 3, 0),
(10, 'Anh Văn 12 (Chương trình mới)', 0, 0, '<p><strong>Ph&aacute;t triển năng lực ngoại ngữ cho học sinh</strong></p>\r\n\r\n<p>Ban soạn thảo chương tr&igrave;nh m&ocirc;n Ngoại ngữ vừa c&ocirc;ng bố, giới thiệu những n&eacute;t chung nhất về m&ocirc;n tiếng Anh trong chương tr&igrave;nh gi&aacute;o dục phổ th&ocirc;ng mới. Theo đ&oacute;, Tiếng Anh l&agrave; m&ocirc;n học trong chương tr&igrave;nh gi&aacute;o dục phổ th&ocirc;ng bắt đầu từ lớp 3 đến lớp 12 (lớp 1, 2 l&agrave; chương tr&igrave;nh l&agrave;m quen Tiếng Anh). Nội dung cốt l&otilde;i của m&ocirc;n học gi&uacute;p học sinh h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển năng lực giao tiếp th&ocirc;ng qua r&egrave;n luyện c&aacute;c kỹ năng nghe, n&oacute;i, đọc, viết v&agrave; c&aacute;c kiến thức ng&ocirc;n ngữ (ngữ &acirc;m, từ vựng, ngữ ph&aacute;p).</p>\r\n\r\n<p>C&aacute;c kỹ năng giao tiếp v&agrave; kiến thức ng&ocirc;n ngữ được x&acirc;y dựng tr&ecirc;n cơ sở c&aacute;c đơn vị năng lực giao tiếp cụ thể, trong c&aacute;c chủ đề v&agrave; chủ điểm ph&ugrave; hợp với học sinh phổ th&ocirc;ng nhằm gi&uacute;p c&aacute;c em khi kết th&uacute;c cấp tiểu học đạt được năng lực giao tiếp bậc 1; kết th&uacute;c THCS đạt được bậc 2; kết th&uacute;c THPT đạt bậc 3 theo Khung năng lực ngoại ngữ 6 bậc d&ugrave;ng cho Việt Nam.</p>\r\n\r\n<p>Nội dung dạy học trong chương tr&igrave;nh gi&aacute;o dục phổ th&ocirc;ng m&ocirc;n Tiếng Anh được thiết kế theo kết cấu đa th&agrave;nh phần, gồm: Hệ thống c&aacute;c chủ đề (kh&aacute;i qu&aacute;t), c&aacute;c chủ điểm (cụ thể) mang t&iacute;nh gợi &yacute;; c&aacute;c năng lực giao tiếp ph&ugrave; hợp với chuẩn năng lực cần đạt; danh mục kiến thức ng&ocirc;n ngữ (ngữ &acirc;m, từ vựng, ngữ ph&aacute;p) gợi &yacute; ph&ugrave; hợp với việc ph&aacute;t triển năng lực giao tiếp ở cấp độ đ&atilde; được quy định trong chuẩn đầu ra. Nội dung văn h&oacute;a được dạy học lồng gh&eacute;p, t&iacute;ch hợp trong hệ thống c&aacute;c chủ đề, chủ điểm. C&aacute;c y&ecirc;u cầu cần đạt của mỗi lớp tập trung v&agrave;o năng lực giao tiếp ở 4 kỹ năng: Nghe, n&oacute;i, đọc, viết.</p>\r\n\r\n<p>Theo GS.Nguyễn Lộc, Tổng chủ bi&ecirc;n m&ocirc;n Tiếng Anh chương tr&igrave;nh mới cho biết: &ldquo;M&ocirc;n Ngoại ngữ sẽ kế thừa rất nhiều c&aacute;c điểm được của Đề &aacute;n Ngoại ngữ 2020, về số tiết, 6 ti&ecirc;u chuẩn của ch&acirc;u &Acirc;u&hellip; Kế thừa sử dụng nhiều l&agrave; chương tr&igrave;nh th&iacute; điểm, đ&aacute;nh gi&aacute; về s&aacute;ch gi&aacute;o khoa, hai đ&aacute;nh gi&aacute; quan trọng n&agrave;y được đưa v&agrave;o để x&acirc;y dựng chương tr&igrave;nh mới. Chương tr&igrave;nh mới vẫn giữ số tiết/tuần theo quy định của Đề &aacute;n cũ, cụ thể ở cấp Tiểu học, m&ocirc;n Ti&ecirc;́ng Anh sẽ c&oacute; 140 ti&ecirc;́t (b&igrave;nh qu&acirc;n 4 tiết/tuần). Với cấp THCS v&agrave; THPT sẽ học 105 ti&ecirc;́t (3 tiết/tuần)&rdquo;.</p>', 30, 18, 'hqdefault75.jpg', 'anh-van-12-chuong-trinh-moi', 453, 1, 0),
(11, 'Khóa luyện đề môn toán VD - VDC thầy Thuận', 1300000, 44, '<p>Thầy Gi&aacute;o : HỒ THỨC THUẬN CHUY&Ecirc;N GIA DẠY ONLINE LIVE STREAM 8+ TOP 1 Sứ giả truyền cảm hứng y&ecirc;u th&iacute;ch m&ocirc;n To&aacute;n - Facebook Thầy gi&aacute;o : <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbGx2aXZKVkpKZlZ0bXQ3YjJpcHUydl9QR0JiZ3xBQ3Jtc0trZmEzSnQxMG55TXRxbTN2Z1J2MDFtMWsyU1lkUzBRTGtPS1dxMXJnai1wNlNWTldxUDVtUkNGMUV2cXpiVTB0MGl1cWttNUF5OVUtbDRpRjBqVEktak5yYlVWYk9kZFl3dWwybmtpNUt4Q3d5OV9SSQ&amp;q=https%3A%2F%2Fwww.facebook.com%2FThaygiaothuan.9\" rel=\"nofollow\" target=\"_blank\">https://www.facebook.com/Thaygiaothuan.9</a> - Fanpage : <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbHlSNk9hTXNnOHFheExBMFJDTzNrMEpvbFpjUXxBQ3Jtc0trZC05RzhvTVU5aVlYejAzQXl0cWlob0VGekhwb2NKalNwSy1GY1UyY3k1ZnBhdU9ycmtrUDhWNW9TX2VxTldUeGV4MWM2Y3VoSUZTNzZNNTdSaHBEaFdQb1ZrMmdUZmJZS3R3TkxxeFByMzEwdFUtaw&amp;q=https%3A%2F%2Fwww.facebook.com%2Flophocthaythuan%2F\" rel=\"nofollow\" target=\"_blank\">https://www.facebook.com/lophocthayth...</a> - Group : <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa1NWVmdLX0YxbkxNSmluamRzeURESmZtdnFkQXxBQ3Jtc0trWVMzNDg5WHZ6UU5uQlBKVXFWNWl0LVF4MzlGZjBoWjdYTFB1MGIxNjFPV19aN1gzUURzY2FpRFFEcUhPZ0dxVXZqa3hqZWhzR280UkJiUFRuTVk0ZFhJX1VUbUdGMWxVS3NxQ0EyVWtXSndqcllDQQ&amp;q=https%3A%2F%2Fwww.facebook.com%2Fgroups%2F192967558039183%2F\" rel=\"nofollow\" target=\"_blank\">https://www.facebook.com/groups/19296...</a> Đăng k&iacute; học online hoặc off tại H&agrave; Nội th&igrave; inbox hoặc li&ecirc;n hệ sđt Thầy : 0973.74.93.73 - Em ấn &quot;Đăng k&yacute;&quot; v&agrave; đặt chu&ocirc;ng th&ocirc;ng b&aacute;o để nhận th&ocirc;ng b&aacute;o b&agrave;i giảng si&ecirc;u hay v&agrave; bổ &iacute;ch tiếp theo tại đ&acirc;y nh&eacute;! <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbk5IaWR3MDBQelV0azdmMHUybmZqNHJfOVVsQXxBQ3Jtc0trUGhucVltNUZxYVZHVzdGVjZ5X094SzNtRHozSWgzUmZPX3VMTlBoMlVHUUZTMkJpek5IVEY5STdJRkY4OUc3cDdIZjcxN2VfcFp3UVVSbkttTWhjaTJYbFdjX2lLUVdsZWJLb2U4NVFhSFVHbE90Yw&amp;q=https%3A%2F%2Fgoo.gl%2FFoWuSN\" rel=\"nofollow\" target=\"_blank\">https://goo.gl/FoWuSN</a> <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/nh%E1%BB%9B\">#Nhớ</a> đăng nhập gmail rồi mới đăng k&iacute; th&agrave;nh c&ocirc;ng được Ch&uacute;c c&aacute;c em học tập tốt nh&eacute; !</p>', 26, 9, 'thaythuan86.PNG', 'khoa-luyen-de-mon-toan-vd-vdc-thay-thuan', 748, 2, 0),
(12, 'Luyện Thi Chuyên Đề - Toán 2K4 - HTT', 1300000, 30, '<p>Trong kh&oacute;a học n&agrave;y, học sinh sẽ&nbsp;được trang bị&nbsp;đầy&nbsp;đủ c&aacute;c kiến thức về chương tr&igrave;nh&nbsp;Đại số v&agrave; H&igrave;nh học lớp 12 theo chuẩn cấu tr&uacute;c&nbsp;đề thi của Bộ GD&amp;ĐT.</p>\r\n\r\n<p>Với 14 chuy&ecirc;n&nbsp;đề kh&aacute;c nhau&nbsp;được bi&ecirc;n soạn theo tr&igrave;nh tự chuẩn của SGK. Với Đại số sẽ bao gồm những b&agrave;i giảng về h&agrave;m số, t&iacute;ch ph&acirc;n,&nbsp;đạo h&agrave;m v&agrave; số phức. B&ecirc;n cạnh&nbsp;đ&oacute;&nbsp;ở phần h&igrave;nh học thầy Hồ&nbsp;Đức Thuận sẽ chia sẻ những c&ocirc;ng thức h&igrave;nh học si&ecirc;u cấp gi&uacute;p c&aacute;c em giải quyết nhanh ch&oacute;ng những c&acirc;u hỏi phức tạp.</p>\r\n\r\n<p>Ngo&agrave;i ra kh&ocirc;ng chỉ học th&ecirc;m những kiến thức mới m&agrave; sẽ c&oacute; những chuy&ecirc;n&nbsp;đề ri&ecirc;ng&nbsp;&ocirc;n lại cho học sinh những kiến thức to&aacute;n 11 m&agrave;&nbsp;đ&ocirc;i khi&nbsp;đ&atilde; qu&ecirc;n như x&aacute;c suất, tổ hợp...</p>\r\n\r\n<p>Sau mỗi buổi học sẽ l&agrave; phần b&agrave;i tập bao gồm những c&acirc;u hỏi trắc nghiệm&nbsp;&aacute;p dụng những kiến thức m&agrave; c&aacute;c em&nbsp;đ&atilde; tiếp thu trong suốt học. Qua&nbsp;đ&oacute; học sinh sẽ biết&nbsp;được những lỗi sai c&ograve;n tồn tại v&agrave; nắm chắc&nbsp;được những dạng b&agrave;i tập hay xuất hiện trong b&agrave;i thi THPT quốc gia.</p>\r\n\r\n<h2>LỢI &Iacute;CH KHO&Aacute; HỌC</h2>\r\n\r\n<p>Học sinh&nbsp;được g&igrave; khi tham gia&nbsp;Kh&oacute;a LIVE C - Luyện Thi Chuy&ecirc;n Đề - To&aacute;n 2K4&nbsp; của thầy Hồ Đức Thuận:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Nắm vững kiến thức to&aacute;n&nbsp;Đại số v&agrave; H&igrave;nh học 12.</li>\r\n	<li>&Ocirc;n tập lại những kiến thức lớp 11&nbsp;đ&atilde; học.</li>\r\n	<li>Bắt kịp&nbsp;c&aacute;ch ra&nbsp;đề của Bộ GD&amp;ĐT trong k&igrave; thi THPT quốc gia.</li>\r\n	<li>Th&agrave;nh thạo kỹ năm bấm m&aacute;y t&iacute;nh&nbsp;để giải quyết c&aacute;c c&acirc;u hỏi h&oacute;c b&uacute;a.</li>\r\n	<li>Bổ sung những c&ocirc;ng thức giải nhanh gi&uacute;p r&uacute;t ngắn thời gian l&agrave;m b&agrave;i.</li>\r\n</ul>', 26, 9, 'T2K3C0178.jpg', 'luyen-thi-chuyen-de-toan-2k4-htt', 131, 1, 0),
(13, 'Khóa luyện thi Clip 2021-2022', 500000, 0, '<p>Trong Tiếng Anh c&oacute; 4 phạm tr&ugrave; kh&oacute;, đ&oacute; l&agrave;: Collocations- Idioms- Phrasal verbs- Prepositions. 4 phạm tr&ugrave; n&agrave;y lu&ocirc;n khiến c&aacute;c bạn học sinh cảm thấy l&uacute;ng t&uacute;ng l&agrave; bởi v&igrave; n&oacute; qu&aacute; rộng v&agrave; rất kh&oacute; để nhớ. Hơn thế nữa, 4 phạm tr&ugrave; n&agrave;y lu&ocirc;n xuất hiện trong c&aacute;c b&agrave;i thi, m&agrave; lại k thể học tủ hay học nhồi học nh&eacute;t được. R&uacute;t ra từ thực tế c&aacute;c năm trước, c&aacute;c a/chị fai chật vật học 4 phạm tr&ugrave; kh&oacute; nhằn n&agrave;y. V&igrave; thế m&agrave; năm nay, lần đầu ti&ecirc;n C&ocirc; mở kho&aacute; học n&agrave;y.&nbsp;<br />\r\n✅ Kho&aacute; học n&agrave;y sẽ học li&ecirc;n tục trong 9 th&aacute;ng (bắt đầu từ 13/9/2021-&gt; 22/5/2022), học theo kiểu mưa dầm thấm l&acirc;u, mỗi ng&agrave;y học từ 15-20 cụm (sẽ c&oacute; phần l&yacute; thuyết+ b&agrave;i tập &aacute;p dụng+ giải đ&aacute;p &aacute;n chi tiết) v&agrave; ng&agrave;y n&agrave;o cũng học. Phần l&yacute; thuyết sẽ c&oacute; h&igrave;nh ảnh, &acirc;m thanh minh hoạ để b&agrave;i học sinh động v&agrave; dễ nhớ hơn. Mỗi tuần học về 1 chủ đề v&agrave; c&aacute;c nội dung học c&oacute; s&acirc;u chuỗi v&agrave; li&ecirc;n kết với nhau. Cụ thể:&nbsp;<br />\r\nThứ 2: học về kết hợp từ&nbsp;<br />\r\nThứ 3: học về th&agrave;nh ngữ&nbsp;<br />\r\nThứ 4: học về cụm động từ<br />\r\nThứ 5: học về giới từ<br />\r\nThứ 6: học về cụm từ cố định&nbsp;<br />\r\nThứ 7: thi thử online&nbsp;<br />\r\n6h s&aacute;ng chủ nhật: Live chữa đề thi thử<br />\r\n❇️ Kho&aacute; học c&oacute; mục ti&ecirc;u cung cấp vốn kiến thức đa dạng, phong ph&uacute; về 4 phạm tr&ugrave; n&agrave;y.&nbsp;<br />\r\nKho&aacute; học n&agrave;y học li&ecirc;n tục trong 9 th&aacute;ng c&oacute; gi&aacute; l&agrave; 800k. Những bạn đăng k&iacute; trước 15/9 sẽ được hưởng ưu đ&atilde;i giảm 50% c&ograve;n 400k. (Học sinh đ&atilde; đăng k&iacute; combo th&igrave; sẽ được tặng kho&aacute; n&agrave;y nha)<br />\r\n✍️ Một số lưu &yacute;:&nbsp;<br />\r\n➖ kho&aacute; học n&agrave;y k c&oacute; s&aacute;ch (học bằng t&agrave;i liệu pdf)&nbsp;<br />\r\n➖ Kho&aacute; học n&agrave;y học tr&ecirc;n moon + nh&oacute;m k&iacute;n face<br />\r\n➖ Để giảm &aacute;p lực cho hs combo, th&igrave; kho&aacute; học n&agrave;y KH&Ocirc;NG chấm chuy&ecirc;n cần<br />\r\n➖ Kho&aacute; học n&agrave;y ph&ugrave; hợp với hs từ lớp 8 trở l&ecirc;n v&agrave; bổ trợ kiến thức cho những bạn đang muốn &ocirc;n thi c&aacute;c chứng chỉ quốc tế.&nbsp;<br />\r\nC&aacute;c bạn đ&atilde; đăng k&iacute; combo 1 hoặc combo 2 đều được tặng kho&aacute; n&agrave;y. C&aacute;c bạn ib page C&ocirc; để được cấp id v&agrave; duyệt v&agrave;o nh&oacute;m nha!&nbsp;</p>', 30, 19, '1631755995-241202424_195732995844195_4820583121780817331_n74.jpg', 'khoa-luyen-thi-clip-2021-2022', 136, 1, 0),
(14, 'CHƯƠNG HÀM SỐ - TOÁN 12', 300000, 0, '<p>Chữa B&agrave;i Tập Về Nh&agrave; : T&igrave;m m để h&agrave;m số đơn điệu ! (FULL dạng) Link down đề: <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbUkySFNpRHI5QldpbVVubk1NeC1iX1EwWjNGZ3xBQ3Jtc0tuS3EwODAyaGFwU21nNWltLWlGeGZrYXRrX3ROWmZ1MGMxQ3k0Mnc0Vm43dFlUX1dvaWx4V2FrTzRUY3JzYmVtWkdsMzMzcTI5RDZjN2lCVWZIS0FHTFhyMTlBRy14aGJIZjZwWWZFMHpZeEdscXdXSQ&amp;q=https%3A%2F%2Fbit.ly%2F2yFQtG7\" rel=\"nofollow\" target=\"_blank\">https://bit.ly/2yFQtG7</a> ------------- Đăng k&iacute; học online ĐẦY ĐỦ VIDEO L&Yacute; THUYẾT V&Agrave; VIDEO B&Agrave;I TẬP TỰ LUYỆN nhắn tin cho thầy nh&eacute; : <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbnZ1U1FsZkdXcFJIMURVNllUbmhSLTV2a2xLd3xBQ3Jtc0tsTFJjRWRCWUdVYXRzM3JVWWM3TVdCc2N6b0lKSUxGTFdqWTFqc0JpNXRsZmMydVljRUl3TnpHNUdhcHNWSHNuR0paSUhrOWZlQVRsMWdhYXlxeDNWRUF2Zjd4TEt6RFBiYThtcVpQM1QyeEhqWkI4RQ&amp;q=http%3A%2F%2Fm.me%2Fchidt1234\" rel=\"nofollow\" target=\"_blank\">http://m.me/chidt1234</a> 💥 Facebook c&aacute; nh&acirc;n : Ch&iacute; Quốc Nguyễn : <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbkpsemZNMXlkQ3lPRThtUlJOQ0IxcTF3VXVrd3xBQ3Jtc0tsLTdNRzBGaHZFaTkwRUxzWEtyYmliSWU3anRwc25nb2JsWkNJQUNUV3dGRlJXZkJQSy1oaDZvUXctZkFhVXpMZXBRdmtCT3p0V2d6SThwRFVjVVkxTHpHdDRwTGNvWGpOVEF6V3hyUDFRcGNzNUM5dw&amp;q=https%3A%2F%2Ffacebook.com%2Fchidt1234\" rel=\"nofollow\" target=\"_blank\">https://facebook.com/chidt1234</a> 💥 Fanpage Ch&iacute;nh Thức :<a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqazRkNXM3aWRxazdILU9KVWxlemZYWk1NbEVPQXxBQ3Jtc0ttVi1ad0dkeFZXcXZSQzNySzlwRDd5NWktUzlwZlpGQUszejJjbEhDWjFyb3BINmhCZXY2X1E5NjlrNm4yUlZmNzhWVGhQWTVIdjFlV3BJSFdITmZWZHpEb0dOSWxrTUd4S3F4RGRIVEhuSzBRRTVrQQ&amp;q=http%3A%2F%2Fwww.facebook.com%2Ftoanthaychi%2F\" rel=\"nofollow\" target=\"_blank\">http://www.facebook.com/toanthaychi/</a> 💥 Instagram : Chidt264 <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbnRMaXNKTlRHR0NHRVJJV0UwN0FmY1lMSjNGQXxBQ3Jtc0trX3hRTmh3VzluZDVMQUMxdTFud1dlb3lISkJReWZ0b0N1M2lJSkVSNTczQ0liMUJUZ1ZOYkR1V05jbFJ5cWtvSnp1cWdHOEtiSEhSMjdZQnlldG5nRFhHMGJHTzk2VzJJOUxHYnNQbEVLVXFjZ3o0Zw&amp;q=https%3A%2F%2Fwww.instagram.com%2Fchidt264%2F\" rel=\"nofollow\" target=\"_blank\">https://www.instagram.com/chidt264/</a> 💥 Học ONLINE : &Ocirc;n Thi Đại Học , lớp 12 , lớp 11 cần tư vấn để đăng k&iacute; c&aacute;c kh&oacute;a Học To&aacute;n Online Đầy Đủ Video , B&agrave;i Tập Về Nh&agrave; , B&agrave;i Tập Tự Luyện , Kh&oacute;a học luyện thi chuy&ecirc;n nghiệp v&agrave; Tốt Nhất th&igrave; nhắn tin v&agrave;o facebook Ch&iacute; Quốc Nguyễn cho thầy tại đ&acirc;y nh&eacute; m.me/chidt1234</p>', 26, 8, '235.jpg', 'chuong-ham-so-toan-12', 205, 3, 0),
(15, 'BẤM MÁY TÍNH -TRẮC NGHIỆM', 100000, 0, '<p>Link t&agrave;i liệu đ&iacute;nh k&egrave;m để l&agrave;m theo: <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa2MxTzRtTHlZRXF1UVNZanVFODBOUHVWcnJxd3xBQ3Jtc0tueXY5WmJUelduMm5IUkhmMzVKV0NXODBkQzFIQVFSVXFxZ3FtMTNTVUxsRFU2T1RBblFLbldVWUZpUjllQjl4dVV0SDlnQmtVUnYxRWdEN3FOLU90cjNQVUVNeWo5YjNiTGFmZ2tSR0ZRbzJUQ3lnOA&amp;q=http%3A%2F%2Fbit.ly%2F2Seq8It\" rel=\"nofollow\" target=\"_blank\">http://bit.ly/2Seq8It</a> ----------- Đăng k&iacute; học online ĐẦY ĐỦ VIDEO L&Yacute; THUYẾT V&Agrave; VIDEO B&Agrave;I TẬP TỰ LUYỆN nhắn tin cho thầy nh&eacute; : <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbjZPM0RQZ3BNVE1VTXQtT2c2SUFnUzlaOFFEZ3xBQ3Jtc0ttT2RBTURhVjROX3Y2VFM4bHVCZkU2U1BvUUdBNThaYWpLNnJZOVJBTko0dkloU3lmWmFxRFl5Tm0weW1HbG8yUGRxR29vUzlsUnB0NVpUc0I5TUd1R254WUc2ZUM3VUNQOWFtS0I2ZkF5LUd4Zkt5MA&amp;q=http%3A%2F%2Fm.me%2Fchidt1234\" rel=\"nofollow\" target=\"_blank\">http://m.me/chidt1234</a> 💥 Facebook c&aacute; nh&acirc;n : Ch&iacute; Quốc Nguyễn : <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa3UwZk1iQ29FV3NwVXVkUkdMS1lva1o0ZnBVZ3xBQ3Jtc0tsWVNtenM1ZWpQS2JTUlhNSFlTQXptWlh6Nl94UjlURi1DSVV3QmJTV212N2FvVm9tRXJqRHVRSV9SZWdSamhCY3B6SWN4Vnd1N3lfcS1TdXBnNE5kT0NfMEFqWFFmZzlMRjZqSmpNUEY3VmMySkgtaw&amp;q=https%3A%2F%2Ffacebook.com%2Fchidt1234\" rel=\"nofollow\" target=\"_blank\">https://facebook.com/chidt1234</a> 💥 Fanpage Ch&iacute;nh Thức :<a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbFBnc3k0TjhWNzhmV2tYTHhWNnBWNEZrcjRkUXxBQ3Jtc0tsRzFEWFFPbWxJZzJTZDRJemJxeDBzSXkxdGN3WTVJeU9JcXBhMjAtREI4cHNPc0c1dmtvZk5uMTUtZHdCd21ERmJ5OVk5bWVwTVI4c202b1lGcHU1ZXdub3QyQklRSHpKM0FETE5mYW5HX3ZabDZLMA&amp;q=http%3A%2F%2Fwww.facebook.com%2Ftoanthaychi%2F\" rel=\"nofollow\" target=\"_blank\">http://www.facebook.com/toanthaychi/</a> 💥 Instagram : Chidt264 <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqa1paX0w5WWpjR2xSamQ2dlk2WHNST3hqWjFLZ3xBQ3Jtc0tscW1QLVhuVHlVdkNBNy01UXZkR0s1ZUNsYzVFTVdTNEwyRWhyZXFmaUJSME5rYXJ0UXIxRF9pZ1NralJDRXVSVm5JYVVNbVp2bndVNTl2V0RVczZ2WHJDd3lMUGo1NUR4ZTZtRTVkY252R1V1NlJ4NA&amp;q=https%3A%2F%2Fwww.instagram.com%2Fchidt264%2F\" rel=\"nofollow\" target=\"_blank\">https://www.instagram.com/chidt264/</a> 💥 Học ONLINE : &Ocirc;n Thi Đại Học , lớp 12 , lớp 11 cần tư vấn để đăng k&iacute; c&aacute;c kh&oacute;a Học To&aacute;n Online Đầy Đủ Video , B&agrave;i Tập Về Nh&agrave; , B&agrave;i Tập Tự Luyện , Kh&oacute;a học luyện thi chuy&ecirc;n nghiệp v&agrave; Tốt Nhất th&igrave; nhắn tin v&agrave;o facebook Ch&iacute; Quốc Nguyễn cho thầy tại đ&acirc;y nh&eacute; m.me/chidt1234</p>', 26, 8, 'sddefault2.jpg', 'bam-may-tinh-trac-nghiem', 213, 3, 0),
(16, 'Ngữ Văn 12: Đọc - Hiểu - Phân tích tác phẩm văn học', 200000, 0, '<p>Tiếp tục l&agrave; một t&agrave;i liệu của thầy Minh Nhật (Nhật Tũn) nữa đ&acirc;y. Vẫn l&agrave; những t&agrave;i liệu v&ocirc; c&ugrave;ng hot của thầy ạ!</p>\r\n\r\n<p>Thầy Nhật th&igrave; mọi người cũng r&otilde; cả rồi. Độ phủ s&oacute;ng kh&aacute; l&agrave; rộng khắp v&agrave; c&oacute; rất nhiều học sinh theo học. V&agrave; ở những b&agrave;i đăng trước, m&igrave;nh cũng đ&atilde; c&oacute; đăng 2 cuốn Cửu &acirc;m ch&acirc;n kinh v&agrave; Ngọc nữ t&acirc;m kinh KINH ĐIỂN của thầy rồi. Rất hay mọi người ạ!</p>\r\n\r\n<p>C&oacute; một điểm m&agrave; m&igrave;nh kh&ocirc;ng thấy ưa g&igrave; ở thầy l&agrave; m&aacute;i t&oacute;c. N&oacute; kiểu g&igrave; ấy. Under kh&ocirc;ng ra, bổ luống cũng kh&ocirc;ng phải, thầy cứ chải nếp loạn x&igrave; ngầu cả l&ecirc;n @@ Kh&ocirc;ng biết h&agrave;ng th&aacute;ng thầy chi bao nhi&ecirc;u tiền để l&agrave;m c&aacute;i t&oacute;c như vậy đ&acirc;y ta?</p>\r\n\r\n<p>Quay trở lại với t&agrave;i liệu m&igrave;nh đăng sau đ&acirc;y. C&aacute;c bạn c&oacute; bao giờ thấy c&acirc;u đọc hiểu tưởng dễ m&agrave; thực ra rất kh&oacute; kh&ocirc;ng? C&oacute; bao giờ c&aacute;c bạn vừa l&agrave;m vừa sợ thiếu, vừa sợ n&oacute; phương phưởng kh&ocirc;ng? M&igrave;nh d&aacute;m chắc l&agrave; c&oacute;, ai cũng sẽ thấy thế th&ocirc;i. C&acirc;u đọc hiểu kh&ocirc;ng dễ như mọi người vẫn nghĩ đ&acirc;u ạ. Trong file n&agrave;y thầy Nhật đ&atilde; tr&igrave;nh b&agrave;y rất chi tiết c&aacute;ch giải quyết c&aacute;c vấn đề ở c&acirc;u đọc hiểu. 70 đề l&agrave; 70 c&acirc;u hỏi đa dạng, c&aacute;c bạn thoải m&aacute;i tham khảo lu&ocirc;n ạ. Ch&uacute;c c&aacute;c bạn học thật tốt nh&eacute;!</p>', 31, 20, 'landing-bo-sach-van-moi85.png', 'ngu-van-12-doc-hieu-phan-tich-tac-pham-van-hoc', 552, 2, 0),
(17, 'Vật Lý 11: Tổng hợp Lý 11', 500000, 0, '<ul>\r\n	<li>Nắm vững kiến thức l&yacute; thuyết từ cơ bản&nbsp;đến n&acirc;ng cao.</li>\r\n	<li>Th&agrave;nh thạo những dạng b&agrave;i tập từ nhận biết&nbsp;đến vận dụng cao.</li>\r\n	<li>Sở hữu những mẹo giải nhanh trong b&agrave;i thi m&ocirc;n Vật L&yacute;.</li>\r\n	<li>Trải nghiệm&nbsp;&aacute;p lực thi thật với hệ thống thi online ti&ecirc;n tiến.</li>\r\n</ul>', 18, 11, 'L2K4C0139.jpg', 'vat-ly-11-tong-hop-ly-11', 126, 1, 0),
(18, 'Tổng ôn vật lý 12', 900000, 0, '<p>Với kh&oacute;a học n&agrave;y sẽ mang&nbsp;đến cho c&aacute;c sĩ tử những kiến thức từ tổng quan&nbsp;đến chi tiết c&ugrave;ng những dạng b&agrave;i tập hay xuất hiện trong&nbsp;đề thi THPT quốc gia. Từ&nbsp;đ&oacute; c&aacute;c em sẽ kh&ocirc;ng c&ograve;n bỡ ngỡ khi gặp những dạng b&agrave;i tập tương tự.</p>\r\n\r\n<p>Xuy&ecirc;n suốt cả kh&oacute;a học l&agrave;&nbsp;<strong>7 phần kiến thức</strong>&nbsp;c&ugrave;ng với&nbsp;<strong>9 dạng l&yacute; thuyết</strong>&nbsp;tổng hợp to&agrave;n bộ những kiến thức cần nắm&nbsp;để chinh phục b&agrave;i thi m&ocirc;n Vật L&yacute;.&nbsp;<strong>Thầy Vũ Tuấn</strong>&nbsp;<strong>Anh</strong>&nbsp;đ&atilde; dầy c&ocirc;ng nghi&ecirc;n cứu&nbsp;<strong>những phương ph&aacute;p giải nhanh</strong>&nbsp;để tiết kiệm thời gian l&agrave;m b&agrave;i.</p>', 28, 11, 'maxresdefault34.jpg', 'tong-on-vat-ly-12', 203, 2, 0),
(19, 'Khóa Live T - Luyện đề thần tốc khóa 2002', 1000000, 0, '<p>Nhằm gi&uacute;p c&aacute;c sĩ tử 2k4 vượt qua b&agrave;i thi m&ocirc;n Vật l&yacute; kỳ thi THPT quốc gia,&nbsp;<strong>Mclass&nbsp;</strong>c&ugrave;ng&nbsp;<strong>thầy Vũ Tuấn Anh</strong>&nbsp;mang&nbsp;đến cho c&aacute;c bạn học sinh kh&oacute;a học&nbsp;<strong>Kh&oacute;a LIVE C - Luyện Thi Chuy&ecirc;n Đề - L&yacute; 2K4.</strong></p>\r\n\r\n<p>Với kh&oacute;a học n&agrave;y sẽ mang&nbsp;đến cho c&aacute;c sĩ tử những kiến thức từ tổng quan&nbsp;đến chi tiết c&ugrave;ng những dạng b&agrave;i tập hay xuất hiện trong&nbsp;đề thi THPT quốc gia. Từ&nbsp;đ&oacute; c&aacute;c em sẽ kh&ocirc;ng c&ograve;n bỡ ngỡ khi gặp những dạng b&agrave;i tập tương tự.</p>\r\n\r\n<p>Xuy&ecirc;n suốt cả kh&oacute;a học l&agrave;&nbsp;<strong>7 phần kiến thức</strong>&nbsp;c&ugrave;ng với&nbsp;<strong>9 dạng l&yacute; thuyết</strong>&nbsp;tổng hợp to&agrave;n bộ những kiến thức cần nắm&nbsp;để chinh phục b&agrave;i thi m&ocirc;n Vật L&yacute;.&nbsp;<strong>Thầy Vũ Tuấn</strong>&nbsp;<strong>Anh</strong>&nbsp;đ&atilde; dầy c&ocirc;ng nghi&ecirc;n cứu&nbsp;<strong>những phương ph&aacute;p giải nhanh</strong>&nbsp;để tiết kiệm thời gian l&agrave;m b&agrave;i.</p>', 28, 11, 'maxresdefault (1)20.jpg', 'khoa-live-t-luyen-de-than-toc-khoa-2002', 404, 2, 0),
(20, 'Tiếng Anh lớp 12 Chương trình cũ', 300000, 0, '<p><strong>Ph&acirc;n phối chương tr&igrave;nh tiếng Anh 12 chương tr&igrave;nh cũ năm 2021 - 2022</strong>&nbsp;dưới đ&acirc;y nằm trong bộ t&agrave;i liệu&nbsp;<a href=\"https://vndoc.com/giao-an-tieng-anh-lop12\">Gi&aacute;o &aacute;n tiếng Anh lớp 12 chương tr&igrave;nh cũ</a>&nbsp;do VnDoc.com sưu tầm v&agrave; đăng tải. Ph&acirc;n phối chương tr&igrave;nh dạy v&agrave; học m&ocirc;n tiếng Anh lớp 12 gi&uacute;p qu&yacute; thầy c&ocirc; l&ecirc;n gi&aacute;o &aacute;n b&agrave;i giảng m&ocirc;n tiếng Anh lớp 12 hiệu quả. Đ&acirc;y l&agrave; t&agrave;i liệu cho c&aacute;c thầy c&ocirc; tham khảo soạn b&agrave;i giảng dạy cho c&aacute;c em học sinh.</p>\r\n\r\n<p><strong>Lưu &yacute;:&nbsp;</strong>Nếu kh&ocirc;ng t&igrave;m thấy n&uacute;t Tải về b&agrave;i viết n&agrave;y, bạn vui l&ograve;ng k&eacute;o xuống cuối b&agrave;i viết để tải về đầy đủ đ&aacute;p &aacute;n.</p>', 30, 18, 'tieng anh 1257.png', 'tieng-anh-lop-12-chuong-trinh-cu', 354, 2, 0),
(21, 'Hóa 12 Vận Dụng Cao', 500000, 10, '<p>H&agrave;ng năm, trong số học sinh theo học Thầy, c&oacute; một lượng lớn c&aacute;c bạn đặt mục ti&ecirc;u cao, trong đ&oacute; c&oacute; khối ng&agrave;nh Y - Dược (khối ng&agrave;nh sức khỏe)</p>\r\n\r\n<p>Do đặt mục ti&ecirc;u cao, n&ecirc;n c&aacute;c bạn đều c&oacute; &yacute; thức học kh&aacute; tốt, v&agrave; t&igrave;m theo học Thầy kh&aacute; sớm...</p>\r\n\r\n<p>Hai năm gần đ&acirc;y do dịch Covid, thường xuy&ecirc;n phải học online, n&ecirc;n &iacute;t nhiều cũng ảnh hưởng tới qu&aacute; tr&igrave;nh học cũng như chất lượng học tập của c&aacute;c bạn...</p>\r\n\r\n<p>Việc biến động c&aacute;c phương &aacute;n x&eacute;t tuyển, dẫn đến biến động điểm x&eacute;t tuyển, cũng t&aacute;c động kh&aacute; lớn tới khả năng đỗ của c&aacute;c bạn, nhất l&agrave; c&aacute;c bạn học sinh ON&nbsp;tại H&agrave; Nội (khi kh&ocirc;ng c&oacute; điểm cộng ưu ti&ecirc;n)...</p>\r\n\r\n<p>D&ugrave; vậy, Thầy rất vui mừng v&igrave; h&agrave;ng năm đ&atilde; đồng h&agrave;nh, v&agrave; &iacute;t nhiều hỗ trợ được c&aacute;c em chinh phục mục ti&ecirc;u v&agrave; ước mơ của bản th&acirc;n.</p>\r\n\r\n<p>Thầy xin gửi lời ch&uacute;c mừng tới tất cả c&aacute;c em v&agrave; gia đ&igrave;nh</p>\r\n\r\n<p>Ch&uacute;c c&aacute;c em lu&ocirc;n học tốt, v&agrave; l&agrave; những b&aacute;c sĩ - dược sĩ - nh&acirc;n vi&ecirc;n y tế... giỏi, t&acirc;m huyết, hết l&ograve;ng v&igrave; sức khỏe của người bệnh, g&oacute;p phần n&acirc;ng cao sức khỏe của nh&acirc;n d&acirc;n Việt Nam</p>', 29, 22, 'hoa_nang_cao1247.jpg', 'hoa-12-van-dung-cao', 433, 2, 0),
(22, 'Lý 11 - Chinh Phục Học Kì I', 0, 0, '<hr />\r\n<p>Ch&agrave;o c&aacute;c bạn, h&ocirc;m nay Kiến Guru sẽ c&ugrave;ng mọi người&nbsp;<strong>T&oacute;m Tắt C&ocirc;ng Thức Vật L&yacute; 11</strong>&nbsp;chương 1 v&agrave; chương 2.</p>\r\n\r\n<p>Nhằm mục đ&iacute;ch hệ thống lại to&agrave;n bộ c&ocirc;ng thức trong chương điện trường, điện t&iacute;ch v&agrave; chương d&ograve;ng điện kh&ocirc;ng đổi &ndash; 2 chương nền tảng của m&ocirc;n vật l&yacute; 11 v&agrave; cũng rất quan trọng trong chương tr&igrave;nh &ocirc;n thi THPT quốc gia.</p>\r\n\r\n<p>Từ đ&oacute; c&aacute;c bạn c&oacute; thể &ldquo;bỏ t&uacute;i&rdquo; c&aacute;c c&ocirc;ng thức để sử dụng một c&aacute;ch nhanh ch&oacute;ng khi cần thiết m&agrave; kh&ocirc;ng mất thời gian phải tra cứu lại.</p>\r\n\r\n<p>Giờ ch&uacute;ng ta c&ugrave;ng&nbsp;<strong>T&oacute;m Tắt C&ocirc;ng Thức Vật L&yacute; 11</strong>&nbsp;nh&eacute;!</p>', 18, 23, 'vatlichuong167.jpg', 'ly-11-chinh-phuc-hoc-ki-i', 80, 2, 0),
(23, 'Tổng hợp lịch sử 12', 300000, 5, '<p><strong>Nhắc đến m&ocirc;n lịch sử, người ta thưởng nghĩ đến đ&oacute; l&agrave; m&ocirc;n học kh&ocirc; khan với những mốc thời gian, sự kiện. Thế nhưng, đối với học tr&ograve; trường Nguyễn Tất Th&agrave;nh, Lịch sử đang dần trở th&agrave;nh m&ocirc;n học được nhiều học sinh v&ocirc; c&ugrave;ng y&ecirc;u th&iacute;ch bởi những tiết học th&uacute; vị c&ugrave;ng những giờ học ngoại kh&oacute;a đầy s&aacute;ng tạo. Biết lịch sử kh&ocirc;ng chỉ đơn thuần l&agrave; ghi nhớ một v&agrave;i mốc sự kiện, một v&agrave;i chiến c&ocirc;ng hiển h&aacute;ch, m&agrave; c&ograve;n khơi dậy l&ograve;ng biết ơn, tr&acirc;n trọng ở mỗi con người. Trong h&agrave;nh tr&igrave;nh kh&ocirc;ng hề dễ d&agrave;ng ấy, ch&uacute;ng t&ocirc;i kh&ocirc;ng thể kh&ocirc;ng kể đến c&ocirc; gi&aacute;o L&ecirc; Thị Thu &ndash; Tổ trưởng tổ Lịch sử, người gi&aacute;o vi&ecirc;n đ&atilde; truyền cảm hứng, đưa m&ocirc;n Lịch sử trở n&ecirc;n gần gũi hơn với học sinh ng&ocirc;i trường mang t&ecirc;n B&aacute;c.</strong></p>', 34, 24, 'tongonlichsu1282.jpg', 'tong-hop-lich-su-12', 251, 2, 0),
(24, 'Tổng hợp Vật Lý 10', 300000, 0, '<hr />\r\n<p>Ch&agrave;o c&aacute;c bạn, h&ocirc;m nay Kiến Guru sẽ c&ugrave;ng mọi người&nbsp;<strong>T&oacute;m Tắt C&ocirc;ng Thức Vật L&yacute; 10</strong>&nbsp;chương 1 v&agrave; chương 2.</p>\r\n\r\n<p>Nhằm mục đ&iacute;ch hệ thống lại to&agrave;n bộ c&ocirc;ng thức trong chương điện trường, điện t&iacute;ch v&agrave; chương d&ograve;ng điện kh&ocirc;ng đổi &ndash; 2 chương nền tảng của m&ocirc;n vật l&yacute; 10 v&agrave; cũng rất quan trọng trong chương tr&igrave;nh &ocirc;n thi THPT quốc gia.</p>\r\n\r\n<p>Từ đ&oacute; c&aacute;c bạn c&oacute; thể &ldquo;bỏ t&uacute;i&rdquo; c&aacute;c c&ocirc;ng thức để sử dụng một c&aacute;ch nhanh ch&oacute;ng khi cần thiết m&agrave; kh&ocirc;ng mất thời gian phải tra cứu lại.</p>\r\n\r\n<p>Giờ ch&uacute;ng ta c&ugrave;ng&nbsp;<strong>T&oacute;m Tắt C&ocirc;ng Thức Vật L&yacute; 10</strong>&nbsp;nh&eacute;!</p>', 16, 23, 'maxresdefault (2)93.jpg', 'tong-hop-vat-ly-10', 60, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `idclass` int(10) UNSIGNED NOT NULL,
  `MaSV` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `tongdiem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id`, `idclass`, `MaSV`, `hoten`, `ngaysinh`, `email`, `tongdiem`) VALUES
(22, 1, '20IT288', 'Nguyễn Thị Cẩm Ly', '2002-02-28', 'ntcly.20it1@vku.udn.vn', 9.4),
(23, 1, '20IT313', 'Lê Quang Long', '2002-06-30', 'lqlong.20it1@vku.udn.vn', 10),
(24, 1, '20IT312', 'Lê Văn Tấn', '2002-12-21', 'lvtan.20it1@vku.udn.vn', 9),
(27, 1, '20IT188', 'Dương Tuấn Đạt', '2002-02-25', 'dtdat.20it1@vku.udn.vn', 9.75),
(31, 13, '20IT111', 'Nguyễn Thị Cu Lơ', '2003-02-02', 'ntclo.20gba@vku.udn.vn', 9.4),
(32, 12, '20IT112', 'Hoàng Lê Tuấn Kiệt', '2002-02-22', 'hltkiet.20it1@vku.udn.vn', 9.75),
(33, 11, '20IT115', 'Trần Khánh Ngọc', '2002-05-20', 'tkngan.20BA1@vku.udn.vn', 9.5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieus`
--

CREATE TABLE `tailieus` (
  `id` int(11) NOT NULL,
  `id_baihoc` int(11) NOT NULL,
  `tenfile` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `ngaycapnhat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tailieus`
--

INSERT INTO `tailieus` (`id`, `id_baihoc`, `tenfile`, `file`, `ngaycapnhat`) VALUES
(3, 7, 'Tài liệu Tiếng Anh 10 - Unit 1: Family Life - Cô Mai Phương', '709437219-1553053328305-unit1familylife.pdf', '2021-10-24'),
(5, 8, 'Tài liệu Tiếng Anh 10 - Unit 2: Your Body and You - Cô Mai Phương', '15469510-1553053508191-unit2yourbodyandyou.pdf', '2021-10-24'),
(6, 9, 'Tài liệu Tiếng Anh 10 - Unit 3: Music - Cô Mai Phương', '620021157-1553053607476-unit3music.pdf', '2021-10-24'),
(7, 10, 'Tài liệu Tiếng Anh 10 - Unit 4: For a Better Community - Cô Mai Phương', '67582543-1552979006389-unit4anh10.pdf', '2021-10-24'),
(8, 11, 'Tài liệu Tiếng Anh 10 - Unit 5 Inventions - Cô Mai Phương', '308237893-1552979033672-unit5anh10.pdf', '2021-10-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_social`
--

CREATE TABLE `tbl_social` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_social`
--

INSERT INTO `tbl_social` (`user_id`, `provider_user_id`, `provider`, `user`) VALUES
(9, '105163905234401346736', 'GOOGLE', 1),
(10, '104207586630534917845', 'GOOGLE', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Duong Dat', 'caole25112002@gmail.com', NULL, '$2y$10$WUHkuS.yqBmlW2iesjvbQe9N84IUDuIOzAGPJ72RgKEKUqOjTQMVS', 'Yevr38zYfGumOSlklHuFKtHk0Sj5bywbDC1f4nikhwEb9Pi7MdX6l5JsV0cr', '2021-09-24 00:25:21', '2021-09-24 00:25:21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baihocs`
--
ALTER TABLE `baihocs`
  ADD PRIMARY KEY (`id_baihoc`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `class_models`
--
ALTER TABLE `class_models`
  ADD PRIMARY KEY (`idclass`);

--
-- Chỉ mục cho bảng `danhmucs`
--
ALTER TABLE `danhmucs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lop` (`id_lop`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `giao_viens`
--
ALTER TABLE `giao_viens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Chỉ mục cho bảng `hocsinhs`
--
ALTER TABLE `hocsinhs`
  ADD PRIMARY KEY (`id_hocsinh`);

--
-- Chỉ mục cho bảng `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `lophocs`
--
ALTER TABLE `lophocs`
  ADD PRIMARY KEY (`idlop`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `noibats`
--
ALTER TABLE `noibats`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD PRIMARY KEY (`sanpham_id`),
  ADD KEY `id_giaovien` (`id_giaovien`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idclass` (`idclass`);

--
-- Chỉ mục cho bảng `tailieus`
--
ALTER TABLE `tailieus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_baihoc` (`id_baihoc`);

--
-- Chỉ mục cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baihocs`
--
ALTER TABLE `baihocs`
  MODIFY `id_baihoc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `class_models`
--
ALTER TABLE `class_models`
  MODIFY `idclass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `danhmucs`
--
ALTER TABLE `danhmucs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giao_viens`
--
ALTER TABLE `giao_viens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `hocsinhs`
--
ALTER TABLE `hocsinhs`
  MODIFY `id_hocsinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `logins`
--
ALTER TABLE `logins`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `lophocs`
--
ALTER TABLE `lophocs`
  MODIFY `idlop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `noibats`
--
ALTER TABLE `noibats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  MODIFY `sanpham_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `tailieus`
--
ALTER TABLE `tailieus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
