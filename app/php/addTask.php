<?php
    include '../../includes/db_connect.php';
    $passworKey = $_SESSION['password'];
    $usr = $_SESSION['username'];
    $cat = $_SESSION['user_type'];
    $query = "SELECT * FROM user WHERE username='".$usr."' AND password=".$passworKey." AND category='".$cat."' LIMIT 1;";
    $getQuery = mysqli_query($db_connect, $query);
    while ($row = mysqli_fetch_array($getQuery)) {
        $idUser = $row['id_user'];
    }

    if (isset($_POST['tarea'])) {

        $fecha = date("Y")."-".date("m")."-".date("d");
        $insert = "INSERT INTO tasks 
                        VALUES(null,'".$_POST['tarea']."',
                                '$fecha', '".$_POST['parafecha']."', 
                                '".$_POST['p']."', '$idUser');";
        $made = mysqli_query($db_connect, $insert) or die (mysqli_error());

    }
    
    mysqli_close($db_connect);
?>