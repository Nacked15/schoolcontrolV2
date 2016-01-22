<?php include_once '../../../includes/db_connect.php'; ?>
<?php 
	#-- Asignación de variables.
	$IDstudent = $_GET['idStudent'];
	$IDscholar = $_GET['scholar'];

	//-- <-------------------------- ******************** ------------------------------->
	#-- Consulta para obtener los datos de beca del alumno.
	$query = "SELECT S.id_student, B.id_student, B.request, B.togrant FROM student S, scholar B WHERE S.id_student=".$IDstudent." AND S.id_student=B.id_student LIMIT 1;";
	$result = mysqli_query($db_connect, $query);

	while ($row = mysqli_fetch_array($result)) {
		if ($row['request'] == 'no') {
			$update = "UPDATE scholar SET request='si' WHERE scholar.id_student=".$IDstudent.";";
		}else{
			$update = "UPDATE scholar SET request='no' WHERE scholar.id_student=".$IDstudent.";";
		}
		$echo = mysqli_query($db_connect, $update);
	} #-- Fin del while.

	#-- Comprobar la transacción. 
	if ($echo) {
			echo "<script>
	         window.location='javascript:history.go(-1)';
	         </script>";
	} else {
		echo "<script>
	         alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
	         window.location='javascript:history.go(-1)';
	         </script>";
	}
	
	mysqli_close($db_connect); #-- Cerrar conexión con la BD.

?>