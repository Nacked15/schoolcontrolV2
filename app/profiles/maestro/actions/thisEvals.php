<?php
include_once ('../../../../includes/db_connect.php');  
$id=$_GET['idst'];
$curso = $_GET['curso'];
$query =
	"SELECT  S.id_student, S.name_s, S.surname1_s, S.surname2_s,
				A.id_classes, A.id_student, C.id_class, C.id_course,
				C.id_group, C.teacher, N.id_course, N.course, G.id_group,
				G.group, P.id_teacher, P.name_te, P.surname_te, E.*
		FROM student S, academic_info A, evaluations E, classes C, naatik_course N, groups_nc G, teacher P 
			WHERE S.id_student = '$id' AND
				S.id_student = A.id_student AND
				A.id_info    = E.idinfo AND
				A.id_classes = C.id_class AND
				C.id_course  = N.id_course AND
				C.id_group   = G.id_group AND
				C.teacher 	 = P.id_teacher ;";
$setQuery = mysqli_query($db_connect, $query) or die(mysqli_error());
$filas = $setQuery->num_rows;

	if ($setQuery && $filas > 0) {
		while ($alumno = mysqli_fetch_array($setQuery)) {
			list($mesDe, $mesA) = explode("-", $alumno['period']);
				
?>
<?php if ($curso != 1) { ?>
<a href="javascript:history.go(-1)" class="btn btn-fab btn-info mdi-navigation-arrow-back"></a>
<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<a href="#" class="label label-primary" id="impresora">Imprimir <span class="glyphicon glyphicon-print"></span></a>
		<div class="well" id="hoja">
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
								<td> <?= $mesDe; ?> </td>
								<td> a </td>
								<td> <?= $mesA; ?> </td>
								<td>Del </td>
								<td> <?= $alumno['ciclo']; ?> </td>
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
								<td><?= $alumno['subjects']; ?></td>
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
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Reading (Lectura)</td>
								<td class="text-center"><?php if ($alumno['reading_achiev']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['reading_achiev']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['reading_achiev']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['reading_achiev']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
							</tr>
							<tr>
								<td>Writing (Escritura)</td>
								<td class="text-center"><?php if ($alumno['writing_achiev']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['writing_achiev']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['writing_achiev']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['writing_achiev']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
							</tr>
							<tr>
								<td>Speaking (Hablar)</td>
								<td class="text-center"><?php if ($alumno['speaking_achiev']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['speaking_achiev']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['speaking_achiev']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['speaking_achiev']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
							</tr>
							<tr>
								<td>Listening (Escuchar)</td>
								<td class="text-center"><?php if ($alumno['listenin_achiev']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['listenin_achiev']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['listenin_achiev']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['listenin_achiev']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
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
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Reading (Lectura)</td>
								<td class="text-center"><?php if ($alumno['reading_effort']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['reading_effort']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['reading_effort']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['reading_effort']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
							</tr>
							<tr>
								<td>Writing (Escritura)</td>
								<td class="text-center"><?php if ($alumno['writing_effort']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['writing_effort']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['writing_effort']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['writing_effort']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
							</tr>
							<tr>
								<td>Speaking (Hablar)</td>
								<td class="text-center"><?php if ($alumno['speaking_effort']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['speaking_effort']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['speaking_effort']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['speaking_effort']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
							</tr>
							<tr>
								<td>Listening (Escuchar)</td>
								<td class="text-center"><?php if ($alumno['listening_effort']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['listening_effort']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['listening_effort']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['listening_effort']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
							</tr>
							<tr>
								<td>Participation in class. (Participación en clase.)</td>
								<td class="text-center"><?php if ($alumno['participation_effort']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['participation_effort']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['participation_effort']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['participation_effort']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
							</tr>
							<tr>
								<td>Teamwork. (Trabaja bien en equipo.)</td>
								<td class="text-center"><?php if ($alumno['teamwork_effort']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['teamwork_effort']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['teamwork_effort']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['teamwork_effort']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
							</tr>
							<tr>
								<td>Dedica el tiempo necesario para su tarea de casa.</td>
								<td class="text-center"><?php if ($alumno['timing_effort']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['timing_effort']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['timing_effort']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								<td class="text-center"><?php if ($alumno['timing_effort']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
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
								<td><?= $alumno['annotations']; ?></td>
							</tr>
						</tbody>
					</table>
					<table class="table">
						<tbody>
							<tr>
								<td class="text-center">
									<label>Nombre/Firma del Tutor:</label>
									<input type="text" name="nombre"  class="form-control text-center">
								</td>
								<td class="text-center">
									<label>Nombre/Firma del Maestro:</label>
									<input type="text" name="nombre" value="<?= $alumno['name_te'].' '.$alumno['surname_te']; ?>" class="form-control text-center" placeholder="Name Somebody">
								</td>
								<td class=" text-center">
									<label>Fecha:</label>
									<input type="date" value="<?= $alumno['date_eval']; ?>" name="fecha" class="form-control text-center">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>
	</div>
	<div class="col-sm-1"></div>
</div>
<?php } elseif ($curso == 1) { ?>
<a href="javascript:history.go(-1)" class="btn btn-fab btn-raised btn-info mdi-navigation-arrow-back"></a>
<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<a href="#" class="label label-primary" id="impresora">Imprimir <span class="glyphicon glyphicon-print"></span></a>
			<div class="well" id="hoja">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<table class="table">
							<thead>
							<tr>
								<th>
									<img src="img/bannernaatik.png" alt="banner" height="70px">
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
						<div id="confirmationCE"></div>
						<table class="table" style="margin-bottom: 10px;">
							<tbody>
								<tr>
									<td>Periodo: </td>
									<td><?= $mesDe; ?></td>
									<td> a </td>
									<td><?= $mesA; ?></td>
									<td>Del </td>
									<td><?= $alumno['ciclo'];?></td>
								</tr>
							</tbody>
						</table>
						<table class="table table-bordered" style="margin-bottom: 10px;">
							<tbody>
								<tr>
									<td>Maestro: <?= $alumno['name_te']." ".$alumno['surname_te'];?></td>
									<td>Alumno: <?= $alumno['name_s']." ".$alumno['surname1_s']." ".$alumno['surname2_s']; ?></td>
									<td>Grupo: <?= $alumno['course']." ".$alumno['group'];?></td>
								</tr>
							</tbody>
						</table>
						<table class="table table-bordered">
							<caption>Temas: </caption>
							<tbody>
								<tr>
									<td><?= $alumno['subjects']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-1"></div>
				</div>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						<table class="table table-bordered table-hover table-striped table-condensed">
							<thead>
								<tr>
									<th>Achievement (Logros)</th>
									<th>Excellent(Excelente)</th>
									<th>Good(Bueno)</th>
									<th>Average(Regular)</th>
									<th>Weak(Bajo)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Speaking (Hablar)</td>
									<td class="text-center"><?php if ($alumno['speaking_achiev']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['speaking_achiev']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['speaking_achiev']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['speaking_achiev']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								</tr>
								<tr>
									<td>Listening (Escuchar)</td>
									<td class="text-center"><?php if ($alumno['listenin_achiev']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['listenin_achiev']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['listenin_achiev']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['listenin_achiev']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-1"></div>
				</div>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						<table class="table table-bordered table-hover table-striped table-condensed">
							<thead>
								<tr>
									<th>Effort (Esfuerzo)</th>
									<th>Excellent(Excelente)</th>
									<th>Good(Bueno)</th>
									<th>Average(Regular)</th>
									<th>Weak(Bajo)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Speaking (Hablar)</td>
									<td class="text-center"><?php if ($alumno['speaking_effort']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['speaking_effort']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['speaking_effort']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['speaking_effort']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								</tr>
								<tr>
									<td>Listening (Escuchar)</td>
									<td class="text-center"><?php if ($alumno['listening_effort']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['listening_effort']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['listening_effort']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['listening_effort']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								</tr>
								<tr>
									<td>Trabaja bien en equipo.</td>
									<td class="text-center"><?php if ($alumno['teamwork_effort']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['teamwork_effort']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['teamwork_effort']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['teamwork_effort']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								</tr>
								<tr>
									<td>Participa en las actividades<br> de la clase.</td>
									<td class="text-center"><?php if ($alumno['participation_effort']==1) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['participation_effort']==2) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['participation_effort']==3) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
									<td class="text-center"><?php if ($alumno['participation_effort']==4) {echo "<img src='images/ic_grade2.png' height='20px' width='20px'>";} ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-1"></div>
				</div>
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						<table class="table table-bordered">
							<caption>Comentarios:</caption>
							<tbody>
								<tr>
									<td><?= $alumno['annotations']; ?></td>
								</tr>
							</tbody>
						</table>
						<table class="table">
						<tbody>
							<tr>
								<td class="text-center">
									<label>Nombre/Firma del Tutor:</label>
									<input type="text" name="nombre"  class="form-control text-center">
								</td>
								<td class="text-center">
									<label>Nombre/Firma del Maestro:</label>
									<input type="text" name="nombre" value="<?= $alumno['name_te'].' '.$alumno['surname_te']; ?>" class="form-control text-center" placeholder="Name Somebody">
								</td>
								<td class=" text-center">
									<label>Fecha:</label>
									<input type="date" value="<?= $alumno['date_eval']; ?>" name="fecha" class="form-control text-center">
								</td>
							</tr>
						</tbody>
					</table>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div>
		</div>
		<div class="col-sm-1"></div>
</div>
<?php  
			} //== Fin de If-Else->$curso
		} //== Fin de while->$alumno
	} else {
		echo "<a href='javascript:history.go(-1)' class='btn btn-fab btn-info btn-raised mdi-navigation-arrow-back'></a>";
		echo "<h3 class='text-center text-primary'>Este alumno a&uacute;n no tiene evaluaciones.</h3>";
	}//== Fin de if->$setQuery
?>