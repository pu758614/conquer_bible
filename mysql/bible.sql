-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bible`
--

-- --------------------------------------------------------

--
-- 資料表結構 `conquer_bible_book`
--

CREATE TABLE `conquer_bible_book` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(16) NOT NULL,
  `chapter_count` int(3) UNSIGNED NOT NULL,
  `testament` tinyint(1) NOT NULL,
  `modify_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `conquer_bible_book`
--

INSERT INTO `conquer_bible_book` (`id`, `name`, `chapter_count`, `testament`, `modify_time`, `create_time`) VALUES
(1, '創世記', 50, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(2, '出埃及記', 40, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(3, '利未記', 27, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(4, '民數記', 26, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(5, '申命記', 34, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(6, '約書亞記', 24, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(7, '士師記', 21, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(8, '路得記', 4, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(9, '撒母耳記上', 31, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(10, '撒母耳記下', 24, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(11, '列王紀上', 22, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(12, '列王紀下', 25, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(13, '歷代志上', 29, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(14, '歷代志下', 36, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(15, '以斯拉記', 10, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(16, '尼希米記', 13, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(17, '以斯帖記', 10, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(18, '約伯記', 42, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(19, '詩篇', 150, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(20, '箴言', 31, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(21, '傳道書', 12, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(22, '雅歌', 8, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(23, '以賽亞書', 66, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(24, '耶利米書', 52, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(25, '耶利米哀歌', 5, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(26, '以西結書', 48, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(27, '但以理書', 12, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(28, '何西阿書', 14, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(29, '約珥書', 3, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(30, '阿摩司書', 9, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(31, '俄巴底亞書', 1, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(32, '約拿書', 4, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(33, '彌迦書', 7, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(34, '那鴻書', 3, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(35, '哈巴谷書', 3, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(36, '西番雅書', 3, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(37, '哈該書', 2, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(38, '撒迦利亞書', 14, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(39, '瑪拉基書', 4, 0, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(40, '馬太福音', 28, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(41, '馬可福音', 16, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(42, '路加福音', 24, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(43, '約翰福音', 21, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(44, '使徒行傳', 28, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(45, '羅馬書', 16, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(46, '哥林多前書', 16, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(47, '哥林多後書', 13, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(48, '加拉太書', 6, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(49, '以弗所書', 6, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(50, '腓利比書', 4, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(51, '歌羅西書', 4, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(52, '帖撒羅尼迦前書', 5, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(53, '帖撒羅尼迦後書', 3, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(54, '提摩太前書', 6, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(55, '提摩太後書', 4, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(56, '提多書', 3, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(57, '腓利門書', 1, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(58, '希伯來書', 13, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(59, '雅各書', 5, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(60, '彼得前書', 5, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(61, '彼得後書', 3, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(62, '約翰一書', 5, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(63, '約翰二書', 1, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(64, '約翰三書', 1, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(65, '猶大書', 1, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09'),
(66, '啟示錄', 22, 1, '2020-02-14 15:43:09', '2020-02-14 15:43:09');

-- --------------------------------------------------------

--
-- 資料表結構 `conquer_bible_enter_msg_log`
--

CREATE TABLE `conquer_bible_enter_msg_log` (
  `id` int(11) UNSIGNED NOT NULL,
  `player_id` int(11) UNSIGNED NOT NULL,
  `chapter_no` int(11) UNSIGNED NOT NULL,
  `book_id` int(11) UNSIGNED NOT NULL,
  `read_record_id` int(11) UNSIGNED NOT NULL,
  `modify_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `conquer_bible_player`
--

CREATE TABLE `conquer_bible_player` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `new_ percent` int(3) UNSIGNED NOT NULL DEFAULT '0',
  `old_ percent` int(3) UNSIGNED NOT NULL DEFAULT '0',
  `all_ percen` int(3) UNSIGNED NOT NULL DEFAULT '0',
  `done_count` int(3) NOT NULL DEFAULT '0',
  `modify_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `conquer_bible_read_record`
--

CREATE TABLE `conquer_bible_read_record` (
  `id` int(11) UNSIGNED NOT NULL,
  `player_id` int(11) UNSIGNED NOT NULL,
  `book_id` int(11) UNSIGNED NOT NULL,
  `chapter_no` int(11) NOT NULL,
  `type` varchar(16) NOT NULL,
  `msg_log_id` int(11) UNSIGNED NOT NULL,
  `modify_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `line_msg_log`
--

CREATE TABLE `line_msg_log` (
  `id` int(11) NOT NULL,
  `user_uuid` char(100) NOT NULL,
  `msg` text NOT NULL,
  `modify_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `line_user`
--

CREATE TABLE `line_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `uuid` varchar(100) NOT NULL,
  `name` varchar(32) NOT NULL,
  `modify_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `conquer_bible_book`
--
ALTER TABLE `conquer_bible_book`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `conquer_bible_enter_msg_log`
--
ALTER TABLE `conquer_bible_enter_msg_log`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `player_id` (`player_id`,`chapter_no`,`book_id`);

--
-- 資料表索引 `conquer_bible_player`
--
ALTER TABLE `conquer_bible_player`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `conquer_bible_read_record`
--
ALTER TABLE `conquer_bible_read_record`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `line_msg_log`
--
ALTER TABLE `line_msg_log`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `line_user`
--
ALTER TABLE `line_user`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `conquer_bible_book`
--
ALTER TABLE `conquer_bible_book`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- 使用資料表 AUTO_INCREMENT `conquer_bible_enter_msg_log`
--
ALTER TABLE `conquer_bible_enter_msg_log`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- 使用資料表 AUTO_INCREMENT `conquer_bible_player`
--
ALTER TABLE `conquer_bible_player`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `conquer_bible_read_record`
--
ALTER TABLE `conquer_bible_read_record`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- 使用資料表 AUTO_INCREMENT `line_msg_log`
--
ALTER TABLE `line_msg_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- 使用資料表 AUTO_INCREMENT `line_user`
--
ALTER TABLE `line_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
