<?php
require_once("funcionesmodalUsuariosTemp.php");
$funciones = new  modalUsuariosTemp;


?>

 

<html>
<head>
   <meta charset="utf-8">
   <title>Mostrar Ventane Modal de forma Automático</title>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>  
   <script src="/js/jsModalUsuarioTemp.js"></script>
     

      <script>
            

          function actualizarFecha(){
              
            var CBdias = document.getElementById("CBdias");
            $("#fechaAjax").load('/generarFecha/'+CBdias.value); 
          }
    
      </script>
    
    
  

</head>
<body>
  <form action="">
   <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3>Confirmacion de cracion de usuario temporal</h3>
           </div>
           <div class="modal-body">
             
                 Ingrese corre del usiario
              <input type="email" required>
             
              
              <select name="" id="CBdias" onchange="actualizarFecha()">
                  <option value="0">Dias de duracion</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  
              </select>
           <div id="fechaAjax"></div>
       
            </div>
           <div class="modal-footer">
           <input type="button"  class="btn btn-primary" value="Crear">
          
           </div>
      </div>
   </div>
</div>
</form>
</body>
</html>