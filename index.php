<?php 
	@$_GET['menu'] = addslashes($_GET['menu']);
  	switch ($_GET['menu']) {
    case 'principal': include_once('app/error.php');
          break;
    default: include 'app/login.php';
      break;
	}
 ?>      