<style type="text/css">
  div.int {
    border: 2px solid #ccc;
  }

  div#map {
    position: relative;
    width:100%;
    height:400px;
    margin-top: 10px;
    margin-bottom:20px;
    border-top: 2px solid #333;
  }

  div#map_canvas {
    width:100%;
    height:400px;
    margin: 1px;
  }

  div#map .zoom{
    display: none;
  }

  div#map .address{
    position: absolute;
    bottom: -30px;
    left: 0;
    width:100%;
    height:40px;
    background: #333;
    text-align: center;
    line-height: 40px;
    color: #fff;
  }

  div#crosshair {
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    height: 17px;
    width: 16px;
    margin-left: -4px;
    margin-top: -7px;
  }
</style>

<!-- SECCION DE INFORMACION DEL TUTOR DEL ALUMNO -->
<div class="row">
   <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
   <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
      <div class="row">
         <ul class="nav nav-justified vx">
            <li class="state-on"><a class="sts" href="?menu_ad=alumnoNuevo&nuevo=infoTutor">DATOS DEL TUTOR</a></li>
            <li><a class="sts" href="?menu_ad=alumnoNuevo&nuevo=infoGeneral">DATOS GENERALES</a></li>
            <li><a class="sts" href="?menu_ad=alumnoNuevo&nuevo=infoAcademica">INFO. ACADÉMICA</a></li>
         </ul>
      </div>
   </div>
   <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
</div>
<div class="row">
   <div class=" col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
   <div class="well col-xs-12 col-sm-12 col-md-10 col-lg-10">
      <section id="tutor">
         <legend><h4 class="bg-info">DATOS DEL TUTOR: </h4></legend>
         <div class="caja"> 
          	<form action="app/profiles/transactions/addTutor.php" method="post" class="form-horizontal" accept-charset='utf-8'>
               <div class="form-group">
                  <label for="inputpadecimientos" class="col-md-3 control-label text-info">¿Tiene Tutor?: </label>
                  <div class="col-md-9">
                     <div class="radio radio-info">
                        <label>
                           SI
                           <input type="radio" id="optRadio2" value="si" checked="checked" name="optTutor" onclick="showTutor()">
                           <span class="circle"></span>
                           <span class="check"></span>
                        </label>
                        <label for=""></label>
                        <label>
                           NO
                           <input type="radio" id="optRadio1" value="no" name="optTutor" onclick="hideTutor()">
                           <span class="circle"></span>
                           <span class="check"></span>                                       
                        </label>
                     </div>
                  </div>
               </div>
               <div id="tutordata">
                  <div class="row">
                     <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                           <div class="col-sm-12">
                              <input type="text" class="form-control text-center" id="apellido1" name="ape1" placeholder="Apellido Paterno" autocomplete="off">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                           <div class="col-sm-12">
                              <input type="text" class="form-control text-center" id="apellido2" name="ape2" placeholder="Apellido Materno" autocomplete="off">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                           <div class="col-sm-12">
                              <input type="text" class="form-control text-center" id="nombre" name="nombret" placeholder="Nombre" autocomplete="off">
                           </div>
                        </div>
                     </div>
                  </div><br>
      			   <div class="row">
                     <div class="col-md-6">
           				   <div class="form-group">
              					<label for="inputparent" class="col-sm-4 control-label">Parentesco: </label>
              					<div class="col-sm-8">
              						 <select class="form-control " name="parentesco">
              							  <option value="">Seleccione...</option>
              							  <option value="Madre">Madre</option>
              							  <option value="Padre">Padre</option>
              							  <option value="Abuelo(a)">Abuelo(a)</option>
              							  <option value="Hermano(a)">Hermano(a)</option>
              							  <option value="Hermano(a)">Tío(a)</option>
              							  <option value="Tutor">Tutor</option>
              						 </select>
              					</div>
           				   </div>
                     </div>
                     <div class="col-md-6">
           				   <div class="form-group">
           					   <label for="inputjob" class="col-sm-4">Ocupación: </label>
           					   <div class="col-sm-8">
           							<input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Trabajo como.." autocomplete="off">
           					   </div>
           				   </div>
                     </div>
                  </div>
                <div class="row">
                  <div class="col-md-6">                  
          				 <div class="form-group">
          					  <label for="inputcel" class="col-sm-4">Tel. Celular: </label>
          					  <div class="col-sm-8">
          							<input type="tel" class="form-control" id="telcel" name="telcel" placeholder="983 100 1020" maxlength="12" autocomplete="off">
          					  </div>
          				 </div>
                     </div>
                    <div class="col-md-6">
          				 <div class="form-group">
          					  <label for="inputtel" class="col-sm-4 control-label">Tel. Casa: </label>
          					  <div class="col-sm-8">
          							<input type="tel" class="form-control" id="telcasa" name="telcasa" placeholder="83 100 1122" maxlength="12" autocomplete="off">
          					  </div>
          				 </div>
                     </div>
                </div>
                <div class="row" style="border: 1px solid #cc; padding: 5px; border-radius: 2px;">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-4">Tel. Alternativo:</label>
                      <div class="col-md-8">
                        <input type="tel" class="form-control" name="telalt" placeholder="983 000 1122" maxlength="12" autocomplete="off">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-4 control-label">Parentesco:</label>
                      <div class="col-md-8">
                        <select class="form-control " name="parentescoAlt">
                          <option value="">Seleccione...</option>
                          <option value="Madre">Madre</option>
                          <option value="Padre">Padre</option>
                          <option value="Abuelo(a)">Abuelo(a)</option>
                          <option value="Hermano(a)">Hermano(a)</option>
                          <option value="Hermano(a)">Tío(a)</option>
                          <option value="Tutor">Tutor</option>
                       </select>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                <div class="form-group row" style="border: 1px solid #ccc;border-radius:2px; padding: 5px;">
                  	<label for="inpudir" class="control-label">Direccion: </label><br>
                  	<div class="col-sm-3">
                      	<input type="text" class="form-control" id="st" name="calle" placeholder="Calle" autocomplete="off">
                  	</div>
                  	<div class="col-sm-3">
                      	<input type="text" class="form-control" id="num" name="numero" placeholder="Numero" autocomplete="off">
                  	</div>
                  	<div class="col-sm-3">
                      	<input type="text" class="form-control" id="between" name="entre" placeholder="Entre" autocomplete="off">
                  	</div>
                  	<div class="col-sm-3">
                      	<input type="text" class="form-control" id="address" name="colonia" placeholder="Colonia" onkeyup='geocode()' autocomplete="off">
                  	</div>
              	</div>
              
              <br>
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
      		  </div><br>
            <div class="row">
            	<div class="col-xs-2 col-sm-3 col-md-5"></div>
           		<div class="col-xs-8 col-sm-6 col-md-2">
        	   		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Guardar</button>
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="mdi-navigation-close"></span></button>
                              <h5 class="modal-title text-center" id="myModalLabel"><strong><i class="mdi-content-save"></i>  GUARDAR TUTOR</strong></h5>
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
           		<div class="col-xs-2 col-sm-3 col-md-5"></div>
            </div>
          </form>
         </div> 
      </section>
   </div> 
   <div class=" col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>  
</div>

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