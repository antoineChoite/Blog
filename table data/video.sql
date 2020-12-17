-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 déc. 2020 à 04:36
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `smash`
--

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id`, `nom`, `game`, `description`, `image`, `video`, `serie`) VALUES
(1, 'World of Fight - Episode 1 (Prologue)', 'Super Smash Bros Ultimate', 'Premier épisode de la série World of Fight reunissant les personnages de l\'univers Smash Bros.', 'asset/miniature1.png', '<iframe width=\"95%\" height=\"600\" src=\"https://www.youtube-nocookie.com/embed/VTo2k5mZAfY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1),
(2, 'Kuro to Shiro - Opening 1 (Naruto)', 'Super Smash Bros Ultimate', 'Le premier montage générique que j\'ai réalisé \r\nsur une compilation de mes matchs', 'asset/miniature2.png', '<iframe width=\"95%\" height=\"600\"  src=\"https://www.youtube.com/embed/WoTcrWVfCHk\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0),
(3, 'Cutscene Fox vs Falcon', 'Super Smash Bros Ultimate', 'Fox et Falcon s\'entrainent dans une salle  de sport et s\'en suit une rivalité.', 'asset/miniature3.png', '<iframe  width=\"95%\" height=\"600\" src=\"//mixdrop.to/e/enloer3khe7lgv\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\"></iframe>', 0),
(4, 'My Smash Academia - Opening 2 (MHA)', 'Super Smash Bros Ultimate', 'Le deuxième générique que j\'ai réalisé avec des compilations de matchs', 'asset/miniature4.png', '<iframe width=\"95%\" height=\"600\" src=\"//mixdrop.to/e/j9dl3j9jskz7rv\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\"></iframe>', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
