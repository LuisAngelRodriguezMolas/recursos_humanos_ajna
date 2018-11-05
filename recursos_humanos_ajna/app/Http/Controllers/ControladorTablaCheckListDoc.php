<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorTablaCheckListDoc extends Controller
{
    //
    function ajaxTabla(){
        return view('tablaChekListDocumentos');
    }
}
