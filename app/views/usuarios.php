<ol class="breadcrumb hidden-xs hidden-sm visible-md visible-lg">
  <li><a href="?menu_ad=principal">Principal</a></li>
  <li class="active"><a href="?menu_ad=users">Usuarios</a></li>
</ol>
<div class="well">
	<div class="navbar-example">
   <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
         <ul class="nav nav-tabs nav-justified vx" role="tablist" id="myTab">
            <li role="presentation"><a href="#userList" aria-controls="userList" role="tab" data-toggle="tab">USUARIOS</a></li>
         	<li role="presentation"><a href="#nuevo" aria-controls="nuevo" role="tab" data-toggle="tab">NUEVO USUARIO</a></li>
         </ul>
      </div>
      <div class="col-sm-1"></div>
   </div>
   <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
         <div class="well">
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane fade in active" id="userList">
                  <h4 class="bg-primary text-center">Lista</h4>
                  <div class="table-responsive">
                     <table id="example" class="table display">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Picture</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Category</th>
                              <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody id="userData"> 
                           <?php include 'app/profiles/direccion/viewUsers.php'; ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div role="tabpanel" class="row tab-pane fade" id="nuevo">
                  <h4 class="bg-primary text-center">Registro de Usuarios</h4>
                  <div class="col-xs-1"></div>
                  <div class="col-xs-10">
                  	<form action="app/profiles/direccion/addUser.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
		                     <div class="form-group">
		                        <label for="inputname2" class="col-sm-4 control-label">Username: </label>
		                        <div class="col-sm-8">
		                           <input type="text" class="form-control" id="usernamekey" name="username" placeholder="Name" autocomplete="off" required>
		                        </div>
		                     </div>
		                     <div class="form-group">
		                        <label for="inputsurname2" class="col-sm-4 control-label">Password: </label>
		                        <div class="col-sm-8">
		                           <input type="text" class="form-control" id="password" name="password" placeholder="Surname" required>
		                        </div>
		                     </div>
		                     <div class="form-group">
			                     <label for="inputsurname2" class="col-sm-4 control-label">Category: </label>
			                     <div class="col-sm-8">
			                     	<select class="form-control"  name="category" onchange="validarUsername(this.value)">
				                        <option value="">Seleccione...</option>
				                        <option value="3">Direccion</option>
				                        <option value="2">Control Escolar</option>
				                        <option value="1">Maestro</option>
				                     </select>
				                  </div>
		                     </div>
                         <div id="txtHint"></div>
		                     <div class="form-group">
		                        <label for="inputparentesco" class="col-sm-4 control-label">Subir Foto: </label>
		                        <div class="col-sm-8">
		                           <input type="file" id="file-3" name="uploadedfile" class="form-control">
		                        </div>
		                     </div>
		                     <br>        
		                     <div class="row">
		                        <div class="col-sm-4"></div>
		                        <div class="col-sm-4">
		                           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-confirm"> GUARDAR</button>
		                           <div class="modal fade bs-example-modal-confirm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		                              <div class="modal-dialog modal-sm">
		                                 <div class="modal-content">
		                                    <div class="modal-header">
		                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
		                                       <h5 class="modal-title text-center" id="myModalLabel"><strong><i class="mdi-content-save"></i>  GUARDAR USUARIO</strong></h5>
		                                    </div>
		                                    <div class="modal-body dummi">
		                                       <p class="text-center text-info text-primary-color">¿Desea continuar con esta acción?</p>
		                                    </div>
		                                    <div class="modal-footer dummi">
		                                       <button class="btn btn-success btn-raised btn-sm"><i class='mdi-file-cloud-upload'></i> GUARDAR</button>
		                                       <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal"><i class='mdi-file-cloud-off'></i> CANCELAR</button>                            
		                                    </div>
		                                 </div>
		                              </div>
		                           </div>
		                        </div>
		                        <div class="col-sm-4"></div>
		                     </div>
		               </form>
                  </div>
                  <div class="col-xs-1"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-1"></div>
   </div>
   </div> 
</div>

<!-- INICIO DE MODAL 2 (Ver datos del Usuario) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-user" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header second-color">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
               <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>DATOS DEL USUARIO</strong></h4>
            </div>
            <form action="app/profiles/direccion/updateUser.php" method='POST' accept-charset='utf-8' class='form-horizontal' enctype="multipart/form-data">
            <div class="modal-body">
               <div id="datosusuario">
                                    
               </div>                              
            </div>
            <div class="modal-footer foo">
                <button type="submit" class="btn btn-primary btn-sm btn-raised">GUARDAR</button>
                <button type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CANCELAR</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN DEL MODAL -->

