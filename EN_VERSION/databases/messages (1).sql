-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 02 mai 2022 à 03:23
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
  `id_user` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `id_user`, `date`) VALUES
(24, 'Salut test', 12, '2022-04-25 12:59:35'),
(25, 'YO mec', 12, '2022-04-25 13:31:06'),
(26, 'salut', 12, '2022-04-25 13:59:56'),
(27, 'salut', 12, '2022-04-25 14:02:04'),
(28, 'messagetestajd', 12, '2022-04-25 14:02:23'),
(29, 'yo', 12, '2022-04-29 19:26:56'),
(30, 'Salut à tous', 12, '2022-04-29 20:46:41'),
(31, 'YO', 12, '2022-04-29 20:48:25'),
(32, 'Test', 12, '2022-04-29 20:52:22'),
(33, 'Test2', 12, '2022-04-29 20:53:01'),
(34, 'Salut', 12, '2022-04-29 20:53:52'),
(35, 'Yo', 12, '2022-04-29 20:59:59'),
(36, 'Un envoi', 12, '2022-04-29 21:02:48'),
(37, 'Salut', 12, '2022-04-29 21:08:23'),
(38, 'yoyo', 12, '2022-04-29 21:31:14'),
(39, 'message', 12, '2022-04-29 21:31:43'),
(40, '', 12, '2022-04-29 21:57:07'),
(41, '', 12, '2022-04-29 21:57:09'),
(42, '', 12, '2022-04-29 21:57:11'),
(43, '', 12, '2022-04-29 21:57:18'),
(44, 'unnouveaumsg', 12, '2022-04-29 21:58:06'),
(45, 'encore', 12, '2022-04-29 21:58:22'),
(46, 'Salut bg', 12, '2022-04-29 22:31:37'),
(47, 'yo', 12, '2022-04-29 22:32:07'),
(48, 'salutos amigos', 12, '2022-04-29 22:33:12'),
(49, 'ouepouepouep', 12, '2022-04-29 22:33:42'),
(50, 'ça roule ', 12, '2022-04-29 22:35:23'),
(51, 'yes', 12, '2022-04-29 22:35:43'),
(52, 'salut', 12, '2022-04-30 01:06:23'),
(55, 'chat test', 12, '2022-05-01 14:36:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
