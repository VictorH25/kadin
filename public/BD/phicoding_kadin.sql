-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09/12/2020 às 02:22
-- Versão do servidor: 8.0.22-0ubuntu0.20.04.3
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `phicoding_kadin`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `additional`
--

CREATE TABLE `additional` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `product_id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cashier`
--

CREATE TABLE `cashier` (
  `id` int NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last` timestamp NULL DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `number` varchar(40) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `limit_credit` decimal(10,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `internal_settings`
--

CREATE TABLE `internal_settings` (
  `id` int NOT NULL,
  `key` text,
  `value` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `internal_settings`
--

INSERT INTO `internal_settings` (`id`, `key`, `value`, `updated_at`, `created_at`, `active`) VALUES
(1, 'company_name', 'Rafa Lanches', '2020-12-06 21:30:06', '2020-08-12 22:08:45', 1),
(2, 'logo', '/img/logo_principal.png', '2020-12-05 01:54:36', '2020-08-12 22:08:45', 1),
(3, 'monitor', '1', '2020-12-06 21:29:27', '2020-08-12 22:08:45', 1),
(4, 'logo_phi', '/img/phi.jpg', '2020-12-05 01:54:36', '2020-08-12 22:08:45', 1),
(5, 'desk', '1', '2020-12-05 01:54:36', '2020-08-12 22:08:45', 1),
(6, 'command_footer', 'Obrigado pela preferência, volte sempre!', '2020-12-05 01:54:36', '2020-08-12 22:08:45', 1),
(7, 'command_title', 'Instagram - (82)99832-7137', '2020-12-05 01:54:36', '2020-08-12 22:08:45', 1),
(8, 'credit_interest', '1.99', '2020-12-05 01:54:36', '2020-08-12 22:08:45', 1),
(9, 'debt_interest', '4.74', '2020-12-05 01:54:36', '2020-08-12 22:08:45', 1),
(10, 'paid_interest', '0', '2020-12-05 01:54:36', '2020-08-12 22:08:45', 1),
(11, 'money_interest', '0', '2020-12-05 01:54:36', '2020-08-12 22:08:45', 1),
(12, 'number_of_tables', '10', '2020-12-05 01:54:36', '2020-08-12 22:08:45', 1),
(13, 'coil_size', '58', '2020-12-05 01:54:36', '2020-08-12 22:08:45', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `order`
--

CREATE TABLE `order` (
  `id` int NOT NULL,
  `name_customer` varchar(255) NOT NULL,
  `id_user` int NOT NULL,
  `delivery` tinyint(1) NOT NULL DEFAULT '0',
  `form_of_payment` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 - Credito | 1 - Cartão',
  `delivered` tinyint(1) NOT NULL DEFAULT '0',
  `amount` varchar(255) NOT NULL,
  `key` int NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `order_coupon`
--

CREATE TABLE `order_coupon` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `operator_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `purchase_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `purchase_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value_payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `change` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int NOT NULL,
  `trip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `order_product`
--

CREATE TABLE `order_product` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `order_product_additional`
--

CREATE TABLE `order_product_additional` (
  `id` int NOT NULL,
  `order_product_id` int NOT NULL,
  `additional_id` int NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `ingredients` varchar(400) NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `type_id` int NOT NULL COMMENT 'Tipo de lanches( SImples, especiais, Sucos, Petiscos, Refrigerante)',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `spun`
--

CREATE TABLE `spun` (
  `id` int NOT NULL,
  `client_id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `value` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `type`
--

CREATE TABLE `type` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '1' COMMENT '0 - Admin',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int NOT NULL DEFAULT '1'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `type`, `updated_at`, `created_at`, `active`) VALUES
(1, 'Eduardo Breno', 'eduardobreno@outlook.com.br', '$2y$10$wgg3p.9JnbmtXx2RRsZvrO0GwRB9lsSTtjWtlpo5Ox5/YBmkSg4o2', NULL, '1', '2020-12-04 22:55:01', '2020-12-04 22:55:01', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `additional`
--
ALTER TABLE `additional`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products` (`product_id`) USING BTREE;

--
-- Índices de tabela `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `internal_settings`
--
ALTER TABLE `internal_settings`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices de tabela `order_coupon`
--
ALTER TABLE `order_coupon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Índices de tabela `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Índices de tabela `order_product_additional`
--
ALTER TABLE `order_product_additional`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addicional_id` (`additional_id`),
  ADD KEY `order_product_id` (`order_product_id`);

--
-- Índices de tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type_id`);

--
-- Índices de tabela `spun`
--
ALTER TABLE `spun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `spun_ibfk_1` (`client_id`);

--
-- Índices de tabela `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `additional`
--
ALTER TABLE `additional`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cashier`
--
ALTER TABLE `cashier`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `internal_settings`
--
ALTER TABLE `internal_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `order`
--
ALTER TABLE `order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `order_coupon`
--
ALTER TABLE `order_coupon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `order_product_additional`
--
ALTER TABLE `order_product_additional`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `spun`
--
ALTER TABLE `spun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `type`
--
ALTER TABLE `type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `additional`
--
ALTER TABLE `additional`
  ADD CONSTRAINT `additional_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Restrições para tabelas `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `order_coupon`
--
ALTER TABLE `order_coupon`
  ADD CONSTRAINT `order_coupon_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Restrições para tabelas `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

--
-- Restrições para tabelas `order_product_additional`
--
ALTER TABLE `order_product_additional`
  ADD CONSTRAINT `order_product_additional_ibfk_1` FOREIGN KEY (`additional_id`) REFERENCES `additional` (`id`),
  ADD CONSTRAINT `order_product_additional_ibfk_2` FOREIGN KEY (`order_product_id`) REFERENCES `order_product` (`id`);

--
-- Restrições para tabelas `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

--
-- Restrições para tabelas `spun`
--
ALTER TABLE `spun`
  ADD CONSTRAINT `spun_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `customers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `spun_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
