-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 12 2020 г., 11:19
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `i97258hy_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--
-- Создание: Дек 29 2019 г., 18:31
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE `author` (
  `ID` int(11) NOT NULL,
  `Full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`ID`, `Full_name`) VALUES
(1, 'Дэн Браун'),
(3, 'Джон Толкин'),
(4, 'Вирджиния Вулф'),
(5, 'Говард Лавкрафт');

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--
-- Создание: Дек 29 2019 г., 18:31
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `ID` int(11) NOT NULL,
  `ID_autor` int(11) NOT NULL,
  `ID_genre` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `points` float DEFAULT '0',
  `votes` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`ID`, `ID_autor`, `ID_genre`, `name`, `content`, `date`, `points`, `votes`) VALUES
(1, 5, 3, 'Из потустороннего мира', 'Излучение новой электрической машины позволяет человеку видеть странных существ вокруг себя. Неужели они реальны?\r\nЧитайте онлайн полную версию книги «Из потустороннего мира» автора Говарда Лавкрафта на сайте электронной библиотеки MyBook.ru. Скачивайте приложения для iOS или Android и читайте «Из потустороннего мира» где угодно даже без интернета.', '2019-12-14 22:14:29', 0, 0),
(2, 5, 4, 'Зов Ктулху', 'При жизни этот писатель не опубликовал ни одной книги, после смерти став кумиром как массового читателя, так и искушенного эстета и неиссякаемым источником вдохновения для кино- и игровой индустрии; его называли «Эдгаром По ХХ века», гениальным безумцем и адептом тайных знаний; его творчество уникально настолько, что потребовало выделения в отдельный поджанр; им восхищались Роберт Говард и Клайв Баркер, Хорхе Луис Борхес и Айрис Мёрдок.\r\n\r\nОдин из самых влиятельных мифотворцев современности, человек, оказавший влияние не только на литературу, но и на массовую культуру в целом, создатель «Некрономикона» и «Мифов Ктулху» – Говард Филлипс Лавкрафт.\r\n\r\nЧитайте онлайн полную версию книги «Зов Ктулху (сборник)» автора Говарда Лавкрафта на сайте электронной библиотеки MyBook.ru. Скачивайте приложения для iOS или Android и читайте «Зов Ктулху (сборник)» где угодно даже без интернета.', '2019-12-14 22:14:29', 0, 0),
(3, 5, 3, 'Кошмар в Ред Хуке', 'Полицейские начинают расследование по делу Роберта Сайдема – ученого, подозреваемого в связях с контрабандистами. А в это время в Нью-Йорке все чаще и чаще стали пропадать дети. Как связан с этим ученый-фольклорист?..\r\n\r\nЧитайте онлайн полную версию книги «Кошмар в Ред Хуке» автора Говарда Лавкрафта на сайте электронной библиотеки MyBook.ru. Скачивайте приложения для iOS или Android и читайте «Кошмар в Ред Хуке» где угодно даже без интернета.', '2019-12-14 22:14:29', 0, 0),
(4, 3, 6, 'Властелин Колец', 'Джон Рональд Руэл Толкин (3.01.1892–2.09.1973) – писатель, поэт, филолог, профессор Оксфордского университета, родоначальник современной фэнтези. В 1937 году был написан «Хоббит», а в середине 1950-х годов увидели свет три книги «Властелина Колец», повествующие о Средиземье – мире, населенном представителями волшебных рас со сложной культурой, историей и мифологией.\r\n\r\nВ последующие годы эти романы были переведены на все мировые языки, адаптированы для кино, мультипликации, аудиопьес, театра, компьютерных игр, комиксов и породили массу подражаний и пародий.\r\n\r\nСуществует свыше десятка переводов трилогии на русский язык. В данное издание вошел перевод В. Муравьева и А. Кистяковского.', '2019-12-15 08:59:48', 0, 0),
(5, 3, 6, 'Хоббит', 'Сложно представить, что свою знаменитую на весь мир историю о приключениях отважного и смекалистого хоббита и мудрого волшебника Гэндальфа Джон Толкин написал почти играючи, как сказку для своих детей. Сегодня же ей зачитываются ребята и взрослые во всех странах. Добрый, поучительный и веселый рассказ о необыкновенном мире Средиземья и странствиях юркого хоббита Бильбо Бэггинса, двенадцати гномов и мага словно приглашает читателей разделить все приключения, стать участниками событий и даже победить злого дракона! Вместе с главными героями вы пройдете немалый путь, откроете новые города и познакомитесь с эльфами, чародеями, гномами и храбрыми людьми. «Хоббит» считается одной из лучших книг для подросткового возраста.', '2019-12-15 08:59:48', 0, 0),
(6, 4, 5, 'Миссис Дэллоуэй', 'Одно из самых изысканных литературных произведений ХХ века. Шедевр «золотого века» английского модернизма, впервые опубликованный в 1925 г. Роман, входящий в список «100 лучших книг ХХ века», по версии Times.\r\n\r\nНа поверхности в «Миссис Дэллоуэй» происходит очень немногое – немолодая светская дама готовится к приему гостей, мужчина, который когда-то в юности любил ее, возвращается в Лондон после долгой отлучки, молодой ветеран Первой мировой все глубже погружается в черную трясину «военного синдрома». Однако содержание романа далеко не ограничивается ни его сюжетом, ни даже блистательностью изощренной формы, – здесь важно не то, что персонажи говорят или делают, а то, что при этом думают и чувствуют…', '2019-12-15 08:59:48', 0, 0),
(7, 1, 1, 'Код да Винчи', 'Убийство Жака Соньера наделало в Париже много шума – не только благодаря тому, что он был хорошо известен в узких кругах, но и потому, что расположение трупа в точности повторяло картину Да Винчи «Ветрувианский человек». Кто и зачем мог это сделать? Почему полиция подозревает в убийстве известного профессора Гарвардского университета Роберта Лэнгтона и какое отношение к этому делу имеет детектив Софи Нивё? Чтобы доказать свою непричастность к этому делу, Лэнгтон должен найти настоящего убийцу. Но как ему это удастся, если у него на хвосте – вся полиция Парижа, глава которой уверен, что именно Роберт повинен в смерти Соньера? Между тем убийства продолжаются, и никто не в силах остановить загадочного безумца. Это предстоит сделать Роберту и Софи, которые должны не только убежать от полиции, но и понять мотивы настоящего убийцы... Захватывающая детективная история Дэна Брауна была экранизирована в 2006 году, и главные роли в фильме сыграли Том Хэнкс и Одри Тату. Сам же «Код да Винчи» считается одной из самых популярных книг современности — тираж романа превышает 81 миллион экземпляров.', '2019-12-15 08:59:48', 0, 0),
(8, 1, 2, 'Инферно', 'Роман «Инферно» Дэна Брауна придется по вкусу любителям приключенческих историй, загадок, опасностей и детективных сюжетов. В этой книге главным героем является Роберт Лэнгдон, профессор Гарвардского университета, уже знакомый читателям по книге «Код да Винчи». Сюжет «Инферно» разворачивается в 21 веке во Флоренции, но даже здесь герою придется столкнуться с тайнами прошлого и разгадать секрет биологического цилиндра. Сюжет произведения тесно переплетен с «Божественной комедией» Данте Алигьери. «Ищите — и найдете» — эта фраза из Библии помогает герою приблизиться к разгадке. Фирменный почерк Дэна Брауна, динамичный сюжет, переплетение реальности и фантазии — все это читатель найдет в книге «Инферно».', '2019-12-15 08:59:48', 1.33333, 3),
(10, 4, 3, '589', 'sdafsdafsafq546284', '2019-12-28 17:18:02', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `genre`
--
-- Создание: Дек 29 2019 г., 18:31
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE `genre` (
  `ID` int(11) NOT NULL,
  `gname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genre`
--

INSERT INTO `genre` (`ID`, `gname`) VALUES
(1, 'детектив'),
(2, 'триллер'),
(3, 'мистика'),
(4, 'ужасы'),
(5, 'классика'),
(6, 'фентези');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--
-- Создание: Дек 29 2019 г., 18:31
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `password`, `role`) VALUES
(3, 'Александр', 'alex@mail.com', '111111', ''),
(4, 'Anton', 'iamanton45@gmail.com', '222222', 'admin'),
(5, 'Сергей', 'serg@mail.com', '111111', ''),
(10, 'Anton', 'a@a.a', '12121212', ''),
(13, 'Lukas', 'ad@a.afd', '141414', ''),
(14, 'Alexander Gubenko', 'gubacoolest@gmail.com', '111111', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `genre`
--
ALTER TABLE `genre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;