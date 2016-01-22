<?php include_once '../../../includes/db_connect.php'; ?>
<?php
	//-- Asignacion de Variables 
	$teacherName 	= $_POST['name'];
	$teacherSurname = $_POST['surname'];
	$userName = $_POST['usuario'];
	$password = $_POST['contrasena'];

	//-- <-------------------------- *************************** ------------------------------->
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
	$add = "../../../img/fotos/etc/$file_name";

	if ($fileload == "true") {
	    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $add)) {
	        //echo " Cargado correctamente";
	    } else {
	     /*echo "Error al cargar";*/ 
	    }
	} else { 
	    //echo $msg;
		 $file_name='teacher.png';
	}

	$selector = mysqli_query($db_connect,"SELECT MAX(id_user) AS id FROM user;");
	$made =  mysqli_fetch_array($selector);
	$idUser = $made['id']+1;

	//-- <-------------------------- *************************** ------------------------------->
	//-- Consult preparada para Insertar datos en la BD
	$insertData = "INSERT INTO teacher VALUES(null, '$teacherName', '$teacherSurname', '$file_name', '$idUser');";
	$insert = mysqli_query($db_connect, $insertData);

	//-- <-------------------------- *************************** ------------------------------->
	//-- Comprobación de la transaccion.
	if ($insert) {
			$createUser = "INSERT INTO user VALUES(null,'$userName','$password','maestro','$file_name');";
			$insertUser = mysqli_query($db_connect, $createUser);
			if ($insertUser) {
			echo "
	         <script>
	         window.location='../../../main.php?menu_ad=maestros';
	         </script>";
			}
	} else {
		echo "
	         <script>
	         alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
	         window.location='javascript:history.go(-1)';
	         </script>";
	}
	
	mysqli_close($db_connect); #-- Cerrar conexión con BD.
?>