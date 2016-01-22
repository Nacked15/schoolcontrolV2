<!-- SECCION LISTA DE ALUMNOS CLUB -->
<div class="row">
   <div class="navbar-header bg-info hd">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" >
         <i class="mdi-navigation-more-vert"></i>
      </button> 
   </div>
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav nav-justified vx">    
         <li role="presentation" class="state-on"><a class="sts" href="?menu_p=alumnos&element=Club">ENGLISH CLUB <span class="badge"><?php teacherStCount('1'); ?></span></a></li>
         <li role="presentation"><a class="sts" href="?menu_p=alumnos&element=Primary">PRIMARY <span class="badge"><?php teacherStCount('2'); ?></span></a></li>
         <li role="presentation"><a class="sts" href="?menu_p=alumnos&element=Adolescentes">ADOLESCENTES <span class="badge"><?php teacherStCount('3'); ?></span></a></li>
         <li role="presentation" id="pestana4"><a class="sts" href="?menu_p=alumnos&element=Adultos">ADULTOS <span class="badge"><?php teacherStCount('4'); ?></span></a></li>
         <li role="presentation"><a class="sts" href="?menu_p=alumnos&element=allStudents"><strong class="text-dark">TODOS <span class="badge"><?php TeacherStTotal(); ?></span></strong></a></li>
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
                  <th>Ape. Paterno</th>
                  <th>Ape. Materno</th>
                  <th>Nombre</th>
                  <th>Edad</th>
                  <th>Curso</th>
                  <th>Grupo</th>
                  <th>Opciones</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  echo myStudents('1');
               ?>
            </tbody>
         </table>
      </div>
   </aside>
</section>
<!-- FIN DE SECCION DE ALUMNOS CLUB -->

<script>
$(function(){
 var id = 4;
 alert('this: '+id);
  if (id == 0) {
      $('li#pestana4').addClass('hidden');
   }
});
</script>