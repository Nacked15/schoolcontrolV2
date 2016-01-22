<?php include_once '../../../includes/db_connect.php'; ?>
<?php 
	#-- Asignación de variables.
	$idUsr = $_GET['id'];

	//-- <-------------------------- ******************** ------------------------------->
	$delete = "DELETE FROM user WHERE user.id_user=".$idUsr.";";
	$exe = mysqli_query($db_connect, $delete);

	#-- Comprobar la transacción. 
	if ($exe) {
		echo "<script>
	      window.location='javascript:history.go(-1)';
	      </script>";
	} 
	else {
		echo "<script>
	         alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
	         window.location='javascript:history.go(-1)';
	         </script>";
	}
	
	mysqli_close($db_connect); #-- Cerrar conexión con la BD.

?>
