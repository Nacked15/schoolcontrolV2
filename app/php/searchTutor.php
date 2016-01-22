<?php include_once '../../includes/db_connect.php'; ?>

<div class="table-responsive">
    <table id="example" class="table table-bordered table-hover table-striped table-condensed">
        <thead>
            <tr class="info">
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Ape. Paterno</th>
                <th>Ape. Materno</th>
                <th>Edad</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
<?php
    #-- Asignación de Variables. 
    $dato = $_GET['c'];
    $badChars = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
    $goodChars = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
    $dato = str_replace($badChars, $goodChars, $dato);
    $numero = 1;
    
    if (isset($dato)) {  
        //-- <-------------------------- **************************** ------------------------------>
        #-- Busqueda Aproximada.
    	$busqueda2 = "SELECT S.id_student,S.name_s,S.surname1_s,S.surname2_s,S.photo_s,S.age,S.sexo
                        FROM student S
                            WHERE S.name_s LIKE '%".$dato."%' OR 
                                S.surname1_s LIKE '%".$dato."%' OR 
                                S.surname2_s LIKE '%".$dato."%' LIMIT 5;";
    	$echo2 = mysqli_query($db_connect, $busqueda2) or die (mysqli_error());

    	if ($echo2) {
            while ($row = mysqli_fetch_array($echo2)) {
        			echo "<tr>";
                    echo "<th>".$row['id_student']."</th>";
                    echo "<th>"."<img src='img/fotos/student/".$row['photo_s']."' class='img-circle' width=50px height=50px>"."</th>";
                    echo "<th>".$row['name_s']." </th>";
                    echo "<th>".$row['surname1_s']." </th>";
                    echo "<th>".$row['surname2_s']." </th>";
                    echo "<th>".$row['age']." </th>";
                    echo "<th>".$row['sexo']." </th>";
                echo "</tr>";
        	} #-- Fin de while 2.
        } 
    } 
	mysqli_close($db_connect); #-- Cerrar conexión con BD.

?>

        </tbody>
    </table>
</div>