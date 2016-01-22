<?php 
	include ('../../../includes/db_connect.php');
	$idst = $_POST['idSt'];

	$update = "UPDATE info_extrast SET convenio = 1 WHERE id_st='$idst' ;";
	$setUpdate = mysqli_query($db_connect, $update) or die (mysqli_error());

?>