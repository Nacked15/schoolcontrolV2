<?php 
	include_once 'db_connect.php';
	$categoria = $_GET['key'];
	$usrName = $_GET['name'];
	switch ($categoria) {
      case '1': $cat = 'maestro';
        break;
      case '2': $cat = 'controlescolar';
        break;
      case '3': $cat = 'admin';
        break;
  }

	$query = "SELECT * FROM user WHERE category='".$cat."';";
	$do = mysqli_query($db_connect, $query) or die (mysqli_error());

	while ($row = mysqli_fetch_array($do)) {
		if ($row['username'] == $usrName) {
			echo "<h4 class='text-center text-danger'>El nombre de usuario que ha elegido ya existe para esta categoria. Seleccione uno nuevo por favor.</h4>";
		} else {
			echo "";
		}
	}

?>