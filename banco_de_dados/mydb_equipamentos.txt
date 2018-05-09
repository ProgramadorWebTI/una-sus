-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2018 às 19:51
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb_equipamentos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cargo`
--

CREATE TABLE `tb_cargo` (
  `id` int(11) NOT NULL,
  `cargo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cargo`
--

INSERT INTO `tb_cargo` (`id`, `cargo`) VALUES
(3, 'Administrativo'),
(23, 'Analista de Sistema'),
(28, 'RH'),
(29, 'Bolsista'),
(30, 'Designer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_devolucao`
--

CREATE TABLE `tb_devolucao` (
  `id` int(11) NOT NULL,
  `data_devolucao` date NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `emprestimo_equipamento_equipamentos_id` int(11) NOT NULL,
  `emprestimo_equipamento_emprestimo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_devolucao`
--

INSERT INTO `tb_devolucao` (`id`, `data_devolucao`, `usuario_id`, `emprestimo_equipamento_equipamentos_id`, `emprestimo_equipamento_emprestimo_id`) VALUES
(2, '0000-00-00', 3, 2, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_emprestimo`
--

CREATE TABLE `tb_emprestimo` (
  `id` int(11) NOT NULL,
  `data_emprestimo` date NOT NULL,
  `pessoas_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_emprestimo`
--

INSERT INTO `tb_emprestimo` (`id`, `data_emprestimo`, `pessoas_id`, `usuario_id`) VALUES
(5, '2018-05-08', 16, 2),
(6, '2018-05-08', 16, 2),
(7, '2018-05-09', 11, 2),
(8, '2018-05-16', 11, 2),
(9, '2018-05-24', 16, 2),
(10, '2018-05-11', 14, 3),
(11, '2018-05-30', 17, 3),
(12, '2018-05-21', 15, 3),
(13, '2018-05-31', 18, 2),
(14, '0000-00-00', 15, 2),
(15, '0000-00-00', 11, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_emprestimo_equipamento`
--

CREATE TABLE `tb_emprestimo_equipamento` (
  `equipamentos_id` int(11) NOT NULL,
  `emprestimo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_emprestimo_equipamento`
--

INSERT INTO `tb_emprestimo_equipamento` (`equipamentos_id`, `emprestimo_id`) VALUES
(2, 5),
(3, 8),
(4, 5),
(4, 6),
(4, 14),
(5, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_equipamento`
--

CREATE TABLE `tb_equipamento` (
  `id` int(11) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `serial` varchar(45) NOT NULL,
  `nota_fiscal` varchar(45) NOT NULL,
  `data_compra` date NOT NULL,
  `patrimonio` varchar(45) NOT NULL,
  `observacao` text NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_equipamento`
--

INSERT INTO `tb_equipamento` (`id`, `descricao`, `modelo`, `serial`, `nota_fiscal`, `data_compra`, `patrimonio`, `observacao`, `data_cadastro`) VALUES
(2, 'Computador', 'hp-3025', '5465164619', '695465656das6d65', '2018-05-07', 'rpk-45', 'da hora mano', '2018-05-07'),
(3, 'impressora', 'hp1000', '654ddsa6', '6d6as6d1as6d65aasd', '2018-05-07', 'hp1923', 'nada nao', '2018-05-07'),
(4, 'Celular', 'Quantum GO', '3213213212132153', 'sem nota fical', '2017-01-01', 'Particular', 'Um celular bonito, muito bom.', '2018-05-08'),
(5, 'Xicara', 'xicara muito da hora', '321321321321', '2545646eqw', '1990-01-01', 'Saude', 'uma xícara de tomar café muito maneira', '2018-05-08'),
(6, 'Relogio', 'mormai', '312341', '312345312312132121123', '2014-08-05', 'SUS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-05-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`id`, `nome`, `cpf`, `email`, `telefone`, `cargo_id`) VALUES
(11, 'Thamiles da Silva', '457.789.904-45', 'Tata@gmail.com', '67985663980', 3),
(14, 'João Arnaldo de Araujo', '234.534.545-35', 'Joaoga@gmail.com', '(61)9 9999-9999', 29),
(15, 'Karla Maria', '252.455.454-53', 'Karla@hotmail.com', '(61)9 8765-4312', 3),
(16, 'Heuder Rodrigues de Sena', '524.877.785-87', 'programadorwebti@gmail.com', '(61)9 9302-9884', 23),
(17, 'Diego Rodrigues de Sena', '785.255.554-55', 'admin@admin.com', '(61)9 9302-9884', 23),
(18, 'Janaína Pinheiro Vargas', '626.366.617-28', 'jane@yahoo.com', '(65)7 4773-8848', 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `ativo` char(1) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `usuario`, `senha`, `ativo`, `data_cadastro`) VALUES
(2, 'admin', 'admin', '1', '2018-05-06'),
(3, 'heuder.sena', '123', '1', '2018-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cargo`
--
ALTER TABLE `tb_cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_devolucao`
--
ALTER TABLE `tb_devolucao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_devolução_usuario1_idx` (`usuario_id`),
  ADD KEY `fk_devolução_emprestimo_equipamento1_idx` (`emprestimo_equipamento_equipamentos_id`,`emprestimo_equipamento_emprestimo_id`);

--
-- Indexes for table `tb_emprestimo`
--
ALTER TABLE `tb_emprestimo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_emprestimo_pessoas1_idx` (`pessoas_id`),
  ADD KEY `fk_emprestimo_usuario1_idx` (`usuario_id`);

--
-- Indexes for table `tb_emprestimo_equipamento`
--
ALTER TABLE `tb_emprestimo_equipamento`
  ADD PRIMARY KEY (`equipamentos_id`,`emprestimo_id`),
  ADD KEY `fk_emprestimo_equipamento_emprestimo1_idx` (`emprestimo_id`);

--
-- Indexes for table `tb_equipamento`
--
ALTER TABLE `tb_equipamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pessoas_cargo1_idx` (`cargo_id`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cargo`
--
ALTER TABLE `tb_cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_devolucao`
--
ALTER TABLE `tb_devolucao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_emprestimo`
--
ALTER TABLE `tb_emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_equipamento`
--
ALTER TABLE `tb_equipamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_devolucao`
--
ALTER TABLE `tb_devolucao`
  ADD CONSTRAINT `fk_devolução_emprestimo_equipamento1` FOREIGN KEY (`emprestimo_equipamento_equipamentos_id`,`emprestimo_equipamento_emprestimo_id`) REFERENCES `tb_emprestimo_equipamento` (`equipamentos_id`, `emprestimo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_devolução_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `tb_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_emprestimo`
--
ALTER TABLE `tb_emprestimo`
  ADD CONSTRAINT `fk_emprestimo_pessoas1` FOREIGN KEY (`pessoas_id`) REFERENCES `tb_pessoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_emprestimo_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `tb_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_emprestimo_equipamento`
--
ALTER TABLE `tb_emprestimo_equipamento`
  ADD CONSTRAINT `fk_emprestimo_equipamento_emprestimo1` FOREIGN KEY (`emprestimo_id`) REFERENCES `tb_emprestimo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_emprestimo_equipamento_equipamentos` FOREIGN KEY (`equipamentos_id`) REFERENCES `tb_equipamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD CONSTRAINT `fk_pessoas_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `tb_cargo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
