<?php include_once '../../../includes/db_connect.php'; ?>
<?php 
	#-- Asignación de variables.
	$idTeacher = $_GET['idTeacher'];

	//-- <-------------------------- ******************** ------------------------------->
	#-- Actualizo la tabla de cursos que tengan el id del profesor a eliminar.
	#-- Elimino al Profesor.
	$delete = "DELETE FROM teacher WHERE teacher.id_teacher=".$idTeacher.";";
	$exe = mysqli_query($db_connect, $delete);

	#-- Comprobar la transacción. 
	if ($exe) {
			$update = "UPDATE classes SET teacher=1 WHERE classes.teacher=".$idTeacher.";";
			$echo = mysqli_query($db_connect, $update);
			if ($echo) {
				echo "<script>
	         window.location='javascript:history.go(-1)';
	         </script>";
			}
			
	} else {
		echo "<script>
	         alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
	         window.location='javascript:history.go(-1)';
	         </script>";
	}
	
	mysqli_close($db_connect); #-- Cerrar conexión con la BD.

?>
