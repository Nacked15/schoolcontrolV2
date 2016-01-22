<?php include_once '../../../includes/db_connect.php'; ?>
<?php
	#-- Asignación de Variables obtenidas de la URL 
	$IDstudent = $_POST['idStudent'];
	$NumReg  = $_POST['nReg'];
	$becaSep = $_POST['beca'];
	$DateReg = $_POST['dReg'];

	//-- <-------------------------- ******************** ------------------------------->
	#-- Consulta sobre las tablas alumnos y informacion academica.
	$query = "SELECT A.id_student, A.reg_sep, R.id_sep, R.issep 
				FROM academic_info A, sep R 
					WHERE A.id_student=".$IDstudent." AND A.reg_sep=R.id_sep  LIMIT 1;";
	$result = mysqli_query($db_connect, $query);

	//-- <-------------------------- ******************** ------------------------------->
	#-- Comprobación de la consulta.
	if ($result) {
		while ($row = mysqli_fetch_array($result)) {
			if ($row['issep'] == 'no') {
				$update = "UPDATE sep 
					SET issep='si', regis_num='$NumReg', 
						 date_incorporate='$DateReg', calification_sep='0', beca='$becaSep'
					WHERE sep.id_sep='".$row['reg_sep']."';";
			}
			$echo = mysqli_query($db_connect, $update);
		}

		if ($echo) {
				echo "
		         <script>
		         window.location='javascript:history.go(-1)';
		         </script>";	
		} else {
			echo "
		         <script>
		         alert('ERROR inesperado en la inserción de datos... Intentelo de nuevo por favor!!! :(');
		         window.location='javascript:history.go(-1)';
		         </script>";
		}
	
	} else {
		echo "
		    <script>
		    alert(' :( ERROR inesperado... Intentelo de nuevo por favor!!!');
		    window.location='javascript:history.go(-1)';
		    </script>";
	}
	
	mysqli_close($db_connect);

?>