<?php include_once '../../../includes/db_connect.php'; ?>
<?php
	#-- Asignacion de variables 
	$sponsorType 	= $_POST['tipo'];
	$sponsorName 	= $_POST['name'];
	$sponsorSurname = $_POST['surname'];
	$sponsorEmail 	= $_POST['email'];
	$sponsorDescription = $_POST['descripcion'];
	$studentId 		= $_POST['alumno'];

	$q = "SELECT * FROM scholar B WHERE B.id_student = '$studentId' LIMIT 1;";
	$get = mysqli_query($db_connect, $q) or die(mysqli_error());
	while ($row = mysqli_fetch_array($get)) {
		$infoScholar = $row['id_grant']; 
	}

	//-- <-------------------------- ******************** ------------------------------->
	//-- inserción de datos en la tabla Padrinos
	$insertData = "INSERT INTO sponsor VALUES(null, '$sponsorType', '$sponsorName', '$sponsorSurname', '$sponsorEmail', '$sponsorDescription', '$infoScholar','activo');";
	$insert = mysqli_query($db_connect, $insertData);

	//-- <-------------------------- ******************** ------------------------------->
	#-- Comprobación de éxito de la transacción 
	if ($insert) {
			# Si es true, actualizar datos en tabla becario.
			$update = "UPDATE scholar SET togrant='si' WHERE scholar.id_student=".$studentId.";";
			$echo = mysqli_query($db_connect, $update);
			if ($echo) {
				echo "
		         <script>
		         window.location='../../../main.php?menu_ad=padrinos';
		         </script>
		         ";
			}
	} else {
		echo "
	         <script>
	         alert('ERROR inesperado... Intentelo de nuevo por favor!!! :(');
	         window.location='javascript:history.go(-1)';
	         </script>
	         ";
	}
	
	mysqli_close($db_connect); #-- Cerrar conexión con Base de Datos.

?>