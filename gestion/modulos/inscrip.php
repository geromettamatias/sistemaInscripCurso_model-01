
<?php 

    include('../php/conexion2.php');

 
 ?>




<div class="col-sm-12">


    <h4><p style="color:#F4F6F6;"><mark>Registros de Asistencia Alumno</mark></p></h4> 

<br>


 
 


<div class="table-responsive">        
  <table id="example9999" class="table table-striped table-bordered" cellspacing="0" width="100%">

                        <thead>
                            <tr> 
                                                  
                                <th scope="col">Apellido y Nombre</th>
                                <th scope="col">DNI</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Antig</th>
                                <th scope="col">Reg-Ed</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                  
                                    $tmp = array();
                                    $res = array();

                                    $sel = $con->query("SELECT * FROM `educacion_sin_frontera_social` ORDER BY `apellidoNombre`" );
                                    while ($row = $sel->fetch_assoc()) {
                                        $tmp = $row;
                                        array_push($res, $tmp);
                                    }
                                    ?>
                            <?php foreach ($res as $val) { ?>
                                <tr>
                                    <td><?php echo $val['apellidoNombre'] ?> </td>
                                    <td><?php echo $val['dni'] ?></td>
                                    <td><?php echo $val['email'] ?></td>
                                    <td><?php echo $val['titulo'] ?></td>
                                    <td><?php echo $val['antiguedadDocencia'] ?></td>
                                    <td><?php 

                                    $vari= 'http://' . $_SERVER['HTTP_HOST'] . '/sistema/inscrip/gestion/pdf/' . $val['url'];

                                    echo $val['regionEducativa']; ?>
                                   
                                        <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalPdf" onclick="openModelPDF('<?php echo $vari; ?>')" > 
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                          <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                        </svg>

                                        </button>
                                       

                                        <a class="btn btn-primary" target="_black" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sistema/inscrip/gestion/pdf/' . $val['url']; ?>" >


                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card-2-front-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                                            </svg>

                                        </a>


                                             <button class="btn btn-danger glyphicon glyphicon-pencil" onclick="eliminarinscrp('<?php echo $val['id']; ?>')" > 
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                            </svg>

                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
  </div>
 </div>


  <script type="text/javascript">
   $(document).ready(function() {    
    $('#example9999').DataTable({        
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
           },
           "sProcessing":"Procesando...",
            },
        //para usar los botones   
        responsive: "true",
        dom: 'Bfrtilp',       
        buttons:[ 
      {
        extend:    'excelHtml5',
        text:      '<i class="fas fa-file-excel"></i> ',
        titleAttr: 'Exportar a Excel',
        className: 'btn btn-success'
      },
      {
        extend:    'pdfHtml5',
        text:      '<i class="fas fa-file-pdf"></i> ',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-danger'
      },
      {
        extend:    'print',
        text:      '<i class="fa fa-print"></i> ',
        titleAttr: 'Imprimir',
        className: 'btn btn-info'
      },
    ]         
    });     
});
 </script>
