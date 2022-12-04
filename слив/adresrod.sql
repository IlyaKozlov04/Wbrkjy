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
-- Структура таблицы `adresrod`
--

CREATE TABLE `adresrod` (
  `ID_AdressRod` int(5) NOT NULL,
  `ID_Rodit` int(5) NOT NULL DEFAULT '1',
  `Strana` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Region` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Rayon` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NaselenPynkt` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ylica` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Corpys` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kvartira` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Indeks` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `adresrod`
--

INSERT INTO `adresrod` (`ID_AdressRod`, `ID_Rodit`, `Strana`, `Region`, `Rayon`, `NaselenPynkt`, `Ylica`, `Corpys`, `Kvartira`, `Indeks`) VALUES
(1, 1, 'Алжир', '16	Республика Татарстан (Татарстан)', 'Октябрьский', 'ssss', 'ssdsd', '32', '23', '555555'),
(2, 1, 'Ам. Виргинские острова', '01	Республика Адыгея (Адыгея)', 'выава', 'ываыва', 'аывва', '3', '3', '999999');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adresrod`
--
ALTER TABLE `adresrod`
  ADD PRIMARY KEY (`ID_AdressRod`),
  ADD KEY `ID_Rodit` (`ID_Rodit`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `adresrod`
--
ALTER TABLE `adresrod`
  MODIFY `ID_AdressRod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `adresrod`
--
ALTER TABLE `adresrod`
  ADD CONSTRAINT `adresrod_ibfk_1` FOREIGN KEY (`ID_Rodit`) REFERENCES `svedeniaorodit` (`ID_Rodit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
