<ol class="breadcrumb row hidden-xs hidden-sm visible-md visible-lg">
  <li><a href="?menu_ad=principal">Principal</a></li>
  <li class="active"><a href="?menu_ad=cursos">Cursos</a></li>
</ol>

<div class="navbar-example">
   <div class="row">
      <div class="col-xs-12 col-sm-12">
         <ul class="nav nav-tabs nav-justified vx" role="tablist" id="myTab">
            <li role="presentation"><a href="#cursos" aria-controls="cursos" role="tab" data-toggle="tab">CURSOS</a></li>
            <li role="presentation"><a href="#nuevo" aria-controls="nuevo" role="tab" data-toggle="tab">NUEVO CURSO</a></li>
            <li role="presentation"><a href="#horario" aria-controls="horario" role="tab" data-toggle="tab">HORARIOS</a></li>
         </ul>
      </div>
   </div>
   <div class="row">
      <div class="col-xs-12 col-sm-12">
         <div class="well">
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane fade in active" id="cursos">
                  <h4 class="bg-primary text-center">Lista de Cursos</h4>
                  <div class="table-responsive">
                     <table id="example" class="table table-bordered table-hover table-striped table-condensed">
                        <thead>
                           <tr class="info">
                              <th>#</th>
                              <th>Nombre</th>
                              <th>Grupo</th>
                              <th>Fecha Ini.</th>
                              <th>Fecha Fin.</th>
                              <th>Dias</th>
                              <th>Horario</th>
                              <th>Periodo</th>
                              <th>Maestro</th>
                              <th>Estado</th>
                              <th>Editar</th>
                           </tr>
                        </thead>
                        <tbody> 
                           <?php include 'app/profiles/transactions/showClasses.php'; ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div role="tabpanel" class="row tab-pane fade" id="nuevo">
                  <h4 class="bg-primary text-center">Alta de Cursos</h4><br>
                  <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
                  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                        <form action="app/profiles/transactions/addClasses.php" method="POST" class="form-horizontal">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="inputname" class="col-xs-4 col-sm-4">Curso: </label>
                                       <div class="col-xs-8 col-sm-8">
                                          <select class="form-control"  name="nombreC">
                                             <option value="">Seleccione...</option>
                                             <option value="1">English Club</option>
                                             <option value="2">Primary</option>
                                             <option value="3">Adolescentes</option>
                                             <option value="4">Adultos</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="inputname" class="col-xs-4 col-sm-4 control-label">Grupo: </label>
                                       <div class="col-xs-8 col-sm-8">
                                          <select class="form-control" id="" name="grupo">
                                             <option value="">Seleccione...</option>
                                             <?php
                                                include_once 'app/php/groups.php';
                                             ?>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="inputPeriod" class="col-sm-4">Fecha de Inicio: </label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control datepicker" id="f_inicio" name="f_inicio" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="inputsurname" class="col-sm-4 control-label">Fecha Fin: </label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control datepicker" name="f_fin">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="form-group">
                                 <label for="inputPeriod" class="col-xs-4 col-sm-4 col-md-2">Periodo: </label>
                                 <div class="col-xs-8 col-sm-8 col-md-10">
                                    <select class="form-control " name="periodo">
                                       <?php date("Y"); $anioAnt=date("Y")-1; $anioNext=date("Y")+1; ?>
                                       <option value="<?php $anioNext;?> A"><?php echo $anioNext; ?> A</option>
                                       <option value="<?php $anioNext;?> B"><?php echo $anioNext; ?> B</option>
                                       <option value="<?php echo date('Y'); ?> A"><?php echo date("Y"); ?> A</option>
                                       <option value="<?php echo date('Y');?> B"><?php echo date("Y"); ?> B</option>
                                       <option value="<?php $anioAnt;?> A"><?php echo $anioAnt; ?> A</option>
                                       <option value="<?php $anioAnt;?> B"><?php echo $anioAnt; ?> B</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputdays" class="col-sm-2">Dias: </label>
                                    <div class="checkbox checkbox-inline checkdays col-sm-10">
                                    <label class="checkday">
                                       <input type="checkbox" id="inlineCheckbox1" name="diasC[]" value="Lunes">
                                       <span class='checkbox-material'></span> Lunes
                                    </label>
                                    <label class="checkday">
                                       <input type="checkbox" id="inlineCheckbox2" name="diasC[]" value="Martes">
                                       <span class='checkbox-material'></span> Martes
                                    </label>
                                    <label class="checkday">
                                       <input type="checkbox" id="inlineCheckbox3" name="diasC[]" value="Miercoles">
                                       <span class='checkbox-material'></span> Mi&eacute;rcoles
                                    </label>
                                    <label class="checkday">
                                       <input type="checkbox" id="inlineCheckbox4" name="diasC[]" value="Jueves">
                                       <span class='checkbox-material'></span> Jueves
                                    </label>
                                    <label class="checkday">
                                       <input type="checkbox" id="inlineCheckbox5" name="diasC[]" value="Viernes">
                                       <span class='checkbox-material'></span> Viernes
                                    </label>
                                    <label class="checkday">
                                       <input type="checkbox" id="inlineCheckbox6" name="diasC[]" value="Sabado" name="diasC">
                                       <span class='checkbox-material'></span> S&aacute;bado
                                    </label>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="inputtime" class="col-md-4">Hora de Inicio: </label>
                                       <div class="col-md-8">
                                          <input type="time" name="h_inicio" class="form-control" placeholder="2:00">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="inputtime" class="col-md-4 control-label">Hora Salida: </label>
                                       <div class="col-md-8">
                                          <input type="time" name="h_salida" class="form-control" placeholder="2:00">
                                       </div>
                                    </div>
                                 </div><div class="clearfix"></div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-4">Costo Normal: </label>
                                       <div class="col-md-8">
                                          <input type="text" class="form-control" name="costo_normal" id="costo_normal" placeholder="100">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-4 control-label">Costo Promo: </label>
                                       <div class="col-md-8">
                                          <input type="text" class="form-control" name="costo_promo" id="costo_promo" placeholder="100">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-4">Descuento: </label>
                                       <div class="col-md-8">
                                          <input type="text" class="form-control" name="descuento" id="costo_promo" placeholder="15">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-4 control-label">Costo Inscripción: </label>
                                       <div class="col-md-8">
                                          <input type="text" class="form-control" name="inscripcion" id="inscripcion" placeholder="200">
                                       </div>
                                    </div>
                                 </div>
                              </div><br>
                              <div class="row">
                                 <div class="col-xs-3 col-sm-5"></div>
                                 <div class="col-xs-6 col-sm-2">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-confirm">Guardar</button>
                                    <div class="modal fade bs-example-modal-confirm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-sm">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
                                                <h5 class="modal-title text-center" id="myModalLabel"><strong><i class="mdi-content-save"></i>  GUARDAR CURSO</strong></h5>
                                             </div>
                                             <div class="modal-body dummi">
                                                <p class="text-center text-info text-primary-color">¿Desea continuar con esta acción?</p>
                                             </div>
                                             <div class="modal-footer dummi">
                                                <button class="btn btn-success btn-raised btn-sm"><i class='mdi-file-cloud-upload'></i> GUARDAR</button>
                                                <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal"><i class='mdi-file-cloud-off'></i> CANCELAR</button>                            
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-3 col-sm-5"></div>
                              </div><br><br><br>
                        </form> 
                  </div>
                  <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
               </div>
               <div role="tabpanel" class="tab-pane fade" id="horario">
                  <h4 class="bg-primary text-center">Horarios de Clases</h4>
                  <a href="#" id="printer" class="label label-primary">IMPRIMIR <span class="glyphicon glyphicon-print"></span></a>
                  <div class="table-responsive" id="paperPrint">
                     <table class="table table-bordered table-hover table-striped table-condensed">
                        <caption class="text-center text-primary"><strong>HORARIO</strong></caption>
                        <thead>
                           <tr class="info">
                              <th class="text-center">Hora</th>
                              <th class="text-center">Lunes</th>
                              <th class="text-center">Martes</th>
                              <th class="text-center">Miercoles</th>
                              <th class="text-center">Jueves</th>
                              <th class="text-center">Viernes</th>
                              <th class="text-center">Sabado</th>
                           </tr>
                        </thead>
                        <tbody class="schedulecourse"> 
                           
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- INICIO DE MODAL(Editar datos del curso) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header second-color">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
                <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>DATOS DEL CURSO</strong></h4>
            </div>
            <div class="modal-body">
              <form action="app/profiles/transactions/updateClasses.php" method="POST" class="form" accept-charset="utf-8">
                <div id="infoCurso">
                               
                </div>                             
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm btn-raised">Guardar</button>
              </form> 
                <button type="button" class="btn btn-sm btn-info btn-raised" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- FIN DEL MODAL -->

<!-- INICIO DE MODAL(Editar datos del curso) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-teach" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>ASIGNAR MAESTRO</strong></h4>
         </div>
         <form action="app/profiles/transactions/asignTeacher.php" method="POST" class="form" accept-charset="utf-8">
         <div class="modal-body">
            <p class="text-center help"><small>Seleccione de la lista al maestro que desea asignar al curso elegido.</small></p>
            <div class="form-group">
               <label class="col-sm-2">Seleccione: </label>
               <div class="col-sm-10">
               <select name="maestro" id="datosteach" class="form-control"> 
               </select>
               </div>
            </div>                            
         </div>
         <div class="modal-footer"><br><br>
                <button type="submit" class="btn btn-primary btn-sm btn-raised">Guardar</button>
                <button type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">Cancelar</button>
         </div>
         </form> 
      </div>
   </div>
</div>
<!-- FIN DEL MODAL -->