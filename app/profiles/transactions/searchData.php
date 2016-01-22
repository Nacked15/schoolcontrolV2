<?php
$clave = $_GET['key'];

function searchData($str) {
    $str = addslashes($str);
    $show ="";
   switch ($str) {
   	case 'alumno': $show = studentData();
   		break;
   	case 'tutor': $show = tutorData();
   		break;
   	case 'maestro': $show = teacherData();
   		break;
   	default: $show = studentData();
   		break;
   }
return $show;
}

function studentData(){
	include '../../../includes/db_connect.php';
	echo "
		<thead>
			<tr class='info'>
				<th>#</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Lastname</th>
			</tr>
		</thead>
		<tbody>
	";

	$seleccion = "SELECT * FROM student ORDER BY name_s ASC;";
	$resultado = mysqli_query($db_connect, $seleccion) or die (mysqli_error());
	$i=1;
	while ($row = mysqli_fetch_array($resultado)) {
		echo "<tr>";
		echo "<td>".$i++."</td>";
		echo "<td>".$row['name_s']."</td>";
		echo "<td>".$row['surname1_s']."</td>";
		echo "<td>".$row['surname2_s']."</td>";
		echo "</tr>";
	}
	echo "</tbody>";
}

function tutorData(){
	include '../../../includes/db_connect.php';

	echo "
		<thead>
			<tr class='info'>
				<th>#</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Lastname</th>
			</tr>
		</thead>
		<tbody>
	";

	$seleccion = "SELECT * FROM tutor ORDER BY surname1_t ASC;";
	$resultado = mysqli_query($db_connect, $seleccion) or die (mysqli_error());
	$i=1;
	while ($row = mysqli_fetch_array($resultado)) {
		echo "<tr>";
		echo "<td>".$i++."</td>";
		echo "<td>".$row['surname1_t']."</td>";
		echo "<td>".$row['surname2_t']."</td>";
		echo "<td>".$row['name_t']."</td>";
		echo "</tr>";
	}
	echo "</tbody>";
}

function teacherData(){
	include '../../../includes/db_connect.php';
	echo "
		<thead>
			<tr class='info'>
				<th>#</th>
				<th>Name</th>
				<th>Surname</th>
			</tr>
		</thead>
		<tbody>
	";

	$i=1;
	$seleccion = "SELECT * FROM teacher ORDER BY name_te DESC;";
	$resultado = mysqli_query($db_connect, $seleccion) or die (mysqli_error());

	while ($row = mysqli_fetch_array($resultado)) {
		echo "<tr>";
		echo "<td>".$i++."</td>";
		echo "<td>".$row['name_te']."</td>";
		echo "<td>".$row['surname_te']."</td>";
		echo "</tr>";
	}
	echo "</tbody>";
	
}
 echo searchData($clave);
?>


						

						