<?php
include '../../../php/calcularEdad.php';
#-- Función que recibe como parametro si el alumno esta inscrito o no ante la SEP.
function stSep(){
      include '../../../../includes/db_connect.php';
   $maestro = $_SESSION['username'];
   $password = $_SESSION['password']; 

   $seleccion = "SELECT * FROM teacher T, user U 
                     WHERE T.iduser = U.id_user AND
                           U.category = 'maestro' AND
                           U.username = '$maestro' AND
                           U.password = '$password' ;";
   $do = mysqli_query($db_connect, $seleccion) or die(mysqli_error());
   if ($do) {
      while ($pointer = mysqli_fetch_array($do)) {
         $idTeacher = $pointer['id_teacher'];
      }
   }

      //-- <-------------------------- ******************************* ------------------------------->
      #-- Consulta para obtener la lista de alumnos.
      $query = "SELECT * FROM student S, academic_info A, sep R, classes C, naatik_course N, groups_nc G
                  WHERE S.id_student = A.id_student AND
                        A.reg_sep    = R.id_sep AND
                        A.id_classes = C.id_class AND
                        C.id_course  = N.id_course AND
                        C.id_group   = G.id_group AND
                        C.teacher    = '$idTeacher' AND 
                        R.issep      = 'si';";
      $result = mysqli_query($db_connect, $query) or die(mysqli_error());
      $id=1;
      $info_sep = "";
      $showAdd = "";

      //-- <-------------------------- ******************************* ------------------------------->
      #-- Obtener y mostrar los resultados de la consulta.
      while ($row = mysqli_fetch_array($result)) {
         if ($id%2==0) { $div="<div class='clearfix'></div>"; } else{ $div=''; }
            $showAdd = "
               <div class='row'><div class='col-md-10'></div>
                  <div class='col-md-2'>
                     <a href='#' onclick='showDataSep(".$row['id_student'].");' data-toggle='modal' data-target='.bs-example-modal-editor' class='btn btn-fab btn-raised mdi-content-create sepIcons'></a>
                  </div>
               </div>";
            $info_sep = 
               "<hr clss='hr'>
                  <label>N&uacute;mero de Registro: </label>"."  ".$row['regis_num']."<br>
                  <label>Fecha de Registro: </label>"."  ".$row['date_incorporate']."<br>
                  <label>Calificaci&oacute;n: </label>"."  ".$row['calification_sep']."<br>";


         //-- <-------------------------- ++++++++++ ------------------------------->
         $nacimiento = mes($row['birthday']);
         $edad = calcular($row['birthday']); #-- Calcular la edad del alumno con su fecha de nacimiento.
         #-- Filtrar unicamente a los alumnos que tengan 15 o mas años.
         if ($edad >= 15) {
         echo "<div class='col-sm-12 col-sm-12 col-md-6 col-lg-6'>";
         echo "<div class='panel-group' id='accordion' role='tablist' aria-multiselectable='true'>
                  <div class='panel panel-default'>
                  ".$showAdd."
                     <div class='panel-heading' role='tab' id='heading".$row['id_student']."'>
                        <div class='row-picture'>
                           <img class='circle' src='img/fotos/student/".$row['photo_s']."' alt='icon'>
                        </div>
                           <h4 class='panel-title'>
                           <a data-toggle='collapse' data-parent='#accordion' href='#".$row['id_student']."' aria-expanded='false' aria-controls='".$row['id_student']."'>
                           ".$row['name_s']." ".$row['surname1_s']."</a>
                           </h4>
                     </div>
                     <div style='padding-left:55px;padding-top:20px;'> 
                        <div id='".$row['id_student']."' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading".$row['id_student']."' aria-expanded='false'> 
                           <div class='panel-body'>
                              <label>Nombre: </label> "."  ".$row['name_s']." ".$row['surname1_s']." ".$row['surname2_s']." <br>
                              <label>Edad: </label> "."  ".$edad."<br>
                              <label>Fecha Nac.: </label>"."  ".$nacimiento."<br>
                              <label>Sexo: </label>"."  ".$row['sexo']."<br>
                              <label>Tel. Celular: </label>"."  ".$row['cellphone']."
                              ".$info_sep."
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            <div class='list-group-separator'></div></div>".$div."";
         $id++; 
         } #-- Fin del if edad.
      } #-- Fin de while.                        
} #-- Fin de la función stSep().
stSep();
?>