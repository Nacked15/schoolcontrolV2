<?php
	//Obtenemos los valores de los formularios
	// $alumno = $_POST["alumno"]; 
	// $curso = $_POST["curso"];
	// $fechainit= $_POST["dateinit"];
	// $horario = $_POST["timeinit"]." - ".$_POST['timeend'];
	// $dias = $_POST["days"];
	// $duracion = $_POST["range"];
	// $tutor = $_POST["tutor"];
	// $cantSts = $_POST["numsts"];
	// $fechaContrato = $_POST["datedocto"];
	
?>
<!-- IMPORTANTE: El contenido de la etiqueta style debe estar entre comentarios de HTML -->
<style>
	<!--
	#encabezado {width: 100%;}
	#encabezado tr.fila td#col_1   { width: 45%;}
	#encabezado tr.fila td#spacing { width: 5%;}
	#encabezado tr.fila td#col_2   { width: 40%; text-align:center;}

	#encabezado .fila td img {width:68%}
	#encabezado .fila #col_2 #span2{font-size: 12px;}

	#footer {padding-top:2px 0; border-top: 1px solid #46d; width:100%;}
	#footer .fila td {text-align:center; width:100%;}
	#footer .fila td span {font-size: 10px; color: #000;}


	#centralhead { border-spacing: 0px; width: 100%; margin-top: 75px; border:1px solid #000;}
	#centralhead tr td span#txthead {font-size: 10px;}

	#central { width: 100%; margin: 0px;}
	#central tr td#cabecera1 { width: 50%; border: 1px solid #000; text-align: center;}
	#central tr td#cabecera2 { width: 50%; border: 1px solid #000; text-align: center;}
	#central tr td#etiqueta1 { border:1px solid #000;}
	-->
</style>
<link rel="stylesheet" href="../../css/bootstrap.min.css">

<!-- page define la hoja con los márgenes señalados -->
<page backtop="10mm" backbottom="10mm" backleft="5mm" backright="15mm">
   <page_header> <!-- Define el header de la hoja -->
		<table id="encabezado">
         <tr class="fila">
         	<td id="spacing"></td>
            <td id="col_1" >
					<img src="../../images/riap-logo.png">
				</td>
            <td id="col_2">
					<span id="span2">SUBSECRETARIA DE EDUCACION MEDIA SUPERIOR</span><br>
					<span id="span2">DIRECCION GENERAL DE CENTROS DE FORMACION PARA EL TRABAJO</span><br>
					<span id="span2">DIRECCION TECNICA</span><br>
					<span id="span2">SUBDIRECCION DE VINCULACION Y APOYO ACADEMICO</span><br>
					<span id="span2">REGISTRO DE INSCRIPCION Y ACREDITACION</span><br>
					<span id="span2">(RIAP-02)</span>
				</td>
         </tr>
      </table>
   </page_header>
        
   <page_footer> <!-- Define el footer de la hoja -->
		<table id="footer">
         <tr class="fila">
				<td>
					&copy;<small>Todos lo derechos reservados [Dev.: Yama May Jose Luis]</small>
				</td>
			</tr>
      </table>
   </page_footer>
    
	<table id="centralhead">
		<tr class="fila">
			<td id="headline1"><span id="txthead">SUBDIRECCION/ASISTENCIA: QUINATANA ROO</span></td>
			<td></td>
			<td id="headline3"><span id="txthead">PLANTEL PARTICULAR: NA'ATIK S.C.</span></td>
			<td></td>
			<td id="headline4"><span id="txthead">CLAVE CCT: 23PBT0090G</span></td>
			<td>algo</td>
		</tr>
		<tr>
			<td id="headline5"><span id="txthead">CURSO / ESPECIALIDAD: INGLES</span></td>
			<td></td>
			<td id="headline6"><span id="txthead">GRUPO: ADOLESCENTES INICIAL</span></td>
			<td></td>
			<td id="headline7"><span id="txthead">FECHA: 26-10-15</span></td>
			<td>algo</td>
		</tr>
		<tr>
			<td id="headline9"><span id="txthead">FECHA DE INICIO: 24-08-15</span></td>
			<td id="headline10"><span id="txthead">FECHA DE TERMINO: 10-JUL-15</span></td>
			<td></td>
			<td id="headline11"><span id="txthead">DURACION EN HRS: 70</span></td>
			<td id="headline12"><span id="txthead">HORARIO: 3:00 A 4:30 P.M LUNES Y MIERCOLES</span></td>
			<td>algo lotecsr</td>
		</tr>
	</table><br>
	<table id="central">
		<tr>
			<td id="cabecera1">INSCRIPCION</td>
			<td id="cabecera2">ACREDITACION</td>
		</tr>
		<tr>
			<td>
			<table style="width:50%">
				<tr>
					<td style="width: 10%; height=50px; border: 1px solid #000; text-align:center"><br>N<br>U<br>M<br><br></td>
					<td style="width: 25%; height=50px; border: 1px solid #000; text-align:center"><br>NUMERO<br>DE<br>CONTROL<br></td>
					<td style="width: 20%; height=50px; border: 1px solid #000; text-align:center">texto</td>
					<td style="width: 20%; height=50px; border: 1px solid #000; text-align:center">texto</td>
					<td style="width: 20%; height=50px; border: 1px solid #000; text-align:center">texto</td>
					<td style="width: 20%; height=50px; border: 1px solid #000; text-align:center">texto</td>
				</tr>
			</table>
			</td>
			<td>
			<table style="width:50%">
				<tr>
					<td style="width: 20%; border: 1px solid #000;">texto</td>
					<td style="width: 20%; border: 1px solid #000;">texto</td>
					<td style="width: 20%; border: 1px solid #000;">texto</td>
					<td style="width: 20%; border: 1px solid #000;">texto</td>
					<td style="width: 20%; border: 1px solid #000;">texto</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
    <!-- Fin del cuerpo de la hoja -->

</page>

