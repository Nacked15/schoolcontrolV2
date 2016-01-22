<?php include_once 'includes/db_connect.php'; include 'app/php/calcularEdad.php';?>
<?php 
    
    //-- <-------------------------- ******************************* ------------------------------->
    #-- Consulta para obtener las clases, con sus respectivos maestros.
    $query = "SELECT * FROM classes C, naatik_course N, groups_nc G, schedule S, teacher T 
                WHERE C.id_course=N.id_course 
                    AND C.id_group = G.id_group
                        AND C.id_schedule = S.id_schedule
                            AND C.teacher = T.id_teacher 
                                AND (C.status_class = 'activo' OR C.status_class = 'finalizado') ORDER BY id_class;";
    $echo = mysqli_query($db_connect, $query) or die(mysqli_error());

    $numero = 1;
    $nameTe = "";
    if ($echo) {
        while ($fila = mysqli_fetch_array($echo)) {
            if ($fila['status_class']=='finalizado') {
                $str = "studentStandBy";
            }elseif ($numero%2 != 0) { $str = 'warning'; } else { $str = 'active'; }
            
            // list($anyo, $mes, $dia) = explode('-', $fila['date_end']);
            // $thisYear  = $anyo - date('Y');
            // $thisMonth = $mes - date('m');
            // $thisDay   = $dia - date('d');
            // if (($thisDay < 0 && $thisMonth == 0) || $thisMonth < 0) {
            //     $setDown = "UPDATE classes SET status_class = 'finalizado' WHERE id_class = ".$fila['id_class'].";";
            //     $down = mysqli_query($db_connect, $setDown);
            // }

            $nameTe = $fila['name_te']." ".$fila['surname_te'];
            $fecha_ini = mes($fila['date_init']); 
            $fecha_fin = mes($fila['date_end']);   
            
        echo "<tr class='".$str."'>";
            echo "<th>".$numero++."</th>";
            echo "<td>".$fila['course']."</td>";
            echo "<td>".$fila['group']."</td>";
            echo "<td>".$fecha_ini."</td>";
            echo "<td>".$fecha_fin."</td>";
            echo "<td>".$fila['days']."</td>";
            echo "<td>".$fila['hour_init']." - ".$fila['hour_end']."</td>";
            echo "<td>".$fila['year']."</td>";      
            echo "<td><a href='#' data-toggle='modal' data-target='.bs-example-modal-teach' id='".$fila['teacher']."-".$fila['id_class']."' onclick='teachers(this.id)' data-toggle='tooltip' data-placement='top' title='Asignar/Cambiar'>".$nameTe."</a></td>";
            echo "<td>".$fila['status_class']."</td>";
            echo "<th><a href='#' data-toggle='modal' data-target='.bs-example-modal-sm' id='".$fila['id_class']."' onclick='dataCurso(this.id)' class='btn btn-info btn-fab btn-raised mdi-content-create editCourse' data-toggle='tooltip' data-placement='top' title='Editar Datos'></a></th>";
        echo "</tr>";
        }
    } else {
        echo "<h3 class='text text-center text-warning'>Upss!! error inesperado de conexión con la Base de Datos.</h3>
        <h6 class='text text-center text-warning'>Por favor reporte este Error a su administrador.</h6>";
    }
    
    mysqli_close($db_connect);
?>