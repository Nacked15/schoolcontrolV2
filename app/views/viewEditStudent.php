<!-- Migas de pan -->
<ol class="breadcrumb hidden-xs hidden-sm visible-md visible-lg">
  <li><a href="?menu_ad=principal">Principal</a></li>
  <li><a href="javascript:history.go(-2)">Lista de Alumnos</a></li>
  <li><a href="javascript:history.go(-1)">Info de Alumno</a></li>
  <li class="active">Editar datos de alumno</li>
</ol>

<?php 
   $IDstudent = $_GET['idStudent'];
   $IDacademic = $_GET['idAcademic'];
   $homestay = ''; $homeid='';

   $view = "SELECT * FROM student WHERE id_student=".$IDstudent.";";
   $show = mysqli_query($db_connect, $view);

   while ($row = mysqli_fetch_array($show)) {
      if ($row['homestay']==1) {
         $homestay = '<strong>SI</strong>';
         $homeid = 1;
      } else { $homestay='<strong>NO</strong>'; $homeid=0;}        
?>

<!-- INICIO DE CONTENIDO -->
<div class="well">
   <div class="row">
      <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
      <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
         <div class="navbar navbar-inverse row headStudent">
            <legend class="text-center text-primary-color">EDITAR DATOS DEL ALUMNO</legend>
            <a id='goBack' href='javascript:history.go(-1)' class='btn btn-info btn-fab btn-raised mdi-navigation-arrow-back' data-toggle='tooltip' data-placement='top' title='Volver'></a>
         </div>
      </div>
      <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
   </div>
    
    <!-- información del alumno -->
   <div class="row">
      <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
      <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 well">
         <form action='app/profiles/transactions/updateStudent.php' method='post' accept-charset='utf-8' class='form-horizontal' enctype="multipart/form-data">
            <div class="row">
               <div class="col-xs-0 col-sm-1 col-md-2 col-lg-2"></div>
               <div class="col-xs-12 col-sm-2 col-md-3 col-lg-2">
                  <div class="foto">
                     <?php echo "<img src='img/fotos/student/".$row['photo_s']."' alt='Photo' class='img-circle' width=80 height=80>"; ?>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-9 col-md-7 col-lg-8">
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Cambiar Foto: </label>
                     <div class="col-sm-9">
                        <input type="file" id="file-3" name="uploadedfile" class="form-control" />
                     </div>
                     <input type='hidden' name='picstudent' value="<?php echo $row['photo_s'] ?>" class='form-control'>
                  </div>
               </div>
            </div> 
            <div class="datos">
               <?php
                  list($calle,$num,$entre,$col) = explode(",", $row['address_s']); 
                  echo 
                     "<br>
                     <label>Nombre del Alumno: </label>
                     <div class='row'>
                        <div class='col-sm-4'>
                           <div class='form-group'>
                              <div class='col-md-12'>
                                 <input type='text' name='nombre_s' value='".$row['name_s']."' class='form-control text-center'>
                                 <p class='text-center'><small>Nombre(s)</small></p>
                              </div>
                           </div>
                        </div>
                        <div class='col-sm-4'>
                           <div class='form-group'>
                              <div class='col-md-12'>
                                 <input type='text' name='apellido1' value='".$row['surname1_s']."' class='form-control text-center'>
                                 <p class='text-center'><small>Ape. Paterno</small></p>
                              </div>
                           </div>
                        </div>
                        <div class='col-sm-4'>
                           <div class='form-group'>
                              <div class='col-md-12'>
                                 <input type='text' name='apellido2' value='".$row['surname2_s']."' class='form-control text-center'>
                                 <p class='text-center'><small>Ape. Materno</small></p>
                              </div>
                           </div>        
                        </div>
                        <div class='clearfix'></div>
                        <div class='col-sm-6'>
                              <div class='form-group'>
                                 <label class='col-md-3'>N&uacute;mero de Control: </label>
                                 <div class='col-md-9'>
                                    <input type='text' name='numcontrol' value='".$row['ncontrol']."' class='form-control'>
                                 </div>
                              </div>
                           </div>
                           <div class='col-sm-6'>
                              <div class='form-group'>
                                 <label class='col-md-4 control-label'>Familia Homestay: </label>
                                 <div class='col-md-8'>
                                    <select name='homestay' class='form-control'>
                                       <option value=".$homeid.">".$homestay."</option>
                                       <option value='1'>SI</option>
                                       <option value='0'>NO</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class='row'>
                        <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
                           <div class='form-group'>
                              <label class='col-xs-12 col-sm-4 col-md-4'>Nacimiento: </label>
                              <div class='col-xs-12 col-sm-8 col-md-8'>
                                 <input type='date' name='anio' value='".$row['birthday']."' class='form-control'>
                              </div>
                           </div>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
                           <div class='form-group'>
                              <label class='col-sm-4 col-md-3 control-label'>Edad: </label>
                              <div class='col-sm-8 col-md-9'>
                                 <input type='text' name='edad' value='".$row['age']."' class='form-control text-center'>
                              </div>
                           </div>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
                           <div class='form-group'>
                              <label class='col-sm-4 col-md-3'>Sexo: </label>
                              <div class='col-sm-8 col-md-9'>
                                 <select name='sexo' class='form-control'>
                                    <option value='".$row['sexo']."'>".$row['sexo']."</option>
                                    <option value='Femenino'>Femenino</option>
                                    <option value='Masculino'>Masculino</option>
                                 </select> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class='row'>
                        <div class='col-sm-6 col-md-6'>
                           <div class='form-group'>
                              <label class='col-sm-4 col-md-3'>Edo. civil: </label>
                              <div class='col-sm-8 col-md-9'>
                                 <select name='edocivil' class='form-control'>
                                    <option value='".$row['edo_civil']."'>".$row['edo_civil']."</option>
                                    <option value='Soltero(a)'>Soltero(a)</option>
                                    <option value='Casado(a)'>Casado(a)</option>
                                 </select> 
                              </div>
                           </div>
                        </div>
                        <div class='col-sm-6 col-md-6'>
                           <div class='form-group'>
                              <label class='col-sm-4 col-md-3'>Tel. celular: </label>
                              <div class='col-sm-8 col-md-9'>
                                 <input type='text' name='celular' value='".$row['cellphone']."' class='form-control text-center'>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class='row'>
                        <div class='col-lg-12'>
                           <div class='form-group' style='border: 1px solid #ccc;border-radius:2px; padding: 8px 15px; margin: 2px 1px;'>
                              <label>Dirección: </label><br>
                              <div class='row'>
                                 <div class='col-sm-6 col-md-6'>
                                    <input type='text' name='calle' value='".$calle."' class='form-control text-center'>
                                    <p class='text-center'><small>Calle</small></p>
                                 </div>
                                 <div class='col-sm-6 col-md-6'>
                                    <input type='text' name='numero' value='".$num."' class='form-control text-center'>
                                    <p class='text-center'><small>Número</small></p>
                                 </div>
                                 <div class='col-sm-6 col-md-6'>
                                    <input type='text' name='entre' value='".$entre."' class='form-control text-center'>
                                    <p class='text-center'><small>Entre</small></p>
                                 </div>
                                 <div class='col-sm-6 col-md-6'>
                                    <input type='text' name='colonia' value='".$col."' class='form-control text-center'>
                                    <p class='text-center'><small>Colonia</small></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class='col-lg-12'>
                           <div class='form-group'><br>
                              <label class='col-sm-3 col-md-2'>Referencia Domiciliar: </label>
                              <div class='col-sm-9 col-md-10'>
                                 <input type='text' name='referencia' value='".$row['reference']."' class='form-control'>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class='row'>
                        <div class='col-xs-12 col-sm-12 col-md-6'>  
                           <div class='form-group'>
                              <label class='col-md-3'>Padecimiento: </label>
                              <div class='col-md-9'>
                                 <input type='text' name='padecimiento' value='".$row['sickness']."' class='form-control'>
                              </div>
                           </div>
                        </div>
                        <div class='col-xs-12 col-sm-12 col-md-6'>
                           <div class='form-group'>
                              <label class='col-md-3 control-label'>Tratamiento: </label>
                              <div class='col-md-9'>
                                 <input type='text' name='tratamiento' value='".$row['medication']."' class='form-control'>
                              </div>
                           </div>
                        </div>
                        <div class='clearfix'></div>
                        <div class='col-xs-12 col-sm-12'>
                           <div class='form-group'>
                              <label class='col-md-2 control-label'>Comentario sobre el alumno: </label>
                              <div class='col-md-10'>
                                 <textarea name='comentario' class='form-control'>".$row['comment_s']."</textarea>
                              </div>
                           </div>
                        </div>
                     </div>
                     <input type='hidden' name='keyst' value='".$row['id_student']."'>";
               }?>
            </div>
            <br>
            <div class="info">
               <h4><label class="label label-primary">DATOS ACADEMICOS</label></h4>
               <?php 
                  $acta = ''; $facturar = '';
                  $view2 = "SELECT * FROM academic_info A, info_extrast I 
                              WHERE A.id_info=".$IDacademic." AND 
                                    A.id_student = I.id_st LIMIT 1;";
                  $show2 = mysqli_query($db_connect, $view2) or die(mysqli_error());
                  while ($row2 = mysqli_fetch_array($show2)) {
                        if ($row2['reg_nacimiento']==1) {
                           $acta = '<strong>SI</strong>';
                        } else { $acta='<strong>NO</strong>';}

                        if ($row2['facturacion']==1) {
                           $facturar = '<strong>SI</strong>';
                        } else { $facturar='<strong>NO</strong>';}  
                     echo      
                        "<br>
                        <div class='row'>
                           <div class='col-sm-6'>
                              <div class='form-group'>
                                 <label class='col-md-4'>Acta de Nacimiento: </label>
                                 <div class='col-md-8'>
                                    <select name='acta' class='form-control'>
                                       <option value=".$row2['reg_nacimiento'].">".$acta."</option>
                                       <option value='1'>SI</option>
                                       <option value='0'>NO</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class='col-sm-6'>
                              <div class='form-group'>
                                 <label class='col-md-4'>Facturaci&oacute;n: </label>
                                 <div class='col-md-8'>
                                    <select name='facturacion' class='form-control'>
                                       <option value=".$row2['facturacion'].">".$facturar."</option>
                                       <option value='1'>SI</option>
                                       <option value='0'>NO</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class='clearfix'></div>
                           <div class='col-sm-6'>
                              <div class='form-group'>
                                 <label class='col-md-4'>Ocupación: </label>
                                 <div class='col-md-8'>
                                    <input type='text' name='ocupacion' value='".$row2['ocupation']."' class='form-control'>
                                 </div>
                              </div>
                           </div>
                           <div class='col-sm-6'>
                              <div class='form-group'>
                                 <label class='col-md-4'>Estudia/Trabaja en: </label>
                                 <div class='col-md-8'>
                                    <input type='text' name='lugar' value='".$row2['workplace']."' class='form-control'>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class='row'>
                           <div class='col-sm-6'>
                              <div class='form-group'>
                                 <label class='col-md-4'>Nivel de estudios: </label>
                                 <div class='col-md-8'>
                                    <select name='nivel' class='form-control'>
                                       <option value='".$row2['studies']."'>".$row2['studies']."</option>
                                       <div class='divider'></div>
                                       <option value='Preescolar'>Preescolar</option>
                                       <option value='Primaria'>Primaria</option>
                                       <option value='Secundaria'>Secundaria</option>
                                       <option value='Bachillerato'>Bachillerato</option>
                                       <option value='Licenciatura'>Licenciatura</option>
                                    </select> 
                                 </div>
                              </div>
                           </div>
                           <div class='col-sm-6'>
                              <div class='form-group'>
                                 <label class='col-md-4'>Último grado de estudios: </label>
                                 <div class='col-md-8'>
                                    <input type='text' name='grado' value='".$row2['level']."' class='form-control'>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class='row'>
                           <div class='col-sm-6'>
                              <div class='form-group'>
                                 <label class='col-md-4'>Cursos anteriores: </label>
                                 <div class='col-md-8'>
                                    <input type='text' name='cursoprevio' value='".$row2['prev_course']."' class='form-control'>
                                 </div>
                              </div>
                           </div>
                           <div class='col-sm-6'>
                              <div class='form-group'>
                                 <label class='col-md-4'>Fecha de inicio del curso: </label>
                                 <div class='col-md-8'>
                                    <input type='date' name='inicio' value='".$row2['date_init_s']."' class='form-control'>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>";
                  } #-- Fin del While->$row2.
               ?>
            </div> 
            <div class="row">
                    <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
                    <div class="col-xs-10 col-sm-8 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target=".bs-example-modal-confirm">Guardar</button>
                        <a href="javascript:history.go(-1)" class="btn btn-default btn-raised">Cancelar</a>
                        <div class="modal fade bs-example-modal-confirm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
                                    <h5 class="modal-title text-center" id="myModalLabel"><strong><i class="mdi-content-save"></i>  GUARDAR USUARIO</strong></h5>
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
                    <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
            </div>
         </form>
      </div>
      <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
   </div>
    <!-- fin de infromacion del alumno -->
</div>
<!-- FIN DE CONTENIDO -->