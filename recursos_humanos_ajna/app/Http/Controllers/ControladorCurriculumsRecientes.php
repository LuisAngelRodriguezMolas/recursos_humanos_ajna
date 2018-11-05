<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCurriculumsRecientes extends Controller
{
    //
    function cargarCurriculums(){
       return view('/curriculumsRecientes');
    }
}
