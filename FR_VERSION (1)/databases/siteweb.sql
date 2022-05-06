-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 01 mai 2022 à 12:25
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
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

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
(53, 'SALUT MAMAN', 10, '2022-04-30 01:09:48'),
(54, 'SALUT MON FILS', 10, '2022-04-30 01:09:57');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isAdmin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `email`, `pseudo`, `passwd`, `date`, `isAdmin`) VALUES
(13, 'Chevalier', 'Lucas', 'lux@gmail.com', 'Luxi7', '$2y$10$Z7YN8u6bqTz4EDqefwdgwO6tVy75GmxSrspu85YnBNMcwbSbq8WiO', '2022-03-25 00:21:38', 0),
(10, 'Garreta', 'Noelle', 'garretanoelle@gmail.com', 'XxMaxiNoellexX', '$2y$10$/GSS.1sGfiep6447anxbG.UCjdfmFUf.0kO5fJLGT9OY9e5f0F3Ga', '2022-03-24 01:17:46', 0),
(12, 'Gilbin', 'Thibault', 'gilbinthibault@gmail.com', 'ThibGil', '$2y$10$NTOeoa2aKvC3sP.vvuBge.P/qHU3UW7sUqHY7nlVWsvZsqdyAvoOK', '2022-03-25 00:19:49', 1),
(14, 'Canguilhem', 'Clemence', 'clem@gmail.com', 'Clem', '$2y$10$29QkcXzaKRxemwsNdkZnPOqu//Z6hLq59de00e2imseV0R28wf6g2', '2022-03-25 00:22:08', 0),
(16, 'Villemain', 'Anthony', 'anthony@gmail.com', 'Anto', '$2y$10$t4girtRsao8Kmrgb4y74s.GYLELB.wKDRyq1IqGJ7Wzb4HIJXOb9G', '2022-03-25 00:23:13', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
