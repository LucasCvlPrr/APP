-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 06 mai 2022 à 10:02
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
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isAdmin` int(11) NOT NULL DEFAULT '0',
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `isAdmin`, `last_name`, `first_name`, `email`, `pseudo`, `passwd`, `date`) VALUES
(10, 0, 'Garreta', 'Noelle', 'garretanoelle@gmail.com', 'XxMaxiNoellexX', '$2y$10$/GSS.1sGfiep6447anxbG.UCjdfmFUf.0kO5fJLGT9OY9e5f0F3Ga', '2022-03-24 01:17:46'),
(12, 1, 'Gilbin', 'Thibault', 'gilbinthibault@gmail.com', 'ThibGil', '$2y$10$NTOeoa2aKvC3sP.vvuBge.P/qHU3UW7sUqHY7nlVWsvZsqdyAvoOK', '2022-03-25 00:19:49'),
(14, 0, 'Canguilhem', 'Clemence', 'clem@gmail.com', 'Clem', '$2y$10$29QkcXzaKRxemwsNdkZnPOqu//Z6hLq59de00e2imseV0R28wf6g2', '2022-03-25 00:22:08'),
(15, 0, 'El Kadari', 'Amin', 'amin@gmail.com', 'AminElKadari', '$2y$10$aqIl.z5556BCAROwooQEsOmA4Evem3Y9qRcSQHs6l1s7doYq2s8m.', '2022-03-25 00:22:39'),
(19, 1, 'Lucas', 'Chevalier', 'lucas.chevalier@gmail.com', 'LucasCvl', '$2y$10$UtqILbt2/BMDfzZYjYscM.7nAlk2ahn9FNDdIYRtFeaiD87PltbjO', '2022-05-06 09:16:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
