-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2022 a las 06:26:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(45) NOT NULL,
  `categoryDescription` varchar(45) DEFAULT NULL,
  `createDate` date NOT NULL,
  `users_UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(45) NOT NULL,
  `productPrice` varchar(45) NOT NULL,
  `productAmount` varchar(45) NOT NULL,
  `productDescription` varchar(250) DEFAULT NULL,
  `createDate` date NOT NULL,
  `categories_CategoryId` int(11) NOT NULL,
  `suppliers_SupplierId` int(11) NOT NULL,
  `users_UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rolId` int(11) NOT NULL,
  `rolName` varchar(45) NOT NULL,
  `rolDescription` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rolId`, `rolName`, `rolDescription`) VALUES
(1, 'administrador', 'control total');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierId` int(11) NOT NULL,
  `supplierName` varchar(70) NOT NULL,
  `supplierPhone` int(11) NOT NULL,
  `supplierAddress` varchar(45) NOT NULL,
  `supplierDescription` varchar(150) DEFAULT NULL,
  `supplierWeb` varchar(65) DEFAULT NULL,
  `supplierEmail` varchar(45) DEFAULT NULL,
  `createDate` date NOT NULL,
  `users_UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `identification` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `seg_nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) NOT NULL,
  `seg_apellido` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) NOT NULL,
  `email` varchar(65) NOT NULL,
  `rolesRolId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`userId`, `identification`, `nombre`, `seg_nombre`, `apellido`, `seg_apellido`, `contrasena`, `email`, `rolesRolId`) VALUES
(1, 1233693957, 'johan', 'camilo', 'hueso', 'florido', '123456', 'kamica0123@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`,`users_UserId`),
  ADD KEY `fk_categoriesUsers1_idx` (`users_UserId`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`,`categories_CategoryId`,`suppliers_SupplierId`,`users_UserId`),
  ADD KEY `fk_productsCategories1_idx` (`categories_CategoryId`),
  ADD KEY `fk_productsSuppliers1_idx` (`suppliers_SupplierId`),
  ADD KEY `fk_productsUsers1_idx` (`users_UserId`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rolId`);

--
-- Indices de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplierId`,`users_UserId`),
  ADD KEY `fk_suppliersUsers1_idx` (`users_UserId`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`,`rolesRolId`),
  ADD KEY `fk_usersRoles1_idx` (`rolesRolId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rolId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplierId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk_categoriesUsers1` FOREIGN KEY (`users_UserId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_productsCategories1` FOREIGN KEY (`categories_CategoryId`) REFERENCES `categories` (`categoryId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productsSuppliers1` FOREIGN KEY (`suppliers_SupplierId`) REFERENCES `suppliers` (`supplierId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productsUsers1` FOREIGN KEY (`users_UserId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `fk_suppliersUsers1` FOREIGN KEY (`users_UserId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_usersRoles1` FOREIGN KEY (`rolesRolId`) REFERENCES `roles` (`rolId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
