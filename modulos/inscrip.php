                 <div class="form-group">

                              <div class="col-12">
                                <h4>INSCRIPCIÓN AL CURSO DE EDUCACIÓN SIN FRONTERAS SOCIALES</h4>
                                <p>Aclaración: Debera completar el formulario y al finalizar tendra que adjuntar una fotocopia digital, en formato PDF del DNI (frente y reverso del mismo)</p>
                              </div>
                </div>

                 <br><br>
                  <form enctype="multipart/form-data" id="form1">
                            <div class="form-group">

                              <div class="col-12">



                                  <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Apellido y Nombre:</span></div>

                                    <input id="apellidoNombre" name="apellidoNombre" type="text" class="form-control" title="Tu nombre y apellido"  placeholder="Ej: Andrea Lopez">
                                  </div>

                                  <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">DNI:</span></div>

                                    <input id="dni" name="dni" type="number" class="form-control" title="Tu numero de DNI (sin punto)"  placeholder="Ej: 36021127" 
                                    33365>
                                  </div>

                                  <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">CORREO:</span></div>

                                    <input id="email" name="email" type="email" class="form-control" title="Tu correo electrónico"  placeholder="Ej: lopes_129@gmail.com" 
                                    33365>
                                  </div>

                                  <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Titulo:</span></div>

                                    <input id="titulo" name="titulo" type="text" class="form-control" title="Tu titulo"  placeholder="Ej: Profesor en Educación Secundaria en Matemática">
                                  </div>

                                        <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Antiguedad en la Docencia:</span></div>

                                    <input id="antiguedadDocencia" name="antiguedadDocencia" type="number" class="form-control" title="Tu antiguedad en la docencia (solo numero)"  placeholder="Ej: 5">
                                  </div>

                                              <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" >Reguion Edicativa:</span></div>

                                    <input id="regionEducativa" name="regionEducativa" type="text" class="form-control" title="En que Reguión educativa"  placeholder="Ej: VIII">
                                  </div>


                                <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><img style="width: 30px;" src="img/pdf1.png" class="card-img-top" id="mostrarimagen"> Archivo (Fotocopia del DNI):</span></div>


                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="seleccionararchivo" name="seleccionararchivo" lang="es" accept="application/pdf" title="Solo formato PDF" >

                                      <label class="custom-file-label" for="seleccionararchivo">Seleccionar Archivo (Ej: dni.pdf )</label>
                                    </div>

                                    <br><br>


                                           <div class="input-group input-group-sm mb-3">
                                  <div class="input-group-prepend">
                                   

                                    <dir id="informvarT"></dir>

                                  </div>


                                    
                                  </div>





                              
                              </div>
                              </div>
                              

                         

                      
                        </form>
                          
                      <div class="form-group">

                          <div class="col-12">
                          <dir id="buscarExi2"></dir>
                          <dir id="buscarExi">
                           <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarTotal" onclick="registroPrin()">
                            Agregar
                            </button>
                            </dir>
                            </div>
                      </div>
                              
                            <br>


 <script>





        document.getElementById("seleccionararchivo").addEventListener("change", () => {
           

            // selecionamos la imagen
            var imagenPrevisualizacion = document.querySelector("#mostrarimagen");

            //  verificamos que sea PDF
            var archivoInput=document.getElementById("seleccionararchivo");
            var archivoRuta = archivoInput.value;
            var extPermitidas= /(.pdf)$/i;

            if (!extPermitidas.exec(archivoRuta)) {
                Swal.fire('Mensaje De Advertencia',"Solo se puede subir documentos PDF","warning");
                 imagenPrevisualizacion.src = "img/pdf1.png";
                 $('#informvarT').html('');

                 $('#seleccionararchivo').val("");

            }else{
            // 
            
            archivo = $("#seleccionararchivo").val();
            $('#informvarT').html("Dirección: "+archivo);
            imagenPrevisualizacion.src = 'img/pdf.png';


            }
        });




 function registroPrin() {

  
   var apellidoNombre = $("#apellidoNombre").val();
   var dni = $("#dni").val();
   var email = $("#email").val();
   var titulo = $("#titulo").val();
   var antiguedadDocencia = $("#antiguedadDocencia").val();
   var regionEducativa = $("#regionEducativa").val();

   var archivo = $("#seleccionararchivo").val();



 

Swal.fire({
  title: 'Esta seguro de los datos ingresados?',
  text: "Apellido y Nombre: "+apellidoNombre+"; DNI: "+dni+"; EMAIL: "+email+"; Titulo: "+titulo+"; Antiguedad: "+antiguedadDocencia+"; Región Educativa: "+regionEducativa,
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'SI'
}).then((result) => {
  if (result.isConfirmed) {

    Registrar(apellidoNombre,dni,email,titulo,antiguedadDocencia,regionEducativa,archivo);
  }
})

}











        function Registrar(apellidoNombre,dni,email,titulo,antiguedadDocencia,regionEducativa,archivo){

                  


            if(apellidoNombre.length==0 || dni.length==0 || titulo.length==0 || antiguedadDocencia.length==0 || regionEducativa.length==0 || email.length==0){
                return Swal.fire('Mensaje De Advertencia',"Los campos no pueden quedar vacios","warning");
            }

            if(archivo.length==0){
                return Swal.fire('Mensaje De Advertencia',"Debe Seleccionar un archivo","warning");
            }



            var formData= new FormData();
            var pdf = $("#seleccionararchivo")[0].files[0];


            formData.append('pdf',pdf);
            formData.append('apellidoNombre',apellidoNombre);
            formData.append('dni',dni);
            formData.append('email',email);
            formData.append('titulo',titulo);
            formData.append('antiguedadDocencia',antiguedadDocencia);
            formData.append('regionEducativa',regionEducativa);

            $.ajax({
                url:'php/upload.php',
                type:'post',
                data:formData,
                contentType:false,
                processData:false,
                success: function(respuesta){

                    if(respuesta ==1){
                          $("#apellidoNombre").val("");
                          $("#dni").val("");
                          $("#titulo").val("");
                          $("#antiguedadDocencia").val("");
                          $("#regionEducativa").val("");
                          $("#seleccionararchivo").val("");
                          $("#email").val("");

                          $('#informvarT').html('');

                          var imagenPrevisualizacion = document.querySelector("#mostrarimagen");

                          imagenPrevisualizacion.src = 'img/pdf1.png';


                        Swal.fire('Mensaje De Confirmación',"Su inscripción fue satifactoria; se le enviará la información del curso a su correo !!","success");
                    }else{

                      Swal.fire('Mensaje De Advertencia',"Error de servidor","warning");

                    }
                }
            });
            return false;
        }



 $("#dni").keyup(function(){


 dni= $("#dni").val();




if (dni.length == 8){


  $.ajax({
          type:"post",
          data:'dni=' + $('#dni').val(),
          url:'php/buscar.php',
          success:function(r){


            if (r==1) {
              $('#buscarExi2').html("Los DNI ya esta registrado");
  
              $('#buscarExi').hide();
            }else{

              $('#buscarExi2').html('');
  
              $('#buscarExi').show();

            }
          
           
          
          }

        });

}else if(dni.length >8){

  $('#buscarExi2').html("Los DNI solo tienen 8 digitos");
  
  
  $('#buscarExi').hide();
  
  
}else{

  $('#buscarExi2').html("");
  
  
  $('#buscarExi').show();

}
    
        
      });
  





    </script>


