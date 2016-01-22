<?php  
	include_once '../../../includes/db_connect.php';

	$horario = 
	"SELECT * 
		FROM classes C, naatik_course N, groups_nc G, schedule H, teacher P
			WHERE C.id_course = N.id_course AND
					C.id_group = G.id_group AND
					C.id_schedule = H.id_schedule AND
					C.teacher = P.id_teacher ORDER BY hour_init;";
	$getHorario = mysqli_query($db_connect, $horario) or die(mysqli_error());

	if ($getHorario) {
		while ($clase = mysqli_fetch_array($getHorario)) {
			if ($clase['status_class']=='activo' || $clase['status_class']=='finalizado') {
			
				list($hora, $minuto, $x) = explode(":",$clase['hour_init']);
				$hora_init = $hora.":".$minuto;
				list($hora2, $minuto2, $x2) = explode(":",$clase['hour_end']);
				$hora_end = $hora2.":".$minuto2;
				$dias = explode('-', $clase['days']);

				echo "<tr>";
				echo "<td>".Format_hour($hora_init)."-".Format_hour($hora_end)."</td>";
				echo "<td>".Scheduledays('Lunes',$dias,$clase['course'],$clase['group'],$clase['name_te'])."</td>";
				echo "<td>".Scheduledays('Martes',$dias,$clase['course'],$clase['group'],$clase['name_te'])."</td>";
				echo "<td>".Scheduledays('Miercoles',$dias,$clase['course'],$clase['group'],$clase['name_te'])."</td>";
				echo "<td>".Scheduledays('Jueves',$dias,$clase['course'],$clase['group'],$clase['name_te'])."</td>";
				echo "<td>".Scheduledays('Viernes',$dias,$clase['course'],$clase['group'],$clase['name_te'])."</td>";
				echo "<td>".Scheduledays('Sabado',$dias,$clase['course'],$clase['group'],$clase['name_te'])."</td>";
				echo "</tr>";
			}
		}

	} else {
		echo "Problemas de conexion con la BD";
	}

function Format_hour($hourclass){
	$hourformated = '';
	list($hour,$minute) = explode(':', $hourclass);

	switch ($hour) {
		case '01': $hourformated = $hourclass; break;
		case '02': $hourformated = $hourclass; break;
		case '03': $hourformated = $hourclass; break;
		case '04': $hourformated = $hourclass; break;
		case '05': $hourformated = $hourclass; break;
		case '06': $hourformated = $hourclass; break;
		case '07': $hourformated = $hourclass; break;
		case '08': $hourformated = $hourclass; break;
		case '09': $hourformated = $hourclass; break;
		case '10': $hourformated = $hourclass; break;
		case '11': $hourformated = $hourclass; break;
		case '12': $hourformated = $hourclass; break;
		case '13': $hourformated = "01".":".$minute; break;
		case '14': $hourformated = "02".":".$minute; break;
		case '15': $hourformated = "03".":".$minute; break;
		case '16': $hourformated = "04".":".$minute; break;
		case '17': $hourformated = "05".":".$minute; break;
		case '18': $hourformated = "06".":".$minute; break;
		case '19': $hourformated = "07".":".$minute; break;
		case '20': $hourformated = "08".":".$minute; break;
		case '21': $hourformated = "09".":".$minute; break;
		case '22': $hourformated = "10".":".$minute; break;
		case '23': $hourformated = "11".":".$minute; break;
		default: $hourformated = $hourclass;
			break;
	}
	return $hourformated;
}

function Scheduledays($dia, $dias, $curso, $grupo, $maestro){
	$datos = "";
	foreach ($dias as $day) {
		if ($day == $dia) {
			$datos = $curso." ".$grupo." (".$maestro.")";
			return $datos;
		}
	}
}
?>