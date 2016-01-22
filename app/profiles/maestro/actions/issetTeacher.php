<?php 
function teacherSet()
{
	include ('includes/db_connect.php');
	$maestro = $_SESSION['username'];
	$password = $_SESSION['password']; 

	$seleccion = "SELECT * FROM teacher T, user U 
							WHERE T.iduser = U.id_user AND
									U.category = 'maestro' AND
									U.username = '$maestro' AND
									U.password = '$password' ;";
	$do = mysqli_query($db_connect, $seleccion) or die(mysqli_error());
	if ($do) {
	  	while ($pointer = mysqli_fetch_array($do)) {
	  		$idMaestro = $pointer['id_teacher'];
	  	}
	}
	return $idMaestro;
}
?>