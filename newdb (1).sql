-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 28 2021 г., 06:47
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`) VALUES
(1, 'Игорь', '8-888-888-88-88'),
(2, 'Валерия', '8-223-444-90-88'),
(3, 'Анатолий', '8-999-999-99-99'),
(4, 'Виктория', '8-045-054-99-99'),
(5, 'Анастасия', '8-777-777-77-77'),
(6, 'Вероника', '8-111-777-77-77'),
(7, 'Ангелина', '8-555-555-55-55'),
(8, 'Николай', '8-333-333-33-33'),
(9, 'Александр', '8-995-954-92-12'),
(10, 'Аркадий', '8-705-752-25-31');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `password`) VALUES
(3, 'loggg', 'names', 'intel.27@bk.ru', '$2y$10$zcYHg.EI2r5c4GY2PoGfr.4/6NnyAIpO.MnMy2Jky4fevP67FA9UO'),
(4, 'log2', 'fullname', 'qwe@qwe.qwe.qwe', '$2y$10$fKPVXeKV40mIwFCHP0ub0.IOITOsr6cW9nBYyJwkR0moMOLdavwgW'),
(5, 'log3', 'firstfullname', 'q@q.q', '$2y$10$sm4uhXQ39EBCaxvYAmOG2OQT.hU7M/HTagvSSqFfTBBv0A8lyVFiu');

-- --------------------------------------------------------

--
-- Структура таблицы `users_contacts`
--

CREATE TABLE `users_contacts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `contact_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `users_contacts`
--

INSERT INTO `users_contacts` (`id`, `user_id`, `contact_id`) VALUES
(17, 3, 5),
(19, 3, 4),
(20, 3, 10),
(21, 3, 3),
(22, 4, 8),
(23, 4, 5),
(24, 4, 2),
(25, 5, 2),
(26, 5, 6),
(27, 5, 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_contacts`
--
ALTER TABLE `users_contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users_contacts`
--
ALTER TABLE `users_contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
