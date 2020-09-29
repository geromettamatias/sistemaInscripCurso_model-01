<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$idusu=$_POST['idusu'];
	
	

	$sql="DELETE FROM `usuarios` WHERE  `idusu`='$idusu'";


	echo $result=mysqli_query($conexion,$sql);

	

 ?>