<?php
    include '../../includes/db_connect.php';

   $idStudent = $_GET['n'];
   $query = "SELECT * FROM naatik_course;";
   $echo  = mysqli_query($db_connect, $query);
   echo "<option value=''>Seleccione...</option>";
   while ($row = mysqli_fetch_array($echo)) {   	
      echo "<option value='".$row['id_course']."-".$idStudent."'>".$row['course']."</option>";
   }

   mysqli_close($db_connect);
?>