<?php
    include '../../includes/db_connect.php';

    $idSponsor = $_GET['x'];

    $query = "SELECT *
    			FROM sponsor;";
    $echo  = mysqli_query($db_connect, $query);
    $i=1; 
    while ($row = mysqli_fetch_array($echo)) {
        if ($row['id_scholar'] == $idSponsor){
          echo "<label>".$i++.") Nombre: </label>"." ".$row['name_sp']." ".$row['surname_sp'];
            echo "<br /><label>Email: </label>"." ".$row['email']."<br /><br />";
        }
        
    }

    mysqli_close($db_connect);
?>