<?php
	include ('app/profiles/maestro/actions/issetTeacher.php');
	$idMaestro = teacherSet();  
	//-- <-------------------------- ******************************* ------------------------------->
    #-- Consulta para obtener las clases, con sus respectivos maestros.
    $query = "SELECT * FROM classes C, naatik_course N, groups_nc G, schedule S, teacher T 
                WHERE C.id_course=N.id_course
                	AND C.teacher = '$idMaestro' 
                    	AND C.id_group = G.id_group
                        AND C.id_schedule = S.id_schedule
                           AND C.teacher = T.id_teacher ORDER BY id_class;";
    $echo = mysqli_query($db_connect, $query) or die(mysqli_error());

    $numero = 1;
    $nameTe = "";
    if ($echo) {
        while ($fila = mysqli_fetch_array($echo)) {
            if ($numero%2 != 0) { $str = 'warning'; } else { $str = 'active'; }

            $nameTe = $fila['name_te']." ".$fila['surname_te'];   
            
        echo "<tr class='".$str."'>";
            echo "<th>".$numero++."</th>";
            echo "<td>".$fila['course']."</td>";
            echo "<td>".$fila['group']."</td>";
            echo "<td>".$fila['date_init']."</td>";
            echo "<td>".$fila['days']."</td>";
            echo "<td>".$fila['hour_init']." - ".$fila['hour_end']."</td>";      
            echo "<td>".$nameTe."</td>";
        echo "</tr>";
        }
    } else {
        echo "<h3 class='text text-center text-warning'>Upss!! error inesperado de conexión con la Base de Datos.</h3>
        <h6 class='text text-center text-warning'>Por favor reporte este Error a su administrador.</h6>";
    }
    
    mysqli_close($db_connect);
?>