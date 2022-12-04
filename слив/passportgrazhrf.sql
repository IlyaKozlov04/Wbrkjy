-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2022 г., 17:17
-- Версия сервера: 5.7.39
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sysbrone`
--

-- --------------------------------------------------------

--
-- Структура таблицы `passportgrazhrf`
--

CREATE TABLE `passportgrazhrf` (
  `ID_Pass` int(5) NOT NULL,
  `ID_Rodit` int(5) NOT NULL,
  `Seria` int(4) DEFAULT NULL,
  `Nomer` int(6) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `KemVidan` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `passportgrazhrf`
--
ALTER TABLE `passportgrazhrf`
  ADD PRIMARY KEY (`ID_Pass`),
  ADD KEY `ID_Rodit` (`ID_Rodit`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `passportgrazhrf`
--
ALTER TABLE `passportgrazhrf`
  MODIFY `ID_Pass` int(5) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `passportgrazhrf`
--
ALTER TABLE `passportgrazhrf`
  ADD CONSTRAINT `passportgrazhrf_ibfk_1` FOREIGN KEY (`ID_Rodit`) REFERENCES `svedeniaorodit` (`ID_Rodit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
