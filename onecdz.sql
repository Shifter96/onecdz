-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 18 oct. 2020 à 10:14
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `onecdz`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tittle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bacheliers`
--

DROP TABLE IF EXISTS `bacheliers`;
CREATE TABLE IF NOT EXISTS `bacheliers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` date NOT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL,
  `lieux` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_pere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_mere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_mere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` int(10) UNSIGNED NOT NULL,
  `wilaya_residence_id` int(10) UNSIGNED NOT NULL,
  `commune_id` int(10) UNSIGNED NOT NULL,
  `lycee_id` int(10) UNSIGNED NOT NULL,
  `branche` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_arabe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_arabe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_piece_identite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bacheliers_wilaya_id_foreign` (`wilaya_id`),
  KEY `bacheliers_region_id_foreign` (`region_id`),
  KEY `bacheliers_wilaya_residence_id_foreign` (`wilaya_residence_id`),
  KEY `bacheliers_commune_id_foreign` (`commune_id`),
  KEY `bacheliers_lycee_id_foreign` (`lycee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bacheliers`
--

INSERT INTO `bacheliers` (`id`, `nom`, `prenom`, `date_de_naissance`, `wilaya_id`, `lieux`, `prenom_pere`, `nom_mere`, `prenom_mere`, `region_id`, `wilaya_residence_id`, `commune_id`, `lycee_id`, `branche`, `nom_arabe`, `prenom_arabe`, `num_piece_identite`, `created_at`, `updated_at`) VALUES
(1, 'abdou', 'bouzid', '2020-10-16', 1, 'casbah', 'h', 'h', 'h', 1, 1, 1, 1, '1', 'k', 's', '2023', '2020-10-18 09:12:52', '2020-10-18 09:12:52');

-- --------------------------------------------------------

--
-- Structure de la table `bachelier_passes`
--

DROP TABLE IF EXISTS `bachelier_passes`;
CREATE TABLE IF NOT EXISTS `bachelier_passes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bachelier_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bachelier_passes_bachelier_id_foreign` (`bachelier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

DROP TABLE IF EXISTS `candidats`;
CREATE TABLE IF NOT EXISTS `candidats` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` date NOT NULL,
  `lieux` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL,
  `prenom_pere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_mere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_mere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` int(10) UNSIGNED NOT NULL,
  `wilaya_residence_id` int(10) UNSIGNED NOT NULL,
  `commune_id` int(10) UNSIGNED NOT NULL,
  `cem_id` int(10) UNSIGNED NOT NULL,
  `nom_arabe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_arabe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_piece_identite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `candidats_wilaya_id_foreign` (`wilaya_id`),
  KEY `candidats_region_id_foreign` (`region_id`),
  KEY `candidats_wilaya_residence_id_foreign` (`wilaya_residence_id`),
  KEY `candidats_commune_id_foreign` (`commune_id`),
  KEY `candidats_cem_id_foreign` (`cem_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cems`
--

DROP TABLE IF EXISTS `cems`;
CREATE TABLE IF NOT EXISTS `cems` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cems_commune_id_foreign` (`commune_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cems`
--

INSERT INTO `cems` (`id`, `nom`, `commune_id`, `created_at`, `updated_at`) VALUES
(1, 'IDRISSI', 1, NULL, NULL),
(2, 'BOUNAAMA', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `communes`
--

DROP TABLE IF EXISTS `communes`;
CREATE TABLE IF NOT EXISTS `communes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `communes_wilaya_id_foreign` (`wilaya_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `communes`
--

INSERT INTO `communes` (`id`, `nom`, `wilaya_id`, `created_at`, `updated_at`) VALUES
(1, 'KOUBA', 1, NULL, NULL),
(2, 'HEMRI', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

DROP TABLE IF EXISTS `demandes`;
CREATE TABLE IF NOT EXISTS `demandes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mois` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` int(11) NOT NULL,
  `region_id` int(10) UNSIGNED NOT NULL,
  `matricule` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branche_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` date NOT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL,
  `lieux` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_de_telephone` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_arabe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_arabe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demandes_region_id_foreign` (`region_id`),
  KEY `demandes_wilaya_id_foreign` (`wilaya_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id`, `mois`, `annee`, `region_id`, `matricule`, `branche_id`, `nom`, `prenom`, `date_de_naissance`, `wilaya_id`, `lieux`, `adresse`, `num_de_telephone`, `email`, `nom_arabe`, `prenom_arabe`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 1, '2023', '1', 'bouzid', 'abdou', '2020-10-16', 1, 'casbah', 'mouhous', 5454, 'charity@dwmm.com', 'k', 's', '2020-10-15 22:56:25', '2020-10-15 22:56:25');

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

DROP TABLE IF EXISTS `diplomes`;
CREATE TABLE IF NOT EXISTS `diplomes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mois` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` int(11) NOT NULL,
  `matricule` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branche_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` date NOT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL,
  `lieux` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_de_telephone` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_arabe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_arabe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recu` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `diplomes_wilaya_id_foreign` (`wilaya_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `mois`, `annee`, `matricule`, `branche_id`, `nom`, `prenom`, `date_de_naissance`, `wilaya_id`, `lieux`, `adresse`, `num_de_telephone`, `email`, `nom_arabe`, `prenom_arabe`, `recu`, `created_at`, `updated_at`) VALUES
(1, '1', 1, '2023', '1', 'bouzid', 'abdou', '2020-10-16', 1, 'casbah', 'mouhous', 5454, 'prof@hotmail.com', 'k', 's', 1, NULL, '2020-10-15 22:56:25');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

DROP TABLE IF EXISTS `eleves`;
CREATE TABLE IF NOT EXISTS `eleves` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branche` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_de_naissance` date NOT NULL,
  `lieux` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilaya_id` int(10) UNSIGNED NOT NULL,
  `prenom_pere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_mere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_mere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_arabe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_arabe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_piece_identite` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eleves_wilaya_id_foreign` (`wilaya_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`id`, `nom`, `prenom`, `branche`, `date_de_naissance`, `lieux`, `wilaya_id`, `prenom_pere`, `nom_mere`, `prenom_mere`, `nom_arabe`, `prenom_arabe`, `num_piece_identite`, `created_at`, `updated_at`) VALUES
(1, 'abdou', 'bouzid', '1', '2020-10-16', 'casbah', 1, 'hh', 'hh', 'hh', 'k', 's', '2023', NULL, NULL),
(2, 'mellal', 'wahid', '2', '2020-10-16', 'harach', 1, 'hh', 'hh', 'hh', 'h', 's', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `eleve_passes`
--

DROP TABLE IF EXISTS `eleve_passes`;
CREATE TABLE IF NOT EXISTS `eleve_passes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eleve_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eleve_passes_eleve_id_foreign` (`eleve_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lycees`
--

DROP TABLE IF EXISTS `lycees`;
CREATE TABLE IF NOT EXISTS `lycees` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lycees_commune_id_foreign` (`commune_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lycees`
--

INSERT INTO `lycees` (`id`, `nom`, `commune_id`, `created_at`, `updated_at`) VALUES
(1, 'IBN BADIS', 1, NULL, NULL),
(2, 'IBN ROUCHD', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_22_164944_create_diplomes_table', 1),
(5, '2020_09_22_165115_create_demandes_table', 1),
(6, '2020_09_22_165146_create_regions_table', 1),
(7, '2020_09_22_173849_create_wilayas_table', 1),
(8, '2020_09_22_173912_create_communes_table', 1),
(9, '2020_09_22_173932_create_lycees_table', 1),
(10, '2020_09_22_174048_create_bacheliers_table', 1),
(11, '2020_09_22_174104_create_eleves_table', 1),
(12, '2020_09_22_180157_create_cems_table', 1),
(13, '2020_09_22_181755_create_bachelier_passes_table', 1),
(14, '2020_09_22_181813_create_eleve_passes_table', 1),
(15, '2020_09_29_161133_create_candidats_table', 1),
(16, '2020_09_29_162140_create_articles_table', 1),
(17, '2020_09_30_081853_create_recus_table', 1),
(18, '2020_10_15_103137_create_roles_table', 1),
(19, '2020_10_15_103624_create_role_user_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recus`
--

DROP TABLE IF EXISTS `recus`;
CREATE TABLE IF NOT EXISTS `recus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu_de_naissance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `recus_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recus`
--

INSERT INTO `recus` (`id`, `nom`, `prenom`, `date_de_naissance`, `lieu_de_naissance`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'abdou', 'bouzid', '2020-10-16', 'casbah', 'abdoubouzid1', '6tSiB53V', '2020-10-18 09:12:52', '2020-10-18 09:12:52');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

DROP TABLE IF EXISTS `regions`;
CREATE TABLE IF NOT EXISTS `regions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'ALGER', '2020-10-15 23:04:32', '2020-10-15 23:04:32'),
(2, 'ORAN', '2020-10-15 23:04:32', '2020-10-15 23:04:32');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-10-15 13:38:38', '2020-10-15 13:38:38'),
(2, 'employe', '2020-10-15 13:38:38', '2020-10-15 13:38:38');

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  KEY `role_user_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aaaaa', 'aaaaa@gmail.com', NULL, '$2y$10$0qGiuCoUpWqwuG3kv2WYmel2T0CI8sc5ZedqLpmkitIVGkCEvQNjy', 'g2Y1kLoMw9A5pCXXwipNEjzRQYq1FfEQEuf2BCdImbvH3qohG8CadPPdQxG7', '2020-10-15 12:39:33', '2020-10-15 12:39:33'),
(2, 'bbbbb', 'bbbbb@gmail.com', NULL, '$2y$10$JzD6sKrCsp.FTgYd7ORvIuhsasotqgnh6Tves4z/LGt239vg/thlS', NULL, '2020-10-15 13:03:42', '2020-10-15 13:03:42');

-- --------------------------------------------------------

--
-- Structure de la table `wilayas`
--

DROP TABLE IF EXISTS `wilayas`;
CREATE TABLE IF NOT EXISTS `wilayas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wilayas_region_id_foreign` (`region_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wilayas`
--

INSERT INTO `wilayas` (`id`, `nom`, `region_id`, `created_at`, `updated_at`) VALUES
(1, 'ALGER', 1, NULL, NULL),
(2, 'ORAN', 2, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
