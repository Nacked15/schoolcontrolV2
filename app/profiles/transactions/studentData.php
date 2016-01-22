<?php 
include_once '../../../includes/db_connect.php';
include '../../php/calcularEdad.php'; 
$idAlumno = $_GET['s'];
$idClass = $_GET['c'];
$isHomeStay = ''; $isActa=''; $getIt='';

$query = "SELECT * 
				FROM  student S, academic_info A, sep R, classes C, 
						naatik_course N, groups_nc G, schedule H, scholar B, info_extrast I
					WHERE S.id_student ='$idAlumno' AND
						S.id_student = A.id_student AND
						A.reg_sep = R.id_sep AND
						A.id_classes = '$idClass' AND
						A.id_classes = C.id_class AND
						C.id_course = N.id_course AND
						C.id_group = G.id_group AND
						C.id_schedule = H.id_schedule AND
						S.id_student = B.id_student AND
						S.id_student = I.id_st
						LIMIT 1;";
$res = mysqli_query($db_connect, $query) or die (mysqli_error());
if ($res) {
	while ($row = mysqli_fetch_array($res)){
		$fecha_nac = mes($row['birthday']);
		$dateInit_cuorse = mes($row['date_init']);
		$dateInit_std = mes($row['date_init_s']);
		$fecha_nac = mes($row['birthday']);
		$photo = $row['photo_s'];

		if ($row['togrant'] == 'si') {
			$colorIcon="btn btn-sm btn-info mdi-action-grade";
			$toolInfo = "Becado";
			$request = "Becado";
		} elseif ($row['request'] == 'si' AND $row['togrant'] == 'no') {
			$colorIcon="btn btn-sm btn-success mdi-action-grade";
			$toolInfo = "Solicitante";
			$request = "Quitar solicitud de beca";
			} else{
				$colorIcon="btn btn-sm btn-default mdi-action-grade";
				$toolInfo = "No becado";
				$request = "Solicitar beca";
			}

?>
<a id="edit" href='?menu_ad=viewUpdateSt&idStudent=<?= $row['id_student'];?>&idAcademic=<?= $row['id_info']?>' class='hidden-xs hidden-sm visible-md visible-lg btn btn-info btn-fab btn-raised mdi-content-create' data-toggle='tooltip' data-placement='top' title='Editar'></a>
<div class="col-xs-0 col-sm-5 col-md-3">
	<button class='btn btn-dafult btn-sm mdi-navigation-arrow-back' data-dismiss="modal" data-toggle="popover" data-placement='top' data-trigger="hover" data-content='Volver'></button>
	<ul class="nav navbar-nav navbar-right">
	 	<li role="presentation"><button type="button" data-toggle='tooltip' data-placement='bottom' data-trigger='hover' title='<?= $toolInfo; ?>' class="<?= $colorIcon; ?>"></button></li>
      <li class="dropdown">
         <button href="#" class="dropdown-toggle btn btn-default btn-sm mdi-navigation-more-vert" data-toggle="dropdown" role="button" aria-expanded="false"></button>
         <ul class="dropdown-menu" role="menu">
            <!-- <li><a href="#"><i id="mini" class="mdi-action-stars"></i> <strong>Asignar Beca</strong></a></li> -->
            <?php 
            	$urlStatus = ""; $showMsg = ""; $icon = ""; $urlStat="";$msgStat="";$iconStat="";
            	if ($row['status']=='activo') {
            		$urlStat="app/profiles/transactions/egresadoSt.php?val=".$row['id_student']."";
            		$msgStat = 'Egresado';
            		$iconStat = 'mdi-social-school';
            	} elseif ($row['status']=='egresado') {
            		$urlStat = "app/profiles/transactions/altaSt.php?val=".$row['id_student']."";
            		$msgStat = 'Dar de Alta';
            		$iconStat = "mdi-action-thumb-up";
            	}

            	if ($row['status'] == 'baja') {
            		$urlStatus = "app/profiles/transactions/altaSt.php?val=".$row['id_student']."";
            		$showMsg = "Dar de alta";
            		$icon = "mdi-action-thumb-up";
            		$urlStat="#";
            		$msgStat = 'Egresado';
            		$iconStat = 'mdi-social-school';
            	} else {
            		$urlStatus = "app/profiles/transactions/bajaSt.php?val=".$row['id_student']."";
            		$showMsg = "Dar de baja";
            		$icon = "mdi-action-thumb-down";
            	}

            	if ($row['homestay']==1) { $isHomeStay='Familia HomeStay'; } else { $isHomeStay = '';}
            	if ($row['reg_nacimiento']==0) { 
            		$isActa='Falta Acta de Nacimiento';
            		$getIt ='
							<div class="radio radio-info">
			               <label> Entregado:
			                  <input type="radio" value="1" name="Radio'.$row['id_student'].'" onclick="updateActaNac('.$row['id_student'].');">
			                  <span class="circle"></span>
			                  <span class="check"></span>                                       
			               </label>
			            </div>
            		';


            	} else { $isActa = ''; $getIt='';}
            ?>
            <li><a href="?menu_ad=formularioContrato&idStudent=<?= $row['id_student'];?>"><i id="mini" class="mdi-action-assignment"></i> <strong>Generar Contrato</strong></a></li>
            <li class="visible-xs visible-sm hidden-md hidden-lg"><a href="?menu_ad=viewUpdateSt&idStudent=<?= $row['id_student'];?>&idAcademic=<?= $row['id_info']?>"><i id="mini" class="mdi-content-create"></i> <strong>Editar</strong></a></li>
            <li><a href="app/profiles/transactions/requestGrant.php?&idStudent=<?= $row['id_student'];?>&scholar=<?= $row['togrant'];?>"><i id="mini" class="mdi-action-bookmark"></i> <strong><?php echo $request; ?></strong></a></li>
            <li><a href="<?= $urlStatus; ?>"><i id="mini" class="<?= $icon; ?>"></i> <strong><?= $showMsg; ?></strong></a></li>
            <li><a href="<?= $urlStat; ?>"><i id="mini" class="<?= $iconStat; ?>"></i> <strong><?= $msgStat; ?></strong></a></li>
            <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-conf"><i id="mini" class="mdi-action-highlight-remove id="mini""></i> <strong>Eliminar</strong></a></li>
         </ul>
      </li>
   </ul>
   <img src="img/fotos/student/<?= $photo; ?>" alt="foto" class="img-circle foto-st" width="120" height="120"><br>
   <br><br><br>
	<h3 class="text-center text-primary hidden-xs hidden-sm visible-md visible-lg"><strong>
	<?= $row['name_s']." ".$row['surname1_s']." ".$row['surname2_s'];?>
	</strong>
	</h3>
	<h4 class="text-center text-info"><strong><?= $isHomeStay; ?></strong></h4>
	<h5 class="text-center text-warning"><strong><?= $isActa."<br>".$getIt; ?></strong></h5>
</div>
<div class="col-xs-12 col-sm-7 col-md-9"><br>
	<div class="navbar-example">
		<ul class="nav nav-tabs nav-justified vw" role="tablist" id="myTab">
		  <li role="presentation"><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">Personales</a></li>
		  <li role="presentation"><a href="#academica" aria-controls="academica" role="tab" data-toggle="tab">Academicos</a></li>
		  <li role="presentation"><a href="#naatik" aria-controls="naatik" role="tab" data-toggle="tab">Naatik</a></li>
		</ul>
		<div class="tab-content well">
			<div role="tabpanel" class="row tab-pane fade in active" id="personal">
				<div class="hidden-xs hidden-sm col-md-3"><h5 class="text-primary"><strong>Personales</strong></h5></div>
				<div class="col-xs-12 col-sm-12 col-md-9">
					<br>
					<div class="nav dataStudent">
						<p><label>Nombre: </label> <?= $row['name_s']." ".$row['surname1_s']." ".$row['surname2_s']; ?></p>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
								<p><label>Nacimiento: </label> <?= $fecha_nac; ?></p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
								<p><label>Edad: </label> <?= $row['age']; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
								<p><label>Sexo: </label> <?= $row['sexo']; ?></p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
								<p><label>Edo. Civil: </label> <?= $row['edo_civil']; ?></p>
							</div>
						</div>
						<p><label>Celular: </label> <?= $row['cellphone']; ?></p>
						<p><label>Dirección: </label> <?= $row['address_s']; ?></p>
						<p><label>Referencia: </label> <?= $row['reference']; ?></p>
						<p><label>Padecimientos: </label> <?= $row['sickness']; ?></p>
						<p><label>Tratamiento: </label> <?= $row['medication']; ?></p>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="row tab-pane fade" id="academica">
				<div class="hidden-xs hidden-sm col-md-3">
					<h5 class="text-primary"><strong>Academicos</strong></h5>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-9">
					<br>
					<p><label>Ocupación: </label> <?= $row['ocupation']; ?></p>
					<p><label>Trabaje en: </label> <?= $row['workplace']; ?></p>
					<p><label>Estudios máximos: </label> <?= $row['studies']; ?></p>
					<p><label>Último grado: </label> <?= $row['level']; ?></p>
					<p><label>Cursos anteriores: </label> <?= $row['prev_course']; ?></p>
					<p><label>Inscrito en la SEP: </label> <?= $row['issep']; ?></p>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="naatik">
				<div class="row">
					<div class="hidden-xs hidden-sm col-md-3">
						<h5 class="text-primary"><strong>Curso en Na'atik</strong></h5>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9">
						<br>
						<div class="row">
							<div class="col-sm-6">
								<p><label>Curso: </label> <?= $row['course']; ?></p>
							</div>
							<div class="col-sm-6">
								<p><label>Grupo: </label> <?= $row['group']; ?></p>
							</div>
						</div>
						<p><label>Fecha Inicio del curso: </label> <?= $dateInit_cuorse; ?></p>
						<p><label>Fecha Inicio Alumno: </label> <?= $dateInit_std; ?></p>
						<p><label>Periodo: </label> <?= $row['year']; ?></p>
						<p><label>Dias: </label> <?= $row['days']; ?></p>
						<p><label>Horario: </label> <?= $row['hour_init']." - ".$row['hour_end']; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="hidden-xs hidden-sm col-md-3">
						<h5 class="text-primary"><strong>Beca</strong></h5>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9">
						<br>
						<p><label>Becado?: </label> <?= $row['togrant']; ?></p>
						<p><label>Candidato a beca: </label> <?= $row['request']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-conf" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center text-warning" id="myModalLabel"><strong><i class="mdi-action-delete"></i> ELIMINAR ALUMNO</strong></h4>
         </div>
         <div class="modal-body dummi">
            <p class="text-center text-info text-primary-color"><i class="mdi-alert-warning"></i> Eliminara a este alumno de manera permanente. <br>
            <strong>¿Desea continuar con esta acción?</strong></p>
         </div>
         <div class="modal-footer dummi">
         	<a href="app/profiles/transactions/deleteStudent.php?valX=<?= $row['id_student']; ?>&valY=<?= $row['id_tutor']; ?>" class="btn btn-danger btn-raised btn-sm">ELIMINAR</a>
            <button class="btn btn-info btn-raised btn-sm" data-dismiss="modal">CANCELAR</button>                            
         </div>
      </div>
   </div>
</div>

<?php 
	}
}

mysqli_close($db_connect);
?>


