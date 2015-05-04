-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2015 at 09:55 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vietnam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1112 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1111, 'admin', 'd7c434a54279ebea8e531c18fe0d2703');

-- --------------------------------------------------------

--
-- Table structure for table `applies`
--

DROP TABLE IF EXISTS `applies`;
CREATE TABLE IF NOT EXISTS `applies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `job_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_contents` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `application_subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cover_letter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `title_slug` text COLLATE utf8_unicode_ci,
  `article_description` text COLLATE utf8_unicode_ci,
  `avatar_article` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `related` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `id_author`, `title`, `title_slug`, `article_description`, `avatar_article`, `content`, `related`, `created_at`, `updated_at`) VALUES
(1, '11', 'Cuộc đời nghịch lý của thần đồng có IQ cao nhất thế giới', 'cuoc-doi-nghich-ly-cua-than-dong-co-iq-cao-nhat-the-gioi-1', 'Có nhiều từ để miêu tả người đàn ông tài năng Kim Ung-yong: Thần đồng Hàn Quốc, nhà nghiên cứu của NASA, diễn giả và giáo sư đại học. Hành trình cuộc đời của ông Kim từ cậu bé thần đồng đến một người mong muốn cuộc sống bình thường', 'http://hrinsider.vietnamworks.com/wp-content/uploads/2015/04/kim-ung-yong-vietnamworks-hrinsider.jpg', '<p><a href="http://hrinsider.vietnamworks.com/wp-content/uploads/2015/04/kim-ung-yong-vietnamworks-hrinsider.jpg"><img alt="Ông Kim hiện là giáo sư đại học và diễn giả. Ảnh: The Korea Herald." src="http://hrinsider.vietnamworks.com/wp-content/uploads/2015/04/kim-ung-yong-vietnamworks-hrinsider.jpg" style="height:auto; margin:0px; width:500px" /></a></p>\r\n\r\n<p>&Ocirc;ng Kim hiện l&agrave; gi&aacute;o sư đại học v&agrave; diễn giả. Ảnh: The Korea Herald.</p>\r\n\r\n<p>C&oacute; nhiều từ để mi&ecirc;u tả người đ&agrave;n &ocirc;ng t&agrave;i năng Kim Ung-yong: Thần đồng H&agrave;n Quốc, nh&agrave; nghi&ecirc;n cứu của NASA, diễn giả v&agrave; gi&aacute;o sư đại học. H&agrave;nh tr&igrave;nh cuộc đời của &ocirc;ng Kim từ cậu b&eacute; thần đồng đến một người mong muốn cuộc sống b&igrave;nh thường c&oacute; vẻ l&agrave; một nghịch l&yacute;. Ng&agrave;y nay, người H&agrave;n Quốc vẫn nhớ tới th&ocirc;ng điệp nổi tiếng của &ocirc;ng Kim: &ldquo;L&agrave; người đặc biệt kh&ocirc;ng quan trọng bằng việc sống một cuộc đời b&igrave;nh thường&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&Ocirc;ng Kim Ung-yong, hiện 52 tuổi, từng được s&aacute;ch Kỷ lục Guinness ghi danh l&agrave; người th&ocirc;ng minh nhất thế giới với chỉ số IQ 210. Kim thể hiện tố chất th&ocirc;ng minh ngay khi ch&agrave;o đời kh&ocirc;ng l&acirc;u.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chưa đầy 12 th&aacute;ng, Kim biết n&oacute;i v&agrave; 24 th&aacute;ng đ&atilde; c&oacute; thể đọc lưu lo&aacute;t tiếng H&agrave;n Quốc, Nhật Bản, Đức v&agrave; Anh. Những năm đầu đời, Kim c&ograve;n l&agrave;m thơ v&agrave; vẽ tranh. Từ năm 3 tuổi đến năm 6 tuổi, Kim l&agrave; sinh vi&ecirc;n ng&agrave;nh vật l&yacute; tại Đại học Hanyang. Kim từng xuất hiện tr&ecirc;n chương tr&igrave;nh truyền h&igrave;nh Nhật Bản để giải phương tr&igrave;nh phức tạp khi mới 7 tuổi.</p>\r\n\r\n<p>Kim được Cơ quan H&agrave;ng kh&ocirc;ng v&agrave; Vũ trụ Mỹ (NASA) mời về l&agrave;m nghi&ecirc;n cứu tại đ&acirc;y năm 8 tuổi. Kim cũng c&oacute; bằng tiến sĩ vật l&yacute; tại Đại học Colorado. Sau một thập kỷ l&agrave;m việc ở NASA, Kim nghỉ việc để về H&agrave;n Quốc. Kim gọi khoảng thời gian 10 năm ấy l&agrave; những năm đơn độc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Thời điểm đ&oacute;, cuộc sống của t&ocirc;i giống như một c&aacute;i m&aacute;y: thức dậy, c&acirc;n bằng phương tr&igrave;nh, ăn rồi ngủ. T&ocirc;i thực sự kh&ocirc;ng biết m&igrave;nh đang l&agrave;m g&igrave;. T&ocirc;i c&ocirc; độc v&agrave; kh&ocirc;ng bạn b&egrave;&rdquo;, Kim t&acirc;m sự.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với Kim, được ở gần mẹ l&agrave; yếu tố quyết định khiến &ocirc;ng từ bỏ tất cả. Tuy nhi&ecirc;n, sự trở về của Kim thời đ&oacute; được b&aacute;o ch&iacute; nước n&agrave;y rất quan t&acirc;m.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;T&ocirc;i ph&aacute;t ốm v&agrave; mệt mỏi khi lại trở th&agrave;nh t&acirc;m điểm. T&ocirc;i cảm thấy m&igrave;nh giống như một con khỉ trong vườn th&uacute;. Khi ấy chưa c&oacute; Twitter hay phần mềm chat yahoo n&ecirc;n b&aacute;o giấy vẫn quyền lực hơn cả. T&ocirc;i đo&aacute;n một số người thậm ch&iacute; c&ograve;n bắt đầu bảo t&ocirc;i l&agrave; t&acirc;m thần ph&acirc;n liệt. T&ocirc;i kh&ocirc;ng muốn ai ch&uacute; &yacute; đến m&igrave;nh cả&rdquo;, Kim cho hay.</p>\r\n', '8,3', '0000-00-00 00:00:00', '2015-04-15 04:37:13'),
(3, '8', 'Túi giấy Kraft giá rẻ, túi giấy tái chế', 'tui-giay-kraft-gia-re,-tui-giay-tai-che-3', 'Túi giấy tái chế hay túi giấy kraft là một phần quan trọng trong hệ thống nhận diện thương hiệu. Nó đóng vai trò quan trọng và được xem là bao bì sản phẩm dịch vụ, được xem là tài liệu quảng cáo dịch vụ, cũng được xem như một phương tiện', 'http://www.marketingvietnam.net/images/stories/inan/kraft_solid3_3.jpg', '<table style="width:525px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2">\r\n			<p>&nbsp;</p>\r\n\r\n			<p><img alt="" src="http://www.marketingvietnam.net/images/stories/inan/kraft_solid3_3.jpg" style="float:left; height:266px; width:284px" /><strong>T&uacute;i giấy t&aacute;i chế hay t&uacute;i giấy kraft&nbsp;</strong>l&agrave; một phần quan trọng trong hệ thống nhận diện thương hiệu. N&oacute; đ&oacute;ng vai tr&ograve; quan trọng v&agrave; được xem l&agrave; bao b&igrave; sản phẩm dịch vụ, được xem l&agrave; t&agrave;i liệu quảng c&aacute;o dịch vụ, cũng được xem như một phương tiện x&acirc;y dựng h&igrave;nh ảnh thương hiệu.&nbsp;</p>\r\n\r\n			<p>Trong khi m&ocirc;i trường đang bị đe dọa nghiệm trọng bởi c&aacute;c sản phẩm nylon, nhựa, c&aacute;c loại giấy nguy&ecirc;n liệu 100% bột giấy, th&igrave; đang c&oacute; một xu hướng sử dụng nguy&ecirc;n liệu th&acirc;n thiện m&ocirc;i trường, t&aacute;i sử dụng, t&aacute;i chế, sử dụng lại.</p>\r\n\r\n			<p>Đ&oacute; l&agrave; l&yacute; do tại sao ch&uacute;ng t&ocirc;i tập trung v&agrave;o việc sản xuất c&aacute;c sản phẩm t&uacute;i giấy l&agrave;m từ nguy&ecirc;n liệu t&aacute;i chế gi&aacute; rẻ v&agrave; th&acirc;n thiện với mội trường. cụ thể l&agrave; c&aacute;c sản phẩm&nbsp;<strong>t&uacute;i giấy kraft</strong>&nbsp;nội địa v&agrave; nhập khẩu.</p>\r\n\r\n			<p>Ch&uacute;ng t&ocirc;i nhắm đến sản phẩm gi&aacute; rẻ, thẩm mỹ, đơn giản , , v&agrave; chất lượng đ&aacute;p ứng đ&uacute;ng nhu cầu của kh&aacute;ch h&agrave;ng từ h&agrave;ng.</p>\r\n\r\n			<p>Ch&uacute;ng t&ocirc;i giới thiệu đến qu&yacute; vị dịch vụ sản xuất t&uacute;i giấy kraft như sau:</p>\r\n\r\n			<p><strong>Th&ocirc;ng số kỹ thuật in</strong>:Sử dụng kỹ thuật in offset th&ocirc;ng thương in từ 1 m&agrave;u đến 4 m&agrave;u. . .tuy nhi&ecirc;n ch&uacute;ng t&ocirc;i lu&ocirc;n khuyến kh&iacute;ch kh&aacute;ch h&agrave;ng in tối đa 2 m&agrave;u để giảm chi ph&iacute; m&agrave; vẫn giữ được đặc t&iacute;nh của thương hiệu. Trong một một số trường hợp ch&uacute;ng t&ocirc;i sẽ in lụa để giảm bớt chi ph&iacute; in.</p>\r\n\r\n			<p><strong>Th&ocirc;ng số về giấy:</strong>&nbsp;Hiện tại ch&uacute;ng t&ocirc;i đang sử dụng c&aacute;c loại giấy kraft định lượng từ 70 gsm - 250 gsm nhập từ indo, Thailand m&agrave;u v&agrave;ng, căn cứ v&agrave;o k&iacute;ch thước v&agrave; trọng lượng t&uacute;i giấy đựng m&agrave; lựa chọn định lượng giấy cho ph&ugrave; hợp. th&ocirc;ng thường ch&uacute;ng t&ocirc;i tư vấn kh&aacute;ch h&agrave;ng sử dụng loại giấy từ&nbsp;&nbsp;130 gsm - 160 gsm. Trong một số trường hợp c&oacute; thể sử dụng 250 gsm để đảm bảo an to&agrave;n khi mang.</p>\r\n\r\n			<p>Sau đ&acirc;y l&agrave; một số loại t&uacute;i giấy v&agrave; gi&aacute; t&uacute;i giấy đ&iacute;nh k&egrave;m</p>\r\n\r\n			<p>Bảng gi&aacute; t&uacute;i giấy:</p>\r\n\r\n			<p><img alt="" src="http://www.marketingvietnam.net/images/stories/inan/TuigiayKraft01.jpg" style="height:377px; width:500px" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '7', '2015-03-31 20:51:36', '2015-04-15 04:37:04'),
(7, '5', 'CHỈ MUỐN VỀ NHÀ', 'chi-muon-ve-nha-7', 'Chỉ muốn về nhà gọi hai tiếng "Mẹ ơi!"\r\nBon chen ngoài kia con mệt rồi mẹ ạ\r\nMuốn mẹ xoa đầu, nói đừng lo gì cả\r\nNhắm mắt ngủ ngoan, đã có mẹ đây rồi', 'uploads/Arti60325125.jpg', '<p>Chỉ muốn về nh&agrave; ngủ một giấc thật say<br />\r\nMẹ cha ở đ&acirc;y, dang v&ograve;ng tay che chở<br />\r\nChẳng c&ograve;n nghĩ suy hay nhọc nhằn g&igrave; nữa<br />\r\nMỗi sớm ban mai đều rạng rỡ nụ cười.&nbsp;<br />\r\n<br />\r\nChỉ muốn về nh&agrave; gọi hai tiếng &quot;Mẹ ơi!&quot;<br />\r\nBon chen ngo&agrave;i kia con mệt rồi mẹ ạ<br />\r\nMuốn mẹ xoa đầu, n&oacute;i đừng lo g&igrave; cả<br />\r\nNhắm mắt ngủ ngoan, đ&atilde; c&oacute; mẹ đ&acirc;y rồi.<br />\r\n<br />\r\nChỉ muốn về nh&agrave;, ăn b&aacute;t canh m&ugrave;ng tơi<br />\r\nRau h&aacute;i bờ ao, những ng&agrave;y trời nắng gắt<br />\r\nC&agrave; ph&aacute;o chua chua ăn k&egrave;m l&agrave; ngon nhất<br />\r\nM&acirc;m cơm giản đơn nhưng thật sự ấm l&ograve;ng.<br />\r\n<br />\r\nChỉ muốn về nh&agrave; để qu&ecirc;n hết long đong<br />\r\nTr&aacute;nh những gi&oacute; gi&ocirc;ng cho l&ograve;ng y&ecirc;n b&igrave;nh lại<br />\r\nCon đ&atilde; lớn rồi nhưng muốn m&igrave;nh b&eacute; m&atilde;i<br />\r\nSợ những bon chen sợ phải lớn, mẹ &agrave;.</p>\r\n', '7,6', '2015-04-01 20:35:45', '2015-04-15 04:36:55'),
(8, '5', 'ANH VÀ THÁNG TƯ VẪN ĐỢI', 'anh-va-thang-tu-van-doi-8', 'Ngôi nhà vắng bóng em từ lúc biệt ly\r\nLoa Kèn nở chỉ mỗi mình anh ngắm\r\nTháng Tư giao mùa với mọi người vui lắm\r\nChỉ riêng anh quạnh quẽ một nỗi niềm', 'uploads/Arti21406540.jpg', '<p>Em về đi th&aacute;ng Tư vẫn đợi<br />\r\nHoa cỏ giờ đ&acirc;y mọc k&iacute;n lối m&ograve;n<br />\r\nL&ograve;ng anh- c&aacute;nh cửa xưa bỏ ngỏ<br />\r\nĐ&atilde; bạc m&agrave;u...b&aacute;m bụi...sắp... h&eacute;o hon</p>\r\n\r\n<p>Em về đi điểm phấn t&ocirc; son<br />\r\nL&agrave;m mới lại ch&iacute;nh em tưởng l&acirc;u rồi đ&atilde; cũ<br />\r\nTh&aacute;ng Tư- anh với nắng v&agrave;ng ấp ủ<br />\r\nH&aacute;t kh&uacute;c t&igrave;nh ca ng&agrave;y ấy...đ&oacute;n em về</p>\r\n\r\n<p>Th&aacute;ng Tư rồi<br />\r\nEm ạ!<br />\r\nVề đi</p>\r\n\r\n<p>Ng&ocirc;i nh&agrave; vắng b&oacute;ng em từ l&uacute;c biệt ly<br />\r\nLoa K&egrave;n nở chỉ mỗi m&igrave;nh anh ngắm<br />\r\nTh&aacute;ng Tư giao m&ugrave;a với mọi người vui lắm<br />\r\nChỉ ri&ecirc;ng anh quạnh quẽ một nỗi niềm</p>\r\n\r\n<p>Em về đi cho anh hết chung chi&ecirc;ng<br />\r\nNg&ocirc;i nh&agrave; nhỏ vang tiếng cười con trẻ<br />\r\nHạnh ph&uacute;c giản đơn đ&acirc;u cần g&igrave; hơn thế<br />\r\nAnh c&oacute; em, ch&uacute;ng m&igrave;nh lại c&oacute; nhau</p>\r\n\r\n<p>Rồi nỗi đau sẽ h&agrave;n gắn nỗi đau<br />\r\nHai nửa cuộc đời t&aacute;i sinh sau đổ vỡ<br />\r\nD&igrave;u nhau đi... nốt qu&atilde;ng đường dang dở<br />\r\nTrao y&ecirc;u dấu nồng n&agrave;n b&ugrave; đắp những m&ugrave;a qua</p>\r\n\r\n<p>Về đi em trước khi th&aacute;ng Tư xa</p>\r\n', '1,7', '2015-04-05 19:18:02', '2015-04-15 04:36:47'),
(9, '5', 'ANH BIẾT SAI RỒI ĐỪNG GIẬN ANH NỮA ĐƯỢC KHÔNG', 'anh-biet-sai-roi-dung-gian-anh-nua-duoc-khong-9', 'Em cứ giận anh hoài cho mưa nắng đan xen\r\nMột mảng trời đen ướt nhèm lên đôi mắt\r\nPhố nhỏ đã lên đèn mà lòng mình ngỡ tắt\r\nEm giận anh rồi hiu hắt quá em ơi', 'uploads/Arti15251615.png', '<p>Em cứ giận anh ho&agrave;i cho mưa nắng đan xen<br />\r\nMột mảng trời đen ướt nh&egrave;m l&ecirc;n đ&ocirc;i mắt<br />\r\nPhố nhỏ đ&atilde; l&ecirc;n đ&egrave;n m&agrave; l&ograve;ng m&igrave;nh ngỡ tắt<br />\r\nEm giận anh rồi hiu hắt qu&aacute; em ơi</p>\r\n\r\n<p>Th&ocirc;i đừng giận anh nữa để v&ocirc; t&igrave;nh nụ cười lại đ&aacute;nh rơi<br />\r\nNg&agrave;y kh&ocirc;ng em anh chẳng c&oacute; ai c&ugrave;ng đ&ugrave;a chơi nữa<br />\r\nPhố cũng buồn khi kh&ocirc;ng c&oacute; bước ch&acirc;n hai đứa<br />\r\nLối nhỏ đi về thiếu cả tiếng chim ca</p>\r\n\r\n<p>Đừng giận anh nữa ngo&agrave;i kia c&oacute; bao đ&ocirc;i trẻ hoan ca<br />\r\nXin đừng c&agrave;i then nhốt m&igrave;nh sau song cửa<br />\r\nHứa một lần n&agrave;y kh&ocirc;ng để em buồn nữa<br />\r\nAnh sẽ đưa em đi đến những con đường</p>\r\n\r\n<p>C&oacute; hoa tươi với mu&ocirc;n v&agrave;n những y&ecirc;u thương&nbsp;<br />\r\nC&oacute; những nỗi nhớ vấn vương với cầu vồng bảy sắc&nbsp;<br />\r\nC&oacute; con bướm v&agrave;ng vươn m&igrave;nh bay trong nắng<br />\r\nAnh biết sai rồi, anh sẽ sửa đừng buồn anh nữa được kh&ocirc;ng ..!</p>\r\n\r\n<p><img alt="" src="/vietnam/public/uploads/images/images/hot-boy-han-quoc-2.jpg" style="height:235px; width:200px" /></p>\r\n', '7,3,1', '2015-04-05 19:35:07', '2015-04-15 04:36:40'),
(10, '', 'test1', NULL, '', NULL, '', '', '2015-04-20 04:02:57', '2015-04-20 04:02:57'),
(11, '', 'test2', NULL, '', NULL, '', '', '2015-04-20 04:03:05', '2015-04-20 04:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sectors` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `name_slug` text COLLATE utf8_unicode_ci,
  `discription` text COLLATE utf8_unicode_ci,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `sectors`, `position`, `name`, `name_slug`, `discription`, `location`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Head of Sales - Internet/Online Media', 'Senior Executive Search Consultant at Greyfinders Co., Ltd', 'Headhunter My Nguyen', 'headhunter-my-nguyen-1', 'Senior Executive Search Consultant at Greyfinders Co., Ltd<br />\r\nEducation:<br />\r\nWestern Sydney - Australia, Vietnam<br />\r\nTroy University (United States), Vietnam<br />\r\nConnection:<br />\r\n370 connection(s)', '1', 'http://www.anphabe.com/file-deliver.php?key=hcWDxaBjm7TXnZedhtmlrtKWiG3ZcGGYcoaWrpnalqaSoJqnn55UoKNrY51anJuZVW7VbWueUmuUaGZjhKDXm5WXnIbKlcea2c_WwtrHnarLU6GloGlkoFrUqpqkz5huYmOpp6efm9GVkJTInpenoaeSy6CXy5VlzqibUp3i', '2015-03-27 03:10:49', '2015-04-15 04:14:26'),
(5, 'Supply Chain Manager - FMCG', 'Recruitment Consultant - First Alliances', 'Phan Anh', 'phan-anh-5', 'RECRUITING updated on Apr 03rd<br />\r\n<br />\r\nURGENT: 02 Sales Manager for Warehouse/ Logistics service.<br />\r\n<br />\r\n+ Supply Chain Manager - $3000<br />\r\n+ 02 Sales Manager for Contract Logistics - $2500<br />\r\n+ Customer Service Manager - 50 mil<br />\r\n						', '24', 'http://www.anphabe.com/file-deliver.php?key=hcWDxaBjm7TXnZedhtmlrtKWiG3ZcGGYcoaWrpnalqaSoJqnn55UoKNrY51anJuZVW7VbWyeUmmVamVhlIef1J6VlZ6IlMafxdjO18PckqHbloht2XBjmnKGpa2a0p6XbWNopaqomM6clo_HnZyTqp-nwZyjxZeckqKkl4Sg4Q..', '2015-03-29 20:13:43', '2015-04-15 04:14:21'),
(7, 'Crystal report - IT Software', 'Recruitment Consultant in ITT Team at FirstAlliances', 'Thoa Bui', 'thoa-bui-7', 'We are looking for Candidate with some openings IT Jobs position.<br />\r\n<br />\r\nI am wondering if you might be interested in discussing new job opportunities in HCMC with one of our consultants ? <br />\r\n<br />\r\nPlease contact me via thuthoa@firstalliances.net or (08)_39102080 ', '1', 'http://www.anphabe.com/file-deliver.php?key=hcWDxaBjm7TXnZedhtmlrtKWiG3ZcGGYcoaWrpnalqaSoJqnn55UoKNrY51anJuZVW7VbWueUmmcbGVghKDXm5WXnIbKlcea2c_WwtrHnarLU6GloGlkoFrUqpqkz5huYmOpp6efm9GVkJTInpenoaeSy6CXy5VlzqibUp3i', '2015-03-29 20:29:26', '2015-04-15 04:14:16'),
(8, 'Customer Service Leader/Staff (Cosmetic)', 'HR Consultant at ICONIC Co.,LTD', 'Phuong Duong', 'phuong-duong-8', 'Urgently looking for these positions<br />\r\n- Senior iOS Developer<br />\r\n- Senior Android Developer<br />\r\n- Java Developer<br />\r\n- Bridge System Engineer (attractive salary~) - Japanese language<br />\r\n- Social Media Specialist<br />\r\n- Senior Sales (media)<br />\r\n- Ladies/Kids Buyer (Retail)<br />\r\n', '1', 'http://www.anphabe.com/file-deliver.php?key=hcWDxaBjm7TXnZedhtmlrtKWiG3ZcGGYcoaWrpnalqaSoJqnn55UoKNrY51anJuZVW7VbWyeUmmUcWpgmIef1J6VlZ6IlMafxdjO18PckqHbloht2XBjmnKGpa2a0p6XbWNopaqomM6clo_HnZyTqp-nwZyjxZeckqKkl4Sg4Q..', '2015-03-31 04:05:48', '2015-04-15 04:14:10'),
(9, 'Senior Career Advisor HCMC', 'Director of Marketing, VietnamWorks', 'Jane Nguyen', 'jane-nguyen-9', 'BDM/ Sales & Marketing/ KAM/ Financial/ workplace: Singapore /4000-5000$!!!<br />\r\nPrefer Vietnamese who have experience working in Singapore!!!', '1', 'http://www.anphabe.com/file-deliver.php?key=hcWDxaBjm7TXnZedhtmlrtKWiG3ZcGGYcoaWrpnalqaSoJqnn55UoKNrY51anJuZVW7VbWyeUmmUbmZnlYef1J6VlZ6IlMafxdjO18PckqHbloht2XBjmnKGpa2a0p6XbWNopaqomM6clo_HnZyTqp-nwZyjxZeckqKkl4Sg4Q..', '2015-03-31 04:07:26', '2015-04-15 04:14:05'),
(10, 'Development Manager - Marketing', 'Senior Reruitment Consultant', 'Hà Văn Khôi', 'ha-van-khoi-10', '- 9 years working experience in HR, specially in recruitment;<br />\r\n- Over 5 years in IT recruitment including over 3 years in external recruitment;<br />\r\n- 1 year working experience in training;<br />\r\n- Good interpersonal skill and communication skill;<br />\r\n- Ability to wo', '1', 'http://www.anphabe.com/file-deliver.php?key=hcWDxaBjm7TXnZedhtmlrtKWiG3ZcGGYcoaWrpnalqaSoJqnn55UoKNrY51anJuZVW7VbWyeUmidb21jlYef1J6VlZ6IlMafxdjO18PckqHbloht2XBjmnKGpa2a0p6XbWNopaqomM6clo_HnZyTqp-nwZyjxZeckqKkl4Sg4Q..', '2015-03-31 04:08:03', '2015-04-15 04:13:51'),
(11, 'uman Resources, Customer Service, Marketing', ' Regional Sales Manager in Da Nang', 'Phuong Huynh', 'phuong-huynh-11', 'Current:<br />\r\nAssociate Consultant at RGF Executive Search<br />\r\nPast:<br />\r\nRecruitment Consultant at 40HRS Co, Ltd.<br />\r\nEducation:<br />\r\nAgriculture and Forestry University (aka Nong Lam University) - HCMC, Vietnam<br />\r\nConnection:<br />\r\n195 connection(s)', '1', 'http://www.anphabe.com/file-deliver.php?key=hcWDxaBjm7TXnZedhtmlrtKWiG3ZcGGYcoaWrpnalqaSoJqnn55UoKNrY51anJuZVW7VbWueUm-ca2tlhKDXm5WXnIbKlcea2c_WwtrHnarLU6GloGlkoFrUqpqkz5huYmOpp6efm9GVkJTInpenoaeSy6CXy5VlzqibUp3i', '2015-04-05 20:03:41', '2015-04-15 04:13:41'),
(12, 'IT Software', 'PHP Technical Architect - IT Software', 'Quân Lê', 'quan-le-12', 'SKILLS<br />\r\n•	Excelent English skills: speaking, reading, listening, writing and translation<br />\r\n•	Critical Thinking<br />\r\n•	Communication<br />\r\n•	Negotiation<br />\r\n•	Team player<br />\r\n<br />\r\nCHARACTERISTICS<br />\r\n•	Enthusiastic<br />\r\n•	Active<br />\r\n•	Optimistic<br />\r\n•	Responsible<br />\r\n•	Confident<br />\r\n•	Communic', '1', 'http://www.anphabe.com/file-deliver.php?key=hcWDxaBjm7TXnZedhtmlrtKWiG3ZcGGYcoaWrpnalqaSoJqnn55UoKNrY51anJuZVW7VbWyeUmiccW1il4ef1J6VlZ6IlMafxdjO18PckqHbloht2XBjmnKGpa2a0p6XbWNopaqomM6clo_HnZyTqp-nwZyjxZeckqKkl4Sg4Q..', '2015-04-06 19:43:50', '2015-04-15 04:13:35'),
(13, 'IT Software', 'omg', 'test', 'test-13', 'sdfasdfsadfas', '1', 'public/assets/img/avatar-default.jpg', '2015-04-15 03:23:12', '2015-04-15 03:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `link`, `url`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost/mywork/mywork/public/uploads/banner/Banner23511047.jpg', 'xxx', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `banner_home`
--

DROP TABLE IF EXISTS `banner_home`;
CREATE TABLE IF NOT EXISTS `banner_home` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banner_home`
--

INSERT INTO `banner_home` (`id`, `link`) VALUES
(1, 'http://localhost/mywork/mywork/public/uploads/banner/Banner_home62370053.png');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `region_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `region_name` varchar(100) NOT NULL DEFAULT '',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '255',
  PRIMARY KEY (`region_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`region_id`, `region_name`, `parent_id`, `sort_order`) VALUES
(1, 'Việt Nam', 0, 255),
(2, 'An Giang', 1, 255),
(3, 'Bà Rịa Vũng Tàu', 1, 255),
(4, 'Bình Dương', 1, 255),
(5, 'Bình Phước', 1, 255),
(6, 'Bình Thuận', 1, 255),
(7, 'Bình Định', 1, 255),
(8, 'Bắc Giang', 1, 255),
(9, 'Bắc Kạn', 1, 255),
(10, 'Bắc Ninh', 1, 255),
(11, 'Bến Tre', 1, 255),
(12, 'Cao Bằng', 1, 255),
(13, 'Cà Mau', 1, 255),
(14, 'Cần Thơ', 1, 255),
(15, 'Gia Lai', 1, 255),
(16, 'Hà Giang', 1, 255),
(17, 'Hà Nam', 1, 255),
(18, 'Hà Nội', 1, 255),
(19, 'Hà Tĩnh', 1, 255),
(20, 'Hòa Bình', 1, 255),
(21, 'Hưng Yên', 1, 255),
(22, 'Hải Dương', 1, 255),
(23, 'Hải Phòng', 1, 255),
(24, 'Hồ Chí Minh', 1, 255),
(25, 'Khánh Hòa', 1, 255),
(26, 'Kiên Giang', 1, 255),
(27, 'Kon Tum', 1, 255),
(28, 'Lai Châu', 1, 255),
(29, 'Long An', 1, 255),
(30, 'Lào Cai', 1, 255),
(31, 'Lâm Đồng', 1, 255),
(32, 'Lạng Sơn', 1, 255),
(33, 'Nam Định', 1, 255),
(34, 'Nghệ An', 1, 255),
(35, 'Ninh Bình', 1, 255),
(36, 'Ninh Thuận', 1, 255),
(37, 'Phú Thọ', 1, 255),
(38, 'Phú Yên', 1, 255),
(40, 'Quảng Nam', 1, 255),
(41, 'Quảng Ngãi', 1, 255),
(42, 'Quảng Ninh', 1, 255),
(43, 'Quảng Trị', 1, 255),
(44, 'Sơn La', 1, 255),
(45, 'Thanh Hóa', 1, 255),
(46, 'Thái Bình', 1, 255),
(47, 'Thái Nguyên', 1, 255),
(48, 'Thừa Thiên Huế', 1, 255),
(49, 'Tiền Giang', 1, 255),
(50, 'Trà Vinh', 1, 255),
(51, 'Tuyên Quang', 1, 255),
(52, 'Tây Ninh', 1, 255),
(53, 'Vĩnh Long', 1, 255),
(54, 'Vĩnh Phúc', 1, 255),
(55, 'Yên Bái', 1, 255),
(56, 'Đà Nẵng', 1, 255),
(57, 'Đắk Lắk', 1, 255),
(58, 'Đồng Nai', 1, 255),
(59, 'Đồng Tháp', 1, 255),
(60, 'Bạc Liêu', 1, 255),
(61, 'Sóc Trăng', 1, 255),
(62, 'Hậu Giang', 1, 255),
(63, 'Đắk Nông', 1, 255),
(64, 'Điện Biên', 1, 255);

-- --------------------------------------------------------

--
-- Table structure for table `header_blog_home`
--

DROP TABLE IF EXISTS `header_blog_home`;
CREATE TABLE IF NOT EXISTS `header_blog_home` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_article` int(10) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `header_blog_home`
--

INSERT INTO `header_blog_home` (`id`, `id_article`) VALUES
(1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `hot_story`
--

DROP TABLE IF EXISTS `hot_story`;
CREATE TABLE IF NOT EXISTS `hot_story` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_article` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hot_story`
--

INSERT INTO `hot_story` (`id`, `id_article`) VALUES
(1, '3');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_03_27_085355_create_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
