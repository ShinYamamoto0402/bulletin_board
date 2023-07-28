-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-07-28 16:11:15
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `bulletin_board`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `article_details`
--

CREATE TABLE `article_details` (
  `id` int(255) NOT NULL COMMENT 'Article Id',
  `contents` varchar(255) DEFAULT NULL COMMENT 'Article Contents',
  `created_at` timestamp NULL DEFAULT current_timestamp() COMMENT 'Posting Date',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Update Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'User Id',
  `username` varchar(50) DEFAULT NULL COMMENT 'User Name',
  `password` varchar(50) DEFAULT NULL COMMENT 'User Password',
  `created_at` datetime DEFAULT current_timestamp() COMMENT 'Registration Date',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Update Date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `article_details`
--
ALTER TABLE `article_details`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `article_details`
--
ALTER TABLE `article_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Article Id';

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User Id';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
