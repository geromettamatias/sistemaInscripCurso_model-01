<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];
	

	$sql="INSERT INTO `usuarios`(`usuario`, `pass`) VALUES ('$usuario','$pass')";


	echo $result=mysqli_query($conexion,$sql);

	

 ?>