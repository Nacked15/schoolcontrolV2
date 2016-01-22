<?php  
/**
 * Autor: Jose Luis Yama May
 * Fecha: 25-Nov-15
 * Descrip: Este script se encarga de actualizar ciertos valores que al inicio de cada ciclo
 * escolar deben de reiniciarse en sus valores por defecto hasta ser nuevamente actualizados
 * por el usuario, dependiendo de la necesidad.
 */

include_once '../../../includes/db_connect.php';
$i=0;
$hoy = date('Y-m-d');
// echo $hoy;

$clases = 
"SELECT * FROM classes C, schedule H 
			WHERE C.status_class = 'activo' AND
					C.id_schedule = H.id_schedule AND 
					H.date_end = '$hoy' ;";
$getClases = mysqli_query($db_connect, $clases) or die(mysqli_error());

while ($clase = mysqli_fetch_array($getClases)) {
	updateCourseStat($clase['id_class']);
	UpdateStudentData($clase['id_class']);
	$i++;
}

	echo "<div class='col-sm-10 alert alert-success alert-dismissible' role='alert'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
		</button><strong>Hoy ".$hoy." concluye ".$i." cursos, consulte calendario de cursos para mas información.</strong></div>";


function updateCourseStat($clase)
{
	include '../../../includes/db_connect.php';
	$setDown = "UPDATE classes SET status_class = 'finalizado' WHERE id_class = ".$clase.";";
   $down = mysqli_query($db_connect, $setDown);

}

function UpdateStudentData($clase)
{
	include '../../../includes/db_connect.php';

	$alumnos = "SELECT * FROM student S, academic_info A, classes C
			WHERE C.id_class = '$clase' AND
					A.id_classes = C.id_class AND
					A.id_student = S.id_student ;";
	$getAlumnos = mysqli_query($db_connect, $alumnos) or die(mysqli_error());

	while ($alumno = mysqli_fetch_array($getAlumnos)) {
		$setDown = "UPDATE info_extrast SET convenio = 0 WHERE id_st = ".$alumno['id_student'].";";
   	$down = mysqli_query($db_connect, $setDown);
	}
	
}

?>