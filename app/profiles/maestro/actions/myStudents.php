<?php
include ('app/php/calcularEdad.php');
include ('app/profiles/maestro/actions/issetTeacher.php');

function myStudents($nivel) {
	include ('includes/db_connect.php');
	$idMaestro = teacherSet(); 

	$query = "SELECT * FROM student S, academic_info A, classes C, naatik_course N, groups_nc G, teacher T WHERE 
									S.status = 'activo' AND
									S.id_student = A.id_student AND
									A.id_classes = C.id_class AND
									C.id_course = N.id_course AND
									N.id_course = '$nivel' AND
									C.id_group = G.id_group AND
									C.teacher = T.id_teacher AND
									T.id_teacher = '$idMaestro' ORDER BY S.surname1_s ASC;";
	$made = mysqli_query($db_connect, $query) or die(mysqli_error());
	$i=1;
	if ($made) {
		while ($row = mysqli_fetch_array($made)) {
			$edad = calcular($row['birthday']);
			echo "<tr>";
			echo "<td>".$i++."</td>";
			echo "<th>"."<img src='img/fotos/student/".$row['photo_s']."' class='img-circle' width=50px height=50px>"."</th>";
			echo "<td>".$row['surname1_s']."</td>";
			echo "<td>".$row['surname2_s']."</td>";
			echo "<td>".$row['name_s']."</td>";
			echo "<td>".$edad."</td>";
			echo "<td>".$row['course']."</td>";
			echo "<td>".$row['group']."</td>";
			echo "<td data-toggle='tooltip' data-placement='bottom' data-trigger='hover' title='Más...'><a href='#' data-toggle='modal' data-target='.bs-example-modal-alumno' class='btn btn-primary btn-fab btn-raised mdi-action-launch'></a></td>";
			echo "</tr>";
		}
	}
}

function allMyStudents() {
	include ('includes/db_connect.php');
	$maestro = $_SESSION['username'];
	$password = $_SESSION['password'];

	$seleccion = "SELECT * FROM teacher T, user U 
							WHERE T.iduser = U.id_user AND
									U.category = 'maestro' AND
									U.username = '$maestro' AND
									U.password = '$password' ;";
	$do = mysqli_query($db_connect, $seleccion) or die(mysqli_error());
	if ($do) {
	  	while ($pointer = mysqli_fetch_array($do)) {
	  		$idMaestro = $pointer['id_teacher'];
	  	}
	}

	$query = "SELECT * FROM student S, academic_info A, classes C, naatik_course N, groups_nc G, teacher T WHERE 
									S.status = 'activo' AND
									S.id_student = A.id_student AND
									A.id_classes = C.id_class AND
									C.id_course = N.id_course AND
									C.id_group = G.id_group AND
									C.teacher = T.id_teacher AND
									T.id_teacher = '$idMaestro' ORDER BY S.surname1_s ASC;";
	$made = mysqli_query($db_connect, $query) or die(mysqli_error());
	$i = 1;
	if ($made) {
		while ($row = mysqli_fetch_array($made)) {
			$edad = calcular($row['birthday']);
			echo "<tr>";
			echo "<td>".$i++."</td>";
			echo "<th>"."<img src='img/fotos/student/".$row['photo_s']."' class='img-circle' width=50px height=50px>"."</th>";
			echo "<td>".$row['surname1_s']."</td>";
			echo "<td>".$row['surname2_s']."</td>";
			echo "<td>".$row['name_s']."</td>";
			echo "<td>".$edad."</td>";
			echo "<td>".$row['course']."</td>";
			echo "<td>".$row['group']."</td>";
			echo "<td data-toggle='tooltip' data-placement='bottom' data-trigger='hover' title='Más...'><a href='#' data-toggle='modal' data-target='.bs-example-modal-alumno' class='btn btn-primary btn-fab btn-raised mdi-action-launch'></a></td>";
			echo "</tr>";
		}
	}

}

?>