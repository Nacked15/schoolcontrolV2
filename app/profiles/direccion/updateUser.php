<?php include_once '../../../includes/db_connect.php'; ?>
<?php 
  #-- Asignación de variables.
  $idUsr         = $_POST['keyuser'];
  $userName     = $_POST['usuario'];
  $passUsr  = $_POST['contrasena'];
  $category  = $_POST['category'];
  $usrPict = $_POST['pictuser'];


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
    $file_name = $usrPict;
  }

  switch ($category) {
      case '1': $cat = 'maestro';
        break;
      case '2': $cat = 'controlescolar';
        break;
      case '3': $cat = 'direccion';
        break;
     default: $cat = $category;
        # code...
        break;
  }

  //-- <-------------------------- ******************** ------------------------------->
  #-- Consulta para actualizar los datos del Maestro.

  $update = "UPDATE user 
               SET username='".$userName."', 
                  password='".$passUsr."',
                  category='".$cat."', 
                  photo='".$file_name."' 
            WHERE user.id_user=".$idUsr.";";
  $echo = mysqli_query($db_connect, $update);

  #-- Comprobar la transacción. 
  if ($echo) {
      echo "<script>
           window.location='javascript:history.go(-1)';
           </script>";
  } else {
    echo "<script>
           alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
           window.location='javascript:history.go(-1)';
           </script>";
  }
  
  mysqli_close($db_connect); #-- Cerrar conexión con la BD.

?>
