<?php include_once '../../../includes/db_connect.php'; ?>
<?php 
	//-- Asignacion de variables
	$hasTutor		= $_POST['optTutor'];
	if ($hasTutor == "si") {
		if (isset($_POST['nombret']) && isset($_POST['ape1'])) {
			$tutorName      = $_POST['nombret'];
			$tutorSurname1  = $_POST['ape1'];
			$tutorSurname2  = $_POST['ape2'];
			$tutorOcupation = $_POST['ocupacion'];
			$tutorPhone     = $_POST['telcasa'];
			$tutorCellphone = $_POST['telcel'];
			$tutorKinship   = $_POST['parentesco'];
			$phoneAlt		 = $_POST['telalt'];
			$kinshipAlt	    = $_POST['parentescoAlt'];
		} else {
			echo "
	         <script>
	         alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
	         window.location='javascript:history.go(-1)';
	         </script>";
		}
		
	} elseif ($hasTutor == "no") {
		$tutorName      = "N/A";
		$tutorSurname1  = "N/A";
		$tutorSurname2  = "N/A";
		$tutorOcupation = "N/A";
		$tutorPhone     = "S/N";
		$tutorCellphone = "S/N";
		$tutorKinship   = "N/A";
		$tutorAddress   = "N/A";
		$phoneAlt       = "S/N";
		$kinshipAlt     = "N/A";
	}
	$tutorAddress   = "Calle: ".$_POST['calle'].", #".$_POST['numero'].", Entre: ".$_POST['entre'].", Col.: ".$_POST['colonia'];
	$lat = $_POST['lat'];
	$long = $_POST['lng'];
	$altLat = 19.57789189450819;
	$altLong = -88.04557564999999;
	
	if ($_POST['lat']=="" && $_POST['lng']=="") {
		$lat = $altLat;
		$long = $altLong;
	}
	if ($_POST['telcasa']==""){
		$tutorPhone = "S/N";
	}
	

	//-- <-------------------------- *************************** ------------------------------->
	//-- Insercion de datos en la tabla Tutor.
	$query = mysqli_query($db_connect,"SELECT MAX(id_tutor) AS id FROM tutor;");
	$selection =  mysqli_fetch_array($query);
	$idTutor = $selection['id']+1;
	
	$insertData = "INSERT INTO tutor VALUES(null, 
		'$tutorName', '$tutorSurname1', '$tutorSurname2', 
		'$tutorOcupation', '$tutorPhone', '$tutorCellphone', 
		'$tutorKinship', '$phoneAlt', '$kinshipAlt', '$tutorAddress');";
	$insert = mysqli_query($db_connect, $insertData);

	//-- <-------------------------- *************************** ------------------------------->
	//-- Comprobación de la transacción.
	if ($insert) {
		$insertMap = "INSERT INTO croquis VALUES(null,'$lat','$long','$idTutor');";
		$ins = mysqli_query($db_connect, $insertMap);
			if ($ins){
			echo "
	         <script>
	         window.location='../../../main.php?menu_ad=alumnoNuevo&nuevo=infoGeneral';
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