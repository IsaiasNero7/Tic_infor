-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jun-2024 às 14:01
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

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
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `tipo` varchar(20) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(1, 'luan boaventura', 'luan.santana@gmail.com', '$2y$10$2jfWMxVlT7MmGUokQDEWYu9.E3BXlWRy0C1HdhC5GWxoV0SjhXkrC', 'admin'),
(2, 'luan santana', 'gabiru@gmail.com', '$2y$10$nSc/PvbhOEoyMEk5yEmU0uplzwgWzPHDE6dLi1Izi1VIA8OD5Ae6a', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroaluno`
--

CREATE TABLE `cadastroaluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `tipo` varchar(20) NOT NULL DEFAULT 'aluno'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastroaluno`
--

INSERT INTO `cadastroaluno` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(1, 'gabiru', 'gabiru_12@gmail.com', '$2y$10$7j6lKGBv.gS1fZp0uA91JuL4YrvYcWqJaqb.GSt/TfsDCW4TwJyvO', 'aluno'),
(2, 'gabriel', 'a@gmail.com', '$2y$10$gBR.x7JgJqly7VXHLoVVk.joOW/Pp0rulUoTEmoXEQtono5UqVgYy', 'aluno');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadastroaluno`
--
ALTER TABLE `cadastroaluno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cadastroaluno`
--
ALTER TABLE `cadastroaluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
