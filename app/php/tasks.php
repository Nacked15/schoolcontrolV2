<?php
/**
 * Autor: Jose Luis Yama May.
 * Fecha: 22-AGO-2015
 * Descrip: Permite mostrar el listado de recordatorios que el usuario haya guardado en su perfil.
 */



   include '../../includes/db_connect.php';
   include_once 'calcularEdad.php';
   $clave = $_SESSION['password'];
   $usr = $_SESSION['username'];
   $cat = $_SESSION['user_type'];
   $select = "SELECT * FROM user 
               WHERE username = '".$usr."' AND 
                     password = ".$clave." AND 
                     category = '".$cat."' LIMIT 1;";
    $getSelect = mysqli_query($db_connect, $select) or die (mysqli_error());

    while ($i = mysqli_fetch_array($getSelect)) {
        $id = $i['id_user'];
    }

    if (isset($clave)) {
        $query = 
        "SELECT * FROM tasks WHERE id_user=".$id." ORDER BY date_todo ASC;";
        $i=1; $div='';
        $color="";
        $made = mysqli_query($db_connect, $query) or die (mysqli_error());
        if ($i%2==0) { $div="<div class='clearfix'></div>"; } else{ $div=''; }
        if ($made->num_rows >= 1) {
            while ($row = mysqli_fetch_array($made)) {
                $priority = '';
                switch ($row['priority']) {
                    case 1: $priority = 'Prioridad: Alta';
                            $color = 'notas';
                        break;
                    case 2: $priority = 'Prioridad: Normal';
                            $color = 'notasB';
                        break; 
                    case 3: $priority = 'Prioridad: Baja';
                            $color = 'notasC';
                        break;
                    default: $priority = 'Prioridad: No asignada';
                        break;
                }
                echo " 
                    <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 ".$color."'>
                        <a href='#' onclick='deleteTask(".$row['id_task'].")' class='del mdi-navigation-cancel'></a>
                            <div>
                                <p>".$i++.". ".$row['task']."</p>
                            </div>
                        <div class='row'>
                            <div class='col-sm-4' id='fechanota'>
                                <small>Escrito: (".fechaCorta($row['date_task']).")</small>
                            </div>
                            <div class='col-sm-4' id='fechatodo'>
                                <small>Para: (".fechaCorta($row['date_todo']).")</small>
                            </div>
                            <div class='col-sm-4' id='priority'>
                                <small>(".$priority.")</small>
                            </div>
                        </div>     
                    </div>".$div."";
            }
         } else {
        echo "<h4 class='text-center text-primary'>No hay tareas pendientes...</h4>";
    }

    } else {
        include_once 'app/error.php';
    }
    
    mysqli_close($db_connect);
?>