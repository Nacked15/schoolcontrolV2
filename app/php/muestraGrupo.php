<?php
    include '../../includes/db_connect.php';

    list($idClass, $idCourse, $idStudent) = explode("-",$_GET['g']);
    $query = "SELECT * FROM classes C,naatik_course N, groups_nc G 
	 					WHERE N.id_course=".$idCourse." AND C.id_course=N.id_course AND C.id_group=G.id_group;";
    $ver  = mysqli_query($db_connect, $query) or die (mysqli_error());

    while ($fila = mysqli_fetch_array($ver)) {
        echo "<option value='".$idClass."-".$idCourse."-".$fila['id_group']."-".$idStudent."'>".$fila['group']."</option>";
    }

    mysqli_close($db_connect);
?>
