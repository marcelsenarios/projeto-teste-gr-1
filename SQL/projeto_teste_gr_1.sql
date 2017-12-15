-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 15-Dez-2017 às 14:57
-- Versão do servidor: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 5.6.30-12~ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_teste_gr_1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE `cor` (
  `idCor` int(11) NOT NULL,
  `nome_cor` varchar(255) NOT NULL,
  `status` int(11) DEFAULT '1',
  `dataCadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cor`
--

INSERT INTO `cor` (`idCor`, `nome_cor`, `status`, `dataCadastro`) VALUES
(1, 'Azul', 1, '2017-12-15 16:33:27'),
(2, 'Branco', 1, '2017-12-15 16:33:27'),
(3, 'Cinza', 1, '2017-12-15 16:34:42'),
(4, 'Vernmelho', 1, '2017-12-15 16:35:09'),
(5, 'Verde', 1, '2017-12-15 16:35:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `time`
--

CREATE TABLE `time` (
  `idTime` int(11) NOT NULL,
  `nome_time` varchar(255) NOT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `time`
--

INSERT INTO `time` (`idTime`, `nome_time`, `status`) VALUES
(1, 'Corinthians', 1),
(2, 'Palmeiras', 1),
(3, 'São Paulo', 1),
(4, 'Santos', 1),
(5, 'Juventus', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` varchar(5) NOT NULL,
  `observacoes` text,
  `status` int(11) DEFAULT '1',
  `dataCadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `email`, `idade`, `sexo`, `observacoes`, `status`, `dataCadastro`) VALUES
(1, 'Carlos Marcel Sena Rios', '', 37, 'M', 'observacoes', 1, '2017-12-15 16:51:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_foto`
--

CREATE TABLE `usuario_foto` (
  `idUsuarioFoto` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` int(11) DEFAULT '1',
  `dataCadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario_foto`
--

INSERT INTO `usuario_foto` (`idUsuarioFoto`, `foto`, `status`, `dataCadastro`) VALUES
(1, 'hbo-westworld-opening-credits-backgrounds.png', 0, '2017-12-15 16:51:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_ref_cor`
--

CREATE TABLE `usuario_ref_cor` (
  `idUsuarioRefCor` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idCor` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `dataCadastro` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_ref_time`
--

CREATE TABLE `usuario_ref_time` (
  `idUsuarioRefTime` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idTime` int(11) NOT NULL,
  `status` int(11) DEFAULT '1',
  `dataCadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario_ref_time`
--

INSERT INTO `usuario_ref_time` (`idUsuarioRefTime`, `idUsuario`, `idTime`, `status`, `dataCadastro`) VALUES
(1, 1, 1, 1, '2017-12-15 16:51:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`idCor`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`idTime`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indexes for table `usuario_foto`
--
ALTER TABLE `usuario_foto`
  ADD PRIMARY KEY (`idUsuarioFoto`);

--
-- Indexes for table `usuario_ref_cor`
--
ALTER TABLE `usuario_ref_cor`
  ADD PRIMARY KEY (`idUsuarioRefCor`);

--
-- Indexes for table `usuario_ref_time`
--
ALTER TABLE `usuario_ref_time`
  ADD PRIMARY KEY (`idUsuarioRefTime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cor`
--
ALTER TABLE `cor`
  MODIFY `idCor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `idTime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario_foto`
--
ALTER TABLE `usuario_foto`
  MODIFY `idUsuarioFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario_ref_cor`
--
ALTER TABLE `usuario_ref_cor`
  MODIFY `idUsuarioRefCor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario_ref_time`
--
ALTER TABLE `usuario_ref_time`
  MODIFY `idUsuarioRefTime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
