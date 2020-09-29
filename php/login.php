<?php 

class login{

	public $usuario="1";
	public $contrase="2";


	public function consultaLogin()
	{


	require_once "conexion.php";
	$conexion=conexion();

	
	$cos=0;

	$sql="SELECT * FROM `usuarios` WHERE `usuario`='".$this -> usuario."' AND `pass`='".$this -> contrase ."'";
                  

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

        	$cos=1;

        	session_start();

			$usuario=$ver[1];
			$_SESSION['usuario']=$usuario;

			$_SESSION['situacion']="ADMINISTRADOR";



        }


		return $cos;

		
	}
};




	$loginInicio = new login;
		// colocamos la conoxion en una bariable

	$loginInicio -> usuario=$_POST['usuario'];
	$loginInicio -> contrase=$_POST['contrase'];

	$resu=$loginInicio -> consultaLogin();



	echo $resu;
	
 	
    




?>