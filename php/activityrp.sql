-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-06-21 18:23:54
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `住宿系統`
--

-- --------------------------------------------------------

--
-- 資料表結構 `activityrp`
--

CREATE TABLE `activityrp` (
  `No` int(10) NOT NULL,
  `姓名` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `學號` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `宿舍棟別` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `聯絡電話` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `報修地點` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `方便的時間` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `故障問題描述` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `維修狀況` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `activityrp`
--

INSERT INTO `activityrp` (`No`, `姓名`, `學號`, `宿舍棟別`, `聯絡電話`, `報修地點`, `方便的時間`, `故障問題描述`, `維修狀況`) VALUES
(1, '謝孟儒', 'a1063339', 'OB608', '0989111111', '學一女宿', '周四晚上', '洗手台堵塞', '已處理'),
(2, '邱湘淳', 'a1063324', 'OF101', '0968000000', '學二女宿', '周一下午', '電燈不亮*2', '未處理'),
(3, '王郁婷', 'a1063307', 'OB612', '0951451544', '學一女宿', '都可', '浴室淹水', '處理中'),
(4, '李昱賢', 'a1063335', '綜宿414', '0984848443', '綜合宿舍', '周五下午', '馬桶堵塞', '未處理');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `activityrp`
--
ALTER TABLE `activityrp`
  ADD PRIMARY KEY (`No`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `activityrp`
--
ALTER TABLE `activityrp`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
