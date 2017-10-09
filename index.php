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
	
	<section>
		<div id="carousel">
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
				  <img src="assets/img/banner_01.png" alt="Imagem 1">
				</div>
				<div class="item">
				  <img src="assets/img/banner_02.png" alt="Imagem 2">
				</div>
				<div class="item">
				  <img src="assets/img/banner_03.png" alt="Imagem 3">
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
		</div>
	</section> <!-- end carousel -->
	
	<div class="container">
		<div class="row">
			<div class="servicos">
			<h2> Serviços </h2>
			<div class="separator-container">
				<div class="separator line-separator"> ∎ </div>
			</div>
				<div class="col-md-4 serv">
				<i class="fa fa-laptop icon" aria-hidden="true"></i>
				<h3>Web Sites</h3>
				<p>Criação de Sites Profissionais Personalizados, Blogs, Catálogo Virtual, Portfólio,
				Hospedagem de Sites e Diversos Conteúdos.</p>
				</div>
				<div class="col-md-4 serv">
				<i class="fa fa-cog icon" aria-hidden="true"></i>
				<h3>Sistemas Web</h3>
				<p>Loja Virtual, Cadastro de Mercadoria, Cadastro de Clientes, Integração de Sistemas em um Unico Domínio. 
				Nós temos a solução para o seu problema! Temos uma equipe de profissionais especializados em desenvolvimento de sistemas web.</p>
				</div>
				<div class="col-md-4 serv">
				<i class="fa fa-lock icon" aria-hidden="true"></i>
				<h3>Segurança da Informação</h3>
				<p>Diagnóstico, Remediação e Manutenção da Segurança da Informação de sua empresa.
				Análise de Riscos e Vulnerabilidade, Documentação Técnica, Arquitetura de Segurança da Informação, Auditoria de Segurança e Conformidade.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row" id="btn-orcamento">
		  <a href="contato.php">
			<div class="col-md-offset-3 col-md-6">
				<button type="button" class="btn btn-danger btn-lg btn-block">Solicitar Orçamento Agora!</button>
			</div>
		  </a>
		</div>
	</div>
	
	<div class="separator-container" style="margin-top: 15px;">
        <div class="separator line-separator"> ∎ </div>
    </div>
	
	<div class="container">
	<blockquote>
	  <p>
	  <img src="assets/img/aspas.png" alt="" width="74" height="48" />
	  Work until you don't have to introduce yourself.
	  </p>
	  <footer style="padding-left:5.7em;">– Anônimo <cite title="">Internet</cite></footer>
	</blockquote>
	</div>
	
	<section class="row" id="clientes">
		<div class="clientes">
			<h2> Clientes </h2>
			<div class="separator-container">
				<div class="separator line-separator"> ∎ </div>
			</div>
			<div class="col-md-3 logos">
			<img src="assets/img/cocacola_logo.png" alt="" height="75" width="230" />		
			</div>
			<div class="col-md-3 logos">
			<img src="assets/img/outback_logo.png" alt="" height="80" width="220" />		
			</div>
			<div class="col-md-3 logos" style="margin-top: -1.5%;">
			<img src="assets/img/bonafont_logo.png" alt="" height="120" width="230" />		
			</div>
			<div class="col-md-3 logos">
			<img src="assets/img/dove_logo.png" alt="" height="85" width="170" />		
			</div>
		</div>
	</section>
	
	<div class="container">
		<div class="row">
			<h2> Portfólio </h2>
			<div class="separator-container">
				<div class="separator line-separator"> ∎ </div>
			</div>
			<div class="col-md-4">
				<div class="portfolio">
					<a href="http://www.bit2b.com.br/" target="_blank">
					<img src="assets/img/portfolio-01.png" alt="" width="350" />
					</a>
					<h3>Bit2B</h3>
					<a href="http://www.bit2b.com.br/" target="_blank">
					<button type="button" class="btn btn-primary btn-lg">Visitar</button>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="portfolio">
					<a href="http://www.bit2b.com.br/projetos/gift_box/" target="_blank">
					<img src="assets/img/portfolio-02.png" alt="" width="350" />
					</a>
					<h3>GiftBox</h3>
					<a href="http://www.bit2b.com.br/projetos/gift_box/" target="_blank">
					<button type="button" class="btn btn-primary btn-lg">Visitar</button>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="portfolio">
					<a href="http://www.revistatemposmodernos.com.br/" target="_blank">
					<img src="assets/img/portfolio-03.png" alt="" width="350" />
					</a>
					<h3>Tempos Modernos</h3>
					<a href="http://www.revistatemposmodernos.com.br/" target="_blank">
					<button type="button" class="btn btn-primary btn-lg">Visitar</button>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<h2> Equipe </h2>
			<div class="separator-container">
				<div class="separator line-separator"> ∎ </div>
			</div>
			<div class="col-md-3">
				<div class="equipe">
					<img src="assets/img/equipe_01.png" class="img-circle" alt="" width="170" />
					<h3>Alan Kerlis</h3>
					<p>Gestor de Segurança da Informação.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="equipe">
					<img src="assets/img/equipe_02.png" class="img-circle" alt="" width="170" />
					<h3>Alex Farias</h3>
					<p>Gestor de Desenvolvimento Back-End.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="equipe">
					<img src="assets/img/equipe_03.png" class="img-circle" alt="" width="170" />
					<h3>Alexandre Gomes</h3>
					<p>Gestor Administrativo e Finanças.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="equipe">
					<img src="assets/img/equipe_04.png" class="img-circle" alt="" width="170" />
					<h3>Bruno Nobrega</h3>
					<p>Gestor de Desenvolvimento Front-End.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.141930512117!2d-46.58147036030468!3d-23.583964026023306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5c1371effd07%3A0x6d071c630bdd4f16!2sUNINOVE+-+Vila+Prudente!5e0!3m2!1spt-BR!2sbr!4v1489099556271" width="100%" height="450" frameborder="0" style="border:0"></iframe>    
	</div>
	
	<!-- Footer / Rodapé -->
	
	<footer>
	<?php include_once "estrutura/footer.php"; ?>
	</footer>
	
	
	<!-- Scripts -->

	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	
	<!-- Slide -->
	<script>
	$('.carousel').carousel({
      interval: 4000
    });
	</script>
	
	<!-- Google Maps API -->
	
  </body>
  
 </html>