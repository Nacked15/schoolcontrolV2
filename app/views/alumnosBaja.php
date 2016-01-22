<ol class="breadcrumb hidden-xs hidden-sm visible-md visible-lg">
  <li><a href="?menu_ad=principal">Principal</a></li>
  <li><a href="?menu_ad=alumnos">Lista de Alumnos</a></li>
  <li class="active">Alumnos de Baja</li>
</ol>

<div class="well">
   <div class="navbar-example">
   <div class="row">
      <div class="col-sm-12">
         <ul class="nav nav-tabs nav-justified vx" role="tablist" id="myTab">
            <li role="presentation"><a href="#alumnosBaja" aria-controls="alumnosBaja" role="tab" data-toggle="tab">ALUMNOS DE BAJA</a></li>
            <li role="presentation"><a href="#exAlumnos" aria-controls="exAlumnos" role="tab" data-toggle="tab">EX ALUMNOS</a></li>
         </ul>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12">
      <div class="well">
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane fade in active" id="alumnosBaja">
                  <h4 class="bg-primary text-center">Listado de Alumnos de Baja</h4>
        					<section id="alumnosdeBaja"> 
        						<aside id="tabla">
        							<div class="table-responsive">
        								<table id="example" class="table table-bordered table-hover table-striped table-condensed">
        									<thead>
        										<tr class="info">
        											<th>#</th>
        											<th>Foto</th>
        											<th>Nombre</th>
        											<th>Ape. Paterno</th>
        											<th>Ape. Materno</th>
        											<th>Edad</th>
        											<th>Curso</th>
        											<th>Grupo</th>
        											<th>Tutor</th>
                              <th>Fecha de Baja</th>
        											<th>Opciones</th>
        										</tr>
        									</thead>
        									<tbody id="listaAlumnosBaja">

        									</tbody>
        								</table>
        							</div>
        						</aside>
        					</section>
               </div>
               <div role="tabpanel" class="tab-pane fade" id="exAlumnos">
                  <h4 class="bg-primary text-center">Listado de Ex Alumnos</h4>
                  <section id="xAlumnos">
                     <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover table-striped table-condensed">
                           <thead>
                              <tr class="info">
                                 <th>#</th>
                                 <th>Foto</th>
                                 <th>Nombre</th>
                                 <th nowrap="true">Ape. Paterno</th>
                                 <th nowrap="true">Ape. Materno</th>
                                 <th nowrap="true">Ultimo Curso</th>
                                 <th nowrap="true">Tutor</th>
                                 <th nowrap="true">Fecha de Egreso</th>
                                 <th>Opciones</th>
                              </tr>
                           </thead>
                           <tbody id="listaExAlumnos">

                           </tbody>
                        </table>
                     </div>
                  </section>
               </div>
            </div>
      </div>
      </div>
   </div>
   </div> 
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
        </div>
    </div>
</div>
<!-- FIN DEL MODAL -->
