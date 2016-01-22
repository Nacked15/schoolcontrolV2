<?php  
	include_once '../../../../includes/db_connect.php';

	//== Obtener datos mediante POST.
	$idStudent = $_POST['ID'];
	$readA = $_POST['readingA'];
	$writeA = $_POST['writingA'];
	$speakA = $_POST['speakingA'];
	$listenA = $_POST['listeningA'];

	$readE = $_POST['readE'];
	$writeE = $_POST['writeE'];
	$speakE = $_POST['speakE'];
	$listenE = $_POST['listenE'];
	$attE = $_POST['attE'];
	$teamE = $_POST['teamE'];
	$timeE = $_POST['timeE'];

	$ciclo = $_POST['ciclo'];
	$periodo = $_POST['peDe']."-".$_POST['peA'];
	$subject = $_POST['tema'];
	$annotation = $_POST['coment'];
	$nombre = $_POST['nombre'];
	$fechaEval = $_POST['fEval'];

	$getInfo = 
	"SELECT A.id_student, A.id_info FROM academic_info A WHERE A.id_student = '$idStudent' LIMIT 1;";
	$setInfo = mysqli_query($db_connect, $getInfo) or die(mysqli_error());

	$idInfo = "";
	if ($setInfo) {
		while ($info = mysqli_fetch_array($setInfo)) {
			$idInfo = $info['id_info'];
		} //== Fin de while->$info

		$insertEval = "INSERT INTO evaluations 
			VALUES(null, '$readA', '$writeA', '$speakA', '$listenA',
					 '$readE', '$writeE', '$speakE', '$listenE', '$attE',
					 '$teamE', '$timeE', '$ciclo', '$periodo', '$subject',
					 '$annotation', '$nombre', '$fechaEval', '$idInfo');
		";
		$setInert = mysqli_query($db_connect, $insertEval) or die(mysqli_error());
		if ($setInert) {
			echo "Datos Guardados";
		} else {
			echo "Error en la Consulta";
		}


	} //== Fin de if->$setInfo

?>