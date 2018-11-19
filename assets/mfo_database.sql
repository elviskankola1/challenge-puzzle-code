-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 02:15 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfo_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `mfo_application`
--

CREATE TABLE `mfo_application` (
  `id_app` int(11) NOT NULL,
  `titre_app` varchar(255) NOT NULL,
  `description_app` text NOT NULL,
  `file_app` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mfo_application`
--

INSERT INTO `mfo_application` (`id_app`, `titre_app`, `description_app`, `file_app`) VALUES
(2, 'comming soon polo unique', 'ejsrgup[fxfg;', './assets/uploads/app/table-3.jpg'),
(3, 'eduque-moi (edm)', '*Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications ', './assets/uploads/app/table-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mfo_blog`
--

CREATE TABLE `mfo_blog` (
  `id_item` int(11) NOT NULL,
  `titre_item` varchar(255) NOT NULL,
  `description_item` text NOT NULL,
  `file_item` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mfo_blog`
--

INSERT INTO `mfo_blog` (`id_item`, `titre_item`, `description_item`, `file_item`) VALUES
(1, 'unique-plateforme', 'bjjhklohk', './assets/uploads/blog/logo-active.png'),
(2, 'unique-plateforme', 'bjjhklohk', './assets/uploads/blog/logo-active1.png');

-- --------------------------------------------------------

--
-- Table structure for table `mfo_contact`
--

CREATE TABLE `mfo_contact` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(58) NOT NULL,
  `adresse_user` varchar(255) NOT NULL,
  `telephone_user` varchar(20) NOT NULL,
  `message_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mfo_formation`
--

CREATE TABLE `mfo_formation` (
  `id_formation` int(11) NOT NULL,
  `titre_formation` varchar(255) NOT NULL,
  `description_formation` text NOT NULL,
  `file_formation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mfo_formation`
--

INSERT INTO `mfo_formation` (`id_formation`, `titre_formation`, `description_formation`, `file_formation`) VALUES
(1, 'unique-plateforme', 'zdr', './assets/uploads/form/table-3.jpg'),
(2, 'trying website', '*Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications ', './assets/uploads/form/table-2.jpg'),
(3, 'trying website', '*Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications*Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances ', './assets/uploads/form/table-1.jpg'),
(4, 'trying website', '*Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications ', './assets/uploads/form/table-2-hover.jpg'),
(5, 'trying website', '*Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications ', './assets/uploads/form/table-2-hover1.jpg'),
(6, 'trying website', '*Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications *Développer et Véhiculer la culture de transparence et de compétence à tous les échelons pour les intervenants et usagers des comptes selon les normes édictées par l\'OHADA révisé et les IFRS * Mettre en place un cadre de concertation et d\'échange de connaissances par la Formation continue de de l\'Elite des finances (Experts comptables, Etudiants, Cadres des Entreprises, Chercheurs) * Placement de candidats Masters Juniors (Issus du dernier cycle du parcourt académique) * Développer les réflexes d\'auto-évaluations et pour les recyclages professionnels * Sécuriser la traçabilité des comptes par l\'usage du Bouclier numérique constitués des applications ', './assets/uploads/form/table-2-hover2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mfo_souscription`
--

CREATE TABLE `mfo_souscription` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(11) NOT NULL,
  `adresse_user` varchar(255) NOT NULL,
  `telephone_user` varchar(20) NOT NULL,
  `titre_formation` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mfo_application`
--
ALTER TABLE `mfo_application`
  ADD PRIMARY KEY (`id_app`);

--
-- Indexes for table `mfo_blog`
--
ALTER TABLE `mfo_blog`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `mfo_contact`
--
ALTER TABLE `mfo_contact`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `mfo_formation`
--
ALTER TABLE `mfo_formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Indexes for table `mfo_souscription`
--
ALTER TABLE `mfo_souscription`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mfo_application`
--
ALTER TABLE `mfo_application`
  MODIFY `id_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mfo_blog`
--
ALTER TABLE `mfo_blog`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mfo_contact`
--
ALTER TABLE `mfo_contact`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mfo_formation`
--
ALTER TABLE `mfo_formation`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mfo_souscription`
--
ALTER TABLE `mfo_souscription`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
