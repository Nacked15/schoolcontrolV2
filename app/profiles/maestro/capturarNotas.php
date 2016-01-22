<?php 
  include_once ('app/profiles/maestro/actions/studentsEval.php'); 
  include_once ('app/php/studentCount.php');

  @$_GET['evaluation'] = addslashes($_GET['evaluation']);
         switch ($_GET['evaluation']) {
            case 'evalClub': include 'evalClub.php';
               break;
            case 'evalPrimary': include_once 'evalPrimary.php';
               break;
            case 'evalAdolescentes': include_once 'evalAdol.php';
               break;
            case 'evalAdultos': include_once 'evalAdult.php';
               break;
            default: include 'evalClub.php';
               break;
          }
?>