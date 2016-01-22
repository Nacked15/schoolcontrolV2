<?php include_once 'includes/db_connect.php'; ?>
<?php 

    #-- Consulta para obtener la lista de Profesores.
    $query = "SELECT id_teacher, name_te, surname_te, photo_te FROM teacher;";
    $resultado = mysqli_query($db_connect, $query);
    $numero=1;
    
    //-- <-------------------------- ******************************* ------------------------------->
    #-- Comprobacion, obtencion y despliegue de resultados.
    if ($resultado) {
        while ($fila = mysqli_fetch_array($resultado)) {
            if ($numero%2 != 0) {
                $str = 'warning';
            } else {
                $str = 'active';
            }
        if ($fila['id_teacher'] != 1) {              
                               
            echo "<tr class='".$str."'>";
                echo "<th>".$numero++."</th>";
                echo "<td> <img src='img/fotos/etc/".$fila['photo_te']."' alt='picture' class='img-circle' width=50px height=50px></td>";
                echo "<td>".$fila['name_te']."</td>";
                echo "<td>".$fila['surname_te']."</td>";
                echo "<td><a href='#' class='btn btn-primary btn-fab btn-raised mdi-action-launch' data-toggle='modal' data-target='.bs-example-modal-maestro' id='".$fila['id_teacher']."-".$fila['photo_te']."' onclick='moreTeacher(this.id);'></a></td>";
            echo "</tr>";
        } 
        } #-- Fin de while.
    } else {
        echo "<h3 class='text text-center text-warning'>Upss!! error inesperado de conexión con la Base de Datos.</h3>
        <h6 class='text text-center text-warning'>Por favor reporte este Error a su administrador.</h6>";
    }
    
    mysqli_close($db_connect); #-- Cerrar conexión con BD.
?>