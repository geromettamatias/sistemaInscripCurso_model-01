function loginAutogestionAlumno(usuario,contrase){



cadena= "usuario=" + usuario +
				"&contrase=" + contrase;


			$.ajax({
				type:"POST",
				url:"php/login.php",
				data:cadena,
				success:function(r){

			
					if(r==1){
						
						Swal.fire(
								  'Bienvenido '+usuario,
								  'Al AutoGestión',
								  'success'
								);

					
					 window.location.href = "gestion/index.php";
								   
								

						 
						

					}else{

						if(r==0){
						
						Swal.fire({
									  icon: 'error',
									  title: 'Usuario o Contraseña Incorrecta',
									  text: 'Controle los datos ingresados en los campos',
									  footer: '<a href>¿Necesita Ayuda?</a>'
									})


					}else{

						alertify.error("Fallo el servidor :(");
					
					}
					
					}
				}
			});


}









