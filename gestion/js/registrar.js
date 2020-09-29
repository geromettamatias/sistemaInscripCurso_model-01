function openModelPDF(url) {

                                
  $('#iframePDF').attr('src',url);
 }


function cerrarSeccion()
        {
            $.ajax({
                url:'cerrarSeccion.php',
                type:'POST',
                data:"mensaje=mensaje&boton=cerrar"
            }).done(function(resp){
                //alert(resp);
                window.location.href = "../index.php";
            });
        };



function curso() {
  $('#busquedaCuadrantegesti').html('');
  $('#primeroCuadrantegesti').load('modulos/inscrip.php');
}



function  iradministracionMenu(){



  $('#busquedaCuadrantegesti').html('');
  $('#primeroCuadrantegesti').load('modulos/admin.php');

    



}  












// ---------------------------------------------------------------------------------




function nuevoUsuario() {

 

  Swal.fire({
        title: 'LOGIN',
        html:
        '<div class="form-group">USUARIOS<input id="usuario"  type="text" class="form-control">CONTRASEÑA<input id="contrase" type="text"  class="form-control"></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            usuario = document.getElementById('usuario').value,
            pass = document.getElementById('contrase').value,   
             
           
          nuevoUsuarioFinalFinal(usuario,pass);

                            
          }


 });



     

      
}






function nuevoUsuarioFinalFinal(usuario,pass) {
  cadena= "usuario=" + usuario +
        "&pass=" + pass;


    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/nuevoUsuario.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/admin.php');

          }
        });
}













function editarUsuario(datos) {

    d=datos.split('||');


      idusu= d[0];
      usuario= d[1];
      pass= d[2];



  Swal.fire({
        title: 'LOGIN',
        html:
        '<div class="form-group">USUARIOS<input id="usuario" value="'+usuario+'" type="text" class="form-control">DNI<input id="contrase" type="text" value="'+pass+'" class="form-control"></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            usuario = document.getElementById('usuario').value,
            pass = document.getElementById('contrase').value,   
             
           
           editarUsuarioFinal(idusu,usuario,pass);

                            
          }


 });



     

      
}


function editarUsuarioFinal(idusu,usuario,pass) {
  cadena= "idusu=" + idusu +
        "&usuario=" + usuario +
        "&pass=" + pass;


    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/editarUsuario.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/admin.php');

          }
        });
}




function eliminarUsuario(idusu) {

  

Swal.fire({
  title: 'Esta seguro de eliminar este registro?',
  text: "Los datos eliminados no se podran recuperar!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'SI, eliminar este registro!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Operación éxitosa',
      'success'
    )

    eliminarUsuarioFinal(idusu);
  }
})











      
     
}


function eliminarUsuarioFinal(idusu) {
   cadena= "idusu=" + idusu;



  Swal.fire({
        title: 'CONTRASEÑA DE SEGURIDAD',
        html:
        '<div class="form-group">PIN<input id="pin" type="text" class="form-control"></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            pin2 = document.getElementById('pin').value,
           
            
          
        eliminarUsuarioFinalFinal(pin2,cadena);

                            
          }




 });

    

}




function eliminarUsuarioFinalFinal(pin2,cadena){


if (pin2=="32729125") {
   $.ajax({
          type:"post",
          data:cadena,
          url:'php/eliminarUsuario.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/admin.php');

          }
        });
 }else{

  alert("Usted no esta autorizado a dar de baja un registro");

 }

       



}



//  eliminar inscripcion







function eliminarinscrp(id) {

  

Swal.fire({
  title: 'Esta seguro de eliminar este registro?',
  text: "Los datos eliminados no se podran recuperar!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'SI, eliminar este registro!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Operación éxitosa',
      'success'
    )

    eliminarinscrpPrimer(id);
  }
})











      
     
}


function eliminarinscrpPrimer(id) {
   cadena= "id=" + id;



  Swal.fire({
        title: 'CONTRASEÑA DE SEGURIDAD',
        html:
        '<div class="form-group">PIN<input id="pin" type="text" class="form-control"></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            pin2 = document.getElementById('pin').value,
           
            
          
        eliminarinscrpPrimerSegun(pin2,cadena);

                            
          }




 });

    

}




function eliminarinscrpPrimerSegun(pin2,cadena){


if (pin2=="32729125") {
   $.ajax({
          type:"post",
          data:cadena,
          url:'php/eliminarRegistro.php',
          success:function(r){
          
           $('#primeroCuadrantegesti').load('modulos/inscrip.php');

          }
        });
 }else{

  alert("Usted no esta autorizado a dar de baja un registro");

 }

       



}













