-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 18 juin 2022 à 21:19
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `anastasia fashion`
--

-- --------------------------------------------------------

--
-- Structure de la table `admines`
--

CREATE TABLE `admines` (
  `idadmin` int(11) NOT NULL,
  `nom_admine` varchar(100) NOT NULL,
  `prenom_admin` varchar(100) NOT NULL,
  `role_adm` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `profil_client` varchar(100) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `email_client` varchar(50) NOT NULL,
  `password_client` varchar(50) NOT NULL,
  `type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE `command` (
  `id_command` int(11) NOT NULL,
  `nom_prod_commder` varchar(100) NOT NULL,
  `prix_prod_commder` varchar(100) NOT NULL,
  `taille` varchar(100) NOT NULL,
  `quantiter` varchar(100) NOT NULL,
  `date_commande` datetime(6) NOT NULL,
  `gmail_client` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `command`
--

INSERT INTO `command` (`id_command`, `nom_prod_commder`, `prix_prod_commder`, `taille`, `quantiter`, `date_commande`, `gmail_client`) VALUES
(9, 'dress souma', '123123', 'XXL', '7', '2022-06-18 12:48:39.000000', 'clientsoumia@gmial.com'),
(11, 'JJJJJJJJJ', '12312', 'L', '2', '2022-06-18 13:22:04.000000', 'clientest@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `designer_fashion`
--

CREATE TABLE `designer_fashion` (
  `id_designer` int(11) NOT NULL,
  `nom_designer` varchar(100) NOT NULL,
  `prenom_designer` varchar(50) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email_designer` varchar(50) NOT NULL,
  `password_designer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `image_produit` text NOT NULL,
  `discription_produit` text NOT NULL,
  `Taille` varchar(11) NOT NULL,
  `prix_produit` varchar(10) NOT NULL,
  `quantiter_produit` int(255) NOT NULL,
  `id_user_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `image_produit`, `discription_produit`, `Taille`, `prix_produit`, `quantiter_produit`, `id_user_product`) VALUES
(27, 'dress souma', 'prod5.jpg', 'dress souma test', 'L', '123123', 12, 12),
(28, 'SDFGHJKL', 'prod5.jpg', 'QWSDXFCGHBJ?KL.M/%§', 'XxL', '1200000000', 50, 12),
(30, 'nasser', 'signin.png', 'dress nasser', 'XL', '50dh', 3, 11),
(31, 'JJJJJJJJJ', 'prod1.jpg', 'QSDFGHJKLM%µ', 'S', '12312', 5, 11);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(100) NOT NULL,
  `prenom_user` varchar(100) NOT NULL,
  `role_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom_user`, `prenom_user`, `role_user`, `email_user`, `password_user`) VALUES
(4, 'ADMIN', 'ADMIN', 'Admin', 'admin@gmail.com', 'Admin'),
(11, 'souma', 'essab', 'Designer', 'soumiaessabiry.se@gmail.com', '123123'),
(12, 'simsiima', 'jjjjjj', 'Designer', 'souma@gmail.com', '123123'),
(14, 'clientsouma', 'clientsoumia', 'Client', 'clientsoumia@gmial.com', '123123'),
(15, 'client2', 'testclient', 'Client', 'clientest@gmail.com', '123123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admines`
--
ALTER TABLE `admines`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id_command`);

--
-- Index pour la table `designer_fashion`
--
ALTER TABLE `designer_fashion`
  ADD PRIMARY KEY (`id_designer`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `produit_ibfk_1` (`id_user_product`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admines`
--
ALTER TABLE `admines`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `command`
--
ALTER TABLE `command`
  MODIFY `id_command` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `designer_fashion`
--
ALTER TABLE `designer_fashion`
  MODIFY `id_designer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_user_product`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
