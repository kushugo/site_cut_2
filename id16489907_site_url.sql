-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 31 mars 2021 à 21:49
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP : 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id16489907_site_url`
--

-- --------------------------------------------------------

--
-- Structure de la table `shortened_urls`
--

CREATE TABLE `shortened_urls` (
  `id_shortened` int(10) NOT NULL,
  `long_url` longtext COLLATE utf8_unicode_ci NOT NULL,
  `short_url` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_registration` int(100) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_registration`, `username`, `email`, `password`) VALUES
(1, 'asmaa2027', 'asmaaaboudi92600@gmail.com', '2293ddb0afb435aeb89dd0e21476214a72a289d513e572e5322642d6cf3ba4f2'),
(5, 'melloune', 'amelie.p2024@gmail.com', 'd8db1b62c81d6affd16f89f42b9f8235f48442ed6b5438e41199632668438689'),
(6, 'melloune', 'amelie.p2024@gmail.com', '65d55ab6f2c5e5bdd42fb7dedcaa317fabf7ed5057cf736570de561247ce27ed'),
(7, 'l', 'l', 'acac86c0e609ca906f632b0e2dacccb2b77d22b0621f20ebece1a4835b93f6f0'),
(8, 'a', 'asmaaaboudi92600@gmail.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(9, 'asmaa2027', 'asmaaaboudi92600@gmail.com', 'de7d1b721a1e0632b7cf04edf5032c8ecffa9f9a08492152b926f1a5a7e765d7'),
(10, 'asmaa2027', 'asmaaaboudi92600@gmail.com', '351573d8d5d08010146c74bbec7ad56d9b6aea43eca703848e0a56045f27ee93'),
(11, 'asmaa2027', 'asmaaaboudi92600@gmail.com', '2293ddb0afb435aeb89dd0e21476214a72a289d513e572e5322642d6cf3ba4f2'),
(13, 'm', 'amelie.p2024@gmail.com', 'cd0aa9856147b6c5b4ff2b7dfee5da20aa38253099ef1b4a64aced233c9afe29'),
(14, 'amélielapute', 'asmaaaboudi92600@gmail.com', '2293ddb0afb435aeb89dd0e21476214a72a289d513e572e5322642d6cf3ba4f2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `shortened_urls`
--
ALTER TABLE `shortened_urls`
  ADD PRIMARY KEY (`id_shortened`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_registration`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `shortened_urls`
--
ALTER TABLE `shortened_urls`
  MODIFY `id_shortened` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_registration` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
