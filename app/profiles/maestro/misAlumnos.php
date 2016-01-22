<?php 
	include_once ('app/profiles/maestro/actions/myStudents.php'); 
	include_once ('app/php/studentCount.php');

	@$_GET['element'] = addslashes($_GET['element']);
         switch ($_GET['element']) {
            case 'Club': include 'myClub.php';
               break;
            case 'Primary': include_once 'myPrimary.php';
               break;
            case 'Adolescentes': include_once 'myAdol.php';
               break;
				case 'Adultos': include_once 'myAdult.php';
               break;
            case 'allStudents': include_once 'MyAll.php';
               break;
            default: include 'myClub.php';
               break;
        	}
?>