<?php
	#-- Función para obtener la cantidad de alumnos de cada curso.
	function stCount($value)
	 {
	 	include 'includes/db_connect.php';
	    $query = "SELECT S.id_student, S.status, I.id_student, I.id_classes, C.id_class, C.id_course 
	    			FROM student S, academic_info I, classes C 
	    				WHERE S.status='activo' AND S.id_student=I.id_student AND I.id_classes=C.id_class AND C.id_course='".$value."';";
	    $echo = mysqli_query($db_connect, $query) or die(mysqli_error());
	    
	    $count = $echo->num_rows;
	    echo $count;
	    
	    mysqli_close($db_connect);
	 	
	 } #-- Fin de la funcion stCount().

	 #-- Función para obtener el total de alumnos inscritos en el instituto.
	 function stTotal()
	 {
	 	include 'includes/db_connect.php';
	    $query = "SELECT S.id_student FROM student S WHERE S.status='activo';";
	    $echo = mysqli_query($db_connect, $query) or die(mysqli_error());
	    
	    $count = $echo->num_rows;
	    echo $count;
	    
	    mysqli_close($db_connect);
	 	
	 } #-- Fin de la funcion stTotal().

	 #-- Función para obtener el numero de alumnis becados y solicitantes de beca.
	 function stnScholar($scholar)
	 {
	 	include 'includes/db_connect.php';
	 	if ($scholar=='si') {
	 		$query = "SELECT * FROM student S, scholar B WHERE S.id_student=B.id_student AND S.status='activo' AND request='si' AND togrant='si';";
	 	} elseif ($scholar=='no') {
	 		$query = "SELECT * FROM student S, scholar B WHERE S.id_student=B.id_student AND S.status='activo' AND request='si' AND togrant='no';";
	 	}
	    
	    $echo = mysqli_query($db_connect, $query);
	    
	    $count = $echo->num_rows;
	    echo $count;
	    
	    mysqli_close($db_connect); 	
	 } #-- Fin de la función stnScholar().

	#-- Función para obtener la cantidad de alumnos inscritos ante la SEP y de candidatos a inscribirser 
	function stnSep($string)
	{
	 	include 'includes/db_connect.php';
	    $query = "SELECT S.id_student, S.age, I.id_student, I.reg_sep, R.id_sep, R.issep 
	    				FROM student S, academic_info I, sep R 
	    					WHERE S.status = 'activo' AND
	    							S.id_student=I.id_student AND 
	    							I.reg_sep=R.id_sep AND 
	    							R.issep='".$string."' AND S.age>=15;";
	    $echo = mysqli_query($db_connect, $query) or die(mysqli_error());
	    
	    $count = $echo->num_rows;
	    echo $count;
	    
	    mysqli_close($db_connect); 	
	}

	function stnSepTeacher()
	{
	 	include 'includes/db_connect.php';
	 	$maestro = $_SESSION['username'];
		$password = $_SESSION['password']; 

		$seleccion = "SELECT * FROM teacher T, user U 
								WHERE T.iduser = U.id_user AND
										U.category = 'maestro' AND
										U.username = '$maestro' AND
										U.password = '$password' ;";
		$do = mysqli_query($db_connect, $seleccion) or die(mysqli_error());
		if ($do) {
		  	while ($pointer = mysqli_fetch_array($do)) {
		  		$idMaestro = $pointer['id_teacher'];
		  	}
		}
	    $query = "SELECT S.id_student, S.age, I.id_student, I.reg_sep, R.id_sep, R.issep, C.id_class, C.teacher 
	    				FROM student S, academic_info I, sep R, classes C 
	    					WHERE S.status     = 'activo' AND 
	    							S.id_student = I.id_student AND
	    							I.id_classes = C.id_class AND
	    							C.teacher 	 = '$idMaestro' AND 
	    							I.reg_sep    = R.id_sep AND 
	    							R.issep      = 'si' AND S.age>=15;";
	    $echo = mysqli_query($db_connect, $query) or die(mysqli_error());
	    
	    $count = $echo->num_rows;
	    echo $count;
	    
	    mysqli_close($db_connect); 	
	}

	#-- Función para obtener el total de alumnos por grupo del maestro activo.
	function teacherStCount($curso)
	 {
	 	include 'includes/db_connect.php';
	 	$who = $_SESSION['username']; $why = $_SESSION['password'];
	 	$selector = "SELECT * FROM user U, teacher T WHERE 
	 								U.username = '$who' AND 
	 								U.password = '$why' AND
	 								U.id_user = T.iduser LIMIT 1;";
	 	$made = mysqli_query($db_connect, $selector) or die(mysqli_error());
	 	if ($made) {
	 		while ($row = mysqli_fetch_array($made)) {
	 			$idProf = $row['id_teacher'];
	 		}
	 	}

	    $query = "SELECT S.id_student, S.status, I.id_student, I.id_classes, C.id_class, C.id_course 
	    			FROM student S, academic_info I, classes C 
	    				WHERE S.status='activo' AND 
	    						S.id_student=I.id_student AND 
	    						I.id_classes=C.id_class AND
	    						C.teacher = '$idProf' AND 
	    						C.id_course='".$curso."';";
	    $echo = mysqli_query($db_connect, $query) or die(mysqli_error());
	    
	    $count = $echo->num_rows;
	    echo $count;
	    
	    mysqli_close($db_connect);
	 	
	 } #-- Fin de la funcion stCount().

	 #-- Función para obtener el total de alumnos que corresponden al maestro activo.
	 function TeacherStTotal()
	 {
	 	include 'includes/db_connect.php';

	 	include 'includes/db_connect.php';
	 	$who = $_SESSION['username']; $why = $_SESSION['password'];
	 	$selector = "SELECT * FROM user U, teacher T WHERE 
	 								U.username = '$who' AND 
	 								U.password = '$why' AND
	 								U.id_user = T.iduser LIMIT 1;";
	 	$made = mysqli_query($db_connect, $selector) or die(mysqli_error());
	 	if ($made) {
	 		while ($row = mysqli_fetch_array($made)) {
	 			$idProf = $row['id_teacher'];
	 		}
	 	}

	    $query = "SELECT S.id_student FROM student S, academic_info I, classes C  
	    				WHERE S.status='activo' AND
	    				S.id_student = I.id_student AND
	    				I.id_classes = C.id_class AND
	    				C.teacher = '$idProf';";
	    $echo = mysqli_query($db_connect, $query) or die(mysqli_error());
	    
	    $count = $echo->num_rows;
	    echo $count;
	    
	    mysqli_close($db_connect);
	 	
	 } #-- Fin de la funcion stTotal().
	
?>