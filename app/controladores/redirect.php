<?php 

	@$_GET['menu_ad'] = addslashes($_GET['menu_ad']);
		switch ($_GET['menu_ad']) {
			case 'principal': include 'app/principal.php'; 
				break;
			case 'alumnos': include 'app/views/alumnos.php'; 
				break;
			case 'alumnoNuevo': include 'app/views/alumnoNuevo.php'; 
				break;
			case 'alumnoBecado': include 'app/views/alumnoBecado.php'; 
				break;
			case 'alumnoSep': include 'app/views/alumnoSep.php'; 
				break;
			case 'alumnosCalificaciones': include 'app/views/alumnosCalificacion.php'; 
				break;
			case 'editarAlumno': include 'app/views/editStudent.php'; 
				break;
			case 'bajaAlumno': include 'app/views/alumnosBaja.php'; 
				break;
			case 'formularioContrato': include 'app/views/formContrato.php'; 
				break;
			case 'maestros': include 'app/views/maestros.php'; 
				break;
			case 'padrinos': include 'app/views/padrinos.php'; 
				break;
			case 'cursos': include 'app/views/cursos.php'; 
				break;
			case 'horarios': include 'app/views/horarios.php'; 
				break;
			case 'registrosep': include 'app/views/sepFile.php'; 
				break;
			case 'formSep': include 'app/views/formSEP.php'; 
				break;
			case 'users': include 'app/views/usuarios.php'; 
			 	break;
			case 'evalSt': include 'app/profiles/transactions/showEvaluations.php'; 
				break;
			case 'view': include 'app/views/view.php'; 
				break;
			case 'mapa': include 'app/views/adultos.php'; 
				break;
			case 'profile': include 'app/views/editProfile.php'; 
				break;
			case 'viewUpdateSt': include 'app/views/viewEditStudent.php'; 
				break;
			case 'viewUpdateTr': include 'app/views/viewEditTutor.php'; 
				break;
			case 'viewUpdateTch': include 'app/views/viewEditTeacher.php'; 
				break;
			default: include 'app/principal.php';
			 	break;

		}
 ?>