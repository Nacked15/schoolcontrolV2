<?php
/**
 * Autor: Jose Luis Yama May.
 * Fecha: 18-Nov-2015 
 * Descrip: Aquí se procesa toda la información necesaria de los alumnos registrados ante la SEP y se guardan en arreglos
 * los cuales se pasan a una lista de registro y acreditacion en un formato oficial.
 */
	include_once '../../../includes/db_connect.php';
	include_once '../../php/calcularEdad.php';

	//== Obtener ID de la clase para mostrar la lista dealumnos que pertenecen a esta clase
	$clase = $_GET['clase'];

	//== Inicializacion de variables para guardar datos de alumno SEP (se utilizan como arreglos :).
	$nControls = ''; $names = ''; $ages = ''; $genres = '';
	$studies = ''; $nombre=''; $notas = ''; $becas = '';
	$genero ='';

	//== Efectuamos la consulta para obtene los datos de los alumnos que perteneces a la clase especificada.
	$getStsSep = 
	"SELECT * 
		FROM student S, academic_info A, sep R, classes C, naatik_course N, groups_nc G, schedule H 
		WHERE S.status 	 = 'activo' ANd 
				S.id_student = A.id_student AND
				A.reg_sep    = R.id_sep AND
				R.issep 		 = 'si' AND
				A.id_classes = '$clase' AND
				C.id_class   = A.id_classes AND
				C.id_course  = N.id_course AND
				C.id_group 	 = G.id_group AND
				C.id_schedule = H.id_schedule;";
	$setSts = mysqli_query($db_connect, $getStsSep) or die(mysqli_error());
	$cout = $setSts->num_rows;

	if ($cout>0) {
		while ($alumno = mysqli_fetch_array($setSts)) {
			list($horaIni,$minIni,$secIni) = explode(':', $alumno['hour_init']);
			list($horaFin,$minFin,$secFin) = explode(':', $alumno['hour_end']);
			$grupo = strtoupper($alumno['course'])." ".strtoupper($alumno['group']);
			$fechaIni = fechaCorta($alumno['date_init']);
			$fechaFin = fechaCorta($alumno['date_end']);
			$horario = $horaIni.":".$minIni." A ".$horaFin.":".$minFin." PM ".strtoupper($alumno['days']);
			$nombre =strtoupper($alumno['surname1_s'])." ".strtoupper($alumno['surname2_s'])." ".strtoupper($alumno['name_s']);
			
			switch ($alumno['sexo']) {
				case 'Femenino': $genero='F';
					break;
				case 'Masculino': $genero = 'M';
					break;
			}

			if ($nControls=='') { $nControls = $alumno['ncontrol']; } 
			else{ $nControls = $nControls."-".$alumno['ncontrol']; }

			if ($names=='') { $names = $nombre; } 
			else { $names = $names."-".$nombre; }
			
			if ($ages=='') { $ages = $alumno['age']; } 
			else { $ages = $ages."-".$alumno['age']; }

			if ($genres=='') { $genres = $genero;} 
			else { $genres = $genres."-".$genero;}

			if ($studies=='') { $studies = strtoupper($alumno['studies']);} 
			else { $studies = $studies."-".strtoupper($alumno['studies']); }

			if ($notas=='') { $notas = $alumno['calification_sep'];} 
			else { $notas = $notas."-".$alumno['calification_sep']; }

			if ($becas=='') { $becas = $alumno['beca'];} 
			else { $becas = $becas."-".$alumno['beca']; }
		}
		// echo "Numeros: ".$nControls;
		// echo "<br>Nombre: ".$names;
		// echo "<br>Edades: ".$ages;
		// echo "<br>Generos: ".$genres;
		// echo "<br>Estudios: ".$studies;
		// echo "--------------------------- <br>";
		$info=$nControls.",".$names.",".$ages.",".$genres.",".$studies.",".$notas.",".$becas;
?>
<table class="table table-bodered table-striped table-condensed">
	<caption class="text-center text-primary">DATOS DEL CURSO</caption>
	<tbody>
		<tr>
			<td><strong>Grupo:</strong></td>
			<td>
				<input type="text" class="form-control" name="curso" value="<?= $grupo; ?>">
			</td>
		</tr>
		<tr>
			<td><strong>Fecha Inicio:</strong></td>
			<td>
				<input type="text" class="form-control" name="fechaIni" value="<?= $fechaIni;  ?>">
			</td>
		</tr>
		<tr>
			<td><strong>Fecha Fin:</strong></td>
			<td>
				<input type="text" class="form-control" name="fechaFin" value="<?= $fechaFin; ?>">
			</td>
		</tr>
		<tr>
			<td><strong>Duraci&oacute;n:</strong></td>
			<td>
				<input type="text" class="form-control" name="duracion" placeholder="50" required>
			</td>
		</tr>
		<tr>
			<td><strong>Horario:</strong></td>
			<td>
				<input type="text" class="form-control" name="horario" value="<?= $horario; ?>">
			</td>
		</tr>
		<tr>
			<td><strong>Fecha de Hoy:</strong></td>
			<td>
				<input type="text" class="form-control" name="fechaHoy" placeholder="15-NOV-15" required>
			</td>
		</tr>
	</tbody>
</table>
<table class="table table-bordered">
	<thead>
		<tr class="success">
			<th>#</th>
			<th>N° Control</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Sexo</th>
			<th>Escolaridad</th>
			<th>Calificaci&oacute;n</th>
			<th>% Beca</th>
		</tr>
	</thead>
	<tbody>
		<?php for ($i=1; $i <=10 ; $i++) {
			echo "<tr>".
			datas($i,$info)
			."</tr>";
		} ?>
	</tbody>
</table>
<input type="hidden" name="allData" value="<?= $info; ?>">

<?php
	} else {
		echo "<h3 class='text-primary text-center'>No hay Alumnos de este grupo registrados en la SEP.</h3>";
	} //fin del if->$count 
function datas($n,$datas){
	list($numeros,$nombres,$edades,$generos,$estudios,$calific,$becas) = explode(",", $datas);
	$controls = explode('-', $numeros);
	$namesSt = explode('-', $nombres);
	$agesSt = explode('-', $edades);
	$genresSt = explode('-', $generos);
	$studiesSt = explode('-', $estudios); 
	$notes = explode("-", $calific);
	$toGrants = explode("-", $becas);

	for ($j=1; $j <=8 ; $j++) {
		if ($j==1) {
		 	echo "<td style='border: 1px solid #bbb;'>".$n."</td>";
		 } elseif($j==2) {
		 	//Agrega Numeros de control
		 	if ($n<=count($controls)) {
		 			echo "<td style='border: 1px solid #bbb;'>".$controls[$n-1]."</td>";
		 	}else{ echo "<td style='border: 1px solid #bbb;'></td>";}
		 			
		 } elseif($j==3) {
		 	//Agrega nombres de alumnos
		 	if ($n<=count($namesSt)) {
		 		echo "<td style='border: 1px solid #bbb;'>".$namesSt[$n-1]."</td>";
		 	}else{ echo "<td style='border: 1px solid #bbb;'></td>";}
		 	
		 } elseif ($j==4) {
		 	//Agrega las edades de los alumnos.
		 	if ($n<=count($agesSt)) {
		 		echo "<td style='border: 1px solid #bbb;'>".$agesSt[$n-1]."</td>";
		 	}else{ echo "<td style='border: 1px solid #bbb;'></td>";}
		 	
		 } elseif ($j==5) {
		 	//Agrega los generos
		 	if ($n<=count($genresSt)) {
		 		echo "<td style='border: 1px solid #bbb;'>".$genresSt[$n-1]."</td>";
		 	}else { echo "<td style='border: 1px solid #bbb;'></td>";}
		 } elseif ($j==6) {
		 	//Agrega los estudios del los alumnos
		 	if ($n<=count($studiesSt)) {
		 		echo "<td style='border: 1px solid #bbb;'>".$studiesSt[$n-1]."</td>";
		 	} else { echo "<td style='border: 1px solid #bbb;'></td>";}
		 	
		 } elseif ($j==7) {
		 	//Agrega los estudios del los alumnos
		 	if ($n<=count($notes)) {
		 		echo "<td style='border: 1px solid #bbb;'>".$notes[$n-1]."</td>";
		 	} else { echo "<td style='border: 1px solid #bbb;'></td>";}
		 	
		 } elseif ($j==8) {
		 	//Agrega los estudios del los alumnos
		 	if ($n<=count($toGrants)) {
		 		echo "<td style='border: 1px solid #bbb;'>".$toGrants[$n-1]."</td>";
		 	} else { echo "<td style='border: 1px solid #bbb;'></td>";}
		 	
		 }
		
	}
}
?>