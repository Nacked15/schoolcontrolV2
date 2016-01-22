<?php include_once '../../includes/db_connect.php'; ?>
<?php
	#-- Asignación de variables
	$idTask = $_POST['id'];

	$delete = "DELETE  FROM tasks 
					WHERE id_task = ".$idTask.";";
	$do = mysqli_query($db_connect,$delete) or die (mysqli_error());

	//-- <-------------------------- ******************** ------------------------------->
	#-- Comprobar transaccion si es true.
	if ($do) {
				echo "
					<script>
					window.location='javascript:history.go(-1)';
					</script>
					";				
		} else {
			echo "
					<script>
					alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
					window.location='javascript:history.go(-1)';
					</script>
					";
		}
	
	mysqli_close($db_connect); #-- Cerrar conexión a Base de datos.
?>