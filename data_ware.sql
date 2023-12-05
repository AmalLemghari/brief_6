-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 10:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_ware`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `team` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipe`
--

INSERT INTO `equipe` (`id`, `team`) VALUES
(1, 'Team 1'),
(2, 'team 2'),
(3, 'Team 3'),
(4, 'team 4'),
(5, 'team 5'),
(6, 'team 6'),
(7, 'team 7'),
(8, 'team 8'),
(9, 'team 9'),
(10, 'team 10');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `deadline` varchar(100) DEFAULT NULL,
  `teamId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `description`, `deadline`, `teamId`) VALUES
(68, 'Application de Suivi de Fitness et Bien-être', 'Découvrez une expérience holistique de bien-être avec notre application de suivi de fitness. Que vous soyez un amateur de remise en forme ou que vous débutiez votre parcours vers un mode de vie plus sain, notre application propose un suivi personnalisé, des séances d\'entraînement adaptées à vos besoins, des conseils nutritionnels et un suivi de votre progression.\r\n\r\n', '2023/08/15', 9),
(70, 'Système de Gestion de Contenu (CMS) Personnalisé', 'Notre projet vise à concevoir et développer un Système de Gestion de Contenu (CMS) entièrement personnalisé, offrant une expérience utilisateur intuitive et des fonctionnalités avancées de création, édition et publication de contenu en ligne, notre CMS offre une interface conviviale et intuitive qui permet une gestion fluide de vos contenus en ligne.', '2023/09/09', 8),
(99, 'Plateforme de Réservation et Gestion d\'Événements', 'Découvrez la facilité et l\'efficacité de notre plateforme tout-en-un dédiée à la réservation et à la', '2023/10/01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `teamId` int(11) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `teamId`, `role`, `password`) VALUES
(9, 'Jese ', 'Leosy', '+212674893125', 'jese.leosy@example.com', 5, 'Product Owner', 'jese1234'),
(11, 'John', 'Doe', '+212987654321', 'john.doe@example.com', 5, 'scrum master', 'john1234'),
(18, 'Émilie', 'Dubois', '+212123456789', 'emilie.dubois@example.com', 1, 'Member', 'emilie1234'),
(19, 'Hugo', 'Mercier', '+212963852741', 'hugo.mercier@example.com', 4, 'Member', 'hugo1234'),
(24, 'Amal', 'Lemghari', '+2126741852963', 'amal.lemghari@example.com', 4, 'Scrum Master', 'amal1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_name` (`project_name`),
  ADD KEY `teamId` (`teamId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `users_ibfk_1` (`teamId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `equipe` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `equipe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
