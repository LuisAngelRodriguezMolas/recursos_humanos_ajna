<?php
require_once("funcionesmodalUsuariosTemp.php");
$funciones = new  modalUsuariosTemp();
?>
<div>
   <?php
    if($dias=='0'){
        echo("Selecciona los días de duración");
    }else{
   
     echo("La centa caducará el: ". $funciones -> generarFechaCaducidad($dias));
    }
    ?>
</div>