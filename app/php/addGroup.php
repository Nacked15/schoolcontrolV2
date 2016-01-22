<?php include_once '../../includes/db_connect.php'; ?>
<?php
	#-- Asignación de variables
	$groupSt = $_POST['grupost'];
	list($clase, $curso, $grupo,$idSt) = explode("-",$groupSt);

	$query = "SELECT * FROM classes C 
					WHERE id_course = ".$curso." AND
							id_Group = ".$grupo." LIMIT 1;";
	$do = mysqli_query($db_connect,$query) or die (mysqli_error());
	while ($row = mysqli_fetch_array($do)) {
		$idNewClass = $row['id_class'];
	} 

	//-- <----------------------- ******************** ------------------------------->
	#-- Inserción de datos a la tabla curso naatik.
	$update = "UPDATE academic_info SET id_classes=".$idNewClass." WHERE id_student=".$idSt.";";
	$echo = mysqli_query($db_connect, $update) or die (mysqli_error());

	//-- <-------------------------- ******************** ------------------------------->
	#-- Comprobar transaccion si es true.
	if ($echo) {
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