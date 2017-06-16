-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 16-Jun-2017 às 22:16
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `boletim`
--
CREATE DATABASE IF NOT EXISTS `boletim` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `boletim`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `AdministradorID` int(11) NOT NULL AUTO_INCREMENT,
  `AdministradorNome` varchar(220) NOT NULL,
  `AdministradorEmail` varchar(45) NOT NULL,
  `AdministradorSenha` varchar(50) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  `niveis_acesso_id` int(11) DEFAULT NULL,
  `situacoe_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`AdministradorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`AdministradorID`, `AdministradorNome`, `AdministradorEmail`, `AdministradorSenha`, `modified`, `created`, `niveis_acesso_id`, `situacoe_id`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `AlunoID` int(11) NOT NULL AUTO_INCREMENT,
  `AlunoNome` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `AlunoEmail` varchar(520) NOT NULL,
  `AlunoSenha` varchar(50) NOT NULL,
  `situacoe_id` int(11) DEFAULT '0',
  `niveis_acesso_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`AlunoID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`AlunoID`, `AlunoNome`, `created`, `modified`, `AlunoEmail`, `AlunoSenha`, `situacoe_id`, `niveis_acesso_id`) VALUES
(21, 'gustavo', '2017-06-09 21:49:54', '2017-06-15 12:01:59', 'gustavo@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 1),
(23, 'mateus', '2017-06-09 21:50:08', '2017-06-15 12:02:06', 'mateus@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 1),
(24, 'cesar', '2017-06-09 21:50:11', '2017-06-15 12:02:12', 'cesar@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 1),
(25, 'natanael', '2017-06-13 19:07:46', '2017-06-15 12:02:18', 'natanael@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `MateriaID` int(11) NOT NULL AUTO_INCREMENT,
  `MateriaNome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`MateriaID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`MateriaID`, `MateriaNome`, `created`, `modified`) VALUES
(18, 'BANCO DE DADOS', '2017-06-09 21:49:14', '2017-06-16 19:11:42'),
(20, 'PROGRAMAÃ‡ÃƒO PARA WEB', '2017-06-09 21:49:18', '2017-06-14 00:11:22'),
(21, 'ENGENHARIA DE SOFTWARE', '2017-06-09 21:49:21', '2017-06-14 00:11:27'),
(26, 'ANÃLISE E PROJETO DE SISTEMAS', '2017-06-09 21:49:33', '2017-06-14 00:11:40'),
(27, 'ALGORITMOS E PROGRAMAÃ‡ÃƒO DE COMPUTADORES', '2017-06-09 21:49:36', '2017-06-14 00:11:47'),
(29, 'INTRODUÃ‡ÃƒO Ã€ INFORMÃTICA', '2017-06-14 00:12:05', '2017-06-14 00:12:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-02-19 00:00:00', NULL),
(2, 'Colaborador', '2016-02-19 00:00:00', NULL),
(3, 'Cliente', '2016-02-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `NotaID` int(11) NOT NULL AUTO_INCREMENT,
  `AlunoID` int(11) NOT NULL,
  `MateriaID` int(11) NOT NULL,
  `Nota` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `NotaBimestre` int(11) NOT NULL,
  PRIMARY KEY (`NotaID`),
  KEY `fk_id_aluno_idx` (`AlunoID`),
  KEY `fk_id_materia_idx` (`MateriaID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Extraindo dados da tabela `notas`
--

INSERT INTO `notas` (`NotaID`, `AlunoID`, `MateriaID`, `Nota`, `created`, `modified`, `NotaBimestre`) VALUES
(5, 21, 18, 7, '2017-06-14 00:42:50', '2017-06-15 12:03:32', 3),
(12, 21, 18, 8, '2017-06-14 23:22:33', '2017-06-15 11:53:19', 4),
(16, 25, 18, 8, '2017-06-15 18:08:28', '2017-06-15 18:08:28', 1),
(17, 21, 20, 9.5, '2017-06-16 12:41:19', '2017-06-16 12:41:39', 1),
(18, 21, 20, 8, '2017-06-16 12:41:30', '2017-06-16 12:41:46', 2),
(19, 21, 20, 8.5, '2017-06-16 12:50:46', '2017-06-16 12:50:46', 3),
(20, 21, 20, 10, '2017-06-16 12:50:57', '2017-06-16 12:50:57', 4),
(21, 21, 21, 7.5, '2017-06-16 12:51:07', '2017-06-16 12:51:07', 1),
(22, 21, 21, 8, '2017-06-16 12:51:18', '2017-06-16 12:51:18', 2),
(23, 21, 21, 8.5, '2017-06-16 12:51:30', '2017-06-16 12:51:30', 3),
(24, 21, 21, 7.8, '2017-06-16 12:51:40', '2017-06-16 12:51:40', 4),
(25, 21, 18, 7, '2017-06-16 19:12:32', '2017-06-16 19:12:32', 1),
(26, 23, 18, 6, '2017-06-16 19:12:59', '2017-06-16 19:12:59', 1),
(27, 21, 18, 7, '2017-06-16 19:13:04', '2017-06-16 19:13:04', 2),
(28, 23, 18, 8, '2017-06-16 19:13:12', '2017-06-16 19:15:52', 2),
(29, 23, 18, 6, '2017-06-16 19:13:55', '2017-06-16 19:13:55', 3),
(30, 23, 18, 8, '2017-06-16 19:14:04', '2017-06-16 19:14:04', 4),
(31, 23, 20, 2, '2017-06-16 19:14:22', '2017-06-16 19:14:22', 1),
(32, 23, 20, 7, '2017-06-16 19:14:29', '2017-06-16 19:14:29', 2),
(33, 23, 20, 8, '2017-06-16 19:14:36', '2017-06-16 19:14:36', 3),
(34, 23, 20, 1, '2017-06-16 19:14:44', '2017-06-16 19:14:44', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `ProfessorID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ProfessorNome` varchar(220) NOT NULL,
  `ProfessorEmail` varchar(220) NOT NULL,
  `ProfessorSenha` varchar(45) NOT NULL,
  `situacoe_id` int(11) DEFAULT '0',
  `niveis_acesso_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`ProfessorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`ProfessorID`, `ProfessorNome`, `ProfessorEmail`, `ProfessorSenha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(2, 'mateus', 'mateus@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 2, '2017-06-14 22:59:51', '2017-06-16 18:23:31'),
(4, 'gustavo', 'gustavo@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 2, '2017-06-14 23:13:19', '2017-06-14 23:13:19'),
(13, 'cesar', 'cesar@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'natanael', 'natanael@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Cesar Celke', 'cesar@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 1, '2016-02-14 00:00:01', '2016-02-20 21:58:01'),
(2, 'Kelly', 'kelly@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 2, '2016-02-14 00:00:04', '2016-02-20 21:58:12'),
(3, 'Jessica', 'jessica@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 3, '2016-02-14 00:00:03', '2016-02-20 21:58:25'),
(5, 'Marcia', 'marcia@celke.com.br', '831efa4c96023f4e602ebf86ca27a1d1', 1, 1, '2016-01-01 10:10:01', '2016-02-20 21:58:57'),
(9, 'Gustavo', 'gustavoribeiro1011@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2016-02-20 20:48:44', NULL),
(10, 'Celke', 'cesar@celke.com.br', '123', 2, 3, '2016-02-20 20:49:02', NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_id_aluno` FOREIGN KEY (`AlunoID`) REFERENCES `alunos` (`AlunoID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_materia` FOREIGN KEY (`MateriaID`) REFERENCES `materias` (`MateriaID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
