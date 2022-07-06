-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jul-2022 às 02:04
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
  `referencias` longtext NOT NULL,
  `arquivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `biografias`
--

INSERT INTO `biografias` (`id`, `apelido`, `nome`, `foto`, `dataNas`, `dataFal`, `localNas`, `localFal`, `pais`, `pesFamosa`, `gpSocial`, `formacao`, `profissao`, `areac`, `mudancaGp`, `eventoHist`, `racaGen`, `contribuicao`, `legadoPerm`, `atoPoli`, `ideias`, `frase`, `referencias`, `arquivo`) VALUES
(3, ' Nicolau Maquiavel', ' Niccolò di Bernardo dei Machiavelli ', '6f13b1b72a7552c93062c4c2857219c8.webp', '1469-05-03', '1527-06-21', ' Florença ', ' Florença', 'Bernardo di Niccolò di Bouoninsegna e Bartolomea di Stefano Nelli.', ' Nenhuma', ' Nasceu em família modesta.', ' Diplomata', '  Diplomata', 'Sociologia', 'Em 1498, aos 29 anos de idade, que Maquiavel passa a exercer um cargo de destaque na vida pública, quando ocupa a Segunda Chancelaria, posição de grande responsabilidade administrativa no Estado.', 'Inicia o pensamento político moderno.', 'Ao longo de sua trajetória, sua condição de raça e gênero não teve grande influência\r\nem sua vida pública, nem profissional e acadêmica.', 'Maquiavel é conhecido como fundador do pensamento político moderno. Deixa de lado a política como algo idealizado, e escreve sobre ela como realmente é. \r\nEntre suas contribuições para a época estão suas obras, como: O Príncipe, Discursos sobre a primeira década de Tito Lívio, A mandrágora, A arte da guerra (não confundir com Sun Tzu).', 'Inicia o pensamento político moderno.', 'Em 1500, esteve presente no cerco à cidade de Pisa, na França, onde defendeu direitos de soldados contratados pelo então Rei francês, Luís XII.\r\nEm 1505, partiu em missões diplomáticas, no intuito de reunir aliados para Florença, no ano seguinte, sem sucesso em contratar mercenários, formou uma milicia nacional florentina, o que gerou escritos posteriormente.', 'O homem é mau por natureza.', ' “Os homens têm menos escrúpulos em ofender quem se faz amar do que quem se faz temer, pois o amor é mantido por vínculos de gratidão que se rompem quando deixam de ser necessários, já que os homens são egoístas; mas o temor é mantido pelo medo do castigo, que nunca falha.”\r\n\r\n“Os homens esquecem mais rapidamente a morte do pai do que a perda do patrimônio.”\r\n\r\n“As injúrias devem ser feitas todas de uma só vez, a fim de que, saboreando-as menos, ofendam menos: e os benefícios devem ser feitos pouco a pouco, a fim de que sejam mais bem saboreados.” ', 'FRAZÃO, Dilva. Biografia de Nicolau Maquiavel. Maquiavel, [s. l.], 2021. Disponível em: Biografia de Nicolau Maquiavel - eBiografia. Acesso em: 28 abr. 2022.\r\n\r\nGONÇALVES, Eugênio Mattioli. Princípios da Razão de Estado em O Príncipe, de Nicolau Maquiavel. [s. l.], v. 3, ed. 1, 2010. Disponível em: Princípios da Razão de Estado em O Príncipe, de Nicolau Maquiavel. Acesso em: 7 maio 2022.\r\n\r\nMAQUIAVEL, Nicolau. O Príncipe. [S. l.]: Edipro, 2019. 108 p. Disponível em: O Príncipe: Texto Integral eBook Kindle. Acesso em: 7 maio 2022.\r\n\r\nNEDERMAN, Cary. Niccolò Machiavelli. Maquiavel, [s. l.], 13 set. 2005. Disponível em: Niccolò Machiavelli (Stanford Encyclopedia of \r\nPhilosophy). Acesso em: 3 maio. 2022.\r\n\r\nOLIVEIRA, Marco. \"Maquiavel\"; Brasil Escola. Disponível em: Maquiavel: biografia, principais ideias, obras - Brasil Escola. Acesso em 03 de maio. 2022.\r\n\r\nSADEK, Maria Tereza. Nicolau Maquiavel: o cidadão sem fortuna, o intelectual de virtù. In: Clássicos da política [S.l: s.n.], 2002.\r\n\r\nVILLAR, Leandro. A Itália de Maquiavel. [s. l.], 12 jun. 2011. Disponível em: A Itália de Maquiavel. Acesso em: 7 maio 2022.', '739ab0415fc97a3018fa9b3e30065717.pdf'),
(4, 'Robespierre Pernambucano', 'Pedro da Silva Pedroso', 'f8bfbb3ebfd53dd950665be7c43edbbc', '1770-01-01', '1849-01-01', 'Recife', 'Rio de Janeiro', 'Não encontramos informações sobre os pais dele.', 'Não encontramos informações sobre.', '-', 'Não encontramos informações sobre.', 'Militar', 'História', '-', 'Pedro Pedroso fez parte da Revolução Pernambucana de 1817, movimento separatista que visava a instauração de uma república em Pernambuco, devido a insatisfação local em relação ao controle de Portugal sobre a região.', 'Chegou ao posto de capitão, maior posto que alguém de cor poderia conseguir na época.', '', '', '', '', '', '', 'f8bfbb3ebfd53dd950665be7c43edbbc');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
