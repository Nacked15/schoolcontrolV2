<?php 
	/**
		* AUTHOR: Br. Jose Luis Yama May.
		* Procesa la informacion proveniente de la vista de alumnos becados
		* con la finalidad de reasignar becas. Solo se actualiza el alumno 
		* en la tabla becados y la fecha de asignacion de la beca.
	 */
	include_once ('../../../includes/db_connect.php');
	$oldStudent = $_POST['student'];
	$newStudent = $_POST['becarionuevo'];
	$theSponsor = $_POST['sponsor'];
	$newdate = $_POST['fecha'];

	echo "Antiguo alumno: $oldStudent <br>";
	echo "Nuevo Alumno: $newStudent <br>";
	echo "El padrino: $theSponsor";

	$query = "SELECT id_grant, id_student FROM scholar WHERE id_student = '$newStudent' LIMIT 1;";
	$get = mysqli_query($db_connect, $query) or die(mysqli_error());
	while ($row = mysqli_fetch_array($get)) {
		$thisNew = $row['id_grant'];
	}

	$update = "UPDATE sponsor SET id_scholar = '$thisNew' 
						WHERE id_sponsor = '$theSponsor';";
	$made = mysqli_query($db_connect, $update) or die(mysqli_error());

	if ($made) {
		$updateData = "UPDATE scholar SET togrant = 'si', date_scholar = '$newdate' 
								WHERE id_grant = '$thisNew' AND id_student = '$newStudent';";
		$echo = mysqli_query($db_connect, $updateData) or die(mysqli_error());

		if ($echo) {
			$updateData = "UPDATE scholar SET togrant = 'no' WHERE id_student = '$oldStudent';";
			$echo = mysqli_query($db_connect, $updateData) or die(mysqli_error());

	 	// echo "
	   //     <script>
	   //     	window.location='javascript:history.go(-1)';
	   //     </script>
	   //     ";
		}
	}

?>

