<?php 
	include_once ('../../includes/db_connect.php');
	$idSt = $_GET['id'];

	$datos = "SELECT S.id_student, S.name_s, S.surname1_s, S.surname2_s,
							A.id_student, A.reg_sep, R.id_sep, R.regis_num, R.date_incorporate, R.calification_sep, R.beca
							 FROM student S, academic_info A, sep R
					WHERE S.id_student = '$idSt' AND
							S.id_student = A.id_student AND
							A.reg_sep 	 = R.id_sep LIMIT 1;";
	$setDatos = mysqli_query($db_connect, $datos) or die(mysqli_error());

	if ($setDatos) {
	 	while ($getDatos = mysqli_fetch_array($setDatos)) {
	 		
	 	
?>

<h5 class="text-center text-info">Alumno: <?= strtoupper($getDatos['name_s'])." ".strtoupper($getDatos['surname1_s'])." ".strtoupper($getDatos['surname2_s']);  ?></h5>
<div class="form-group">
	<label class="col-sm-4 col-md-3">N&uacute;mero de Registro:</label>
	<div class="col-sm-8 col-md-9">
		<input type="text" id="numRegis" name="numReg" class="form-control" value="<?= $getDatos['regis_num']; ?>" >
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-md-3">Fecha de Registro:</label>
	<div class="col-sm-8 col-md-9">
		<input type="text" id="fechRegis" name="fechaReg" class="form-control" value="<?= $getDatos['date_incorporate']; ?>" >
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-md-3">Calificaci&oacute;n:</label>
	<div class="col-sm-8 col-md-9">
		<input type="text" id="calSep" name="calificacion" class="form-control" value="<?= $getDatos['calification_sep']; ?>" >
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 col-md-3">% de Beca:</label>
	<div class="col-sm-8 col-md-9">
		<input type="text" id="infoBeca" name="beca" class="form-control" value="<?= $getDatos['beca']; ?>" >
	</div>
</div>


<?php  
		} //== Fin de while -> $getDatos
	} //== Fin de if -> $setDatos

	mysqli_close($db_connect); //== Cierre de conexión con db
?>