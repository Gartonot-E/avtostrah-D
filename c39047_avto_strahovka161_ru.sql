-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 10.19.5.23:3307
-- Время создания: Июл 04 2021 г., 11:46
-- Версия сервера: 10.5.5-MariaDB-1:10.5.5+maria~buster-log
-- Версия PHP: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `c39047_avto_strahovka161_ru`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `content`) VALUES
(1, 'Наша цель-предоставить Клиентам качественный сервис', '<p>«Авто страхование» — крупнейшая частная страховая компания России с универсальным портфелем страховых услуг, включающим как комплексные программы защиты интересов бизнеса, так и широкий спектр страховых продуктов для частных лиц. Компания предлагает более 200 решений по всем ключевым видам страхования.</p>\r\n\r\n<p>Региональная сеть насчитывает 270 филиалов и отделений по всей стране.</p>\r\n\r\n<p>Клиентами Группы «АльфаСтрахование» уже являются более 31 млн человек и свыше 99 тыс. предприятий.</p>\r\n\r\n<p>Надежность и финансовую устойчивость компании подтверждают рейтинги ведущих международных и российских рейтинговых агентств: «ВВ+» по шкале Fitch Ratings, «ВВ+» по шкале S&P и «ruАA+» по шкале «Эксперт РА»</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) UNSIGNED NOT NULL,
  `adress` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `adress`, `phone`, `email`) VALUES
(1, 'Г. Шахты, ул. Маяковская 222', '+7 (999) 999-99-99', 'autostrah@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `experts`
--

CREATE TABLE `experts` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `expirience` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `experts`
--

INSERT INTO `experts` (`id`, `img`, `position`, `name`, `expirience`) VALUES
(1, 'dc2c051400effe9a1ff1c75a8ab2c1ee.png', 'Менеджер', 'Александр', 10),
(2, '26368bc444dac9d2c2d899eef711c0bf.png', 'Продавец', 'Инна', 5),
(3, 'd756209803ee6eb35e9649b5c2634ac9.png', 'Главный директор', 'Андрей', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `offer`
--

INSERT INTO `offer` (`id`, `title`, `content`) VALUES
(1, 'Самый Лёгкий Способ Страховать авто ', 'Разнообразный и богатый опыт говорит нам, что реализация намеченных плановых заданий обеспечивает актуальность поэтапного.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `mail` varchar(256) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `mail`, `password`) VALUES
(27, 'qwerty@list.ru', '$2y$10$wkJY0Y8TB1E45QmzNoMku.o0bRzOW0SVTND.HCzjfMxtJdGoRLW4.'),
(26, 'qwerty@mail.ru', '$2y$10$V5zQNIud8KtlQcBh/Y19NeRhM.ussWFffAL3IsN13zuHkmvvTtU7m'),
(25, 'qwerty@xnjnfv', '$2y$10$lfyHKwbiN2VtdF./EhCGNempuxaXCJSENjS7v2zC2tR9mAUOeO2Lm'),
(24, 'adynasty11@mail.ru', '$2y$10$AewqMeSxK1tQYZQSw9gbWOpHAjx.q5GfxfwajbxlwPm2OWYNq1FCa'),
(23, 'QWERTY@MAIL', '$2y$10$cfzFfUlA.MROEuPasYc6Xu7IyeeCqhfz.N2z94AGICaN4AVS5JwYK'),
(22, 'HHHH@KKK.RU', '$2y$10$wRXg.QRHEArYKPsa8O69IONCQRGKd22l9Q7PKL7amzZ.J4LlSLYsu'),
(21, 'pivneva210984@yandex.ru', '$2y$10$VX1W7ksVzjCygYgPPXG87eGZVVzAdxWe3O.HyyFJ4RiT41nF2T/8u'),
(20, 'stenly21@yandex.ru', '$2y$10$ipD4lUqYQLNhd/ALAs8QdOm70ZZjr6nwpiHxwuz4U7ok/PrFyB05.'),
(19, 'gartonot62@gmail.com', '$2y$10$YI824WZGrF2Q9NKMag.pge1/9HBQm.Tme8Oc6iXBsmG8MyZLAr3wC');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `experts`
--
ALTER TABLE `experts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
