<div class="row navbar-example">
	<ul class="nav nav-tabs nav-justified nav-pills vw" role="tablist" id="myTab">
		<li role="presentation" class="active"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab"><h4 class="text-center">Escriba el nombre del alumno en el campo de busqueda y pulse "Ver evaluaciones".</h4></a></li>
	</ul>
	<div class="tab-content ">
		<div role="tabpanel" class="row tab-pane fade in active" id="personal">
			<div class="col-sm-12">
				<div class="well">
					<div class="table-responsive">
				      <table id="example" class="table table-bordered table-hover table-striped table-condensed">
				         <thead>
				            <tr class="info">
				               <th class="text-center">#</th>
				               <th class="text-center">Foto</th>
				               <th class="text-center">Alumno</th>
				               <th class="text-center">Grupo</th>
				               <th class="text-center">Opciones</th>
				            </tr>
				         </thead>
				         <tbody>
				            <?php
				            	include_once 'app/profiles/transactions/showStudentsAll.php'; 
				            	echo showStudentsAllEval();
				            ?>
				         </tbody>
				      </table>
				   </div>
				</div>
			</div>
		</div>
	</div>
</div>