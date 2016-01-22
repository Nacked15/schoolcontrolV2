<?php 
    $query = "SELECT photo, category FROM user 
    WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."';";
    $resultado = mysqli_query($db_connect, $query);
    while ($row = mysqli_fetch_array($resultado)) {
       	if ($row['category'] == $_SESSION['user_type']) {
            $photo = $row['photo'];
            echo $photo;
        }
    }
?>