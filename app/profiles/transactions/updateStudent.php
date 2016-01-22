<?php 
	/**
	 * Autor: Br. Jose Luis Yama May
	 * Fecha: 12/08/2015
	 * Obtiene los datos del formulario de edicion app/views/viewEditStudent y actualiza los datos del 
	 * alumno elegido, propagando las actualizaciones a otros elementos relacionados como los tutores.
	 */

	include_once '../../../includes/db_connect.php';
	$ncontrol = $_POST['numcontrol'];
	$remark = $_POST['comentario'];
	$homestay = $_POST['homestay'];
	$acta 	= $_POST['acta'];
	$facturacion = $_POST['facturacion'];
	$name = $_POST['nombre_s'];
	$surname1 = $_POST['apellido1'];
	$surname2 = $_POST['apellido2'];
	$birthday = $_POST['anio'];
	$age 		= $_POST['edad'];
	$sexo 	= $_POST['sexo'];
	$edocivil = $_POST['edocivil'];
	$cell 	= $_POST['celular'];
	$address = $_POST['calle'].",".$_POST['numero'].",".$_POST['entre'].",".$_POST['colonia'];
	$reference = $_POST['referencia'];
	$sickness = $_POST['padecimiento'];
	$medication = $_POST['tratamiento'];
	$xVal = addslashes($_POST['keyst']);
	$ocupation = $_POST['ocupacion'];
	$workplace = $_POST['lugar'];
	$studies = $_POST['nivel'];
	$level = $_POST['grado'];
	$prev_course = $_POST['cursoprevio'];
	$date_init_s = $_POST['inicio'];
	$fotoActual = $_POST['picstudent'];


	if (isset($xVal) && isset($name)) {

		//-- <-------------------------- *************************** ------------------------------->
	//-- Script para cargar la foto del alumno al server.
	if ($_FILES['uploadedfile']['name'] != "") {
		$fileload="true";  
		if ($_FILES['uploadedfile']['size']>4500000) { 
		    $msg = $msg."El archivo tiene que ser menor a 1.5MB <br>"; $fileload="false";
		}
		if (!($_FILES['uploadedfile']['type'] == "image/jpeg" OR $_FILES['uploadedfile']['type'] == "image/png" OR $_FILES['uploadedfile']['type'] == "image/JPG")) {
		    $msg = $msg." La Imagen tiene que ser JPG o PNG <br>";
		    $fileload = "false";
		}
		$file_name = $_FILES['uploadedfile']['name'];
		$add = "../../../img/fotos/student/$file_name";

		if ($fileload == "true") {
		    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $add)) {
		        //echo " Cargado correctamente";
		    } else {
		     /*echo "Error al cargar";*/ 
		    }
		} else { 
		    echo $msg;
		}
	} else {
		$file_name = $fotoActual;
	}

		$updateSt = "UPDATE student 
							SET ncontrol='$ncontrol',
								 name_s = '".$name."',
								 surname1_s = '".$surname1."',
								 surname2_s = '".$surname2."',
								 birthday = '".$birthday."',
								 age = '".$age."',
								 sexo = '".$sexo."',
								 edo_civil = '".$edocivil."',
								 cellphone = '".$cell."',
								 address_s = '".$address."',
								 reference = '".$reference."',
								 sickness = '".$sickness."',
								 medication = '".$medication."',
								 photo_s = '".$file_name."',
								 comment_s = '$remark',
								 homestay = '$homestay'
								WHERE id_student = ".$xVal.";";
		$updateEcho = mysqli_query($db_connect, $updateSt) or die (mysqli_error());
		if ($updateEcho) {
			$updateInfo = "UPDATE academic_info A 
									SET ocupation = '".$ocupation."',
										 workplace = '".$workplace."',
										 studies = '".$studies."',
										 level = '".$level."',
										 prev_course = '".$prev_course."',
										 date_init_s = '".$date_init_s."'	
										WHERE A.id_student=".$xVal.";";
			$updateInfoEcho = mysqli_query($db_connect, $updateInfo) or die(mysqli_error());
			if ($updateInfoEcho) {

				$updateInfoExtra = "UPDATE info_extrast SET reg_nacimiento='$acta', facturacion='$facturacion' WHERE id_st='$xVal';";
				$made = mysqli_query($db_connect, $updateInfoExtra) or die(mysql_error());
				if ($made) {
					echo 
					"<script>
			         window.location='javascript:history.go(-2)';
			      </script>";
				}
				
			} else {
				echo "<script>
	         alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
	         window.location='javascript:history.go(-1)';
	         </script>";
			}
			
		}
	}
?>

<!-- <div class="bs-component">
   <button title="" data-original-title="" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Top</button>
</div> -->