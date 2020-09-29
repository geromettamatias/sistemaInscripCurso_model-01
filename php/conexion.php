<?php 

function conexion(){

			$conexion = mysqli_connect(
   'localhost', 'u574277858_inscrTercCur', 'Aqwerty.22', 'u574277858_tercCursoInscr'
    // 'localhost', 'root', '', 'inscripciones'



);
			return $conexion;
		}



 ?>
