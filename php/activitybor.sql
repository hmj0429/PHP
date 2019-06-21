-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-06-21 18:23:43
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
-- 資料表結構 `activitybor`
--

CREATE TABLE `activitybor` (
  `No` int(10) NOT NULL,
  `姓名` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `學號` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `聯絡電話` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `借用地點` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `借用時間` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `大約人數` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `借用原因` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `借用狀況` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `activitybor`
--

INSERT INTO `activitybor` (`No`, `姓名`, `學號`, `聯絡電話`, `借用地點`, `借用時間`, `大約人數`, `借用原因`, `借用狀況`) VALUES
(1, '邱湘淳', 'a1063324', '0968000000', '學宿地下一樓交誼廳', '6/10 晚上7點', '10', '社團活動', ''),
(2, '謝孟儒', 'a1063339', '0989111111', '學宿一樓交誼廳', '6/9 晚上6點', '9', '桌遊比賽', ''),
(3, '王郁婷', 'a1063307', '0951451544', '學宿3樓廚房', '6/6 中午11點', '5', '廚藝同樂會', ''),
(4, '李昱賢', 'a1063335', '0984848443', '學宿2樓洗衣間', '6/2 下午2點', '3', '服務學習', '');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `activitybor`
--
ALTER TABLE `activitybor`
  ADD PRIMARY KEY (`No`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `activitybor`
--
ALTER TABLE `activitybor`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
