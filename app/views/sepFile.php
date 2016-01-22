<?php 
$datos = $_POST['allData'];
$curso = $_POST['curso'];
$fechaIni = $_POST['fechaIni'];
$fechaFin = $_POST['fechaFin']; 
$duracion = $_POST['duracion'];
$horario = $_POST['horario'];
$fechaHoy = $_POST['fechaHoy'];

?>
<a style="position:fixed;right:100px;" href="javascript:history.go(-2)" data-toggle='tooltip' data-placement='right' data-trigger='hover' title='Volver' class="btn btn-fab btn-info mdi-navigation-arrow-back"></a>
<a id="print" href="#" class="label label-primary">IMPRIMIR <span class="glyphicon glyphicon-print"></span></a>
<div id="paper" class="container-fluid well" style="padding: 2px 5px 40px 5px;">
<!-- Cabecera Principal -->
<section id="seccionUno">
	<table class="table" style="margin-bottom:0px;">
		<tbody>
			<tr>
				<td id="cabecera1" style="margin-bottom: 5px; padding: 0px 0px 0px 10px; border-top: 0px !important;"><img src="images/riap-logo.png" alt="logo"></td>
				<td id="cabecera2" style="margin-bottom: 5px; padding: 0px 5px; border-top: 0px !important;">
					<p class="text-center" style="margin: 0px 0px 1px !important; font-size: 10px; font-weight:bold;">
						SUBSECRETARÍA DE EDUCACIÓN MEDIA SUPERIOR <br>
						DIRECCIÓN GENERAL DE CENTROS DE FORMACIÓN PARA EL TRABAJO <br>
						DIRECCIÓN TÉCNICA <br>
						SUBDIRECCIÓN DE VINCULACIÓN Y APOYO ACADÉMICO <br>
						REGISTRO DE INSCRIPCIÓN Y ACREDITACIÓN <br>
						(RIAP-02)
					</p>
				</td>
				<td id="cabecera3" style="border-top:0px;"><?php for($ws=1; $ws<=60; $ws++) {echo "&nbsp;";} ?></td>
			</tr>
		</tbody>
	</table>
</section>
<section>
	<table class="table" style="max-width=100%; margin-bottom: 3px; padding:0px 4px;">
		<tbody>
			<tr>
				<td style="font-size:11px; padding: 1px 4px !important; border-left: 1px solid #ddd;"><small>SUBDIRECCION/ ASISTENCIA: QUINTANA ROO&nbsp;&nbsp;&nbsp;&nbsp;</small></td>
				<td style="text-align: center;font-size:11px; padding: 1px 4px !important;"><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLANTEL PARTICULAR: NA´ATIK S.C.</small></td>
				<td style="text-align: center;font-size:11px; padding: 1px 4px !important;"><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CLAVE CCT: 23PBT0090G</small></td>
				<td style="text-align: center;font-size:11px; padding: 1px 4px !important; border-right: 1px solid #ddd;"></td>
			</tr>
			<tr>
				<td style="font-size:11px; padding: 1px 4px !important; border-top: 0px;  border-left: 1px solid #ddd;"><small>CURSO / ESPECIALIDAD: INGLES</small></td>
				<td style="text-align: center;font-size:11px; padding: 1px 4px !important; border-top: 0px; "></td>
				<td style="text-align: center;font-size:11px; padding: 1px 4px !important; border-top: 0px; "><small>GRUPO: <?= $curso; ?></small></td>
				<td style="text-align: center;font-size:11px; padding: 1px 4px !important; border-top: 0px;  border-right: 1px solid #ddd;"><small>FECHA: <?= $fechaHoy; ?></small></td>
			</tr>
			<tr>
				<td style="font-size:11px; padding: 1px 4px !important; border-top: 0px; border-bottom: 1px solid #ddd; border-left: 1px solid #ddd;"><small>FECHA DE INICIO: <?= $fechaIni; ?></small></td>
				<td style="text-align: center;font-size:11px; padding: 1px 4px !important; border-top: 0px; border-bottom: 1px solid #ddd;"><small>FECHA DE TÉRMINO: <?= $fechaFin; ?></small></td>
				<td style="text-align: center;font-size:11px; padding: 1px 4px !important; border-top: 0px; border-bottom: 1px solid #ddd;"><small>DURACIÓN EN HRS: <?= $duracion; ?></small></td>
				<td style="text-align: center;font-size:11px; padding: 1px 4px !important; border-top: 0px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;"><small>HORARIO: <?= $horario; ?></small></td>
			</tr>
		</tbody>
	</table>
</section>
<section>
	<table class="table" style="margin-bottom: 0px;">
		<body>
			<tr>
				<td style=" border-right: 1px solid #ccc; border-left: 1px solid #ccc; border-bottom:0px; padding: 1px; text-align:center; font-size:10px;font-weight:bold;text-align:center;x; width:52% !important;">INSCRIPCIÓN</td>
				<td style=" border-right: 1px solid #ccc; border-left: 0px; border-bottom:0px; padding: 1px; text-align:center; font-size:10px;font-weight:bold;text-align:center;x; width:48% !important;">ACREDITACIÓN</td>
			</tr>
			<tr>
				<td style="padding:0px; border-top: 0px; border-right:1px solid #ccc;">
					<table id="celdasuno" class="table" style="margin-bottom:0px;">
						<tbody>
							<tr>
								<td style="border:1px solid #ddd; font-size: 10px; padding: 10px 2px 2px 4px;text-align:center;">&nbsp;&nbsp;N<br>&nbsp;&nbsp;U&nbsp;<br>&nbsp;&nbsp;M&nbsp;<br></td>
								<td style="border:1px solid #ddd; font-size: 10px; padding: 10px 2px 2px 4px; text-align:center;">NUMERO <br> DE <br> CONTROL</td>
								<td style="border:1px solid #ddd; font-size: 10px; padding: 10px 2px 2px 4px;text-align:center;" nowrap="true">NOMBRE DEL ALUMNO<br> <small>PRIMER APELLIDO/SEGUNDO APELLIDO*NOMBRE(S)</small></td>
								<td style="border:1px solid #ddd; font-size: 10px; padding: 10px 2px 2px 4px;text-align:center;">EDAD</td>
								<td style="border:1px solid #ddd; font-size: 10px; padding: 10px 2px 2px 4px;text-align:center;">SEXO</td>
								<td style="border:1px solid #ddd; font-size: 10px; padding: 10px 2px 2px 4px;text-align:center;">ESCOLARIDAD</td>
								<td style="border-right:0px;border-bottom:1px solid #ddd;border-left:1px solid #ddd; font-size: 10px; padding: 10px 2px 2px 4px;text-align:center;">BECA <br> %</td>
							</tr>
							<?php for ($i=1; $i <=20 ; $i++) { 
								echo "<tr>".celdas($i,$datos)."</tr>";
								}
							?>
						</tbody>
					</table>
				</td>
				<td style="padding: 0px; border-top:0px; border-left: 1px solid #ddd; border-right:1px solid #ccc;">
					<table id="celdasuno" class="table" style="margin-bottom:0px;">
						<tbody>
							<tr>
								<td style="padding:0px; border-right: 1px solid #fff; border-top: 0px;">
									<table class="table" style="margin-bottom:0px;">
										<tbody>
											<tr>
												<td style="padding:0px; border-top:0px;">
													<table class="table" style="margin-bottom:0px">
														<tbody>
															<tr>
																<td style="border-right:1px solid #ccc;padding:0px;"><p style="border-top:0px; text-align: center; margin-bottom: 0px; font-size:10px;">NOMBRE DE LA MATERIA</p></td>
															</tr>
															<tr>
																<td style="border-right:1px solid #ccc;padding:0px; border-top:0px;">
																	<table class="table" style="margin-bottom: 0px;">
																		<tbody>
																			<tr>
																				<td style="border-top: 1px solid #ccc; border-bottom:1px solid #eee; border-right: 1px solid #ccc; border-left: 0px; font-size:8px; padding: 0px; text-align:center;">INGLES</td>
																				<td style="border-top: 1px solid #ccc; border-bottom:1px solid #eee; border-right: 1px solid #ccc; border-left: 1px solid #bbb; font-size:10px; padding: 0px 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
																				<td style="border-top: 1px solid #ccc; border-bottom:1px solid #eee; border-right: 1px solid #ccc; border-left: 1px solid #bbb; font-size:10px; padding: 0px 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
																				<td style="border-top: 1px solid #ccc; border-bottom:1px solid #eee; border-right: 1px solid #ccc; border-left: 1px solid #bbb; font-size:10px; padding: 0px 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
																				<td style="border-top: 1px solid #ccc; border-bottom:1px solid #eee; border-right: 1px solid #ccc; border-left: 1px solid #bbb; font-size:10px; padding: 0px 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
																				<td style="border-top: 1px solid #ccc; border-bottom:1px solid #eee; border-right: 1px solid #ccc; border-left: 1px solid #bbb; font-size:10px; padding: 0px 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
																				<td style="border-top: 1px solid #ccc; border-bottom:1px solid #eee; border-right: 1px solid #ccc; border-left: 1px solid #bbb; font-size:10px; padding: 0px 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
																				<td style="border-top: 1px solid #ccc; border-bottom:1px solid #eee; border-right: 1px solid #ccc; border-left: 1px solid #bbb; font-size:10px; padding: 0px 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
																				<td style="border-top: 1px solid #ccc; border-bottom:1px solid #eee; border-right: 1px solid #ccc; border-left: 1px solid #bbb; font-size:10px; padding: 0px 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
																				<td style="border-top: 1px solid #ccc; border-bottom:1px solid #eee; border-right: 0px; border-left: 1px solid #bbb; font-size:10px; padding: 0px 1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
															<tr>
																<td style="border-right:1px solid #ccc;padding: 0px; font-size:6px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
															</tr>
															<tr>
																<td style="border-right:1px solid #ccc;padding: 0px; border-top:1px solid #ddd;">
																	<table class="table" style="margin-bottom:0px;">
																		<tbody>
																			<tr>
																				<td style="border-top: 0px;border-bottom: 0px;border-left: 0px; text-align: center; font-size:10px; padding: 0px 1px;">EVALUACIONES</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
															<tr>
																<td style="padding:0px; border-top: 0px; border-right:1px solid #ccc;">
																	<table class="table" style="margin-bottom:0px;">
																		<tbody>
																			<?php for ($f=1; $f <= 20; $f++) { 
																				echo "<tr>".celdasdos($f,$datos)."</tr>";
																			} ?>																
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
												<td style="padding:0px; border-top:0px;">
													<table class="table" style="margin-bottom:0px;">
														<tbody>
															<tr>
																<td style="padding:0px; font-size:11px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
															</tr>
															<tr>
																<td style="border-top:0px; padding:0px; font-size:9px;text-align:center">RESULTADO</td>
															</tr>
															<tr>
																<td style="border-top:0px; padding:0px; font-size:9px;text-align:center">FINAL</td>
															</tr>
															<tr>
																<td style="border-top:0px; padding:0px; font-size:11px; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
															</tr>
															<tr>
																<td style="padding:0px; border-top:0px;">
																	<table class="table" style="margin-bottom:0px;">
																		<tbody>
																			<?php 
																					list($nums,$noms,$eds,$genrs,$estuds,$calf,$bcas) = explode(",", $datos);
																					$cali = explode("-", $calf);
																					for($m=1; $m<=20; $m++){
																						if ($m<=count($cali)) {
																							echo "<tr><td style='padding:2px; font-size:11px; text-align:center;'>".$cali[$m-1]."</td></tr>";
																						}	elseif ($m==20) {
																							echo "<tr><td style='padding:2px; border-bottom: 1px solid #ccc; font-size:11px;text-align:center;'>&nbsp;&nbsp;&nbsp;</td></tr>";
																						} else {
																							echo "<tr><td style='padding:2px; font-size:11px; text-align:center;'>&nbsp;&nbsp;&nbsp;</td></tr>";
																						}
																					}
																			?>
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>			
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</body>
	</table>
</section>

<section>
	<table class="table" style="margin-bottom:0px; margin-top:4px;">
		<tbody>
			<tr>
				<td style="padding:0px; border: 1px solid #ccc;">
					<table class="table" style="margin-bottom:0px;">
						<tbody>
							<tr><td style="padding:0px 0px 4px 0px; text-align:center; font-size:9px; font-weight:bold; border-top:0px;">INSCRIPCI&Oacute;N</td></tr>
							<tr>
								<td style="padding:0px; border-top:0px;">
									<table class="table" style="margin-bottom:0px;">
										<tbody>
											<tr>
												<td style="border-top:0px;padding:2px;font-size:9px;text-align:center;"><br>CATHERINE ANN GRAY <br>NOMBRE Y FIRMA DEL DIRECTOR</td>
												<td style="border-top:0px;padding:2px;font-size:9px;text-align:center;"><br>|_____________| <br>SELLO</td>
												<td style="border-top:0px;padding:2px;font-size:9px;text-align:center">ROBERTO TORRECILLA JOACHIN <br>NOMBRE Y FIRMA DEL <br> SUBDIRECTOR/ASISTENTE</td>
												<td style="border-top:0px;padding:2px;font-size:9px;text-align:center;"><br>|_____________| <br>SELLO</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
				<td style="padding:0px; border: 1px solid #bbb;">
					<table class="table" style="margin-bottom:0px;">
						<tbody>
							<tr><td style="padding:0px 0px 4px 0px; text-align:center; font-size:9px; font-weight:bold; border-top:0px;">ACREDITACI&Oacute;N/CERTIFICACI&Oacute;N</td></tr>
							<tr>
								<td style="padding:0px; border-top:0px;">
									<table class="table" style="margin-bottom:0px;">
										<tbody>
											<tr>
												<td style="border-top:0px;padding:2px;font-size:9px;text-align:center;"><br>CATHERINE ANN GRAY <br>NOMBRE Y FIRMA DEL DIRECTOR</td>
												<td style="border-top:0px;padding:2px;font-size:9px;text-align:center;"><br>|_____________| <br>SELLO</td>
												<td style="border-top:0px;padding:2px;font-size:9px;text-align:center">ROBERTO TORRECILLA JOACHIN <br>NOMBRE Y FIRMA DEL <br> SUBDIRECTOR/ASISTENTE</td>
												<td style="border-top:0px;padding:2px;font-size:9px;text-align:center;"><br>|_____________| <br>SELLO</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</section>
</div>

<?php  
 function celdas($x,$datas){
 	list($numeros,$nombres,$edades,$generos,$estudios,$calific,$becas) = explode(",", $datas);
	$controls = explode('-', $numeros);
	$namesSt = explode('-', $nombres);
	$agesSt = explode('-', $edades);
	$genresSt = explode('-', $generos);
	$studiesSt = explode('-', $estudios);
	$notes = explode("-", $calific); 
	$toGrants = explode("-", $becas);

 	for ($i=1; $i <=7 ; $i++) {
 		if ($i==1) {
 			echo "<td style='text-align:center;font-size:11px; border: 1px solid #ccc; padding: 2px'>".$x."</td>";
 		} else if ($i==2) {
 			//==Agrega los numeros de control.
 			if ($x<=count($controls)) {
 				echo "<td style='text-align:center;font-size:11px; border: 1px solid #ccc; padding: 2px'>".$controls[$x-1]."</td>";
		 	}else{ echo "<td style='text-align:center;font-size:11px; border: 1px solid #ccc; padding: 2px'></td>";}
 			
 		} else if ($i==3){
 			//==Agrega los nombre de cada uno de los alumnos en su respectiva fila.
 			if ($x<=count($namesSt)) {
 				echo "<td style='font-size:11px; border: 1px solid #ccc; padding: 2px'>".$namesSt[$x-1]."</td>";
		 	}else{ echo "<td style='text-align:center;font-size:11px; border: 1px solid #ccc; padding: 2px'></td>";}

		}else if ($i==4){
 			//== Agrega las edades
 			if ($x<=count($agesSt)) {
 				echo "<td style='text-align:center;font-size:11px; border: 1px solid #ccc; padding: 2px'>".$agesSt[$x-1]."</td>";
		 	}else{ echo "<td style='text-align:center;font-size:11px; border: 1px solid #ccc; padding: 2px'></td>";}
 		
 		} else if ($i==5){
 			//Agrega los generos
		 	if ($x<=count($genresSt)) {
		 		echo "<td style='text-align:center;font-size:11px; border: 1px solid #ccc; padding: 2px'>".$genresSt[$x-1]."</td>";
		 	}else { echo "<td style='text-align:center;font-size:11px; border: 1px solid #ccc; padding: 2px'></td>";}
 		
 		} else if ($i==6){
 			//Agrega los estudios del los alumnos
		 	if ($x<=count($studiesSt)) {
		 		echo "<td style='text-align:center;font-size:11px; border: 1px solid #ccc; padding: 2px'>".$studiesSt[$x-1]."</td>";
		 	} else { echo "<td style='text-align:center;font-size:11px; border: 1px solid #ccc; padding: 2px'></td>";}
 			
 		} else if ($i==7){
 			if ($x<=count($notes)) {
 				echo "<td style='text-align:center;font-size:11px; border-top: 1px solid #ccc;border-right: 1px solid #eee;border-bottom: 1px solid #ccc;border-left: 1px solid #ccc; padding: 2px'>".$toGrants[$x-1]."%</td>";
		 	} else { echo "<td style='text-align:center;font-size:11px; border-top: 1px solid #ccc;border-right: 1px solid #eee;border-bottom: 1px solid #ccc;border-left: 1px solid #ccc; padding: 2px'></td>";}
 			
 		}
   	
 	}
 }
 function celdasdos($y,$datas) {
 	list($numeros,$nombres,$edades,$generos,$estudios,$calific,$becas) = explode(",", $datas);
	$notes = explode("-", $calific);

 	for ($c=1; $c <=10; $c++) {

 		if ($c==1) {
 			if ($y<=count($notes)) {
 				echo "<td style='text-align:center; font-size:11px; border-left: 0px;border-right: 0px;border-bottom: 1px solid #ddd; padding: 2px'>".$notes[$y-1]."</td>";
 			} else {
 				echo "<td style='text-align:center; font-size:11px; border-left: 0px;border-right: 0px;border-bottom: 1px solid #ddd; padding: 2px'></td>";
 			}
 			
 		} else {
	 		if ($c==10) {
	 			echo "<td style='font-size:11px; border-left: 0px;border-right: 0px;border-bottom: 1px solid #ddd; padding: 2px'>&nbsp;&nbsp;&nbsp;</td>";
	 		} elseif($c==2) {
	 			echo "<td style='font-size:11px; border-left: 1px solid #ccc;border-right: 1px solid #ccc;border-bottom: 1px solid #ddd; padding: 2px'>&nbsp;&nbsp;&nbsp;</td>";
	 		}else{
	 			echo "<td style='font-size:11px; border-left: 0px;border-right: 1px solid #ccc;border-bottom: 1px solid #ddd; padding: 2px'>&nbsp;&nbsp;&nbsp;</td>";	
	 		}
 		}		
 	}
 }
?>