-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Out-2019 às 04:22
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
  `idAdmin` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdmin`, `login`, `senha`) VALUES
(0, 'O2', '1234567');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atualizacoes`
--

CREATE TABLE `atualizacoes` (
  `idAtualizacao` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `texto` varchar(10000) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `administrador_idAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atualizacoes`
--

INSERT INTO `atualizacoes` (`idAtualizacao`, `titulo`, `texto`, `descricao`, `administrador_idAdmin`) VALUES
(1, 'kknk', 'jkb', 'jbkb', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `idConsulta` int(11) NOT NULL,
  `data` date NOT NULL,
  `horario` varchar(45) NOT NULL,
  `paciente_idPaciente` int(11) NOT NULL,
  `Dentista_idDentista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentista`
--

CREATE TABLE `dentista` (
  `idDentista` int(11) NOT NULL,
  `CRO` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `fotoPerfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_atualizacoes`
--

CREATE TABLE `imagem_atualizacoes` (
  `idImg` int(11) NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `src` varchar(500) NOT NULL,
  `atualizacoes_idAtualizacao` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_tratamentos`
--

CREATE TABLE `imagem_tratamentos` (
  `idImg` int(11) NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `src` varchar(500) NOT NULL,
  `tratamentos_idTratamentos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `idPaciente` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `idade` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `administrador_idAdmin` int(11) NOT NULL,
  `fotoPerfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tratamentos`
--

CREATE TABLE `tratamentos` (
  `idTratamentos` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `texto` varchar(10000) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `administrador_idAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `atualizacoes`
--
ALTER TABLE `atualizacoes`
  ADD PRIMARY KEY (`idAtualizacao`),
  ADD UNIQUE KEY `idAtualizacao` (`idAtualizacao`),
  ADD UNIQUE KEY `idAtualizacao_2` (`idAtualizacao`),
  ADD KEY `administrador_idAdmin` (`administrador_idAdmin`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idConsulta`,`Dentista_idDentista`),
  ADD KEY `Dentista_idDentista` (`Dentista_idDentista`),
  ADD KEY `paciente_idPaciente` (`paciente_idPaciente`);

--
-- Indexes for table `dentista`
--
ALTER TABLE `dentista`
  ADD PRIMARY KEY (`idDentista`);

--
-- Indexes for table `imagem_atualizacoes`
--
ALTER TABLE `imagem_atualizacoes`
  ADD PRIMARY KEY (`idImg`),
  ADD KEY `atualizacoes_idAtualizacao` (`atualizacoes_idAtualizacao`);

--
-- Indexes for table `imagem_tratamentos`
--
ALTER TABLE `imagem_tratamentos`
  ADD PRIMARY KEY (`idImg`),
  ADD KEY `tratamentos_idTratamentos` (`tratamentos_idTratamentos`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`),
  ADD KEY `administrador_idAdmin` (`administrador_idAdmin`);

--
-- Indexes for table `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD PRIMARY KEY (`idTratamentos`),
  ADD KEY `administrador_idAdmin` (`administrador_idAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atualizacoes`
--
ALTER TABLE `atualizacoes`
  MODIFY `idAtualizacao` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atualizacoes`
--
ALTER TABLE `atualizacoes`
  ADD CONSTRAINT `atualizacoes_ibfk_1` FOREIGN KEY (`administrador_idAdmin`) REFERENCES `administrador` (`idAdmin`);

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`Dentista_idDentista`) REFERENCES `dentista` (`idDentista`),
  ADD CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`);

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
