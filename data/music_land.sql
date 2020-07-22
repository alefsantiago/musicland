-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 03-Jun-2020 às 22:01
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music land`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_artistas`
--

CREATE TABLE `cadastro_artistas` (
  `id` int(11) NOT NULL,
  `musico` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `senha` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `confimar_senha` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `country` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `data_envio` date NOT NULL,
  `hora_envio` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `cadastro_artistas`
--

INSERT INTO `cadastro_artistas` (`id`, `musico`, `email`, `senha`, `confimar_senha`, `country`, `data_envio`, `hora_envio`) VALUES
(1, 'metallica', 'alefzell13@gmail.com', 'd335e82f9427bb0af398d170faea0a', 'd41d8cd98f00b204e9800998ecf842', 'Paraguai', '2020-06-03', '18:23:31'),
(3, '', 'alefzell13@gmail.com', 'd335e82f9427bb0af398d170faea0a', 'd41d8cd98f00b204e9800998ecf842', '', '2020-06-03', '18:27:13'),
(4, '', 'alefzell13@gmail.com', 'd335e82f9427bb0af398d170faea0a', 'd41d8cd98f00b204e9800998ecf842', '', '2020-06-03', '18:27:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_gravadoras`
--

CREATE TABLE `cadastro_gravadoras` (
  `id` int(11) NOT NULL,
  `gravadora` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `cnpj` int(11) DEFAULT NULL,
  `email` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `senha` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `confimar_senha` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `data_envio` date NOT NULL,
  `hora_envio` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `cadastro_gravadoras`
--

INSERT INTO `cadastro_gravadoras` (`id`, `gravadora`, `cnpj`, `email`, `senha`, `confimar_senha`, `data_envio`, `hora_envio`) VALUES
(12, 'albuquerque', 261627678, 'alef@gmail.com', 'd335e82f9427bb0af398d170faea0a', 'd41d8cd98f00b204e9800998ecf842', '2020-06-03', '17:55:03'),
(13, '', 0, 'alefzell13@gmail.com', 'd335e82f9427bb0af398d170faea0a', 'd41d8cd98f00b204e9800998ecf842', '2020-06-03', '18:27:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_users`
--

CREATE TABLE `cadastro_users` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `senha` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `confimar_senha` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `data_envio` date NOT NULL,
  `hora_envio` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `cadastro_users`
--

INSERT INTO `cadastro_users` (`id`, `nome`, `email`, `senha`, `confimar_senha`, `data_envio`, `hora_envio`) VALUES
(16, 'Music Land', 'alefzell13@gmail.com', 'd335e82f9427bb0af398d170faea0ab1', 'd41d8cd98f00b204e9800998ecf8427e', '2020-06-03', '17:58:02'),
(17, '', 'alefzell13@gmail.com', 'd335e82f9427bb0af398d170faea0ab1', 'd41d8cd98f00b204e9800998ecf8427e', '2020-06-03', '18:27:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(28) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mensagem` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `data_envio` date NOT NULL,
  `hora_envio` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `mensagem`, `data_envio`, `hora_envio`) VALUES
(78, 'alef', 'projeto@gmail.com', 'sada', '2020-05-28', '22:06:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_artistas`
--
ALTER TABLE `cadastro_artistas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro_gravadoras`
--
ALTER TABLE `cadastro_gravadoras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro_users`
--
ALTER TABLE `cadastro_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_artistas`
--
ALTER TABLE `cadastro_artistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cadastro_gravadoras`
--
ALTER TABLE `cadastro_gravadoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cadastro_users`
--
ALTER TABLE `cadastro_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
