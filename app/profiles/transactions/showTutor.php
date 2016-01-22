<?php include_once '../../../includes/db_connect.php'; ?>
<?php 
    $IDtutor = $_GET['c'];

    //-- <-------------------------- ******************** ------------------------------->
    #-- Consulta para obtener el numero de alumnos que tiene inscrito este tutor.
    $check = "SELECT S.name_s,S.surname1_s,S.surname2_s,S.id_tutor,S.photo_s FROM student S WHERE S.id_tutor='".$IDtutor."';";
        $view = mysqli_query($db_connect, $check) or die(mysqli_error());
        $count = $view->num_rows;
    
    //-- <-------------------------- ******************** ------------------------------->
    #-- Consulta para obtener las clases, con sus respectivos maestros.
    $query = "SELECT * 
                FROM tutor WHERE id_tutor=".$IDtutor.";";
    $echo = mysqli_query($db_connect, $query) or die(mysqli_error());
    $i=1;
    if ($echo) {
        while ($row = mysqli_fetch_array($echo)) {
            if ($row['name_t']=='N/A' && $row['surname1_t']=='N/A') {
                echo "<h3 class='text-center text-info'><strong>Este alumno no tiene Tutor</strong></h3>";
                echo "<a href='?menu_ad=viewUpdateTr&idTutor=".$IDtutor."' class='btn btn-info btn-fab btn-raised mdi-content-create' data-toggle='tooltip' data-placement='top' title='Editar Datos'></a>"; 
            } else {
?>

<div class="row navbar-example">
   <ul class="nav nav-tabs vw" role="tablist" id="myTab">
      <li role="presentation"><a href="#datos" aria-controls="datos" role="tab" data-toggle="tab">Datos</a></li>
      <li role="presentation"><a href="#hijos" aria-controls="hijos" role="tab" data-toggle="tab">Alumnos Inscritos <span class="badge"><?php echo $count; ?></span></a></li>
   </ul>
   <div class="tab-content well">
      <div role="tabpanel" class="row tab-pane fade in active" id="datos">
      <?php echo "<a href='?menu_ad=viewUpdateTr&idTutor=".$IDtutor."' class='btn btn-info btn-fab btn-raised mdi-content-create' data-toggle='tooltip' data-placement='top' title='Editar Datos'></a>"; ?> 
         <div class="col-sm-3"><h5 class="text-primary"><strong>Tutor:</strong></h5></div>
         <div class="col-sm-9">
            <?php 
               echo "<p><label>Nombre:</label>"." ".$row['name_t']." ".$row['surname1_t']." ".$row['surname2_t']."</p>";
               echo "<p><label>Parentesco:</label>"." ".$row['relationship']."</p>";
               echo "<p><label>Tel. Casa:</label>"." ".$row['phone']."</p>";
               echo "<p><label>Tel. celular:</label>"." ".$row['cellphone_t']."</p>";
               echo "<p><label>Dirección:</label>"." ".$row['address_t']."</p>";
               echo "<p><label>Ocupación:</label>"." ".$row['job']."</p>";
               echo "<p><label>Alumnos inscritos:</label>"." ".$count." </p>";
            ?>      
         </div>
      </div>
      <div role="tabpanel" class="row tab-pane fade" id="hijos">
         <?php echo "<a href='?menu_ad=alumnoNuevo&nuevo=infoGeneral&tutorID=".$IDtutor."' class='btn btn-info btn-fab btn-raised mdi-content-add' data-toggle='tooltip' data-placement='top' title='Nuevo Alumno'></a>"; ?>
         <div class="col-sm-3"><h5 class="text-primary"><strong>Alumnos Inscritos:</strong></h5></div>
         <div class="col-sm-9">
            <?php 
               while ($fila = mysqli_fetch_array($view)) {
            ?>
            <div class="bs-component">
               <div class="list-group">
                  <div class="list-group-item">
                     <div class="row-picture">
                         <img class="circle" src="img/fotos/student/<?php echo $fila['photo_s']; ?>" alt="icon">
                     </div>
                     <div class="row-content">
                         <h4 class="list-group-item-heading"><?php echo $i++.") ".$fila['name_s']; ?></h4>
                         <p class="list-group-item-text"><?php echo $fila['surname1_s']." ".$fila['surname2_s']; ?></p>
                     </div>
                  </div>
                  <div class="list-group-separator"></div>
               </div>
            </div>
            <?php } //-- Fin de While $fila ?>
         </div>
      </div>
   </div>
</div>

<?php

} //-- Fin de else de if->$row
        } //-- Fin del while $row
    } else {
        echo "<h3 class='text text-center text-warning'>Upss!! error inesperado de conexión con la Base de Datos.</h3>
        <h6 class='text text-center text-warning'>Por favor reporte este Error a su administrador.</h6>";
    } //-- Fin del ultimo else 

mysqli_close($db_connect); //Cierre de conexion con BD. 
?>
