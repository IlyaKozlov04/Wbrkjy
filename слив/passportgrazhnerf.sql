-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2022 г., 17:15
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
-- Структура таблицы `passportgrazhnerf`
--

CREATE TABLE `passportgrazhnerf` (
  `ID_Pass` int(5) NOT NULL,
  `ID_Rodit` int(5) DEFAULT '1',
  `Seria` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nomer` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `KemVidan` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CrokDeistvia` date DEFAULT '1950-01-01'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `passportgrazhnerf`
--

INSERT INTO `passportgrazhnerf` (`ID_Pass`, `ID_Rodit`, `Seria`, `Nomer`, `Data`, `KemVidan`, `CrokDeistvia`) VALUES
(1, 1, '1111', '333333', '2022-12-13', 'Октябрьское', '1950-01-01'),
(2, 1, '2222', '222222', '2022-12-29', 'Oktybrskoye', '2022-12-26'),
(3, 1, '2222', '222222', '2022-12-01', 'Oktybrskoye', '2022-12-05'),
(4, 1, '2222', '222222', '2022-12-01', 'Oktybrskoye', '2022-12-05'),
(5, 1, '2222', '222222', '2022-12-08', 'Oktybrskoye', '2022-12-21'),
(6, 1, '2222', '222222', '2022-12-22', 'Oktybrskoye', '2008-01-29'),
(7, 1, '2222', '222222', '2022-12-01', 'Oktybrskoye', '2022-12-05'),
(8, 1, '2222', '222222', '2022-12-16', 'Oktybrskoye', '1950-01-01'),
(9, 1, '2222', '222222', '2022-12-16', 'Oktybrskoye', '1950-01-01'),
(10, 1, '2222', '222222', '2072-10-19', 'Oktybrskoye', '2008-10-22'),
(11, 1, '2222', '222222', '2010-01-05', 'Oktybrskoye', '1950-01-01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `passportgrazhnerf`
--
ALTER TABLE `passportgrazhnerf`
  ADD PRIMARY KEY (`ID_Pass`),
  ADD KEY `ID_Rodit` (`ID_Rodit`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `passportgrazhnerf`
--
ALTER TABLE `passportgrazhnerf`
  MODIFY `ID_Pass` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `passportgrazhnerf`
--
ALTER TABLE `passportgrazhnerf`
  ADD CONSTRAINT `passportgrazhnerf_ibfk_1` FOREIGN KEY (`ID_Rodit`) REFERENCES `svedeniaorodit` (`ID_Rodit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
