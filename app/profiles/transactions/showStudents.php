 <?php
include 'app/php/calcularEdad.php';

#-- Función que recibe como parametro el nivel del curso del alumno y definir en que lista aparecera.
function showStudents($nivel){
	#-- Conexión a la Base de datos.
    include 'includes/db_connect.php';
    
    //-- <-------------------------- ******************************* ------------------------------->
    //-- Culsulta para mostrar datos de los alumnos.
    $query = "SELECT * 
                FROM student S, classes C, naatik_course N, academic_info A, 
                     groups_nc G, tutor T, scholar B, info_extrast I
                    WHERE S.status = 'activo' AND
                          S.id_student = I.id_st AND
                          S.id_student = A.id_student AND 
                          A.id_classes = C.id_class AND
                          C.id_course = N.id_course AND 
                          C.id_group = G.id_group AND 
                          C.id_course ='".$nivel."' AND 
                          S.id_tutor = T.id_tutor AND 
                          B.id_student = S.id_student ORDER BY S.surname1_s ASC;";

    $resultado = mysqli_query($db_connect, $query) or die (mysqli_error());
    $numero=1;

    //-- <-------------------------- ******************************* ------------------------------->
    #-- Obtener y mostrar los resultados de las consultas.
    $x=1;
    $str = "";
    $info = '';
    $hack = '';
    $numControl = '';
   while ($fila = mysqli_fetch_array($resultado)) {
      if ($fila['status_class']=='finalizado') {
         $str = "studentStandBy";
      }elseif ($numero%2 != 0) { $str = 'warning';}else {$str = 'active';} #-- Fin de if-else 0

      if ($fila['name_t']=='N/A' && $fila['surname1_t']=='N/A') { $tutor = 'N/A';
        } else { $tutor = $fila['name_t']." ".$fila['surname1_t']." ".$fila['surname2_t'];} #-- Fin de if-else 2
      if ($x>10) {
        $hack = '<span class="check"></span>';
      }
      if ($fila['convenio']==0) {
         $info = "<i data-toggle='tooltip' data-placement='right' data-trigger='hover' title='Convenio pendiente de firmar' class='mdi-action-info'></i>";
      } else { $info = '';}
      if ($fila['ncontrol']=='pendiente' || $fila['ncontrol']=='') {
         $valorId = $fila['id_student'];
         $numControl = "<a href='#' data-toggle='modal' data-target='.bs-example-modal-ncontrol' onclick='addcontrolnum(".$valorId.");'>Asignar # de control</a>";
      } else { $numControl = $fila['ncontrol'];}

        $edad = calcular($fila['birthday']);
        echo "<tr class='".$str."'>";
            echo "<td class='hidden checkingSt'>
                     <div class='checkbox'>
                        <label>
                        <input type='checkbox' id='changeCheck".$x++."' name='alumnos[]' value='".$fila['id_student']."'>
                        <span class='checkbox-material'> ".$hack."
                           
                        </span>
                        </label>
                     </div>
                  </td>";
            echo "<th class='text-center'>".$numero++."<br>".$info."</th>";
            echo "<th><a href='#' data-toggle='modal' data-target='.bs-example-modal-alumno' onclick='datosStudent(".$fila['id_student'].",".$fila['id_class'].")'>"."<img src='img/fotos/student/".$fila['photo_s']."' class='img-circle' width=50px height=50px>"."</a></th>";
            echo "<td>".$numControl."</td>";
            echo "<td>".$fila['surname1_s']." ".$fila['surname2_s']."</td>";
            echo "<td>".$fila['name_s']."</td>";
            echo "<td>".$edad."</td>";
            echo "<td><a href='#' data-toggle='modal' data-target='.bs-example-modal-3' onclick='course(".$fila['id_student'].");'>".$fila['course']."</a></td>";
            echo "<td><a href='#' data-toggle='modal' data-target='.bs-example-modal-2' id='".$fila['id_class']."-".$fila['id_course']."-".$fila['id_student']."' onclick='groupss(this.id)'>".$fila['group']."</a></td>";
            echo "<td><a href='#' data-toggle='modal' data-target='.bs-example-modal-sm' id='".$fila['id_tutor']."' onclick='datosTutor(this.id)'>".$tutor."</a></td>";
            echo "<td data-toggle='tooltip' data-placement='bottom' data-trigger='hover' title='Más...'><a href='#' data-toggle='modal' data-target='.bs-example-modal-alumno' onclick='datosStudent(".$fila['id_student'].",".$fila['id_class'].")' class='btn btn-primary btn-fab btn-raised mdi-action-launch'></a></td>";
        echo "</tr>";
    } #-- Fin de While.
    echo "<input type='text' id='mycounter' class='hidden' value='".($x-1)."'/>";
    
    mysqli_close($db_connect); #-- Cerar conexión a BD.
} #-- Fin de función showStudents().

?>