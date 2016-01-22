<?php  
function showSponsors($status)
{
    include ('includes/db_connect.php');
    //-- <-------------------------- ******************************* ------------------------------->
    #-- Consulta para obtener la lista de todos los padrinos registrados.
    $query2 = "SELECT P.id_sponsor, P.type_sp,P.name_sp, P.surname_sp, P.email, P.description_sp, P.id_scholar, P.status_sp, 
                      S.id_student,S.name_s,S.surname1_s,S.surname2_s,S.photo_s, B.id_student, B.id_grant 
                FROM sponsor P, student S, scholar B 
                    WHERE status_sp='$status' AND S.id_student=B.id_student AND B.id_grant = P.id_scholar;";
    $result = mysqli_query($db_connect, $query2) or die(mysqli_error());
    $numero=1;

    //-- <-------------------------- ******************************* ------------------------------->
    #-- Comprobacion de la consulta y mostrar resultados si es true.
    if ($result) {
        while ($fila = mysqli_fetch_array($result)) {
            if ($numero%2 != 0) {
                $str = 'warning';
            } else {
                $str = 'active';
            }
            if ($status=='activo') {
                echo "<tr class='".$str."'>";
                echo "<th>".$numero++."</th>";
                echo "<td>".$fila['type_sp']."</td>";
                echo "<td>".$fila['name_sp']."</td>";
                echo "<td>".$fila['surname_sp']."</td>";
                echo "<td>".$fila['email']."</td>";
                echo "<td>".$fila['description_sp']."</td>";
                echo "<td>".$fila['status_sp']."</td>";
                echo "<td>".$fila['name_s']." ".$fila['surname1_s']." ".$fila['surname2_s']."</td>";
                echo "<td><img src='img/fotos/student/".$fila['photo_s']."' alt='icon' class='img-circle' width=50px height=50px></td>";
                echo "<td><a href='#' data-toggle='modal' data-target='.bs-example-modal-edit' id='".$fila['id_sponsor']."' onclick='datosPadrino(this.id)' class='btn btn-info btn-fab btn-raised mdi-content-create' data-toggle='tooltip' data-placement='top' title='Editar Datos'></a></td>"." ";
                echo "</tr>";
            } else {
                echo "<tr class='".$str."'>";
                echo "<th>".$numero++."</th>";
                echo "<td>".$fila['type_sp']."</td>";
                echo "<td>".$fila['name_sp']."</td>";
                echo "<td>".$fila['surname_sp']."</td>";
                echo "<td>".$fila['email']."</td>";
                echo "<td>".$fila['description_sp']."</td>";
                echo "<td>".$fila['status_sp']."</td>";
                echo "<td><a href='#' data-toggle='modal' data-target='.bs-example-modal-edit' id='".$fila['id_sponsor']."' onclick='datosPadrino(this.id)' class='btn btn-info btn-fab btn-raised mdi-content-create' data-toggle='tooltip' data-placement='top' title='Editar Datos'></a></td>"." ";
                echo "</tr>";
            }
            
        } #-- Fin de while
    } else {
        echo "<h3 class='text text-center text-warning'>Upss!! error inesperado de conexión con la Base de Datos.</h3>
        <h6 class='text text-center text-warning'>Por favor reporte este Error a su administrador.</h6>";
    }
    
    mysqli_close($db_connect); #-- Cerrar conexión con la BD
}
?>