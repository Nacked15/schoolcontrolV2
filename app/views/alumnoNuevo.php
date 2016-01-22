<div class="container">
<!-- MIGAS DE PAN -->
<ol class="breadcrumb hidden-xs hidden-sm visible-md visible-lg">
  <li><a href="?menu_ad=principal">Principal</a></li>
  <li><a href="javascript:history.go(-1)">Lista de Alumnos</a></li>
  <li class="active">Inscribir Alumno</li>
</ol>
<!-- FIN DE MIGAS DE PAN -->
   <!-- CONTENEDOR FLOTANTE -->
   <div class="well">
    <h4 class="text text-center text-primary">CEDULA DE INSCRIPCIÓN</h4>
      <div class="contenido">
         <?php 
            @$_GET['nuevo'] = addslashes($_GET['nuevo']);
            switch ($_GET['nuevo']) {
               case 'infoTutor': include_once 'app/views/alumnoNuevoTutor.php';
                  break;
               case 'infoGeneral': include_once 'app/views/alumnoNuevoGeneral.php';
                  break;
               case 'infoAcademica': include_once 'app/views/alumnoNuevoAcademic.php';
                  break;
               default: include 'app/views/alumnoNuevoTutor.php';
                  break;
            }
         ?>
      </div> 
   </div>
</div>
