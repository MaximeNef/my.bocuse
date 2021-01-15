-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 15 jan. 2021 à 10:52
-- Version du serveur :  10.3.27-MariaDB
-- Version de PHP : 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pzqrmnyr_mybocuse`
--

-- --------------------------------------------------------

--
-- Structure de la table `connection`
--

CREATE TABLE `connection` (
  `FK_id_users` int(6) NOT NULL,
  `time_begin` timestamp NULL DEFAULT current_timestamp(),
  `time_end` timestamp NULL DEFAULT current_timestamp(),
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `connection`
--

INSERT INTO `connection` (`FK_id_users`, `time_begin`, `time_end`, `date`) VALUES
(9, '2021-01-13 07:26:16', '2021-01-13 07:27:16', '2021-01-13'),
(9, '2021-01-14 02:33:14', '2021-01-14 02:33:32', '2021-01-14'),
(10, '2021-01-14 13:03:36', NULL, '2021-01-14');

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

CREATE TABLE `recettes` (
  `FK_id_users` int(6) NOT NULL,
  `titleR` varchar(250) NOT NULL,
  `typeR` enum('starter','main','dessert') NOT NULL,
  `dateR` date NOT NULL,
  `difficultyR` enum('one','two','three','four','five') NOT NULL,
  `ingredientR` varchar(3000) NOT NULL,
  `instructionR` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`FK_id_users`, `titleR`, `typeR`, `dateR`, `difficultyR`, `ingredientR`, `instructionR`) VALUES
(9, 'belgian fries steak', 'main', '2021-01-15', 'two', 'belgian fires, steak', 'oui'),
(9, 'Chicken Parmesan', 'main', '2021-01-14', 'three', 'chicken, parmesan', 'boil the pasta'),
(10, 'Chocolate Brownies', 'main', '2021-01-14', 'two', '250 g pastry chocolate, 1 sachet of vanilla sugar, 150 g butter, 3 eggs, 150 g of sugar, 60 g flour, Salt.', 'Melt the chocolate broken into pieces with the butter.\r\nMeanwhile, beat the eggs with the sugar until the mixture whitens.\r\nAdd the flour, vanilla sugar and add the chocolate.\r\nPour the mixture into a mould and bake in the oven at 180Â°C (gas mark 6) for 15 minutes'),
(9, 'belgian fries steak', 'main', '2021-01-15', 'two', 'belgian fires, steak', 'oui'),
(9, 'belgian fries steak', 'main', '2021-01-15', 'two', 'belgian fires, steak', 'oui'),
(9, 'belgian fries steak', 'main', '2021-01-15', 'two', 'belgian fires, steak', 'oui'),
(10, 'Tomato pie', 'starter', '2021-01-15', 'one', '1 shortcrust pastry, 4 ripe tomatoes, Herbes de Provence + salt, Dijon mustard, Olive oil.', 'Precook the dough (pierced with a fork) 5 min at 450 degrees farenheit (230Â°C).\r\nIn the meantime, cut the tomatoes into 3 mm thick slices.\r\nTake the pre-baked dough out of the oven. Brush the base with Dijon mustard (the classic one does the trick) ...put enough so that the dough base is no longer visible.\r\nArrange the tomato slices. Make several layers.\r\nSprinkle with herbes de Provence + 2 pinches of salt.\r\n1 tablespoon of olive oil.\r\nBake for 20 min at 450 farenheit then cover with aluminium foil for another 20 min. After these 20 minutes, remove the aluminium foil and leave to cook for another 5 minutes with the oven door open.\r\nDelicious with a green salad.'),
(9, 'belgian fries steak', 'main', '2021-01-15', 'two', 'belgian fires, steak', 'oui'),
(9, 'Chicken Parmesan', 'main', '2021-01-14', 'three', 'chicken, parmesan', 'boil the pasta'),
(10, 'Blackberry smoothie', 'starter', '2021-01-15', 'one', '700 g of blackberries picked, 1 banana cut into slices, 3 creamy yoghurts, 12 crushed ice cubes.', 'Put all the ingredients in a large salad bowl. Blend until smooth.\r\nPlace in the fridge at least 1 hour before serving.\r\nDrinking through a straw is even better!'),
(10, 'Hamburger', 'main', '2021-01-14', 'one', 'Hamburger Bread, Minced meat, Onion, Cheddar cheese (vacuum-packed purchase in supermarkets), Tomato, Salad, Mustard, Ketchup.', 'SautÃ© the onions over a low heat.\r\nAdd the steaks.\r\nOnce seared, place a slice of cheddar cheese on the steak and let it melt.\r\nOnce cooked, place the steak and cheese on one of the slices of bread that you have previously spread with a mixture of ketchup and mustard.\r\nAdd the salad and small slices of tomato.\r\nYou can now cover the preparation with the other slice (with ketchup and mustard).'),
(9, 'Chicken Parmesan', 'main', '2021-01-14', 'three', 'chicken, parmesan', 'boil the pasta'),
(9, 'Chicken Parmesan', 'main', '2021-01-14', 'three', 'chicken, parmesan', 'boil the pasta'),
(9, 'pate carbo', 'main', '2021-01-23', 'five', 'pates, lardon', 'tu cuit'),
(9, 'pate carbo', 'main', '2021-01-23', 'five', 'pates, lardon', 'tu cuit'),
(9, 'Steak de bite', 'main', '2021-01-16', 'five', 'Poils de cul', 'Tirer trÃ¨s fort'),
(9, 'BIGMAC', 'main', '2021-01-15', 'five', 'pain,viande,Salade,oignon,Amour', 'Prenez votre tÃ©lÃ©phone.\r\nTÃ©lÃ©charger l\'application UbberEat\r\nChercher le MacDo le plus proche\r\nCommander un maxi bestof BigMac, prenez une boisson de type gazeuse\r\nCommander, \r\nApprÃ©cier.'),
(10, 'Tarte au caca', 'main', '2021-01-03', 'three', 'du caca, de la pÃ¢te Ã  tarte', 'MELANGER');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` char(60) NOT NULL,
  `accout_type` enum('learner','coach') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `accout_type`) VALUES
(9, 'Snoop ', 'Dog', 'snoopdog@becode.org', '$2y$10$ZHB1LG3V/sazZ4fukFQfVe9xiLFp8LoCdpv2NENY6VE5WUyyyTntK', 'learner'),
(10, 'Aristo  ', 'Cat', 'lalalou@gmail.com', '$2y$10$/fQPbWW4d3ntMFctyqMK/eI.4mCFRAFbcyKpSC1pG4QpvE7V4cepm', 'learner'),
(11, 'Cristiano', 'Ronaldo', 'cr7@juventus.it', '$2y$10$bwsNwTcOauMiJZ3mecRlNuN94NSLJulO6VsWO5Cic2YLdVTjdCLm.', 'learner'),
(12, 'John', 'Doe', 'john@whyisthisfor.com', '$2y$10$9YERIT8ZQ3iWikIpLo8jRevDNzva3V9X6GfCWGgBimU6p6frmnIym', 'coach'),
(13, 'Em', 'Rata', 'em-rata@gmail.com', '$2y$10$MMwNRXuHVntlYzAcPi9g7OlwL7kBOCNTjjHqPLqwvog1eELvNMdH.', 'coach');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `connection`
--
ALTER TABLE `connection`
  ADD KEY `FK_id_user` (`FK_id_users`);

--
-- Index pour la table `recettes`
--
ALTER TABLE `recettes`
  ADD KEY `FK_id_user` (`FK_id_users`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `connection`
--
ALTER TABLE `connection`
  ADD CONSTRAINT `connection_ibfk_1` FOREIGN KEY (`FK_id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `recettes`
--
ALTER TABLE `recettes`
  ADD CONSTRAINT `recettes_ibfk_1` FOREIGN KEY (`FK_id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
