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
	
	<!-- Banner -->
	
	<div class="banner">
	<img src="assets/img/empresa-banner.jpg" alt="Empresa">
	</div>
	
	<!-- Content / Conteúdo -->
	
	<div class="container">
		<div class="row">
			<h2> Empresa </h2>
			<div class="separator-container">
				<div class="separator line-separator"> ∎ </div>
			</div>
			
			<div class="empresa">
				<h3 class="sub-titulo"> Conheça um pouco sobre a nossa história </h3>
				
				<p> Criada em 2005, a SystemFox Web é uma empresa voltada para clientes que desejam ampliar suas vendas de forma dinâmica, 
				moderna e inovadora com soluções para internet e web marketing.<br>
				Ao longo destes 11 anos temos conquistado a confiança e o respeito de inúmeras empresas de sucesso no mercado e 
				nos tornamos líderes no desenvolvimento de sites de vendas, sistemas online e web marketing. </p>
			</div>
			
			<div class="panel panel-default">
			
				<ul class="nav nav-tabs nav-justified">
				  <li role="presentation" class="active"><a data-toggle="tab" href="#visao">Visão</a></li>
				  <li role="presentation"><a data-toggle="tab" href="#missao">Missão</a></li>
				  <li role="presentation"><a data-toggle="tab" href="#valores">Valores</a></li>
				</ul>
				
					<div class="tab-content">
						<div id="visao" class="tab-pane fade in active">
						<div class="panel-body">Além dos compromissos Tecnológicos, também temos a preocupação com o meio ambiente, sustentabilidade,
						e desenvolvimento humano.</div>
						</div>
				
						<div id="missao" class="tab-pane fade">
						<div class="panel-body">A SystemFox Web tem a missão de a cada dia ajudar a solucionar diversos problemas da sociedade com tecnologia, 
						sustentabilidade e evolução.</div>
						</div>
				
						<div id="valores" class="tab-pane fade">
						<div class="panel-body">Valorizamos muito todos os nossos colaboradores diretos ou indiretos, assim como nossos clientes, pois 
						acreditamos que o maior bem de uma empresa são as pessoas envolvidas.</div>
						</div>
					</div>
			
			</div><!-- panel -->
			
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