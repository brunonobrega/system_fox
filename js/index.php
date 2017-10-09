<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />
	<meta name="author" content="U9 SystemFox Web" />
	<link rel="icon" href="imagens/favicon.ico">
	
	<title>SystemFox</title>
	
	<!-- Css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/gsdk.css" />
	
	<!-- Jquery -->
	<script src="js/jquery.min.js"></script>
	
  </head>

  <body>
	
	<!-- Navbar / Barra de Navegação -->
		
	<?php include_once "estrutura/navbar.php"; ?>
	
	<!-- Content / Conteúdo -->
	
	<div id="carousel">
    <!--    
            IMPORTANT - This carousel can have a special class for a smooth transition "gsdk-transition". Since javascript cannot be overwritten, if you want to use it, you can use the bootstrap.js or bootstrap.min.js from the GSDKit or you can open your bootstrap.js file, search for "emulateTransitionEnd(600)" and change it with "emulateTransitionEnd(1200)"     
            
    -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/img/carousel_blue.png" alt="Awesome Image">
        </div>
        <div class="item">
          <img src="assets/img/carousel_green.png" alt="Awesome Image">
        </div>
        <div class="item">
          <img src="assets/img/carousel_red.png" alt="Awesome Image">
        </div>
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="fa fa-angle-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="fa fa-angle-right"></span>
      </a>
    </div>
</div> <!-- end carousel -->
	
	<!-- Scripts -->

	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script>
	$('.carousel').carousel({
      interval: 4000
    });
	</script>
  </body>
  
 </html>