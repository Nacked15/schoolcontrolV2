<?php include_once '../../../includes/db_connect.php'; ?>
<?php 
	#-- Asignación de variables.
	$id         = $_POST['keyteacher'];
	$teName     = $_POST['nombre_t'];
	$teSurname  = $_POST['ape'];
	$fotoActual = $_POST['picteacher'];

	$getUser = 
	"SELECT * FROM teacher WHERE id_teacher = '$id' LIMIT 1;";
	$setUser = mysqli_query($db_connect, $getUser) or die(mysqli_error());
	if ($setUser) {
		while ($usuario = mysqli_fetch_array($setUser)) {
			$idUsario = $usuario['iduser'];
		}
	}


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
		$add = "../../../img/fotos/etc/$file_name";

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

	//-- <-------------------------- ******************** ------------------------------->
	#-- Consulta para actualizar los datos del Maestro.

	$update = "UPDATE teacher 
					SET name_te='".$teName."', surname_te='".$teSurname."', photo_te='".$file_name."' 
						WHERE teacher.id_teacher=".$id.";";
	$echo = mysqli_query($db_connect, $update);

	#-- Comprobar la transacción. 
	if ($echo) {
		$updateUser = "UPDATE user SET photo = '$file_name' WHERE id_user='$idUsario';";
		$setUpdate = mysqli_query($db_connect, $updateUser) or die(mysqli_error());
			if ($setUpdate) {
				echo "<script>
	         window.location='javascript:history.go(-1)';
	         </script>";
	      }
	} else {
		echo "<script>
	         alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
	         window.location='javascript:history.go(-1)';
	         </script>";
	}
	
	mysqli_close($db_connect); #-- Cerrar conexión con la BD.

?>
