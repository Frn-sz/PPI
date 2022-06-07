-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jun-2022 às 16:24
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ppi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `biografias`
--

CREATE TABLE `biografias` (
  `id` int(11) NOT NULL,
  `apelido` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `dataNas` date NOT NULL,
  `dataFal` date NOT NULL,
  `localNas` varchar(255) NOT NULL,
  `localFal` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `pesFamosa` varchar(255) NOT NULL,
  `gpSocial` longtext NOT NULL,
  `formacao` longtext NOT NULL,
  `profissao` longtext NOT NULL,
  `areac` longtext NOT NULL,
  `mudancaGp` longtext NOT NULL,
  `eventoHist` longtext NOT NULL,
  `racaGen` longtext NOT NULL,
  `contribuicao` longtext NOT NULL,
  `legadoPerm` longtext NOT NULL,
  `atoPoli` longtext NOT NULL,
  `ideias` longtext NOT NULL,
  `frase` longtext NOT NULL,
  `referencias` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `biografias`
--

INSERT INTO `biografias` (`id`, `apelido`, `nome`, `foto`, `dataNas`, `dataFal`, `localNas`, `localFal`, `pais`, `pesFamosa`, `gpSocial`, `formacao`, `profissao`, `areac`, `mudancaGp`, `eventoHist`, `racaGen`, `contribuicao`, `legadoPerm`, `atoPoli`, `ideias`, `frase`, `referencias`) VALUES
(2, 'a', 'a', '00b42240e143a596128d787bed733ba2.tmp', '2022-06-01', '2022-06-01', 'a', 'a', 'a', 'aa', 'a', 'a', 'a', 'a', 'aa', 'a', 'a', 'a', 'a', 'aa', 'a', 'a', 'a');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `biografias`
--
ALTER TABLE `biografias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `biografias`
--
ALTER TABLE `biografias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
