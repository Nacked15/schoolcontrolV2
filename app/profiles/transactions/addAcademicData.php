<?php include_once '../../../includes/db_connect.php'; ?>
<?php
	//-- Asignación de datos obtenidos a variables 
	$stOcupation  = $_POST['ocupacion'];
	$stPlace      = $_POST['lugar'];
	$stLevel      = $_POST['nivel'];
	$stGrade      = $_POST['grado'];
	$prevCourses  = $_POST['optionRadio'];
	$stCourse 	  = $_POST['curso'];
	$stGroup 	  = $_POST['grupo'];
	$setActa		  = $_POST['acta'];
	$numControl   = $_POST['numcontrol'];
	$facturation  = $_POST['facturacion'];

	list($grupo, $clase, $alumno, $curso) = explode("-", $stGroup);
	list($dia,$mes,$anio) = explode('/', $_POST['fecha_init']);
	$stInitCourse  = $anio."-".$mes."-".$dia;
	

	// <<<<<<<< ------------------- =================== ------------------- >>>>>>>>
	//-- Comprobamos si el alumno a indicado algun curso previo.
	if ($prevCourses == 'si') {
		$stPreviousCourse = $_POST['cursoanterior'];
	} elseif ($prevCourses == 'no') {
		$stPreviousCourse = 'Inscripción';
	}

	// <<<<<<<< ------------------- =================== ------------------- >>>>>>>>
	//-- Consulta preparada para obtener el ID del Alumno.
	$query = mysqli_query($db_connect,"SELECT MAX(id_student) AS id FROM student;");
	$selection =  mysqli_fetch_array($query);
	
	$query = mysqli_query($db_connect,"SELECT MAX(id_sep) AS idsep FROM sep;");
	$getSep =  mysqli_fetch_array($query);
	$idSep = $getSep['idsep']+1;


	// <<<<<<<< ------------------- =================== ------------------- >>>>>>>>
	//-- Inserción de datos en la tabla Informacion Academica del alumno.
	$insertData = "INSERT INTO academic_info VALUES(null, 
					'$stOcupation', '$stPlace', '$stLevel', 
					'$stGrade', '$stPreviousCourse', '$idSep', 
					'$stInitCourse', '0000-00-00', '0000-00-00', '$clase' ,".$selection['id'].");";
	$insert = mysqli_query($db_connect, $insertData);

	// <<<<<<<< ------------------- =================== ------------------- >>>>>>>>
	//-- Comprobación de la Transaccion.
	if ($insert) {
		// Si insertData=true insertar datos de beca en tabla becado con valores por defecto.
		$beca = "INSERT INTO scholar VALUES(null, 'no', 'no','".$stInitCourse."' ,".$selection['id'].");";
		$setBeca = mysqli_query($db_connect, $beca);
		$sep = "INSERT INTO sep VALUES(null, 'no', '0', '0000-00-00','0','0');";
		$setSep = mysqli_query($db_connect, $sep);
		$infoExtra = "INSERT INTO info_extrast VALUES(null, '$setActa', '0', '$facturation', ".$selection['id'].");";
		$setInfoE  = mysqli_query($db_connect, $infoExtra);
		$setNumControl = "UPDATE student SET ncontrol='$numControl' WHERE student.id_student='".$selection['id']."';";
		$setThisNum  = mysqli_query($db_connect, $setNumControl);
		if ($setBeca && $setSep) {
			$str = "";
			switch ($curso) {
				case '1': $str = "../../../main.php?menu_ad=alumnos&registro=Club";
					break;
				case '2': $str = "../../../main.php?menu_ad=alumnos&registro=Primary";
					break;
				case '3': $str = "../../../main.php?menu_ad=alumnos&registro=Adolescentes";
					break;
				case '4': $str = "../../../main.php?menu_ad=alumnos&registro=Adultos";
					break;
				default:
					$str = "../../../main.php?menu_ad=alumnos";
					break;
			}
			echo "
	         <script>
	         window.location='".$str."';
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
	
	mysqli_close($db_connect); #-- Cerrar conexión a Base de Datos.
?>