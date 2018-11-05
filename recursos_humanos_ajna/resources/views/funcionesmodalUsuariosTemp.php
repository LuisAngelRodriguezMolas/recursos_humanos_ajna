<?php
    class modalUsuariosTemp{
        
     function claveAleatoria($longitud = 6, $opcLetra = TRUE, $opcNumero = TRUE, $opcMayus = TRUE, $opcEspecial = TRUE){
      $letras ="abcdefghijklmnopqrstuvwxyz";
        $numeros = "1234567890";
        $letrasMayus = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $especiales ="|@#~$%()=^*+[]{}-_";
        $listado = "";
        $password = ""; 
        if ($opcLetra == TRUE) $listado .= $letras;
        if ($opcNumero == TRUE) $listado .= $numeros;
        if($opcMayus == TRUE) $listado .= $letrasMayus;
        if($opcEspecial == TRUE) $listado .= $especiales;
        
           for( $i=1; $i<=$longitud; $i++) {
               $caracter = $listado[rand(0,strlen($listado)-1)];
            $password.=$caracter;
            $listado = str_shuffle($listado);
         }
         return $password;
        
     }
        
        
        function generarFechaCaducidad($diasDuracion){
           // echo("+$diasDuracion day");
            $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
           
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( "+$diasDuracion day" , strtotime ( $fecha ) ) ;
            $nfecgaFormateada= $dias[date("w",$nuevafecha)]." ".
                date("d",$nuevafecha)." de ".
                $meses[ date("n",$nuevafecha)-1]." del ". 
                date ( "Y" , $nuevafecha );
            return  $nfecgaFormateada;
        }
    
    }



?>
    
    

  
       
       
      



