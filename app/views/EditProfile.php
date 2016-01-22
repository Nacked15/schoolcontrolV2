<?php
	include '../../includes/db_connect.php';
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$category = $_SESSION['user_type'];
	$getData = 
		"SELECT * FROM user 
			WHERE user.username = '$username' AND 
					user.password='$password' AND
					user.category = '$category' LIMIT 1;";
	$setData = mysqli_query($db_connect, $getData) or die(mysqli_error());
	if ($setData) {
		while ($usuario = mysqli_fetch_array($setData)) {
			
		
?>
<div class="row navbar-example">
   <div class="col-sm-3">
      <button class='btn btn-dafult btn-sm mdi-navigation-arrow-back' data-dismiss="modal" data-toggle='tooltip' data-placement='top' title='Volver'></button><br>
      <img src="img/fotos/etc/<?= $usuario['photo']; ?>" alt="foto" class="img-circle foto-st" width="135" height="135">
      <h4 class="text-center text-primary"><strong>
         <?php 
            echo $usuario['username'];
         ?>
      </strong></h4>
   </div>
   <div class="col-sm-8">
      <div class="row">
         <ul class="nav nav-tabs nav-justified vw" role="tablist" id="myTab">
            <li role="presentation" class="state-on"><a href="#user" aria-controls="user" role="tab" data-toggle="tab">Editar Perfil</a></li>
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
                           <input type='text' name='usuario' value='".$usuario['username']."' class='form-control'>
                        </div>
                     </div>
                     <div class='form-group'>
                        <label class='col-md-3'>Password: </label>
                        <div class='col-md-9'>
                           <input type='text' name='contrasena' value='".$usuario['password']."' class='form-control'>
                        </div>
                     </div>    
                     <div class='form-group'>
                        <label class='col-md-3'>Cambiar Foto: </label>
                        <div class='col-md-9'>
                           <input type='file' id='file-3' name='uploadedfile' class='form-control'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-9'>
                           <input type='hidden' name='recentPhoto' class='hidden' value='".$usuario['photo']."'>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-9'>
                           <input type='hidden' name='idusr' class='hidden' value='".$usuario['id_user']."'>
                        </div>
                    </div>
                    ";
                    ?>
               </div>
               <div class="col-sm-1"></div>
         </div>
      </div>
   </div>
   <div class="col-sm-1"></div>
</div>

<?php  
		} //== Fin de while->$usuario
	} // Fin de if->$setData
	mysqli_close($db_connect);
?>