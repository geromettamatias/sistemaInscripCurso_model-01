<?php
    require_once "conexion.php";
    $conexion=conexion();


$apellidoNombre = $_POST['apellidoNombre'];
$dni = $_POST['dni'];
$titulo = $_POST['titulo'];
$email = $_POST['email'];
$antiguedadDocencia = $_POST['antiguedadDocencia'];
$regionEducativa = $_POST['regionEducativa'];



 if(is_array($_FILES) && count($_FILES)>0){



if(move_uploaded_file($_FILES["pdf"]["tmp_name"],"../gestion/pdf/".$dni."_".$_FILES["pdf"]["name"])){


$new_name_file = $dni."_".$_FILES["pdf"]["name"];
$extension="pdf";       
 

$sql="INSERT INTO `educacion_sin_frontera_social`(`id`, `apellidoNombre`, `dni`, `titulo`, `antiguedadDocencia`, `regionEducativa`, `url`, `type`, `email`) VALUES (null,'$apellidoNombre','$dni','$titulo','$antiguedadDocencia','$regionEducativa','$new_name_file','$extension','$email')";


echo $result=mysqli_query($conexion,$sql);

 
  }else{
         echo 0;
    }

 }else{
    echo 0;
 }


?>






