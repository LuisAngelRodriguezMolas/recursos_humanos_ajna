
//cargar tabla en el index
function cargarTablaCheckList() {
  $("#div_tabla_empleados_ajax").load("/tablaChekListDocumentos");
}

//buscador de empleados del index
function buscadorEmpleados(filtroDeBusqueda) {
  $("#div_resultados_empeados_ajax").load("/buscadorEmpleados");
}

//curriculums recientes index ajax
function cargarCurriculumsRecientes(){
    $("#cur_rec_ajax").load("/curriculumsRecientes");
}

//crear usuario temporal ajax
function modalUsuarioTemp(){
    $("#modalNuevoUsuario").load("/modalConfUsuTemp "); 
}

