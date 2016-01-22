<?php include_once '../../../includes/db_connect.php'; ?>
<?php 
	#-- Asignación de variables.
	list($idTeacher, $idClass)  = explode("-",$_POST['maestro']);

	#-- <-------------------------- ******************** ------------------------------->
	#-- Consulta para obtener los datos de beca del alumno.
	if (isset($idClass) && isset($idTeacher)) {
		$updatesch = "UPDATE classes
						SET teacher='".$idTeacher."' 
						WHERE id_class=".$idClass.";";
			$echosch = mysqli_query($db_connect, $updatesch);

		#-- Comprobar la transacción. 
		if ($echosch) {
			
				echo "<script>
		         window.location='javascript:history.go(-1)';
		         </script>";
		} else {
			echo "<script>
		         alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
		         window.location='javascript:history.go(-1)';
		         </script>";
		}
	} #-- Fin de if-isset
	
	mysqli_close($db_connect); #-- Cerrar conexión con la BD.

?>
