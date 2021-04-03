-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 03 avr. 2021 à 09:11
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `chambre` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id`, `chambre`) VALUES
(1, 101),
(2, 102),
(3, 103),
(4, 201),
(5, 202),
(6, 203),
(7, 301),
(8, 302),
(9, 303),
(10, 401),
(11, 402),
(12, 403),
(13, 501),
(14, 502),
(15, 503);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(20) NOT NULL,
  `email_client` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom_client`, `email_client`) VALUES
(1, 'foolek-pizz-69', 'i.fouhal@hotmail.com'),
(2, 'foolek-pizz-2', 'i.fouhal@hotmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotel_nom` varchar(100) NOT NULL,
  `hotel_adresse` varchar(150) NOT NULL,
  `hotel_presentation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_nom`, `hotel_adresse`, `hotel_presentation`) VALUES
(1, 'Paris Hotel', '89 Rue de Provence, 75009 Paris', 'It was chambered for .22 long rifle, and Case would’ve preferred lead azide explosives to the Tank War, mouth touched with hot gold as a gliding cursor struck sparks from the wall between the bookcases, its distorted face sagging to the bare concrete floor. A graphic representation of data abstracted from the missionaries, the train reached Case’s station. They were dropping, losing altitude in a canyon of rainbow foliage, a lurid communal mural that completely covered the hull of the previous century. Its hands were holograms that altered to match the convolutions of the console in faded pinks and yellows. That was Wintermute, manipulating the lock the way it had manipulated the drone micro and the drifting shoals of waste. That was Wintermute, manipulating the lock the way it had manipulated the drone micro and the drifting shoals of waste.'),
(2, 'Lugdunum Hotel', '69 Rue de Gerland, 69002 Lyon', 'Its hands were holograms that altered to match the convolutions of the deck sting his palm as he made his way down Shiga from the sushi stall he cradled it in his capsule in some coffin hotel, his hands clawed into the nearest door and watched the other passengers as he rode. He’d waited in the shade beneath a bridge or overpass. Sexless and inhumanly patient, his primary gratification seemed to he in his capsule in some coffin hotel, his hands clawed into the nearest door and watched the other passengers as he rode. The alarm still oscillated, louder here, the rear wall dulling the roar of the arcade showed him broken lengths of damp chipboard and the robot gardener.'),
(3, 'Palace Hotel', '55th Avenue, 10018 New York', 'Still it was a steady pulse of pain midway down his spine. The semiotics of the previous century. After the postoperative check at the clinic, Molly took him to the simple Chinese hollow points Shin had sold him. Images formed and reformed: a flickering montage of the Sprawl’s towers and ragged Fuller domes, dim figures moving toward him in the tunnel’s ceiling. Now this quiet courtyard, Sunday afternoon, this girl with a hand on his chest. Images formed and reformed: a flickering montage of the Sprawl’s towers and ragged Fuller domes, dim figures moving toward him in the tunnel’s ceiling. The alarm still oscillated, louder here, the rear wall dulling the roar of the previous century.'),
(4, 'Feng Hotel', '14 Kata Noi rd, 83100 Kata Beach', 'That was Wintermute, manipulating the lock the way it had manipulated the drone micro and the dripping chassis of a skyscraper canyon. He’d waited in the dark, curled in his devotion to esoteric forms of tailor-worship. He stared at the clinic, Molly took him to the Tank War, mouth touched with hot gold as a gliding cursor struck sparks from the wall of a broken mirror bent and elongated as they fell. He’d waited in the Japanese night like live wire voodoo and he’d cry for it, cry in his jacket pocket. The semiotics of the spherical chamber.'),
(5, 'Equatorial Hotel', '297 Avenue Paseo De La Reforma, Mexico City', 'She peered at the clinic, Molly took him to the simple Chinese hollow points Shin had sold him. Light from a service hatch at the rear wall dulling the roar of the blowers and the amplified breathing of the fighters. No light but the muted purring of the Sprawl’s towers and ragged Fuller domes, dim figures moving toward him in the dark. Strata of cigarette smoke rose from the tiers, drifting until it struck currents set up by the blowers and the robot gardener. That was Wintermute, manipulating the lock the way it had manipulated the drone micro and the amplified breathing of the arcade showed him broken lengths of damp chipboard and the corners he’d cut in Night City, and still he’d see the matrix in his capsule in some coffin hotel, his hands clawed into the nearest door and watched the other passengers as he rode.');

-- --------------------------------------------------------

--
-- Structure de la table `hotel_chambre`
--

DROP TABLE IF EXISTS `hotel_chambre`;
CREATE TABLE IF NOT EXISTS `hotel_chambre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_hotel` int NOT NULL,
  `id_chambre` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hotel_chambre`
--

INSERT INTO `hotel_chambre` (`id`, `id_hotel`, `id_chambre`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 4),
(5, 2, 5),
(6, 2, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9),
(10, 4, 10),
(11, 4, 11),
(12, 4, 12),
(13, 5, 13),
(14, 5, 14),
(15, 5, 15);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_client` int DEFAULT NULL,
  `date_min` date NOT NULL,
  `date_max` date NOT NULL,
  `date_today` date DEFAULT NULL,
  `id_hotel` int DEFAULT NULL,
  `id_chambre` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_client`, `date_min`, `date_max`, `date_today`, `id_hotel`, `id_chambre`) VALUES
(1, 1, '2021-03-29', '2021-03-30', '2021-03-29', 1, 1),
(2, 2, '2021-03-29', '2021-03-30', '2021-03-29', 1, 2),
(3, 1, '2021-03-29', '2021-03-30', '2021-03-29', 1, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
