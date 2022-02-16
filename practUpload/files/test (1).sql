-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 15 2022 г., 07:05
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id_main` int(11) NOT NULL,
  `description` text NOT NULL,
  `name_origin` text NOT NULL,
  `path` text NOT NULL,
  `date_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id_main`, `description`, `name_origin`, `path`, `date_upload`) VALUES
(15, 'Chek', 'chek.png', '/files/', '2022-02-14 00:00:00'),
(117, '???', '???.png', '/files/', '2022-02-14 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `myarttable`
--

CREATE TABLE `myarttable` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `myarttable`
--

INSERT INTO `myarttable` (`id`, `text`, `description`, `keywords`) VALUES
(15, 'test1r', 'test2r', 'test3r'),
(108, 'test1', 'test2', 'test3'),
(109, 'test1', 'test2', 'test3'),
(110, 'test1', 'test2', 'test3'),
(111, 'test1', 'test2', 'test3'),
(112, 'test1ггг', 'test2гггг', 'test3ггггг'),
(113, 'test1', 'test2', 'test3'),
(114, 'test1', 'test2', 'test3'),
(115, 'test1', 'test2', 'test3'),
(116, 'test1', 'test2', 'test3'),
(117, 'test1', 'test2ghfg', 'test3'),
(118, 'test1', 'test2', 'test3'),
(119, 'test1', 'test2', 'test3'),
(120, 'test1', 'test2', 'test3'),
(122, 'test1', 'test2', 'test3'),
(123, 'test1', 'test2n', 'test3'),
(124, 'test1', 'test2', 'test3fghfgj'),
(126, 'test1', 'test2ghfg', 'test3'),
(127, 'test1', 'test2', 'test3'),
(137, 'test1', 'test2n65567=', 'test3'),
(99, 'test1-', 'test2o', 'test3fghfgj'),
(102, 'test156456=1', 'test2888', 'test3888'),
(105, 'test156456', 'test2888', 'test3аопро'),
(97, 'test156456', 'test2888', 'test3аопро'),
(79, 'test188', 'test2ghfj', 'test3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD UNIQUE KEY `id_main` (`id_main`);

--
-- Индексы таблицы `myarttable`
--
ALTER TABLE `myarttable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `myarttable`
--
ALTER TABLE `myarttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
