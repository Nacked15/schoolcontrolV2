<?php  
	$id=$_GET['idst'];
	$query =
	"SELECT  S.id_student, S.name_s, S.surname1_s, S.surname2_s,
				A.id_classes, A.id_student, C.id_class, C.id_course,
				C.id_group, C.teacher, N.id_course, N.course, G.id_group,
				G.group, P.id_teacher, P.name_te, P.surname_te
				FROM student S, academic_info A, classes C, naatik_course N, groups_nc G, teacher P 
					WHERE S.id_student = '$id' AND
							S.id_student = A.id_student AND
							A.id_classes = C.id_class AND
							C.id_course  = N.id_course AND
							C.id_group   = G.id_group AND
							C.teacher 	 = P.id_teacher ;";
	$setQuery = mysqli_query($db_connect, $query) or die(mysqli_error());

	if ($setQuery) {
		while ($alumno = mysqli_fetch_array($setQuery)) {
			echo "<input id='keyStudent' type='hidden' class='hidden' disabled value=".$alumno['id_student'].">";
?>
<div class="well">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<a style="position:fixed;left:100px;" href="javascript:history.go(-1)" data-toggle='tooltip' data-placement='right' data-trigger='hover' title='Volver' class="btn btn-fab btn-info mdi-navigation-arrow-back"></a>
			<div class="well">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<table class="table" style="margin-bottom: 5px;">
							<thead>
							<tr>
								<th>
									<img src="img/bannernaatik.png" alt="banner" height="67px">
								</th>
								<th>
									<legend class="text-center">EVALUACI&Oacute;N</legend>
								</th>
							</tr>
							</thead>
						</table>
					</div>
					<div class="col-md-1"></div>
				</div>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
					<div id="confirmation"></div>
						<table class="table" style="margin-bottom: 5px;">
							<tbody>
								<tr>
									<td>Periodo: </td>
									<td>
										<select name="" id="pFrom" class="">
											<option value="Enero">Enero</option>
											<option value="Febrero">Febrero</option>
											<option value="Marzo">Marzo</option>
											<option value="Abril">Abril</option>
											<option value="Mayo">Mayo</option>
											<option value="Junio">Junio</option>
											<option value="Julio">Julio</option>
											<option value="Agosto">Agosto</option>
											<option value="Septiembre">Septiembre</option>
											<option value="Octubre">Octubre</option>
											<option value="Noviembre">Noviembre</option>
											<option value="Diciembre">Diciembre</option>
										</select>
									</td>
									<td> a </td>
									<td>
										<select name="" id="pTo" class="">
											<option value="Enero">Enero</option>
											<option value="Febrero">Febrero</option>
											<option value="Marzo">Marzo</option>
											<option value="Abril">Abril</option>
											<option value="Mayo">Mayo</option>
											<option value="Junio">Junio</option>
											<option value="Julio">Julio</option>
											<option value="Agosto">Agosto</option>
											<option value="Septiembre">Septiembre</option>
											<option value="Octubre">Octubre</option>
											<option value="Noviembre">Noviembre</option>
											<option value="Diciembre">Diciembre</option>
										</select>
									</td>
									<td>Del </td>
									<td>
										<select class="" name="periodo" id="period">
		                           <?php date("Y"); ?>
		                           <option value="<?php echo date('Y'); ?> A"><?php echo date("Y"); ?> A</option>
		                           <option value="<?php echo date('Y');?> B"><?php echo date("Y"); ?> B</option>
		                        </select>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table table-bordered" style="margin-bottom: 5px;">
							<tbody>
								<tr>
									<td>Maestro: <?= $alumno['name_te']." ".$alumno['surname_te'];?></td>
									<td>Alumno: <?= $alumno['name_s']." ".$alumno['surname1_s']." ".$alumno['surname2_s']; ?></td>
									<td>Grupo: <?= $alumno['course']." ".$alumno['group'];?></td>
								</tr>
							</tbody>
						</table>
						<table class="table table-bordered" style="margin-bottom: 5px;">
						<caption>Temas: </caption>
							<tbody>
								<tr>
									<td><textarea name="" id="tema" class="form-control" rows="2"></textarea></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-1"></div>
				</div>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						<table style="margin-bottom: 5px;" class="table table-bordered table-hover table-striped table-condensed">
							<thead>
								<tr>
									<th>Achievement (Logros)</th>
									<th>Excellent(Excelente)</th>
									<th>Good(Bueno)</th>
									<th>Average(Regular)</th>
									<th>Weak(Bajo)</th>
									<th class="hidden">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Reading (Lectura)</td>
									<td class="text-center"><span class="mdi-action-grade evalA" onclick="setReadingAchiev(1)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalA" onclick="setReadingAchiev(2)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalA" onclick="setReadingAchiev(3)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalA" onclick="setReadingAchiev(4)"></span></td>
									<td class="hidden"><input type="text" id="reading" class="form-control" value="0"></td>
								</tr>
								<tr>
									<td>Writing (Escritura)</td>
									<td class="text-center"><span class="mdi-action-grade evalB" onclick="setWritingAchiev(1)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalB" onclick="setWritingAchiev(2)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalB" onclick="setWritingAchiev(3)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalB" onclick="setWritingAchiev(4)"></span></td>
									<td class="hidden"><input type="text" id="writing" class="form-control" value="0"></td>
								</tr>
								<tr>
									<td>Speaking (Hablar)</td>
									<td class="text-center"><span class="mdi-action-grade evalC" onclick="setSpeakingAchiev(1)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalC" onclick="setSpeakingAchiev(2)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalC" onclick="setSpeakingAchiev(3)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalC" onclick="setSpeakingAchiev(4)"></span></td>
									<td class="hidden"><input type="text" id="speaking" class="form-control" value="0"></td>
								</tr>
								<tr>
									<td>Listening (Escuchar)</td>
									<td class="text-center"><span class="mdi-action-grade evalD" onclick="setListeningAchiev(1)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalD" onclick="setListeningAchiev(2)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalD" onclick="setListeningAchiev(3)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalD" onclick="setListeningAchiev(4)"></span></td>
									<td class="hidden"><input type="text" id="listening" class="form-control" value="0"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-1"></div>
				</div>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						<table style="margin-bottom: 5px;" class="table table-bordered table-hover table-striped table-condensed">
							<thead>
								<tr>
									<th>Effort (Esfuerzo)</th>
									<th>Excellent(Excelente)</th>
									<th>Good(Bueno)</th>
									<th>Average(Regular)</th>
									<th>Weak(Bajo)</th>
									<th class="hidden">Puntos</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Reading (Lectura)</td>
									<td class="text-center"><span class="mdi-action-grade eval" onclick="setReadingEff(1)"></span></td>
									<td class="text-center"><span class="mdi-action-grade eval" onclick="setReadingEff(2)"></span></td>
									<td class="text-center"><span class="mdi-action-grade eval" onclick="setReadingEff(3)"></span></td>
									<td class="text-center"><span class="mdi-action-grade eval" onclick="setReadingEff(4)"></span></td>
									<td class="hidden"><input type="text" id="read" class="form-control" value="0"></td>
								</tr>
								<tr>
									<td>Writing (Escritura)</td>
									<td class="text-center"><span class="mdi-action-grade evalone" onclick="setWritingEff(1)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalone" onclick="setWritingEff(2)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalone" onclick="setWritingEff(3)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalone" onclick="setWritingEff(4)"></span></td>
									<td class="hidden"><input type="text" id="write" class="form-control" value="0"></td>
								</tr>
								<tr>
									<td>Speaking (Hablar)</td>
									<td class="text-center"><span class="mdi-action-grade evaltwo" onclick="setSpeakingEff(1)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evaltwo" onclick="setSpeakingEff(2)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evaltwo" onclick="setSpeakingEff(3)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evaltwo" onclick="setSpeakingEff(4)"></span></td>
									<td class="hidden"><input type="text" id="speak" class="form-control" value="0"></td>
								</tr>
								<tr>
									<td>Listening (Escuchar)</td>
									<td class="text-center"><span class="mdi-action-grade evaltre" onclick="setListeningEff(1)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evaltre" onclick="setListeningEff(2)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evaltre" onclick="setListeningEff(3)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evaltre" onclick="setListeningEff(4)"></span></td>
									<td class="hidden"><input type="text" id="listen" class="form-control" value="0"></td>
								</tr>
								<tr>
									<td>Participation in class. (Participación en clase.)</td>
									<td class="text-center"><span class="mdi-action-grade evalfour" onclick="setAttitudeEff(1)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalfour" onclick="setAttitudeEff(2)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalfour" onclick="setAttitudeEff(3)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalfour" onclick="setAttitudeEff(4)"></span></td>
									<td class="hidden"><input type="text" id="attitude" class="form-control" value="0"></td>
								</tr>
								<tr>
									<td>Teamwork. (Trabaja bien en equipo.)</td>
									<td class="text-center"><span class="mdi-action-grade evalfive" onclick="setTeamworkEff(1)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalfive" onclick="setTeamworkEff(2)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalfive" onclick="setTeamworkEff(3)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalfive" onclick="setTeamworkEff(4)"></span></td>
									<td class="hidden"><input type="text" id="team" class="form-control" value="0"></td>
								</tr>
								<tr>
									<td>Dedica el tiempo necesario para su tarea de casa.</td>
									<td class="text-center"><span class="mdi-action-grade evalsix" onclick="setTimingEff(1)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalsix" onclick="setTimingEff(2)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalsix" onclick="setTimingEff(3)"></span></td>
									<td class="text-center"><span class="mdi-action-grade evalsix" onclick="setTimingEff(4)"></span></td>
									<td class="hidden"><input type="text" id="time" class="form-control" value="0"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-1"></div>
				</div>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						<table class="table table-bordered" style="margin-bottom: 5px;">
							<caption>Comentarios:</caption>
							<tbody>
								<tr>
									<td><textarea name="" id="comentario" class="form-control" rows="2"></textarea></td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<tbody>
								<tr>
									<td>
										<label>Nombre/Firma:</label>
										<div>
											<input type="text" id="nombreX" name="nombre" class="form-control" placeholder="Name Somebody">
										</div>
									</td>
									<td>
										<label>Fecha:</label>
										<div>
											<input type="date" id="fechaEval" name="fecha" class="form-control">
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-1"></div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<a id="saveEval" onclick="saveEvalPAA();" href="#" class="btn btn-sm btn-primary btn-raised">GUARDAR</a>
						<a href="javascript:history.go(-1);" class="btn btn-sm btn-info btn-raised">CANCELAR</a>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>

<?php  
		} //== Fin de while->$alumno
	} //== Fin de if->$setQuery
?>