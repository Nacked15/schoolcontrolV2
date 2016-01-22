<?php
/**
 * Autor: Jose Luis Yama May
 * Fecha: 14-10-2015.
 * Descrip: Establece el estado del alumno a alta, cuando este se encuentre en la lista
 * 			de alumnos dados de baja o egresados.
 */
include_once ('../../../includes/db_connect.php');
$idSt = $_GET['val'];
$alta = "UPDATE student SET status='activo' WHERE id_student = ".$idSt.";";
$echo = mysqli_query($db_connect, $alta) or die (mysqli_error());

if ($echo) {
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
mysqli_close($db_connect); //== Cierre de la conexion con la BD
?>
