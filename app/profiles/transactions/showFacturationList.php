<?php  
/**
 * Autor: Jose Luis Yama May.
 * Fecha: 20-Nov-2015
 * Desc.: Muestra los datos de aquellos alumnos que requieren se genere factura de pagos de colegiatura.
 */

include ('../../../includes/db_connect.php');
$i = 1;
$bckg = '';
$tutorName = '';
$tel = '';

$getQuery = 
"SELECT I.id_st,I.facturacion, S.id_student,S.name_s,S.surname1_s,S.surname2_s,S.cellphone, 
		  S.id_tutor, T.id_tutor,T.name_t,T.surname1_t,T.surname2_t, T.phone,T.cellphone_t
 FROM  info_extrast I, student S, tutor T
 WHERE I.facturacion = 1 AND
 		 I.id_st 		= S.id_student AND
 		 S.id_tutor 	= T.id_tutor;";
$setQuery = mysqli_query($db_connect, $getQuery) or die(mysqli_error);
?>

<table id="example" class="table table-responsive">
	<thead>
		<tr>
			<th>#</th>
			<th class="text-center">Alumno</th>
			<th class="text-center">Tutor</th>
			<th class="text-center">Tel. casa</th>
			<th class="text-center">Tel. Celular</th>
			<th class="text-center">Facturaci&oacute;n</th>
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
			<td>
				<div class="radio radio-info">
               <label> NO
                  <input type="radio" value="0" name="optionRadio<?= $row['id_student']; ?>" onclick="updateFacturation('<?= $row['id_student']; ?>, this.value');">
                  <span class="circle"></span>
                  <span class="check"></span>                                       
               </label>
            </div>
			</td>
		</tr>
	<?php  
		} //== Fin del while->$row

		mysqli_close($db_connect); //== cierre de conexion con la BD
	?>
	</tbody>
</table>