-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220616.7a6bd9eb57
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 juil. 2022 à 13:14
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php-vue-cantine`
--

DROP DATABASE IF EXISTS `php-vue-cantine`; 
-- a verifier si fonctionne avec documentation

CREATE DATABASE IF NOT EXISTS `php-vue-cantine` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php-vue-cantine`;


-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(7) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_username` varchar(25) NOT NULL,
  `user_profile_type` tinyint(1) NOT NULL,
  `user_deleted` BIT(1) NOT NULL,
  `user_validated` BIT(1) NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_surname` varchar(30) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar (10) NOT NULL,
  `user_street` varchar (50) NULL,
  `user_city` varchar (25) NULL,
  `user_zipcode` varchar (5) NULL,
  `user_tel` varchar (15) NULL,
  `user_inscription_date` date 
)
  ENGINE = InnoDB;

CREATE TABLE `child` (
  `child_id` bigint(7) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fk_client_id` bigint(7) UNSIGNED NOT NULL,
  `child_firstname` varchar(50) NOT NULL,
  `child_surname` varchar(30) NOT NULL,
  `child_dob` date NOT NULL,
  `child_inscription_date` date NOT NULL,
  `child_allergies` TEXT (500) NOT NULL,
  `child_board` varchar (25) NOT NULL,
  `child_deleted` BIT(1) NOT NULL,
  `child_validated` BIT(1) NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE `message` (
  `msg_id` bigint(7) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fk_client_id` bigint(7) UNSIGNED NOT NULL,
  `msg_content` TEXT NOT NULL,
  `msg_date` date NOT NULL,
  `msg_read` BIT(1) NOT NULL,
  `msg_sender_client` BIT(1) NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE `invoice` (
  `invoice_id` bigint(7) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fk_child_id` bigint(7) UNSIGNED NOT NULL,
  `invoice_amount` float(6) NOT NULL,
  `invoice_period` int(2) UNSIGNED NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_paid` date
)
  ENGINE = InnoDB;

-- Add foreign keys
ALTER TABLE `user` ADD UNIQUE KEY `user_username` (`user_username`);
ALTER TABLE `child` ADD FOREIGN KEY (`fk_client_id`) REFERENCES user(user_id);
ALTER TABLE `message` ADD FOREIGN KEY (`fk_client_id`) REFERENCES user(user_id);
ALTER TABLE `invoice` ADD FOREIGN KEY (`fk_child_id`) REFERENCES child(child_id);


INSERT INTO user (
  user_profile_type, 
  user_deleted, 
  user_validated,
  user_username, 
  user_firstname,
  user_surname,
  user_email,
  user_password,
  user_street,
  user_city,
  user_zipcode,
  user_tel,
  user_inscription_date
  )
VALUES (
  0,
  0,
  1,
  'SuperAdmin',
  '',
  '',
  'superadmin@id-formation.fr',
  'superadmin',
  '',
  '',
  '',
  '',
  '2021-01-01'
  ),
  (
  1,
  0,
  1,
  'Admin',
  '',
  '',
  'admin@id-formation.fr',
  'Admin',
  '',
  '',
  '',
  '',
  '2021-01-01'
  ),
  (
  2,
  0,
  0,
  'ellaSana',
  'Ella',
  'Pa',
  'ella-pas@yahoo.fr',
  'ellaSana',
  '5 rue des fleurs',
  'Paris',
  '95400',
  '0132041986',
  '2021-08-12'
  ),
  (
  2,
  0,
  0,
  'samirMachin',
  'Samir',
  'Machin',
  'samir-machin@yahoo.fr',
  'samirMachin',
  '2 rue des fleurs',
  'Paris',
  '95400',
  '06132456886',
  '2021-08-18'
  )
  ;

INSERT INTO child (
  fk_client_id,
  child_firstname,
  child_surname,
  child_dob,
  child_inscription_date,
  child_allergies,
  child_board,
  child_deleted,
  child_validated
)
VALUES (
  3,
  'Sana',
  'Pa',
  '2013-03-30',
  '2021-08-12',
  'Gluten',
  1,
  0,
  0
),
(
  4,
  'Jerome',
  'Machin',
  '2012-07-14',
  '2021-08-12',
  'Boulot',
  1,
  0,
  1
),
(
  4,
  'Loic',
  'Machin',
  '2014-05-22',
  '2021-08-18',
  'Joie, travail, la vie, Zerina',
  2,
  0,
  1
);

INSERT INTO message (
  fk_client_id,
  msg_content,
  msg_date,
  msg_read,
  msg_sender_client
)
VALUES (
  3,
  "L'administrateur vous souhaite la bienvenue sur l'application cantine",
  '2021-08-12',
  0,
  0
),
(
  4,
  "L'administrateur vous souhaite la bienvenue sur l'application cantine",
  '2021-08-18',
  0,
  0
);

INSERT INTO invoice (
  fk_child_id,
  invoice_amount,
  invoice_period,
  invoice_date,
  invoice_paid
)
VALUES (
  2,
  35,
  "juillet",
  '2021-08-03',
  ''
),
(
  1,
  60,
  "juillet",
  '2021-08-03',
  ''
)
