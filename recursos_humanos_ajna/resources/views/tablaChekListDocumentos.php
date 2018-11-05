
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../css/main_tablaChekDocumentos.css">

<div style=" max-height: 600px">

    <script>
        
        var esp= {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}

        $(document).ready(function () {
            $('#dtHorizontalVerticalExample').DataTable({
                "scrollX": true,
                "scrollY": 400,
                "language":esp
            });
            $('.dataTables_length').addClass('bs-select');
        });



    </script>

   
    <table id="dtHorizontalVerticalExample" class="table table-bordered table-sm table-hover table table-striped" cellspacing="0" width="100%" style="border-collapse: collapse !important;"> 
        <thead style=" background-color: #286268;">
            <tr>
                <th class="th-sm" >
                  <label class="datoCabecera">
                    Nombre
                  </label>
                    
                </th>

                <?php
                  for ($i=0; $i <8 ; $i++) { 
                    # code..
                  echo "
                         <th class='th-sm'>
                           <label class='datoCabecera'>
                            Documento1    
                            </label>
                         </th>

                  ";

                  }
                ?>
                  <th class="th-sm">
                      <label class='datoCabecera'>
                  Guardar
                   </label>
                   
                </th>
                
            </tr>
        </thead>
        <tbody style=" background-color: #286268;">


          <?php

           
        for ($i=0; $i <1 ; $i++) { 
          # code...
        
         
            echo "

              <tr >
                <td>empleado</td>
              <td> <input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td> <input type='button' value='Guardar' class='btn btn-primary'></td>
            </tr>
            ";
 }
          ?>

           <tr >
                <td>empleado</td>
              <td> <input type="button" name="" value="hola"></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td><input type='checkbox'></td>
              <td> <input type='button' value='Guardar' class='btn btn-primary'></td>
            </tr>
            
              

              
        </tbody>
    
    </table>
</div>