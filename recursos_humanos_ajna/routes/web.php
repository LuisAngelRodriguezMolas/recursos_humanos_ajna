

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ruta login, mostrar login
Route::get('/index', 'ControladorLogin@mostarLogin');

//ruta index_admin, mostrar index admin

Route::get('/indexAdmin','ControladorindexAdmin@mostarIndexAdmin');

//ruta para tablaChekListDocumentos ajax
Route::get('/tablaChekListDocumentos','ControladorTablaCheckListDoc@ajaxTabla');

//ruata para buscador de empleados del index ajax

Route::get('/buscadorEmpleados','ControladorBuscadorEmpleados@cargarresultados');

//ruta para curriculums recientes index ajax
Route::get('/curriculumsRecientes','ControladorCurriculumsRecientes@cargarCurriculums');
 
//ruta para modal de confirmacion de creacion de usuarios temporales
Route::get('/modalConfUsuTemp','ControladorModalConfirmacionCrearUsuTEmp@cargarModal');

//ruta para generador de fecha de caducidad de ususrios
Route::get('/generarFecha/{dias}','ControladorGenararFechaCadUsuTemp@cargarFecha');
