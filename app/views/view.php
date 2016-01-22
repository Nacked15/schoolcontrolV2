<div class="row navbar-example">
   <div class="col-sm-1"></div>
   <div class="col-sm-10 bordered">
      <ul class="nav nav-tabs nav-justified vw" role="tablist" id="myTab">
         <li role="presentation"><a href="#cursos" aria-controls="cursos" role="tab" data-toggle="tab">Maestros</a></li>
         <li role="presentation"><a href="#nuevo" aria-controls="nuevo" role="tab" data-toggle="tab">Nuevo Maestro</a></li>
      </ul>
      <div class="tab-content">
         <div role="tabpanel" class="row tab-pane fade in active" id="cursos">
               <div class="col-sm-1"></div>
               <div class="col-sm-10">
               </div>
               <div class="col-sm-1"></div>
         </div>
         <div role="tabpanel" class="row tab-pane fade" id="nuevo">
               <div class="col-xs-1"></div>
               <div class="col-xs-10">
               <h4 class="bg-primary text-center">Alta de Cursos</h4><br>

               </div>
               <div class="col-xs-1"></div>
         </div>
      </div>
   </div>
   <div class="col-sm-1"></div>
</div>

      <form action="app/profiles/transactions/addClasses.php" method="POST" class="form-horizontal">
         <div class="row">
            <div class="col-sm-6">
               <div class="form-group">
                  <label for="inputname" class="col-sm-4 control-label">Curso: </label>
                  <div class="col-sm-8">
                     <select class="form-control"  name="nombreC">
                        <option value="">Seleccione...</option>
                        <option value="1">English Club</option>
                        <option value="2">Primary</option>
                        <option value="3">Adolescentes</option>
                        <option value="4">Adultos</option>
                        <option value="5">Ingles Avanzado</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                  <label for="inputname" class="col-sm-4 control-label">Grupo: </label>
                  <div class="col-sm-8">
                     <select class="form-control" id="gruposC" name="grupo">
                        <option value="">Seleccione...</option>
                        <?php include_once ('app/php/groups.php'); ?>
                     </select>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-6">
               <div class="form-group">
                  <label for="inputPeriod" class="col-sm-4 control-label">Periodo: </label>
                  <div class="col-sm-8">
                     <select class="form-control " name="periodo">
                        <?php date("Y"); ?>
                        <option value="<?php echo date('Y'); ?> A"><?php echo date("Y"); ?> A</option>
                        <option value="<?php echo date('Y');?> B"><?php echo date("Y"); ?> B</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                  <label for="inputsurname" class="col-sm-4 control-label">Fecha de Inicio: </label>
                  <div class="col-sm-8">
                     <input type="date" class="form-control text-capitalize" id="f_inicio" name="f_inicio" required>
                  </div>
               </div>
            </div>
         </div>
         <div class="form-group">
            <label for="inputdays" class="col-sm-2 control-label">Dias: </label>
            <div class="checkbox-material col-sm-10">
               <label class="checkbox-inline checkbox-material">
                  <input type="checkbox" id="inlineCheckbox1" name="diasC[]" value="Lunes"> Lun
               </label>
               <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" name="diasC[]" value="Martes"> Mar
               </label>
               <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox3" name="diasC[]" value="Miercoles"> Mie
               </label>
               <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox4" name="diasC[]" value="Jueves"> Jue
               </label>
               <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox5" name="diasC[]" value="Viernes"> Vie
               </label>
               <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox6" name="diasC[]" value="Sabado" name="diasC"> Sab
               </label>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-6">
               <div class="form-group">
                  <label for="inputtime" class="col-sm-5 control-label">Hora de Inicio: </label>
                  <div class="col-sm-7">
                     <input type="time" name="h_inicio" class="form-control">
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                  <label for="inputtime" class="col-sm-5 control-label">Hora de Salida: </label>
                  <div class="col-sm-7">
                     <input type="time" name="h_salida" class="form-control">
                  </div>
               </div>
            </div>
         </div><br>
         <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-2">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Guardar</button>
               <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                     <div class="modal-content">
                        <div class="modal-header" id="bg-warn">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title text-center" id="myModalLabel"><strong>Confirme Acción</strong></h4>
                        </div>
                           <div class="modal-body">
                           Si esta seguro de realizar esta acción pulse el boton OK, de lo contrario pulse CANCELAR para realizar cambios.
                        </div>
                        <div class="modal-footer">
                           <input type="submit" value="OK" class="btn btn-success btn-raised btn-sm"> 
                           <button class="btn btn-default btn-raised btn-sm" data-dismiss="modal">Cancelar</button>                            
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-5"></div>
         </div>
      </form>


      <form action="app/profiles/transactions/addSponsor.php" method="POST" class="form-horizontal">
         <div class="form-group">
            <label for="inputname" class="col-sm-4 control-label">Nombre(s): </label>
            <div class="col-sm-8">
               <input type="text" class="form-control text-capitalize" id="nombre" name="name" placeholder="Name" required>
            </div>
         </div>
         <div class="form-group">
            <label for="inputsurname" class="col-sm-4 control-label">Apellido(s): </label>
            <div class="col-sm-8">
               <input type="text" class="form-control text-capitalize" id="apellido" name="surname" placeholder="Surname" required>
            </div>
         </div>
         <div class="form-group">
            <label for="inputparentesco" class="col-sm-4 control-label">Correo Electronico: </label>
            <div class="col-sm-8">
               <input type="email" name="email" class="form-control" placeholder="name@domain.com">
            </div>
         </div>
         <div class="form-group">
            <label for="inputPeriod" class="col-sm-4 control-label">Alumno Beneficiado: </label>
            <div class="col-sm-8">
               <select class="form-control " name="alumno">
                  <?php
                     #Consulta para mostrar a todos los alumnos aspirantes a una beca 
                     $consulta = "SELECT S.id_student, S.name_s, S.surname1_s, S.surname2_s, B.request, B.togrant 
                                    FROM student S, scholar B 
                                       WHERE B.request = 'si' AND (B.togrant='si' || B.togrant='no') AND B.id_student = S.id_student;";
                     $seleccion = mysqli_query($db_connect, $consulta);
                     while ($fila = mysqli_fetch_array($seleccion)) {
                        echo "<option value='".$fila['id_student']."'>".$fila['name_s']." ".$fila['surname1_s']." ".$fila['surname2_s']."</option>";
                     }
                     mysqli_close($db_connect);
                  ?>
               </select>
            </div>
         </div><br>
         <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Guardar</button>
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                           <div class="modal-header" id="bg-warn">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title text-center" id="myModalLabel"><strong>Confirme Acción</strong></h4>
                           </div>
                           <div class="modal-body">
                              Si esta seguro de realizar esta acción pulse el boton OK, de lo contrario pulse CANCELAR para realizar cambios.
                           </div>
                           <div class="modal-footer">
                              <input type="submit" value="OK" class="btn btn-success btn-raised btn-sm"> 
                              <button class="btn btn-default btn-raised btn-sm" data-dismiss="modal">Cancelar</button>                            
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="col-sm-4"></div>
         </div>
      </form>


   <ul class='nav navbar-nav navbar-right'>
      <li role='presentation'><button type='button' class='btn btn-sm btn-default mdi-action-grade'></button></li>
      <li class='dropdown'>
          <button href='#' class='dropdown-toggle btn btn-default btn-sm mdi-navigation-more-vert' data-toggle='dropdown' role='button' aria-expanded='false'></button>
          <ul class='dropdown-menu' role='menu'>
            <li><a href='#'><i id='mini' class='mdi-action-stars'></i> <strong>Asignar Beca</strong></a></li>
            <li><a href='#'><i id='mini' class='mdi-action-bookmark'></i> Postular para Beca</a></li>
            <li><a href='app/profiles/transactions/bajaSt.php?val=<?php echo $row['id_student']; ?>'><i id='mini' class='mdi-action-thumb-down'></i> Dar de Baja</a></li>
            <li><a href='#' data-toggle='modal' data-target='.bs-example-modal-conf'><i id='mini' class='mdi-action-highlight-remove' id='mini'></i> Eliminar</a></li>
          </ul>
      </li>
   </ul>

   <!-- INICIO DE MODAL 2 (Ver datos del Maestro) -->
<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <div class="navbar navbar-inverse navbar-fixed-top"><h3 class="text-center">Datos del Maestro</h3></div>
            </div>
            <div class="modal-body">
               <div id="datosmaestro">
                                    
               </div>                              
            </div>
            <div class="modal-footer">
                <!-- <button type="submit" class="btn btn-primary btn-xs btn-raised">Guardar</button> -->
                <button type="button" class="btn btn-success btn-xs btn-raised" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- FIN DEL MODAL -->



<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header" id="bg-warn">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center" id="myModalLabel"><strong>Confirme Acción</strong></h4>
         </div>
         <div class="modal-body">
            <p><strong>¿Esta seguro de que quiere ELIMINAR este elemento?</strong></p>
            <p>Ya no podra deshacer la operación</p>
         </div>
         <div class="modal-footer">
            <input type="submit" value="OK" class="btn btn-success btn-raised btn-sm"> 
            <button class="btn btn-default btn-raised btn-sm" data-dismiss="modal">Cancelar</button>                            
         </div>
      </div>
   </div>
</div> 


<button type="button" id="popover1" data-container="body"
   data-html = "true" data-toggle="popover" data-placement="top"
   title="<p><i class='mdi-alert-warning'></i> 
               <strong>Confirm</strong>
         </p>" 
   data-content="
      <p>¿Desea continuar con esta acción?</p> 
      <a href='app/error.php' class='btn'>SI</a>
      <a href='#' id='cerrar' class='btn'>NO</a>">Top
</button>


<button type="button" id="popover1" class="btn btn-success btn-xs" data-container="body"
              data-html = "true" data-toggle="popover" data-placement="top"
              title="<p class='text-center text-warning'><i class='mdi-alert-warning'></i> 
                      <strong>Confirm</strong>
                    </p>" 
              data-content="
                <p>¿Desea continuar con esta acción?</p> 
                <a href='app/error.php' class='btn btn-info btn-sm'>SI</a>
                <a href='#' id='cerrar' class='btn btn-success btn-sm'>NO</a>">Top
            </button>


<div class="well">
   <div class="navbar-example">
   <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
         <ul class="nav nav-tabs nav-justified vx" role="tablist" id="myTab">
            <li role="presentation"><a href="#padrinos" aria-controls="padrinos" role="tab" data-toggle="tab">LISTA DE PADRINOS</a></li>
            <li role="presentation"><a href="#nuevo" aria-controls="nuevo" role="tab" data-toggle="tab">NUEVO PADRINO</a></li>
         </ul>
      </div>
      <div class="col-sm-1"></div>
   </div>
   <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
         <div class="well">
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane fade in active" id="padrinos">
                  <h4 class="bg-primary text-center">Lista</h4>
               </div>
               <div role="tabpanel" class="row tab-pane fade" id="nuevo">
                  <h4 class="bg-primary text-center">Alta de Padrinos</h4>
                  <div class="col-xs-1"></div>
                  <div class="col-xs-10">
                  </div>
                  <div class="col-xs-1"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-1"></div>
   </div>
   </div> 
</div>






<!-- INICIO DE BLOQUE DE MAPA -->


<style type="text/css">
  div.int { border: 2px solid #ccc; }
  div#map {
    position: relative;
    width:100%;height:400px;margin-top: 10px;margin-bottom:20px;
    border-top: 2px solid #333;
  }
  div#map_canvas { width:100%;height:400px;margin: 1px; }
  div#map .zoom{ display: none; }
  div#map .address{
    position: absolute;bottom: -30px;left: 0;
    width:100%;height:40px;background: #333;
    text-align: center;line-height: 40px;color: #fff;
  }
  div#crosshair {
    display: block;position: absolute;
    top: 50%;left: 50%;height: 17px;width: 16px;
    margin-left: -4px;margin-top: -7px;
  }
</style>

<!-- SECCION DE INFORMACION DEL TUTOR DEL ALUMNO -->
<form action="#" method="post" class="form-horizontal" accept-charset='utf-8'>
   <div class="">
      <div class="int">
         <div class="row">
            <div class="col-sm-6">
            <input type="button" value="Insertar marcador" onclick="addMarkerAtCenter()" class="btn btn-info btn-sm" />
            </div>
            <div class="col-sm-6">
            <h4 class="text-center">Croquis de ubicación del tutor. <i class="mdi-action-help"></i></h4>
            </div>
         </div>
         <div class="coordinates row">
            <input type="hidden" id="lat" name="lat" class="form-control" onclick="select()" />
            <input type="hidden" id="lng" name="lng" class="form-control" onclick="select()" />
         </div>
         <div id="map">
            <div id="map_canvas"></div>
            <div id="crosshair"><strong>+</strong></div>
            <div class="address">
            <span id="formatedAddress">-</span>
            </div>
            <span id="zoom_level"></span>
         </div>
      </div>
   </div>
</form>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script type="text/javascript">
              var map;
              var geocoder;
              var centerChangedLast;
              var reverseGeocodedLast;
              var currentReverseGeocodeResponse;

              function initialize() {
                var latlng = new google.maps.LatLng(19.57789189450819, -88.04557564999999);
                var myOptions = {
                  zoom: 3,
                  center: latlng,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                geocoder = new google.maps.Geocoder();
                setupEvents();
                centerChanged();
                var opt = { minZoom: 14 };
                map.setOptions(opt);
              }

              function setupEvents() {
                reverseGeocodedLast = new Date();
                centerChangedLast = new Date();

                setInterval(function() {
                  if((new Date()).getSeconds() - centerChangedLast.getSeconds() > 1) {
                    if(reverseGeocodedLast.getTime() < centerChangedLast.getTime())
                      reverseGeocode();
                  }
                }, 1000);

                google.maps.event.addListener(map, 'zoom_changed', function() {
                  document.getElementById("zoom_level").innerHTML = map.getZoom();
                });

                google.maps.event.addListener(map, 'center_changed', centerChanged);

                google.maps.event.addDomListener(document.getElementById('crosshair'),'dblclick', function() {
                   map.setZoom(map.getZoom() + 1);
                });

              }

              function getCenterLatLngText() {
                return '(' + map.getCenter().lat() +', '+ map.getCenter().lng() +')';
              }

              function centerChanged() {
                centerChangedLast = new Date();
                var latlng = getCenterLatLngText();
                var lat = map.getCenter().lat();
                var lng = map.getCenter().lng();
                document.getElementById('lat').value = lat;
                document.getElementById('lng').value = lng;
                document.getElementById('formatedAddress').innerHTML = '';
                currentReverseGeocodeResponse = null;
              }

              function reverseGeocode() {
                reverseGeocodedLast = new Date();
                geocoder.geocode({latLng:map.getCenter()},reverseGeocodeResult);
              }

              function reverseGeocodeResult(results, status) {
                currentReverseGeocodeResponse = results;
                if(status == 'OK') {
                  if(results.length == 0) {
                    document.getElementById('formatedAddress').innerHTML = 'None';
                  } else {
                    document.getElementById('formatedAddress').innerHTML = results[0].formatted_address;
                  }
                } else {
                  document.getElementById('formatedAddress').innerHTML = 'Error';
                }
              }

              function geocode() {
                var address = document.getElementById("address").value+ "Felipe Carrillo PuertoFelipe Carrillo Puerto, Q.R., México";
                geocoder.geocode({
                  'address': address,
                  'partialmatch': true}, geocodeResult);
              }

              function geocodeResult(results, status) {
                if (status == 'OK' && results.length > 0) {
                  map.fitBounds(results[0].geometry.viewport);
                } else {
                  //alert("Geocode was not successful for the following reason: " + status);
                }
              }

              function addMarkerAtCenter() {
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    map: map
                });

                var text = 'Lat/Lng: ' + getCenterLatLngText();
                if(currentReverseGeocodeResponse) {
                  var addr = '';
                  if(currentReverseGeocodeResponse.size == 0) {
                    addr = 'None';
                  } else {
                    addr = currentReverseGeocodeResponse[0].formatted_address;
                  }
                  text = text + '<br>' + 'Dirección: <br>' + addr;
                }

                var infowindow = new google.maps.InfoWindow({ content: text });

                google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open(map,marker);
                });
              }
 </script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script src="//cdn.jsdelivr.net/velocity/1.1.0/velocity.min.js"></script>

<!--[if lt IE 8]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script>
$(document).ready(function(){
  initialize();
  $(document).keypress(function(event){
      var keycode = (event.keyCode ? event.keyCode : event.which);
      if(keycode == '13'){
        geocode();    
      }
  });

});
</script>

<!-- FIN DE BLOQUE DE MAPA -->


<ul class='nav navbar-nav navbar-right'>
   <li class='dropdown'>
   <button href='#' class='dropdown-toggle btn btn-default btn-sm mdi-navigation-more-vert' data-toggle='dropdown' role='button' aria-expanded='false'></button>
   <ul class='dropdown-menu' role='menu'>
      <li><a href='#'><i id='mini' class='mdi-action-bookmark'></i> <strong>Editar</strong></a></li>i>
      <li><a href='#' data-toggle='modal' data-target='.bs-example-modal-conf'><i id='mini' class='mdi-action-highlight-remove' id='mini'></i> <strong>Eliminar</strong></a></li>
   </ul>
   </li>
</ul>
