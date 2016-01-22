<!--
 	* Autor: Br. Jose Luis Yama May.
 	* Muestra en una ventana modal la información del becario actual, y tambien la 
 	* lista de los alumnos solicitantes, con la finalidad de poder asignar la beca 
 	* a otro. Se cambia al beneficiario no al padrino.
-->
<?php
	$student = addslashes($_GET['x']);
	include_once ('../../../includes/db_connect.php');
	$query = "SELECT * 
					FROM student S, scholar B, sponsor P 
						WHERE S.id_student = '$student' AND
								S.id_student = B.id_student AND
								B.id_grant = P.id_scholar;";
	$made = mysqli_query($db_connect, $query) or die(mysqli_error());
	if ($made) {
		while ($row = mysqli_fetch_array($made)) {
			
?>
	<div class="form-group">
		<label class="col-sm-3">Becario Actual: </label>
		<div class="col-sm-9">
			<input type="text" name="becarioactual" disabled="true" class="form-control" value="<?= $row['name_s']." ".$row['surname1_s']." ".$row['surname2_s']; ?>">
			<input type="hidden" name="student" value="<?= $row['id_student']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Padrino: </label>
		<div class="col-sm-9">
			<input type="text" name="padrino" disabled="true" class="form-control" value="<?= $row['name_sp']." ".$row['surname_sp']; ?>">
			<input type="hidden" name="sponsor" value="<?= $row['id_sponsor']; ?>">
		</div>
	</div><br>

	<div class="form-group">
		<label class="col-sm-3">Nuevo Becario: </label>
		<div class="col-sm-9">
			<select name="becarionuevo" id="" class="form-control">
				<option value="">Seleccione...</option>
				<?php 
					$new = "SELECT * FROM student S1, scholar B1 
								WHERE S1.id_student = B1.id_student AND B1.request = 'si' AND B1.togrant = 'no';";
					$did = mysqli_query($db_connect, $new) or die(mysqli_error());
					while ($fila = mysqli_fetch_array($did)) {
						echo "<option value=".$fila['id_student'].">".$fila['name_s']." ".$fila['surname1_s']." ".$fila['surname2_s']."</option>";
					}
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Fecha: </label>
		<div class="col-sm-9">
			<input type="date" name="fecha" class="form-control">
		</div>
	</div>
<?php  
		} // Fin de while->$row
	} //-- Fin de if->$made
	mysqli_close($db_connect); //-- Cierre de conexion con BD
?>