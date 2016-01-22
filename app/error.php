<ul class="breadcrumb">
	<li><a href="?menu=home">HOME</a> <span class="divider">/</span></li>
	<li class="active">ERROR <span class="divider">/</span></li>
</ul>
<div class="container-fluid">
	<div class="row">
		<div class="well">
			<div class="alert alert-dismissable alert-danger">
				<button type="button" class="close" data-dismises="alert">&times;</button>
				<strong>ERROR: :(</strong> <label>Ha ocurrido un error en la transacción. Intentelo de nuevo, si el problema persiste notifiquelo al administrador.</label>
				<a class="btn btn-info" href="javascript:history.go(-1)">Volver</a>
			</div>
		</div>
	</div>
</div>



<div class="row navbar-example">
   <ul class="nav nav-tabs vw" role="tablist" id="myTab">
      <li role="presentation" class="active"><a href="#datos" aria-controls="datos" role="tab" data-toggle="tab">Editar Datos</a></li>
   </ul>
   <div class="tab-content well">
      <div role="tabpanel" class="row tab-pane fade in active" id="datos">
      <?php echo "<a href='?menu_ad=viewUpdateTr&idTutor=".$IDtutor."' class='btn btn-info btn-fab btn-raised mdi-content-create' data-toggle='tooltip' data-placement='top' title='Editar Datos'></a>"; ?> 
         <div class="col-sm-3"><h5 class="text-primary"><strong>Tutor:</strong></h5></div>
         <div class="col-sm-9">
            <?php 
               echo "<p><label>Nombre:</label>"." ".$row['name_t']." ".$row['surname1_t']." ".$row['surname2_t']."</p>";
               echo "<p><label>Parentesco:</label>"." ".$row['relationship']."</p>";
               echo "<p><label>Tel. Casa:</label>"." ".$row['phone']."</p>";
               echo "<p><label>Tel. celular:</label>"." ".$row['cellphone_t']."</p>";
               echo "<p><label>Dirección:</label>"." ".$row['address_t']."</p>";
               echo "<p><label>Ocupación:</label>"." ".$row['job']."</p>";
               echo "<p><label>Alumnos inscritos:</label>"." ".$count." </p>";
            ?>      
         </div>
      </div>
   </div>
</div>