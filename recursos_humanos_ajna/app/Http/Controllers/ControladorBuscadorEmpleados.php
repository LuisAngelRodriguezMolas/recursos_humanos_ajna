<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorBuscadorEmpleados extends Controller
{
    //
    
    function cargarresultados(){
        return view('/buscadorEmpleados');
    }
}
