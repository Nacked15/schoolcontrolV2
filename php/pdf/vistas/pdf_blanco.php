<?php
	//Obtenemos los valores de los formularios
	include '../../app/php/calcularEdad.php';
	$alumno = $_POST["alumno"]; 
	$curso = $_POST["curso"];
	$fechainit= $_POST["dateinit"];
	$duracion = $_POST["range"];
	$tutor = $_POST["tutor"];
	$cuantos = $_POST["numsts"];
	$fechaContrato = mes($_POST["datedocto"]);
	$precioNormal = $_POST['normalPrice'];
	$precioPromo = $_POST['promoPrice'];
	$descuento = $_POST['discount'];
	$porCantidad = $_POST['cantSts'];
	$inscripcion =$_POST['inscription'];
	$dias = ''; $cantSts=''; $dospagos = ''; $segunCantidad = '';

	if ($cuantos <= 1) { $cantSts = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';} else {$cantSts = strtoupper($cuantos);}
	if ($descuento == '') { $dospagos = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; } else { $dospagos = $descuento;}
	if ($porCantidad == '') { $segunCantidad = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; } else { $segunCantidad=$porCantidad;}

	$days = explode("-", $_POST["days"]);
	if ($days != '') {
		foreach ($days as $dia) {
			if ($dias == '') {
				$dias = $dia;
			} else {
				$dias = $dias." - ".$dia;
			}
		}
	}

	list($horaIn, $minutIn, $secIn) = explode(":", $_POST["timeinit"]);
	list($horaOut, $minutOut, $secOut) = explode(":", $_POST["timeend"]);
	$horaEntrada = $horaIn.":".$minutIn;
	$horaSalida = $horaOut.":".$minutOut;
	$horario = $horaEntrada." - ".$horaSalida." hrs.";
	
?>
<!-- IMPORTANTE: El contenido de la etiqueta style debe estar entre comentarios de HTML -->
<style>
	<!--
	#encabezado {padding:5px 0; border-bottom: 1px solid; width:100%;}
	#encabezado .fila #col_1 {width: 15%}
	#encabezado .fila #col_2 {text-align:center; width: 70%}
	#encabezado .fila #col_3 {width: 15%}

	#encabezado .fila td img {width:50%}
	#encabezado .fila #col_2 #span1{font-size: 16px;}
	#encabezado .fila #col_2 #span2{font-size: 12px;}

	#footer {padding-top:2px 0; border-top: 1px solid #46d; width:100%;}
	#footer .fila td {text-align:center; width:100%;}
	#footer .fila td span {font-size: 10px; color: #000;}

	#firmas {margin-bottom:70px; width:100%;}
	#firmas tr.fila td#firma1 { width:30%; text-align: center; border-bottom: 1px solid #000; height: 30px;}
	#firmas tr.fila td#firma2 { width:30%; text-align: center; border-bottom: 1px solid #000; height: 30px;}
	#firmas tr.fila td#firma3 { width:30%; text-align: center; border-bottom: 1px solid #000; height: 30px;}
	#firmas tr.fila td#firma4 { width:30%; text-align: center; font-weight: bold;}
	#firmas tr.fila td#firma5 { width:30%; text-align: center; font-weight: bold;}
	#firmas tr.fila td#firma6 { width:30%; text-align: center; font-weight: bold;}
	#firmas tr.fila td#space  { width:5%; text-align: center;}

	#central {margin-top:20px; width:100%;}
	#central p.tituloconvenio { font-size: 14px; text-align:center; font-weight: bold;}
	#central p label.clausulas { text-align:center; font-weight: bold;}
	#central p { font-size: 11px;}
	#central p small { font-size: 13px;}
	#central p span#acuerdo { text-indent: 1cm;}
	#central p label#terminos { font-size: 12px; font-weight: bold;}
	#central tr td {padding: 10px; text-align: justify; width:100%;}

	#datos {border:1px solid; margin-left:180px; width:50%;}
	#datos tr {border:1px solid;}
	#datos tr td{border:1px solid;}
	-->
</style>

<!-- page define la hoja con los márgenes señalados -->
<page backtop="10mm" backbottom="10mm" backleft="10mm" backright="20mm">
   <page_header> <!-- Define el header de la hoja -->
		<table id="encabezado">
         <tr class="fila">
            <td id="col_1" >
					<img src="../../images/naatikIcon.jpg">
				</td>
            <td id="col_2">
					<span id="span1">NA'ATIK S. C.</span>
					<br>
					<span id="span2">"NA'ATIK TE ABRE LAS PUERTAS AL MUNDO"</span>
					<br>
					<span id="span3"><small>Calle 57 entre 78 y 80, Col. Francisco May - Felipe Carrillo Puerto, Quintana Roo</small></span>
					<br>
					<span id="span4"><small>Teléfonos: Esc. 2 67 1410 Cel Directora. 983-700-7248, Lic. Catherine Gray, Directora</small></span>
				</td>
            <td id="col_3">
				</td>
         </tr>
      </table>
   </page_header>
    
	<table id="central">
		<tr class="fila">
			<td>
				<p class="tituloconvenio">C O N V E N I O</p>

				<p>CONVENIO DE INSCRIPCIÓN &nbsp;A CURSO DE INGLÉS &nbsp;QUE &nbsp;CELEBRAN POR &nbsp;UNA PARTE <u> "NA'ATIK" </u> Y &nbsp;EL &nbsp;ALUMNO
				<u> <?php echo strtoupper($alumno); ?> </u> POR CONSIGUIENTE AMBAS PARTES ACUERDAN SOMETERSE AL TENOR DE LAS SIGUIENTES: </p>

				<p class="tituloconvenio">- - - - - - - -   C L Á U S U L A S   - - - - - - - -</p>

				<p><label id="terminos"><u>PRIMERA</u>:</label> LA INSCRIPCIÓN SERÁ PARA ASISTIR A LAS CLASES DE <u><?php echo strtoupper($curso); ?></u> CON INICIO EL
				DÍA <u> MARTES </u> <u>25</u> DEL MES DE <u> AGOSTO </u> DEL AÑO <u> 2015 </u> EN HORARIO DE <u> <?php echo strtoupper($horario);?> </u> LOS DÍAS
				<u><?php echo strtoupper($dias); ?> </u> CON UNA DURACION DE <u> <?php echo strtoupper($duracion); ?> </u> SEMANAS, LAS CLASES SE IMPARTIRÁN EN LAS INSTALACIONES DE <u> Na'atik </u>
				DE <u> Felipe Carrillo Puerto</u>. <br><br>

				<label id="terminos"><u>SEGUNDA</u>:</label>EL INSTITUTO SE COMPROMETE A PROPORCIONAR AL ALUMNO LAS CONDICIONES NECESARIAS PARA FAVORECER EL ADECUADO
				DESARROLLO DEL PROCESO ENSEÑANZA-APRENDIZAJE, DESTINANDO PARA ELLO INSTALACIONES Y PERSONAL A FIN A LOS PROPÓSITOS DE CADA CURSO. <br><br>

				<label id="terminos"><u>TERCERA</u>:</label>SERÁ COMPROMISO DEL INSTITUTO EMITIR PERIODICAMENTE LAS CALIFICACIONES DE LOS MÓDULOS QUE EL ALUMNOVAYA CURSANDO; ASÍ COMO MANTENER INFORMADO AL TUTOR
				DE LA CONDUCTA, SITUACIÓN ACADÉMICA Y ECONOMICA DEL EDUCANDO. <br><br>

				<label id="terminos"><u>CUARTA</u>:</label> EL INSTITUTO SE RESERVA EL DERECHO DE ADMISIÓN, QUEDANDO RESTRINGIDO EL USO DE EQUIPO Y ACCESO A LAS INSTALACIONES A TODA
				PERSONA QUE NO ACREDITE SU IDENTIDAD CON CREDENCIAL DE ESTE PLANTEL O CUANDO EL ALUMNO TENGA COMPROMISOS ECONÓMICOS
				PENDIENTES POR CUBRIR. <br><br>

				<label id="terminos"><u>QUINTA</u>:</label>EL ALUMNO SE COMPROMETE A RESPETAR Y HACER RESPETAR EL REGLAMENTO INTERNO DEL INSTITUTO, Y POR CONSIGUIENTE ESTAR
				DE LAS FUSIONES DE GRUPO Y POSIBLES CAMBIOS DE HORARIO CUANDO EL NÚMERO DE ALUMNOS SEA REDUCIDO (MENOS DE SEIS ALUMNOS). <br><br>
				
				<label id="terminos"><u>SEXTA</u>:</label>EL INSTITUTO RESPETARÁ LOS DÍAS DE SUSPENSIÓN DE LABORES MARCADOS EN EL CALENDARIO ESCOLAR DE LA SEP. <br><br>

				<label id="terminos"><u>SÉPTIMA</u>:</label>SERÁ RESPONSABILIDAD DEL ALUMNO EFECTUAR OPORTUNAMENTE LA TOTALIDAD DEL PAGO DE SUS COLEGIATURAS AUNQUE ÉL NO HAYA
				ASISTIDO A LAS CLASES O QUE LAS CÁTEDRAS SEAN AFECTADAS POR EVENTUALIDADES AJENAS AL INSTITUTO, COMO EL CASO DE HURACANES, INTERRUPCIONES DE ENERGÍA ELÉCTRICA U
				OTRO QUE PUDIERA PRESENTARSE. ACLARÁNDOSE QUE PARA SUBSANAR TAL SITUACIÓN, EL INSTITUTO PLANIFICARÁ LA RECUPERACIÓN DE LAS CLASES BAJO NOTIFICACIÓN PREVIA AL TUTOR. <br><br>

				<label id="terminos"><u>OCTAVA</u>:</label>SE ESTABLECE QUE LOS IMPORTES PACTADOS PARA LAS COLEGIATURAS EN ESTE CONVENIO SEGÚN EL PROGRAMA EDUCATIVO SON 
				DE: $<u> <?= $precioNormal;?> </u> CADA <u>4 </u> SEMANAS. SI SE PAGA AL CONTADO CADA 29 AL 06 DE CADA MES ADELANTANDO LA COLEGIATURA SERA: <u> <?= $precioPromo; ?> </u>, DE LO
				CONTRARIO SERA EN 2 PAGOS DE $<u><?= $dospagos; ?></u>. CONSIDERANDO EN EL CASO DE DOS O MAS DE LA MISMA FAMILIA, SERA DE $<u><?= $segunCantidad; ?> </u> POR LOS <u><?= $cantSts; ?> </u> 
				ALUMNOS. INSCRIPCIÓN $<u><?= $inscripcion; ?>.00 </u> <small>(La inscripción se pagará una sola vez siempre y cuando el alumno sea regular o deje de asistir al instituto para luego regresar en un
				rango menor a 6 meses)</small>. <br><br>

				<label id="terminos"><u>NOVENA</u>:</label>EL INSTITUTO ÚNICAMENTE PROPORCIONARÁ COPIAS ADICIONALES AL TEXTO Y EQUIPOS BÁSICOS CORRESPONDIENTES. EL ALUMNON ES
				RESPONSABLE POR SU TEXTO O COPIAS DE LO MISMO QUE USARA PARA LLEVAR A CABO SU CURSO. <br><br>

				<label id="terminos"><u>DÉCIMA</u>:</label>PARA EL ÓPTIMO APROVECHAMIENTO DE LAS CLASES DE INGLÉS SERÁ COMPROMISO DEL ALUMNO TRAER A LA PERSONA QUE SERVIRÁ DE
				MODELO PARA LA PRÁCTICA DE LA CLASE EN CUESTIÓN, EN CASO CONTRARIO, EL INSTITUTO NO SE HACE RESPONSABLE DE LA ADECUADA
				CAPACITACIÓN DEL ALUMNO NO OBTENIENDO CON ELLO EL PUNTAJE RESPECTIVO DE CALIFICACIÓN. <br><br>
				
				<label id="terminos"><u>DÉCIMA PRIMERA</u>:</label>EL ALUMNO ESTARÁ CONSCIENTE EN CUBRIR LOS GASTOS QUE SE DERIVEN DE PRÁCTICAS FUERA DE LA INSTITUCIÓN, COMO
				ACTIVIDAD PLANIFICADA PREVIAMENTE BAJO ACUERDO DE GRUPO. <br><br>

				<label id="terminos"><u>DÉCIMA PRIMERA</u>:</label>EL ALUMNO ESTARÁ CONSCIENTE EN CUBRIR LOS GASTOS QUE SE DERIVEN DE PRÁCTICAS FUERA DE LA INSTITUCIÓN, COMO
				ACTIVIDAD PLANIFICADA PREVIAMENTE BAJO ACUERDO DE GRUPO. <br><br>

				<label id="terminos"><u>DÉCIMA SEGUNDA</u>:</label>PARA QUE EL INSTITUTO PUEDA ENTREGAR DOCUMENTACIÓN OFICIAL AL EGRESADO(A) ÉSTE NO DEBERÁ TENER ADEUDO 
				ACADÉMICO NI ECONÓMICO CON LA INSTITUCIÓN. <br><br>

				<span id="acuerdo">DESPÚES DE HABER DADO LECTURA A ESTE DOCUMENTO Y DECLARAR ESTAR DE ACUERDO EN PROCEDER A LA INSCRIPCIÓN DEL
				SOLICITANTE, ÉSTE SE COMPROMETE A CUMPLIR Y HACER CUMPLIR LO DESCRITO EN EL CONVENIO Y EL PADRE O TUTOR ACEPTA
				RESPONSABILIZARSE DE LA BUENA CONDUCTA Y DEL OPORTUNO CUMPLIMIENTO DE LAS OBLIGACIONES QUE SE CONTRAEN COMO ALUMNO DE
				ESTE INSTITUTO. Y CON LA FINALIDAD DE DAR DEBIDA CONSTANCIA Y SEGURIDAD A AMBAS PARTES SE FIRMA LA PRESENTE 
				EN LA FECHA <?= $fechaContrato;?></span></p>
			</td>
		</tr>
	</table>
    <!-- Fin del cuerpo de la hoja -->
   <!-- Define el cuerpo de la hoja -->
   <table id="firmas">
   	<tr class="fila">
			<td id="firma4">
				Solicitante:
			</td>
			<td id="space"></td>
			<td id="firma5">
				Tutor:
			</td>
			<td id="space"></td>
			<td id="firma6">
				Escuela:
			</td>
		</tr>
		<tr class="fila">
			<td id="firma1">
			</td>
			<td id="space"></td>
			<td id="firma2">
				<?php echo $tutor; ?>
			</td>
			<td id="space"></td>
			<td id="firma3">
			</td>
		</tr>
	</table>

</page>
