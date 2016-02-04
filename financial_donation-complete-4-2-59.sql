-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2016 at 09:17 AM
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
  `address` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id_donation`, `num1`, `num2`, `name_donation`, `lastname_donation`, `date_donation`, `tax`, `amount`, `address`) VALUES
(8, '1', '3', 'นางพิมพ์พร', 'ผิวขาว', '2014-07-26', 'แบบธรรมดา', 500, 'อาจารย์ประจำชั้น ป.4/8 โรงเรียนอนุบาลขอนแก่น  อ.เมืองขอนแก่น  จ.ขอนแก่น  40000'),
(7, '1', '2', 'นายวัชรากร', 'พร้อมจิตร', '2014-07-26', 'แบบธรรมดา', 1500, '9/509  หมู่บ้านพิมานธานี  ต.เมืองเก่า  อ.เมือง  จ.ขอนแก่น  40000'),
(6, '1', '1', 'นางกาญจนา', 'สาหมาน', '2014-07-16', 'แบบธรรมดา', 500, '395/1 หมู่ที่ 5 ต.เมืองเดช อ.เดชอุดม อ.เดชอุดม จ.อุบลราชธานี '),
(9, '1', '4', 'ครอบครัวคุณดนุภพ-คุณศิวพร', 'ศรีหาตา', '2014-07-26', 'แบบธรรมดา', 500, ''),
(10, '1', '5', 'ครอบครัวคุณพรรตรี', 'ศรีหาตา', '2014-07-26', 'แบบธรรมดา', 500, ''),
(11, '1', '6', 'มูลนิธิแก่นนครวิทยาลัย', '', '2014-08-05', 'แบบธรรมดา', 3000, ''),
(18, '1', '7', 'Preeyawadee', 'North', '2014-08-11', 'แบบธรรมดา', 500, ''),
(19, '1', '8', 'คุณรัชนี', 'ไพรสำราญ', '2014-10-09', 'แบบธรรมดา', 500, '136/62  ม.5  หมู่บ้านรติรมย์เพลส  ซอย 19\r\nถ.บางกรวย - จงถนอม  ต.มหาสวัสดิ์  อ.บางกรวย  \r\nจ.นนทบุรี  11130 '),
(24, '1', '9', 'ธนาคารเกียรตินาคิน ', 'สาขาอุดรธานี ', '2014-09-18', 'แบบธรรมดา', 9365.75, ''),
(26, '1', '10', 'การไฟฟ้า เขื่อนอุบลรัตน์ ', '', '2014-08-08', 'แบบธรรมดา', 1700, 'โรงไฟฟ้าพลังน้ำ ภาคตะวันออกเฉียงเหนือ ต.เขื่อนอุบลรัตน์ อ.อุบลรัตน์ จ.ขอนแก่น 40250'),
(27, '1', '11', 'ด.ช.ธีทัต - ด.ช.ธงทัต ', 'ชาวนาเมือง และครอบครัว', '2014-11-14', 'แบบธรรมดา', 46687, '7-9 ซ.อินทรพิทักษ์ 1 ถ.ตากสิน แขวงบางยี่เรือ เขตธนบุรี กรุงเทพฯ 10600'),
(28, '1', '12', 'คุณกิตติ', 'ตื้อปั้น', '2014-11-18', 'แบบธรรมดา', 2000, 'หมู่บ้านเอื้ออาทร ต.ศิลา อ.เมือง จ.ขอนแก่น '),
(29, '1', '13', 'ผู้ช่วยศาสตราจารย์พรทิพย์', 'พินทุโยธิน', '2015-12-02', 'แบบธรรมดา', 2000, ''),
(30, '1', '14', 'คุณวชิรา-เสรี-ธรรมฤทธิ์', 'ลิขิตธีรเมธ', '2015-11-26', 'แบบธรรมดา', 5000, ''),
(31, '1', '15', 'คุณศุภลักษณ์', 'วันนาพ่อ', '2015-12-08', 'แบบธรรมดา', 100, '115/8 ม.2 ต.เสม็ด อ.เมืองชลบุรี จ.ชลบุรี 20000'),
(32, '1', '16', 'คุณฬฎาวรรณ', 'พันธุ์งาม', '2015-12-02', 'แบบธรรมดา', 2500, '64  ม.7  ต.ซับสมบูรณ์  อ.วิเชียรบุรี  จ.เพชรบูรณ์'),
(33, '1', '17', 'คุณฉันทลักษณ์', 'มงคล', '2015-12-02', 'แบบธรรมดา', 5000, ''),
(34, '1', '18', 'คุณศศิมา-คุณกัลยา', 'โพธิ์ทองคำ', '2015-01-17', 'แบบธรรมดา', 2000, ''),
(36, '1', '19', 'คุณวิชญา', 'โทมัส', '2015-02-05', 'แบบธรรมดา', 10000, ''),
(37, '1', '20', 'คุณสุภวิตา ', 'พงษ์สกุล', '2015-02-12', 'แบบธรรมดา', 1000, ''),
(38, '1', '21', 'คุณปัทมา เลี้ยงสุขสันต์ และคุณสัญญา สุกิจบริหาร', '', '2015-03-10', 'แบบธรรมดา', 100000, ''),
(39, '1', '22', 'คุณฐิติพันธ์', 'ทวาเรศ', '2015-11-03', 'แบบธรรมดา', 1000, ''),
(40, '1', '23', 'คุณวีรกมล', 'เทพหนู', '2015-03-23', 'แบบธรรมดา', 500, '19/1 ถ.คลองยาใต้ ต.บ้านพรุ อ.หาดใหญ่ จ.สงขลา 90250'),
(41, '1', '24', 'คุณดุษณี ', 'จิรัฐพิกาลพงศ์', '2015-04-03', 'แบบธรรมดา', 500, '308/29 ถ.กุดยางสามัคคี ต.กาฬสินธุ์ อ.เมืองกาฬสินธุ์ จ.กาฬสินธุ์ '),
(42, '1', '25', 'คุณอึ้งเกียงเอี้ยง แซ่อึ้ง และ คุณเทียม ภัทรจริยา', '', '2015-05-06', 'แบบธรรมดา', 100000, '134/351 ต.ท่าทราย ถ.นนทบุรี อ.้มืองนนทบุรี จ.นนทบุรี 11000'),
(43, '1', '26', 'คุณพัชราภา', 'งามสงวนปรีชา', '2015-05-13', 'แบบธรรมดา', 501, '399/63 ซ.พงษ์เพชรนิเวศน์ ถ.ประชาชื่น \r\nแขวง/เขต จตุจักร กรุงเทพฯ 10900\r\nโทร 087-6736163'),
(46, '1', '27', 'นางรัตนาภรณ์ เกษมสุขโชติและครอบครัว นางธิดารัตน์ พรมแก้วและครอบครัว', ' และกลุ่มพยาบาล 4ค โรงพยาบาลศรีนครินทร์', '2015-05-22', 'แบบธรรมดา', 5000, ''),
(48, '1', '28', 'คุณสุทธิกานต์ ', 'ก่อสกุล', '2015-06-04', 'แบบธรรมดา', 240, ''),
(49, '1', '29', 'EXO SUHO และเเฟนคลับ', '', '2015-07-02', 'แบบธรรมดา', 1000, ''),
(50, '1', '30', 'คุณวรัญญา', 'คำรพภูมิชัย', '2015-07-02', 'แบบธรรมดา', 980, '523 หมู่บ้านอมรชัย 3 ถ.บรมราชชนนี ศาลาธรรมสพน์ ทวีวัฒนา กรุงเทพฯ 10170'),
(51, '1', '31', 'มูลนิธิแก่นนครวิทยาลัย', '', '2015-07-27', 'แบบธรรมดา', 3000, 'มูลนิธิแก่นนครวิทยาลัย อาคารไอซีที\r\nโรงเรียนแก่นนครวิทยาลัย อ.เมือง \r\nจ.ขอนแก่น 40000'),
(52, '1', '32', 'คุณดุษณี', 'จิรัฐพิกาลพงศ์ ', '2015-07-24', 'แบบธรรมดา', 6000, ''),
(53, '1', '33', 'คุณเอกวัฒน์ ', 'วิปันโส', '2015-07-25', 'แบบธรรมดา', 200, 'รพ.ขุนตาล 208 หมู่12 ต.ยางฮอม อ.ขุนตาล \r\n\r\nจ.เชียงราย 57340\r\n'),
(54, '1', '34', 'ด.ญ.กัณญภัทร', 'ชนะเกียรติ และครอบครัว', '2015-08-07', 'แบบธรรมดา', 2000, '337/337 ม.2 หมู่บ้านไทย ต.ศิลา อ.เมือง จ.ขอนแก่น \r\n\r\nโทร.0863230344'),
(55, '1', '35', 'คุณธนวัฒน์ ', 'ขันทอง', '2015-10-08', 'แบบธรรมดา', 237, ''),
(56, '1', '36', 'รศ.ดร.ธีระ', 'ฤทธิรอด และครอบครัว', '2015-08-18', 'แบบธรรมดา', 3000, ''),
(57, '1', '37', 'คุณเกศวณี', 'มีดี', '2015-08-18', 'แบบธรรมดา', 3000, ''),
(58, '1', '38', 'คุณสุภาวิตา ', 'พงษ์สกุล', '2015-09-03', 'แบบธรรมดา', 700, ''),
(60, '1', '39', 'คุณน้ำฝน ชาวนาเมือง, ด.ช.ธีทัต ชาวนาเมือง และ ด.ช.ธงทัต ชาวนาเมือง', '', '2015-09-04', 'แบบธรรมดา', 10000, '7-9 ซ.อินทราพิทักษ์ 1 ถ.ตากสิน แขวงบางยี่เรือ เขตธนบุรี กรุงเทพฯ 10600'),
(61, '140', '40', 'คุณนพศรัญ', 'สุภาไชยกิจ', '2015-09-22', 'แบบลดหย่อนภาษี', 1000, ''),
(62, '1', '41', 'โรงเรียนจุฬาภรณ์ราชวิทยาลัย เลย', '', '2015-10-05', 'แบบธรรมดา', 1000, ''),
(63, '1', '42', 'คุณธนฤทัย', 'ดอนมอญ', '2015-11-04', 'แบบธรรมดา', 2000, '22 ม.4 ต.ชานุมาน อ.ชานุมาน จ.อำนาญเจริญ'),
(64, '1', '43', 'มูลนิธิ วันชัย-อรชร', '', '2015-10-09', 'แบบธรรมดา', 5000, 'มูลนิธิ วันชัย-อรชร \r\n51 ม.2 ถ.ปู่เจ้าสมิงพราย ต.บางหญ้าแพรก อ.พระประเเดง จ.สมุทรปราการ 10130'),
(65, '1', '44', 'คณะนักศึกษาระดับปริญญาโทสาขาวิชานวัตกรรมการพัฒนาอสังหาริมทรัพย์ ', 'คณะสถาปัตยกรรมศาสตร์และการผังเมือง ม.ธรรมศาสตร์ (MIRED) รุ่นที่ 7', '2015-11-17', 'แบบธรรมดา', 2000, ''),
(66, '140', '41', 'คุณศิริภัทร ชินดุษฏีกุล', 'คุณบุศรินทร์ ลือถาวร', '2015-12-01', 'แบบธรรมดา', 500, '');

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
  MODIFY `id_donation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
