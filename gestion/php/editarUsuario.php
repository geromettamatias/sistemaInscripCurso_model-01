<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$idusu=$_POST['idusu'];
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];
	

	$sql="UPDATE `usuarios` SET `usuario`='$usuario',`pass`='$pass' WHERE `idusu`='$idusu'";


	echo $result=mysqli_query($conexion,$sql);


 ?>