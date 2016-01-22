<?php 
include_once 'db_param_config.php';
$db_connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
if (!$db_connect) {
	die("<strong> <i class='mdi-alert-error'></i> No se ha podido establecer conexion con la Base de Datos</strong>".mysqli_error());
}
mysqli_set_charset($db_connect, "utf-8");

@session_start();
?>