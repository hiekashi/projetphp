-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 20 mai 2021 à 09:32
-- Version du serveur :  8.0.25-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE `utilisateur` (
  `id` VARCHAR(30) NOT NULL,
  `nom` VARCHAR(30) NOT NULL,
  `prenom` VARCHAR(30) NOT NULL,
  `mail` VARCHAR(50) NOT NULL,
  `mdp` VARCHAR(12) NOT NULL,
  `statut` VARCHAR(6) DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `mdp`, `statut`) VALUES
('hiekashi', 'Muller', 'Oceane', 'oceane.muller@gmail.com', 'nootnoot','admin'),
('camonze', 'Launois', 'Camille', 'camille.launois@gmail.com', 'basilic', 'admin'),
('seum41', 'Grizzi', 'Edgar', 'edgar.grizzi@gmail.com', 'pokemon', 'member');

-- RAJOUTER LA CLE PRIMAIRE

ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);