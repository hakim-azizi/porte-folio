-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : tb-be04-linweb281.srv.teamblue-ops.net:3306
-- Généré le : sam. 11 avr. 2026 à 12:17
-- Version du serveur : 8.0.36-28
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webdqx_webdeveloper`
--

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `github` varchar(150) NOT NULL,
  `url` varchar(100) NOT NULL,
  `screen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alt` varchar(100) NOT NULL,
  PRIMARY KEY (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio`
(
  `title`,
  `description`,
  `github`,
  `url`,
  `screen`,
  `alt`
)
VALUES
(
  'afac974',
  'J&rsquo;ai r&eacute;alis&eacute; ce site, qui &eacute;tait le troisi&egrave;me et dernier projet de ma formation, en React.js, Express.js, et une base de donn&eacute;es MySQL. Avec l&rsquo;accord de mes formateurs, j&rsquo;ai r&eacute;alis&eacute; ce site en autonomie.<br />\n<br />\nFront-end :<br />\n<br />\nJ&rsquo;ai utilis&eacute; Figma pour faire le wireframe, ainsi que le maquettage et le prototypage. Je suis ensuite pass&eacute; au codage, j&rsquo;ai tout d&rsquo;abord mis en place la structure HTML, ensuite, j&rsquo;ai proc&eacute;d&eacute; au design gr&acirc;ce au CSS.<br />\nJ&rsquo;ai utilis&eacute; la biblioth&egrave;que React.js qui fonctionne selon le principe de la SPA (Single Page Application), qui permet de mettre &agrave; jour le contenu sans rafra&icirc;chir la page.<br />\nBack-end :<br />\n<br />\nJe me suis servi du framework Express.js qui associ&eacute; &agrave; Node.js permet de cr&eacute;er une API REST robuste et stable.<br />\nLa base de donn&eacute;es relationnelle, m&rsquo;a quant &agrave; elle permis de stocker les informations utiles de fa&ccedil;on p&eacute;renne.',
  'https://github.com/hakim-azizi/AFAC974',
  'https://afac-974-client.vercel.app/',
  'afac974.webp',
  'screen du site la Afac974'
),
(
  'carte-postale',
  'Ce site a &eacute;t&eacute; con&ccedil;u lors de ma formation lors du &laquo; protojam &raquo;, il s&rsquo;agit de cr&eacute;er un site web avec une th&eacute;matique au choix, il se d&eacute;roule en 2 jours.<br />\nApr&egrave;s nous &ecirc;tre mis d&rsquo;accord sur les couleurs, et la technologie &agrave; utiliser, nous avons rapidement partag&eacute; le travail.<br />\nNous avons cr&eacute;&eacute; le site avec react.js pour le front, et nous n&rsquo;avons pas fait de back-end.',
  'https://github.com/hakim-azizi/carte-postale',
  'https://carte-postale.vercel.app/',
  'carte-postale.webp',
  'screen du site carte postale'
),
(
  'faketory',
  'Ce projet est le deuxi&egrave;me projet r&eacute;alis&eacute; pendant ma formation, nous &eacute;tions par &eacute;quipe de 4.<br />\n<br />\nFront-end :<br />\n<br />\nPour le front, nous avons tout d&rsquo;abord effectu&eacute; le wireframe, les maquettes ainsi que le prototype &agrave; l&rsquo;aide de figma.<br />\nNous avons ensuite cod&eacute; cot&eacute; front en utilisant la biblioth&egrave;que React.js qui fonctionne sous la technologie de la S.P.A. Single Page Application, cela permet de mettre &agrave; jour le contenu sans rafra&icirc;chir la page. Nous devions &eacute;galement soit fetcher une api local ou externe. Pour faketory nos avons fait le choix de fetcher des apis aussi bien cot&eacute; front que c&ocirc;t&eacute; back.<br />\nBack-end :<br />\n<br />\nC&ocirc;t&eacute; back-end nous avons cr&eacute;er un serveur Epress.js associer &agrave; Node, qui offre une API REST solide et robuste. Pour stocker les informations n&eacute;cessaires &agrave; l&rsquo;affichage nous avons coder nos propres API en .json.<br />\nNous avons &eacute;galement cr&eacute;&eacute; une authentification sommaire au moyen d&rsquo;une base de donn&eacute;es .json.',
  'https://github.com/hakim-azizi/faketory',
  'https://faketory-client.vercel.app/',
  'faketory.webp',
  'screen du site faketory'
),
(
  'la rose de l&apos;orient',
  'J&rsquo;ai cod&eacute; ce site en autodidacte, tout &agrave; fait fonctionnel et respectant la r&eacute;glementation RGPD et les normes de s&eacute;curit&eacute; en vigueur.<br />\n<br />\nFront-end :<br />\n<br />\nPour la partie front j&rsquo;ai utilis&eacute; HTML associ&eacute; &agrave; CSS pour le design, ainsi que JavaScript et la biblioth&egrave;que jQuery, pour la logique, et le dynamisme de la page.<br />\nBack-end :<br />\n<br />\nLe back quant &agrave; lui, je l&rsquo;ai r&eacute;aliser en PHP natif, associer MySQL, le langage SQL m&rsquo;a servi &agrave; communiquer avec la base de donn&eacute;es relationnelle.<br />\nCelle-ci m&rsquo;a servi &agrave; g&eacute;rer les stocks et l&rsquo;affichage des articles en ventes, mais aussi &agrave; stocker les informations des clients, en cr&eacute;ant un compte, le client pouvait avoir acc&egrave;s &agrave; ses factures &agrave; tout moment.',
  'https://github.com/hakim-azizi/la-rose-de-l-orient',
  'https://robedelorient.com',
  'la-rose-de-l-orient.webp',
  'screen du site la rose de l&apos;orient'
),
(
  'robe et vetement',
  'Un projet que j&rsquo;ai r&eacute;alis&eacute; pendant ma formation au sein de Konexio, le projet constituais &agrave; faire une page web de vente, en HTML,CSS et JavaScript.<br />\nLe HTML m&rsquo;as servi &agrave; structurer la page web, le CSS quant &agrave; lui m&rsquo;a permis d&rsquo;en effectuer le design, le JavaScript a &eacute;t&eacute; utile pour rendre la page dynamique, et effectuer la logique.',
  'https://github.com/hakim-azizi/',
  'http://robedelorient.com/projet',
  'robe-et-vetement.webp',
  'screen de la page robe et v&ecirc;tement'
  ),
(
  'the wild fork',
  'Il s&rsquo;agit du premier projet effectuer pendant ma formation &agrave; la Wild Code School, il fallait faire un site pour r&eacute;pertorier tous les restaurant autour des locaux, nous avons utiliser HTML, CSS , et JavaScript pour le r&eacute;aliser',
  'https://github.com/hakim-azizi/BugBusters',
  'http://robedelorient.com/the-wild-fork',
  'the-wild-fork.webp',
'screen du site the wild fork'
);

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `h2` varchar(150) NOT NULL,
  `h3` varchar(150) NOT NULL,
  `description` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `url` varchar(100) NOT NULL,
  `screen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `screen_thumbnail` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project`
(
  `name`,
  `h2`,
  `h3`,
  `description`,
  `url`,
  `screen`,
  `screen_thumbnail`,
  `alt`
)
VALUES
(
  'afac974',
  'sous-titre h2',
  'sous-titre h3',
  'J&rsquo;ai r&eacute;alis&eacute; ce site, qui &eacute;tait le troisi&egrave;me et dernier projet de ma formation, en React.js, Express.js, et une base de donn&eacute;es MySQL. Avec l&rsquo;accord de mes formateurs, j&rsquo;ai r&eacute;alis&eacute; ce site en autonomie.<br />\n<br />\nFront-end :<br />\n<br />\nJ&rsquo;ai utilis&eacute; Figma pour faire le wireframe, ainsi que le maquettage et le prototypage. Je suis ensuite pass&eacute; au codage, j&rsquo;ai tout d&rsquo;abord mis en place la structure HTML, ensuite, j&rsquo;ai proc&eacute;d&eacute; au design gr&acirc;ce au CSS.<br />\nJ&rsquo;ai utilis&eacute; la biblioth&egrave;que React.js qui fonctionne selon le principe de la SPA (Single Page Application), qui permet de mettre &agrave; jour le contenu sans rafra&icirc;chir la page.<br />\nBack-end :<br />\n<br />\nJe me suis servi du framework Express.js qui associ&eacute; &agrave; Node.js permet de cr&eacute;er une API REST robuste et stable.<br />\nLa base de donn&eacute;es relationnelle, m&rsquo;a quant &agrave; elle permis de stocker les informations utiles de fa&ccedil;on p&eacute;renne.',
  'https://afac974.nantes-1.wilders.dev/',
  'afac974.webp',
  'afac974-thumbnail.webp',
  'description de l&apos;image du site'
),
(
  'carte-postale',
  'sous-titre h2',
  'sous-titre h3',
  'Ce site a &eacute;t&eacute; con&ccedil;u lors de ma formation lors du &laquo; protojam &raquo;, il s&rsquo;agit de cr&eacute;er un site web avec une th&eacute;matique au choix, il se d&eacute;roule en 2 jours.<br />\nApr&egrave;s nous &ecirc;tre mis d&rsquo;accord sur les couleurs, et la technologie &agrave; utiliser, nous avons rapidement partag&eacute; le travail.<br />\nNous avons cr&eacute;&eacute; le site avec react.js pour le front, et nous n&rsquo;avons pas fait de back-end.',
  'https://carte-postale.vercel.app/',
  'carte-postale.webp',
  'carte-postale-thumbnail.webp',
  'description de l&apos;image'
),
(
  'faketory',
  'sous-titre h2',
  'sous-titre h3',
  'Ce projet est le deuxi&egrave;me projet r&eacute;alis&eacute; pendant ma formation, nous &eacute;tions par &eacute;quipe de 4.<br />\n<br />\nFront-end :<br />\n<br />\nPour le front, nous avons tout d&rsquo;abord effectu&eacute; le wireframe, les maquettes ainsi que le prototype &agrave; l&rsquo;aide de figma.<br />\nNous avons ensuite cod&eacute; cot&eacute; front en utilisant la biblioth&egrave;que React.js qui fonctionne sous la technologie de la S.P.A. Single Page Application, cela permet de mettre &agrave; jour le contenu sans rafra&icirc;chir la page. Nous devions &eacute;galement soit fetcher une api local ou externe. Pour faketory nos avons fait le choix de fetcher des apis aussi bien cot&eacute; front que c&ocirc;t&eacute; back.<br />\nBack-end :<br />\n<br />\nC&ocirc;t&eacute; back-end nous avons cr&eacute;er un serveur Epress.js associer &agrave; Node, qui offre une API REST solide et robuste. Pour stocker les informations n&eacute;cessaires &agrave; l&rsquo;affichage nous avons coder nos propres API en .json.<br />\nNous avons &eacute;galement cr&eacute;&eacute; une authentification sommaire au moyen d&rsquo;une base de donn&eacute;es .json.',
  'https://faketory-client.vercel.app/',
  'faketory.webp',
  'faketory-thumbnail.webp',
  'description de l&apos;image'
  ),
(
  'la-rose-de-l-orient',
  'sous-titre h2',
  'sous-titre h3',
  'J&rsquo;ai cod&eacute; ce site en autodidacte, tout &agrave; fait fonctionnel et respectant la r&eacute;glementation RGPD et les normes de s&eacute;curit&eacute; en vigueur.<br />\n<br />\nFront-end :<br />\n<br />\nPour la partie front j&rsquo;ai utilis&eacute; HTML associ&eacute; &agrave; CSS pour le design, ainsi que JavaScript et la biblioth&egrave;que jQuery, pour la logique, et le dynamisme de la page.<br />\nBack-end :<br />\n<br />\nLe back quant &agrave; lui, je l&rsquo;ai r&eacute;aliser en PHP natif, associer MySQL, le langage SQL m&rsquo;a servi &agrave; communiquer avec la base de donn&eacute;es relationnelle.<br />\nCelle-ci m&rsquo;a servi &agrave; g&eacute;rer les stocks et l&rsquo;affichage des articles en ventes, mais aussi &agrave; stocker les informations des clients, en cr&eacute;ant un compte, le client pouvait avoir acc&egrave;s &agrave; ses factures &agrave; tout moment.',
  'htt://robe-de-l-orient.com',
  'la-rose-de-l-orient.webp',
  'la-rose-de-l-orient-thumbnail.webp',
  'description de l&apos;image du site'
),
(
  'robe-et-vetement',
  'sous-titre h2',
  'sous-titre h3',
  'Un projet que j&rsquo;ai r&eacute;alis&eacute; pendant ma formation au sein de Konexio, le projet constituais &agrave; faire une page web de vente, en HTML,CSS et JavaScript.<br />\nLe HTML m&rsquo;as servi &agrave; structurer la page web, le CSS quant &agrave; lui m&rsquo;a permis d&rsquo;en effectuer le design, le JavaScript a &eacute;t&eacute; utile pour rendre la page dynamique, et effectuer la logique.',
  'http://robedelorient.com/projet',
  'robe-et-vetement.webp',
  'robe-et-vetement-thumbnail.webp',
  'description de l&apos;image'
),
(
  'the-wild-fork',
  'sous-titre h2',
  'sous-titre h3',
  'Il s&rsquo;agit du premier projet effectuer pendant ma formation &agrave; la Wild Code School, il fallait faire un site pour r&eacute;pertorier tous les restaurant autour des locaux, nous avons utiliser HTML, CSS , et JavaScript pour le r&eacute;aliser',
  'http://robedelorient.com/the-wild-fork',
  'the-wild-fork.webp',
  'the-wild-fork-thumbnail.webp',
  'description de l&apos;image'
  );
