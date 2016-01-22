<div class="well">
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<ul class="nav nav-tabs nav-justified vx" role="tablist" id="myTab">
            <li role="presentation"><a href="#course" aria-controls="maestro" role="tab" data-toggle="tab">MIS CURSOS</a></li>
         </ul>
		</div>
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
	</div>
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div class="well">
				<div class="tab-content">
               <div role="tabpanel" class="row tab-pane fade in active" id="curso">
               <div class="col-sm-1"></div>
               <div class="col-sm-10">
                  <h4 class="bg-primary text-center"></h4>
                  <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover table-striped table-condensed">
                           <thead>
                              <tr class="info">
                                 <th>#</th>
                                 <th>Nombre</th>
                                 <th>Grupo</th>
                                 <th>Fecha de Inicio</th>
                                 <th>Dias</th>
                                 <th>Horario</th>
                                 <th>Teacher</th>
                              </tr>
                           </thead>
                           <tbody> 
                              <?php include 'app/profiles/maestro/actions/myCourses.php'; ?>
                           </tbody>
                        </table>
                  </div>
               </div>
               <div class="col-sm-1"></div>
            </div>
				</div>
			</div>
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>
</div>