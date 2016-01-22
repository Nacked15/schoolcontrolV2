<!-- BARRA DE NAVEGACIÓN SOLO USUARIOS LOGUEADOS -->
      <nav class="navbar navbar-primary" role="navigation">
        <div class="container-fluid">
          <!-- Botón desplegable para pantallas de tamaño pequeño -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Control Escolar</span>
              <i class="mdi-navigation-menu"></i>
            </button>
            <a class="navbar-brand" href="?menu_p=home"><img src="img/naatikIcon.jpg" alt="Brand" width="60" height="60" class="img-circle"></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav nav-main">
              <li><a href="?menu_p=home"><i class="mdi-action-home"></i> PRINCIPAL</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi-action-face-unlock"></i> ALUMNOS <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="?menu_p=alumnos"><i id="icon" class="mdi-social-people"></i> Lista de Alumnos</a></li>
                  <li><a href="?menu_p=alumnoSep"><i id="icon" class="mdi-content-flag"></i> Alumnos Inscritos en la SEP</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="mdi-action-spellcheck"></i> CALIFICACIONES <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="?menu_p=notasVer"><i id="icon" class="mdi-action-spellcheck"></i> Ver Calificaciones</a></li>
                  <li><a href="?menu_p=notasCapturar"><i id="icon" class="mdi-action-spellcheck"></i> Capturar Calificaciones</a></li>
                </ul>
              </li>
              <li class=""><a href="?menu_p=mCursos"><i class="mdi-av-my-library-books"></i> MIS CURSOS</a></li>
              <li></li>
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
               <img src="img/fotos/etc/<?php include_once 'app/php/photo.php'; ?>" alt='icon' class='img-circle ico' width="50px" height="50px">
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
  <!-- FIN DE BARRA DE NAVEGACION -->
<div class="container">
	<?php 
		@$_GET['menu_p'] = addslashes($_GET['menu_p']);
		switch ($_GET['menu_p']) {
			case 'home': include_once 'principal.php'; 
				break;
			case 'alumnos': include_once 'misAlumnos.php'; 
				break;
			case 'alumnoSep': include_once 'app/profiles/maestro/mySepSts.php'; 
				break;
			case 'notasVer': include_once 'app/profiles/maestro/notasVer.php'; 
				break;
			case 'notasCapturar': include_once 'app/profiles/maestro/capturarNotas.php'; 
				break;
			case 'mCursos': include_once 'app/profiles/maestro/mCursos.php'; 
				break;
      case 'EvalClub': include_once 'app/profiles/maestro/evaluacionEC.php'; 
        break;
      case 'EvalPAA': include_once 'app/profiles/maestro/evaluacionPAA.php'; 
        break;
      case 'viewEvals': include_once 'app/profiles/maestro/getEvaluations.php'; 
        break;
      case 'sep': include_once 'app/profiles/maestro/formatoSep.php'; 
        break;
			case 'profileEditP': include_once 'app/profiles/maestro/profileEdit.php'; 
				break;
			default: include_once 'principal.php';
			 	break;
		}

	 ?>
</div>

<!-- INICIO DE MODAL 2 (Ver datos del Usuario) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-profile" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header second-color">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
               <h3 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>PERFIL DE USUARIO</strong></h3>
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


