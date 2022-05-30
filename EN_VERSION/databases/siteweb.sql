-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 29 mai 2022 à 13:13
-- Version du serveur : 8.0.29-0ubuntu0.22.04.2
-- Version de PHP : 8.1.2

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
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `msg`) VALUES
(1, 'tets', 'test', 'encule@vatefairefoutresalemerde.com', 'Merde'),
(2, 'Test', 'test2', 'merde@joder_inc.com', 'JODER.Inc');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `pseudo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(150, 'test', '2022-05-06 05:30:04', 'XxMaxiNoellexX'),
(151, 'test', '2022-05-25 16:13:25', 'ThibGil');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `isAdmin` int NOT NULL DEFAULT '0',
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `accepted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `isAdmin`, `last_name`, `first_name`, `email`, `pseudo`, `passwd`, `date`, `accepted`) VALUES
(10, 0, 'Garreta', 'Noelle', 'garretanoelle@gmail.com', 'XxMaxiNoellexX', '$2y$10$/GSS.1sGfiep6447anxbG.UCjdfmFUf.0kO5fJLGT9OY9e5f0F3Ga', '2022-03-24 01:17:46', 1),
(12, 1, 'Gilbin', 'Thibault', 'gilbinthibault@gmail.com', 'ThibGil', '$2y$10$NTOeoa2aKvC3sP.vvuBge.P/qHU3UW7sUqHY7nlVWsvZsqdyAvoOK', '2022-03-25 00:19:49', 1),
(14, 0, 'Canguilhem', 'Clemence', 'clem@gmail.com', 'Clem', '$2y$10$29QkcXzaKRxemwsNdkZnPOqu//Z6hLq59de00e2imseV0R28wf6g2', '2022-03-25 00:22:08', 1),
(18, 1, 'Chevalier', 'Lucas', 'lucas.chevalier08@gmail.com', 'LucasCvl', '$2y$10$ecxN87p8Oe7FoH22u.CQNODYjnZSLHNsGPF1kB8RBRbuC4uVALcYe', '2022-05-06 08:57:40', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pseudo` (`pseudo`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
