<?php 
	include ('../../../includes/db_connect.php');
	$i = 1;
	$bckg = '';
	$tutorName = '';
	$tel = '';
	$getQuery = 
		"SELECT I.id_st,I.convenio, S.id_student,S.name_s,S.surname1_s,S.surname2_s, S.cellphone, S.id_tutor,
				  T.id_tutor,T.name_t,T.surname1_t,T.surname2_t, T.phone,T.cellphone_t
			FROM info_extrast I, student S, tutor T
				WHERE I.convenio = 0 AND
						I.id_st    = S.id_student AND
						S.id_tutor = T.id_tutor;";
	$setQuery = mysqli_query($db_connect, $getQuery) or die (mysqli_error());

?>

<table class="table table-responsive">
	<thead>
		<tr>
			<th>#</th>
			<th>Alumno</th>
			<th>Tutor</th>
			<th>Tel. casa</th>
			<th>Tel. Celular</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		while ($row = mysqli_fetch_array($setQuery)) { 
			if ($i%2!=0) { $bckg = 'bg-info'; } else { $bckg = '';}
			if ($row['name_t'] && $row['surname1_t'] == 'N/A') { $tutorName = 'N/A'; $tel = $row['cellphone'];} 
			else {$tutorName = $row['name_t']." ".$row['surname1_t']." ".$row['surname2_t']; $tel = $row['cellphone_t']; }
	?>
		<tr class="<?= $bckg; ?>">
			<td><?= $i++; ?></td>
			<td><?= $row['name_s']." ".$row['surname1_s']." ".$row['surname2_s']; ?></td>
			<td><?= $tutorName; ?></td>
			<td><?= $row['phone']; ?></td>
			<td><?= $tel; ?></td>
			<td><a href="?menu_ad=formularioContrato&idStudent=<?= $row['id_student'];?>" class="label label-primary"><strong>Convenio</strong> <i class="glyphicon glyphicon-file"></i></a></td>
		</tr>
	<?php  
		} //== Fin del while->$row

		mysqli_close($db_connect); //== cierre de conexion con la BD
	?>
	</tbody>
</table>

