<?php include_once '../../../includes/db_connect.php'; ?>
<?php 
	#-- Asignación de variables.
	$idClass      = $_POST['idclass'];
	$idCourse     = $_POST['idcurso'];
	$idGrupo		  = $_POST['grupo'];
	$idSchedule   = $_POST['idschedule'];
	$course    	  = $_POST['curso'];
	$year    	  = $_POST['periodo'];
	$hourInit     = $_POST['hora1'];
	$hourEnd      = $_POST['hora2'];
	$normalPrice  = $_POST['costo_normal'];
	$promoPrice	  = $_POST['costo_promo'];
	$discount	  = $_POST['descuento'];
	$inscription  = $_POST['inscripcion'];
	$dateInit 	  = $_POST['fecha_inicio'];
	$dateEnd   	  = $_POST['fecha_fin'];
	$status		  = $_POST['estado'];

	$days = '';
	if (isset($_POST['diasC'])) {
		foreach ($_POST['diasC'] as $day) {
			if ($days=='') {
				$days = $day;
			} else {
				$days = $days."-".$day;
			}
		}
	}


	//-- <-------------------------- ******************** ------------------------------->
	#-- Consulta para obtener los datos de beca del alumno.
	if (isset($idClass) && isset($idCourse)) {
		$updatesch = "UPDATE classes
						SET id_course 			= '$course',
							 id_group 			= '$idGrupo',
							 normal_cost 		= '$normalPrice',
							 promo_cost 		= '$promoPrice',
							 discount_cost 	= '$discount',
							 inscription_cost = '$inscription',
							 status_class 		= '$status'	 
						WHERE id_class=".$idClass.";";
			$echosch = mysqli_query($db_connect, $updatesch);

		#-- Comprobar la transacción. 
		if ($echosch) {
			$update = "UPDATE schedule
							SET year='".$year."', 
								date_init='".$dateInit."',
								date_end='".$dateEnd."',
								days='".$days."', 
								hour_init='".$hourInit."',
								hour_end='".$hourEnd."'
							WHERE id_schedule='".$idSchedule."';";
				$echo = mysqli_query($db_connect, $update);
			if ($echo){
				echo "<script>
		         window.location='javascript:history.go(-1)';
		         </script>";
			} else {
				echo "idschedule: ".$idSchedule;
				echo "data: ".$year." ".$dateInit." ".$days." ".$hourInit." ".$hourEnd;
			}
		} else {
			echo "<script>
		         alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
		         window.location='javascript:history.go(-1)';
		         </script>";
		}
	} #-- Fin de if-isset
	
	mysqli_close($db_connect); #-- Cerrar conexión con la BD.

?>
