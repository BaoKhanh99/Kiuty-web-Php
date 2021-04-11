-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 20, 2019 lúc 07:13 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kiuty`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `idad` int(11) NOT NULL,
  `taikhoan` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`idad`, `taikhoan`, `matkhau`, `hoten`) VALUES
(1, 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dvchothue`
--

CREATE TABLE `dvchothue` (
  `iddichvu` int(11) NOT NULL,
  `idnd` int(11) NOT NULL,
  `kieudichvu` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iddiadiem1` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dvchothue`
--

INSERT INTO `dvchothue` (`iddichvu`, `idnd`, `kieudichvu`, `iddiadiem1`) VALUES
(1, 1, 'Thuê Xe', 1),
(2, 1, 'Thuê Máy Ảnh', 1),
(3, 2, 'Thuê Máy Ảnh', 2),
(4, 3, 'Thuê Máy Ảnh', 3),
(5, 2, 'Thuê hướng dẫn viên du lịch', 2),
(6, 3, 'Thuê Xe', 3),
(7, 4, 'Thuê Máy Ảnh', 4),
(8, 4, 'Thuê Xe', 4),
(9, 5, 'Thuê Đồ Bơi', 5),
(10, 5, 'Thuê Xe', 5),
(11, 5, 'Thuê Máy Ảnh', 5),
(12, 6, 'Thuê Máy Ảnh', 6),
(13, 7, 'Thuê Máy Ảnh', 7),
(14, 7, 'Thuê hướng dẫn viên du lịch', 7),
(15, 8, 'Thuê Máy ảnh', 8),
(16, 8, 'Thuê hướng dẫn viên du lịch', 8),
(17, 9, 'Thuê Máy Ảnh', 9),
(18, 9, 'Thuê Xe', 9),
(19, 1, 'Thuê Máy Ảnh', 10),
(20, 1, 'Thuê hướng dẫn viên du lịch', 10),
(21, 2, 'Thuê Hướng dẫn viên du lịch', 11),
(22, 2, 'Thuê Xe', 11),
(23, 1, 'Thuê Máy Ảnh', 12),
(24, 1, 'Thuê hướng dẫn viên du lịch', 12),
(25, 1, 'Thuê Máy Ảnh', 13),
(26, 1, 'Thuê hướng dẫn viên du lịch', 13),
(27, 1, 'Thuê Xe', 14),
(28, 1, 'Thuê Máy Ảnh', 14),
(29, 1, 'Thuê Xe', 15),
(30, 1, 'Thuê Máy Ảnh', 15),
(31, 1, 'Thuê hướng dẫn viên du lịch', 16),
(32, 1, 'Thuê Máy Ảnh', 16),
(34, 1, 'Thuê Xe', 17),
(35, 1, 'Thuê đồ bơi', 17),
(36, 1, 'Thuê Máy Ảnh', 17),
(37, 1, 'Thuê Xe', 18),
(38, 1, 'Thuê Xe', 19),
(39, 2, 'Thuê Máy Ảnh', 19),
(40, 1, 'Thuê Xe', 20),
(41, 1, 'Thuê Máy Ảnh', 20),
(42, 1, 'Thuê Xe', 21),
(43, 1, 'Thuê Máy Ảnh', 21),
(44, 1, 'Thuê Xe', 22),
(45, 1, 'Thuê Máy Ảnh', 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanxet`
--

CREATE TABLE `nhanxet` (
  `idnx` int(11) NOT NULL,
  `id_dc` int(11) NOT NULL,
  `idnd` int(11) NOT NULL,
  `noidung` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanxet`
--

INSERT INTO `nhanxet` (`idnx`, `id_dc`, `idnd`, `noidung`) VALUES
(1, 2, 3, 'địa điểm quá đẹp. Tôi Rất Thích'),
(2, 1, 2, 'Chỗ này rất nhiều quán ăn, mình rất thích chỗ này'),
(13, 10, 1, 'đẹp lắm luôn ă'),
(15, 5, 1, 'AHIHI'),
(16, 10, 1, 'XẤU'),
(17, 1, 1, 'đây là nơi tuyệt vời để mình sắm đồ tết');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `idphanhoi` int(11) NOT NULL,
  `idnd` int(11) NOT NULL,
  `tieudeph` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `noidungph` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanhoi`
--

INSERT INTO `phanhoi` (`idphanhoi`, `idnd`, `tieudeph`, `noidungph`) VALUES
(11, 1, 'Địa điểm không lý tưởng', 'Chúng tôi không tìm được nơi phù hợp với gia đình ở Đà Nẵng. Mong admin kiểm tra lại lỗi để hoàn thiện web hơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `idthongbao` int(11) NOT NULL,
  `idnd` int(11) NOT NULL,
  `tieudetb` varchar(2500) COLLATE utf8_unicode_ci NOT NULL,
  `noidungtb` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`idthongbao`, `idnd`, `tieudetb`, `noidungtb`) VALUES
(1, 1, 'thuê dịch vụ', 'Bạn đã đăng ký thuê máy ảnh ở Biển Cửa Đại. Người cung cấp dịch vụ sẽ liên hệ với bạn. Cảm ơn bạn đã sử dụng dịch vụ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `timkiem`
--

CREATE TABLE `timkiem` (
  `iddanhmuc` int(11) NOT NULL,
  `iddiadiem` int(11) NOT NULL,
  `tendanhmuc` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `songuoi` int(11) NOT NULL,
  `noidi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `timkiem`
--

INSERT INTO `timkiem` (`iddanhmuc`, `iddiadiem`, `tendanhmuc`, `songuoi`, `noidi`) VALUES
(1, 1, 'ăn uống, chụp hình', 6, 'Hồ Chí Minh'),
(2, 2, 'du lịch, chụp hình', 6, 'Hồ Chí Minh'),
(3, 3, 'du lịch, chụp hình, mua sắm, ăn uống', 6, 'Hồ Chí Minh'),
(4, 4, 'du lịch, chụp hình, dạo phố, ăn uống', 6, 'Hồ Chí Minh'),
(5, 5, 'du lịch, chụp hình, đi biển', 6, 'Đà Nẵng'),
(6, 6, 'du lịch, chụp hình, Dạo Phố', 2, 'Đà Nẵng'),
(7, 7, 'du lịch, chụp hình ', 6, 'Đà Nẵng'),
(8, 8, 'du lịch, chụp hình ', 6, 'Đà Nẵng'),
(9, 9, 'du lịch, chụp hình ', 6, 'Hà Nội'),
(10, 10, 'du lịch, chụp hình, dạo phố', 6, 'Hà Nội'),
(11, 11, 'du lịch', 6, 'Hà Nội'),
(12, 12, 'du lịch, chụp hình', 6, 'Hà Nội'),
(13, 14, 'du lịch, chụp hình, dạo phố', 6, 'Đà Nẵng'),
(14, 14, 'du lịch, chụp hình', 6, 'Đà Nẵng'),
(15, 15, 'du lịch, chụp hình', 6, 'Đà Nẵng'),
(16, 16, 'du lịch, chụp hình', 6, 'Đà Nẵng'),
(17, 17, 'du lịch, chụp hình, đi biển', 6, 'Đà Nẵng'),
(18, 18, 'chụp hình, ăn uống', 2, 'Hà Nội'),
(19, 19, 'du lịch, chụp hình', 6, 'Đà Nẵng'),
(20, 19, 'chụp hình, dạo phố', 2, 'Hà Nội'),
(21, 21, 'ăn uống, chụp hình', 2, 'Đà Nẵng'),
(22, 22, 'ăn uống, chụp hình', 2, 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `iddiadiem` int(11) NOT NULL,
  `tendiadiem` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thongtindiadiem` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idnhanxet` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`iddiadiem`, `tendiadiem`, `thongtindiadiem`, `noidi`, `idnhanxet`, `img`) VALUES
(1, 'Chợ Bến Thành', 'Để hỏi về biểu tượng của thành phố này thì câu trả lời của mọi cẩm nang du lịch Sài Gòn chắc chắn phải có chợ Bến Thành. Được xây dựng từ cuối thế kỷ 19, Bến Thành thuộc top những ngôi chợ xưa nhất, nay cũng là một trong những ngôi chợ tấp nập nhất.\r\n\r\nChợ Bến Thành có cả chợ ngày và chợ đêm. Ban ngày, chợ kinh doanh đầy đủ các mặt hàng từ thực phẩm, hàng quán ăn uống, đến vải vóc, đồ lưu niệm phục vụ cho du khách. Ban đêm thì chợ tập trung ở hai con đường bên hông, chủ yếu là hàng ăn và đồ lưu niệm.', 'Hồ Chí Minh', 1, 'benthanh.jpg,benhthanh1.jpg,benthanh2.jpg'),
(2, 'Dinh Độc Lập', 'Biểu tượng thứ hai của thành phố là dinh Độc Lập, hay còn được gọi là dinh Thống Nhất. Đây là nơi làm việc của Toàn quyền Đông Dương và Tổng thống Ngô Đình Diệm trước sự kiện 30/4/1975. Đến nay, dinh Độc Lập vẫn là một trong những công trình kiến trúc tiêu biểu nhất của miền Nam Việt Nam những năm 1960.', 'Hồ Chí Minh', 2, 'dinhdoclap.jpg, dinhdoclap1.jpg, dinhdoclap1.jpg'),
(3, 'Khu vực người Hoa – Chợ Lớn', 'Cũng như nhiều thành phố lớn khác trên thế giới, Sài Gòn cũng có riêng một khu “Chinatown” cho riêng mình, được gọi với cái tên Chợ Lớn. Trải rộng khắp khu vực quận 5, 6, 10 và 11, người Hoa chiếm đến 15% dân số, mang những nét văn hóa đặc trưng riêng biệt.\r\n\r\nĐến khu người Hoa, bạn sẽ chẳng muốn bỏ qua nhưng ngôi chợ tấp nập như chợ Bình Tây hay chợ vải Soái Kình Lâm; các đền chùa cổ như chùa Bà Thiên Hậu; và hàng trăm món ăn nức tiếng, chỉ nghe tên thôi đã thèm như sủi cảo, hoành thánh, mì vịt tiềm, chè Tàu, vịt quay…', 'Hồ Chí Minh', 3, 'cholon.jpg, cholon2.jpg, cholon1.jpg'),
(4, 'Phố Đi Bộ Nguyễn Huệ', 'Một trong những điểm đông đúc nhất của Sài Gòn mỗi khi đêm xuống chính là phố đi bộ Nguyễn Huệ. Con đường dài chỉ dành riêng cho người đi bộ; hai bên là các hàng quán, quán café, và các trung tâm giải trí được giới trẻ yêu thích nhất. Phố đi bộ còn là nơi các nhóm nghệ thuật biểu diễn tự do đầy ngẫu hứng, mang đến không khí trẻ trung, náo nhiệt của thành phố trẻ này.\r\n\r\nNhững địa điểm thú vị quanh phố đi bộ: Saigon Garden, chung cư café 42 Nguyễn Huệ, các thương hiệu trà sữa nổi tiếng hai bên đường, Zone 87…', 'Hồ Chí Minh', 4, 'phodibo.jpg, phodibo2.jpg, phodibo1.jpg'),
(5, 'Biển Mỹ Khê', 'Bờ biển Mỹ Khê trải dài từ chân bán đảo Sơn Trà đến tận Ngũ Hành Sơn khoảng chừng 10km. Vẻ đẹp nổi tiếng của Mỹ Khê đã được tạp chí Forbes bình chọn là 1 trong 6 bãi biển quyến rũ nhất hành tinh. Hàng năm có hàng triệu lượt khách đổ về du lịch Mỹ Khê.', 'Đà Nẵng', 5, 'mykhe.jpg,mykhe1.jpg, mykhe2.jpg'),
(6, 'Cầu Tình Yêu', 'Cầu Tình Yêu nằm ở bờ Đông sông Hàn,Đà Nẵng được khánh thành và đưa vào sử dụng vào tháng 5 năm 2015 và nhanh chóng trở thành điểm hẹn hò mới của giới trẻ và khách du lịch thập phương bởi vẽ đẹp lãng mạng và vị trí thuận lợi cho hoạt động du lịch của cây cầu này.', 'Đà Nẵng', 6, 'cautinhyeu.jpg, cautinhyeu1.jpg, cautinhyeu2.jpg'),
(7, 'Cầu Sông hàn', 'Cầu Quay sông Hàn là điểm đến Đà Nẵng ấn tượng, thu hút đông đảo du khách đến tham quan. Đây là cây cầu duy nhất tại Việt Nam nối từ bờ Đông sang bờ Tây có thể quay 90 độ dọc theo dòng chảy của sông Hàn cho các thuyền lớn qua lại. ', 'Đà Nẵng', 7, 'causonghan.jpg, causonghan2.jpg, causonghan1.jpg'),
(8, 'Cầu Rồng', 'Đà Nẵng được khách du lịch gần xa yêu thích không chỉ bởi khung cảnh núi non hùng vĩ, thơ mộng mà còn được biết đến với nhiều cây cầu lạ mắt, độc đáo và hoành tráng. Ngoài các cây cầu nổi tiếng như cầu quay Sông Hàn, cầu Trần Thị Lý, cầu Rồng cũng rất được du khách yêu thích. Nếu có dịp, du khách nên một lần du lịch cầu Rồng Đà Nẵng – chiếc cầu có khả năng phun lửa.', 'Đà Nẵng', 8, 'caurong.jpg., caurong1.jpg, caurong2.jpg'),
(9, 'Hồ Hoàn Kiếm', 'Hồ Hoàn Kiếm là nơi tụ hội, điểm hẹn lý tưởng bốn mùa: Rực rỡ trong sắc đào và các lễ hội truyền thống vào mùa xuân; lồng lộng những cơn gió xua tan đi cái nóng oi bức của mùa hè; say đắm với những cành liễu rủ trong màn sương huyền ảo của mùa thu; lộng lẫy trong cơn mưa lá vàng và những giọt mưa phùn lất phất bay của mùa đông.', 'Hà Nội', 9, 'hohoankiem.jpg, hohoankiem1.jpg, hohoankiem2.jpg'),
(10, 'Phố đi bộ', 'Đến thời điểm hiện tại, phố đi bộ Hà Nội quanh Hồ Gươm đã và đang dần trở thành một trong những điểm nhấn du lịch của thủ đô, là nơi để mọi người hẹn hò, vui chơi, và chậm lại giữa những con đường hối hả đông đúc.', 'Hà Nội', 10, 'phodibo.jpg, phodibo1.jpg, phodibo2.jpg'),
(11, 'Lăng chủ tịch Hồ Chí Minh', 'Lăng Chủ tịch Hồ Chí Minh, hay còn gọi là Lăng Hồ Chủ tịch, Lăng Bác, là nơi đặt thi hài Chủ tịch Hồ Chí Minh. Lăng Chủ tịch Hồ Chí Minh được chính thức khởi công ngày 2 tháng 9 năm 1973, tại vị trí của lễ đài cũ giữa Quảng trường Ba Đình, nơi ông đã từng chủ trì các cuộc mít tinh lớn.', 'Hà Nội', 11, 'langchutich.jpg, langchutich1.jpg, langchutich2.jpg'),
(12, 'Chùa Một Cột', 'Chùa Một Cột nằm giữa lòng thủ đô Hà Nội. Gần Bảo tàng Hồ Chí Minh, Chùa Một Cột cùng với \"Khuê văn các\" đang là một trong những di tích lịch sử văn hóa lâu đời, một biểu tượng của thủ đô Hà Nội ngàn năm văn hiến.', 'Hà Nội', 12, 'chuamotcot.jpg, chuamotcot1.jpg, chuamotcot2.jpg'),
(13, 'Phố Tây Bùi Viện\r\n', 'Bùi Viện là nơi minh chứng rõ ràng nhất cho câu nói “Sài Gòn không ngủ”. Con phố nhộn nhịp giữa lòng quận 1 được chắn xe, trở thành phố đi bộ mỗi tối thứ 7 và Chủ Nhật. Còn mỗi tối các ngày trong tuần thì xe vẫn lưu thông được như thường lệ, nhưng do phố khá đi đông đúc, có thể bạn sẽ muốn gửi xe rồi thả bộ khám phá đấy. Bạn sẽ dễ dàng tìm thấy nhiều điểm gửi xe ngay trên con đường Bùi Viện, giá từ 10.000 VND / chiếc. Hai bên đường là tấp nập đủ hàng quán, đôi khi chỉ cần vài chiếc bàn con, ghế đẩu, vài món nhâm nhi và một cốc bia là đủ để các bạn trẻ tán gẫu xuyên đêm rồi.0243 2484656 / 0243 2484649\r\n\r\nEmail: info@dulichhalong.net\r\n\r\ncall\r\nMr. Đình Đạt\r\n\r\ndat@dulichhalong.net\r\n\r\nTel: 0969 504 955\r\n\r\nHỗ trợ đặt dịch vụ\r\n\r\ncall\r\nMrs. Ngọc Hân\r\n\r\nhan@dulichhalong.net\r\n\r\nTel: 0982 767 501\r\n\r\nHỗ trợ đặt tour\r\n\r\ncall\r\nMs. Thành Liên\r\n\r\nlien@dulichhalong.net\r\n\r\nTel: 0904 871 262\r\n\r\nHỗ trợ\r\n\r\n \r\n Hang Sung Sot\r\nTop 10 điểm thăm quan hấp dẫn bạn nên đến khi đi Hạ Long\r\n\r\nHạ Long được biết đến như một trong những điểm du lịch hấp dẫn nhất ở Việt Nam, nơi...\r\n\r\n du lich vinh ha long\r\nNhững kinh nghiệm du lịch Hạ Long\r\n\r\nBạn đang hào hứng cho chuyến đi du lịch Hạ Long sắp tới của mình? bỡ ngỡ và cảm...\r\n\r\n Top Du Thuyen Halong\r\nTop 10 du thuyền Hạ Long được khách Việt Nam ưa thích nhất\r\n\r\nDịch vụ ngủ đêm trên vịnh Hạ Long đang ngày càng được nhiều du khách trong nước lựa chọn...\r\n\r\n \r\nChúng tôi là Công ty lữ hành chuyên tour du lịch Hạ Long được cấp đầy đủ Giấy phép Kinh doanh và Giấy phép kinh doanh Lữ hành quốc tế.\r\nĐội ngũ nhân viên chuyên nghiệp, kinh nghiệm về Hạ Long nhiệt tình sẽ tư vấn và hỗ trợ bạn để có một trải nghiệm thú vị qua những chuyến đi.\r\nMối quan hệ lâu năm với các nhà tàu, khách sạn Hạ Long để có được giá tốt nhất.\r\nCam kết đưa ra các sản phẩm và dịch vụ tốt nhất xứng đáng với chi phí bạn bỏ ra.\r\nHình thức thanh toán thuận tiện, dễ dàng, nhanh chóng và đảm bảo.\r\nVịnh Hạ Long\r\nVịnh Hạ Long – được Unesco nhiều lần công nhận là di sản thiên nhiên của thế giới với hàng nghìn hòn đảo được làm nên bởi tạo hoá kỳ vĩ và sống động. Vịnh Hạ Long có phong cảnh tuyệt đẹp nên nơi đây là một điểm du lịch rất hấp dẫn với du khách trong nước và quốc tế.', 'Hồ Chí Minh', 13, 'photay.jpg, photay1.jpg, photay2.jpg'),
(14, 'Bà Nà', 'Thắng cảnh này nằm trên núi Chúa, ở độ cao 1.489 m so với mực nước biển, cách trung tâm thành phố khoảng 25 km, thuộc địa phận xã Hòa Ninh, Hòa Vang, Đà Nẵng. Đầu thế kỷ XX, Bà Nà đã được quân đội Pháp phát hiện trong khi tìm kiếm khu nghỉ mát mới. Với khí hậu mát mẻ, nhiệt độ trung bình chỉ 18 độ C, nơi đây phù hợp cho du khách tận hưởng bầu không khí trong lành và ngắm cảnh quan từ trên cao xuống. Ngoài ra, đỉnh Bà Nà còn có khu làng Pháp với kiến trúc đậm chất phương Tây, bên trong có các trò chơi giải trí hấp dẫn. Năm 2006, hệ thống cáp treo lên Bà Nà bắt đầu được xây dựng, khi hoàn thành đã thu hút rất đông du khách đến đây', 'Đà Nẵng', 14, 'bana.jpg, bana1.jpg, bana2.jpg'),
(15, 'Ngũ Hành Sơn', 'Ngũ Hành Sơn: Danh thắng này nằm cách trung tâm Đà Nẵng 8 km về phía Đông Nam, gồm 6 ngọn núi đá vôi là: Kim Sơn, Mộc Sơn, Thủy Sơn, Hỏa Sơn (2 ngọn) và Thổ Sơn. Du khách đến Ngũ Hành Sơn có thể cảm nhận được vẻ đẹp của mây trời non nước, tìm hiểu các giá trị văn hóa tâm linh, lịch sử. ', 'Đà Nẵng', 15, 'nguhanhson.jpg, nguhanhson2.jpg, nguhanhson1.jpg,  '),
(16, 'Bán đảo Sơn Trà', 'Bán đảo Sơn Trà: Đây được xem là \"lá phổi xanh\" của thành phố Đà Nẵng. Địa điểm này thuộc phường Thọ Quang, quận Sơn Trà. Với diện tích 4.439 ha, bán đảo Sơn Trà có hệ động, thực vật phong phú và được bảo tồn nguyên vẹn. Cung đường dẫn lên Sơn Trà từ trung tâm thành phố uốn quanh bờ biển, ôm lấy rìa bán đảo này.', 'Đà Nẵng', 16, 'bandaosontra.jpg, bandaosontra1.jpg, bandaosontra2.jpg'),
(17, 'Biển Cửa Đại', 'Nằm cách Hội An 5 km về phía Đông, biển Cửa Đại từng đứng trong danh sách 25 bãi biển đẹp nhất châu Á do trang du lịch Trip Advisor bình chọn. Bãi biển này có nước trong xanh, cát trắng, sóng nhỏ. Các resort cao cấp nằm cạnh bờ biển có phong cách kiến trúc theo kiểu truyền thống hòa nhịp với thiên nhiên. Vào buổi tối, nếu ngồi trên bờ biển Cửa Đại, bạn có thể nghe đâu đó vang lên câu hát bài chòi của cư dân địa phương', 'Đà Nẵng', 17, 'cuadai.jpg, cuadai2.jpg, cuadai1.jpg'),
(18, 'Cafe phim', 'Muốn một địa điểm hẹn hò kín đáo ở Hà Nội cho 2 người thì nên đi đâu? Cafe phim bạn đã thử chưa? Điểm nổi bật của những quán này là ngoài phục vụ nước uống, đồ ăn như những quán cafe thông thường, thì họ còn cung cấp dịch vụ xem phim phòng riêng đặc biệt thích hợp cho những cặp đôi.', 'Hà Nội', 18, 'cafep1.jpg, cafep.jpg, cafep2.jpg'),
(19, 'Đèo Hải Vân', 'Đèo Hải Vân nằm trải dài theo sườn núi Hải Vân, cao 500m so với mực nuớc biển, là ranh giới tỉnh Thừa Thiên – Huế và thành phố Đà Nẵng. Khi dừng chân nơi đây, vua Lê Thánh Tông đã phong tặng là “Thiên hạ đệ nhất hùng quan”', 'Đà Nẵng', 19, 'deohaivan.jpg, deohaivan1.jpg, deohaivan2.jpg'),
(20, 'Cung đường tình yêu', 'Cả hai con đường đêu không ồn ào tấp nập xe cộ, lại đẹp mộng mơ với những hàng cây cổ thụ cao to rợp bóng 2 bên đường, đặc biệt Phan Đình Phùng được biết đến là con đường có vỉa hè rộng nhất nhì Hà Nội. Theo cảm nhận của nhiều người thì mùa thu sẽ đem lại nhiều xúc cảm nhất khi đăt chân đến những cung đường này. Còn gì bằng cảm giác được nắm tay người ấy tản bộ trên con đường xao xác lá vàng rơi, hàn thuyên chuyện trò dưới một không gian đậm chất thơ. Không phải ngẫu nhiên đây là địa điểm chụp ảnh cưới của biết bao cặp đôi, họ vừa muốn có cho mình những bức hình trong khung cảnh lãng mạn, vừa muốn ôn lại kỷ niệm một thời hò hẹn trên những cung đường tình yêu này.\r\n', 'Hà Nội', 20, 'cungduonglove.jpg, cungduonglove1.jpg, cungduonglove2.jpg'),
(21, 'Trà Sữa Goongcha', 'Dòng thức uống đặc biệt kết hợp giữa trà nguyên chất với lớp milk foam béo cùng vị mặn nhẹ đặc trưng mang đến điểm nhấn sáng tạo cho một thức uống quen thuộc.', 'Đà Nẵng', 21, 'gongcha.jpg, gongcha1.jpg, gongcha2.jpg'),
(22, 'Phố ẩm thực hàng Buồm', 'Nếu như tới Thái Lan, bạn phải tới phố ẩm thực  tại China town hoặc KhaoSan thì ở Hà Nội bạn phải tới khu ẩm thực tại phố hàng Buồm', 'Hà Nội', 22, 'hangbuom.jpg, hangbuom1.jpg, hangbuom2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idnd` int(11) NOT NULL,
  `taikhoan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namsinh` int(10) NOT NULL,
  `sdt` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idnd`, `taikhoan`, `matkhau`, `hoten`, `diachi`, `namsinh`, `sdt`) VALUES
(1, 'tlbk', '1', 'khanh', 'Đăk Lăk', 1999, 123456789),
(2, 'hh1999', '1', 'Hồ Hoàng', 'Bình Định', 1999, 98765432),
(3, 'tct', '1', 'Cao Thông', 'Quảng Bình', 1999, 147852369);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idad`);

--
-- Chỉ mục cho bảng `dvchothue`
--
ALTER TABLE `dvchothue`
  ADD PRIMARY KEY (`iddichvu`);

--
-- Chỉ mục cho bảng `nhanxet`
--
ALTER TABLE `nhanxet`
  ADD PRIMARY KEY (`idnx`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`idphanhoi`);

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`idthongbao`);

--
-- Chỉ mục cho bảng `timkiem`
--
ALTER TABLE `timkiem`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`iddiadiem`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idnd`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `idad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `dvchothue`
--
ALTER TABLE `dvchothue`
  MODIFY `iddichvu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `nhanxet`
--
ALTER TABLE `nhanxet`
  MODIFY `idnx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `idphanhoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `idthongbao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `timkiem`
--
ALTER TABLE `timkiem`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `iddiadiem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idnd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
