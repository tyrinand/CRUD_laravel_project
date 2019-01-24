-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2018 at 10:32 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mylara`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `adr`, `phone`, `mark`, `created_at`, `updated_at`) VALUES
(22, 'Воронцова Ю. В.', 'gjogouch@adelite.com', '461245, г. Саратов, ул. Зелёная, дом 28, квартира 140', '8-(891)-256-83-03', 'Почти отлично', NULL, '2018-07-23 16:33:07'),
(23, 'Беляков А. Г.', 'diudji@lycos.com', '305526, г. Нилово, ул. Балчуг, дом 73, квартира 50', '8-(920)-247-45-06', 'Почти отлично', NULL, NULL),
(24, 'Агафонова С. П.', 'sygeedu@lycos.com', '452807, г. Белгород, ул. Журавлёва, дом 15, квартира 87', '8-(912)-068-54-81', 'Почти отлично', NULL, '2018-07-24 03:39:32'),
(25, 'Ситников Н. А.', 'houviu@usa.net', '613580, г. Камышин, ул. Беговая 3-я, дом 36, квартира 155', '8-(930)-069-99-68', 'Неудовлетворительно', NULL, '2018-07-23 16:32:42'),
(27, 'Петухов С. А.', 'zaexyady@inbox.ru', '443067, г. Кировск, ул. Маяковского, дом 43, квартира 71', '8-(921)-716-51-72', 'Неудолетворительно', NULL, NULL),
(28, 'Корнилова Ж. М.', 'quyeti@mail.ru', '617123, г. Большая Мурта, ул. Бардина, дом 4, квартира 52', '8-(912)-314-60-62', 'Почти отлично', NULL, '2018-07-23 16:27:18'),
(29, 'Воронов Б. Б.', 'cjach@nettaxi.com', '305543, г. Пермь, ул. Сталина, дом 69, квартира 89', '8-914-164-36-75', 'Удовлетворительно', NULL, NULL),
(30, 'Шарова В. М.', 'qujec@lycos.com', '127025, г. Астрахань, ул. Бадюлина, дом 4, квартира 269', '8-912-917-41-63', 'Неудовлетворительно', NULL, NULL),
(31, 'Савина К. П.', 'ljachjabee@xaker.ru', '676800, г. Оршанка, ул. Деревцова, дом 4', '8-930-897-15-92', 'Хорошо', NULL, NULL),
(32, 'Трушкин О.Э.', 'tyrushkin@yandex.ru', 'Брянская обл. Дятьковский р-н. п. Старь ул. Ленина д. 30. кв 70', '8-929-023-47-56', 'Почти отлично', NULL, NULL),
(33, 'Налимова Н.В.', 'natasha@yandex.ru', 'г.Брянск ул. Красноармейская д.40 кв 64', '8-900-048-46-54', 'Превосходно', NULL, NULL),
(34, 'Кузьмина М. Р.', 'cheejjohju@land.ru', '452415, г. Старожилово, ул. Садовая, дом 41, квартира 39', '8-963-669-30-26', 'Хорошо', NULL, NULL),
(35, 'Шершов И. Г.', 'schaecheen@mail.ru', '453873, г. Черемисиново, ул. Авиамоторная улица, дом 88, квартира 7', '8-926-255-86-87', 'Неудовлетворительно', NULL, NULL),
(36, 'Власов С. Б.', 'zhiapos@max.ru', '173514, г. Череповец, ул. Советская, дом 93, квартира 105', '8-(948)-341-81-67', 'Почти отлично', NULL, '2018-07-23 16:32:01'),
(37, 'Максимов П. И.', 'viozeexee@usa.net', '431520, г. Гагарин, ул. Баррикадная, дом 26, квартира 271', '8-947-562-88-39', 'Неудовлетворительно', NULL, NULL),
(38, 'Трифонов А. А.', 'guxigy@newmail.ru', '633004, г. Омутинский, ул. Барболина, дом 53, квартира 71', '8-930-716-84-56', 'Превосходно', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `val` int(11) NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `val`, `des`) VALUES
(1, 0, 'Нет скидки'),
(2, 10, 'Продукты Microsoft'),
(3, 15, 'День Рождения Клиента (Пред. Паспорт)'),
(4, 25, 'Более 5 лицензий'),
(5, 30, 'Десять и более лицензий'),
(6, 20, 'Продукты 1 С');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_07_18_162811_updatetable_user', 2),
(6, '2018_07_23_092650_create_client_table', 3),
(9, '2018_07_24_070150_create_sales_table', 4),
(10, '2018_07_26_142237_create_shops_table', 5),
(11, '2018_07_26_154500_create_softs_table', 6),
(12, '2018_07_26_185152_create_discounts_table', 7),
(13, '2018_07_30_071830_add_forekey', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `count` int(11) NOT NULL,
  `id_client` int(10) UNSIGNED NOT NULL,
  `id_shop` int(11) NOT NULL,
  `id_soft` int(11) NOT NULL,
  `id_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `count`, `id_client`, `id_shop`, `id_soft`, `id_discount`) VALUES
(70, '2017-10-16', 3, 22, 1, 1, 1),
(71, '2017-09-19', 78, 23, 2, 2, 3),
(75, '2017-09-17', 5, 27, 3, 3, 3),
(76, '2017-09-17', 6, 28, 4, 4, 4),
(77, '2017-10-18', 7, 29, 5, 5, 5),
(78, '2017-09-18', 4, 30, 6, 6, 6),
(79, '2017-09-18', 5, 31, 7, 7, 1),
(80, '2017-09-25', 7, 32, 8, 8, 2),
(81, '2017-09-19', 1, 33, 9, 9, 3),
(82, '2017-09-20', 1, 34, 10, 10, 4),
(83, '2017-09-20', 11, 35, 6, 11, 5),
(84, '2017-09-16', 1, 36, 6, 12, 6),
(85, '2017-09-20', 2, 37, 13, 1, 1),
(86, '2017-09-20', 2, 38, 1, 6, 2),
(87, '2017-09-20', 6, 25, 2, 3, 3),
(89, '2017-09-17', 6, 27, 3, 4, 4),
(90, '2017-09-21', 2, 28, 4, 5, 5),
(91, '2017-09-20', 5, 29, 5, 6, 1),
(92, '2017-09-21', 3, 30, 6, 7, 2),
(93, '2018-07-24', 2, 33, 13, 9, 3),
(94, '2018-07-24', 1, 23, 8, 9, 4),
(95, '2018-07-24', 80, 23, 9, 10, 5),
(96, '2018-08-07', 10, 23, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `site`, `fio`, `phone`) VALUES
(1, 'BestHard', 'https://besthard.ru', 'Кириллов Н. Ю.', '8-(929)-595-59-52'),
(2, 'Allsoft', 'https://allsoft.ru', 'Блохин А. А.', '8-(921)-356-85-14'),
(3, 'SoftMark', 'http://softmark.ru/', 'Гришин А. М.', '8-941-445-46-45'),
(4, 'Тензор.РУ', 'http://shop.tensor.ru', 'Калашникова З. В.', '8-912-456-45-81'),
(5, 'Prime', 'http://prime-samara.ru/', 'Савельев П.Ф.', '8-911-821-21-11'),
(6, 'SoftWizard', 'http://www.softwizard.ru/', 'Абрамов Д. О.', '8-958-624-62-82'),
(7, 'Софтлист', 'http://softlist.biz/', 'Русов П.М.', '8-920-355-66-83'),
(8, 'Store-softline', 'http://store.softline.ru', 'Скачков Г. О.', '8-(907)-739-84-11'),
(9, 'SoftKey', 'http://softkey.ru', 'Тайская Ф. У.', '8-(967)-863-13-15'),
(10, 'Легасофт', 'http://legasoft.ru', 'Недашковский В. Э.', '8-(923)-179-20-23'),
(13, 'Мой новый магазин', 'мой сайт', 'Я', '8-(594)-986-46-46');

-- --------------------------------------------------------

--
-- Table structure for table `softs`
--

CREATE TABLE `softs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prise` decimal(19,2) UNSIGNED NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `softs`
--

INSERT INTO `softs` (`id`, `name`, `descr`, `lan`, `prise`, `site`, `count`, `type`) VALUES
(1, '1С Бухгалтерия 8.3 ПРОФ1', 'Автоматизация', 'Русский', '13000.02', 'http://1c.ru', 1000, 'физ. Носитель'),
(2, 'КОМПАС-График v17 на КОМПАС-3D v17', 'САПР', 'Русский', '61000.00', 'http://kompas.ru/', 798, 'электронная подписка'),
(3, 'Avast Pro Antivirus лицензия на 3 года', 'Антивирус', 'Русский', '1800.00', 'https://www.avast.ru/index', 43, 'электронная подписка'),
(4, 'Adobe Acrobat', 'оздание', 'Русский/English', '17000.00', 'http://www.adobe.com/ru/', 15, 'электронная подписка'),
(5, 'Adobe Photoshop CC', 'Фото редактор', 'Русский/English', '22700.00', 'http://www.adobe.com/ru/', 38, 'электронная подписка'),
(6, 'WinDVD 2010', 'видиоплеер', 'Русский', '2000.00', 'http://www.corel.ru', 38, 'электронная подписка'),
(7, 'МойОфис Стандартный', 'Пакет офисных программ', 'Русский', '11000.00', 'https://myoffice.ru/', 89, 'физ. Носитель'),
(8, 'Microsoft Windows 7 Home Basic SP1 (x32)', 'ОС', 'Русский/English', '6200.00', 'https://www.microsoft.com/ru-ru', 475, 'физ. Носитель'),
(9, 'Microsoft Office 2016 Home and Student (x32/x64)', 'Пакет офисных программ', 'Русский', '3400.00', 'https://www.microsoft.com/ru-ru', 388, 'физ. Носитель'),
(10, 'Microsoft Windows Professional 10 32-bit/64-bit', 'ОС', 'Русский/English', '13900.00', 'https://www.microsoft.com/ru-ru', 300, 'физ. Носитель'),
(11, 'Panda Antivirus Pro 2017 на 1 ПК, на 1 год', 'Антивирус', 'Русский/English', '999.00', 'http://www.pandasecurity.com', 488, 'электронная подписка'),
(12, 'Adobe Dreamweaver CC на 1 год', 'веб-дизайн', 'Русский/English', '26004.00', 'http://www.adobe.com/ru', 300, 'электронная подписка');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `dost`) VALUES
(1, 'and', 'tyrinand@yandex.ru', '$2y$10$AOlUjl8oylpDbBA7cdKZbeTmJiL7WI1X/9rHMFR47iojJtwD9Vj5u', 'uKxZrY5l3WuS76zBrs7AipLXcYlZANjL2EnEXp2dey3X5jrEl53pfCi2Jyja', '2018-07-17 13:23:25', '2018-07-17 13:23:25', 0),
(8, 'ivan', 'fsdfs@fdsf.ru', '$2y$10$rxLhEzSzkgHkqQhV1shO9.5Y/8BoyeNm9LqwqX3BRnHG9cPXy4Qta', 'Vnm5PqOs2tLdbgvjab08w5USWgpi2YGYjmMar4RrQ63DSHn2xzkY4nfzrlrJ', '2018-07-18 14:18:29', '2018-07-23 03:58:04', 1),
(9, 'vova', 'vova@yandex.ru', '$2y$10$lLC.hi84UwX7./HtULviheqk8o3DlZHEFmQdsSjK5uZ4y2boVoT.K', 'gllaCnBXnTZbXLn2r5LCHGc77gbkgywLU8cxHa8POrxkrcbBzsrUqVYqCzXM', '2018-07-20 16:12:35', '2018-07-24 03:37:53', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `softs`
--
ALTER TABLE `softs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `softs`
--
ALTER TABLE `softs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_id_client_foreign` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
