-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2022 г., 11:22
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Структура таблицы `adresreb`
--

CREATE TABLE `adresreb` (
  `ID_Rebenka` int(5) NOT NULL,
  `Strana` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Region` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Rayon` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NaselenPynkt` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ylica` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NomerDoma` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Corpys` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kvartira` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Indeks` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `adresrod`
--

CREATE TABLE `adresrod` (
  `ID_Rodit` int(5) NOT NULL,
  `Strana` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Region` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Rayon` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NaselenPynkt` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ylica` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NomerDoma` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Corpys` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kvartira` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Indeks` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `infrostryktyralagerya`
--

CREATE TABLE `infrostryktyralagerya` (
  `ID_Lager` int(5) NOT NULL,
  `KolvoKorpycov` int(3) DEFAULT NULL,
  `PloshadTerritorii(m2)` int(100) DEFAULT NULL,
  `Pitanie` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SportObject` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DosugObject` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DrObject` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Medicina` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PedSostav` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `oplata`
--

CREATE TABLE `oplata` (
  `ID_Lager` int(5) NOT NULL,
  `NomerCheta` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BIK` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PolnNaimBanka` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KorrespondChet` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INN` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KPP` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `oplata`
--

INSERT INTO `oplata` (`ID_Lager`, `NomerCheta`, `BIK`, `PolnNaimBanka`, `KorrespondChet`, `INN`, `KPP`) VALUES
(1, '12345678912345678912', '123456789', 'СБЕР', '12345678912345678912', '1231231231', '12345678912345678912');

-- --------------------------------------------------------

--
-- Структура таблицы `osninfolagere`
--

CREATE TABLE `osninfolagere` (
  `ID_Lager` int(5) NOT NULL,
  `Opisanie` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TipLagerya` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Adres` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RezhimRaboti` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CmeniPoSesonam` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telephone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `passportgrazhnerf`
--

CREATE TABLE `passportgrazhnerf` (
  `ID_Rodit` int(5) NOT NULL,
  `Seria` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nomer` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `KemVidan` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CrokDeistvia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `passportgrazhnerfreb`
--

CREATE TABLE `passportgrazhnerfreb` (
  `ID_Rebenka` int(5) NOT NULL,
  `Seria` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nomer` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `KemVidan` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `passportgrazhrf`
--

CREATE TABLE `passportgrazhrf` (
  `ID_Rodit` int(5) NOT NULL,
  `Seria` int(4) DEFAULT NULL,
  `Nomer` int(6) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `KemVidan` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `passportgrazhrfreb`
--

CREATE TABLE `passportgrazhrfreb` (
  `ID_Rebenka` int(5) NOT NULL,
  `Seria` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nomer` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `KemVidan` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date DEFAULT NULL,
  `selector` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`ID`, `Name`, `Price`, `data`, `selector`) VALUES
(31, 'dfsdsf', 'Rub', '2022-11-30', NULL),
(32, 'dfsdsf', 'Rub', '2022-11-30', ''),
(33, 'dfsdsf', 'Rub', '2022-11-30', ''),
(34, 'jj', 'dol', '2022-12-23', 'Паспорт гражданина другой страны'),
(35, 'jj', 'dol', '2022-12-23', 'Паспорт гражданина другой страны'),
(36, 'ygbgttg', 'Rub', '2022-11-29', 'Паспорт гражданина другой страны');

-- --------------------------------------------------------

--
-- Структура таблицы `smeni`
--

CREATE TABLE `smeni` (
  `ID_Lager` int(5) NOT NULL,
  `NazvCmeni` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DataNachalo` date DEFAULT NULL,
  `DataConec` date DEFAULT NULL,
  `Price` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `smeni`
--

INSERT INTO `smeni` (`ID_Lager`, `NazvCmeni`, `DataNachalo`, `DataConec`, `Price`) VALUES
(1, 'Осенние каникулы', '2022-12-02', '2022-12-04', 1200);

-- --------------------------------------------------------

--
-- Структура таблицы `svedeniaorebenke`
--

CREATE TABLE `svedeniaorebenke` (
  `ID_Rebenka` int(5) NOT NULL,
  `ID_Rodit` int(5) NOT NULL,
  `Grazhdanstvo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'Россия',
  `FIO` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Document` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'Паспорт гражданина РФ',
  `SNILS` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT '000-000-000 00',
  `NumberTelephone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT '+7-000-000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `svedeniaorodit`
--

CREATE TABLE `svedeniaorodit` (
  `ID_Rodit` int(5) NOT NULL,
  `Status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Родитель',
  `Grazhdanstvo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Россия',
  `FIO` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Document` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Паспорт гражданина РФ',
  `SNILS` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '000-000-000 00',
  `NumberTelephone` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '+7-000-000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `svedeniaorodit`
--

INSERT INTO `svedeniaorodit` (`ID_Rodit`, `Status`, `Grazhdanstvo`, `FIO`, `Birthday`, `Document`, `SNILS`, `NumberTelephone`) VALUES
(1, 'Родитель', 'Абхазия', 'Алексей Михайлович Попов', '2022-11-30', 'Паспорт гражданина другой страны', '12312312333', '+79228287226');

-- --------------------------------------------------------

--
-- Структура таблицы `svidorozhdnerf`
--

CREATE TABLE `svidorozhdnerf` (
  `ID_Rebenka` int(5) NOT NULL,
  `Seria` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nomer` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `KemVidan` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `svidorozhdrf`
--

CREATE TABLE `svidorozhdrf` (
  `ID_Rebenka` int(5) NOT NULL,
  `Seria` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nomer` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `KemVidan` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID_Users` int(5) NOT NULL,
  `UserLogin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserPassword` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Roditel'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID_Users`, `UserLogin`, `UserPassword`, `Role`) VALUES
(1, 'Mama', 'qwerty', 'Roditel'),
(2, 'Organisacia', 'qwerty', 'Organisacia'),
(3, 'Admin', 'qwerty', 'Administrator');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adresreb`
--
ALTER TABLE `adresreb`
  ADD KEY `ID_Rebenka` (`ID_Rebenka`);

--
-- Индексы таблицы `adresrod`
--
ALTER TABLE `adresrod`
  ADD KEY `ID_Rodit` (`ID_Rodit`);

--
-- Индексы таблицы `infrostryktyralagerya`
--
ALTER TABLE `infrostryktyralagerya`
  ADD KEY `ID_Lager` (`ID_Lager`);

--
-- Индексы таблицы `oplata`
--
ALTER TABLE `oplata`
  ADD KEY `ID_Lager` (`ID_Lager`);

--
-- Индексы таблицы `osninfolagere`
--
ALTER TABLE `osninfolagere`
  ADD PRIMARY KEY (`ID_Lager`);

--
-- Индексы таблицы `passportgrazhnerf`
--
ALTER TABLE `passportgrazhnerf`
  ADD KEY `ID_Rodit` (`ID_Rodit`);

--
-- Индексы таблицы `passportgrazhnerfreb`
--
ALTER TABLE `passportgrazhnerfreb`
  ADD KEY `ID_Rebenka` (`ID_Rebenka`);

--
-- Индексы таблицы `passportgrazhrf`
--
ALTER TABLE `passportgrazhrf`
  ADD KEY `ID_Rodit` (`ID_Rodit`);

--
-- Индексы таблицы `passportgrazhrfreb`
--
ALTER TABLE `passportgrazhrfreb`
  ADD KEY `ID_Rebenka` (`ID_Rebenka`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `smeni`
--
ALTER TABLE `smeni`
  ADD KEY `ID_Lager` (`ID_Lager`);

--
-- Индексы таблицы `svedeniaorebenke`
--
ALTER TABLE `svedeniaorebenke`
  ADD PRIMARY KEY (`ID_Rebenka`),
  ADD KEY `ID_Rodit` (`ID_Rodit`);

--
-- Индексы таблицы `svedeniaorodit`
--
ALTER TABLE `svedeniaorodit`
  ADD PRIMARY KEY (`ID_Rodit`);

--
-- Индексы таблицы `svidorozhdnerf`
--
ALTER TABLE `svidorozhdnerf`
  ADD KEY `ID_Rebenka` (`ID_Rebenka`);

--
-- Индексы таблицы `svidorozhdrf`
--
ALTER TABLE `svidorozhdrf`
  ADD KEY `ID_Rebenka` (`ID_Rebenka`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_Users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `osninfolagere`
--
ALTER TABLE `osninfolagere`
  MODIFY `ID_Lager` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `svedeniaorebenke`
--
ALTER TABLE `svedeniaorebenke`
  MODIFY `ID_Rebenka` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `svedeniaorodit`
--
ALTER TABLE `svedeniaorodit`
  MODIFY `ID_Rodit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID_Users` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
