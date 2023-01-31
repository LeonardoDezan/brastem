-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Jan-2023 às 04:12
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `brastem_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_clientes` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `cnpj_cpf` int(14) NOT NULL,
  `ie_rg` int(9) NOT NULL,
  `regime_tributario` varchar(30) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cep` int(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int(11) NOT NULL,
  `contato_fone` varchar(50) NOT NULL,
  `celular` int(11) NOT NULL,
  `contato_cel` varchar(50) NOT NULL,
  `obs` varchar(200) NOT NULL,
  `fotos` varchar(200) DEFAULT NULL,
  `data_criacao` datetime(6) DEFAULT NULL,
  `data_edicao` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_clientes`, `tipo`, `nome_cliente`, `cnpj_cpf`, `ie_rg`, `regime_tributario`, `endereco`, `bairro`, `cidade`, `estado`, `cep`, `email`, `telefone`, `contato_fone`, `celular`, `contato_cel`, `obs`, `fotos`, `data_criacao`, `data_edicao`) VALUES
(1, '', 'Leonardo Dezan', 2147483647, 0, '', '', '', '', '', 0, '', 0, '', 0, '', '', NULL, NULL, NULL),
(2, '', 'Julia Gonçalves', 0, 0, '', '', '', '', '', 0, 'julia@teste.com', 0, '', 0, '', '', NULL, NULL, NULL),
(3, 'juridica', 'SISTEMY', 9847, 458803947, 'MEI', 'AV 36, 1710', 'JARDIM BELA VISTA', 'RIO CLARO', 'SP', 13504, 'contato@sistemy.com.br', 0, '', 0, 'LEONARDO', 'SISTEMAS DE GESTãO E WEB SITES.\r\n									', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_entrada`
--

CREATE TABLE `tb_entrada` (
  `id_entrada` int(11) NOT NULL,
  `data_entrada` date NOT NULL,
  `valor_entrada` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `subtotal_entrada` int(11) NOT NULL,
  `id_clientes` varchar(100) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_item`
--

CREATE TABLE `tb_item` (
  `id_item` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `quantidade` decimal(10,2) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id_produto` int(11) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `qualidade` varchar(100) NOT NULL,
  `estoque` int(11) NOT NULL,
  `cont` decimal(10,2) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id_produto`, `codigo`, `produto`, `qualidade`, `estoque`, `cont`, `preco`) VALUES
(1, 'A-001', 'TINTA BRANCO NEVE', 'PREMIUM', 10, '0.00', '0.00'),
(2, 'B-001', 'TINTA BRANCO NEVE', 'PREMIUM ELASTOMÉRICA', 20, '0.00', '0.00'),
(3, 'C-001', 'TINTA BRANCO NEVE', 'STANDARD', 30, '0.00', '0.00'),
(4, 'D-001', 'TINTA BRANCO NEVE', 'ECONÔMICA', 30, '0.00', '0.00'),
(5, '1010', 'Teste', 'teste', 20, '3.60', '19.80'),
(6, '1010', 'Teste', 'teste', 20, '3.60', '19.80'),
(7, '55', 'NOVO TESTE', 'novo', 80, '3.60', '235.32'),
(8, '1', 'ASD', 'PREMIUM', 0, '3.60', '1.00'),
(9, '150', 'TESTE', 'PREMIUM', 10, '3.60', '10.00'),
(10, '6353', 'NOVO TESTE', 'STANDARD', 10, '18.00', '90.50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_saida`
--

CREATE TABLE `tb_saida` (
  `id_saida` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_clientes` int(11) NOT NULL,
  `quantidade` decimal(10,2) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `data_saida` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_venda`
--

CREATE TABLE `tb_venda` (
  `id_venda` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_venda` date NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_clientes`);

--
-- Índices para tabela `tb_entrada`
--
ALTER TABLE `tb_entrada`
  ADD PRIMARY KEY (`id_entrada`);

--
-- Índices para tabela `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id_item`);

--
-- Índices para tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `tb_saida`
--
ALTER TABLE `tb_saida`
  ADD PRIMARY KEY (`id_saida`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `tb_venda`
--
ALTER TABLE `tb_venda`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_entrada`
--
ALTER TABLE `tb_entrada`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_saida`
--
ALTER TABLE `tb_saida`
  MODIFY `id_saida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_venda`
--
ALTER TABLE `tb_venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
