<?php
  include 'includes/db_connect.php'; 
  require 'includes/loguser.php';
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Control Escolar</title>
      <link rel="shortcut icon" href="img/naatikIcon.jpg" type="image/x-icon">

      <!-- Bootstrap -->
      <link href="css/ripples.min.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/roboto.min.css" rel="stylesheet">
      <link href="css/material.min.css" rel="stylesheet">
      <link href="css/jquery.dataTables.min.css" rel="stylesheet">
      <link href="css/fileinput.min.css" rel="stylesheet"> <!-- para cargar imagenes -->
      <link rel="stylesheet" href="css/icons.css">
      <link  href="css/style.css" rel="stylesheet">
      <link href="css/datepicker.css" rel="stylesheet">
      <link rel="stylesheet" href="css/calendar.css">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="row-fluid">
         <div class="navbar navbar-inverse dark text-primary-color hidden-xs visible-sm visible-md visible-lg">
            <h1 class="text text-center">INSTITUTO DE LENGUAS Y CULTURAS NA'ATIK</h1>
         </div>
      </div>

    <!-- Bloque que controla el acceso de los usuarios -->
      <?php
         switch ($_SESSION['user_type']) {
            case 'direccion': include('app/profiles/direccion/direccion.php');
              break; 
            case 'controlescolar': include('app/profiles/controlescolar/controlescolar.php');
              break;
            case 'maestro': include('app/profiles/maestro/profesor.php');
              break;
            case 'alumno': include('app/profiles/alumnos_tutores/estudiante.php');
              break;
         }
      ?>

     <footer class="well accent-color piep" id="footer">
       <div class="ubicacion row">
            <p class="text-center">
              <span class="name"> Instituto de Lenguas y Culturas Na'atik</span><br>
              <span>Tel. Escuela: </span>
              <span class="tel">983 267 1410</span><br>
              <span>Tel. Directora: </span>
              <span class="tel">983 700 7248</span><br>
              <span class="address"> Calle 57 entre 78 y 80</span>,
              <span class="colony">Col. Francisco May,</span>
              <span class="postal-code"> 77240</span>,
              <span class="locality"> Felipe Carrillo Puerto</span>,
              <span class="region"> Quintana Roo</span>,
              <span class="country-name"> México.</span>
            </p>
          </div>
     </footer>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="//code.jquery.com/jquery-1.10.2.min.js"></script> -->
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
   <script src="js/jquery.min.js"></script>
   <script src="js/ripples.min.js"></script>
   <script src="js/material.min.js"></script>
   <script src="js/datepicker.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/fileinput.min.js"></script>
   <script src="js/code.js"></script>
   <script src="js/jquery.dataTables.min.js"></script>
   <script src="js/ajaxFunctions.js"></script>
   <script src="js/search.js"></script>
   <script src="js/functions.js"></script>
   <script src="js/jquery-printme.js"></script>

   <script type="text/javascript" src="components/underscore/underscore-min.js"></script>
   <script type="text/javascript" src="components/jstimezonedetect/jstz.min.js"></script>
   <script type="text/javascript" src="js/language/es-MX.js"></script>
   <script type="text/javascript" src="js/calendar.js"></script>
   <script type="text/javascript" src="js/app.js"></script>
    
   <script>
      $(document).ready(function() {
        // This command is used to initialize some elements and make them work properly
        $('.dropdown-toggle').dropdown();
        $().dropdown('toggle');
        $.material.init();
        $('.collapse').collapse();
        $('#tablero').DataTable();
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
        });
      });
      $("#file-3").fileinput({
        showCaption: true,
        browseClass: "btn btn-info btn-sm btn-lg",
        fileType: "image"
      });
   </script>
  </body>
</html>