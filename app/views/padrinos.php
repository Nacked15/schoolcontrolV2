<ol class="breadcrumb hidden-xs hidden-sm visible-md visible-lg">
  <li><a href="?menu_ad=principal">Principal</a></li>
  <li class="active"><a href="?menu_ad=padrinos">Padrinos</a></li>
</ol>
<div class="well">
   <div class="navbar-example">
   <div class="row">
      <div class="col-sm-12">
         <ul class="nav nav-tabs nav-justified vx" role="tablist" id="myTab">
            <li role="presentation"><a href="#padrinos" aria-controls="padrinos" role="tab" data-toggle="tab">LISTA DE PADRINOS ACTIVOS</a></li>
            <li role="presentation"><a href="#padrinosIna" aria-controls="padrinosIna" role="tab" data-toggle="tab">LISTA DE PADRINOS INACTIVOS</a></li>
            <li role="presentation"><a href="#nuevo" aria-controls="nuevo" role="tab" data-toggle="tab">AGREGAR NUEVO PADRINO</a></li>
         </ul>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12">
         <div class="well">
               <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="padrinos">
                     <h4 class="bg-primary text-center">Lista</h4>
                     <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover table-responsive table-striped table-condensed">
                           <thead>
                              <tr class="info">
                                 <th>#</th>
                                 <th>Tipo</th>
                                 <th>Nombre(s)</th>
                                 <th>Apellido(s)</th>                                          
                                 <th>Correo</th>
                                 <th>Descripción</th>
                                 <th>Estatus</th>
                                 <th>Alumno Becado</th>
                                 <th>Foto de Alumno</th>
                                 <th>Acciones...</th>
                              </tr>
                           </thead>
                           <tbody> 
                              <?php 
                                 include 'app/profiles/transactions/showSponsors.php';
                                 showSponsors('activo'); 
                              ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="padrinosIna">
                     <h4 class="bg-primary text-center">Lista</h4>
                     <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover table-responsive table-striped table-condensed">
                           <thead>
                              <tr class="info">
                                 <th>#</th>
                                 <th>Tipo</th>
                                 <th>Nombre(s)</th>
                                 <th>Apellido(s)</th>                                          
                                 <th>Correo</th>
                                 <th>Descripción</th>
                                 <th>Estatus</th>
                                 <th>Acciones...</th>
                              </tr>
                           </thead>
                           <tbody> 
                              <?php showSponsors('inactivo'); ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div role="tabpanel" class="row tab-pane fade" id="nuevo">
                     <h4 class="bg-primary text-center">Alta de Padrinos</h4><br>
                     <div class="col-xs-0 col-sm-0 col-md-1"></div>
                     <div class="col-xs-12 col-sm-12 col-md-10">
                        <form action="app/profiles/transactions/addSponsor.php" method="POST" class="form-horizontal">
                           <div class="form-group">
                              <label for="inputname" class="col-sm-4 control-label">Tipo de Padrino: </label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo de padrino" required>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="inputname" class="col-sm-4 control-label">Nombre(s): </label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" id="nombre" name="name" placeholder="Name" required>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="inputsurname" class="col-sm-4 control-label">Apellido(s): </label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" id="apellido" name="surname" placeholder="Surname" required>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="inputparentesco" class="col-sm-4 control-label">Correo Electronico: </label>
                              <div class="col-sm-8">
                                 <input type="email" name="email" class="form-control" placeholder="name@domain.com">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="inputparentesco" class="col-sm-4 control-label">Descripción (¿Quién es?): </label>
                              <div class="col-sm-8">
                                 <input type="text" name="descripcion" class="form-control" placeholder="Ex maestro de Na'atik">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="inputPeriod" class="col-sm-4 control-label">Alumno Beneficiado: </label>
                              <div class="col-sm-8">
                                 <select class="form-control " name="alumno">
                                    <?php
                                       include 'includes/db_connect.php';
                                       #Consulta para mostrar a todos los alumnos aspirantes a una beca 
                                       $consulta = "SELECT S.id_student, S.name_s, S.surname1_s, S.surname2_s, B.request, B.togrant 
                                                      FROM student S, scholar B 
                                                         WHERE B.request = 'si' AND (B.togrant='si' || B.togrant='no') AND B.id_student = S.id_student;";
                                       $seleccion = mysqli_query($db_connect, $consulta);
                                       while ($fila = mysqli_fetch_array($seleccion)) {
                                          echo "<option value='".$fila['id_student']."'>".$fila['name_s']." ".$fila['surname1_s']." ".$fila['surname2_s']."</option>";
                                       }
                                       
                                    ?>
                                 </select>
                              </div>
                           </div><br>
                           <div class="row">
                              <div class="col-sm-4"></div>
                              <div class="col-sm-4">
                                 <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-confirm"> GUARDAR</button>
                                    <div class="modal fade bs-example-modal-confirm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-sm">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
                                                <h5 class="modal-title text-center" id="myModalLabel"><strong><i class="mdi-content-save"></i>  GUARDAR PADRINO</strong></h5>
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
                              <div class="col-sm-4"></div>
                           </div>
                        </form>
                     </div>
                     <div class="col-xs-0 col-sm-0 col-md-1"></div>
                  </div>
               </div>
         </div>
      </div>
   </div>
   </div> 
</div>

<!-- INICIO DE MODAL(Editar datos del curso) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header second-color">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
                <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>PADRINO</strong></h4>
            </div>
            <div class="modal-body">
            <form action="app/profiles/transactions/updateSponsor.php" method="POST" class="form-horizontal" accept-charset="utf-8">
                <div id="datospadrino">
                               
                </div>                              
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm btn-raised">GUARDAR</button>
            </form>
                <button type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CANCELAR</button>
            </div>
        </div>
    </div>
</div>
<!-- FIN DEL MODAL -->