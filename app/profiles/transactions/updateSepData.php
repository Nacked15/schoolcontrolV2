<?php  
	include_once '../../../includes/db_connect.php';

	$idSt 		  = $_POST['id'];
	$nRegistro 	  = $_POST['registro'];
	$fRegistro 	  = $_POST['fechaR'];
	$calificacion = $_POST['calific'];
	$beca			  = $_POST['beca'];

	$query = 
	"SELECT * FROM academic_info A, sep R
		WHERE A.id_student = '$idSt' AND
				A.reg_sep = R.id_sep LIMIT 1;";
	$getQuery = mysqli_query($db_connect, $query) or die(mysqli_error());

	if ($getQuery) {
		while ($datos = mysqli_fetch_array($getQuery)) {
			$idSEP = $datos['id_sep'];
		}

		$update = "UPDATE sep SET regis_num        ='$nRegistro',
										  date_incorporate = '$fRegistro',
										  calification_sep = '$calificacion',
										  beca 				 = '$beca'
							WHERE id_sep = '$idSEP';";
		$setUpdate = mysqli_query($db_connect, $update) or die(mysqli_error());
	}
?>