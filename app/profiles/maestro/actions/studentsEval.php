<?php
include 'app/php/calcularEdad.php';
include ('app/profiles/maestro/actions/issetTeacher.php');

function myStudentsEval($nivel) {
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
			if ($row['id_course']==1) {
				$link = "?menu_p=EvalClub&idst=".$row['id_student']."";
			} else {
				$link = "?menu_p=EvalPAA&idst=".$row['id_student']."";;
			}
			$edad = calcular($row['birthday']);
			echo "<tr>";
			echo "<td>".$i++."</td>";
			echo "<th>"."<img src='img/fotos/student/".$row['photo_s']."' class='img-circle' width=50px height=50px>"."</th>";
			echo "<td>".$row['surname1_s']." ".$row['surname2_s']." ".$row['name_s']."</td>";
			echo "<td>".$row['course']."</td>";
			echo "<td>".$row['group']."</td>";
			echo "<td><a href='".$link."' class='label label-primary' data-toggle='tooltip' data-placement='right' data-trigger='hover' title='Evaluar.'>Evaluar <span class='glyphicon glyphicon-edit'></span></a></td>";
			echo "</tr>";
		}
	}
}

function allMyStudentsEval() {
	include ('includes/db_connect.php');
	$maestro = $_SESSION['username'];
	$password = $_SESSION['password'];

	$seleccion = 
		"SELECT * FROM teacher T, user U 
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

	$query = 
		"SELECT * 
			FROM student S, academic_info A, classes C, naatik_course N, groups_nc G, teacher T WHERE 
				S.status = 'activo' AND
				S.id_student = A.id_student AND
				A.id_classes = C.id_class AND
				C.id_course = N.id_course AND
				C.id_group = G.id_group AND
				C.teacher = T.id_teacher AND
				T.id_teacher = '$idMaestro' ORDER BY S.surname1_s ASC;";
	$made = mysqli_query($db_connect, $query) or die(mysqli_error());
	$i = 1;
	$link = "";
	if ($made) {
		while ($row = mysqli_fetch_array($made)) {
			if ($row['id_course']==1) {
				$link = "?menu_p=EvalClub";
			} else {
				$link = "?menu_p=EvalPAA";
			}
			$edad = calcular($row['birthday']);
			echo "<tr>";
			echo "<td>".$i++."</td>";
			echo "<th>"."<img src='img/fotos/student/".$row['photo_s']."' class='img-circle' width=50px height=50px>"."</th>";
			echo "<td>".$row['surname1_s']." ".$row['surname2_s']." ".$row['name_s']."</td>";
			echo "<td>".$row['course']." ".$row['group']."</td>";
			echo "<td><a href='?menu_p=viewEvals&alumno=".$row['id_student']."&curso=".$row['id_course']."' class='label label-success'>Ver evaluaciones</a></td>";
			echo "</tr>";
		}
	}

}

?>