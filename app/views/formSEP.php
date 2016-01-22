<div class="row navbar-example">
	<ul class="nav nav-tabs nav-justified nav-pills vw" role="tablist" id="myTab">
		<li role="presentation" class="active"><a href="#listaSep" aria-controls="listaSep" role="tab" data-toggle="tab"><h4 class="text-center">Seleccione alguno de los grupos, verifique los datos del curso, complete los datos del formulario y pulse el botón "Generar Registro"</h4></a></li>
	</ul>
	<div class="tab-content ">
		<div role="tabpanel" class="row tab-pane fade in active" id="listaSep">
			<div class="col-sm-12">
				<div class="well">
					<div class="row">
						<div class="col-xs-0 col-sm-1 col-md-1"></div>
						<div class="col-xs-12 col-sm-10 col-md-10">
							<a style="position:fixed;left:100px;" href="javascript:history.go(-1)" data-toggle='tooltip' data-placement='right' data-trigger='hover' title='Volver' class="btn btn-fab btn-info mdi-navigation-arrow-back"></a>
							<form action="?menu_ad=registrosep" method="POST">
								<div class="form-group">
									<label>Grupo: </label>
									<div>
										<select name="grupo" id="gruposep" onchange="getSepList();">
											<option value="">Seleccione un grupo...</option>
											<?php  
												$getClasses = "SELECT * FROM classes C, naatik_course N, groups_nc G 
																	WHERE C.id_course = N.id_course AND
																			C.id_group = G.id_group AND
																			N.id_course > 2;";
												$setClasses = mysqli_query($db_connect, $getClasses) or die(mysqli_error());
												while ($clase = mysqli_fetch_array($setClasses)) {
											?>
											<option value="<?= $clase['id_class'];?>"><?= $clase['course']." ".$clase['group'];  ?></option>
											<?php } ?>
										</select>
									</div>
									<div></div>
								</div>
								<div id="listaAlumnosSep"></div>
								<input type="submit" class="btn btn-sm btn-primary" value="Generar Registro">
							</form>
						</div>
						<div class="col-xs-0 col-sm-1 col-md-1"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
