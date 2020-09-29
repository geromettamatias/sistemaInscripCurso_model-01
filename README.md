# sistemaInscripCurso
Es un sistema de inscripcion a los cursos de formación docente, consiste en un formulario (apellido, nombre, dni, titulo, fotocopia digital del dni en pdf) y cuenta con un sistema con un login que muestra los incriptos  (para imprimir, descargar y otros)

Pasos -

--- Tener un servidor Remoto hosting o en su escritorio el xampp
--- Copiar los archivos en la carpeta del servidor.
--- crear la Base de datos  

CREATE TABLE `educacion_sin_frontera_social` (
  `id` int(11) NOT NULL,
  `apellidoNombre` varchar(200) DEFAULT NULL,
  `dni` varchar(500) DEFAULT NULL,
  `titulo` varchar(500) DEFAULT NULL,
  `antiguedadDocencia` varchar(500) DEFAULT NULL,
  `regionEducativa` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `usuarios` (
  `idusu` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

INSERT INTO `usuarios` (`idusu`, `usuario`, `pass`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `educacion_sin_frontera_social`
--
ALTER TABLE `educacion_sin_frontera_social`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `educacion_sin_frontera_social`
--
ALTER TABLE `educacion_sin_frontera_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;



---- No se olvide de modificar el archivo   php/conexion.php     --- Modifique  los datos---


--- Si quiere puede modificar la index.php  los datos que quiere que aparesca----
