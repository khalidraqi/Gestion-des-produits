-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 juin 2021 à 00:24
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestiondesproduits`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(8, 'Voitures'),
(12, 'Motocycles'),
(13, 'Bicyclettes');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `old_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `old_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`) VALUES
(17, 'Yamha YZF-R1', 12, 1000, 1500, 1, 'TEXT TEXT ', 'TEXT TEXT TEXT TEXT ', 'jhouxzrhbelhktufofkffpownonxec-1622392649.jpg'),
(18, 'Ymaha TMAX', 12, 2300, 2600, 2, 'TEXT TEXT', 'TEXT TEXT TEXT TEXT', '2010-yamaha-t-max-abs-eu-midnight-black-studio-0333322201-1622394099.jpg'),
(19, 'BMW R 1200', 12, 3290, 4500, 3, 'TEXT TEXT ', 'TEXTTEXT TEXT  TEXT ', 'bmw-r-1200-gs-adv-2014-1622392823.jpg'),
(20, 'Mercedes amg c63', 8, 6000, 8000, 5, 'TEXT TEXT ', 'TEXT TEXT TEXT TEXT ', 'c63-1024x703-1622392908.jpg'),
(21, 'Aoudi A7 ', 8, 7500, 9000, 5, 'TEXT TEXT ', 'TEXT TEXT TEXT ', 'moteur.ma-audi-a7-335253_-1622393025.ma-audi-a7-335253_jpg'),
(22, 'BMW X6', 8, 9000, 12000, 2, 'TEXT TEXT ', 'TEXT TEXT TEXT TEXT ', 'p90356696-the-new-bmw-x6-stills-07-2019-600px-1622393071.jpg'),
(23, 'BMX T-MAX ', 13, 600, 800, 6, 'TEXT TEXT ', 'TEXT TEXT TEXT TEXT ', 'h9a7bee6c57ce47faa3b701b3ee6932e4o-1622393154.jpg'),
(24, 'ROCKRIDIR DT 500 ', 13, 670, 800, 2, 'TEXT TEXT ', 'TEXT TEXT ', 'vtt-enfant-rockrider-st-500-24-pouces-9-12-ans-noir-1622393234.webp'),
(25, 'MILORD ', 13, 450, 750, 6, 'TEXT TEXT ', 'TEXT TEXT ', 'e7647a155a0ae464303675beb60228f9[1]-1622393433.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `password`, `admin`) VALUES
(1, 'khalid raqi', 'khalidraqi', 'khalid@gmail.com', '$2y$12$C4i7sZhabKleyIQoozoL/u2ZuxXe/F33ij4A4rscH09n90NBv3KGO', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
