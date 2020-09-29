<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['id'];


	 $sql="SELECT * FROM `educacion_sin_frontera_social` WHERE `id`='$id'";
            

     $result=mysqli_query($conexion,$sql);
     while($ver=mysqli_fetch_row($result)){  

       $url=$ver[6];
          }

	
	unlink('../pdf/'.$url);
	

	$sql="DELETE FROM `educacion_sin_frontera_social` WHERE `id`='$id'";


	echo $result=mysqli_query($conexion,$sql);

	

 ?>