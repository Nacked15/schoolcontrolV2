<?php  
include_once '../../../includes/db_connect.php';

$idSt = $_POST['idSt'];

$query = 
	"SELECT * FROM academic_info A, sep R
		WHERE A.id_student = '$idSt' AND
				A.reg_sep = R.id_sep LIMIT 1;";
	$getQuery = mysqli_query($db_connect, $query) or die(mysqli_error());
	if ($getQuery) {
		while ($datos = mysqli_fetch_array($getQuery)) {
			$idSEP = $datos['id_sep'];
		}

		$update = "UPDATE sep SET issep='no'
							WHERE id_sep = '$idSEP'  ;";
		$setUpdate = mysqli_query($db_connect, $update) or die(mysqli_error());
	}
?>