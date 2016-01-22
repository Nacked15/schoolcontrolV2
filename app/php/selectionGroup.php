<?php
	#-- Inclusion de conexion a Base de datos.
    include '../../includes/db_connect.php';

   list($idCurso, $idStudent) = explode("-", $_GET['n']);
	
	//-- <-------------------------- ***************************** ------------------------------->
	//-- Consulta para obtener la lista de los grupos segun el curso.
    $query = "SELECT * FROM classes C, naatik_course N, groups_nc G 
    				WHERE N.id_course = '".$idCurso."' AND 
							C.id_course='".$idCurso."' AND 
							G.id_group = C.id_group;";
    $echo  = mysqli_query($db_connect, $query) or die (mysqli_error());

	//-- <-------------------------- ***************************** ------------------------------->
	//-- Comprobación e impresión de los resultados de la consulta.
	 echo "<option value=''>Seleccione..</option>";
	if ($echo) {
		 while ($row = mysqli_fetch_array($echo)) {
			$idclass = $row['id_class'];
			  echo "<option value='".$row['id_group']."-".$idclass."-".$idStudent."-".$idCurso."'>".$row['group']."</option>";
		 }
	}

    mysqli_close($db_connect); #-- cierre de la conexion con la BD
?>
