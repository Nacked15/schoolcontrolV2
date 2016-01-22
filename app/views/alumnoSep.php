<ol class="breadcrumb hidden-xs hidden-sm visible-md visible-lg">
  <li><a href="?menu_ad=principal">Principal</a></li>
  <li><a href="?menu_ad=alumnos">Alumnos</a></li>
  <li class="active">Alumnos de la SEP</li>
</ol>

<div class="well">
   <div class="navbar-example">
   <div class="row">
      <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
         <ul class="nav nav-tabs nav-justified vx" role="tablist" id="myTab">
            <?php include_once 'app/php/studentCount.php'; ?>
            <li role="presentation"><a href="#inscritos" aria-controls="inscritos" role="tab" data-toggle="tab">INSCRITOS <span class="badge"><?php stnSep('si');?></span></a></li>
            <li role="presentation"><a href="#candidatos" aria-controls="candidatos" role="tab" data-toggle="tab">CANDIDATOS <span class="badge"><?php stnSep('no');?></span></a></li>
         </ul>
      </div>
      <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>
   </div>
   <div class="row">
      <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
         <div class="well">
            <div class="tab-content">
               <div role="tabpanel" class="row tab-pane fade in active" id="inscritos">
                  <h4 class="bg-primary text-center">Alumnos Inscritos en la SEP</h4>
                  <section id="inscritos">
                     <div class="list-group row">
                        <div class="col-xs-0 col-sm-1 col-md-1"></div>
                        <div class="col-xs-12 col-sm-10 col-md-10">
                            <div class="row">
                              <div class="col-xs-0 col-sm-2 col-md-4"></div>
                              <div class="col-xs-12 col-sm-8 col-md-4">
                                <a id='' href='?menu_ad=formSep' class='btn btn-sm btn-primary btn-raised'>REGISTRO DE ACREDITACI&Oacute;N</a><br>
                              </div>
                              <div "col-xs-0 col-sm-2 col-md-4"></div>
                            </div>
                           <div id="showResultadoSepSi" class="list-group-item row">

                           </div>
                        </div>
                        <div class="col-xs-0 col-sm-1 col-md-1"></div>
                     </div>
                  </section>
               </div>
            <div role="tabpanel" class="row tab-pane fade" id="candidatos">
               <h4 class="bg-primary text-center">Alumnos candidatos para la SEP</h4><br>
               <div class="list-group row">
                  <div class="col-xs-0 col-sm-1 col-md-0 col-lg-0"></div>
                  <div class="col-xs-12 col-sm-10 col-md-12 col-lg-12">
                  <div id="showResultadoSepNo" class="list-group-item">
                    
                  </div>
                  </div>
                  <div class="col-xs-0 col-sm-1 col-md-0 col-lg-0"></div>
               </div>              
            </div>
            </div>
         </div>
      </div>
      <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>
   </div>
   </div> 
</div>

<!-- INICIO DE MODAL(Registro de alumno a SEP) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-register" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header second-color">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
               <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>REGISTRO SEP</strong></h4>
            </div>
            <form action="#" method="POST" class="form-horizontal" accept-charset="utf-8">
               <div class="modal-body">
                  <div id="msgRegFail"></div>
                  <legend class="text-center text-primary">Proporcione los Datos de Registro</legend>
                  <div class="form-group"><label class="col-sm-4 control-label">N&uacute;mero de Registro: </label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="num_registro" id="num_registro" placeholder="" required>
                     </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Porcentaje de Beca: </label>
                     <div class="col-sm-8">
                        <input type="text" class="form-control" name="beca" id="becaSep" placeholder="Si no hay beca agregue 0" required>
                     </div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Fecha de Registro: </label>
                     <div class="col-sm-8">
                        <input type="date" class="form-control" name="fechaRegistro" id="fechaRegistro" placeholder="2016-01-01">
                     </div>
                  </div>            
               </div>
               <div class="modal-footer">
                  <button type="button" id="saveSEP" class="btn btn-primary btn-sm btn-raised">GUARDAR</button>
                  <button type="button" id="closeme" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CANCELAR</button>
               </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN DEL MODAL -->
<div class="modal fade bs-example-modal-editor" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header second-color">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
               <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>EDITAR REGISTRO SEP</strong></h4>
            </div>
            <a id="quitSep" href="#" data-toggle='tooltip' data-placement='right' data-trigger='hover' title='Remover alumno de la lista' class="btn btn-fab btn-danger btn-raised"><i class="mdi-action-exit-to-app"></i></a>
            <form action="" method="POST" class="form-horizontal" accept-charset="utf-8">
               <div class="modal-body">
                  <div id="msgRegError"></div>
                  <legend class="text-center text-primary">Edite los Campo Necesarios</legend>
                  <div id="thisDataSep"></div>
           
               </div>
               <div class="modal-footer">
                  <button type="button" id="saveEditSEP" class="btn btn-primary btn-sm btn-raised">GUARDAR</button>
                  <button type="button" id="cerrar" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CANCELAR</button>
               </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN DEL MODAL --> 