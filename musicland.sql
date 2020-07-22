-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 30-Jun-2020 às 17:02
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `musicland`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

DROP TABLE IF EXISTS `artista`;
CREATE TABLE IF NOT EXISTS `artista` (
  `idArt` int(11) NOT NULL AUTO_INCREMENT,
  `nomeArt` varchar(50) NOT NULL,
  `emailArt` varchar(100) NOT NULL,
  `senhaArt` varchar(30) NOT NULL,
  `fotoArt` varchar(50) DEFAULT NULL,
  `planoArt` char(1) NOT NULL DEFAULT '0',
  `descArt` text,
  `generoBand` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`idArt`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `artista`
--

INSERT INTO `artista` (`idArt`, `nomeArt`, `emailArt`, `senhaArt`, `fotoArt`, `planoArt`, `descArt`, `generoBand`) VALUES
(1, 'Glaucera Rockers', 'Rockers@gmail.com', '1234', 'bdd70892bb106e9ef77ca89b091249c1.jpg', '0', 'Uma nova Banda que Vai mudar seu conceito de Rock in Roll', '7'),
(2, 'Sidoka', 'doka@gmail.com', '1234', '403eec483c685d16f053557d4ff83298.jpg', '0', 'DOKA ELA DOKAA', '6'),
(3, 'Djonga', 'Djonga@gmail.com', '1234', '4f4927da88d13bf428fcf20908825ed0.jpg', '0', 'DJ onga Apenas', '6'),
(4, 'thiago', 'thiguinhoforro@gmail.com', '1234', '8595823a5484aaa1528f43eb414c37c8.jpg', '0', 'thiago', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

DROP TABLE IF EXISTS `generos`;
CREATE TABLE IF NOT EXISTS `generos` (
  `idGen` int(11) NOT NULL AUTO_INCREMENT,
  `nomeGen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Nenhum',
  PRIMARY KEY (`idGen`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`idGen`, `nomeGen`) VALUES
(1, 'Não espicifico'),
(2, 'Forró'),
(3, 'Gospel'),
(4, 'Eletronica'),
(5, 'Funk'),
(6, 'Hip-Hop'),
(7, 'Rock'),
(8, 'MPB'),
(9, 'Samba'),
(10, 'Raggae');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gravadora`
--

DROP TABLE IF EXISTS `gravadora`;
CREATE TABLE IF NOT EXISTS `gravadora` (
  `idGrav` int(11) NOT NULL AUTO_INCREMENT,
  `nomeGrav` varchar(50) NOT NULL,
  `cnpjGrav` varchar(14) NOT NULL,
  `emailGrav` varchar(100) NOT NULL,
  `senhaGrav` varchar(30) NOT NULL,
  `fotoGrav` varchar(50) DEFAULT NULL,
  `planoUsu` char(1) NOT NULL DEFAULT '0',
  `descGrav` text,
  PRIMARY KEY (`idGrav`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `gravadora`
--

INSERT INTO `gravadora` (`idGrav`, `nomeGrav`, `cnpjGrav`, `emailGrav`, `senhaGrav`, `fotoGrav`, `planoUsu`, `descGrav`) VALUES
(1, 'GravaBrasil', '43398923000156', 'Teste@gmail.com', '1234', 'bdd70892bb106e9ef77ca89b091249c1.jpg', '0', 'Startup em busca de novos Talentos'),
(2, 'Glaucer', '43398923000156', 'testando@gmail.com', '1234', '9ff3cf552f4567563144031c47cc2713.jpg', '0', 'kfasgsagfafsfsaafsasgas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

DROP TABLE IF EXISTS `musicas`;
CREATE TABLE IF NOT EXISTS `musicas` (
  `idMusica` int(11) NOT NULL AUTO_INCREMENT,
  `nomeMusica` varchar(60) NOT NULL,
  `linkMusica` text NOT NULL,
  `platMusica` int(1) NOT NULL,
  `idGen` int(11) NOT NULL,
  `idArt` int(11) NOT NULL,
  PRIMARY KEY (`idMusica`),
  KEY `fkMusica` (`idGen`),
  KEY `fkArtistaMusica` (`idArt`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `musicas`
--

INSERT INTO `musicas` (`idMusica`, `nomeMusica`, `linkMusica`, `platMusica`, `idGen`, `idArt`) VALUES
(1, 'Mlks de Sp', '2cWCwWJTozhsGxmvrJJaXn?si=f8ZPFNkdSfWMWAQTJg7F3g', 1, 3, 1),
(2, 'Brilho', '19Jjfmq5r74zSjuJPx9r5P?si=mKTlIQJ4RQGMVAaFnDLUQQ', 1, 4, 1),
(6, 'O Cara de Óculos', '1chg0t03u3PDcYwABCYWKG?si=HPjAW8OjQ4uCKqtBU6w3Nw', 1, 5, 3),
(4, 'Quadro', '55tDrclRHCHXIoPwyPHlVn?si=x9MyPH_9RC6c3BlEBKMF3g', 1, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsu` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsu` varchar(50) NOT NULL,
  `emailUsu` varchar(100) NOT NULL,
  `senhaUsu` varchar(30) NOT NULL,
  `fotoUsu` varchar(50) DEFAULT NULL,
  `planoUsu` char(1) NOT NULL DEFAULT '0',
  `descUsu` text,
  `favUsu` char(1) DEFAULT NULL,
  PRIMARY KEY (`idUsu`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsu`, `nomeUsu`, `emailUsu`, `senhaUsu`, `fotoUsu`, `planoUsu`, `descUsu`, `favUsu`) VALUES
(1, 'Thiago', 'thiago@gmail.com', '1234', '7742284996246d02902c6702a429f14a.png', '0', '1234', NULL),
(2, 'Thiago', 'thiago1@gmail.com', '1234', '47544ff57e431a5de3b8fcbfab4998c6.jpg', '0', '1234', NULL),
(3, 'Rockers', 'Rocker@gmail.com', '1234', '8c2962609bf732694f58b85842a78106.png', '0', 'Somos a melhor banda de Rock do Brasil', NULL),
(4, 'admin', 'admin@admin', 'admin', 'b54ba06b202d8e48a5137063aa62e0b4.jpg', '0', 'Ademir GOD', NULL),
(5, 'Thiago', 'thiagomelo@gmail.com', '1234', 'f736f1d61e8842678a2c68cc34274b1b.jpg', '0', 'Thiago Professor', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
