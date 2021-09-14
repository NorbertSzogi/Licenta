-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: sept. 09, 2021 la 10:41 PM
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
('2', 'Hasna', 'Diana', 'norby2608@gmail.com', 'afara nu ninge', 'Pikachu');

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
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `comments`
--

INSERT INTO `comments` (`comment_id`, `course_id`, `user_id`, `text`, `author`, `date`) VALUES
(12, '1', '2', 'Un curs foarte intreresant, nu am stiut ca sunt atatea lucruri de stiut pentru fiecare revizie.', 'admin', '2021-09-09 18:54:06'),
(13, '2', '1', 'Aceste sfaturi mi-au fost de folos in ultimul timp, va multumesc', 'user', '2021-09-09 20:24:56'),
(14, '2', '2', 'Va multumesc pentru sfaturile ajutatoare, nu stiam de ce masina mea scoate fum albastru', 'admin', '2021-09-09 20:26:00');

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
('1', 'Schimbul de ulei', '../uploads/fundal1.jpg'),
('2', 'Sfaturi tehnice de intretinere', '../uploads/fundal2.jpg');

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
(4, '1', '../uploads/file4.jpg', 'image'),
(5, '1', '../uploads/file5.jpg', 'image'),
(6, '1', '0', '0'),
(7, '1', '0', '0'),
(8, '1', '0', '0'),
(9, '1', '0', '0'),
(10, '1', '0', '0'),
(11, '1', '0', '0'),
(12, '1', '../uploads/file12.jpeg', 'image'),
(13, '1', '../uploads/file13.jpeg', 'image'),
(14, '1', '0', '0'),
(15, '1', '0', '0'),
(16, '1', '0', '0'),
(17, '1', '0', '0'),
(18, '1', '0', '0'),
(19, '1', '0', '0'),
(20, '1', '0', '0'),
(21, '1', '../uploads/file21.mp4', 'video'),
(22, '2', '0', '0'),
(23, '2', '0', '0'),
(24, '2', '0', '0'),
(25, '2', '0', '0'),
(26, '2', '0', '0'),
(27, '2', '0', '0'),
(28, '2', '0', '0'),
(29, '2', '0', '0'),
(30, '2', '0', '0'),
(31, '2', '0', '0'),
(32, '2', '0', '0'),
(33, '2', '0', '0'),
(34, '2', '0', '0'),
(35, '2', '0', '0'),
(36, '2', '0', '0'),
(37, '2', '0', '0'),
(38, '2', '0', '0'),
(39, '2', '0', '0'),
(40, '2', '0', '0'),
(41, '2', '0', '0');

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
('11', '2', 'Cand trebuie verificata presiunea din anvelope? '),
('12', '2', 'Cand se schimba antigelul?'),
('13', '2', 'Ce se recomanda sa faceti dupa un drum lung, extraurban?'),
('14', '2', 'De ce este bine ca ambreiajul sa fie calcat la pornirea motorului?'),
('15', '2', 'Ce trebuie sa faceti atunci cand motorul este rece?'),
('16', '2', 'Cum trebuie sa procedati daca se aprinde martorul rosu de la ulei in mers?'),
('17', '2', 'Din ce cauza apare fumul albastru la esapament? '),
('18', '2', 'Ce se recomanda pentru a scoate un consum cat mai eficient?'),
('19', '2', 'Ce uleiuri trebuie utilizate la schimbul de ulei de motor?'),
('2', '1', 'Ce s-ar intampla daca schimbul de ulei nu s-ar efectua la timp? '),
('20', '2', 'Din ce cauza apare fumul alb la esapament?'),
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
('25', '7', 'Uleiul recomandat de producatorul autoturismului, cu normele specificate de catre acesta', '1'),
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
('41', '11', 'In fiecare zi', '0'),
('42', '11', 'Cel putin o data pe luna', '1'),
('43', '11', 'O data pe an', '0'),
('44', '11', 'Nu trebuie verificata niciodata, anvelopele nu isi modifica presiunea', '0'),
('45', '12', 'La fiecare 6 luni', '0'),
('46', '12', 'Antigelul se schimba la fiecare 5-10 ani', '1'),
('47', '12', 'Antigelul se schimba la fiecare 1-2 ani', '0'),
('48', '12', 'Antigelul se schimba impreuna cu schimbul de ulei', '0'),
('49', '13', 'Sa opriti motorul imediat cum opriti masina', '0'),
('5', '2', 'Autoturismul va lua foc', '0'),
('50', '13', 'Nu se recomanda nimic special', '0'),
('51', '13', 'Sa lasati motorul pornit la ralanti, pentru a se raci uleiul', '1'),
('52', '13', 'Sa mai parcurgeti cativa kilometri in regim urban', '0'),
('53', '14', 'Pentru a ne asigura ca motorul va porni, chiar daca masina este intr-o viteza', '0'),
('54', '14', 'Pentru a scadea presiunea asupra motorului', '1'),
('55', '14', 'Nu se intampla nimic daca pornim motorul cu ambreiajul apasat', '0'),
('56', '14', 'Se recomanda apasarea ambreiajului pentru a nu crea vibratii in habitaclu', '0'),
('57', '15', 'Sa circulati cu masina turand putin motorul, pentru a exista o ungere eficienta', '1'),
('58', '15', 'Sa turati puternic motorul, pentru a se incalzi cat mai repede ', '0'),
('59', '15', 'Trebuie sa asteptam ca motorul sa ajunga la temperatura optima de functionare', '0'),
('6', '2', 'Se strica filtrele', '0'),
('60', '15', 'Putem pleca la drum imediat ce motorul a pornit', '0'),
('61', '16', 'Va continuati drumul, deoarece nu exista pericole', '0'),
('62', '16', 'Verificati uleiul atunci cand ajungeti la destinatie', '0'),
('63', '16', 'Opriti motorul in cel mai scurt timp', '1'),
('64', '16', 'Trebuie efectuat urmatorul schimb de ulei', '0'),
('65', '17', 'Fumul albastru apare atunci cand masina este subturata in majoritatea timpului', '0'),
('66', '17', 'Fumul albastru apare atunci cand consumul de carburant este foarte crescut', '0'),
('67', '17', 'Este normal ca o masina sa evacueze fum albastru, nefiind nicio problema', '0'),
('68', '17', 'Fumul albastru apare atunci cand masina consuma mult ulei', '1'),
('69', '18', 'Sa circulati agresiv, folosind cat mai mult franele', '0'),
('7', '2', 'Se gripeaza componentele din motor aflate in miscare', '1'),
('70', '18', 'Sa scoateti masina din viteza de fiecare data cand trebuie sa scadeti viteza', '0'),
('71', '18', 'Consumul este acelasi indiferent de stilul de condus', '0'),
('72', '18', 'Utilizarea cat mai frecventa a franei de motor', '1'),
('73', '19', 'Se poate utiliza orice ulei, nu exista o regula', '0'),
('74', '19', 'Trebuie utilizat numai uleiul care are normele recomandate de producator', '1'),
('75', '19', 'Se recomanda utilizarea unui ulei cat mai vascos', '0'),
('76', '19', 'Se recomanda folosirea unui ulei cat mai subtire', '0'),
('77', '20', 'Din cauza consumul crescut de ulei', '0'),
('78', '20', 'Din cauza consumului crescut de carburant', '0'),
('79', '20', 'Alimentarea cu carburantul gresit', '0'),
('8', '2', 'Nu se intampla nimic', '0'),
('80', '20', 'Din cauza consumului de antigel', '1'),
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
('1', '1'),
('2', '2');

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
(1, '1', 'Uleiul este viata unui motor cu ardere interna, deoarece exista componente aflate in miscare. Uleiul reduce frecarea intre componentele din motor aflate in miscare.'),
(2, '1', 'Fara ulei, aceste tipuri de motor s-ar gripa in mai putin de 10 minute. Se intampla acest lucru deoarece va creste temperatura in motor, iar metalele se vor dilata. Daca acest metal(pistoanele) se dilata prea mult, aceste pistoane se vor bloca, astfel se gripeaza.'),
(3, '1', 'In continuare se pot vedea diferentele dintre un piston nou si un piston gripat'),
(4, '1', 'Pistonul nou:'),
(5, '1', 'Pistonul gripat:'),
(6, '1', 'Ce uleiuri trebuie folosite pentru motoarele cu ardere interna? '),
(7, '1', 'Uleiul potrivit pentru fiecare autoturism este uleiul recomandat de producator, cu normele de ungere aferente.'),
(8, '1', 'Un alt rol al uleiului, este cel de racire si de spalare(curatare) a motorului. Acesta contine detergenti. Daca schimburile se efectueaza la timp, motorul va ramane curat si dupa un numar mare de kilometri'),
(9, '1', 'Cand trebuie efectuat schimbul de ulei la un autoturism? '),
(10, '1', 'Depinde de modul de exploatare al motorului respectiv. Daca autoturismul este utilizat in regim de taxi, uleiul se schimba chiar si la 10.000 de kilometri. In schimb, daca autoturismul este utilizat preponderent pe drumuri extraurbane, schimbul de ulei se poate realiza si la 20.000 de kilometri. In Romania, media este de 15.000 de kilometri. '),
(11, '1', 'Diferenta dintre un ulei ars si un ulei nou, este una destul de vizibila. O data ce un ulei este ars, legaturile dintre hidrocarburi se dezintegreaza, astfel pierzandu-si eficienta.'),
(12, '1', 'Ulei ars:'),
(13, '1', 'Ulei nou:'),
(14, '1', 'Mai exista si ulei pentru cutia de viteze. Acest ulei se schimba mai rar decat uleiul pentru motoare. Uleiul la cutiile de viteze se schimba intre 50.000 si 100.000 de kilometri, fiind un ulei special conceput pentru cutiile de viteze, mult mai vascos decat uleiul pentru motor.'),
(15, '1', 'Care sunt filtrele care trebuie schimbate odata cu schimbarea uleiului? '),
(16, '1', 'Filtrul care trebuie schimbat o data cu schimbarea uleiului este filtrul de ulei. Acesta trebuie schimbat la fiecare revizie, indiferent de numarul de kilometri parcursi.'),
(17, '1', 'De obicei, celelalte filtre care se schimba la fiecare revizie, sunt: filtrul de combustibil, filtrul de aer, filtrul de habitaclu.'),
(18, '1', 'Filtrul de combustibil. Acesta se poate schimba si la un interval de 25.000-30.000 de kilometri, dar cel mai bine este sa fie schimbat la fiecare revizie. Daca este utilizat excesiv, acesta se poate infunda, astfel vor aparea probleme la pornirea motorului, neputandu-se alimenta cu combustibil.'),
(19, '1', 'Filtrul de aer. Acesta are rolul de a filtra aerul care intra in motor si urmeaza sa fie utilizat pentru arderea combustibilului. Avand in vedere ca in Romania este mult praf, ar trebui schimbat la fiecare revizie, pentru a asigura un aer cat mai curat motorului.'),
(20, '1', 'Filtrul de habitaclu. Acest filtru nu are legatura cu motorul autovehiculului. Filtrul de habitaclu filtreaza aerul care ajunge la pasageri. Pentru a fi in siguranta impotriva prafului din aer, se recomanda schimbarea acestui filtru la fiecare revizie.'),
(21, '1', 'In continuare, se poate viziona un filmulet in care sunt prezentate cele patru filtre mentionate'),
(22, '2', '1. Verificati presiunea in anvelope cel putin o data pe luna. Mersul cu o alta presiune decat cea recomandata de producator, este periculoasa si poate provoca accidente nedorite. '),
(23, '2', '2. Amortizoarele trebuie schimbate set. De exemplu, daca urmeaza schimbat amortizorul de pe stanga fata, va trebui schimbat si cel de pe dreapta fata. Acelasi lucru se aplica si la arcuri. Neconformarea la acest lucru poate duce la dezechilibrul masinii.'),
(24, '2', '3. Antigelul se schimba la fiecare 5-10 ani. Acesta isi pierde eficienta in timp si ii scade si temperatura de fierbere, respectiv ii urca temperatura de inghet.'),
(25, '2', '4. Lasati motorul pornit la ralanti dupa un drum lung, extraurban. Astfel, uleiul se va raci de la 100-110 grade Celsius la 85-90 de grade Celsius. Este foarte important pentru axul din turbina, care este sensibil la temperatura si calitatea uleiului.'),
(26, '2', '5. Lichidul de frana se schimba la fiecare 2, maxim 3 ani. In mod normal este un lichid higroscopic. In timp, acesta va tinde sa absoarba apa, devenind compresibil, ceea ce va duce la scaderea eficientei sistemului de franare.'),
(27, '2', '6. Cand sunteti cu rotile virate, iar autovehiculul are tractiune pe puntea fata, evitati accelerarile bruste. Una dintre roti va patina si riscati sa distrugeti planetarele.'),
(28, '2', '7. La pornirea motorului, este indicat ca ambreiajul sa fie calcat. Astfel, scade presiunea asupra motorului, iar acesta va porni mai usor.'),
(29, '2', '8. Intotdeauna utilizati uleiuri care au norme recomandate de producatorul masinii. '),
(30, '2', '9. La autoturismele cu tractiune integrala, uleiurile din diferentiale, cutie de transfer si cutie manuala se schimba la trei ani pentru a preveni uzuri premature. '),
(31, '2', '10. Distributia pe curea se schimba impreuna cu antigelul si pompa de apa. '),
(32, '2', '11. Piesele care cedeaza cel mai frecvent sunt bieletele antiruliu. Evitati sa luati viraje cu viteza mare.'),
(33, '2', '12. Cele mai bune brand-uri de filtre: Mann Filter, Mahle si Bosch.'),
(34, '2', '13. Turati motorul incet atunci cand este rece. Uleiul ajunge mai greu la componentele aflate in miscare in motor, astfel ungerea este mai putin eficienta decat atunci cand uleiul este cald.'),
(35, '2', '14. Pentru a face economie de carburant si placute de frana, incercati sa utilizati pe cat posibil frana de motor.'),
(36, '2', '15. Distanta de franare creste exponential o data cu cresterea vitezei. De exemplu, la 100 km/h, distanta de franare este de 35-40 de metri, care creste mult mai mult la viteze mai mari. '),
(37, '2', '16. Cel mai bun consum este atins mergand cu viteza constanta. Intervalul cel mai potrivit pentru a scoate un consum cat mai mic este intre 60 si 100 de kilometri pe ora, in functie de cuplul motorului. '),
(38, '2', '17. Daca se aprinde in mers martorul de ulei cu rosu, opriti in cel mai scurt timp posibil si chemati platforma. Cel mai probabil, a avut loc o problema la motor, iar acesta a ramas fara ulei. '),
(39, '2', '18. In cazul detinerii unui autoturism cu motor Diesel cu filtru de particule, asigurati-va ca cel putin o data la 1000 de kilometri faceti un drum mai lung de 100 km extraurban pentru a asigura o regenerare corecta a acestuia. Este cea mai eficienta metoda de a regenera un filtru de particule.'),
(40, '2', '19. Fum albastru la esapament? Cel mai probabil, motorul consuma mult ulei. De vina pot fi una dintre urmatoarele obiecte: turbosuflanta, epurator, supape, segmenti.'),
(41, '2', '20. Daca motorul consuma antigel, acesta va scoate fum alb pe esapament. Problema poate fi de la garnitura de chiulasa. Daca nu este schimbata la timp, motorul se va distruge.');

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
('1', 'Utilizator', 'Obisnuit', 'norbert.szogi99@e-uvt.ro', '123', 'User.8');

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

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
