<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorindexAdmin extends Controller
{
    //controlador index_admin, mostrar index_admin
    function mostarIndexAdmin(){
        return view('indexAdmin');
        
    }
}
