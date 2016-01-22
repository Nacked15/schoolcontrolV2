<!-- SECCION LISTA DE ALUMNOS ADULTOS -->
<div class="row">
   <div class="navbar-header bg-info hd">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" >
         <i class="mdi-navigation-more-vert"></i>
      </button>
   </div>
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav nav-justified vx">  
         <li role="presentation"><a class="sts" href="?menu_ad=alumnos&registro=Club">ENGLISH CLUB <span class="badge"><?php stCount('1'); ?></span></a></li>
         <li role="presentation"><a class="sts" href="?menu_ad=alumnos&registro=Primary">PRIMARY <span class="badge"><?php stCount('2'); ?></span></a></li>
         <li role="presentation"><a class="sts" href="?menu_ad=alumnos&registro=Adolescentes">ADOLESCENTES <span class="badge"><?php stCount('3'); ?></span></a></li>
         <li role="presentation" class="state-on"><a class="sts" href="?menu_ad=alumnos&registro=Adultos">ADULTOS <span class="badge"><?php stCount('4'); ?></span></a></li>
         <li role="presentation"><a class="sts" href="?menu_ad=alumnos&registro=allStudents"><strong class="text-dark">TODOS <span class="badge"><?php stTotal(); ?></span></strong></a></li>
      </ul>
   </div>
</div>
<section id="adultos" class="well">
   <a href="#" id="showChecks" class="label label-primary">Cambiar Grupo <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></a>
   <a href="#" id="cancelchange" class="label label-warning hidden">Cancelar</a>
   <a href="#" onclick="showFacturationList();" class="label label-primary" data-toggle="modal" data-target=".bs-example-modal-facturacion"><span data-toggle='tooltip' data-placement='bottom' data-trigger='hover' title='Pulse para ver lista de facturas requeridas'>Facturaci&oacute;n <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></span></a>  
   <br><br> 
   <aside id="tabla">
      <div class="table-responsive">
         <table id="example" class="table table-bordered table-hover table-striped table-condensed">
            <thead>
               <tr class="info">
                  <th class="hidden text-primary" id="markerSt">
                     <div id="markAll" class='checkbox checkbox-inline hidden'>
                        <label onclick="checkAll();"><input type='checkbox' id='changeAll'>
                           <span class='checkbox-material'></span> Todos
                        </label>
                     </div>
                  </th>
                  <th>#</th>
                  <th>Foto</th>
                  <th nowrap="true"># de Control</th>
                  <th>Apellidos</th>
                  <th>Nombre</th>
                  <th>Edad</th>
                  <th>Curso</th>
                  <th>Grupo</th>
                  <th>Tutor</th>
                  <th>Opciones</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  echo showStudents('4');
               ?>
            </tbody>
            <tfoot class="hidden changeopttwo">
               <tr>
                  <td><a href="#" onclick="selectNewClass()" data-toggle="modal" data-target=".bs-example-modal-change" class="label label-primary">Cambiar <span class="glyphicon glyphicon-share-alt"></span></a></td>
               </tr>
            </tfoot>
         </table>
      </div>
   </aside>  
</section>
<!-- FIN DE SECCION DE ALUMNOS ADULTOS -->