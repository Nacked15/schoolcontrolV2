<!-- SECCION DE INFORMACION GENERAL DEL ALUMNO -->
<div class="row">
   <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
   <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
      <div class="row">
         <ul class="nav nav-justified vx">
            <li><a class="sts" href="?menu_ad=alumnoNuevo&nuevo=infoTutor">DATOS DEL TUTOR</a></li>
            <li class="state-on"><a class="sts" href="?menu_ad=alumnoNuevo&nuevo=infoGeneral">DATOS GENERALES</a></li>
            <li><a class="sts" href="?menu_ad=alumnoNuevo&nuevo=infoAcademica">INFO. ACADÉMICA</a></li>
         </ul>
      </div>
   </div>
   <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
</div>
<div class="row">
   <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
   <div class="well col-xs-12 col-sm-12 col-md-10 col-lg-10">
      <section id="alumno"> 
         <form action="app/profiles/transactions/addStudent.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <legend><h4 class="bg-info">DATOS DEL ALUMNO: </h4></legend>
            <div class="caja">
               <div class="row">
                  <div class="col-sm-4 col-md-4 col-lg-4">
                     <div class="form-group">
                        <div class="col-sm-12">
                           <input type="text" class="form-control text-center" id="apellido1" name="apellido1" placeholder="Apellido Paterno" autocomplete="off" required>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                     <div class="form-group">
                        <div class="col-sm-12">
                           <input type="text" class="form-control text-center" id="apellido2" name="apellido2" placeholder="Apellido Materno" autocomplete="off">
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                     <div class="form-group">
                        <div class="col-sm-12">
                           <input type="text" class="form-control text-center" id="nombre" name="nombre" placeholder="Nombre" autocomplete="off" required>
                        </div>
                     </div>
                  </div>
               </div><br>
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                     <div class="form-group">
                        <label class="col-xs-12 col-sm-12 col-md-3 col-lg-3">Fecha de Nacimiento:</label>
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
                           <select class="form-control" name="dia">
                              <option value="">Día...</option>
                                 <?php 
                                    for ($j=1; $j<=31; $j++){
                                       echo "<option value='".$j."'>".$j."</option>";
                                    }
                                 ?>
                           </select>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
                           <select class="form-control" name="mes">
                              <option value="">Mes...</option>
                              <option value="01">Enero</option>
                              <option value="02">Febrero</option>
                              <option value="03">Marzo</option>
                              <option value="04">Abril</option>
                              <option value="05">Mayo</option>
                              <option value="06">Junio</option>
                              <option value="07">Julio</option>
                              <option value="08">Agosto</option>
                              <option value="09">Septiembre</option>
                              <option value="10">Octubre</option>
                              <option value="11">Noviembre</option>
                              <option value="12">Diciembre</option>
                           </select>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
                           <select class="form-control" name="anio">
                              <option value="">Año...</option>
      									<?php 
      										$thisYear = date("Y");
      										$lastYear = $thisYear - 55;
      										for ($i=$thisYear;$i>=$lastYear;$i--){
      											echo "<option value='".$i."'>".$i."</option> ";
      										}
      									?>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                     <div class="form-group">
                        <label class="col-sm-4 control-label">Sexo: </label>
                        <div class="col-sm-8">
                           <select class="form-control" name="genero">
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="col-sm-4">Estado Civil: </label>
                        <div class="col-sm-8">
                           <select class="form-control" name="edocivil">
                              <option value="Soltero(a)">Soltero(a)</option>
                              <option value="Casado(a)">Casado(a)</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="col-sm-4 control-label">Num. celular: </label>
                        <div class="col-sm-8">
                              <input type="tel" class="form-control" id="celular" name="celular" placeholder="983 100 1020" maxlength="12" autocomplete="off">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <div class="form-group">
                        <label class="col-sm-2">Domicilio: </label>
                        <div class="col-sm-10">
                           <?php 
                              if (isset($_GET['tutorID'])) {
                                 $query = "SELECT id_tutor, address_t FROM tutor WHERE id_tutor=".$_GET['tutorID'].";";
                                 echo "<input type='hidden' name='tutor' value='".$_GET['tutorID']."' />";
                              } else {
                                 $query = "SELECT id_tutor, address_t FROM tutor ORDER BY id_tutor DESC LIMIT 1;";
                                 echo "<input type='hidden' name='tutor' value='' />";
                              }
         							$selection = mysqli_query($db_connect, $query);
         							while ($row = mysqli_fetch_array($selection)){
         								$addressTutor = $row['address_t'];
         							} 
                           ?>
                           <input type="text" class="form-control" id="domicilio" value="<?= $addressTutor;?>" name="domicilio" placeholder="Calle - Numero - Entre - Colonia">
                           <?php mysqli_close($db_connect); ?>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2">Referencia de domicilio: </label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Frente a Instituto Na'atik" autocomplete="off">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-4">¿Padece de alguna enfermedad?: </label>
                        <div class="col-sm-8">
                           <div class="radio radio-info">
                              <label>
                                 NO
                                 <input type="radio" id="optRadio1" value="no" name="optRadio" checked="checked" onclick="guardar()">
                                 <span class="circle"></span>
                                 <span class="check"></span>                                       
                              </label>
                              <label for=""></label>
                              <label>
                                 SI
                                 <input type="radio" id="optRadio2" value="si" name="optRadio" onclick="mostrar()">
                                 <span class="circle"></span>
                                 <span class="check"></span>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group" id="cual">
                        <label class="col-sm-3">¿Especifique Cuál?: </label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control" id="padecimiento" name="padecimiento" placeholder="Especifique de que padece" autocomplete="off" />
                        </div>
                     </div>
                     <div class="form-group" id="tratamiento">
                        <label class="col-sm-3">¿Cuál es el tratamiento?: </label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control" id="tratamiento" name="tratamiento" placeholder="Especifique de que padece" autocomplete="off" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-4">¿Es de familia Homestay?: </label>
                        <div class="col-sm-5">
                           <div class="radio radio-info">
                           <label> No
                              <input type="radio" checked="checked" value="0" name="homestay">
                              <span class="circle"></span>
                              <span class="check"></span>                                        
                           </label>
                           <label></label>
                           <label> SI
                              <input type="radio" value="1" name="homestay">
                              <span class="circle"></span>
                              <span class="check"></span>                                       
                           </label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2">Subir Foto:</label>
                        <div class="col-sm-10">
                           <input type="file" id="file-3" name="uploadedfile" class="form-control" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2">Comentario:</label>
                        <div class="col-sm-10">
                           <textarea name="comentario" class="form-control" rows="3" style="border: 1px solid #eee;"></textarea>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-1 col-sm-3 col-md-5"></div>
                  <div class="col-xs-10 col-sm-6 col-md-2">
                     <a href="#" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Guardar</a>
                     <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
                                 <h5 class="modal-title text-center" id="myModalLabel"><strong><i class="mdi-content-save"></i>  GUARDAR ALUMNO </strong></h5>
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
                  <div class="col-xs-1 col-sm-3 col-md-5"></div>
               </div>
            </div>
         </form>
      </section>
   </div> 
   <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>  
</div>