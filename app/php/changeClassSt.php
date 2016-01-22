<?php
    include '../../includes/db_connect.php';
	$course = $_POST['curso'];
    $group = $_POST['grupo'];

    list($grupo, $clase, $alumno, $curso) = explode("-", $_POST['grupo']);

    if (isset($course) && isset($group)) {
        $promover = "UPDATE academic_info 
                            SET id_classes = ".$clase." 
                                WHERE id_student=".$alumno.";";
        $did = mysqli_query($db_connect, $promover);
        if ($did) {
            list($curso,$x) = explode("-", $course); 
           switch ($curso) {
                case '1': $str = "../../main.php?menu_ad=alumnos&registro=Club";
                    break;
                case '2': $str = "../../main.php?menu_ad=alumnos&registro=Primary";
                    break;
                case '3': $str = "../../main.php?menu_ad=alumnos&registro=Adolescentes";
                    break;
                case '4': $str = "../../main.php?menu_ad=alumnos&registro=Adultos";
                    break;
                default:
                    $str = "../../main.php?menu_ad=alumnos";
                    break;
                } 
            echo "
            <script>
             window.location='".$str."';
            </script>
            ";    
        } else {
            echo "
            <script>
             alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
             window.location='javascript:history.go(-1)';
            </script>
            ";    
        }
    
    } else {
        echo "
            <script>
             alert('Lo siento a ocurrido un ERROR inesperado... Intentelo de nuevo por favor!!! :(');
             window.location='javascript:history.go(-1)';
            </script>
            ";
    }

            

    

    mysqli_close($db_connect);
?>

