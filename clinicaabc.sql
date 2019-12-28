-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Dez-2019 às 02:47
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinicaabc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdmin`, `nome`, `categoria`, `email`, `login`, `senha`) VALUES
(1, 'God', 'Super User', 'dios@live.com', 'Deus', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

CREATE TABLE `anuncios` (
  `idAnuncio` bigint(11) NOT NULL,
  `nome` varchar(1000) NOT NULL,
  `src` varchar(1000) NOT NULL,
  `administrador_idAdmin` bigint(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `anuncios`
--

INSERT INTO `anuncios` (`idAnuncio`, `nome`, `src`, `administrador_idAdmin`) VALUES
(2, 'inicio', 'anuncio-home.png', 1),
(3, 'inicio2', 'anuncio-home.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atualizacoes`
--

CREATE TABLE `atualizacoes` (
  `idAtualizacao` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `texto` varchar(10000) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `publicacao` varchar(10) NOT NULL,
  `administrador_idAdmin` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atualizacoes`
--

INSERT INTO `atualizacoes` (`idAtualizacao`, `titulo`, `texto`, `descricao`, `publicacao`, `administrador_idAdmin`) VALUES
(92, 'com imh', 'jdk', 'jek', '2019-10-16', 1),
(93, 'Noticia tal', 'No meu xinÃ©lo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam.', 'TEXTE', '2019-11-27', 1),
(94, 'editou?', 'ghbnmvm', 'nbcbn', '2019-11-20', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `idConsulta` bigint(20) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `horario` varchar(45) NOT NULL,
  `mensagem` varchar(500) DEFAULT NULL,
  `paciente_idPaciente` bigint(20) UNSIGNED DEFAULT NULL,
  `Dentista_idDentista` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`idConsulta`, `data`, `horario`, `mensagem`, `paciente_idPaciente`, `Dentista_idDentista`) VALUES
(2, '2019-10-09', '18:00', NULL, 1, 4),
(3, '2019-10-03', '10:30', NULL, 1, 6),
(4, '2019-11-07', '18:00', NULL, 1, 6),
(5, '2019-11-07', '18:00', NULL, 1, 6),
(14, '2019-10-10', '10:30', NULL, 1, 6),
(15, '2019-10-10', '10:00', NULL, 1, 6),
(16, '2019-10-10', '10:00', NULL, 1, 6),
(17, '2019-10-10', '10:00', NULL, 1, 6),
(18, '2019-10-10', '10:00', NULL, 1, 4),
(22, '2019-10-10', '10:00', NULL, 1, 4),
(23, '2019-11-07', '09:00', NULL, 1, 6),
(27, '2019-11-13', '09:00', '', 4, 6),
(28, '2019-11-14', '09:00', 'giuguig', 4, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentista`
--

CREATE TABLE `dentista` (
  `idDentista` bigint(20) UNSIGNED NOT NULL,
  `CRO` varchar(45) NOT NULL,
  `nomeDentista` varchar(45) NOT NULL,
  `especializacao` varchar(100) NOT NULL,
  `perfilDentista` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dentista`
--

INSERT INTO `dentista` (`idDentista`, `CRO`, `nomeDentista`, `especializacao`, `perfilDentista`) VALUES
(1, '654789/RS', 'Jalma da Boa Morte', 'Ortodontia', 'dentista-2.jpg'),
(4, '54673/RS', 'Gumercinda da Luz', 'Periodontista', 'dentista-1.jpg'),
(5, '98765/RS', 'Joeferson Catarrinho', 'Implantodontia', 'dentista-3.jpg'),
(6, '654352/RJ', 'Dentista Feliz ', 'Ortodontia', 'dentista.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_atualizacoes`
--

CREATE TABLE `imagem_atualizacoes` (
  `idImg` bigint(20) UNSIGNED NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `src` varchar(500) NOT NULL,
  `atualizacoes_idAtualizacao` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagem_atualizacoes`
--

INSERT INTO `imagem_atualizacoes` (`idImg`, `Titulo`, `src`, `atualizacoes_idAtualizacao`) VALUES
(1, 'com imh', 'ceibal3.png', 92),
(2, 'Noticia tal', 'cerp-logo.png', 93),
(3, 'editou?', 'ceibal3.png', 94);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_tratamentos`
--

CREATE TABLE `imagem_tratamentos` (
  `idImg` bigint(20) UNSIGNED NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `src` varchar(500) NOT NULL,
  `tratamentos_idTratamentos` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagem_tratamentos`
--

INSERT INTO `imagem_tratamentos` (`idImg`, `Titulo`, `src`, `tratamentos_idTratamentos`) VALUES
(6, 'Clareamento', 'clareamento.jpg', 3),
(7, 'Ortodontia', 'aparelho-ortodontico.jpg', 4),
(9, 'Clinica Geral', 'clinica-geral.jpg', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `idPaciente` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `nascimento` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `administrador_idAdmin` bigint(20) UNSIGNED DEFAULT NULL,
  `fotoPerfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`idPaciente`, `nome`, `telefone`, `email`, `endereco`, `nascimento`, `login`, `senha`, `administrador_idAdmin`, `fotoPerfil`) VALUES
(1, 'Jurandir', '6666-6666', 'jurandir100porcento@live.com', 'indefinido', '19/09/2019', 'juju', '02e51eb6cff1fd9914f84b1d03c352d9', 1, 'porco.png'),
(3, 'Orlindio', '89095869', 'orlindinho@yahoo.com', 'Onde o vento fez a curva', '2000-10-17', 'orlindinho', '12345', 1, 'cerp-logo.png'),
(4, 'Jurandio', '123456', 'marcinhasurfista@gmail.com', 'Onde o vento fez a curva', '19/09/2019', 'jur', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'porco.png'),
(5, 'bb', '234567890-976', 'nhhghgh@gm.vom', 'indefinido', '2019-11-07', 'cghhbv', 'e10adc3949ba59abbe56e057f20f883e', 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `idSobre` int(11) NOT NULL,
  `dia` varchar(45) NOT NULL,
  `manha` varchar(45) NOT NULL,
  `tarde` varchar(45) NOT NULL,
  `administrador_idAdmin` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`idSobre`, `dia`, `manha`, `tarde`, `administrador_idAdmin`) VALUES
(1, 'Segunda-feira', '08:00 - 12:00', '14:00 - 18:00', 1),
(2, 'TerÃ§a-feira', '08:00 - 12:00', '14:00 - 18:00', 1),
(3, 'Quarta-feira', '08:00 - 12:00', '14:00 - 18:00', 1),
(4, 'Quinta-feira', '08:00 - 12:00', '14:00 - 18:00', 1),
(7, 'Sexta-feira', '08:00 - 12:00', '14:00 - 18:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tratamentos`
--

CREATE TABLE `tratamentos` (
  `idTratamentos` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `publicacao` varchar(10) NOT NULL,
  `administrador_idAdmin` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tratamentos`
--

INSERT INTO `tratamentos` (`idTratamentos`, `titulo`, `descricao`, `publicacao`, `administrador_idAdmin`) VALUES
(3, 'Clareamento', 'A DentÃ­stica tem como objetivo proporcionar ao paciente um sorriso lindo e uma perfeita saÃºde bucal atravÃ©s de clareamento dental, restauraÃ§Ãµes e outros tratamentos estÃ©ticos.', '2019-10-31', NULL),
(4, 'Ortodontia', 'A funÃ§Ã£o principal do tratamento ortodÃ´ntico Ã© restabelecer a oclusÃ£o dentÃ¡ria (perfeito engrenamento dos dentes superiores com os inferiores), que Ã© fundamental para a correta mastigaÃ§Ã£o e, consequentemente, a adequada nutriÃ§Ã£o e saÃºde b', '2019-10-31', NULL),
(6, 'Clinica Geral', 'Entre as competÃªncias do dentista clÃ­nico geral estÃ£o: prevenÃ§Ã£o, diagnÃ³stico e tratamento de uma ampla variedade de condiÃ§Ãµes, desordens e doenÃ§as dos dentes e gengivas.', '2019-10-31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `idAdmin` (`idAdmin`);

--
-- Indexes for table `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`idAnuncio`),
  ADD KEY `administrador_idAdmin` (`administrador_idAdmin`);

--
-- Indexes for table `atualizacoes`
--
ALTER TABLE `atualizacoes`
  ADD PRIMARY KEY (`idAtualizacao`),
  ADD KEY `administrador_idAdmin` (`administrador_idAdmin`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idConsulta`),
  ADD UNIQUE KEY `idConsulta` (`idConsulta`),
  ADD KEY `paciente_idPaciente` (`paciente_idPaciente`),
  ADD KEY `Dentista_idDentista` (`Dentista_idDentista`);

--
-- Indexes for table `dentista`
--
ALTER TABLE `dentista`
  ADD PRIMARY KEY (`idDentista`),
  ADD UNIQUE KEY `idDentista` (`idDentista`);

--
-- Indexes for table `imagem_atualizacoes`
--
ALTER TABLE `imagem_atualizacoes`
  ADD PRIMARY KEY (`idImg`),
  ADD UNIQUE KEY `idImg` (`idImg`),
  ADD KEY `atualizacoes_idAtualizacao` (`atualizacoes_idAtualizacao`);

--
-- Indexes for table `imagem_tratamentos`
--
ALTER TABLE `imagem_tratamentos`
  ADD PRIMARY KEY (`idImg`),
  ADD UNIQUE KEY `idImg` (`idImg`),
  ADD KEY `tratamentos_idTratamentos` (`tratamentos_idTratamentos`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`),
  ADD UNIQUE KEY `idPaciente` (`idPaciente`),
  ADD KEY `administrador_idAdmin` (`administrador_idAdmin`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`idSobre`),
  ADD KEY `administrador_idAdmin` (`administrador_idAdmin`);

--
-- Indexes for table `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD PRIMARY KEY (`idTratamentos`),
  ADD UNIQUE KEY `idTratamentos` (`idTratamentos`),
  ADD KEY `administrador_idAdmin` (`administrador_idAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `idAnuncio` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `atualizacoes`
--
ALTER TABLE `atualizacoes`
  MODIFY `idAtualizacao` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idConsulta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `dentista`
--
ALTER TABLE `dentista`
  MODIFY `idDentista` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `imagem_atualizacoes`
--
ALTER TABLE `imagem_atualizacoes`
  MODIFY `idImg` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imagem_tratamentos`
--
ALTER TABLE `imagem_tratamentos`
  MODIFY `idImg` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPaciente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `idSobre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tratamentos`
--
ALTER TABLE `tratamentos`
  MODIFY `idTratamentos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `anuncios_ibfk_1` FOREIGN KEY (`administrador_idAdmin`) REFERENCES `administrador` (`idAdmin`);

--
-- Limitadores para a tabela `atualizacoes`
--
ALTER TABLE `atualizacoes`
  ADD CONSTRAINT `administrador_idAdmin` FOREIGN KEY (`administrador_idAdmin`) REFERENCES `administrador` (`idAdmin`);

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`),
  ADD CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`Dentista_idDentista`) REFERENCES `dentista` (`idDentista`);

--
-- Limitadores para a tabela `imagem_atualizacoes`
--
ALTER TABLE `imagem_atualizacoes`
  ADD CONSTRAINT `imagem_atualizacoes_ibfk_1` FOREIGN KEY (`atualizacoes_idAtualizacao`) REFERENCES `atualizacoes` (`idAtualizacao`);

--
-- Limitadores para a tabela `imagem_tratamentos`
--
ALTER TABLE `imagem_tratamentos`
  ADD CONSTRAINT `imagem_tratamentos_ibfk_1` FOREIGN KEY (`tratamentos_idTratamentos`) REFERENCES `tratamentos` (`idTratamentos`);

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`administrador_idAdmin`) REFERENCES `administrador` (`idAdmin`);

--
-- Limitadores para a tabela `sobre`
--
ALTER TABLE `sobre`
  ADD CONSTRAINT `sobre_ibfk_1` FOREIGN KEY (`administrador_idAdmin`) REFERENCES `administrador` (`idAdmin`);

--
-- Limitadores para a tabela `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD CONSTRAINT `tratamentos_ibfk_1` FOREIGN KEY (`administrador_idAdmin`) REFERENCES `administrador` (`idAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
