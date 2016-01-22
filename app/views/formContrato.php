<ol class="breadcrumb hidden-xs hidden-sm visible-md visible-lg">
  <li><a href="?menu_ad=principal">Principal</a></li>
  <li><a href="javascript:history.go(-1)">Lista de Alumnos</a></li>
  <li class="active">Formulario de Contrato</li>
</ol>
<?php
	include 'includes/db_connect.php'; 
	$alumno = $_GET['idStudent'];
	$alumno = addslashes($alumno);
	$nameTutor = '';

	$query = "SELECT * FROM student S, tutor T, academic_info A, 
									classes C, naatik_course N, groups_nc G, schedule H
					WHERE S.id_student = '$alumno' AND
							S.id_tutor = T.id_tutor AND
							A.id_student = S.id_student AND
							A.id_classes = C.id_class AND
							C.id_course = N.id_course AND
							C.id_group = G.id_group AND
							C.id_schedule = H.id_schedule LIMIT 1
							;";
	$do = mysqli_query($db_connect, $query) or die(mysqli_error());

	if ($do) {
		while ($rowSt = mysqli_fetch_array($do)) {
			if ($rowSt['name_t']=='N/A') {
				$nameTutor = '';
			} else {
				$nameTutor = $rowSt['name_t']." ".$rowSt['surname1_t']." ".$rowSt['surname2_t'];
			}
			$tutor = $rowSt['id_tutor'];
			$check = "SELECT id_student, id_tutor FROM student WHERE id_tutor='$tutor';";
			$search = mysqli_query($db_connect, $check) or die(mysql_error());
			$count = $search->num_rows;
?>
<div class="well">
	<div class="row">
		<div class="col-xs-0 col-sm-1 col-md-1"></div>
	   <div class="col-xs-12 col-sm-10 col-md-10">
	   	<a style="position:fixed;left:100px;" href="javascript:history.go(-1)" data-toggle='tooltip' data-placement='right' data-trigger='hover' title='Volver' class="btn btn-fab btn-info mdi-navigation-arrow-back"></a>
	   	<div>
	   		<div class="row">
	   			<ul class="nav nav-tabs nav-justified vw" role="tablist" id="myTab">
			         <li role="presentation" class="state-on"><a href="#formulario" aria-controls="formulario" role="tab" data-toggle="tab">FAVOR DE VERIFICAR LOS DATOS ANTES DE GENERAR EL CONVENIO.</a></li>
			      </ul>
	   		</div>
	   		<div class="tab-content row well">
	   			<div role="tabpanel" class="row tab-pane fade in active" id="formulario">
		   			<div class="col-xs-0 col-sm-1"></div>
		   			<div class="col-xs-12 col-sm-10">
					      <form action="php/pdf/pdf_blanco.php" target="_blank" method="POST" class="form-horizontal">
					      	<div class="row">
					      		<div class="col-xs-12 col-sm-6">
							         <div class="form-group">
							            <label for="inputname" class="col-sm-3">Alumno: </label>
							            <div class="col-sm-9">
							               <input type="text" class="form-control" name="alumno" value="<?php echo $rowSt['name_s']." ".$rowSt['surname1_s']." ".$rowSt['surname2_s']; ?>" required>
							            </div>
							         </div>
							      </div>
							      <div class="col-xs-12 col-sm-6">
							         <div class="form-group">
							            <label for="inputsurname" class="col-sm-3 control-label">Curso: </label>
							            <div class="col-sm-9">
							               <input type="text" class="form-control" name="curso" value="<?php echo $rowSt['course']." ".$rowSt['group']; ?>" required>
							            </div>
							         </div>
							      </div>
					         </div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
							         <div class="form-group">
							            <label for="inputparentesco" class="col-sm-3">Fecha de Inicio: </label>
							            <div class="col-sm-9">
							               <input type="date" name="dateinit" class="form-control" value="<?php echo $rowSt['date_init']; ?>">
							            </div>
							         </div>
							      </div>
							      <div class="col-xs-12 col-sm-6">
							         <div class="form-group">
							            <label for="inputparentesco" class="col-sm-3 control-label">Días: </label>
							            <div class="col-sm-9">
							               <input type="text" name="days" class="form-control" value="<?php echo $rowSt['days']; ?>">
							            </div>
							         </div>
							      </div>
								</div>
								<div class="form-group">
					            <label for="inputparentesco" class="col-sm-2">Horario: </label>
					            <div class="col-sm-5">
					               <input type="time" name="timeinit" class="form-control" value="<?php echo $rowSt['hour_init']; ?>">
					            </div>
					            <div class="col-sm-5">
					               <input type="time" name="timeend" class="form-control" value="<?php echo $rowSt['hour_end']; ?>">
					            </div>
					         </div>
					         <div class="form-group">
					            <label for="inputparentesco" class="col-sm-2">Duración: </label>
					            <div class="col-sm-10">
					               <input type="text" name="range" class="form-control" value="5"><small>Semanas</small>
					            </div>
					         </div>
					         <div class="form-group">
					            <label for="inputparentesco" class="col-sm-2">Tutor: </label>
					            <div class="col-sm-5">
					               <input type="text" name="tutor" class="form-control" value="<?= $nameTutor; ?>">
					            </div>
					            <label for="inputparentesco" class="col-sm-2"># Alumnos Inscritos: </label>
					            <div class="col-sm-3">
					               <input type="text" name="numsts" class="form-control" value="<?php echo $count; ?>">
					            </div>
					         </div>
					         <div class="row" style="border: 1px solid #ccc; border-radius: 2px; margin: 2px 5px;">
						         <p class="text-center text-info">Costos:</p>
						         <div class="col-xs-12 col-sm-6">
						         	<div class="form-group">
							            <label class="col-sm-4">Precio Normal: </label>
							            <div class="col-sm-8">
							               <input type="text" name="normalPrice" class="form-control" value="<?= $rowSt['normal_cost']; ?>">
							            </div>
							         </div>
						         </div>
						         <div class="col-xs-12 col-sm-6">
						         	<div class="form-group">
							            <label class="col-sm-4 control-label">Precio Promocional: </label>
							            <div class="col-sm-8">
							               <input type="text" name="promoPrice" class="form-control" value="<?= $rowSt['promo_cost']; ?>">
							            </div>
							         </div>
						         </div>
						         <div class="clearfix"></div>
						         <div class="col-xs-12 col-sm-6">
						         	<div class="form-group">
							            <label class="col-sm-4">Costo en 2 Pagos de: </label>
							            <div class="col-sm-8">
							               <input type="text" name="discount" class="form-control" value="">
							            </div>
							         </div>
						         </div>
						         <div class="col-xs-12 col-sm-6">
						         	<div class="form-group">
							            <label class="col-sm-4 control-label">Inscripci&oacute;n: </label>
							            <div class="col-sm-8">
							               <input type="text" name="inscription" class="form-control" value="<?= $rowSt['inscription_cost']; ?>">
							            </div>
							         </div>
						         </div>
						         <div class="clearfix"></div>
						         <div class="col-xs-12 col-sm-6">
						         	<div class="form-group">
							            <label class="col-sm-4">Costo por 2 o más alumnos: </label>
							            <div class="col-sm-8">
							               <input type="text" name="cantSts" class="form-control" value="">
							            </div>
							         </div>
						         </div>	
					         </div><br>
					         <div class="form-group">
					            <label for="inputparentesco" class="col-sm-3">Fecha de emisión de contrato: </label>
					            <div class="col-sm-9">
					               <input type="date" name="datedocto" class="form-control" required>
					            </div>
					         </div>
					         <div class="row">
					            <div class="col-sm-3"></div>
					            <div class="col-sm-6">
					              	<input type="submit" value="GENERAR" class="btn btn-primary btn-raised btn-sm" onclick="updateAgreement(<?= $rowSt['id_student']; ?>)"> 
					               <a href="javascript:history.go(-1)" class="btn btn-info btn-raised btn-sm">CANCELAR</a>                             
					            </div>
					            <div class="col-sm-3"></div>
					         </div>
					      </form>
					   </div>
		   			<div class="col-xs-0 col-sm-1"></div>
	   			</div>
		      </div>
	      </div>
	   </div>
	   <div class="col-xs-0 col-sm-1 col-md-1"></div>
	</div>
</div>

<?php  
		} //-- Fin de while->$rowSt
	} // Fin de if->$do
?>