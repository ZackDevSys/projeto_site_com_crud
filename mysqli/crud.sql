-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2025 às 20:57
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` int(11) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `data_nasc` date NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `endereco` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome_completo`, `email`, `telefone`, `genero`, `data_nasc`, `cidade`, `estado`, `endereco`) VALUES
(41, 'juju', 'jtsryhrtesyr@hotmail.com', 31754575, 'masculino', '2025-10-15', 'guiana', 'deit', 'rua va'),
(42, 'gdfd', 'gjujuba@gmail.com', 31754575, 'masculino', '2025-11-08', 'belo', 'minas', 'rua olga'),
(43, 'juju', 'gustbvds@gmail.com', 456463, 'feminino', '2025-10-12', 'guiana', 'dfsf', 'geesw'),
(44, 'koi', 'gdgdgdeg@bdb', 2147483647, 'masculino', '2025-10-25', 'guiana', 'deit', 'geesw'),
(45, 'gdegseerw', 'jtsryhrtesyr@hotmail.com', 872100, 'masculino', '2025-10-02', 'belo', 'geral', 'rua v.a'),
(46, 'juju', 'gjujuba@gmail.com', 872100, 'feminino', '2025-11-01', 'belo', 'minas', 'rua va'),
(47, 'gdggdgdg', 'jtsryhrtesyr@hotmail.com', 872100, 'masculino', '2025-10-10', 'fui', 'deit', 'geesw');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
