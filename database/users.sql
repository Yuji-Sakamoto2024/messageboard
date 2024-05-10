-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 5 月 10 日 12:31
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `message_board`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT 'other',
  `hobbies` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `birthday` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created`, `modified`, `name`, `gender`, `hobbies`, `photo`, `birthday`) VALUES
(13, 'y.sakamoto2030@gmail.com', '123', '2024-05-10 12:13:45', '2024-05-10 12:22:11', 'a', 'female', 'asss', '/images/663df553df69b.png', '22333'),
(14, 'y.sakamoto2030@gmail.com', '123', '2024-05-10 12:16:51', '2024-05-10 12:16:51', NULL, 'other', NULL, NULL, NULL),
(15, 'y.sakamoto2034@gmail.com', '1234567', '2024-05-10 12:21:34', '2024-05-10 12:21:34', NULL, 'other', NULL, NULL, NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
