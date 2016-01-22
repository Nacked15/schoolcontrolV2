<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="img/naatikIcon.jpg" type="image/x-icon">
      <title>Control Escolar</title>

      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/roboto.min.css" rel="stylesheet">
      <link href="css/material.min.css" rel="stylesheet">
      <link href="css/ripples.min.css" rel="stylesheet">
      <link  href="css/style.css" rel="stylesheet">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="well bs-component dark-primary-color text-primary-color">
         <h1 class="text text-center hidden-xs visible-sm visible-md visible-lg">INSTITUTO DE LENGUAS Y CULTURAS NA'ATIK</h1>
         <h1 class="text text-center visible-xs hidden-sm hidden-md hidden-lg mn">INSTITUTO NA'ATIK</h1>
      </div> 
      <div class="container-fluid inicio">
         <div class="row-fluid">
            <div class="hidden-xs col-sm-2 col-md-3 col-lg-3"></div>
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-5">
               <div class="well logBox">
                  <div class="row bar">
                     <div class="col-xs-10 col-sm-3 col-md-3"><img src="img/naatikIcon.jpg" height="100" width="100" alt="icon"></div>
                     <div class="hidden-xs col-sm-8 col-md-8"><h2 class="text-center text-primary-color"><strong>CONTROL ESCOLAR</strong></h2></div>
                     <div class="col-xs-2 col-sm-1 col-md-1"><a href="#" class="btn btn-fab btn-info mdi-social-person" style="margin-top:23px; position:static;"></a> </div>
                  </div>
                  <form action="main.php" method="post" class="form-horizontal">
                     <div class="row">
                        <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2"></div>
                        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
                           <div class="form-group">
                              <label class="">Tipo de Usuario: </label>
                              <div class="input-group log">
                                 <select class="form-control" name="categoria">
                                    <option value="1">Dirección</option>
                                    <option value="3">Control Escolar</option>
                                    <option value="2">Maestro(a)</option>
                                 </select>
                                 <span class="input-group-addon loginIcons"><i class="mdi-action-view-list"></i></span>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="">Usuario: </label>
                              <div class="input-group log">
                                 <input type="text" name="usuario" class="form-control" autocomplete="off" placeholder="username">
                                 <span class="input-group-addon loginIcons"><i class="mdi-action-account-box"></i></span>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="">Contraseña: </label>
                              <div class="input-group log">
                                 <input type="password" class="form-control" name="contrasena" autocomplete="off" placeholder="password">
                                 <span class="input-group-addon loginIcons"><i class="mdi-action-lock"></i></span>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2"></div>
                     </div>
                     <div class="row">
                        <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4"></div>
                        <div class="col-xs-6 col-sm-4 col-md-7 col-lg-3"><input type="submit" class="btn btn-primary btn-raised " value="Entrar"></div>
                        <div class="col-xs-3 col-sm-4 col-md-5 col-lg-5"></div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="hidden-xs col-sm-2 col-md-3 col-lg-4"></div>
         </div>
      </div><br><br><br>

      <footer>
         <div class="well bs-component accent-color">
            <div class="row">
            <div class="hidden-xs hidden-sm col-md-2 col-lg-2"></div>
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <address class="text-center">
                        <span class="name"> Instituto de Lenguas y Culturas Na'atik</span><br>
                        <span class="address"> Calle 57 entre 78 y 80</span>,
                        <span class="colony">Col. Francisco May</span>
                        <span class="postal-code"> 77240</span>, <br>
                        <span class="locality"> Felipe Carrillo Puerto</span>,
                        <span class="region"> Quintana Roo</span>,
                        <span class="country-name"> México</span>
                        <span class="visible-xs hidden-sm hidden-md hidden-lg">Tel.: </span>
                        <span class="tel visible-xs hidden-sm hidden-md hidden-lg">983 700 7248</span>
                    </address>
               </div>
               <div class="hidden-xs col-sm-6 col-md-4 col-lg-4">
                     <address class="text-center">
                        <span>Tel.: </span>
                        <span class="tel">983 700 7248</span><br>
                        <span>Web: </span>
                        <span class="email"><a href="http://www.naatikmexico.com">www.naatikmexico.com</a></span><br>
                        <span class="mail">facebook/@nacked15ly</span>
                     </address>
               </div>
               <div class="hidden-xs hidden-sm col-md-2 col-lg-2"></div>
            </div>
         </div>
      </footer>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/jquery.min.js"></script>
      <script src="js/ripples.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/material.min.js"></script>
      <script src="js/code.js"></script>
      <script src="js/ajaxFunctions.js"></script>
       
      <script>
         $(document).ready(function() {
           // This command is used to initialize some elements and make them work properly
           $.material.init();
           $('.dropdown-toggle').dropdown();
         });
      </script>
   </body>
</html>   
      
      