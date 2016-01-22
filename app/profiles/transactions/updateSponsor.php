<?php include_once '../../../includes/db_connect.php'; ?>
<?php 
	#-- Asignación de variables.
	$idSp      = $_POST['idsp'];
	$typeSp	  = $_POST['typesp'];
	$nameSp    = $_POST['namesp'];
	$surnameSp = $_POST['surnamesp'];
	$emailSp   = $_POST['emailsp'];
	$descrip	  = $_POST['descriptionsp'];
	$status	  = $_POST['statsp'];


	//-- <-------------------------- ******************** ------------------------------->
	#-- Consulta para obtener los datos de beca del alumno.
	if (isset($idSp) && isset($nameSp) && isset($surnameSp)) {
	
		$update = "UPDATE sponsor 
						SET type_sp='$typeSp', name_sp='$nameSp', surname_sp='$surnameSp', email='$emailSp', description_sp='$descrip', status_sp='$status'
							WHERE sponsor.id_sponsor=".$idSp.";";
		$echo = mysqli_query($db_connect, $update);

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
	} #-- Fin de if-isset
	
	mysqli_close($db_connect); #-- Cerrar conexión con la BD.

?>
