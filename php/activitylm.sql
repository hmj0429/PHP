-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-06-21 18:23:49
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
-- 資料表結構 `activitylm`
--

CREATE TABLE `activitylm` (
  `No` int(10) NOT NULL,
  `標題` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `學號` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `姓名` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `留言` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `activitylm`
--

INSERT INTO `activitylm` (`No`, `標題`, `學號`, `姓名`, `留言`, `time`) VALUES
(1, '求掛!!學宿警鈴又故障!?', 'a1063324', '邱湘淳', '可惡，這學期已經是第三次在半夜被吵醒了!!', '2019/06/22  12:50:45'),
(2, '宿舍會有門禁嗎??', 'a1063339', '謝孟儒', '擔心半夜想去夜唱卻被關在外面QQ', '2019/06/22  12:53:22'),
(3, '如何預防冰箱東西被偷吃?', 'a1063307', '王郁婷', '聽說同學上次冰水果就被偷吃了，想知道預防東西被偷吃的方法!!', '2019/06/22  12:58:18'),
(4, '每天都快被吵死了!!', 'a1063335', '李昱賢', '隔壁房的每天都在半夜打麻將啦，有沒有人可以處理一下?', '2019/06/22  01:00:15');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `activitylm`
--
ALTER TABLE `activitylm`
  ADD PRIMARY KEY (`No`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `activitylm`
--
ALTER TABLE `activitylm`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
