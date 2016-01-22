<?php include_once '../../../includes/db_connect.php'; ?>
<?php 
	#-- Asignación de variables.
	$sponsor = $_GET['idSponsor'];

	if (isset($sponsor)) {
		$sponsor = addslashes($sponsor);

		//-- <-------------------------- ******************** ------------------------------->
		$delete = "DELETE FROM sponsor WHERE sponsor.id_sponsor=".$sponsor.";";
		$exe = mysqli_query($db_connect, $delete);

		#-- Comprobar la transacción. 
		if ($exe) {
				echo "<script>
		         window.location='javascript:history.go(-1)';
		         </script>";
		} else {
			echo "<script>
		         alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
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
