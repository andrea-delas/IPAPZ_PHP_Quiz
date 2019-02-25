-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 06:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `answer_text` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `question_number`, `is_correct`, `answer_text`) VALUES
(1, 1, 0, 'Personal Hypertext Processor'),
(2, 1, 0, 'Private Home Page'),
(3, 1, 1, 'PHP: Hypertext Preprocessor'),
(4, 2, 1, 'echo \"Hello World\";'),
(5, 2, 0, '\"Hello World\";'),
(6, 2, 0, 'Document.Write(\"Hello World\");'),
(7, 3, 0, '&'),
(8, 3, 0, '!'),
(9, 3, 1, '$'),
(10, 4, 0, 'New line'),
(11, 4, 1, ';'),
(12, 4, 0, '&lt;/php&gt;'),
(13, 5, 0, 'VBScript'),
(14, 5, 1, 'Perl i C'),
(15, 5, 0, 'JavaScript'),
(16, 6, 1, 'serverskog'),
(17, 6, 0, 'klijentskog'),
(18, 6, 0, 'poslužiteljskog'),
(19, 7, 1, 'Rasmus Lerdorf'),
(20, 7, 0, 'List Barely'),
(21, 7, 0, 'Wilam Makepiece'),
(22, 8, 1, '&lt;?php…?&gt;'),
(23, 8, 0, '&lt;?php&gt;…&lt;/?&gt;'),
(24, 8, 0, '&lt;script&gt;…&lt;/script&gt;'),
(25, 9, 1, 'GET'),
(26, 9, 0, 'POST'),
(27, 9, 0, 'obje'),
(28, 10, 0, 'GET'),
(29, 10, 1, 'POST'),
(30, 10, 0, 'obje'),
(31, 11, 0, 'count'),
(32, 11, 0, 'sen'),
(33, 11, 1, 'strlen'),
(34, 12, 0, 'jednostrukih navodnika'),
(35, 12, 0, 'dvostrukih navodnika'),
(36, 12, 1, 'oba odgovora su točna'),
(37, 13, 0, 'create myFunction()'),
(38, 13, 1, 'function myFunction()'),
(39, 13, 0, 'new_function myFunction()'),
(40, 14, 0, '$count =+1'),
(41, 14, 1, '$count++;'),
(42, 14, 0, '++count'),
(43, 15, 0, '=='),
(44, 15, 0, '!='),
(45, 15, 1, '==='),
(46, 16, 0, '&lt;!--...--&gt;'),
(47, 16, 0, '&lt;comment&gt;...&lt;/comment&gt;'),
(48, 16, 1, '/*...*/'),
(49, 17, 1, 'tip podatka čija vrijednost može biti samo true ili false'),
(50, 17, 0, 'tip podatka čija je vrijednost cijeli broj'),
(51, 17, 0, 'tip podatka čija je vrijednost niz znakova'),
(52, 18, 0, 'tip podatka čija vrijednost može biti samo true ili false'),
(53, 18, 1, 'tip podatka čija je vrijednost cijeli broj'),
(54, 18, 0, 'tip podatka čija je vrijednost niz znakova'),
(55, 19, 0, 'tip podatka čija vrijednost može biti samo true ili false'),
(56, 19, 0, 'tip podatka čija je vrijednost cijeli broj'),
(57, 19, 1, 'tip podatka čija je vrijednost niz znakova'),
(58, 20, 1, 'točka (.)'),
(59, 20, 0, 'plus (+)'),
(60, 20, 0, 'jednako (=)'),
(61, 21, 1, 'break'),
(62, 21, 0, 'exit'),
(63, 21, 0, 'die '),
(64, 22, 1, 'i'),
(65, 22, 0, 'ili'),
(66, 22, 0, 'Ništa od navedenog'),
(67, 23, 0, 'const'),
(68, 23, 1, 'define'),
(69, 23, 0, 'constant '),
(70, 24, 0, 'automatsko povećavanje operanda'),
(71, 24, 0, 'provjeru vrijednosti dva operanda'),
(72, 24, 1, 'mijenjanje rezultata, pretvara istinit operand u lažan i obrnuto'),
(73, 25, 1, 'provjerava je li izraz u zagradi istinit pa izvršava odgovarajući dio koda'),
(74, 25, 0, 'služi za ponavljanje nekog dijela programskog koda'),
(75, 25, 0, 'ništa od navedenog'),
(76, 26, 0, 'for petlja'),
(77, 26, 0, 'do-while petlja'),
(78, 26, 0, 'foreach petlja'),
(79, 27, 0, 'mogućnost da klase naslijede ponašanja i svojstva drugih klasa '),
(80, 27, 1, 'stvaranje paketa svojstava i metoda u jednoj klasi i upotreba istih'),
(81, 27, 0, 'ideja pomoću koje sagledavamo i stvaramo stvari na apstraktna svojstva i metode'),
(82, 28, 1, 'extends'),
(83, 28, 0, 'construct'),
(84, 28, 0, 'instanceof '),
(85, 29, 0, 'svojstvima i metodama klase može pristupiti s bilo kojeg mjesta u kodu'),
(86, 29, 0, 'svojstvima i metodama klase može pristupati samo iz pripadajuće klase'),
(87, 29, 1, 'svojstvima i metodama klase može pristupati samo iz klase u kojoj su deklarirani'),
(88, 30, 0, 'strtolower'),
(89, 30, 0, 'strlen'),
(90, 30, 1, 'trim '),
(91, 31, 0, 'file'),
(92, 31, 0, 'mtfile'),
(93, 31, 1, 'touch'),
(94, 32, 1, 'rmdir'),
(95, 32, 0, 'remove'),
(96, 32, 0, 'rdir '),
(97, 33, 0, '20'),
(98, 33, 1, '22'),
(99, 33, 0, '8080'),
(100, 34, 0, 'ispis dodatnih podataka o datotekama i podmapama'),
(101, 34, 1, 'ispis svih datoteka, uključujući i skrivene'),
(102, 34, 0, 'ispisuje svojstva mape umjesto njenog sadržaja'),
(103, 35, 1, 'cp'),
(104, 35, 0, 'mv'),
(105, 35, 0, 'oboje'),
(106, 36, 0, 'user, group, other'),
(107, 36, 1, 'read, write, execute'),
(108, 36, 0, 'ništa od navedenog'),
(109, 37, 0, 'točka-zarez'),
(110, 37, 0, 'minus'),
(111, 37, 1, 'backslash'),
(112, 38, 0, 'sudo service apache2 restart'),
(113, 38, 0, 'systemctl restart apache2.service'),
(114, 38, 1, 'obje naredbe su točne'),
(115, 39, 1, 'prazna stranica za unošenje teksta, odnosno uređivač teksta'),
(116, 39, 0, 'ispisat će sadržaj mape u kojoj se nalazimo i svih njezinih podmapa'),
(117, 39, 0, 'ništa od navedenog'),
(118, 40, 1, 'a2ensite'),
(119, 40, 0, 'a2dissite'),
(120, 40, 0, 'ništa od navedenog'),
(121, 41, 0, 'delete database'),
(122, 41, 0, 'erase database'),
(123, 41, 1, 'drop database'),
(124, 42, 0, 'niz znakova za koji se ne zna kolika će biti maksimalna dužina teksta'),
(125, 42, 1, 'niz znakova koji je uvijek zadane dužine'),
(126, 42, 0, 'niz znakova koji je promjenjive dužine'),
(127, 43, 0, 'bilo koji atribut koji nije kandidat za primarni ključ'),
(128, 43, 0, 'primarni ključ sa dva ili više atributa'),
(129, 43, 1, 'atribut koji služi kao primarni ključ drugog entiteta'),
(130, 44, 0, 'jedan zapis iz tablice vezan je za jedan zapis iz druge tablice'),
(131, 44, 1, 'na jedan zapis u prvoj tablici može se odnositi jedan ili više zapisa u drugoj'),
(132, 44, 0, 'jedan ili više zapisa iz prve tablice vezan je sa jednim ili više zapisa iz druge tablice'),
(133, 45, 0, 'jezik za definiciju objekta u bazi podataka'),
(134, 45, 1, 'jezik za manipulaciju objekata u bazi podataka'),
(135, 45, 0, 'jezik za postavljanje dozvola u bazi podataka'),
(136, 46, 0, 'update, drop, truncate, push'),
(137, 46, 1, 'select, insert, update, delete'),
(138, 46, 0, 'union, select, pull, truncate'),
(139, 47, 0, 'dohvat podataka iz tablice'),
(140, 47, 0, 'dodavanje novih redaka u tablicu'),
(141, 47, 1, 'izmjenu podataka u tablici'),
(142, 48, 1, 'da se utvrdi ima li atribut isti uzorak znakova'),
(143, 48, 0, 'da se utvrdi je li vrijednost atributa unutar zadanih vrijednosti'),
(144, 48, 0, 'da se provjeri je li atribut jednak nekoj od vrijednosti'),
(145, 49, 0, 'select'),
(146, 49, 0, 'insert'),
(147, 49, 1, 'drop'),
(148, 50, 0, 'Obuhvaća sve rezultate koji se nalaze u obje tablice koje spajamo'),
(149, 50, 1, 'Obuhvaća sve rezultate prve tablice i, ako postoje,  pridružuje rezultate druge tablice'),
(150, 50, 0, 'Obuhvaća sve rezultate iz obje tablice s time da ih pridružuje gdje veza postoji');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question_text`) VALUES
(1, 'PHP je skraćeni naziv za:'),
(2, 'Kako se ispiše “Hello world” u PHP programskom jeziku:'),
(3, 'S kojim simbolom započinju sve varijable u PHP programskom jeziku:'),
(4, 'Koji je ispravan način za završetak PHP naredbe?'),
(5, 'PHP sintaksa je najsličnija sintaksi kojeg drugog programskog jezika:'),
(6, 'PHP je primjer kakvog skriptnog jezika?'),
(7, 'Otac PHP-a je: '),
(8, 'PHP se piše unutar kojih oznaka?'),
(9, 'Koja od sljedećih metoda šalje podatke putem URL-a:'),
(10, 'Koja od sljedećih metoda može slati neograničenu količinu podataka:'),
(11, 'Koja od sljedećih funkcija vraća broj znakova u stringu?'),
(12, 'Stringove u PHP-a pišemo unutar:'),
(13, 'Koji je ispravan način kreiranja funkcije u PHP-u:'),
(14, 'Koji je ispravan način uvećavanja varijable $count za 1?'),
(15, 'Koji operator se koristi za provjeru jesu li dvije vrijednosti jednake i istog tipa podatka?'),
(16, 'Koji je ispravan način dodavanja komentara u PHP-u?'),
(17, 'Boolean je: '),
(18, 'Integer je: '),
(19, 'String je: '),
(20, 'Kao operator za spajanje (concatenation) koristi se: '),
(21, 'Naredba za sprječavanje izvođenja naredbi koje slijede u switch bloku je:'),
(22, 'Operator (&&) koristi se prilikom uspoređivanja, a zamjenjuje riječ'),
(23, 'Kojom naredbom se definiraju konstante u PHP-u?'),
(24, 'Logički operator (!) koristi se za: '),
(25, 'Naredba if:'),
(26, 'Petlja koja provjerava uvjet na kraju te ako je istinit vraća se na početak petlje zove se: '),
(27, 'Učahurivanje ili enkapsulacija je:'),
(28, 'Nasljeđivanje svojstava i metoda druge klase obavlja se putem ključne riječi:'),
(29, 'Ključna riječ private označava da se:'),
(30, 'Koja funkcija se koristi za micanje praznina s početka i kraja znakovnog niza?'),
(31, 'Koja naredba u Linuxu kreira praznu datoteku?'),
(32, 'Koja naredba u Linuxu se koristi za uklanjanje prazne mape?'),
(33, 'Koji je default-ni port koji se koristi kod FTP-a?'),
(34, 'Opcija -a naredbe ls u Linuxu daje sljedeće:'),
(35, 'Koja naredba služi za kopiranje datoteka i mapa uz navođenje izvora i destinacije?'),
(36, 'Koje su razine prava pristupa na datoteke i mape u Linuxu?'),
(37, 'Ako jednu naredbu u Linuxu želimo napisati u više redaka, na kraj retka pišemo:'),
(38, 'Kako možemo napraviti restart Apache servera?'),
(39, 'Ukoliko upišemo u linux naredbu nano, što će nam se pojaviti?'),
(40, 'Kojom naredbom omogućujemo/uključujemo virtualni host?'),
(41, 'Baza podataka se briše naredbom:'),
(42, 'Char je:'),
(43, 'Strani ključ ili foreign key u radu s bazama podatka je:'),
(44, 'Veza jedan prema više u radu s bazama podataka znači:'),
(45, 'DML jezik je:'),
(46, 'Osnovne DML naredbe koje se koriste u SQL-u su:'),
(47, 'Naredba UPDATE koristi se za:'),
(48, 'Specijalni operator LIKE u radu s bazama podataka koristi se:'),
(49, 'SQL naredba za koju ne vrijedi roll back je:'),
(50, 'Koji od navedenih načina povezivanja tablica pripada LEFT JOIN-u?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(2, 'adelas', 'andrea.kramar28@gmail.com', '78076349b44f63741ff0291e7b862a2e', 'admin'),
(3, 'mdelas', 'mdelas09@gmail.com', 'e6667f91b72fb7a7b8ba429421f9edbc', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
