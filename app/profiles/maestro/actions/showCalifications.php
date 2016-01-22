<?php  
	//include_once ('../../../../includes/db_connect.php');
	include_once ('includes/db_connect.php');
	include ('app/profiles/maestro/actions/issetTeacher.php');
	$idMaestro = teacherSet();

	$getCalifications = 
	"SELECT S.id_student,S.name_s,S.surname1_s,S.surname2_s,
				A.id_info,A.id_student,A.id_classes,C.id_class,C.id_course,C.id_group,C.teacher,
				N.id_course,N.course,G.id_group,G.group,E.id_eval,E.idinfo,
				E.reading_achiev,E.writing_achiev,E.speaking_achiev,E.listenin_achiev,
				E.reading_effort,E.writing_effort,E.speaking_effort,E.listening_effort,
				E.participation_effort,E.teamwork_effort,E.timing_effort,E.ciclo,
				E.period,E.subjects,E.annotations,E.name_e,E.date_eval 
		FROM student S, academic_info A, classes C, naatik_course N, groups_nc G, evaluations E
			WHERE S.id_student = A.id_student AND
					A.id_classes = C.id_class AND
					C.id_course  = N.id_course AND
					C.id_group   = G.id_group AND
					C.teacher    = '$idMaestro' AND
					A.id_info    = E.idinfo;";
	$setCalifications = mysqli_query($db_connect, $getCalifications) or die(mysqli_error());
	$i=1;
	if ($setCalifications) {
		while ($row = mysqli_fetch_array($setCalifications)) {
			$achiev = $row['reading_achiev']+$row['writing_achiev']+$row['speaking_achiev']+$row['listenin_achiev'];
			echo "<tr>";
				echo "<td>".$i++."</td>";
				echo "<td>".$row['name_s']." ".$row['surname1_s']." ".$row['surname2_s']."</td>";
				echo "<td>".$row['course']." ".$row['group']."</td>";
				echo "<td>".$achiev."</td>";
				echo "<td>".$row['period']." ".$row['ciclo']."</td>";
			echo "</tr>";
		}
	}
?>