<?php include_once('includes/database.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body onload="initialize()">
<div class="row">
<div class="col-md-3">
<h4 id="texto">Arrastrar aquí</h4>
<section id="cajaImagenes">
<h4>Arrastra los iconos para encontrar tus lugares en la ciudad</h4>
    <!-- Aquí asigno el tipo de la imagen a arrastra, es decir el tipo del lugar -->
    <img id="Restaurante" src="img/restaurante.png">
    <img id="Bar" src="img/bar.png">
    <img id="Discoteca" src="img/dico.png">
  </section>
   <section id="cajaSoltar">
    <canvas id="lienzo" height="340"></canvas>
  </section>
  
</div>
<div class="col-md-9">
  <div id="map_canvas" style="height:329px"></div>
</div>
 
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script src="js/vendor/bootstrap.min.js"></script>

  <script src="js/main.js"></script>

  <script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCaab8OrK_KEDS9LQOaEpxRIKew75pzDMw&sensor=true">
</script>

</body>
</html>
