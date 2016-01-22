<?php 
    include_once ('../../includes/db_connect.php');

    list($teacher, $photo) = explode("-", $_GET['id']);
    $view = "SELECT * FROM teacher
                WHERE teacher.id_teacher=".$teacher." LIMIT 1;";
    $show = mysqli_query($db_connect, $view);

    while ($row = mysqli_fetch_array($show)) {        
?>
<!-- MODAL PARA CONFIRMAR ACCIÓN ELIMINAR -->
<div class="modal fade bs-example-modal-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center text-warning" id="myModalLabel"><strong><i class="mdi-action-delete"></i> ELIMINAR MAESTRO</strong></h4>
         </div>
         <div class="modal-body dummi">
            <p class="text-center text-info text-primary-color"><i class="mdi-alert-warning"></i> Elimira este maestro de manera permanente. <br>
            <strong>¿Desea continuar con esta acción?</strong></p>
         </div>
         <div class="modal-footer dummi">
          <a href="app/profiles/transactions/deleteTeacher.php?idTeacher=<?= $teacher; ?>" class="btn btn-danger btn-raised btn-sm">ELIMINAR</a>
            <button class="btn btn-info btn-raised btn-sm" data-dismiss="modal">CANCELAR</button>                            
         </div>
      </div>
   </div>
</div>
<!-- FIN DE MODAL -->

<div class="row navbar-example">
   <div class="col-sm-3">
      <button class='btn btn-dafult btn-sm mdi-navigation-arrow-back' data-dismiss="modal" data-toggle='tooltip' data-placement='top' title='Volver'></button><br>
      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
             <button href="#" class="dropdown-toggle btn btn-default btn-sm mdi-navigation-more-vert" data-toggle="dropdown" role="button" aria-expanded="false"></button>
             <ul class="dropdown-menu" role="menu">
               <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-delete"><i id="mini" class="mdi-action-highlight-remove"></i> <strong>Eliminar</strong></a></li>
             </ul>
         </li>
      </ul>
      <img src="img/fotos/etc/<?php echo $row['photo_te']; ?>" alt="foto" class="img-circle foto-st" width="135" height="135"><br><br><br><br>
      <h4 class="text-center text-primary"><strong>
         <?php 
            echo $row['name_te']." ".$row['surname_te'];
         ?>
      </strong></h4>
   </div>
   <div class="col-sm-8">
      <div class="row">
        <ul class="nav nav-tabs nav-justified vw" role="tablist" id="myTab">
           <li role="presentation" class="state-on"><a href="#teacher" aria-controls="teacher" role="tab" data-toggle="tab">Editar Datos</a></li>
        </ul>
      </div>
      <div class="tab-content row well">
         <div role="tabpanel" class="row tab-pane fade in active" id="teacher">
          <a href='#' class='btn btn-danger btn-fab btn-raised mdi-content-clear teach' data-toggle='modal' data-target=".bs-example-modal-delete"></a>
               <div class="col-sm-1"></div>
               <div class="col-sm-10">
                    <?php 
                    echo 
                    "
                     <div class='form-group'>
                        <label class='col-md-3'>Nombre: </label>
                        <div class='col-md-9'>
                           <input type='text' name='nombre_t' value='".$row['name_te']."' class='form-control'>
                        </div>
                     </div>
                     <div class='form-group'>
                        <label class='col-md-3'>Apellido: </label>
                        <div class='col-md-9'>
                           <input type='text' name='ape' value='".$row['surname_te']."' class='form-control'>
                        </div>
                     </div>     
                    <div class='form-group'>
                            <label class='col-md-3'>Cambiar Foto: </label>
                            <div class='col-md-9'>
                                <input type='file' id='file-3' name='uploadedfile' class='form-control'>
                            </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-8'>
                           <input type='hidden' name='keyteacher' value='".$teacher."' class='form-control hidden'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-8'>
                           <input type='hidden' name='picteacher' value='".$photo."' class='form-control hidden'>
                        </div>
                    </div>
                    ";
                    }?>
               </div>
               <div class="col-sm-1"></div>
         </div>
      </div>
   </div>
   <div class="col-sm-1"></div>
</div>

