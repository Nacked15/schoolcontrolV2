<?php include_once '../../../includes/db_connect.php'; ?>
<?php
	
	//-- Asignacion de variables obtenidas por medio de la url. 
	$IDstudent  = $_GET['valX'];
	$IDtutor 	= $_GET['valY'];

	//-- <-------------------------- *************************** ------------------------------->
	//-- Consulta Preparada sobra la tabla alumno del campo id_tutor
	$query = "SELECT * FROM student WHERE id_tutor=".$IDtutor.";";
	$result = mysqli_query($db_connect, $query) or die(mysqli_error());
	$counter = $result->num_rows;

	$IDSep = "SELECT * FROM academic_info A, sep R WHERE A.id_student='$IDstudent' AND A.reg_sep = R.id_sep LIMIT 1;";
	$getIdSep = mysqli_query($db_connect, $IDSep) or die(mysqli_error());
	$regSep = '';
	$idInfo = '';
	while ($sep = mysqli_fetch_array($getIdSep)) {
		$regSep = $sep['id_sep'];
		$idInfo = $sep['id_info'];
	}

	//-- <-------------------------- *************************** ------------------------------->
	//-- Comprobacion del numero de filas resultantes de la consulta anterior.
	//-- Si el tutor unicamente tiene un alumno inscrito se elimina todo.
	if ($counter == 1) {
		$deleteS = "DELETE FROM student WHERE student.id_student=".$IDstudent.";";
		$exeS = mysqli_query($db_connect, $deleteS) or die(mysql_error());
		if ($counter < 2) {
			$deleteT = "DELETE FROM tutor WHERE tutor.id_tutor=".$IDtutor.";";
			$exeT = mysqli_query($db_connect, $deleteT) or die(mysql_error());
			$deleteM = "DELETE FROM croquis WHERE croquis.idtutor=".$IDtutor.";";
			$exeM = mysqli_query($db_connect, $deleteM) or die(mysql_error());
		}
		$deleteA = "DELETE FROM academic_info WHERE academic_info.id_student=".$IDstudent.";";
		$exeA = mysqli_query($db_connect, $deleteA) or die(mysql_error());
		$deleteB = "DELETE FROM scholar WHERE scholar.id_student=".$IDstudent.";";
		$exeB = mysqli_query($db_connect, $deleteB) or die(mysql_error());
		$deleteR = "DELETE FROM sep WHERE sep.id_sep='".$regSep."';";
		$exeR = mysqli_query($db_connect, $deleteR) or die(mysql_error());

		$deleteIE = "DELETE FROM info_extrast WHERE info_extrast.id_st='$IDstudent';";
		$exeIE = mysqli_query($db_connect, $deleteIE) or die(mysql_error());
		$deleteEval = "DELETE FROM evaluations WHERE evaluations.idinfo='$idInfo';";
		$exeEval = mysqli_query($db_connect, $deleteEval) or die(mysql_error());


			if ($exeS && $exeT && $exeA && $exeB && $exeM && $exeR && $exeIE &&$exeEval) {
				echo "
		         <script>
		         window.location='javascript:history.go(-1)';
		         </script>
		         ";
			}else {
					echo " <script>
				         alert(':( Ha ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!!');
				         window.location='javascript:history.go(-1)';
				         </script>";
					}
	} elseif ($counter > 1) {
		$delete = "DELETE FROM student WHERE id_student=".$IDstudent.";";
		$exe = mysqli_query($db_connect, $delete) or die(mysqli_error());
		$deleteA = "DELETE FROM academic_info WHERE academic_info.id_student=".$IDstudent.";";
		$exeA = mysqli_query($db_connect, $deleteA) or die(mysqli_error());
		$deleteB = "DELETE FROM scholar WHERE scholar.id_student=".$IDstudent.";";
		$exeB = mysqli_query($db_connect, $deleteB) or die(mysqli_error());
		$deleteR = "DELETE FROM sep WHERE sep.id_sep='".$regSep."';";
		$exeR = mysqli_query($db_connect, $deleteR) or die(mysqli_error());

		$deleteIE = "DELETE FROM info_extrast WHERE info_extrast.id_st='$IDstudent';";
		$exeIE = mysqli_query($db_connect, $deleteIE) or die(mysql_error());
		$deleteEval = "DELETE FROM evaluations WHERE evaluations.idinfo='$idInfo';";
		$exeEval = mysqli_query($db_connect, $deleteEval) or die(mysql_error());
			if ($exe && $exeA && $exeB && $exeR && $exeIE && $exeEval) {
				echo "<script>
		         window.location='javascript:history.go(-1)';
		         </script>
		         ";
			}else {
					echo "<script>
			         alert(':( Ha ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!!');
			         window.location='javascript:history.go(-1)';
			         </script>";
					}
	}
	
	mysqli_close($db_connect); #-- Cerrar conexión con BD

?>