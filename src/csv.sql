-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 27 Eki 2022, 01:11:39
-- Sunucu sürümü: 10.3.34-MariaDB-cll-lve
-- PHP Sürümü: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `feyzaer1_mivento`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `csv`
--

CREATE TABLE `csv` (
  `employee_id` int(11) NOT NULL,
  `name_` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `points` varchar(10) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `csv`
--

INSERT INTO `csv` (`employee_id`, `name_`, `surname`, `email`, `points`, `phone`) VALUES
(1, 'Rina', 'Sweeney', 'urna.Nunc@Integertincidunt.com', '5306300252', '566'),
(2, 'Vivien', 'Hall', 'faucibus.id@aliquetmetus.edu', '534886681', '2829'),
(3, 'Clark', 'Waters', 'at@loremvitaeodio.net', '5321711590', '3637'),
(4, 'Kalia', 'Berg', 'a@vehicula.net', '53848752', '4179'),
(5, 'Aladdin', 'Hayden', 'Maecenas.mi@egetmollis.org', '5324387843', '3739'),
(6, 'Kylynn', 'Macdonald', 'hendrerit.consectetuer@utlacusNulla.org', '535287615', '2262'),
(7, 'Prescott', 'Castro', 'leo.elementum@utnullaCras.com', '531544982', '4017'),
(8, 'Linus', 'Stein', 'sit.amet@Donec.net', '534285436', '2081'),
(9, 'Daphne', 'Giles', 'egestas.ligula@necenimNunc.ca', '537662108', '533'),
(10, 'Donovan', 'Hodge', 'Mauris.vestibulum.neque@CurabiturmassaVestibulum.com', '532894203', '4354'),
(11, 'Malik', 'Harrington', 'non@Quisqueornare.edu', '5302242891', '2580'),
(12, 'Blair', 'Hicks', 'ornare.Fusce@diamatpretium.com', '5323146931', '91'),
(13, 'Scarlet', 'Pate', 'orci.quis@sagittisplaceratCras.co.uk', '5328123221', '291'),
(14, 'Hannah', 'Mcdowell', 'rutrum@tristiqueneque.org', '5324795456', '3170'),
(15, 'Murphy', 'Kennedy', 'a.neque.Nullam@Incondimentum.co.uk', '539437949', '3155'),
(16, 'Felix', 'Newman', 'egestas@diam.edu', '532805365', '2585'),
(17, 'Caesar', 'Rojas', 'Praesent.interdum@acorci.co.uk', '5327325529', '2447'),
(18, 'Octavius', 'Shaffer', 'ipsum@et.ca', '5323037164', '2446'),
(19, 'Roanna', 'Kramer', 'ac.metus@arcuVestibulum.co.uk', '535699006', '1862'),
(20, 'Nathaniel', 'Wooten', 'lacus.vestibulum@vitaerisusDuis.ca', '5325625352', '80'),
(21, 'Karen', 'Hill', 'facilisis@urna.edu', '539634135', '4629'),
(22, 'Marny', 'Warner', 'Donec.sollicitudin@blanditcongueIn.co.uk', '539211317', '2619'),
(23, 'Upton', 'Lynch', 'pede.Cum.sociis@nequeSedeget.edu', '536292542', '3069'),
(24, 'Callie', 'Bishop', 'ipsum.Suspendisse@sitametrisus.com', '5324928898', '2943'),
(25, 'Xaviera', 'Barton', 'ultrices.Duis@tristique.org', '5323366890', '985'),
(26, 'Hedwig', 'Benton', 'Vivamus@imperdiet.co.uk', '5327677142', '2434'),
(27, 'Nolan', 'Bass', 'Aliquam@ipsumPhasellusvitae.com', '5324682431', '292'),
(28, 'Armand', 'Hess', 'Proin@enim.org', '5325917179', '215'),
(29, 'Leroy', 'George', 'sit.amet@Donec.net', '5329835280', '3249'),
(30, 'Catherine', 'Hammond', 'ut.lacus.Nulla@lorem.org', '5325716200', '4912'),
(31, 'Thane', 'Stanley', 'arcu.et@aliquamadipiscing.edu', '5324588610', '1282'),
(32, 'Yetta', 'Watson', 'neque.Sed@arcu.ca', '539544240', '933'),
(33, 'Oprah', 'Jacobs', 'odio@Donec.ca', '531124051', '4828'),
(34, 'Zia', 'Kirk', 'et.lacinia.vitae@leo.net', '533972214', '2213'),
(35, 'Giselle', 'Harvey', 'at.pede@orci.edu', '5324682431', '4467'),
(36, 'Hedy', 'Murray', 'quis.arcu.vel@acarcu.org', '534112469', '4648'),
(37, 'Kendall', 'Dudley', 'ipsum@et.ca', '531224849', '4666'),
(38, 'Christopher', 'Warren', 'mus@acmetus.couk', '5327551478', '3909'),
(39, 'Belle', 'Knowles', 'ÅŸut.mi@pede.couk', '5326641437', '25'),
(40, 'Rina', 'Sweeney', 'urna.Nunc@Integertincidunt.com', '5306300252', '566'),
(41, 'Vivien', 'Hall', 'faucibus.id@aliquetmetus.edu', '534886681', '2829'),
(42, 'Clark', 'Waters', 'at@loremvitaeodio.net', '5321711590', '3637'),
(43, 'Kalia', 'Berg', 'a@vehicula.net', '53848752', '4179'),
(44, 'Aladdin', 'Hayden', 'Maecenas.mi@egetmollis.org', '5324387843', '3739'),
(45, 'Kylynn', 'Macdonald', 'hendrerit.consectetuer@utlacusNulla.org', '535287615', '2262'),
(46, 'Prescott', 'Castro', 'leo.elementum@utnullaCras.com', '531544982', '4017'),
(47, 'Linus', 'Stein', 'sit.amet@Donec.net', '534285436', '2081'),
(48, 'Daphne', 'Giles', 'egestas.ligula@necenimNunc.ca', '537662108', '533'),
(49, 'Donovan', 'Hodge', 'Mauris.vestibulum.neque@CurabiturmassaVestibulum.com', '532894203', '4354'),
(50, 'Malik', 'Harrington', 'non@Quisqueornare.edu', '5302242891', '2580'),
(51, 'Blair', 'Hicks', 'ornare.Fusce@diamatpretium.com', '5323146931', '91'),
(52, 'Scarlet', 'Pate', 'orci.quis@sagittisplaceratCras.co.uk', '5328123221', '291'),
(53, 'Hannah', 'Mcdowell', 'rutrum@tristiqueneque.org', '5324795456', '3170'),
(54, 'Murphy', 'Kennedy', 'a.neque.Nullam@Incondimentum.co.uk', '539437949', '3155'),
(55, 'Felix', 'Newman', 'egestas@diam.edu', '532805365', '2585'),
(56, 'Caesar', 'Rojas', 'Praesent.interdum@acorci.co.uk', '5327325529', '2447'),
(57, 'Octavius', 'Shaffer', 'ipsum@et.ca', '5323037164', '2446'),
(58, 'Roanna', 'Kramer', 'ac.metus@arcuVestibulum.co.uk', '535699006', '1862'),
(59, 'Nathaniel', 'Wooten', 'lacus.vestibulum@vitaerisusDuis.ca', '5325625352', '80'),
(60, 'Karen', 'Hill', 'facilisis@urna.edu', '539634135', '4629'),
(61, 'Marny', 'Warner', 'Donec.sollicitudin@blanditcongueIn.co.uk', '539211317', '2619'),
(62, 'Upton', 'Lynch', 'pede.Cum.sociis@nequeSedeget.edu', '536292542', '3069'),
(63, 'Callie', 'Bishop', 'ipsum.Suspendisse@sitametrisus.com', '5324928898', '2943'),
(64, 'Xaviera', 'Barton', 'ultrices.Duis@tristique.org', '5323366890', '985'),
(65, 'Hedwig', 'Benton', 'Vivamus@imperdiet.co.uk', '5327677142', '2434'),
(66, 'Nolan', 'Bass', 'Aliquam@ipsumPhasellusvitae.com', '5324682431', '292'),
(67, 'Armand', 'Hess', 'Proin@enim.org', '5325917179', '215'),
(68, 'Leroy', 'George', 'sit.amet@Donec.net', '5329835280', '3249'),
(69, 'Catherine', 'Hammond', 'ut.lacus.Nulla@lorem.org', '5325716200', '4912'),
(70, 'Thane', 'Stanley', 'arcu.et@aliquamadipiscing.edu', '5324588610', '1282'),
(71, 'Yetta', 'Watson', 'neque.Sed@arcu.ca', '539544240', '933'),
(72, 'Oprah', 'Jacobs', 'odio@Donec.ca', '531124051', '4828'),
(73, 'Zia', 'Kirk', 'et.lacinia.vitae@leo.net', '533972214', '2213'),
(74, 'Giselle', 'Harvey', 'at.pede@orci.edu', '5324682431', '4467'),
(75, 'Hedy', 'Murray', 'quis.arcu.vel@acarcu.org', '534112469', '4648'),
(76, 'Kendall', 'Dudley', 'ipsum@et.ca', '531224849', '4666'),
(77, 'Christopher', 'Warren', 'mus@acmetus.couk', '5327551478', '3909'),
(78, 'Belle', 'Knowles', 'ÅŸut.mi@pede.couk', '5326641437', '25');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `csv`
--
ALTER TABLE `csv`
  ADD PRIMARY KEY (`employee_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `csv`
--
ALTER TABLE `csv`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
