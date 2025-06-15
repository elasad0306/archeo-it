-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 15 juin 2025 à 20:55
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `archeo_it`
--

-- --------------------------------------------------------

--
-- Structure de la table `agendas`
--

DROP TABLE IF EXISTS `agendas`;
CREATE TABLE IF NOT EXISTS `agendas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `event_location` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `information_event` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agendas`
--

INSERT INTO `agendas` (`id`, `event_name`, `event_location`, `start_date`, `end_date`, `information_event`) VALUES
(1, 'Les Mystères du Passé – Forum International d’Archéologie 2025', 'Centre des Sciences Historiques – 14 rue des Vestiges, 69007 Lyon, France', '2025-10-15', '2025-10-19', 'Le Forum International d’Archéologie 2025 rassemble des chercheurs, passionnés, étudiants et professionnels autour des dernières découvertes archéologiques en Europe et dans le monde. Conférences, expositions d’objets inédits, reconstitutions virtuelles, ateliers interactifs pour les enfants, projections de documentaires et tables rondes seront au programme.\r\nEntrée : Gratuite sur inscription pour les conférences – Accès libre à l’exposition');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id`, `title`, `photo`, `type`, `content`, `create_at`, `update_at`) VALUES
(38, 'Découverte Archéologique Majeure au Cœur de l’Amazonie', 'archaeology-59150_1280.jpg', 'article', '<h3><strong>Introduction</strong></h3><p><strong>Amazonas, Brésil – Juin 2025.</strong> Une équipe d’archéologues internationaux a annoncé la découverte spectaculaire d’une cité ancienne jusqu’alors inconnue, enfouie sous la canopée dense de la forêt amazonienne. Baptisée <em>Yana Kuru</em> – ce qui signifie “pierre noire” en quechua –, la cité aurait été le centre d’une civilisation florissante qui aurait coexisté avec les grandes cultures andines il y a plus de 1 500 ans.</p><h3><strong>Une découverte rendue possible par la technologie LIDAR</strong></h3><p>La cité a été repérée grâce à la technologie LIDAR (Light Detection and Ranging), utilisée depuis un hélicoptère volant au-dessus d’une zone reculée de l’État d’Amazonas. Cette technologie permet de \"voir\" à travers la végétation dense en cartographiant les structures enfouies sous les arbres.</p><p>« Ce que nous avons trouvé dépasse toutes nos attentes », a déclaré le professeur Mariana Ortiz, de l’Université de São Paulo, qui codirige le projet. « Non seulement nous avons identifié une série de structures monumentales, mais nous avons aussi pu cartographier un réseau complexe de routes, de canaux et de plateformes agricoles. »</p><h3><strong>Une ville planifiée et technologiquement avancée</strong></h3><p>Les premières fouilles révèlent une cité organisée selon une planification urbaine précise. Les chercheurs ont identifié une grande place centrale, plusieurs pyramides en terre battue, et des édifices qui pourraient avoir servi de centres cérémoniels ou d’observatoires astronomiques.</p><p>Des artefacts retrouvés sur place – poteries finement décorées, outils en pierre volcanique, fragments de textile – témoignent d’un savoir-faire avancé et d’un haut niveau d’organisation sociale. Certains objets contiennent des inscriptions dans une écriture encore non déchiffrée, ce qui soulève des interrogations fascinantes sur l’origine de cette culture.</p><h3><strong>Une civilisation distincte, mais connectée</strong></h3><p>Selon les premières analyses au carbone 14, <em>Yana Kuru</em> aurait été habitée entre 400 et 950 après J.-C., une période correspondant à l’essor des cultures Tiwanaku et Wari dans les Andes. Pourtant, les éléments architecturaux et artistiques semblent distincts de ceux connus dans la région.</p><p>« Nous sommes probablement en présence d’une civilisation autonome, mais qui entretenait des liens commerciaux ou culturels avec d\'autres peuples sud-américains », explique le Dr. Luis Ferrera, spécialiste des cultures précolombiennes. « Cela remet en question l\'idée que l’Amazonie n’aurait été peuplée que de petits groupes nomades avant l’arrivée des Européens. »</p><h3><strong>Implications pour l\'histoire de l\'Amazonie</strong></h3><p>La découverte de <em>Yana Kuru</em> s’inscrit dans un mouvement plus large de révision des connaissances sur l’histoire amazonienne. Ces dernières années, des indices de sociétés complexes ont été mis au jour dans plusieurs régions de la forêt, notamment en Bolivie et au Pérou.</p><p>« Cette cité n’est peut-être que la première d’une série de découvertes à venir », affirme le professeur Ortiz. « Nous devons repenser l’Amazonie non pas comme une terre vierge, mais comme un paysage humanisé depuis des millénaires. »</p><h3><strong>Préserver un trésor en péril</strong></h3><p>Cependant, la cité de <em>Yana Kuru</em> est menacée par la déforestation galopante. Les archéologues appellent à une protection urgente de la zone et à une coopération entre gouvernements, communautés autochtones et chercheurs.</p><p>Le gouvernement brésilien a d’ores et déjà annoncé son intention de classer le site comme zone archéologique prioritaire. Des représentants des peuples autochtones locaux, tels que les Tikuna et les Yagua, ont également été invités à participer aux futures campagnes de recherche, dans une démarche de science collaborative et respectueuse des mémoires ancestrales.</p><h3><strong>Un nouveau chapitre de l’humanité</strong></h3><p>Alors que les premières fouilles ne font que commencer, la cité de <em>Yana Kuru</em> promet de livrer de nouveaux indices sur les sociétés qui peuplaient l’Amazonie bien avant les Incas et les colons européens.</p><p>« C’est un tournant », conclut le professeur Ortiz. « Nous écrivons un nouveau chapitre de l’histoire humaine, un chapitre enfoui depuis des siècles sous la forêt. »</p>', '2025-06-10', '2025-06-15'),
(39, 'Oppidum de la Roche-Sombre', 'chantier1.jpg', 'chantier', '<p><strong>Localisation :</strong> Massif Central, département du Cantal, à proximité du village de Saint-Flour.</p><p><strong>Période de fouille :</strong> Été 2025</p><p><strong>Découvertes majeures :</strong></p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Restes d’un oppidum gaulois du IIe siècle av. J.-C.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Fragments de poteries décorées à la main</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Une pièce en bronze représentant une divinité celtique inconnue</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Vestiges d’un mur cyclopéen et d’un puits sacré</li></ol><p><strong>Équipe sur place :</strong></p><p> Des archéologues de l’Université de Clermont-Ferrand, accompagnés de bénévoles internationaux et d\'étudiants en master d\'archéologie.</p><p><strong>Hypothèse actuelle :</strong></p><p> Le site aurait servi à la fois de fortification défensive et de centre cultuel régional pour les tribus arvernes. La découverte du puits et des offrandes suggère un important rôle religieux.</p>', '2025-06-14', '0000-00-00'),
(40, 'Une découverte majeure en Dordogne bouleverse les connaissances sur la préhistoire européenne', 'dordogne.jpg', 'article', '<p><strong>Dordogne, France – Juin 2025</strong></p><p>Une équipe d’archéologues français et internationaux a mis au jour, dans une grotte jusque-là inexplorée près de la vallée de la Vézère en Dordogne, un ensemble de vestiges préhistoriques qui pourraient réécrire une partie de l’histoire de l’Europe paléolithique.</p><h3>Une grotte oubliée du temps</h3><p>Baptisée provisoirement <em>Grotte de la Lune</em>, le site a été découvert par hasard lors de travaux forestiers. Alertés par un effondrement partiel de terrain, les ouvriers ont remarqué une cavité ornée de traces de peinture. Une équipe de l’Institut national de recherches archéologiques préventives (INRAP) a été immédiatement dépêchée sur place.</p><p>« Dès notre première entrée, nous avons compris que nous étions face à quelque chose d’exceptionnel », témoigne Sophie Marin, responsable du chantier de fouilles. « Les peintures rupestres sont d’une finesse rare et d’un style jusqu’alors inconnu. »</p><h3>Des artefacts datés de plus de 40 000 ans</h3><p>Parmi les objets retrouvés figurent des outils en silex taillés avec une précision surprenante, des perles de coquillage perforées, ainsi qu’un fragment de statuette anthropomorphe en ivoire de mammouth. Les premières analyses au carbone 14 indiquent une datation d’environ 43 000 ans, ce qui placerait ces objets au tout début de la présence de l’Homo sapiens en Europe.</p><p>Fait encore plus surprenant : certaines techniques observées dans les gravures rappellent celles attribuées aux Néandertaliens, suggérant un possible échange culturel ou une cohabitation plus longue que ce que l’on croyait jusqu’alors.</p><h3>Un « chaînon manquant » de l’art pariétal</h3><p>Les fresques murales, remarquablement bien conservées, représentent des animaux aujourd’hui disparus (lion des cavernes, aurochs, mégacéros) mais aussi des motifs géométriques et même ce qui pourrait être une figure humaine partiellement stylisée – un fait extrêmement rare pour cette période.</p><p>« Si les datations sont confirmées, cela pourrait constituer le chaînon manquant entre les peintures néandertaliennes de la grotte de La Pasiega (Espagne) et les célèbres fresques de Lascaux », explique le préhistorien allemand Klaus Reinhardt, venu prêter main forte à l’équipe.</p><h3>Une sécurisation du site en cours</h3><p>Les autorités locales, en lien avec le ministère de la Culture, ont d’ores et déjà classé le site comme zone protégée. Des mesures strictes ont été prises pour éviter toute détérioration de l’environnement fragile de la grotte. Le public ne pourra pas y accéder avant plusieurs années, mais une reconstitution en 3D sera prochainement visible au musée national de la Préhistoire aux Eyzies-de-Tayac.</p><h3>Un tournant pour la recherche</h3><p>Cette découverte relance les débats sur les origines de l’art, les migrations humaines préhistoriques et les interactions entre Néandertaliens et Homo sapiens. Plusieurs publications scientifiques sont attendues d’ici fin 2025, mais les chercheurs parlent déjà de l’une des découvertes les plus importantes de ces vingt dernières années en Europe.</p>', '2025-06-15', '0000-00-00'),
(41, 'Une cité oubliée découverte sous les sables du désert d’Atar : une révolution archéologique', 'cité atar.jpg', 'article', '<p><strong>Atar, Mauritanie</strong> – Une équipe internationale d’archéologues a mis au jour, en avril dernier, les vestiges d’une cité jusqu’alors inconnue, enfouie sous les dunes du désert de l’Adrar. Baptisée provisoirement <strong>\"Kherma\"</strong>, cette ville antique, datée de plus de 3 000 ans, pourrait bouleverser notre compréhension des civilisations sahariennes préislamiques.</p><h2><strong>Une découverte due au hasard… et aux satellites</strong></h2><p>Tout a commencé par une anomalie repérée sur des images satellite par le géomaticien français Thomas Renaud. \"Nous avions observé des motifs géométriques récurrents, ce qui semblait impossible dans une région aussi aride\", explique-t-il. Une mission de reconnaissance au sol a rapidement confirmé l’existence de structures bâties sous la surface sableuse.</p><h2><strong>Une cité étonnamment avancée</strong></h2><p>Au fil des fouilles, les chercheurs ont révélé une architecture complexe : rues pavées, puits profonds, entrepôts et même un amphithéâtre semi-circulaire. Des tablettes gravées en tifinagh primitif, un alphabet berbère ancestral, ont été exhumées dans ce qui semble être une ancienne bibliothèque ou école.</p><p>\"Nous pensions que de telles infrastructures n’existaient qu’au nord du Sahara à cette époque. Kherma prouve le contraire\", affirme Dr. Amira El-Mahdi, archéologue égyptienne à la tête de la mission.</p><h2><strong>Un carrefour oublié des routes commerciales</strong></h2><p>Les premières analyses des céramiques et des bijoux indiquent des influences venant de la vallée du Nil, du Maghreb et même du bassin méditerranéen. Kherma aurait donc été un carrefour majeur des échanges transsahariens bien avant l’époque romaine.</p><h2><strong>Un enjeu patrimonial et géopolitique</strong></h2><p>Les autorités mauritaniennes, conscientes de l’importance de cette découverte, ont immédiatement classé le site comme zone protégée. Des discussions sont en cours avec l’UNESCO pour une inscription au patrimoine mondial.</p><p>Mais certains groupes nomades revendiquent une filiation avec les anciens habitants de Kherma, appelés dans leurs traditions orales <em>\"ceux qui parlaient au vent et bâtissaient avec l’eau\"</em>. Une équipe d’ethnologues est actuellement sur place pour tenter de faire le lien entre ces récits et les faits archéologiques.</p><h2><strong>Et après ?</strong></h2><p>Les fouilles devraient s’intensifier durant l’hiver prochain, période où le climat est plus clément. Des laboratoires mobiles seront installés sur place afin de préserver les objets les plus fragiles et d’éviter leur détérioration.</p><h3>Kherma n’a pas fini de parler. Et avec elle, peut-être, le désert non plus.</h3>', '2025-06-15', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `pseudo`, `password`) VALUES
(4, 'john@test.fr', 'john', 'John59', '$2y$10$K4S0iySXdie2r6emdLyAo.BX1m2hd2Fj8Bd1YA./zUnBmlGYsSR66'),
(12, 'asad@test.fr', 'asad', 'asad45', '$2y$10$ihPlOA5siqbIvAIFcim1q.UD6TD6tZpkcdvmqTTnoKZ/vci2qvEGW');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
