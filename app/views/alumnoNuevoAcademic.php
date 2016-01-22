<!-- FORMULARIO DE INFORMACION ACADEMICA DEL ALUMNO -->
<div class="row">
   <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
   <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
      <div class="row">
         <ul class="nav nav-justified vx">
            <li><a class="sts" href="?menu_ad=alumnoNuevo&nuevo=infoTutor">DATOS DEL TUTOR</a></li>
            <li><a class="sts" href="?menu_ad=alumnoNuevo&nuevo=infoGeneral">DATOS GENERALES</a></li>
            <li class="state-on"><a class="sts" href="?menu_ad=alumnoNuevo&nuevo=infoAcademica">INFO. ACADÉMICA</a></li>
         </ul>
      </div>
   </div>
   <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
</div>
<div class="row">
   <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
   <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 well">
      <section id="educacion">   
         <form action="app/profiles/transactions/addAcademicData.php" method="post" class="form-horizontal">   
            <legend><h4 class="bg-info">ANTECEDENTES: </h4></legend>
            <div class="caja">
              	<div class="row">
                  <div class="col-sm-5">
         				<div class="form-group">
         					<label class="col-sm-4">Ocupación: </label>
         					<div class="col-sm-8">
         						<select class="form-control" name="ocupacion">
         						  <option class="student" value="Estudiante">Estudio</option>
         						  <option class="worker" value="Trabajador">Trabajo</option>
                             <option class="worker" value="Ninguno">Ninguno</option>
         						</select>
         					</div>
         				</div>
                  </div>
                  <div class="col-sm-7">
         				<div id="job" class="form-group">
         					<label class="col-sm-3">Donde estudia/trabaja: </label>
         					<div class="col-sm-9">
         						<input type="text" class="form-control" id="lugar" name="lugar" placeholder="Estudio/Trabajo en">
         					</div>
         				</div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-5">          
                     <div class="form-group">
                        <label class="col-sm-4">Nivel de estudios: </label>
                        <div class="col-sm-8">
                           <select class="form-control" name="nivel" onchange="showGrade(this.value)">
                              <option value="">Seleccione...</option>
                              <option value="Preescolar">Preescolar</option>
                              <option value="Primaria">Primaria</option>
                              <option value="Secundaria">Secundaria</option>
                              <option value="Bachillerato">Bachillerato</option>
                              <option value="Licenciatura">Licenciatura</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-7" id="grados">
                     <div class="form-group grade">
                        <label class="col-sm-3">Grado: </label>
                        <div class="col-sm-9">
                           <select class="form-control" name="grado">
                              <option value="">Seleccione...</option>
                              <option id="a" value="Primer Año">Primer Año.</option>
                              <option id="b" value="Segundo Año">Segundo Año.</option>
                              <option id="c" value="Tercer Año">Tercer Año.</option>
                              <option id="d" value="Cuarto Año">Cuarto Año.</option>
                              <option id="e" value="Quinto Año">Quinto Año.</option>
                              <option id="f" value="Sexto Año">Sexto Año.</option>
                              <option id="g" value="Concluido">Concluido.</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="form-group">
                        <label class="col-sm-4">¿Ha tomado algún cusro de inglés anteriormente?: </label>
                        <div class="col-sm-5">
                           <div class="radio radio-info">
                           <label> No
                              <input type="radio" id="optionNo" checked="checked" value="no" name="optionRadio" onclick="ocultar()">
                              <span class="circle"></span>
                              <span class="check"></span>                                        
                           </label>
                           <label></label>
                           <label> SI
                              <input type="radio" id="optionSi" value="si" name="optionRadio" onclick="ver()">
                              <span class="circle"></span>
                              <span class="check"></span>                                       
                           </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="form-group" id="describa">
                        <label class="col-sm-2">Describa: </label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="cursoanterior" name="cursoanterior" placeholder="Descripcion de cursos anteriores">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <legend><h4 class="bg-info">CURSO A TOMAR:</h4></legend> 
            <div class="caja">
               <div class="row">
                  <div class="col-sm-5">
                     <div class="form-group">
                        <label class="col-sm-4">Estudios en: </label>
                        <div class="col-sm-8">
                           <select class="form-control" name="curso" onchange="grup(this.value);">
                              <option value="">Seleccione...</option>
                              <option value="1-1">English Club</option>
                              <option value="2-2">Primaria</option>
                              <option value="3-3">Adolescentes</option>
                              <option value="4-4">Adultos</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-7">
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Nivel: </label>
                        <div class="col-sm-9">
                           <select class="form-control" id="thisDataGroup" name="grupo" onchange="datosCurso(this.value);">
                                    
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div id="datosCurso">
                     <!-- Muestra con AJAX info del Curso -->
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-sm-5">
                     <div class="form-group">
                        <label class="col-sm-4">N&uacute;m. de Control: </label>
                        <div class="date col-sm-8">
                           <input type="text" class="form-control" name="numcontrol">
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-7">
                     <div class="form-group">
                        <label class="col-sm-4 control-label">Cuando desea iniciar: </label>
                        <div class="date col-sm-8">
                           <input type="text" class="form-control datepicker" name="fecha_init">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
               <div class="form-group">
                  <label class="col-sm-4">¿Entregó acta de nacimiento?: </label>
                  <div class="col-sm-5">
                     <div class="radio radio-info">
                     <label> No
                        <input type="radio" checked="checked" value="0" name="acta">
                        <span class="circle"></span>
                        <span class="check"></span>                                        
                     </label>
                     <label></label>
                     <label> SI
                        <input type="radio" value="1" name="acta">
                        <span class="circle"></span>
                        <span class="check"></span>                                       
                     </label>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-4">¿Requiere facturaci&oacute;n?: </label>
                  <div class="col-sm-5">
                     <div class="radio radio-info">
                     <label> No
                        <input type="radio" checked="checked" value="0" name="facturacion">
                        <span class="circle"></span>
                        <span class="check"></span>                                        
                     </label>
                     <label></label>
                     <label> SI
                        <input type="radio" value="1" name="facturacion">
                        <span class="circle"></span>
                        <span class="check"></span>                                       
                     </label>
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
                                 <h5 class="modal-title text-center" id="myModalLabel"><strong><i class="mdi-content-save"></i>  GUARDAR INFO ACADEMICA</strong></h5>
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

