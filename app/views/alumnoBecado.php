<ol class="breadcrumb hidden-xs hidden-sm visible-md visible-lg">
  <li><a href="?menu_ad=principal">Principal</a></li>
  <li><a href="?menu_ad=alumnos">Lista de Alumnos</a></li>
  <li class="active">Alumnos Becados</li>
</ol>

<div class="well">
   <div class="navbar-example">
	   <div class="row">
	      <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>
	      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
	         <ul class="nav nav-tabs nav-justified vx" role="tablist" id="myTab">
	            <?php include_once ('app/php/studentCount.php') ?>
					<li role="presentation"><a href="#becados" aria-controls="becados" role="tab" data-toggle="tab">BECADOS <span class="badge"><?php stnScholar('si');?></span></a></li>
					<li role="presentation"><a href="#solicitantes" aria-controls="solicitantes" role="tab" data-toggle="tab">SOLICITANTES <span class="badge"><?php stnScholar('no');?></span></a></li>
	         </ul>
	      </div>
	      <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>
	   </div>
	   <div class="row">
	      <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>
	      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
	      	<div class="well">
	            <div class="tab-content">
						<div role="tabpanel" class="row tab-pane fade in active" id="becados">
							<div class="col-xs-0 col-sm-1 col-md-0 col-lg-0"></div>
							<div class="col-xs-12 col-sm-10 col-md-12 col-lg-12">
								<h4 class="bg-primary text-center">Lista de alumnos becados</h4><br>
								<section id="becado">
								 	<div class="list-group">
								 	<input type="hidden" id="becadoSi" class="hidden" value="si">
										<div class="list-group-item" id="scholarYes">

										</div>
								 	</div> 
							   </section>
							</div>
							<div class="col-xs-0 col-sm-1 col-md-0 col-lg-0"></div>
						</div>
						<div role="tabpanel" class="row tab-pane fade" id="solicitantes">
							<div class="col-xs-0 col-sm-1 col-md-0 col-lg-0"></div>
							<div class="col-xs-12 col-sm-10 col-md-12 col-lg-12">
								<h4 class="bg-primary text-center">Lista de alumnos solicitantes</h4><br>
								<section id="solicitante">
								 	<div class="list-group">
								 	<input type="hidden" id="becadoNo" class="hidden" value="no">
										<div class="list-group-item" id="scholarNot">

										</div>
								 	</div>              
							  	</section>
							</div>
							<div class="col-xs-0 col-sm-1 col-md-0 col-lg-0"></div>
						</div>				
	            </div>
	      	</div>
	      </div>
	      <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>
	   </div>
   </div> 
</div>


<!-- INICIO DE MODAL 2 (Ver datos del tutor) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sp">Small modal</button> -->
<div class="modal fade bs-example-modal-sp" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>PADRINOS</strong></h4>
         </div>
         <div class="modal-body">
            <div id="datospadrino">
                                    
            </div>                              
         </div>
         <div class="modal-footer">
            <!-- <button type="submit" class="btn btn-primary btn-xs btn-raised">Guardar</button> -->
         <button type="button" class="btn btn-info btn-xs btn-raised" data-dismiss="modal">CERRAR</button>
         </div>
      </div>
   </div>
</div>
<!-- FIN DEL MODAL --> 

<!-- INICIO DE MODAL 3 (Reasignacion de beca) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sp">Small modal</button> -->
<div class="modal fade bs-example-modal-rs" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>REASIGNAR BECA</strong></h4>
         </div>
         <form id="changeScholar" action="app/profiles/transactions/reassignScholar.php" method="POST" class="form-horizontal">
	         <div class="modal-body">
	            <div id="newscholar"><br>
	                                    
	            </div>                             
	         </div>
	         <div class="modal-footer"><br>
	         	<button type="button" class="btn btn-primary btn-sm btn-raised" onclick="changeThisScholar();">GUARDAR</button>
	         	<button id="closethis" type="button" class="btn btn-info btn-sm btn-raised" data-dismiss="modal">CERRAR</button>
	         </div>
         </form>
      </div>
   </div>
</div>
<!-- FIN DEL MODAL --> 