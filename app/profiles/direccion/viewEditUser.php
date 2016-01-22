<?php 
    include_once ('../../../includes/db_connect.php');

    list($usr, $picture) = explode("-", $_GET['id']);
    $view = "SELECT * FROM user
                WHERE user.id_user=".$usr." LIMIT 1;";
    $show = mysqli_query($db_connect, $view);

    while ($row = mysqli_fetch_array($show)) {        
?>
<!-- MODAL PARA CONFIRMAR ACCIÓN ELIMINAR -->
<div class="modal fade bs-example-modal-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
              <h4 class="modal-title text-center text-warning" id="myModalLabel"><strong><i class="mdi-action-delete"></i> ELIMINAR USUARIO</strong></h4>
           </div>
           <div class="modal-body dummi">
              <p class="text-center text-info text-primary-color"><i class="mdi-alert-warning"></i> Eliminara este usuario de manera permanente <br>
              <strong>¿Desea continuar con esta acción?</strong></p>
           </div>
           <div class="modal-footer dummi">
               <a href="app/profiles/direccion/deleteUser.php?id=<?= $usr; ?>" class="btn btn-danger btn-raised btn-sm">ELIMINAR</a>
              <!-- <button class="btn btn-primary btn-raised btn-sm"><i class='mdi-file-cloud-upload'></i> SI</button> -->
              <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal">CANCELAR</button>                            
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
      <img src="img/fotos/etc/<?php echo $row['photo']; ?>" alt="foto" class="img-circle foto-st" width="135" height="135">
      <h4 class="text-center text-primary"><strong>
         <?php 
            echo $row['username'];
         ?>
      </strong></h4>
   </div>
   <div class="col-sm-8">
      <div class="row">
         <ul class="nav nav-tabs nav-justified vw" role="tablist" id="myTab">
            <li role="presentation" class="state-on"><a href="#user" aria-controls="user" role="tab" data-toggle="tab">Editar Datos</a></li>
         </ul>
      </div>
      <div class="tab-content row well">
         <div role="tabpanel" class="row tab-pane fade in active" id="user">
               <div class="col-sm-1"></div>
               <div class="col-sm-10">
                  
                    <?php 
                    echo 
                    "
                     <div class='form-group'>
                        <label class='col-md-3'>Username: </label>
                        <div class='col-md-9'>
                           <input type='text' name='usuario' value='".$row['username']."' class='form-control'>
                        </div>
                     </div>
                     <div class='form-group'>
                        <label class='col-md-3'>Password: </label>
                        <div class='col-md-9'>
                           <input type='text' name='contrasena' value='".$row['password']."' class='form-control'>
                        </div>
                     </div>
                     <div class='form-group'>
                              <label class='col-md-3'>Category: </label>
                              <div class='col-md-9'>
                                 <select class='form-control'  name='category'>
                                    <option value=".$row['category'].">".$row['category']."</option>
                                    <option value='3'>Director</option>
                                    <option value='2'>Control Escolar</option>
                                    <option value='1'>Maestro</option>
                                 </select>
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
                           <input type='hidden' name='keyuser' value='".$usr."' class='form-control hidden'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-8'>
                           <input type='hidden' name='pictuser' value='".$picture."' class='form-control hidden'>
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
