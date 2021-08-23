-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: aug. 07, 2021 la 07:37 AM
-- Versiune server: 10.4.18-MariaDB
-- Versiune PHP: 8.0.3

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
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `admins`
--

INSERT INTO `admins` (`admin_id`, `first_name`, `last_name`, `admin_email`, `admin_pass`, `username`) VALUES
('2', 'Szogi', 'Norber2', 'norby2608@gmail.com', '123', 'Darth Vader'),
('3', 'Admin', '84654165', 'szogi_norbert@yahoo.com', '123', 'Admin.84654165.3');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `comments`
--

CREATE TABLE `comments` (
  `comment_id` varchar(255) NOT NULL,
  `comment_course_id` varchar(255) NOT NULL,
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
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `files`
--

CREATE TABLE `files` (
  `file_id` varchar(255) NOT NULL,
  `file_course_id` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` varchar(255) NOT NULL,
  `quiz_course_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `texts`
--

CREATE TABLE `texts` (
  `text_id` varchar(255) NOT NULL,
  `text_course_id` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_email`, `user_pass`, `username`) VALUES
('1', 'User', '84654165tgdfgadfgdfg', 'norbert.szogi99@e-uvt.ro', '123', 'User.84654165.1'),
('2', 'Szogi', 'Norbert', 'dianna_mihaela20@yahoo.com', '123', 'Szogi.Norbert.2');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexuri pentru tabele `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_course_id` (`comment_course_id`);

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
  ADD KEY `file_course_id` (`file_course_id`);

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
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `quiz_course_id` (`quiz_course_id`);

--
-- Indexuri pentru tabele `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`text_id`),
  ADD KEY `text_course_id` (`text_course_id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`quiz_course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `quiz_ibfk_2` FOREIGN KEY (`quiz_id`) REFERENCES `question` (`quiz_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
