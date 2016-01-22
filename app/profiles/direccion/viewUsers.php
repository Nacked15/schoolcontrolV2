<?php include_once 'includes/db_connect.php'; ?>
<?php 
    #-- Consulta para obtener la lista de Profesores.
    $query = "SELECT id_user, username, password, category, photo FROM user;";
    $resultado = mysqli_query($db_connect, $query) or die(mysql_error());
    $numero=1;
    
    //-- <-------------------------- ******************************* ------------------------------->
    #-- Comprobacion, obtencion y despliegue de resultados.
    if ($resultado) {
        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<input type='text' class='hidden' id='mypass' value=".$fila['password'].">";
            if ($numero%2 != 0) {
                $str = 'warning';
            } else {
                $str = 'active';
            }           
            echo "<tr class='".$str."'>";
                echo "<th>".$numero++."</th>";
                echo "<td> <img src='img/fotos/etc/".$fila['photo']."' alt='picture' class='img-circle' width=50px height=50px></td>";
                echo "<td>".$fila['username']."</td>";
                echo "<td><span class='seepass'>".$fila['password']."</span>"."</td>";
                echo "<td>".$fila['category']."</td>";
                echo "<td>
                        <a href='#' class='btn btn-info btn-fab btn-raised mdi-content-create' data-toggle='modal' data-target='.bs-example-modal-user' id='".$fila['id_user']."-".$fila['photo']."' onclick='editUser(this.id);'></a>
                    </td>";
            echo "</tr>";
        } #-- Fin de while.
    } else {
        echo "<h3 class='text text-center text-warning'>Upss!! error inesperado de conexión con la Base de Datos.</h3>
        <h6 class='text text-center text-warning'>Por favor reporte este Error a su administrador.</h6>";
    }
    
    
?>


<?php mysqli_close($db_connect); #-- Cerrar conexión con BD. ?>