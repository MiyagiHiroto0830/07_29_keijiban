-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 1 月 07 日 14:14
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d29_07`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai_table`
--

CREATE TABLE `kadai_table` (
  `id` int(12) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `kadai_table`
--

INSERT INTO `kadai_table` (`id`, `name`, `content`, `created_at`) VALUES
(1, '宮城大翔', '2', '2020-12-23 14:14:29'),
(2, '宮城大翔', '2', '2020-12-23 14:19:53'),
(3, '宮城大翔', '2', '2020-12-23 15:38:47'),
(4, 'アントニー', '2', '2020-12-23 16:14:23'),
(5, 'アントニー', '2', '2020-12-23 16:23:42'),
(6, '田中', '2', '2020-12-23 16:23:49'),
(7, '宮城大翔', '2', '2020-12-23 16:59:14'),
(8, 'hiroto', '2', '2020-12-23 17:10:23'),
(9, '卍卍卍卍卍', '卍卍卍卍卍卍卍卍', '2020-12-23 17:25:09'),
(10, '卍卍卍卍卍', '寒すぎ卍', '2020-12-23 17:25:24'),
(11, '＠12', '助けてーーー', '2020-12-23 17:37:40'),
(12, '宮城大翔', 'qqqq', '2020-12-26 12:57:39'),
(13, '田中', 'www', '2020-12-26 12:57:47'),
(14, '卍卍卍卍卍', 'qqqq', '2020-12-26 12:57:55'),
(15, '宮城大翔', '助けてーーー', '2020-12-26 12:58:02'),
(16, '3', 'ii', '2020-12-26 12:58:08'),
(17, '宮城大翔', '卍卍卍卍卍卍卍卍', '2020-12-26 13:02:04'),
(18, 'hiroto', 'www', '2020-12-26 13:02:49'),
(19, 'アントニー', '寒すぎ卍', '2021-01-07 22:08:29');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai_table`
--
ALTER TABLE `kadai_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai_table`
--
ALTER TABLE `kadai_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
