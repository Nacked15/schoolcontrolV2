<?php
	//-- Inclusion de funciones necesarias, para la conexion y para el calculo de la edad.
	include '../../../includes/db_connect.php';
	include '../../php/calcularEdad.php';

	//-- <-------------------------- ******************************* ------------------------------->
    //-- Culsulta para mostrar datos de los alumnos dados de baja.
	$query = "SELECT * FROM student S, academic_info A, classes C, naatik_course N, groups_nc G, tutor T 
					WHERE S.id_student = A.id_student AND
						A.id_classes = C.id_class AND
						C.id_course = N.id_course AND
						C.id_group = G.id_group AND
						S.id_tutor = T.id_tutor AND
						S.status = 'baja';";
	$echo = mysqli_query($db_connect, $query) or die (mysqli_error());
	$numero = 1;
	if ($echo) {
		while ($fila = mysqli_fetch_array($echo)) {
			$edad = calcular($fila['birthday']);
			echo "<tr>";
            echo "<th>".$numero++."</th>";
            echo "<td>"."<img src='img/fotos/student/".$fila['photo_s']."' class='img-circle' width=50px height=50px>"."</td>";
            echo "<td>".$fila['name_s']."</td>";
            echo "<td>".$fila['surname1_s']."</td>";
            echo "<td>".$fila['surname2_s']."</td>";
            echo "<td>".$edad."</td>";
            echo "<td>".$fila['course']."</td>";
            echo "<td>".$fila['group']."</td>";
				echo "<td>".$fila['name_t']." ".$fila['surname1_t']." ".$fila['surname2_t']."</td>";
				echo "<td>".$fila['date_bajaSt']."</td>";
            echo "<td><a href='#' data-toggle='modal' data-target='.bs-example-modal-alumno' onclick='datosStudent(".$fila['id_student'].",".$fila['id_class'].")' class='btn btn-primary btn-fab btn-raised mdi-action-launch'></a></td>";
       echo "</tr>";
		}
	}

    mysqli_close($db_connect); #-- Cierre de la conexión a la base de datos.
?>