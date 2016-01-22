<?php
	include('../../../includes/db_connect.php');
	$controlNum = $_POST['numcontrol'];
	$idSt 		= $_POST['idStnum']; 

	$getStudent = "SELECT id_student, ncontrol FROM student WHERE ncontrol='$controlNum';";
	$setStudent = mysqli_query($db_connect, $getStudent);

	if ($setStudent->num_rows==1) {
		echo "<h2>Error: Este numero de control ya ha sido asignado a otro alumno, vuelva a la p&aacute;gina anterior y escriba un nuevo n&uacute;mero de control para este alumno.</h2>";
		echo "<a href='javascript:history.go(-1)'>Volver</a>";
	} else {
		$updateControl = "UPDATE student SET ncontrol='$controlNum' WHERE id_student = '$idSt';";
		$updated = mysqli_query($db_connect, $updateControl);

		echo "
			window.location='javascript:history.go(-1)';
		";
	}
	
?>