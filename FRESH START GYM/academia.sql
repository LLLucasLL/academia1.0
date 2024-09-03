-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/04/2024 às 01:42
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `academia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pontos`
--

CREATE TABLE `pontos` (
  `PON_ID` int(11) NOT NULL,
  `PON_PONTOS` int(11) NOT NULL,
  `USU_CPF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pontos`
--

INSERT INTO `pontos` (`PON_ID`, `PON_PONTOS`, `USU_CPF`) VALUES
(1, 10, 222),
(2, 9, 777),
(3, 100, 111),
(4, 98, 444),
(5, 88, 333),
(6, 51, 11111),
(8, 3, 555);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `USU_CPF` int(11) NOT NULL,
  `USU_USERNAME` varchar(100) NOT NULL,
  `USU_SENHA` varchar(25) NOT NULL,
  `USU_NOME` varchar(100) NOT NULL,
  `USU_EMAIL` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`USU_CPF`, `USU_USERNAME`, `USU_SENHA`, `USU_NOME`, `USU_EMAIL`) VALUES
(111, 'Carol', '111', 'Carol K', 'C@a.com'),
(222, 'Lucas', '555', 'Lucas Lima', 'lucas@teste.com'),
(333, 'Carlos', '222', 'Carlos K', 'Ca@a.com'),
(444, 'Júlio', '444', 'Júlios ', 'Ja@a.com'),
(555, 'Kai', '555', 'Kaique', 'Ka@a.com'),
(777, 'Thiago', '999', 'Thiago Silva', 'Thiago@gmail.com'),
(1010, 'Sergio', '9898', 'Sergio Y', 'SY@a.com'),
(11111, 'Rodrigo', '888', 'Rodrigo Dia', 'R@jhjhj');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pontos`
--
ALTER TABLE `pontos`
  ADD PRIMARY KEY (`PON_ID`),
  ADD KEY `USU_CPF` (`USU_CPF`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`USU_CPF`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pontos`
--
ALTER TABLE `pontos`
  ADD CONSTRAINT `pontos_ibfk_1` FOREIGN KEY (`USU_CPF`) REFERENCES `usuario` (`USU_CPF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
