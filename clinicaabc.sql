-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2019 às 19:27
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clinicaabc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdmin`, `login`, `senha`) VALUES
(1, 'dfsaI', '4564df643');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atualizacoes`
--

CREATE TABLE `atualizacoes` (
  `idAtualizacao` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `texto` varchar(10000) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `administrador_idAdmin` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atualizacoes`
--

INSERT INTO `atualizacoes` (`idAtualizacao`, `titulo`, `texto`, `descricao`, `administrador_idAdmin`) VALUES
(8, 'WEFCHbwf', 'iUFBHFB', 'JDCUICB', 1),
(9, 'dhfdf', 'hadfsdfh', 'hdfssdh', NULL),
(10, '~Foi?', 'DSJHSD', 'DSFJGHDFJ', NULL),
(11, '~Foi?', 'DSJHSD', 'DSFJGHDFJ', NULL),
(12, 'cvd', 'dsfgsd', 'rgerg', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `idConsulta` bigint(20) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `horario` varchar(45) NOT NULL,
  `paciente_idPaciente` bigint(20) UNSIGNED NOT NULL,
  `Dentista_idDentista` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentista`
--

CREATE TABLE `dentista` (
  `idDentista` bigint(20) UNSIGNED NOT NULL,
  `CRO` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `fotoPerfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dentista`
--

INSERT INTO `dentista` (`idDentista`, `CRO`, `nome`, `fotoPerfil`) VALUES
(1, '10231', 'ABHJ', 'imahge');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_atualizacoes`
--

CREATE TABLE `imagem_atualizacoes` (
  `idImg` bigint(20) UNSIGNED NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `src` varchar(500) NOT NULL,
  `atualizacoes_idAtualizacao` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_tratamentos`
--

CREATE TABLE `imagem_tratamentos` (
  `idImg` bigint(20) UNSIGNED NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `src` varchar(500) NOT NULL,
  `tratamentos_idTratamentos` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `idade` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `administrador_idAdmin` bigint(20) UNSIGNED NOT NULL,
  `fotoPerfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tratamentos`
--

CREATE TABLE `tratamentos` (
  `idTratamentos` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `texto` varchar(10000) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `administrador_idAdmin` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `idAdmin` (`idAdmin`);

--
-- Índices para tabela `atualizacoes`
--
ALTER TABLE `atualizacoes`
  ADD PRIMARY KEY (`idAtualizacao`),
  ADD KEY `administrador_idAdmin` (`administrador_idAdmin`);

--
-- Índices para tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idConsulta`),
  ADD UNIQUE KEY `idConsulta` (`idConsulta`),
  ADD KEY `paciente_idPaciente` (`paciente_idPaciente`),
  ADD KEY `Dentista_idDentista` (`Dentista_idDentista`);

--
-- Índices para tabela `dentista`
--
ALTER TABLE `dentista`
  ADD PRIMARY KEY (`idDentista`),
  ADD UNIQUE KEY `idDentista` (`idDentista`);

--
-- Índices para tabela `imagem_atualizacoes`
--
ALTER TABLE `imagem_atualizacoes`
  ADD PRIMARY KEY (`idImg`),
  ADD UNIQUE KEY `idImg` (`idImg`),
  ADD KEY `atualizacoes_idAtualizacao` (`atualizacoes_idAtualizacao`);

--
-- Índices para tabela `imagem_tratamentos`
--
ALTER TABLE `imagem_tratamentos`
  ADD PRIMARY KEY (`idImg`),
  ADD UNIQUE KEY `idImg` (`idImg`),
  ADD KEY `tratamentos_idTratamentos` (`tratamentos_idTratamentos`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`),
  ADD UNIQUE KEY `idPaciente` (`idPaciente`),
  ADD KEY `administrador_idAdmin` (`administrador_idAdmin`);

--
-- Índices para tabela `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD PRIMARY KEY (`idTratamentos`),
  ADD UNIQUE KEY `idTratamentos` (`idTratamentos`),
  ADD KEY `administrador_idAdmin` (`administrador_idAdmin`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `atualizacoes`
--
ALTER TABLE `atualizacoes`
  MODIFY `idAtualizacao` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idConsulta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `dentista`
--
ALTER TABLE `dentista`
  MODIFY `idDentista` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imagem_atualizacoes`
--
ALTER TABLE `imagem_atualizacoes`
  MODIFY `idImg` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imagem_tratamentos`
--
ALTER TABLE `imagem_tratamentos`
  MODIFY `idImg` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPaciente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tratamentos`
--
ALTER TABLE `tratamentos`
  MODIFY `idTratamentos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

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
-- Limitadores para a tabela `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD CONSTRAINT `tratamentos_ibfk_1` FOREIGN KEY (`administrador_idAdmin`) REFERENCES `administrador` (`idAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
