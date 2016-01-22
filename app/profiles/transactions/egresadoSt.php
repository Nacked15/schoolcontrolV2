<?php
/**
 * Autor: Jose Luis Yama May.
 * Fecha: 15-10-2015.
 * Descrip: Establece el estado del alumno a egresado, con la finalidad de moverlo de la lista de 
 * alumnos activos, sin ponerlo a la lista de alumnos de baja o eliminar su registro. Sirve como historico.
 */
include_once ('../../../includes/db_connect.php');
$idSt = $_GET['val'];
$egresado = "UPDATE student SET status='egresado' WHERE id_student = ".$idSt.";";
$setEgresado = mysqli_query($db_connect, $egresado) or die (mysqli_error());

$hoy = date('Y-m-d');
if ($setEgresado) {
      $dateEgreso = "UPDATE academic_info A SET A.date_egreso='$hoy' WHERE A.id_student = ".$idSt.";";
      $setEgreso = mysqli_query($db_connect, $dateEgreso) or die (mysqli_error());
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
mysqli_close($db_connect); //== Cierre de conexion con la BD.

?>
