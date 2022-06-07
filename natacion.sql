DROP SCHEMA IF EXISTS `natacion`;

CREATE SCHEMA IF NOT EXISTS `natacion` DEFAULT CHARACTER SET utf8 collate utf8_spanish2_ci;
USE `natacion`;


CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(239) NOT NULL,
  `apellido` varchar(240) NOT NULL,
  `edad` int(11) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `turno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `edad`, `nivel`, `sexo`, `turno`) VALUES
(25, 'Adrian', 'Gonzalez', 28, 'avanzado', 'masculino', 'matutino'),
(26, 'linda', 'ortiz', 25, 'principiante', 'masculino', 'vespertino'),
(28, 'Alma', 'Gomez', 19, 'intermedio', 'femenino', 'vespertino'),
(29, 'Andres', 'Hernández', 17, 'principiante', 'masculino', 'matutino'),
(30, 'Juan', 'López', 23, 'principiante', 'masculino', 'vespertino');


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;
