<?php 
function nivelEscolar($level)
{
	$msg="";
	switch ($level) {
		case '1':  $msg='1er Año';break;
		case '2':  $msg='2do Año';break;
		case '3':  $msg='3er Año';break;
		case '4':  $msg='4to Año';break;
		case '5':  $msg='5to Año';break;
		case '6':  $msg='6to Año';break;
		case '7':  $msg='1er Semestre';break;
		case '8':  $msg='2do Semestre';break;
		case '9':  $msg='3er Semestre';break;
		case '10': $msg='4to Semestre';break;
		case '11': $msg='5to Semestre';break;
		case '12': $msg='6to Semestre';break;
		case '13': $msg='7mo Semestre';break;
		case '14': $msg='8vo Semestre';break;
		case '15': $msg='9no Semestre';break;
		case '16': $msg='10mo Semestre';break;
		case '17': $msg='Concluido';break;		
	}
	return $msg;
}
?>