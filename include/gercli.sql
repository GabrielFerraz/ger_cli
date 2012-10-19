-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 19/10/2012 às 04h28min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `gercli`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(140) NOT NULL,
  `email` varchar(140) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`, `id_user`) VALUES
(2, 'Gabriel Ferraz', 'gabrielmaiaferraz@gmail.com', '91281710', 4),
(5, 'Genesio Valois', 'genesio@shemale.com', '99242424', 0),
(12, 'Gabriel Ferraz Editado', 'gabaum@gmail.com', '992889209', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `negociacoes`
--

CREATE TABLE IF NOT EXISTS `negociacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `responsavel` varchar(50) NOT NULL,
  `proposta` varchar(20) NOT NULL,
  `reuniao` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_solicitação` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `negociacoes`
--

INSERT INTO `negociacoes` (`id`, `id_cliente`, `responsavel`, `proposta`, `reuniao`, `status`, `id_solicitação`) VALUES
(1, 2, 'Erik', 'Não Enviada', 'Pendente', 'Contratado', 0),
(4, 5, 'Joaquim', 'Não Enviada', 'Pendente', 'Contratado', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE IF NOT EXISTS `projetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_negociacao` int(11) DEFAULT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date NOT NULL,
  `parcelas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `id_negociacao`, `data_inicio`, `data_final`, `parcelas`) VALUES
(1, 1, '2012-10-17', '2012-10-24', 3),
(2, 4, '2012-10-22', '2012-10-31', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
--

CREATE TABLE IF NOT EXISTS `solicitacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `pedido` text NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `solicitacoes`
--

INSERT INTO `solicitacoes` (`id`, `id_cliente`, `pedido`, `status`) VALUES
(6, 5, 'asfdsffasdfasdfasdf asdf asodjfa [sdf;al sdlkajsd;lfkjl kjasdkf j;askldfj asdfs  asdfasdfastestedfas', 'Não Respondido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `permissao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `login`, `senha`, `permissao`) VALUES
(3, 'joaquim', '12345', 1),
(4, 'gabrielferraz', 'gabrielferraz', 2),
(12, 'gabaum@gmail.com', 'gabaum@gmail.com', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
