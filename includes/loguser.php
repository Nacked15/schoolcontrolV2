<?php 
//-- Obtener los valores enviados por el usuario
if (isset($_POST['usuario']) && isset($_POST['contrasena']) && isset($_POST['categoria'])) {
	//-- Asignacion de variables
	$username = $_POST['usuario'];
	$password = $_POST['contrasena'];
	$category = $_POST['categoria'];

	if ($category == '1') { $code = 'direccion'; } elseif ($category == '2') { $code = 'maestro';
	} elseif ($category == '3') { $code = 'controlescolar'; }
	//Limpiar variables de Quotes.
	$username = addslashes($username);
	$password = addslashes($password);
	$code 	  = addslashes($code);

//--Consulta a la Tabla de mienbros registrados
$query = $db_connect->prepare("SELECT id_user, username, password, category 
									FROM user 
										WHERE username ='".$username."'  AND password='".$password."' AND category='".$code."' LIMIT 1;")or die(mysqli_error());
$query->execute();
$query->store_result();

//-- Obtener variables del resultado de la consulta.
$query->fetch();
	if ($query->num_rows == 1) {
		session_name("id_user");
		$_SESSION['username']  = $username;
		$_SESSION['user_type'] = $code;
		$_SESSION['password']  = $password;
	} else {
		echo "<script>
		  alert('Error: Nombre de Usuario o Contraseña Incorectas. :)');
          window.location='index.php?menu=login';
		</script>";
		exit();
	}
} else {
	session_name('id_user');
	if (!isset($_SESSION["username"]) && !isset($_SESSION["user_type"])){
		// Borramos la sesion creada por el inicio de session anterior
		session_destroy();
		die ("
			<script>
				alert('Error: Se ha cerrado la sesión, vuelva a iniciar sesion');
				 window.location='index.php?menu=default';
			</script>");
		exit();
	}
}

?>