-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 06 mai 2022 à 08:58
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `date`, `pseudo`) VALUES
(132, 'Salut', '2022-05-06 05:03:20', 'ThibGil'),
(133, 'Salut comment vas-tu ?', '2022-05-06 05:04:17', 'XxMaxiNoellexX'),
(134, 'Très bien merci et toi ?', '2022-05-06 05:04:29', 'ThibGil'),
(135, 'ça va !', '2022-05-06 05:04:44', 'XxMaxiNoellexX'),
(136, 'Bla bla...', '2022-05-06 05:05:06', 'XxMaxiNoellexX'),
(137, 'Blablabla', '2022-05-06 05:05:14', 'ThibGil'),
(138, 'Bla Bla...', '2022-05-06 05:05:22', 'XxMaxiNoellexX'),
(139, 'BlaBlaBla', '2022-05-06 05:05:28', 'ThibGil'),
(140, 'BlaBlaBlaBla', '2022-05-06 05:05:34', 'XxMaxiNoellexX'),
(141, 'Blablabla', '2022-05-06 05:05:42', 'ThibGil'),
(142, 'Message de test', '2022-05-06 05:29:11', 'ThibGil'),
(143, 'Encore des messages', '2022-05-06 05:29:18', 'XxMaxiNoellexX'),
(144, 'Le chat est intéractif', '2022-05-06 05:29:26', 'ThibGil'),
(145, 'super', '2022-05-06 05:29:30', 'XxMaxiNoellexX'),
(146, 'Un autre message de test', '2022-05-06 05:29:43', 'ThibGil'),
(147, 'Encore un autre', '2022-05-06 05:29:48', 'XxMaxiNoellexX'),
(148, 'On continue', '2022-05-06 05:29:53', 'ThibGil'),
(149, 'Voilà', '2022-05-06 05:29:59', 'ThibGil'),
(150, 'test', '2022-05-06 05:30:04', 'XxMaxiNoellexX');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`pseudo`) REFERENCES `users` (`pseudo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
