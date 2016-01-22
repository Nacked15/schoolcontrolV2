<?php 
	#-- Inclusión de la función para conectar con la BD.
	include_once '../../includes/db_connect.php';

	list($idTeacher,$idClass) = explode("-",$_GET['it']);

	//-- <-------------------------- ***************************** ------------------------------->
	//-- Consulta a la BD para obtener la lista de los maestros registrados.
	$query = "SELECT * FROM teacher;";
	$show = mysqli_query($db_connect, $query) or die (mysqli_error());

	//-- <-------------------------- ***************************** ------------------------------->
	//-- Comprobación e impresion de los resultados de la consulta.
	if($show) {
		while ($row = mysqli_fetch_array($show)) {
			echo "<option value='".$row['id_teacher']."-".$idClass."'>".$row['name_te']." ".$row['surname_te']."</option>";
		}
	}

	mysqli_close($db_connect); #-- Cierre de la conexión con la BD.
?>