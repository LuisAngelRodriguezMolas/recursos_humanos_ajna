<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorGenararFechaCadUsuTemp extends Controller
{
    function cargarFecha($dias){
        return view('/crearFechaCaducidadUsuarioTmp',[
            'dias'=>$dias
        ]);
    }
}
