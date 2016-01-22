<?php
    include 'includes/db_connect.php';

    //$idGrupo = $_GET['g'];
    $grupos = "SELECT * FROM groups_nc;";
    $ver  = mysqli_query($db_connect, $grupos);

    while ($fila = mysqli_fetch_array($ver)) {
        echo "<option value='".$fila['id_group']."'>".$fila['group']."</option>";
    }

?>
