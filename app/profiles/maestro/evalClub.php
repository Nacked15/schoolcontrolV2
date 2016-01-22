<!-- SECCION LISTA DE ALUMNOS CLUB -->
<div class="row">
   <div class="navbar-header bg-info hd">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" >
         <i class="mdi-navigation-more-vert"></i>
      </button> 
   </div>
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav nav-justified vx">    
         <li id='pestana1' role="presentation" class="state-on"><a class="sts" href="?menu_p=alumnos&evaluation=evalClub">ENGLISH CLUB <span class="badge"><?php teacherStCount('1'); ?></span></a></li>
         <li id='pestana2' role="presentation"><a class="sts" href="?menu_p=notasCapturar&evaluation=evalPrimary">PRIMARY <span class="badge"><?php teacherStCount('2'); ?></span></a></li>
         <li id='pestana3' role="presentation"><a class="sts" href="?menu_p=notasCapturar&evaluation=evalAdolescentes">ADOLESCENTES <span class="badge"><?php teacherStCount('3'); ?></span></a></li>
         <li id='pestana4' role="presentation"><a class="sts" href="?menu_p=notasCapturar&evaluation=evalAdultos">ADULTOS <span class="badge"><?php teacherStCount('4'); ?></span></a></li>
      </ul>
   </div>
</div>
<section id="club" class="well">
   <aside id="tabla">
      <div class="table-responsive">
         <table id="example" class="table table-bordered table-hover table-striped table-condensed">
            <thead>
               <tr class="info">
                  <th>#</th>
                  <th>Foto</th>
                  <th>Alumno</th>
                  <th>Curso</th>
                  <th>Grupo</th>
                  <th>Opciones</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  echo myStudentsEval('1');
               ?>
            </tbody>
         </table>
      </div>
   </aside>
</section>
<!-- FIN DE SECCION DE ALUMNOS CLUB -->

<script>
// $(function(){
//    var contadorClub = <?php teacherStCount('1'); ?>;
//    var contadorPrim = <?php teacherStCount('2'); ?>;
//    var contadorAdol = <?php teacherStCount('3'); ?>;
//    var contadorAdul = <?php teacherStCount('4'); ?>;

//    if (contadorClub == 0) {
//       $('li#pestana1').addClass('hidden');
//    }
//    if (contadorPrim == 0) {
//       $('li#pestana2').addClass('hidden');
//    }
//    if (contadorAdol == 0) {
//       $('li#pestana3').addClass('hidden');
//    }
//    if (contadorAdul == 0) {
//       $('li#pestana4').addClass('hidden');
//    }
// });
</script>
