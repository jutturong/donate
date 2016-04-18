-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2016 at 10:08 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `financial_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id_donation` int(10) NOT NULL,
  `num1` varchar(10) NOT NULL,
  `num2` varchar(10) NOT NULL,
  `name_donation` varchar(100) NOT NULL,
  `lastname_donation` varchar(100) NOT NULL,
  `date_donation` date NOT NULL,
  `tax` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `address` varchar(250) NOT NULL,
  `filename` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id_donation`, `num1`, `num2`, `name_donation`, `lastname_donation`, `date_donation`, `tax`, `amount`, `address`, `filename`) VALUES
(8, '1', '3', 'นางพิมพ์พร', 'ผิวขาว', '2014-07-26', 'แบบธรรมดา', 500, 'อาจารย์ประจำชั้น ป.4/8 โรงเรียนอนุบาลขอนแก่น  อ.เมืองขอนแก่น  จ.ขอนแก่น  40000', NULL),
(7, '1', '2', 'นายวัชรากร', 'พร้อมจิตร', '2014-07-26', 'แบบธรรมดา', 1500, '9/509  หมู่บ้านพิมานธานี  ต.เมืองเก่า  อ.เมือง  จ.ขอนแก่น  40000', NULL),
(6, '1', '1', 'นางกาญจนา', 'สาหมาน', '2014-07-16', 'แบบธรรมดา', 500, '395/1 หมู่ที่ 5 ต.เมืองเดช อ.เดชอุดม อ.เดชอุดม จ.อุบลราชธานี ', NULL),
(9, '1', '4', 'ครอบครัวคุณดนุภพ-คุณศิวพร', 'ศรีหาตา', '2014-07-26', 'แบบธรรมดา', 500, '', NULL),
(10, '1', '5', 'ครอบครัวคุณพรรตรี', 'ศรีหาตา', '2014-07-26', 'แบบธรรมดา', 500, '', NULL),
(11, '1', '6', 'มูลนิธิแก่นนครวิทยาลัย', '', '2014-08-05', 'แบบธรรมดา', 3000, '', NULL),
(18, '1', '7', 'Preeyawadee', 'North', '2014-08-11', 'แบบธรรมดา', 500, '', NULL),
(19, '1', '8', 'คุณรัชนี', 'ไพรสำราญ', '2014-10-09', 'แบบธรรมดา', 500, '136/62  ม.5  หมู่บ้านรติรมย์เพลส  ซอย 19\r\nถ.บางกรวย - จงถนอม  ต.มหาสวัสดิ์  อ.บางกรวย  \r\nจ.นนทบุรี  11130 ', NULL),
(24, '1', '9', 'ธนาคารเกียรตินาคิน ', 'สาขาอุดรธานี ', '2014-09-18', 'แบบธรรมดา', 9365.75, '', NULL),
(26, '1', '10', 'การไฟฟ้า เขื่อนอุบลรัตน์ ', '', '2014-08-08', 'แบบธรรมดา', 1700, 'โรงไฟฟ้าพลังน้ำ ภาคตะวันออกเฉียงเหนือ ต.เขื่อนอุบลรัตน์ อ.อุบลรัตน์ จ.ขอนแก่น 40250', NULL),
(27, '1', '11', 'ด.ช.ธีทัต - ด.ช.ธงทัต ', 'ชาวนาเมือง และครอบครัว', '2014-11-14', 'แบบธรรมดา', 46687, '7-9 ซ.อินทรพิทักษ์ 1 ถ.ตากสิน แขวงบางยี่เรือ เขตธนบุรี กรุงเทพฯ 10600', NULL),
(28, '1', '12', 'คุณกิตติ', 'ตื้อปั้น', '2014-11-18', 'แบบธรรมดา', 2000, 'หมู่บ้านเอื้ออาทร ต.ศิลา อ.เมือง จ.ขอนแก่น ', NULL),
(29, '1', '13', 'ผู้ช่วยศาสตราจารย์พรทิพย์', 'พินทุโยธิน', '2015-12-02', 'แบบธรรมดา', 2000, '', NULL),
(30, '1', '14', 'คุณวชิรา-เสรี-ธรรมฤทธิ์', 'ลิขิตธีรเมธ', '2015-11-26', 'แบบธรรมดา', 5000, '', NULL),
(31, '1', '15', 'คุณศุภลักษณ์', 'วันนาพ่อ', '2015-12-08', 'แบบธรรมดา', 100, '115/8 ม.2 ต.เสม็ด อ.เมืองชลบุรี จ.ชลบุรี 20000', NULL),
(32, '1', '16', 'คุณฬฎาวรรณ', 'พันธุ์งาม', '2015-12-02', 'แบบธรรมดา', 2500, '64  ม.7  ต.ซับสมบูรณ์  อ.วิเชียรบุรี  จ.เพชรบูรณ์', NULL),
(33, '1', '17', 'คุณฉันทลักษณ์', 'มงคล', '2015-12-02', 'แบบธรรมดา', 5000, '', NULL),
(34, '1', '18', 'คุณศศิมา-คุณกัลยา', 'โพธิ์ทองคำ', '2015-01-17', 'แบบธรรมดา', 2000, '', NULL),
(36, '1', '19', 'คุณวิชญา', 'โทมัส', '2015-02-05', 'แบบธรรมดา', 10000, '', NULL),
(37, '1', '20', 'คุณสุภวิตา ', 'พงษ์สกุล', '2015-02-12', 'แบบธรรมดา', 1000, '', NULL),
(38, '1', '21', 'คุณปัทมา เลี้ยงสุขสันต์ และคุณสัญญา สุกิจบริหาร', '', '2015-03-10', 'แบบธรรมดา', 100000, '', NULL),
(39, '1', '22', 'คุณฐิติพันธ์', 'ทวาเรศ', '2015-11-03', 'แบบธรรมดา', 1000, '', NULL),
(40, '1', '23', 'คุณวีรกมล', 'เทพหนู', '2015-03-23', 'แบบธรรมดา', 500, '19/1 ถ.คลองยาใต้ ต.บ้านพรุ อ.หาดใหญ่ จ.สงขลา 90250', NULL),
(41, '1', '24', 'คุณดุษณี ', 'จิรัฐพิกาลพงศ์', '2015-04-03', 'แบบธรรมดา', 500, '308/29 ถ.กุดยางสามัคคี ต.กาฬสินธุ์ อ.เมืองกาฬสินธุ์ จ.กาฬสินธุ์ ', NULL),
(42, '1', '25', 'คุณอึ้งเกียงเอี้ยง แซ่อึ้ง และ คุณเทียม ภัทรจริยา', '', '2015-05-06', 'แบบธรรมดา', 100000, '134/351 ต.ท่าทราย ถ.นนทบุรี อ.้มืองนนทบุรี จ.นนทบุรี 11000', NULL),
(43, '1', '26', 'คุณพัชราภา', 'งามสงวนปรีชา', '2015-05-13', 'แบบธรรมดา', 501, '399/63 ซ.พงษ์เพชรนิเวศน์ ถ.ประชาชื่น \r\nแขวง/เขต จตุจักร กรุงเทพฯ 10900\r\nโทร 087-6736163', NULL),
(46, '1', '27', 'นางรัตนาภรณ์ เกษมสุขโชติและครอบครัว นางธิดารัตน์ พรมแก้วและครอบครัว', ' และกลุ่มพยาบาล 4ค โรงพยาบาลศรีนครินทร์', '2015-05-22', 'แบบธรรมดา', 5000, '', NULL),
(48, '1', '28', 'คุณสุทธิกานต์ ', 'ก่อสกุล', '2015-06-04', 'แบบธรรมดา', 240, '', NULL),
(49, '1', '29', 'EXO SUHO และเเฟนคลับ', '', '2015-07-02', 'แบบธรรมดา', 1000, '', NULL),
(50, '1', '30', 'คุณวรัญญา', 'คำรพภูมิชัย', '2015-07-02', 'แบบธรรมดา', 980, '523 หมู่บ้านอมรชัย 3 ถ.บรมราชชนนี ศาลาธรรมสพน์ ทวีวัฒนา กรุงเทพฯ 10170', NULL),
(51, '1', '31', 'มูลนิธิแก่นนครวิทยาลัย', '', '2015-07-27', 'แบบธรรมดา', 3000, 'มูลนิธิแก่นนครวิทยาลัย อาคารไอซีที\r\nโรงเรียนแก่นนครวิทยาลัย อ.เมือง \r\nจ.ขอนแก่น 40000', NULL),
(52, '1', '32', 'คุณดุษณี', 'จิรัฐพิกาลพงศ์ ', '2015-07-24', 'แบบธรรมดา', 6000, '', NULL),
(53, '1', '33', 'คุณเอกวัฒน์ ', 'วิปันโส', '2015-07-25', 'แบบธรรมดา', 200, 'รพ.ขุนตาล 208 หมู่12 ต.ยางฮอม อ.ขุนตาล \r\n\r\nจ.เชียงราย 57340\r\n', NULL),
(54, '1', '34', 'ด.ญ.กัณญภัทร', 'ชนะเกียรติ และครอบครัว', '2015-08-07', 'แบบธรรมดา', 2000, '337/337 ม.2 หมู่บ้านไทย ต.ศิลา อ.เมือง จ.ขอนแก่น \r\n\r\nโทร.0863230344', NULL),
(55, '1', '35', 'คุณธนวัฒน์ ', 'ขันทอง', '2015-10-08', 'แบบธรรมดา', 237, '', NULL),
(56, '1', '36', 'รศ.ดร.ธีระ', 'ฤทธิรอด และครอบครัว', '2015-08-18', 'แบบธรรมดา', 3000, '', NULL),
(57, '1', '37', 'คุณเกศวณี', 'มีดี', '2015-08-18', 'แบบธรรมดา', 3000, '', NULL),
(58, '1', '38', 'คุณสุภาวิตา ', 'พงษ์สกุล', '2015-09-03', 'แบบธรรมดา', 700, '', NULL),
(60, '1', '39', 'คุณน้ำฝน ชาวนาเมือง, ด.ช.ธีทัต ชาวนาเมือง และ ด.ช.ธงทัต ชาวนาเมือง', '', '2015-09-04', 'แบบธรรมดา', 10000, '7-9 ซ.อินทราพิทักษ์ 1 ถ.ตากสิน แขวงบางยี่เรือ เขตธนบุรี กรุงเทพฯ 10600', NULL),
(61, '140', '40', 'คุณนพศรัญ', 'สุภาไชยกิจ', '2015-09-22', 'แบบลดหย่อนภาษี', 1000, '', NULL),
(62, '1', '41', 'โรงเรียนจุฬาภรณ์ราชวิทยาลัย เลย', '', '2015-10-05', 'แบบธรรมดา', 1000, '', NULL),
(63, '1', '42', 'คุณธนฤทัย', 'ดอนมอญ', '2015-11-04', 'แบบธรรมดา', 2000, '22 ม.4 ต.ชานุมาน อ.ชานุมาน จ.อำนาญเจริญ', NULL),
(64, '1', '43', 'มูลนิธิ วันชัย-อรชร', '', '2015-10-09', 'แบบธรรมดา', 5000, 'มูลนิธิ วันชัย-อรชร \r\n51 ม.2 ถ.ปู่เจ้าสมิงพราย ต.บางหญ้าแพรก อ.พระประเเดง จ.สมุทรปราการ 10130', NULL),
(65, '1', '44', 'คณะนักศึกษาระดับปริญญาโทสาขาวิชานวัตกรรมการพัฒนาอสังหาริมทรัพย์ ', 'คณะสถาปัตยกรรมศาสตร์และการผังเมือง ม.ธรรมศาสตร์ (MIRED) รุ่นที่ 7', '2015-11-17', 'แบบธรรมดา', 2000, '', NULL),
(66, '140', '41', 'คุณศิริภัทร ชินดุษฏีกุล', 'คุณบุศรินทร์ ลือถาวร', '2015-12-01', 'แบบธรรมดา', 500, '', NULL),
(70, '', '', 'คุณเสาวภา', 'ปุณวัฒนวิทย์', '2013-02-27', 'แบบลดหย่อนภาษี', 50000, '422 ถ.สุขุมวิท 42 เขตคลองเตย แขวงพระโขนง กรุงเทพฯ 10110', '20160218244.doc'),
(71, '', '', 'คุณสุธิดา', 'ปุณวัฒนวิทย์', '2013-02-27', 'แบบลดหย่อนภาษี', 10000, '422 ถ.สุขุมวิท 42 เขตคลองเตย แขวงพระโขนง กรุงเทพฯ 10110', '2016021824.doc'),
(72, '', '', 'คุณธนัญ', 'ปุณวัฒนวิทย์', '2013-02-27', 'แบบลดหย่อนภาษี', 50000, '422 ถ.สุขุมวิท 42 เขตคลองเตย แขวงพระโขนง กรุงเทพฯ 10110', '20160218395.doc'),
(73, '', '', 'คุณวรษา', 'สวาทยานนท์', '2013-02-27', 'แบบลดหย่อนภาษี', 3000, '1737/7 ถ.จันทน์เก่า แขวงทุ่งมหาเมฆ เขตสาทร กรุงเทพฯ 10120', '20160218270.doc'),
(74, '', '', 'คุณพรพล', 'ศิริไพรวัน', '2013-02-27', 'แบบลดหย่อนภาษี', 50000, '28 /78 มง3 ซ.ขุนทะเล 12 ถ.ขุนทะเล ต.มะขามเตี้ย     อ.เมือง จ.สุราษฎร์ธานี 84000', '20160218459.doc'),
(75, '', '', 'คุณณัฐกาญจน์', 'แสงอนุโณทัย', '2013-02-27', 'แบบลดหย่อนภาษี', 1000, '48/148 ตลาดวงศกร หมู่ 1 ถ.สายไหม แขวงสายไหม เขตสายไหม กรุงเทพฯ 10220', '20160218403.doc'),
(76, '', '', 'คุณทิพย์วันทา', 'อรุณศิริพันธ์', '2013-02-27', 'แบบลดหย่อนภาษี', 5000, '385/10 ถ.อิสรภาพ แขวงบ้านช่างหล่อ เขตบางกอกน้อย กรุงเทพฯ 10700', '2016021855.doc'),
(77, '', '', 'คุณรักษ์สิการณ์', 'วิเศษสี', '2013-02-27', 'แบบลดหย่อนภาษี', 3000, '89/275 ม.10 ต.บางเมืองใหม่ อ.เมือง จ.สมุทรปราการ 10270', '20160218206.doc'),
(78, '', '', 'บริษัท เดอะซัน เคมีคอล จำกัด', '', '2013-02-27', 'แบบลดหย่อนภาษี', 50000, '701/206 อาคารชุดรอยัล คาสเทิล ซ.พัฒนาการ 30     ถ.พัฒนาการ แขวงสวนหลวง เขตสวนหลวง กรุงเทพฯ 10250', '20160218246.doc'),
(79, '', '', 'คุณธนโชค', 'กฤษฎาพงษ์', '2013-02-27', 'แบบลดหย่อนภาษี', 50000, '19 หมู่บ้านปัญญา ซอย 3 ซ.พัฒนาการ 30 ถ.พัฒนาการ แขวงสวนหลวง เขตสวนหลวง กรุงเทพฯ 10250', '20160218333.doc'),
(80, '', '', 'คุณสุนันทา', 'ไชยหาญ', '2013-02-27', 'แบบลดหย่อนภาษี', 1000, '85/3 ซ.เหล่านาดี 10 ต.ในเมือง อ.เมือง จ.ขอนแก่น 40000', '2016021861.doc'),
(81, '', '', 'คุณกุลิสรา', 'สุทธิสมุทร', '2013-02-27', 'แบบลดหย่อนภาษี', 500, '71/4 ถ.สกลทวาปี ต.ธาตุเชิงชุม อ.เมือง จ.สกลนคร 47000', '20160218388.doc'),
(82, '', '', 'น.อ.หญิง พรพรรณ', 'ประเคนรี', '2013-02-27', 'แบบลดหย่อนภาษี', 1000, '22 (91/616) ซอย 42/1 แยก 7  ถ.รามอินทรา  แขวงคันนายาว เขตคันนายาว กรุงเทพฯ 10230', '20160218260.doc'),
(83, '', '', 'คุณกาญจนา', 'ร้อยบาง', '2013-02-27', 'แบบลดหย่อนภาษี', 1000, '270/9 ม.14 ถ.มิตรภาพ ต.ในเมือง อ.เมือง จ.ขอนแก่น 40000', '20160218468.doc'),
(84, '', '', 'คุณณัฏฐกันย์', 'ทยุตาจารุวิชญ์', '2013-02-27', 'แบบลดหย่อนภาษี', 3000, '8/201 คอนโดรีเจ้นโฮมบางนา ถ.สรรพาวุธ ซ.เลียบทางด่วน เขตบางนา แขวงบางนา กรุงเทพฯ', '2016021845.doc'),
(85, '', '', 'คุณสังวาลย์', 'ชาวนาเมือง', '2013-02-27', 'แบบลดหย่อนภาษี', 10000, '7-9 ซ.อินทรพิทักษ์ 1 ถ.ตากสิน แขวงบางยี่เรือ เขตธนบุรี กรุงเทพฯ 10600', '20160218339.doc'),
(86, '', '', 'คุณน้ำฝน', 'ชาวนาเมือง', '2013-02-27', 'แบบลดหย่อนภาษี', 10000, '7-9 ซ.อินทรพิทักษ์ 1 ถ.ตากสิน แขวงบางยี่เรือ เขตธนบุรี กรุงเทพฯ 10600', '20160218432.doc'),
(87, '', '', 'คุณสราวุธ', 'ชาวนาเมือง', '2013-02-27', 'แบบลดหย่อนภาษี', 10000, '7-9 ซ.อินทรพิทักษ์ 1 ถ.ตากสิน แขวงบางยี่เรือ เขตธนบุรี กรุงเทพฯ 10600', '20160218272.doc'),
(88, '', '', 'คุณพิชญา', 'ชาวนาเมือง', '2013-02-27', 'แบบลดหย่อนภาษี', 10000, '7-9 ซ.อินทรพิทักษ์ 1 ถ.ตากสิน แขวงบางยี่เรือ เขตธนบุรี กรุงเทพฯ 10600', '20160218228.doc'),
(89, '', '', 'คุณพิมพร', 'เล็กสุวรรณกุล', '2013-03-27', 'แบบลดหย่อนภาษี', 60000, '58/4 ตรอกธรรมา แขวงรองเมือง ปทุมวัน กรุงเทพฯ 10330', '20160218497.doc'),
(90, '', '', 'บริษัท เอ มัสท์ พรอพเพอร์ตี้ จำกัด', '', '2013-03-27', 'แบบลดหย่อนภาษี', 50000, '', '20160218117.doc'),
(91, '', '', 'คุณธนิดา', 'กาญจนวัฒน์', '2013-03-27', 'แบบลดหย่อนภาษี', 10000, '', '2016021842.doc'),
(92, '', '', 'คุณอดิศัย', 'อังกุรพิบูล', '2013-03-27', 'แบบลดหย่อนภาษี', 200, '', '2016021883.doc'),
(93, '', '', 'คุณอุไรวรรณ', 'อังกุรพิบูล', '2013-03-27', 'แบบลดหย่อนภาษี', 500, '', '20160218155.doc'),
(94, '', '', 'คุณบุ้งซิม', 'แซ่ตั้ง', '2013-03-27', 'แบบลดหย่อนภาษี', 100, '', '20160218113.doc'),
(95, '', '', 'คุณอัญชิดา', 'อังกุรพิบูล', '2013-03-27', 'แบบลดหย่อนภาษี', 100, '', '20160218392.doc'),
(96, '', '', 'คุณอธิชา', 'อังกุรพิบูล', '2013-03-27', 'แบบลดหย่อนภาษี', 100, '', '20160218260.doc'),
(97, '', '', 'คุณณิชชญลักษมิ์', 'ศรีเนธินานนท์', '2013-03-27', 'แบบลดหย่อนภาษี', 200, '9/299 หมู่บ้านหนองแขม แขวง/เขตหนองแขม กรุงเทพฯ 10160', '20160218500.doc'),
(98, '', '', 'คุณสมนึก', 'ชูศิลป์', '2013-03-27', 'แบบลดหย่อนภาษี', 3000, '123/1079 ศูนย์แพทย์ 4 ม.ขอนแก่น จ.ขอนแก่น 40002', '2016021861.doc'),
(99, '', '', 'คุณภาสิตา', 'ชาญนุวงศ์', '2013-03-27', 'แบบลดหย่อนภาษี', 5000, '459 คุ้มจอมพล ถ.จอมพลพัฒนา ต.ในเมือง อ.เมือง จ.ขอนแก่น 40000', '2016021824.doc'),
(100, '', '', 'น.อ.ชลิต', 'หุตะแพทย์', '2013-03-27', 'แบบลดหย่อนภาษี', 500, '1/42 ม.11 ซ.แข็งขัน 4 ต.คูคต อ.ลำลูกกา จ.ปทุมธานี 12130', '20160218413.doc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(10) NOT NULL,
  `status` char(10) NOT NULL,
  `Name_user` varchar(100) NOT NULL,
  `Department_user` varchar(100) NOT NULL,
  `Department_phone` int(10) NOT NULL,
  `Email_user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_user`, `username`, `password`, `status`, `Name_user`, `Department_user`, `Department_phone`, `Email_user`) VALUES
(1, 'admin', 'tawanchai5', '001', '', '', 0, ''),
(2, 'finan', 'tawanchai', '002', '', 'เจ้าหน้าที่การเงิน', 0, ''),
(3, 'tawanchai', 'donatebox', '002', 'เจ้าหน้าที่มูลนิธิ', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id_donation`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id_donation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;