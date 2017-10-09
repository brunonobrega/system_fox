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
	<link rel="stylesheet" href="css/gsdk.css" />
	<link rel="stylesheet" href="css/style.css" />
	
	<!--     Font Awesome     -->
    <link  rel="stylesheet" href="fonts/font-awesome.css">
	<link  rel="stylesheet" href="fonts/verlag-book.css">
	
	<!-- Jquery -->
	<script src="js/jquery.min.js"></script>
	
  </head>

  <body>
	
	<!-- Navbar / Barra de Navegação -->
		
	<?php include_once "estrutura/navbar.php"; ?>
	
	<!-- Content / Conteúdo -->
	
	<div class="banner">
	<img src="assets/img/trabalhe-banner.jpg" alt="Trabalhe Conosco">
	</div>
	
	<div class="container">
		<div class="row">
		
			<h2> Trabalhe Conosco </h2>
			<div class="separator-container">
				<div class="separator line-separator"> ∎ </div>
			</div>
			
			<h3 class="sub-titulo"> Nos envie seu currículo através do email: <b>talentos@sistemfoxweb.com.br</b> para analisarmos seu perfil profissional
			e entraremos em contato com você o mais breve possível.</h3><br>
			<h4 style="text-align: center;">Ou envie uma mensagem através da página <a href="contato.php">contato</a></h4>
			
			<div class="container">
				<div class="row" id="btn-orcamento">
				  <a href="contato.php">
					<div class="col-md-offset-4 col-md-4">
						<button style="margin-bottom: 30px;" type="button" class="btn btn-info btn-lg btn-block">Enviar Mensagem</button>
					</div>
				  </a>
				</div>
			</div>
			
		</div>
	</div>
	
	<!-- Footer / Rodapé -->
	
	<footer>
	<?php include_once "estrutura/footer.php"; ?>
	</footer>
	
	
	<!-- Scripts -->

	<script src="js/bootstrap.min.js" type="text/javascript"></script>

  </body>
  
 </html>