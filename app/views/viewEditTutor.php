<?php 
    $tutor = $_GET['idTutor'];
    $view = "SELECT * FROM tutor T, student S, croquis C
                WHERE T.id_tutor=".$tutor." AND T.id_tutor=S.id_tutor AND C.idtutor=T.id_tutor LIMIT 1;";
    $show = mysqli_query($db_connect, $view);

    while ($row = mysqli_fetch_array($show)) {        
?>

<!-- Migas de pan -->
<ol class="breadcrumb hidden-xs hidden-sm visible-md visible-lg">
  <li><a href="main.php?menu_ad=principal">Principal</a></li>
  <li><a href="javascript:history.go(-1)">Lista de Alumnos</a></li>
  <li class="active">Editar datos de Tutor</li>
</ol>
<div class="well">
    <div class="row">
        <div class="col-xs-0 col-sm-0 col-md-0"></div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="navbar navbar-inverse headStudent">
                <div class="fotoSt hidden-xs visible-sm visible-md visible-lg">
                <?php echo "<img src='img/fotos/student/".$row['photo_s']."' alt='Photo' class='img-circle' width=95 height=95>"; ?>
                </div>
                <legend class="text text-center text-primary-color"> DATOS DEL TUTOR</legend>
                <a id='goBackT' href='javascript:history.go(-1)' class='btn btn-info btn-fab btn-raised mdi-navigation-arrow-back' data-toggle='tooltip' data-placement='top' title='Volver'></a>
            </div>
        </div>
        <div class="col-xs-0 col-sm-0 col-md-0"></div>
    </div>
    
    <!-- Contenido de la Página -->
    <div class="row">           
        <div class="col-xs-12 col-sm-7 col-md-7"><br>
            <div class="well">
                <label class="text-success">ALUMNO:</label> 
                <?php echo $row['name_s']." ".$row['surname1_s']." ".$row['surname2_s']; 
						echo "<input type='hidden' id='nom' value='".$row['name_s']."'>";
                        list($calle,$num,$entre,$col) = explode(",", $row['address_t']); 
					?>
                <div class="datos">
                    <br>
                    <form action='app/profiles/transactions/updateTutor.php' method='post' accept-charset='utf-8' class='form-horizontal'>
                    <?php 
                    echo 
                    "
                    <legend><strong>TUTOR: </strong></legend>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                            <div class='form-group'>
                                <div class='col-md-12'>
                                    <input type='text' name='nombre_t' value='".$row['name_t']."' class='form-control' placeholder='Name'>
                                </div>
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                            <div class='form-group'>
                                <div class='col-md-12'>
                                    <input type='text' name='ape1' value='".$row['surname1_t']."' class='form-control' placeholder='Surname1'>
                                </div>
                            </div>
                        </div>
                        <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                            <div class='form-group'>
                                <div class='col-md-12'>
                                    <input type='text' name='ape2' value='".$row['surname2_t']."' class='form-control' placeholder='Surname2'>
                                </div>
                            </div>        
                        </div>        
                    </div>
                        <div class='form-group'>
                            <label class='col-xs-12 col-sm-3 col-md-2 col-lg-2'>Ocupación: </label>
                            <div class='col-xs-12 col-sm-9 col-md-10 col-lg-10'>
                                <input type='text' name='trabajo' value='".$row['job']."' class='form-control'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-xs-12 col-sm-3 col-md-2 col-lg-2'>Telefono: </label>
                            <div class='col-xs-12 col-sm-9 col-md-10 col-lg-10'>
                                <input type='text' name='tel' value='".$row['phone']."' class='form-control'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-xs-12 col-sm-3 col-md-2 col-lg-2'>Celular: </label>
                            <div class='col-xs-12 col-sm-9 col-md-10 col-lg-10'>
                                <input type='text' name='cel' value='".$row['cellphone_t']."' class='form-control'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-xs-12 col-sm-3 col-md-2 col-lg-2'>Parentesco: </label>
                            <div class='col-xs-12 col-sm-9 col-md-10 col-lg-10'>
                                <input type='text' name='parentesco' value='".$row['relationship']."' class='form-control'>
                            </div>
                        </div>
                        <div style='border: 1px solid #ccc;border-radius:2px; padding: 8px;'>
                            <label>Dirección: </label><br>
                            <div class='form-group'>
                                <div class='col-sm-6'>
                                    <input type='text' name='calle' value='".$calle."' class='form-control'>
                                    <p class='text-center'><small>Calle</small></p>
                                </div>
                                <div class='col-sm-6'>
                                    <input type='text' name='numero' value='".$num."' class='form-control'>
                                    <p class='text-center'><small>Número</small></p>
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='col-sm-6'>
                                    <input type='text' name='entre' value='".$entre."' class='form-control'>
                                    <p class='text-center'><small>Entre</small></p>
                                </div>
                                <div class='col-sm-6'>
                                    <input type='text' id='colony' name='colonia' value='".$col."' class='form-control' onkeyup='geocode()'>
                                    <p class='text-center'><small>Colonia</small></p>
                                </div>
                            </div>
                        </div>
						      <div class='form-group'>
                            <div class='col-md-10'>
                                <input type='hidden' id='lat' name='lat' value='".$row['lat']."' class='form-control'>
                            </div>
                        </div>
								<div class='form-group'>
                            <div class='col-md-10'>
                                <input type='hidden' id='lng' name='long' value='".$row['long']."' class='form-control'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <div class='col-md-8'>
                                <input type='hidden' name='keytutor' value='".$row['id_tutor']."'>
                            </div>
                        </div>
                        ";
                        }?>
                        <div class="row">
                           <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
                           <div class="col-xs-10 col-sm-8 col-md-6 col-lg-6">
                              <button type="button" class="btn btn-primary btn-raised btn-sm" data-toggle="modal" data-target=".bs-example-modal-confirm">Guardar</button>
                              <a href="javascript:history.go(-1)" class="btn btn-default btn-raised btn-sm">Cancelar</a>
                              <div class="modal fade bs-example-modal-confirm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
                                          <h5 class="modal-title text-center" id="myModalLabel"><strong><i class="mdi-content-save"></i>  GUARDAR USUARIO</strong></h5>
                                       </div>
                                       <div class="modal-body dummi">
                                             <p class="text-center text-info text-primary-color">¿Desea continuar con esta acción?</p>
                                       </div>
                                       <div class="modal-footer dummi">
                                          <button class="btn btn-success btn-raised btn-sm"><i class='mdi-file-cloud-upload'></i> GUARDAR</button>
                                          <button type="button" class="btn btn-info btn-raised btn-sm" data-dismiss="modal"><i class='mdi-file-cloud-off'></i> CANCELAR</button>                            
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-1 col-sm-2 col-md-3 col-lg-3"></div>
                        </div> 
                    </form>"  
                </div>
     	       </div>  
        </div>
        <div class="hidden-xs col-sm-5 col-md-5">
            <br>
            <div class="well">
                <h4 class="text-center text-success">Ubicación:</h4>
                <div class="croquis" id="map-canvas" style="border: solid 1px #ccc; width:100%; height:350px;">
                    
                </div>
            </div>
        </div>
    </div> 
</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
	// Note: This example requires that you consent to location sharing when
	// prompted by your browser. If you see a blank space instead of the map, this
	// is probably because you have denied permission for location sharing.
	var map;
	var nombre = document.getElementById('nom');
	var lat = document.getElementById('lat');
	var lon = document.getElementById('lng');

	function initialize() {
	  var mapOptions = {
		 zoom: 16
	  };
	  map = new google.maps.Map(document.getElementById('map-canvas'),
			mapOptions);

	  // Try HTML5 geolocation
	  if(navigator.geolocation) {
		 navigator.geolocation.getCurrentPosition(function(position) {
			var pos = new google.maps.LatLng(lat.getAttribute('value'),
														lon.getAttribute('value'));

			var infowindow = new google.maps.InfoWindow({
			  map: map,
			  position: pos,
			  content: nombre.getAttribute('value'),
			  
			});

			map.setCenter(pos);
		 }, function() {
			handleNoGeolocation(true);
		 });
	  } else {
		 // Browser doesn't support Geolocation
		 handleNoGeolocation(false);
	  }
	}

	function handleNoGeolocation(errorFlag) {
	  if (errorFlag) {
		 var content = 'Error: El servicio de Geolocalización a fallado.';
	  } else {
		 var content = 'Error: Su navegador no soporta Geolocalización.';
	  }

	  var options = {
		 map: map,
		 position: new google.maps.LatLng(19.57789189450819 , -88.04557564999999),
		 content: content
	  };

	  var infowindow = new google.maps.InfoWindow(options);
	  map.setCenter(options.position);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
