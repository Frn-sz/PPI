-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jul-2022 às 18:33
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

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
  `referencias` longtext NOT NULL,
  `arquivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `biografias`
--

INSERT INTO `biografias` (`id`, `apelido`, `nome`, `foto`, `dataNas`, `dataFal`, `localNas`, `localFal`, `pais`, `pesFamosa`, `gpSocial`, `formacao`, `profissao`, `areac`, `mudancaGp`, `eventoHist`, `racaGen`, `contribuicao`, `legadoPerm`, `atoPoli`, `ideias`, `frase`, `referencias`, `arquivo`) VALUES
(3, 'Maquiavel', 'Nicolau', '6f13b1b72a7552c93062c4c2857219c8.webp', '2022-06-10', '2022-06-25', 'Florença', 'Florença', 'xxxxxx', 'Nenhuma', 'xxxxx', 'Diplomata', 'Diplomata', 'Física', '', 'Nenhum', '', 'O Príncipe', 'Inicia o pensamento político moderno.', 'Nenhum importante', 'O homem é mau por natureza.', 'Maquiavel', 'xxxxxx', '739ab0415fc97a3018fa9b3e30065717.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `foto`) VALUES
(1, 'Fernando', 'fernando@gmail.com', '$2y$10$EjUN0yd6MZpXzG91m65wKu9CKzbPWUksCHIQ3PI0rleGaUF67wB0y', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `biografias`
--
ALTER TABLE `biografias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `biografias`
--
ALTER TABLE `biografias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
