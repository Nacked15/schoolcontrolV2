<?php include_once '../../includes/db_connect.php'; ?>
<?php 
   $IDclass = $_GET['dc'];
   $i=1;
    //-- <-------------------------- ******************** ------------------------------->
    #-- Consulta para obtener las clases, con sus respectivos maestros.
   $query = 
      "SELECT * 
         FROM classes C, naatik_course N, schedule S, groups_nc G
            WHERE C.id_class='".$IDclass."' AND 
                  C.id_course = N.id_course AND 
                  S.id_schedule = C.id_schedule AND 
                  G.id_group = C.id_group LIMIT 1;";
   $echo = mysqli_query($db_connect, $query) or die(mysqli_error());
   if ($echo) {
      while ($row = mysqli_fetch_array($echo)) {
         $dias = explode('-', $row['days']);
          
      echo "<input type='hidden' name='idclass' value='".$row['id_class']."' class='form-control'>
            <input type='hidden' name='idschedule' value='".$row['id_schedule']."' class='form-control'>
            <input type='hidden' name='idcurso' value='".$row['id_course']."' class='form-control'>";
?>
<div class="row">
   <div class="col-xs-12 bg-info">
      <div class="form-group">
         <label class="col-xs-12 col-sm-4 col-md-3 col-lg-3">Curso: </label>
         <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            <select name="curso" id="curso" class="form-control">
               <option value="<?= $row['id_course'];?>"><?= $row['course'];?></option>
               <option value="1">English Club</option>
               <option value="2">Primary</option>
               <option value="3">Adolescentes</option>
               <option value="4">Adultos</option>
            </select>
         </div>
      </div> 
   </div>
   <div class="col-xs-12">
      <div class="form-group">
         <label class="col-xs-12 col-sm-4 col-md-3 col-lg-3">Grupo: </label>
         <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            <select name="grupo" id="grupo" class="form-control">
               <option value="<?= $row['id_group'];?>"><?= $row['group'];?></option>
               <?php
                  require_once '../php/groups.php';
               ?>
            </select>
         </div>
      </div> 
   </div>
</div>
<div class="row">
   <div class="col-xs-12 bg-info">
      <div class="form-group">
         <label class="col-xs-12 col-sm-4 col-md-3 col-lg-3">Periodo: </label>
         <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            <select name="periodo" id="periodo" class="form-control">
               <option value="<?= $row['year'];?>"><?= $row['year'];?></option>
               <?php date("Y"); $anioAnt=date("Y")-1; $anioNext=date("Y")+1; ?>
               <option value="<?php $anioNext;?> A"><?php echo $anioNext; ?> A</option>
               <option value="<?php $anioNext;?> B"><?php echo $anioNext; ?> B</option>
               <option value="<?php echo date('Y'); ?> A"><?php echo date("Y"); ?> A</option>
               <option value="<?php echo date('Y');?> B"><?php echo date("Y"); ?> B</option>
               <option value="<?php $anioAnt;?> A"><?php echo $anioAnt; ?> A</option>
               <option value="<?php $anioAnt;?> B"><?php echo $anioAnt; ?> B</option>
            </select>
         </div>
      </div>
   </div>
   <div class="col-xs-12">
      <div class="form-group">
         <label class="col-xs-12 col-sm-4 col-md-3 col-lg-3">Fecha de Inicio</label>
         <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            <input type="date" name="fecha_inicio" class="form-control" placeholder="DD-MM-AAAA" value="<?= $row['date_init']; ?>">
         </div>
      </div>
   </div>
   <div class="clearfix"></div>
   <div class="col-xs-12 bg-info">
      <div class="form-group">
         <label class="col-xs-12 col-sm-4 col-md-3 col-lg-3">Fecha Fin</label>
         <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            <input type="date" name="fecha_fin" class="form-control" placeholder="DD-MM-AAAA" value="<?= $row['date_end']; ?>">
         </div>
      </div>
   </div>
   <div class="col-xs-12">
      <div class="form-group">
         <label for="inputdays" class="col-sm-3">Dias: </label>
            <?php
               function checkday($day,$dias){  
                  foreach ($dias as $i ) {
                     if ($i == $day) {
                        $check='checked="true"';
                        echo $check;
                     } else {
                        $check='';
                        echo $check;
                     }
                  }
               }
            ?>
            <div class="checkbox checkbox-inline checkdays col-sm-9">
            <label class="checkday">
               <input type="checkbox" id="inlineCheckbox1" <?php checkday('Lunes',$dias); ?> name="diasC[]" value="Lunes">
               <span class='checkbox-material'><span class='check'></span></span> Lun
            </label>
            <label class="checkday">
               <input type="checkbox" id="inlineCheckbox2" <?php checkday('Martes',$dias); ?> name="diasC[]" value="Martes">
               <span class='checkbox-material'><span class='check'></span></span> Mar
            </label>
            <label class="checkday">
               <input type="checkbox" id="inlineCheckbox3" <?php checkday('Miercoles',$dias); ?> name="diasC[]" value="Miercoles">
               <span class='checkbox-material'><span class='check'></span></span> Mi&eacute;
            </label>
            <label class="checkday">
               <input type="checkbox" id="inlineCheckbox4" <?php checkday('Jueves',$dias); ?> name="diasC[]" value="Jueves">
               <span class='checkbox-material'><span class='check'></span></span> Jue
            </label>
            <label class="checkday">
               <input type="checkbox" id="inlineCheckbox5" <?php checkday('Viernes',$dias); ?> name="diasC[]" value="Viernes">
               <span class='checkbox-material'><span class='check'></span></span> Vie
            </label>
            <label class="checkday">
               <input type="checkbox" id="inlineCheckbox6" <?php checkday('Sabado',$dias); ?> name="diasC[]" value="Sabado" name="diasC">
               <span class='checkbox-material'><span class='check'></span></span> S&aacute;b
            </label>
         </div>
      </div>
   </div>
   <div class="clearfix"></div>
</div>
<div class="row">
   <div class="col-xs-12 col-sm-12 bg-info ">   
      <div class="form-group">
         <label class="col-xs-12 col-sm-3">Hora Entrada: </label>
         <div class="col-xs-12 col-sm-9">
            <input type="time" class="form-control" name="hora1" value="<?= $row['hour_init'];?>">
         </div>
      </div>
   </div>
   <div class="col-xs-12 col-sm-12">
      <div class="form-group">
         <label for="" class="col-xs-12 col-sm-3">Hora Salida: </label>
         <div class="col-xs-12 col-sm-9">
            <input type="time" class="form-control" name="hora2" value="<?= $row['hour_end'];?>">
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-xs-12 bg-info">
      <div class="form-group">
         <label for="" class="col-xs-12 col-sm-3">Precio Normal: </label>
         <div class="col-xs-12 col-sm-9">
            <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
               <input type="text" class="form-control" name="costo_normal" value="<?= $row['normal_cost'];?>">
            </div>
         </div>
      </div>
   </div>
   <div class="col-xs-12">
      <div class="form-group">
         <label for="" class="col-xs-12 col-sm-3">Precio Promo: </label>
         <div class="col-xs-12 col-sm-9">
            <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
               <input type="text" class="form-control" name="costo_promo" value="<?= $row['promo_cost'];?>">
            </div>
         </div>
      </div>
   </div>
   <div class="col-xs-12 bg-info">
      <div class="form-group">
         <label for="" class="col-xs-12 col-sm-3">Descuento: </label>
         <div class="col-xs-12 col-sm-9">
            <div class="input-group">
               <input type="text" class="form-control" name="descuento" value="<?= $row['discount_cost'];?>">
               <span class="input-group-addon">%</span>
            </div>
         </div>
      </div>
   </div>
   <div class="col-xs-12">
      <div class="form-group">
         <label for="" class="col-xs-12 col-sm-3">Costo Inscripci&oacute;n: </label>
         <div class="col-xs-12 col-sm-9">
            <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
               <input type="text" class="form-control" name="inscripcion" value="<?= $row['inscription_cost'];?>">
            </div>
         </div>
      </div>
   </div>
   <div class="col-xs-12 bg-info">
      <div class="form-group">
         <label class="col-xs-12 col-sm-3">Estado: </label>
         <div class="col-xs-12 col-sm-9">
            <select name="estado" id="estado" class="form-control">
               <option value="<?= $row['status_class']; ?>"> <?= $row['status_class']; ?></option>
               <option value="activo">Activo</option>
               <option value="finalizado">Finalizado</option>
               <option value="oculto">Ocultar</option>
            </select>
         </div>
      </div>
   </div><br>
</div>

<?php 
      } //-- Fin del if-else -> $echo
   }else {
      echo "<h3 class='text text-center text-warning'>Upss!! error inesperado de conexión con la Base de Datos.</h3>
      <h6 class='text text-center text-warning'>Por favor reporte este Error a su administrador.</h6>";
   } //-- Fin del if-else -> $echo
    
   mysqli_close($db_connect);

?>

