<?php include_once '../../includes/db_connect.php'; ?>
<?php 
    $IDsponsor = $_GET['s'];
    $i=1;
    
    //-- <-------------------------- ******************** ------------------------------->
    #-- Consulta para obtener las clases, con sus respectivos maestros.
    $query = "SELECT * 
                FROM sponsor 
                    WHERE id_sponsor='".$IDsponsor."' LIMIT 1;";
    $echo = mysqli_query($db_connect, $query) or die(mysqli_error());
    if ($echo) {
        while ($row = mysqli_fetch_array($echo)) {
?>

<!-- MODAL PARA CONFIRMAR ACCIÓN ELIMINAR -->
<div class="modal fade bs-example-modal-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h5 class="modal-title text-center text-warning" id="myModalLabel"><strong><i class="mdi-action-delete"></i> ELIMINAR PADRINO</strong></h5>
         </div>
         <div class="modal-body dummi">
            <p class="text-center text-info text-primary-color"><i class="mdi-alert-warning"></i> Eliminara este padrino de manera permanente <br>
            <strong>¿Desea continuar con esta acción?</strong></p>
         </div>
         <div class="modal-footer dummi">
            <a href="app/profiles/transactions/deleteSponsor.php?idSponsor=<?= $IDsponsor; ?>" class="btn btn-danger btn-raised btn-sm">ELIMINAR</a>
            <button class="btn btn-info btn-raised btn-sm" data-dismiss="modal">CANCELAR</button>                            
         </div>
      </div>
   </div>
</div>
<!-- FIN DE MODAL -->
<div class="row navbar-example">
   <ul class="nav nav-tabs vw nav-justified" role="tablist" id="myTab">
      <li role="presentation" class="state-on"><a href="#datos" aria-controls="datos" role="tab" data-toggle="tab">EDITAR DATOS</a></li>
   </ul>
   <div class="tab-content well">
      <div role="tabpanel" class="row tab-pane fade in active" id="datos">
      <a href='#' class='btn btn-danger btn-fab btn-raised mdi-content-clear' data-toggle='modal' data-target=".bs-example-modal-delete"></a>
         <div class="col-sm-1"></div>
         <div class="col-sm-11">
            <?php 
                echo "<input type='hidden' name='idsp' value='".$row['id_sponsor']."' class='form-control hidden'><br>";
            ?>

            <div class="form-group">
               <label class="col-sm-2">Tipo: </label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="typesp" value="<?= $row['type_sp'];?>">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2">Nombre:</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="namesp" value="<?= $row['name_sp'];?>">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2">Apellido:</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="surnamesp" value="<?= $row['surname_sp'];?>">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2">Correo:</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" name="emailsp" value="<?= $row['email'];?>">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2">Descripci&oacute;n:</label>
               <div class="col-sm-10">
                  <textarea name="descriptionsp" class="form-control" rows="2"><?= $row['description_sp'];?></textarea>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2">Estatus:</label>
               <div class="col-sm-10">
                  <select name="statsp" id="" class="form-control">
                     <option value="<?= $row['status_sp'];?>"><?= $row['status_sp'];?></option>
                     <option value="activo">Activo</option>
                     <option value="inactivo">Inactivo</option>
                  </select>
               </div>
            </div>      
         </div>
      </div>
   </div>
</div>
<?php 
   }
    } else {
        echo "<h3 class='text text-center text-warning'>Upss!! error inesperado de conexión con la Base de Datos.</h3>
        <h6 class='text text-center text-warning'>Por favor reporte este Error a su administrador.</h6>";
    }
    
    mysqli_close($db_connect);
?>

<!-- <a id='deletemodal' href='#' class='btn btn-danger btn-fab btn-raised mdi-content-clear' data-toggle='tooltip' data-placement='top' title='Eliminar'></a> -->