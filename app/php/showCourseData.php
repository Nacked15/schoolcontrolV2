<?php
include_once '../../includes/db_connect.php';
include_once 'calcularEdad.php';
$idCurso = $_GET['x'];
list($grupo, $clase, $alumno, $curso) = explode("-", $idCurso);

$query = "SELECT * FROM classes C, naatik_course N, schedule S 
            WHERE N.id_course = '".$curso."' AND C.id_course='".$curso."' AND C.id_group = '".$grupo."' AND S.id_schedule = C.id_schedule;";
$echo = mysqli_query($db_connect, $query);

while ($row = mysqli_fetch_array($echo)){
    $fecha_inicio = mes($row['date_init']);
    echo "
        <div class='form-group'>
            <label for='inputname' class='col-sm-3 control-label'>Fecha de inicio: </label>
            <div class='col-sm-9'>
                <input type='text' class='form-control' disabled id='fecha_init' name='fecha_init' value='".$fecha_inicio."'>
            </div>
        </div>
        <div class='form-group'>
            <label for='inputname' class='col-sm-3 control-label'>Dias: </label>
            <div class='col-sm-9'>
                <input type='text' class='form-control' disabled id='fecha_init' name='days' value='".$row['days']."'>
            </div>
        </div>
        <div class='form-group'>
            <label for='inputname' class='col-sm-3 control-label'>Horario: </label>
            <div class='col-sm-9'>
                <input type='text' class='form-control' disabled id='fecha_init' name='hours' value='".$row['hour_init']." ".$row['hour_end']."'>
            </div>
        </div>
    ";
}


?>