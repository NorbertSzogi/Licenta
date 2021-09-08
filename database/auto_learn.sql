-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: sept. 08, 2021 la 03:35 PM
-- Versiune server: 10.4.20-MariaDB
-- Versiune PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `auto_learn`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `admins`
--

CREATE TABLE `admins` (
  `admin_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `admins`
--

INSERT INTO `admins` (`admin_id`, `first_name`, `last_name`, `email`, `pass`, `username`) VALUES
('2', 'Szogi', 'Norbert', 'norby2608@gmail.com', 'afara nu ninge', 'Pikachu'),
('3', 'Admin', '84654165', 'szogi_norbert@yahoo.com', '123', 'Admin.84654165.3'),
('4', 'Szogi', 'Norbert', 'nicolae.colin00@e-uvt.ro', '123', 'Szogi.Norbert.4');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `courses`
--

CREATE TABLE `courses` (
  `course_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `courses`
--

INSERT INTO `courses` (`course_id`, `title`, `image`) VALUES
('1', 'Schimb de ulei', '../uploads/fundal1.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `files`
--

CREATE TABLE `files` (
  `file_id` int(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `files`
--

INSERT INTO `files` (`file_id`, `course_id`, `reference`, `type`) VALUES
(1, '1', '0', '0'),
(2, '1', '0', '0'),
(3, '1', '0', '0'),
(4, '1', '0', '0'),
(5, '1', '../uploads/file5.jpg', 'image'),
(6, '1', '0', '0'),
(7, '1', '../uploads/file7.jpg', 'image'),
(8, '1', '../uploads/file8.jpg', 'image'),
(9, '1', '0', '0'),
(10, '1', '../uploads/file10.jpg', 'image'),
(11, '1', '../uploads/file11.jpg', 'image'),
(13, '1', '0', '0'),
(14, '1', '../uploads/file19.mp4', 'video'),
(15, '1', '0', '0'),
(16, '1', '0', '0'),
(17, '1', '0', '0'),
(18, '1', '0', '0'),
(19, '1', '../uploads/file19.mp4', 'video');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `passwords`
--

CREATE TABLE `passwords` (
  `pass1` varchar(255) NOT NULL,
  `pass2` varchar(255) NOT NULL,
  `pass3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `passwords`
--

INSERT INTO `passwords` (`pass1`, `pass2`, `pass3`) VALUES
('123', '456', '789');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `question`
--

CREATE TABLE `question` (
  `question_id` varchar(255) NOT NULL,
  `quiz_id` varchar(255) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `question`
--

INSERT INTO `question` (`question_id`, `quiz_id`, `question`) VALUES
('1', '1', 'Pentru ce tip de vehicule trebuie facuta revizia de ulei si filtre? '),
('10', '1', 'In cat timp se gripeaza un motor cu ardere interna daca acesta nu contine ulei?'),
('2', '1', 'Ce s-ar intampla daca schimbul de ulei nu s-ar efectua la timp? '),
('3', '1', 'Care este scopul unui ulei pentru motoarele cu ardere interna? '),
('4', '1', 'Care este intervalul mediu de kilometri pentru care trebuie efectuat un schimb de ulei? (In Romania)'),
('5', '1', 'Care dintre urmatoarele filtre se recomanda a fi schimbate odata cu schimbarea uleiului?'),
('6', '1', 'Care este diferenta dintre un filtru de combustibil uzat si un filtru de combustibil nou?'),
('7', '1', 'Ce ulei trebuie utilizat pentru motoarele cu ardere interna? '),
('8', '1', 'Pentru ce este utilizat filtrul de habitaclu?'),
('9', '1', 'Cand trebuie schimbat filtrul de ulei?');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `question_choices`
--

CREATE TABLE `question_choices` (
  `choice_id` varchar(255) NOT NULL,
  `question_id` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `is_correct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `question_choices`
--

INSERT INTO `question_choices` (`choice_id`, `question_id`, `text`, `is_correct`) VALUES
('1', '1', 'Biciclete', '0'),
('10', '3', 'Are rol in racirea antigelului', '0'),
('11', '3', 'Nu are un rol important', '0'),
('12', '3', 'Motoarele cu ardere interna pot functiona si fara ulei', '0'),
('13', '4', '5.000 de kilometri', '0'),
('14', '4', '7.500 de kilometri', '0'),
('15', '4', '20.000 de kilometri', '0'),
('16', '4', '15.000 de kilometri', '1'),
('17', '5', 'Filtrul de combustibil', '0'),
('18', '5', 'Filtrul de ulei', '0'),
('19', '5', 'Filtrul de aer', '0'),
('2', '1', 'Autoturisme', '1'),
('20', '5', 'Toate filtrele mentionate', '1'),
('21', '6', 'Nu exista nici o diferenta intre cele doua filtre', '0'),
('22', '6', 'Filtrul nou este mai eficient, avand risc scazut de a se infunda', '1'),
('23', '6', 'Filtrul de combustibil nu trebuie schimbat niciodata', '0'),
('24', '6', 'Filtrul de combustibil vechi va fi la fel de eficient ca si filtrul de combustibil nou', '0'),
('25', '7', 'Uleiul recomandat de producatorul autoturismului, cu normele specificate de catre acesta', '0'),
('26', '7', 'Se poate folosi orice ulei', '0'),
('27', '7', 'Ulei de floarea soarelui', '0'),
('28', '7', 'Se poate utiliza si un ulei vechi, readitivat', '0'),
('29', '8', 'Filtrul de habitaclu este utilizat pentru filtrarea aerului care ajunge in motor', '0'),
('3', '1', 'Avioane', '0'),
('30', '8', 'Filtrul de habitaclu este utilizat pentru filtrarea aerului care ajunge la pasageri', '1'),
('31', '8', 'Este utilizat pentru a filtra uleiul ars, iesit din motor', '0'),
('32', '8', 'Filtrul de habitaclu este utilizat pentru filtrarea lichidului de racire', '0'),
('33', '9', 'Filtrul de ulei se schimba la fiecare 15.000 de kilometri, indiferent daca uleiul se schimba la fiecare 5.000 de kilometri', '0'),
('34', '9', 'Filtrul de ulei nu se schimba niciodata', '0'),
('35', '9', 'Filtrul de ulei se schimba obligatoriu la orice schimb de ulei, chiar daca autoturismul a rulat doar 500 de kilometri', '1'),
('36', '9', 'Nicio varianta', '0'),
('37', '10', 'Un motor cu ardere interna nu se poate gripa', '0'),
('38', '10', 'Un motor cu ardere interna, fara ulei, se gripeaza in mai putin de 10 minute de exploatare', '1'),
('39', '10', 'Motorul poate functiona si fara ulei pe o durata de 100 de minute', '0'),
('4', '1', 'Trotinete', '0'),
('40', '10', 'Motorul se gripeaza doar daca uleiul depaseste nivelul \"MAX\" de pe joja de ulei', '0'),
('5', '2', 'Autoturismul va lua foc', '0'),
('6', '2', 'Se strica filtrele', '0'),
('7', '2', 'Se gripeaza componentele din motor aflate in miscare', '1'),
('8', '2', 'Nu se intampla nimic', '0'),
('9', '3', 'Reduce frecarea intre componente', '1');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `course_id`) VALUES
('1', '1');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `texts`
--

CREATE TABLE `texts` (
  `text_id` int(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `texts`
--

INSERT INTO `texts` (`text_id`, `course_id`, `text`) VALUES
(1, '1', 'Schimbul de ulei este foarte important pentru vehiculele conventionale, cu motoare cu ardere interna. Fara ulei, aceste motoare ar ceda in cateva minute de rulat la ralanti.'),
(2, '1', 'Uleiul reduce frecarea din motor, in acelasi timp reducand si uzura acestuia. Cu cat un ulei este mai bun, cu atat motorul autovehiculului va fi mai sanatos pe termen lung.'),
(3, '1', 'Un schimb de ulei se efectueaza, in medie, la fiecare 15.000 de kilometri rulati.'),
(4, '1', 'Lucrurile care se efectueaza in timpul unui schimb de ulei, sunt:'),
(5, '1', 'Schimbarea uleiului'),
(6, '1', 'Schimbarea filtrului de ulei. In continuare se poate observa diferenta dintre un filtru de ulei nou si un filtru de ulei vechi, care urmeaza a fi schimbat.'),
(7, '1', 'Filtrul de ulei vechi:'),
(8, '1', 'Filtrul de ulei nou'),
(9, '1', 'Urmatorul filtru care trebuie schimbat odata cu revizia, este filtrul de combustibil. Diferenta dintre un filtrul vechi si unul nou este vizibila, dupa cum urmeaza:'),
(10, '1', 'Filtrul vechi'),
(11, '1', 'Filtrul nou');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `pass`, `username`) VALUES
('1', 'User', '84654', 'norbert.szogi99@e-uvt.ro', '123', 'User.8'),
('2', 'Szogi', 'Norbert', 'dianna_mihaela20@yahoo.com', '123', 'Szogi.Norbert.2'),
('3', 'Szogi', 'Norbert', 'szogi_rozalia@yahoo.com', '123', 'Szogi.Norbert.3');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`email`);

--
-- Indexuri pentru tabele `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_course_id` (`course_id`);

--
-- Indexuri pentru tabele `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexuri pentru tabele `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `file_course_id` (`course_id`);

--
-- Indexuri pentru tabele `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexuri pentru tabele `question_choices`
--
ALTER TABLE `question_choices`
  ADD PRIMARY KEY (`choice_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexuri pentru tabele `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexuri pentru tabele `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`text_id`),
  ADD KEY `text_course_id` (`course_id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
