<?php include_once '../../../includes/db_connect.php'; ?>
<?php
	//-- Asignacion de Variables 
	$usuario 	= $_POST['username'];
	$contrasena = $_POST['password'];
	$categoria = $_POST['category'];

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
		 $file_name='default.png';
	}

	switch ($categoria) {
      case '1': $cat = 'maestro';
        break;
      case '2': $cat = 'controlescolar';
        break;
      case '3': $cat = 'admin';
        break;
     default: $cat = $categoria;
        # code...
        break;
  }

	//-- <-------------------------- *************************** ------------------------------->
	//-- Consult preparada para Insertar datos en la BD
	$insertData = "INSERT INTO user VALUES(null, '$usuario', '$contrasena', '$cat', '$file_name');";
	$insert = mysqli_query($db_connect, $insertData);

	//-- <-------------------------- *************************** ------------------------------->
	//-- Comprobación de la transaccion.
	if ($insert) {
			echo "
	         <script>
	         window.location='../../../main.php?menu_ad=users';
	         </script>";
	} else {
		echo "
	         <script>
	         alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
	         window.location='javascript:history.go(-1)';
	         </script>";
	}
	
	mysqli_close($db_connect); #-- Cerrar conexión con BD.
?>