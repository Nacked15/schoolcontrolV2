<?php require_once ('app/profiles/transactions/showStudents.php'); include_once ('app/php/studentCount.php'); ?>
<!-- MIGAS DE PAN -->
<ol class="breadcrumb row hidden-xs hidden-sm visible-md visible-lg">
  <li><a href="?menu_ad=principal">Principal</a></li>
  <li><a href="?menu_ad=alumnos">Alumnos</a></li>
  <li class="active">Lista de Alumnos</li>
</ol>
<div class="row"> 
      <?php 
         @$_GET['registro'] = addslashes($_GET['registro']);
         switch ($_GET['registro']) {
            case 'Club': include 'app/views/stClub.php';
               break;
            case 'Primary': include_once 'app/views/stPrimary.php';
               break;
            case 'Adolescentes': include_once 'app/views/stAdolescente.php';
               break;
				case 'Adultos': include_once 'app/views/stAdults.php';
               break;
            case 'allStudents': include_once 'app/views/stAll.php';
               break;
            default: include 'app/views/stClub.php';
               break;
         }
      ?>
      <a href="?menu_ad=alumnoNuevo" id="plus" class="btn btn-fab btn-info mdi-content-add"></a>
</div>

<!-- INICIO DE MODAL DATOS DEL ALUMNO -->
<div class="modal fade bs-example-modal-alumno" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>DATOS DEL ALUMNO</strong></h4>
         </div>
         <div class="modal-body">
            <div class="row" id="dataStudent">
            </div>                              
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CERRAR</button>
         </div>
      </div>
   </div>
</div>
<!-- FIN DEL MODAL DATOS DE ALUMNO-->
                
<!-- INICIO DE MODAL 1 (Ver datos del tutor) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>DATOS DEL TUTOR</strong></h4>
         </div>
         <div class="modal-body">
            <div id="datostutor"></div>     
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CERRAR</button>
         </div>
      </div>
   </div>
</div>
<!-- FIN DEL MODAL 1 -->

<!-- INICIO DE MODAL 2 (Cambiar Curso de un solo alumno) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center" id="myModalLabel"><strong class="text-primary-color">ASIGNAR CURSO Y GRUPO</strong></h4>
         </div>
         <form action="app/php/changeClassSt.php" method="post" class="">
         <div class="modal-body">
            <div class="form-group">                                    
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label for="inputcurse" class="control-label">Curso: </label>
                        <select class="form-control" id="showCourse" name="curso" onchange="nextGroup(this.value);">
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label class="control-label">Grupo: </label>
                        <select class="form-control" id="dataGroup" name="grupo">              
                        </select>
                     </div>
                  </div>
               </div><br>
            </div>                              
         </div>
         <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-sm btn-raised">GUARDAR</button>
            <button type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CANCELAR</button>
         </div>
         </form>
      </div>
   </div>
</div>
<!-- FIN DEL MODAL 2-->

<!-- INICIO DE MODAL 3 (Cambiar Curso multiples alumnos) -->
<div class="modal fade bs-example-modal-change" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center" id="myModalLabel"><strong class="text-primary-color">CAMBIAR GRUPO Y CURSO</strong></h4>
         </div>
         <form action="app/php/changeGroupSts.php" method="post" class="">
            <div class="modal-body">
               <div class="form-group">                                    
                  <div class="row">
                     <div id="msgAlert"></div> 
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="inputcurse" class="control-label">Curso: </label>
                           <select class="form-control" id="Courses" name="curso" onchange="allGroup(this.value);">
                             <option value="">Seleccione...</option>
                             <option value="1-a">English Club</option>
                             <option value="2-a">Primary</option>
                             <option value="3-a">Adolescentes</option>
                             <option value="4-a">Adultos</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label class="control-label">Grupo: </label>
                           <select class="form-control" id="dGroup" name="grupo">              
                           </select>
                        </div>
                     </div>
                     <input type="hidden" class="hidden" name="alumnos" id="thosestudents">
                  </div><br>
               </div>                              
            </div>
            <div class="modal-footer">
               <button id="btnOk" type="submit" class="btn btn-primary btn-sm btn-raised">CAMBIAR</button>
               <button id="btnCancel" type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CANCELAR</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- FIN DEL MODAL 3-->

<!-- INICIO DEL MODAL 4 (Asignar Grupo / cambiar grupo) -->
<div class="modal fade bs-example-modal-2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center" id="myModalLabel"><strong class="text-primary-color">ASIGNAR GRUPO</strong></h4>
         </div>
         <form action="app/php/addGroup.php" method="post" class="form-horizontal">
            <div class="modal-body">
               <div class="form-group">                                    
                  <label class="col-sm-4">Elija un Grupo: </label>
                  <div class="col-sm-8">
                     <select class="form-control" name="grupost" id="info"></select>
                  </div>
               </div>       
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary btn-sm btn-raised">GUARDAR</button>
               <button type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CANCELAR</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- FIN DEL MODAL 4 (Asignar Grupo) -->

<!-- INICIO DEL MODAL 5 (Lista de tutores que no han firmado convenio) -->
<div class="modal fade bs-example-modal-convenios" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center" id="myModalLabel"><strong class="text-primary-color">LISTA DE TUTORES POR FIRMAR CONVENIO</strong></h4>
         </div>
            <div class="modal-body">
               <div id="conveniosfaltantes">
                  
               </div>      
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CERRAR</button>
            </div>
      </div>
   </div>
</div>
<!-- FIN DEL MODAL 5 (Asignar Grupo) -->

<!-- INICIO DEL MODAL 6 (Lista de tutores/alumnos que requieren facturas de pago) -->
<div class="modal fade bs-example-modal-facturacion" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center" id="myModalLabel"><strong class="text-primary-color">LISTA DE TUTORES/ALUMNOS QUE REQUIEREN FACTURA</strong></h4>
         </div>
            <div class="modal-body">
               <div id="facturacion">
                  
               </div>      
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CERRAR</button>
            </div>
      </div>
   </div>
</div>
<!-- FIN DEL MODAL 6 (Asignar Grupo) --> 

<!-- INICIO DE MODAL 7 (Ver datos del tutor) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-ncontrol" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>ASIGNACI&Oacute;N DE N&Uacute;MERO DE CONTROL</strong></h4>
         </div>
         <form action="app/profiles/transactions/addStControlNumber.php" method="POST">
            <div class="modal-body">
               <div class="form-group">
                  <label class="col-md-3">Ingrese n&uacute;mero de control:</label>
                  <div class="col-md-9">
                     <input type="hidden" name="idStnum" id="thisStNum" class="form-control hidden">
                     <input type="text" pattern="[0-9]{7}[A-Z]{1}[0-9]{4}" title"Inserte un numero de control valido" name="numcontrol" id="thisnumcontrol" class="form-control text-center" required autocomplete="off" placeholder="1234567A0000">
                     <p class="text-center text-info"><small>El formato correcto es semejante a: 1 2 3 4 5 6 7 A 1 2 3 4</small></p><br><br>
                  </div>
               </div>    
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary btn-sm btn-raised">GUARDAR</button>
               <button type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CERRAR</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- FIN DEL MODAL 7 -->  