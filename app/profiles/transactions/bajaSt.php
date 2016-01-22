<?php
/**
 * Autor: Jose Luis Yama May.
 * Fecha: 15-10-2015.
 * Descrip: Establece el estado del alumno a baja para no eliminarlo por completo, cuando este deja de asistir al instituto
 * 			moviendolo de la lista de alumnos activos.
 */

include_once ('../../../includes/db_connect.php');
$today = date('Y-m-d');

$idSt = $_GET['val'];
$baja = "UPDATE student SET status='baja' WHERE id_student = ".$idSt.";";
$echo = mysqli_query($db_connect, $baja) or die (mysqli_error());

if ($echo) {
	$setFechaBaja = "UPDATE academic_info A SET A.date_bajaSt = '$today' WHERE  A.id_student='$idSt';";
	$updated = mysqli_query($db_connect, $setFechaBaja);
	echo "
	      <script>
	      window.location='javascript:history.go(-1)';
	      </script>
	      ";
} else {
	echo "
	      <script>
	      alert('Upss a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
	      window.location='javascript:history.go(-1)';
	      </script>
	      ";
}
mysqli_close($db_connect); //== Cierre de conexion con la BD
?>
