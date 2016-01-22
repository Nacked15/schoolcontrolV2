<?php 

$fileload="true"; 
$uploadedfile_zise=$_FILES['uploadedfile']['size']; 
echo $_FILES['uploadedfile']['name'];

if ($_FILES['uploadedfile']['size']>1500000) { 
    $msg = $msg."El archivo tiene que ser menor a 1.5MB <br>"; $fileload="false";
}
if (!($_FILES['uploadedfile']['type'] == "image/jpeg" OR $_FILES['uploadedfile']['type'] == "image/png" OR $_FILES['uploadedfile']['type'] == "image/JPG")) {
    $msg = $msg." La Imagen tiene que ser JPG o PNG <br>";
    $fileload = "false";
}
$file_name = $_FILES['uploadedfile']['name'];
$add = "../../img/fotos/student/$file_name";

if ($fileload == "true") {
    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $add)) {
        //echo " Cargado correctamente";
    } else {
     /*echo "Error al cargar";*/ 
    }
} else { 
    echo $msg;
}

?>