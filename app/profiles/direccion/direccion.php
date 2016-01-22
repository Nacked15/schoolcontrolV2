<!-- BARRA DE NAVEGACIÓN SOLO USUARIOS LOGUEADOS -->
<nav class="navbar" role="navigation">
   <div class="container-fluid">
      <!-- Botón desplegable para pantallas de tamaño pequeño -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
            <span class="sr-only">Control Escolar</span>
            <i class="mdi-navigation-menu"></i>
         </button>
         <a class="navbar-brand" href="?menu_ad=principal"><img src="img/naatikIcon.jpg" alt="Brand" width="55" height="55" class="img-circle"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav nav-main">
              <li><a href="?menu_ad=principal"><i class="mdi-action-home"></i> PRINCIPAL</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="myDropdown"><i class="mdi-action-face-unlock"></i> ALUMNOS <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="?menu_ad=alumnos"><i id="icon" class="mdi-social-people"></i> Lista de Alumnos</a></li>
                  <li><a href="?menu_ad=alumnoNuevo"><i id="icon" class="mdi-social-person-add"></i> Registrar Nuevo Alumno</a></li>
                  <li><a href="?menu_ad=alumnoBecado"><i id="icon" class="mdi-action-stars"></i> Alumnos Becados</a></li>
                  <li><a href="?menu_ad=alumnoSep"><i id="icon" class="mdi-content-flag"></i> Alumnos Inscritos en la SEP</a></li>
                  <li><a href="?menu_ad=alumnosCalificaciones"><i id="icon" class="mdi-action-spellcheck"></i> Calificaciones</a></li>
                  <li><a href="?menu_ad=bajaAlumno"><i id="icon" class="mdi-action-thumb-down"></i> Ex Alumnos y Alumnos de Baja</a></li>
                </ul>
              </li>
              <li><a href="?menu_ad=maestros"><i class="mdi-social-school"></i> MAESTROS</a></li>
              <li><a href="?menu_ad=padrinos"><i class="mdi-action-loyalty"></i> PADRINOS</a></li>
              <li><a href="?menu_ad=cursos"><i class="mdi-av-my-library-books"></i> CURSOS</a></li>
              <li><a href="?menu_ad=users"><i class="mdi-social-people"></i> USUARIOS</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo strtoupper($_SESSION['username']); ?> <b class="caret"></b></a>
               <ul class="dropdown-menu">
               <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-profile" onclick="showProfile();"><i id="icon" class="mdi-action-settings"></i> Editar Perfil.</a></li>
               <li><a href="includes/logout.php"><i id="icon" class="mdi-navigation-cancel"></i> Cerrar Sesión</a></li>
               </ul>
            </li>
              <li>
                  <?php 
                     $query = "SELECT photo, category FROM user 
                     WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."';";
                     $resultado = mysqli_query($db_connect, $query);
                     while ($row = mysqli_fetch_array($resultado)) {
                        if ($row['category'] == $_SESSION['user_type']) {
                           $photo = $row['photo'];
                        echo "<img src='img/fotos/etc/$photo' alt='foto' class='img-circle ico' width='55px' height='55px'>"; 
                        } //-- Fin de if($row)
                     } //-- Fin de while($row)
                  ?>
              </li>
         </ul>
      </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
</nav>
<!-- FIN DE BARRA DE NAVEGACION -->
<div class="container">         
	<?php 
		include 'app/controladores/redirect.php';
	 ?>
</div>

<!-- INICIO DE MODAL 2 (Ver datos del Usuario) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-profile" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header second-color">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
               <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>PERFIL DE USUARIO</strong></h4>
            </div>
            <form action="app/profiles/transactions/updateProfile.php" method='POST' accept-charset='utf-8' class='form-horizontal' enctype="multipart/form-data">
            <div class="modal-body">
               <div id="userProfile">
                                    
               </div>                              
            </div>
            <div class="modal-footer foo">
                <button type="submit" class="btn btn-primary btn-sm btn-raised">GUARDAR</button>
                <button type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CERRAR</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN DEL MODAL -->

