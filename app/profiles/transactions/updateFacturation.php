<?php 
	include ('../../../includes/db_connect.php');
	$idst = $_POST['idSt'];
	$val  = $_POST['value'];

	$update = "UPDATE info_extrast SET facturacion = '$value' WHERE id_st='$idst' ;";
	$setUpdate = mysqli_query($db_connect, $update) or die (mysqli_error());

?>