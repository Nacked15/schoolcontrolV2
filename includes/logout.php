<?php 

session_start();

//Se destruye la session iniciada
session_destroy();
header('Location:../index.php');

 ?>