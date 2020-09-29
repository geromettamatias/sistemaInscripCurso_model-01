
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$dni=$_POST['dni'];
	$datos=0;
	 $sql="SELECT * FROM `educacion_sin_frontera_social` WHERE `dni`='$dni'";
            

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){  

            $datos=1;
          }

     echo $datos;
 ?>


          