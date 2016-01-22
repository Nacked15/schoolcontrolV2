<div class="well bs-component">
   <div class="row navbar-example">
      <div class="col-sm-1"></div>
      <div class="col-sm-10 bordered">
         <ul class="nav nav-tabs nav-justified vw" role="tablist" id="myTab">
           <li role="presentation"><a href="#maestro" aria-controls="maestro" role="tab" data-toggle="tab">CALIFICACIONES</a></li>
         </ul>
         <div class="tab-content">
            <div role="tabpanel" class="row tab-pane fade in active" id="maestro">
               <div class="col-sm-1"></div>
               <div class="col-sm-10">
                  <h4 class="bg-primary text-center">Calificaciones</h4>
                  <div class="table-responsive">
                     <table id="example" class="table display">
                        <thead>
                           <tr>
                              <th class="text-center">#</th>
                              <th class="text-center">Foto</th>
                              <th class="text-center">Alumno</th>
                              <th class="text-center">Grupo</th>
                              <th class="text-center">Evaluaciones</th>
                           </tr>
                        </thead>
                        <tbody> 
                           <?php include 'app/profiles/maestro/actions/studentsEval.php'; allMyStudentsEval();?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="col-sm-1"></div>
            </div>
          </div>
      </div>
      <div class="col-sm-1"></div>
   </div>
</div>


<!-- INICIO DE MODAL 2 (Ver datos del Maestro) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-maestro" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <div class="navbar navbar-inverse navbar-fixed-top"><h3 class="text-center">Datos del Maestro</h3></div>
            </div>
            <div class="modal-body">
            <form action="app/profiles/transactions/updateTeacher.php" method='POST' accept-charset='utf-8' class='form-horizontal' enctype="multipart/form-data">
               <div id="datosmaestro">
                                    
               </div>                              
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-xs btn-raised">Guardar</button>
            </form>
                <button type="button" class="btn btn-default btn-xs btn-raised" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- FIN DEL MODAL -->