<ol class="breadcrumb hidden-xs hidden-sm visible-md visible-lg">
  <li class="active"><a href="?menu_ad=principal">Principal</a></li>
</ol>
<div class="well">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<ul class="nav nav-tabs vx nav-pills nav-justified" role="tablist" id="myTab">
			 	<li role="presentation"><a class="sts" href="#memos" aria-controls="memos" role="tab" data-toggle="tab"><i class="mdi-social-notifications"></i> RECORDATORIOS</a></li>
			 	<li role="presentation"><a class="sts" href="#calendars" aria-controls="calendars" role="tab" data-toggle="tab"><i class="mdi-action-event"></i> CALENDARIO</a></li>
			</ul>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="memos">
					<a href="" data-toggle="modal" data-target=".bs-example-modal-newMemo" id="more" class="btn btn-raised btn-fab btn-info mdi-content-add"></a>
					<div class="well"><br>
						<label>Lista de Tareas Pendientes:</label>
						<br><br>
						<div class="row" id="viewTask">
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="calendars">
					<div class="well">
							<div class="page-header">
								<div class="pull-right form-inline">
									<div class="btn-group">
										<button class="btn btn-sm btn-success" data-calendar-nav="prev"><< Prev</button>
										<button class="btn btn-sm" data-calendar-nav="today">Hoy</button>
										<button class="btn btn-sm btn-success" data-calendar-nav="next">Prox >></button>
									</div>
									<div class="btn-group">
										<button class="btn btn-sm btn-warning" data-calendar-view="year">Año</button>
										<button class="btn btn-sm btn-warning active" data-calendar-view="month">Mes</button>
										<button class="btn btn-sm btn-warning" data-calendar-view="week">Semana</button>
										<button class="btn btn-sm btn-warning" data-calendar-view="day">Dia</button>
									</div>
								</div>
								<h3></h3>
							</div>
							<div class="row">
								<div class="col-sm-9">
									<div id="calendar"></div>
								</div>
								<div class="col-sm-3">
									<select id="first_day" class="col-sx-12 form-control">
										<option value="">Vista del Calendario</option>
										<option value="2">Domingo Primer dia de la semana</option>
										<option value="1">Lunes Primer dia de la semana</option>
									</select>
									<select id="language" class="col-xs-12 form-control">
										<option value="">Inglés (USA)</option>
										<option value="es-MX">Español (Mexico)</option>
									</select>
								</div>
							</div>
					</div>
				</div> <!-- Fin de tabpanel->Calendar -->
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>

<div class="modal hide fade" id="events-modal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Event</h3>
	</div>
	<div class="modal-body" style="height: 400px">
	</div>
	<div class="modal-footer">
		<a href="#" data-dismiss="modal" class="btn">Close</a>
	</div>
</div> 


 <!-- INICIO DEL MODAL 1 (Agregar nuevo recordatorio) -->
<div class="modal fade bs-example-modal-newMemo" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md">
      <div class="modal-content">
         <div class="modal-header second-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
            <h4 class="modal-title text-center text-primary-color" id="myModalLabel"><strong>NUEVO RECORDATORIO</strong></h4>
         </div>
         <form action="" method="post" class="form-horizontal">
         <div class="modal-body">
         	<div id="msgTaskFail"></div>
         	<div class="row">
         		<div class="col-md-7">
		         	<div class="form-group">
							<label class="col-sm-3">Para el dia: </label>
							<div class="col-sm-9">
								<input type="date" class="form-control" id="tododate" name="tododate" placeholder="01-01-2016" autocomplete="off" id="fecha">
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<label class="col-sm-4 control-label">Prioridad: </label>
							<div class="col-sm-8">
								<select name="prioridad" id="" class="form-control priority">
									<option value="1">Alta</option>
									<option value="2">Normal</option>
									<option value="3">Baja</option>
								</select>
							</div>
						</div>
					</div>
				</div>
         	<p class="text-center help"><small>Escriba la nueva tarea en el area de texto y pulse Guardar.</small></p>
      		<div class="form-group">
					<label class="col-sm-2">Tarea: </label>
					<div class="col-sm-10">
						<!-- <input type="text" class="form-control" name="tarea" placeholder="Algo por hacer..." autocomplete="off" id="task"> -->
						<textarea name="tarea" id="tarea" cols="45" rows="5" class=""></textarea>
					</div>
				</div>
         </div>
         <div class="modal-footer">
         	<button type="button" onclick="saveTask()"  class="btn btn-primary btn-sm btn-raised">GUARDAR</button>
            <button type="button" class="btn btn-info btn-sm btn-raised" id="guardartarea" data-dismiss="modal">CANCELAR</button>
         </div>
         </form>
      </div>
   </div>
</div>
<!-- FIN DEL MODAL 1 (Agregar nuevo recordatorio) --> 