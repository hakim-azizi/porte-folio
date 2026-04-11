--
-- Database : `web_developer`
--
-- CREATE DATABASE `web_developer`;
-- --------------------------------------------------------

--
-- Table structure `project`
--

CREATE TABLE `project` (
	`name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
	`h2` varchar(150) NOT NULL,
	`h3` varchar(150) NOT NULL,
	`description` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
	`url` varchar(100) NOT NULL,
	`screen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
	`alt` varchar(100) NOT NULL,
  PRIMARY KEY (`name`)
);

--
-- Unloading data from the table `project`
--

INSERT INTO `project`
(
	`name`,
	`h2`,
	`h3`,
	`description`,
	`url`,
	`screen`,
	`alt`
)
VALUES
(
	'la-rose-de-l-orient',
	'sous-titre h2',
	'sous-titre h3',
	'J&rsquo;ai cod&eacute; ce site en autodidacte, tout &agrave; fait fonctionnel et respectant la r&eacute;glementation RGPD et les normes de s&eacute;curit&eacute; en vigueur.<br />
<br />
Front-end :<br />
<br />
Pour la partie front j&rsquo;ai utilis&eacute; HTML associ&eacute; &agrave; CSS pour le design, ainsi que JavaScript et la biblioth&egrave;que jQuery, pour la logique, et le dynamisme de la page.<br />
Back-end :<br />
<br />
Le back quant &agrave; lui, je l&rsquo;ai r&eacute;aliser en PHP natif, associer MySQL, le langage SQL m&rsquo;a servi &agrave; communiquer avec la base de donn&eacute;es relationnelle.<br />
Celle-ci m&rsquo;a servi &agrave; g&eacute;rer les stocks et l&rsquo;affichage des articles en ventes, mais aussi &agrave; stocker les informations des clients, en cr&eacute;ant un compte, le client pouvait avoir acc&egrave;s &agrave; ses factures &agrave; tout moment.',
	'htt://robedelorient.com',
	'la-rose-de-l-orient.webp',
	'description de l&apos;image du site'
),
(
	'afac974',
	'sous-titre h2',
	'sous-titre h3',
	'J&rsquo;ai r&eacute;alis&eacute; ce site, qui &eacute;tait le troisi&egrave;me et dernier projet de ma formation, en React.js, Express.js, et une base de donn&eacute;es MySQL. Avec l&rsquo;accord de mes formateurs, j&rsquo;ai r&eacute;alis&eacute; ce site en autonomie.<br />
<br />
Front-end :<br />
<br />
J&rsquo;ai utilis&eacute; Figma pour faire le wireframe, ainsi que le maquettage et le prototypage. Je suis ensuite pass&eacute; au codage, j&rsquo;ai tout d&rsquo;abord mis en place la structure HTML, ensuite, j&rsquo;ai proc&eacute;d&eacute; au design gr&acirc;ce au CSS.<br />
J&rsquo;ai utilis&eacute; la biblioth&egrave;que React.js qui fonctionne selon le principe de la SPA (Single Page Application), qui permet de mettre &agrave; jour le contenu sans rafra&icirc;chir la page.<br />
Back-end :<br />
<br />
Je me suis servi du framework Express.js qui associ&eacute; &agrave; Node.js permet de cr&eacute;er une API REST robuste et stable.<br />
La base de donn&eacute;es relationnelle, m&rsquo;a quant &agrave; elle permis de stocker les informations utiles de fa&ccedil;on p&eacute;renne.',
	'https://afac974.nantes-1.wilders.dev/',
	'afac974.webp',
	'description de l&apos;image du site'
),
(
	'carte-postale', 
	'sous-titre h2',
	'sous-titre h3', 
	'Ce site a &eacute;t&eacute; con&ccedil;u lors de ma formation lors du &laquo; protojam &raquo;, il s&rsquo;agit de cr&eacute;er un site web avec une th&eacute;matique au choix, il se d&eacute;roule en 2 jours.<br />
Apr&egrave;s nous &ecirc;tre mis d&rsquo;accord sur les couleurs, et la technologie &agrave; utiliser, nous avons rapidement partag&eacute; le travail.<br />
Nous avons cr&eacute;&eacute; le site avec react.js pour le front, et nous n&rsquo;avons pas fait de back-end.', 
	'https://carte-postale.vercel.app/',
	'carte-postale.webp',
	'description de l&apos;image'
	),
(
	'faketory',
	'sous-titre h2', 
	'sous-titre h3',
	'Ce projet est le deuxi&egrave;me projet r&eacute;alis&eacute; pendant ma formation, nous &eacute;tions par &eacute;quipe de 4.<br />
<br />
Front-end :<br />
<br />
Pour le front, nous avons tout d&rsquo;abord effectu&eacute; le wireframe, les maquettes ainsi que le prototype &agrave; l&rsquo;aide de figma.<br />
Nous avons ensuite cod&eacute; cot&eacute; front en utilisant la biblioth&egrave;que React.js qui fonctionne sous la technologie de la S.P.A. Single Page Application, cela permet de mettre &agrave; jour le contenu sans rafra&icirc;chir la page. Nous devions &eacute;galement soit fetcher une api local ou externe. Pour faketory nos avons fait le choix de fetcher des apis aussi bien cot&eacute; front que c&ocirc;t&eacute; back.<br />
Back-end :<br />
<br />
C&ocirc;t&eacute; back-end nous avons cr&eacute;er un serveur Epress.js associer &agrave; Node, qui offre une API REST solide et robuste. Pour stocker les informations n&eacute;cessaires &agrave; l&rsquo;affichage nous avons coder nos propres API en .json.<br />
Nous avons &eacute;galement cr&eacute;&eacute; une authentification sommaire au moyen d&rsquo;une base de donn&eacute;es .json.',
	'https://faketory-client.vercel.app/',
	'faketory.webp',
	'description de l&apos;image'
	),
(
	'robe-et-vetement',
	'sous-titre h2',
	'sous-titre h3',
	'Un projet que j&rsquo;ai r&eacute;alis&eacute; pendant ma formation au sein de Konexio, le projet constituais &agrave; faire une page web de vente, en HTML,CSS et JavaScript.<br />
Le HTML m&rsquo;as servi &agrave; structurer la page web, le CSS quant &agrave; lui m&rsquo;a permis d&rsquo;en effectuer le design, le JavaScript a &eacute;t&eacute; utile pour rendre la page dynamique, et effectuer la logique.',
	'http://robedelorient.com/projet',
	'robe-et-vetement.webp',
	'description de l&apos;image'
	),
(
	'the-wild-fork',
	'sous-titre h2',
	'sous-titre h3',
	'Il s&rsquo;agit du premier projet effectuer pendant ma formation &agrave; la Wild Code School, il fallait faire un site pour r&eacute;pertorier tous les restaurant autour des locaux, nous avons utiliser HTML, CSS , et JavaScript pour le r&eacute;aliser',
	'http://robedelorient.com/the-wild-fork',
	'the-wild-fork.webp',
	'description de l&apos;image'
	);

	--
-- Table structure `portfolio`
	--

	CREATE TABLE `portfolio` (
	`title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
	`description` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
	`github` varchar(150) NOT NULL,
	`url` varchar(100) NOT NULL,
	`screen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
	`alt` varchar(100) NOT NULL,
  PRIMARY KEY (`title`)
 );

 --
-- Unloading data from the table `project`
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
	'la-rose-de-l-orient',
	'description du site',
	'url-git-hub',
	'htt://robe-de-l-orient.com',
	'la-rose-de-l-orient.webp',
	'description de l&apos;image du site'
);