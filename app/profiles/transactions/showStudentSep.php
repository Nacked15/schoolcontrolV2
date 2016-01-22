<?php
include '../../php/calcularEdad.php';
#-- Función que recibe como parametro si el alumno esta inscrito o no ante la SEP.
function stSep($isSep){
      include '../../../includes/db_connect.php';

      //-- <-------------------------- ******************************* ------------------------------->
      #-- Consulta para obtener la lista de alumnos.
      $query = "SELECT * FROM student S, academic_info A, sep R, classes C, naatik_course N, groups_nc G
                  WHERE S.status = 'activo' AND
                        S.id_student=A.id_student AND
                        A.reg_sep=R.id_sep AND 
                        R.issep='$isSep' AND
                        A.id_classes = C.id_class AND
                        C.id_course = N.id_course AND
                        C.id_group = G.id_group ;";
      $result = mysqli_query($db_connect, $query);
      $id=1;
      $info_sep = "";
      $showAdd = "";

      //-- <-------------------------- ******************************* ------------------------------->
      #-- Obtener y mostrar los resultados de la consulta.
      while ($row = mysqli_fetch_array($result)) {
         if ($id%2==0) { $div="<div class='clearfix'></div>"; } else{ $div=''; }
         if ($isSep == 'no'){
            $showAdd = "
               <div class='row'><div class='col-md-10'></div>
                  <div class='col-md-2'>
                     <a href='#' onclick='setID(".$row['id_student'].");' data-toggle='modal' data-target='.bs-example-modal-register' class='btn btn-fab btn-raised mdi-content-create sepIcons'></a>
                  </div>
               </div>";
            $info_sep="no hay datos de Registro";
         } else { 
            $showAdd = "
               <div class='row'><div class='col-md-10'></div>
                  <div class='col-md-2'>
                     <a href='#' onclick='showDataSep(".$row['id_student'].");' data-toggle='modal' data-target='.bs-example-modal-editor' class='btn btn-fab btn-raised mdi-content-create sepIcons'></a>
                  </div>
               </div>";
            $info_sep = "<hr clss='hr'>
                           <label>N&uacute;mero de Registro: </label>"."  ".$row['regis_num']."<br>
                           <label>Fecha de Registro: </label>"."  ".mes($row['date_incorporate'])."<br>
                           <label>Calificaci&oacute;n: </label>"."  ".$row['calification_sep']."<br>
                           <label>Beca: </label>"."  ".$row['beca']." %<br>
                        ";
         }

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
                              <label># Control: </label>"."  ".$row['ncontrol']."<br>
                              <label>Nombre: </label> "."  ".$row['name_s']." ".$row['surname1_s']." ".$row['surname2_s']." <br>
                              <label>Edad: </label> "."  ".$edad." a&ntilde;os<br>
                              <label>Fecha Nac.: </label>"."  ".$nacimiento."<br>
                              <label>Tel. Celular: </label>"."  ".$row['cellphone']."<br>
                              <label>Grupo: </label>"."  ".$row['course']." ".$row['group']."
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
      echo "<div class='row'>
            <div class='col-xs-0 col-sm-2 col-md-3'></div>
            <div class='col-xs-12 col-sm-8 col-md-6'>
                
            </div>
            <div class='col-xs-0 col-sm-2 col-md-3'></div>
      </div>";                        
} #-- Fin de la función stSep().
stSep($_GET['issep']);
?>