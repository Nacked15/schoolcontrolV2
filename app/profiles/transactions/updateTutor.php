<?php include_once '../../../includes/db_connect.php'; ?>
<?php
	/**
		* Autor: Br. Jose Luis Yama May
		* Fecha: 12/08/2015
		* Obtiene los datos del formulario de edicion app/views/viewEditTutor y actualiza los datos del 
		* tutor elegido, propagando las actualizaciones a otros elementos relacionados como los alumnos 
		* registrados por este tutor.
	*/

	#-- Asignación de variables.
	$idTutor		= $_POST['keytutor'];
	$tName      = $_POST['nombre_t'];
	$tSurname1  = $_POST['ape1'];
	$tSurname2  = $_POST['ape2'];
	$tJob 	   = $_POST['trabajo'];
	$tPhone	   = $_POST['tel'];
	$tCellPhone = $_POST['cel'];
	$tRelation  = $_POST['parentesco'];
	$tAddress   = $_POST['calle'].",".$_POST['numero'].",".$_POST['entre'].",".$_POST['colonia'];

	//-- <-------------------------- ******************** ------------------------------->
	#-- Consulta para obtener los datos de beca del alumno.

	$update = "UPDATE tutor 
					SET name_t='".$tName."', 
						 surname1_t='".$tSurname1."', 
						 surname2_t='".$tSurname2."', 
						 job='".$tJob."', 
						 phone='".$tPhone."', 
						 cellphone_t='".$tCellPhone."', 
						 relationship='".$tRelation."', 
						 address_t='".$tAddress."' 
						WHERE tutor.id_tutor=".$idTutor.";";
	$echo = mysqli_query($db_connect, $update) or die (mysqli_error());

	#-- Comprobar la transacción. 
	if ($echo) {
		$updateStudentAdress = "UPDATE student SET address_s='".$tAddress."' WHERE id_tutor=".$idTutor.";";
		$did = mysqli_query($db_connect, $updateStudentAdress) or die(mysqli_error());
		if ($did) {
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
