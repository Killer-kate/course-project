-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 24 2022 г., 19:09
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `panda`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_code` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `coin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `name`, `product_code`, `title`, `description`, `coin`, `status`, `count`) VALUES
(3, 'Антонов К.А.', 7, 'Постельное белье белое', 'Постельное белье с пандой', 'Цена: 1200 руб.', 'Оформлено', 1),
(5, 'Антонов К.А.', 2, 'Тетрадь', 'Тетрадь 28 листов', 'Цена: 60 руб.', 'Оформлено', 1),
(6, 'Антонов К.А.', 8, 'Тетрадь', 'Тетрадь с пандой 36 л', 'Цена: 80 руб.', 'Оформлено', 1),
(7, 'Антонов К.А.', 6, 'Брелок', 'Брелок с символикой панды', 'Цена: 150 руб.', 'Оформлено', 1),
(8, 'Антонов К.А.', 10, 'Постельное белье', 'Постельное белье семейное', 'Цена: 2000 руб.', 'Оформлено', 1),
(9, 'Administrator', 9, 'Копилка', 'Парная копилка панды', 'Цена: 340 руб.', 'Корзина', 1),
(10, 'lolipop', 12, 'Тетрадь', 'Тетрадь розовая', 'Цена: 58 руб.', 'Оформлено', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `cartgoods`
--

CREATE TABLE `cartgoods` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cartgoods`
--

INSERT INTO `cartgoods` (`id`, `category`, `image`, `title`, `description`, `price`) VALUES
(1, 'cup', '../image/tovar/9.jpg', 'Чашка', 'Чашка с пандой', '240'),
(2, 'copybook', '../image/tovar/3.jpg', 'Тетрадь', 'Тетрадь 28 листов', '60'),
(4, 'copi', '../image/tovar/10.jpg', 'Копилка', 'Копилка-панда', '200'),
(6, 'bre', '../image/tovar/17.jpg', 'Брелок', 'Брелок с символикой панды', '150'),
(7, 'bel', '../image/tovar/18.jpg', 'Постельное белье белое', 'Постельное белье с пандой', '1200'),
(8, 'copybook', '../image/tovar/5.jpg', 'Тетрадь', 'Тетрадь с пандой 36 л', '80'),
(9, 'copi', '../image/tovar/12.jpg', 'Копилка', 'Парная копилка панды', '340'),
(10, 'bel', '../image/tovar/20.jpg', 'Постельное белье', 'Постельное белье семейное', '2000'),
(11, 'cup', '../image/tovar/6.jpg', 'Кружка', 'Керамическая кружка 200 мл', '250'),
(12, 'copybook', '../image/tovar/1.jpg', 'Тетрадь', 'Тетрадь розовая', '58');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `login`, `password`) VALUES
(9, 'vved@mail.ru', 'Катюшка Введенская', 'WTESRHDF', 'eca9872ff23b7ddef40fdf2eac72ced6'),
(10, 'vved@mail.ru', 'Антонов К.А.', 'kokos', '3805fe56a0cfa92089e4a4f53d230108'),
(11, 'is22vvedenskayaea@artcollege.ru', 'Катя Введенская', 'true', 'b326b5062b2f0e69046810717534cb09'),
(12, 'admi@mail.ru', 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(13, 'is22vvedenskayaea@artcollege.ru', 'Катя Введенская', 'true', '6830278c3088b8059f9b749c93e27960'),
(14, 'vved@mail.ru', 'Антонов К.А.', 'kokos', 'b74c8868b33a1a4204c5c0de5650042f'),
(15, 'vgaez@mail.ru', '\'катана\'', 'eawrestdryftyg', 'ae8558c74ab900f7b655a67e847e695c'),
(17, 'is22vvedenskayaea@artcollege.ru', 'Admi', 'Administrator', '7b7bc2512ee1fedcd76bdc68926d4f7b'),
(18, 'lolipop@mail.ru', 'lolipop', 'MIKO', '26d673372f3229baf49aa24db51bb058');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_code` (`product_code`);

--
-- Индексы таблицы `cartgoods`
--
ALTER TABLE `cartgoods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `cartgoods`
--
ALTER TABLE `cartgoods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`product_code`) REFERENCES `cartgoods` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
