<?php include_once '../../../includes/db_connect.php'; ?>
<?php
	//-- Asignacion de valores obtenidos a variables. 
	$studentName 	    = $_POST['nombre'];
	$studentSurname1   = $_POST['apellido1'];
	$studentSurname2   = $_POST['apellido2'];
	$studentGenre  	 = $_POST['genero'];
	$studentStatus 	 = $_POST['edocivil'];
	$studentCellphone  = $_POST['celular'];
	$studentAddress    = $_POST['domicilio'];
	$studentReference  = $_POST['referencia'];
	$studentDate       = $_POST['anio']."-".$_POST['mes']."-".$_POST['dia'];
	$isSick 		       = $_POST['optRadio'];
	$isHomestay			 = $_POST['homestay'];
	$observation		 = $_POST['comentario'];

	
	if ($_POST['celular']== "") {
		$studentCellphone = "S/N";
	}

	//-- <-------------------------- ******************** ------------------------------->
	#-- Calcular la edad mediante la función calcularEdad().
	include '../../php/calcularEdad.php';
	$studentAge = calcularEdad($_POST['anio'],$_POST['mes'],$_POST['dia']);

	//-- <-------------------------- ******************** ------------------------------->
	//-- Script para cargar la foto del alumno al server.
	$fileload="true"; 
	$uploadedfile_zise=$_FILES['uploadedfile']['size']; 
	//echo $_FILES['uploadedfile']['name'];
	if ($_FILES['uploadedfile']['size']>4500000) { 
	    @$msg = $msg."El archivo tiene que ser menor a 1.5MB <br>"; $fileload="false";
	}
	if (!($_FILES['uploadedfile']['type'] == "image/jpeg" OR $_FILES['uploadedfile']['type'] == "image/png" OR $_FILES['uploadedfile']['type'] == "image/JPG")) {
	    @$msg = $msg." La Imagen tiene que ser JPG o PNG <br>";
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
		//echo $msg;
	    $file_name='default.png';
	}
	//-- Fin de script para cargar imagen.
	
	//-- <-------------------------- ******************** ------------------------------->
	//-- Comprobamos si el usuario indico tener alguna enfermedad
	if ($isSick == 'si') {
		$studentSickness   = $_POST['padecimiento'];
		$studentMedication = $_POST['tratamiento'];
	} elseif ($isSick == 'no') {
		$studentSickness   = 'Ninguna';
		$studentMedication = 'Ninguno';
	}
	
	//-- <-------------------------- ******************** ------------------------------->
	//-- Consulta preparada para obtener el ID del ultimo tutor registrado.
	$query = mysqli_query($db_connect,"SELECT MAX(id_tutor) AS id FROM tutor;");
	$selection =  mysqli_fetch_array($query);
	if ($_POST['tutor'] != "") {
		$idTutor = $_POST['tutor'];
	} else {
		$idTutor = $selection['id'];
	}

	//-- <-------------------------- ******************** ------------------------------->
	//-- Conculta preparada para Insertar datos en la tabla de Alumnos.
	$insertData = "INSERT INTO student VALUES(null,'pendiente', 
		'$studentName', '$studentSurname1', '$studentSurname2', 
		'$studentDate', '$studentAge', '$studentGenre',
		'$studentStatus', '$studentCellphone', '$studentAddress',
		'$studentReference', '$studentSickness', '$studentMedication',
		'$file_name', '$observation', '$isHomestay', 'activo', ".$idTutor.");";
	$insert = mysqli_query($db_connect, $insertData) or die(mysqli_error());

	//-- <-------------------------- ******************** ------------------------------->
	//-- Comprobacion de la transacción.
	if ($insert) {
		echo "
	         <script>
	         window.location='../../../main.php?menu_ad=alumnoNuevo&nuevo=infoAcademica';
	         </script>
	         ";
	} else {
		echo "
	         <script>
	         alert('Upps ERROR inesperado... Intentelo de nuevo por favor!!! :(');
	         window.location='javascript:history.go(-1)';
	         </script>
	         ";
	}
	
	//-- Cerrar sesion de la base de datos.
	mysqli_close($db_connect);


?>