<?php 
include '../../php/calcularEdad.php'; #-- Include para calcular la edad.
   $isBecado = $_GET['becario'];
   stScholar('si',$isBecado);

   #-- Funcion que requiere de dos parametros para mostrar a los alumnos becados y solicitantes.
   function stScholar($request,$togrant){
      $fecha_beca = "";
      include '../../../includes/db_connect.php';
      $result = mysqli_query($db_connect, query($request, $togrant)) or die (mysqli_error());
      $i=1;

      //-- <-------------------------- **************************** ------------------------------->
      #-- Obtener y mostrar resultados de la consulta.
		echo "<div class='panel-group' id='accordion' role='tablist' aria-multiselectable='true'>";

      while ($row = mysqli_fetch_array($result)) {
         #-- Botón flotante para reasignar becas en la pestaña becados. Boton flotante para asignacion de beca a solicitantes
         if ($togrant == 'no'){
            $sponsorInfo = "";
            $btnA ="";
            $fecha_beca = "No Aplica";
         } else { 
            $btnA ="<a href='#' data-toggle='modal' data-target='.bs-example-modal-rs' 
                     class='btn btn-default btn-fab btn-raised' id='becadosIcons' onclick='changeScholar(".$row['id_student'].");'>
                     <i class='mdi-action-cached' data-toggle='tooltip' data-placement='top' title='Reasignar Beca'></i></a>";
               $fecha_beca = mes($row['date_scholar']);
               
            $consulta = "SELECT * FROM sponsor S WHERE S.id_scholar = '".$row['id_grant']."';";
            $do = mysqli_query($db_connect, $consulta);
            $count = $do->num_rows;
            $item = "";
            while ($i = mysqli_fetch_array($do)) {
               if ($count == 1) {
                  $sponsorInfo = 
                  "<label>Padrino(s):</label>"." ".$i['name_sp']." ".$i['surname_sp']."<br>";
               } elseif ($count > 1) {
                  $sponsorInfo = 
                     "<label>Padrino(s):</label>"." ".$i['name_sp']." ".$i['surname_sp']." "."
                     <a href='#' id='".$row['id_scholar']."' title='sp' data-toggle='modal' 
                     data-target='.bs-example-modal-sp' onclick='moreSponsor(this.id)' 
                     class='label label-info'>+".($count-1)." ver todos</a><br>";   
               }  
            }
         }
         $edad = calcular($row['birthday']);
         $fecha_nac = mes($row['birthday']);

         echo "<div class='col-sm-12 col-sm-12 col-md-6 col-lg-6'>";
         echo "<br>
               <div class='panel'>
                  ".$btnA."
                     <div class='panel-heading' role='tab' id='heading".$row['id_student']."'>
                        <div class='row-picture'>
                           <img class='circle' src='img/fotos/student/".$row['photo_s']."' alt='icon'>
                        </div>
                        <h4 class='panel-title'>
                           <a data-toggle='collapse' data-parent='#accordion' href='#".$row['id_student']."' 
                           aria-expanded='false' aria-controls='".$row['id_student']."'>
                              ".$row['name_s']." ".$row['surname1_s']." ".$row['surname2_s']."
                           </a>
                        </h4>
                     </div>
                     <div style='padding-left:45px;padding-top:20px;'> 
                        <div id='".$row['id_student']."' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading".$row['id_student']."'>
                           <div class='panel-body'>
                              <label>Alumno:</label>"." ".$row['name_s']." ".$row['surname1_s']." ".$row['surname2_s']."<br>
                              <label>Grupo: </label> "." ".$row['course']."<br>
                              <label>Edad: </label> "." ".$edad." a&ntilde;os<br>
                              <label>Fecha de Nacimiento: </label>"." ".$fecha_nac."<br>
                              <label>Sexo: </label>"." ".$row['sexo']."<br>
                              <label>Tel. Celular: </label>"." ".$row['cellphone']."<br>
                              ".$sponsorInfo."
                              <label>Fecha de inicio de beca: </label>"." ".$fecha_beca."<br>
                              <label>Tutor: </label>"." ".$row['name_t']." ".$row['surname1_t']."<br>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class='list-group-separator'></div>";
         echo "</div>"; 

         $i++; 
      }  #-- Fin del while
		echo "</div>";
} #-- Fin de la funcion stScholar.


function query($solicitud, $beca) {
   //-- <-------------------------- **************************** ------------------------------->
      #-- Si es becado obtener los datos del padrino. De lo contrario mostrar solo info del alumno solicitante.
   include '../../../includes/db_connect.php';
   if ($beca == 'si') {
         $query = "SELECT *
                     FROM student S, academic_info A, classes C, naatik_course N, 
                           groups_nc G, tutor T, sponsor P, scholar B 
                        WHERE S.status='activo' AND B.request='$solicitud' AND B.togrant='$beca' AND 
                              B.id_student=S.id_student AND S.id_student=A.id_student AND
                              A.id_classes=C.id_class AND C.id_course=N.id_course AND
                              C.id_group = G.id_group AND T.id_tutor = S.id_tutor AND 
                              P.id_scholar=B.id_grant;";
      } elseif ($beca == 'no') {
         $query = "SELECT *
                     FROM student S, academic_info A, classes C, naatik_course N, tutor T, 
                           scholar B, groups_nc G
                        WHERE B.request='$solicitud' AND B.togrant='$beca' AND 
                              B.id_student=S.id_student AND S.id_student=A.id_student AND
                              A.id_classes=C.id_class AND C.id_course=N.id_course AND
                              C.id_group = G.id_group AND T.id_tutor = S.id_tutor;";
      }
      return $query;
}
?>