-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- ホスト: 127.0.0.1
-- 生成日時: 2014 年 9 朁E03 日 12:41
-- サーバのバージョン: 5.6.11
-- PHP のバージョン: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `no6`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `member_infos`
--

CREATE TABLE IF NOT EXISTS `member_infos` (
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `handle_name` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `tell` int(11) NOT NULL,
  `family` varchar(255) NOT NULL,
  `mail_address` varchar(255) NOT NULL,
  `movie_genre_id` varchar(255) NOT NULL,
  `credit_info` int(16) NOT NULL,
  `favorite_sheet` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `member_infos`
--

INSERT INTO `member_infos` (`id`, `password`, `user_name`, `handle_name`, `birth_date`, `address`, `tell`, `family`, `mail_address`, `movie_genre_id`, `credit_info`, `favorite_sheet`) VALUES
('agunyan1111', 'iijima', '飯島　琢也', 'agunyan', '2014-09-01', 'バチカン', 120888888, '天涯孤独', 'agunyan@gmail.com', '', 0, ''),
('agunyan2222', 'iijima', '飯島　琢子', 'あぐにゃん', '2014-09-07', 'HAL名古屋', 0, '', '弟がいたかも', 'エロ', 0, '端っこ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
