<?php 
	include ('../../../includes/db_connect.php');
	$idst = $_POST['idSt'];

	$update = "UPDATE info_extrast SET reg_nacimiento = 1 WHERE id_st='$idst' LIMIT 1;";
	$setUpdate = mysqli_query($db_connect, $update) or die (mysqli_error());

?>