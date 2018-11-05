<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorModalConfirmacionCrearUsuTEmp extends Controller
{
    //
    function cargarModal(){
        return view('/modalConfirmacionCrearUsuTEmp');
    }
}
