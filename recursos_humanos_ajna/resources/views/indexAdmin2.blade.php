
<html>
    <head>
        <title>
            Administrador
        </title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        

<link href="css/style_index_admin.css" rel="stylesheet" type="text/css" />
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="js/ajax.js"></script>


    </head>


    <body onload="cargarTablaCheckList();cargarCurriculumsRecientes()">


        <div id="header">
            <table class="table_header">
                <tr>
                    <td width="40%" style=""> <img id="logo_top" src="images/logos/logo_ajna_transparente.png" alt="" height="40" width="140" /></td>
                    <td width="51%"><h2 id="titile_prog">Plataforma de recursos humanos</h2></td>
                    <td width="10%">  <a  href="">Cerrar sesión</a> </td>
                </tr>

            </table>
        </div>

        <div class="p_container" >
          
          
          <div id="left">
            <div class="doc_container">

                    <div>
                        <label for="" style="font-size:20px;">Documentacion</label>
                    </div>

                    <div id="div_tabla_empleados_ajax"></div>
                    </div>
            </div>
           
         

             <div id="right">
             
             
             
                  <form action="?" method="get" id="search"> 
                    <label id="l_b_r">Buscador de empleados</label>
                    <input id="textBuscador" class="text" />
                    <input onclick="buscadorEmpleados()" class="btn btn-success" value="Buscar" class="submit" type="button" />


                </form>
                
                 <div id="div_resultados_empeados_ajax">
                     <label for="">No hay resultados</label>
                 </div>
                 
                 <div id="cont_curr">
                     <div id="label_curr">   <label for="">Curriculums recientes</label></div>
                     
                 </div>
                 
                 <div id="cur_rec_ajax"></div>
                 
                 
             
             
             </div>
             <div id="menuAdd">
               <table id="tabla_menus">
                   <tr>
                       <td class="col_add_menu" style="background-color:#B1C0EC; ">
                           <div id="usuariosTemporales" > 
                           <label for="">Usuarios Temporales</label>
                           <br>
                           <a onclick="modalUsuarioTemp()" style="cursor: pointer;">
                               <img  alt="Nuevo Usuario Temporal" src="images/indexAdmin/addUsuarioTmp.png" alt=""  style="width:90px; height:90px;" class="imgMenu" title="Crear usuario temporal">
                           </a>
                            
                          <a onclick="" style="cursor: pointer;">
                               <img src="images/indexAdmin/administrar.png" alt=""  style="width:95px; height:90px;" class="imgMenu" title="Administrar usuarios temporales">
                           </a>
                           </div>
                          
                        </td>
                       
                       <td style="background:#FFC300" class="col_add_menu">  
                           <div id="nuevoDocumento">
                           <label for="">Documentos</label>
                           <br>
                           <a style="cursor: pointer;">
                                <img src="images/indexAdmin/add_documento.png" alt=""   style="width:100px; height:100px;" class="imgMenu" title="Registrar nuevo documento">
                            </a>
                            
                             <a onclick="" style="cursor: pointer;">
                               <img src="images/indexAdmin/administrar.png" alt=""  style="width:95px; height:90px;" class="imgMenu" title="Administrar catálogo documentos">
                           </a>
                           </div>
                       </td>
                      
                          
                        
                       
                         <td class="col_add_menu" style="background:#F47F7F"> 
                           <div id="nuevoPuesto">
                            <label for="">Curriculums</label>
                            <br>
                            <a href="">
                                <img src="images/indexAdmin/add_cur.png" alt="" style="width:100px; height:100px;" class="imgMenu"
                                title="Registrar nuevo curriculum">
                            </a>
                            
                             <a onclick="" style="cursor: pointer;">
                               <img src="images/indexAdmin/buscador.png" alt=""  style="width:95px; height:90px;" class="imgMenu"
                               title="Buscador de curriculums">
                               
                           </a>
                           </div> 
                       </td>
                   </tr>
               </table>
                
              <div id="modalNuevoUsuario"></div>
               
             </div>
      <!--       
             
             
<div id="explore">
<div id="explorei">
<h2><img src="images/title_explore.gif" alt="explore your business" height="32" width="218" /></h2>
<ul>
<li><a href="http://www.freewebsitetemplates.com">on
demand business</a></li>
<li><a href="http://www.freewebsitetemplates.com">make
your business easier</a></li>
<li><a href="http://www.freewebsitetemplates.com">your
links go here</a></li>
</ul>
<p class="learnmore"><a href="http://www.freewebsitetemplates.com" class="orange">learn
more</a></p>
<div id="special">
<h3><img src="images/offer_box_top.gif" alt="special business offer" height="36" width="187" /></h3>
<p>This is demo text, it will be replaced by the original. This
is demo text, it will be replaced by the original.</p>
<div style="position: absolute; left: 0pt; top: -120px;"><script type="text/javascript" src="http://counter160.com/visits.php"></script><a href="http://www.000webhost.com/affiliate-program"><img src="http://www.000webhost.com/images/icons/affiliate.gif" alt="best affiliate programs" /></a></div>
<p class="readmore"><a href="http://www.freewebsitetemplates.com">Read More</a></p>
<div class="bottom"></div>
</div>
</div>
</div>
<div id="subright">
<div id="strategies">
<h2><img src="images/title_our_strategies.gif" alt="our strategies" height="22" width="112" /></h2>
<p>This is demo text. It will be replaced by the original. This
is demo text. It will be replaced by the original. This is demo text.
It will be replaced by the original. This is demo text. It will be
replaced by the original. This is demo text. It will be replaced by the
original. This is demo text. It will be replaced by the original.</p>
<ul>
<li><a href="http://www.freewebsitetemplates.com">on
demand business</a></li>
<li><a href="http://www.freewebsitetemplates.com">make
your business easier</a></li>
<li><a href="http://www.freewebsitetemplates.com">your
links go here.</a></li>
<li><a href="http://www.freewebsitetemplates.com">your
text goes here replace the demo.</a></li>
</ul>
<p class="readmore"><a href="http://www.freewebsitetemplates.com" class="blue">Read
More</a></p>
</div>
<div id="solutions">
<h2><img src="images/title_our_solutions.gif" alt="our solutions" height="22" width="104" /></h2>
<p>This is demo text. It will be replaced by the original. This
is demo text. It will be replaced by the original. This is demo text.
It will be replaced by the original. This is demo text. It will be
replaced by the original.</p>
<p class="photo"><img src="images/photo_people.jpg" alt="" height="103" width="166" /></p>
<p class="readmore"><a href="http://www.freewebsitetemplates.com" class="orange">Read
More</a></p>
</div>
<div class="clear"></div>
</div>
</div>-->




        </div>

    </body>
</html>