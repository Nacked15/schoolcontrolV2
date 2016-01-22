<?php 
	
	#-- Función para calcular la edad mediante 3 parametros
	function calcularEdad($anio,$mes,$dia)
	{
		$anio_diferencia = date("Y") - $anio;
		$mes_diferencia  = date("m") - $mes;
		$dia_diferencia  = date("d") - $dia;

		if (($dia_diferencia < 0 && $mes_diferencia == 0) || ($mes_diferencia < 0))
			$anio_diferencia--;

		return $anio_diferencia;
	} #-- Fin de función calcularEdad().

	#-- Función para calcular la edad mediante un parametro (pe. cuando se obtienen de la BD)
	function calcular($fechaNacimiento)
	{
		list($anio,$mes,$dia) = explode("-", $fechaNacimiento);
		$anio_dif = date("Y") - $anio;
		$mes_dif  = date("m") - $mes;
		$dia_dif  = date("d") - $dia;

		if (($dia_dif < 0 && $mes_dif == 0) || ($mes_dif < 0)) 
			$anio_dif--;
		
		return $anio_dif;
	} #-- Fin de la funcion calcular().
	
	#-- Función para formatear fecha (de 2015-06-11 a 11 de Julio de 2015)
	function mes($fecha) {
    	list($anio,$mes,$dia) = explode("-", $fecha);
		$m="";
	    switch ($mes){
	        case '01':
	            $m = "Enero";
	            break;
	        case '02':
	            $m = "Febrero";
	            break;
	        case '03':
	            $m = "Marzo";
	            break;
	        case '04':
	            $m = "Abril";
	            break;
	        case '05':
	            $m = "Mayo";
	            break;
	        case '06':
	            $m = "Junio";
	            break;
	        case '07':
	            $m = "Julio";
	            break;
	        case '08':
	            $m = "Agosto";
	            break;
	        case '09':
	            $m = "Septiembre";
	            break;
	        case '10':
	            $m = "Octubre";
	            break;
	        case '11':
	            $m = "Noviembre";
	            break;
	        case '12':
	            $m = "Diciembre";
	            break;
	    }
	    
	    $birthday_st = $dia." de ".$m." de ".$anio;
	    return $birthday_st;
	} #-- Fin de función mes().

	function fechaCorta($fecha) {
    	list($anio,$mes,$dia) = explode("-", $fecha);
    	$a = str_split($anio);
    	$shorYear = '';

    	for ($i=1; $i<=count($a) ; $i++) { 
    		if ($i > 2) {
    			$shorYear = $shorYear.$a[$i-1];
    		}
    	}
		$m="";
	    switch ($mes){
	        case '01': $m = "ENE"; break;
	        case '02': $m = "FEB"; break;
	        case '03': $m = "MAR"; break;
	        case '04': $m = "ABR"; break;
	        case '05': $m = "MAY"; break;
	        case '06': $m = "JUN"; break;
	        case '07': $m = "JUL"; break;
	        case '08': $m = "AGO"; break;
	        case '09': $m = "SEP"; break;
	        case '10': $m = "OCT"; break;
	        case '11': $m = "NOV"; break;
	        case '12': $m = "DIC"; break;
	    }
	    
	    $shorDate = $dia."-".$m."-".$shorYear;
	    return $shorDate;
	} #-- Fin de función fechaCorta().
?>