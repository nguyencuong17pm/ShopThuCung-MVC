-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 04, 2018 lúc 05:14 AM
-- Phiên bản máy phục vụ: 5.7.22
-- Phiên bản PHP: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qltc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `mabv` int(11) NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `macd` int(11) NOT NULL,
  `mand` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `quantrong` tinyint(4) NOT NULL,
  `kichhoat` tinyint(4) NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`mabv`, `tieude`, `tomtat`, `noidung`, `ngaydang`, `macd`, `mand`, `luotxem`, `quantrong`, `kichhoat`, `video`) VALUES
(1, 'Giải mã tiếng tru của chó sói', 'Tiếng tru của chó sói, đặc biệt vào ban đêm, khiến nhiều người rợn tóc gáy. Khác với suy đoán thông thường, các nhà khoa học phát hiện, đây là hành vi thường phản ánh sự nhớ thương của chó sói đối với một cá thể gần gũi nhưng đã cách xa bầy đàn.', 'Theo các nhà nghiên cứu, chó sói nhiều khả năng sẽ cất tiếng tru thống thiết khi một thành viên gần gũi trong gia đình của chúng rời bỏ đàn.\r\n\r\nKết quả kiểm tra đối với lượng hormone ở loài động vật này cho thấy, phản ứng tru không liên quan đến sự căng thẳng. Điều này ám chỉ, chúng đơn giản chỉ đang nhớ thương bạn bè, anh em hoặc bạn tình của mình.\r\n\r\n“Các dữ liệu thu được của chúng tôi chỉ ra rằng, việc tru lên ở chó sói không phải là một phản ứng căng thẳng đơn giản do phải xa lìa các cá thể gần gũi. Thay vào đó, nó có thể được sử dụng linh hoạt hơn để duy trì liên lạc và có lẽ hỗ trợ việc tái hợp với các đồng minh”, tiến sĩ Friederike Range đến từ trường Đại học Dược thú y (Vienna, Áo) và là người đứng đầu nghiên cứu nói.\r\nTạp chí Current Biology cho biết, nhóm nghiên cứu đã giám sát 9 con sói được bắt nhốt từ 2 đàn khác nhau ở Trung tâm Khoa học về chó sói của Áo. Mỗi ngày, các chuyên gia dắt những con sói đã bị xích này đi dạo, mỗi con một lần. Họ quan sát thấy, mỗi lần chúng được đưa ra ngoài, các con sói còn lại sẽ bắt đầu tru lên thống thiết.\r\n\r\nTrong một nỗ lực nhằm điều tra căn nguyên của hành vi đó, nhóm nghiên cứu đã thu thập mẫu máu của chó sói để đo lượng hormone cũng như thông tin về các mối quan hệ trong đàn. Họ cũng ghi lại thời điểm các con sói sẽ phản ứng và con vật nào tru nhiều nhất.\r\n\r\nNhóm nghiên cứu khám phá ra rằng, chó sói tru nhiều hơn khi một con sói đặc biệt gần gũi với nó hoặc thuộc phân cấp xã hội cao hơn, rời đàn. Không có bất kỳ liên hệ nào giữa lượng hormone gây căng thẳng với mức độ tru của chúng.\r\n\r\nNhóm nghiên cứu cũng phát hiện, khi phần còn lại trong nhóm có thể cảm nhận được sự hiện diện của thành viên trong đàn, ngay cả khi không tận mắt nhìn thấy, chúng cũng không cất tiếng tru. Dẫu vậy, nếu chúng được đưa trở lại vào rừng, chúng sẽ bắt đầu tru lên.\r\n\r\nTrong một nghiên cứu trước đó, các nhà khoa học thuộc Đại học Nottingham Trent (Anh) từng nhận thấy, tiếng tru của mỗi con sói mang tính cá thể cao, ám chỉ loài động vật này có thể nhận dạng được bằng tiếng tru đặc trưng. Họ hy vọng, phát hiện này sẽ mang tới cho các nhà bảo tồn một cách thức chính xác để lần theo dấu vết của chó sói – loài động vật đóng một vai trò thiết yếu trong chuỗi thức ăn, nhưng có thể là tai họa đối với người nông dân.', '2018-12-04 03:03:18', 2, 1, 0, 1, 1, 'https://youtube.com/embed/UHx-BYB-He0'),
(2, 'Chó mỏi mòn đợi chủ đã qua đời ở nhà thờ', '<p>Cha xứ Donato Panna n&oacute;i: &ldquo;Tommy lu&ocirc;n xuất hiện ở đ&acirc;y mỗi khi nh&agrave; thờ c&oacute; lễ, n&oacute; rất ngoan ngo&atilde;n v&agrave; biết nghe lời. Tommy cũng kh&ocirc;ng bao giờ..</p>\r\n', '<p>Sau khi chủ nh&acirc;n qua đời, ch&uacute; ch&oacute; Tommy ở &Yacute; vẫn ki&ecirc;n tr&igrave; ngồi đợi chủ ở nh&agrave; thờ v&agrave; c&acirc;u chuyện n&agrave;y đ&atilde; khiến kh&ocirc;ng &iacute;t người cảm động. Khi tiếng chu&ocirc;ng nh&agrave; thờ rung l&ecirc;n trong tang lễ của b&agrave; Maria Margherita Lochi v&agrave;o th&aacute;ng 11 vừa qua, ch&uacute; ch&oacute; Tommy đ&atilde; chạy v&agrave;o b&ecirc;n trong nh&agrave; thờ, đến b&ecirc;n cạnh quan t&agrave;i b&agrave; Lochi trong gi&acirc;y ph&uacute;t cuối c&ugrave;ng n&oacute; được ở b&ecirc;n cạnh chủ. Khi c&ograve;n sống, b&agrave; Lochi đ&atilde; mang Tommy về nh&agrave; nu&ocirc;i sau khi ph&aacute;t hiện n&oacute; bị bỏ rơi ở một c&aacute;nh đồng gần nh&agrave; tại Brindisi, miền nam nước &Yacute;. Từ khi được b&agrave; Lochi nu&ocirc;i dưỡng, Tommy đ&atilde; trở th&agrave;nh một người bạn đồng h&agrave;nh trung th&agrave;nh nhất của b&agrave; Lochi. Cha xứ Donato Panna n&oacute;i: &ldquo;Tommy lu&ocirc;n xuất hiện ở đ&acirc;y mỗi khi nh&agrave; thờ c&oacute; lễ, n&oacute; rất ngoan ngo&atilde;n v&agrave; biết nghe lời. Tommy cũng kh&ocirc;ng bao giờ l&agrave;m ồn, thậm ch&iacute; t&ocirc;i chưa bao giờ nghe thấy một tiếng sủa của n&oacute; từ khi n&oacute; xuất hiện ở đ&acirc;y&rdquo;. N&oacute; thường đến nh&agrave; thờ để tr&ocirc;ng ng&oacute;ng b&agrave; Lochi d&ugrave; b&agrave; ấy đ&atilde; chết. T&ocirc;i đ&atilde; để cho Tommy ngồi b&ecirc;n trong bởi v&igrave; n&oacute; rất ngoan, mọi người cũng kh&ocirc;ng ai ph&agrave;n n&agrave;n g&igrave; về sự xuất hiện của Tommy tại nh&agrave; thờ. Tommy l&agrave; một giống ch&oacute; Đức được b&agrave; Lochi nu&ocirc;i từ nhỏ. Kể từ khi b&agrave; Lochi qua đời, những người d&acirc;n trong l&agrave;ng đ&atilde; thay nhau chăm s&oacute;c n&oacute;. &ldquo;Tommy đ&atilde; được người d&acirc;n trong l&agrave;ng nu&ocirc;i dưỡng, v&agrave; giờ đ&acirc;y n&oacute;i đ&atilde; trở th&agrave;nh bạn của tất cả mọi người. Mọi người thay nhau chăm lo, cơm nước cho Tommy. N&oacute; vẫn thường đến nh&agrave; thờ kể sau đ&aacute;m tang của b&agrave; Lochi. Tommy đến v&agrave; chỉ ngồi một c&aacute;ch lặng y&ecirc;n ở đ&oacute;, c&oacute; lẽ n&oacute; đang tr&ocirc;ng ng&oacute;ng b&agrave; Lochi trở về&rdquo;, cha Panna cho biết th&ecirc;m.</p>\r\n', '2018-12-04 03:57:37', 8, 2, 0, 0, 1, 'https://youtube.com/embed/jsgyXuPXdW4'),
(3, 'Chó bơi chèo, hay “chạy” dưới nước?', 'Khi một con chó chạy lon ton trên cạn, các chân trước của nó sẽ đưa lên và xuống cùng lúc với một chân sau ở phía đối diện. Chẳng hạn như, chân..', 'Bơi chèo kiểu chó, hay còn gọi là “bơi chó”, là một trong những kiểu bơi cơ bản đầu tiên thường được dạy cho trẻ. Tuy nhiên, bất chấp việc là nguồn cảm hứng cho tên kiểu bơi cào và đập nước bằng cả tứ chi, các nhà nghiên cứu phát hiện, loài chó không hề bơi chèo dưới nước. Thay vào đó, các chú khuyển luôn thực hiện một chu trình cử động chân phức tạp hơn dưới nước, nhằm tối đa hóa tốc độ của chúng khi di chuyển qua các sóng nước và giảm sức cản.\r\n\r\nCác giả thuyết trước đây từng cho rằng, cử động của chó dưới nước gần giống việc chạy lon ton. Dẫu vậy, các nhà nghiên cứu đến từ Pennsylvania, Mỹ lần đầu tiên chứng minh rằng, cử động này giống cách chó chạy nhanh trên mặt đất hơn.\r\n\r\nGiáo sư Frank Fish thuộc Đại học West Chester (Mỹ) đã sử dụng các camera dưới nước để quay phim 8 cá thể thuộc 6 giống chó khác nhau khi chúng bơi qua một bể bơi. Đoạn video đã được ghi với tốc độ 30 khung hình/giây nhằm khiến giáo sư Fish dễ dàng phân tích các cử động hơn.\r\n\r\nKhi một con chó chạy lon ton trên cạn, các chân trước của nó sẽ đưa lên và xuống cùng lúc với một chân sau ở phía đối diện. Chẳng hạn như, chân trước ở bên trái sẽ đưa lên và xuống cùng lúc với chân sau ở bên phải.\r\nDẫu vậy, khi một con chó chạy nhanh trên mặt đất, để tăng tốc, các chân của nó dịch chuyển theo một chu trình phức tạp. Chân sau ở bên trái sẽ hạ xuống đất trước, tiếp sau là chân trước, bên trái, rồi đến chân sau, bên phải và cuối cùng là chân trước, bên phải. Chó càng chạy xa, các chân sẽ nâng – lên hạ xuống càng nhịp nhàng, cùng kiểu.\r\n\r\nGiáo sư Fish và các cộng sự nhận thấy, cử động của các con chó dưới nước hầu như giống cách thức chúng chạy nhanh trên cạn, ngoại trừ một điểm: Mặc dù các chân trước vẫn được sử dụng để tạo lực đẩy, nhưng khi ở dưới nước, các chân sau được co kéo lại gần thên trước khi duỗi ra. Điều này nhằm giảm lực cản do các chân sau gây ra khi chân trước tạo lực đẩy.\r\n\r\nNhóm nghiên cứu tuyên bố, bằng cách nghiên cứu các đặc điểm khi bơi của chó, họ có thể biết nhiều hơn về việc tiến hóa đã phân tách động vật có vú trên cạn và dưới nước như thế nào.', '2018-12-04 03:05:47', 2, 1, 0, 0, 1, 'https://youtube.com/embed/lai6qd8mJHE'),
(4, 'Kinh nghiệm chọn mèo cảnh', 'Bạn nên lựa chọn mèo thật phù hợp với mình, lối sống của bản thân, gia đình, và môi trường xung quanh nhằm giúp cho cả bạn lẫn mèo cưng có một cuộc sống khỏe mạnh và tràn đầy niềm vui.', 'Chọn giống mèo khỏe mạnh, đảm bảo các yêu cầu sau: dáng đi nhanh nhẹn, lông mượt, mắt sáng, xung quanh miệng và vành mắt sạch sẽ không có rỉ bẩn. Dùng tay nắm da gáy mèo nhấc lên khỏi mặt đất thấy hai chân sau và đuôi quắp về phía trước bụng.', '2018-12-04 03:15:31', 1, 1, 0, 0, 1, 'https://youtube.com/embed/5dsGWM5XGdg'),
(5, 'Kinh nghiệm nuôi chó con', '<p>Ch&oacute; con từ 2 th&aacute;ng tuổi đến 6 th&aacute;ng tuổi cho ăn 3 bữa một ng&agrave;y , thời gian chia đều trong ng&agrave;y cho hợp l&yacute; . C&aacute;c bữa ăn cần c&oacute; một khoảng thời gian..</p>\r\n', '<p>Nu&ocirc;i ch&oacute; v&agrave; dạy ch&oacute; , đấy l&agrave; cả một nghệ thuật . Với những ai sắp sửa nu&ocirc;i v&agrave; đ&atilde; nu&ocirc;i h&atilde;y d&agrave;nh thời gian chăm s&oacute;c ch&oacute; v&agrave; tham khảo một số kinh nghiệm nu&ocirc;i của những ngư&ograve;i đi trứơc để c&oacute; thể nu&ocirc;i được con ch&oacute; như &yacute; . 1 Mọi người khi đi mua ch&oacute; cần lưu &yacute; , chỉ n&ecirc;n mua ch&oacute; con từ 2 đến 2,5 th&aacute;ng tuổi trở n&ecirc;n , như vậy mới đảm bảo về thể lực tối thiểu khi ta chăm s&oacute;c. 2 Ch&oacute; con từ 2 th&aacute;ng tuổi đến 6 th&aacute;ng tuổi cho ăn 3 bữa một ng&agrave;y , thời gian chia đều trong ng&agrave;y cho hợp l&yacute; . C&aacute;c bữa ăn cần c&oacute; một khoảng thời gian nhất định để cho ch&oacute; ti&ecirc;u h&oacute;a hết thức ăn (Kh&ocirc;ng nhất thiết người ăn l&uacute;c n&agrave;o th&igrave; cho ch&oacute; ăn l&uacute;c đ&oacute; , sẽ kh&ocirc;ng hợp l&yacute; về thời gian). 3 Sau bữa ăn n&ecirc;n cho ch&oacute; chạy tự do v&agrave; vệ sinh 5 , 10 ph&uacute;t v&agrave; cũng để ti&ecirc;u h&oacute;a thức ăn . Bữa chiều tối ăn nhiều hơn một ch&uacute;t v&agrave; chủ ch&oacute; d&agrave;nh thời gian thả ch&oacute; nhiều hơn . 4 Thức ăn cho ch&oacute; bao gồm: bột gạo, bột ng&ocirc;, thịt băm nhỏ hoặc c&aacute;c lục phủ ngũ tạng của gia s&uacute;c (tr&acirc;u, b&ograve;, ngựa, hạn chế thịt lợn v&igrave; kh&oacute; ti&ecirc;u). Thức ăn đều phải nấu ch&iacute;n v&agrave; lo&atilde;ng như ch&aacute;o đừng cho ăn kh&ocirc; sẽ kh&ocirc;ng tốt. Định lựơng bao nhi&ecirc;u l&agrave; t&ugrave;y v&agrave;o giống ch&oacute; to hay nhỏ m&agrave; ước lượng v&igrave; kh&ocirc;ng c&oacute; cụ thể . 5 Bữa ăn của ch&oacute; thường k&eacute;o d&agrave;i kh&ocirc;ng qu&aacute; 5 ph&uacute;t , nếu ch&oacute; ăn hết sạch v&agrave; c&ograve;n hơi th&ograve;m th&egrave;m l&agrave; đủ , sau khi ăn lập tức phải mang b&aacute;t đi rửa ngay cho sạch sẽ . Nếu ch&oacute; ăn xong m&agrave; c&ograve;n thừa thức ăn , đem đổ đi v&agrave; bữa sau phải giảm định lượng xuống cho ph&ugrave; hợp (Một số người nu&ocirc;i ch&oacute; c&oacute; th&oacute;i quen hay để thừa thức ăn để khi n&agrave;o đ&oacute;i ch&oacute; tự ăn, như vậy l&agrave; hại ch&oacute; v&igrave; thức ăn thừa dễ &ocirc;i thiu ch&oacute; sẽ bị đi ngo&agrave;i rất dễ chết). 6 C&oacute; thể một tuần cho ch&oacute; ăn một bữa ăn no hơn b&igrave;nh thường v&agrave; ăn th&ecirc;m một quả trứng g&agrave; nhưng phải nấu ch&iacute;n sau đ&oacute; cho ăn t&aacute;i dần cho đến khi c&oacute; thể ăn sống kh&ocirc;ng sao cả . Sẽ rất rốt cho sự ph&aacute;t triển của ch&oacute; v&agrave; bộ l&ocirc;ng sẽ rất mượt mặc d&ugrave; ch&uacute;ng ta &iacute;t chải l&ocirc;ng . Sau khi đi dạo buổi tối c&oacute; thể cho uống một &iacute;t sữa hoặc nước đường pha lo&atilde;ng . 7 Sau 5 th&aacute;ng c&oacute; thể bổ sung h&agrave;ng tuần một &iacute;t thị b&ograve;, ngựa sống nhưng phải thật tươi với cường độ từ &iacute;t đến nhiều sau n&agrave;y (đối với ch&oacute; to, canh g&aacute;c v&agrave; l&agrave;m nghiệp vụ ). Đừng sợ ch&oacute; bị đi ngo&agrave;i khi cho ăn thịt sống, v&igrave; bản năng hoang d&atilde; ch&oacute; vẫn ăn thị sống từ c&aacute;c con th&uacute; trong rừng , sau khi ở với người ch&oacute; mới thuần h&oacute;a ăn c&aacute;c thức ăn kh&aacute;c của người. C&ograve;n đối với ch&oacute; nhỏ d&ugrave;ng để l&agrave;m cảnh th&igrave; bạn c&oacute; thể cho &iacute;t thịt đ&atilde; nấu ch&iacute;n. Sau 5 th&aacute;ng th&igrave; ch&oacute; đ&atilde; bước v&agrave;o giai đoạn trưởng th&agrave;nh.</p>\r\n', '2018-12-04 05:01:39', 1, 2, 0, 0, 1, 'https://youtube.com/embed/dQ5BAupEKvw');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chude`
--

CREATE TABLE `chude` (
  `macd` int(11) NOT NULL,
  `tencd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kichhoat` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chude`
--

INSERT INTO `chude` (`macd`, `tencd`, `kichhoat`) VALUES
(1, 'Kinh nghiệm nuôi', 0),
(2, 'Chó', 0),
(3, 'Mèo', 0),
(8, 'Những câu truyện cảm động', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdonhang`
--

CREATE TABLE `ctdonhang` (
  `mactdonhang` int(11) NOT NULL,
  `madh` int(11) NOT NULL,
  `mamh` int(11) NOT NULL,
  `dongia` decimal(10,0) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ctdonhang`
--

INSERT INTO `ctdonhang` (`mactdonhang`, `madh`, `mamh`, `dongia`, `soluong`, `thanhtien`) VALUES
(35, 29, 12, '10000000', 1, '10000000'),
(36, 29, 11, '10000000', 1, '10000000'),
(37, 29, 6, '9000000', 7, '63000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`madm`, `tendm`) VALUES
(1, 'Mèo cảnh'),
(2, 'Chó cảnh'),
(3, 'Phụ kiện vật nuôi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngay` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tongtien` decimal(10,0) NOT NULL,
  `ghichu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madh`, `makh`, `ngay`, `tongtien`, `ghichu`, `trangthai`) VALUES
(29, 30, '2018-12-04 05:12:16', '83000000', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `email`, `matkhau`, `hoten`, `dienthoai`, `diachi`) VALUES
(18, 'admin@admin.com', NULL, 'Mèo Meo', '123', 'Long Xuyên - An Giang'),
(20, 'linh@gmail.com', NULL, 'Linh', '123', 'Long Xuyên - An Giang'),
(30, 'vothanhnam617', NULL, 'Võ Thanh Nam', '03669362239', 'Long Xuyên - An Giang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mathang`
--

CREATE TABLE `mathang` (
  `mahang` int(11) NOT NULL,
  `tenhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `giaban` decimal(10,0) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT '0',
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `luotxem` int(11) NOT NULL,
  `luotmua` int(11) NOT NULL,
  `madm` int(11) NOT NULL,
  `ngaythem` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ngaycapnhat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mathang`
--

INSERT INTO `mathang` (`mahang`, `tenhang`, `mota`, `giaban`, `soluong`, `hinhanh`, `luotxem`, `luotmua`, `madm`, `ngaythem`, `ngaycapnhat`) VALUES
(1, 'Mèo Siamese', 'Nguồn gốc ở Thái Lan, các giống của Siamese cat đã đạt được phổ biến trên thế kỷ twentieth. Các giống được nhập khẩu vào Anh từ các nước Thái Lan, được gọi là Siam tại thời điểm đó, trong 1880’s. Bởi những năm đầu của thế kỷ twentieth, Siamese chó mèo đã cho thấy tại Anh và Hoa Kỳ. Siamese cats bred cùng là hai tiêu chuẩn, truyền thống và mèo Siamese Siamese mèo hiện đại', '4500000', 100, 'images/1.jpg', 3, 0, 1, '2018-12-04 03:20:43', '2018-12-02 06:10:43'),
(2, 'Mèo Somali', 'Somali là một chú mèo rất hấp dẫn để chúng ta ngắm nhìn. Nó được sinh ra một cách lạ kỳ giống như một chú cáo nhỏ cùng với đôi tai lớn, khuôn mặt như được đeo mặt nạ, diềm cổ đầy đặn và chiếc đuôi bông xù. Somali hoang dã và cái nhìn hoang dã của nó ngay lập tức lôi cuốn được người khác.', '5000000', 100, 'images/2.jpg', 1, 0, 1, '2018-12-02 09:20:09', '2018-12-02 06:14:13'),
(3, 'Mèo Ba Tư ( Persia Cat )', 'Mèo Ba Tư có bộ lông 2 lớp với lớp lông dài phía ngoài và lớp lông ngắn khá dày ở bên trong. Đuôi của chúng luôn xù nên việc chăm sóc cho bộ lông của giống mèo này là một công việc rất quan trọng nhất. Bạn đừng nên nghĩ đến việc mua về một chú mèo loại này nếu như không thể dành cho chúng một khoảng thời gian hàng ngày để chăm sóc bộ lông bằng các loại lược chuyên dụng. Việc chải lông này ít nhất tốn 10 phút, nhưng quan trọng là phải được thực hiện đều đặn hàng ngày.', '7000000', 100, 'images/3.jpg', 7, 0, 1, '2018-12-02 09:16:18', '2018-12-02 06:17:05'),
(4, 'Mèo Birman', 'Mèo Birman là mèo có thân dài với đầu tròn, mắt xanh da trời. Bộ lông nó dài và bóng mượt có những mảng lông sẩm màu trên nền lông nhạt và bốn bàn chân móng vuốt trắng khiến con vật trông rất thu hút. Màu sắc bộ lông là màu lông rái cá, xanh da trời, sô cô la, tía nhạt,đỏ, kem, tortie, mướp tortie và mướp xám hay nâu nhạt..', '3000000', 100, 'images/4.jpg', 24, 0, 1, '2018-12-03 10:41:54', '2018-12-02 06:17:44'),
(5, 'Mèo Anh Long Ngắn', 'Mèo lông ngắn Anh là phiên bản nhân giống có chọn lọc của mèo nhà Anh truyền thống với những đặc điểm như thân hình mũm mĩm, lông ngắn và dày cùng với khuôn mặt to. Màu sắc phổ biến nhất là màu xám xanh với mắt màu vàng đồng, nhưng ngoài ra vẫn còn nhiều màu sắc và hoa văn khác nhau.', '3500000', 100, 'images/5.jpg', 6, 0, 1, '2018-12-02 09:16:38', '2018-12-02 06:20:44'),
(6, 'Mèo Tai Cụp', 'Mèo Tai Cụp (Scottish Fold) là một giống mèo với sự đột biến sinh học tự nhiên gen trội gây ảnh hưởng đến phần sụn 	toàn thân, khiến cho tai bị \"cụp\", bẻ ra phía trước và xuống phía đầu, từ đó khiến chúng hay được so sánh rằng 		trông giống cú', '9000000', 100, 'images/6.jpg', 23, 0, 1, '2018-12-04 05:12:00', '2018-12-02 06:33:59'),
(7, 'ROUGH COLLIE – Quí bà Anh quốc.', 'R. COLLIE là giống chó luôn trong những điều ước của bạn trẻ, bởi ngoại hình rất bắt mắt của nó và sự thông minh khi chúng chơi cùng bọn trẻ. Những ai đã được những cuốn truyện về những chú bé ở những nông trại Anh và xem những bộ phim có hình ảnh của Collie thì không thể quên được sự đáng yêu của nó. Những điều mà người nuôi thấy rõ nhất ở Collie là lòng trung thành, sự thông minh và hiền lành đáng yêu của chúng.', '5500000', 100, 'images/7.jpg', 0, 0, 2, '2018-12-02 06:35:43', '2018-12-02 06:35:43'),
(8, 'Dalmatian (chó đốm)', 'Hiện giờ về nguồn gốc của chó Đốm vẫn là điều tranh cãi. Dấu vết của chúng bắt nguồn từ thời kỳ Hy lạp cổ đại. Bắt đầu nổi tiếng và biết đến rộng rãi tại Việt Nam sau bộ phim “101 con chó Đốm”. Dalmatian được tạo ra để chạy theo các cỗ xe ngựa của các nhà quí tộc thời xưa, vì vậy chúng có một sức bền bỉ rất đáng nể phục.', '5500000', 100, 'images/8.jpg', 1, 0, 2, '2018-12-02 08:06:15', '2018-12-02 06:36:50'),
(9, 'Bulldog Pháp', 'Chó Bulldog Pháp có nguồn gốc xuất sứ từ nước Anh như là một phiên bản thu nhỏ của giống Bulldog Anh. Loài chó Bulldog Pháp có tính cách rất dễ chịu và biết nghe lời. Rất thích chơi đùa và rất có tình cảm. Dịu dàng và rất vui nhộn, nó sẽ là một nhân vật rất thích gây cười cho mọi người xung quanh.', '5000000', 100, 'images/9.jpg', 0, 0, 2, '2018-12-02 06:38:08', '2018-12-02 06:38:08'),
(10, 'Chó Husky', 'Chó Husky Sibir (Tiếng Nga: сибирский хаски, \"Sibirsky hasky\", Phiên âm: \"hất-s-ki\")  là một giống chó cỡ trung thuộc nòi chó kéo xe có nguồn gốc từ vùng Đông Bắc Sibir, Nga. Xét theo đặc điểm di truyền, chó Husky được xếp vào dòng Spitz. Chó Husky có hai lớp lông dày, tai dựng hình tam giác và thường có những điểm nhận dạng khác nhau trên lông.', '10000000', 100, 'images/10.jpg', 0, 0, 2, '2018-12-02 06:39:32', '2018-12-02 06:39:32'),
(11, 'Chó Shiba Inu', 'Shiba Inu là loại chó nhỏ nhất trong sáu giống chó nguyên thủy và riêng biệt đến từ Nhật Bản. Chúng là một giống chó nhỏ, nhanh nhẹn và thích hợp với địa hình miền núi, Shiba Inu ban đầu được nuôi để săn bắt. Nó gần giống nhưng nhỏ hơn so với giống chó Akita Inu. Đây là một trong số ít giống chó cổ xưa vẫn còn tồn tại cho đến ngày nay.', '10000000', 100, 'images/11.jpg', 0, 0, 2, '2018-12-02 15:51:54', '2018-12-02 06:42:11'),
(12, 'Chó Golden Retriever', 'Golden Retriever là giống chó có kích thước trung bình. Thuộc họ nhà chó ưa hoạt động, chơi đùa, chúng rất trung thành và thông minh. Chúng còn có tên gọi khác là chó săn mồi hoặc chó tha mồi. Golden Retriever là loài chó có bản năng truy tìm và phát hiện con mồi rất nhạy bén nên có thể làm chó đặc vụ để dò tìm Ma túy,... Đặc điểm chung của loài này là rất hiền lành và thông minh, trung thành và thích chơi đùa.', '10000000', 100, 'images/12.jpg', 38, 0, 2, '2018-12-04 05:10:47', '2018-12-01 17:00:00'),
(29, 'Áo xích cho chó cưng', 'Dẫn thú cưng đi dạo với áo xích tiện lợi', '250000', 0, 'images/29.jpeg', 1, 0, 3, '2018-12-03 16:11:11', '0000-00-00 00:00:00'),
(30, 'Thức ăn mèo WHISKAS hạt 400GR', 'Được bảo quản dưới dạng gói, đảm bảo sự vệ sinh và an toàn cho những chú Mèo đáng yêu. Sản phẩm thức ăn cho Mèo được chế biến từ cá nguồn nguyên liệu cá Hồi, cá Thu,...giàu dinh dưỡng, hương vị yêu thích của họ nhà Mèo.Hàm lượng dinh dưỡng...', '50000', 0, 'images/30.', 4, 0, 3, '2018-12-03 13:09:06', '0000-00-00 00:00:00'),
(31, 'Smartheart Puppy 150g', 'Thức ăn cho các loại chó', '100000', 0, 'images/31.', 3, 0, 3, '2018-12-03 16:11:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `mand` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loaind` tinyint(4) NOT NULL,
  `trangthai` tinyint(4) NOT NULL DEFAULT '0',
  `anhdaidien` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`mand`, `email`, `matkhau`, `hoten`, `loaind`, `trangthai`, `anhdaidien`) VALUES
(1, 'nam@gmail.com', 'abc123', 'Nam Vo', 1, 1, 'images/1.gif'),
(2, 'linh@gmail.com', '202cb962ac59075b964b07152d234b70', 'Linh', 2, 1, 'images/2.jpeg'),
(3, 'meow@meo.com', '202cb962ac59075b964b07152d234b70', 'Mèo Meo', 2, 1, 'images/3.jpeg'),
(4, 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 'Neko', 0, 99, 'images/4.gif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `masli` int(11) NOT NULL,
  `tensli` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ngaycapnhat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`masli`, `tensli`, `hinhanh`, `link`, `ngaytao`, `ngaycapnhat`) VALUES
(1, 'Sản phẩm chất lượng', 'carousel/c1.jpg', '', '2018-12-02 07:57:26', '2018-12-02 07:57:26'),
(2, 'Mẫu mã đa dạng', 'carousel/c2.jpg', '', '2018-12-02 07:58:47', '2018-12-02 07:58:47'),
(3, 'Giá cả hợp lí', 'carousel/c3.jpg', '', '2018-12-02 07:59:16', '2018-12-02 07:59:16'),
(4, 'Tận tâm phục vụ', 'carousel/c4.jpg', '', '2018-12-02 07:59:32', '2018-12-02 07:59:32');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`mabv`),
  ADD KEY `macd` (`macd`),
  ADD KEY `mand` (`mand`);

--
-- Chỉ mục cho bảng `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`macd`);

--
-- Chỉ mục cho bảng `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD PRIMARY KEY (`mactdonhang`),
  ADD UNIQUE KEY `mactdonhang` (`mactdonhang`),
  ADD KEY `madh` (`madh`) USING BTREE,
  ADD KEY `mamh` (`mamh`) USING BTREE;

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madm`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`),
  ADD UNIQUE KEY `madh` (`madh`),
  ADD KEY `makh` (`makh`) USING BTREE;

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`mahang`),
  ADD UNIQUE KEY `mahang` (`mahang`),
  ADD KEY `madm` (`madm`) USING BTREE;

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`mand`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`masli`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `mabv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chude`
--
ALTER TABLE `chude`
  MODIFY `macd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `ctdonhang`
--
ALTER TABLE `ctdonhang`
  MODIFY `mactdonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `mathang`
--
ALTER TABLE `mathang`
  MODIFY `mahang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `mand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `masli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`macd`) REFERENCES `chude` (`macd`),
  ADD CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`mand`) REFERENCES `nguoidung` (`mand`);

--
-- Các ràng buộc cho bảng `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD CONSTRAINT `ctdonhang_ibfk_1` FOREIGN KEY (`mamh`) REFERENCES `mathang` (`mahang`),
  ADD CONSTRAINT `ctdonhang_ibfk_2` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Các ràng buộc cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD CONSTRAINT `mathang_ibfk_1` FOREIGN KEY (`madm`) REFERENCES `danhmuc` (`madm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
