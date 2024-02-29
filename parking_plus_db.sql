-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-02-2024 a las 17:42:25
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parking_plus_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `idVehiculo` int(20) NOT NULL,
  `tipoVehiculo` varchar(20) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `fechaHoraIngreso` timestamp NULL DEFAULT current_timestamp(),
  `fechaHoraSalida` timestamp NULL DEFAULT NULL,
  `estado` enum('parqueado','retirado') NOT NULL DEFAULT 'parqueado',
  `observaciones` varchar(30) DEFAULT NULL,
  `valorCobrado` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`idVehiculo`, `tipoVehiculo`, `marca`, `placa`, `color`, `fechaHoraIngreso`, `fechaHoraSalida`, `estado`, `observaciones`, `valorCobrado`) VALUES
(1, 'carro', 'Chevrolet', 'R0F YK8', 'Rojo', '2024-02-26 13:00:00', '0000-00-00 00:00:00', 'parqueado', NULL, 0),
(2, 'carro', 'Kia', 'YKGL 4l2', 'Gris', '2024-02-26 05:00:00', '0000-00-00 00:00:00', 'parqueado', NULL, 0),
(3, 'carro', 'Nissan', 'ABC123', 'Verde', '2024-02-27 13:42:43', NULL, 'parqueado', 'Ninguna', 0),
(4, 'carro', 'Chevrolet Camaro', 'BOM B33', 'Amarillo', '2024-02-27 13:46:53', '2024-02-29 14:53:16', 'retirado', 'Ninguna', 150000),
(5, 'moto', 'Yamaha', 'YKM 239', 'Negro', '2024-02-27 14:04:58', '2024-02-28 15:45:47', 'retirado', 'Ninguna', 100000),
(6, 'moto', 'Honda', 'RTX 9Y2', 'Azul', '2024-02-27 14:44:12', NULL, 'parqueado', 'Sin direccionales', 0),
(8, 'carro', 'Subaru', 'OIP 2Y0', 'Azul', '2024-02-27 15:44:40', '2024-02-27 17:44:56', 'retirado', 'Sin espejo derecho', 150000),
(9, 'moto', 'AKT', 'qwe r23', 'rojo', '2024-02-28 16:10:55', NULL, 'parqueado', 'cilindraje 125', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`idVehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `idVehiculo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
