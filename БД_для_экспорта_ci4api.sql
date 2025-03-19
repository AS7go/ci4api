-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: db
-- Время создания: Мар 17 2025 г., 15:10
-- Версия сервера: 8.4.4
-- Версия PHP: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ci4api`
--
CREATE DATABASE IF NOT EXISTS `ci4api` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `ci4api`;

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `profile_image`) VALUES
(1, 'Олена Коваленко', 'olena.kovalenko@example.com', '+38050123*****', 'olena.jpg'),
(2, 'Жан Дюпон', 'jean.dupont@example.com', '+331123*****', 'jean.jpg'),
(3, 'Юки Танака', 'yuki.tanaka@example.com', '+813123*****', 'yuki.jpg'),
(4, 'София Мюллер', 'sofia.muller@example.com', '+493012*****', 'sofia.jpg'),
(5, 'Карлос Сантос', 'carlos.santos@example.com', '+551112*****', 'carlos.jpg'),
(6, 'Ли Вэй', 'li.wei@example.com', '+861012*****', 'li.jpg'),
(7, 'Айша Ахмед', 'aisha.ahmed@example.com', '+971412*****', 'aisha.jpg'),
(8, 'Дэвид Смит', 'david.smith@example.com', '+121212*****', 'david.jpg'),
(9, 'Изабелла Гарсия', 'isabella.garcia@example.com', '+349112*****', 'isabella.jpg'),
(10, 'Ким Минсу', 'kim.minsu@example.com', '+82212*****', 'kim.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
