<?php include_once '../../../includes/db_connect.php'; ?>
<?php
	#-- Asignación de variables 
	$className 		 = $_POST['nombreC'];
	$classGroup		 = $_POST['grupo'];
	$classYear 		 = $_POST['periodo']; 
	$classHourInit  = $_POST['h_inicio'];
	$classHourEnd   = $_POST['h_salida'];
	$normalPrice	 = $_POST['costo_normal'];
	$promoPrice	    = $_POST['costo_promo'];
	$discount	    = $_POST['descuento'];
	$inscripcion    = $_POST['inscripcion'];
	$days='';
	if (isset($_POST['diasC'])) {
		foreach ($_POST['diasC'] as $day) {
			if ($days=='') {
				$days = $day;
			} else {
				$days = $days."-".$day;
			}
		}
	}
	$teacher = 1;

	list($dia,$mes,$anio) = explode('/', $_POST['f_inicio']);
	$classDateInit  = $anio."-".$mes."-".$dia;
	list($diaf,$mesf,$aniof) = explode('/', $_POST['f_fin']);
	$classDateEnd  = $aniof."-".$mesf."-".$diaf;

	//-- <-------------------------- ******************** ------------------------------->
	$query = mysqli_query($db_connect,"SELECT MAX(id_schedule) AS id FROM schedule;");
	$selection =  mysqli_fetch_array($query);
	$idSchedule = $selection['id']+1;

	//-- <-------------------------- ******************** ------------------------------->
	#-- Inserción de datos a la tabla curso naatik.
	$insertIn = "INSERT INTO classes VALUES(null, '$className', '$classGroup', '$idSchedule', '$normalPrice', '$promoPrice', '$discount', '$inscripcion', '$teacher', 'activo');";
	$insert = mysqli_query($db_connect, $insertIn);

	//-- <-------------------------- ******************** ------------------------------->
	#-- Comprobar transaccion si es true.
	if ($insert) {
		#-- Insertar datos en tabla horario
		$insertDataIn = "INSERT INTO schedule VALUES(null, '$classYear', '$classDateInit', '$classDateEnd', '$days', '$classHourInit', '$classHourEnd');";
		$insertData = mysqli_query($db_connect, $insertDataIn);
		if ($insertData) {
			echo "
	         <script>
	         window.location='../../../main.php?menu_ad=cursos';
	         </script>
	         ";
		}					
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

