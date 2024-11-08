-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 08 nov. 2024 à 08:57
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sql_injection_demo`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `flag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`, `flag`) VALUES
(1, 'admin_master', 'hashed_admin_password', 1, NULL),
(2, 'john_doe', 'hashed_password1', 0, NULL),
(3, 'jane_smith', 'hashed_password2', 0, NULL),
(4, 'alice_williams', 'hashed_password3', 0, NULL),
(5, 'bob_johnson', 'hashed_password4', 0, NULL),
(6, 'chris_evans', 'hashed_password5', 0, NULL),
(7, 'emily_davis', 'hashed_password6', 0, NULL),
(8, 'frank_miller', 'hashed_password7', 0, NULL),
(9, 'grace_lee', 'hashed_password8', 0, NULL),
(10, 'harry_potter', 'hashed_password9', 0, 'FLAG{user_10_flag}'),
(11, 'ivan_drago', 'hashed_password10', 0, NULL),
(12, 'julia_roberts', 'hashed_password11', 0, NULL),
(13, 'kevin_durant', 'hashed_password12', 0, NULL),
(14, 'linda_clark', 'hashed_password13', 0, NULL),
(15, 'mike_tyson', 'hashed_password14', 0, NULL),
(16, 'nancy_drew', 'hashed_password15', 0, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
