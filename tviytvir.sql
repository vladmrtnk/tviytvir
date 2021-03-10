-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Мар 10 2021 г., 11:13
-- Версия сервера: 8.0.23-0ubuntu0.20.04.1
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tviytvir`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `psswrd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `psswrd`) VALUES
(1, 'admin', '$2y$10$xkVPJITC6dxAiFliyteWyOrOyBMkd9koAxoxweTQLNX9wWUR8aSRi');

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL COMMENT 'Ім''я письменника',
  `last_name` varchar(255) NOT NULL COMMENT 'Прізвище письменника',
  `short_biography` text NOT NULL COMMENT 'Коротка частина біографії',
  `biography` text NOT NULL COMMENT 'Біографія'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`, `short_biography`, `biography`) VALUES
(1, 'Тарас', 'Шевченко', 'Коротка частина біографії шевченка', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed mattis ullamcorper imperdiet. In vitae enim a ante sagittis vestibulum nec vitae quam. Sed euismod commodo egestas. Fusce varius justo a porta posuere. Sed tincidunt accumsan ipsum quis tristique. Sed quis mi id tellus eleifend semper vitae non nisl. Vestibulum ullamcorper fermentum enim. Mauris tristique ipsum et euismod varius. Curabitur sollicitudin ut magna sed pretium. Aenean condimentum aliquet tortor, in consequat felis pharetra quis. Vivamus vehicula sollicitudin congue.'),
(9, 'Іван', 'Франко', 'оіао ілдоа віод лоів даоідлоаів ода і', ' івлоа діво далів дла іждвл ажідвєаж ів а '),
(14, 'Ліна', 'Костенко', 'Коротка частина біографії ліни ава в лаов лоа ва', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed mattis ullamcorper imperdiet. In vitae enim a ante sagittis vestibulum nec vitae quam. Sed euismod commodo egestas. Fusce varius justo a porta posuere. Sed tincidunt accumsan ipsum quis tristique. Sed quis mi id tellus eleifend semper vitae non nisl. Vestibulum ullamcorper fermentum enim. Mauris tristique ipsum et euismod varius. Curabitur sollicitudin ut magna sed pretium. Aenean condimentum aliquet tortor, in consequat felis pharetra quis. Vivamus vehicula sollicitudin congue.'),
(16, 'Леся ', 'Українка', 'Це коротка біографія лесі', 'Це рибна коротка мальдіви біографія лесі Це рибна коротка мальдіви біографія лесі Це рибна коротка мальдіви біографія лесі Це рибна коротка мальдіви біографія лесі Це рибна коротка мальдіви біографія лесі Це рибна коротка мальдіви біографія лесі Це рибна коротка мальдіви біографія лесі Це рибна коротка мальдіви біографія лесі \r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `writings`
--

CREATE TABLE `writings` (
  `writing_id` int NOT NULL COMMENT 'ID твору',
  `author_id` int NOT NULL COMMENT 'ID автора',
  `title` varchar(255) NOT NULL COMMENT 'Назва твору',
  `full_text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Текст твору'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `writings`
--

INSERT INTO `writings` (`writing_id`, `author_id`, `title`, `full_text`) VALUES
(1, 1, 'Думки шеви', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed mattis ullamcorper imperdiet. In vitae enim a ante sagittis vestibulum nec vitae quam. Sed euismod commodo egestas. Fusce varius justo a porta posuere. Sed tincidunt accumsan ipsum quis tristique. Sed quis mi id tellus eleifend semper vitae non nisl. Vestibulum ullamcorper fermentum enim. Mauris tristique ipsum et euismod varius. Curabitur sollicitudin ut magna sed pretium. Aenean condimentum aliquet tortor, in consequat felis pharetra quis. Vivamus vehicula sollicitudin congue.'),
(2, 1, 'Думки тарасика', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed mattis ullamcorper imperdiet. In vitae enim a ante sagittis vestibulum nec vitae quam. Sed euismod commodo egestas. Fusce varius justo a porta posuere. Sed tincidunt accumsan ipsum quis tristique. Sed quis mi id tellus eleifend semper vitae non nisl. Vestibulum ullamcorper fermentum enim. Mauris tristique ipsum et euismod varius. Curabitur sollicitudin ut magna sed pretium. Aenean condimentum aliquet tortor, in consequat felis pharetra quis. Vivamus vehicula sollicitudin congue.'),
(3, 9, 'Франкові роздуми', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed mattis ullamcorper imperdiet. In vitae enim a ante sagittis vestibulum nec vitae quam. Sed euismod commodo egestas. Fusce varius justo a porta posuere. Sed tincidunt accumsan ipsum quis tristique. Sed quis mi id tellus eleifend semper vitae non nisl. Vestibulum ullamcorper fermentum enim. Mauris tristique ipsum et euismod varius. Curabitur sollicitudin ut magna sed pretium. Aenean condimentum aliquet tortor, in consequat felis pharetra quis. Vivamus vehicula sollicitudin congue.'),
(7, 14, 'Подорож ліни', 'іа іоаідов даіо доваід оваліо доіад воа ідлова діов лдіо адло іа іоаідов даіо доваід оваліо доіад воа ідлова діов лдіо адло іа іоаідов даіо доваід оваліо доіад воа ідлова діов лдіо адло іа іоаідов даіо доваід оваліо доіад воа ідлова діов лдіо адло іа іоаідов даіо доваід оваліо доіад воа ідлова діов лдіо адло \r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `writings`
--
ALTER TABLE `writings`
  ADD PRIMARY KEY (`writing_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `writings`
--
ALTER TABLE `writings`
  MODIFY `writing_id` int NOT NULL AUTO_INCREMENT COMMENT 'ID твору', AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
