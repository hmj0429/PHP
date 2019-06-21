-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-06-21 18:23:59
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
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `No` int(10) NOT NULL,
  `Noo` int(20) NOT NULL,
  `姓名` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `留言` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `message`
--

INSERT INTO `message` (`No`, `Noo`, `姓名`, `留言`, `time`) VALUES
(1, 1, '王郁婷', '宿舍品質不意外哈哈哈', '2019/06/22  01:01:22'),
(2, 1, '林湘縈', '幸好我已經搬出去了==', '2019/06/22  01:02:19'),
(3, 1, '謝孟儒', '下次聽到警報聲都不知道要不要逃了QQ', '2019/06/22  01:03:29'),
(4, 2, '邱湘淳', '不會啦哈哈哈，宿舍沒有門禁的', '2019/06/22  01:04:35'),
(5, 2, '王郁婷', '其實有喔，樓上不要騙人啦XD', '2019/06/22  01:05:36'),
(6, 2, '林湘縈', '沒有門禁啦www，只是晚上10點以後異性不可以進宿舍喔', '2019/06/22  01:07:17'),
(7, 3, '李昱賢', '可以考慮放放過期的東西', '2019/06/22  01:07:50'),
(8, 3, '邱湘淳', '只能把食物用袋子層層保護起來了QQ', '2019/06/22  01:08:14'),
(9, 3, '謝孟儒', '上次我的麵包也被偷吃了嗚嗚嗚', '2019/06/22  01:11:26'),
(10, 4, '王郁婷', '可以把音樂放的超大聲哈哈哈', '2019/06/22  01:12:40'),
(11, 4, '邱湘淳', '順便跟著唱，越大聲越好www', '2019/06/22  01:14:27'),
(12, 4, '林湘縈', '可以跟宿舍辦公室討論看看', '2019/06/22  01:18:53');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`No`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
