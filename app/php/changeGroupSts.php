<?php 
/**
 * Aqui se procesa el cambio de grupo de multiples alumnos elegidos al azar.
 * las variables como x1 y otros parecidos sin un significado son solo variables basura, que
 * sirven en otras funciones, pero no en este apartado.
 */ 
	include_once '../../includes/db_connect.php'; //mala referencias a la configucaion dwe la base de datos+ jajajaj
	if (isset($_POST) ){
	
		$students = $_POST['alumnos'];
		$curso = $_POST['curso'];
		$grupo = $_POST['grupo'];
		list($thiscurso, $x1) = explode('-', $curso);
		list($thisgrupo, $xa,$xb,$xc) = explode('-', $grupo);
		$lista = explode('-', $students);

		$class = "SELECT C.id_class,C.id_course,C.id_group FROM classes C 
						WHERE C.id_course = '$thiscurso' AND C.id_group = '$thisgrupo' LIMIT 1;";
		$takeIdClass = mysqli_query($db_connect, $class) or die(mysqli_error());
		while ($thisclass = mysqli_fetch_array($takeIdClass)) {
			$idClass = $thisclass['id_class'];
		}
		if (isset($lista)) {
			foreach ($lista as $student) {
				$update = "UPDATE academic_info SET id_classes='$idClass' WHERE id_student='$student';";
				$updated = mysqli_query($db_connect, $update);
			}
		}

		if ($updated) {
			$str = "";
			switch ($thiscurso) {
				case '1': $str = "../../main.php?menu_ad=alumnos&registro=Club";
					break;
				case '2': $str = "../../main.php?menu_ad=alumnos&registro=Primary";
					break;
				case '3': $str = "../../main.php?menu_ad=alumnos&registro=Adolescentes";
					break;
				case '4': $str = "../../main.php?menu_ad=alumnos&registro=Adultos";
					break;
				default:
					$str = "../../main.php?menu_ad=alumnos";
					break;
			}
			echo "
	         <script>
	         window.location='".$str."';
	         </script>
	         ";
		} else {
			echo "<h3>Upp!! Algo a salido mal, asegurese de haber saleccionado a almenos un alumno o un grupo valido</h3>";
			echo "<h4>Intentelo de nuevo</h4>";
			echo "<a href='javascript:history.go(1)'></a>";
		}
	} else {
		echo "<h3>Upp!! Algo a salido mal, asegurese de haber saleccionado a almenos un alumno o un grupo valido</h3>";
		echo "<h4>Intentelo de nuevo</h4>";
		echo "<a href='javascript:history.go(1)'></a>";
	}

	mysqli_close($db_connect);
?>