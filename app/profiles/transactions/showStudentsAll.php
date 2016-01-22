 <?php


#-- Función que sirve para mostrar a todos los alumnos, con sus tutores, sin nungun tipo de clasificaíón.
function showStudentsAll(){
	#-- Conexión a la Base de datos.
   include 'includes/db_connect.php';
    
   //-- <-------------------------- ******************************* ------------------------------->
    //-- Culsulta para mostrar datos de los alumnos.
   $query = "SELECT * 
               FROM student S, classes C, naatik_course N, academic_info A, 
                    sep R, groups_nc G, tutor T, scholar B, info_extrast I
                  WHERE S.status = 'activo' AND
                        S.id_student = I.id_st AND
                        S.id_student = A.id_student AND 
                        A.id_classes = C.id_class AND
                        A.reg_sep    = R.id_sep AND
                        C.id_course  = N.id_course AND 
                        C.id_group   = G.id_group AND  
                        S.id_tutor   = T.id_tutor AND 
                        B.id_student = S.id_student ORDER BY S.surname1_s ASC;";

   $resultado = mysqli_query($db_connect, $query) or die (mysqli_error());
   $numero=1;

   //-- <-------------------------- ******************************* ------------------------------->
   #-- Obtener y mostrar los resultados de las consultas.
   $x=1;
   $hack = '';
   while ($fila = mysqli_fetch_array($resultado)) {
      if ($numero%2 != 0) { $str = 'warning'; } else { $str = 'active'; } #-- Fin de if-else ->$numero
      if ($fila['request'] == 'si') {
         $color = 'btn btn-info';
         $msg   = 'Retirar Solicitud';
         $flat  = 'mdi-action-done-all';
      }else{
         $color = 'btn btn-default';
         $msg   = 'Asignar Solicitud';
         $flat  = 'mdi-action-done';
      } #-- Fin de if-else ->$fila['request']

      if ($fila['name_t']=='N/A' && $fila['surname1_t']=='N/A') {
         $tutor = 'N/A';
      } else {
         $tutor = $fila['name_t']." ".$fila['surname1_t']." ".$fila['surname2_t'];
      } #-- Fin de if-else 2
      if ($x>10) {
        $hack = '<span class="check"></span>';
      }
      if ($fila['convenio']==0) {
         $info = "<i data-toggle='tooltip' data-placement='right' data-trigger='hover' title='Convenio pendiente de firmar' class='mdi-action-info'></i>";
      } else { $info = '';}

      $edad = calcular($fila['birthday']);
        
      echo "<tr class='".$str."'>";
         echo "<td class='hidden checkingSt'>
            <div class='checkbox'>
               <label>
               <input type='checkbox' id='changeCheck".$x++."' name='alumnos[]' value='".$fila['id_student']."'>
               <span class='checkbox-material check'>".$hack."
               </span>
               </label>
            </div>
         </td>";
            echo "<td><p class='text-center'>".$numero++."<br>".$info."</p></td>";
            echo "<td>
                <a href='#' data-toggle='modal' data-target='.bs-example-modal-alumno' onclick='datosStudent(".$fila['id_student'].",".$fila['id_class'].")'>"."<img src='img/fotos/student/".$fila['photo_s']."' class='img-circle' width=50px height=50px>".
                "</a>
            </td>";
            echo "<td><p>".$fila['surname1_s']." ".$fila['surname2_s']." ".$fila['name_s']."</p></td>";
            echo "<td><p class='text-center'>".$edad."</p></td>";
            echo "<td><a href='#' data-toggle='modal' data-target='.bs-example-modal-3' onclick='course(".$fila['id_student'].");'>".$fila['course']."</a></td>";
            echo "<td><p class='text-center'><a href='#' data-toggle='modal' data-target='.bs-example-modal-2' id='".$fila['id_class']."-".$fila['id_course']."-".$fila['id_student']."' onclick='groupss(this.id)'>".$fila['group']."</a></p></td>";
            echo "<td><a href='#' data-toggle='modal' data-target='.bs-example-modal-sm' id='".$fila['id_tutor']."' onclick='datosTutor(this.id)'>".$tutor."</a></td>";
            echo "<td data-toggle='tooltip' data-placement='bottom' data-trigger='hover' title='Más...'>
               <a href='#' data-toggle='modal' data-target='.bs-example-modal-alumno' onclick='datosStudent(".$fila['id_student'].",".$fila['id_class'].")' class='btn btn-primary btn-fab btn-raised mdi-action-launch'></a>
            </td>";
        echo "</tr>";
    } #-- Fin de While.
    echo "<input type='text' id='mycounter' class='hidden' value='".($x-1)."'/>";
    mysqli_close($db_connect); #-- Cerar conexión a BD.
} #-- Fin de función showStudents().



function showStudentsAllEval(){
  #-- Conexión a la Base de datos.
   include 'includes/db_connect.php';
    
   //-- <-------------------------- ******************************* ------------------------------->
    //-- Culsulta para mostrar datos de los alumnos.
   $query = 
      "SELECT * 
         FROM student S, classes C, naatik_course N, academic_info A, sep R, groups_nc G, tutor T, scholar B 
            WHERE S.status = 'activo' AND
                  S.id_student = A.id_student AND 
                  A.id_classes = C.id_class AND
                  A.reg_sep    = R.id_sep AND
                  C.id_course  = N.id_course AND 
                  C.id_group   = G.id_group AND  
                  S.id_tutor   = T.id_tutor AND 
                  B.id_student = S.id_student ORDER BY S.surname1_s ASC;";

   $resultado = mysqli_query($db_connect, $query) or die (mysqli_error());
   $numero=1;

   //-- <-------------------------- ******************************* ------------------------------->
   #-- Obtener y mostrar los resultados de las consultas.
   while ($fila = mysqli_fetch_array($resultado)) {
      if ($numero%2 != 0) { $str = 'warning'; } else { $str = 'active'; } #-- Fin de if-else ->$numero
       
      echo "<tr class='".$str."'>";
            echo "<td><p class='text-center'>".$numero++."</p></td>";
            echo "<td>"."<img src='img/fotos/student/".$fila['photo_s']."' class='img-circle' width=50px height=50px></td>";
            echo "<td><p>".$fila['surname1_s']." ".$fila['surname2_s']." ".$fila['name_s']."</p></td>";
            echo "<td>".$fila['course']." ".$fila['group']."</td>";
            echo "<td><a href='?menu_ad=evalSt&alumno=".$fila['id_student']."&curso=".$fila['id_course']."' class='label label-success'>Ver evaluaciones</a></td>";
        echo "</tr>";
    } #-- Fin de While.
    mysqli_close($db_connect); #-- Cerar conexión a BD.
}
?>