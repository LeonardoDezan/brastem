-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Fev-2023 às 03:16
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
CREATE DATABASE IF NOT EXISTS `brastem_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `brastem_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_clientes` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `cnpj_cpf` varchar(20) NOT NULL,
  `ie_rg` int(9) NOT NULL,
  `regime_tributario` varchar(30) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `contato_fone` varchar(50) NOT NULL,
  `celular` varchar(16) NOT NULL,
  `contato_cel` varchar(50) NOT NULL,
  `obs` varchar(200) NOT NULL,
  `fotos` varchar(200) DEFAULT NULL,
  `data_criacao` datetime(6) DEFAULT NULL,
  `data_edicao` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `cpf`, `senha`) VALUES
(1, '43126726879', '124578'),
(3, 'brastem', '128620');

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
  MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tb_saida`
--
ALTER TABLE `tb_saida`
  MODIFY `id_saida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_venda`
--
ALTER TABLE `tb_venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT;
--
-- Banco de dados: `controle_estoque`
--
CREATE DATABASE IF NOT EXISTS `controle_estoque` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `controle_estoque`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_categorias`
--

CREATE TABLE `si_categorias` (
  `categoria_id` int(11) NOT NULL,
  `categoria_nome` varchar(255) NOT NULL,
  `categoria_cadastro` datetime NOT NULL,
  `categoria_sessao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_clientes`
--

CREATE TABLE `si_clientes` (
  `cliente_id` int(11) NOT NULL,
  `cliente_imagem` varchar(255) NOT NULL,
  `cliente_nome` varchar(255) NOT NULL,
  `cliente_email` varchar(255) NOT NULL,
  `cliente_endereco` varchar(255) NOT NULL,
  `cliente_cep` varchar(255) NOT NULL,
  `cliente_cidade` varchar(255) NOT NULL,
  `cliente_estado` varchar(255) NOT NULL,
  `cliente_documento` varchar(255) NOT NULL,
  `cliente_telefone` varchar(255) NOT NULL,
  `cliente_token` int(11) NOT NULL,
  `cliente_status` int(11) NOT NULL,
  `cliente_cadastro` datetime NOT NULL,
  `cliente_sessao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_devolucao`
--

CREATE TABLE `si_devolucao` (
  `devolucao_id` int(11) NOT NULL,
  `devolucao_produto_nome` varchar(255) NOT NULL,
  `devolucao_quantidade` int(11) NOT NULL,
  `devolucao_medidas` varchar(255) NOT NULL,
  `devolucao_data_despacho` date NOT NULL,
  `devolucao_motivo` varchar(500) NOT NULL,
  `devolucao_nf` varchar(255) NOT NULL,
  `devolucao_codigo` varchar(255) NOT NULL,
  `devolucao_fornecedor` varchar(255) NOT NULL,
  `devolucao_valor_nf` varchar(255) NOT NULL,
  `devolucao_sessao` varchar(255) NOT NULL,
  `devolucao_status` int(11) NOT NULL,
  `devolucao_status_liberado` int(11) NOT NULL,
  `devolucao_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_entrada`
--

CREATE TABLE `si_entrada` (
  `entrada_produto_id` int(11) NOT NULL,
  `entrada_produto_nome` varchar(255) NOT NULL,
  `entrada_quantidade` int(11) NOT NULL,
  `entrada_quantidade_estoque_atual` int(11) NOT NULL,
  `entrada_quantidade_estoque` int(11) NOT NULL,
  `entrada_medidas` varchar(255) NOT NULL,
  `entrada_validade` date NOT NULL,
  `entrada_nf` varchar(255) NOT NULL,
  `entrada_codigo` varchar(255) NOT NULL,
  `entrada_fornecedor` varchar(255) NOT NULL,
  `entrada_valor_nf` decimal(10,2) NOT NULL,
  `entrada_sessao` varchar(255) NOT NULL,
  `entrada_status` int(11) NOT NULL,
  `entrada_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_fornecedores`
--

CREATE TABLE `si_fornecedores` (
  `fornecedor_id` int(11) NOT NULL,
  `fornecedor_img` varchar(255) NOT NULL,
  `fornecedor_nome` varchar(255) NOT NULL,
  `fornecedor_email` varchar(255) NOT NULL,
  `fornecedor_endereco` varchar(255) NOT NULL,
  `fornecedor_cep` varchar(255) NOT NULL,
  `fornecedor_cidade` varchar(255) NOT NULL,
  `fornecedor_estado` varchar(255) NOT NULL,
  `fornecedor_documento` varchar(255) NOT NULL,
  `fornecedor_telefone` varchar(255) NOT NULL,
  `fornecedor_token` int(11) NOT NULL,
  `fornecedor_status` int(11) NOT NULL,
  `fornecedor_cadastro` datetime NOT NULL,
  `fornecedor_sessao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_ordem_servico`
--

CREATE TABLE `si_ordem_servico` (
  `os_id` int(11) NOT NULL,
  `os_produto_nome` varchar(255) NOT NULL,
  `os_quantidade` int(11) NOT NULL,
  `os_medidas` varchar(255) NOT NULL,
  `os_data_envio` date NOT NULL,
  `os_observacoes` varchar(1500) NOT NULL,
  `os_nf` varchar(255) NOT NULL,
  `os_codigo` varchar(255) NOT NULL,
  `os_cliente` varchar(255) NOT NULL,
  `os_fornecedores` varchar(255) NOT NULL,
  `os_situacao` varchar(255) NOT NULL,
  `os_valor_nf` decimal(10,2) NOT NULL,
  `os_sessao` varchar(255) NOT NULL,
  `os_status` int(11) NOT NULL,
  `os_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_pedido_material`
--

CREATE TABLE `si_pedido_material` (
  `pedido_id` int(11) NOT NULL,
  `pedido_observacoes` varchar(1500) NOT NULL,
  `pedido_sessao` varchar(255) NOT NULL,
  `pedido_status` int(11) NOT NULL,
  `pedido_cadastro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_produtos`
--

CREATE TABLE `si_produtos` (
  `produto_id` int(11) NOT NULL,
  `produto_nome` varchar(255) NOT NULL,
  `produto_preco` varchar(255) NOT NULL,
  `produto_quantidade` int(11) NOT NULL,
  `produto_categoria` varchar(255) NOT NULL,
  `produto_capa` varchar(255) NOT NULL,
  `produto_status` int(11) NOT NULL,
  `produto_cadastro` datetime NOT NULL,
  `produto_sessao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_registros_acessos`
--

CREATE TABLE `si_registros_acessos` (
  `registros_id` int(11) NOT NULL,
  `registros_nome` varchar(255) NOT NULL,
  `registros_entrada` datetime NOT NULL,
  `registros_saida` datetime NOT NULL,
  `registro_pagina` varchar(255) NOT NULL,
  `registros_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_saida`
--

CREATE TABLE `si_saida` (
  `saida_id` int(11) NOT NULL,
  `saida_produto_nome` varchar(255) NOT NULL,
  `saida_quantidade` int(11) NOT NULL,
  `saida_quantidade_estoque_atual` int(11) NOT NULL,
  `saida_quantidade_estoque` int(11) NOT NULL,
  `saida_medidas` varchar(255) NOT NULL,
  `saida_codigo` varchar(255) NOT NULL,
  `saida_sessao` varchar(255) NOT NULL,
  `saida_status` int(11) NOT NULL,
  `saida_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `si_usuarios`
--

CREATE TABLE `si_usuarios` (
  `usuarios_id` int(11) NOT NULL,
  `usuarios_nome` varchar(255) NOT NULL,
  `usuarios_email` varchar(255) NOT NULL,
  `usuarios_senha` varchar(255) NOT NULL,
  `usuarios_status` int(11) NOT NULL,
  `usuarios_nivel` int(11) NOT NULL,
  `usuarios_data` datetime NOT NULL,
  `token` int(11) NOT NULL,
  `pergunta_secreta` varchar(255) NOT NULL,
  `resposta_secreta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `si_usuarios`
--

INSERT INTO `si_usuarios` (`usuarios_id`, `usuarios_nome`, `usuarios_email`, `usuarios_senha`, `usuarios_status`, `usuarios_nivel`, `usuarios_data`, `token`, `pergunta_secreta`, `resposta_secreta`) VALUES
(1, 'Leonardo Dezan', 'leo.dezan@gmail.com', '123456', 1, 10, '2022-11-24 01:01:09', 123, '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `si_categorias`
--
ALTER TABLE `si_categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Índices para tabela `si_clientes`
--
ALTER TABLE `si_clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Índices para tabela `si_devolucao`
--
ALTER TABLE `si_devolucao`
  ADD PRIMARY KEY (`devolucao_id`);

--
-- Índices para tabela `si_entrada`
--
ALTER TABLE `si_entrada`
  ADD PRIMARY KEY (`entrada_produto_id`);

--
-- Índices para tabela `si_fornecedores`
--
ALTER TABLE `si_fornecedores`
  ADD PRIMARY KEY (`fornecedor_id`);

--
-- Índices para tabela `si_ordem_servico`
--
ALTER TABLE `si_ordem_servico`
  ADD PRIMARY KEY (`os_id`);

--
-- Índices para tabela `si_pedido_material`
--
ALTER TABLE `si_pedido_material`
  ADD PRIMARY KEY (`pedido_id`);

--
-- Índices para tabela `si_produtos`
--
ALTER TABLE `si_produtos`
  ADD PRIMARY KEY (`produto_id`);

--
-- Índices para tabela `si_registros_acessos`
--
ALTER TABLE `si_registros_acessos`
  ADD PRIMARY KEY (`registros_id`);

--
-- Índices para tabela `si_saida`
--
ALTER TABLE `si_saida`
  ADD PRIMARY KEY (`saida_id`);

--
-- Índices para tabela `si_usuarios`
--
ALTER TABLE `si_usuarios`
  ADD PRIMARY KEY (`usuarios_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `si_categorias`
--
ALTER TABLE `si_categorias`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `si_clientes`
--
ALTER TABLE `si_clientes`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `si_devolucao`
--
ALTER TABLE `si_devolucao`
  MODIFY `devolucao_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `si_entrada`
--
ALTER TABLE `si_entrada`
  MODIFY `entrada_produto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `si_fornecedores`
--
ALTER TABLE `si_fornecedores`
  MODIFY `fornecedor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `si_ordem_servico`
--
ALTER TABLE `si_ordem_servico`
  MODIFY `os_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `si_pedido_material`
--
ALTER TABLE `si_pedido_material`
  MODIFY `pedido_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `si_produtos`
--
ALTER TABLE `si_produtos`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `si_registros_acessos`
--
ALTER TABLE `si_registros_acessos`
  MODIFY `registros_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `si_saida`
--
ALTER TABLE `si_saida`
  MODIFY `saida_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `si_usuarios`
--
ALTER TABLE `si_usuarios`
  MODIFY `usuarios_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Banco de dados: `db_sistemy_brastem`
--
CREATE DATABASE IF NOT EXISTS `db_sistemy_brastem` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_sistemy_brastem`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `razao_social` varchar(50) NOT NULL,
  `ie` varchar(9) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fone_compras` varchar(11) NOT NULL,
  `comprador` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `tipo`, `cnpj`, `razao_social`, `ie`, `endereco`, `bairro`, `cidade`, `email`, `fone_compras`, `comprador`) VALUES
(10, 'teste1', 'teste1', 'teste1', 'teste1', 'teste1', 'teste1', 'teste1', 'teste1@teste.com', 'teste1', 'teste1'),
(11, 'teste2', 'teste2', 'teste2', 'teste2', 'teste2', 'teste2', 'teste2', 'teste2@gmail.com', 'teste2', 'teste2'),
(12, 'teste3', 'teste3', 'teste3', 'teste3', 'teste3', 'teste3', 'teste3', 'teste3@gmail.com', 'teste3', 'teste3');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Banco de dados: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Extraindo dados da tabela `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"brastem_db\",\"table\":\"tb_usuario\"},{\"db\":\"brastem_db\",\"table\":\"tb_clientes\"},{\"db\":\"brastem_db\",\"table\":\"tb_produto\"},{\"db\":\"brastem_db\",\"table\":\"tb_entrada\"},{\"db\":\"brastem_db\",\"table\":\"tb_venda\"},{\"db\":\"brastem_db\",\"table\":\"tb_item\"},{\"db\":\"brastem_db\",\"table\":\"tb_saida\"},{\"db\":\"db_sistemy_brastem\",\"table\":\"tb_clientes\"},{\"db\":\"brastem_erp\",\"table\":\"categoria\"},{\"db\":\"controle_estoque\",\"table\":\"si_usuarios\"}]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Extraindo dados da tabela `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'db_sistemy_brastem', 'tb_clientes', '{\"sorted_col\":\"`tb_clientes`.`cnpj` ASC\"}', '2023-01-04 23:24:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Extraindo dados da tabela `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-02-01 02:16:21', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"pt\",\"ThemeDefault\":\"pmahomme\",\"NavigationWidth\":241}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Índices para tabela `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Índices para tabela `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Índices para tabela `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Índices para tabela `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Índices para tabela `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Índices para tabela `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Índices para tabela `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Índices para tabela `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Índices para tabela `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Índices para tabela `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Índices para tabela `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Índices para tabela `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Índices para tabela `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Banco de dados: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
